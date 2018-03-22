<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"
    <title>@if(!Request::is('/')){{ $title }} | @endif{{ env('APP_NAME') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!--左サイドバー -->
                    <ul class="navbar-nav mr-auto">
                        <!-- 記事とユーザーへのリンク -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('posts') }}">{{ __('Posts') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('users') }}">{{ __('Users') }}</a>
                        </li>
                    </ul>
                    <!--右サイドバー -->
                    <ul class="navbar-nav ml-auto">
                        <!--投稿ボタン -->
                        <li class="nav-item">
                            <a href="{{ url('posts/create') }}" id="new-post" class="btn btn-success">
                                {{ __('New Post') }}
                            </a>
                        </li>
                        <!-- ユーザー認証のリンク -->
                        @guest
                            <!-- ログインとユーザー登録のリンク -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
0
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</body>
</html>