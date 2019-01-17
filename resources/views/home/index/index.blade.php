<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>{{ $title or 'MARKET' }}</title>
	<meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<link rel="icon" type="image/png" sizes="96x96" href="/admin/assets/img/title.png">
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
	<link href="/home/css/style.css" rel="stylesheet">
	<link href="/home/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="/home/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="/home/css/themecss/so-categories.css" rel="stylesheet">
	<link href="/home/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link id="color_scheme" href="/home/css/theme.css" rel="stylesheet">
	<link href="/home/css/responsive.css" rel="stylesheet">
	<script type="text/javascript" src="/home/js/jquery-2.2.4.min.js"></script>
	

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
			<!-- //end Logo -->

			<!-- Search -->
			<div id="sosearchpro" class="col-sm-7 search-pro">
				<form method="GET" action="/home/search/{{ 0 }}">
					<div id="search0" class="search input-group">
						

						<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="商品搜索" name="search">
						<span class="input-group-btn">
						<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
						</span>
					</div>
					<input type="hidden" name="route" value="product/search" />
				</form>
			</div>
			<!-- //end Search -->

			<!-- Secondary menu -->
			<div class="col-md-2 col-sm-5 col-xs-12 shopping_cart pull-right">
				<!--cart-->
				<div id="cart" class=" btn-group btn-shopping-cart" >
					<a class="top_cart dropdown-toggle" href="/home/carts">
						<div class="shopcart">
							<span class="handle pull-left"></span>
							<span class="title" style="line-height: 40px">我的购物车</span>
							
						</div>
					</a>

					<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
						
						<li>
							<table class="table table-striped">
								<tbody>
									<tr>
										<td class="text-center" style="width:70px">
											<a href="product.html"> <img src="/home/image/demo/shop/product/35.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
										</td>
										<td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
										<td class="text-center"> x1 </td>
										<td class="text-center"> $1,202.00 </td>
										<td class="text-right">
											<a href="product.html" class="fa fa-edit"></a>
										</td>
										<td class="text-right">
											<a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
										</td>
									</tr>
									<tr>
										<td class="text-center" style="width:70px">
											<a href="product.html"> <img src="/home/image/demo/shop/product/141.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
										</td>
										<td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
										<td class="text-center"> x1 </td>
										<td class="text-center"> $60.00 </td>
										<td class="text-right">
											<a href="product.html" class="fa fa-edit"></a>
										</td>
										<td class="text-right">
											<a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
										</td>
									</tr>
								</tbody>
							</table>
						</li>
						<li>
							<div>
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td class="text-left"><strong>Sub-Total</strong>
											</td>
											<td class="text-right">$1,060.00</td>
										</tr>
										<tr>
											<td class="text-left"><strong>Eco Tax (-2.00)</strong>
											</td>
											<td class="text-right">$2.00</td>
										</tr>
										<tr>
											<td class="text-left"><strong>VAT (20%)</strong>
											</td>
											<td class="text-right">$200.00</td>
										</tr>
										<tr>
											<td class="text-left"><strong>Total</strong>
											</td>
											<td class="text-right">$1,262.00</td>
										</tr>
									</tbody>
								</table>
								<p class="text-right"> <a class="btn view-cart" href="#"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="#"><i class="fa fa-share"></i>Checkout</a> </p>
							</div>
						</li>
					</ul>
				</div>
				<!--//cart-->
			</div>
		</div>

	</div>
</div>
<!-- //Header center -->

