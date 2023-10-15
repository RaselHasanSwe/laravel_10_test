<?php

namespace App\Providers;

use App\Facades\DateFormate;
use Illuminate\Support\ServiceProvider;

class DateFormateProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('date_formate', function($app){
            return new DateFormate();
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
