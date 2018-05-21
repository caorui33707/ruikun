<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:47:"template/wap\default\Member\memberIndexB2C.html";i:1513303782;s:30:"template/wap\default\base.html";i:1513303782;s:34:"template/wap\default\urlModel.html";i:1513303783;s:32:"template/wap\default\footer.html";i:1513303782;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/member_index.css">
<style>
.head{
	border-bottom:0;
}
.panel.memberhead{
	background:url(__TEMP__/<?php echo $style; ?>/public/images/shoptop.png);
	background-size:100% 100%; 
}
.member{
	    width: 64%;
    float: right;
    margin-top: 26px;
	color:#fff;
}
.img{
	width:100%;
    margin: 5px 0;
}
.code{
    background: #fff;
	overflow: hidden;
}
.rec{
	height: 17px;
    /* margin: 5px 10px; */
    padding: 10px 20px;
	border-bottom: 1px solid #E2E1E1;
	line-height:17px;
}

.module-icon.memberCoupon {
    background:url(__TEMP__/<?php echo $style; ?>/public/images/Coupon.png) no-repeat;
	width: 22px;
    height: 22px;
	float: left;
    margin-top: 9px;
	    margin-right: 10px;
    display: inline-block;
	background-size:100% 100%;
}
.member-info{
	background: rgba(255,79,79, 0.8);
	float:left;
	width:33%;
	color: #fff;
	text-align: center;
	line-height:41px;
}
.vertical-bar{
	border-left: 1px solid rgba(250,250,250,0.6);
	height: 32px;
	vertical-align: middle;
	display: inline-block;
	margin-top:5px;
}
.namer{
    position: absolute;
    left: 103px;
    top: 30px;
}
.signin{
	position: absolute;
    left: 170px;
    top: 61px;
    border-radius: 3px;
    font-size: 10px;
    line-height: 14px;
    padding: 1px 5px;
}
.no{
	color: yellow;
	border: 1px solid yellow;
}
.yes{
	color: #fff;
	border: 1px solid #fff;
}
.last a{
	position: relative;
}
.tips{
	width: 16px;
	height: 16px;
	background: #fff;
	border:1px solid #F93F40; 
	border-radius: 50%;
	font-size: 6px;
	line-height: 16px;
	text-align: center;
	color: #F93F40;
	position: absolute;
	z-index: 10;
	right: -10px;
	top: -6px;
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
	
	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
<!--  <section class="head" style="background:#222;">
		<a class="head_back" onclick="window.history.go(-1)" href="javascript:void(0)" style="width:60px;"><i class="icon-back" style="color:#fff;margin-right:10px;"></i><span style="font-size:15px;color:#fff;">返回</span></a>
		<div class="head-title" style="color:#fff;">店铺中心</div>
	</section> -->
<div class="panel memberhead">
	<div class="member_head">
		<a href="<?php echo __URL('APP_MAIN/member/personaldata?shop_id='.$shop_id); ?>">
			<p style="float:left;margin: 20px 0 20px 20px;position:relative;">
				<i>
				<?php if($member_img == '0'): ?>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/member_default.png"/>
				<?php else: ?>
					<img src="<?php echo __IMG($member_img); ?>" />
				<?php endif; ?>
				</i>
			</p>
			<p class="member" style="text-align:left;margin-right: 20px;margin-top: 40px;">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/edit.png" style="float:right;width:20px; margin: 0 10px 0 0;">
				<span class="namer" style="font-size:14px;"><!-- 会员名： --><?php echo $member_info["user_info"]['nick_name']; ?></span>
				<span style="font-size:14px;position: absolute;font-size: 12px;top: 60px;left: 103px;"><?php echo $member_info['level_name']; ?></span>
			</p>
		</a>
		<?php if($integralconfig['sign_integral'] == 1): if($isSign == 0): ?>
		<span class="signin no" onclick="signIn();"><?php echo lang('sign_in'); ?></span>
		<?php else: ?>
		<span class="signin yes"><?php echo lang('signed_in'); ?></span>
		<?php endif; endif; ?>
		<div style="overflow: hidden;width: 100%;">
			<a href="<?php echo __URL('APP_MAIN/member/balancewater?shop_id='.$shop_id); ?>" class="member-info" style="width:49.5%;">
				<span ><?php echo lang('member_balance'); ?>&nbsp;</span><span ><?php echo $member_info['balance']; ?></span>
			</a>
			<!-- <a href='APP_MAIN/member/coinwater?shop_id=<?php echo $shop_id; ?>' class="member-info" >
				<span >购物币&nbsp;</span><span >{1$member_info['coin']}</span>
			</a> -->
			<i class="vertical-bar"></i>
			<a href='<?php echo __URL('APP_MAIN/member/integralwater?shop_id='.$shop_id); ?>' class="member-info" style="float:right;width:49.5%;"><span ><?php echo lang('goods_integral'); ?>&nbsp;</span><span ><?php echo $member_info['point']; ?></span></a>
		 </div>
	</div>
</div>
<div class="control">
	<div class="control_l">
		<span class="control_l_content"><?php echo lang('all_orders'); ?></span>
	</div>
	<div class="control_r"><a href="<?php echo __URL('APP_MAIN/order/myorderlist?shop_id='.$shop_id); ?>" class="right_href"><?php echo lang('member_view_all_orders'); ?></a></div>
</div>

<div class="panel member-nav" >
	<ul class="fu clear" >
		<li class="last" >
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=0&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/pay.png">
				<?php if($unpaidOrder != 0): ?>
					<div class="tips"><?php echo $unpaidOrder; ?></div>
				<?php endif; ?>
				<p><?php echo lang('member_pending_payment'); ?></p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=1&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/send.png">
				<?php if($shipmentPendingOrder != 0): ?>
				<div class="tips"><?php echo $shipmentPendingOrder; ?></div>
				<?php endif; ?>
				<p><?php echo lang('member_shipment_pending'); ?></p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=2&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/recieve.png">
				<?php if($goodsNotReceivedOrder != 0): ?>
				<div class="tips"><?php echo $goodsNotReceivedOrder; ?></div>
				<?php endif; ?>
				<p><?php echo lang('member_goods_received'); ?></p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=3&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/recieved.png">
				<p><?php echo lang('member_received_goods'); ?></p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=4&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/reback.png"/>
				<?php if($refundOrder != 0): ?>
				<div class="tips"><?php echo $refundOrder; ?></div>
				<?php endif; ?>
				<p><?php echo lang('refund_after_sale'); ?></p>
			</a>
		</li>
	</ul>
</div>

<div class='member_list'>
<?php if(is_array($menu_arr) || $menu_arr instanceof \think\Collection || $menu_arr instanceof \think\Paginator): $i = 0; $__LIST__ = $menu_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr_item): $mod = ($i % 2 );++$i;?>
	<ul>
		<?php if(is_array($arr_item) || $arr_item instanceof \think\Collection || $arr_item instanceof \think\Paginator): $i = 0; $__LIST__ = $arr_item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<li>
			<a href="<?php echo __URL('APP_MAIN/'.$vo['url']); ?>">
				<i class=" module-icon <?php echo $vo['class']; ?>" ></i>
				<span ><?php echo $vo['title']; ?></span>
				<span class='jiantou'></span>
			</a>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?> 
	</ul>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div>

