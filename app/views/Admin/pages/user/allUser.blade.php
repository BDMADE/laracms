@extends('Admin/layout')

@section('content')

@include('Admin/flash_msg')

<div class="page-header">
    <h1>All User <small>Gotta catch 'em all!</small></h1>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <a href="{{ action('AdminUserController@create') }}" class="btn btn-primary">Add User</a>
    </div>
</div>

@if($user->isEmpty())
<p>There are no users!</p>
@else
<table class="table table-striped">
    <thead>
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Created at</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>

    @foreach($user as $users)
    <tr>
        <td>{{ $users->username }}</td>
        <td>{{ $users->email }}</td>
        <td>{{ $users->created_at }}</td>
        <td>
            <a href="{{ action('AdminUserController@edit',$users->id) }}"class="btn btn-default">Edit</a>
            <a href="{{ action('AdminUserController@delete',$users->id) }}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>

@endif


@stop