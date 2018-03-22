{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '編集')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
    <form action="/articles/{{$article->id}}" method="post">
        {{csrf_field()}}
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" placeholder="タイトルを入力" value="{{$article->title}}">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="メールアドレスを入力" value="{{$article->email}}">
        </div>
        <div>
            <label for="body">内容</label>
            <textarea name="body" rows="8" cols="100" placeholder="内容を記入してください。" value="{{$article->body}}"></textarea>
        </div>
        <div>
            <input type="hidden" name="_method" value="patch">
            <input type="submit" value="更新">
        </div>
    </form>
@endsection