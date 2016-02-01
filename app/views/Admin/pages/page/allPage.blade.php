@extends('Admin/layout')

@section('content')

@include('Admin/flash_msg')

<div class="page-header">
    <h1>All Page <small>Gotta catch 'em all!</small></h1>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <a href="{{ action('AdminPageController@create') }}" class="btn btn-success">Add Page</a>
    </div>
</div>

@if($page->isEmpty())
<p>There are no users!</p>
@else
<table class="table table-striped">
    <thead>
    <tr>
        <th>Page Id</th>
        <th>Title</th>
        <th>Route</th>
        <th>Created at</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>

    @foreach($page as $pages)
    <tr>
        <td>{{ $pages->id }}</td>
        <td>{{ $pages->title }}</td>
        <td>{{ $pages->route }}</td>
        <td>{{ $pages->created_at}}</td>
        <td>
            <a href="{{ action('AdminPageController@edit',$pages->id) }}"class="btn btn-success">Edit</a>
            
            <?php $route=$pages->route;?>
            
            @if(($route=='Home'))
            <button class="btn btn-primary">Home</button>
            @else
            <a href="{{ action('AdminPageController@delete',$pages->id) }}" class="btn btn-danger">Delete</a>
            @endif
            
        </td>
    </tr>
    
    @endforeach

    </tbody>
</table>

@endif





@stop