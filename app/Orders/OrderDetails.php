<?php

namespace App\Orders;

use App\Billing\PaymentGetway;
use App\Billing\PaymentGetwayContract;

class OrderDetails{

    public PaymentGetwayContract $paymentGetwayContract;

    public function __construct(PaymentGetwayContract $paymentGetwayContract)
    {
        $this->paymentGetwayContract = $paymentGetwayContract;

    }

    public function all() : array
    {
        $this->paymentGetwayContract->setDiscount(4);

        return [
            'name' => 'Rasel Hasan',
            'address' => 'Dhaka',
        ];

    }


}
