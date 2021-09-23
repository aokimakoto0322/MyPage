<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Confirm extends Controller
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
            return view('confirm', $contact);
        }
        return redirect('/');
    }
}
