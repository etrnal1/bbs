<?php

function overImage($img,$width,$height,$path)
{
	//��ͼƬ
	$res = anyOpen($img);
	//ȡ��ͼƬ��Ϣ
	$info = imageInfo($img);
	//�ȱ������㷨�õ��µĿ���
	$new_size = getNewSize($width,$height,$info);
	//������
	$new_res = kidOfImage($res,$new_size,$info);
	
	$path = rtrim($path,'/').'/'.uniqid().'.png';
	
	imagepng($new_res,$path);
	imagedestroy($new_res);
	
}


//ר��ȡ�ÿ����Ϣ����
function imageInfo($source)
{
	$info = getimagesize($source);
	$data['width'] = $info[0];
	$data['height'] = $info[1];
	return $data;
}

//����gif���
function kidOfImage($srcImg,$size, $imgInfo){
			//�����µĳߴ磬����һ��ָ���ߴ��ͼƬ
			$newImg = imagecreatetruecolor($size["width"], $size["height"]);		
			//����͸��ɫ
			$otsc = imagecolortransparent($srcImg);
			if( $otsc >= 0 && $otsc < imagecolorstotal($srcImg)) {
				 //ȡ��͸��ɫ
		  		 $transparentcolor = imagecolorsforindex( $srcImg, $otsc );
		 		 	 //����͸��ɫ
					 $newtransparentcolor = imagecolorallocate(
			   		 $newImg,
			  		 $transparentcolor['red'],
			   	         $transparentcolor['green'],
			   		 $transparentcolor['blue']
		  		 );
				//�������͸��
		  		 imagefill( $newImg, 0, 0, $newtransparentcolor );
				 
		  		 imagecolortransparent( $newImg, $newtransparentcolor );
			}

		
			imagecopyresized( $newImg, $srcImg, 0, 0, 0, 0, $size["width"], $size["height"], $imgInfo["width"], $imgInfo["height"] );
			imagedestroy($srcImg);
			//�������ʾͽ����͸��ɫ���� 
			return $newImg;
		}


//�ȱ�����
function getNewSize($width, $height,$imgInfo){	
			$size["width"]=$imgInfo["width"];          //��ԭͼƬ�Ŀ�ȸ������е�$size["width"]
			$size["height"]=$imgInfo["height"];        //��ԭͼƬ�ĸ߶ȸ������е�$size["height"]
			
			if($width < $imgInfo["width"]){
				$size["width"]=$width;             //���ŵĿ�������ԭͼС���������ÿ��
			}

			if($width < $imgInfo["height"]){
				$size["height"]=$height;            //���ŵĸ߶������ԭͼС���������ø߶�
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