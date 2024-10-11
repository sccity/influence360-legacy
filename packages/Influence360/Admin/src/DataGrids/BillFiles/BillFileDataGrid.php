<?php

namespace Influence360\Admin\DataGrids\BillFiles;

use Illuminate\Support\Facades\DB;
use Influence360\DataGrid\DataGrid;

class BillFileDataGrid extends DataGrid
{
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('bill_files')
            ->addSelect('bill_files.id', 'bill_files.billname', 'bill_files.created_at');

        $this->addFilter('id', 'bill_files.id');
        $this->addFilter('billname', 'bill_files.billname');
        $this->addFilter('created_at', 'bill_files.created_at');

        return $queryBuilder;
    }

    public function prepareColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('admin::app.bill-files.id'),
            'type'       => 'number',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'billname',
            'label'      => trans('admin::app.bill-files.billname'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'created_at',
            'label'      => trans('admin::app.bill-files.created-at'),
            'type'       => 'datetime',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);
    }

    public function prepareActions()
    {
        $this->addAction([
            'title'  => trans('admin::app.bill-files.edit'),
            'method' => 'GET',
            'route'  => 'admin.bill-files.edit',
            'icon'   => 'icon pencil',
        ]);

        $this->addAction([
            'title'        => trans('admin::app.bill-files.delete'),
            'method'       => 'POST',
            'route'        => 'admin.bill-files.delete',
            'confirm_text' => trans('admin::app.bill-files.delete-confirm'),
            'icon'         => 'icon trash',
        ]);
    }

    public function prepareMassActions()
    {
        $this->addMassAction([
            'type'   => 'delete',
            'label'  => trans('admin::app.bill-files.delete'),
            'action' => route('admin.bill-files.mass-delete'),
            'method' => 'POST',
        ]);
    }
}
