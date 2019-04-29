<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="/Public/Admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>登陆页面</title>

    <!-- Bootstrap CSS -->    
    <link href="/Public/Admin/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/Public/Admin/admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/Public/Admin/admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/Public/Admin/admin/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="/Public/Admin/admin/css/style.css" rel="stylesheet">
    <link href="/Public/Admin/admin/css/style-responsive.css" rel="stylesheet" />
    <script type="text/javascript">
        function checkname(){
           //获得用户名信息，传递给服务器端
           alert($);
           var nm = document.getElementById('username').value;
           var xhr = new XMLHttpRequest();
           xhr.onreadystatechange = function(){
                if(xhr = readyState == 4){
                    alert(xhr.responseText);
                }
           }
           //TP框架所有需求都的通过控制器——操作方法实现
           xhr.open('get',{U('Admin/Login/checkNM/name/'+nm)});
           xhr.send(null);
        }
        $(document).ready(function(){
            $("#phone").blur(function(){
                $.post("<?php echo U('Admin/Login/checkname','','');?>"
                ,
                {
                    aUser:$("#phone").val(),
                },
                
                )
            });
        });
    </script>
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="<?php echo U('Login/login');?>" method="POST" onsubmit="return Checkmember();">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="用户名" id="username"  name="aUser" onblur="checkname()" />
              <span id="jieguo" class="input-group-addon" style="background-color:#FAFFBD;"></span>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="密码" name="aPassword" value="">
            </div>
           <!--  <div class="input-group">
                <input width="40%" type="passwd" class="form-control" placeholder="验证码" name="code" value="">
            </div> -->
            <!-- <div class="input-group">
                <img width="auto " src="<?php echo U('Login/verify');?>" onclick="this.src='<?php echo U('login/verify');?>?id='+Math.random()" alt="">
            </div> -->
            <!-- <label  class="checkbox">
                <input type="checkbox" value="remember-me"> 记住密码
                <span class="pull-right"> <a href="#"> 找回密码</a></span>
            </label> -->
            <button class="btn btn-primary btn-lg btn-block" type="submit">登陆</button>
            <!--<button class="btn btn-primary btn-lg btn-block" type="submit">注册</button>-->
        </div>
      </form>

    </div>
   
  </body>
</html>