<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Send extends Controller
{
    public function index(){
        return redirect('/');
    }

    public function post(Request $request){
        $contact = array();
        $contact['name'] = $request['name'];
        $contact['mail'] = $request['mail'];
        $contact['doc']  = $request['maindocument'];

        //入力チェック
        if($request['name'] != ""){
            //POSTメール処理


            
            return view('send', $contact);
        }
        return redirect('/');
    }
}
