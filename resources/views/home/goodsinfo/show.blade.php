@extends('home.layout.index')


@section('main')
<link rel="stylesheet" type="text/css" href="/home/css/zzsc.css">


<script type="text/javascript" class="library" src="/home/js/zzsc.js"></script>
<script type="text/javascript">
	$('.vertical').removeClass('open');

</script>
<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Smartphone & Tablets</a></li>
			<li><a href="#">Bint Beef</a></li>
			
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-12">
				
				<div class="product-view row">
					<div class="left-content-product col-lg-10 col-xs-12">
						<div class="row">

							<div class="content-product-left class-honizol col-sm-6 col-xs-12 ">
								<div class="con-FangDa" id="fangdajing">
								  	<div class="con-fangDaIMg" id="small">
									  	<!-- 正常显示的图片-->
									  	<img src="{{ $goodsimage[0]->img }}">
									    <!-- 滑块-->  
									    <div class="magnifyingBegin"></div>
									
								    <!-- 放大镜显示的图片 -->
								    <div class="magnifyingShow"><img style="max-width:" src="{{ $goodsimage[0]->img }}"></div>
								  </div>
								  
								  <ul class="con-FangDa-ImgList">
								    <!-- 图片显示列表 -->
								    @foreach($goodsimage as $k=>$v)

								    @if($k == 0)
								    <li class="active"><img src="{{ $v->img }}" data-bigimg="{{ $v->img }}" style="width:50px;height:50px"></li>
								    @elseif($k <= 4)
								    <li><img src="{{ $v->img }}" data-bigimg="{{ $v->img }}" style="width:50px;height:50px"></li>
								    @endif
								    
								    @endforeach
								  </ul>
								</div>
								
							</div>
							<script type="text/javascript">

								$('.con-FangDa-ImgList li img').mouseover(function(){
									$('.con-FangDa-ImgList li').css('border', '');
									$(this).parent().css('border', '2px solid orange');
									var src = $(this).attr('src');
									$('.magnifyingShow img').attr('src', src);
									$('#small img').eq(0).attr('src', src);

									
									
								});
							</script>

							<div class="content-product-right col-sm-6 col-xs-12">
								<div class="title-product">
									<h1>{{ $goods->name }}</h1>
								</div>
								<!-- Review ---->
								<div class="box-review form-group">
									<div class="ratings">
										<div class="rating-box">
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										</div>
									</div>

									<a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 评论</a>	| 
									<a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
								</div>

								<div class="product-label form-group">
									<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
										<span class="price-new" itemprop="price">￥{{ $goodsinfo[0]->price }}</span>
										<span class="price-old">￥122.00</span>
									</div>
									<div class="stock"><span>库存:</span> <span class="stock-new" style="color:skyblue">{{ $goodsinfo[0]->stock }}</span></div>

								</div>
								

								<div class="product-box-desc">
									<div class="inner-box-desc">
										<div class="brand"><span>品牌:</span><a href="#">{{ $goods->brand }}</a>		</div>
										<div class="brand"><span>产地:</span><a href="#">{{ $goods->addr }}</a>		</div>
										<div class="model"><span>产品编号:</span> {{ $goodsinfo[0]->num }}</div>
										<div class="reward"><span>购买可得积分:</span> 100</div>

									</div>
								</div>


								<div id="product">
									<h4>可选版本&nbsp;:</h4><br>
									<div class="image_option_type form-group required">
										
										<ul class="product-options clearfix" id="">
											@foreach($goodsinfo as $k=>$v)
											<li class="radio">
												@if( $k == 0 )
												<label class="bor" style="border:1px solid #ddd; background:#ddd" >
												@else
												<label class="bor" style="border:1px solid #ddd" >
												@endif
													<input class="image_radio version" type="radio" name="" value="{{ $v->id }}"><span style="font-size: 13px">&nbsp;{{ $v->version }}&nbsp;</span>
													
												</label>
											</li>
											@if( $k == 0 )
											<span class="label label-success tag">√</span><br><br>
											@else
											<span class="label label-success tag" style="display: none">√</span><br><br>
											@endif
											@endforeach
											
										</ul>
									</div>

									
									
									<div class="form-group box-info-product">
										
											<div class="option quantity">
												<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
													<label>数量</label>
													<input class="form-control number" type="text" name="cnt"
													value="1" user_id="{{ session('user') }}" goodsinfo_id="{{ $goodsinfo[0]->id }}">
													<input type="hidden" name="product_id" value="50">
													<span class="input-group-addon product_quantity_down" style="background-color: #aaa">−</span>
													<span class="input-group-addon product_quantity_up" style="background-color: #aaa">+</span>
												</div>
											</div>
											<input type="hidden" class="goods_info_id" name="goods_info_id" value="{{ $goodsinfo[0]->id }}">
											

											<div class="cart" style="margin-left: 4px">
												
												<input type="submit" data-toggle="tooltip" title="" value="立即购买" data-loading-text="Loading..."  class="btn btn-mega btn-lg qujiesuan"  data-original-title="立即购买" style="color:#e5511d; background: #ffd9bc; border-color:#f0cab6">
												
											</div>
									<script type="text/javascript">

										$('.qujiesuan').click(function(){
											var id = [];
											var num = [];
											
											id.push($('.goods_info_id').val());
											num.push($('.number').val());										
											$.get('/home/ordersdata',{'goods_info_id':id, 'cnt':num},function(msg){
												msg = msg.trim();
												if (msg == 'success') {
													location.href = '/home/orders/create';
												} else {
													alert('订单提交失败');
												}
											},'html');	
										});
									</script>






										<div class="cart" style="margin-left: -5px">
											<input type="button"  value="添加到购物车"  id="button-cart" class="btn btn-mega btn-lg"  title="添加到购物车" style="background: red;">
										</div>
										
										<script type="text/javascript">
											$('#button-cart').click(function(){
												
												var number = $('.number').val();
												var user_id = $('.number').attr('user_id');
												var goodsinfo_id = $('.number').attr('goodsinfo_id');

												$.get('/home/cart/insert', {'number': number, 'user_id': user_id, 'goodsinfo_id': goodsinfo_id}, function(msg){
														if(msg == 'success') {
															showModal();
														}
													 
												}, 'html');
											});
											
										</script>
										
										<div class="add-to-links wish_comp">
											<ul class="blank list-inline">
												<li class="wishlist">
											@if(in_array($goods->id, $goodsid))
												
												<a href="javascript:;" title="添加到我的收藏" class="like" value="{{ $goods->id }}" style="display: none;">
									        	<i class="fa fa-heart"></i>
												</a>
												<a href="javascript:;" title="取消收藏" class="dislike" value="{{ $goods->id }}">
									        	<i class="fa fa-heart" style="color:#DA2723"></i>
												</a>
											@else
												
												<a href="javascript:;" title="添加到我的收藏" class="like" value="{{ $goods->id }}">
									        	<i class="fa fa-heart"></i>
												</a>
												<a href="javascript:;" title="取消收藏" class="dislike" style="display: none" value="{{ $goods->id }}">
									        	<i class="fa fa-heart" style="color:#DA2723"></i>
												</a>
											@endif
												</li>
												
											</ul>
										</div>

									</div>

									<script type="text/javascript">
									$('.like').click(function(){
										var that = $(this);
										
										var gid = $(this).attr('value');
										$.get('/home/goods/like/'+gid, {}, function(msg){

											if(msg == 'success') {
												that.next().css('display', '');
												that.css('display', 'none');
												
											} else {
												alert('收藏失败!');
											}
											
										}, 'html');

										
									});

									$('.dislike').click(function(){
										var that = $(this);
										
										var gid = $(this).attr('value');
										$.get('/home/goods/dislike/'+gid, {}, function(msg){

											if(msg == 'success') {
												that.prev().css('display', '');
												that.css('display', 'none');
												
											} else {
												alert('删除失败!');
											}
											
										}, 'html');

										
									});


								</script>

								

								
        
						        <div class='modal my-modal-alert' id='my-modal-alert'>
						            <div class='modal-dialog boxBodySmall' style="margin-top: 3px; margin-right: -345px">
						                <div class='modal-content' style="width:0px; height: 0px;">
						                    <div class="jGrowl-notification alert ui-state-highlight ui-corner-all success" style="display: block; margin-left: 0px; margin-top: 0px">
											
											<div class="jGrowl-header">添加到购物车成功</div>
											<div class="jGrowl-message">
											<img src="image/demo/shop/product/e11.jpg" alt=""><h3></h3><h3><span id="gname">{{ $goods->name }}</span> 添加到 <a href="/home/carts">我的购物车</a>!</h3>
									</div>
								</div>
						                    
						                    
						                </div>
						            </div>
						        </div>
						        <script>
						            var clearFlag = 0;
						            var count = 2;//设置3秒后自动消失
						            var showModal = function(){

						            	if(clearFlag == 0) {

						            		$("#my-modal-alert").fadeToggle();//显示模态框
						                
						                	
						                
						                	clearFlag = self.setInterval("autoClose()",1000);//每过一秒调用一次autoClose方法
						            	}
						                
						            }
						            
						            var autoClose = function(){
						                if(count>0){
						                    
						                    count--;
						                }else if(count<=0){
						                    window.clearInterval(clearFlag); 
						                    
						                    $("#my-modal-alert").fadeOut("slow");
						                    count = 2;
						                    clearFlag = 0;
						                }
						            }

						            
						        </script>

									<div class="tb-extra" id="J_tbExtra"><dl><dt></dt><dd data-spm-anchor-id="2013.1.iteminfo.i0.196f2ce92E3xta"><b>承诺&nbsp;:&nbsp;</b><a class="J_Cont " title="满足7天无理由退换货申请的前提下，包邮商品需要买家承担退货邮费，非包邮商品需要买家承担发货和退货邮费。" href="#" target="_blank"><img src="/home/image/buy/T1EQA5FpVgXXceOP_X-16-16.jpg">7天无理由</a><a href="//ju.mmstat.com/?url=http://www.taobao.com/go/act/baoxian/yunfeixian.php?jlogid=p161456457c0a0" target="_blank"><img src="/home/image/buy/TB1XMnjQFXXXXXYXFXXXXXXXXXX-16-16.png" srcset="/home/image/buy/TB1oOuTQFXXXXazapXXXXXXXXXX-32-32.png 2x">运费险</a></dd></dl><dl><dt></dt><dd><b>支付&nbsp;:&nbsp;</b><a href="//payservice.alipay.com/intro/index.htm?c=hb" target="_blank"><img src="/home/image/buy/TB1KTHfQFXXXXbnXFXXXXXXXXXX-16-16.png" srcset="/home/image/buy/TB1XeDvQFXXXXc5XXXXXXXXXXXX-32-32.png 2x">蚂蚁花呗</a><a href="//payservice.alipay.com/intro/index.htm?c=xyk" target="_blank"><img src="/home/image/buy/htaccess.png" srcset="/home/image/buy/htaccess.png">信用卡支付</a><a href="//jf.alipay.com" target="_blank"><img src="/home/image/buy/TB1dvGWQFXXXXcFaXXXXXXXXXXX-16-16.png" srcset="/home/image/buy/TB1FdDlQFXXXXa5XpXXXXXXXXXX-32-32.png 2x">集分宝</a></dd></dl>
    
									</div>

								</div>
								<!-- end box info product -->

							</div>
						</div>
					</div>
					
					<section class="col-lg-2 hidden-sm hidden-md hidden-xs slider-products">
						<div class="module col-sm-12 four-block">
							<div class="modcontent clearfix">
								<div class="policy-detail">
									<div class="banner-policy">
										<div class="policy policy1">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	7 天
											<br> 无条件退款 </a>
										</div>
										<div class="policy policy2">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	店内交换 </a>
										</div>
										<div class="policy policy3">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	最低价格保证 </a>
										</div>
										<div class="policy policy4">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	购物保证 </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				
				<!-- Product Tabs -->
				<div class="producttab ">
	<div class="tabsslider  vertical-tabs col-xs-12">
		<ul class="nav nav-tabs col-lg-2 col-sm-3">
			<li class="active"><a data-toggle="tab" href="#tab-1">描述</a></li>
			<li class="item_nonactive"><a data-toggle="tab" href="#tab-review">评论</a></li>
			
		</ul>
		<div class="tab-content col-lg-10 col-sm-9 col-xs-12">
			<div id="tab-1" class="tab-pane fade active in">
				<p>{{ $goodsinfo[0]->content }}</p>
				@foreach( $goodsinfo[0]->getGoodsImage as $k=>$v )
					@if( $v->status == 2 )
						<img src="{{$v->img}}" style="width:932px">
					@endif
				@endforeach
			</div>
			<div id="tab-review" class="tab-pane fade">
				<form>
					<div id="review">
						<table class="table table-striped table-bordered">
							<tbody>
								<tr>
									<td style="width: 50%;"><strong>Super Administrator</strong></td>
									<td class="text-right">29/07/2015</td>
								</tr>
								<tr>
									<td colspan="2">
										<p>Best this product opencart</p>
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="text-right"></div>
					</div>
					<h2 id="review-title">Write a review</h2>
					<div class="contacts-form">
						<div class="form-group"> <span class="icon icon-user"></span>
							<input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}"> 
						</div>
						<div class="form-group"> <span class="icon icon-bubbles-2"></span>
							<textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
						</div> 
						<span style="font-size: 11px;"><span class="text-danger">Note:</span>						HTML is not translated!</span>
						
						<div class="form-group">
						 <b>Rating</b> <span>Bad</span>&nbsp;
						<input type="radio" name="rating" value="1"> &nbsp;
						<input type="radio" name="rating"
						value="2"> &nbsp;
						<input type="radio" name="rating"
						value="3"> &nbsp;
						<input type="radio" name="rating"
						value="4"> &nbsp;
						<input type="radio" name="rating"
						value="5"> &nbsp;<span>Good</span>
						
						</div>
						<div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
					</div>
				</form>
			</div>
			<div id="tab-4" class="tab-pane fade">
				<a href="#">Monitor</a>,
				<a href="#">Apple</a>				
			</div>
			<div id="tab-5" class="tab-pane fade">
				<p>Lorem ipsum dolor sit amet, consetetur
					sadipscing elitr, sed diam nonumy eirmod
					tempor invidunt ut labore et dolore
					magna aliquyam erat, sed diam voluptua.
					At vero eos et accusam et justo duo
					dolores et ea rebum. Stet clita kasd
					gubergren, no sea takimata sanctus est
					Lorem ipsum dolor sit amet. Lorem ipsum
					dolor sit amet, consetetur sadipscing
					elitr, sed diam nonumy eirmod tempor
					invidunt ut labore et dolore magna aliquyam
					erat, sed diam voluptua. </p>
				<p>At vero eos et accusam et justo duo dolores
					et ea rebum. Stet clita kasd gubergren,
					no sea takimata sanctus est Lorem ipsum
					dolor sit amet. Lorem ipsum dolor sit
					amet, consetetur sadipscing elitr.</p>
				<p>Sed diam nonumy eirmod tempor invidunt
					ut labore et dolore magna aliquyam erat,
					sed diam voluptua. At vero eos et accusam
					et justo duo dolores et ea rebum. Stet
					clita kasd gubergren, no sea takimata
					sanctus est Lorem ipsum dolor sit amet.</p>
			</div>
		</div>
	</div>
