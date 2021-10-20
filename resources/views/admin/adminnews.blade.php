{{-- 管理画面 - TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'ニュース管理TOP')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <div class="container">
        <h2 class="mt-4">表示中ニュース</h2>
            @foreach ($enablenews as $item)
                    <div class="row">
                        <img class="col-sm-4" src="{{ $item->imageUrl ?? '' }}">
                        <div class="col-sm-8">
                            <h4 class="lead">表題：{{ $item->topic }}</h4>
                            <h4 class="lead">詳細情報：{{ $item->detail }}</h4>
                            <h4 class="lead">掲載開始：{{ $item->startdate }}</h4>
                            <h4 class="lead">掲載終了：{{ $item->enddate }}</h4>
                            <h4 class="lead">押下時遷移先URL：{{ $item->url }}</h4>
                            <a class="btn btn-secondary" href="/admin/newsedit?itemid={{$item->id}}">編集</a>
                            <a class="btn btn-danger" href="/admin/newsdelete?itemid={{$item->id}}">削除</a>
                        </div>
                    </div>
            @endforeach

        <h2 class="mt-4">表示期間外ニュース</h2>
            @foreach ($disablenews as $item)
                    <div class="row">
                        <img class="col-sm-4" src="{{ $item->imageUrl ?? '' }}">
                        <div class="col-sm-8">
                            <h4 class="lead">表題：{{ $item->topic }}</h4>
                            <h4 class="lead">詳細情報：{{ $item->detail }}</h4>
                            <h4 class="lead">掲載開始：{{ $item->startdate }}</h4>
                            <h4 class="lead">掲載終了：{{ $item->enddate }}</h4>
                            <h4 class="lead">押下時遷移先URL：{{ $item->url }}</h4>
                            <a class="btn btn-secondary" href="/admin/newsedit?itemid={{$item->id}}">編集</a>
                            <a class="btn btn-danger" href="/admin/newsdelete?itemid={{$item->id}}">削除</a>
                        </div>
                    </div>
            @endforeach

        <h2 class="mt-4">非表示設定中ニュース</h2>
            @foreach ($nonenews as $item)
                <div class="row">
                    <img class="col-sm-4" src="{{ $item->imageUrl ?? '' }}">
                    <div class="col-sm-8">
                        <h4 class="lead">表題：{{ $item->topic }}</h4>
                        <h4 class="lead">詳細情報：{{ $item->detail }}</h4>
                        <h4 class="lead">掲載開始：{{ $item->startdate }}</h4>
                        <h4 class="lead">掲載終了：{{ $item->enddate }}</h4>
                        <h4 class="lead">押下時遷移先URL：{{ $item->url }}</h4>
                        <a class="btn btn-secondary" href="/admin/newsedit?itemid={{$item->id}}">編集</a>
                        <a class="btn btn-danger" href="/admin/newsdelete?itemid={{$item->id}}">削除</a>
                    </div>
                </div>
            @endforeach
    </div>
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')