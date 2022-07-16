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
    <link rel="shortcut icon" href="{{asset('public/logo/logo1.jpg')}}">
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
                                  <li><a href="{{URL::to('/personal-in4')}}"><i class="fa fa-lock"></i>Thông tin cá nhân</a></li> 
                                  <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Chào bạn</a></li>
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
                        <a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/frontend/images/food.jpg')}}" class="girl img-responsive" alt="logo" /></a>
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
                    <div class="col-sm-5">
                        <form action="{{URL::to('/tim-kiem')}}" method="POST">
                            {{csrf_field()}}
                        <div class="search_box pull-right">
                            <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                            
                            <input type="submit" style="margin-top:0;color:rgb(20, 2, 2)" name="search_items" class="btn btn-primary" value="Search">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner ">
                            <div class="item active">
                                <div class="col-sm-4">
                                    <h1 class="mb-4">Good <span>Drink</span> for Good <span>Moments</span>.</h1>
                                    <h2>DỊCH VỤ KHÁCH HÀNG</h2>
                                    <p>Chúng tôi mong muốn mang đến cho bạn những trải nghiệm đáng nhớ mỗi lần đến Highlands Coffee®. Hãy chia sẻ với chúng tôi để chúng tôi có thể mang đến cho bạn những trải nghiệm tuyệt vời hơn thế.</p>
                                    <button type="button" class="btn-danger btn-lg"><a href="{{URL::to('/about')}}">ĐỌC THÊM</a></button>
                                </div>
                                <div class="col-sm-8">
                                    <img src="{{asset('public/frontend/images/9.jpg')}}" class="girl img-responsive" alt="" />
                                    
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-4">
                                    <h1 class="mb-4"> <span>"THÍCH THÌ</span> <span>PHINDI..!!"</span>.</h1>
                                    <h2>LÀM GÌ THÌ LÀM, CÀ PHÊ CÁI ĐÃ CÙNG HIGHLANDS COFFEE!</h2>
                                    <p>Họp “hành” lúc 7h sáng? Deadlines bám đuổi sát nút? Việc nhà chất thành đống? “Tám” chuyện “cột sống” hết ngày hết giờ với lũ bạn thân? Biết bao nhiêu là thứ xảy ra hằng ngày bạn phải để tâm đến. Nhưng mà…

                                        LÀM GÌ THÌ LÀM, CÀ PHÊ CÁI ĐÃ! </p>
                                    <button type="button" class="btn-danger btn-lg"><a href="{{URL::to('/shopping')}}">KHÁM PHÁ THÊM</a></button>
                                </div>
                                <div class="col-sm-8">
                                    <img src="{{asset('public/frontend/images/1.png')}}" class="girl img-responsive" alt="" />
                                   
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-4">
                                    <h1 class="mb-4"><span>COMBO THÁNG 8</span> ĐẬM CHUYỆN CÙNG <span>NGƯỜI THƯƠNG</span>.</h1>
                                    
                                   <p> ☑Ưu đãi: Khi mua nhiều sản phẩm, khách hàng nhận ưu đãi trực tiếp trên tổng giá combo, chi tiết theo từng combo khách hàng nhận được trên hình ảnh tại quầy order hoặc vui lòng liên hệ nhân viên để có thông tin chi tiết</p>
                                    <button type="button" class="btn-danger btn-lg"><a href="{{URL::to('/shopping')}}">ORDER NOW</a></button>
                                </div>
                                <div class="col-sm-8">
                                    <img src="{{asset('public/frontend/images/2.jpg')}}" class="girl img-responsive" alt="" />
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                          @foreach($category as $key => $cate)
                           
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>
                        @endforeach
                        </div><!--/category-products-->
                    
                        
                     
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">

                   @yield('content')
                    
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
	                            <li><a href="https://www.instagram.com/phmhuynhu84"><span class="icon fa fa-instagram"></span><span class="text"> <b>phmhuynhu84</b></a></span></li>
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