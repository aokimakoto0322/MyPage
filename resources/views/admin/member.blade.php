{{-- 管理画面 - TOPバナー　TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'メンバー')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <div class="container mt-4">
        <a class="btn btn-primary" href="/admin/memberadd">新規メンバー追加</a>

        <h2 class="mt-3">表示設定中メンバー</h2>
        @foreach ($enable as $item)
            <div class="row my-5">
                <div class="col-md-4">
                    <img width="100%" height="auto" src="{{ $item->image }}">
                </div>

                <div class="col-md-8">
                    <h4 class="lead">名前：{{ $item->name }}</h4>
                    <h4 class="lead">名前（アルファベット）：{{ $item->nameAlpha }}</h4>
                    <h4 class="lead">YoutubeURL：{{ $item->youtube }}</h4>
                    <h4 class="lead">TwitterURL：{{ $item->twitter }}</h4>
                    <h4 class="lead">紹介文：{{ $item->intro }}</h4>
                    <h4 class="lead">表示優先度：{{ $item->priority }}</h4>
                    <h4 class="lead">埋め込み動画URL：{{ $item->introVideo }}</h4>
                    <a class="btn btn-secondary" href="/admin/memberedit?itemid={{$item->id}}">編集</a>
                    <a class="btn btn-danger" href="/admin/memberdelete?itemid={{$item->id}}">削除</a>
                </div>
            </div>
        @endforeach

        <h2 class="mt-3">非表示設定中メンバー</h2>
        @foreach ($disable as $item)
            <div class="row my-5">
                <div class="col-md-4">
                    <img width="100%" height="auto" src="{{ $item->image }}">
                </div>

                <div class="col-md-8">
                    <h4 class="lead">名前：{{ $item->name }}</h4>
                    <h4 class="lead">名前（アルファベット）：{{ $item->nameAlpha }}</h4>
                    <h4 class="lead">YoutubeURL：{{ $item->youtube }}</h4>
                    <h4 class="lead">TwitterURL：{{ $item->twitter }}</h4>
                    <h4 class="lead">紹介文：{{ $item->intro }}</h4>
                    <h4 class="lead">表示優先度：{{ $item->priority }}</h4>
                    <h4 class="lead">埋め込み動画URL：{{ $item->introVideo }}</h4>
                    <a class="btn btn-secondary" href="/admin/memberedit?itemid={{$item->id}}">編集</a>
                    <a class="btn btn-danger" href="/admin/memberdelete?itemid={{$item->id}}">削除</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')