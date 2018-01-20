<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

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
		.login{
			border: 1px #ECECEC solid;
			width: 1200px;
			height: 530px;
			background-color: white;
			margin-left: 108px;
			margin-right: 108px;
			margin-top: 20px;
		}
		.top2{
			height: 45px;
			line-height: 45px;
			font-size: 16px;
			border-bottom: 1px solid #ECECEC;
			color: #69665D;
			width: 1200px;
			margin: 0px;
			margin-left: 0px;
		}
		.alert{
			width: 963px;
			height: 33px;
			border: 1px #F3EDDD solid;
			margin-left: 10px;
			background-color: #FFFEE9;
			margin-bottom: 10px;
			font-size: 12px;
			color: #6B6B5F;
		}
		.alert img{
			margin-top: 5px;
		}
		.left2{
			margin-top: 20px;
			margin-left: 10px;
			float: left;
		}
		.name{
			color: #32373B;
			width: 700px;
			height: 64px;
			line-height: 64px;
			
		}
		.pwd{
			color: #32373B;
			width: 700px;
			height: 64px;
			line-height: 64px;
			
		}
		.verify{
			color: #32373B;
			width: 700px;
			height: 125px;
			line-height: 40px;
			
		}
		.auto{
			font-size: 12px;
			margin-top: 30px;
			margin-left: 60px;
		}
		.sub{
			margin-top: 30px;
			margin-left: 60px;
		}
		.sub input[name=login]{
			width: 82px;
			height: 32px;
			background-color: #59A2CB;
			border-radius: 5px;
			color: white;
			font-size: 16px;
			border: 1px #1A4673 solid;
		}
		.left2 input[name=uname]{
			width: 200px;
			height: 25px;
		}
		.left2 input[name=pwd]{
			width: 200px;
			height: 25px;
		}
		.left2 input[name=verify]{
			width: 200px;
			height: 25px;
		}

		/*left end*/
		/*right start*/
		.right{
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
		}
		.right input[name=regist]{
			width: 94px;
			height: 32px;
			font-size: 14px;
			color: #333333;
		}
		#l_l{
			margin-left: 50px;
		}
	</style>
</head>
<body>
<div class="head">
		<div class="logo"></div>
		<div class="menu">
			<ul>
				<li><a href="index.php">首页</a></li>
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
		把用户给注册掉
		</div> -->
	</div>
	<div class="login">
		<div class="top2">
			&nbsp;&nbsp;&nbsp;登录
		</div>
		<div class="left2">
			<div class="alert">
				<img src="<?=$webSite;?>img/image/7.jpg" />&nbsp;请登录后再继续浏览
			</div>
			<div id="l_l">
				<form action="check_login.php" method="post">
				<div class="name">
					&nbsp;&nbsp;帐号:&nbsp;&nbsp;<input type="text" name="username"></input><font size="1" color="#8A9199">&nbsp;用户名</font><br/>
				</div>
				
				<div class="pwd">
					&nbsp;&nbsp;密码:&nbsp;&nbsp;<input type="password" name="password"></input><br/>
				</div>
				<!-- <div class="verify">
					验证码:&nbsp;<input type="text" name="code"></input><br/>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  <img src="verify.php" onclick="this.src='verify.php?'+Math.random()"><br/>
					
				</div> -->
			<!-- 	<div class="auto">
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1" color="#33537C">找回密码</font>
				</div> -->
				<div class="sub">
					<input type="submit" name="login" value="登录"></input>
				</div>
			</form>
		</div>
			
		</div>
		<div class="right">
			还没有帐号？<br/>
			<form action="register.php" method="post">
				<input type="submit" value="免费注册" name="regist"></input>
			</form>
		</div>
	</div>
</body>
</html>