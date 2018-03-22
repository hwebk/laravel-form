@extends('layouts.default')

@section('content')
    <div class="row">
        <h1>Submit</h1>
        <form action="/submit" method="post">
            {{!! csrf_field() !!}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                @if($errors->has('title'))
                    <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="url">Url</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{ old('url') }}">
                @if($errors->has('url'))
                    <div class="alert alert-danger">{{ $errors->first('url') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="description" value="{{ old('description') }}"></textarea>
                @if($errors->has('description'))
                    <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-success">送信</button>
            <a href="{{ url('/') }}}" class="btn btn-default" role="button">戻る</a>
        </form>
    </div>
@endsection