<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Detail extends Controller
{
    public function index(Request $request){
        //GETパラメータ取得
        $name = $request->name;

        //GETパラメータからメンバーデータ取得
        $member = \DB::table('member')->where('nameAlpha', $name)->get();

        //bladeに引き渡すデータセット
        $result = ['memb' => $member];

        return view('detail', $result);
    }
}
