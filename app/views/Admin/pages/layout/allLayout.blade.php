@extends('Admin/layout')

@section('content')

@include('Admin/flash_msg')

<div class="page-header">
    <h1>All Page Layout <small>Gotta catch 'em all!</small></h1>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <a href="{{ action('AdminLayoutController@create') }}" class="btn btn-info">Add Page Layout</a>
    </div>
</div>

@if($layout->isEmpty())
<p>There are no Page Layout!</p>
@else
<table class="table table-striped">
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>         
        <th>Author</th>       
        <th>Created at</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>

    @foreach($layout as $layouts)
    <tr>
        <td>{{ $layouts->id }}</td>
        <td>{{ $layouts->layout_title}}</td>        
       
        <td>{{ $layouts->author}}</td>
        <td>{{ $layouts->created_at}}</td>
        <td>
            <a href="{{ action('AdminLayoutController@edit',$layouts->id) }}"class="btn btn-default">Edit</a>
            <a href="{{ action('AdminLayoutController@delete',$layouts->id) }}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    
    @endforeach

    </tbody>
</table>

@endif





@stop