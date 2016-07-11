<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="/dulifenzu/Public/Css/bootstrap.css" />
     <link rel="stylesheet" type="text/css" href="/dulifenzu/Public/Css/login.css">
     <script type="text/javascript"  src="/dulifenzu/Public/Js/jquery-1.7.2.min.js"></script>
</head>
<body>
<div id="logo"><img src="images/logon_logo.png"></div>
	<div id="container">
	<!-- ************************************登录 *********************************************************888-->
  <div id="table_content">
 		<div id="sgin" > 
			<p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your username and password
                </p><br/>
        </div>
        <div id="loginfor" class="tab-pane active">
			<form action="<?php echo U('login');?>" class="form-signin" method="post">
				<span>用户名</span>
				<input type="text" placeholder="用户名" class="form-control" name="username"><br/>
				<span>密码</span>
				<input type="password" placeholder="密码" class="form-control" name="upwd"><br/>
        <span>验证码</span>
        <input type="password" placeholder="验证码" class="form-control" name="code"><br/>
        <img src="<?php echo U('verify');?>" alt="" id="verify">
				<button class="btn text-muted text-center btn-danger" type="submit">Sign in</button>&nbsp;&nbsp;
        <label >
        <span class="glyphicon glyphicon-user">自动登陆</span>&nbsp;<input type="checkbox" name="autoFlag" value="1"  id="a1"></label>
			</form>
		</div>
   </div>
</div>

</body>
<script type="text/javascript">
	$(document).ready(function(){
        $("#verify").click(function(){
        	var src=$(this).attr('src');
        	$(this).attr('src',src+"?"+Math.random());
        })




	})




</script>
</html>