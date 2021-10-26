<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminNewsEdit2 extends Controller
{
    public function get(){
        return redirect('admin/adminnews');
    }

    public function post(Request $request){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

        //GETパラメータからレコード取得
        $updatenews = \DB::table('news')->where('id', $request->itemid)->get();

        foreach($updatenews as $item){
            //画像ファイル名取得
            $filename = $item->imageUrl;
        }
        

        //画像削除(URL: news/img.jpg)
        unlink('news/'.explode('/',$filename)[2]);

        //フォームデータ取得（画像保存）
        $news = array();
        $news['topic'] = $request->topic;
        $news['detail'] = $request->detail;
        $news["startdate"] = date('Y-m-d H:i:s', strtotime($request->startdate));
        $news["enddate"] = date('Y-m-d H:i:s', strtotime($request->enddate));
        $news['enableflag'] = $request->enableflag;
        $news['url'] = $request->url;
        $news['imageurl'] = '/'.$request->image->store('news');

        //SQLにバナーデータをUPDATE
        $result = \DB::table('news')
        ->where('id', $request->itemid)
        ->update([
            'topic'   => $news['topic'],
            'detail'  => $news['detail'],
            'startdate' => $news['startdate'],
            'enddate' => $news['enddate'],
            'enableflag' => $news['enableflag'],
            'url' => $news['url'],
            'imageUrl'    => $news["imageurl"]
        ]);

        return view('admin/adminnewsedit2', $news);
    }
}
