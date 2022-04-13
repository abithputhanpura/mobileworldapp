<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;

class dashb extends Controller
{
    function index(Request $request)
    {  
        $user = \Auth::user()->email;
       $users = DB::table('recycles')->where('email', $user)->get();
       $users1 = DB::table('sells')->where('email', $user)->get();
       $users2 = DB::table('donates')->where('email', $user)->get();


      return view('dashboard',['man'=>$users,'men'=> $users1,'mens'=> $users2]);
     
    }

}