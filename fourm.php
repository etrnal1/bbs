<?php
include 'common/common.php';

$uid = $_SESSION['uid'];

if (empty($_SESSION['uid'])) {
	error('你没有登录', 3, 'login.php');

}
//联合插叙，同时查询user 表的嘻嘻

$sql = "select d.*,u.username from bs_detail d inner join bs_user u on u.uid = d.uid  order by d. createtime desc";

// echo $sql;
$result = mysqli_query($conn, $sql);
if ($result && mysqli_affected_rows($conn)) {
	while ($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;

	}
} else {
	$data = null;
}

display('details.html', compact('webSite', 'data'));