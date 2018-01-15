@extends('layouts.common')
@section('content')
@if(count($errors) > 0)
    <ul>
            @foreach($errors->all() as $errors)
            <li>{{ $error }}</li>
            @endforeach
    </ul>
@endif
<div class="container">
    <h2>登録フォーム画面</h2>
    
    <form method="POST" action="">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <div class="form-group">
            <lable>氏名</label><span class="label label-danger">必須</span>
            <input type="text" class="form-control" name="name" placeholder="氏名を入力してください。">
        </div>
        <div class="form-group">
            <lable>電話番号</label><span class="label label-danger">必須</span>
            <input type="text" class="form-control" name="tel" placeholder="電話番号を入力してください。">
        </div>
        <div class="form-group">
            <lable>メールアドレス</label><span class="label label-danger">必須</span>
            <input type="text" class="form-control" name="email" placeholder="メールアドレスを入力してください。">
        </div>
        <div class="form-group">
            <label>お問い合わせ内容</label>
            <textarea class="form-control" name="content" rows="4" placeholder="お問い合わせ内容を入力してください"></textarea>
        </div>
        <div class="form-group">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">確認する</button>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">登録する</button>
            </div>
        </div>
    </form>
</div>
@endseciton