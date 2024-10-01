<?php

namespace Influence360\WebForm\Repositories;

use Influence360\Core\Eloquent\Repository;

class WebFormAttributeRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Influence360\WebForm\Contracts\WebFormAttribute';
    }
}
