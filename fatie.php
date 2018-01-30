<?php
/**
 * 发贴页面
 */
include 'common/common.php';
if (empty($_SESSION['uid'])) {
	error('你没有登录，请进入登录页面');

}
display('fatie.html', compact('webSite'));
// var_dump($_GET);

?>