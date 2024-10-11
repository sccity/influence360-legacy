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
            Log::info('Checking if bill_files table exists');
            if (!Schema::hasTable('bill_files')) {
                Log::error('bill_files table does not exist');
                throw new \Exception('bill_files table does not exist');
            }
            Log::info('bill_files table exists');

            Log::info('Creating query builder');
            $queryBuilder = DB::table('bill_files')
                ->addSelect('bill_files.id', 'bill_files.billid', 'bill_files.billname', 'bill_files.year', 'bill_files.session', 'bill_files.sponsor', 'bill_files.status', 'bill_files.created_at');
            Log::info('Query builder created');

            Log::info('Adding filters');
            $this->addFilter('id', 'bill_files.id');
            $this->addFilter('billid', 'bill_files.billid');
            $this->addFilter('billname', 'bill_files.billname');
            $this->addFilter('year', 'bill_files.year');
            $this->addFilter('session', 'bill_files.session');
            $this->addFilter('sponsor', 'bill_files.sponsor');
            $this->addFilter('status', 'bill_files.status');
            $this->addFilter('created_at', 'bill_files.created_at');
            Log::info('Filters added');

            Log::info('Returning query builder');
            return $queryBuilder;
        } catch (\Exception $e) {
            Log::error('Error in BillFileDataGrid prepareQueryBuilder: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            throw $e;
        }
    }

    public function prepareColumns()
    {
        try {
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
        } catch (\Exception $e) {
            Log::error('Error in BillFileDataGrid prepareColumns: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            throw $e;
        }
    }

    public function prepareActions()
    {
        Log::info('Starting prepareActions in BillFileDataGrid');
        
        try {
            Log::info('Attempting to add View action');
            $this->addAction([
                'title'  => 'View',
                'method' => 'GET',
                'route'  => 'admin.bill-files.view',
                'icon'   => 'icon-view',
                'url'    => function ($row) {
                    return route('admin.bill-files.view', $row->id);
                },
            ]);
            Log::info('View action added successfully');
            
            // Add more actions here if needed
            
            Log::info('All actions added successfully');
        } catch (\Exception $e) {
            Log::error('Error in prepareActions: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            throw $e; // Re-throw the exception to stop execution
        }
    }

    public function prepareMassActions(): void
    {
        try {
            $this->addMassAction([
                'index'  => 'mass_delete',
                'icon'   => 'icon-trash',
                'title'  => trans('admin::app.bill-files.delete'),
                'method' => 'POST',
                'url'    => route('admin.bill-files.mass-delete'),
            ]);
        } catch (\Exception $e) {
            Log::error('Error in BillFileDataGrid prepareMassActions: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            throw $e;
        }
    }

    // If there's a toJson method in this class, add logging there as well
    public function toJson()
    {
        try {
            Log::info('BillFileDataGrid toJson started');
            Log::info('Preparing query builder');
            $this->prepareQueryBuilder();
            Log::info('Query builder prepared');
            
            Log::info('Preparing columns');
            $this->prepareColumns();
            Log::info('Columns prepared');
            
            Log::info('Preparing actions');
            $this->prepareActions();
            Log::info('Actions prepared');
            
            Log::info('Preparing mass actions');
            $this->prepareMassActions();
            Log::info('Mass actions prepared');
            
            $result = parent::toJson();
            Log::info('BillFileDataGrid toJson completed');
            return $result;
        } catch (\Exception $e) {
            Log::error('Error in BillFileDataGrid toJson: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            throw $e;
        }
    }
}
