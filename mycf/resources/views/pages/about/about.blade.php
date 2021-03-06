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
                    
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

    

    <section class="ftco-section ftco-no-pb">
        <div class="about-us-area pt-100 pb-100">
  
            <div class="container">
              <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-12">
                  <div class="about-content text-center">
                    <h3 data-aos="fade-up" data-aos-delay="200">
                      GI???I THI???U V??? HIGHLANDS COFFEE??
                    </h3>
                    <p><b><i>L???CH S??? TH??NH L???P</b></i></br></p>
                    <p class="mt-3">
                        Highlands Coffee l?? m???t c??i t??n v?? c??ng quen thu???c ?????i v???i nh???ng ng?????i ??am m?? v???i c?? ph?? ho???c th???c ??n nhanh t???i Vi???t Nam, ?????c bi???t l?? gi???i tr??? ho???c nh???ng ai ???? ??i l??m. 
                        Highlands Coffee ???????c th??nh l???p v??o n??m 1999 b???i m???t doanh nh??n Vi???t Ki???u t??n l?? David Th??i c?? l??ng y??u qu?? h????ng m??nh li???t, s???n s??ng r???i kh???i gia ????nh ??? M??? ????? v??? Vi???t Nam l???p nghi???p.
                        T???p ??o??n Vi???t Th??i ???????c th??nh l???p b???i David Th??i v?? c??ng l?? ????n v??? s??? h???u c???a Highlands Coffee. ?????n n??m 2008, t???p ??o??n Vi???t Th??i c???a David Th??i ???? ph???c v??? h??n 4 tri???u ly c?? ph?? c??ng v???i 2 tri???u b???a ??n cho 5 tri???u kh??ch h??ng. 
                        ????y l?? m???t con s??? v?? c??ng ????ng n??? ?????i v???i nh???ng th????ng hi???u c?? ph?? v?? th???c ??n nhanh ???????c th??nh l???p ??? Vi???t Nam.
                    </p>

                    <p><b><i>Th????ng hi???u b???t ngu???n t??? c?? ph?? Vi???t Nam</b></i></br></p>
                    <p class="mt-3">
                        
                       
                    
                       Highlands Coffee?? ???????c sinh ra t??? ni???m ??am m?? b???t t???n v???i h???t c?? ph?? Vi???t Nam. Qua m???t ch???ng ???????ng d??i, ch??ng t??i ???? kh??ng ng???ng mang ?????n nh???ng s???n ph???m c?? ph?? th??m ngon, 
                       s??nh ???????m trong kh??ng gian tho???i m??i v?? l???ch s??? v???i m???c gi?? h???p l??. 
                       Nh???ng ly c?? ph?? c???a ch??ng t??i kh??ng ch??? ????n thu???n l?? th???c u???ng quen thu???c m?? c??n mang tr??n m??nh 
                       m???t s??? m???nh v??n h??a ph???n ??nh m???t ph???n n???p s???ng hi???n ?????i c???a ng?????i Vi???t Nam.

                      
                    </p>
                    <img
                      src="public/frontend/images/a2.jpg"
                      alt=""
                    />
                    <p></p>

                   

                    <p class="mt-3">
                        T??? t??nh y??u v???i Vi???t Nam v?? ni???m ??am m?? c?? ph??, n??m 1999, 
                        th????ng hi???u Highlands Coffee?? ra ?????i v???i kh??t v???ng n??ng t???m di s???n c?? ph?? l??u ?????i c???a Vi???t Nam 
                        v?? lan r???ng tinh th???n t??? h??o, k???t n???i h??i ho?? gi???a truy???n th???ng v???i hi???n ?????i.
                        B???t ?????u v???i s???n ph???m c?? ph?? ????ng g??i t???i H?? N???i v??o n??m 2000, 
                        ch??ng t??i ???? nhanh ch??ng ph??t tri???n v?? m??? r???ng th??nh th????ng hi???u qu??n c?? ph?? n???i ti???ng 
                        v?? kh??ng ng???ng m??? r???ng ho???t ?????ng trong v?? ngo??i n?????c t??? n??m 2002. </br>

                        
                    </p>
                    <img
                      src="public/frontend/images/a3.jpg"
                      alt=""
                    />

                    <p></p>

                    <p class="mt-3">
                        ?????n nay, Highlands Coffee?? v???n duy tr?? kh??u ph??n lo???i c?? ph?? b???ng tay ????? ch???n ra t???ng h???t c?? ph?? ch???t l?????ng nh???t, rang m???i m???i ng??y v?? ph???c v??? qu?? kh??ch v???i n??? c?????i r???ng r??? tr??n m??i. 
                        B?? quy???t th??nh c??ng c???a ch??ng t??i l?? ????y: <i>"kh??ng gian qu??n tuy???t v???i, s???n ph???m tuy???t h???o v?? d???ch v??? chu ????o v???i m???c gi?? ph?? h???p".</i>
                    </p>
                    
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