{{-- 管理画面 - TOPバナー編集TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'ニュース新規追加完了')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <div class="container">
        <h1>以下の内容で登録が完了しました</h1>
        
        <h4 class="lead">TOPバナー画像</h4>
        <img src="{{ asset($imageurl) }}">

        <h4 class="mt-4">主題</h4>
        <p>{{ $topic }}</p>

        <h4 class="mt-4">詳細</h4>
        <p>{{ $detail }}</p>

        <h4 class="mt-4">掲載開始期間</h4>
        <p>{{ $startdate }}</p>

        <h4 class="mt-4">掲載終了期間</h4>
        <p>{{ $enddate }}</p>

        <h4 class="mt-4">バナー押下時の遷移先URL</h4>
        <p>{{ $url }}</p>

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