@extends('layout.parent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'home')


{{-- head --}}
@include('layout.head')

{{-- ヘッダー（メニューバー） --}}
@include('layout.header')

{{-- コンテンツ --}}
@section('content')
    <body>
        @isset($news)
            @foreach ($news as $item)
            <div class="container">
                {{ $item->topic ?? 'a' }}
            </div>
            @endforeach
        @endisset
    </body>
@endsection

{{-- フッター（コピーライトバー） --}}
@include('layout.footer')