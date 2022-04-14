<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmController extends Controller
{
    public function work(Request $request)
    {
        $role = Auth::user()->name;

        if($role=='admin')
        {

                return view('admin');
        }
        else
        {
            return redirect('dashboard');
        }
    }


}
