<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminsellController extends Controller
{
    function index()
    {  
        
        $users = DB::table('sells')->get();
        $orderdetail = DB::table('solddetails')->get();
return view('adminsell',['man'=> $users,'men'=> $orderdetail]);
        

    }

}
