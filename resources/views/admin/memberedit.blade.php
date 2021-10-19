{{-- 管理画面 - TOPバナー　TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'メンバー情報編集画面')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <body>
        <div class="container p-lg-5">
            <h1 class="mt-4">メンバー追加</h1>
            @foreach ($member as $item)
                <form action="/admin/memberedit2?itemid={{$item->id}}" class="needs-validation" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <h3 class="mt-5">メイン表示画面</h3>
                        <input type="file" name="image" required>
                        <img class="mt-2" src="{{ $item->image }}" width="auto" height="200px">

                        <h3 class="mt-3">名前</h3>
                        <input class="form-control" type="text" name="name" value="{{ $item->name }}" required>

                        <h3 class="mt-3">名前（アルファベット）</h3>
                        <input class="form-control" type="text" name="nameAlpha" value="{{ $item->nameAlpha }}" required>

                        <h3 class="mt-3">紹介文</h3>
                        <input maxlength="200" class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 500px;" type="text" name="intro" value="{{ $item->intro }}" required>

                        <h3 class="mt-3">紹介動画URL</h3>
                        <input class="form-control" type="url" name="introVideo" value="{{ $item->introVideo }}" required>

                        <h3 class="mt-3">YouTubeトップURL</h3>
                        <input class="form-control" type="url" name="youtube" value="{{ $item->youtube }}" required>

                        <h3 class="mt-3">TwitterトップURL</h3>
                        <input class="form-control" type="url" name="twitter" value="{{ $item->twitter }}" required>


                        <h3 class="mt-3">表示・非表示設定</h3>
                        @if ($item->enableflag == 1)
                            <input class="mx-2" id="enablecheck1" type="radio" name="enableflag" value="1" required checked><label for="enablecheck1">表示</label>
                            <input class="mx-2" id="enablecheck2" type="radio" name="enableflag" value="0" required><label for="enablecheck2">非表示</label>
                        @else
                            <input class="mx-2" id="enablecheck1" type="radio" name="enableflag" value="1" required><label for="enablecheck1">表示</label>
                            <input class="mx-2" id="enablecheck2" type="radio" name="enableflag" value="0" required checked><label for="enablecheck2">非表示</label>
                        @endif
                            
                        <h3 class="mt-3">表示優先度（高い方が前方に表示）</h3>
                        <input class="form-control" type="number" name="priority" value="{{ $item->priority }}" required>

                        <button class="btn btn-primary btn-lg btn-block mt-4" type="submit">編集完了する</button>
                    </div>
                </form>
            @endforeach
        </div>
    </body>
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')