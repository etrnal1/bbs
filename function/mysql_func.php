<?php
/**
 * 写了一些数据库查询的函数
 * 写的连接资源一定要return 回去
 * 不然会报错
 */

/**
 * [connect description]
 * @param  [type] $host     [数据库连接地址description]
 * @param  [type] $user     [数据库连接用户description]
 * @param  [type] $password [数据库连接密码description]
 * @param  [type] $charset  [数据库连接字符集description]
 * @return [type]           [返回类型描述description]
 */
function connect($host, $user, $pwd, $name, $charset) {
	if (!$conn = mysqli_connect($host, $user, $pwd)) {

		return '数据库连接失败';

	}
	if (!mysqli_select_db($conn, $name)) {
		return false;

	}
	mysqli_set_charset($conn, $charset);

	return $conn;

}