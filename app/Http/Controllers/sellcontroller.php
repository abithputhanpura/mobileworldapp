<?php

namespace App\Http\Controllers;

namespace App\Http\Request;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class SellController extends Controller
{ public function sell()
    {
        $brands = DB::table('smartphones')->distinct()->get();
    
 
        return view('sell', [ 'name' => $brands]);
    }


    public function donate()
    {
        return view('donate');
    }
}