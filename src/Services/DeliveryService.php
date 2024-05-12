<?php

declare(strict_types=1);

namespace Muhsin\Vk\Services;

use Muhsin\Vk\Models\DeliveryRequest;
use Muhsin\Vk\Models\Order;
use Muhsin\Vk\Models\PaymentRequest;

class DeliveryService
{
    public function requestDelivery(Order $order, PaymentRequest $paymentRequest): DeliveryRequest
    {
        // Отправляем запрос к внешней системе для организации доставки

        return new DeliveryRequest();
    }
}
