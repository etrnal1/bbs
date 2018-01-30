<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>这是发帖页面</title>
	<style type="txet/css">
	</style>
</head>
<body>
	<a href="fatie.php?fid=<?=$_GET['fid'];?>">发帖</a>
	<?php if(empty($data)):?>
	  没有数据
	<?php else: ?>
		<?php foreach($data as $val):?>
		
     <div >  
     	 <div>
     	 	<ul style="list-style-type:none;">
                    <li><a href="details.php?did=<?=$val['did'];?>&fid=<?=$_GET['fid'];?>"><?=$val['title'];?></a></li>
     	 		<li>作者 <?=$val['username'];?></li>
     	 		<li>时间 <?= date('Y-m-d H:i:s',$val['createtime']);?> </li>
     	 		
     	 		<li>点击数:<?=$val['hits'];?>  </li>
     	 		<li> 回复 数<?=$val['replynum'];?></li>
     	 	</ul>
     	   <!--  
     	     
     		
     	    -->
     	 </div>
     		
     </div>
	   <?php endforeach;?>
	<?php endif;?>
	
</body>
</html>