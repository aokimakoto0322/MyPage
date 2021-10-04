<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index(Request $request){

        //GETパラメータからAuthを取得
        $auth = $request->auth;

        //日付を取得
        $today = date("Ym");

        //日付とAuthパラメータが不一致の場合は404リダイレクト
        if($auth != $today){
            return \App::abort(404);
        }

        $user = array();
        $user['id'] = "";
        $user['password'] = "";
        return view('admin', $user);
    }

    public function post(Request $request){

        session_start();

        //ログアウト処理
        if($request['logout']){
            $_SESSION = array();

            if (ini_get("session.use_cookies")) {
                setcookie(session_name(), '', time() - 42000, '/');
            }
            session_destroy();

            return redirect('/admin');
        }

        $user = array();
        $user['id'] = $request['id'];
        $user['password'] = $request['password'];

        //ユーザー取得
        $result = \DB::table('admin')->where('userid', $user['id'])->where('password', hash('sha256', $user['password']))->limit(1)->get();

        if(count($result) == 1){
            //ログイン成功
            $_SESSION['userid'] = $request['id'];

            return redirect('admin/adminhome');

        }else{
            //ログイン失敗
            //ログイン失敗メッセージ
            $message = array();

            $message['fail'] = "ログインに失敗しました";

            //ログイン失敗
            return view('admin', $message);
        }
    }
}
