<?php
/**
 * 写一些基本的数据库参数
 * 一个转换字符串的函数
 */
function parseValue($data) {
	if (is_string($data)) {
		$data = '\'' . $data . '\'';

	} elseif (is_array($data)) {
		$data = array_map('parseValue', $data);

	} elseif (is_null($data)) {
		$data = 'null';

	}

}