@extends('layout')
@section('content')

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">

				<div class="col-sm-8 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h3><b>Đăng Nhập</b></h3>
						<form  action="{{URL::to('/login-customer')}}" method="POST" class="form-group">
							{{csrf_field()}}
							&nbsp;&nbsp;
							&nbsp;&nbsp;

	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                	<div class="form-group">
						<input type="text" name="email_account" placeholder="Email" />
	                	</div>
	              	</div>
                	<div class="col-md-12">
	                	<div class="form-group">
                        <input type="password" name="password_account" placeholder="Password" />
	                	</div>
                	</div>
	            </div>

				<span>
					<input type="checkbox" class="checkbox"> 
					Ghi nhớ đăng nhập
				</span>

                <div class="w-100"></div>
                <div class="col-md-12">
                    <div class="form-group">
					<button type="submit" name ="btndangnhap" class="btn btn-danger">Đăng nhập</button>
					    <div class="submitting"></div>
					</div>
	            </div>
              <p><a href="#"> Quên mật khẩu </a></p>
             
	          </form><!-- END -->
					</div><!--/login form-->
				</div>

				

				
			</div>
		</div>
	</section><!--/form-->

@endsection