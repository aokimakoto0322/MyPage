{{-- 管理画面 - TOPバナー編集TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'TOPバナー確認画面')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <h1 class="mx-4 my-4">TOPバナー確認画面</h1>
    <div class="container">
        <form action="/admin/topbanner3" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
            <h4 class="lead">TOPバナー画像</h4>
            <img src="{{ asset($img) }}">

            <h4 class="mt-4">掲載開始期間</h4>
            <p>{{ $startdate }}</p>

            <h4 class="mt-4">掲載終了期間</h4>
            <p>{{ $enddate }}</p>

            <h4 class="mt-4">バナー押下時の遷移先URL</h4>
            <p>{{ $clickUrl }}</p>

            <h4 class="mt-4">表示・非表示設定</h4>
            @if ($enableflag == 0)
                <p>表示</p>
            @else
                <p>非表示</p>         
            @endif
        
            <input type="hidden" name="img" value="{{ $img }}">
            <input type="hidden" name="startdate" value="{{ $startdate }}">
            <input type="hidden" name="enddate" value="{{ $enddate }}">
            <input type="hidden" name="clickUrl" value="{{ $clickUrl }}">
            <input type="hidden" name="enableflag" value="{{ $enableflag }}">

            <button class="btn btn-primary btn-lg btn-block mt-4" type="submit">設定をする</button>
        </form>
        
    </div>
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')