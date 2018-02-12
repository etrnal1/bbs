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
// $sql = "update bs_detail set hits=hits+1  where did= $did";
$sql = "update" . DB_PREFIX . "details set hits=hits+1 where did=$did";

$result = mysqli_query($conn, $sql);
$did = (int) $_GET['did'];
// $sql = "select u.username,u.uid,u.avother,d.did,d.title";

//查询帖子内容
$sql = "select u.username,u.uid,d.did,d.title,d.content,d.createtime from bs_detail as d,bs_user as u where u.uid =d.uid";
$result = mysqli_query($conn, $sql)
;

/**
 * 对发帖内容进行了调试
 *
 */
if ($result && mysqli_affected_rows($conn)) {

	$data = mysqli_fetch_assoc($result);

} else {

	$data = null;
}

//dump($data);
display('tiezilie.html', compact('data', 'webSite'));

?>