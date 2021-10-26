<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NewsDelete2 extends Controller
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

        //getパラメータが設定されてない場合はバナートップに遷移
        if(!isset($dbid)){
            return redirect('admin/adminhome');
        }

        //DBIDから対象メンバー取得
        $news = \DB::table('news')->where('id', $dbid)->get();

        foreach($news as $item){
            //画像ファイル名取得
            $filename = $item->imageUrl;
        }
        
        //画像削除(URL: news/img.jpg)
        unlink('news/'.explode('/',$filename)[2]);

        //DBからメンバーを物理削除
        \DB::table('news')->where('id', $dbid)->delete();



        return view('/admin/newsdelete2');
    }
}