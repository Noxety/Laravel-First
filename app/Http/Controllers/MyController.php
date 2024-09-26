<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function helloWorld()
    {
        $message = "Hello from Blade!";
        return view('welcome', compact('message'));
    }

}

