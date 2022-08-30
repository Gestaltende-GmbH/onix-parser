<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList197;

class CollectionSequence
{

    /**
     * CollectionSequenceType
     *
     * @var CodeList197
     */
    protected $CollectionSequenceType;

    /**
     * CollectionSequenceNumber
     *
     * @var string
     */
    protected $CollectionSequenceNumber;

    /**
     * Set CollectionIDType
     *
     * @param string $CollectionSequenceType
     *
     * @return void
     */
    public function setCollectionSequenceType(CodeList197 $CollectionSequenceType)
    {
        $this->CollectionSequenceType = $CollectionSequenceType;
    }

    /**
     * Set IDValue
     *
     * @param string $CollectionSequenceNumber
     *
     * @return void
     */
    public function setCollectionSequenceNumber(string $CollectionSequenceNumber)
    {
        $this->CollectionSequenceNumber = $CollectionSequenceNumber;
    }

    /**
     * Get CollectionIDType
     *
     * @return CodeList197
     */
    public function getCollectionSequenceType()
    {
        return $this->CollectionSequenceType;
    }

    /**
     * Get IDValue
     *
     * @return string
     */
    public function getCollectionSequenceNumber()
    {
        return $this->CollectionSequenceNumber;
    }

}