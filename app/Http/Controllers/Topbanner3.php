<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Topbanner3 extends Controller
{
    public function get(){
        return redirect('admin/topbanner');
    }

    public function post(Request $resuest){
        //セッションスタート
        session_start();

        //ログイン情報保持確認
        if(!isset($_SESSION['userid'])){
            return \App::abort(404);
        }
        

        //SQLにバナーデータを保存
        \DB::table('carousel')->insert([
            'imgUrl'    => $resuest->img,
            'startDate' => $resuest->startdate,
            'endDate'   => $resuest->enddate,
            'clickUrl'  => $resuest->clickUrl,
            'enableFlag'=> $resuest->enableflag
        ]);

        return view('admin/topbanner3');
    }
}
