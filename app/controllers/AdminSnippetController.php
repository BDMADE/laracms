<?php
/*This is created to working with pages of admin panel*/


class AdminSnippetController extends BaseController{

    
    
    public function index(){

       $snippet=Snippet::all();
       return View::make('Admin/pages/snippet/allSnippet',compact('snippet'));
    }
    public function create(){
        
        return View::make('Admin/pages/snippet/createSnippet'); 
        
        
    }
    
    public function handleCreate(){
             
       $user_id = Auth::id();
                   
        $snippet=new Snippet;
        $snippet->title=Input::get('title');       
        $snippet->content=Input::get('content');
        $snippet->created_by_id=$user_id;
        $snippet->updated_by_id=$user_id;
        
       
        
        if(Input::get('save'))
     {
            $snippet->save();
return Redirect::action('AdminSnippetController@index')->with('flash_edit_success','Hurray!You have created a Page Snippet');

 }

elseif(Input::get('continue')){
    
    $snippet->save();
    
return Redirect::action('AdminSnippetController@edit',$snippet->id)->with('flash_edit_success','Hurray!Your updated information are saved,You can continue work...');    
    }

 else {
       return Redirect::action('AdminSnippetController@index')->with('flash_dlt_success','OH!Sorry! I can not make a Page in this time'); 
    }       

        
      
        
    
    }


public function edit(Snippet $snippet){
    return View::make('Admin/pages/snippet/editSnippet',compact('snippet'));

}

 public function handleEdit(){

     $snippet =Snippet::findOrFail(Input::get('snippet'));
     $snippet->title=Input::get('title');       
     $snippet->content=Input::get('content');
     $snippet->updated_by_id=Auth::id();
        
     
     if(Input::get('save'))
     { $snippet->save();
return Redirect::action('AdminSnippetController@index')->with('flash_edit_success','Hurray!Your updated information are saved');

 }

elseif(Input::get('continue')){
    
    $snippet->save();
return Redirect::action('AdminSnippetController@edit',$snippet->id)->with('flash_edit_success','Hurray!Your updated information are saved,You can continue work');    
    }
    
    else {
       return Redirect::action('AdminSnippetController@index')->with('flash_dlt_success','OH!Sorry! I can not make a Page in this time'); 
    } 
    
}



public function delete(Snippet $snippet){
    
    return View::make('Admin/pages/snippet/deleteSnippet',compact('snippet'));
    
    
}



public  function handleDelete(){
    
        $snippet=Snippet::findOrFail(Input::get('snippet'));
        $snippet->delete();
        return Redirect::action('AdminSnippetController@index')->with('flash_dlt_success','Oh NO!! You have deleted a page section');
    
    
}











}