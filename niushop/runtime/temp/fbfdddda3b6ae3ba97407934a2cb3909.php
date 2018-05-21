<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:47:"template/wap\default\Goods\goodsSearchList.html";i:1513303782;s:30:"template/wap\default\base.html";i:1513303782;s:34:"template/wap\default\urlModel.html";i:1513303783;s:37:"template/wap\default\controGroup.html";i:1513303782;s:35:"template/wap\default\goodsList.html";i:1513303782;}*/ ?>
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

<!-- 添加样式文件 -->

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
	<a class="head_back" href="javascript:window.history.go(-1);"><i class="icon-back"></i></a>
	<div class="head-title"><?php echo lang("member_commodity"); ?>"<?php echo $sear_name; ?>"<?php echo lang("search_results"); ?><style>
*{
	padding:0;
	margin:0;
}
.group{
	display: inline-block;
	width: 44px;
	height: 44px;
	background: #F7F7F7;
	float: right;
	text-align: center;
	border-left: 1px solid #F7F7F7;
}
.group img{
	width: 20px;
	margin-top: 15px;
}
.group-child{
	position: absolute;
	z-index: 10;
	width: 100%;
	height: 60px;
	background: #fff;
	margin-top: 1px;
	border-bottom: 1px solid #E2E2E2;
	display: none;
}
.group-child ul.gorup-nav{
	width: 100%;
}
.group-child ul.gorup-nav li{
	display: inline-block;
	width: 25%;
	height: 59px;
	float: left;
	text-align: center;
}
.group-child ul.gorup-nav li a{
	position: static;
	display: block;
}
.group-child ul.gorup-nav li a div{
	text-align: center;
	height: 54px;
	padding-top: 5px;
}
.group-child ul.gorup-nav li a div img{
	width: 28px;
	height: 28px;
	display: block;
	margin:0 auto 0 auto;
}
.group-child ul.gorup-nav li a div span.nav_name{
	font-size: 13px!important;
	height: 15px;
	display: block;
	color: #979899;
	margin-top: -10px;
}
</style>
<div class="group" data-show="false">
	<img src="__TEMP__/<?php echo $style; ?>/public/images/group.png" alt="">
</div>
<div class="group-child">
	<ul class="gorup-nav">
		<li>
			<a href="<?php echo __URL('APP_MAIN'); ?>">
				<div>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png"/>
					<span class="nav_name"><?php echo lang('home_page'); ?></span>
				</div>
			</a>
		</li>
		<li>
			<a href="<?php echo __URL('APP_MAIN/goods/goodsclassificationlist'); ?>">
				<div>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png"/>
					<span class="nav_name"><?php echo lang('category'); ?></span>
				</div>
			</a>
		</li>
		<li>
			<a href="<?php echo __URL('APP_MAIN/goods/cart'); ?>">
				<div>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png"/>
					<span class="nav_name"><?php echo lang('goods_cart'); ?></span>
				</div>
			</a>
		</li>
		<li>
			<a href="<?php echo __URL('APP_MAIN/member/index'); ?>">
				<div>
					<img src="__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png"/>
					<span class="nav_name"><?php echo lang('member_member_center'); ?></span>
				</div>
			</a>
		</li>
	</ul>
</div>
<script>
	$(".group").click(function(){
			if($(this).attr("data-show") == "false"){
				$(this).css({"background":"#fff","border-bottom":"1px solid #fff","border-left":"1px solid #E2E2E2"});
				$(".group-child").slideDown();
				$(this).attr("data-show","true");
			}else{
				$(this).css({"background":"#F7F7F7","border-bottom":"none","border-left":"1px solid #F7F7F7"});
				$(".group-child").slideUp();
				$(this).attr("data-show","false");
			}
			
		}
	)
</script></div>
</section>
<style>
	.head-title {
	margin: 0 80px;
	height: 44px;
	line-height: 44px;
	color: #333;
	font-size: 16px;
	text-align: center;
	width: 100%;
	margin: auto;
}
.custom-search{
	padding: 0px;
	background-color:#f7f7f7;
}
.custom-search form {
	margin: 0;
	position: relative;
	background: none;
	border-radius: 4px;
	border: 0 none;
	overflow: hidden;
}
.custom-search-button {
	top: 6px;
}
.members_goodspic{
	margin-top: 85px;
}

</style>
<script type="text/javascript">
$(function(){
	$('.custom-search-input').val('<?php echo $search_title; ?>');
})
</script>

	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
	<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/goods_list.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/public_assembly.js" type="text/javascript"></script>
<style type="text/css">
.order_div>span {width:33%;}
.order_div>span:nth-child(3) .ico_order_state{right:20%;}
.cart-box{overflow: hidden;height: 30px;display: block;width: 50%;float: right;position: relative;}
.add-cart{width: 30px;height: 30px;background: url(__TEMP__/<?php echo $style; ?>/public/images/btn_plus_normal.png) no-repeat;background-size: contain;position: absolute;right: 2px;top: 0px;z-index: 2;cursor: pointer;}
.s-buy{font-family: Helvetica, "STHeiti STXihei", "Microsoft YaHei", Tohoma,Arial;}
</style>
<section class="filtrate-term">
	<ul>
		<li class="cur filtrate-sort"><a href="javascript:void(0)">默认</a></li>
		<li class="filtrate-sort"><a href="javascript:void(0);" data-order-type="ng.sales" data-sort="asc"><?php echo lang('goods_sales_volume'); ?></a><i class="fa fa-angle-up" aria-hidden="true" style="    position: relative;top: -4px;left: 3px;"></i><i class="fa fa-angle-down" aria-hidden="true" style="position: relative;bottom: -3px;left: -6px;"></i></li>
		<li class="filtrate-sort"><a href="javascript:void(0);" data-order-type="ng.is_new" data-sort="desc"><?php echo lang('goods_new'); ?></a></li>
		<li class="filtrate-sort"><a href="javascript:void(0);" data-order-type="ng.promotion_price" data-sort="desc"><?php echo lang('goods_price'); ?></a><i class="fa fa-angle-up" aria-hidden="true" style="    position: relative;top: -4px;left: 3px;"></i><i class="fa fa-angle-down" aria-hidden="true" style="position: relative;bottom: -3px;left: -6px;"></i></li>
	</ul>
