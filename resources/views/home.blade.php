@extends('layout.parent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'home')


{{-- head --}}
@include('layout.head')

{{-- ヘッダー（メニューバー） --}}
@include('layout.header')

{{-- コンテンツ --}}
@section('content')
    <h1>内容</h1>
@endsection

{{-- フッター（コピーライトバー） --}}
@include('layout.footer')