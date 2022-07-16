<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
use App\User;
use Auth;
class AdminController extends Controller
{
   public function AuthLogin(){
        
        if(Session::get('login_normal')){

            $admin_id = Session::get('admin_id');
        }else{
            $admin_id = Auth::id();
        }
            if($admin_id){
                return Redirect::to('dashboard');
            }else{
                return Redirect::to('admin')->send();
            } 
        
       
    }

    public function register(Request $request){
        $this->validation($request);
        $data = $request->all();

        $admin = new User();
        $admin->name = $data['admin_name'];
        $admin->email = $data['admin_email'];
        $admin->email = $data['admin_email'];
        $admin->phone = $data['admin_phone'];
        $admin->address = $data['admin_address'];
        $admin->password = Hash::make($data['admin_password']);
        $admin->save();
        return redirect('/register-auth')->with('message','Đăng ký thành công');

    }

    public function index(){
    	return view('admin_login');
    }

    public function thongke(){
    	return view('admin.dashboard1');
    }

    public function hi(){
    	return view('admin.xinchao');
    }
 

    public function show_dashboard(){
        $this->AuthLogin();
        $admin_id = Auth::id();
        if($admin_id==1){
         return view('admin_layout');
        }
        else if($admin_id!=null&&$admin_id!=1){
         return view('admin_layoutnv');
        }
        
    }

    public function dashboard(Request $request){
        
    	// $admin_email = $request->admin_email;
    	// $admin_password = md5($request->admin_password);

    	// $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
    	// if($result){
     //        Session::put('admin_name',$result->admin_name);
     //        Session::put('admin_id',$result->admin_id);
     //        return Redirect::to('/dashboard');
     //    }else{
     //        Session::put('message','Mật khẩu hoặc tài khoản không đúng. Hãy nhập lại');
     //        return Redirect::to('/admin');
     //    }
        $this->validate($request,[
            'admin_email' => 'required|email|max:255', 
            'admin_password' => 'required|max:255'
        ]);
        // $data = $request->all();

        if(Auth::attempt(['email'=>$request->admin_email,'password'=>$request->admin_password ])){
            return redirect('/dashboard');
        }else{
            return redirect('/admin')->with('message','Lỗi đăng nhập authentication');
        }
    }
    
    public function logout(){
        $this->AuthLogin();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }

    
}
