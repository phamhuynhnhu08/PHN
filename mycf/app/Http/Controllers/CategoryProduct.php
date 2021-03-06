<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
use Auth;
class CategoryProduct extends Controller
{
    // public function __construct(){
    //     $this->middleware('permission:add category product',['only'=> ['add_category_product','save_category_product','unactive_category_product','active_category_product']]);
    //     $this->middleware('permission:edit category product',['only'=> ['edit_category_product','update_category_product']]);
    //     $this->middleware('permission:delete category product',['only'=> ['delete_category_product']]);
    //     $this->middleware('permission:list category product',['only'=> ['all_category_product']]);
    // }

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
    
    public function add_category_product(){
        $this->AuthLogin();
    	return view('admin.add_category_product');
    }
    public function all_category_product(){
        $this->AuthLogin();
    	$all_category_product = DB::table('tbl_category_product')->get();
    	$manager_category_product  = view('admin.all_category_product')->with('all_category_product',$all_category_product);
    	return view('admin_layout')->with('admin.all_category_product', $manager_category_product);


    }
    public function save_category_product(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['category_name'] = $request->category_product_name;
        $data['slug_category_product'] = $request->slug_category_product;
    	$data['category_desc'] = $request->category_product_desc;
    	$data['category_status'] = $request->category_product_status;

    	DB::table('tbl_category_product')->insert($data);
    	Session::put('message','Th??m danh m???c s???n ph???m th??nh c??ng');
    	return Redirect::to('add-category-product');
    }
    
    public function unactive_category_product($category_product_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update(['category_status'=>1]);
        Session::put('message','Kh??ng k??ch ho???t danh m???c s???n ph???m th??nh c??ng');
        return Redirect::to('all-category-product');

    }

    public function active_category_product($category_product_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update(['category_status'=>0]);
        Session::put('message','K??ch ho???t danh m???c s???n ph???m th??nh c??ng');
        return Redirect::to('all-category-product');
    }
    
    public function edit_category_product($category_product_id){
        $this->AuthLogin();
        $edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();

        $manager_category_product  = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);

        return view('admin_layout')->with('admin.edit_category_product', $manager_category_product);
    }

    public function update_category_product(Request $request,$category_product_id){
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['slug_category_product'] = $request->slug_category_product;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
        Session::put('message','C???p nh???t danh m???c s???n ph???m th??nh c??ng');
        return Redirect::to('all-category-product');
    }

    public function delete_category_product($category_product_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->delete();
        Session::put('message','X??a danh m???c s???n ph???m th??nh c??ng');
        return Redirect::to('all-category-product');
    }

    //End Admin

    //Trang Users hien thi danh muc
    public function show_category_home($slug_category_product){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        

        $category_by_id = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_category_product.slug_category_product',$slug_category_product)->get();
        
        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.slug_category_product',$slug_category_product)->limit(1)->get();

        return view('pages.category.show_category')->with('category',$cate_product)->with('category_by_id',$category_by_id)->with('category_name',$category_name);
    }

}
