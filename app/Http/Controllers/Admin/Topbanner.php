<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Topbanner extends Controller
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
 
        //TOPバナー表示されているもの取得
        $enablebanner = \DB::table('carousel')->where('enableFlag', 1)->where('startDate', '<', $today)->where('endDate', '>', $today)->get();
 
        //TOPバナーで表示期間外のものを取得
        $outlangebanner = \DB::table('carousel')->orWhere('startDate', '>', $today)->orWhere('endDate', '<', $today)->get();
 
        //TOPバナーで非表示設定のものを取得
        $disablebanner = \DB::table('carousel')->where('enableFlag', 0)->get();

         //bladeへ送る配列
        $result = [
            'enablebanner'   => $enablebanner,
            'outlangebanner' => $outlangebanner,
            'disablebanner'  => $disablebanner
        ];
        
        return view('admin/topbanner', $result);
    }
}
