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
        <a class="btn btn-primary" href="/admin/member2">新規メンバー追加</a>

        <h2 class="mt-3">表示設定中メンバー</h2>
        @foreach ($enable as $item)
            <div class="row mt-3">
                <div class="col-md-4">
                    <img width="auto" height="500px" src="{{ $item->image }}">
                </div>

                <div class="col-md-8">
                    <h4 class="lead">名前：{{ $item->name }}</h4>
                    <h4 class="lead">名前（アルファベット）：{{ $item->nameAlpha }}</h4>
                    <h4 class="lead">YoutubeURL：{{ $item->youtube }}</h4>
                    <h4 class="lead">TwitterURL：{{ $item->twitter }}</h4>
                    <h4 class="lead">紹介文：{{ $item->intro }}</h4>
                    <h4 class="lead">表示優先度：{{ $item->priority }}</h4>
                    @if ($item->introVideo)
                        <div class="ratio ratio-16x9">
                            <iframe src="{{ $item->introVideo }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    @endif

                </div>
            </div>
            
        @endforeach
    </div>
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')