<?php

namespace Ribal\Onix\Product;

class ProductPart
{

    /**
     * Array of ProductIdentifiers
     *
     * @var array|ProductIdentifier[]
     */
    protected $ProductIdentifier = [];
    
    /**
     * Set ProductIdentifier
     *
     * @param ProductIdentifier $ProductIdentifier
     * @return void
     */
    public function addProductIdentifier(ProductIdentifier $ProductIdentifier)
    {
        $this->ProductIdentifier[] = $ProductIdentifier;
    }

    /**
     * Set ProductIdentifier
     *
     * @param ProductIdentifier $ProductIdentifier
     * @return void
     */
    public function removeProductIdentifier(ProductIdentifier $ProductIdentifier)
    {
    }

    /**
     * Get ProductIdentifiers
     *
     * @return array
     */
    public function getProductIdentifier()
    {
        return $this->ProductIdentifier;
    }

}
