<?php

namespace Influence360\Admin\Listeners;

use Influence360\Activity\Contracts\Activity as ActivityContract;
use Influence360\Contact\Repositories\PersonRepository;
use Influence360\Initiative\Repositories\InitiativeRepository;

class Activity
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected InitiativeRepository $initiativeRepository,
        protected PersonRepository $personRepository,
    ) {}

    /**
     * Link activity to initiative or person.
     */
    public function afterUpdateOrCreate(ActivityContract $activity): void
    {
        if (request()->input('initiative_id')) {
            $initiative = $this->initiativeRepository->find(request()->input('initiative_id'));

            if (! $initiative->activities->contains($activity->id)) {
                $initiative->activities()->attach($activity->id);
            }
        } elseif (request()->input('person_id')) {
            $person = $this->personRepository->find(request()->input('person_id'));

            if (! $person->activities->contains($activity->id)) {
                $person->activities()->attach($activity->id);
            }
        }
    }
}
