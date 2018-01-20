<?php

/**
*�ļ��ϴ�����
*
*@param $key
*@param $path
*@param $isRand
*@param $allowMime
*@param $allowSubFix
*
*@return array[״̬��·��] [״̬������]
*/

function upload($key,$path,$maxSize,$allowMime,$allowSubFix,$isRand = false)
{	
	$error = $_FILES[$key]['error'];
	if($error){
		switch($error){
			case 1:
				$str = '�����˴�С';
				break;
			case 2:
				$str = '�����˱��Ĵ�С';
				break;
			case 3:
				$str = '�����ļ����ϴ�';
				break;
			case 4:
				$str = 'û���ļ�����';
				break;
			case 6:
				$str = 'û�ҵ���ʱ�ļ���';
				break;
			case 7:
				$str = '�ļ�д��ʧ��';
				break;
		}
		return [0,$str];
	}
	
	if($_FILES[$key]['size'] > $maxSize){
		return [0,'�������Զ���Ĵ�С'];
	}
	
	if(!in_array($_FILES[$key]['type'],$allowMime)){
		return [0,'�ļ����Ͳ�׼��'];
	}
	
	$info = pathinfo($_FILES[$key]['name']);
	$subFix = $info['extension'];
	
	if(!in_array($subFix,$allowSubFix)){
		return [0,'�ļ���׺��׼��'];
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
		return [0,'������ʱ�ļ�'];
	}
	
	if(move_uploaded_file($_FILES[$key]['tmp_name'],$path.$newName)){
		return [1,$path.$newName,$_FILES[$key]['type']];
	}else{
		return [0,'�ϴ�ʧ��'];
	}
	
}
