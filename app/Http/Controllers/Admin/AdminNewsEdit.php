<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminNewsEdit extends Controller
{
    public function index(Request $request){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

        //GETパラメータのDBID取得
        $editnews = \DB::table('news')->where('id', $request->itemid)->get();

        //bladeへ送る配列定義
        $result = [
            'editnews' => $editnews
        ];

        return view('admin/adminnewsedit', $result);
    }
}
