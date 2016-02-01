<?php
/*This is created to working with pages of admin panel*/


class AdminLayoutController extends BaseController{

    
    
    public function index(){

        $layout=Layout::all();
       return View::make('Admin/pages/layout/allLayout',compact('layout'));
    }
    public function create(){
        
        return View::make('Admin/pages/layout/createLayout'); 
        
        
    }
    
    public function handleCreate(){
             
       //$user_id = Auth::id();
        $data = Input::all();
    $rules = array(
        'layout_title' =>'required|Unique:layouts',
        'author'=>'required'
    );
    $validator = Validator::make($data, $rules);           
      if ($validator->passes()) {   
       $layout=new Layout;
       $layout->layout_title=Input::get('title');
       $layout->author=Input::get('author');
       $layout->description=Input::get('description');
       $layout->css_src=Input::get('css_src');
       $layout->js_src=Input::get('js_src');
       $layout->navigation=Input::get('navigation');
       $layout->footer=Input::get('footer');       
       $layout->full_layout=Input::get('full_layout');
       $layout->published_by=Auth::id();
       $layout->updated_by=Auth::id();
       
        
        if(Input::get('save_layout'))
     {
            $layout->save();
return Redirect::action('AdminLayoutController@index')->with('flash_edit_success','Hurray!You have created a Layout');

 }

elseif(Input::get('continue_layout')){
    
    $layout->save();
    
return Redirect::action('AdminLayoutController@edit',$layout->id)->with('flash_edit_success','Hurray!Your updated information are saved,You can continue work...');    
    }

 else {
       return Redirect::action('AdminLayoutController@index')->with('flash_dlt_success','OH!Sorry! I can not make a Layout in this time'); 
    }       

        
      
        
    
    }
    
    else{


        return Redirect::back()
		->withInput()
		->withErrors($validator);
    } 
    
    
 }


public function edit(Layout $layout){
    return View::make('Admin/pages/layout/editLayout',compact('layout'));

}

 public function handleEdit(){

       $layout = Layout::findOrFail(Input::get('layout'));
       $layout->layout_title=Input::get('title');
       $layout->author=Input::get('author');
       $layout->description=Input::get('description');
       $layout->css_src=Input::get('css_src');
       $layout->js_src=Input::get('js_src');
       $layout->navigation=Input::get('navigation');
       $layout->footer=Input::get('footer');       
       $layout->full_layout=Input::get('full_layout');
       $layout->published_by=Auth::id();
       $layout->updated_by=Auth::id();



        if(Input::get('save_layout'))
     { $layout->save();
return Redirect::action('AdminLayoutController@index')->with('flash_edit_success','Hurray!Your updated information are saved');

 }

elseif(Input::get('continue_layout')){
    
    $layout->save();
return Redirect::action('AdminLayoutController@edit',$layout->id)->with('flash_edit_success','Hurray!Your updated information are saved,You can continue work');    
    }
    
    else {
       return Redirect::action('AdminLayoutController@index')->with('flash_dlt_success','OH!Sorry! I can not make a Layout in this time'); 
    } 
    
}



public function delete(Layout $layout){
    
    return View::make('Admin/pages/layout/deleteLayout',compact('layout'));
    
    
}



public  function handleDelete(){
    
        $layout=Layout::findOrFail(Input::get('page'));
        $layout->delete();
        return Redirect::action('AdminLayoutController@index')->with('flash_dlt_success','Oh NO!! You have deleted a page');
    
    
}

public static function passLayout(){
    
 $id=AppHelper::getLayoutId();
 $layout=Layout::find($id);
 //return $layout->full_layout;
 eval('?'.'>'.$layout->full_layout); 
 
    
}




public static function layoutCancel(){
    
    return Redirect::action('AdminLayoutController@index')->with('flash_dlt_success','OH!Sorry! I can not make a Layout in this time');  
    
}

}