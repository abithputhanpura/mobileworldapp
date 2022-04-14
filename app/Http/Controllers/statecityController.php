<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\statelist;
class statecityController extends Controller
{
    public function cr ()
    {
        return view('stateslist');
    }


    public function data(Request $request)
    {

    $statelist = new statelist;

    $statelist->state= $request->input('state');
    $statelist->city = $request->input('city');


    $statelist->save();
    return redirect('/');
}
}