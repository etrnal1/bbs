<?php
include '../common/common.php';

//查询大板块
$data = select($conn, DB_PREFIX . 'category', 'fid,category', 'pid=0');

// dump($data[0]);

// $data = select($conn,DB_PREFIX.'fourm','fid,fourm_name','pid=0');

display('admin/index.html', compact('webSite', 'data'));