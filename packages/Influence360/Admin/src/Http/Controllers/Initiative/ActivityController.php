<?php

namespace Influence360\Admin\Http\Controllers\Initiative;

use Illuminate\Support\Facades\DB;
use Influence360\Activity\Repositories\ActivityRepository;
use Influence360\Admin\Http\Controllers\Controller;
use Influence360\Admin\Http\Resources\ActivityResource;
use Influence360\Email\Repositories\AttachmentRepository;
use Influence360\Email\Repositories\EmailRepository;

class ActivityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected ActivityRepository $activityRepository,
        protected EmailRepository $emailRepository,
        protected AttachmentRepository $attachmentRepository
    ) {}

    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $activities = $this->activityRepository
            ->leftJoin('initiative_activities', 'activities.id', '=', 'initiative_activities.activity_id')
            ->where('initiative_activities.initiative_id', $id)
            ->get();

        return ActivityResource::collection($this->concatEmailAsActivities($id, $activities));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function concatEmailAsActivities($initiativeId, $activities)
    {
        $emails = DB::table('emails as child')
            ->select('child.*')
            ->join('emails as parent', 'child.parent_id', '=', 'parent.id')
            ->where('parent.initiative_id', $initiativeId)
            ->union(DB::table('emails as parent')->where('parent.initiative_id', $initiativeId))
            ->get();

        return $activities->concat($emails->map(function ($email) {
            return (object) [
                'id'            => $email->id,
                'parent_id'     => $email->parent_id,
                'title'         => $email->subject,
                'type'          => 'email',
                'is_done'       => 1,
                'comment'       => $email->reply,
                'schedule_from' => null,
                'schedule_to'   => null,
                'user'          => auth()->guard('user')->user(),
                'participants'  => [],
                'location'      => null,
                'additional'    => [
                    'folders' => json_decode($email->folders),
                    'from'    => json_decode($email->from),
                    'to'      => json_decode($email->reply_to),
                    'cc'      => json_decode($email->cc),
                    'bcc'     => json_decode($email->bcc),
                ],
                'files'         => $this->attachmentRepository->findWhere(['email_id' => $email->id])->map(function ($attachment) {
                    return (object) [
                        'id'         => $attachment->id,
                        'name'       => $attachment->name,
                        'path'       => $attachment->path,
                        'created_at' => $attachment->created_at,
                        'updated_at' => $attachment->updated_at,
                    ];
                }),
                'created_at'    => $email->created_at,
                'updated_at'    => $email->updated_at,
            ];
        }))->sortByDesc('id')->sortByDesc('created_at');
    }
}