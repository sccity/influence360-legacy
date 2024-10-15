<?php

namespace Influence360\Admin\DataGrids\BillFiles;

use Illuminate\Support\Facades\DB;
use Influence360\DataGrid\DataGrid;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class BillFileDataGrid extends DataGrid
{
    public function prepareQueryBuilder()
    {
        try {
            Log::info('Creating query builder');
            $queryBuilder = DB::table('bill_files')
                ->select('id', 'billid', 'billname', 'year', 'session', 'sponsor', 'status')
                ->distinct(); // Add this to ensure no duplicates
            Log::info('Query builder created');

            return $queryBuilder;
        } catch (\Exception $e) {
            Log::error('Error in BillFileDataGrid prepareQueryBuilder: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            throw $e;
        }
    }

    public function prepareColumns()
    {
        $columns = [
            'billid', 'billname', 'year', 'session', 'sponsor', 'status'
        ];

        foreach ($columns as $column) {
            $this->addColumn([
                'index'      => $column,
                'label'      => trans("admin::app.bill-files.index.datagrid.$column"),
                'type'       => 'string',
                'searchable' => true,
                'sortable'   => true,
                'filterable' => true,
            ]);
        }
    }

    public function prepareActions()
    {
        $this->addAction([
            'title'  => 'View',
            'method' => 'GET',
            'route'  => 'admin.bill-files.view',
            'icon'   => 'icon-eye',
            'url'    => function ($row) {
                return route('admin.bill-files.view', ['id' => $row->id]);
            },
        ]);
    }
}
