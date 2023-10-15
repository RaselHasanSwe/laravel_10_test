<?php

namespace App\Providers;

use App\Http\View\Composers\UserComposer;
use App\Macros\TestMacro;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Str::mixin(new TestMacro());

        Str::macro('Upper', function($str){
            return strtoupper($str);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //ABOUT VIEW COMPOSER

        //METHOD -1
        // View::share('users',User::take(10)->get());

        // METHOD-2
        // View::composer(['view-composer-1', 'view-composer-2'], function($view){
        //     $view->with('users', User::take(10)->get());
        // });

         // METHOD-3
        //  View::composer('folder.*', function($view){
        //     $view->with('users', User::take(10)->get());
        // });

        //Method -4
        View::composer(['view-composer-1', 'view-composer-2'], UserComposer::class);


    }
}
