<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList13;

class CollectionIdentifier
{

    /**
     * CollectionIDType
     *
     * @var \Ribal\Onix\CodeList\CodeList13
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
     * @param string $NameIDType
     *
     * @return void
     */
    public function setCollectionIDType(CodeList13 $NameIDType)
    {
        $this->CollectionIDType = $NameIDType;
    }

    /**
     * Set IDValue
     *
     * @param string $IDValue
     *
     * @return void
     */
    public function setIDValue(string $IDValue)
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