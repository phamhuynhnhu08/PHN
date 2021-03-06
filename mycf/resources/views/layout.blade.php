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
                                  <li><a href="{{URL::to('/show_checkout')}}"><i class="fa fa-crosshairs" ></i> Thanh to??n</a></li>
                                
                                <?php
                                 }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                 ?>

                                 <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
                                 <?php 
                                }else{
                                ?>
                                 <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
                                <?php
                                 }
                                ?>
                                

                                <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   if($customer_id!=NULL){ 
                                 ?>
                                 
                                  <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> ????ng xu???t</a></li>
                                  <li><a href="{{URL::to('/personal-in4')}}"><i class="fa fa-lock"></i>Th??ng tin c?? nh??n</a></li> 
                                  <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Ch??o b???n</a></li>
                                <?php
                            }else{
                                 ?>
                                 <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-user"></i> ????ng nh???p</a></li>
                                 <li><a href="{{URL::to('/login-checkout1')}}"><i class="fa fa-lock"></i>????ng k??</a></li> 
                                 
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
                                <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang ch???</a></li>
                                <li class="dropdown"><a href="#">Th???c ????n<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{URL::to('/shopping')}}">S???n ph???m</a></li>
                                       
                                    </ul>
                                </li> 

                                <li class="dropdown"><a href="{{URL::to('/about')}}">V??? ch??ng t??i</a>
                               
                                </li> 

                                <li><a href="{{URL::to('/show-cart')}}">Gi??? h??ng</a></li>
                                <li><a href="{{URL::to('/contact')}}">Li??n h???</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <form action="{{URL::to('/tim-kiem')}}" method="POST">
                            {{csrf_field()}}
                        <div class="search_box pull-right">
                            <input type="text" name="keywords_submit" placeholder="T??m ki???m s???n ph???m"/>
                            
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
                                    <h2>D???CH V??? KH??CH H??NG</h2>
                                    <p>Ch??ng t??i mong mu???n mang ?????n cho b???n nh???ng tr???i nghi???m ????ng nh??? m???i l???n ?????n Highlands Coffee??. H??y chia s??? v???i ch??ng t??i ????? ch??ng t??i c?? th??? mang ?????n cho b???n nh???ng tr???i nghi???m tuy???t v???i h??n th???.</p>
                                    <button type="button" class="btn-danger btn-lg"><a href="{{URL::to('/about')}}">?????C TH??M</a></button>
                                </div>
                                <div class="col-sm-8">
                                    <img src="{{asset('public/frontend/images/9.jpg')}}" class="girl img-responsive" alt="" />
                                    
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-4">
                                    <h1 class="mb-4"> <span>"TH??CH TH??</span> <span>PHINDI..!!"</span>.</h1>
                                    <h2>L??M G?? TH?? L??M, C?? PH?? C??I ???? C??NG HIGHLANDS COFFEE!</h2>
                                    <p>H???p ???h??nh??? l??c 7h s??ng? Deadlines b??m ??u???i s??t n??t? Vi???c nh?? ch???t th??nh ?????ng? ???T??m??? chuy???n ???c???t s???ng??? h???t ng??y h???t gi??? v???i l?? b???n th??n? Bi???t bao nhi??u l?? th??? x???y ra h???ng ng??y b???n ph???i ????? t??m ?????n. Nh??ng m?????

                                        L??M G?? TH?? L??M, C?? PH?? C??I ????! </p>
                                    <button type="button" class="btn-danger btn-lg"><a href="{{URL::to('/shopping')}}">KH??M PH?? TH??M</a></button>
                                </div>
                                <div class="col-sm-8">
                                    <img src="{{asset('public/frontend/images/1.png')}}" class="girl img-responsive" alt="" />
                                   
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-4">
                                    <h1 class="mb-4"><span>COMBO TH??NG 8</span> ?????M CHUY???N C??NG <span>NG?????I TH????NG</span>.</h1>
                                    
                                   <p> ?????u ????i: Khi mua nhi???u s???n ph???m, kh??ch h??ng nh???n ??u ????i tr???c ti???p tr??n t???ng gi?? combo, chi ti???t theo t???ng combo kh??ch h??ng nh???n ???????c tr??n h??nh ???nh t???i qu???y order ho???c vui l??ng li??n h??? nh??n vi??n ????? c?? th??ng tin chi ti???t</p>
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
                        <h2>Danh m???c s???n ph???m</h2>
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
                            <p>D??nh nh???ng th??? t???t nh???t cho kh??ch h??ng. </p>
                            
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2><b>T??I KHO???N C???A T??I</b></h2>
                            <ul class="nav nav-pills nav-stacked">   
                                <li><a href="{{URL::to('/login-checkout1')}}"><span class="fa fa-chevron-right mr-2"></span> ????ng K??</a></li>
                                <li><a href="{{URL::to('/login-checkout')}}"><span class="fa fa-chevron-right mr-2"></span> ????ng Nh???p</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Qu??n M???t Kh???u</a></li>
                           
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2><b>TH??NG TIN</b></h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{URL::to('/about')}}"><span class="fa fa-chevron-right mr-2"></span> V??? Ch??ng T??i</a></li>
                                <li><a href="{{URL::to('/shopping')}}"><span class="fa fa-chevron-right mr-2"></span> S???n Ph???m</a></li>
                                <li><a href="{{URL::to('/contact')}}"><span class="fa fa-chevron-right mr-2"></span> Li??n H??? Ch??ng T??i</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> ??i???u Kho???n &amp; D???ch v???</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2><b>LI??N K???T NHANH</b></h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{URL::to('/login-checkout1')}}"><span class="fa fa-chevron-right mr-2"></span> Ng?????i D??ng M???i</a></li>
                                <li><a href="{{URL::to('/contact')}}"><span class="fa fa-chevron-right mr-2"></span> Trung T??m Tr??? Gi??p</a></li>
                                <li><a href="{{URL::to('/contact')}}"><span class="fa fa-chevron-right mr-2"></span> B??o C??o</a></li>
                                <li><a href="{{URL::to('/show-cart')}}"><span class="fa fa-chevron-right mr-2"></span> Gi??? H??ng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2><b>LI??N H???</b></h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><span class="icon fa fa-home"></span><span class="text"> 180 CAO L???, PH?????NG 4, QU???N 8 - TPHCM</span></li>
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
                    <p class="pull-left">?? 2018 Highlands Coffee. All rights reserved</p>
                    <p class="pull-right"><a href="https://www.facebook.com/huynhnhu.pham.142"><i class="fa fa-facebook"></i><span>: Ph???m Hu???nh Nh??</a></span></p>
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