<?php
/*

1.打开原图（需要加水印的图）
2.打开水印图
3.算位置
4.操作图片
5.输出header
6.输出图片或保存图片
7.销毁
*/

/*
*跟据打开的片，加上水印

*@param 源图
*@param 水印图
*@param 位置 1，2，3，4，5，6，7，8，9，0
*@param 保存成什么格式
*@param 保到什么位置
*@param 是否启用随机文件名
*@return 
*/

function water($source,$water = 'logo.png',$pos = 9, $alpha = 100,$type = 'png',$path = './water', $randName = false)
{
	//打开图片文件，可能是不同的类型
	$sourceRes = anyOpen($source);
	$waterRes = anyOpen($water);
	
	//算位置前，得到宽高
	$sInfo = getimagesize($source);
	$logoInfo = getimagesize($water);
	switch($pos) {
		case 1:
			$x = 0;
			$y = 0;
			break;
		case 2:
			$x = ($sInfo[0] - $logoInfo[0]) / 2;
			$y = 0;
			break;
		case 3:
			$x = $sInfo[0] - $logoInfo[0];
			$y = 0;
			break;
		case 4:
			$x = 0;
			$y = ($sInfo[1] - $logoInfo[1]) /2 ;
			break;
		case 5:
			$x = ($sInfo[0] - $logoInfo[0]) /2 ;
			$y = ($sInfo[1] - $logoInfo[1]) /2 ;
			break;
		case 6:
			$x = $sInfo[0] - $logoInfo[0];
			$y = ($sInfo[1] - $logoInfo[1]) /2 ;
			break;
		case 7:
			$x = 0;
			$y = $sInfo[1] - $logoInfo[1];
			break;
		case 8:
			$x = ($sInfo[0] - $logoInfo[0]) /2 ;
			$y = $sInfo[1] - $logoInfo[1];
			break;
		case 9:
			$x = $sInfo[0] - $logoInfo[0];
			$y = $sInfo[1] - $logoInfo[1];
			break;
		default:
			$x = mt_rand(0,$sInfo[0] - $logoInfo[0]);
			$y = mt_rand(0,$sInfo[1] - $logoInfo[1]);
	}
	
	imagecopymerge($sourceRes, $waterRes,$x,$y,0,0,$logoInfo[0],$logoInfo[1],$alpha);
	

	//$type = png
	//imagepng
	//$type = jpeg
	//imagejpeg()
	
	$func = 'image'.$type;
	
	//路径
	//文件名
	if($randName){
		$name = uniqid().'.'.$type;
	}else{
		$pathinfo = pathinfo($source);
		$name = $pathinfo['filename'].'.'.$type;
	}
	$path = rtrim($path,'/').'/'.$name;
	
	$func($sourceRes, $path);
	imagedestroy($sourceRes);
	imagedestroy($waterRes);
	return $path;
}


