@extends('layout')
@section('content')

<section  id="form"  ><!--form-->
    <div class="container">
        <div class="row">	
        

            <div class="col-sm-6">
                <div class="signup-form"><!--sign up form-->
                    <h1><b>Thông Tin Cá Nhân</b></h1>
                    &nbsp;&nbsp;
                    
                    
                    
                    &nbsp;&nbsp;
                    <form action="{{URL::to('/update-in4')}}" method="POST">
                        {{csrf_field()}}

                        <div class="w-100"></div>
                        <div class="col-md-12">
                        <div class="form-group">
                            <label for="emailaddress">ID </label>
                          <input type="email" class="form-control" placeholder="" required="required">
                        </div>
                    </div>
              <div class="w-100"></div>
                <div class="col-md-12">
                <div class="form-group">
                    <label for="emailaddress">Email </label>
                  <input type="email" class="form-control" placeholder="" required="required">
                </div>
            </div>
            <div class="w-100"></div>
                <div class="col-md-12">
                <div class="form-group">
                    <label for="emailaddress">Tên người dùng </label>
                  <input type="text" class="form-control" placeholder="" required="required">
                </div>
            </div>

                
                <div class="w-100"></div>
                <div class="col-md-12">
                <div class="form-group">
                    <label for="phone">Số Điện Thoại </label>
                  <input type="text" class="form-control" placeholder="" required="required">
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