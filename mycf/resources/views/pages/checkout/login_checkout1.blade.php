@extends('layout')
@section('content')

	<section  id="form"  ><!--form-->
		<div class="container">
			<div class="row">	
			

				<div class="col-sm-6">
					<div class="signup-form"><!--sign up form-->
						<h1><b>Đăng Ký</b></h1>
						&nbsp;&nbsp;
						
						
						<h4 class="mb-4 billing-heading"><i>Vui Lòng Nhập Thông Tin</i></h4>
						&nbsp;&nbsp;

						<form name="f1" action="{{URL::to('/add-customer')}}" method="POST" onsubmit="return matchpass()" class="form-group">
							{{ csrf_field() }}
	          	<div class="w-100"></div>
                    <div class="col-md-12">
	                <div class="form-group">
	                	<label for="emailaddress">Email</label>
	                  <input type="email" name="customer_email" class="form-control" placeholder="" required="required">
	                </div>
                </div>
				<div class="w-100"></div>
                    <div class="col-md-12">
	                <div class="form-group">
	                	<label for="emailaddress">Tên người dùng</label>
	                  <input type="text" name="customer_name" class="form-control" placeholder="" required="required">
	                </div>
                </div>

                <div class="col-md-12">
	                <div class="form-group">
	                	<label for="lastname">Mật Khẩu</label>
                        <input type="password" id="txt_password" name="customer_password" class="form-control" placeholder="Password" required data-error="Vui lòng nhập mật khẩu của bạn">
	                </div>
                </div>
                <div class="w-100"></div>
				<div class="col-md-12">
	                <div class="form-group">
	                	<label for="lastname">Nhập lại mật Khẩu</label>
                        <input type="password" id="txt_Repassword" name="customer_password" class="form-control" placeholder="Re-Password" required data-error="Vui lòng nhập mật khẩu của bạn">
	                </div>
                </div>
		            
		            <div class="w-100"></div>
		            <div class="col-md-12">
	                <div class="form-group">
	                	<label for="phone">Số Điện Thoại</label>
	                  <input type="text" name="customer_phone" class="form-control" placeholder="" required="required">
	                </div>
	               	
	              </div>

            </div>
          </div>
		  
	         
                <div class="w-100"></div>
                <div class="col-md-12">
                    <div class="form-group">
						<div class="col-md-12">
							<div class="checkbox">
									<label><input type="checkbox" value="1" name="chk_dk" id="chk_dk" required class="mr-2"><b> Tôi đã đọc và chấp nhận điều khoản & điều kiện</b></label>
							</div>
						</div>
					</div>
	            </div>

                <div class="w-100"></div>
                <div class="col-md-12">
					<div class="form-group">
					  <button type="submit" name="btn_dangky" value="dangky" class="btn btn-danger"> Đăng Ký </button>
					
					    <div class="submitting"></div>
					</div>
	            </div>
				</form>

				<div class="w-100"></div>
                <div class="col-sm-12 col-md">
            		<div class="ftco-footer-widget mb-4">
              <p>Đã có tài khoản nhấn: <a href="{{URL::to('/login-checkout')}}"> Đăng Nhập </a></p>
	          		</div>
          		</div> <!-- .col-md-8 -->
						
			</div><!--/sign up form-->
				</div>	
			</div>
		</div>	
		
	</section><!--/form-->

@endsection


