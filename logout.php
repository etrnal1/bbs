<?php
/**
 * unset
 * destory
 */
include 'common.php';
unset($_SESSION);
session_destroy();
$tips = '推出成功';
include 'tpl/success.php';
