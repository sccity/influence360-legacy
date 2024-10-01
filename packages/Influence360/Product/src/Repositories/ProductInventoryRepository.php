<?php

namespace Influence360\Product\Repositories;

use Influence360\Core\Eloquent\Repository;

class ProductInventoryRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Influence360\Product\Contracts\ProductInventory';
    }
}
