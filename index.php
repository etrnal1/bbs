<?php
include 'common/common.php';

// $data = select($conn, DB_PREFIX . 'user', 'uid,username,password,lasttime,type', "username='$username'");
// select $conn  $table $files $where;
// $conn = select($conn,DB_PREFIX.'user','uid,username,password',"uid=$_SESSION['uid']");
//var_dump($_SESSION);
//display('index.html', compact('webSite'));

// display('login.html', compact('webSite'));
display('index.html', compact('webSite'));