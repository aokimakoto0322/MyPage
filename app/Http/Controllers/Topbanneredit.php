<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Topbanneredit extends Controller
{
    public function index(Request $request){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

        //GETパラメータのDBID取得
        $editbanner = \DB::table('carousel')->where('id', $request->itemid)->get();

        //bladeへ送る配列定義
        $result = [
            'editbanner' => $editbanner
        ];

        return view('admin/topbanneredit', $result);
    }
}
