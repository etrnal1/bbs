<?php
include 'common.php';
$sql = "select uid,username,password from bs_user where uid>0";
//echo $sql;

/**
 * [$page description]默认的页面如果没有给加上
 * 三元运算符
 * @var $count 可以查询.统计id 写sql语句
 */

/**
 * 写了三元运算符
 * @var [type]
 */

// var_dump($page);

$zongShu = "select count(uid) as total from bs_user";
$zongSql = mysqli_query($conn, $zongShu);
//将结果为关联数组
$zongCount = mysqli_fetch_assoc($zongSql);
$total = $zongCount['total'];
//var_dump($total);
//总条数 为20条，我想让一天显示两条数据，总共十页
//每页显示数，我要获取每页显示量
$num = 2;
$count = ceil($total / $num);
$page = empty($_GET['page']) ? 1 : (int) $_GET['page'];
//判断越界
if ($page < 1) {
	$page = 1;

} elseif ($page > $count) {
	$page = $count;

}
// mysqli_query($conn, $sql);

$result = mysqli_query($conn, $sql);
//偏移量
$offset = ($page - 1) * $num;
//var_dump($offset);
//实现跳转的关键
$sql = "select uid,username from bs_user order by uid asc limit $offset,$num";
$result = mysqli_query($conn, $sql);

//获取结果
//var_dump($result);
//exit();
if ($result && mysqli_affected_rows($conn)) {
	echo '<form action="user_delete.php" method="post">';

	echo '<table width="800" border="1">';
	echo '<tr>';
	echo '<td>选项</td>';
	echo '<td>id</td>';
	echo '<td>用户名</td>';
	echo '<td>选项</td>';
	echo '<td>选项</td>';

	echo '</tr>';
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<tr>';
		echo '<td><input type="checkbox" name="id[]" value="' . $row['uid'] . '"></td>';
		echo '<td>' . $row['uid'] . '</td>';
		echo '<td>' . $row['username'] . '</td>';
		echo '<td>
				<a href	="user_edit.php?id=' . $row['uid'] . '">编辑</a>
		     </td>';

		echo '<td><a href="user_delete.php?id=' . $row['uid'] . '">删除</a></td>';
		echo '</tr>';

	}

	echo '</table>';
	echo '<tr><td><input type="submit" name="sub" value="删除"  colspan ="2"></td></tr>';
	echo '</form>';
	echo '<a href="list.php?page=1">首页</a>';
	echo '<a href="list.php?page=' . ($page - 1) . '">上一页</a>';
	echo '<a href="list.php?page=' . ($page + 1) . '">下一页</a>';
	echo '<a href="list.php?page=' . ($count) . '">最后一页</a>';

} else {

	echo '没有数据 ';
}
