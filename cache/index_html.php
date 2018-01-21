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
				<?php if(!empty($_SESSION['type']) ):?>
				<li><a href="<?=$webSite;?>admin/index.php">管理员中心</li>
				<?php endif;?>
				
				
			</ul>
		</div>
		<div class="user">
			<ul>
				<?php if(empty($_SESSION['uid'])):?>
				<li><a href="login.php">登录</a></li>
				<li><a href="register.php">注册</a></li>
		 	 	<?php else: ?>
		 	 	  <li><?=$_SESSION['username'];?></li>
		 	 	  <li><a href="<?=$webSite;?>admin/index.php">管理员中心</a></li>
		 	 	  <li><a href="<?=$webSite;?>logout.php">退出</a></li>
		 	 	  <?php endif;?>

			</ul>	

		</div>
	</div>
	<section>
		<div class="guanggao">
			<!-- 广告<img src="<?=$webSite;?>img/image/gunagao.png" /> -->
		</div>
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
				<!-- 	<li>
						<a class="fangkuai" href="#">[程序发布]</a>
						<a href="#" class="red">PW移动社区9.0正式推出，开放公测（2015.11.19更新）</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[8.7移动版]</a>
						<a href="#" class="red">PW移动社区8.7（GBK&UTF8）版本开启公测（11月13日更新）！</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[phpwind 黑板报]</a>
						<a class="blue" href="#" >获取phpwind官方论坛邀请码！</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[phpwind 黑板报]</a>
						<a class="green" href="#" >phpwind免费商业授权上线啦！~</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[程序发布]</a>
						<a class="fangkuai" href="#" >phpwind 9.X xss漏洞修复方案(20150730)</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[phpwind 黑板报]</a>
						<a href="#" class="red">phpwind插件模板正式入驻阿里云云市场！</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[安装使用]</a>
						<a class="fangkuai" href="#">phpwind移动ios版剧透第一波</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[安装使用]</a>
						<a class="lan" href="#"> pw 9.x常见问题及处理方案汇总帖（5月6日更新）</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[程序发布]</a>
						<a class="lan" href="#"> phpwind v9.0.1 utf8更新（2014年12月23号）</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[phpwind 黑板报]</a>
						<a href="#" class="red">phpwind插件模板正式入驻阿里云云市场！</a>
					</li> -->
				</ul>
			</div>
			<!-- <div class="center">
				<ul>
					<li>
						<a class="fangkuai" href="#">[模板/插件] </a>
						<a href="#" class="qianlan">虚拟信息发布插件上线啦~</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[模板/插件]</a>
						<a href="#" class="zise">phpwind手机版 8.X html5触屏版 windtouch5.for小魔客</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[模板/插件]</a>
						<a class="huise" href="#" > phpwind手机验证服务正式上线[支持9.x、8x]~</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[新品上架] </a>
						<a class="green" href="#" >phpwind9.x整站+门户模板，仿小城东港风格</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[程序发布]</a>
						<a class="fangkuai" href="#" >phpwind 9.X xss漏洞修复方案(20150730)</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[1元专区]</a>
						<a href="#" class="red">模板插件之1元专区</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[安装使用]</a>
						<a class="fangkuai" href="#">phpwind移动ios版剧透第一波</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[安装使用]</a>
						<a class="red" href="#"> pw 9.x常见问题及处理方案汇总帖（5月6日更新）</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[新品上架]</a>
						<a class="red" href="#">phpwind9.x整站模板ThinkW3-手机端自适应</a>
					</li>
					<li>
						<a class="fangkuai" href="#">[官方推荐]</a>
						<a href="#" class="green">phpwind8.7蓝色GBK模板_论坛+门户【林克设计】</a>
					</li>
				</ul>
			</div> -->
		</div>
		<!-- 阿里云广告区<div class="center-a">
			<a href="#">
				<img src="<?=$webSite;?>img/image/yun.png" />
			</a>	
		</div> -->
		<div class="biaoti">
			<!-- <?php foreach( $parentFourm as $key => $value):?> -->
			<table width="1200" cellpadding="0" cellspacing="0">
				<tr height="36" style="background-color:#F7F7F7;">
					<td colspan="2">
					<a href="#"><?=$value['fourm_name'];?></a>
					<td>
					<div class="biaoti-right">
					   <a href="#">于志腾</a>
						<p>分栏版主：</p>
					</div>
					</td>
				</tr>
				<tr style="background-color:#fff;" height="76" class="one">
					<!-- <?php foreach($value['child'] as $val):?> -->
					<td>
						<!-- 淘宝广告<img src="<?=$webSite;?>img/image/tb.png" /> -->
						<div>
							<a href="fourm.php?fid=<?=$val['fid'];?>"><!-- <?=$val['fourm_name'];?> --></a>
							
							<p>主题：574，帖子：157834</p>
							<p>最后回复：05-24 20:11</p>
						</div>
					</td>
					<!-- <?php endforeach;?> -->

				</tr>
			</table>
			<!-- <?php endforeach;?> -->
			
		</div>
		<div class="youqing">
				<div class="biao1">友情链接</div>
			<div class="xiangguan">
				<ul>
					<li><a href="a" class="tz">阿里云云栖社区</a></li>
					
					
					
				</ul>
			</div>
		</div>
	</section>
	</body>

</html>