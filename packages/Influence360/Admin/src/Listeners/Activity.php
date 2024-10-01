<?php

namespace Influence360\Admin\Listeners;

use Influence360\Activity\Contracts\Activity as ActivityContract;
use Influence360\Contact\Repositories\PersonRepository;
use Influence360\Initiative\Repositories\InitiativeRepository;
use Influence360\Warehouse\Repositories\WarehouseRepository;

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
        protected WarehouseRepository $warehouseRepository
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
        } elseif (request()->input('warehouse_id')) {
            $warehouse = $this->warehouseRepository->find(request()->input('warehouse_id'));

            if (! $warehouse->activities->contains($activity->id)) {
                $warehouse->activities()->attach($activity->id);
            }
        } elseif (request()->input('product_id')) {
            $product = $this->productRepository->find(request()->input('product_id'));

            if (! $product->activities->contains($activity->id)) {
                $product->activities()->attach($activity->id);
            }
        }
    }
}
