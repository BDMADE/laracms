<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
Route::get('/', function()
{
	return View::make('hello');
});
*/

//declaration of communicate data with controller to views

Route::model('user', 'User');
Route::model('page', 'Page');
Route::model('layout', 'Layout');
Route::model('snippet','Snippet');


//declaration of communicate data with controller to views
Route::get('/test',function(){
    
    return View::make('test');
});

//declaration of communicate data with controller to views
Route::get('/',function(){
    
    return Redirect::to('/Home');
    
    
    
});


Route::get('/home','UserController@home');
//Route::get('/pass','AdminPageController@passView');
//Route::get('/old','UserController@home');
Route::get('/admin','AdminUserController@index')->before('auth');

Route::get('/user','UserController@create');
Route::post('/user','UserController@handleCreate');

Route::get('/login','UserController@login');
Route::post('/login','UserController@handleLogin');


Route::get('/logout','UserController@logout');


//user information for admin panel
Route::get('/admin/user','AdminUserController@index')->before('auth');

//add user in admin panel
Route::get('/admin/user/add','AdminUserController@create')->before('auth');
Route::post('/admin/user/add','AdminUserController@handleCreate')->before('auth');


//edit user in admin panel

Route::get('/admin/user/edit/{user}','AdminUserController@edit')->before('auth');

Route::post('/admin/user/edit','AdminUserController@handleEdit')->before('auth');

//delete user in admin panel

Route::get('/admin/user/delete/{user}','AdminUserController@delete')->before('auth');

Route::post('/admin/user/delete','AdminUserController@handleDelete')->before('auth');


//page information of admin panel
Route::get('/admin/page','AdminPageController@index')->before('auth');

Route::get('/admin/page/add','AdminPageController@create')->before('auth');
Route::get('/admin/page/cancel','AdminPageController@formCancel')->before('auth');

Route::post('/admin/page/add','AdminPageController@handleCreate')->before('auth');






Route::get('/admin/page/edit/{page}','AdminPageController@edit')->before('auth');


Route::post('/admin/page/edit','AdminPageController@handleEdit')->before('auth');


Route::get('/admin/page/delete/{page}','AdminPageController@delete')->before('auth');


Route::post('/admin/page/delete','AdminPageController@handleDelete')->before('auth');




//layout information of admin panel
Route::get('/admin/layout','AdminLayoutController@index')->before('auth');

Route::get('/admin/layout/add','AdminLayoutController@create')->before('auth');


Route::post('/admin/layout/add','AdminLayoutController@handleCreate')->before('auth');
Route::get('/admin/layout/cancel','AdminLayoutController@layoutCancel')->before('auth');




Route::get('/admin/layout/edit/{layout}','AdminLayoutController@edit')->before('auth');


Route::post('/admin/layout/edit','AdminLayoutController@handleEdit')->before('auth');


Route::get('/admin/layout/delete/{layout}','AdminLayoutController@delete')->before('auth');


Route::post('/admin/layout/delete','AdminLayoutController@handleDelete')->before('auth');


//Snippet information of admin panel
Route::get('/admin/snippet','AdminSnippetController@index')->before('auth');

Route::get('/admin/snippet/add','AdminSnippetController@create')->before('auth');


Route::post('/admin/snippet/add','AdminSnippetController@handleCreate')->before('auth');





Route::get('/admin/snippet/edit/{snippet}','AdminSnippetController@edit')->before('auth');


Route::post('/admin/snippet/edit','AdminSnippetController@handleEdit')->before('auth');


Route::get('/admin/snippet/delete/{snippet}','AdminSnippetController@delete')->before('auth');


Route::post('/admin/snippet/delete','AdminSnippetController@handleDelete')->before('auth');






//what will be the program if i want to make all page id's,it renders each routers content dynamically.


$pages=Page::all();
    
    foreach ($pages as $page){
      
        $page=$page['route'];
     
       Route::get($page,'AdminPageController@showContent'); 
    }





