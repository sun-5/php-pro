<?php

session_start();//开启session

$image = imagecreatetruecolor(300,90);//新建一个真彩图像

$bgcolor = imagecolorallocate($image,000,162,125); //分配颜色

imagefill($image,0,0,$bgcolor);//区域填充

$capth_code="";

for($i=0;$i<4;$i++){//4个字符
    $fontsize = 20;
    $fontcolor = imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));//字符颜色
   // $fontcontent = rand(0,9);//0-9数字
    $data = "abcdefghijklmnopqrstuvwxyz0123456789";
    $fontcontent = substr($data,rand(0,strlen($data)),1);//返回字符串一部分 字符串，截取位置0-字符串长度，截取一个字符 
    $captch_code .= "$fontcontent";//将取出的数据合取到captch_code中
    $x = ($i*300/4)+rand(35,55);//字符位置x轴
    $y =rand(35,55); //字符位置y轴
    //imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor); //水平显示一行字符串
    $fontpath = realpath('./font/FiraCode.otf'); //引入字体 字体大小 超过5
    imagefttext($image, $fontsize ,0, $x,$y,$fontcolor, $fontpath,$fontcontent);   
}

$_SESSION["code"] =  $capth_code;//把得到的字符存储到session中

for($i=0;$i<200;$i++){//增加像素点
    $pointcolor = imagecolorallocate($image,rand(50,200),rand(50,200),rand(50,200));
    imagesetpixel($image,rand(1,299),rand(1,89),$pointcolor);//加像素点  x,y位置
}

for($i=0;$i<6;$i++){//增加干扰线段
    $linecolor = imagecolorallocate($image,rand(60,200),rand(60,200),rand(60,200));
    imageline($image,rand(1,299),rand(1,89),rand(1,299),rand(1,89),$linecolor);//加线段 x,y位置
}

header('content-type:image/png');//用png输出

imagepng($image);//以一个png格式输出图片

 
imagedestory($image);//销毁图片


?>