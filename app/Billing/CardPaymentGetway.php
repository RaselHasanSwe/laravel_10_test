<?php

namespace App\Billing;

use Illuminate\Support\Str;

class CardPaymentGetway implements PaymentGetwayContract{

    public float $discount = 0;

    public function __construct(public string $currency)
    {

    }

    public function setDiscount( float $discount) : void
    {
        $this->discount = $discount;
    }

    public function charge( float $amount ) : array
    {
        return [
            'amount' => $amount - $this->discount,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fee' => 2
        ];
    }
}
