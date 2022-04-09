<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\sell;

class sellsubmit extends Controller
{
    public function create(Request $request)
 {
    $request->validate([
      'brand' => 'required',
      'model' => 'required',
      'variant' => 'required'
   
    ]);


   //  post control
    $sell = new sell();

    $sell->brand = $request->input('brand');
    $sell->model = $request->input('model');
    $sell->variant = $request->input('variant');
    $sell->warranty= $request->input('option1');
    $sell->charger= $request->input('option2');
    $sell->box= $request->input('option3');
    $sell->invoice= $request->input('option4');


    $sell->save();

    return redirect('sell/sold');
 }
}
