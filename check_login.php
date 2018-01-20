<?php
include 'common/common.php';

// 判断用户名的长度，不需要验证码
// 将接收的信息用变量保存起来
//
$username = $_POST['username'];
if (empty($username)) {
	error('用户名不存在');
	exit();

}
if (checkUsername($username)) {

	error('用户名长度不正确');
}

//从数据库查数据
$data = select($conn, DB_PREFIX . 'user', 'uid,username,password,type', "username='$username'");

// xiaobai
// w1234,

// 判断密码是否一致
//var_dump($data[0]['password']);
//echo md5($_POST['password']);
//exit();
//
if (parsePwd($_POST['password']) != $data[0]['password']) {
	error('密码不正确');
	exit();
}

//
//session 存储用户名 UID type

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
//update $conn $table   $field where
$last['lasttime'] = time();
update($conn, DB_PREFIX . 'user', $last, "uid=$data[0]['uid']");

// update($conn, DB_PREFIX . 'user', $last, "id = $data[0]['uid']");
// 登录成功跳转
error('登录成功', 'index.php');
// 有上次登录时间

//更新登录时间

// if (!($username = checkUserName($_POST['username']))) {
// 	error('用户名长度不确');
// }

// if (strcasecmp($_POST['code'], $_SESSION['verify'])) {
// 	error('验证码不正确');
// }

// $data = select($conn, DB_PREFIX . 'user', 'uid,username,password,type', "username='$username'");

// if ($data[0]['password'] != parsePwd($_POST['password'])) {
// 	error('密码错误');
// }

// $_SESSION['uid'] = $data[0]['uid'];
// $_SESSION['username'] = $data[0]['username'];
// $_SESSION['type'] = $data[0]['type'];
// //添加给管理员，然后管理员有默认头像
// if ($data[0]['avater']) {
// 	$_SESSION['avater'] = $data[0]['avater'];
// } else {
// 	$_SESSION['avater'] = $webSite . 'img/face/face.gif';
// }

// //lasttime 上次登陆时间需要更新一下
// $last['lasttime'] = time();

// success('登陆成功', 3, 'index.php');
