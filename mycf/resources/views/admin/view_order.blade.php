@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  
  <div class="panel panel-default">
    <div class="panel-heading">
     Thông tin khách hàng
    </div>
    
    
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           
            <th>Tên khách hàng</th>
            <th>Email khách hàng</th>
            <th>Số điện thoại</th>
          
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
           
            <td>{{$order_by_id->customer_name}}</td>
            <td>{{$order_by_id->customer_email}}</td>
            <td>{{$order_by_id->customer_phone}}</td>
            
          </tr>
     
        </tbody>
      </table>

    </div>
   
  </div>
</div>
<br>
<div class="table-agile-info">
  
  <div class="panel panel-default">
    <div class="panel-heading">
     Địa chỉ nhận hàng
    </div>
    
    
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           
            <th>Tên người nhận</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
          
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
           
            <td>{{$order_by_id->shipping_name}}</td>
            <td>{{$order_by_id->shipping_address}}</td>
            <td>{{$order_by_id->shipping_phone}}</td>
            
           
          
          </tr>
     
        </tbody>
      </table>

    </div>
   
  </div>
</div>
<br><br>
<div class="table-agile-info">
  
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin sản phẩm
    </div>
    <div class="row w3-res-tb">
      
       
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
            </th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Tổng tiền</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($order_product as $key => $order_pro)
          <tr>
           
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$order_pro->product_name}}</td>
            <td><input type="number" min="1" readonly class="order_qty_{{$order_pro->product_id}}" value="{{$order_pro->product_sales_quantity}}" name="product_sales_quantity"></td>
            <td>{{$order_pro->product_price}}</td>
            <td>{{number_format($order_pro->product_price*$order_pro->product_sales_quantity,0,',','.')}} VND</td>
            <input type="hidden" name="order_product_id" class="order_product_id" value="{{$order_pro->product_id}}">
           
          </tr>
         @endforeach
         <tr>
           <td colspan="6">
             <div class="form-group">
              <label for="exampleFormControlSelect1">Xử lý đơn hàng</label>
              <form>
                @csrf
              <select class="form-control order_details_change" id="exampleFormControlSelect1">

                @if($order_by_id->order_status=='Đang chờ xử lý')
                <option value="chuaxuly">----Chưa xử lý----</option>
                <option id="{{$order_by_id->order_id}}" value="1">Đã vận chuyển</option>
                <option id="{{$order_by_id->order_id}}" value="0">Hủy bỏ đơn hàng</option>

                @elseif($order_by_id->order_status==1)
                <option disabled value="chuaxuly">----Chưa xử lý----</option>
                <option selected id="{{$order_by_id->order_id}}" value="1">Đã vận chuyển</option>
                <option disabled id="{{$order_by_id->order_id}}" value="0">Hủy bỏ đơn hàng</option>

                @else
                <option disabled value="chuaxuly">----Chưa xử lý----</option>
                <option disabled id="{{$order_by_id->order_id}}" value="1">Đã vận chuyển</option>
                <option selected id="{{$order_by_id->order_id}}" value="0">Hủy bỏ đơn hàng</option>
                @endif

               
              </select>
            </form>
            </div>
           </td>
         </tr>
        </tbody>
      </table>

    </div>
    <footer class="panel-footer">

     {{--  <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div> --}}
    </footer>
  </div>
</div>
@endsection