@extends('layout.parent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'メンバー詳細')


{{-- head --}}
@include('layout.head')

{{-- ヘッダー（メニューバー） --}}
@include('layout.header')

{{-- コンテンツ --}}
@section('content')
    <body>
        @if (isset($memb))
            @foreach ($memb as $item)
                <div class="container">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <img class="d-block mx-auto" height="auto" width="100%" src="{{ $item->image }}">
                        </div>
                        <div class="col-md-6">
                            <h1 class="display-2 mt-5 px-2">{{ $item->name }} / {{ $item->nameAlpha }}</h1>
                            <span class="lead mt-4 px-4">{{ $item->intro }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </body>
@endsection

{{-- フッター（コピーライトバー） --}}
@include('layout.footer')