<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberAdd2 extends Controller
{
    public function post(Request $request){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

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

        //リクエストの情報からDBにメンバー情報をInsert
        \DB::table('member')->insert([
            'name'       => $member['name'],
            'nameAlpha'  => $member['nameAlpha'],
            'introVideo' => $member['introVideo'],
            'youtube'    => $member['youtube'],
            'twitter'    => $member['twitter'],
            'enableflag' => $member['enableflag'],
            'image'      => $member['image'],
            'intro'      => $member['intro'],
            'priority'   => $member['priority']
        ]);

        return view('/admin/memberadd2', $member);
    }
}
