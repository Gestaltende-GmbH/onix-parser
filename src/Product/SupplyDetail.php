<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList65;

class SupplyDetail
{

    /**
     * Supplier
     *
     * @var Supplier
     */
    protected $Supplier;

    /**
     * Array of SupplyDate
     *
     * @var array|SupplyDate
     */
    protected $SupplyDate = [];

    /**
     * ReturnsConditions
     *
     * @var ReturnsConditions
     */
    protected $ReturnsConditions;

    /**
     * ProductAvailability
     *
     * @var CodeList65
     */
    protected $ProductAvailability;

    /**
     * PackQuantity
     *
     * @var int
     */
    protected $PackQuantity;

    /**
     * Array of Price
     *
     * @var Price[]
     */
    protected $Price = [];

    /**
     * Set Supplier
     *
     * @param Supplier $Supplier
     * @return void
     */
    public function setSupplier(Supplier $Supplier)
    {
        $this->Supplier = $Supplier;
    }

    /**
     * Set ReturnsConditions
     *
     * @param ReturnsConditions $ReturnsConditions
     * @return void
     */
    public function setReturnsConditions(ReturnsConditions $ReturnsConditions)
    {
        $this->ReturnsConditions = $ReturnsConditions;
    }

    /**
     * Set ProductAvailability
     *
     * @param CodeList65 $ProductAvailability
     * @return void
     */
    public function setProductAvailability(CodeList65 $ProductAvailability)
    {
        $this->ProductAvailability = $ProductAvailability;
    }

    /**
     * Set PackQuantity
     *
     * @param integer $PackQuantity
     * @return void
     */
    public function setPackQuantity(string $PackQuantity)
    {
        $this->PackQuantity = $PackQuantity;
    }

    /**
     * Add a new Price
     *
     * @param Price $Price
     * @return void
     */
    public function setPrice($Price)
    {
        if (!is_array($Price)) return;

        foreach ($Price as $p) {
            if ($p instanceof Price) {
                $this->Price[] = $p;
            }
        }
    }

    /**
     * Add Price
     *
     * @param Price $Price
     * @return void
     */
    public function addPrice(Price $Price)
    {
        $this->Price[] = $Price;
    }

    /**
     * Get Supplier
     *
     * @return Supplier
     */
    public function getSupplier()
    {
        return $this->Supplier;
    }

    /**
     * Get ReturnsConditions
     *
     * @return ReturnsConditions
     */
    public function getReturnsConditions()
    {
        return $this->ReturnsConditions;
    }

    /**
     * Get ProductAvailability
     *
     * @return CodeList65
     */
    public function getProductAvailability()
    {
        return $this->ProductAvailability;
    }

    /**
     * Get PackQuantity
     *
     * @return integer
     */
    public function getPackQuantity()
    {
        return $this->PackQuantity;
    }

    /**
     * Get Price
     *
     * @return Price[]
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @return array|\Ribal\Onix\Product\SupplyDate
     */
    public function getSupplyDate()
    {
        return $this->SupplyDate;
    }

    /**
     * Remove Price
     *
     * @param Price $Price
     * @return void
     */
    public function removePrice(Price $Price)
    {
    }

}
