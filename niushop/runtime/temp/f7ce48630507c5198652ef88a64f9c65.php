<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:45:"template/wap\default\Member\memberCoupon.html";i:1513303782;s:30:"template/wap\default\base.html";i:1513303782;s:34:"template/wap\default\urlModel.html";i:1513303783;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php if($title_before != ''): ?><?php echo $title_before; ?>&nbsp;-&nbsp;<?php endif; ?><?php echo $platform_shopname; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
<script src="__STATIC__/js/time_common.js" type="text/javascript"></script>
<script type="text/javascript">
var CSS = "__TEMP__/<?php echo $style; ?>/public/css";
var APPMAIN='APP_MAIN';
var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
var UPLOADCOMMON = 'UPLOAD_COMMON';
var SHOPMAIN = "SHOP_MAIN";
var temp = "__TEMP__/";//外置JS调用
var STATIC = "__STATIC__";
$(function(){
	showLoadMaskLayer();
})

$(document).ready(function(){
	hiddenLoadMaskLayer();
	//编写代码
});

//防止IOS手机返回不刷新
var isPageHide = false;
window.addEventListener('pageshow', function () {
	if (isPageHide) window.location.reload();
});
window.addEventListener('pagehide', function () {
	isPageHide = true;
});


//页面底部选中
function buttomActive(event){
	clearButton();
	if(event == "#buttom_home"){
		$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
	}else if(event == "#buttom_classify"){
		$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_check.png");
	}else if(event == "#buttom_stroe"){
		$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_check.png");
	}else if(event == "#bottom_cart"){
		$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_check.png");
	}else if(event == "#bottom_member"){
		$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_check.png");
	}
}

function clearButton(){
	$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png");
	$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png");
	$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png");
	$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png");
	$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png");
}

//显示加载遮罩层
function showLoadMaskLayer(){
	$(".mask-layer-loading").fadeIn(300);
}

