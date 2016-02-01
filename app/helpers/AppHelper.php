<?php

class AppHelper {

   public static function   curPageURL() {
 
  if ($_SERVER["SERVER_PORT"] != "80") {
 
       $pageURL=substr($_SERVER["REQUEST_URI"],strrpos($_SERVER["REQUEST_URI"],"/")+1);
  
 } else {
             $pageURL=substr($_SERVER["REQUEST_URI"],strrpos($_SERVER["REQUEST_URI"],"/")+1);
 }
 return $pageURL;
}
    
    


public static function getPageid(){
    
    $route=  AppHelper::curPageURL();
    
   $pageId=Page::where('route','=',$route)->get();
    
    //return $user;
    
    foreach ($pageId as $value) {
        
        $id=$value['id'];
        
    }
    
    return $id;
    
  
}



public static function getLayoutId(){
    
    $pageId=AppHelper::getPageid();
    
    $layoutIds=Page::whereId($pageId)->get();
    
    foreach ($layoutIds as $value) {
        
        $layoutId=$value['layout_id'];
        
    }
    
    
    return $layoutId;
    
    
    
}





    public static function getLayoutName(){
    
    
    $id=AppHelper::getLayoutId();
    
    $layout_name=Layout::find($id);
   
    
    return $layout_name->name;
    
}

//get the list of all route name from Page Table
public static function getMenu(){
$page = Page::all();
foreach ($page as $value) {
    $route = $value['route'];
    $title = $value['title'];
    ?>

    <li><a href="<?php echo $route; ?>"><?php echo $title; ?></a></li>


    <?php
}

}
    

    
    
    


}