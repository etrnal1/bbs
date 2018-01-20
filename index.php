

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
			boder:1px solid;
			text-align: center;
			f
			position: absolute;



		}
	.two ul{



		}
		.two ul li {
			float: left;
			margin: 5%;
			text-align: center;

		}
	/*	.three {
			 position: absolute;
			 width: 100%;
			 height: 20%;
			 top: 40%;
		}
*/

		.white ul li{

			list-style: none;
			padding: 0;
			margin: 0;
			float: left;
}
		.white ul li a{
			padding: 8px 50px;
			background: purple;
			width: 150px;
			height: 30px;
			font-color:red;
			line-height: 30px;
			text-align: center;

			font-color:red;
			display: block;
			text-decoration: none;
			border-right: 1px solid #000;
		}
		.white ul li a hover{
			background: white;
			color:#green;
		}


	</style>
</head>
<body>
<?php
include 'common.php';
//展示数据，如果没有。提示添加板块
$sql = "select id,category from bs_category where id>0";

$result = mysqli_query($conn, $sql);
//var_dump($result);

if ($result && mysqli_affected_rows($conn)) {
	while ($row = mysqli_fetch_assoc($result)) {

		echo '<div class="three"><a href="fabiao.php?classid=' . $row['id'] . '">' . $row['category'] . '</a>


		</div>';

	}

} else {

	echo '没有板块，请联系管理员添加板块';
}

?>
<div class="white">
	<ul>
		<li><a href="common.php">基本配置文件</a></li>
		<li><a href="set.php">设置</a></li>

		<li><a href="demo.php">示例</a></li>
		<li><a href="setpwd.php">忘记密码</a></li>
		<li><a href="list.php">用户列表</a></li>
		<li><a href="article_list.php">文章列表</a></li>
		<li><a href="bankuai.php">添加板块</a></li>
		<li><a href="register.html">注册</a></li>
		<li><a href="logout.php">退出</a></li>
	</ul>
</div>
<div class="two">
	<?if(empty($_SESSION['uid'])){
			echo '<li><a href="login.html">登录</a></li>';
		}else{
              if($_SESSION['usertype'] ==2){
					echo '管理员'.$_SESSION['username'];

				}else{
				echo '普通用户'.$_SESSION['username'];

			}
		};?>
</div>



</body>
</html>
<?php
mysqli_close($conn);
?>