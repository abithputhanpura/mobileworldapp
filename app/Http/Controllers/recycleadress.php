<?php

namespace App\Http\Controllers;
use App\Models\recycledetail;
use Illuminate\Http\Request;

class recycleadress extends Controller
{
    public function address(Request $request)
    {
        $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'address' => ['required'],
            'state' => ['required'],
            'city' => ['required'],
            'pincode' => 'required|regex:/[1-9]/|not_regex:/[a-z]/|min:6|max:6',
            'phone' => 'required|regex:/[0-9]/|not_regex:/[a-z]/|min:10|max:10'],
            [
              'firstname.required' => 'Firstname is required',
              'lastname.required' => 'lastname is required',
              'address.required' => 'address is required',
              'pincode.required' => 'pincode is 6 digit',
              'phone.required' => 'phone is 10 digit',
              'state.required' => 'choose state',
              'city.required' =>  'choose city'
        ]);

        $email = \Auth::user()->email;    
    $recycledetail= new recycledetail;
    $recycledetail->email = $email;
    $recycledetail->firstname= $request->input('firstname');
    $recycledetail->lastname = $request->input('lastname');
    $recycledetail->address_detail= $request->input('address');
    $recycledetail->state= $request->input('state');
    $recycledetail->city= $request->input('city');
    $recycledetail->pincode= $request->input('pincode');
    $recycledetail->phone= $request->input('phone');
    
    $recycledetail->save();

    return redirect('/');
    }
}
?>