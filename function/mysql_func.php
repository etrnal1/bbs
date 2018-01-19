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

/**
 * [insert 添加数据description]
 * @param  [type] $conn  [连接资源description]
 * @param  [type] $table [连接哪个表description]
 * @param  [type] $data  [数据description]
 * @return [type]        [返回类型description]
 */
//insert into bs_user(id,username,password) value('1','li','');
//可以看作一个数组的键和值;
function insert($conn, $table, $data) {
	$fields = join(',', array_keys($data));
	$values = implode(',', parseValue(array_values($data)));
	$sql = "insert into $table($fields) values($values)";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		return true;

	} else {
		return false;
	}

}

/**
 * [update 更新函数的细节 update $table set $set where $where]
 * @param  [type] $conn  [数据库资源description]
 * @param  [type] $table [表description]
 * @param  [type] $data  [传入的数据description]
 * @param  [type] $where [条件description]
 * @return [type]        [description]
 */
function update($conn, $table, $data, $where) {
	$set = join(',', parseSet($data));
	$sql = "update $table set $set where $where";
	$result = mysqli_query($conn, $sql);
	return $result;

}

/**
 * [select 查询是用来展示数据的,所以最后要返回结果]
 * @param  [type] $conn   [description]
 * @param  [type] $table  [description]
 * @param  [type] $fields [description]
 * @param  [type] $where  [description]
 * @return [type]         [description]
 */
function select($conn, $table, $fields, $where) {
	$sql = "select $fields from $table where $where";
	$result = mysqli_query($conn, $sql);
	if ($result && mysqli_affected_rows($conn)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;

		}
		return $data;
	} else {
		return false;
	}
}

function delete($conn, $table, $where) {
	$sql = "delete from $table where $where";
	$result = mysqli_query($conn, $sql);
	if ($result && mysqli_affected_rows($conn)) {
		return mysqli_affected_rows($conn);

	} else {
		return false;
	}
}

function idCount($conn, $table, $field) {
	$sql = "select $field from $table";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);
	return $row[0];

}
