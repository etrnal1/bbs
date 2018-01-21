<?php
include 'common/common.php';

$username = $_POST['username'];

if (empty($username)) {
	error('用户名不存在');
	exit();

}
if (checkUsername($username)) {

	error('用户名长度不正确');
	exit();
}

//从数据库查数据
$data = select($conn, DB_PREFIX . 'user', 'uid,username,password,lasttime,type', "username='$username'");

if (parsePwd($_POST['password']) != $data[0]['password']) {
	error('密码不正确');
	exit();
}
//var_dump($_SESSION);

$_SESSION['uid'] = $data[0]['uid'];
$_SESSION['username'] = $data[0]['username'];
$_SESSION['type'] = $data[0]['type'];

/**
 *给用户给予默认头像
 */
if ($data[0]['type']) {

	$_SESSION['header'] = $data[0]['header'];
} else {
	$_SESSION['header'] = $webSite . 'img/face/face.gif';

}

$data = $last['lasttime'] = time();

update($conn, DB_PREFIX . 'user', $last, "uid=$data");

success('登录成功', '3', 'index.php');
// 有上次登录时间
