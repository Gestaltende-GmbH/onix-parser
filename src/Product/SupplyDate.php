<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList166;
use Ribal\Onix\Date;

class SupplyDate
{

    /**
     * SupplyDateRole
     *
     * @var CodeList166
     */
    protected $SupplyDateRole;

    /**
     * Date
     *
     * @var Date
     */
    protected $Date;

    /**
     * Set PublishingDateRole
     *
     * @param CodeList166 $SupplyDateRole
     *
     * @return void
     */
    public function setSupplyDateRole(CodeList166 $SupplyDateRole)
    {
        $this->SupplyDateRole = $SupplyDateRole;
    }

    /**
     * Set Date
     *
     * @param Date $Date
     *
     * @return void
     */
    public function setDate(Date $Date)
    {
        $this->Date = $Date;
    }

    /**
     * Get SupplyDateRole
     *
     * @return CodeList166
     */
    public function getSupplyDateRole()
    {
        return $this->SupplyDateRole;
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