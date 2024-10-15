<?php

namespace Influence360\Admin\Http\Controllers\BillFiles;

use Influence360\Admin\Http\Controllers\Controller;
use Influence360\BillFiles\Repositories\BillFileRepository;
use Influence360\Activity\Repositories\ActivityRepository;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    protected $billFileRepository;
    protected $activityRepository;

    public function __construct(
        BillFileRepository $billFileRepository,
        ActivityRepository $activityRepository
    ) {
        $this->billFileRepository = $billFileRepository;
        $this->activityRepository = $activityRepository;
    }

    public function index($id)
    {
        \Log::info("Fetching activities for bill file: " . $id);
        $billFile = $this->billFileRepository->findOrFail($id);
        $activities = $billFile->activities()->orderBy('created_at', 'desc')->get();
        \Log::info("Activities found: " . $activities->count());
        return response()->json($activities);
    }

    public function store(Request $request, $id)
    {
        try {
            \Log::info('Attempting to create activity for bill file: ' . $id);
            \Log::info('Request data: ' . json_encode($request->all()));

            $billFile = $this->billFileRepository->findOrFail($id);

            $activityData = array_merge($request->all(), [
                'parent_type' => get_class($billFile),
                'parent_id' => $billFile->id,
                'user_id' => auth()->id(),
            ]);

            \Log::info('Activity data: ' . json_encode($activityData));

            $activity = $this->activityRepository->create($activityData);

            \Log::info('Activity created successfully: ' . $activity->id);

            
            return response()->json($activity, 201);
        } catch (\Exception $e) {
            \Log::error('Error creating activity for bill file: ' . $e->getMessage());
            \Log::error('Stack trace: ' . $e->getTraceAsString());
            return response()->json(['error' => 'Failed to create activity: ' . $e->getMessage()], 500);
        }
    }
}
