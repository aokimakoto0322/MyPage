@extends('layout.parent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'お問い合わせ')


{{-- head --}}
@include('layout.head')

{{-- ヘッダー（メニューバー） --}}
@include('layout.header')

{{-- コンテンツ --}}
@section('content')
    <body>
        <body>
            <div class="container p-lg-5 bg-light mt-5">
                <div class="py-5 text-center">
                    <h2>お問い合わせフォーム</h2>
                    <p class="lead">なんかといあわせについて説明</p>
                    <p class="lead">個人情報がうんたら</p>
                </div>
                
                <form method="post" action="/confirm" class="needs-validation" novalidate="">
                    {{ csrf_field() }}
                    {{-- お名前 --}}
                    <div class="form-group">
                        <label for="inputname" class="form-control-label">お名前</label>
                        <input maxlength="20" placeholder="田中　太郎" type="text" class="form-control" id="inputname" required>
                        <div class="invalid-feedback">
                            お名前を入力してください
                        </div>
                    </div>

                    {{-- お名前（カナ） --}}
                    <div class="form-group">
                        <label for="inputnamekana" class="form-control-label">お名前（カナ）</label>
                        <input maxlength="20" placeholder="タナカ　タロウ" type="text" class="form-control" id="inputnamekana" name="name">
                    </div>

                    {{-- メールアドレス --}}
                    <div class="form-group">
                        <label for="inputEmail001" class="form-control-label">メールアドレス</label>
                        <input maxlength="100" oncopy="return false" onpaste="return false" type="email" class="form-control" id="inputEmail001" name="mail" required>
                        <div class="invalid-feedback">
                            メールアドレスを入力してください
                        </div>
                    </div>

                    {{-- お問い合わせ内容 --}}
                    <div class="form-group">
                        <label for="maindocument" class="form-control-label">お問い合わせ内容</label>
                        <textarea class="form-control" maxlength="2000" style="margin-top: 0px; margin-bottom: 0px; height: 500px;" name="maindocument" required></textarea>
                        <div class="invalid-feedback">
                            お問い合わせ内容を入力してください
                        </div>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">確認画面</button>
                </form>
            </div>
        </body>
    </body>
@endsection

{{-- フッター（コピーライトバー） --}}
@include('layout.footer')