<!--distribution contact us end-->
<script type="text/javascript">
$(function(){
	buttomActive('#bottom_member');
	//$("#wchat_binding").css("display":"none;");
})	
function signIn(){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('APP_MAIN/member/signIn'); ?>",
		data : {
			"sign" : true
		},
		success : function(data){
			if(data['code']>0){
				$(".signin").not(":hidden").removeClass("no").addClass("yes").text("已签到");
			}
		}
	})
}
</script>

	
	
		<?php if($custom_template_is_enable == 1): ?>
		
			<div class="js-bottom-blank" style="height:56px;"></div>
			<?php echo hook("customtemplate",['type'=>'wap_common_footer']); else: ?>
		
			<div style="height:58px;"></div>
			<!-- 底部菜单 -->
<div class="fixed bottom">
	<div class="distribution-tip" id="distribution-tip" style="display: none;"></div>
	<dl class="sub-nav nav-b5">
		<dd id="buttom_home">
			<a href="<?php echo __URL('APP_MAIN'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/home_check.png"/>
					<span><?php echo lang('home_page'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="buttom_classify">
			<a href="<?php echo __URL('APP_MAIN/goods/goodsclassificationlist'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png"/>
					<span><?php echo lang('category'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="buttom_store" >
				<a href="<?php echo __URL('APP_MAIN/index/shopstreet'); ?>">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png"/>
						<span>店铺街</span>
					</div>
				</a>
			</dd>
		<dd id="bottom_cart">
			<a href="<?php echo __URL('APP_MAIN/goods/cart'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png"/>
					<span><?php echo lang('goods_cart'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="bottom_member">
			<a href="<?php echo __URL('APP_MAIN/member/index'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png"/>
					<span><?php echo lang('member_member_center'); ?></span>
				</div>
			</a>
		</dd>
	</dl>
</div>
			
		<?php endif; ?>
		
	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	

</body>
</html>