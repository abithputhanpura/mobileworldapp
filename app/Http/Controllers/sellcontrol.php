<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sellcontrol extends Controller
{
    public function sell()
        {

            $apple = DB::table('smartphones')->where('brand', 'Apple')->get();
            $samsung = DB::table('smartphones')->where('brand', 'Samsung')->get();
            $mi = DB::table('smartphones')->where('brand', 'mi')->get();
            $others = DB::table('smartphones')->where('brand', 'others')->get();

            $user=DB::table('users')->get();
     
            return view('sell', ['mobile1' => $apple], ['mobile2' =>$samsung],['mobile3' =>$mi],['mobile4' =>$others],['user'=>$user]);
        }

}
