<?php

namespace App\Support\Facades;
use Illuminate\Support\Facades\Facade;


class AppRoute extends Facade{


    protected static function getFacadeAccessor()
    {
        return 'router';
    }
}