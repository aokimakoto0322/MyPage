<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHome extends Controller
{
    public function index(){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return redirect('/admin');
        }

        //タイムゾーン設定
        date_default_timezone_set('Asia/Tokyo');

        //日付取得
        $today = date("Y/m/d H:i:s");

        //TOPバナー表示されているもの取得
        $enablebanner = \DB::table('carousel')->where('enableFlag', 1)->where('startDate', '<', $today)->where('endDate', '>', $today)->get();

        //bladeへ送る配列
        $result = [
            'enablebanner'   => $enablebanner
        ];

        return view('/admin/adminhome', $result);
    }
}
