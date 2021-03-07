<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Facades\ExampleFacade;

class ExampleController extends Controller
{
    public function index(){

        $example = (new ExampleFacade())::ExampleDistritosBrasil();
        
        return view('welcome', ['distritos' => $example]);
    }
}
