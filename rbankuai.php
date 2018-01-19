<?php
/**
 * 添加板块
 */
include 'common.php';

//var_dump($_SESSION);
$category = $_POST['category'];
if (!$category) {
	exit('非法数据');
}

$sql = "insert into bs_category(category)  values('$category')";
echo $sql;
$result = mysqli_query($conn, $sql);
var_dump($result);
if ($result) {
	echo '添加板块成功';
	echo '<a href="index.php">返回首页</a>';

}

?>