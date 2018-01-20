<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			margin:0px;
			font-family: 微软雅黑;
		}
		.head{
			width:100%;
			height: 110px;
			background-color:#0078D7;
		}
		.logo{
			width: 140px;
			height: 66px;
			background-image: url("images/logo.jpg");
			background-repeat: no-repeat;
			margin-left: 110px;
			margin-right: 20px;
			margin-top: 26px;
			float: left;
		}
		.menu{
			width: 570px;
			height: 63px;
			margin-top: 20px;
			float: left;
			color: #F1FFFF;
		}
		.menu ul li{
			float: left;
			list-style: none;
			margin-right: 30px;
			padding-left: -35px;
			padding-top: 10px;
		}
		.user{
			width: 400px;
			height: 70px;
			margin-top: 20px;
			float: right;
			padding-right: -40px;
		}
		.user ul li{
			width: 35px;
			height: 36px;
			margin-right: 20px;
			list-style: none;
			float: left;
			font-size: 14px;
			color: white;
		}
		.user ul li:last-child{
			margin-top: -20px;
		}
		
		body{
			width: 100%;
			height: 800px;
			margin: 0px;
			background-color: #F1F5F8;
		}
		.regist{
			border: 1px #ECECEC solid;
			width: 1200px;
			height: 800px;
			background-color: white;
			margin-left: 108px;
			margin-right: 108px;
			margin-top: 20px;
		}
		.re_top{
			height: 45px;
			line-height: 45px;
			font-size: 16px;
			border-bottom: 1px solid #ECECEC;
			color: #69665D;
			width: 1200px;
			margin: 0px;
			margin-left: 0px;
		}
		.re_left{
			font-size: 14px;
			margin-top: 30px;
			margin-left: 60px;
			width: 700px;
			height: 660px;
			line-height: 50px;
			float: left;
		}
		.re_text{
			text-decoration: none;
			font-size: 12px;
			padding-left: 80px;
			color: #365478;
		}
		.re_left span{
			color: red;
		}
		.re_left input{
			width: 240px;
			height: 23px;
		}
		.agree{
			margin-left: 80px;
		}
		.content a{
			text-decoration: none;
			margin-left: 80px;
			font-size: 12px;
			color: #365478;
		}
		input[name=agree]{
			width: 190px;
			height: 32px;
			background-color: #59A2CB;
			border-radius: 2px;
			color: white;
			font-size: 16px;
			border: 1px #1A4673 solid;
		}

		.re_verify img{
			padding-left: 80px;
		}
		/*right start*/
		.re_right{
			width: 137px;
			height: 112px;
			line-height: 30px;
			float: right;
			border-left: 1px dashed #CACACA;
			padding-left: 20px;
			padding-top: 30px;
			margin-top: 30px;
			font-size: 12px;
			color: #333333;
			margin-right: 50px;
		}
		.re_right input[name=login]{
			width: 94px;
			height: 32px;
			font-size: 14px;
			color: #333333;
		}
		
	</style>
</head>
<body>
	<div class="head">
		<div class="logo"></div>
		<div class="menu">
			<ul>
				<li><a href="<?=$webSite;?>index.php"></a>首页</li>
				<li>新帖</li>
				<li>下载</li>
				<li><b>插件和模板</b></li>
				<li><b>1元商业授权</b></li>
				<li>一键部署</li>
			</ul>
		</div>
		<!-- <div class="user">
			<ul>
				<li><img src="<?=$webSite;?>img/image/search.jpg"></li>
				<li><img src="<?=$webSite;?>img/image/1.jpg"></li>
				<li><img src="<?=$webSite;?>img/image/2.jpg"></li>
				<li><img src="<?=$webSite;?>img/image/3.jpg"></li>
				<li><img src="<?=$webSite;?>img/image/4.jpg"></li>
			</ul>	

		</div> -->
	</div>
	


	<div class="regist">
		<div class="re_top">
			&nbsp;<b>欢迎注册成为phpwind官方论坛 会员</b>
		</div>
		<div class="re_left">
			<form action="user_check.php" method="post">
			
				<div class="name">
					&nbsp;&nbsp;&nbsp;&nbsp;用户名: <span>*</span> <input type="text" name="username"></input><br/>
				</div>
				<div class="pwd">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密码: <span>*</span>  <input type="password" name="pwd"></input><br/>
				</div>
				
				<div class="verify">
					确认密码: <span>*</span> <input type="password" name="repassword"></input><br/>
				</div>
				
				
				<div class="re_verify">
					&nbsp;&nbsp;&nbsp;&nbsp;验证码: <span>*</span> <input type="text" name="code"></input><br/>
					<img src="<?=$webSite;?>verify.php" id="img" onclick="this.src='<?=$webSite;?>verify.php?'+Math.random()"><br/>
					<a class="re_text" href="javascript:show()">换一个</a>
				</div>
				
				<div class="agree">
					<input type="submit" name="agree" value="同意以下协议并注册"></input>
				</div>
				
				<script>
					function show()
					{
						var img = document.getElementById('img');
						img.src = '<?=$webSite;?>verify.php?'+Math.random();
					}
				</script>
			</form>
		</div>
		<div class="re_right">
			已经有帐号？<br/>
			<form action="login.php" method="post">
				<input type="submit" value="立即登录" name="login" />
			</form>
		</div>	
	</div>
	
</body>
</html>