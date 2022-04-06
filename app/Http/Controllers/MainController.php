<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function screen()
        {
        
            return view('recycle');
            return view('donate');
        
        
        }

}
