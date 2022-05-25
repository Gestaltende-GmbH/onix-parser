<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList29;

class Audience
{

    /**
     * AudienceCodeType
     *
     * @var \Ribal\Onix\CodeList\CodeList29
     */
    protected $AudienceCodeType;

    /**
     * AudienceCodeValue
     *
     * @var string
     */
    protected $AudienceCodeValue;

    /**
     * Set AudienceCodeType
     *
     * @param string $AudienceCodeType
     * @return void
     */
    public function setAudienceCodeType(CodeList29 $AudienceCodeType)
    {
        $this->AudienceCodeType = $AudienceCodeType;
    }

    /**
     * Set AudienceCodeValue
     *
     * @param string $AudienceCodeValue
     * @return void
     */
    public function setAudienceCodeValue(string $AudienceCodeValue)
    {
        $this->AudienceCodeValue = $AudienceCodeValue;
    }

    /**
     * Get AudienceCodeType
     *
     * @return \Ribal\Onix\CodeList\CodeList29
     */
    public function getAudienceCodeType()
    {
        return $this->AudienceCodeType;
    }

    /**
     * Get AudienceCodeValue
     *
     * @return string
     */
    public function getAudienceCodeValue()
    {
        return $this->AudienceCodeValue;
    }

}