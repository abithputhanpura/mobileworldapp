<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recycle;
use Illuminate\Support\Facades\DB;

class recycled extends Controller
{   

    public function create(Request $request)
        {

    $user=DB::table('users')->get('name');

    $recycle = new recycle();
     
    $recycle->user=$user;
    $recycle->brand = $request->input('brand');
    $recycle->model = $request->input('model');

    $recycle->save();

    return redirect()->route('recycle/recycledone');
    
 }
}
