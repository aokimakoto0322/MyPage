<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Topbannerdelete2 extends Controller
{
    public function index(Request $resuest){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

        //GETパラメータからDBID取得
        $dbid = $resuest->itemid;

        //getパラメータが設定されてない場合はバナートップに遷移
        if(!isset($dbid)){
            return redirect('admin/topbanner');
        }

        //GETパラメータから選択されたバナー取得
        $banner = \DB::table('carousel')->where('id', $dbid)->get();

        //アップロードされた画像削除
        foreach($banner as $item){
            //画像ファイル名取得
            $filename = $item->imgUrl;
        }
        
        //画像削除(URL: banner/img.jpg)
        unlink('banner/'.explode('/',$filename)[2]);

        //DBIDから選択されたバナー削除
        $banner = \DB::table('carousel')->where('id', $dbid)->delete();

        return view('admin/topbannerdelete2');
    }
}