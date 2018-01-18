<?php
/**
 * 变量:整型，浮点，字符串，布尔，is_scalar
 * 混合 array ,object
 * 特殊 null ,resource
 *
 */

$set[] = "username ='liwenkai'";
$set[] = "password='liwenkaihaha'";
//var_dump($set);
$sql = join(',', $set);
echo $sql;
exit();

var_dump($set);

?>