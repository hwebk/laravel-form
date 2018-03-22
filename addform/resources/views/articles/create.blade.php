{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '新規作成')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
    <h3>登録データの新規作成</h3>
    <form action="/articles" method="post">
        {{-- 以下を入れないとエラーになる --}}
        {{ csrf_field() }}
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" placeholder="タイトルを入力してください。">
        </div>
        <div>
            <label for="email">メールアドレス</label>
            <input type="email" name="email" placeholder="メールアドレスを入力してください。">
        </div>
        <div>
            <label for="body">内容</label>
            <textarea name="body" rows="8" cols="100" placeholder="内容を記入してください。"></textarea>
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
@endsection
