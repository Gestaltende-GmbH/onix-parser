<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList218;

class EpubLicenseExpression
{

    /**
     * EpubLicenseExpressionType
     *
     * @var \Ribal\Onix\CodeList\CodeList218
     */
    protected $EpubLicenseExpressionType;
    /**
     * EpubLicenseExpressionLink
     *
     * @var string
     */
    protected $EpubLicenseExpressionLink;
    /**
     * EpubLicenseExpressionTypeName
     *
     * @var string
     */
    protected $EpubLicenseExpressionTypeName;

    /**
     * @return string
     */
    public function getEpubLicenseExpressionLink(): string
    {
        return $this->EpubLicenseExpressionLink;
    }

    /**
     * @param string $EpubLicenseExpressionLink
     */
    public function setEpubLicenseExpressionLink(string $EpubLicenseExpressionLink): void
    {
        $this->EpubLicenseExpressionLink = $EpubLicenseExpressionLink;
    }

    /**
     * Set PublisherIDType
     *
     * @param CodeList218 $EpubLicenseExpressionType
     *
     * @return void
     */
    public function setEpubLicenseExpressionType(CodeList218 $EpubLicenseExpressionType)
    {
        $this->EpubLicenseExpressionType = $EpubLicenseExpressionType;
    }

    /**
     * Get PublisherIDType
     *
     * @return \Ribal\Onix\CodeList\CodeList218
     */
    public function getEpubLicenseExpressionType()
    {
        return $this->PubliEpubLicenseExpressionTypesherIDType;
    }

    /**
     * @return string
     */
    public function getEpubLicenseExpressionTypeName(): string
    {
        return $this->EpubLicenseExpressionTypeName;
    }

    /**
     * @param string $EpubLicenseExpressionTypeName
     */
    public function setEpubLicenseExpressionTypeName(string $EpubLicenseExpressionTypeName): void
    {
        $this->EpubLicenseExpressionTypeName = $EpubLicenseExpressionTypeName;
    }

}