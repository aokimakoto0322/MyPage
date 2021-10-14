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
        @foreach ($banner as $item)
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
            <div class="mt-4 mx-auto">
                <p>以上のバナーを削除します。</p>
                <a class="btn btn-danger" href="/admin/topbannerdelete2?itemid={{$item->id}}">削除</a>
            </div>
        @endforeach
    </div>

@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')