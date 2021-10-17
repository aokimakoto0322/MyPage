<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;

class News extends Controller
{
    public function index(){
        //タイムゾーン設定
        date_default_timezone_set('Asia/Tokyo');

        //日付取得
        $today = date("Y/m/d h:i:s");

        //newsトピックの取得
        $topics = \DB::table('news')->where('enableflag', '=', 1)->where('startdate' , '<', $today)->where('enddate' , '>', $today)->orderByDesc('id')->get();

        //bladeへ送るデータ作成
        $result = ['news' => $topics];

        return view('news', $result);
    }
}
