<?php

namespace App\Macros;

class TestMacro{

    public function upper1()
    {
        return function($str){
            return strtoupper($str);
        };
    }

}
