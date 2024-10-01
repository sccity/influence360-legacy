<?php

use Influence360\DataGrid\DataGrid;
use Influence360\DataGrid\Exceptions\InvalidDataGridException;

if (! function_exists('datagrid')) {
    /**
     * Datagrid helper.
     */
    function datagrid(string $datagridClass): DataGrid
    {
        if (! is_subclass_of($datagridClass, DataGrid::class)) {
            throw new InvalidDataGridException("'{$datagridClass}' must extend the '".DataGrid::class."' class.");
        }

        return app($datagridClass);
    }
}
