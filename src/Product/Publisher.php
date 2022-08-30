<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList45;

class Publisher
{

    /**
     * PublishingRole
     *
     * @var CodeList45
     */
    protected $PublishingRole;

    /**
     * PublisherIdentifier
     *
     * @var array|\Ribal\Onix\Product\PublisherIdentifier[]
     */
    protected $PublisherIdentifier = [];

    /**
     * PublisherName
     *
     * @var string
     */
    protected $PublisherName;

    /**
     * Website
     *
     * @var array|Website[]
     */
    protected $Website;

    /**
     * Set PublishingRole
     *
     * @param CodeList45 $PublishingRole
     *
     * @return void
     */
    public function setPublishingRole(CodeList45 $PublishingRole)
    {
        $this->PublishingRole = $PublishingRole;
    }

    /**
     * Set PublisherIdentifier
     *
     * @param \Ribal\Onix\Product\PublisherIdentifier $PublisherIdentifier
     *
     * @return void
     */
    public function setPublisherIdentifier(PublisherIdentifier $PublisherIdentifier)
    {
        $this->PublisherIdentifier[] = $PublisherIdentifier;
    }

    /**
     * Set PublisherIdentifier
     *
     * @param PublisherIdentifier $PublisherIdentifier
     *
     * @return void
     */
    public function addPublisherIdentifier(PublisherIdentifier $PublisherIdentifier)
    {
        $this->PublisherIdentifier[] = $PublisherIdentifier;
    }

    /**
     * Set PublisherIdentifier
     *
     * @param \Ribal\Onix\Product\Website $Website
     *
     * @return void
     */
    public function addWebsite(Website $Website)
    {
        $this->Website[] = $Website;
    }

    /**
     * Set PublisherName
     *
     * @param string $PublisherName
     *
     * @return void
     */
    public function setPublisherName(string $PublisherName)
    {
        $this->PublisherName = $PublisherName;
    }

    /**
     * Set Website
     *
     * @param Website $Website
     *
     * @return void
     */
    public function setWebsite(Website $Website)
    {
        $this->Website[] = $Website;
    }

    /**
     * Get PublishingRole
     *
     * @return CodeList45
     */
    public function getPublishingRole()
    {
        return $this->PublishingRole;
    }

    /**
     * Get PublisherIdentifier
     *
     * @return \Ribal\Onix\Product\PublisherIdentifier[]
     */
    public function getPublisherIdentifier()
    {
        return $this->PublisherIdentifier;
    }

    /**
     * Get PublisherName
     *
     * @return string
     */
    public function getPublisherName()
    {
        return $this->PublisherName;
    }

    /**
     * Get Website
     *
     * @return array|Website[]
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * Get PublisherIdentifier
     *
     * @return PublisherIdentifier
     */
    public function removePublisherIdentifier()
    {
    }

    /**
     * Get PublisherIdentifier
     *
     * @return Website
     */
    public function removeWebsite()
    {
    }
}
