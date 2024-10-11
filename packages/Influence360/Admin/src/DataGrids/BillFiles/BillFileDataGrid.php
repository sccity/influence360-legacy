<?php

namespace Influence360\Admin\DataGrids\BillFiles;

use Illuminate\Support\Facades\DB;
use Influence360\DataGrid\DataGrid;

class BillFileDataGrid extends DataGrid
{
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('bill_files')
            ->addSelect('bill_files.id', 'bill_files.billid', 'bill_files.billname', 'bill_files.year', 'bill_files.session', 'bill_files.sponsor', 'bill_files.status', 'bill_files.created_at');

        $this->addFilter('id', 'bill_files.id');
        $this->addFilter('billid', 'bill_files.billid');
        $this->addFilter('billname', 'bill_files.billname');
        $this->addFilter('year', 'bill_files.year');
        $this->addFilter('session', 'bill_files.session');
        $this->addFilter('sponsor', 'bill_files.sponsor');
        $this->addFilter('status', 'bill_files.status');
        $this->addFilter('created_at', 'bill_files.created_at');

        return $queryBuilder;
    }

    public function prepareColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('admin::app.bill-files.id'),
            'type'       => 'integer',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'billid',
            'label'      => trans('admin::app.bill-files.billid'),
            'type'       => 'string',
            'searchable' => true,
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
            'index'      => 'year',
            'label'      => trans('admin::app.bill-files.year'),
            'type'       => 'integer',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'session',
            'label'      => trans('admin::app.bill-files.session'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'sponsor',
            'label'      => trans('admin::app.bill-files.sponsor'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'status',
            'label'      => trans('admin::app.bill-files.status'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'created_at',
            'label'      => trans('admin::app.bill-files.created-at'),
            'type'       => 'datetime',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);
    }

    public function prepareActions(): void
    {
        $this->addAction([
            'index'  => 'view',  // Add this line
            'icon'   => 'icon-eye',
            'title'  => trans('admin::app.bill-files.view'),
            'method' => 'GET',
            'url'    => function ($row) {
                return route('admin.bill-files.view', $row->id);
            },
        ]);

        $this->addAction([
            'index'  => 'edit',  // Add this line
            'icon'   => 'icon-pencil',
            'title'  => trans('admin::app.bill-files.edit'),
            'method' => 'GET',
            'url'    => function ($row) {
                return route('admin.bill-files.edit', $row->id);
            },
        ]);

        $this->addAction([
            'index'  => 'delete',  // Add this line
            'icon'   => 'icon-trash',
            'title'  => trans('admin::app.bill-files.delete'),
            'method' => 'DELETE',
            'url'    => function ($row) {
                return route('admin.bill-files.delete', $row->id);
            },
        ]);
    }

    public function prepareMassActions(): void
    {
        $this->addMassAction([
            'index'  => 'mass_delete',  // Add this line
            'icon'   => 'icon-trash',
            'title'  => trans('admin::app.bill-files.delete'),
            'method' => 'POST',
            'url'    => route('admin.bill-files.mass-delete'),
        ]);
    }
}