</div>
				<!-- //Product Tabs -->
				
				<!-- Related Products -->
				<div class="related titleLine products-list grid module ">
	<h3 class="modtitle">Related Products  </h3>
	<div class="releate-products ">
		<div class="product-layout">
			<div class="product-item-container">
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="image/demo/shop/product/e11.jpg"  title="Apple Cinema 30&quot;" class="img-responsive" />
						<img  src="image/demo/shop/product/e12.jpg"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />
					</div>
					<!--Sale Label-->
					<span class="label label-sale">Sale</span>
					<!--full quick view block-->
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
					<!--end full quick view block-->
				</div>
				
				
				<div class="right-block">
					<div class="caption">
						<h4><a href="product.html">Apple Cinema 30&quot;</a></h4>		
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
							<span class="price-new">$74.00</span> 
							<span class="price-old">$122.00</span>		 
							<span class="label label-percent">-40%</span>    
						</div>
						<div class="description item-desc hidden">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
						</div>
					</div>
					
					  <div class="button-group">
						<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
						<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
						<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
					  </div>
				</div><!-- right block -->

			</div>
		</div>
		<div class="product-layout ">
			<div class="product-item-container">
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="image/demo/shop/product/11.jpg"  title="Apple Cinema 30&quot;" class="img-responsive" />
						<img  src="image/demo/shop/product/10.jpg"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />
						
					</div>
					<!--Sale Label-->
					<span class="label label-sale">Sale</span>
					<!--full quick view block-->
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
					<!--end full quick view block-->
				</div>
				
				
				<div class="right-block">
					<div class="caption">
						<h4><a href="product.html">Apple Cinema 30&quot;</a></h4>		
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
							<span class="price-new">$74.00</span> 
							<span class="price-old">$122.00</span>		 
							<span class="label label-percent">-40%</span>    
						</div>
						<div class="description item-desc hidden">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
						</div>
					</div>
					
					  <div class="button-group">
						<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
						<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
						<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
					  </div>
				</div><!-- right block -->

			</div>
		</div>
		<div class="product-layout ">
			<div class="product-item-container">
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="image/demo/shop/product/35.jpg"  title="Apple Cinema 30&quot;" class="img-responsive" />
						<img  src="image/demo/shop/product/34.jpg"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />
					</div>
					<!--Sale Label-->
					<span class="label label-sale">Sale</span>
					<!--full quick view block-->
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
					<!--end full quick view block-->
				</div>
				
				
				<div class="right-block">
					<div class="caption">
						<h4><a href="product.html">Apple Cinema 30&quot;</a></h4>		
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
							<span class="price-new">$74.00</span> 
							<span class="price-old">$122.00</span>		 
							<span class="label label-percent">-40%</span>    
						</div>
						<div class="description item-desc hidden">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
						</div>
					</div>
					
					  <div class="button-group">
						<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
						<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
						<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
					  </div>
				</div><!-- right block -->

			</div>
		</div>
		<div class="product-layout ">
			<div class="product-item-container">
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="image/demo/shop/product/14.jpg"  title="Apple Cinema 30&quot;" class="img-responsive" />
						<img  src="image/demo/shop/product/15.jpg"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />
					</div>
					<!--Sale Label-->
					<span class="label label-sale">Sale</span>
					<!--full quick view block-->
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="#">  Quickview</a>
					<!--end full quick view block-->
				</div>
				
				
				<div class="right-block">
					<div class="caption">
						<h4><a href="product.html">Apple Cinema 30&quot;</a></h4>		
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
							<span class="price-new">$74.00</span> 
							<span class="price-old">$122.00</span>		 
							<span class="label label-percent">-40%</span>    
						</div>
						<div class="description item-desc hidden">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
						</div>
					</div>
					
					  <div class="button-group">
						<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
						<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
						<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
					  </div>
				</div><!-- right block -->

			</div>
		</div>
	</div>
