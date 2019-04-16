<?php

namespace Cb\Services\Prices;

use Cb\PricePersistenceContracts\Daos\PricesGetAllDaoInterface;
use Cb\PricePersistenceContracts\Models\Price;

/**
 * Service to get all available prices
 * @package Cb\Services\Prices
 */
class PricesGetAllService implements PricesGetAllInterface
{
    /** @var PricesGetAllDaoInterface */
    private $dao;
    
    /**
     * @param PricesGetAllDaoInterface $dao
     */
    public function __construct(PricesGetAllDaoInterface $dao)
    {
        $this->dao = $dao;
    }

    /**
     * @return Price[]
     */
    public function getAll()
    {
        return $this->dao->getAll();
    }
}
