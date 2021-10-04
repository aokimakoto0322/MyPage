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
            return redirect('/admin?auth='.date("Ym"));
        }

        //ページ遷移チェック
        if($resuest->page != "page1"){
            return redirect('admin/topbanner2');
        }
        //画像保存
        ;

        //フォームデータ取得
        $banner = array();
        $banner["img"] = "/storage/app/".$resuest->bannerimg->store('banner');
        $banner["startdate"] = $resuest->startdate;
        $banner["enddate"] = $resuest->enddate;
        $banner["enableflag"] = $resuest->enableflag;

        
        return view('admin/topbanner2', $banner);
    }
}
