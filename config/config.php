<?php
//时区
define('TIMEZONE', 'PRC');
//定义网站的域 名和文件夹
define('WEB_SITE', 'http://www.tp5.com/');
//是否开启调试模式
define('DEBUG', 0);
//网站是否关闭
define('IS_CLOSE', false);

define('PATH', str_replace('\\', '/', substr(dirname(__FILE__), 0, -6)));

//皮肤
define('TPL_PATH', PATH . 'views/');
define('TPL_CACHE', PATH . 'cache/');

//积分放后台：每天登陆、每次签到、每次发贴 、每次回贴 、每次删贴扣多少
