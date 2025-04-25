<?php

namespace App\Http\Controllers;

use finfo;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        return view('Welcome');   
    }
}
