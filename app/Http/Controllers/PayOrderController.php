<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGetway;
use App\Billing\PaymentGetwayContract;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{

    public function index(OrderDetails $orderDetails, PaymentGetwayContract $paymentGetwayContract)
    {
        $order = $orderDetails->all();
        dd($paymentGetwayContract->charge(10));
    }
}
