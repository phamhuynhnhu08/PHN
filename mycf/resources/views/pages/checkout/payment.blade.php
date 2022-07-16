@extends('layout')
@section('content')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
				  <li class="active">Thanh toán giỏ hàng</li>
				</ol>
			</div>

			
			
			<div class="table-responsive cart_info">
				<?php
				$content = Cart::content();
				
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td class="description">Tên sản phẩm</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng</td>
							<td class="total">Tổng Tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@php
						$total = 0;
						@endphp
						@foreach($content as $v_content)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" width="90" alt="" /></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_content->name}}</a></h4>
								
							</td>
							<td class="cart_price">
								<p>{{number_format($v_content->price).' '.'VND'}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{URL::to('/update-cart-quantity')}}" method="POST">
									{{ csrf_field() }}
									<input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}"  >
									<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
									<input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									
									<?php
									$subtotal = $v_content->price * $v_content->qty;
									$total+=$subtotal;
									echo number_format($subtotal).' '.'VND';
									?>
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
						<tr align="right">
							<td colspan="6" >Tổng tiền cần thanh toán :<p class="cart_total_price">{{number_format($total,0,',','.')}}vnd</p></td>
						</tr>
					</tbody>
				</table>
			</div>

			

			<h4 style="margin:40px 0;font-size: 20px;">Chọn hình thức thanh toán</h4>
			<form method="POST" action="{{URL::to('/order-place')}}">
				{{ csrf_field() }}
			<div class="payment-options">
				@if(!isset($_GET['partnerCode']) && !isset($_GET['orderId']) && !isset($_GET['requestId']))
					<span>
						<label><input name="payment_option" value="1" type="checkbox"> Trả bằng thẻ ATM</label>
					</span>
					
					<span>
						<label><input name="payment_option" value="2" type="checkbox"> Nhận tiền mặt</label>
					</span>
					<span>
						<label><input name="payment_option" value="3" type="checkbox"> Thanh toán thẻ ghi nợ</label>
					</span>
					
					@else
					<span>
						<label><input name="payment_option" value="4" checked type="checkbox"> Đã thanh toán qua momo</label><br/>
						<small>Bạn đã thanh toán qua momo làm đơn click đặt hàng</small>
					</span><br/>
					@endif
					<input type="submit" value="Đặt hàng" name="send_order_place" class="btn btn-primary btn-sm">
			</div>
			</form>
			@if(!isset($_GET['partnerCode']) && !isset($_GET['orderId']) && !isset($_GET['requestId']))
			<form method="POST" action="{{URL::to('/momo')}}">
				@csrf
				<input type="hidden" value="{{$total}}" name="total_tien">
				<input type="submit" value="Thanh toán MoMo" name="payUrl" class="btn btn-danger btn-sm">
			</form>
			
			@endif
			<div class="review-payment">
				<h2><a href="{{URL::to('/show-cart')}}" >Xem lại giỏ hàng</a></h2>
			</div>
		</div>
	</section> <!--/#cart_items-->

@endsection