<?php

namespace Influence360\Automation\Repositories;

use Influence360\Automation\Contracts\Workflow;
use Influence360\Core\Eloquent\Repository;

class WorkflowRepository extends Repository
{
    /**
     * Specify Model class name.
     */
    public function model(): string
    {
        return Workflow::class;
    }
}
