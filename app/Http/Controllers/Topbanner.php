<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Topbanner extends Controller
{
    public function index(){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return redirect('/admin?auth='.date("Ym"));
        }
        
        return view('admin/topbanner');
    }
}
