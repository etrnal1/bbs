<?php
/**
 *
 * 接收数据进行文章表的插入操作
 */

include 'common.php';
$cretetime = time();
$title = trim($_POST['title']);
$content = trim($_POST['content']);
$pid = $_POST['pid'];

//进行数据库的拼接 sql语句语法要扎实
$sql = "insert into bs_article(title,content,cid) values('$title','$content',$pid)";
//echo $sql;
$result = mysqli_query($conn, $sql);
if (!$result) {
	echo '文章编辑失败';
} else {
	echo '文章发表成功';
	echo '<a href="index.php">去首页查看文章</a>';
}
//var_dump($result);

//($shuju);
mysqli_close($conn);

?>