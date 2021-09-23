@extends('layout.parent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'お問い合わせ完了')


{{-- head --}}
@include('layout.head')

{{-- ヘッダー（メニューバー） --}}
@include('layout.header')

{{-- コンテンツ --}}
@section('content')
    <body>
        <div class="container mt-5 p-lg-5">
            <p class="lead ml-2">お問い合わせ完了いたしました。</p>
        </div>
    </body>
@endsection

{{-- フッター（コピーライトバー） --}}
@include('layout.footer')