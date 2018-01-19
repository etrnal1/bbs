<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册成功信息界面</title>

<!-- 写了一个成功消息的页面 -->
	<style type="text/css">
		.error{
			width: 300px;
			height: 100px;
			background: pink;
			color: #fff;
			border: 1px solid #ccc;
			position: absolute;
			top: 40%;
			left: 40%;
			font-size: 18px;
			line-height: 100px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="error">
		<?=$tips;?>
		<!-- <a href="index.php?sid=">返回首页</a> -->

	</div>

</body>
</html>