<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Topbanneredit2 extends Controller
{
    public function get(){
        return redirect('admin/topbanner');
    }

    public function post(Request $resuest){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

        //GETパラメータからレコード取得
        $updatebanner = \DB::table('carousel')->where('id', $resuest->itemid)->get();

        foreach($updatebanner as $item){
            //画像ファイル名取得
            $filename = $item->imgUrl;
        }
        

        //画像削除
        Storage::delete($filename);

        //フォームデータ取得（画像保存）
        $banner = array();
        $banner["img"] = $resuest->bannerimg->store('banner');
        $banner["startdate"] = date('Y-m-d h:i:s', strtotime($resuest->startdate));
        $banner["enddate"] = date('Y-m-d h:i:s', strtotime($resuest->enddate));
        $banner["clickUrl"] = $resuest->clickUrl;
        $banner["enableflag"] = $resuest->enableflag;

        //SQLにバナーデータをUPDATE
        $result = \DB::table('carousel')
        ->where('id', $resuest->itemid)
        ->update([
            'imgUrl'    => '/'.$banner["img"],
            'startDate' => date('Y-m-d h:i:s', strtotime($resuest->startdate)),
            'endDate'   => date('Y-m-d h:i:s', strtotime($resuest->enddate)),
            'clickUrl'  => $banner["clickUrl"],
            'enableFlag'=> $banner["enableflag"]
        ]);

        return view('admin/topbanneredit2', $banner);
    }
}
