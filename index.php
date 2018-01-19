

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>你好</title>

	<style type="text/css">
		div {
			background-color: orange;
		}
		.xg{
			 border:1px solid #cc;
			 width: 100%;
			 height: 80px;
			 line-height: 80px;
			}

		.two{
			width: 100%;
			height: 10%;
			boder:1px solid;
			text-align: center;
			background-color: orange;
			top:10%;
			left: 20%;

		}
		.two ul{



		}
		.two ul li {
			float: left;
			margin: 5%;
			text-align: center;

		}
		.three {

			 width: 200px;
			 height: 300px;
		}

	</style>
</head>
<body>
<?php
include 'common.php';
//展示数据，如果没有。提示添加板块
$sql = "select id,category from bs_category where id>0";

//echo $sql;

$result = mysqli_query($conn, $sql);
//var_dump($result);
if ($result && mysqli_affected_rows($conn)) {
	while ($row = mysqli_fetch_assoc($result)) {

		echo '<div><a href="fabiao.php?classid=' . $row['id'] . '">' . $row['category'] . '</a></div>';

	}

} else {

	echo '没有板块，请联系管理员添加板块';
}

?>

	<div class="two">
		<ul>
		<li><a href="login.html">登录</a></li>
		<li><a href="register.html">注册</a></li>
		<li><a href="common.php">基本配置文件</a></li>
		<li><a href="set.php">设置</a></li>
		<li><a href="demo.php">示例</a></li>
		<li><a href="setpwd.php">忘记密码</a></li>
		<li><a href="list.php">用户列表</a></li>
		<li><a href="article_list.php">文章列表</a></li>
		<li><a href="bankuai.php">添加板块</a></li>
	</ul>
   </div>
   <div class="three">
   	 板块
   </div>


</body>
</html>
<?php
mysqli_close($conn);
?>