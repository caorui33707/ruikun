<?php
namespace app\home\model;
use think\Model;
use think\Request;

class Image extends Model{

    public function img(){
        $request = Request::instance();
        $ip = $request->ip();

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

        //cookie
        cookie('authcode_'.$ip,$code);

        file_put_contents('D:/authcode_set_'.$ip,$code);

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

    public function img2($w=200,$h=40,$num=4,$lnum=5,$pix=50){

        $request = Request::instance();
        $ip = $request->ip();
        $ip = str_replace('.','-',$ip);

        //1.创建一个图片资源
        // imagecreatetruecolor(width,height)
        $image = imagecreatetruecolor($w,$h);

        //2.获取一个颜色资源
        //imagecolorallocate(r,g,b)
        $color = imagecolorallocate($image,221,221,221);

        //3.绘制背景
        //imagefilledrectangle(图像资源,左上x,左上y,右下x,右下y,颜色)
        imagefilledrectangle($image,0,0,$w,$h,$color);

        //4.绘制文本
        $str = "0123456789";
        $len = strlen($str);
        //定义一个字符串用于存储验证码内容
        $verify = "";
        for($i=0; $i<$num; $i++){
            // 取随机颜色
            $r = mt_rand(0,255);
            $g = mt_rand(0,255);
            $b = mt_rand(0,255);
            $fcolor = imagecolorallocate($image,$r,$g,$b);
            //获取字符
            $index = mt_rand(0,$len-1);
            $text = $str[$index];

            //将字符保留起来，用于后期验证
            $verify.=$text;

            //算出间距
            $jj = ($w-(20*$num))/($num+1);
            // 获取字的横坐标
            $x = $i*(20+$jj)+$jj;
            ////获取字的纵坐标
            $y = mt_rand(20,$h);
            $size = mt_rand(10,15); // 获取随机字体大小
            $angle = mt_rand(-30,30); // 获取随机角度
            imagefttext($image,$size,$angle,$x,$y,$fcolor,"./fonts/PINGFANG BOLD_1.TTF",$text);
        }
        //将验证码字符串保留包超全局变量$_SESSION中
//        session_start();
//        $_SESSION['code'] = $verify;

        //cookie
        cookie('authcode_'.$ip,$verify);


        file_put_contents('./fonts/authcode_set_'.$ip,$verify);

        //5.绘制干扰线
        //imageline(图像资源,起点x,起点y,终点x,终点y,颜色资源);
        for($j=0; $j<$lnum; $j++){
            // 取随机颜色
            $r = mt_rand(0,255);
            $g = mt_rand(0,255);
            $b = mt_rand(0,255);
            $lcolor = imagecolorallocate($image,$r,$g,$b);
            //获取随机位置
            $x1 = mt_rand(0,$w);
            $x2 = mt_rand(0,$w);
            $y1 = mt_rand(0,$h);
            $y2 = mt_rand(0,$h);
            imageline($image,$x1,$y1,$x2,$y2,$lcolor);
        }

        //6.绘制雪花点
        //imagesetpixel(图像资源,横坐标,纵坐标,颜色资源);
        for($k=0; $k<$pix; $k++){
            // 取随机颜色
            $r = mt_rand(0,255);
            $g = mt_rand(0,255);
            $b = mt_rand(0,255);
            $pixcolor = imagecolorallocate($image,$r,$g,$b);
            //获取随机位置
            $x = mt_rand(0,$w);
            $y = mt_rand(0,$h);
            imagesetpixel($image,$x,$y,$pixcolor);
        }


        // 生成图片
        imagepng($image);

        //销毁资源
        imagedestroy($image);

        // 设置文件编码类型
        header("Content-type: image/png;charset=utf8");

    }



}