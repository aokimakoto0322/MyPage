<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NewsDelete extends Controller
{
    public function index(Request $request){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

        //GETパラメータからDBID取得
        $dbid = $request->itemid;

        //DBIDから対象メンバー取得
        $news = \DB::table('news')->where('id', $dbid)->get();

        //bladeへ送る配列
        $result = [
            'news' => $news
        ];

        return view('/admin/newsdelete', $result);
    }
}
