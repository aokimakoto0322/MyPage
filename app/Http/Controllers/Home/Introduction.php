<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;

class Introduction extends Controller
{
    public function index(){
        //メンバーの取得
        $member = \DB::table('member')->where('enableflag', 1)->orderByDesc('priority')->get();

        //送るデータの作成
        $result = ['memb' => $member];

        return view('introduction', $result);
    }
}
