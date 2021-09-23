<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(){
        //トピックの取得
        $topics = \DB::select('select * from news where enableflag = 1');
        return view('home', ['news' => $topics]);
    }
}
