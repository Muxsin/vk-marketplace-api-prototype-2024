<?php

use Muhsin\Vk\Application;
use Muhsin\Vk\Core\Router;

require __DIR__ . '/../vendor/autoload.php';

header('Content-Type: application/json');

$router = new Router(require __DIR__ . '/../routes.php');

$app = new Application($router);
$app->run();
