<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="/admin/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/admin/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/admin/assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="/admin/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="/admin/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="/admin/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/admin/assets/img/favicon.png">
   	
	<script src="/admin/table/vendor/jquery/jquery.min.js"></script>
   	<script src="/admin/table/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">登录到您的账户</p>
							</div>
							@if (session('error'))
							<div class="alert alert-danger alert-dismissable">
							    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
							        <span style="vertical-align: inherit;">
							            <span style="vertical-align: inherit;">×</span></span>
							    </button>
							    <span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ session('error') }}</span></span>
							</div>
							@endif
							<form class="form-auth-small" action="/admin/login" method="post">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">账号</label>
									<input type="text" name="admin" class="form-control" id="signin-email" value="{{ session('adminName') }}" placeholder="账号">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">密码</label>
									<input type="password" name="pwd" class="form-control" id="signin-password"  placeholder="密码">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox" name="remember" @if(\Cookie::get('remember_token')) checked @endif  value="1">
										<span>记住账号</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">登录</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="/admin/pwd/email">忘记密码</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">待地</h1>
							<p>待定</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>

