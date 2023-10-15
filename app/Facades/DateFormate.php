<?php

namespace App\Facades;

use Carbon\Carbon;

class DateFormate{

    public function format1($date)
    {
        return Carbon::createFromFormat('Y/m/d', $date)->format('Y-m-d');
    }

    public function format2($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('Y/m/d');
    }
}
