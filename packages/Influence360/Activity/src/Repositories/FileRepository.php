<?php

namespace Influence360\Activity\Repositories;

use Influence360\Core\Eloquent\Repository;

class FileRepository extends Repository
{
    /**
     * Specify model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return \Influence360\Activity\Contracts\File::class;
    }
}
