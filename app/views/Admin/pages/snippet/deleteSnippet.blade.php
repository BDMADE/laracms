@extends('Admin/layout')
@section('content')
<div class="snippet-header">
    <h1>Delete {{$snippet->title}} snippet <small>Are you sure?</small></h1>
</div>
<form action="{{ action('AdminSnippetController@handleDelete') }}" method="post" role="form">   
    <input type="submit" class="btn btn-danger" value="Delete me" />
     <input type="hidden" name="snippet" value="{{$snippet->id}}" />
    <a href="{{ action('AdminSnippetController@index') }}" class="btn btn-default">No way!</a>
</form>
@stop