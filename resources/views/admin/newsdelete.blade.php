{{-- 管理画面 - TOPバナー　TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'ニュース削除確認画面')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <div class="container">
        @foreach ($news as $item)
            <div class="row my-3">
                <img class="col-sm-4" src="{{ $item->imageUrl ?? '' }}">
                <div class="col-sm-8">
                    <h4 class="lead">表題：{{ $item->topic }}</h4>
                    <h4 class="lead">詳細情報：{{ $item->detail }}</h4>
                    <h4 class="lead">掲載開始：{{ $item->startdate }}</h4>
                    <h4 class="lead">掲載終了：{{ $item->enddate }}</h4>
                    <h4 class="lead">押下時遷移先URL：{{ $item->url }}</h4>
                    @if ($item->enableflag == 1)
                        <h4 class="lead">表示・非表示設定：表示</h4>
                    @else
                        <h4 class="lead">表示・非表示設定：非表示</h4>
                    @endif
                    
                </div>
            </div>
            <div class="mt-4 mx-auto">
                <p>以上のバナーを削除します。</p>
                <a class="btn btn-danger" href="/admin/newsdelete2?itemid={{$item->id}}">削除</a>
            </div>
        @endforeach
    </div>

@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')