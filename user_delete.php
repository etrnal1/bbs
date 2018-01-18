<?php
include 'common.php';
if (empty($_POST['id'])) {
	exit('没有数据提交');
}
//exit();
/**
 * 对数据进行批量处理，看他是字符串还是数组
 * is_array is_string
 * 然后根据join 进行拼接，将id 拼接进行
 */

if (is_array($_REQUEST['id'])) {
	$ids = implode(',', $_REQUEST['id']);
	//var_dump($ids);
	$sql = "delete from bs_user where uid in('.$ids.')";

} else {
	$id = (int) $_REQUEST['id'];
	$sql = "delete from bs_user where uid = '.$id.'";

}

$result = mysqli_query($conn, $sql);
if ($result) {
	echo '删除成功';

} else {

	echo '删除失败';

}

?>