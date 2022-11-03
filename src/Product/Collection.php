<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList148;

class Collection
{

    /**
     * CollectionType
     *
     * @var \Ribal\Onix\CodeList\CodeList148
     */
    protected $CollectionType;

    /**
     * TitleDetail
     *
     * @var TitleDetail
     */
    protected $TitleDetail;
    /**
     * CollectionIdentifier
     *
     * @var array|\Ribal\Onix\Product\CollectionIdentifier[]
     */
    protected $CollectionIdentifier = [];
    /**
     * CollectionSequence
     *
     * @var \Ribal\Onix\Product\CollectionSequence[]
     */
    protected $CollectionSequence = [];

    /**
     * Set CollectionType
     *
     * @param string $CollectionType
     *
     * @return void
     */
    public function setCollectionType(CodeList148 $CollectionType)
    {
        $this->CollectionType = $CollectionType;
    }

    /**
     * Set TitleDetail
     *
     * @param TitleDetail $TitleDetail
     *
     * @return void
     */
    public function setTitleDetail(TitleDetail $TitleDetail)
    {
        $this->TitleDetail = $TitleDetail;
    }

    /**
     * Get CollectionType
     *
     * @return CodeList148
     */
    public function getCollectionType()
    {
        return $this->CollectionType;
    }

    /**
     * Get TitleDetail
     *
     * @return TitleDetail
     */
    public function getTitleDetail()
    {
        return $this->TitleDetail;
    }

    /**
     * Add CollectionIdentifier
     *
     * @param CollectionIdentifier $CollectionIdentifier
     *
     * @return void
     */
    public function addCollectionIdentifier(CollectionIdentifier $CollectionIdentifier)
    {
        $this->CollectionIdentifier[] = $CollectionIdentifier;
    }

    /**
     * Get CollectionIdentifier
     *
     * @return array|CollectionIdentifier[]
     */
    public function getCollectionIdentifier()
    {
        return $this->CollectionIdentifier;
    }

    public function hasCollectionIdentifier()
    {
        return count($this->CollectionIdentifier) > 0;
    }

    public function removeCollectionIdentifier(CollectionIdentifier $collectionIdentifier)
    {
    }

    /**
     * Add CollectionIdentifier
     *
     * @param CollectionSequence $CollectionSequence
     *
     * @return void
     */
    public function addCollectionSequence(CollectionSequence $CollectionSequence)
    {
        $this->CollectionSequence[] = $CollectionSequence;
    }

    /**
     * Get CollectionIdentifier
     *
     * @return array|CollectionSequence[]
     */
    public function getCollectionSequence()
    {
        return $this->CollectionSequence;
    }

    public function hasCollectionSequence()
    {
        return count($this->CollectionSequence) > 0;
    }

    public function removeCollectionSequence(CollectionSequence $collectionSequence)
    {
    }
}