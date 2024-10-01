<?php

namespace Influence360\Attribute\Repositories;

use Influence360\Core\Eloquent\Repository;

class AttributeOptionRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Influence360\Attribute\Contracts\AttributeOption';
    }
}
