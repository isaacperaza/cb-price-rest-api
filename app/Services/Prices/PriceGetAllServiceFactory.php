<?php

namespace Cb\Services\Prices;

use Cb\Daos\Prices\PricesGetAllDaoFactory;
use Cb\RestFramework\ServiceManager\FactoryInterface;
use Cb\PricePersistenceContracts\Daos\PricesGetAllDaoInterface;

/**
 * Service to get all available prices
 * @package Cb\Services\Prices
 */
class PricesGetAllServiceFactory implements FactoryInterface
{
    /**
     * Create a service
     * @return PricesGetAllInterface
     */
    public function createService()
    {
        $daoFactory = new PricesGetAllDaoFactory();
        /** @var PricesGetAllDaoInterface $dao */
        $dao = $daoFactory->createService();
        return new PricesGetAllService($dao);
    }
}
