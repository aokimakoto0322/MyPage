<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MemberEdit extends Controller
{
    public function index(Request $request){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }

        //GETパラメータのDBID取得
        $member = \DB::table('member')->where('id', $request->itemid)->get();

        //bladeへ送る配列定義
        $result = [
            'member' => $member
        ];

        return view('admin/memberedit', $result);
    }
}