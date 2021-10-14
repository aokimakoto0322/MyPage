{{-- 管理画面 - TOPバナー　TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'TOPバナー')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <div class="container">
        <h1>選択したバナーを削除しました。</h1>
    </div>

@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')