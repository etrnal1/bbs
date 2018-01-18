<?php
/**
 * 将修改的信息获取过来，更新到数据库中
 */
include 'common.php';
//var_dump($_POST);

$id = $_POST['id'];
$username = $_POST['username'];
//准备sql语句
$sql = "update bs_user set username = '$username' where uid ='$id'";
$result = mysqli_query($conn, $sql);
//var_dump($result);
if ($result) {
	echo '更新成功';
	echo '<a href="index.html">点击进首页</a>';

} else {
	echo '更新失败';
	echo '<a href="hah ">点击返回修改页面</a>';
}
mysqli_close($conn);

?>