<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\recycle;
use Illuminate\Support\Facades\DB;

class recycled extends Controller
{  

    public function create(Request $request)
        {
            $request->validate([
                'brand' => ['required'],
                'model' => ['required'],
               
            ]);

            $user = \Auth::user()->name;
            $email = \Auth::user()->email;

    $recycle = new recycle();
     
    $recycle->email=$email;
    $recycle->user=$user;
    $recycle->brand = $request->input('brand');
    $recycle->model = $request->input('model');

    $recycle->save();

    return redirect('recycle/recycled');
    
 }
}