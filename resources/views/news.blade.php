@extends('layout.parent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', '最新情報')


{{-- head --}}
@include('layout.head')

{{-- ヘッダー（メニューバー） --}}
@include('layout.header')

{{-- コンテンツ --}}
@section('content')

@php
    $tmp = 0;
@endphp
    <body>
        <div class="container">
            <h1 class="display-2">トピックス</h1>
            @foreach ($news as $item)
                {{-- リンクがある場合はタグ設定 --}}
                @if ($item->url != "")
                    <a class="newslink" href="{{ $item->url }}">
                @endif

                @php
                    $tmp++;
                    if($tmp % 2 == 0){
                        $result = 1;
                    }else{
                        $result = 2;
                    }
                @endphp

                <div class="fadeIn shadow-lg{{ $result }} card my-5">
                    <div class="row">
                        
                        <img class="col-sm-4" src="{{ $item->imageUrl ?? '' }}">
                        
                        <div class="col-sm-8">
                            <h5 class="display-6 mt-4 mx-1">{{ $item->topic ?? 'a' }}</h5>
    
                            {{-- 日付 --}}
                            <span class="lead mx-2">{{ $item->postDate ?? '' }}</span>
        
                            {{-- トピックスボディ --}}
                            <div class="mx-4 my-3">
                                {{ $item->detail }}
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                

                {{-- リンクがある場合はタグ設定（閉じタグ） --}}
                @if ($item->url != "")
                    </a>
                @endif
            
            @endforeach
        </div>
    </body>
@endsection

{{-- フッター（コピーライトバー） --}}
@include('layout.footer')