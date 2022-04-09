<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function screen()
        {
            $data=DB::table('phones')->pluck('model');
            return view('recycle',['data' => $data]);

            return view('recycledone');
        }

}