//隐藏加载遮罩层
function hiddenLoadMaskLayer(){
	$(".mask-layer-loading").fadeOut(300);
}
</script>
<style>
body .sub-nav.nav-b5 dd i {margin: 3px auto 5px auto;}
body .fixed.bottom {bottom: 0;}
.mask-layer-loading{position: fixed;width: 100%;height: 100%;z-index: 999999;top: 0;left: 0;text-align: center;display: none;}
.mask-layer-loading i,.mask-layer-loading img{text-align: center;color:#000000;font-size:50px;position: relative;top:50%;}
.sub-nav.nav-b5 dd{width:20%;font-size:14px;}

.modal {
    position: fixed;
    top: 25%;
    left: 8%;
    z-index: 1050;
    width: 74%;
    background-color: #ffffff;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, 0.3);
    outline: none;
    -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding-box;
    background-clip: padding-box;
}
.fade {
    opacity: 1;
    -webkit-transition: opacity 0.15s linear;
    -moz-transition: opacity 0.15s linear;
    -o-transition: opacity 0.15s linear;
    transition: opacity 0.15s linear;
	padding:0 16px;
	border-radius: 6px;
}
.modal-title{
	    height: 45px;
    line-height: 45px;
    text-align: center;
    border-bottom: 1px solid #eee;
    color: red;
    font-size: 17px;
    font-weight: normal;
}
.log-cont{
	margin-top: 15px;
    height: 40px;
    line-height: 40px;
    border: 1px solid #eee;
    background: #fff;
    border-radius: 3px;
	padding: 1px 5px;
	padding-left: 10px;
}
.loginbotton{
	margin-top: 25px;
    height: 38px;
    line-height: 38px;
    text-align: center;
    background: red;
    margin-bottom: 33px;
    border-radius: 3px;
}

.lang-btn{
    border: 0;
    background: red;
    color: #fff;
}
input:-webkit-autofill, textarea:-webkit-autofill, select:-webkit-autofill {
    background-color: rgba(217, 217, 217, 0.29);
}
input{
	border:0;
	background:#fff;
}
.getvilidate{
    border: 1px solid red;
    border-radius: 3px;
    color: red;
	padding: 0 5px;
    height: 25px;
    line-height: 25px;
    margin-top: 4px;
}
body{max-width: 640px;}
</style>

    <link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/member_common.css">
    <style>
.coupon-price {
    position: absolute;
    top: 35%;
    left: 10%;
    font-size: 25px;
    color: #EB1606;
}
.coupon-lose{
    position: absolute;
    top: 67%;
    left: 10%;
    font-size: 14px;
}
.due-img{
	    display: block;
    position: absolute;
    top: 40%;
    bottom: 10%;
    left: 50%;
    right: 22%;
    background: url(__TEMP__/<?php echo $style; ?>/public/images/stamp-due.png) no-repeat;
    background-size: auto 100%;
}
.com_content li {
    width: 100%;
    position: relative;
    float: left;
    margin-top: 10px;
	background: #fff;
    padding: 5px;
	list-style: none;
}
.title{
	font-weight:bold;
	color:#707070;
	font-size: 1rem;
}
.clearfloat{
	content: '';
    display: inline-block;
    clear: both;
    width: 100%;
}
ul{
	
}
	</style>

</head>
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<script>
function __URL(url)
{
    url = url.replace('SHOP_MAIN', '');
    url = url.replace('APP_MAIN', 'wap');
    if(url == ''|| url == null){
        return 'SHOP_MAIN';
    }else{
        var str=url.substring(0, 1);
        if(str=='/' || str=="\\"){
            url=url.substring(1, url.length);
        }
        if($("#niushop_rewrite_model").val()==1 || $("#niushop_rewrite_model").val()==true){
            return 'SHOP_MAIN/'+url;
        }
        var action_array = url.split('?');
        //检测是否是pathinfo模式
        url_model = $("#niushop_url_model").val();
        if(url_model==1 || url_model==true)
        {
            var base_url = 'SHOP_MAIN/'+action_array[0];
            var tag = '?';
        }else{
            var base_url = 'SHOP_MAIN?s=/'+ action_array[0];
            var tag = '&';
        }
        if(action_array[1] != '' && action_array[1] != null){
            return base_url + tag + action_array[1];
        }else{
        	 return base_url;
        }
    }
}
 /**
  * 处理图片路径
  */
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = "__UPLOAD__\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
<body class="body-gray" style="margin: auto;">
	
<section class="head">
		<a class="head_back" id="backoutapp" onclick="window.history.go(-1)" href="javascript:void(0)"><i class="icon-back"></i></a>
		<div class="head-title"><?php echo lang('member_my_coupon'); ?></div>
	</section>

	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
 
  <div class="cf-container" data-reactid="2">
   		<div class="cf-edge" data-reactid="3"></div>
		<ul class="cf-content" data-reactid="4">
   			<li class="cf-tab-item select" data-index="1" data-reactid="7"><a href="javascript:getMemberCounponList(1);"><?php echo lang('unused'); ?></a></li>
			<li class="cf-tab-item" data-index="1" data-reactid="7"><a href="javascript:getMemberCounponList(2);"><?php echo lang('used'); ?></a></li>
			<li class="cf-tab-item" data-index="1" data-reactid="7"><a href="javascript:getMemberCounponList(3);"><?php echo lang('expire'); ?></a></li>
			
    	</ul>
	</div>
  
    <div class="com_content">
    	
    </div>
<script type="text/javascript">
	$(function(){
		$('.cf-container .cf-tab-item').click(function(){
       		$('.cf-container .cf-tab-item').removeClass('select');
       		$(this).addClass('select');
       	})
		getMemberCounponList(1);
	})
	function getMemberCounponList(type){
		$.ajax({
			type:'post',
			async:true,
			url:'<?php echo __URL('APP_MAIN/member/membercoupon'); ?>',
			data:{'type':type },
			dataType:'json',
			success:function(data){
				var listhtml='<div class="com_content"><ul id="not_use">';
				if(data.length>0){
					$('.null_default').hide();
					for(var i=0;i<data.length;i++){
						var money = data[i]['money'] != null ? data[i]['money'] : "";
						var coupon_code = data[i]['coupon_code'] != null ? data[i]['coupon_code'] : "";
						var coupon_name = data[i]['coupon_name'] != null ? data[i]['coupon_name'] : "";
						var start_time = data[i]['start_time'] != null ? data[i]['start_time'] : "";
						var end_time = data[i]['end_time'] != null ? data[i]['end_time'] : "";
						if(type==1){
							listhtml+='<li><div class="clearfloat"><span class="title" style="float:left;">'+coupon_name+'</span><span style="float:right;">'+coupon_code+'</span></div><a class="not_use" href="javascript:;">';
						}else{
							listhtml+='<li><div class="clearfloat"><span class="title" style="float:left;">'+coupon_name+'</span><span style="float:right;">'+coupon_code+'</span></div><a class="already-use" href="javascript:;">';
						}
						
						listhtml+='<div class="p-r">';
						listhtml+='<div class="active-msg"><img src="__TEMP__/<?php echo $style; ?>/public/images/coupon_member.png" style="width:100%;"/><div class="coupon-price" style="">￥'+money+'</div>';
						listhtml+='<div class="coupon-lose"><span>'+start_time+'</span><?php echo lang('until'); ?><span>'+end_time+'</span></div>';
						listhtml+='</div></div>';
						if(type==2){
							listhtml+='<span class="uneless-img"></span></a></li>';	
						}else if(type==3){
							listhtml+='<span class="due-img"></span></a></li>';
						}else{
							listhtml+='</div></a></li>';
						}
					}
					listhtml+='</ul></div>';
				}else{
					listhtml='<div class="null_default"><i class="icon-nocontent-youhuiquan"></i><span class="nulltext"><?php echo lang("you_do_not_have_any_coupons_yet"); ?>！</span></div>';
				}
				
				$('.com_content').html(listhtml);
			}
		})
	}
    $("#backoutapp").click(function (){
        var json ={
        		"center" : "1",
            }
        window.webkit.messageHandlers.center.postMessage(json);
    })
</script>


	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	

</body>
</html>