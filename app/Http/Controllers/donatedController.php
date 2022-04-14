<?php

namespace App\Http\Controllers;
use App\Models\donatedetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class donatedController extends Controller
{
    function index()
    {
     $country_list = DB::table('statelists')->distinct('state')
         ->groupBy('id','state')
         ->get();
     return view('donatedone')->with('country_list', $country_list);
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

    $donatedetail = new donatedetail;
    $donatedetail->email = $email;
    $donatedetail->firstname= $request->input('firstname');
    $donatedetail->lastname = $request->input('lastname');
    $donatedetail->address_detail= $request->input('address');
    $donatedetail->state= $request->input('state');
    $donatedetail->city= $request->input('city');
    $donatedetail->pincode= $request->input('pincode');
    $donatedetail->phone= $request->input('phone');

    
    $donatedetail->save();

    return redirect('/');
    }


}

?>
