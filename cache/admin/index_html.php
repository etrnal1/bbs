<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理中心</title>
</head>
<body>
	<form action="<?=$webSite;?>admin/add_fourm.php" method="post">
	 :父级分类<select name="pid" >
			<option value="0">无</option>
			<?php foreach($data as $val):?>
			
			  <option value="<?=$val['fid'];?>"><?=$val['category'];?></option>
			<?php endforeach;?>
			</select>

		<input type="text" name="form_name">
		<input type="submit" value="添加">

	</form>
	
</body>
</html>