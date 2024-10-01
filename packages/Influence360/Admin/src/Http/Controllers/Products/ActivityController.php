<?php

namespace Influence360\Admin\Http\Controllers\Products;

use Influence360\Activity\Repositories\ActivityRepository;
use Influence360\Admin\Http\Controllers\Controller;
use Influence360\Admin\Http\Resources\ActivityResource;
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
        protected EmailRepository $emailRepository
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
            ->leftJoin('product_activities', 'activities.id', '=', 'product_activities.activity_id')
            ->where('product_activities.product_id', $id)
            ->get();

        return ActivityResource::collection($this->concatEmail($activities));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function concatEmail($activities)
    {
        return $activities->sortByDesc('id')->sortByDesc('created_at');
    }
}
