<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function recycleindex()
    {
     $country_list = DB::table('statelists')
         ->groupBy('id','state')->distinct()
         ->get();
     return view('recycled')->with('country_list', $country_list);
    }

    public function recycledfetch(Request $request)
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


   
    }

?>


