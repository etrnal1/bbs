<?php
include 'common/common.php';
unset($_SESSION);
session_destroy();
success('退出成功', 2, 'login.php');