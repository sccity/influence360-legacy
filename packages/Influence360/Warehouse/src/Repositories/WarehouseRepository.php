<?php

namespace Influence360\Warehouse\Repositories;

use Illuminate\Container\Container;
use Influence360\Attribute\Repositories\AttributeRepository;
use Influence360\Attribute\Repositories\AttributeValueRepository;
use Influence360\Core\Eloquent\Repository;
use Influence360\Warehouse\Contracts\Warehouse;

class WarehouseRepository extends Repository
{
    /**
     * Searchable fields.
     */
    protected $fieldSearchable = [
        'name',
        'contact_name',
        'contact_emails',
        'contact_numbers',
        'contact_address',
    ];

    /**
     * Create a new repository instance.
     *
     * @return void
     */
    public function __construct(
        protected AttributeRepository $attributeRepository,
        protected AttributeValueRepository $attributeValueRepository,
        Container $container
    ) {
        parent::__construct($container);
    }

    /**
     * Specify model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return Warehouse::class;
    }

    /**
     * Create.
     *
     * @return \Influence360\Warehouse\Contracts\Warehouse
     */
    public function create(array $data)
    {
        $warehouse = parent::create($data);

        $this->attributeValueRepository->save(array_merge($data, [
            'entity_id' => $warehouse->id,
        ]));

        return $warehouse;
    }

    /**
     * Update.
     *
     * @param  int  $id
     * @param  array  $attribute
     * @return \Influence360\Warehouse\Contracts\Warehouse
     */
    public function update(array $data, $id, $attributes = [])
    {
        $warehouse = parent::update($data, $id);

        /**
         * If attributes are provided then only save the provided attributes and return.
         */
        if (! empty($attributes)) {
            $conditions = ['entity_type' => $data['entity_type']];

            if (isset($data['quick_add'])) {
                $conditions['quick_add'] = 1;
            }

            $attributes = $this->attributeRepository->where($conditions)
                ->whereIn('code', $attributes)
                ->get();

            $this->attributeValueRepository->save(array_merge($data, [
                'entity_id' => $warehouse->id,
            ]), $attributes);

            return $warehouse;
        }

        $this->attributeValueRepository->save(array_merge($data, [
            'entity_id' => $warehouse->id,
        ]));

        return $warehouse;
    }
}