<!-- Header Bottom -->
<div class="header-bottom">
	<div class="container">
		<div class="row">
			
			<div class="sidebar-menu col-md-3 col-sm-6 col-xs-12 ">
				<div class="responsive so-megamenu ">
					<div class="so-vertical-menu no-gutter compact-hidden">
						<nav class="navbar-default">	
							
							<div class="container-megamenu vertical open">
								<div id="menuHeading">
									<div class="megamenuToogle-wrapper">
										<div class="megamenuToogle-pattern">
											<div class="container">
												<div>
													<span></span>
													<span></span>
													<span></span>
												</div>
												所有分类							
												<i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="navbar-header">
									<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">
										
									</button>
									All Categories		
								</div>
								<div class="vertical-wrapper" >
									<span id="remove-verticalmenu" class="fa fa-times"></span>
									<div class="megamenu-pattern">
											<div class="container">
												<ul class="megamenu">
													@foreach($cates as $k=>$v)
													<li class="item-vertical style1 with-sub-menu hover">
													    <p class="close-menu"></p>
													    <a href="/home/goods/{{ $v->id }}" class="clearfix">
													        <!-- <img src="" alt="icon"> -->
													        <span class="fa fa-home"></span>
													        <span>{{ $v->name }}</span>
													        <b class="caret"></b>
													    </a>
													    <div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
													        <div class="content" style="display: none;">
													            <div class="row">
													                <div class="col-sm-12">
													                    <div class="row">
												                        	@foreach($v->sub as $kk=>$vv)
														                        <div class="col-md-4 static-menu">
														                            <div class="menu">
														                                <ul>
														                                    <li>
														                                        <a href="/home/goods/{{ $vv->id }}" class="main-menu">{{ $vv->name }}</a>
														                                        <ul>
														                                        	@foreach($vv->sub as $kkk=>$vvv)
														                                            <li>
														                                                <a href="/home/goods/{{ $vvv->id }}">{{ $vvv->name }}</a></li><li>                                  
														                                            @endforeach
														                                        </ul>
														                                    </li>
														                                </ul>
														                            </div>
														                        </div>
												                            @endforeach
													                    </div>
													                </div>
													            </div>
													        </div>
													    </div>
													</li>
													@endforeach
												</ul>
											</div>
										</div>
									</div>
								</div>
							</nav>
					</div>
				</div>

			</div>
			
			<!-- Main menu -->
			<div class="megamenu-hori header-bottom-right  col-md-9 col-sm-6 col-xs-12 ">
				<div class="responsive so-megamenu ">
	<nav class="navbar-default">
		<div class=" container-megamenu  horizontal">
			<div class="navbar-header">
				<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				Navigation		
			</div>
			
			<div class="megamenu-wrapper">
				<span id="remove-megamenu" class="fa fa-times"></span>
				<div class="megamenu-pattern">
					<div class="container">
						<ul class="megamenu " data-transition="slide" data-animationtime="250">
							<li class="home hover">
								
								<a href="index.html">页面 <b class="caret"></b></a>
								<div class="sub-menu" style="width:100%;" >
									<div class="content" >
										<div class="row">
											<div class="col-md-3">
												<a href="index.html" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="/home/image/demo/feature/home-1.jpg" alt="">
														<span class="btn btn-default">Read More</span>
													</span> 
													<h3 class="figcaption">Home page - (Default)</h3> 
												</a> 
												
											</div>
											<div class="col-md-3">
												<a href="#" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="/home/image/demo/feature/home-2.jpg" alt="">
														<span class="btn btn-default">Read More</span>
													</span> 
													<h3 class="figcaption">Home page - Layout 2</h3> 
												</a> 
												
											</div>
											<div class="col-md-3">
												<a href="#" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="/home/image/demo/feature/home-3.jpg" alt="">
														<span class="btn btn-default">Read More</span>
													</span> 
													<h3 class="figcaption">Home page - Layout 3</h3> 
												</a> 
												
											</div>
											<div class="col-md-3">
												<a href="#" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="/home/image/demo/feature/home-4.jpg" alt="">
														<span class="btn btn-default">Read More</span>
													</span> 
													<h3 class="figcaption">Home page - Layout 4</h3> 
												</a> 
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="with-sub-menu hover">
								<p class="close-menu"></p>
								<a href="#" class="clearfix">
									<strong>功能</strong>
									<span class="label"> Hot</span>
									<b class="caret"></b>
								</a>
								<div class="sub-menu" style="width: 100%; right: auto;">
									<div class="content" >
										<div class="row">
											<div class="col-md-3">
												<div class="column">
													<a href="#" class="title-submenu">Listing pages</a>
													<div>
														<ul class="row-list">
															<li><a href="category.html">Category Page 1 </a></li>
															<li><a href="#">Category Page 2</a></li>
															<li><a href="#">Category Page 3</a></li>
														</ul>
														
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="column">
													<a href="#" class="title-submenu">Product pages</a>
													<div>
														<ul class="row-list">
															<li><a href="product.html">Image size - big</a></li>
															<li><a href="#">Image size - medium</a></li>
															<li><a href="#">Image size - small</a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="column">
													<a href="#" class="title-submenu">Shopping pages</a>
													<div>
														<ul class="row-list">
															<li><a href="#">Shopping Cart Page</a></li>
															<li><a href="#">Checkout Page</a></li>
															<li><a href="#">Compare Page</a></li>
															<li><a href="#">Wishlist Page</a></li>
														
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="column">
													<a href="#" class="title-submenu">My Account pages</a>
													<div>
														<ul class="row-list">
															<li><a href="login.html">Login Page</a></li>
															<li><a href="register.html">Register Page</a></li>
															<li><a href="#">My Account</a></li>
															<li><a href="#">Order History</a></li>
															<li><a href="#">Order Information</a></li>
															<li><a href="#">Product Returns</a></li>
															<li><a href="#">Gift Voucher</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="with-sub-menu hover">
								<p class="close-menu"></p>
								<a href="#" class="clearfix">
									<strong>页面</strong>
									<span class="label"> Hot</span>
									<b class="caret"></b>
								</a>
								<div class="sub-menu" style="width: 40%; ">
									<div class="content" >
										<div class="row">
											<div class="col-md-6">
												<ul class="row-list">
													<li><a class="subcategory_item" href="#">FAQ</a></li>
													<li><a class="subcategory_item" href="#">Typography</a></li>
													<li><a class="subcategory_item" href="#">Site Map</a></li>
													<li><a class="subcategory_item" href="#">Contact us</a></li>
													<li><a class="subcategory_item" href="#">Banner Effect</a></li>
												</ul>
											</div>
											<div class="col-md-6">
												<ul class="row-list">
													<li><a class="subcategory_item" href="#">About Us 1</a></li>
													<li><a class="subcategory_item" href="#">About Us 2</a></li>
													<li><a class="subcategory_item" href="#">About Us 3</a></li>
													<li><a class="subcategory_item" href="#">About Us 4</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="with-sub-menu hover">
								<p class="close-menu"></p>
								<a href="#" class="clearfix">
									<strong>分类</strong>
									<span class="label"></span>
									<b class="caret"></b>
								</a>
								<div class="sub-menu" style="width: 100%; display: none;">
									<div class="content">
										<div class="row">
											<div class="col-sm-12">
												<div class="row">
													<div class="col-md-3 img img1">
														<a href="#"><img src="/home/image/demo/cms/img1.jpg" alt="banner1"></a>
													</div>
													<div class="col-md-3 img img2">
														<a href="#"><img src="/home/image/demo/cms/img2.jpg" alt="banner2"></a>
													</div>
													<div class="col-md-3 img img3">
														<a href="#"><img src="/home/image/demo/cms/img3.jpg" alt="banner3"></a>
													</div>
													<div class="col-md-3 img img4">
														<a href="#"><img src="/home/image/demo/cms/img4.jpg" alt="banner4"></a>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<a href="#" class="title-submenu">Automotive</a>
												<div class="row">
													<div class="col-md-12 hover-menu">
														<div class="menu">
															<ul>
																<li><a href="#"  class="main-menu">Car Alarms and Security</a></li>
																<li><a href="#"  class="main-menu">Car Audio &amp; Speakers</a></li>
																<li><a href="#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
																<li><a href="#"  class="main-menu">More Car Accessories</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<a href="#" class="title-submenu">Electronics</a>
												<div class="row">
													<div class="col-md-12 hover-menu">
														<div class="menu">
															<ul>
																<li><a href="#"  class="main-menu">Battereries &amp; Chargers</a></li>
																<li><a href="#"  class="main-menu">Headphones, Headsets</a></li>
																<li><a href="#"  class="main-menu">Home Audio</a></li>
																<li><a href="#"  class="main-menu">Mp3 Players &amp; Accessories</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<a href="#" class="title-submenu">Jewelry &amp; Watches</a>
												<div class="row">
													<div class="col-md-12 hover-menu">
														<div class="menu">
															<ul>
																<li><a href="#"  class="main-menu">Earings</a></li>
																<li><a href="#"  class="main-menu">Wedding Rings</a></li>
																<li><a href="#"  class="main-menu">Men Watches</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<a href="#" class="title-submenu">Bags, Holiday Supplies</a>
												<div class="row">
													<div class="col-md-12 hover-menu">
														<div class="menu">
															<ul>
																<li><a href="#"  class="main-menu">Gift &amp; Lifestyle Gadgets</a></li>
																<li><a href="#"  class="main-menu">Gift for Man</a></li>
																<li><a href="#"  class="main-menu">Gift for Woman</a></li>
																<li><a href="#"  class="main-menu">Lighter &amp; Cigar Supplies</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							
							<li class="with-sub-menu hover">
								<p class="close-menu"></p>
								<a href="#" class="clearfix">
									<strong>饰品</strong>
									
									<b class="caret"></b>
								</a>
								<div class="sub-menu" style="width: 100%; display: none;">
									<div class="content" style="display: none;">
										<div class="row">
											<div class="col-md-8">
												<div class="row">
													<div class="col-md-6 static-menu">
														<div class="menu">
															<ul>
																<li>
																	<a href="#"  class="main-menu">Automotive</a>
																	<ul>
																		<li><a href="#">Car Alarms and Security</a></li>
																		<li><a href="#" >Car Audio &amp; Speakers</a></li>
																		<li><a href="#" >Gadgets &amp; Auto Parts</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#"  class="main-menu">Smartphone &amp; Tablets</a>
																	<ul>
																		<li><a href="#" >Accessories for i Pad</a></li>
																		<li><a href="#" >Apparel</a></li>
																		<li><a href="#" >Accessories for iPhone</a></li>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-md-6 static-menu">
														<div class="menu">
															<ul>
																<li>
																	<a href="#" class="main-menu">Sports &amp; Outdoors</a>
																	<ul>
																		<li><a href="#" >Camping &amp; Hiking</a></li>
																		<li><a href="#" >Cameras &amp; Photo</a></li>
																		<li><a href="#" >Cables &amp; Connectors</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#"  class="main-menu">Electronics</a>
																	<ul>
																		<li><a href="#" >Battereries &amp; Chargers</a></li>
																		<li><a href="#" >Bath &amp; Body</a></li>
																		<li><a href="#" >Outdoor &amp; Traveling</a></li>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<span class="title-submenu">Bestseller</span>
												<div class="col-sm-12 list-product">
													<div class="product-thumb">
														<div class="image pull-left">
															<a href="#"><img src="/home/image/demo/shop/product/35.jpg" width="80" alt="Filet Mign" title="Filet Mign" class="img-responsive"></a>
														</div>
														<div class="caption">
															<h4><a href="#">Filet Mign</a></h4>
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
															<p class="price">$1,202.00</p>
														</div>
													</div>
												</div>
												<div class="col-sm-12 list-product">
													<div class="product-thumb">
														<div class="image pull-left">
															<a href="#"><img src="/home/image/demo/shop/product/W1.jpg" width="80" alt="Dail Lulpa" title="Dail Lulpa" class="img-responsive"></a>
														</div>
														<div class="caption">
															<h4><a href="#">Dail Lulpa</a></h4>
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
															<p class="price">$78.00</p>
														</div>
													</div>
												</div>
												<div class="col-sm-12 list-product">
													<div class="product-thumb">
														<div class="image pull-left">
															<a href="#"><img src="/home/image/demo/shop/product/141.jpg" width="80" alt="Canon EOS 5D" title="Canon EOS 5D" class="img-responsive"></a>
														</div>
														<div class="caption">
															<h4><a href="#">Canon EOS 5D</a></h4>
															
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
															<p class="price">
																<span class="price-new">$60.00</span>
																<span class="price-old">$145.00</span>
																
															</p>
														</div>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<p class="close-menu"></p>
								<a href="#" class="clearfix">
									<strong>博客</strong>
									<span class="label"></span>
								</a>
							</li>
							
							
						</ul>
						
					</div>
				</div>
			</div>
		</div>
	</nav>
