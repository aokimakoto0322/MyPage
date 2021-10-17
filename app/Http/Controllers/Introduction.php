<?php

namespace App\Http\Controllers;

class Introduction extends Controller
{
    public function index(){
        //メンバーの取得
        $member = \DB::table('member')->orderByDesc('priority')->get();

        //送るデータの作成
        $result = ['memb' => $member];

        return view('introduction', $result);
    }
}
