<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sellcontrol extends Controller
{
    public function sell()
        {
            $data=DB::table('phones')->get();
            $apple = DB::table('phones')->where('brand', 'Apple')->get();
            $samsung = DB::table('phones')->where('brand', 'Samsung')->get();
            $mi = DB::table('phones')->where('brand', 'MI')->get();
            $others = DB::table('phones')->where('brand', 'others')->get();

            $user=DB::table('users')->get('name');
     
            return view('sell',['mobile' => $data], ['mobile1' => $apple], ['mobile2' =>$samsung],['mobile3' =>$mi],['mobile4' =>$others],['user'=>$user]);
        }

}