</div>
									</div>
			<!-- //end Main menu -->
			
		</div>
	</div>

</div>

<!-- Navbar switcher -->
<!-- //end Navbar switcher -->
	</header>


<script type="text/javascript" src="/home/js/themejs/toppanel.js"></script>
	<!-- Block Spotlight1  -->
	<section class="so-spotlight1 ">
		<div class="container">
			<div class="row">
				<div id="yt_header_right" class="col-lg-offset-3 col-lg-9 col-md-12">
					<div class="slider-container "> 
							
						<div class="module first-block">
							<div class="modcontent clearfix">
								<div id="custom_popular_search" class="clearfix">
									<h5 class="so-searchbox-popular-title pull-left">Top Search:</h5>
									<div class="so-searchbox-keyword">
										<ul class="list-inline"><li>&nbsp;<a href="#">Acer,</a></li><li><a href="#">APPLE,</a></li><li><a href="#">Black,</a></li><li><a href="#">Canon,</a></li><li><a href="#">Cogs,</a></li><li><a href="#">Confi,</a></li><li><a href="#">Kate,</a></li><li><a href="#">Lor,</a></li><li><a href="#">Product,</a></li><li><a href="#">Zolof The Rock And Roll Destroyer</a></li></ul>
									</div>
								</div>
							</div>
						</div>
						<div id="so-slideshow" class="col-lg-8 col-md-8 col-sm-12 col-xs-12 two-block">
							<div class="module slideshow no-margin">
								@foreach($slids as $k => $v)
								<div class="item">
									<a href="{{ $v->url }}"><img style="height: 423px;" src="/uploads/{{ $v->image }}" alt="{{ $v->sort }}" class="img-responsive"></a>
								</div>
								@endforeach
							</div>
							<div class="loadeding"></div>
						</div>

						
						<div class="module col-md-4  hidden-sm hidden-xs three-block ">
							<div class="modcontent clearfix">
								<div class="htmlcontent-block">	
									<ul class="htmlcontent-home">		
										<li>
											<div class="banners">
												<div>
													<a href="#"><img src="/home/image/demo/cms/banner1.jpg" alt="banner1"></a>
												</div>
											</div>
										</li>		
										<li>
											<div class="banners">
												<div>
													<a href="#"><img src="/home/image/demo/cms/banner2.jpg" alt="banner1"></a>
												</div>
											</div>
										</li>		
										<li>
											<div class="banners">
												<div>
													<a href="#"><img src="/home/image/demo/cms/banner3.jpg" alt="banner1"></a>
												</div>
											</div>
										</li>	
									</ul>
								</div>
							</div>
						</div>

						<div class="module hidden-xs col-sm-12 four-block">
							<div class="modcontent clearfix">
								<div class="policy-detail">
									<div class="banner-policy">
										<div class="policy policy1"><a href="#"> <span class="ico-policy">&nbsp;</span> 7天 <br> 无条件退款 </a></div>
										<div class="policy policy2"><a href="#"> <span class="ico-policy">&nbsp;</span> 店内交换 </a></div>
										<div class="policy policy3"><a href="#"> <span class="ico-policy">&nbsp;</span> 最低价格保证 </a></div>
										<div class="policy policy4"><a href="#"> <span class="ico-policy">&nbsp;</span> 购物保证 </a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>  
	</section>
	<!-- //Block Spotlight1  -->
	<!-- Main Container  -->
	<div class="main-container container">
		
		<div class="row">
			<div id="content" class="col-sm-12">
				
