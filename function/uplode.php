<?php

/**
 *文件上传函数
 *
 *@param $key
 *@param $path
 *@param $isRand
 *@param $allowMime
 *@param $allowSubFix
 *
 *@return array[状态，路径] [状态，错误]
 */

function upload($key, $path, $maxSize, $allowMime, $allowSubFix, $isRand = false) {
	$error = $_FILES[$key]['error'];
	if ($error) {
		switch ($error) {
		case 1:
			$str = '超过了大小';
			break;
		case 2:
			$str = '超过了表单的大小';
			break;
		case 3:
			$str = '部份文件被上传';
			break;
		case 4:
			$str = '没有文件被传';
			break;
		case 6:
			$str = '没找到临时文件夹';
			break;
		case 7:
			$str = '文件写入失败';
			break;
		}
		return [0, $str];
	}

	if ($_FILES[$key]['size'] > $maxSize) {
		return [0, '超过了自定义的大小'];
	}

	if (!in_array($_FILES[$key]['type'], $allowMime)) {
		return [0, '文件类型不准许'];
	}

	$info = pathinfo($_FILES[$key]['name']);
	$subFix = $info['extension'];

	if (!in_array($subFix, $allowSubFix)) {
		return [0, '文件后缀不准许'];
	}

	if ($isRand) {
		$newName = uniqid() . '.' . $subFix;
	} else {
		$newName = $_FILES[$key]['name'];
	}
	$path = rtrim($path, '/') . '/';
	$path = $path . date('Y/m/d/');
	if (!file_exists($path)) {
		mkdir($path, 777, true);
	}

	if (!is_uploaded_file($_FILES[$key]['tmp_name'])) {
		return [0, '不是临时文件'];
	}

	if (move_uploaded_file($_FILES[$key]['tmp_name'], $path . $newName)) {
		return [1, $path . $newName, $_FILES[$key]['type']];
	} else {
		return [0, '上传失败'];
	}

}

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

function water($source, $water = 'logo.png', $pos = 9, $alpha = 100, $type = 'png', $path = './water', $randName = false) {
	//打开图片文件，可能是不同的类型
	$sourceRes = anyOpen($source);
	$waterRes = anyOpen($water);

	//算位置前，得到宽高
	$sInfo = getimagesize($source);
	$logoInfo = getimagesize($water);
	switch ($pos) {
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
		$y = ($sInfo[1] - $logoInfo[1]) / 2;
		break;
	case 5:
		$x = ($sInfo[0] - $logoInfo[0]) / 2;
		$y = ($sInfo[1] - $logoInfo[1]) / 2;
		break;
	case 6:
		$x = $sInfo[0] - $logoInfo[0];
		$y = ($sInfo[1] - $logoInfo[1]) / 2;
		break;
	case 7:
		$x = 0;
		$y = $sInfo[1] - $logoInfo[1];
		break;
	case 8:
		$x = ($sInfo[0] - $logoInfo[0]) / 2;
		$y = $sInfo[1] - $logoInfo[1];
		break;
	case 9:
		$x = $sInfo[0] - $logoInfo[0];
		$y = $sInfo[1] - $logoInfo[1];
		break;
	default:
		$x = mt_rand(0, $sInfo[0] - $logoInfo[0]);
		$y = mt_rand(0, $sInfo[1] - $logoInfo[1]);
	}

	imagecopymerge($sourceRes, $waterRes, $x, $y, 0, 0, $logoInfo[0], $logoInfo[1], $alpha);

	//$type = png
	//imagepng
	//$type = jpeg
	//imagejpeg()

	$func = 'image' . $type;

	//路径
	//文件名
	if ($randName) {
		$name = uniqid() . '.' . $type;
	} else {
		$pathinfo = pathinfo($source);
		$name = $pathinfo['filename'] . '.' . $type;
	}
	$path = rtrim($path, '/') . '/' . $name;

	$func($sourceRes, $path);
	imagedestroy($sourceRes);
	imagedestroy($waterRes);
	return $path;
}

function anyOpen($path) {
	//文件不存在，就没有必要执行了
	if (!file_exists($path)) {
		return false;
	}
	//查看文件类型
	$info = getimagesize($path);
	//根据MIME类型打智能打开图片
	switch ($info['mime']) {
	case 'image/jpg':
	case 'image/jpeg':
	case 'image/pjpeg':

		$res = imagecreatefromjpeg($path);
		break;
	case 'image/png':
		$res = imagecreatefrompng($path);
		break;
	case 'image/gif':
		$res = imagecreatefromgif($path);
		break;
	case 'image/wbmp':
	case 'image/bmp':
		$res = imagecreatefromwbmp($path);
		break;
	}

	//返回图片资源

	return $res;
}
