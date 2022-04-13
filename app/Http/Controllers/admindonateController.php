<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class admindonateController extends Controller
{
        function index()
        {  
            
            $users = DB::table('donates')->get();
            $orderdetail = DB::table('donatedetails')->get();
    return view('admindonate',['man'=> $users,'men'=> $orderdetail]);
            
    
        }
    }