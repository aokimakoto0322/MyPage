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
        {{-- カルーセルバナー --}}
        @if (isset($carousel))
        <div class="section">
            <div class="sliderArea">
                <div class="full-screen slider">
                    @foreach ($carousel as $item)
                        <div class="slick-list">
                            <div class="slick-slide">
                                @if ($item->clickUrl != "")
                                    <a href="{{ $item->clickUrl }}">
                                @endif
                                    <img class="rounded" src="{{ $item->imgUrl }}">

                                @if ($item->clickUrl != "")
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        {{-- ライバー紹介エリア --}}
        <div class="container mx-auto mt-5">
            <h1 class="display-5">ライバー</h1>
            <a href="./introduction" class="p-3">
                <div class="card fadeIn shadow-lg1">
                    <div class="row">
                        <div class="col-sm-6 mx-auto">
                            <img src="/img/k1.jpg" width="100%" height="100%">
                        </div>
                        <div class="col-sm-6 d-flex align-items-center">
                            <div class="row">
                                <h2 class="display-6 text-dark px-4 my-4 px-4 py-4">理念</h2>
                                <p class="lead text-dark px-4 py-4">ライバーの理念とかどういう目標があって活動してますとかいろいろやってます的なテキスト</p>
                                <div class="n-button w-auto mx-4 my-4">詳細</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        {{--　トピックエリア  --}}
        @isset($news)
            <div class="container mx-auto mt-5">
                <h1 class="display-5 my-4 mx-2">ニューストピックス</h2>
                <div class="row">
                    @foreach ($news as $item)
                        <div class="col-md">
                            <div class="card fadeIn shadow-lg2 my-2">

                                {{-- リンクがある場合はタグ設定 --}}
                                @if ($item->url != "")
                                    <a class="newslink" href="{{ $item->url }}">
                                @endif
                                    <div class="imgWrap">
                                        <img width="100%" height="auto" src="{{ $item->imageUrl ?? '' }}">
                                    </div>
                                    
                                    {{-- サブジェクト --}}
                                    <div class="card-body">
                                        <h2 class="display-6 mt-3 ml-3">{{ $item->topic ?? 'a' }}</h2>

                                        {{-- 日付 --}}
                                        <span class="lead ml-5">{{ $item->postDate ?? '' }}</span>

                                        {{-- トピックスボディ --}}
                                        <div class="card-text mt-3">
                                            {{ $item->detail }}
                                        </div>
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