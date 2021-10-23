{{-- 管理画面 - TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'ニュース編集')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <div class="container">
        <h1 class="mt-4">新規ニュース追加</h2>
        @foreach ($editnews as $item)
            <form action="/admin/newsedit2?itemid={{ $item->id }}" class="needs-validation" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                
                <div class="form-group">
                    
                        <h3 class="mt-5">メイン表示画像</h3>
                        <input class="form-control" type="file" name="image" required>
                        <img src="{{ $item->imageUrl }}" width="300" height="auto">

                        <h3 class="mt-3">主題</h3>
                        <input class="form-control" type="text" maxlength="100" name="topic" value="{{ $item->topic }}" required>

                        <h3 class="mt-3">詳細</h3>
                        <input class="form-control" type="text" maxlength="200" style="margin-top: 0px; margin-bottom: 0px; height: 200px;" name="detail" value="{{ $item->detail }}" required>

                        <h3 class="mt-3">掲示開始時間</h3>
                        <input class="form-control" type="datetime-local" name="startdate" value="{{ date('Y-m-d\TH:i', strtotime($item->startdate)) }}" required>
            
                        <h3 class="mt-3">掲示終了時間</h3>
                        <input class="form-control" type="datetime-local" name="enddate" value="{{ date('Y-m-d\TH:i', strtotime($item->enddate)) }}" required>

                        <h3 class="mt-3">押下時遷移先URL</h3>
                        <input class="form-control" class="form-control" type="url" name="url" value="{{ $item->url }}" required>

                        @if ($item->enableflag == 1)
                            <div class="mt-2">
                                <h3 class="mt-3">表示・非表示設定</h3>
                                <input class="mx-2" id="enablecheck1" type="radio" name="enableflag" value="1" required checked><label for="enablecheck1">表示</label>
                                <input class="mx-2" id="enablecheck2" type="radio" name="enableflag" value="0" required><label for="enablecheck2">非表示</label>
                            </div>
                        @else
                            <div class="mt-2">
                                <h3 class="mt-3">表示・非表示設定</h3>
                                <input class="mx-2" id="enablecheck1" type="radio" name="enableflag" value="1" required><label for="enablecheck1">表示</label>
                                <input class="mx-2" id="enablecheck2" type="radio" name="enableflag" value="0" required checked><label for="enablecheck2">非表示</label>
                            </div>
                        @endif
                        
                    

                    <button class="btn btn-primary btn-lg btn-block mt-4" type="submit">編集する</button>
                </div>
            </form>
        @endforeach
    </div>
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')