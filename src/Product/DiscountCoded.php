<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList100;

class DiscountCoded
{

    /**
     * DiscountCodeType
     *
     * @var CodeList100
     */
    protected $DiscountCodeType;

    /**
     * DiscountCode
     *
     * @var string
     */
    protected $DiscountCode;

    /**
     * Set DiscountCodeType
     *
     * @param CodeList100 $DiscountCodeType
     * @return void
     */
    public function setDiscountCodeType(CodeList100 $DiscountCodeType)
    {
        $this->DiscountCodeType = $DiscountCodeType;
    }

    /**
     * Set DiscountCode
     *
     * @param string $DiscountCode
     * @return void
     */
    public function setDiscountCode(string $DiscountCode)
    {
        $this->DiscountCode = $DiscountCode;
    }

    /**
     * Get DiscountCodeType
     *
     * @return CodeList100
     */
    public function getDiscountCodeType()
    {
        return $this->DiscountCodeType;
    }

    /**
     * Get DiscountCode
     *
     * @return string
     */
    public function getDiscountCode()
    {
        return $this->DiscountCode;
    }

}
