<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class Topbanner2 extends Controller
{
    public function index(){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

        return view('admin/topbanner2');
    }
}
