<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>Home</title>
	<meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/home/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/home/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/home/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/home/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/home/ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="/home/css/bootstrap/css/bootstrap.min.css">
	<link href="/home/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="/home/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/home/js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="/home/css/themecss/lib.css" rel="stylesheet">
	<link href="/home/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="/home/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="/home/css/themecss/so-categories.css" rel="stylesheet">
	<link href="/home/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="/home/css/responsive.css" rel="stylesheet">
	<script type="text/javascript" src="/home/js/jquery-2.2.4.min.js"></script>
	<link href="/home/css/responsive.css" rel="stylesheet">
	<link id="color_scheme" href="/home/css/theme.css" rel="stylesheet">
    <link href="/home/css/style.css" rel="stylesheet">
    <link href="/home/css/self.css" rel="stylesheet">
    <link href="/home/css/shortcodes.css" rel="stylesheet">
	

</head>

<body class="common-home res layout-home1">

     


    <div id="wrapper" class="wrapper-full banners-effect-7">
	<!-- Header Container  -->
	<header id="header" class=" variantleft type_1">
<!-- Header Top -->
<div class="header-top compact-hidden">
	<div class="container">
		<div class="row">
			<div class="header-top-left form-inline col-sm-6 col-xs-12 compact-hidden">
				<div class="form-group languages-block ">
					<form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
						<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
							<span class="fa fa-map-marker"></span>
							<span class="">地区</span>
							<span class="fa fa-angle-down"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="index.html"><img class="image_flag" src="/home/image/demo/flags/gb.png" alt="English" title="English" /> 北京 </a></li>
							<li> <a href="index.html"> <img class="image_flag" src="/home/image/demo/flags/lb.png" alt="Arabic" title="Arabic" /> 河南 </a> </li>
						</ul>
					</form>
				</div>
				@if(session('userFlag'))
				<div class="form-group currencies-block">
					<form>
						<a href="/home/users" class="btn btn-xs">
							<span class="icon icon-credit "></span> <span>{{ session('user')->nickname or session('user')->name }}</span>
						</a>
					</form>
				</div>
				<div class="form-group currencies-block">
					<form>
						<a href="/logout" class="btn btn-xs">
							<span class="icon icon-credit "></span><span>退出</span>
						</a>
					</form>
				</div>
				@else
				<div class="form-group currencies-block">
					<form>
						<a href="/login" class="btn btn-xs">
							<span class="icon icon-credit "></span>请登录
						</a>
					</form>
				</div>
				<div class="form-group currencies-block">
					<form>
						<a href="/register" class="btn btn-xs">
							<span class="icon icon-credit "></span>去注册
						</a>
					</form>
				</div>
				@endif
			</div>
			<div class="header-top-right form-inline text-right collapsed-block col-sm-6 col-xs-12 compact-hidden">
				<div class="form-group currencies-block">
					<form>
						<a href="/home/orders" class="btn btn-xs">
							<span class=""></span> 我的订单 
						</a>
						
					</form>
				</div>
				<div class="form-group currencies-block">
					<form>
						<a href="/home/users" class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
							<span class="icon icon-credit "></span> 我的商城 <span class="fa fa-angle-down"></span>
						</a>
						<ul class="dropdown-menu btn-xs">
							<li> <a href="/home/orders"><span class="fa fa-check-square"></span>待处理订单</a></li>
							<li> <a href="/home/returns"><span class="fa fa-facebook"></span>返修退换货</a></li>
							<li> <a href="/home/usersgoods"><span class="fa fa-heart"></span>我的收藏</a></li>
							<li> <a href="/home/concerns"><span class="fa fa-bell"></span>消息</a></li>
						</ul>
					</form>
				</div>
				<div class="form-group currencies-block">
					<form>
						<a class="btn btn-xs">
							<span class="icon icon-credit "></span> 商城会员
						</a>
					</form>
				</div>
				<div class="form-group currencies-block">
					<form>
						<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
							<span class="icon icon-credit "></span> 客户服务 <span class="fa fa-angle-down"></span>
						</a>
						<ul class="dropdown-menu btn-xs">
							<li> <a href="#"><span class="fa fa-hops">帮助中心</a></li>
							<li> <a href="#">售后服务</a></li>
							<li> <a href="#"><span class="fa fa-headphones"></span>在线客服</a></li>
							<li> <a href="#">意见建议</a></li>
						</ul>
					</form>
				</div>
				<div class="form-group currencies-block">
					<form action="index.html" method="post" enctype="multipart/form-data" id="currency">
						<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
							<span class=""></span> 网站导航 <span class="fa fa-angle-down"></span>
						</a>
						<ul class="dropdown-menu btn-xs">
							<li> <a href="#"></a></li>
							<li> <a href="#">(£)&nbsp;Pounds	</a></li>
							<li> <a href="#">($)&nbsp;US Dollar	</a></li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Header Top -->

