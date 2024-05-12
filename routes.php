<?php

declare(strict_types=1);

use Muhsin\Vk\Controllers\OrderController;
use Muhsin\Vk\Core\Route;

$order_controller = new OrderController();

return [
    Route::post('/api/orders/create', [$order_controller, 'create']),
    // другие маршруты
];
