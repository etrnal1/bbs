<?php
include 'common/common.php';
if (empty($_SESSION['uid'])) {
	error('用户没有登录', 3, 'index.php');

}
// //传入键名title,传入验证类型,传入验证参数，做一个函数，回调循环;
if (!$content = checkTitle($_POST['editorValue'])) {
	error('内容少于5个字');
}

// echo '你好';

$data['fid'] = (int) $_POST['fid'];
// if ($content = checkTitle($_POST['content'], 5)) {
// 	error('内容少于五个字');
// }
$data['title'] = $_POST['title'];
$data['content'] = $content;
$data['createtime'] = time();
$data['uid'] = $_SESSION['uid'];

$insert = insert($conn, DB_PREFIX . 'detail', $data);

// var_dump($insert);
// exit();
if ($insert = insert($conn, DB_PREFIX . 'detail', $data)) {
	success('发帖成功', 3, 'fourm.php?fid=' . $fid);
} else {
	error('发帖失败');
}
