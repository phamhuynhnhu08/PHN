<?php

namespace App\Http\Controllers;

use DB;
use Session;


use Illuminate\Http\Request;
session_start();


class ProfileController extends Controller
{
    //profile
    public function personal_in4(){
        
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        $personal_in4 =DB::table('tbl_customers')->where('customer_id')->get();

        foreach($personal_in4 as $key => $value){
            $customer_id=$value->customer_id;
        }
        
        return view('pages.personal.personal_in4')->with('category',$cate_product);

    }

    public function update_in4(Request $request,$customer_id){

        $data = array();
    	$data['customer_name'] = $request->customer_name;
    	$data['customer_phone'] = $request->customer_phone;
    	$data['customer_email'] = $request->customer_email;
    	$data['customer_password'] = md5($request->customer_password);

    	$customer_id = DB::table('tbl_customers')->insertGetId($data);

    	Session::get('customer_id',$customer_id);
    	Session::put('customer_name',$request->customer_name);
    	return Redirect::to('/trang-chu');
    }
   
}
