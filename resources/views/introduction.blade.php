@extends('layout.parent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'メンバー紹介')

{{-- head --}}
@include('layout.head')

{{-- ヘッダー（メニューバー） --}}
@include('layout.header')

{{-- コンテンツ --}}
@section('content')
    <body>
        <p>紹介</p>
    </body>
@endsection

{{-- フッター（コピーライトバー） --}}
@include('layout.footer')