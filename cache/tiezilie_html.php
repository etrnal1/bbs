<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>展示帖子的页面</title>
	<style type="text/css">
		.left{
			display: table-cell;
    		vertical-align: middle;
			width:20%;
			height: 200px;
			background:green;
			float: left;
			text-align: center;
			   
            line-height:25px;   
 

		}
		.right{
			width: 80%;
			min-height: 200px;
			background: red;
			float:right;
			  display: table-cell;
    		vertical-align: middle; 
  			line-height:25px;   
            

			text-align: center;
			text-indent: 10px;
			line-height: 20px;


		}
	</style>
</head>
<body>
	 
	<div class="left">
			
	用户姓名:<?=$data['username'];?>
		
		  
	</div>
	
	<div class="right">
   发帖内容: <?=$data['content'];?>

	</div>
	
</body>
</html>