</div>

			<!-- end Related  Products-->
			
				
			</div>
			
			
		</div>
		<!--Middle Part End-->
	</div>
	<!-- //Main Container -->

<script type="text/javascript">
	$('.version').click(function(){

					$('.bor').css('background', '');
					$('.tag').css('display', 'none');
					$(this).parent().css('background', '#ddd');
					$(this).parent().parent().next().css('display', '');

					$('.con-FangDa-ImgList li').css('border', '');
					$('.con-FangDa-ImgList li').eq(0).css('border', '2px solid orange');
		

		$.get('/home/getgoodsinfo', {'id':$(this).val()}, function(data){
	
				$.each(data.goodsimage, function(k, v){

						if(k == 0) {
							$('.con-FangDa-ImgList li img').eq(0).attr({'src':v.img, 'data-bigimg':v.img});
							$('.con-FangDa-ImgList li').removeClass('active');
							$('.con-FangDa-ImgList li').eq(0).addClass('active');
							
						} else if(k <= 4) {
							$('.con-FangDa-ImgList li img').eq(k).attr({'src':v.img, 'data-bigimg':v.img});
						}

					});
				$('.goods_info_id').val(data.goodsinfo.id);
				$('#small img').eq(0).attr('src', (data.goodsimage)[0].img);
				$('.magnifyingShow img').eq(0).attr('src', (data.goodsimage)[0].img);


				$('.price-new').html('￥' + data.goodsinfo.price);
				$('.stock-new').html(data.goodsinfo.stock);
				$('.model').html('<span>产品编号:</span>&nbsp;' + data.goodsinfo.num);
				$('.number').attr('goodsinfo_id', data.goodsinfo.id);
				
				var str = '<p>'+data.goodsinfo.content+'</p>';
				
				$.each(data.goodsimage2, function(k, v){
					str += '<img src="'+v.img+'" style="width:932px">';
				});

				$('#tab-1').html(str);

			}, 'json');

			
		
	});
		
		
</script>
	
@endsection


