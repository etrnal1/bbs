<?php
include 'common/common.php';

if (strcmp($_POST['pwd'], $_POST['repassword'])) {
	error('两次密码不一致');
	exit();
}
if (strcasecmp($_SESSION['verify'], $_POST['code'])) {

	error('验证码不正确');
	exit();

}

// 接收数据执行sql 语句,进行注入，如果有，则成功

$data['username'] = $_POST['username'];
$data['password'] = parsePwd($_POST['pwd']);

$data['repassword'] = parsePwd($_POST['repassword']);
unset($data['repassword']);

//这里成为一个索引数组可以自动销毁;
$conn = insert($conn, DB_PREFIX . 'user', $data);
//var_dump($conn);

if ($conn) {
	success('注册成功', '3', 'index.php');
} else {
	error('注册失败');

}
// if (strcmp($_POST['pwd'],$_POST['repassword'])) {
// 	error('两次密码不一致');
// }

// if (strcasecmp($_SESSION['verify'],$_POST['code'])) {
// 	error('验证码不正确');
// }

// if (! ($email = checkEmail($_POST['email']))) {
// 	error('邮箱格式不正确');
// }

// if(! ($username = checkUserName($_POST['username']))) {
// 	error('用户名长度不正确');
// }

// $data['username'] = $username;
// $data['password'] = parsePwd($_POST['pwd']);
// $data['email'] = $email;
// $data['lasttime'] = time();
// $data['createtime'] = time();

// $id = insert($conn,DB_PREFIX.'user',$data);

// if ($id) {
// 	success('注册成功',3,'index.php');
// } else {
// 	error('注册失败');
// }
