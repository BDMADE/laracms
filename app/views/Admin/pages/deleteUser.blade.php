@extends('Admin/layout')
@section('content')
<div class="page-header">
    <h1>Delete {{$user->username}} <small>Are you sure?</small></h1>
</div>
<form action="{{ action('AdminUserController@handleDelete') }}" method="post" role="form">
    <input type="hidden" name="user" value="{{$user->id}}" />
    <input type="submit" class="btn btn-danger" value="Yes" />
    <a href="{{ action('AdminUserController@index') }}" class="btn btn-default">No way!</a>
</form>
@stop