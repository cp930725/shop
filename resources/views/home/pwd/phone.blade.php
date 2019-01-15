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
        $('#form-register').bootstrapValidator({
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z]{1}\w{5,17}$/,
                            message: '用户名只能是以字母开头的6到18位的字母、数字和下划线'
                        },
                    }
                },
                pwd: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z]{1}.{5,17}$/,
                            message: '密码必须以字母开头,长度必须在6到18位之间'
                        }
                    }
                },
                pwd_confirmation: {
                    validators: {
                        notEmpty: {
                            message: '确认密码不能为空'
                        },
                        identical: {//相同
                            field: 'pwd', //需要进行比较的input name值
                            message: '两次密码不一致'
                        },
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: '手机号码不能为空'
                        },
                        regexp: {
                            regexp: /^1[3-9]{1}[0-9]{9}$/,
                            message: '请输入正确的手机号码',
                        },
                        callback: {
                            message: ' ',
                            callback: function(value, validator){
                                if (value.length == 11) {
                                    $('#button').addClass('btn-primary');
                                    $('#button').attr('disabled', false);
                                    return true;
                                } else {
                                    $('#button').removeClass('btn-primary');
                                    $('#button').attr('disabled', true);
                                    return false;
                                }
                            }
                        }
                     }
                },
                tel_code: {
                    validators: {
                        notEmpty: {
                            message: '验证码不能为空',
                        },
                        identical: {//相同
                            field: 'session', //需要进行比较的input name值
                            message: '验证码不正确'
                        },
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
                <div class="row">
                    <div class="col-md-6" style=" margin-left: 300px">
                        <div class="form-register" style="height: 500px;">
                              <!-- Nav tabs -->
                            <div class="title">
                                <h2>忘记密码?</h2>
                            </div>
                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <form action="/register" method="post" id="form-register" accept-charset="utf-8">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="session" value="{{ session('tel_code') }}">
                                        <div id="phone" class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon glyphicon glyphicon-phone"></span>
                                                <input id="tel" type="number" name="phone" class="form-control" placeholder="手机号" onkeypress="return (/[\d]/.test(String.fromCharCode(event.keyCode)))">
                                            </div>
                                            <small class="help-block" id="phone-remote"  style="display: none;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">手机号未绑定账号</span></span></small>
                                        </div>
                                        <div style="margin-bottom: 35px;"></div>
                                        <div class="row">
                                            <div id="captcha" class="col-md-8 form-group">
                                                <input type="number" class="form-control {{$errors->has('captcha')?'parsley-error':''}}" name="tel_code" placeholder="验证码">
                                            </div>
                                            <div class="col-md-4 has-success">
                                                <button id="button" disabled class="" onclick="sendTelCode()"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">获取验证码</span></span></button>
                                            </div>
                                        </div>
                                        <div class="form-box pull-left">
                                            <input type="submit" onclick="return false" value="确认"  class="submit">

                                        </div><!-- /.form-box -->
                                        
                                    </form><!-- /#form-login -->
                                    <script type="text/javascript">
                                        $('input[type="submit"]').click(function(){
                                            var phone = $('input[name="phone"]').val();
                                            var tel_code = $('input[name="tel_code"]').val();
                                            var _token = $('input[name="_token"]').val();

                                            $.post('/pwd/phone', {phone:phone, tel_code:tel_code, _token:_token}, function(data){
                                                if (data == 'success') {
                                                    location.href = '/pwd/reset';
                                                } else {
                                                    $('#name').removeClass('has-success');
                                                    $('#name').addClass('has-error');
                                                    $('#error').css('display','block');
                                                }
                                            }, 'html');

                                        })
                                    </script>
                                    <script type="text/javascript">
                                        // 验证手机号是否存在
                                        $('input[name="phone"]').blur(function(){
                                            var phone = $(this).val();
                                            $.ajax({
                                                url: '/pwd/phone/'+phone,
                                                type: 'get',
                                                data: {"phone":phone},
                                                dataType: 'json',
                                                success: function(data){
                                                    if (data.valid == false) {
                                                        $('#phone').removeClass('has-success');
                                                        $('#phone').addClass('has-error');
                                                        $('#phone-remote').css('display', 'block');
                                                    }
                                                }
                                            });
                                        }).focus(function(){
                                            $('#phone-remote').css('display', 'none');
                                        });
                                    </script>
                                    <script type="text/javascript">
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
                                </script>
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


