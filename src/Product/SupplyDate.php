<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList163;
use Ribal\Onix\CodeList\CodeList166;
use Ribal\Onix\Date;

class SupplyDate
{

    /**
     * PublishingDateRole
     *
     * @var \Ribal\Onix\CodeList\CodeList166
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
     * @param \Ribal\Onix\CodeList\CodeList166 $SupplyDateRole
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
     * @return void
     */
    public function setDate(Date $Date)
    {
        $this->Date = $Date;
    }

    /**
     * Get PublishingDateRole
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