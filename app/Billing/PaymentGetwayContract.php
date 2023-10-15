<?php
namespace App\Billing;

interface PaymentGetwayContract{

    public function setDiscount(float $discount) : void;
    public function charge( float $amount ) : array;

}
