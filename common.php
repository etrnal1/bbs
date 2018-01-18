<?php
/**
 * 定义一些常量
 * 网站的根目录，包含基本的配置文件
 * 数据库函数文件
 * 传递的参数一定要写的正确
 */
define('WEB_SITE', str_replace('\\', '/', __DIR__) . '/');
$database = include WEB_SITE . 'config/config.php';
include WEB_SITE . 'function/base_func.php';

include WEB_SITE . 'function/mysql_func.php';
//echo WEB_SITE;
//var_dump($database);
//exit();
var_dump($database);
$cd = mysqli_connect('127.0.0.1', 'root', '');
//var_dump($cd);

$dbs = connect(
	$database['DB_HOST'],
	$database['DB_USER'],
	$database['DB_PWD'],
	$database['DB_NAME'],
	$database['DB_CHARSET']
);
$db = connect('127.0.0.1', 'root', '', 'bs', 'utf8');
var_dump($dbs);
exit();

// if ($conn) {
// 	echo '存在';
// 	return '返回成功';
// } else {

// 	echo '数据库连接失败';
// 	return '返回失败';
// }
//var_dump($conn);

?>