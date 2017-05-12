<?php

namespace App\Http\Controllers\Admin;

use DB;
use View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AdminUserController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    //Adminstrators
    public function getAdminsList(){
        $admin = User::where('admin',1)->get();

        return view('admin/adminAdministrator')->with('admin',$admin);
    }
    public function changeAdminStatus($id){
        $admin = User::find($id);
        if ($admin->active == 1){
            $admin->active = 0;
        }else {
            $admin->active = 1;
        }
        $admin->save();

        return $this->getAdminsList();
    }

    public function getAdminInfo($id=""){
        if ($id != ""){
            $admin = User::find($id);
            return view('admin/edit/editAdmin')->with('admin',$admin);
        }else {
            return view('admin/edit/editAdmin');
        }
    }

    public function deleteAdmin($id){
        $user=User::find($id)->delete();

        return $this->getAdminsList();
    }


    public function addAdmin(Request $request){
        $admin = User::find($request->input("id"));
        if (isset($admin)){
            $admin->name = $request->input("name");
            $admin->password = $request->input("password"); 
            $admin->save();
        }else {
            $data['name'] = $request->input('name');
            $data['password'] = $request->input('password');
            $data['active'] = 1;
            $data['admin'] =1; 
            $data['email'] = "";
            
            $msg = User::create($data);
        }

        return $this->getAdminsList();
    }

    //Users
    public function getUsersList(){
        $user = User::where('admin',0)->get();
        return view('admin/adminUser')->with('user',$user);
    }

    public function changeUserStatus($id){
        $user = User::find($id);
        if ($user->active == 1){
            $user->active = 0;
        }else {
            $user->active = 1;
        }
        $user->save();

        return $this->getUsersList();
    }

    public function getUserInfo($id){
        $user = User::find($id);

        return view('editUser')->with('user',$user);
    }

    public function deleteUser($id){
        $user=User::find($id)->delete();

        return $this->getUsersList();
    }

    public function updateUserInfo(Request $request){
        $user = User::find($request->input("id"));
        $user->name = $request->input("name");
        $user->password = $request->input("password");
        $user->email = $request->input("email");  

        $user->save();

        return $this->getUsersList();
    }

    public function addUser(Request $request){
        $data['name'] = $request->input('name');
        $data['password'] = $request->input('password');
        $data['active'] = 1;
        $data['email'] = $request->input('email');
        $data['admin'] = 0; 
        
        $msg = User::create($data);

        return $this->getUsersList();
    }
}
