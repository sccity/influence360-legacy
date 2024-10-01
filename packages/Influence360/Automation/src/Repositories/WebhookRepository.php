<?php

namespace Influence360\Automation\Repositories;

use Influence360\Automation\Contracts\Webhook;
use Influence360\Core\Eloquent\Repository;

class WebhookRepository extends Repository
{
    /**
     * Specify Model class name.
     */
    public function model(): string
    {
        return Webhook::class;
    }
}
