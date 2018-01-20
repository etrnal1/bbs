<?php
function dump($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	exit;
	
}

function error($message,$sec = 3,$url = null)
{
	if (is_null($url)) {
		$url = $_SERVER['HTTP_REFERER'];
	}
	display('error.html',compact('message','url','sec'));
	exit;
}

function success($message,$sec = 3,$url = null)
{
	if (is_null($url)) {
		$url = $_SERVER['HTTP_REFERER'];
	}
	display('success.html',compact('message','url','sec'));
	exit;
}


function anyOpen($path)
{
	//文件不存在，就没有必要执行了
	if (!file_exists($path)) {
		return false;
	}
	//查看文件类型
	$info = getimagesize($path);
	//根据MIME类型打智能打开图片
	switch($info['mime']){
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



function parseValue($data)
{
	//liwenkai   输出 'liwenkai'
	if(is_string($data)) {
		$data = '\''.$data.'\'';
	} elseif(is_array($data)) {
		$data = array_map('parseValue',$data);
	} elseif(is_null($data)) {
		$data = 'null';
	}
	return $data;
}

function parseSet($data)
{
	foreach($data as $key => $value){
		$value = parseValue($value);
		if(is_scalar($value)){
			$set[] = $key . '=' . $value;
		}
	}
	return $set;
}
