<?php

use Cb\RestFramework\Router\Router;

/**
 * File used to define all REST API routes
 */

/** @var Router $route */
$route = $router;

// Prices Routes
$route->addRoute('GET', '/prices', 'PricesController@getAll');
$route->addRoute('GET', '/prices/{id}', 'PricesController@get');
