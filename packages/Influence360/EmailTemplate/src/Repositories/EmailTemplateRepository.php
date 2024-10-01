<?php

namespace Influence360\EmailTemplate\Repositories;

use Influence360\Core\Eloquent\Repository;

class EmailTemplateRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Influence360\EmailTemplate\Contracts\EmailTemplate';
    }
}
