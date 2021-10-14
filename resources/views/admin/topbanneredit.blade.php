{{-- 管理画面 - TOPバナー編集TOP画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', 'TOPバナー編集画面')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- ヘッダー（メニューバー） --}}
@include('adminlayout.adminheader')


{{-- コンテンツ --}}
@section('admincontent')
    @foreach ($editbanner as $item)
        <div class="container">
            <form action="/admin/topbanneredit2?itemid={{$item->id}}" class="needs-validation" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <h3>TOPバナー画像選択</h3>
                    <input type="file" name="bannerimg" required>
                    <div>
                        <img width="auto" height="300px" src="{{ $item->imgUrl }}">
                    </div>
                    
    
                    <h3 class="mt-3">掲示開始時間</h3>
                    <input type="datetime-local" name="startdate" value="{{ date('Y-m-d\TH:i', strtotime($item->endDate)) }}" required>
    
                    <h3 class="mt-3">掲示終了時間</h3>
                    <input type="datetime-local" name="enddate" value="{{ date('Y-m-d\TH:i', strtotime($item->endDate)) }}" required>
    
                    
                    <h3 class="mt-3">バナー押下時の遷移先URL</h3>
                    <input type="url" name="clickUrl" value="{{$item->clickUrl}}" required>
    
                    <div class="mt-2">
                        <h3 class="mt-3">表示・非表示設定</h3>
                        @if ($item->enableFlag == 1)
                            <input class="mx-2" id="enablecheck1" type="radio" name="enableflag" value="1" required checked><label for="enablecheck1">表示</label>
                            <input class="mx-2" id="enablecheck2" type="radio" name="enableflag" value="0" required><label for="enablecheck2">非表示</label>
                        @else
                            <input class="mx-2" id="enablecheck1" type="radio" name="enableflag" value="1" required><label for="enablecheck1">表示</label>
                            <input class="mx-2" id="enablecheck2" type="radio" name="enableflag" value="0" required checked><label for="enablecheck2">非表示</label>
                        @endif
                        
                    </div>
                </div>
                
                <button class="btn btn-primary btn-lg btn-block mt-4" type="submit">編集完了する</button>
                
            </form>
        </div>
    @endforeach
@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')