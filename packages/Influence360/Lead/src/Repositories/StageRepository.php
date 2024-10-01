<?php

namespace Influence360\Lead\Repositories;

use Influence360\Core\Eloquent\Repository;

class StageRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Influence360\Lead\Contracts\Stage';
    }
}
