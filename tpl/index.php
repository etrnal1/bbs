<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我自己做的头部信息</title>
	<style  type="text/css">
		.right{
			width: 300px;
			height: 50px;
			float: right;
		}
	</style>
</head>
<body>
		<?php if (empty($_SESSION['uid'])): ?>
		<div class="right">
			<a href="register.html">注册</a>| <a href="login.php">登录</a>
		</div>

	 <?php else: ?>
		<div class="right">
			欢迎用户:<?=$_SESSION['username']?>
			<?php if ($_SESSION['user_type'] == 2): ?>
			<a href="caiwu.php">管理员中心</a>

		<?php endif;?>
		<a href="logout.php">退出</a>
	<?php endif;?>
</body>
</html>