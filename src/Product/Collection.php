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
     * @var array|CollectionIdentifier[]
     */
    protected $CollectionIdentifier;
    /**
     * CollectionSequence
     *
     * @var array|CollectionSequence[]
     */
    protected $CollectionSequence;
    /**
     * Set CollectionType
     *
     * @param string $CollectionType
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
    public function setCollectionIdentifier(CollectionIdentifier $CollectionIdentifier)
    {
        $this->CollectionIdentifier[] = $CollectionIdentifier;
    }
    /**
     * Get CollectionIdentifier
     *
     * @return array
     */
    public function getCollectionIdentifier()
    {
        return $this->CollectionIdentifier;
    }
    /**
     * Add CollectionIdentifier
     *
     * @param CollectionSequence $CollectionSequence
     *
     * @return void
     */
    public function setCollectionSequence(CollectionSequence $CollectionSequence)
    {
        $this->CollectionSequence[] = $CollectionSequence;
    }
    /**
     * Get CollectionIdentifier
     *
     * @return array
     */
    public function getCollectionSequence()
    {
        return $this->CollectionSequence;
    }

}