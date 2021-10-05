<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Topbanner2 extends Controller
{
    public function get(){
        return redirect('admin/topbanner2');
    }

    public function post(Request $resuest){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

        //フォームデータ取得（画像保存）
        $banner = array();
        $banner["img"] = $resuest->bannerimg->store('banner');
        $banner["startdate"] = $resuest->startdate;
        $banner["enddate"] = $resuest->enddate;
        $banner["clickUrl"] = $resuest->clickUrl;
        $banner["enableflag"] = $resuest->enableflag;

        
        return view('admin/topbanner2', $banner);
    }
}
