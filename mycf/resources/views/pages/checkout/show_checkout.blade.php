@extends('layout')
@section('content')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/shopping')}}">Sản phẩm</a></li>
				  <li class="active">Thanh toán giỏ hàng</li>
				</ol>
			</div>

			<div class="register-req" style="background-color:rgb(50, 245, 229);">
				<p><b><i>Vui lòng chọn sản phẩm để tiến hành đặt hàng</i></b></p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p><i>Vui lòng nhập thông tin</i></p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout-customer')}}" method="POST">
									{{csrf_field()}}
									<input type="text" name="shipping_email" placeholder="Email">
									<input type="text" name="shipping_name" placeholder="Họ và tên">
									<input type="text" name="shipping_address" placeholder="Địa chỉ">
									<input type="text" name="shipping_phone" placeholder="Phone">
									<textarea name="shipping_notes"  placeholder="Xin vui lòng lựa chọn size (M L) - (% đường ; %đá)" rows="16"></textarea>
									<input type="submit" value="Đặt hàng" name="send_order" class="btn btn-primary btn-sm">
								</form>
							</div>
							
						</div>
					</div>
									
				</div>
			</div>
			<div class="review-payment">
				<h2><a href="{{URL::to('/show-cart')}}" >Xem lại giỏ hàng</a></h2>
			</div>

			
			&nbsp;&nbsp;
			&nbsp;&nbsp;
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

@endsection