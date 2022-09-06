<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList173;
use Ribal\Onix\Date;

class PriceDate
{
    /**
     * @var \Ribal\Onix\CodeList\CodeList173
     */
    protected $PriceDateRole;
    /**
     * Date
     *
     * @var \DateTime
     */
    protected $Date;

    /**
     * Set ContentDateRole
     *
     * @param CodeList173 $PriceDateRole
     *
     * @return void
     */
    public function setPriceDateRole(CodeList173 $PriceDateRole)
    {
        $this->PriceDateRole = $PriceDateRole;
    }

    /**
     * Set Date
     *
     * @param string $Date
     *
     * @return void
     */
    public function setDate(Date $Date)
    {
        $this->Date = $Date;
    }

    /**
     * Get ContentDateRole
     *
     * @return CodeList173
     */
    public function getPriceDateRole()
    {
        return $this->PriceDateRole;
    }

    /**
     * Get Date
     *
     * @return Date
     */
    public function getDate()
    {
        return $this->Date;
    }
}
