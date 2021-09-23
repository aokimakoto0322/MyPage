@extends('layout.parent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', '最新情報')


{{-- head --}}
@include('layout.head')

{{-- ヘッダー（メニューバー） --}}
@include('layout.header')

{{-- コンテンツ --}}
@section('content')
    <body>
        <p>contents</p>
    </body>
@endsection

{{-- フッター（コピーライトバー） --}}
@include('layout.footer')