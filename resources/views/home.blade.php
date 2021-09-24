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

        {{-- ライバー紹介エリア --}}
        
        <div class="container mx-auto mt-5">
            <h1 class="display-5 my-4 mx-2">ライバー</h1>
            <div class="row">
                <div class="col-md me-md-3 pt-3 px-3 pt-md-5 px-md-5 d-flex align-items-center">
                    <div class="row">
                        <h2 class="display-6">理念</h2>
                        <p>ライバーの理念とかどういう目標があって活動してますとかいろいろやってます的なテキスト</p>
                    </div>
                </div>
                <div class="col-md mx-auto my-2">
                    <img src="/img/k1.jpg" width="auto" height="800px">
                </div>
            </div>
        </div>
        {{--　トピックエリア  --}}
        @isset($news)
            <div class="container mx-auto mt-5">
                <h1 class="display-5 my-4 mx-2">トピックス</h2>
                <div class="row">
                    @foreach ($news as $item)
                        <div class="col-md">
                            <div class="card shadow-lg">

                                {{-- リンクがある場合はタグ設定 --}}
                                @if ($item->url != "")
                                    <a href="{{ $item->url }}">
                                @endif
                                    <img width="100%" height="300" src="{{ $item->imageUrl ?? '' }}">
                                    <div class="card-body">
                                        <h4>{{ $item->topic ?? 'a' }}</h4>
                                    </div>

                                    <div class="card-text mx-4 my-4">
                                        {{ $item->detail }}
                                    </div>

                                {{-- リンクがある場合はタグ設定（閉じタグ） --}}
                                @if ($item->url != "")
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endisset
    </body>
@endsection

{{-- フッター（コピーライトバー） --}}
@include('layout.footer')