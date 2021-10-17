{{-- 管理画面 - TOPバナー編集TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'メンバー削除完了画面')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <h2 class="mt-4">削除完了しました。</h2>
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')