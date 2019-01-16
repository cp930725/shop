<!doctype html>
<html lang="en">

<head>
	<title>{{ $title or 'MARKET' }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="/admin/assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="/admin/assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="/admin/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="/admin/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="/admin/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/admin/assets/img/favicon.png">
	<link href="/admin/table/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/admin/table/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="/admin/table/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/admin/table/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/admin/table/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/admin/table/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="/admin/assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="关键字">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">搜索</button></span>
					</div>
				</form>
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="/admin/pwd/reset" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>修改密码</span></a>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>帮助文档</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="index.html" class="active"><i class="lnr lnr-home"></i> <span>仪表板</span></a></li>
								<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>元素</span></a></li>
								<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>图表</span></a></li>
								<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>面板</span></a></li>
								<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>通知</span></a></li>
								<li>
									<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>页面</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
									<div id="subPages" class="collapse ">
										<ul class="nav">
											<li><a href="page-profile.html" class="">轮廓</a></li>
											<li><a href="page-login.html" class="">登录</a></li>
											<li><a href="page-lockscreen.html" class="">锁屏</a></li>
										</ul>
									</div>
								</li>
								<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>表</span></a></li>
								<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>活版印刷</span></a></li>
								<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>图标</span></a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="/admin/adminInfo" class="dropdown-toggle" data-toggle="dropdown"><img src="/uploads/{{ session('adminInfo')->face }}" class="img-circle" alt="Avatar"> <span>{{ session('admin')->admin }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>

							<ul class="dropdown-menu">
								<li><a href="/admin/admins/info/{{ 1 }}"><i class="lnr lnr-user"></i> <span>我的简历</span></a></li>
								<li><a href="/admin/admins/{{ 1 }}/edit"><i class="lnr lnr-envelope"></i> <span>修改信息</span></a></li>
								<li><a href="/admin/logout"><i class="lnr lnr-exit"></i> <span>退出</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="#downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/admin/admins" 		class=""><i class="lnr lnr-user"></i> <span>管理员</span></a></li>
						<li><a href="/admin/users" 		class=""><i class="lnr lnr-users"></i> <span>用户管理</span></a></li>
						<li><a href="/admin/cates" 		class=""><i class="lnr lnr-text-align-left"></i> <span>类别管理</span></a></li>
						<li><a href="/admin/goods" 		class=""><i class="lnr lnr-cart"></i> <span>商品管理</span></a></li>
						<li><a href="/admin/concerns" 	class=""><i class="lnr lnr-heart"></i> <span>关注管理</span></a></li>
						<li><a href="/admin/sales" 	class=""><i class="lnr lnr-hourglass"></i> <span>活动管理</span></a></li>
						<li><a href="/admin/discounts" 	class=""><i class="lnr lnr-magic-wand"></i> <span>优惠券管理</span></a></li>
						<li><a href="/admin/orders" 	class=""><i class="lnr lnr-chart-bars"></i> <span>订单管理</span></a></li>

						<li><a href="/admin/comments" 	class=""><i class="lnr lnr-bubble"></i> <span>评论管理</span></a></li>
						<li><a href="/admin/returns" 	class=""><i class="lnr lnr-database"></i> <span>售后管理</span></a></li>
						<li><a href="/admin/waters" 	class=""><i class="lnr lnr-layers"></i> <span>账单管理管理</span></a></li>
						<li><a href="/admin/advers" 	class=""><i class="lnr lnr-star"></i> <span>广告管理</span></a></li>
						<li><a href="/admin/ytnotics" 	class=""><i class="lnr lnr-bullhorn"></i> <span>公告管理</span></a></li>
						<li><a href="/admin/links" 		class=""><i class="lnr lnr-link"></i> <span>友情链接管理</span></a></li>
						<li><a href="/admin/slids" 		class=""><i class="lnr lnr-camera"></i> <span>轮播图管理</span></a></li>
						<li><a href="/admin/deletes" 	class=""><i class="lnr lnr-trash"></i> <span>回收站</span></a></li>
						<li><a href="/admin/webs" 		class=""><i class="lnr lnr-cog"></i> <span>网站配置</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		
	<!-- Javascript -->
	<script src="/admin/table/vendor/jquery/jquery.min.js"></script>
	<script src="/admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="/admin/assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="/admin/assets/scripts/klorofil-common.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/admin/table/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/admin/table/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/admin/table/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/admin/table/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="/admin/table/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/admin/table/dist/js/sb-admin-2.js"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
	<!-- MAIN START -->
	<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title text-center">
                <span style="vertical-align: inherit;">
                    <span style="vertical-align: inherit;"></span></span>
            </h3>
            @section('main')

            @show
            

        </div>
    </div>
    <!-- END MAIN CONTENT --></div>
	<!-- END MAIN -->
</body>

</html>
