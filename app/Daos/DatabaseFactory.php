<?php

namespace Cb\Daos;

use Cb\PricePersistence\Mysql\Database;
use Cb\PricePersistence\Mysql\DatabaseInterface;
use Cb\RestFramework\ServiceManager\FactoryInterface;

/**
 * Factory service to create an instance of Database
 * @package Cb\Daos
 */
class DatabaseFactory implements FactoryInterface
{
    /**
     * Create a service
     * @return DatabaseInterface
     */
    public function createService()
    {
        // TODO: set database connection settings via getInstance method.
        return Database::getInstance();
    }
}
