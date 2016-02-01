<?php
/*This is created to working with user of admin panel*/


class AdminUserController extends BaseController{

   public  function index(){

       $user=User::all();
       return View::make('Admin/pages/user/allUser',compact('user'));


   }



    public function create(){

        return View::make('Admin/pages/user/adminUserAdd');
    }


    public function handleCreate(){
//Here is the input which are posted from registration form
        $data = Input::all();
        $rules = array(
            'username' => 'required|alpha_num|Unique:users',
            'email'=>'required|Unique:users',
            'password'=>'required'
        );

        // Build the custom messages array.
        $messages = array(
            'min' => 'You have to enter minimum 3 letters.',

        );

        // Create a new validator instance.
        $validator = Validator::make($data, $rules,$messages);

        if ($validator->passes()) {
// Record data in the database
            $user = new User;
            $user->username = Input::get('username');
            $user->password = Hash::make(Input::get('password'));
            $user->email = Input::get('email');
            $user->save();

            //return Redirect::to('/admin');

            return Redirect::action('AdminUserController@index')->with('flash_add_success','Hurray!!! You have created an user');

        }

        else{


            return Redirect::back()->withErrors($validator);
        }





    }


    public  function edit(User $user){

        //$user=User::all();
        // Show the edit game form.
        return View::make('Admin/pages/user/editUser', compact('user'));

    }

    public function handleEdit(){

        // Handle edit form submission.
        $user = User::findOrFail(Input::get('user'));
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));

        $user->save();
        return Redirect::action('AdminUserController@index')->with('flash_edit_success','Hurray!Your updated information are saved');



    }


    public function delete(User $user){

        return View::make('Admin/pages/user/deleteUser',compact('user'));
    }

    public function handleDelete(){

// Handle the delete confirmation.
        $id = Input::get('user');
        $user = User::findOrFail($id);
        $user->delete();
        return Redirect::action('AdminUserController@index')->with('flash_dlt_success','Oh NO!! You have deleted an user');

    }

}
