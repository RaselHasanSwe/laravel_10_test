<?php

namespace App\Providers;

use App\Billing\BankPaymentGetway;
use App\Billing\CardPaymentGetway;
use App\Billing\PaymentGetwayContract;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(PaymentGetwayContract::class, function($app){
            if(request()->has('card')){
                return new CardPaymentGetway('usd');
            }


            return new BankPaymentGetway('usd');
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
