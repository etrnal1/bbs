<?php
include '../common/common.php';

//得到pid
$data['pid'] = empty($_POST['pid'])? 0 : (int)$_POST['pid'];

$data['fourm_name'] = trim($_POST['fourm_name']);

$insert_id = insert($conn,DB_PREFIX.'fourm',$data);


if ($insert_id) {
	success('添加成功');
}

mysqli_close($conn);
