<?php

namespace Influence360\Admin\Http\Controllers\BillFiles;

use Influence360\Admin\Http\Controllers\Controller;
use Influence360\BillFiles\Repositories\BillFileRepository;
use Illuminate\Http\Request;
use Influence360\Admin\DataGrids\BillFiles\BillFileDataGrid;
use Illuminate\Support\Facades\Log;

class BillFileController extends Controller
{
    protected $billFileRepository;

    public function __construct(BillFileRepository $billFileRepository)
    {
        $this->billFileRepository = $billFileRepository;
        request()->request->add(['entity_type' => 'bill_files']);
    }

    public function index()
    {
        if (request()->ajax()) {
            return app(BillFileDataGrid::class)->toJson();
        }

        return view('admin::bill-files.index');
    }

    public function show($id)
    {
        Log::info('BillFileController show method called with ID: ' . $id);
        $billFile = $this->billFileRepository->findOrFail($id);
        $activities = $billFile->activities()->orderBy('created_at', 'desc')->get();
        return view('admin::bill-files.view', compact('billFile', 'activities'));
    }

    public function create()
    {
        return view('admin::bill-files.create');
    }

    public function store(Request $request)
    {
        $billFile = $this->billFileRepository->create($request->all());

        session()->flash('success', trans('admin::app.bill-files.create-success'));

        return redirect()->route('admin.bill-files.index');
    }

    public function edit($id)
    {
        $billFile = $this->billFileRepository->findOrFail($id);

        return view('admin::bill-files.edit', compact('billFile'));
    }

    public function update(Request $request, $id)
    {
        $billFile = $this->billFileRepository->update($request->all(), $id);

        session()->flash('success', trans('admin::app.bill-files.update-success'));

        return redirect()->route('admin.bill-files.index');
    }

    public function search()
    {
        $results = $this->billFileRepository->search(request()->input('query'));

        return response()->json($results);
    }

    public function destroy($id)
    {
        try {
            $this->billFileRepository->delete($id);

            return response()->json([
                'message' => trans('admin::app.bill-files.delete-success'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => trans('admin::app.bill-files.delete-failed'),
            ], 500);
        }
    }

    public function massDestroy(Request $request)
    {
        $billFileIds = $request->input('indices');

        foreach ($billFileIds as $billFileId) {
            $this->billFileRepository->delete($billFileId);
        }

        return response()->json([
            'message' => trans('admin::app.bill-files.mass-delete-success'),
        ]);
    }
}
