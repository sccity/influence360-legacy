<?php

namespace Influence360\BillFiles\Repositories;

use Illuminate\Container\Container;
use Influence360\Attribute\Repositories\AttributeRepository;
use Influence360\Attribute\Repositories\AttributeValueRepository;
use Influence360\BillFiles\Models\BillFile;
use Influence360\Core\Eloquent\Repository;

class BillFileRepository extends Repository
{
    /**
     * Searchable fields
     */
    protected $fieldSearchable = [
        'billid',
        'billname',
        'year',
        'session',
        'status',
        'sponsor',
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
        return BillFile::class;
    }

    /**
     * Create.
     *
     * @return \Influence360\BillFiles\Models\BillFile
     */
    public function create(array $data)
    {
        $billFile = parent::create($data);

        $this->attributeValueRepository->save(array_merge($data, [
            'entity_id' => $billFile->id,
        ]));

        return $billFile;
    }

    /**
     * @param  int  $id
     * @param  array  $attribute
     * @return \Influence360\BillFiles\Models\BillFile
     */
    public function update(array $data, $id, $attributes = [])
    {
        $billFile = parent::update($data, $id);

        if (! empty($attributes)) {
            $conditions = ['entity_type' => $data['entity_type']];

            $attributes = $this->attributeRepository->where($conditions)
                ->whereIn('code', $attributes)
                ->get();

            $this->attributeValueRepository->save(array_merge($data, [
                'entity_id' => $billFile->id,
            ]), $attributes);

            return $billFile;
        }

        $this->attributeValueRepository->save(array_merge($data, [
            'entity_id' => $billFile->id,
        ]));

        return $billFile;
    }
}
