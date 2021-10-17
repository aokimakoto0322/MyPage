<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(){
        //タイムゾーン設定
        date_default_timezone_set('Asia/Tokyo');

        //日付取得
        $today = date("Y/m/d h:i:s");

        //カルーセルの取得
        $carousel = \DB::table('carousel')->where('enableFlag', 1)->where('startDate', '<', $today)->where('endDate', '>', $today)->get();

        //newsトピックの取得(最大2件)
        $topics = \DB::table('news')->where('enableflag', '=', 1)->where('startdate' , '<', $today)->where('enddate' , '>', $today)->orderByDesc('id')->limit(2)->get();

        //bladeへ送る配列生成
        $result = [
            'news' => $topics,
            'carousel' => $carousel
        ];

        //blade表示
        return view('home', $result);
    }
}
