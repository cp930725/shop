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
    
    <!-- Theme CSS
    ============================================ -->
    
    <link href="/home/css/responsive.css" rel="stylesheet">
    <link href="/home/css/style.css" rel="stylesheet">
    <link href="/home/css/shortcodes.css" rel="stylesheet">
    <link href="/home/css/validator/bootstrapValidator.min.css" rel="stylesheet">
<style type="text/css">
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
    }
    input[type="number"]{
      -moz-appearance: textfield;
    }
</style>

</head>
<script type="text/javascript" src="/home/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/home/js/validator/bootstrapValidator.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#form-login').bootstrapValidator({
            
　　　　　　 message: 'This value is not valid',
            fields: {
               name: {
                    message: '用户名验证失败',
                    validators: {
                        notEmpty: {
                            message: '用户名不能为空'
                        }
                    }
                },
                pwd: {
                    message: '密码验证失败',
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        }
                    }
                },
                captcha: {
                    validators: {
                        notEmpty: {
                            message: '验证码不能为空'
                        }
                    }
                }
            }
        });
        
        
    });
</script>
<body class="common-home res layout-home1">
    <div id="wrapper" class="wrapper-full banners-effect-7">
    <!-- Header Container  -->
    <header id="header" class=" variantleft type_1">
<!-- Header center -->
<div class="header-center left">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="navbar-logo col-md-3 col-sm-12 col-xs-12" style="padding: 50px 0px">
                <a href="index.html"><img src="/home/image/demo/logos/theme_logo.png" title="Your Store" alt="Your Store" /></a>
            </div>
            <!-- //end Logo -->
        </div>
    </div>
    
</div>
    </header>
