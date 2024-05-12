<?php

declare(strict_types=1);

namespace Muhsin\Vk\Controllers;

use Muhsin\Vk\Models\Order;
use Muhsin\Vk\Services\DeliveryService;
use Muhsin\Vk\Services\PaymentService;

class OrderController
{
    private PaymentService $paymentService;
    private DeliveryService $deliveryService;

    public function __construct(PaymentService $paymentService, DeliveryService $deliveryService)
    {
        $this->paymentService = $paymentService;
        $this->deliveryService = $deliveryService;
    }

    public function create(): Order
    {
        $order = new Order();

        $payment_request = $this->paymentService->requestPayment($order);

        if($payment_request->isSuccessful()) {
            $this->deliveryService->requestDelivery($order, $payment_request);
        }

        return $order;
    }
}
