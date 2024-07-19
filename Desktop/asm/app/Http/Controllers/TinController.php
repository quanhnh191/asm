<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
            function chiTiet($id=0){
        $tin = DB::table('tin')->where('id', $id)->first();
            $data = ['id' => $id, 'tin'=>$tin];
            return view("post", $data);
        }

}
