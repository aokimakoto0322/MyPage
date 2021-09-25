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
        <div class="sliderArea">
            <div class="full-screen slider">
              <div class="slick-list"><img class="rounded" src="https://cdn.pixabay.com/photo/2021/07/28/08/44/elephants-6498609_960_720.jpg"></div>
              <div class="slick-list"><img class="rounded" src="https://cdn.pixabay.com/photo/2021/07/28/08/44/elephants-6498609_960_720.jpg"></div>
              <div class="slick-list"><img class="rounded" src="https://cdn.pixabay.com/photo/2021/07/28/08/44/elephants-6498609_960_720.jpg"></div>
            </div>
          </div>

        {{-- ライバー紹介エリア --}}
        <div class="fadeIn container mx-auto mt-5">
            <h1 class="display-5">ライバー</h1>
            <a href="/" class="p-3">
                <div class="card shadow-lg imgWrap">
                    <div class="row">
                        <div class="col-xl-6 d-flex align-items-center">
                            <div class="row-md-6">
                                <h2 class="display-6 text-dark mx-3 my-3">理念</h2>
                                <div class="lead text-dark card-text mx-3 my-5">ライバーの理念とかどういう目標があって活動してますとかいろいろやってます的なテキスト</div>
                            </div>
                        </div>
                        <div class="col-xl-6 mx-auto">
                            <img src="/img/k1.jpg" width="100%" height="100%">
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
                        <div class="fadeIn col-md">
                            <div class="card shadow-lg my-2">

                                {{-- リンクがある場合はタグ設定 --}}
                                @if ($item->url != "")
                                    <a class="newslink" href="{{ $item->url }}">
                                @endif
                                    <div class="imgWrap">
                                        <img width="100%" height="300" src="{{ $item->imageUrl ?? '' }}">
                                    </div>
                                    
                                    {{-- サブジェクト --}}
                                    <div class="card-body">
                                        <h2 class="lead">{{ $item->topic ?? 'a' }}</h2>
                                    </div>

                                    {{-- トピックスボディ --}}
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