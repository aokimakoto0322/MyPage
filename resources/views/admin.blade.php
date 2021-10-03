{{-- 管理画面 - ログイン画面 --}}

@extends('adminlayout.adminparent')

{{-- ページタイトル設定 --}}
@section('Pagetitle', '管理画面')


{{-- head --}}
@include('adminlayout.adminhead')

{{-- コンテンツ --}}
@section('admincontent')

    <div class="container">
        <div class="py-5 text-center">
            <h1>Login</h1>
        </div>
        <div class="text-center">
            <form method="post" action="/admin">
                {{ csrf_field() }}
                <div class="mt-3">
                    <input maxlength="20" placeholder="ID" type="text" name="id">
                </div>
                
                <div class="mt-3">
                    <input maxlength="100" placeholder="PASSWORD" type="password" name="password">
                </div>

                {{ $fail ?? '' }}
                
                <div class="mt-5">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                </div>

            </form>
        </div>
        
    </div>


@endsection


{{-- フッター（コピーライトバー） --}}
@include('adminlayout.adminfooter')