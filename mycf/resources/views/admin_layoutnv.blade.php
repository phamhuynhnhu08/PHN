<!DOCTYPE html>
<head>
<title>{{Auth::user()->name}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css"/>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<!-- calendar -->
<link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
<!-- //calendar -->
<!-- //font-awesome icons -->

</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{URL::to('/dashboard')}}" class="logo">
        {{Auth::user()->name}}
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
            <!-- settings start -->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-spinner fa-spin fa fa-fw"></i>
                    <span class="badge bg-success">8</span>
                </a>
                <ul class="dropdown-menu extended tasks-bar">
                    <li>
                        <p class="">You have 8 pending tasks</p>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Target Sell</h5>
                                    <p>25% , Deadline  12 June’13</p>
                                </div>
                                        <span class="notification-pie-chart pull-right" data-percent="45">
                                <span class="percent"></span>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Product Delivery</h5>
                                    <p>45% , Deadline  12 June’13</p>
                                </div>
                                        <span class="notification-pie-chart pull-right" data-percent="78">
                                <span class="percent"></span>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Payment collection</h5>
                                    <p>87% , Deadline  12 June’13</p>
                                </div>
                                        <span class="notification-pie-chart pull-right" data-percent="60">
                                <span class="percent"></span>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Target Sell</h5>
                                    <p>33% , Deadline  12 June’13</p>
                                </div>
                                        <span class="notification-pie-chart pull-right" data-percent="90">
                                <span class="percent"></span>
                                </span>
                            </div>
                        </a>
                    </li>
    
                    <li class="external">
                        <a href="#">See All Tasks</a>
                    </li>
                </ul>
            </li>
            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id="header_inbox_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-important">4</span>
                </a>
                <ul class="dropdown-menu extended inbox">
                    <li>
                        <p class="red">You have 4 Mails</p>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="public/backend/images/3.png"></span>
                                    <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="public/backend/images/1.png"></span>
                                    <span class="subject">
                                    <span class="from">Jane Doe</span>
                                    <span class="time">2 min ago</span>
                                    </span>
                                    <span class="message">
                                        Nice admin template
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="public/backend/images/3.png"></span>
                                    <span class="subject">
                                    <span class="from">Tasi sam</span>
                                    <span class="time">2 days ago</span>
                                    </span>
                                    <span class="message">
                                        This is an example msg.
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="public/backend/images/2.png"></span>
                                    <span class="subject">
                                    <span class="from">Mr. Perfect</span>
                                    <span class="time">2 hour ago</span>
                                    </span>
                                    <span class="message">
                                        Hi there, its a test
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">See all messages</a>
                    </li>
                </ul>
            </li>
            <!-- inbox dropdown end -->
            <!-- notification dropdown start-->
            <li id="header_notification_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
    
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-warning">3</span>
                </a>
                <ul class="dropdown-menu extended notification">
                    <li>
                        <p>Notifications</p>
                    </li>
                    <li>
                        <div class="alert alert-info clearfix">
                            <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                            <div class="noti-info">
                                <a href="#"> Server #1 overloaded.</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="alert alert-danger clearfix">
                            <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                            <div class="noti-info">
                                <a href="#"> Server #2 overloaded.</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="alert alert-success clearfix">
                            <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                            <div class="noti-info">
                                <a href="#"> Server #3 overloaded.</a>
                            </div>
                        </div>
                    </li>
    
                </ul>
            </li>
            <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
    </div>
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{('public/backend/images/sana.png')}}">
                <span class="username">
                    {{Auth::user()->name}}
                	{{-- <?php
					$name = Session::get('admin_name');
					if($name){
						echo $name;
						
					}
					?> --}}

                </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-user"></i>Profile</a></li>
                
                <li><a href="{{URL::to('/logout')}}"><i class="fa fa-sign-out"></i>Logout</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <!-- <li>
                    <a class="active" href="{{URL::to('/dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-shopping-bag"></i>
                        <span>Sản phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/add-product')}}">Thêm sản phẩm</a></li>
						<li><a href="{{URL::to('/all-product')}}">Danh sách sản phẩm</a></li>
                      
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-bars"></i>
                        <span>Danh mục</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/add-category-product')}}">Thêm danh mục </a></li>
						<li><a href="{{URL::to('/all-category-product')}}">Liệt kê danh mục</a></li>
                      
                    </ul>
                </li> -->
                 

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-shopping-basket"></i>
                        <span>Đơn hàng</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/manage-order')}}">Quản lý đơn hàng</a></li>
                    </ul>
                </li>

                
             
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
        
        @yield('admin_content')
    </section>
 <!-- footer -->
		  <div class="footer" >
			<div class="wthree-copyright">
                <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | ĐƯỢC THIẾT KẾ <i class="fa fa-heart color-danger" aria-hidden="true"></i> BỞI <a href="#" target="_blank">HIGHLANDS - COFFEE</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
<script src="{{asset('public/backend/js/morris.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){

            chart60daysorder();

            var chart = new Morris.Bar({
                 
                  element: 'myfirstchart',
                  //option chart
                  lineColors: ['#819C79', '#fc8710','#FF6541', '#A4ADD3', '#766B56'],
                    parseTime: false,
                    hideHover: 'auto',
                    xkey: 'period',
                    ykeys: ['order','sales','profit','quantity'],
                    labels: ['đơn hàng','doanh số','lợi nhuận','số lượng']
                
                });


           
            function chart60daysorder(){
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{url('/days-order')}}",
                    method:"POST",
                    dataType:"JSON",
                    data:{_token:_token},
                    
                    success:function(data)
                        {
                            chart.setData(data);
                        }   
                });
            }

        $('.dashboard-filter').change(function(){
            var dashboard_value = $(this).val();
            var _token = $('input[name="_token"]').val();
            // alert(dashboard_value);
            $.ajax({
                url:"{{url('/dashboard-filter')}}",
                method:"POST",
                dataType:"JSON",
                data:{dashboard_value:dashboard_value,_token:_token},
                
                success:function(data)
                    {
                        chart.setData(data);
                    }   
                });

        });

        

    });
        
</script>
{{-- <script type="text/javascript">
    new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
 
  // the chart.
  data: [
    { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
 
  // chart.
  labels: ['Value']
});
</script> --}}
<!-- morris JavaScript -->	


<script>
	
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="{{asset('public/backend/js/monthly.js')}}"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
    <script type="text/javascript">
    
    $('.order_details_change').change(function(){
        var order_status = $(this).val();
        var order_id = $(this).children(":selected").attr("id");
        var _token = $('input[name="_token"]').val();
        if(order_status=='chuaxuly'){
            alert('Làm ơn chọn để xử lý');
        }else{


        //lay ra so luong
        quantity = [];
        $("input[name='product_sales_quantity']").each(function(){
            quantity.push($(this).val());
        });
        //lay ra product id
        order_product_id = [];
        $("input[name='order_product_id']").each(function(){
            order_product_id.push($(this).val());
        });
        
        

          
                $.ajax({
                        url : '{{url('/update-order-qty')}}',
                            method: 'POST',
                            data:{_token:_token, order_status:order_status ,order_id:order_id ,quantity:quantity, order_product_id:order_product_id},
                            success:function(data){
                                alert('Thay đổi tình trạng đơn hàng thành công');
                                location.reload();
                            }
                });
            
        }

    });
   

    
</script>
	<!-- //calendar -->
</body>
</html>
