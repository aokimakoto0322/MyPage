<?php

namespace App\Http\Controllers;

class News extends Controller
{
    public function index(){
        return view('news');
    }
}
