<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\solddetail;
use Illuminate\Support\Facades\DB;

class addresscontroller extends Controller
{   
  
function index()
    {
     $country_list = DB::table('statelists')
         ->groupBy('id','state')->distinct()
         ->get();
     return view('sellsubmitted')->with('country_list', $country_list);
    }

    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('statelists')
       ->where($select, $value)
       ->groupBy('id',$dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }


    public function addres(Request $request)
    {
  

      $email = \Auth::user()->email;

    $solddetail = new solddetail;

    $solddetail->email = $email;
    $solddetail->firstname= $request->input('firstname');
    $solddetail->lastname = $request->input('lastname');
    $solddetail->address_detail= $request->input('address');
    $solddetail->state= $request->input('state');
    $solddetail->city= $request->input('city');
    $solddetail->pincode= $request->input('pincode');
    $solddetail->phone= $request->input('phone');

    
    $solddetail->save();

    return redirect('/');
    }


}

?>