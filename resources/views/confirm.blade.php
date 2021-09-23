@extends('layout.parent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'お問い合わせ内容確認')


{{-- head --}}
@include('layout.head')

{{-- ヘッダー（メニューバー） --}}
@include('layout.header')

{{-- コンテンツ --}}
@section('content')
    <body>
        <div class="container mt-5 p-lg-5">
            <h3>お名前</h3>
            <p class="lead ml-2">{{ $name ?? '' }}様</p>

            <h3>メールアドレス</h3>
            <p class="lead ml-2">{{ $mail ?? '' }}</p>

            <h3>お問い合わせ内容</h3>
            <p class="lead ml-2 text-break">{{ $doc ?? '' }}</p>

            <h5 class="mt-5">以上の内容でよろしければ送信ボタンを押してください</h5>

            <form method="POST" action="/send">
                {{ csrf_field() }}
                <input type="hidden" name="name" value="{{ $name }}">
                <input type="hidden" name="mail" value="{{ $mail }}">
                <input type="hidden" name="doc" value="{{ $doc }}">

                <input class="btn btn-primary btn-lg btn-block mt-4" type="submit" value="送信">
            </form>
            
        </div>
        
    </body>
@endsection

{{-- フッター（コピーライトバー） --}}
@include('layout.footer')