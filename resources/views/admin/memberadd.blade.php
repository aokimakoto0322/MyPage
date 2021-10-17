{{-- 管理画面 - TOPバナー　TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'メンバー追加画面')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <body>
        <div class="container p-lg-5">
            <h1 class="mt-4">メンバー追加</h1>
            <form action="/admin/memberadd2" class="needs-validation" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <h3 class="mt-5">メイン表示画面</h3>
                    <input type="file" name="image" required>
    
                    <h3 class="mt-3">名前</h3>
                    <input class="form-control" type="text" name="name" required>
    
                    <h3 class="mt-3">名前（アルファベット）</h3>
                    <input class="form-control" type="text" name="nameAlpha" required>
    
                    <h3 class="mt-3">紹介文</h3>
                    <input maxlength="200" class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 500px;" type="text" name="intro" required>
    
                    <h3 class="mt-3">紹介動画URL</h3>
                    <input class="form-control" type="text" name="introVideo" required>
    
                    <h3 class="mt-3">YouTubeトップURL</h3>
                    <input class="form-control" type="text" name="youtube" required>
    
                    <h3 class="mt-3">TwitterトップURL</h3>
                    <input class="form-control" type="text" name="twitter" required>
    
                    <div class="mt-3">
                        <h3 class="mt-3">表示・非表示設定</h3>
                        <input class="mx-2" id="enablecheck1" type="radio" name="enableflag" value="1" required><label for="enablecheck1">表示</label>
                        <input class="mx-2" id="enablecheck2" type="radio" name="enableflag" value="0" required><label for="enablecheck2">非表示</label>
                    </div>
    
                    <h3 class="mt-3">表示優先度</h3>
                    <input class="form-control" type="number" name="priority" required>

                    <button class="btn btn-primary btn-lg btn-block mt-4" type="submit">追加する</button>
                </div>
            </form>
        </div>
    </body>
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')