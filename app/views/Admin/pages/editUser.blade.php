@extends('Admin/layout')
@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Add User</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            {{Form::open(array('action'=>'AdminUserController@handleEdit'))}}
            <div class="box-body">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username"  name="username"  value="{{$user->username}}"/>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email"  name="email" value="{{$user->email}}"/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password"  name="password"  value=""/>
                </div>

                <input type="hidden" name="user" value="{{$user->id}}" />
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div><!-- /.box -->

    </div>
</div>
@stop