</section>
<section class="members_goodspic" id="main_list">
	<ul></ul>
</section>
<input type="hidden" id="page_count"><!-- 总页数 -->
<input type="hidden" id="page" value="1"><!-- 当前页数 -->
<input type="hidden" id="sear_type" >
<input type="hidden" id='order' name="order"/>
<input type="hidden" id='sort' name="sort"/>
<script>
$(function(){
	GetgoodsList(1,1);
	$(".filtrate-term ul li.filtrate-sort").click(function() {
		$(this).addClass("cur").siblings().removeClass("cur");
		var order_type = $(this).find("a").attr("data-order-type");
		var data_sort = $(this).find("a").attr("data-sort");
		var $this = $(this);
		$(".filtrate-term ul li.filtrate-sort i").css("color","#aaa");
		if(order_type != undefined && sort != undefined){
			if(data_sort == "desc"){
				sort = "asc";
				$(this).find("a").attr("data-sort","asc");
				if(order_type == "ng.promotion_price" || order_type == "ng.sales"){
					$this.find(".fa-angle-up").css("color","red");
					$this.find(".fa-angle-down").css("color","#aaa");
				}
			}else if(data_sort == "asc"){
				sort = "desc";
				$(this).find("a").attr("data-sort","desc");
				if(order_type == "ng.promotion_price" || order_type == "ng.sales"){
					$this.find(".fa-angle-down").css("color","red");
					$this.find(".fa-angle-up").css("color","#aaa");
				}
			}
			$("#order").val(order_type);
			$("#sort").val(sort);
		}else{
			$("#order").val("");
			$("#sort").val("");
		}
		GetgoodsList(1,1);
	});
})
var is_load = true;
function GetgoodsList(sear_type,page){
	if(page == undefined || page == "") page = 1;
	$("#page").val(page);//当前页
	$("#sear_type").val(sear_type);//类型
	var order = $("#order").val();
	var sort = $("#sort").val();
	if(is_load){
		is_load = false;
		$.ajax({
			type:"post",
			url : __URL("APP_MAIN/Goods/goodsSearchList"),
			data : {
				'<?php echo $wherename; ?>':'<?php echo $sear_name; ?>',
				'sear_type':sear_type,
				'order' : order,
				'sort' : sort,
				'controlType':'<?php echo $controlType; ?>',
				"shop_id" : "<?php echo $shop_id; ?>",
				"page" : page
			},
			beforeSend:function(){
				showLoadMaskLayer();
			},
			success : function(data){
				$("#page_count").val(data['page_count']);//总页数
				hiddenLoadMaskLayer();
				is_load = true;
				if(data['data'].length > 0){
					if(page == 1){
						var html = "";
					}else if(page > 1){
						var html = $('#main_list').html();
					}
					html +='<ul>';
					for(i=0; i<data['data'].length;i++){
						html+='<li class="gooditem"><div class="img"> <a href="'+__URL('APP_MAIN/goods/goodsdetail?id='+data['data'][i]['goods_id'])+'">';
						html+='<img class="lazy" src="'+__IMG(data['data'][i]['pic_cover_small'])+'" >';
						html+='</a></div><div class="info">';
						html+='<p class="goods-title"><a href="'+__URL('APP_MAIN/goods/goodsdetail?id='+data['data'][i]['goods_id'])+'" >'+data['data'][i]['goods_name']+'</a></p>';
						html+='<p class="goods-price"><em>￥'+data['data'][i]['promotion_price']+'</em></p>';
						html+='<p style="font-size:12px;width:50%;float:left;"><em style="color: #999;">销量:'+data['data'][i]['sales']+'</em><a href="'+__URL('APP_MAIN/goods/goodsdetail?id='+data['data'][i]['goods_id'])+'"></a></p>';
						html+='<div class="cart-box" id="number_575"><a class="add-cart increase" data-goods_id="575" href="javascript:CartGoodsInfo('+data['data'][i]['goods_id']+','+data['data'][i]['state']+')"></a><a class="decrease hide" data-goods_id="575" style="right: 60px;"></a></div>';
						html+='</div></li>';
					}
					html +='</ul>';
					html += '<div class="h50"></div>';
				}else{
					html = '<p style="color:#939393;text-align:center;margin-top:100px;"><img src="__TEMP__/<?php echo $style; ?>/public/images/wap_nodata.png" height="100"><br>Sorry！没有找到您想要的商品……</p>';
				}
				$("#main_list").html(html);
			}
		})	
	}
}

//滑动到底部加载
$(window).scroll(function(){
	var totalheight = parseFloat($(window).height()) + parseFloat($(window).scrollTop());
	var content_box_height = parseFloat($("#main_list").height()); 
	if(totalheight - content_box_height >= 80){
		if(is_load){
			var page = parseInt($("#page").val()) + 1;//页数
			var total_page_count = $("#page_count").val(); // 总页数
			var sear_type = $("#sear_type").val();
			if(page > total_page_count){
				return false;
			}else{
				GetgoodsList(sear_type,page);
			}
		}
	}
})
</script>

	

	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	

</body>
</html>