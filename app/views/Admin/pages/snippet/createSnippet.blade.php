@extends('Admin/layout')
@section('content')

<div class="row">
                       

                        <div class="col-md-12">
                            
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs pull-right">
                                    
                                    <li class="pull-left header">Add Snippet</li>
                                </ul>
                                <div class="tab-content">
                                    
                                    <div class="tab-pane active" id="content">
                                       {{Form::open(array('action'=>'AdminSnippetController@handleCreate'))}} 
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                                <input type="text" class="form-control" id="title"  name="title"  value=""/>
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea class="form-control"   name="content" rows="18" placeholder="Write your content ..."></textarea>
                                        </div>
                                        
                                        
                                    </div><!-- /.tab-pane -->
                                   
                                    
                                 
                                    
                         
                                    
                                    
                                </div><!-- /.tab-content -->
                            </div><!-- nav-tabs-custom -->
                        </div><!-- /.col -->
                        
                            
                        
                            
                        
                    </div> <!-- /.row -->
                    
                   <input type="submit" name='save' class="btn btn-success" accesskey="s" value="Submit and close"/>
                   <input type="submit" name='continue' class="btn btn-primary" accesskey="c" value="Submit and Continue"/>
                   <input type="submit" name='close' class="btn btn-default" value="Please Cancel"/>
                   
                                        {{Form::close()}}

@stop

