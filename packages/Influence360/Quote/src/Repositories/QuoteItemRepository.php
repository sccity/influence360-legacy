<?php

namespace Influence360\Quote\Repositories;

use Illuminate\Container\Container;
use Influence360\Core\Eloquent\Repository;
use Influence360\Product\Repositories\ProductRepository;

class QuoteItemRepository extends Repository
{
    /**
     * Create a new repository instance.
     *
     * @return void
     */
    public function __construct(
        protected ProductRepository $productRepository,
        Container $container
    ) {
        parent::__construct($container);
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Influence360\Quote\Contracts\QuoteItem';
    }

    /**
     * @return \Influence360\Quote\Contracts\QuoteItem
     */
    public function create(array $data)
    {
        $product = $this->productRepository->findOrFail($data['product_id']);

        $quoteItem = parent::create(array_merge($data, [
            'sku'  => $product->sku,
            'name' => $product->name,
        ]));

        return $quoteItem;
    }

    /**
     * @param  int  $id
     * @param  string  $attribute
     * @return \Influence360\Quote\Contracts\QuoteItem
     */
    public function update(array $data, $id, $attribute = 'id')
    {
        $product = $this->productRepository->findOrFail($data['product_id']);

        $quoteItem = parent::update(array_merge($data, [
            'sku'  => $product->sku,
            'name' => $product->name,
        ]), $id);

        return $quoteItem;
    }
}
