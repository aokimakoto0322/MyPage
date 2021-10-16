<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Member extends Controller
{
    public function index(){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

        //表示中のメンバー一蘭を取得
        $enablemember = \DB::table('member')->where('enableflag', 1)->orderByDesc('priority')->get();

        //非表示中のメンバー一覧を取得
        $disablemember = \DB::table('member')->where('enableflag', 0)->orderByDesc('priority')->get();
        

        //bladeへ送る配列
        $result = [
            'enable'   => $enablemember,
            'disable'  => $disablemember
        ];

        return view('/admin/member', $result);
    }
}
