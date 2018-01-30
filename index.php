<?php
/**
 * 首页进行数据的展示。到前台进行展示
 */
include 'common/common.php';

// //从大板块里面添加数据
// fid =id
$fBan = select($conn, DB_PREFIX . 'category', 'fid,category', 'pid=0');
//fid  pid = 0 是父板块 ,pid != 0 的子板块
// dump($fBan);
// exit();
//小板块 id

//小版块小查询
foreach ($fBan as $key => $val) {
	$child = select($conn, DB_PREFIX . 'category', 'fid,category', "pid=" . $val['fid']);

	$fBan[$key]['child'] = $child;

}
//dump($fBan);
//echo '123';
display('index.html', compact('webSite', 'fBan'));