<div class="module tab-slider titleLine">
	<h3 class="modtitle">活动商品</h3>
	<div id="so_listing_tabs_1" class="so-listing-tabs first-load module">
		<div class="loadeding"></div>
		<div class="ltabs-wrap">
			<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="#" data-type_source="0">
				<!--Begin Tabs-->
				<div class="ltabs-tabs-wrap"> 
				<span class="ltabs-tab-selected">Jewelry &amp; Watches	</span> <span class="ltabs-tab-arrow">▼</span>
					<div class="item-sub-cat">
						<ul class="ltabs-tabs cf">
							<li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">折扣 &amp; 促销						</span> </li>
							<li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18"> <span class="ltabs-tab-label">Electronics		</span> </li>
							<li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"> <span class="ltabs-tab-label">Sports &amp; Outdoors	</span> </li>
						</ul>
					</div>
				</div>
				<!-- End Tabs-->
			</div>
			<div class="ltabs-items-container">
				<!--Begin Items-->
				<div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total="10">
					<div class="ltabs-items-inner ltabs-slider ">
						@foreach($sales as $k=>$v)
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/uploads/goods/{{ $v->goods->pic }}" onerror="this.src='{{ $v->goods->pic }}'" alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="{{ $v->goods->sub_pic }}" onerror="this.src='/uploads/goods/subpic/wt8y5q10aBibCkyVl0wrL4ma77dYrpgsT1cg4yQ2.jpeg'" alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4 style="height:64px"><a href="product.html" title="{{ $v->title }}">{{ $v->goods->title }}</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										
									</div>
									
									  
									  <div class="price">
										<span class="price-new">${{number_format(($v->goods->price * $v->discount/10),2) }}</span> 
										<span class="price-old">${{ $v->goods->price }}</span>		 
										<span class="label label-percent">-{{ 100-$v->discount*10}}%</span> 
										<div class="pull-right" style="margin-right:7px">
											@if(in_array($v->goods->id, $goodsid))
												<span style="font-size: 10px; color:#999">已收藏&nbsp;:</span>
												<a href="javascript:;" title="添加到我的收藏" class="like" value="{{ $v->goods->id }}" style="display: none;">
									        	<i class="fa fa-heart"></i>
												</a>
												<a href="javascript:;" title="取消收藏" class="dislike" value="{{ $v->goods->id }}">
									        	<i class="fa fa-heart" style="color:#DA2723"></i>
												</a>
											@else
												<span style="font-size: 10px; color:#999">收藏&nbsp;:</span>
												<a href="javascript:;" title="添加到我的收藏" class="like" value="{{ $v->goods->id }}">
									        	<i class="fa fa-heart"></i>
												</a>
												<a href="javascript:;" title="取消收藏" class="dislike" style="display: none" value="{{ $v->goods->id }}">
									        	<i class="fa fa-heart" style="color:#DA2723"></i>
												</a>
											@endif
									        
								  		</div>   
									</div>
								</div><!-- right block -->
							</div>
						</div>
						@endforeach
							
					</div>
					
				</div>
				<script type="text/javascript">
									$('.like').click(function(){
										var that = $(this);
										
										var gid = $(this).attr('value');
										$.get('/home/goods/like/'+gid, {}, function(msg){
											msg = msg.trim();
											if(msg == 'success') {
												that.next().css('display', '');
												that.css('display', 'none');
												that.prev().html('已收藏&nbsp;:');
											} else {
												alert('收藏失败!');
											}
											
										}, 'html');

										
									});

									$('.dislike').click(function(){
										var that = $(this);
										
										var gid = $(this).attr('value');
										$.get('/home/goods/dislike/'+gid, {}, function(msg){
											msg = msg.trim();
											if(msg == 'success') {
												that.prev().css('display', '');
												that.css('display', 'none');
												that.prev().prev().html('收藏&nbsp;:');
											} else {
												alert('删除失败!');
											}
											
										}, 'html');

										
									});


								</script>
				<div class="ltabs-items items-category-18 grid" data-total="11">
					<div class="ltabs-items-inner ltabs-slider ">
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/e11.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/E3.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Apple Cinema 30"</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$50.00</span> 
											<span class="price-old">$62.00</span>		 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/141.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/11.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html"> Canon EOS 5D</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$60.00</span> 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/35.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/34.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Filet Mign</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$97.00</span> 
											<span class="price-old">$122.00</span>		 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/E3_1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/E3_3.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">HP LP3065</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$60.00</span> 
											<span class="price-old">$100.00</span>		 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/e11.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/E3.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Apple Cinema 30"</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$50.00</span> 
											<span class="price-old">$62.00</span>		 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
					</div>
					
				</div>
				<div class="ltabs-items  items-category-25 grid" data-total="11">
					<div class="ltabs-items-inner ltabs-slider ">
						
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/141.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/11.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html"> Dail Lulpa</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$78.00</span> 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/B9.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Bint Beef</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$97.00</span> 
											<span class="price-old">$122.00</span>		 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/w1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/w10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Beef Bint</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$90.00</span> 
											<span class="price-old">$100.00</span>		 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/B5.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Bint Beef</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$97.00</span> 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>	
					</div>
					
				</div>
			</div>
			<!--End Items-->
			
			
		</div>
		
	</div>
