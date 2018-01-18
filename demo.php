<?php
/**
 * 做一个示例
 */
// $num = [1, 2, 3];
// $new_num = array_map('myself', $num);
// var_dump($new_num);
/**
 * [myself 回调自己的函数]
 * @return [type] [description]
 */
// function myself($v) {
// 	return $v * $v;
// }
//var_dump($new_num);
// $data = [
// 	'username' => 'liwenkai',
// 	'password' => 'liwenkai',
// 	'createtime' => 123,
// 	'createip' => 456,
// ];
//insert($data);
/**
 * 获取键值
 * array_keys
 * array_values
 * implode
 * array_map
 * 获取value值
 */
// function insert($data) {
// 	$key = implode('', array_keys($data));
// 	$value = implode('', parse_values(array_values($data)));
// 	$sql = "insert into bs_user($keys) values($values)";
// 	echo $sql;

// }
/**
 * [parse_values 自己写的一个分离数组键盘与值的函数
 *  判断是否是数组，是否是字符串,是否为空]
 * @param  [type] $data [description]
 * @return [type]       [description]
 */
$new_data = ['liwenkai', 'liwenhaihah', '123'];
//$new_data = ['liwen', 'hah', '32'];
$pd = parse_values($new_data);
//var_dump($pd);
function parse_values($data) {
	if (is_string($data)) {
		$data = '\'' . $data . '\'';

	} elseif (is_array($data)) {
		$data = array_map('parse_values', $data);

	} elseif (is_null($data)) {
		$data = null;

	}
	return $data;

}

?>