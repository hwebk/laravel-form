@extends('master')

@section('title')
select
@stop

@section('body')

<h3>一覧表示</h3>
@forreach($members as $member)
    {{$member->name." ".$member->tel." ".$member->email}}
@endforeach
@stop