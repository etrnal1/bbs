<?php
include 'common/common.php';
$sql = "select uid,username,password from bs_user where id>0";

$result = mysqli_query($conn, $sql);
if ($result && mysqli_affected_rows($conn)) {
	while ($row = mysqli_fetch_assoc($result)) {

		$data[] = $row;

	}
} else {

	echo '没有数据 ';
}
