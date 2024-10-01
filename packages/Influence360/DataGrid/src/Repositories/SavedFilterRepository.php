<?php

namespace Influence360\DataGrid\Repositories;

use Influence360\Core\Eloquent\Repository;
use Influence360\DataGrid\Contracts\SavedFilter;

class SavedFilterRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return SavedFilter::class;
    }
}
