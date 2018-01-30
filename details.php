<?php
/**
 * 查询帖子的具体内容
 *
 */
include 'common/common.php';
//增加点击数
$did = (int) $_GET['did'];
//$data = 'hits=hit+1';
//update($conn, DB_PREFIX . 'detail', '$data', 'did=' . $did);
$sql = "update bs_detail set hits=hits+1  where did= $did";

var_dump($conn);
//exit();
// unn, DB_PREFIX . 'details', 'details', $did);pdate($co
// $sql = "update DB_PREFIX detail" . $set . " hits=hits+1 where did=" . $did;
// $sql = "update DB_PREFIX.detail"
// echo $sql;

$result = mysqli_query($conn, $sql);
//查询帖子内容
$sql = "select u.username,u.uid,d.did,d.title,d.content,d.createtime from bs_detail as d,bs_user as u where u.uid =d.did";
$result = mysqli_query($conn, $sql)
;
if ($result && mysqli_affected_rows($conn)) {

	$data = mysqli_fetch_assoc($result);
} else {
	$data = null;
}

//dump($data);
display('tiezilie.html', compact('data', 'webSite'));

?>