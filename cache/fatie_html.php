<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我是来发帖子的</title>
	 <script type="text/javascript" charset="utf-8" src="<?=$webSite;?>ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?=$webSite;?>ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="<?=$webSite;?>ueditor/lang/zh-cn/zh-cn.js"></script>
	<style type="text/css">
		.one{
			position: absolute;
			width:400px;
			height: 400px;
			margin: 0;
			padding: 0;
		}
	</style>
</head>
<body>
	
	<form action="request.php" method="post">
		<div class="one">
			
	  	标题: <input type="text" name="title"><br>
	  	内容: 
      
	<script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>
	  <input type="hidden" name="fid" value="<?=$_GET['fid'];?>">
	  	 <input type="submit" value="发表">
	  </div>
	</form>
	<script>
		var ue =UE.getEditor('editor');
	</script>
	 
</body>
</html>