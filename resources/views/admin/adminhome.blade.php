{{-- 管理画面 - TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', '管理画面')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <div class="container">
        <h1 class="mt-3">ダッシュボード</h1>
        <h2 class="mt-5">表示中バナー</h2>
        @foreach ($enablebanner as $item)
            <div class="row mt-3">
                <div class="col-md-4">
                    <img width="auto" height="200px" src="{{ $item->imgUrl }}">
                </div>
                <div class="col-md-8 mt-5">
                    <h4 class="lead">掲載開始期間：{{ $item->startDate }}</h4>
                    <h4 class="lead">掲載終了期間：{{ $item->endDate }}</h4>
                    <h4 class="lead">バナー押下時の遷移先URL：{{ $item->clickUrl }}</h4>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')