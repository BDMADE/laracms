@extends('Admin/layout')
@section('content')

@if(count($errors)>0)
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
@foreach($errors->all() as $message)
<li>{{ $message }}</li>
@endforeach

    </div>

@endif

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Add User</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            {{Form::open(array('action'=>'AdminUserController@handleCreate'))}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username"  name="username" placeholder="Enter Username">


                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email">
                    </div>


                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password"  name="password" placeholder="Password">
                    </div>


                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div><!-- /.box -->

        </div>
    </div>
@stop