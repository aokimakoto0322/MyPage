{{-- 管理画面 - TOPバナー編集TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'TOPバナー編集')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    <div class="container mt-4">
        <h1 class="my-4">TOPバナー新規追加画面</h1>
        <form action="/admin/topbanner2" class="needs-validation" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <h4 class="lead">TOPバナー画像選択</h4>
                <input type="file" name="bannerimg" required>

                <h4 class="lead mt-3">掲示開始時間</h4>
                <input type="datetime-local" name="startdate" required>

                <h4 class="lead mt-3">掲示終了時間</h4>
                <input type="datetime-local" name="enddate" required>

                
                <h4 class="lead mt-3">バナー押下時の遷移先URL</h4>
                <input type="url" name="clickUrl" required>

                <div class="mt-2">
                    <h4 class="lead mt-3">表示・非表示設定</h4>
                    <input id="enablecheck" type="radio" name="enableflag" value="0" required>非表示
                    <input id="enablecheck" type="radio" name="enableflag" value="1" required>表示
                </div>
            </div>
            
            <button class="btn btn-primary btn-lg btn-block mt-4" type="submit">確認画面</button>
            
        </form>
    </div>
    
    

@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')