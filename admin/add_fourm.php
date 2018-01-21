<?php
include '../common/common.php';

/**
 * 板块表  bs_category
 * 板块  ID
 * 板块简介  description
 * 最后添加的用户
 * 最后注册的时间
 * 板块  lasttitle varchar
 * 版块时间  int
 * 板块图标pic int
 *  master  版主  varchar  默认为空
 *  pid  默认为0 即为大板块
 *  大板块
 *  小板块  有一个父id
 */
//得到pid
$data['pid'] = empty($_POST['pid']) ? 0 : (int) $_POST['pid'];

$data['fourm_name'] = trim($_POST['fourm_name']);

$insert_id = insert($conn, DB_PREFIX . 'fourm', $data);

if ($insert_id) {
	success('添加成功');
}

mysqli_close($conn);
