<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\User;
use App\Models\Roles;
use Auth;
use Hash;
class AuthController extends Controller
{
    
       
    	public function register_auth(){
    		return view('admin.register.create');
    	}
    	public function register(Request $request){
			$data =$request->all();
		
			$admin = new User();
			$admin->name = $data['admin_name'];
			$admin->email = $data['admin_email'];
			$admin->phone = $data['admin_phone'];
			$admin->address = $data['admin_address'];
			$admin->password = Hash::make($data['admin_password']);
			$admin->save();
			//assign role for user
			$admin->assignRole('nhanvien');
			return redirect('/admin')->with('message','Đăng ký thành công');

    	}

    	
    }
    

