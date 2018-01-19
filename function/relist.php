<?php
/**
 * 分页函数
 */
include 'common.php';
$count = idCount($conn, 'bbs_user', 'count(id)');
//每页显示数
$num = 2;
//首页
$page = empty($_GET['page']) ? 1 : (int) $_GET['page'];
//越界
if ($page < 1) {
	$page = 1;
} elseif ($page > $end) {
	$page = $end;

}
//下一页
$next = $page + 1;
//上一页
$prev = $page - 1;
//偏移量
$offset = ($page - 1) * $num;
//尾页
$end = ceil($count / $num);
//执行sql 语句
//$sql = "select $fields from $table where $where";
$sql = select($conn, 'bs_user', '*', "id>0 order by uid desc limit $offset,$num");
myqsli_close($conn);
include 'tpl/relist.php';

?>