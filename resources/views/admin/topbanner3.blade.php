{{-- 管理画面 - TOPバナー完了画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'TOPバナー完了画面')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')

{{-- コンテンツ --}}
@section('admincontent')
    <h1 class="mx-4 my-4">登録が完了しました。</h1>
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')