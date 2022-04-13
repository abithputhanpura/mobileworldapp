<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class dashb extends Controller
{
    function index(Request $request)
    {  
        $user = \Auth::user()->email;
        $users = DB::table('recycles')->where('email', $user)->get();
return view('dashboard')->with('man', $users);
        
        
    }
}
