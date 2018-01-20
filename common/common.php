<?php
session_start();

define('BASE_PATH', str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, dirname(__DIR__) . DIRECTORY_SEPARATOR));

//加载文件列表
$includes = [
	'config/config.php',
	'config/database.php',
	'helpers/upload.func.php',
	'helpers/code.func.php',
	'helpers/tpl.func.php',
	'helpers/base.func.php',
	'helpers/mysql.func.php',
	'helpers/water.func.php',
	'helpers/overimage.func.php',
	'helpers/string.func.php',
];

//加载包含文件
foreach ($includes as $file) {
	$path = BASE_PATH . $file;
	if (file_exists($path)) {
		include $path;
	}

}

//去掉安装
// //是否安装过

// error_reporting(DEBUG);
// date_default_timezone_set(TIMEZONE);

//连接到数据库
$conn = connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_CHARSET);

if (!$conn) {
	exit('数库连接失败');
}

$webSite = WEB_SITE;
