<?php

/**
 * [checkTitle 检查文章标题的函数]
 * @param  [type] $title [传入函数]
 * @return [type]        [description]
 */
function checkTitle($title, $num = 2) {
	if (mb_strlen($title) < $num) {
		return false;
	}
	return trim($title);
}

function checkEmail($email) {
	$email = trim($email);
	$pattern = '/\w+@([a-zA-Z0-9-]+\.){1,3}\w+/';
	if (!preg_match($pattern, $email)) {
		return false;
	}
	return $email;
}

function checkUserName($username) {
	$username = trim($username);

	if (strlen($username) < 10 || strlen($username) > 15) {
		return false;
	}
	return $username;

}

function parsePwd($pwd) {
	return md5(trim($pwd));
}