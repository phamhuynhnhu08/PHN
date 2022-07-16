<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use App\Http\Requests;
use Response;
use Carbon\Carbon;
use Auth;
use App\Models\Order;
use App\Models\Personal;


use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
session_start();

class CheckoutController extends Controller
{
//      public function __construct(){
//       $this->middleware('permission:view order',['only'=> ['view_order']]);
//        $this->middleware('permission:list order',['only'=> ['manage_order']]);
//      $this->middleware('permission:delete order',['only'=> ['delete_order']]);
//    }
    
    public function execPostRequest($url, $data)
        {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data))
            );
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            //execute post
            $result = curl_exec($ch);
            //close connection
            curl_close($ch);
            return $result;
        }
    public function momo(){
        //9704 0000 0000 0018   
        //NGUYEN VAN A
        //03/07
        //OTP
        //0917003003


        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = $_POST['total_tien'];
        $orderId = time() ."";
        $redirectUrl = "http://localhost/doan/cafe/payment";
        $ipnUrl = "http://localhost/doan/cafe/payment";
        $extraData = "";
            $requestId = time() . "";
            $requestType = "payWithATM";
            // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $secretKey);
            $data = array('partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature);
            $result = $this->execPostRequest($endpoint, json_encode($data));
            
             $jsonResult = json_decode($result, true);  // decode json
            // dd($jsonResult);
            //Just a example, please check more in there
            return redirect()->to($jsonResult['payUrl']);
            // header('Location: ' . $jsonResult['payUrl']);
    }
    
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
   
    public function update_order_qty(Request $request){
        //update order
           $this->AuthLogin();
        $data = $request->all();
        $order = Order::find($data['order_id']);
        $order->order_status = $data['order_status'];
        $order->save();
        
        //order date
        $order_date = $order->order_date;   
        
        $statistic = Statistic::where('order_date',$order_date)->get();
        if($statistic){
            $statistic_count = $statistic->count(); 
        }else{
            $statistic_count = 0;
        }   

        if($order->order_status==1){
            //them
            $total_order = 0;
            $sales = 0;
            $profit = 0;
            $quantity = 0;

            foreach($data['order_product_id'] as $key => $product_id){

                $product = Product::find($product_id);
                // $product_quantity = $product->product_quantity;
                // $product_sold = $product->product_sold;
                //them
                $product_price = $product->product_price;
                // $product_cost = $product->price_cost;
                $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

                foreach($data['quantity'] as $key2 => $qty){

                    if($key==$key2){
                        // $pro_remain = $product_quantity - $qty;
                        // $product->product_quantity = $pro_remain;
                        // $product->product_sold = $product_sold + $qty;
                        // $product->save();
                        //update doanh thu
                        $quantity+=$qty;
                        $total_order+=1;
                        $sales+=$product_price*$qty;
                        // $profit = $sales - ($product_cost*$qty);
                        $profit = $sales;
                    }

                }
            }
            //update doanh so db
            if($statistic_count>0){
                $statistic_update = Statistic::where('order_date',$order_date)->first();
                $statistic_update->sales = $statistic_update->sales + $sales;
                $statistic_update->profit =  $statistic_update->profit + $profit;
                $statistic_update->quantity =  $statistic_update->quantity + $quantity;
                $statistic_update->total_order = $statistic_update->total_order + $total_order;
                $statistic_update->save();

            }else{

                $statistic_new = new Statistic();
                $statistic_new->order_date = $order_date;
                $statistic_new->sales = $sales;
                $statistic_new->profit =  $profit;
                $statistic_new->quantity =  $quantity;
                $statistic_new->total_order = $total_order;
                $statistic_new->save();
            }



        }


    }
  
//     public function days_order(){

//     $sub60days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(60)->toDateString();

//     $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

//     $get = Statistic::whereBetween('order_date',[$sub60days,$now])->orderBy('order_date','ASC')->get();


//     foreach($get as $key => $val){

//        $chart_data[] = array(
//         'period' => $val->order_date,
//         'order' => $val->total_order,
//         'sales' => $val->sales,
//         'profit' => $val->profit,
//         'quantity' => $val->quantity
//     );

//    }

//    echo $data = json_encode($chart_data);
// }

// public function dashboard_filter(Request $request){

//     $data = $request->all();

//         // $today = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
//        // $tomorrow = Carbon::now('Asia/Ho_Chi_Minh')->addDay()->format('d-m-Y H:i:s');
//        // $lastWeek = Carbon::now('Asia/Ho_Chi_Minh')->subWeek()->format('d-m-Y H:i:s');
//        // $sub15days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(15)->format('d-m-Y H:i:s');
//        // $sub30days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(30)->format('d-m-Y H:i:s');

//     $dauthangnay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
//     $dau_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
//     $cuoi_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();



//     $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
//     $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();

//     $dauthang9 = Carbon::now('Asia/Ho_Chi_Minh')->subMonth(2)->startOfMonth()->toDateString();
//     $cuoithang9 = Carbon::now('Asia/Ho_Chi_Minh')->subMonth(2)->endOfMonth()->toDateString();


//     $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

//     if($data['dashboard_value']=='7ngay'){

//         $get = Statistic::whereBetween('order_date',[$sub7days,$now])->orderBy('order_date','ASC')->get();

//     }elseif($data['dashboard_value']=='thangtruoc'){

//         $get = Statistic::whereBetween('order_date',[$dau_thangtruoc,$cuoi_thangtruoc])->orderBy('order_date','ASC')->get();

//     }elseif($data['dashboard_value']=='thangnay'){

//         $get = Statistic::whereBetween('order_date',[$dauthangnay,$now])->orderBy('order_date','ASC')->get();

//     }elseif ($data['dashboard_value']=='thang9') {

//         $get = Statistic::whereBetween('order_date',[$dauthang9,$cuoithang9])->orderBy('order_date','ASC')->get();

//     }else{
//         $get = Statistic::whereBetween('order_date',[$sub365days,$now])->orderBy('order_date','ASC')->get();
//     }


//     foreach($get as $key => $val){

//         $chart_data[] = array(
//             'period' => $val->order_date,
//             'order' => $val->total_order,
//             'sales' => $val->sales,
//             'profit' => $val->profit,
//             'quantity' => $val->quantity
//         );
//     }

//     echo $data = json_encode($chart_data);

// }

    

    public function login_checkout(){

    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        
    	return view('pages.checkout.login_checkout')->with('category',$cate_product);
    }

    public function login_checkout1(){

    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        
    	return view('pages.checkout.login_checkout1')->with('category',$cate_product);
    }
    
    public function add_customer(Request $request){

    	$data = array();
    	$data['customer_name'] = $request->customer_name;
    	$data['customer_phone'] = $request->customer_phone;
    	$data['customer_email'] = $request->customer_email;
    	$data['customer_password'] = md5($request->customer_password);

    	$customer_id = DB::table('tbl_customers')->insertGetId($data);

    	Session::put('customer_id',$customer_id);
    	Session::put('customer_name',$request->customer_name);
    	return Redirect::to('/trang-chu');


    }

    public function show_checkout(){
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
      
    	return view('pages.checkout.show_checkout')->with('category',$cate_product);
    }

    public function save_checkout_customer(Request $request){
    	$data = array();
    	$data['shipping_name'] = $request->shipping_name;
    	$data['shipping_phone'] = $request->shipping_phone;
    	$data['shipping_email'] = $request->shipping_email;
    	$data['shipping_notes'] = $request->shipping_notes;
    	$data['shipping_address'] = $request->shipping_address;

    	$shipping_id = DB::table('tbl_shipping')->insertGetId($data);

    	Session::put('shipping_id',$shipping_id);
    	
    	return Redirect::to('/payment');
    }

    public function payment(){

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        
        return view('pages.checkout.payment')->with('category',$cate_product);

    }

    public function order_place(Request $request){
        //insert payment_method
     
        $data = array();
        $data['payment_method'] = $request->payment_option;
        $data['payment_status'] = 'Đang chờ xử lý';
        $payment_id = DB::table('tbl_payment')->insertGetId($data);

        //insert order
        $order_date = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $order_data = array();
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = Cart::total();
        $order_data['order_date'] = $order_date;
        $order_data['order_status'] = 'Đang chờ xử lý';
        $order_id = DB::table('tbl_order')->insertGetId($order_data);

        //insert order_details
        $content = Cart::content();
        foreach($content as $v_content){
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;
            $order_d_data['product_price'] = $v_content->price;
            $order_d_data['product_sales_quantity'] = $v_content->qty;
            DB::table('tbl_order_details')->insert($order_d_data);
        }
        if($data['payment_method']==1){

            echo 'Thanh toán thẻ ATM';

        }elseif($data['payment_method']==2){
            Cart::destroy();

            $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
          
            return view('pages.checkout.handcash')->with('category',$cate_product);

        }elseif($data['payment_method']==3){
            echo 'Thẻ ghi nợ';

        }elseif($data['payment_method']==4){
            Cart::destroy();

            $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
          
            return view('pages.checkout.handcash')->with('category',$cate_product);
        }
        
        //return Redirect::to('/payment');
    }
    
    public function logout_checkout(){
    	Session::flush();
    	return Redirect::to('/login-checkout');
    }

    public function login_customer(Request $request){
    	$email = $request->email_account;
    	$password = md5($request->password_account);
    	$result = DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password',$password)->first();
    	
    	
    	if($result){
    		Session::put('customer_id',$result->customer_id);
            Session::put('customer_id',$result->customer_id);
            Session::put('customer_id',$result->customer_id);
            Session::put('customer_id',$result->customer_id);
    		return Redirect::to('/show_checkout');
    	}else{
    		return Redirect::to('/login-checkout');
    	}
    	
   
    	
//Admin
    }
    public function manage_order(){
        
        $this->AuthLogin();
        $all_order = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->select('tbl_order.*','tbl_customers.customer_name', 'tbl_customers.customer_email')
        ->orderby('tbl_order.order_id','desc')->get();
        $manager_order  = view('admin.manage_order')->with('all_order',$all_order);
        return view('admin_layoutnv')->with('admin.manage_order', $manager_order);
    }

    public function view_order($orderId){
        $this->AuthLogin();
        $order_by_id = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
        ->where('tbl_order_details.order_id',$orderId)
        ->select('tbl_order.*','tbl_customers.*','tbl_shipping.*','tbl_order_details.*')->first();
        $order_product = DB::table('tbl_order_details')->join('tbl_product','tbl_order_details.product_id','=','tbl_product.product_id')
        ->where('tbl_order_details.order_id',$orderId)
        ->select('tbl_order_details.*','tbl_product.*')->get();

       
        $manager_order_by_id  = view('admin.view_order')->with('order_by_id',$order_by_id)->with('order_product',$order_product);
        return view('admin_layoutnv')->with('admin.view_order', $manager_order_by_id);
        
    }

    // public function delete_order($orderId){
    //     $this->AuthLogin();
    //     DB::table('tbl_order')->where('order_id',$orderId)->delete();
        
    //     Session::put('message','Xóa đơn hàng thành công');
    //     return Redirect::to('manage-order');
    // }
//End Admin   
    
}
