@extends('Admin/layout')
@section('content')
@include('Admin/flash_msg')
<div class="row">


   


        <div class="col-md-12">

                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs pull-right">
                                    <li><a href="#full_layout" data-toggle="tab">Full Layout</a></li>
                                    <li><a href="#footer" data-toggle="tab">Footer</a></li>
                                    <li><a href="#nav" data-toggle="tab">Navigation</a></li>
                                    <li><a href="#js_src" data-toggle="tab">JS Source</a></li>
                                    <li><a href="#css_src" data-toggle="tab">CSS Source</a></li>
                                    <li class="active"><a href="#title" data-toggle="tab">Title</a></li>

                                    <li class="pull-left header">Add Layout Page</li>
                                </ul>
                                <div class="tab-content">

                                    <div class="tab-pane active" id="title">
                                       {{Form::open(array('action'=>'AdminLayoutController@handleEdit'))}}
                                        <div class="form-group">
                                            <label>Layout Title</label>
                                                <input type="text" class="form-control"   name="title"  value="{{$layout->layout_title}}"/>
                                        </div>
                                       <div class="form-group">
                                            <label>Author</label>
                                                <input type="text" class="form-control"   name="author"  value="{{$layout->author}}"/>
                                        </div>
                                       <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" rows="3" id="description" placeholder="Write something about your layout...">{{$layout->description}}</textarea>
                                        </div>


                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="css_src">


                                         <div class="form-group">
                                             <label for="css_src" data-toggle="tooltip" title="As example:url('bladeBox/assets/css/style.css')" data-placement="right">CSS Source</label>
                                            <textarea class="form-control"   name="css_src" rows="10" placeholder="Enter Your All Source Paths of CSS...">{{$layout->css_src}}</textarea>
                                        </div>
                                    </div><!-- /.tab-pane -->

                                    <div class="tab-pane" id="js_src">

                                        <div class="form-group">
                                            <label for="js_src" data-toggle="tooltip" title="As example:url('bladeBox/assets/js/main.js')" data-placement="right">JS Source</label>
                                            <textarea class="form-control"   name="js_src" rows="10" placeholder="Enter Your All Source Paths of JS...">{{$layout->js_src}}</textarea>
                                        </div>
                                    </div>



                                    <!-- /.tab-pane of settings -->
                                    <div class="tab-pane" id="nav">
                                        <div class="form-group">
                                            <label for="description">Navigation</label>
                                            <textarea class="form-control"   name="navigation" rows="10" placeholder="Enter Your Navigation Section...">{{$layout->navigation}}</textarea>
                                        </div>

                                    </div>

                                    <div class="tab-pane" id="footer">

                                        <div class="form-group">
                                            <label>Footer</label>
                                            <textarea class="form-control"   name="footer" rows="10" placeholder="Enter Your Footer Section...">{{$layout->footer}}</textarea>
                                        </div>
                                    </div>



                                    <div class="tab-pane" id="full_layout">

                                        <div class="form-group">
                                            <label>Full Layout</label>
                                            <textarea class="form-control"   name="full_layout" rows="20" placeholder="Write Your Full Layout... ">{{$layout->full_layout}}</textarea>
                                        </div>
                                    </div>


                                </div><!-- /.tab-content -->
                            </div><!-- nav-tabs-custom -->
                        </div><!-- /.col -->


</div> <!-- /.row -->

  







<input type="submit" name="save_layout" class="btn btn-success"  value="Submit and close"/>
<input type="submit" name="continue_layout" class="btn btn-primary" value="Submit and Continue"/>
<input type="submit" name="close_layout" class="btn btn-default" value="Please Cancel"/>

<input type="hidden"  name="layout"  value="{{$layout->id}}"/>

{{Form::close()}}

@stop