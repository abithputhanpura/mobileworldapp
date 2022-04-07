<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sellcontrol extends Controller
{
    public function sell()
        {

            $apple = DB::table('smartphone')->where('brand', 'Apple')->get();
            $samsung = DB::table('smartphone')->where('brand', 'Samsung')->get();
            $mi = DB::table('smartphone')->where('brand', 'mi')->get();
            $others = DB::table('smartphone')->where('brand', 'others')->get();

            $user=DB::table('users')->get('name');
     
            return view('sell', ['mobile1' => $apple], ['mobile2' =>$samsung],['mobile3' =>$mi],['mobile4' =>$others],['user'=>$user]);
        }

}
