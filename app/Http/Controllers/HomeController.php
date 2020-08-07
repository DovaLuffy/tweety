<?php

namespace App\Http\Controllers;

use App\Tweet;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   
}
