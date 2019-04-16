<?php

use Cb\RestFramework\ApplicationFactory;

require_once __DIR__.'/../vendor/autoload.php';

define('APP_BASE_PATH', __DIR__);

$dotEnv = \Dotenv\Dotenv::create(APP_BASE_PATH . '/../');
$dotEnv->load();

$appFactory = new ApplicationFactory();
$app = $appFactory->createService();

$router = $app->getRouter();

require_once __DIR__.'/../config/routes.php';


return $app;
