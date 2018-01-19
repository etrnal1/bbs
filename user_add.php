<?php
/**
 *
 * 用户注册页面的逻辑
 * 判断用户名的长度是不是空的
 * strlen
 * 去掉空格
 * 用到的知识点trim md5
 * 密码不是空的，密码长度是否大于6位，密码两次是否相同
 */
include 'common.php';
$username = trim($_POST['username']);
$password = md5(trim($_POST['pwd']));
$rpwd = md5(trim($_POST['repwd']));
$createtime = time();
$ip = ip2long($_SERVER['REMOTE_ADDR']);
/**
 * 先把规矩给改了，以后在完善
 */
// if (strlen($username) < 5) {
// 	exit('用户长度不能为空或者小于3位');

// }
// if ($password != $rpwd) {
// 	exit('两次密码长度不一致');

// }

if (!$conn) {
	echo '数据库连接失败';
	echo '错误号' . mysqli_errno($conn) . '错误信息为' . mysqli_error($conn);
	exit(‘数据库选择失败’);

}
/**
 * 这里数据库连接成功。需要将受到的数据注册到数据库中
 * 准备sql 语句
 * 执行sql 语句
 * 判断是否有结果，有结果就成功，无结果就失败
 */
$sql = "insert into bs_user(username,password,createtime,ip)values('$username','$rpwd','$createtime','$ip')";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_affected_rows($conn)) {
	//echo '注册成功,当前的用户为' . mysqli_insert_id($conn);
	$tips = '用户注册成功';
	include 'tpl/success.php';

} else {

	$tips = '用户注册成功';
	include 'tpl/error.php';

}

mysqli_close($conn);
//echo $sql;
//var_dump($conn);

?>