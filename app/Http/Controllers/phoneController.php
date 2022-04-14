<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phonedetails;

class phoneController extends Controller
{
    public function cr ()
    {
        return view('smartphones');
    }


    public function data(Request $request)
    {

    $phonedetail = new phonedetails;

    $phonedetail->brand= $request->input('brand');
    $phonedetail->model = $request->input('model');
    $phonedetail->price= $request->input('price');


    $phonedetail->save();
    return redirect('/');
}
}