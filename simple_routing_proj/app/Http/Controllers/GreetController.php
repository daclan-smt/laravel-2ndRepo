<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function greetMethod()
    {
        return view('greet', ['name' => 'Sarah Mae Daclan']);
    }
}