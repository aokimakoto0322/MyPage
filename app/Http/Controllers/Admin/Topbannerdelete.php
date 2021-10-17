<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Topbannerdelete extends Controller
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

        //DBIDから選択されたバナー情報取得
        $banner = \DB::table('carousel')->where('id', $dbid)->get();

        //bladeへ送る配列生成
        $result = [
            'banner' => $banner
        ];

        return view('admin/topbannerdelete', $result);
    }
}
