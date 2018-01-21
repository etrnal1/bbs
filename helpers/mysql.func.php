<?php
/**
 *连接数据库函数
 *@param $host string
 *@param $user string
 *@param $pwd  string
 *@param $name string
 *@param $charset string
 *
 *@return object
 */
function connect($host, $user, $pwd, $name, $charset) {
	if (!$conn = mysqli_connect($host, $user, $pwd)) {
		return false;
	}

	if (!mysqli_select_db($conn, $name)) {
		return false;
	}
	mysqli_set_charset($conn, $charset);
	return $conn;
}

/**
 *向哪个连接里面的哪个表插入数据
 *
 *@param $host string
 *@param $table string
 *@param $data array
 *
 *@return  $id int;
 */

function insert($conn, $table, $data) {
	$fields = join(',', array_keys($data));
	$values = implode(',', parseValue(array_values($data)));
	//insert into bbs(username,password) valuse('liwenkai')
	$sql = "insert into $table($fields) values($values)";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		return mysqli_insert_id($conn);
	} else {
		return false;
	}

}

function update($conn, $table, $data, $where) {
	$set = join(',', parseSet($data));
	$sql = "update $table set $set where $where";
	//echo $sql;
	$result = mysqli_query($conn, $sql);
	return $result;
}

function select($conn, $table, $fields, $where) {
	$sql = "select $fields from $table where $where";
	echo $sql;
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

function del($conn, $table, $where) {
	$sql = "delete from $table  where $where";
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
