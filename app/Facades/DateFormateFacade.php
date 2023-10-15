<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class DateFormateFacade extends Facade {

    public static function getFacadeAccessor()
    {
        return 'date_formate';
    }
}
