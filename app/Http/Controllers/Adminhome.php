<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHome extends Controller
{
    public function index(){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return redirect('/admin');
        }

        return view('/admin/adminhome');
    }
}
