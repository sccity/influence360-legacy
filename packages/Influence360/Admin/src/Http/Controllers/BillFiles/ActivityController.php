<?php

namespace Influence360\Admin\Http\Controllers\BillFiles;

use Influence360\Activity\Repositories\ActivityRepository;
use Influence360\Admin\Http\Controllers\Controller;
use Influence360\Admin\Http\Resources\ActivityResource;
use Influence360\BillFiles\Repositories\BillFileRepository;
use Influence360\Email\Repositories\EmailRepository;
use Influence360\BillFiles\Models\BillFileProxy;
use Influence360\Attribute\Repositories\AttributeRepository;

class ActivityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected ActivityRepository $activityRepository,
        protected BillFileRepository $billFileRepository,
        protected EmailRepository $emailRepository,
        protected AttributeRepository $attributeRepository
    ) {}

    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $billFile = BillFileProxy::findOrFail($id);
        $activities = $billFile->activities()->with(['user', 'files', 'participants', 'billFiles'])->get();

        $customAttributes = $this->attributeRepository->where('entity_type', 'bill_files')->get();

        foreach ($activities as $activity) {
            foreach ($customAttributes as $attribute) {
                $activity->{$attribute->code} = $activity->getCustomAttributeValue($attribute);
            }
        }

        return ActivityResource::collection($this->sortActivities($activities));
    }

    protected function sortActivities($activities)
    {
        return $activities->sortByDesc('id')->sortByDesc('created_at');
    }
}