<!-- Header center -->
<div class="header-center left">
	<div class="container">
		<div class="row">
			<!-- Logo -->
			<div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
				<a href="/"><img src="/home/image/demo/logos/theme_logo.png" title="Your Store" alt="Your Store" /></a>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12"> 
				<a href=""><span style="font-size: 25px; vertical-align: inherit;"><span style="vertical-align: inherit;">个人中心</span></span></a>
			</div>
			<!-- //end Logo -->
			<!-- Main menu -->
			
			<!-- //end Main menu -->
			
		</div>
	</div>

</div>

<!-- Navbar switcher -->
<!-- //end Navbar switcher -->
	</header>
<section class="flat-account background">
            <div class="container">
                <div class="row col-md-12">
                    <div class="col-md-2 pull-left" >
				    <div class="m_left">
				        	<div class="left_n">管理中心</div>
				        	<div class="left_m">
				                <ul>
				                	<li><a   style="color:orange;" href="/home/users/{{ $user->id }}/edit">修改信息</a></li>
				                    <li><a href="/pwd/reset">修改密码</a></li>
				                </ul>
				            </div>
				            <div class="left_m">
				            	<div class="left_m_t t_bg1">订单中心</div>
				                <ul>
				                	<li><a href="/home/orders">我的订单</a></li>
				                    <li><a href="/home/addrs">收货地址</a></li>
				                </ul>
				            </div>
				            <div class="left_m">
				            	<div class="left_m_t t_bg1">会员中心</div>
				                <ul>
				                    <li><a href="/home/usersgoods">我的收藏</a></li>
				                    <li><a href="/home/massage">我的留言</a></li>
				                    <li><a href="">我的评论</a></li>
				                </ul>
				            </div>
				        </div>
							
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-10 pull-right">
                    	<div class="m_right">
            <p></p><form action="/home/users" method="post" enctype="multipart/form-data">
           		<div class="table-responsive">
           			<table class="table" border="0" style="width:750px; margin-top:20px;" cellspacing="0" cellpadding="0">
              <tbody><tr height="45">
               <div class="form-group">
            <div class="mem_tit">我的留言</div>
                <td style="width: 80px;" align="right">用户名</td>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $user->id }}">
                <td>                            
	                <input type="password" name="name" readonly class="form-control" placeholder="{{ $user->name }}">
                </td>
               </div>
              </tr>
              <tr height="45">
                <td align="right">昵称&nbsp; &nbsp;</td>
                <td>
                        <input type="text" name="nickname" class="form-control" value="{{ $user->userInfo->nickname }}">
                </td>
              </tr>
              <tr height="45">
                <td align="right">性别 &nbsp; &nbsp;</td>
                <td style="padding-top:5px;">
                	<div class="form-group">
                		<div class="input-group">
	                        <input type="radio" @if($user->userInfo->sex == 0) checked @endif name="sex" value="0">男
	                        <input type="radio" @if($user->userInfo->sex == 1) checked @endif name="sex" value="1">女
	                        <input type="radio" @if($user->userInfo->sex == 2) checked @endif name="sex" value="2">保密
                		</div>
                </div>
                </td>
              </tr>
              <tr height="45">
                <td align="right">住址&nbsp; &nbsp;</td>
                <td><div class="form-group">
                        <input type="text" name="city" class="form-control" value="{{ $user->userInfo->city }}">
                </div></td>
              </tr>
              <tr height="50" valign="bottom">
                <td>&nbsp;</td>
                <td><input type="submit" value="提交" class="btn btn-danger"></td>
              </tr>
            </tbody></table>
           		</div>
            
            </form>

            <script type="text/javascript">
            	function update() {
            		var id = $('input[name="id"]').val();
                    var nickname = $('input[name="nickname"]').val();
                    var sex = $('input[name="sex"]:checked').val();
                    var city = $('input[name="city"]').val();
                    var _token = $('input[name="_token"]').val();

                    $.post('/home/users/'+id, {"nickname":nickname, "sex":sex, "city":city, "_token":_token, "_method":'PUT'}, function(data){
                        if (data == 'success') {
                            alert('修改成功');
                            location.href = '/home/users';
                        } else {
                            alert('修改失败');
                        }
                    }, 'html');
                }

                $('input[type="submit"]').click(function(){
                    update();
                    return false;
                });
                $(document).keypress(function(e) {  

                    if((e.keyCode || e.which)==13) {  
                        update();
                        return false;
                    }  

                });
            </script>
        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

			
		
