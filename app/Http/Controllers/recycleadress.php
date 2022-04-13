<?php

namespace App\Http\Controllers;
use App\Models\recycledetail;
use Illuminate\Http\Request;

class recycleadress extends Controller
{
    public function address(Request $request)
    {

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