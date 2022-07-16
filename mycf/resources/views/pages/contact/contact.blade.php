<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MY COFFEE...!!</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{('public/logo/logo1.jpg')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="https://accounts.google.com/signin/v2/identifier?hl=vi&continue=http%3A%2F%2Fsupport.google.com%2Fmail%2F&ec=GAlAdQ&flowName=GlifWebSignIn&flowEntry=AddSession">
                                    <i class="fa fa-envelope"></i> phamhuynhnhu8420@gmail.com</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i> +84 814 593 597</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row" >
                    
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                               
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id==NULL){ 
                                 ?>
                                  <li><a href="{{URL::to('/show_checkout')}}"><i class="fa fa-crosshairs" ></i> Thanh toán</a></li>
                                
                                <?php
                                 }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                 ?>
                                 <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                 <?php 
                                }else{
                                ?>
                                 <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                <?php
                                 }
                                ?>
                                

                                <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   if($customer_id!=NULL){ 
                                 ?>
                                  <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
                                
                                <?php
                            }else{
                                 ?>
                                 <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-user"></i> Đăng nhập</a></li>
                                 <li><a href="{{URL::to('/login-checkout1')}}"><i class="fa fa-lock"></i>Đăng ký</a></li>
                                 <?php 
                             }
                                 ?>
                               
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-8 col-8">
                        <div class="logo">
                        <a href="{{URL::to('/trang-chu')}}"><img src="{{('public/frontend/images/food.jpg')}}" class="girl img-responsive" alt="logo" /></a>
                    </div> 
                    </div>

                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Thực đơn<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{URL::to('/shopping')}}">Sản phẩm</a></li>
                                       
                                    </ul>
                                </li> 

                                <li class="dropdown"><a href="{{URL::to('/about')}}">Về chúng tôi</a>
                               
                                </li> 

                                <li><a href="{{URL::to('/show-cart')}}">Giỏ hàng</a></li>

                                <li><a href="{{URL::to('/contact')}}">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

    

    <section >
        <div id="contact-page" class="container">
            <div class="bg">
                <div class="row">    		
                    <div class="col-sm-12">    			   			
                        <h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
                        <div class="row mb-5">
                            
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                            <div class="align-content-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="text">
                            <p><span>Số điện thoại:</span> <a href="tel://0399161596">+84 814 593 597</a></p>
                          </div>
                      </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                            <div class="align-content-center">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="text">
                            <p><span >Email:</span> <a href="https://accounts.google.com/signin/v2/identifier?hl=vi&continue=http%3A%2F%2Fsupport.google.com%2Fmail%2F&ec=GAlAdQ&flowName=GlifWebSignIn&flowEntry=AddSession">phamhuynhnhu8420@gmail.com</a></p>
                          </div>
                      </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                            <div class="align-content-center">
                                <span class="fa fa-globe"></span>
                            </div>
                            <div class="text">
                            <p><span>Website</span> <a href="#">highlandcoffee.com</a></p>
                          </div>
                      </div>
                            </div>

                            
                        </div>
                    </div>			 		
                </div>    	
                <div class="row">  	
                    <div class="col-sm-8">
                        <div class="contact-form">
                            
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                </div>                        
                                <div class="form-group col-md-12">
                                    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gửi cho chúng tôi">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="contact-info">
                            <h2 class="title text-center">HIGHLANDS COFFEE®</h2>
                            <address>
                                
                                <p>47 Cao Lỗ, Phường 4, Quận 8 - </p>
                                <p>Thành phố Hồ Chí Minh</p>
                                <p>Fax: 1-714-252-0026</p>
                            </address>
                            <div class="social-networks">
                                <h2 class="title text-center">Social Networking</h2>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/huynhnhu.pham.142"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>    			
                </div>  
            </div>	
        </div>
    </section>

    

  

<footer id="footer"><!--Footer-->
     
        
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2 ><a href="{{URL::to('/trang-chu')}}">HIGHLANDS<span> - COFFEE</span></a></h2>
                        <p>Dành những thứ tốt nhất cho khách hàng. </p>
                        
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2><b>TÀI KHOẢN CỦA TÔI</b></h2>
                        <ul class="nav nav-pills nav-stacked">   
                            <li><a href="{{URL::to('/login-checkout1')}}"><span class="fa fa-chevron-right mr-2"></span> Đăng Ký</a></li>
                            <li><a href="{{URL::to('/login-checkout')}}"><span class="fa fa-chevron-right mr-2"></span> Đăng Nhập</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Quên Mật Khẩu</a></li>
                       
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2><b>THÔNG TIN</b></h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="{{URL::to('/about')}}"><span class="fa fa-chevron-right mr-2"></span> Về Chúng Tôi</a></li>
                            <li><a href="{{URL::to('/shopping')}}"><span class="fa fa-chevron-right mr-2"></span> Sản Phẩm</a></li>
                            <li><a href="{{URL::to('/contact')}}"><span class="fa fa-chevron-right mr-2"></span> Liên Hệ Chúng Tôi</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Điều Khoản &amp; Dịch vụ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2><b>LIÊN KẾT NHANH</b></h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="{{URL::to('/login-checkout1')}}"><span class="fa fa-chevron-right mr-2"></span> Người Dùng Mới</a></li>
                            <li><a href="{{URL::to('/contact')}}"><span class="fa fa-chevron-right mr-2"></span> Trung Tâm Trợ Giúp</a></li>
                            <li><a href="{{URL::to('/contact')}}"><span class="fa fa-chevron-right mr-2"></span> Báo Cáo</a></li>
                            <li><a href="{{URL::to('/show-cart')}}"><span class="fa fa-chevron-right mr-2"></span> Giỏ Hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2><b>LIÊN HỆ</b></h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><span class="icon fa fa-home"></span><span class="text"> 180 CAO LỖ, PHƯỜNG 4, QUẬN 8 - TPHCM</span></li>
                            <li><span class="icon fa fa-phone"></span><span class="text"> + 84 814 593 597</span></li>
                            <li><a href="https://www.instagram.com/phmhuynhu84"><span class="icon fa fa-instagram"></span><span class="text"><b> phmhuynhu84</b></a></span></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">© 2018 Highlands Coffee. All rights reserved</p>
                <p class="pull-right"><a href="https://www.facebook.com/huynhnhu.pham.142"><i class="fa fa-facebook"></i><span>: Phạm Huỳnh Như</a></span></p>
            </div>
        </div>
    </div>
    
</footer><!--/Footer-->

<script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>