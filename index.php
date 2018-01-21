<?php
include 'common/common.php';
//板块表叫bs_category 板块名字叫category
// $data['pid'] = empty($_POST['pid']) ? 0 : (int) ($_POST['pid']);
// //得到板块名字
// $data['category'] = trim($_POST['form_name']);
// $data['createtime'];
//查询信息
// $data = select($conn, DB_PREFIX . 'category', 'id,category', 'id>0');
// var_dump($data);
// $data = select($conn, DB_PREFIX . 'user', 'uid,username,password,lasttime,type', "username='$username'");
// select $conn  $table $files $where;
// $conn = select($conn,DB_PREFIX.'user','uid,username,password',"uid=$_SESSION['uid']");
//var_dump($_SESSION);
//display('index.html', compact('webSite'));

// display('login.html', compact('webSite'));
display('index.html', compact('webSite'));