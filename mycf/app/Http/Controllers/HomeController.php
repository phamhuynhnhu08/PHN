<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
session_start();

class HomeController extends Controller
{
    public function index(){

    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
       
        // $all_product = DB::table('tbl_product')
        // ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
     
        // ->orderby('tbl_product.product_id','desc')->get();
        
        $new_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(3)->get(); 

    	return view('pages.home')->with('category',$cate_product)->with('new_product',$new_product);
    }

    public function search(Request $request){

        $keywords = $request->keywords_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get(); 


        return view('pages.sanpham.search')->with('category',$cate_product)->with('search_product',$search_product);

    }
}
