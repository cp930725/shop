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
	<link id="color_scheme" href="/home/css/theme.css" rel="stylesheet">
	<link href="/home/css/responsive.css" rel="stylesheet">
	

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
							<li> <a href="/home/concerns"><span class="fa fa-heart"></span>我的关注</a></li>
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
				<a href="index.html"><img src="/home/image/demo/logos/theme_logo.png" title="Your Store" alt="Your Store" /></a>
			</div>
			<!-- //end Logo -->

			<!-- Search -->
			<div id="sosearchpro" class="col-sm-7 search-pro">
				<form method="GET" action="index.html">
					<div id="search0" class="search input-group">
						<div class="select_category filter_type icon-select">
							<select class="no-border" name="category_id">
								<option value="0">All Categories</option>
								<option value="78">Apparel</option>
								<option value="77">Cables &amp; Connectors</option>
								<option value="82">Cameras &amp; Photo</option>
								<option value="80">Flashlights &amp; Lamps</option>
								<option value="81">Mobile Accessories</option>
								<option value="79">Video Games</option>
								<option value="20">Jewelry &amp; Watches</option>
								<option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
								<option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
								<option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
							</select>
						</div>

						<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
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
				<div id="cart" class=" btn-group btn-shopping-cart">
					<a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
						<div class="shopcart">
							<span class="handle pull-left"></span>
							<span class="title">My cart</span>
							<p class="text-shopping-cart cart-total-full">2 item(s) - $1,262.00 </p>
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
							
							<div class="container-megamenu vertical">
								<div id="menuHeading">
									<div class="megamenuToogle-wrapper">
										<div class="megamenuToogle-pattern">
											<div class="container">
												<div>
													<span></span>
													<span></span>
													<span></span>
												</div>
												All Categories							
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
												<li class="item-vertical style1 with-sub-menu hover">
													<p class="close-menu"></p>
													<a href="#" class="clearfix">
														<img src="/home/image/theme/icons/9.png" alt="icon">
														<span>Automotive &amp; Motocrycle</span>
														<b class="caret"></b>
													</a>
													<div class="sub-menu" data-subwidth="100" >
														<div class="content" >
															<div class="row">
																<div class="col-sm-12">
																	<div class="row">
																		<div class="col-md-4 static-menu">
																			<div class="menu">
																				<ul>
																					<li>
																						<a href="#"  class="main-menu">Apparel</a>
																						<ul>
																							<li><a href="#" >Accessories for Tablet PC</a></li>
																							<li><a href="#" >Accessories for i Pad</a></li>
																							<li><a  href="#" >Accessories for iPhone</a></li>
																							<li><a href="#" >Bags, Holiday Supplies</a></li>
																							<li><a href="#" >Car Alarms and Security</a></li>
																							<li><a href="#" >Car Audio &amp; Speakers</a></li>
																						</ul>
																					</li>
																					<li>
																						<a href="#"  class="main-menu">Cables &amp; Connectors</a>
																						<ul>
																							<li><a href="#" >Cameras &amp; Photo</a></li>
																							<li><a href="#" >Electronics</a></li>
																							<li><a href="#" >Outdoor &amp; Traveling</a></li>
																						</ul>
																					</li>
																				</ul>
																			</div>
																		</div>
																		<div class="col-md-4 static-menu">
																			<div class="menu">
																				<ul>
																					<li>
																						<a href="#"  class="main-menu">Camping &amp; Hiking</a>
																						<ul>
																							<li><a href="#" >Earings</a></li>
																							<li><a href="#" >Shaving &amp; Hair Removal</a></li>
																							<li><a href="#" >Salon &amp; Spa Equipment</a></li>
																						</ul>
																					</li>
																					<li>
																						<a href="#" class="main-menu">Smartphone &amp; Tablets</a>
																						<ul>
																							<li><a href="#" >Sports &amp; Outdoors</a></li>
																							<li><a href="#" >Bath &amp; Body</a></li>
																							<li><a href="#" >Gadgets &amp; Auto Parts</a></li>
																						</ul>
																					</li>
																				</ul>
																			</div>
																		</div>
																		<div class="col-md-4 static-menu">
																			<div class="menu">
																				<ul>
																					<li>
																						<a href="#"  class="main-menu">Bags, Holiday Supplies</a>
																						<ul>
																							<li><a href="#" onclick="window.location = '18_46';">Battereries &amp; Chargers</a></li>
																							<li><a href="#" onclick="window.location = '24_64';">Bath &amp; Body</a></li>
																							<li><a href="#" onclick="window.location = '18_45';">Headphones, Headsets</a></li>
																							<li><a href="#" onclick="window.location = '18_30';">Home Audio</a></li>
																						</ul>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li class="item-vertical">
													<p class="close-menu"></p>
													<a href="#" class="clearfix">
														<img src="/home/image/theme/icons/10.png" alt="icon">
														<span>Electronic</span>
														
													</a>
												</li>
												<li class="item-vertical with-sub-menu hover">
													<p class="close-menu"></p>
													<a href="#" class="clearfix">
														<span class="label"></span>
														<img src="/home/image/theme/icons/3.png" alt="icon">
														<span>Sports &amp; Outdoors</span>
														<b class="caret"></b>
													</a>
													<div class="sub-menu" data-subwidth="60" >
														<div class="content">
															<div class="row">
																<div class="col-md-6">
																	<div class="row">
																		<div class="col-md-12 static-menu">
																			<div class="menu">
																				<ul>
																					<li>
																						<a href="#" onclick="window.location = '81';" class="main-menu">Mobile Accessories</a>
																						<ul>
																							<li><a href="#" onclick="window.location = '33_63';">Gadgets &amp; Auto Parts</a></li>
																							<li><a href="#" onclick="window.location = '24_64';">Bath &amp; Body</a></li>
																							<li><a href="#" onclick="window.location = '17';">Bags, Holiday Supplies</a></li>
																						</ul>
																					</li>
																					<li>
																						<a href="#" onclick="window.location = '18_46';" class="main-menu">Battereries &amp; Chargers</a>
																						<ul>
																							<li><a href="#" onclick="window.location = '25_28';">Outdoor &amp; Traveling</a></li>
																							<li><a href="#" onclick="window.location = '80';">Flashlights &amp; Lamps</a></li>
																							<li><a href="#" onclick="window.location = '24_66';">Fragrances</a></li>
																						</ul>
																					</li>
																					<li>
																						<a href="#" onclick="window.location = '25_31';" class="main-menu">Fishing</a>
																						<ul>
																							<li><a href="#" onclick="window.location = '57_73';">FPV System &amp; Parts</a></li>
																							<li><a href="#" onclick="window.location = '18';">Electronics</a></li>
																							<li><a href="#" onclick="window.location = '20_76';">Earings</a></li>
																							<li><a href="#" onclick="window.location = '33_60';">More Car Accessories</a></li>
																						</ul>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="row banner">
																		<a href="#">
																			<img src="/home/image/demo/cms/menu_bg2.jpg" alt="banner1">
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="item-vertical with-sub-menu hover">
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<img src="/home/image/theme/icons/2.png" alt="icon">
															<span>Health &amp; Beauty</span>
															<b class="caret"></b>
														</a>
														<div class="sub-menu" data-subwidth="100" >
															<div class="content" >
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col-md-4 static-menu">
																				<div class="menu">
																					<ul>
																						<li>
																							<a href="#" class="main-menu">Car Alarms and Security</a>
																							<ul>
																								<li><a href="#" >Car Audio &amp; Speakers</a></li>
																								<li><a href="#" >Gadgets &amp; Auto Parts</a></li>
																								<li><a href="#" >Gadgets &amp; Auto Parts</a></li>
																								<li><a href="#" >Headphones, Headsets</a></li>
																							</ul>
																						</li>
																						<li>
																							<a href="" onclick="window.location = '24';" class="main-menu">Health &amp; Beauty</a>
																							<ul>
																								<li>
																									<a href="#" >Home Audio</a>
																								</li>
																								<li>
																									<a href="#" >Helicopters &amp; Parts</a>
																								</li>
																								<li>
																									<a href="#" >Outdoor &amp; Traveling</a>
																								</li>
																								<li>
																									<a href="#">Toys &amp; Hobbies</a>
																								</li>
																							</ul>
																						</li>
																					</ul>
																				</div>
																			</div>
																			<div class="col-md-4 static-menu">
																				<div class="menu">
																					<ul>
																						<li>
																							<a href="#"  class="main-menu">Electronics</a>
																							<ul>
																								<li>
																									<a href="#">Earings</a>
																								</li>
																								<li>
																									<a href="#" >Salon &amp; Spa Equipment</a>
																								</li>
																								<li>
																									<a href="#" >Shaving &amp; Hair Removal</a>
																								</li>
																								<li>
																									<a href="#">Smartphone &amp; Tablets</a>
																								</li>
																							</ul>
																						</li>
																						<li>
																							<a href="#"  class="main-menu">Sports &amp; Outdoors</a>
																							<ul>
																								<li>
																									<a href="#" >Flashlights &amp; Lamps</a>
																								</li>
																								<li>
																									<a href="#" >Fragrances</a>
																								</li>
																								<li>
																									<a href="#" >Fishing</a>
																								</li>
																								<li>
																									<a href="#" >FPV System &amp; Parts</a>
																								</li>
																							</ul>
																						</li>
																					</ul>
																				</div>
																			</div>
																			<div class="col-md-4 static-menu">
																				<div class="menu">
																					<ul>
																						<li>
																							<a href="#" class="main-menu">More Car Accessories</a>
																							<ul>
																								<li>
																									<a href="#" >Lighter &amp; Cigar Supplies</a>
																								</li>
																								<li>
																									<a href="#" >Mp3 Players &amp; Accessories</a>
																								</li>
																								<li>
																									<a href="#" >Men Watches</a>
																								</li>
																								<li>
																									<a href="#" >Mobile Accessories</a>
																								</li>
																							</ul>
																						</li>
																						<li>
																							<a href="#" class="main-menu">Gadgets &amp; Auto Parts</a>
																							<ul>
																								<li>
																									<a href="#" >Gift &amp; Lifestyle Gadgets</a>
																								</li>
																								<li>
																									<a href="#" >Gift for Man</a>
																								</li>
																								<li>
																									<a href="#" >Gift for Woman</a>
																								</li>
																								<li>
																									<a href="#" >Gift for Woman</a>
																								</li>
																							</ul>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="item-vertical css-menu with-sub-menu hover">
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															
															<img src="/home/image/theme/icons/2.png" alt="icon">
															<span>Smartphone &amp; Tablets</span>
															<b class="caret"></b>
														</a>
														<div class="sub-menu" data-subwidth="30" style="width: 270px; display: none; right: 0px;">
															<div class="content" style="display: none;">
																<div class="row">
																	<div class="col-sm-12">
																		<div class="row">
																			<div class="col-sm-12 hover-menu">
																				<div class="menu">
																					<ul>
																						<li>
																							<a href="#" class="main-menu">Headphones, Headsets</a>
																						</li>
																						<li>
																							<a href="#" class="main-menu">Home Audio</a>
																						</li>
																						<li>
																							<a href="#" class="main-menu">Health &amp; Beauty</a>
																						</li>
																						<li>
																							<a href="#" class="main-menu">Helicopters &amp; Parts</a>
																						</li>
																						<li>
																							<a href="#" class="main-menu">Helicopters &amp; Parts</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="item-vertical">
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<img src="/home/image/theme/icons/11.png" alt="icon">
															<span>Flashlights &amp; Lamps</span>
															
														</a>
													</li>
													<li class="item-vertical">
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<img src="/home/image/theme/icons/4.png" alt="icon">
															<span>Camera &amp; Photo</span>
														</a>
													</li>
													<li class="item-vertical">
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<img src="/home/image/theme/icons/5.png" alt="icon">
															<span>Smartphone &amp; Tablets</span>
														</a>
													</li>
													<li class="item-vertical" >
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<img src="/home/image/theme/icons/7.png" alt="icon">
															<span>Outdoor &amp; Traveling Supplies</span>
														</a>
													</li>
													<li class="item-vertical" style="display: none;">
														<p class="close-menu"></p>
														
														<a href="#" class="clearfix">
															<img src="/home/image/theme/icons/6.png" alt="icon">
															<span>Health &amp; Beauty</span>
														</a>
													</li>
													<li class="item-vertical" >
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<img src="/home/image/theme/icons/8.png" alt="icon">
															<span>Toys &amp; Hobbies </span>
														</a>
													</li>
													<li class="item-vertical" >
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<img src="/home/image/theme/icons/12.png" alt="icon">
															<span>Jewelry &amp; Watches</span>
														</a>
													</li>
													<li class="item-vertical" >
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<img src="/home/image/theme/icons/13.png" alt="icon">
															<span>Bags, Holiday Supplies</span>
														</a>
													</li>
													<li class="item-vertical" >
														<p class="close-menu"></p>
														
														<a href="#" class="clearfix">
															<img src="/home/image/theme/icons/13.png" alt="icon">
															<span>More Car Accessories</span>
														</a>
													</li>
													<li class="loadmore">
														<i class="fa fa-plus-square-o"></i>
														<span class="more-view">More Categories</span>
													</li>
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
								
								<a href="index.html">Home <b class="caret"></b></a>
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
									<strong>Features</strong>
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
									<strong>Pages</strong>
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
									<strong>Categories</strong>
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
									<strong>Accessories</strong>
									
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
									<strong>Blog</strong>
									<span class="label"></span>
								</a>
							</li>
							
							<li class="hidden-md">
								<p class="close-menu"></p>
								<a href="#" class="clearfix">
									<strong>Buy Theme!</strong>
									
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
	@section('main')
	@show
			
			
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
<div id="loader-wrapper">
	<div id="loader"></div>
	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>
 </div>
<!-- End Preloading Screen -->
	
<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="/home/js/jquery-2.2.4.min.js"></script>
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
<script type="text/javascript" src="/home/js/themejs/toppanel.js"></script>
<script type="text/javascript" src="/home/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="/home/js/themejs/addtocart.js"></script>	
<script type="text/javascript" src="/home/js/themejs/cpanel.js"></script>
</body>
</html>

