<?php
/*
1.准备画布，大小。（在未来长度个数不一样，那么画布大小也就不一样）
2.生成颜色
3.需要写什么样的字 ，要写的文字，准备好
4.把写的字写到图片上面
5.干扰元素（OCR识别）
6.准备header头
7.准备输出图片
8.销毁图片
 */

/*
 *验证码生成的函数
 *
 *@param 文字的个数
 *@param 文字的类型：数字、字母、字母数字混合的 1 0-9  2 a-zA-Z 3 0-9A-Za-z
 *@param 图像类型
 *@param 宽
 *@param 高
 *
 *@return  string
 */

function verify($width = 100, $height = 50, $num = 5, $type = 3, $imgType = 'jpeg') {
	$im = imagecreatetruecolor($width, $height);

	//准备文字
	$string = '';
	switch ($type) {
	case 1:
		$str = '0123456789';
		//str_shuffle
		//substr
		$string = substr(str_shuffle($str), 0, $num);
		break;
	case 2:
		//array_flip
		//range
		$tempArray = range('a', 'z');
		shuffle($tempArray);
		$slice = array_slice($tempArray, 0, $num);
		$string = join('', $slice);
		break;

	case 3:
		$str = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnprstuvwxyz23456789';
		$string = substr(str_shuffle($str), 0, $num);
		break;
	}

	//有一个背景底色的图片，随机生成背景颜色
	imagefilledrectangle($im, 0, 0, $width, $height, lightColor($im));

	//写字
	for ($i = 0; $i < $num; $i++) {
		$x = floor($width / $num) * $i;
		$y = mt_rand(10, $height - 20);

		imagechar($im, 5, $x, $y, $string[$i], darkColor($im));

	}

	//干扰元素：点
	for ($i = 0; $i < ($width * $height) / $num / 10; $i++) {

		imagesetpixel($im, mt_rand(0, $width), mt_rand(0, $height), darkColor($im));
	}

	//干扰元素：曲线（弧）
	for ($i = 0; $i < 5; $i++) {
		imagearc($im, mt_rand(0, $width), mt_rand(0, $height), mt_rand(0, $width), mt_rand(0, $height), mt_rand(10, 360), mt_rand(10, 360), lightColor($im));
	}

	header('Content-type:image/' . $imgType);
	imagejpeg($im);
	imagedestroy($im);

	return $string;
}

//随机产生浅色
function lightColor($img) {
	return imagecolorallocate($img, mt_rand(130, 255), mt_rand(130, 255), mt_rand(130, 255));
}

//随机产生深色
function darkColor($img) {
	return imagecolorallocate($img, mt_rand(0, 120), mt_rand(0, 120), mt_rand(0, 120));
}