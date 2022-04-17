<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function donate()
    {
        return view('donate');


    }

    public function donatecreate(Request $request)
    {

      $email = \Auth::user()->email;
      //  post control
      $request->validate([
        'brand' => ['required'],
        'model' => ['required']],
        [
          'brand.required' => '*required',
               'model.required' => '*required',     
    ]);
      
       $donate = new donate();
   
       $donate->email = $email;
       $donate->brand = $request->input('brand');
       $donate->message= $request->input('model');
   
   
       $donate->save();
   
       return redirect('donate/donated');

}
}
   