<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList51;

class RelatedProduct
{

    /**
     * Array of Product Relation Codes
     *
     * @var \Ribal\Onix\CodeList\CodeList51
     */
    protected $ProductRelationCode = [];

    /**
     * Array of ProductIdentifiers
     *
     * @var ProductIdentifier
     */
    protected $ProductIdentifier = [];
    
    /**
     * Set ProductRelationCode
     *
     * @param CodeList51 $ProductRelationCode
     * @return void
     */
    public function setProductRelationCode(CodeList51 $ProductRelationCode)
    {
        $this->ProductRelationCode = $ProductRelationCode;
    }

    /**
     * Set ProductIdentifier
     *
     * @param ProductIdentifier $ProductIdentifier
     * @return void
     */
    public function setProductIdentifier(ProductIdentifier $ProductIdentifier)
    {
        $this->ProductIdentifier = $ProductIdentifier;
    }

    /**
     * Get ProductRelationCodes
     *
     * @return CodeList51
     */
    public function getProductRelationCode()
    {
        return $this->ProductRelationCode;
    }

    /**
     * Get ProductIdentifiers
     *
     * @return \Ribal\Onix\Product\ProductIdentifier
     */
    public function getProductIdentifier()
    {
        return $this->ProductIdentifier;
    }

    public function removeProductRelationCode(CodeList51 $ProductRelationCode)
    {
    }

    public function removeProductIdentifier(ProductIdentifier $ProductIdentifier)
    {
    }

}
