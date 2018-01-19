<?php
/**
 *
 *展示数据。从数据库查询文章
 */
include 'common.php';

$sql = "select id,title,content ,cid from bs_article where id>0";

$result = mysqli_query($conn, $sql);
//var_dump($sql);
if ($result && mysqli_affected_rows($conn)) {
	echo '<table width ="800" border="1>';
	echo '<tr>';
	echo '<td>选项</td>';
	echo '<td> 文章id</td>';
	echo '<td> 文章标题</td>';
	echo '<td>文章内容</td>';
	echo '</tr>';
	while ($row = mysqli_fetch_assoc($result)) {
		$row[] = $row;
		echo '<tr>';
		echo '<td>' . $row['id'] . '</td>';
		echo '<td>' . $row['title'] . '</td>';
		echo '<td>' . $row['content'] . '</td>';
		echo '<td>' . $row['cid'] . '</td>';

		echo '</tr>';

		//var_dump($row['content']);

	}

	echo '</table>';

}

?>