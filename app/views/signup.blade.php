@extends('layout')
@section('content')

@if(count($errors)>0)
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
@foreach($errors->all() as $message)
<li>{{ $message }}</li>
@endforeach

    </div>

@endif




{{ Form::open(array('action' => 'UserController@handleCreate')) }}

    <div class="form-group">



        <p><label for="username">Username:</label></p>
        <p><input type="text" name="username" class="form-control" placeholder="Username" required=""/></p>
        

    </div>
    <div class="form-group">
        <p><label for="email">Email:</label></p>

        <p><input type="email" name="email"  class="form-control" placeholder="Email" required="" value=""/></p>
       
    </div>

    <div class="form-group">
        <p><label for="password">Password:</label></p>
        <p><input type="password" name="password" class="form-control" placeholder="Password"  required=""/></p>
    </div>
    <p><input type="submit" value="Create"   class="btn btn-primary"/></p>


{{form::close()}}








@stop