</div>
				<div class="module ">
					<div class="modcontent clearfix">
						<div class="banner-wraps ">
							<div class="m-banner row">
								<div class="banner htmlconten1 col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="banners">
										<div>
											<a href="#"><img src="/home/image/demo/cms/banner2-1.png" alt="banner1"></a>
										</div>
									</div>
								</div>
								<div class="htmlconten2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="module banners">
											<div>
												<a href="#"><img src="/home/image/demo/cms/banner2-2.png" alt="banner1"></a>
											</div>
									</div>
										
									<div class="banners">
										<div>
											<a href="#"><img src="/home/image/demo/cms/banner2-3.png" alt="banner1"></a>
										</div>
									</div>
									
								</div>
								<div class="banner htmlconten3 hidden-sm col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="banners">
										<div>
											<a href="#"><img src="/home/image/demo/cms/banner2-4.png" alt="banner1"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="module tab-slider titleLine">
	<h3 class="modtitle">New Products</h3>
	<div id="so_listing_tabs_2" class="so-listing-tabs first-load module">
		<div class="loadeding"></div>
		<div class="ltabs-wrap ">
			<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="#" data-type_source="0">
				<!--Begin Tabs-->
				<div class="ltabs-tabs-wrap"> 
				<span class="ltabs-tab-selected">Jewelry &amp; Watches	</span> <span class="ltabs-tab-arrow">▼</span>
					<div class="item-sub-cat">
						<ul class="ltabs-tabs cf">
							<li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">Jewelry &amp; Watches						</span> </li>
							<li class="ltabs-tab " data-category-id="2" data-active-content=".items-category-2"> <span class="ltabs-tab-label">Electronics		</span> </li>
							<li class="ltabs-tab " data-category-id="3" data-active-content=".items-category-3"> <span class="ltabs-tab-label">Sports &amp; Outdoors	</span> </li>
						</ul>
					</div>
				</div>
				<!-- End Tabs-->
			</div>
			<div class="ltabs-items-container">
				<!--Begin Items-->
				<div class="ltabs-items  ltabs-items-selected items-category-1 grid" data-total="10">
					<div class="ltabs-items-inner ltabs-slider ">
						
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/B9.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Bint Beef</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$97.00</span> 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/w1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/w10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Dail Lulpa</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$97.00</span> 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/B5.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Et Spare</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$65.00</span> 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>	
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/J9.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/J5.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Cupim Bris</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$50.00</span> 
											<span class="price-old">$62.00</span>		 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/m1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/m3.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--New Label-->
									<span class="label label-new">New</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Cisi Chicken	</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$59.00</span> 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
					</div>
					
				</div>
				<div class="ltabs-items  items-category-2 grid" data-total="11">
					
					<div class="ltabs-items-inner ltabs-slider ">
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/e11.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/E3.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Apple Cinema 30"</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$50.00</span> 
											<span class="price-old">$62.00</span>		 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/141.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/11.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html"> Canon EOS 5D</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$60.00</span> 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/35.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/34.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Filet Mign</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$97.00</span> 
											<span class="price-old">$122.00</span>		 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/E3_1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/E3_3.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">HP LP3065</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$60.00</span> 
											<span class="price-old">$100.00</span>		 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						
					</div>
					
				</div>
				<div class="ltabs-items items-category-3 grid" data-total="11">
					<div class="ltabs-items-inner ltabs-slider ">
						
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/141.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/11.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html"> Dail Lulpa</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$78.00</span> 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/B9.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Bint Beef</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$97.00</span> 
											<span class="price-old">$122.00</span>		 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/w1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/w10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<span class="label label-sale">Sale</span>
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Beef Bint</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$90.00</span> 
											<span class="price-old">$100.00</span>		 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>
						<div class="ltabs-item product-layout">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container second_img ">
										<img src="/home/image/demo/shop/product/B5.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img src="/home/image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									
									<!--full quick view block-->
									<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
									<!--end full quick view block-->
								</div>
								<div class="right-block">
									<div class="caption">
										<h4><a href="product.html">Bint Beef</a></h4>		
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
															
										<div class="price">
											<span class="price-new">$97.00</span> 
										</div>
									</div>
									
									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->
							</div>
						</div>	
					</div>
					
				</div>
			</div>
			<!--End Items-->
			
			
		</div>
		
	</div>
