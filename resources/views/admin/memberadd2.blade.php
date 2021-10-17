{{-- 管理画面 - TOPバナー編集TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'メンバー登録完了画面')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <div class="container">
        <h1>以下の内容で登録が完了しました</h1>
        
        <h4 class="lead">メイン画像</h4>
        <img src="{{ asset($image) }}">

        <h4 class="mt-4">名前</h4>
        <p>{{ $name }}</p>

        <h4 class="mt-4">名前（アルファベット）</h4>
        <p>{{ $nameAlpha }}</p>

        <h4 class="mt-4">紹介動画URL</h4>
        <p>{{ $introVideo }}</p>

        <h4 class="mt-4">YouTubeURL</h4>
        <p>{{ $youtube }}</p>

        <h4 class="mt-4">TwitterURL</h4>
        <p>{{ $twitter }}</p>

        <h4 class="mt-4">紹介文</h4>
        <p>{{ $intro }}</p>

        <h4 class="mt-4">表示優先度</h4>
        <p>{{ $priority }}</p>

        <h4 class="mt-4">表示・非表示設定</h4>
        @if ($enableflag == 0)
            <p>非表示</p>
        @else
            <p>表示</p>         
        @endif  
    </div>
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')