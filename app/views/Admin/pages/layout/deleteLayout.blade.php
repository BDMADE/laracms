@extends('Admin/layout')
@section('content')
<div class="page-header">
    <h1>Delete {{$layout->title}} page <small>Are you sure?</small></h1>
</div>
<form action="{{ action('AdminLayoutController@handleDelete') }}" method="post" role="form">   
    <input type="submit" class="btn btn-danger" value="Delete me" />
     <input type="hidden" name="page" value="{{$layout->id}}" />
    <a href="{{ action('AdminLayoutController@index') }}" class="btn btn-default">No way!</a>
</form>
@stop