</div>
	
				<div class="module no-margin titleLine ">
					<h3 class="modtitle">COLLECTIONS</h3>
					<div class="modcontent clearfix">
						<div id="collections_block" class="clearfix  block">
							<ul class="width6">
								<li class="collect collection_0">
									<div class="color_co"><a href="#">Furniture</a> </div>
								</li>
								<li class="collect collection_1">
									<div class="color_co"><a href="#">Gift idea</a> </div>
								</li>
								<li class="collect collection_2">
									<div class="color_co"><a href="#">Cool gadgets</a> </div>
								</li>
								<li class="collect collection_3">
									<div class="color_co"><a href="#">Outdoor activities</a> </div>
								</li>
								<li class="collect collection_4">
									<div class="color_co"><a href="#">Accessories for</a> </div>
								</li>
								<li class="collect collection_5">
									<div class="color_co"><a href="#">Women world</a> </div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- //Main Container -->

<script type="text/javascript" src="/home/js/themejs/toppanel.js"></script>
<div id="loader-wrapper">
	<div id="loader"></div>
	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>
 </div>
</div>
		
	</div>
</div>
	
				
				
			</div>
		</div>
	</div>
	<!-- //Main Container -->
	<!-- Block Spotlight3  -->
	
	<!-- //Block Spotlight3  -->
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
								<!-- 友情链接 -->
								<ul class="menu">
								@foreach($links as $k=>$v)
									<li><a href="{{ $v->href }}" target="_blank">{{ $v->name }}</a></li>
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
	<div class="link_area">
            <div class="container">
                <div class="row">
                    <div class="social_design on_right">
                        <ul>
                            <li>
                                <a class="facebook" target="_blank" href="/home/users">
                                    <span>
                                        <i class="fa fa-user"></i>
                                        <span class="social-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">个人中心</font></font></span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="twitter" target="_blank" href="/home/carts">
                                    <span>
                                        <i class="fa fa-cart-plus"></i>
                                        <span class="social-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的购物车</font></font></span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="google-plus" target="_blank" href="/home/usersgoods">
                                    <span>
                                        <i class="fa fa-heart"></i>
                                        <span class="social-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的收藏</font></font></span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="youtube" target="_blank" href="#youtube">
                                    <span>
                                        <i class="fa fa-bell"></i>
                                        <span class="social-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的消息</font></font></span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="pinterest" target="_blank" href="#pinterest">
                                    <span>
                                        <i class="fa fa-pencil"></i>
                                        <span class="social-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">反馈</font></font></span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="mail-to" target="_blank" href="/home/orders">
                                    <span>
                                        <i class="fa fa-pinterest"></i>
                                        <span class="social-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的订单</font></font></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<link rel='stylesheet' property='stylesheet'  href='/home/css/themecss/cpanel.css' type='text/css' media='all' />
	

	
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
			
			
		
