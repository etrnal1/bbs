<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发表文章</title>
</head>
<body>
  <form action="request.php" method="post">
  		<table width="800" border="1" >
  			标题 <input type="text" name="title" size="100"><br>

  			文章内容
  			 <textarea name="conteny" cols="100" rows="20">


  			 </textarea>





  		</table>
  		 <input type="hidden" name="pid" value="<?=$_GET['class_id'];?>">;
        <input type="submit" value="发表">

  </form>

</body>
</html>