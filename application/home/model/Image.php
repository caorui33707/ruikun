<?php
namespace app\home\model;
use think\Model;

class Image extends Model{

    public function img(){
        $img = imagecreatetruecolor(100, 40);
        $black = imagecolorallocate($img, 0x00, 0x00, 0x00);
        $green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
        $white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
        imagefill($img,0,0,$white);
        //生成随机的验证码
        $code = '';
        for($i = 0; $i < 4; $i++) {  //4位数的验证码
            $code .= rand(0, 9);
        }
        imagestring($img, 5, 10, 10, $code, $black);
        //加入噪点干扰
        for($i=0;$i<50;$i++) {
            imagesetpixel($img, rand(0, 100) , rand(0, 100) , $black);  //imagesetpixel — 画一个单一像素，语法: bool imagesetpixel ( resource $image , int $x , int $y , int $color )
            imagesetpixel($img, rand(0, 100) , rand(0, 100) , $green);
        }
        //echo $code;
        //输出验证码
         header("content-type: image/png");
         imagepng($img);
        //imagepng($img);  //以 PNG 格式将图像输出到浏览器或文件
       // imagedestroy($img);  //图像处理完成后，使用 imagedestroy() 指令销毁图像资源以释放内存，虽然该函数不是必须的，但使用它是一个好习惯。
    }
}