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
    <div class="container mt-4">
        <div class="my-3">
            <a class="btn btn-primary" href="/admin/topbanner2">バナー新規作成</a>
        </div>
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
                    <a class="btn btn-secondary" href="/admin/topbanneredit?itemid={{$item->id}}">編集</a>
                    <a class="btn btn-danger" href="/admin/topbannerdelete?itemid={{$item->id}}">削除</a>
                </div>
            </div>
        @endforeach

        <h2 class="mt-5">表示期間外バナー</h2>
        @foreach ($outlangebanner as $item)
            <div class="row mt-3">
                <div class="col-md-4">
                    <img width="auto" height="200px" src="{{ $item->imgUrl }}">
                </div>
                <div class="col-md-8 mt-5">
                    <h4 class="lead">掲載開始期間：{{ $item->startDate }}</h4>
                    <h4 class="lead">掲載終了期間：{{ $item->endDate }}</h4>
                    <h4 class="lead">バナー押下時の遷移先URL：{{ $item->clickUrl }}</h4>
                    <a class="btn btn-secondary" href="/admin/topbanneredit?itemid={{$item->id}}">編集</a>
                    <a class="btn btn-danger" href="/admin/topbannerdelete?itemid={{$item->id}}">削除</a>
                </div>
            </div>
        @endforeach

        <h2 class="mt-5">非表示設定中バナー</h2>
        @foreach ($disablebanner as $item)
            <div class="row mt-3">
                <div class="col-md-4">
                    <img width="auto" height="200px" src="{{ $item->imgUrl }}">
                </div>
                <div class="col-md-8 mt-5">
                    <h4 class="lead">掲載開始期間：{{ $item->startDate }}</h4>
                    <h4 class="lead">掲載終了期間：{{ $item->endDate }}</h4>
                    <h4 class="lead">バナー押下時の遷移先URL：{{ $item->clickUrl }}</h4>
                    <a class="btn btn-secondary" href="/admin/topbanneredit?itemid={{$item->id}}">編集</a>
                    <a class="btn btn-danger" href="/admin/topbannerdelete?itemid={{$item->id}}">削除</a>
                </div>
            </div>
        @endforeach
    </div>
    
    

@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')