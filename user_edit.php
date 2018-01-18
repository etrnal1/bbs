<?php
/**
 * 用户编辑，需要把数据给展示出来
 * 根据用户的信息查询信息进行展示
 * include common.php
 * 第一步获取id.然后进行执行，然后将结果抽取出来
 * 写form表单表格进行选项的编辑
 * 关闭数据库
 */
include 'common.php';

//根据数据情况进行不同程度展示,得到用户的id
$id = (int) $_REQUEST['id'];
$sql = "select uid,username from bs_user where uid='$id'";
//echo $sql;
$result = mysqli_query($conn, $sql);

if ($result && mysqli_affected_rows($conn)) {
	$user = mysqli_fetch_assoc($result);
	//var_dump($user);
	echo '<form action="user_update.php"  method="post">';
	echo '用户名<input type="text" name="username" value="' . $user['username'] . '"><br>';
	echo '<input type="hidden" name="id" value="' . $user['uid'] . '"/>';
	echo '<input type="submit" value="修改">';
	echo '</form>';

}

?>