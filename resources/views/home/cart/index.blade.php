@include('home.layout.header')



<link rel="stylesheet" type="text/css" href="/home/css/zzsc.css">


<script type="text/javascript" class="library" src="/home/js/zzsc.js"></script>
<script type="text/javascript">
	$('.vertical').removeClass('open');
	
</script>

<link href='/home/css/jd-mycart.css' type="text/css"  rel="stylesheet">        

<style type="text/css">.fixed-bottom{position:fixed;bottom:0px;z-index:999}</style><style type="text/css">.jdm-toolbar .jdm-toolbar-footer .jdm-tbar-tab-survey .tab-ico {display: none;_display:none;}.jdm-toolbar .jdm-toolbar-footer .jdm-tbar-tab-survey .tab-text {left: 0px;width: 35px;height:30px;padding:2px 0 3px;line-height: 15px;background: #c81623;_display:block;</style></head>
<body>

<div id="o-header-2013"><div id="header-2013" style="display:none;"></div></div>



<!-- main -->
<div id="container" class="cart">
			<div class="w">
			<div id="chunjie" class="mb10"></div>
<div class="cart-filter-bar">
	<ul class="switch-cart">
		<li class="switch-cart-item">
			<a href="http://cart.jd.com/cart.action#none">
				<em>全部商品</em>
				<span class="number">1</span>
			</a>
		</li>
		            
			</ul>
	<div class="cart-store">
		<input id="hiddenLocationId" type="hidden">
		<input id="hiddenLocation" type="hidden">
		
		
	</div>
	<div class="clr"></div>
	
	<div class="tab-con" style="display: none;"></div>
	<div class="tab-con hide ui-switchable-panel-selected" style="display: block;"></div>
</div>		</div>
		<div class="cart-warp">
			<div class="w">	
				<div id="jd-cart">
	<div class="cart-main cart-main-new">
		<div class="cart-thead">
			<div class="column t-checkbox">
				<div class="cart-checkbox">
					<input type="checkbox"  id="toggle-checkboxes_up" name="toggle-checkboxes" class="jdcheckbox goodsche" clstag="clickcart|keycount|xincart|cart_allCheck">
					<label class="checked" for="">勾选全部商品</label>
				</div>
				全选
			</div>
			<div class="column t-goods">商品</div>
			<div class="column t-props"></div>
			<div class="column t-price" style="margin-left: 28px">单价(元)</div>
			<div class="column t-quantity">数量</div>
			<div class="column t-sum">小计(元)</div>
			<div class="column t-action">操作</div>
		</div>
		<div id="cart-list">
				<input type="hidden" id="allSkuIds" value="1832199">
	<input type="hidden" id="outSkus" value="">
	<input type="hidden" id="isLogin" value="1">
	<input type="hidden" id="isNoSearchStockState" value="0">
	<input type="hidden" id="isNoDD" value="0">
	<input type="hidden" id="isNoCoupon" value="0">
	<input type="hidden" id="isFavoriteDowngrade" value="0">
	<input type="hidden" id="isUnmarketDowngrade" value="1">
	<input type="hidden" id="isPriceNoticeDowngrade" value="0">
	<input type="hidden" id="isNoZYCoupon" value="0">
	<input type="hidden" id="isNoVenderFreight" value="0">
	<input type="hidden" id="isNoDeliveryService" value="0">
	<input type="hidden" id="isNoSamReplace" value="0">
	<input type="hidden" id="hiddenLocationId">
	<input type="hidden" id="hiddenLocation">
	<input type="hidden" id="ids" value="1832199">
	<input type="hidden" id="isNgsdg" value="0">
	<!-- 修改数量之前的值 -->
	<input type="hidden" id="changeBeforeValue" value="">
	<input type="hidden" id="changeBeforeId" value="">
	<input type="hidden" value="1" id="checkedCartState">
	<input type="hidden" value="" id="venderIds">
	<input type="hidden" value="1832199_11303" id="zySkuCid">
	<input type="hidden" value="8888" id="venderFreightIds">
	<input type="hidden" value="449.00" id="venderTotals">
	<input type="hidden" value="2" id="uclass">
							<div class="cart-item-list" id="cart-item-list-01">
				<div class="cart-tbody" id="vender_8888">
	<div class="shop">
		
		<span class="shop-txt">
												<a class="shop-name self-shop-name" href="javascript:;" id="venderId_8888" clstag="clickcart|keycount|xincart|cart_shopNameJD">京东自营</a>
									</span>
		 			 <div class="shop-extra-r" id="shop-extra-r_8888" checkedskuids="1832199" totalprice="449.00" venderfreight="6.00" freeshippingprice="99.00" venderid="8888" freightpattern="1" venderfreighttype="1">购满￥99.00 已免运费 <span class="tips-icon omu-tips" data-tips="部分超重超大商品运费单独收取，不在本功能范围内，准确运费以结算页为准"></span></div>
		 	</div>
	<div class="item-list" style="border-top: 1px solid #f3f3f3">
				<!--单品-->
			<!-- 单品-->

		@foreach( $carts as $k=>$v )	
		<div class="item-single  item-item item-selected  " id="product_1832199" style="background: #f3f3f3;">
		<div class="item-form">
			<div class="cell p-checkbox">
				<div class="cart-checkbox">
					<!--单品-->
						<input p-type="1832199_1" type="checkbox" name="checkItem" value="1832199_1"  data-bind="cbid" class="jdcheckbox goodsche goodsone" goods_info_id="{{ $v->goods_info_id }}" number="{{ $v->number }}" clstag="clickcart|keycount|xincart|cart_checkOn_sku" cid="{{ $v->id }}">
										<label for="" class="checked">勾选商品</label>
					<span class="line-circle"></span>
				</div>
			</div>
			<div class="cell p-goods">
				<div class="goods-item">
					<div class="p-img">
						<a href="/home/goodsinfo/{{$v->goodsinfo->goods->id}}" target="_blank" class="J_zyyhq_1832199"><img alt="{{ $v->goodsinfo->goods->name }}" clstag="clickcart|keycount|xincart|cart_sku_pic" src="/uploads/goods/{{ $v->goodsinfo->goods->pic }}" onerror="this.src='{{ $v->goodsinfo->goods->pic }}'" style="width:80px; height:80px;"></a>
					</div>
					<div class="item-msg">
						<div class="p-name">
							<a clstag="clickcart|keycount|xincart|cart_sku_name" href="/home/goodsinfo/{{$v->goodsinfo->goods->id}}" target="_blank">{{ $v->goodsinfo->goods->title }}</a>
						</div>
						<div class="p-extend">
							<span class="promise" _giftcard="giftcard_1832199"><i class="jd-giftcard-icon"></i><a data-tips="选择礼品卡包装，将单独下单结算" clstag="clickcart|keycount|xincart|cart_lipin" class="ftx-03 gift-packing" href="javascript:void(0);">购买礼品包装</a></span>
																					<span class="promise" _yanbao="yanbao_1832199_"><i class="jd-service-icon"></i><a data-tips="购买增值保障" class="ftx-03 jd-service" href="http://cart.jd.com/cart.action#none">购买增值保障</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="cell p-props p-props-new">
									<div class="props-txt" title="{{ $v->goodsinfo->version }}">版本：{{ $v->goodsinfo->version }}</div>
													
							</div>
			<div class="cell p-price">

									<strong>{{ $v->goodsinfo->price }}</strong>
			</div>
			<div class="cell p-quantity">
				<!--单品-->
					<div class="quantity-form">
						<a href="javascript:void(0);" clstag="clickcart|keycount|xincart|cart_num_down" class="decrement" id="decrement_8888_1832199_1_1" onclick="minus(this)">-</a>
						<input autocomplete="off" type="text" class="itxt" value="{{ $v->number }}" id="changeQuantity_8888_1832199_1_1_0" readonly>
						<a href="javascript:void(0);" clstag="clickcart|keycount|xincart|cart_num_up" class="increment" id="increment_8888_1832199_1_1_0" onclick="add(this)" stock="{{ $v->goodsinfo->stock }}">+</a>
					</div>
								<div class="ac ftx-03 quantity-txt" _stock="stock_1832199">有货</div>
			</div>
			<div class="cell p-sum">
									&nbsp;&nbsp;&nbsp;<strong>{{ number_format(($v->number * $v->goodsinfo->price),2) }}</strong>
			</div>
			<div class="cell p-ops">
				<!--单品-->
					<a id="remove_8888_1832199_1" clstag="clickcart|keycount|xincart|cart_sku_del" data-name="东芝(TOSHIBA) Q300系列 240G SATA3 固态硬..." data-more="removed_449.00_1" class="cart-remove" href="javascript:void(0);" gid="{{ $v->id }}" onclick="del(this)">删除</a>
											
			</div>
			</div>
		<div class="item-extra">
									<!-- 落地配服务 -->
					<div class="unmarket-items" _unmarket="unmarket_1832199" data="670;677;11303;1832199;1474381918487"></div>
					</div>
		<div class="item-line"></div>
		</div>
		@endforeach

				</div>
</div>
			</div>
					</div>
	</div>
</div>
	{{ csrf_field() }}
<div class="cart-removed">
	<div class="r-tit">已删除商品，您可以重新购买或加关注：</div>
</div>			</div>
		</div>
			
		<div class="w">
	</div>
	
</div>
<div id="cart-floatbar">
	<div class="ui-ceilinglamp-1" style="width: 990px; height: 52px;"><div class="cart-toolbar fixed-bottom" style="width: 1366px; height: 50px;">
		<div class="toolbar-wrap">
			<div class="selected-item-list hide" style="display: none;">
			</div>
			<div class="options-box">
				<div class="select-all">
					<div class="cart-checkbox">
						<input type="checkbox" id="toggle-checkboxes_down" name="toggle-checkboxes" class="jdcheckbox goodsche" clstag="clickcart|keycount|xincart|cart_allCheckDown">
						<label class="checked" for="">勾选全部商品</label>
					</div>
					全选
				</div>
				<div class="operation">
					<a href="javascript:;" clstag="clickcart|keycount|xincart|cart_somesku_del" class="remove-batch" onclick="dels()">删除选中的商品</a>
											
									</div>
				<div class="clr"></div>
				<div class="toolbar-right">
					<div class="normal">
						<div class="comm-right">
							<div class="btn-area">
								<a href="javascript:void(0);"  clstag="clickcart|keycount|xincart|cart_gotoOrder" class="submit-btn qujiesuan" data-bind="1" style="background: #F4A137">
								去结算<b></b></a>

								<!-- <a href="javascript:void(0);" class="submit-btn submit-btn-disabled">
								去结算<b></b></a> -->
							</div>

							<div class="price-sum">
								<div>
									<span class="txt txt-new">总价：</span>
									<span class="price sumPrice"><em style="color:#F4A137">￥<span id="total">0.00</span></em></span>
									<b class="ml5 price-tips"></b>
									<div class="price-tipsbox" style="left: 77.0313px; display: none;">
										<div class="ui-tips-main">不含运费及送装服务费</div>
										<span class="price-tipsbox-arrow"></span>
									</div>
									<br>
									<span class="txt">已节省：</span>
									<span class="price totalRePrice">-￥0.00</span>
								</div>
							</div>
							<div class="amount-sum">
								已选择<em style="color:#F4A137" id="num">0</em>件商品<b class="up" clstag="clickcart|keycount|xincart|cart_thumbnailOpen"></b>
							</div>
							<div class="clr"></div>
						</div>
					</div>
					<div class="combine" style="display: none;">
						<div class="comm-right">
							<div class="btn-area">
								<a href="javascript:void(0);" onclick="return false;" clstag="clickcart|keycount|xincart|cart_gotoOrderOut" class="jdInt-submit-btn">
								去全球购结算<b></b></a>
								<a href="javascript:void(0);" onclick="return false;" clstag="clickcart|keycount|xincart|cart_gotoOrder" class="common-submit-btn">
								去京东结算<b></b></a>
							</div>
							<div class="price-sum">
								<div>
									<span class="txt txt-new">总价：</span>
									<span class="price sumPrice"><em>￥449.00</em></span>
									<b class="ml5 price-tips"></b>
									<div class="price-tipsbox" style="display: none; left: 159.85px;">
										<div class="ui-tips-main">不含运费及送装服务费</div>
										<span class="price-tipsbox-arrow"></span>
									</div>
									<br>
									<span class="txt">已节省：</span>
									<span class="price totalRePrice">-￥0.00</span>
								</div>
							</div>
							<div class="amount-sum">
								已选择<em>1</em>件商品<b class="up"></b>
							</div>
							<div class="clr"></div>
						</div>
						<div class="clr"></div>
					</div>
				</div>
				
			</div>
		</div>
	</div></div>
</div>

<script type="text/javascript">
	$('.qujiesuan').click(function(){
		var id = [];
		var num = [];
		$.each($('.goodsone:checked'),function(k, v){
			id.push($(this).attr('goods_info_id'));
			num.push($(this).attr('number'));
		});
		$.get('/home/orders/ordersdata',{'goods_info_id':id, 'cnt':num},function(msg){
			msg = msg.trim();
			if (msg == 'success') {
				location.href = '/home/orders/create';
			} else {
				alert('订单提交失败');
			}
		},'html');	
	});
 	
 	function add(obj) {

 		var n = $(obj).prev().val();
 		if(parseInt(n) >= parseInt($(obj).attr('stock'))) {
 			alert('库存不足!');
 			return false;
 		}
		n++;
		$(obj).prev().val(n);

		var p = $(obj).parent().parent().prev().children().eq(0).html();

		var m = (p*n).toFixed(2);

		$(obj).parent().parent().next().children().html(m);

		total();


 	}

 	function minus(obj) {
 		
 		var n = $(obj).next().val();
 		if(n == 1) {
 			return;
 		}
		n--;
		$(obj).next().val(n);

		var p = $(obj).parent().parent().prev().children().eq(0).html();

		var m = (p*n).toFixed(2);

		$(obj).parent().parent().next().children().html(m);

		total();
 	}

 	$('#toggle-checkboxes_up').click(function() {

 		if(!$(this).prop('checked')){
 			
 			$('.goodsche').prop('checked', false);
 			
  			
 		} else {
 			
 			$('.goodsche').prop('checked', true);
 			
 		}
 		
 	});

 	$('#toggle-checkboxes_down').click(function() {

 		if(!$(this).prop('checked')){
 			
 			$('.goodsche').prop('checked', false);
 			
  			
 		} else {
 			
 			$('.goodsche').prop('checked', true);
 			
 		}
 		
 	});

 	$('.goodsche').click(function(){

 		total();
 		

 	});

 	function del(obj) {

 		var id = $(obj).attr('gid');
 		var _token = $('input[name = "_token"]').val();
 		$.post('/home/carts/'+id, {"_method":'DELETE', "_token":_token}, function(msg){
 			if(msg == 'success') {

 			$(obj).parent().parent().remove();
 			
 			total();
	 		
 			}
 		}, 'html');

 		
 		


 	}

 	function total() {
 			var n = $('.goodsone:checked').size();
	 		$('#num').html(n);
	 		var num = 0;
	 		
	 		$.each($('.goodsone:checked'), function(k, v){
	 			var price = $(this).parent().parent().next().next().next().next().next().children().html();
	 			price = price.replace(',', '');
	 				
	 			num += parseFloat(price);
	 		});

	 		$('#total').html(num.toFixed(2));
 	}

 	function dels() {

 		var carts = [];
 		$.each($('.goodsone:checked'), function(k, v) {
 				carts.push($(this).attr('cid'));
 			});
 		
 		$.get('/home/delcarts', {'cids':carts}, function(msg){
 			if(msg == 'success') {
 				$('.goodsone:checked').parent().parent().parent().parent().remove();
 				total();
 			}
 		}, 'html');
 	}

</script>

@include('home.layout.footer')

