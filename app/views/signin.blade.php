@extends('layout')
@section('content')

@if (Session::has('flash_error'))
<div id="flash_error" class=" alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('flash_error') }}</div>
@endif

@if (Session::has('flash_admin_login'))
<div id="flash_admin_login" class=" alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('flash_admin_login') }}</div>
@endif



    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign in</h3>
                    </div>

                    <div class="panel-body">
                        
                        {{Form::open(array('action'=>'UserController@handleLogin'))}}
                        
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" class="form-control required" placeholder="Username" />
                            </div>

                            

                            <div class="form-group">
                                <label for="password">Password:</label>
                               <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                            </div>
                        
                        <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" value="check" /> Remember
                                    </label>
                                </div>
                        
                        

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                       </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>






@stop