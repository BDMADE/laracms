@extends('Admin/layout')

@section('content')

@include('Admin/flash_msg')

<div class="page-header">
    <h1>All Snippet <small>Gotta catch 'em all!</small></h1>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <a href="{{ action('AdminSnippetController@create') }}" class="btn btn-success">Add Snippet</a>
    </div>
</div>

@if($snippet->isEmpty())
<p>There are no Snippet!</p>
@else
<table class="table table-striped">
    <thead>
    <tr>
        <th>Page Id</th>
        <th>Title</th>
        <th>Created at</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>

    @foreach($snippet as $snippets)
    <tr>
        <td>{{ $snippets->id }}</td>
        <td>{{ $snippets->title }}</td>
        <td>{{ $snippets->created_at}}</td>
        <td>
            <a href="{{ action('AdminSnippetController@edit',$snippets->id)}}"class="btn btn-default">Edit</a>
            <a href="{{ action('AdminSnippetController@delete',$snippets->id)}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    
    @endforeach

    </tbody>
</table>

@endif





@stop