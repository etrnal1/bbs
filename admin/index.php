<?php
include '../common/common.php';

//查询大板块
$data = select($conn, DB_PREFIX . 'category', 'id,category', 'pid=0');
// $pids = $data;
//dump($data);

// $data = select($conn,DB_PREFIX.'fourm','fid,fourm_name','pid=0');

display('admin/index.html', compact('webSite', 'data'));