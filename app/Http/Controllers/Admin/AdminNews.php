<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminNews extends Controller
{
    public function index(){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

        //タイムゾーン設定
        date_default_timezone_set('Asia/Tokyo');

        //日付取得
        $today = date("Y/m/d H:i:s");
 
        //TOPニュース表示されているもの取得
        $enablenews = \DB::table('news')->where('enableFlag', 1)->where('startdate', '<', $today)->where('enddate', '>', $today)->get();

        //表示期間外のニュース取得
        $disablenews = \DB::table('news')->orWhere('startdate', '>', $today)->orWhere('enddate', '<', $today)->get();

        //非表示設定中ニュース取得
        $nonenews = \DB::table('news')->where('enableFlag', 0)->get();

         //bladeへ送る配列
        $result = [
            'enablenews'   => $enablenews,
            'disablenews'  => $disablenews,
            'nonenews'     => $nonenews
        ];
        
        return view('admin/adminnews', $result);
    }
}
