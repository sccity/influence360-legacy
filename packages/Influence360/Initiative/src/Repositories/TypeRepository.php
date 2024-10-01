<?php

namespace Influence360\Initiative\Repositories;

use Influence360\Core\Eloquent\Repository;

class TypeRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Influence360\Initiative\Contracts\Type';
    }
}