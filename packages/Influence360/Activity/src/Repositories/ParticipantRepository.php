<?php

namespace Influence360\Activity\Repositories;

use Influence360\Core\Eloquent\Repository;

class ParticipantRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Influence360\Activity\Contracts\Participant';
    }
}
