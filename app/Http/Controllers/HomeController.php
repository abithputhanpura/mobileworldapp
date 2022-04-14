<?php

namespace App\Http\Controllers;
use App\Models\recycledetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{ 
    public function recycled()
    {
     $country_list = DB::table('phonedetails')
         ->groupBy('Brand')
         ->get();
     return view('recycle')->with('country_list', $country_list);
    }

    public function recyclefetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('phonedetails')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
}
?>
