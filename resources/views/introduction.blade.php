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
        <div class="container">
            <h1 class="display-2 mt-2 mb-4">メンバー</h1>
            @if (isset($memb))
                <div class="row">
                @foreach ($memb as $item)
                    <div class="fadeIn imgWrap2 col-sm-4 character{{ $item->id }}" uniq="{{ $item->id }} " id="character{{ $item->id }}">
                        <img class="shadow-lg3 d-block mx-auto my-5" width="auto" height="300px" src="{{ $item->image }}">
                    </div>
                @endforeach
                </div>
            @endif
        </div>
    </body>
@endsection

{{-- フッター（コピーライトバー） --}}
@include('layout.footer')