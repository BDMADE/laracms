@extends('Admin/layout')
@section('content')
@include('Admin/flash_msg')

@if(count($errors)>0)
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
@foreach($errors->all() as $message)
<li>{{ $message }}</li>
@endforeach

    </div>

@endif

<div class="row">


    <div class="col-md-12">
 {{Form::open(array('action'=>'AdminPageController@handleEdit','id'=>'editPage'))}}
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
                <li><a href="#content" data-toggle="tab">Content</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
                <li><a href="#metadata" data-toggle="tab">Meta data</a></li>
                <li class="active"><a href="#title" data-toggle="tab">Title</a></li>

                <li class="pull-left header">Add Page</li>
            </ul>
            <div class="tab-content">

                <div class="tab-pane active" id="title">
                   
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title"  name="title"  value="{{$page->title}}" required/>
                    </div>


                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="metadata">
                    <div class="form-group">
                        <label for="route">Route name</label>
                        <?php $route=$page->route;?>
            
                        @if(($route=='Home'))
                        <input type="text" class="form-control" id="route"  name="route"  value="{{$page->route}}" disabled=""/>
                        @else
                        <input type="text" class="form-control" id="route"  name="route"  value="{{$page->route}}"/>
                        
                        @endif
                        
                    </div>

                    <div class="form-group">
                        <label for="breadcumb">Breadcumb</label>
                        <input type="text" class="form-control" id="breadcumb"  name="breadcumb"  value="{{$page->breadcumbs}}"/>
                    </div>


                    <div class="form-group">
                        <label for="keywords">Keywords</label>
                        <input type="text" class="form-control" id="keywords"  name="keywords"  value="{{$page->keywords}}" required/>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea  class="input-group-lg form-control"  name="description" rows="13" placeholder="Write Here...">{{$page->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <input type="text" class="form-control" id="tags"  name="tags"  value="{{$page->tags}}" required/>
                    </div>




                </div><!-- /.tab-pane -->

                <!-- /.tab-pane of settings -->
                <div class="tab-pane" id="settings">

                    <div class="row">
                        <div class="col-md-4">
                    <div class="form-group">
                        <label>Page id</label>
                        <input type="text" class="form-control" id="page_id"  name="page_id"  value="{{$page->id}}" disabled=""/>
                    </div>
                            </div>
                        </div>
                    <!--
                    <div class="row">
                        <div class="col-md-4">
                    <div class="form-group">
                        <label>Selected layout</label>
                        <input type="text" class="form-control" value="{{$page->layout_title}}" disabled=""/>
                    </div>
                            </div>
                        </div>
                    -->
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Layout</label>
                               
                                <select class="form-control" name="layout">
                                    <?php $layouts=Layout::all();?>               
                                         
                                          @foreach($layouts as $layout)
                                                <option value="{{$layout->id}}">{{$layout->layout_title}}</option>
                                                @endforeach
                                                
                                             
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="1">Published</option>
                                    <option value="0">Draft</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Valid Until</label>
                                <input class="form-control" type="datetime" name="valid_until" value="{{$page->valid_until}}"/>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="content">

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control"   name="content" rows="18" placeholder="Write your content .." required>{{$page->content}}</textarea>
                    </div>
                </div>




            </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
    </div><!-- /.col -->





</div> <!-- /.row -->

<input type="submit" id="save" name='save' class="btn btn-success" accesskey="s" value="Submit and close"/>
<input type="submit" id="continue" name='continue' class="btn btn-primary" accesskey="c" value="Submit and Continue"/>
<a href="{{action('AdminPageController@formCancel')}}" class="btn btn-default">Please Cancel</a>

<input type="hidden"  name="page"  value="{{$page->id}}"/>

{{Form::close()}}

<script type="text/javascript">    
$("#editPage").validate();
</script>




@stop