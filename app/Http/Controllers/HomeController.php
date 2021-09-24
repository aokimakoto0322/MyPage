<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(){
        //newsトピックの取得(最大2件)
        $topics = \DB::select('select * from news where enableflag = 1 order by id DESC LIMIT 2');
        return view('home', ['news' => $topics]);
    }
}
