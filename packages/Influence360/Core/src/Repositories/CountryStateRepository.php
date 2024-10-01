<?php

namespace Influence360\Core\Repositories;

use Prettus\Repository\Traits\CacheableRepository;
use Influence360\Core\Eloquent\Repository;

class CountryStateRepository extends Repository
{
    use CacheableRepository;

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Influence360\Core\Contracts\CountryState';
    }
}