<script type="text/javascript"><!--
	var $typeheader = 'header-home1';
	//-->
</script>

	<!-- Footer Container -->
	<footer class="footer-container">
		<!-- Footer Top Container -->
		<section class="footer-top">
			<div class="container content">
				<div class="row">
					<div class="col-sm-6 col-md-3 box-information">
						<div class="module clearfix">
							<h3 class="modtitle">Information</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="#">About Us</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Order history</a></li>
									<li><a href="#">Order information</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 box-service">
						<div class="module clearfix">
							<h3 class="modtitle">Customer Service</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Returns</a></li>
									<li><a href="#">Site Map</a></li>
									<li><a href="#">My Account</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 box-account">
						<div class="module clearfix">
							<h3 class="modtitle">My Account</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="#">Brands</a></li>
									<li><a href="#">Gift Vouchers</a></li>
									<li><a href="#">Affiliates</a></li>
									<li><a href="#">Specials</a></li>
									<li><a href="#" target="_blank">Our Blog</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 collapsed-block ">
						<div class="module clearfix">
							<h3 class="modtitle">Contact Us	</h3>
							<div class="modcontent">
								<ul class="contact-address">
									<li><span class="fa fa-map-marker"></span> My Company, 42 avenue des Champs Elysées 75000 Paris France</li>
									<li><span class="fa fa-envelope-o"></span> Email: <a href="#"> sales@yourcompany.com</a></li>
									<li><span class="fa fa-phone">&nbsp;</span> Phone 1: 0123456789 <br>Phone 2: (123) 4567890</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-12 collapsed-block footer-links">
						<div class="module clearfix">
							<div class="modcontent">
								<hr class="footer-lines">
								<div class="footer-directory-title">
									<h4 class="label-link">Top Stores : Brand Directory | Store Directory</h4>
									<ul class="footer-directory">
										<li>
											<h4>MOST SEARCHED KEYWORDS MARKET:</h4>
											<a href="#">Xiaomi Mi3</a> | <a href="#">Digiflip Pro XT 712 Tablet</a> | <a href="#">Mi 3 Phones</a> | <a href="#">View all</a></li>
										<li>
											<h4>MOBILES:</h4>
											<a href="#">Moto E</a> | <a href="#">Samsung Mobile</a> | <a href="#">Micromax Mobile</a> | <a href="#">Nokia Mobile</a> | <a href="#">HTC Mobile</a> | <a href="#">Sony Mobile</a> | <a href="#">Apple Mobile</a> | <a href="#">LG Mobile</a> | <a href="#">Karbonn Mobile</a> | <a href="#">View all</a></li>
										<li>
											<h4>CAMERA:</h4>
											<a href="#">Nikon Camera</a> | <a href="#">Canon Camera</a> | <a href="#">Sony Camera</a> | <a href="#">Samsung Camera</a> | <a href="#">Point shoot camera</a> | <a href="#">Camera Lens</a> | <a href="#">Camera Tripod</a> | <a href="#">Camera Bag</a> | <a href="#">View all</a></li>
										<li>
											<h4>LAPTOPS:</h4>
											<a href="#">Apple Laptop</a> | <a href="#">Acer Laptop</a> | <a href="#">Sony Laptop</a> | <a href="#">Dell Laptop</a> | <a href="#">Asus Laptop</a> | <a href="#">Toshiba Laptop</a> | <a href="#">LG Laptop</a> | <a href="#">HP Laptop</a> | <a href="#">Notebook</a> | <a href="#">View all</a></li>
										<li>
											<h4>TVS:</h4>
											<a href="#">Sony TV</a> | <a href="#">Samsung TV</a> | <a href="#">LG TV</a> | <a href="#">Panasonic TV</a> | <a href="#">Onida TV</a> | <a href="#">Toshiba TV</a> | <a href="#">Philips TV</a> | <a href="#">Micromax TV</a> | <a href="#">LED TV</a> | <a href="#">LCD TV</a> | <a href="#">Plasma TV</a> | <a href="#">3D TV</a> | <a href="#">Smart TV</a> | <a href="#">View all</a></li>
										<li>
											<h4>TABLETS:</h4>
											<a href="#">Micromax Tablets</a> | <a href="#">HCL Tablets</a> | <a href="#">Samsung Tablets</a> | <a href="#">Lenovo Tablets</a> | <a href="#">Karbonn Tablets</a> | <a href="#">Asus Tablets</a> | <a href="#">Apple Tablets</a> | <a href="#">View all</a></li>
										<li>
											<h4>WATCHES:</h4>
											<a href="#">FCUK Watches</a> | <a href="#">Titan Watches</a> | <a href="#">Casio Watches</a> | <a href="#">Fastrack Watches</a> | <a href="#">Timex Watches</a> | <a href="#">Fossil Watches</a> | <a href="#">Diesel Watches</a> | <a href="#">Luxury Watches</a> | <a href="#">View all</a></li>
										<li>
											<h4>CLOTHING:</h4>
											<a href="#">Shirts</a> | <a href="#">Jeans</a> | <a href="#">T shirts</a> | <a href="#">Kurtis</a> | <a href="#">Sarees</a> | <a href="#">Levis Jeans</a> | <a href="#">Killer Jeans</a> | <a href="#">Pepe Jeans</a> | <a href="#">Arrow Shirts</a> | <a href="#">Ethnic Wear</a> | <a href="#">Formal Shirts</a> | <a href="#">Peter England Shirts</a> | <a href="#">View all</a></li>
										<li>
											<h4>FOOTWEAR:</h4>
											<a href="#">Shoes</a> | <a href="#">Casual Shoes</a> | <a href="#">Adidas Shoes</a> | <a href="#">Gas Shoes</a> | <a href="#">Puma Shoes</a> | <a href="#">Reebok Shoes</a> | <a href="#">Woodland Shoes</a> | <a href="#">Red tape Shoes</a> | <a href="#">Nike Shoes</a> | <a href="#">View all</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Footer Top Container -->
		
		<!-- Footer Bottom Container -->
		<div class="footer-bottom-block ">
			<div class=" container">
				<div class="row">
					<div class="col-sm-5 copyright-text">Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></div>
					<div class="col-sm-7">
						<div class="block-payment text-right"><img src="/home/image/demo/content/payment.png" alt="payment" title="payment" ></div>
					</div>
					<!--Back To Top-->
					<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>

				</div>
			</div>
		</div>
		<!-- /Footer Bottom Container -->
		
		
	</footer>
	<!-- //end Footer Container -->

    </div>
	<!-- Social widgets -->
	<section class="social-widgets visible-lg">
	<ul class="items">
		<li class="item item-01 facebook"> <a href="" class="tab-icon"><span class="fa fa-user"></span></a>
			<div class="tab-content">
				<div class="title">
					<h5>个人中心</h5>
				</div>
				<div class="loading">
					<img src="/home/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
				</div>
			</div>
		</li>
		<li class="item item-02 twitter"> <a href="" class="tab-icon"><span class="fa fa-cart-plus"></span></a>
			<div class="tab-content">
				<div class="title">
					<h5>购物车</h5> 
				</div>
				<div class="loading">
					<img src="/home/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
				</div>
			</div>
		</li>
		<li class="item item-03 youtube"> <a href="#" class="tab-icon"><span class="fa fa-heart"></span></a>
			<div class="tab-content">
				<div class="title">
					<h5>我的关注</h5>
				</div>
				<div class="loading"> <img src="/home/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader"></div>
			</div>
		</li>
		<li class="item item-04 twitter"> <a href="#" class="tab-icon"><span class="fa fa-bell"></span></a>
			<div class="tab-content">
				<div class="title">
					<h5>我的消息</h5>
				</div>
				<div class="loading"> <img src="/home/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader"></div>
			</div>
		</li>
		<li class="item item-05 youtube"> <a href="#" class="tab-icon"><span class="fa fa-pencil"></span></a>
			<div class="tab-content">
				<div class="title">
					<h5>反馈</h5>
				</div>
				<div class="loading"> <img src="/home/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader"></div>
			</div>
		</li>
	</ul>
</section>	<!-- End Social widgets -->

<link rel='stylesheet' property='stylesheet'  href='/home/css/themecss/cpanel.css' type='text/css' media='all' />
	
<!-- Preloading Screen -->
<!-- End Preloading Screen -->
	
<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->

<script type="text/javascript" src="/home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/home/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="/home/js/themejs/libs.js"></script>
<script type="text/javascript" src="/home/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="/home/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/home/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="/home/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="/home/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/home/js/jquery-ui/jquery-ui.min.js"></script>


<!-- Theme files
============================================ -->
<script type="text/javascript" src="/home/js/themejs/application.js"></script>

<script type="text/javascript" src="/home/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="/home/js/themejs/addtocart.js"></script>	
<script type="text/javascript" src="/home/js/themejs/cpanel.js"></script>
</body>
</html>

