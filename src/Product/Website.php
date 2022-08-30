<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList73;

class Website
{

    /**
     * WebsiteRole
     *
     * @var CodeList73
     */
    protected $WebsiteRole;

    /**
     * WebsiteLink
     *
     * @var string
     */
    protected $WebsiteLink;

    /**
     * WebsiteDescription
     *
     * @var string
     */
    protected $WebsiteDescription;

    /**
     * @return string
     */
    public function getWebsiteDescription(): ?string
    {
        return $this->WebsiteDescription;
    }

    /**
     * Set WebsiteRole
     *
     * @param CodeList73 $WebsiteRole
     *
     * @return void
     */
    public function setWebsiteRole(CodeList73 $WebsiteRole)
    {
        $this->WebsiteRole = $WebsiteRole;
    }

    /**
     * Set WebsiteLink
     *
     * @param string $WebsiteLink
     *
     * @return void
     */
    public function setWebsiteLink(string $WebsiteLink)
    {
        $this->WebsiteLink = $WebsiteLink;
    }

    /**
     * Get WebsiteRole
     *
     * @return \Ribal\Onix\CodeList\CodeList73
     */
    public function getWebsiteRole()
    {
        return $this->WebsiteRole;
    }

    /**
     * Get WebsiteLink
     *
     * @return string
     */
    public function getWebsiteLink()
    {
        return $this->WebsiteLink;
    }

    /**
     * @param string $WebsiteDescription
     */
    public function setWebsiteDescription(string $WebsiteDescription): void
    {
        $this->WebsiteDescription = $WebsiteDescription;
    }

}