{{-- 管理画面 - TOPバナー編集TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'TOPバナー確認画面')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <h1 class="my-4">TOPバナー確認画面</h1>
    <div class="container">
        <h4 class="lead">TOPバナー画像</h4>
        <img src="{{ asset($img) }}">
    </div>
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')