{{-- 管理画面 - TOPバナー編集TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'メンバー削除確認画面')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <div class="container">
        @foreach ($member as $item)
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
                </div>
            </div>

            <h2>以上のメンバー情報を削除します。</h2>
            <a class="btn btn-danger" href="/admin/memberdelete2?itemid={{$item->id}}">削除</a>
        @endforeach
    </div>
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')