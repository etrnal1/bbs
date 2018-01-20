<?php
/*
1.׼����������С������δ�����ȸ�����һ������ô������СҲ�Ͳ�һ����
2.������ɫ
3.��Ҫдʲô������ ��Ҫд�����֣�׼����
4.��д����д��ͼƬ����
5.����Ԫ�أ�OCRʶ��
6.׼��headerͷ
7.׼�����ͼƬ
8.����ͼƬ
*/

/*
*��֤�����ɵĺ���
*
*@param ���ֵĸ���
*@param ���ֵ����ͣ����֡���ĸ����ĸ���ֻ�ϵ� 1 0-9  2 a-zA-Z 3 0-9A-Za-z
*@param ͼ������ 
*@param ��
*@param ��
*
*@return  string
*/

function verify($width = 100,$height = 50,$num = 5, $type = 3,$imgType = 'jpeg')
{
	$im = imagecreatetruecolor($width,$height);
	
	//׼������
	$string = '';
	switch ($type) {
		case 1:
			$str = '0123456789';
			//str_shuffle
			//substr
			$string = substr(str_shuffle($str),0,$num);
			break;
		case 2:
			//array_flip
			//range
			$tempArray = range('a','z');
			shuffle($tempArray);
			$slice = array_slice($tempArray,0,$num);
			$string = join('',$slice);
			break;
		
		case 3:
			$str = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnprstuvwxyz23456789';
			$string = substr(str_shuffle($str),0,$num);
			break;
	}
	
	//��һ��������ɫ��ͼƬ��������ɱ�����ɫ
	imagefilledrectangle($im,0,0,$width,$height,lightColor($im));
	
	//д��
	for($i = 0; $i < $num; $i++) {
		$x = floor($width / $num) * $i;
		$y = mt_rand(10,$height-20);
		
		imagechar($im,5,$x,$y,$string[$i],darkColor($im));
		
	}
	
	//����Ԫ�أ���
	for($i = 0; $i < ($width*$height)/$num/10; $i++){
		
		imagesetpixel($im,mt_rand(0,$width),mt_rand(0,$height),darkColor($im));
	}
	
	//����Ԫ�أ����ߣ�����
	for($i = 0; $i < 5; $i++){
		imagearc($im,mt_rand(0,$width),mt_rand(0,$height),mt_rand(0,$width),mt_rand(0,$height),mt_rand(10,360),mt_rand(10,360),lightColor($im));
	}

	header('Content-type:image/'.$imgType);
	imagejpeg($im);
	imagedestroy($im);
	
	return $string;	
}

//�������ǳɫ
function lightColor($img)
{
	return imagecolorallocate($img,mt_rand(130,255),mt_rand(130,255),mt_rand(130,255));
}

//���������ɫ
function darkColor($img)
{
	return imagecolorallocate($img,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
}