<section class="flat-account background">
            <div class="container">
                <div class="row" style="background:url('/home/image/1.jpg') no-repeat -100px">
                    <div class="col-md-6 pull-right" >
                        <div class="form-login">
                            <div>
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs title text-center" role="tablist">
                                <li style="margin-left: 60px;" role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><h3>账号登录</h3></a></li>
                                <li style="margin-left: 60px;" role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><h3>手机登录</h3></a></li>
                              </ul>

                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <form action="/login" method="post" id="form-login" accept-charset="utf-8">
                                        <div id="name" class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon glyphicon glyphicon-user"></span>
                                                <input type="text" name="name" value="{{ session('userName') }}" class="form-control" placeholder="账号/手机号/邮箱">
                                            </div>
                                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="name" data-bv-result="NOT_VALIDATED" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">用户名不能为空</font></font></small>
                                        </div>
                                        <div style="margin-bottom: 35px;"></div>
                                        <div id="pwd" class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><i class="glyphicon glyphicon-lock"></i></span></span></span>
                                                <input type="password" name="pwd" class="form-control" placeholder="密码">
                                            </div>
                                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="pwd" data-bv-result="NOT_VALIDATED" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">密码不能为空</font></font></small>
                                        </div>
                                        <div style="margin-bottom: 35px;"></div>
                                        <div class="row">
                                            <div id="captcha" class="col-md-8 form-group">
                                                <input type="text" class="form-control {{$errors->has('captcha')?'parsley-error':''}}" name="captcha" placeholder="验证码">
                                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="captcha" data-bv-result="NOT_VALIDATED" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">验证码不能为空</font></font></small>
                                            </div>
                                            <div class="col-md-4 has-success">
                                                <img src="{{captcha_src()}}" style="cursor: pointer" onclick="this.src='{{captcha_src()}}'+Math.random()">
                                            </div>
                                        </div>
                                        <div class="form-box checkbox">
                                            <input type="checkbox" id="remember" @if(\Cookie::get('user_token')) checked @endif  value="1" name="remember">
                                            <label for="remember">记住账号</label>
                                        </div><!-- /.form-box -->
                                        <div class="form-box pull-left">
                                            <input type="submit"  value="登录" onclick="return false" class="submit">

                                        </div><!-- /.form-box -->
                                        <div class="form-box pull-right">
                                            <a href="/pwd/phone" title="">忘记密码?</a>
                                            <a href="/register" target="_blank" title="">立即注册</a>
                                        </div>
                                    </form><!-- /#form-login -->

                                    <script type="text/javascript">
                                        $('#form-login input[type="submit"]').click(function(){
                                            $(this).val('登录中...');

                                            var name = $('input[name="name"]').val();
                                            var pwd = $('input[name="pwd"]').val();
                                            var captcha = $('input[name="captcha"]').val();
                                            var _token = $('input[name="_token"]').val();
                                        
                                            $.ajax({
                                                url:'/login',
                                                type:'post',
                                                data:{'name':name, 'pwd':pwd, 'captcha':captcha, '_token':_token},
                                                dataType:'html',
                                                success:function(data){
                                                    alert(data);
                                                    if (data == 'error') {
                                                        $('#name').removeClass('has-success');
                                                        $('#name').addClass('has-error');
                                                        $('#name small').css('display', 'block');
                                                        $('#name small').text('账号密码错误');
                                                    } else {
                                                        location.href = '/';
                                                    }
                                                },
                                                error:function(msg){
                                                    $('#form-login input[type="submit"]').val('登录');
                                                    var json=JSON.parse(msg.responseText);
                                                    console.log(json);
                                                    if (json.errors.captcha) {
                                                        $('#captcha').removeClass('has-success');
                                                        $('#captcha').addClass('has-error');
                                                        $('#captcha small').css('display', 'block');
                                                        $('#captcha small').text(json.errors.captcha);
                                                    }

                                                    

                                                    if (json.errors.name) {
                                                        $('#name').removeClass('has-success');
                                                        $('#name').addClass('has-error');
                                                        $('#name small').css('display', 'block');
                                                    }

                                                    if (json.errors.pwd) {
                                                        $('#pwd').removeClass('has-success');
                                                        $('#pwd').addClass('has-error');
                                                        $('#pwd small').css('display', 'block');
                                                    }
                                                }
                                            });
                                            $('#captcha input').focus(function(){
                                                $('#captcha small').css('display', 'none');
                                                $('#captcha small').text('验证码不能为空');
                                            });

                                            $('#name input').focus(function(){
                                                $('#name small').css('display', 'none');
                                                $('#name small').text('用户名不能为空');
                                            });
                                        })
                                    </script>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <form action="/phone/login" method="post" id="form-register" accept-charset="utf-8">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="session" value="{{ session('tel_code') }}">
                                        <div id="phone" class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon glyphicon glyphicon-phone"></span>
                                                <input id="tel" type="number" name="phone" class="form-control" placeholder="手机号" onkeypress="return (/[\d]/.test(String.fromCharCode(event.keyCode)))">
                                            </div>
                                            <small id="phone-remote" class="help-block" data-bv-validator="notEmpty" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="margin-bottom: -29px; display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">请输入正确的手机号</font></font></small>
                                            <small id="phone-error" class="help-block" data-bv-validator="notEmpty" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="margin-bottom: -29px; display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登录失败</font></font></small>
                                        </div>
                                        <div style="margin-bottom: 35px;"></div>
                                        <div class="row">
                                            <div id="tel_code" class="col-md-8 form-group">
                                                <input type="number" class="form-control {{$errors->has('tel_code')?'parsley-error':''}}" name="tel_code" placeholder="验证码">
                                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="tel_code" data-bv-result="INVALID" style="display: none;margin-bottom: -29px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">验证码错误</font></font></small>
                                            </div>
                                            <div class="col-md-4 has-success">
                                                <button id="button" disabled class="" onclick="sendTelCode()"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">获取验证码</span></span></button>
                                            </div>
                                        </div><div style="margin-bottom: 35px;"></div>
                                        <div class="form-box pull-left">
                                            <input type="submit"  value="登录" onclick="return false" class="submit">

                                        </div><!-- /.form-box -->
                                        <div class="form-box pull-right">
                                            <a href="/pwd/phone" title="">忘记密码?</a>
                                            <a href="/register" target="_blank" title="">立即注册</a>
                                        </div>
                                    </form><!-- /#form-login -->
                                    <script type="text/javascript">
                                        $('#form-register input[type="submit"]').click(function(){
                                            $(this).val('登录中...');
                                            var phone = $('input[name="phone"]').val();
                                            var tel_code = $('input[name="tel_code"]').val();
                                            var _token = $('input[name="_token"]').val();
                                            $.post('/phone/login', {_token:_token, phone:phone, tel_code:tel_code}, function(data){
                                                if (data == 'success') {
                                                    location.href = '/';
                                                } else {
                                                    $('#form-login input[type="submit"]').val('登录');
                                                    $('#phone').removeClass('has-success');
                                                    $('#phone').addClass('has-error');
                                                    $('#phone-error').css('display', 'block');
                                                }
                                            }, 'html');
                                        });

                                        $('input[name="phone"]').keyup(function (){

                                            var phone = $('input[name="phone"]').val();
                                            var phone_preg = /^1{1}[3-9]{1}[\d]{9}$/;

                                            if(phone_preg.test(phone)){
                                                $('#phone-remote').css('display', 'none');
                                                $('#phone-error').css('display', 'none');
                                            } else {
                                                $('#phone').removeClass('has-success');
                                                $('#phone').addClass('has-error');
                                                $('#phone-remote').css('display', 'block');
                                                $('#button').removeClass('btn-primary');
                                                $('#button').attr('disabled', true);
                                                
                                            }

                                            if (phone.length == 11) {
                                                $('#button').addClass('btn-primary');
                                                $('#button').attr('disabled', false);
                                                return true;
                                            } else {
                                                $('#button').removeClass('btn-primary');
                                                $('#button').attr('disabled', true);
                                            }
                                        });
                                        // 发送验证码
                                        var countdown = 60;
                                        function sendTelCode() {

                                            var tel = $('#tel').val();
                                            var url = '/register/send/'+tel;
                                            settime($('#button'));
                                            //发送AJAX
                                            $.get(url,{'tel':tel},function(data){
                                                $('input[name="session"]').val(data);
                                                
                                            },'html');
                                        }

                                        function settime(obj) { //发送验证码倒计时
                                            if (countdown == 0) { 
                                                obj.attr('disabled',false); 
                                                obj.addClass('btn-primary'); 
                                                obj.text("获取验证码");
                                                countdown = 60; 
                                                return;
                                            } else { 
                                                obj.attr('disabled',true);
                                                obj.text("重新发送" + countdown);
                                                obj.removeClass('btn-primary');
                                                countdown--; 
                                            } 
                                            setTimeout(function() { 
                                                settime(obj) 
                                            }, 1000) 
                                        }

                                        $('input[name="tel_code"]').keyup(function (){
                                            var session = $('input[name="session"]').val();
                                            var tel_code = $('input[name="tel_code"]').val();
                                            if (session == tel_code) {
                                                $('#tel_code small').css('display', 'none');
                                            } else {
                                                $('#tel_code').removeClass('has-success');
                                                $('#tel_code').addClass('has-error');
                                                $('#tel_code small').css('display', 'block');
                                            }
                                        });
                                </script>
                                </div>
                              </div>
                            </div>
                        </div><!-- /.form-login -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

<script type="text/javascript"><!--
    var $typeheader = 'header-home1';
    //-->
</script>

    <!-- Footer Container -->
    <footer class="footer-container">
        <!-- Footer Bottom Container -->
        <div class="footer-bottom-block ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 copyright-text">Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></div>
                    <div class="col-sm-7">
                        <div class="block-payment text-right"><img src="/home/image/demo/content/payment.png" alt="payment" title="payment" ></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer Bottom Container -->
    </footer>
    <!-- //end Footer Container -->
<link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />



</body>
</html>


