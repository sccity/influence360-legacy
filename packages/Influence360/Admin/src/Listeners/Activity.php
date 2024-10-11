<?php

namespace Influence360\Admin\Listeners;

use Influence360\Activity\Contracts\Activity as ActivityContract;
use Influence360\Contact\Repositories\PersonRepository;
use Influence360\Initiative\Repositories\InitiativeRepository;
use Influence360\BillFiles\Repositories\BillFileRepository;

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
        protected BillFileRepository $billFileRepository,
    ) {}

    /**
     * Link activity to initiative, person, or bill file.
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

        // Add this new section to handle bill files
        if (request()->input('bill_file_ids')) {
            $billFileIds = request()->input('bill_file_ids');
            if (!is_array($billFileIds)) {
                $billFileIds = [$billFileIds];
            }

            foreach ($billFileIds as $billFileId) {
                $billFile = $this->billFileRepository->find($billFileId);
                if ($billFile && ! $billFile->activities->contains($activity->id)) {
                    $billFile->activities()->attach($activity->id);
                }
            }
        }
    }
}
