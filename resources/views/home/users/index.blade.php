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
							<span class="icon icon-credit "></span> <span>{{ session('user')->name }}</span>
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
				                	<li ><a href="/home/users/{{ $user->id }}/edit"><span></span>修改信息</a></li>
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
				        <div class="m_right" style="margin-left: 50px;">
				        	<div class="m_des table-responsive">
				            	<table class="col-md-8 table table-striped">
				                  <tbody><tr valign="top">
				                    <td width="115"><img src="/uploads/{{ $user->face or 'images/bBE860xPs7XvUnFPLrsvQEroSmkU8ll45I9EgmvZ.gif' }}" width="90" height="90"></td>
				                    <td>
				                    	<div class="m_user"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $user->userInfo->nickname }}</font></font></div>
				                        <p>
				                            <br>
				                            <br>
				                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">上一次登录时间：2015-09-28 18:19:47</font></font><br>
				                        </p>
				                        
				                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">用户中心公告！</font></font></td>
				                  </tr>
				                </tbody></table>	
				            </div>
				            <div class="table-responsive">
				            	
				            </div>
				            <div class="mem_t">账号信息</div>
				            <table border="0" class="acc_tab table" style="width:750px;" cellspacing="0" cellpadding="0">
				              <tbody><tr>
				                <td class="td_l"> <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">用户ID：</font></font></td>
				                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $user->name }}</font></font></td>
				              </tr>
				              <tr>
				                <td class="td_l b_none"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电  话：</font></font></td>
				                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $user->phone }}</font></font></td>
				              </tr>
				              <tr>
				                <td class="td_l"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">邮   箱： </font></font></td>
				                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $user->email }}</font></font></td>
				              </tr>
				              <tr>
				                <td class="td_l b_none"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册时间：</font></font></td>
				                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $user->created_at }}</font></font></td>
				              </tr>
				              <tr>
				                <td class="td_l"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成订单：</font></font></td>
				                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php count($user->order) ?></font></font></td>
				              </tr>
				              
				              <tr>
				                <td class="td_l"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登录次数：</font></font></td>
				                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ '1' }}</font></font></td>
				              </tr>
				            </tbody></table>
				               
				            
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
								@foreach($links as $k=>$v)
									<li><a href="{{ $v->href }}">{{ $v->name }}</a></li>
								@endforeach	
								</ul>
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

