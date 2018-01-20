<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="Refresh" content="<?=$sec;?>;url=<?=$url;?>">
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
			postion:relative;
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
		.tips {
			width:300px;
			height:200px;
			border:1px solid #ccc;
			position:absolute;
			top:30%;
			left:40%;
			text-align: center;
			
		}
		.jump{
			width:400px;
			height:50px;
			border:1px solid green;
			position:absolute;
			top:80%;
			left:37%;
			text-align:center;
		}
	</style>
</head>
<body>
	<div class="head">
		<div class="logo"></div>
		<div class="menu">
			<ul>
				<li>首页</li>
				<li>新帖</li>
				<li>论坛</li>
				
			</ul>
		</div>
		<div class="user">
			<!-- <ul>
				去掉用户管理
				<li><img src="<?=$webSite;?>img/image/search.jpg"></li>
				<li><img src="<?=$webSite;?>img/image/1.jpg"></li>
				<li><img src="<?=$webSite;?>img/image/2.jpg"></li>
				<li><img src="<?=$webSite;?>img/image/3.jpg"></li>
				<li><img src="<?=$webSite;?>img/image/4.jpg"></li>
			</ul>	 -->

		</div>
	</div>
	


	<div class="regist">
		<div class="re_top">
			&nbsp;<b>出现错误</b>
			
			<div class="tips"><h1><?=$message;?></h1></div>
			
			<div class="jump"><span id="sec"><?=$sec;?></span>秒<a href="<?=$url;?>">跳转</a></div>
		</div>
	
		<script>
			setInterval(function(){
				var i = document.getElementById('sec');
				var num = parseInt(i.innerHTML);
				num--;
				i.innerHTML = num;
			},1000);
		
		</script>
		
	</div>
	
</body>
</html>