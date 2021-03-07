<?php

namespace App\Providers;

use App\Facades\ExampleFacade;
use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider
{
    public $singletons = [
        ExampleFacade::class,
    ];
}
