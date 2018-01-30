<?php
// /
//  *
//  * 板块表有默认的id 有父id .父id默认为0 即为大板块
//  * 板块名字，板块创建的时间
//  */
include '../common/common.php';

//首先得到pid  得到大板块的id
$data['pid'] = empty($_POST['pid']) ? 0 : (int) ($_POST['pid']);
//得到板块名字
$data['category'] = trim($_POST['form_name']);
$data['createtime'] = time();
//var_dump($data);
//exit();
//进行插入数据库操作
$ds = insert($conn, DB_PREFIX . 'category', $data);
if ($ds) {
	success('添加板块成功');

}

// //得到pid,如果是0默认大板块
// $data['pid'] = $_POST['pid'] ? 0 : int($_POST['pid']);
// $data['category'] = trim($_POST['fourm_name']);
// $data['createtime'] = time();
// //插入数据库
// $insert = insert($conn, DB_PREFIX . 'category', $data);
// if ($insert) {
// 	success('创建成功');

// }

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
// $data['pid'] = empty($_POST['pid']) ? 0 : (int) $_POST['pid'];

// $data['fourm_name'] = trim($_POST['fourm_name']);

// $insert_id = insert($conn, DB_PREFIX . 'fourm', $data);

// if ($insert_id) {
// 	success('添加成功');
// }

mysqli_close($conn);
