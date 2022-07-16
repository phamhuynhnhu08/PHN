<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

use DB;
use Session;
use Auth;
use Hash;
use Artisan;
class UserRolesController extends Controller
{
    //  public function __construct(){
       
    //    $this->middleware('permission:add user',['only'=> ['create','assign_permission','assign_role','post_user']]);
    //    $this->middleware('permission:list users',['only'=> ['index']]);
    // }
    
    public function logout(){
             Session::flush();
          return redirect()->to('admin');
    }
    
    public function AuthLogin(){
        
        if(Session::get('login_normal')){

            $admin_id = Session::get('admin_id');
        }else{
            $admin_id = Auth::id();
        }
            if($admin_id){
                return Redirect::to('xinchao');
            }else{
                return Redirect::to('admin')->send();
            } 
        
       
    }
    
    //dang ky tai khoan nhanvien(them nhan vien)
    public function post_user(Request $request){
       
        $data = $request->all();

        $admin = new User();
        $admin->name = $data['admin_name'];
        $admin->email = $data['admin_email'];
        $admin->phone = $data['admin_phone'];
        $admin->address = $data['admin_address'];
        $admin->password = Hash::make($data['admin_password']);
        $admin->save();
        $admin->assignRole('nhanvien');
        return redirect('/add-user')->with('message','Đăng ký thành công');

    }

    public function add_user(){
        return view('admin.roles.add_user');
    }
    
    //tao/cap vai tro cho users
    public function create($admin_id){
    	$this->AuthLogin();
        Artisan::call('cache:clear');
    	$roles = Role::all();
    	
    	$user = User::find($admin_id);
    	$user_roles = $user->roles->first();
    	return view('admin.roles.create_role',compact('user','roles','user_roles'));
    }

    //  public function create_permission($admin_id){
    //  	$this->AuthLogin();
    //     Artisan::call('cache:clear');
    //     $permission = Permission::all();
    // 	$user = User::find($admin_id);
    // 	$name_roles = $user->roles->first()->name;
    // 	$pers_role = $user->getPermissionsViaRoles();
    // 	return view('admin.roles.create_permission',compact('user','name_roles','permission','pers_role'));
    // }
    
   

    public function delete_user($id){
        $user = User::find($id)->delete();
        
        return redirect()->back()->with('message','Xóa user thành công');
    }

    public function edit_users($id){
        $user = User::find($id);
        $user_roles = $user->roles->first();
        $edit_users = DB::table('users')->where('id',$id)->get();

        $manager_users  = view('admin.roles.edit_users')->with('edit_users',$edit_users);

        return view('admin_layout')->with('admin.roles.edit_users', $manager_users);
    }

    public function update_users(Request $request,$id){
        $user = User::find($id);
        
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        DB::table('users')->where('id',$id)->update($data);
        Session::put('message','Cập nhật users thành công');
        return Redirect::to('users');
    }

  

    public function index(){
    	$this->AuthLogin();
        Artisan::call('cache:clear');
    	$user = User::with('roles')->orderby('id','desc')->get();
    	// dd($user);
    	return view('admin.roles.index',compact('user'));
    }

    public function assign_role($admin_id, Request $request){
    	$this->AuthLogin();
    	$data =  $request->all();

    	$admin = User::find($admin_id);
    	$admin->syncRoles($data['role']);
    	return redirect()->back()->with('message','Thêm vai trò user thành công');
    }
    
}
