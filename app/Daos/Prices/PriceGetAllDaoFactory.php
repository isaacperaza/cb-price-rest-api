<?php

namespace Cb\Daos\Prices;

use Cb\Daos\DatabaseFactory;
use Cb\RestFramework\ServiceManager\FactoryInterface;
use Cb\PricePersistence\Mysql\Daos\PricesGetAllDao;
use Cb\PricePersistence\Mysql\DatabaseInterface;
use Cb\PricePersistenceContracts\Daos\PricesGetAllDaoInterface;

/**
 * Service to get all available prices
 * @package Cb\Daos\Prices
 */
class PricesGetAllDaoFactory implements FactoryInterface
{
    /**
     * Create a service
     * @return PricesGetAllDaoInterface
     */
    public function createService()
    {
        $databaseFactory = new DatabaseFactory();
        /** @var DatabaseInterface $database */
        $database = $databaseFactory->createService();

        return new PricesGetAllDao($database);
    }
}
