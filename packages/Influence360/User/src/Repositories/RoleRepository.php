<?php

namespace Influence360\User\Repositories;

use Influence360\Core\Eloquent\Repository;

class RoleRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Influence360\User\Contracts\Role';
    }
}
