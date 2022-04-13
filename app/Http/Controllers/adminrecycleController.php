<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminrecycleController extends Controller
{
    function index()
    {  
        
        $users = DB::table('recycles')->get();
        $orderdetail = DB::table('recycledetails')->get();
return view('adminrecycle',['man'=> $users,'men'=> $orderdetail]);
        

    }
}
