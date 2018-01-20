<?php
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