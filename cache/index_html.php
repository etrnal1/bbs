<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>首页-yzt</title>
		
		<link href="<?=$webSite;?>img/css/section.css" type="text/css" rel="stylesheet" /> 
		<link href="<?=$webSite;?>img/css/index.css" type="text/css" rel="stylesheet" /> 
		
		</head>
	<body>
<div class="head">
		<div class="logo"></div>
		<div class="menu">
			<ul>
				<li><a href="index.php">首页</a></li>
				<li><a href="list.php">新帖</a></li>
				<li><a href="#">下载</li>
				<li><a href="#"><b>插件和模板</b></a></li>
				<li><a href=""
					<?=$webSite;?>logout.php"><b>退出</b></a></li>
				
				<li><a href="<?=$webSite;?>admin/">管理中心</a></li>
			
			</ul>
		</div>
		<div class="user">
			<ul>
				<li><a href="#"><img src="<?=$webSite;?>img/image/search.jpg"></a></li>
			  <?php if($_SESSION['uid']):?>
				
				<li><a href="<?=$webSite;?>setting.php">个人中心</a></li>
			  
			
			  
				
			 <?php else: ?>
			 	<li><a href="<?=$webSite;?>login.php">登录</a></li>
				<li><a href="<?=$webSite;?>register.php">注册</a></li>
			  <?php endif;?>
			</ul>	

		</div>
	</div>
	<section>
		<!-- <div class="guanggao">
			这是广告需要注释掉
			<img src="<?=$webSite;?>img/image/gunagao.png" />
		</div> -->
		<div class="wenzi">
			<span>今日：2</span><img src="<?=$webSite;?>img/image/wenzi.png" />
			<span>昨日：24</span><img src="<?=$webSite;?>img/image/wenzi.png" />
			<span>最高日：557035</span><img src="<?=$webSite;?>img/image/wenzi.png" />
			<span>帖子：15778037</span><img src="<?=$webSite;?>img/image/wenzi.png" />
			<span>会员：2367342</span><img src="<?=$webSite;?>img/image/wenzi.png" />
			<span>新会员：<a href="#">yuzhiteng</a></span>
		</div>
		<div class="redian">
			<div class="top">
				<span><a href="#">热点动态</a></span>
				<span style="border:none;"><a href="#">版主团队</a></span>	
			</div>
			<div class="center">
				<ul>
					<li>
						<a class="fangkuai" href="#">[程序发布]</a>
						<a href="#" class="red">PW移动社区9.0正式推出，开放公测（2015.11.19更新）</a>
					</li>
					
				</ul>
			</div>
			<div class="center">
				<ul>
					<li>
						<a class="fangkuai" href="#">[模板/插件] </a>
						<a href="#" class="qianlan">虚拟信息发布插件上线啦~</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[安装使用]</a>
						<a class="fangkuai" href="#">phpwind移动ios版剧透第一波</a>
					</li>
					</ul>
			</div>
		</div>
		<div class="center-a">
			<a href="#">
				<img src="<?=$webSite;?>img/image/yun.png" />
			</a>	
		</div>
		<div class="biaoti">
			
			<table width="1200" cellpadding="0" cellspacing="0">
				<tr height="36" style="background-color:#F7F7F7;">
					<td colspan="2">
					<a href="#"></a>
					<td>
					<div class="biaoti-right">
					   <a href="#">于志腾</a>
						<p>分栏版主：</p>
					</div>
					</td>
				</tr>
				<tr style="background-color:#fff;" height="76" class="one">
					
					<td>
						<img src="<?=$webSite;?>img/image/tb.png" />
						<div>
							<a href="fourm.php?fid=<?=$val['fid'];?>"></a>
							
							<p>主题：574，帖子：157834</p>
							<p>最后回复：05-24 20:11</p>
						</div>
					</td>
					

				</tr>
			</table>
			
			
		</div>
		<div class="youqing">
				<div class="biao1">友情链接</div>
			<div class="xiangguan">
				<ul>
					<li><a href="a" class="tz">阿里云云栖社区</a></li>
					<li><a href="a" class="tz">阿里云官方论坛</a></li>
					<li><a href="a" class="tz">PHP100中文网</a></li>
					<li><a href="a" class="tz">青州论坛</a></li>
					<li><a href="a" class="tz">phpwind站长网</a></li>
					<li><a href="a" class="tz">中钓论坛</a></li>
					<li><a href="a" class="tz">昆山论坛</a></li>
					<li><a href="a" class="tz">15路驿站</a></li>
					<li><a href="a" class="tz">重庆社区</a></li>
					<li><a href="a" class="tz">重庆社区</a></li>
					<li><a href="a" class="tz">闪电软件论坛</a></li>
					<li><a href="a" class="tz">厦门小鱼</a></li>
					<li><a href="a" class="tz">CNZZ数据专家</a></li>
					<li><a href="a" class="tz">中国站长论坛</a></li>
					<li><a href="a" class="tz">上虞论坛</a></li>
					<li><a href="a" class="tz">服务器频道</a></li>
					<li><a href="a" class="tz">爱威海</a></li>
					<li><a href="a" class="tz">华夏联盟论坛</a></li>
					<li><a href="a" class="tz">TT86综合社区</a></li>
					<li><a href="a" class="tz">中国站长之家</a></li>
					<li><a href="a" class="tz">搜狐博客开放平台</a></li>
					<li><a href="a" class="tz">齐博CMS</a></li>
					<li><a href="a" class="tz">中国营口论坛</a></li>
					<li><a href="a" class="tz">湖州南太湖</a></li>
					<li><a href="a" class="tz">猴岛游戏论坛</a></li>
					<li><a href="a" class="tz">华彩联盟论坛</a></li>
				</ul>
			</div>
		</div>
	</section>
	</body>


</html>