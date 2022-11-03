<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList13;

class CollectionIdentifier
{

    /**
     * CollectionIDType
     *
     * @var string
     */
    protected $CollectionIDType;

    /**
     * IDValue
     *
     * @var string
     */
    protected $IDValue;

    /**
     * Set CollectionIDType
     *
     * @param string $CollectionIDType
     *
     */
    public function setCollectionIDType(CodeList13 $CollectionIDType)
    {
        $this->CollectionIDType = $CollectionIDType;
    }

    /**
     * Set IDValue
     *
     * @param string $IDValue
     *
     */
    public function setIDValue($IDValue)
    {
        $this->IDValue = $IDValue;
    }

    /**
     * Get CollectionIDType
     *
     * @return CodeList13
     */
    public function getCollectionIDType()
    {
        return $this->CollectionIDType;
    }

    /**
     * Get IDValue
     *
     * @return string
     */
    public function getIDValue()
    {
        return $this->IDValue;
    }

}