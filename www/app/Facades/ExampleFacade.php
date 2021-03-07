<?php

namespace App\Facades;

use App\Services\ExampleService;
use Illuminate\Support\Facades\Facade;

class ExampleFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ExampleService::class;
    }
}
