<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList17;
use Ribal\Onix\Text;

class CopyrightStatement
{

    /**
     * CopyrightYear
     *
     * @var array|string[]
     */
    protected $CopyrightYear = [];

    /**
     * Add CopyrightYear
     *
     * @param string $copyrightYear
     *
     * @return void
     */
    public function addCopyrightYear(string $copyrightYear)
    {
        $this->CopyrightYear[] = $copyrightYear;
    }

    /**
     * @return array|string[]
     */
    public function getCopyrightYear()
    {
        return $this->CopyrightYear;
    }

    /**
     * Remove CopyrightYear
     *
     * @param string $copyrightYear
     *
     * @return void
     */
    public function removeCopyrightYear(string $copyrightYear)
    {
    }

    /**
     * @param string $CopyrightYear
     */
    public function setCopyrightYear(string $CopyrightYear): void
    {
        $this->CopyrightYear[] = $CopyrightYear;
    }
}
