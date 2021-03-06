
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
	<link href="/home/css/style.css" rel="stylesheet">
	<link href="/home/css/shortcodes.css" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="/home/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="/home/css/themecss/so-categories.css" rel="stylesheet">
	<link href="/home/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link id="color_scheme" href="/home/css/theme.css" rel="stylesheet">
	<link href="/home/css/responsive.css" rel="stylesheet">	


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
												我的订单							
											</div>
										</div>
									</div>
								</div>
								<div class="navbar-header">
									<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">
										
									</button>
									All Categories		
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
							
							<li class="">
								<p class="close-menu"></p>
								<a href="/home/index" class="clearfix">
									<strong>首页</strong>
									<span class="label"></span>
								</a>
							</li>
							
							<li class="hidden-md">
								<p class="close-menu"></p>
								<a href="#" class="clearfix">
									<strong>个人信息</strong>
									
								</a>
							</li>


							<li class="with-sub-menu hover hidden">
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


     
	<section class="flat-checkout">
			<div class="container">
				<div class="row">
					<div class="col-md-12 cart-totals style2">
						<div>
							<h3>我的订单</h3>
								<form action="/home/orders" method="post" accept-charset="utf-8" name="order_create">
									 {{ csrf_field() }}

									
									<table class="product table">
										<thead>
											<tr>
												<th class="text-left">商品</th>
												<th class="text-left">单价</th>
												<th class="text-left">个数</th>
												<th>总价</th>
											</tr>
										</thead>
										
										<tbody>
										@foreach($goods_info as $k=>$v)
											<tr>
												<td>
												
													<img src="/uploads/goods/{{ $v->goods->pic }}" alt="sdsd" style="height: 150px;">
													
													<span>
														{{ $v->goods->name }}
													</span>
												</td>
												<td>
													{{ $v->price }}
												</td>
												<td>
													{{ $v->cnt }}
												</td>
												<td class="datasum">
													{{ $v->cnt * $v->price }}
												</td>
											</tr>										
										</tbody>
										@endforeach
									</table><!-- /.product -->
									

									<table>
										<tbody>
											<tr>
												<td>总价</td>
												<td class="subtotal" colspan="3">
													<div class="pull-right">
														￥{{ $datasum }}
													</div>
												</td>
												<input type="hidden" name="sum" value="{{ $datasum }}">
											</tr>
											<tr>
												<td>运费</td>
												<td>
													<div class="pull-right">
														<span style="font-size:18px;color: #8c8c8c;">免运费</span>
													</div>
													
												</td><!-- /.btn-radio -->
											</tr>
											<tr>
												<td>总计</td>
												<td class="price-total">

													￥{{ $datasum }}
											
												</td>
											</tr>
										</tbody>
									</table>

									<div class="pull-left" style="margin: 5px 0px; padding: 0px;">
											<span style="font-size: 16px;">收货地址 :</span>
									</div>
									<div class="pull-left col-md-8">
										
											<select name="user_addr_id" id="addr_id" style="border: 1px solid rgba(7,17,27,0.1); height: 25px; margin: 5px 0px; padding: 0px 5px;">
												@foreach($useraddr as $kk=>$vv  )
													<option value="{{ $vv->id }}">
														<span style="font-size: 12px; margin-left: 20px; margin:0px; padding: 0px;">{{ $vv->name }}  </span>
														<span style="font-size: 12px; margin-left: 20px; margin:0px; padding: 0px;">{{ $vv->phone }} </span>
														<span style="font-size: 12px; margin-left: 20px; margin:0px; padding: 0px;">{{ $vv->addr }} </span>
													</option>
												@endforeach
											</select>

										</div>

										<!-- Button trigger modal -->
										<div class="pull-left">
											<a type="button" class="btn btn-warning btn-sm" style="border-Radius: 5px; margin-left: 30px;" data-toggle="modal" data-target="#myModal">
											添加收货地址
											</a>	  
										</div>
										

										<!-- Modal -->
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										        <h4 class="modal-title" id="myModalLabel">添加新地址</h4>
										      </div>
										      <div class="modal-body">



													
														<section class="flat-checkout">
															<div class="container">
																<div class="row">
																	<div class="col-md-12">
																		<div class="box-checkout">
																				<div class="billing-fields">
																					<div class="fields-content">
																						<div class="field-row">
																							<label for="company-name">收货人姓名</label>
																							<input type="text" id="addr_name" name="name" value="" placeholder="只能输入中文和英文">
																							<span id="name_info" style="font-size: 8px;  margin:0px; padding: 0px; color: red;"></span>
																						</div>
																						<div class="field-row">
																							<label for="company-name">收货人电话</label>
																							<input type="text" id="addr_phone" name="phone" value="">
																							<span id="phone_info" style="font-size: 8px;  margin:0px; padding: 0px; color: red;"></span>
																						</div>
																						<div class="field-row">
																							<label for="company-name">收货人地址</label>
																							<input type="text" id="addr_addr" name="addr" value="">
																							<span id="addr_info" style="font-size: 8px;  margin:0px; padding: 0px; color: red;"></span>
																						</div>
																						
																					</div><!-- /.fields-content -->
																				</div><!-- /.billing-fields -->
																			<!-- /.checkout -->
																		</div><!-- /.box-checkout -->
																	</div><!-- /.col-md-12 -->
																</div><!-- /.row -->
															</div><!-- /.container -->
														</section><!-- /.flat-checkout -->

													

 
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-default btn-sm" id="close" style="width: 80px;" data-dismiss="modal">关闭</button>
										        <button type="button" class="btn btn-success btn-sm" style="width: 80px;" id="saveinfo">保存</button>
										      </div>
										    </div>
										  </div>
										</div>
									
									<script type="text/javascript">

											var isNAME, isPHONE, isADDR = false;
											$('#addr_name').blur(function() {

												var username = /^[\u4E00-\u9FA5A-Za-z0-9]+$/;

												if (username.test($('#addr_name').val())) {

													$("#name_info").text("");
													isNAME = true;
												} else {
													$("#name_info").text("请输入收货人名称：由中文、英文、数字组成");
												}
												
											}).focus(function(){

												$("#name_info").text("");

											});
											$('#addr_phone').blur(function() {

												var userphone = /^1{1}[3456789]{1}[\d]{9}$/;

												if (userphone.test($('#addr_phone').val())) {

													$("#phone_info").text("");
													isPHONE = true;

												} else {

													$("#phone_info").text("请输入11位手机号码：由11位数字组成");

												}
												
											}).focus(function(){

												$("#phone_info").text("");

											});
											$('#addr_addr').blur(function() {

												var useraddr = /^[\u4E00-\u9FA5A-Za-z0-9]+$/;

												if (useraddr.test($('#addr_addr').val())) {

													$("#addr_info").text("");
													isADDR = true;

												} else {
													$("#addr_info").text("请输入收货地址:由中文、数字及英文组成");
												}
												
											}).focus(function(){

												$("#addr_info").text("");

											});

											$('#saveinfo').click(function(){
																					
										        if(confirm('您确定要保存吗?')) {

									        		if (isADDR == true && isPHONE == true && isADDR ==true) {

									        			$.get('/home/createaddr', {'name':$('#addr_name').val(),'phone':$('#addr_phone').val(),'addr':$('#addr_addr').val()},function(msg){
									        				var data = msg.success.trim();
									        				if (data == 'success') {
																alert('添加成功');
																var name = $('#addr_name').val();
																var phone = $('#addr_phone').val();
																var addr = $('#addr_addr').val();
																var str = '<option value="'+msg.id+'" selected><span style="font-size: 12px; padding-left: 20px;">'+name+'</span><span style="font-size: 12px; padding-left: 20px;">&nbsp;&nbsp;&nbsp;'+phone+'</span><span style="font-size: 12px; padding-left: 20px;">&nbsp;&nbsp;&nbsp;'+addr+'</span></option>';
																$('#addr_id').append(str);
															} else {	
																alert('添加失败');
															}
									        			}, 'json');
									        		}else {	
														alert('信息不全,请完善信息');
													}					
										        }
										        
										    });

									
									</script>


								</div><!-- /.checkbox -->
								<div class="btn-radio style2">
									<div class="pull-left">
										<label for="flat-payment"><span style="font-size: 16px; margin-right: 10px;">支付方式</span></label>
									</div>
									<div class="radio-info pull-left">
										<input type="radio" id="flat-payment" checked name="ka">
										<label for="flat-payment">银行卡</label>
									</div>
									<div class="radio-info pull-left">
										<input type="radio" id="bank-transfer" name="zhi">
										<label for="bank-transfer">支付宝</label>
									</div>
									<div class="radio-info pull-left">
										<input type="radio" id="cash-delivery" name="wei">
										<label for="cash-delivery">微信</label>
									</div>
									<div class="radio-info pull-left">
										<input type="radio" id="paypal" name="huodao">
										<label for="paypal">货到付款</label>
									</div>
									<div class="field-row">
										<label for="msg" style="font-size: 14px;">留言:</label>
										<input type="text" id="company-name" name="msg" placeholder="留言大大">
									</div>
								</div><!-- /.btn-radio style2 -->

								<div class="checkbox text-center">
									<input type="checkbox" id="checked-order" name="checked-order" checked>
									<label for="checked-order">我已阅读并接受条款和条件*</label>
								</div><!-- /.checkbox -->
								<div class="btn-order">	
										<input type="submit" value="提交订单" style="width: 100%; background-color: red; color: #fff;"> 
								</div><!-- /.btn-order -->
							</form>
						</div><!-- /.cart-totals style2 -->
					</div><!-- /.col-md-5 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-checkout -->


















			
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
	
	
</body>
</html>

