<?php
/**
 * 登录界面 需要获取用户的信息
 * 获取用户的名字，密码
 * 先使用用户的名字与数据库的名字进行对比，看是否相等
 * 然后进行密码是否正确，
 * 使用session 将数据进行存入界面
 * 存入用户的信息与用户的id
 * 报错的时候，使用select 进行查询排错
 * $tips ='你好';
 * include 'error.php'
 */
include 'common.php';
//var_dump($_SESSION);
$username = trim($_POST['username']);
$pwd = md5(trim($_POST['password']));
//var_dump($_POST);

$sql = "select username,password from bs_user where username ='$username'";
//echo $sql;
$result = mysqli_query($conn, $sql);

//抽取数据
$db = mysqli_fetch_assoc($result);
//var_dump($db);
if (empty($db)) {

	$tips = '用户不存在';
	include 'tpl/error.php';

}

// if (empty($result)) {
// 	$tips = '登录失败，用户名不存在';
// 	include 'tpl/error.php';
// 	exit;

// }
$data = mysqli_fetch_assoc($result);
if ($pwd != $data['password']) {
	$tips = '密码不正确';
	include 'tpl/error.php';

}
//var_dump($data);
//var_dump($data['password']);
//exit();
if ($pwd == $data['password']) {
	$_SESSION['uid'] = $data['uid'];
	$_SESSION['username'] = $data['username'];
	// $_SESSION['user_type'] = $data['usertype'];
	$tips = '登录成功';
	include 'tpl/success.php';

} else {
	$tips = '登录失败';
	include 'tpl/error.php';
}

//var_dump($result);
//验证密码是否正确
