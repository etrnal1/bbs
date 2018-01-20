<?php
/*

1.��ԭͼ����Ҫ��ˮӡ��ͼ��
2.��ˮӡͼ
3.��λ��
4.����ͼƬ
5.���header
6.���ͼƬ�򱣴�ͼƬ
7.����
*/

/*
*���ݴ򿪵�Ƭ������ˮӡ

*@param Դͼ
*@param ˮӡͼ
*@param λ�� 1��2��3��4��5��6��7��8��9��0
*@param �����ʲô��ʽ
*@param ����ʲôλ��
*@param �Ƿ���������ļ���
*@return 
*/

function water($source,$water = 'logo.png',$pos = 9, $alpha = 100,$type = 'png',$path = './water', $randName = false)
{
	//��ͼƬ�ļ��������ǲ�ͬ������
	$sourceRes = anyOpen($source);
	$waterRes = anyOpen($water);
	
	//��λ��ǰ���õ����
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
	
	//·��
	//�ļ���
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


