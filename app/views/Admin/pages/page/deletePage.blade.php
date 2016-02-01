@extends('Admin/layout')
@section('content')
<div class="page-header">
    <h1>Delete {{$page->title}} page <small>Are you sure?</small></h1>
</div>
<form action="{{ action('AdminPageController@handleDelete') }}" method="post" role="form">   
    <input type="submit" class="btn btn-danger" value="Delete me" />
     <input type="hidden" name="page" value="{{$page->id}}" />
    <a href="{{ action('AdminPageController@index') }}" class="btn btn-default">No way!</a>
</form>
@stop