<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Topbanner3 extends Controller
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
        $banner["startdate"] = date('Y-m-d H:i:s', strtotime($resuest->startdate));
        $banner["enddate"] = date('Y-m-d H:i:s', strtotime($resuest->enddate));
        $banner["clickUrl"] = $resuest->clickUrl;
        $banner["enableflag"] = $resuest->enableflag;

        //SQLにバナーデータを保存
        \DB::table('carousel')->insert([
            'imgUrl'    => '/'.$banner["img"],
            'startDate' => date('Y-m-d H:i:s', strtotime($resuest->startdate)),
            'endDate'   => date('Y-m-d H:i:s', strtotime($resuest->enddate)),
            'clickUrl'  => $resuest->clickUrl,
            'enableFlag'=> $resuest->enableflag
        ]);

        
        return view('admin/topbanner3', $banner);
    }
}
