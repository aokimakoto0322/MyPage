<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberEdit2 extends Controller
{
    public function get(){
        return redirect('admin/member');
    }

    public function post(Request $request){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

        //GETパラメータからレコード取得
        $updatemember = \DB::table('member')->where('id', $request->itemid)->get();

        foreach($updatemember as $item){
            //画像ファイル名取得
            $filename = $item->image;
        }

        //画像削除(URL: member/img.jpg)
        unlink('member/'.explode('/',$filename)[2]);

        //bladeへ送るarrayリスト
        $member = array();
        $member['name'] = $request->name;
        $member['nameAlpha'] = $request->nameAlpha;
        $member['introVideo'] = $request->introVideo;
        $member['youtube'] = $request->youtube;
        $member['twitter'] = $request->twitter;
        $member['enableflag'] = $request->enableflag;
        $member['image'] = '/'.$request->image->store('member');
        $member['intro'] = $request->intro;
        $member['priority'] = $request->priority;

        //SQLにバナーデータをUPDATE
        $result = \DB::table('member')
        ->where('id', $request->itemid)
        ->update([
            'name'      => $member['name'],
            'nameAlpha' => $member['nameAlpha'],
            'introVideo'=> $member['introVideo'],
            'youtube'   => $member['youtube'],
            'twitter'   => $member['twitter'],
            'enableflag'=> $member['enableflag'],
            'image'     => $member['image'],
            'intro'     => $member['intro'],
            'priority'  => $member['priority']
        ]);

        return view('admin/memberedit2', $member);
    }
}
