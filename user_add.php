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
session_start();
include 'common.php';
var_dump(WEB_SITE);
var_dump($_POST);
$username = trim($_POST['username']);
$password = md5(trim($_POST['pwd']));
$rpwd = md5(trim($_POST['repwd']));
if (strlen($username) < 5) {
	exit('用户长度不能为空或者小于3位');

}
if ($password != $rpwd) {
	exit('两次密码长度不一致');

}
connect('127.0.0.1', 'root', '');
var_dump($conn);
if (!$conn) {
	echo '数据库连接失败';
	echo '错误号' . mysqli_errno($conn) . '错误信息为' . mysqli_error($conn);
	exit;

}

?>