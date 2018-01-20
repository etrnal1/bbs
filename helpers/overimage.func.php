<?php

function overImage($img,$width,$height,$path)
{
	//打开图片
	$res = anyOpen($img);
	//取得图片信息
	$info = imageInfo($img);
	//等比缩放算法得到新的宽、高
	$new_size = getNewSize($width,$height,$info);
	//处理变黑
	$new_res = kidOfImage($res,$new_size,$info);
	
	$path = rtrim($path,'/').'/'.uniqid().'.png';
	
	imagepng($new_res,$path);
	imagedestroy($new_res);
	
}


//专门取得宽高信息的数
function imageInfo($source)
{
	$info = getimagesize($source);
	$data['width'] = $info[0];
	$data['height'] = $info[1];
	return $data;
}

//处理gif变黑
function kidOfImage($srcImg,$size, $imgInfo){
			//传入新的尺寸，创建一个指定尺寸的图片
			$newImg = imagecreatetruecolor($size["width"], $size["height"]);		
			//定义透明色
			$otsc = imagecolortransparent($srcImg);
			if( $otsc >= 0 && $otsc < imagecolorstotal($srcImg)) {
				 //取得透明色
		  		 $transparentcolor = imagecolorsforindex( $srcImg, $otsc );
		 		 	 //创建透明色
					 $newtransparentcolor = imagecolorallocate(
			   		 $newImg,
			  		 $transparentcolor['red'],
			   	         $transparentcolor['green'],
			   		 $transparentcolor['blue']
		  		 );
				//背景填充透明
		  		 imagefill( $newImg, 0, 0, $newtransparentcolor );
				 
		  		 imagecolortransparent( $newImg, $newtransparentcolor );
			}

		
			imagecopyresized( $newImg, $srcImg, 0, 0, 0, 0, $size["width"], $size["height"], $imgInfo["width"], $imgInfo["height"] );
			imagedestroy($srcImg);
			//最终新资就解决了透明色的题 
			return $newImg;
		}


//等比缩放
function getNewSize($width, $height,$imgInfo){	
			$size["width"]=$imgInfo["width"];          //将原图片的宽度给数组中的$size["width"]
			$size["height"]=$imgInfo["height"];        //将原图片的高度给数组中的$size["height"]
			
			if($width < $imgInfo["width"]){
				$size["width"]=$width;             //缩放的宽度如果比原图小才重新设置宽度
			}

			if($width < $imgInfo["height"]){
				$size["height"]=$height;            //缩放的高度如果比原图小才重新设置高度
			}

			if($imgInfo["width"]*$size["width"] > $imgInfo["height"] * $size["height"]){
				$size["height"]=round($imgInfo["height"]*$size["width"]/$imgInfo["width"]);
			}else{
				$size["width"]=round($imgInfo["width"]*$size["height"]/$imgInfo["height"]);
			}

			return $size;
	}		
	
	

/*
$info = getimagesize('ly.jpg');
$data['width'] = $info[0];
$data['height'] = $info[1];

$new_size = getNewSize(300,100,$data);


$ly = imagecreatefromjpeg('ly.jpg');

$img = kidOfImage($ly,$new_size,$data);

header('Content-type:image/jpeg');
imagejpeg($img);
imagedestroy($ly);
imagedestroy($img);
*/