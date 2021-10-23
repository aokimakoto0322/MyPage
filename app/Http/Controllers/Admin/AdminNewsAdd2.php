<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminNewsAdd2 extends Controller
{
    public function index(Request $request){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

        //bladeへ送るarrayリスト
        $news = array();
        $news['topic'] = $request->topic;
        $news['detail'] = $request->detail;
        $news["startdate"] = date('Y-m-d H:i:s', strtotime($request->startdate));
        $news["enddate"] = date('Y-m-d H:i:s', strtotime($request->enddate));
        $news['enableflag'] = $request->enableflag;
        $news['url'] = $request->url;
        $news['imageurl'] = '/'.$request->image->store('news');

        //リクエストの情報からDBにメンバー情報をInsert
        \DB::table('news')->insert([
            'topic'     => $news['topic'],
            'detail'    => $news['detail'],
            'startdate' => $news['startdate'],
            'enddate'   => $news['enddate'],
            'enableflag'=> $news['enableflag'],
            'url'       => $news['url'],
            'imageurl'  => $news['imageurl']
        ]);

        
        return view('admin/adminnewsadd2', $news);
    }
}
