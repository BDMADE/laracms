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
                       

                        <div class="col-md-12">
                            {{Form::open(array('action'=>'AdminPageController@handleCreate','id'=>'createPage'))}} 
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
                                                <input type="text" class="form-control" id="title"  name="title"  value="" required/>
                                        </div>
                                        
                                        
                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="metadata">
                                       <div class="form-group">
                                            <label for="route">Route name</label>
                                                <input type="text" class="form-control" id="route"  name="route"  value="" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="breadcumb">Breadcumb</label>
                                                <input type="text" class="form-control" id="breadcumb"  name="breadcumb"  value=""/>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                            <label for="keywords">Keywords</label>
                                                <input type="text" class="form-control" id="keywords"  name="keywords"  value="" required/>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control"   name="description" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label for="tags">Tags</label>
                                                <input type="text" class="form-control" id="tags"  name="tags"  value="" required/>
                                        </div>
                                       
                                        
                                        
                                        
                                    </div><!-- /.tab-pane -->
                                    
                                    <!-- /.tab-pane of settings -->
                                    <div class="tab-pane" id="settings">
                                        <div class="form-group">
                                            <label>Page id</label>
                                            <input type="text" class="form-control" id="page_id" name="page_id"  value="" disabled=""/>
                                        </div>
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
                                            <input class="form-control" type="datetime" name="valid_until"/>
                                        </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="tab-pane" id="content">
                                        
                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea class="form-control" id="editor" name="content" rows="18" placeholder="Write your content ..." required></textarea>
                                        </div>
                                    </div>
                                    
                         
                                    
                                    
                                </div><!-- /.tab-content -->
                            </div><!-- nav-tabs-custom -->
                        </div><!-- /.col -->
                        
                            
                        
                            
                        
                    </div> <!-- /.row -->
                    
                   <input type="submit" name='save' class="btn btn-success" accesskey="s" value="Submit and close" id="save"/>
                   <input type="submit" name='continue' class="btn btn-primary" accesskey="c" value="Submit and Continue" id="continue"/>
                   <a href="{{action('AdminPageController@formCancel')}}" class="btn btn-default">Please Cancel</a>
                   
                                        {{Form::close()}}
                                        
                                        
                                  
       <script type="text/javascript">    
$("#createPage").validate();
</script>

<!--
<script type="text/javascript">
tinymce.init({
    selector: "textarea#editor",
	skin : 'lightgray',
	

plugins :'advlist  charmap code colorpicker contextmenu emoticons fullscreen hr image insertdatetime layer link legacyoutput lists media nonbreaking noneditable  paste preview print  searchreplace  tabfocus table textcolor wordcount',

toolbar :'insertfile undo redo | forecolor backcolor | bold italic underline | superscript subscript | alignleft aligncenter alignright alignjustify hr | bullist numlist outdent indent | emoticons  |  link image  media  insertdatetime | searchreplace    fullscreen  preview | code print',




 });
</script>

-->

@stop

