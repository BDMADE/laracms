<?php
/*This is created to working with pages of admin panel*/


class AdminPageController extends BaseController{

    
    
    public function index(){

        $page=Page::all();
       return View::make('Admin/pages/page/allPage',compact('page'));
    }
    public function create(){
        
        return View::make('Admin/pages/page/createPage'); 
        
        
    }
    
    public function handleCreate(){
        
    $data = Input::all();
    $rules = array(
        'title' => 'required',
        'route'=>'required|Unique:pages'
    );

    
    // Create a new validator instance.
    $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
        $user_id = Auth::id();
        $page=new Page;
        $page->title=Input::get('title');
        $page->route=Input::get('route');
        $page->breadcumbs=Input::get('breadcumb');
        $page->keywords=Input::get('keywords');
        $page->description=Input::get('description');
        $page->content=Input::get('content');
        $page->tags=Input::get('tags');
        $page->layout_id=Input::get('layout');
        $page->status_id=Input::get('status');
        $page->valid_until=Input::get('valid_until');
        $page->created_by_id=$user_id;
        $page->updated_by_id=$user_id;
        
       
        
        if(Input::get('save'))
     {
            $page->save();
return Redirect::action('AdminPageController@index')->with('flash_edit_success','Hurray!You have created a Page');

 }

elseif(Input::get('continue')){
    
    $page->save();
    
return Redirect::action('AdminPageController@edit',$page->id)->with('flash_edit_success','Hurray!Your updated information are saved,You can continue work...');    
    }

 else {
       return Redirect::action('AdminPageController@index')->with('flash_dlt_success','OH!Sorry! I can not make a Page in this time'); 
    }       

        }
        
        else{


        return Redirect::back()
		->withInput()
		->withErrors($validator);
    }
      
        
    
    }


public function edit(Page $page){
    return View::make('Admin/pages/page/editPage',compact('page'));

}

 public function handleEdit(){
//validation of page
     $data = Input::all();
     $route=Input::get('route');
     
     
    $rules = array(
        'title' => 'required'
        
    );
    $validator = Validator::make($data, $rules);
     if ($validator->passes()) {
    
     $page = Page::findOrFail(Input::get('page'));
     $page->title=Input::get('title');
     
     if($route==NULL){
         
         $home='Home';
         $page->route=$home;
     }
     else{
         
        $page->route=$route;  
     }
       
        $page->breadcumbs=Input::get('breadcumb');
        $page->keywords=Input::get('keywords');
        $page->description=Input::get('description');
        $page->content=Input::get('content');
        $page->tags=Input::get('tags');
        $page->layout_id=Input::get('layout');
        $page->status_id=Input::get('status');
        $page->valid_until=Input::get('valid_until');
        $page->updated_by_id=Auth::id();
        
     
     if(Input::get('save'))
     { $page->save();
return Redirect::action('AdminPageController@index')->with('flash_edit_success','Hurray!Your updated information are saved');

 }

elseif(Input::get('continue')){
    
    $page->save();
return Redirect::action('AdminPageController@edit',$page->id)->with('flash_edit_success','Hurray!Your updated information are saved,You can continue work');    
    }
    
    else {
       return Redirect::action('AdminPageController@index')->with('flash_dlt_success','OH!Sorry! I can not make a Page in this time'); 
    } 
    
}
     else{


        return Redirect::back()
		->withInput()
		->withErrors($validator);
    }



 }


public function delete(Page $page){
    
    return View::make('Admin/pages/page/deletePage',compact('page'));
    
    
}



public  function handleDelete(){
    
        $page=Page::findOrFail(Input::get('page'));
        $page->delete();
        return Redirect::action('AdminPageController@index')->with('flash_dlt_success','Oh NO!! You have deleted a page');
    
    
}





public function showContent(){
  return View::make('front/layout');
    
}

public static function formCancel(){
    
   return Redirect::action('AdminPageController@index')->with('flash_dlt_success','OH!Sorry! I can not make a Page in this time');  
}



}