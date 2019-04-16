<?php

namespace Cb\Services\Prices;

use Cb\PricePersistenceContracts\Models\Price;

/**
 * Contract to get all available prices
 * @package Cb\Services\Prices
 */
interface PricesGetAllInterface
{
    /**
     * @return Price[]
     */
    public function getAll();
}
