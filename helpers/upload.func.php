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

function upload($key,$path,$maxSize,$allowMime,$allowSubFix,$isRand = false)
{	
	$error = $_FILES[$key]['error'];
	if($error){
		switch($error){
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
		return [0,$str];
	}
	
	if($_FILES[$key]['size'] > $maxSize){
		return [0,'超过了自定义的大小'];
	}
	
	if(!in_array($_FILES[$key]['type'],$allowMime)){
		return [0,'文件类型不准许'];
	}
	
	$info = pathinfo($_FILES[$key]['name']);
	$subFix = $info['extension'];
	
	if(!in_array($subFix,$allowSubFix)){
		return [0,'文件后缀不准许'];
	}
	
	if($isRand){
		$newName = uniqid().'.'.$subFix;
	}else{
		$newName = $_FILES[$key]['name'];
	}
	$path = rtrim($path,'/').'/';
	$path = $path.date('Y/m/d/');
	if(!file_exists($path)){
		mkdir($path,777,true);
	}
	
	if(!is_uploaded_file($_FILES[$key]['tmp_name'])){
		return [0,'不是临时文件'];
	}
	
	if(move_uploaded_file($_FILES[$key]['tmp_name'],$path.$newName)){
		return [1,$path.$newName,$_FILES[$key]['type']];
	}else{
		return [0,'上传失败'];
	}
	
}
