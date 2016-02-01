<?php

class Content{
    
 public static function page(){
    
   $id=AppHelper::getPageid();    
    
   $page=Page::find($id);
   
    eval('?'.'>'.$page->content);
    
}

//get the home page content
public static function homePage(){
    
    $page=Page::find('1');
   
    eval('?'.'>'.$page->content);
    
   
    
}




public static function CSS(){
    
$id=AppHelper::getLayoutId();

$css_src=Layout::find($id);


//return $css_src->css_src; 
eval('?'.'>'.$css_src->css_src);
    
    
    
}


public static function JS(){
    
$id=AppHelper::getLayoutId();
$js_src=Layout::find($id);
//return $js_src->js_src; 
eval('?'.'>'.$js_src->js_src);
  
} 

public static function Nav(){
    
$id=AppHelper::getLayoutId();
$nav=Layout::find($id);
//return $nav->navigation;
eval('?'.'>'.$nav->navigation);

    
    
}

public static function Footer(){
    
 $id=AppHelper::getLayoutId();
 $footer=Layout::find($id);
 //return $footer->footer;    
 eval('?'.'>'.$footer->footer); 
}
  

public static function meta(){
    
   echo View::make('front/meta');    
 
    
}

public static function getPageTitle(){
    
  $id=  AppHelper::getPageid();
  $page=Page::find($id);
  return $page->title;
  
  
}
    
public static function breadcumbs(){
    
  $id=  AppHelper::getPageid();
  $page=Page::find($id);
  echo $page->breadcumbs;
    
    
}


public static function getPageKeywords(){
    
  $id=  AppHelper::getPageid();
  $page=Page::find($id);
  return $page->keywords; 
    
}

public static function getPageTags(){
    
  $id=  AppHelper::getPageid();
  $page=Page::find($id);
  return $page->tags; 
    
}


public static function getPageDescription(){
   $id=  AppHelper::getPageid();
  $page=Page::find($id);
  return $page->description; 
    
    
}

public static function getAuthorName(){
    
   $id=  AppHelper::getLayoutId(); 
   $layout=Layout::find($id);
  return $layout->author; 
}


public static function part($name){
    
   // $sectionTitle=Snippet::find($name);
    
    $section_id=Snippet::whereTitle($name)->get();
    
    foreach ($section_id as $value){
        
        $id=$value['id'];
    }
    
    
    $section=Snippet::find($id);
    
    //return $section->content;
    
    eval('?'.'>'.$section->content);
    
}





    
}