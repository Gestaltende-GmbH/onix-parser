<?php

namespace Ribal\Onix\Product;

class EpubLicense
{

    /**
     * EpubLicenseName
     *
     * @var string
     */
    protected $EpubLicenseName;

    /**
     * EpubLicenseExpression
     *
     * @var array|\Ribal\Onix\Product\EpubLicenseExpression[]
     */
    protected $EpubLicenseExpression = [];

    /**
     * @return array|\Ribal\Onix\Product\EpubLicenseExpression[]
     */
    public function getEpubLicenseExpression(): array
    {
        return $this->EpubLicenseExpression;
    }

    /**
     * @return string
     */
    public function getEpubLicenseName(): string
    {
        return $this->EpubLicenseName;
    }

    /**
     * @param string $EpubLicenseName
     */
    public function setEpubLicenseName(string $EpubLicenseName): void
    {
        $this->EpubLicenseName = $EpubLicenseName;
    }
    /**
     * Set PublisherIdentifier
     *
     * @param \Ribal\Onix\Product\PublisherIdentifier $epubLicenseExpression
     *
     * @return void
     */
    public function setEpubLicenseExpression(EpubLicenseExpression $epubLicenseExpression)
    {
        $this->EpubLicenseExpression[] = $epubLicenseExpression;
    }

    /**
     * Set PublisherIdentifier
     *
     * @param \Ribal\Onix\Product\EpubLicenseExpression $epubLicenseExpression
     *
     * @return void
     */
    public function addEpubLicenseExpression(EpubLicenseExpression $epubLicenseExpression)
    {
        $this->EpubLicenseExpression[] = $epubLicenseExpression;
    }

}