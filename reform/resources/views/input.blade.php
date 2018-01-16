@extends('master')

@section('title')
input
@stop

@section('body')
<h2>入力フォーム</h2>
<form action="storage" method="post">
名前
<input type="input" name="name">
電話番号
<input type="input" name="tel">
メールアドレス
<input type="input" name="email">
<input type="submit" value="保存">
<input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
@stop