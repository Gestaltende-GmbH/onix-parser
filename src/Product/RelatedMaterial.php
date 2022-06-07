<?php

namespace Ribal\Onix\Product;

class RelatedMaterial
{

    /**
     * Array of RelatedWork
     *
     * @var array|RelatedWork
     */
    protected $RelatedWork = [];

    /**
     * Array of RelatedProduct
     *
     * @var array|RelatedProduct
     */
    protected $RelatedProduct = [];

    /**
     * Add new RelatedWork
     *
     * @param RelatedWork $RelatedWork
     *
     * @return void
     */
    public function addRelatedWork(RelatedWork $RelatedWork)
    {
        $this->RelatedWork[] = $RelatedWork;
    }

    /**
     * Set RelatedProduct
     *
     * @param RelatedProduct $RelatedProduct
     *
     * @return void
     */
    public function addRelatedProduct(RelatedProduct $RelatedProduct)
    {
        $this->RelatedProduct[] = $RelatedProduct;
    }

    /**
     * Get RelatedWork
     *
     * @return array|\Ribal\Onix\Product\RelatedWork[]
     */
    public function getRelatedWork()
    {
        return is_array($this->RelatedWork) ? $this->RelatedWork : [$this->RelatedWork];
    }

    /**
     * Get RelatedProduct
     *
     * @return array|\Ribal\Onix\Product\RelatedProduct[]
     */
    public function getRelatedProduct()
    {
        return is_array($this->RelatedProduct) ? $this->RelatedProduct : [$this->RelatedProduct];
    }

    /**
     * Remove RelatedWork
     *
     * @param RelatedWork $RelatedWork
     *
     * @return void
     */
    public function removeRelatedWork(RelatedWork $RelatedWork)
    {
    }

    public function removeRelatedProduct(RelatedProduct $RelatedProduct)
    {
    }

}
