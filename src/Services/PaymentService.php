<?php

declare(strict_types=1);

namespace Muhsin\Vk\Services;

use Muhsin\Vk\Models\Order;
use Muhsin\Vk\Models\PaymentRequest;

class PaymentService
{
    public function requestPayment(Order $order): PaymentRequest
    {
        // Здесь мы вызываем внешний платежный сервис

        return new PaymentRequest();
    }
}
