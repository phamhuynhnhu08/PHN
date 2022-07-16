@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           <b>Thêm Nhân Viên</b>
                         
                        </header>
                         <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                          <div class="container">
                        <div class="panel-body">

                           
                          <form action="{{URL::to('/post-user')}}" method="post">
                            {{ csrf_field() }}
                            @foreach($errors->all() as $val)
                            <ul>
                              <li>{{$val}}</li>
                            </ul>
                            @endforeach
                            <label>Name</label>
                            <input type="text"  class="form-control" name="admin_name"  placeholder="Name" >
                            <label>Email</label>
                            <input type="text"  class="form-control" name="admin_email" placeholder="Email" >
                            <label>Password</label>
                            <input type="password" class="form-control" name="admin_password" placeholder="Password" >
                            <label>Phone</label>
                            <input type="text" class="form-control" name="admin_phone" placeholder="Phone" >

                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" name="admin_address" placeholder="Address" >


                           
                           
                              <input type="submit" class="btn btn-danger" value="Đăng ký" name="login">

                            {{-- <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                            <br/>
                            @if($errors->has('g-recaptcha-response'))
                            <span class="invalid-feedback" style="display:block">
                              <strong>{{$errors->first('g-recaptcha-response')}}</strong>
                            </span>
                            @endif --}}

                          </form>
                        </div>
                      </div>
                    </section>

            </div>
@endsection