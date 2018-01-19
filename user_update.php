<?php
/**
 * 将修改的信息获取过来，更新到数据库中
 */
include 'common.php';
//var_dump($_POST);

$id = $_POST['id'];
$username = trim($_POST['username']);

//准备sql语句 判断是否有密码。如果有密码可以对密码进行更新

if (!empty($_POST['password'])) {
	$password = md5(trim($_POST['rpwd']));
	$sql = "update bs_user set username = '$username'  ,password ='$password' where uid ='$id'";
	echo $sql;

} else {

	echo '无权限修改密码';

}
$result = mysqli_query($conn, $sql);
//var_dump($result);
if ($result) {
	echo '更新成功';
	echo '<a  href="index.html">点击进首页</a>';

} else {
	echo '更新失败';
	echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">点击返回修改页面</a>';
}
mysqli_close($conn);

?>