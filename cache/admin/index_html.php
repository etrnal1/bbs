<html>
	<head>
		<meta charset="utf-8"/>
		<title>管理中心，添加版块</title>
		
		
		</head>
	<body>
	
		<form action="add_fourm.php" method="post">
			父级分类：<select name="pid">
				<option value="0">无</option>
				<?php foreach($data as $val):?>
				<option value="<?=$val['fid'];?>"><?=$val['fourm_name'];?></option>
				<?php endforeach;?>
			</select>
			
			<br />
			
			<input type="text" name="fourm_name" /><br />
			
			<input type="submit" value="添加" />
		
		
		</form>
		
		
	
	
	</body>
	
	
	
</html>