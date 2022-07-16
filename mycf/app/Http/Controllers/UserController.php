<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\Roles;
use App\Models\Admin;
use App\Models\User;
use Auth;
use Session;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // public function index()
    // {
    //     $admin = User::with('roles')->orderBy('id','DESC')->paginate(5);
    //     return view('admin.users.all_users')->with(compact('admin'));;
    // }
   
    // public function add_users(){
    //     return view('admin.users.add_users');
    // }

    // public function delete_user_roles($admin_id){
       
    //     $admin = Admin::find($admin_id);

    //     if($admin){
    //         $admin->roles()->detach();
    //         $admin->delete();
    //     }
    //     return redirect()->back()->with('message','Xóa user thành công');

    // }

    
    
    // public function assign_roles(Request $request){

      

    //     $user = User::where('email',$request->admin_email)->first();
    //     $user->roles()->detach();

        
    //     if($request->nhanvien_role){
    //        $user->roles()->attach(Roles::where('name','nhanvien')->first());     
    //     }
    //     if($request->admin_role){
    //        $user->roles()->attach(Roles::where('name','admin')->first());     
    //     }
    //     return redirect()->back()->with('message','Cấp vai trò cho user thành công');
    // }

    // //Them nhân viên
    // public function store_users(Request $request){
    //     $data = $request->all();
    //     $admin = new Admin();
    //     $admin->admin_name = $data['admin_name'];
    //     $admin->admin_phone = $data['admin_phone'];
    //     $admin->admin_email = $data['admin_email'];
    //     $admin->admin_password = md5($data['admin_password']);
    //     $admin->roles()->attach(Roles::where('name','user')->first());
    //     $admin->save();
    //     Session::put('message','Thêm users thành công');
    //     return Redirect::to('users');
    // }
  



}
