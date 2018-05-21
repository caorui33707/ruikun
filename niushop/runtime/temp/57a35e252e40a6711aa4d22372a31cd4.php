<?php if (!defined('THINK_PATH')) exit(); /*a:14:{s:46:"template/shop\default\Member\paymentOrder.html";i:1513303782;s:31:"template/shop\default\base.html";i:1513303782;s:35:"template/shop\default\urlModel.html";i:1513303782;s:37:"template/shop\default\controlTop.html";i:1513303782;s:44:"template/shop\default\controlHeadSerach.html";i:1513303782;s:47:"template/shop\default\controlHeadSearchAdv.html";i:1513303782;s:46:"template/shop\default\controlHeadGoodType.html";i:1513303782;s:43:"template/shop\default\controlCommonNav.html";i:1513303782;s:46:"template/shop\default\controlRightSidebar.html";i:1513303782;s:47:"template/shop\default\controlSelectAddress.html";i:1513303782;s:48:"template/shop\default\controlBottomLinkHelp.html";i:1513303782;s:40:"template/shop\default\controlBottom.html";i:1513303782;s:39:"template/shop\default\controlLogin.html";i:1513303782;s:40:"template/shop\default\baidu_js_push.html";i:1513303782;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta charset="UTF-8">
<meta name="renderer" content="webkit"> 
<title><?php echo $title_before; if($title_before != ''): ?>&nbsp;-&nbsp;<?php endif; ?><?php echo $title; if($seoconfig['seo_title'] != ''): ?>&nbsp;-&nbsp;<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<!--可共用-->
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_common.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_color_style.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/iconfont.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_bottom.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script src="__STATIC__/js/time_common.js" type="text/javascript"></script>
<script type="text/javascript">
var SHOPMAIN='SHOP_MAIN';//外置JS调用
var APPMAIN='APP_MAIN';//外置JS调用
var upload = "__UPLOAD__";//外置JS调用
var TEMP_IMG = "__TEMP__/<?php echo $style; ?>/public/images";
var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
var STATIC = "__STATIC__";
$(function(){
	//一级菜单选中	
	$('#nav li a').removeClass('current');
	var url = window.location.href;	
	$("#nav li a").each(function(i,e){
		var nav_url = $(e).attr("href")
		if(url.indexOf(nav_url) != -1){
			$("#nav li>a[href='<?php echo __URL('SHOP_MAIN/'.$path_info); ?>']").addClass('current');
		}
	})
})

window.onload=function(){
	$.footer();
}
</script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_cart.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/common.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_components.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.fly.min.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.method.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/nav.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.cookie.js"></script>
<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
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
<!-- 右侧购物车 -->

<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/payment_orders/payment_orders.css" />
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/payment_orders/payment_orders_common.css" />
<style>
.result-box .yue {
	margin-top:20px;
	margin-left: 20px;
	position: relative;
}
.result-box .yue input[type=text] {
	width: 100px;
	height: 28px;
	border: 1px solid #ddd;
	margin-left: 10px;
	padding: 0 10px;
	display: none;
}
</style>

</head>
<body>
<!-- 头部广告 -->



<!-- 公共的顶部（部分界面不用，例如，商家入驻） -->

	<!--
	创建时间：2017年2月7日 12:08:45
	功能描述： 顶部， 
-->
<div class="header-top">
	<div class="header-box">
		<font id="login-info" class="login-info"></font>
		<ul>
			<li><a class="menu-hd home" href="<?php echo __URL('SHOP_MAIN'); ?>" target="_top"><i></i>商城首页</a></li>
			<li class="menu-item">
				<div class="menu">
					<a class="menu-hd myinfo" href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" target="_blank"><i></i> 个人中心 <b></b></a>
					<div id="menu-2" class="menu-bd">
						<span class="menu-bd-mask"></span>
						<div class="menu-bd-panel">
							<a href="<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>" target="_blank">已买到的宝贝</a>
							<a href="<?php echo __URL('SHOP_MAIN/member/addresslist'); ?>" target="_blank">我的地址管理</a>
							<a href="<?php echo __URL('SHOP_MAIN/member/goodscollectionlist'); ?>" target="_blank">我收藏的宝贝</a>
						</div>
					</div>
				</div>
			</li>
		<!-- 	<li class="menu-item cartbox"><a class="menu-hd cart" href="<?php echo __URL('SHOP_MAIN/goods/cart'); ?>" target="_top"><i></i>&nbsp;购物车</a></li> -->
			<li><a class="menu-hd" target="_blank" href="<?php echo __URL('ADMIN_MAIN'); ?>">卖家中心</a></li>
			<li class="menu-item">
				<div class="menu">
					<a class="menu-hd we-chat"
						href="javascript:;" target="_top"> <i></i>
						关注 <b></b>
					</a>
					<div id="menu-5" class="menu-bd we-chat-qrcode">
						<span class="menu-bd-mask"></span> <a target="_top"> <img src="<?php echo __IMG($web_info['web_qrcode']); ?>" alt="官方微信"></a>
						<p class="font-14">关注官方微信</p>
					</div>
				</div>
			</li>
			<!-- <li class="menu-item">
				<div class="menu">
					<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index'); ?>" class="menu-hd site-nav" target="_blank"> 商家支持 <b></b></a>
					<div id="menu-7" class="menu-bd site-nav-main">
						<span class="menu-bd-mask"></span>
						<div class="menu-bd-panel">
							<div class="site-nav-con">
								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=2'); ?>" target="_blank" title="常见问题">常见问题</a>
								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=7'); ?>" target="_blank" title="网上支付">网上支付</a>
								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=5'); ?>" target="_blank" title="验货与签收">验货与签收</a>
								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=9'); ?>" target="_blank" title="退款说明">退款说明</a>
							</div>
						</div>
					</div>
				</div>
			</li> -->
			<li class="menu-item"><a  href="<?php echo __URL('APP_MAIN'); ?>" class="menu-hd wap-nav" > <i></i>手机端</a></li>
			<li class="menu-item"><a href="<?php echo __URL('SHOP_MAIN/helpcenter/index'); ?>" class="menu-hd site-nav" target="_blank">帮助中心</a></li>
		</ul>
	</div>
</div>

<script type="text/javascript">
$.ajax({
	type:"post",
	url:"<?php echo __URL('SHOP_MAIN/components/getlogininfo'); ?>",
	success:function(data){
		var login_info_html='';
		if(data!=null && data!=""){
// 			if(data["user_info"]["nick_name"]!= null && data["user_info"]["nick_name"] != ""){
				login_info_html='<a class="sn-login main-color" href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" target="_top">'+data["user_info"]["nick_name"]+'</a><em>欢迎您回来！</em><a class="sn-register" href="javascript:logout();" target="_top">退出</a>';
				$('div.login-info').html('<font id="login-info" class="login-info NS-USER-ALREADY-LOGIN"><em><a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" target="_blank" class="color NS-USER-NAME">'+data["user_info"]["nick_name"]+'</a></em><a href="javascript:logout();" data-method="post" class="logout bg-color">退出</a></font>');
// 			}
		}else{
			login_info_html='<em>欢迎来到<?php echo $title; ?></em><a class="login color" href="<?php echo __URL('SHOP_MAIN/login/index'); ?>" target="_top"><?php echo lang("login"); ?></a>&nbsp;|&nbsp;<a class="register" href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" target="_top"><?php echo lang("free_registration"); ?></a>';	
			$('div.login-info').html('<font id="login-info" class="login-info"><a class="login color" href="<?php echo __URL('SHOP_MAIN/login/index'); ?>" target="_top"><?php echo lang("login"); ?></a>&nbsp;|&nbsp;<a class="register bg-color" href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" target="_top"><?php echo lang("free_registration"); ?></a></font>');
		}
		$('#login-info').html(login_info_html);
	}
});

//退出登录
function logout(){
	$.ajax({
		url: "<?php echo __URL('SHOP_MAIN/member/logout'); ?>",
		type: "post",
		success: function (res) {
			if (res['code'] > 0) {
				$.msg("退出成功！");
				window.location.reload();
			} else {
				if(res["message"]!=null){
					$.msg(res["message"]);
				}
			}
		}
	})
}
</script>


<!-- 头部，菜单栏、搜索、导航栏 -->

	<!--
	创建人：王永杰
	创建时间：2017年2月7日 12:09:42
	功能描述：顶部logo、搜索 
-->
<script type="text/javascript">
	//显示搜索历史
	function SearRecord(){
		var arrSear=new Array();
		var strSear = $.cookie("searchRecord");
		var sear_html='<span>最近搜索</span>';
		if(typeof(strSear)!='undefined' && strSear!='null'){
			var arrSear=JSON.parse(strSear);
			sear_html+='<a href="javascript:clearSearRecord();" class="clear-history" style="display:block;"> <i></i>清空</a><br/>';
			for(var i=0;i<arrSear.length;i++){
				sear_html+='<a href="'+__URL('SHOP_MAIN/goods/goodslist?keyword='+arrSear[i])+'" style="display:inline-block;">'+arrSear[i]+'</a>';
			}
		}
		$('#search_titles').html(sear_html);
	}
	//清除搜索历史
	function clearSearRecord(){
		clear = JSON.stringify(new Array());
		$.cookie("searchRecord", clear);
		SearRecord();
	}
	
	$(function(){
		SearRecord();
	});
</script>
<div class="as-shelter"></div>
<div class="follow-box">
	<div class="follow-box-con">
		<a href="<?php echo __URL('SHOP_MAIN'); ?>" class="logo"><img src="<?php echo __IMG($web_info['logo']); ?>"/></a>
		<div class="search NS-SEARCH-BOX-TOP">
			<form class="search-form NS-SEARCH-BOX-FORM" method="get"  onsubmit="return false">
				<div class="search-info">
					<div class="search-type-box">
						<ul class="search-type" style="height: 36px; overflow: hidden;">
							<li class="search-li-top curr" num="0">宝贝</li>
<!-- 							<li class="search-li-top" num="1" >店铺</li> -->
						</ul>
<!-- 						<i></i> -->
					</div>
					<div class="search-box">
						<div class="search-box-con">
							<input type="text"
								class="search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword" tabindex="9" autocomplete="off" data-searchwords="<?php echo $default_keywords; ?>" placeholder="<?php echo $default_keywords; ?>"  value="<?php if($keyword !=''): ?><?php echo $keyword; endif; ?>">
						</div>
					</div>
					<input type="hidden" id="searchtypeTop" name="type" value="0" class="searchtype">
					<input type="button" id="btn_search_box_submit_top" value="搜索" class="button bg-color NS-SEARCH-BOX-SUBMIT-TOP">
				</div>
			</form>
		</div>
		<div class="login-info"></div>
	</div>
</div>
<div class="header">
	<div class="w1210">
		<div class="logo-info">
			<a href="<?php echo __URL('SHOP_MAIN'); ?>" class="logo"> <img src="<?php echo __IMG($web_info['logo']); ?>"/></a>
		</div>
		<div class="search NS-SEARCH-BOX">
			<form class="search-form NS-SEARCH-BOX-FORM" method="get" onsubmit="return false">
				<div class="search-info">
					<div class="search-type-box">
						<ul class="search-type">
							<li class="search-li curr" num="0">宝贝</li>
<!-- 							<li class="search-li" num="1">店铺</li> -->
						</ul>
<!-- 						<i></i> -->
					</div>
					<div class="search-box">
						<div class="search-box-con">
							<input type="text" class="keyword search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword" tabindex="9" autocomplete="off" data-searchwords="<?php echo $default_keywords; ?>" placeholder="<?php echo $default_keywords; ?>" value="<?php if($keyword !=''): ?><?php echo $keyword; endif; ?>" />
						</div>
					</div>
					<!-- <input type="hidden" id="searchtype" name="type" value="0" class="searchtype"> --> 
					<input type="button" id="btn_search_box_submit" value="搜索" class="button bg-color btn_search_box_submit NS-SEARCH-BOX-SUBMIT">
				</div>
				
				<div class="search-results hide NS-SEARCH-BOX-HELPER" style="display: none;">
					<ul class="history-results">
						<li class="title" id="search_titles" style="word-wrap:break-word;"></li>
					</ul>
					<ul class="rec-results">
						<li class="title"><span>正在热搜中</span> <i class="close"></i></li>
						<?php if(is_array($hot_keys) || $hot_keys instanceof \think\Collection || $hot_keys instanceof \think\Paginator): $i = 0; $__LIST__ = $hot_keys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot_key): $mod = ($i % 2 );++$i;?>
						<li><a  href="<?php echo __URL('SHOP_MAIN/goods/goodslist','keyword='.$hot_key); ?>" title="<?php echo $hot_key; ?>"><?php echo $hot_key; ?></a></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</form>
			<ul class="hot-query">
				<!-- 默认搜索词 -->
				<li class="first"><a href="javascript:void(0);" title=""></a></li>
			</ul>
		</div>
		<!-- 搜索框右侧小广告 _start -->
		<div class="header-right">
		<a href="<?php echo __URL('SHOP_MAIN/goods/cart'); ?>" class="my-cart"><span class="ico"></span>购物车结算<span class="right_border"></span></a>
			<a href="<?php echo __URL('SHOP_MAIN/member'); ?>" class="my-mall"><span class="ico"></span>我的商城<span class="right_border"></span></a>
		</div>
		<!-- 搜索框右侧小广告 _end -->
	</div>
</div>
<!-- logo栏小广告  -->
<!-- logo栏小广告 
	李志伟
	2017年2月10日10:28:30
 -->
<script type="text/javascript">
	//logo右侧小广告 
	var ap_id=1052;
	var data=platformAdvLoad(ap_id);
	if(data !=''){
		$('.logo-info').append('<a href="'+data[0]['adv_url']+'" class="logo-right"> <img src="'+__IMG(data[0]['adv_image'])+'" style="max-width:'+data[0]['adv_width']+'px;max-height:'+data[0]['adv_height']+'px;"> </a>');	
	}
	//搜索框右侧小广告
	//$('.header-right').html('<a href="'+data[1]['adv_url']+'" target="_blank" title="">  <img src="'+__IMG(data[1]['adv_image'])+'"></a>');
</script>
<script type="text/javascript">
	$(document).ready(function() {
		// 搜索框提示显示
		$('.NS-SEARCH-BOX .NS-SEARCH-BOX-KEYWORD').focus(function() {
			$(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").show();
		});
		// 搜索框提示隐藏
		$(".NS-SEARCH-BOX-HELPER .close").on('click',function() {
			$(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").hide();
		});
		// 清除记录
		$(".NS-SEARCH-BOX-HELPER .clear").click(function() {
			var url = '/search/clear-record.html';
			$.post(
				url,
				{},
				function(result) {
					if (result.code == 0) {
						$(".history-results .active").empty();
					} else {
					}
				},
				'json');
		});
	});
	function search_box_remove(key) {
		var url = '/search/delete-record.html';
		$.post(url, {
			data : key
		}, function(result) {
			if (result.code == 0) {
				$("#" + key).css("display", "none");
			} else {

			}
		}, 'json');
	}
	$(document).on("click", function(e) {
		var target = $(e.target);
		if (target.closest(".NS-SEARCH-BOX").length == 0) {
			$('.NS-SEARCH-BOX-HELPER').hide();
		}
	})
</script>
<script type="text/javascript">
	//固定搜索
	$(document).ready(function() {
		$(".NS-SEARCH-BOX .NS-SEARCH-BOX-SUBMIT").click(function() {
			var keyword_obj = $(this).parents(".NS-SEARCH-BOX").find(".NS-SEARCH-BOX-KEYWORD");
// 			alert(keyword_obj);
			var keywords = keyword_obj.val();
			if ($.trim(keywords).length == 0
					|| $.trim(keywords) == "请输入关键词") {
				keywords = keyword_obj.attr("data-searchwords");
// 			alert(keywords);
			}
			
			$(keyword_obj).val(keywords);
			if(keywords==null)
			{
				keywords = "";
			}

			if($.cookie("searchRecord") != undefined){
				var arr = eval($.cookie("searchRecord"));				
			}else{
				var arr = new Array();
			}
			if(arr.length >0 ){
				if($.inArray(keywords,arr)< 0){
					arr.push(keywords);
				}
			}else{
				arr.push(keywords);
			}
			$.cookie("searchRecord",JSON.stringify(arr));
			if ($(".search-li.curr").attr('num') == 0) {
				window.location.href = __URL('SHOP_MAIN/goods/goodslist?keyword='+keywords);
			}else{
				window.location.href = __URL('SHOP_MAIN/shop/shopstreet?shopname='+keywords);
			}
		});
	});
	//浮动搜索
	$(document).ready(function() {
		$(".NS-SEARCH-BOX-TOP .NS-SEARCH-BOX-SUBMIT-TOP").click(function() {
			var keyword_obj = $(this).parents(".NS-SEARCH-BOX-TOP").find(".NS-SEARCH-BOX-KEYWORD");
			var keywords = $(keyword_obj).val();
			if ($.trim(keywords).length == 0
					|| $.trim(keywords) == "请输入关键词") {
				keywords = $(keyword_obj).attr("data-searchwords");
			}
			$(keyword_obj).val(keywords);
			
			if($.cookie("searchRecord") != undefined){
				var arr = eval($.cookie("searchRecord"));				
			}else{
				var arr = new Array();
			}
			if(arr.length >0 ){
				if($.inArray(keywords,arr)< 0){
					arr.push(keywords);
				}
			}else{
				arr.push(keywords);
			}
			arr.push(keywords);
			$.cookie("searchRecord",JSON.stringify(arr));

			if ($(".search-li-top.curr").attr('num') == 0) {
				window.location.href = __URL('SHOP_MAIN/goods/goodslist?keyword='+keywords);
			}else{
				window.location.href = __URL('SHOP_MAIN/shop/shopstreet?shopname='+keywords);
			}
		});
	});
	
	//回车键搜索
	$('.NS-SEARCH-BOX-KEYWORD').bind('keypress', function (event) {
		if (event.keyCode == 13) { 
			var keyword_obj = $(this).parents(".NS-SEARCH-BOX").find(".NS-SEARCH-BOX-KEYWORD");
			var keywords = keyword_obj.val();
			if ($.trim(keywords).length == 0 || $.trim(keywords) == "<?php echo lang('please_input_keywords'); ?>") {
				keywords = keyword_obj.attr("data-searchwords");
			}
			
			$(keyword_obj).val(keywords);
			if(keywords==null)
			{
				keywords = "";
			}
	
			if($.cookie("searchRecord") != undefined){
				var arr = eval($.cookie("searchRecord"));				
			}else{
				var arr = new Array();
			}
			if(arr.length >0 ){
				if($.inArray(keywords,arr)< 0){
					arr.push(keywords);
				}
			}else{
				arr.push(keywords);
			}
			$.cookie("searchRecord",JSON.stringify(arr));
	
			if ($(".search-li.curr").attr('num') == 0) {
				window.location.href = __URL('SHOP_MAIN/goods/goodslist?keyword='+keywords);
			}else{
				window.location.href = __URL('SHOP_MAIN/shop/shopstreet?shopname='+keywords);
			}
		}
	})
	
	
	
	
	
</script>


<!--头部商品分类 start-->

	<!--
	创建人：李志伟
	创建时间：2017年2月7日 12:22:28
	功能描述：导航栏、菜单栏 、商品分类（与首页的样式不同，没有轮播图）
-->
<?php if($is_head_goods_nav == 1): ?>
<div class="category-box">
<?php else: ?>
<div class="category-box category-box-border">
<?php endif; ?>
	<div class="w1210">
		<div class="home-category fl">
			<a href="<?php echo __URL('SHOP_MAIN/goods/category'); ?>" class="menu-event" title="查看全部商品分类"><i></i>全部商品分类</a>
			<?php if($is_head_goods_nav == 1): ?>
			<div class="category-layer" style="display: block;">
			<?php else: ?>
			<div class="expand-menu category-layer" style="display: none;">
			<?php endif; ?>
				<!-- 公共的菜单栏-->
				<div class="category-layer">
					<span class="category-layer-bg bg-color"></span>
					<?php foreach($goods_category_one as $k=>$vo): if($k < 13): ?>
					<div class="list">
						<dl class="cat">
							<dt class="cat-name">
								<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist','category_id='.$vo['category_id']); ?>" target="_blank" title="<?php echo $vo['category_name']; ?>"><?php echo $vo['category_name']; ?></a>
							</dt>
							<?php if($vo['count'] >0): ?>
							<i class="right-arrow">&gt;</i>
							<?php endif; ?>
						</dl>
						<div class="categorys" style="display: none;">
							<div class="item-left fl">
								<div class="subitems">
								<?php if($vo['child_list'] != null): foreach($vo['child_list'] as $vo2): ?>
									
									<dl class="fore1">
										<dt style="width: 5em;">
											<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist','category_id='.$vo2['category_id']); ?>" target="_blank" title="<?php echo $vo2['category_name']; ?>">
												<em><?php echo $vo2['category_name']; ?></em>
												<?php if($vo2['count'] >0): ?>
												<i>&gt;</i>
												<?php endif; ?>
											</a>
										</dt>
										<dd>
										<?php if($vo2['child_list'] != null): foreach($vo2['child_list'] as $vo3): ?>
												
												<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist','category_id='.$vo3['category_id']); ?>" target="_blank" title="<?php echo $vo3['category_name']; ?>"><?php echo $vo3['category_name']; ?></a>
												
											<?php endforeach; endif; ?>
										</dd>
									</dl>
									
								<?php endforeach; endif; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif; endforeach; ?>
				</div>
			</div>
		</div>
		<!-- 公共的菜单栏-->
	<div class="all-category fl" id="nav">
	<ul>
	<?php if(is_array($navigation_list) || $navigation_list instanceof \think\Collection || $navigation_list instanceof \think\Paginator): if( count($navigation_list)==0 ) : echo "" ;else: foreach($navigation_list as $k=>$nav): ?>
		<li class="fl" >
			<?php if($nav['nav_type'] == 0): if($nav['is_blank'] == 1): ?>
					<a class="nav " target="_blank" href="<?php echo __URL('SHOP_MAIN'.$nav['nav_url']); ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php else: ?>
					<a class="nav " href="<?php echo __URL('SHOP_MAIN'.$nav['nav_url']); ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php endif; else: if($nav['is_blank'] == 1): ?>
					<a class="nav " target="_blank" href="<?php echo $nav['nav_url']; ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php else: ?>
					<a class="nav " href="<?php echo $nav['nav_url']; ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php endif; endif; ?>
		</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
<!-- 		<li class="fr"> -->
<!-- 			<img src="__TEMP__/<?php echo $style; ?>/public/images/" alt="" /> -->
<!-- 		</li> -->
	</ul>
	<div class="wrap-line">
		<span style="left: 15px;"></span>
	</div>
</div>
	</div>
</div>

<!--头部商品分类 end-->

<!-- 右侧固定购物车 -->

	<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/shopping_cart.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/ns_collections.js" type="text/javascript"></script>
<!-- common.js 刷新了购物车数据 -->
<script>
//当浏览器窗口大小改变时，设置显示内容的高度  
window.onresize = function(){
	$(".sidebar-cartbox").find('.cart-panel-content').height($(window).height());
	$(".sidebar-cartbox").find('.bonus-panel-content').height($(window).height());
}
$(function() {
	$(".sidebar-cartbox").find('.cart-panel-content').height($(window).height());
	$(".sidebar-cartbox").find('.bonus-panel-content').height($(window).height());
	$.ajax({
		type:"post",
		url:"<?php echo __URL('SHOP_MAIN/components/getlogininfo'); ?>",
		async:true,
		success:function(data){
			if(data != null && data != ""){
				var img = data["user_info"]["user_headimg"];
				var name = data["user_info"]["nick_name"];
				$("#not_logged").css("display","none");
				$("#right_login_info").css("display","block");
				$("#right_login_info_name").text(name);
				if(img == '' ||img == null){
					$("#login_member_logo").attr('src',"__TEMP__/<?php echo $style; ?>/public/images/temp_default_user_portrait_0.png"); 
				}else{
					img = __IMG(img);
					$("#login_member_logo").attr('src',img);
				}
			}else{
				$("#not_logged").css("display","block");
				$("#right_login_info").css("display","none");
			}
		}
	})
	$('.ajax-login').click(function(){
		$('#mask-layer-login').show();
		$('#layui-layer').show();
	})
	$('.layui-layer-close.layui-layer-close1').click(function(){
		$('#mask-layer-login').hide();
		$('#layui-layer').hide();
	})
	refreshShopCart();
});
</script>
<input type="hidden" id="hidden_uid" value="<?php echo $uid; ?>" />
<div class="right-sidebar-con">
	<div class="right-sidebar-main">
		<div class="right-sidebar-panel">
			<div id="quick-links" class="quick-links">
				<ul>
					<li class="quick-area quick-login sidebar-user-trigger">
						<!-- 用户 --> <a href="javascript:void(0);" class="quick-links-a"><i class="setting"></i></a>
						<div class="sidebar-user quick-sidebar">
							<i class="arrow-right"></i>
							<div class="sidebar-user-info">
								<!-- 没有登录的情况 _start -->
								<div class="NS-USER-NOT-LOGIN">
										<a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>">
									<div class="user-pic">
										<div class="user-pic-mask"></div>
										<img id="login_member_logo" src="__TEMP__/<?php echo $style; ?>/public/images/temp_default_user_portrait_0.png">
									</div>
									</a>
									<br>
									<p id="not_logged">
										你好！请<a href="javascript:void(0);"
											class="quick-login-a color ajax-login">登录</a> | <a
											href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>"
											class="color">注册</a>
									</p>
									<p id="right_login_info">
										你好！<span id="right_login_info_name"></span>
									</p>
								</div>
								<!-- 没有登录的情况 _end -->
								<!-- 有登录的情况 _start -->
								<div class="js-user-already-login" style="display: none;">
									<div class="user-have-login">
										<div class="user-pic">
											<div class="user-pic-mask"></div>
											<img src="" class="NS-USER-PIC">
										</div>
										<div class="user-info">
											<p>
												用&nbsp;&nbsp;&nbsp;户： <span class="NS-USER-NAME"></span>
											</p>
										</div>
									</div>
									<p class="m-t-10">
										<span class="prev-login"> 上次登录时间： 
											<span class="NS-USER-LAST-LOGIN"></span>
										</span>
										<a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" class="btn account-btn" target="_blank">个人中心</a>
										<a href="<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>" class="btn order-btn" target="_blank">订单中心</a>
									</p>
								</div>
								<!-- 有登录的情况 _end -->
							</div>
						</div>
					</li>
					<li class="sidebar-tabs" data-ns-flag="shopping_cart">
						<!-- 购物车 -->
						<div class="cart-list quick-links-a sidebar-cartbox-trigger">
							<i class="cart"></i>
							<div class="span">购物车</div>
							<span class="ECS_CARTINFO"> <span
								class="cart_num js-cart-count">0</span>
								<div class="sidebar-cart-box">
									<h3 class="sidebar-panel-header">
										<a href="javascript:void(0);" class="title">
											<i class="cart-icon"></i> <em class="title">购物车</em>
										</a>
										<span class="close-panel"></span>
									</h3>
								</div>
							</span>
						</div>
					</li>
					<li class="sidebar-tabs" data-ns-flag="love_history">
						<a href="javascript:void(0);" class="mpbtn_history quick-links-a sidebar-historybox-trigger">
							<i class="history"></i>
						</a>
						<div class="popup" style="left: -121px; visibility: hidden;">
							<font id="mpbtn_histroy">我看过的</font> <i class="arrow-right"></i>
						</div>
					</li>
					<li id="collectGoods" class="sidebar-tabs" data-ns-flag="collections_goods">
						<a href="javascript:;" class="mpbtn_collect quick-links-a">
							<i class="collect"></i>
						</a>
						<div class="popup" style="left: -121px; visibility: hidden;">
							我收藏的商品 <i class="arrow-right"></i>
						</div>
					</li>
				</ul>
			</div>
			<div class="quick-toggle">
				<ul>
					<li class="quick-area">
						<a class="quick-links-a" href="<?php echo $custom_service['value']['service_addr']; ?>" target="_blank">
							<i class="customer-service"></i>
						</a>
<!-- 						<div class="sidebar-service quick-sidebar"> -->
<!-- 							<i class="arrow-right"></i> -->
<!-- 							<div class="customer-service"> -->
<!-- 								<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $web_info['web_qq']; ?>&site=qq&menu=yes"> -->
<!-- 									<span class="icon-qq"></span> QQ -->
<!-- 								</a> -->
<!-- 							</div> -->
<!-- 						</div> -->
					</li>
					<li class="quick-area">
						<a class="quick-links-a" href="javascript:void(0);"> <i class="qr-code"></i></a>
						<div class="sidebar-code quick-sidebar" style="display: none;">
							<i class="arrow-right"></i> 
							<img src="<?php echo __IMG($web_info['web_qrcode']); ?>">
						</div>
					</li>
					<li class="returnTop" style="display: none;">
						<a href="javascript:void(0);" class="return_top quick-links-a"> 
							<i class="top"></i>
						</a>
						<div class="popup" style="left: -121px; visibility: hidden;">
							返回顶部 <i class="arrow-right"></i>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!--购物车 start-->
		<div class="right-sidebar-panels sidebar-cartbox animate-out" style="z-index: 1;">
			<div class="sidebar-cart-box">
				<h3 class="sidebar-panel-header">
					<a href="javascript:void(0);" class="title" target="_blank">
						<i class="cart-icon"></i>
						<em class="title js-sidebar-title">购物车</em>
					</a>
					<span class="close-panel"></span>
				</h3>
				<div class="sidebar-cartbox-goods-list">
					<div class="cart-panel-main">
						<div class="cart-panel-content" >
							<!-- 点击了购物车 -->
							<div class="cart-list js-cart-list"></div>
							
							<!-- 点击了我收藏的店铺 -->
							<div class="cart-list js-collections-shops"></div>
							
							<!-- 点击了我收藏的商品 -->
							<div class="cart-list js-collections-goods"></div>
							
							<!-- 点击了我看过的，浏览历史 -->
							<div class="cart-list js-love-history"></div>
							
							<div class="tip-box js-tip-box" style="display:none;">
								<i class="tip-icon"></i>
								<div class="tip-text js-tip-text">
									您的购物车里什么都没有哦<br>
									<a class="color" href="<?php echo __URL('SHOP_MAIN'); ?>" title="再去看看吧" target="_blank">再去看看吧</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cart-panel-footer" style="position: absolute;bottom: 0;width: 100%;">
					<div class="cart-footer-checkout">
						<div class="js-footer-cart" >
							<div class="number">共<strong class="count second-color js-count">0</strong>种商品</div>
							<div class="sum">
								共计：<strong class="total second-color js-total">￥0</strong>
							</div>
							<a class="btn bg-color" href="<?php echo __URL('SHOP_MAIN/goods/cart'); ?>" target="_blank">去购物车结算</a>
						</div>
						<a class="btn bg-color" style="width:100%;display:none;" id="refreshMore" href="" target="_blank">查看更多</a>
					</div>
				</div>
			</div>
		</div>
		<!--购物车 end-->
	</div>
</div>

<!-- 内容 -->

<form>
<div class="cart-box">
	<div class="nb">
		<div class="cart-step">
			<ul>
				<li class="cart1"><i></i><?php echo lang('goods_cart'); ?></li>
				<li class="cart2 oncart2"><i></i><?php echo lang('goods_confirm_order'); ?></li>
				<li class="cart3"><i></i><?php echo lang('goods_payment'); ?></li>
				<li class="cart4"><i></i><?php echo lang('goods_successful_payment'); ?></li>
			</ul>
		</div>
		<div class="add-deliver">
			<div class="cart-title">
				<h3>
					<span><?php echo lang('member_consignee'); ?></span>
				</h3>
			</div>
			
			<div class="sh-address js-shipping-address">
				<ul>
					<?php if(is_array($address_list) || $address_list instanceof \think\Collection || $address_list instanceof \think\Paginator): if( count($address_list)==0 ) : echo "" ;else: foreach($address_list as $k=>$info): ?>
					<li class="other-add <?php if($info['is_default']==1): ?>default-add<?php endif; ?>" data-id="<?php echo $info['id']; ?>" data-province-id="<?php echo $info['province']; ?>" data-city-id="<?php echo $info['city']; ?>">
						<div class="add-box">
							<span class="remove vivi-blue js-shipping-address-remove" data-id="<?php echo $info['id']; ?>">X</span>
							<div class="name-add">
								<span class="name"><?php echo $info['consigner']; ?></span>
								<span class="add-rside"></span>
							</div>
							<div class="elli add-detail">
								<p title="<?php echo $info['address']; ?>"><?php echo $info['address_info']; ?> <?php echo $info['address']; ?></p>
							</div>
							<div>
								<span class="moblie"><?php echo $info['mobile']; ?></span>
								<a href="javascript:void(0);" class="chang-default change vivi-blue js-update-shipping-address" data-id="<?php echo $info['id']; ?>"><?php echo lang('member_modify_address'); ?></a>
							</div>
						</div>
						<i class="icon-check"></i>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<li class="add-add">
						<div class="add-box add-box-center js-add-shipping-address">
							<a href="javascript:;"><i class="icon-add-add"></i><?php echo lang('member_add_new_address'); ?></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="goods-infor">
			<div class="cart-title">
				<h3>
					<span><?php echo lang('goods_commodity_information'); ?></span>
					<a href="javascript:;" class="vivi-blue js-goback-cart"><?php echo lang('member_add_current_account'); ?></a>
				</h3>
			</div>
			<div class="goods-table">
				<div class="goods-thead">
					<div class="col col1"><?php echo lang('member_commodity'); ?></div>
					<div class="col col3"><?php echo lang('member_unit_price'); ?></div>
					<div class="col col4"><?php echo lang('goods_number'); ?></div>
					<div class="col col5"><?php echo lang('goods_subtotal'); ?></div>
				</div>
				<div class="goods-tbody">
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$cart_info): ?>
					<div class="goodinfo" data-goods-id="<?php echo $cart_info['goods_id']; ?>" data-goods-name="<?php echo $cart_info['goods_name']; ?>" data-sku-name="<?php echo $cart_info['sku_name']; ?>" data-sku-id="<?php echo $cart_info['sku_id']; ?>" data-price="<?php echo $cart_info['price']; ?>" data-img-id="<?php echo $cart_info['picture_info']['pic_id']; ?>">
						<div class="col col1 goods-title-pic">
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$cart_info['goods_id']); ?>" target="_blank">
								<img src="<?php echo __IMG($cart_info['picture_info']['pic_cover_small']); ?>" width="60" height="60">
							</a>
							<div class="goods-describ elli">
								<p style="word-break: break-all; word-wrap:break-word;">
									<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$cart_info['goods_id']); ?>" target="_blank"><?php echo $cart_info['goods_name']; ?>&nbsp;&nbsp;<?php echo $cart_info['sku_name']; ?></a>
								</p>
<!-- 								<p></p> -->
							</div>
						</div>
						<div class="col col3 goods-price">￥<?php echo $cart_info['price']; ?></div>
						<div class="col col4 good-num"><?php echo $cart_info['num']; ?></div>
						<div class="col col5 orange-bold xiaoji" data-subtotal="<?php echo $cart_info['subtotal']; ?>" style="border-bottom-style: none;">￥<?php echo $cart_info['subtotal']; ?></div>
					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				
			</div>
		</div>

		<div class="style-zhifu">
			<div class="cart-title">
				<h3>
					<span><?php echo lang('member_payment_method'); ?></span>
				</h3>
			</div>
			<?php if(count($coupon_list)): ?>
			<div class="zhifu-box">		
				<?php if(count($coupon_list)): ?>
				<div class="yue">
					<span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo lang('member_coupons'); ?></span>
					<select style="margin-left: 12px;padding: 0 10px;width: 250px;height: 25px;border:1px solid #ddd;" id="coupon">
						<option value="0"><?php echo lang('member_no_coupons'); ?></option>
						<?php if(is_array($coupon_list) || $coupon_list instanceof \think\Collection || $coupon_list instanceof \think\Paginator): if( count($coupon_list)==0 ) : echo "" ;else: foreach($coupon_list as $key=>$coupon): ?>
							<option data-money="<?php echo $coupon['money']; ?>" value="<?php echo $coupon['coupon_id']; ?>"><?php echo lang('member_full'); ?><?php echo $coupon['at_least']; ?><?php echo lang('member_reduce'); ?><?php echo $coupon['money']; ?><?php echo lang('element'); ?>&nbsp;-&nbsp;<?php echo $coupon['coupon_name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			
			<div class="zhifu-box">
				<ul class="zfb" id="paylist">
					<li>
						<i class="icon-check-zf" style="display:block;"></i>
						<a href="javascript:void(0);" data-select="0" class="selected">
							<span><?php echo lang('member_online_payment'); ?></span>
						</a>
					</li>
					<!-- 为了用户更好的体验和理解，只要开启货到付款就显示，不考虑商家配送、是否有物流公司等 -->
<!-- 					if condition="$shop_config.order_delivery_pay && $shop_config.seller_dispatching && count($express_company_list)" -->
					<?php if($shop_config['order_delivery_pay']): ?>
					<li>
						<i class="icon-check-zf"></i>
						<a href="javascript:void(0);" data-select="4">
							<span><?php echo lang('member_cash_on_delivery'); ?></span>
						</a>
					</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
		
		<div class="style-zhifu order-invoice">
			<div class="cart-title">
				<h3>
					<span><?php echo lang('member_delivery_mode'); ?></span>
				</h3>
			</div>
			<div class="zhifu-box" id="shipping_method">
				<div class="item js-select">
					<?php if(!$shop_config['seller_dispatching'] && !$shop_config['buyer_self_lifting']): ?>
							<p class="label fl"><?php echo lang('member_not_configure_distribution'); ?></p>
					<?php else: ?>
					<div class="label">
						<ul class="zfb">
							<!-- 为了用户更好的体验和理解，只要开启商家配送就显示，不考虑物流公司 -->
<!-- 						if condition="$shop_config.seller_dispatching && count($express_company_list)" -->
							<?php if($shop_config['seller_dispatching']): ?>
							<li data-code="merchant_distribution">
								<i class="icon-check-zf"></i>
								<a href="javascript:void(0);"><?php echo lang('member_merchant_distribution'); ?></a>
							</li>
							<?php endif; if($shop_config['buyer_self_lifting']): ?>
							<li data-code="afhalen">
								<i class="icon-check-zf"></i>
								<a href="javascript:void(0);"><?php echo lang('member_stores_from_mentioning'); ?></a>
							</li>
							<?php endif; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			
				<?php if($shop_config['seller_dispatching']): ?>
				<div id="select_express_company" style="display:none;">
				
					<div class="item">
						<span class="label"><?php echo lang('member_logistics_company'); ?></span>
						<select id="express_company" style="margin-left: 12px;padding: 0 10px;width: 250px;height: 25px;border: 1px solid #ddd;">
						<?php if($address_is_have == 1): if($express_company_count == 0): ?>
							<option value="-1" data-express-fee="0"><?php echo lang('member_not_set_up'); ?></option>
							<?php elseif(count($express_company_list)): if(is_array($express_company_list) || $express_company_list instanceof \think\Collection || $express_company_list instanceof \think\Paginator): if( count($express_company_list)==0 ) : echo "" ;else: foreach($express_company_list as $key=>$company): ?>
								<option value="<?php echo $company['co_id']; ?>" data-express-fee="<?php echo $company['express_fee']; ?>"><?php echo $company['company_name']; ?></option>
								<?php endforeach; endif; else: echo "" ;endif; else: ?>
								<option value="-2" data-express-fee="0"><?php echo lang('member_not_freight_template'); ?></option>
							<?php endif; else: ?>
					 		<option value="-3" data-express-fee="0"><?php echo lang('fill_or_select_consignee_information'); ?></option>
						<?php endif; ?>
						</select>
					</div>
				</div>
				<?php endif; if($shop_config['buyer_self_lifting']): ?>
				<div class="js-pickup-point-list item" style="margin:0;line-height: 50px;height: 50px;display:none;" data-count="<?php echo $pickup_point_list['total_count']; ?>">
					<?php if($pickup_point_list['total_count']): ?>
					<span class="label fl"><?php echo lang('member_select_own_address'); ?>：</span>
					<div class="fl">
						<ul class="zfb" style="margin: 0 10px 0 0;">
							<li style="margin:0;">
								<select style="padding: 0 10px;width: 500px;height: 25px;border:1px solid #ddd;" id="pickup_address">
									<?php if(is_array($pickup_point_list['data']) || $pickup_point_list['data'] instanceof \think\Collection || $pickup_point_list['data'] instanceof \think\Paginator): if( count($pickup_point_list['data'])==0 ) : echo "" ;else: foreach($pickup_point_list['data'] as $key=>$pickup): ?>
									<option value="<?php echo $pickup['id']; ?>"><?php echo $pickup['province_name']; ?>&nbsp;<?php echo $pickup['city_name']; ?>&nbsp;<?php echo $pickup['dictrict_name']; ?>&nbsp;<?php echo $pickup['address']; ?></option>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</li>
						</ul>
					</div>
					<?php else: ?>
					<p class="label fl"><?php echo lang('member_not_configured'); ?></p>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
		</div> 
		
		<?php if(count($shop_config['order_invoice_content_list'])): ?>
		<div class="style-zhifu order-invoice">
			<div class="cart-title">
				<h3>
					<span><?php echo lang('member_invoice_information'); ?></span>
				</h3>
			</div>
			<div class="zhifu-box">
				<div class="item">
					<div class="label">
						<ul class="zfb" id="is_invoice">
							<li>
								<i class="icon-check-zf" style="display: block;"></i>
								<a href="javascript:void(0);" data-flag="not-need-invoice" class="selected"><?php echo lang('member_no_invoice_required'); ?></a>
							</li>
							<?php if(count($shop_config['order_invoice_content_list'])): ?>
							<li>
								<i class="icon-check-zf"></i>
								<a href="javascript:void(0);" data-flag="need-invoice"><?php echo lang('member_invoice_required'); ?></a>
							</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
				
				<div id="invoiceinfo" style="display: none;">
				
					<div class="item">
						<span class="label fl" style="line-height: 50px;"><?php echo lang('member_invoice_header'); ?>：</span>
						<div class="fl">
							<ul class="zfb" id="invoice_tite_list" style="margin: 0 10px 0 0;">
								<li>
<!-- 									<i class="icon-check-zf" style="display: block"></i> class="selected"-->
									<a href="javascript:void(0);">
										<input type="text" placeholder="<?php echo lang('member_personal_or_company_invoice'); ?>" maxlength="50" id="invoice-title" />
									</a>
								</li>
							</ul>
						</div>
						<span style="line-height: 50px;color:#FF9800;font-weight:bold;">(<?php echo lang('member_collect'); ?><?php echo $shop_config['order_invoice_tax']; ?>%<?php echo lang('member_invoice_tax_rate'); ?>)</span>
					</div>
					
					<div class="item">
						<span class="label fl" style="line-height: 50px;width:85px;text-align: right;"><?php echo lang('member_taxpayer_identification_number'); ?>：</span>
						<div class="fl">
							<ul class="zfb" style="margin: 0 10px 0 0;">
								<li>
									<a href="javascript:void(0);">
										<input type="text" placeholder="<?php echo lang('member_taxpayer_identification_number'); ?>" maxlength="50" id="taxpayer-identification-number" />
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="item">
						<span class="label fl" style="line-height: 50px;"><?php echo lang('member_invoice_content'); ?>：</span>
						<div class="fl">
							<ul class="zfb" id="invoice_con">
								<?php if(is_array($shop_config['order_invoice_content_list']) || $shop_config['order_invoice_content_list'] instanceof \think\Collection || $shop_config['order_invoice_content_list'] instanceof \think\Paginator): if( count($shop_config['order_invoice_content_list'])==0 ) : echo "" ;else: foreach($shop_config['order_invoice_content_list'] as $k=>$invoice): ?>
								<li>
									<i class="icon-check-zf"></i>
									<a href="javascript:void(0);" title="<?php echo $invoice; ?>"><?php echo $invoice; ?></a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<div class="fare-result">
			<div class="cart-title">
				<h3>
					<span><?php echo lang('member_settlement_information'); ?></span>
				</h3>
			</div>
			<div class="result-box">
				<?php if($shop_config['order_balance_pay']): ?>
				<div class="yue">
					<span><input type="checkbox" id="userbalance" disabled="disabled" style="display:none;">&nbsp;<?php echo lang('member_use_balance'); ?></span>
					<input type="text" maxlength="9" placeholder="0.00" data-max="<?php echo $member_account['balance']; ?>" id="account_balance" style="display:inline-block;" />
					<span class="yeuse">（<?php echo lang('member_my_balance'); ?>：<b class="orange-bold"><?php echo $member_account['balance']; ?></b><?php echo lang('element'); ?>）</span>。<br> <br>
	<!-- 				<p> -->
	<!-- 					<span><input type="checkbox" id="userpoint" disabled="disabled">&nbsp;使用积分</span> -->
	<!-- 					<input type="text" maxlength="9" id="point"> -->
	<!-- 					<span class="yeuse">（我的积分：<b class="orange-bold"><?php echo $member_account['point']; ?></b>个）</span> -->
	<!-- 				</p> -->
	<!-- 				<span id="setpaypwd" style="display:none;">为保障您的余额安全，请先<a href="javascript:void(0);" class="vivi-blue js-sett-pay-pwd">设置支付密码</a></span> -->
				</div>
				<?php endif; ?>
				<ul>
					<li style="float:left;clear:none;">
						<div style="width: 400px; float: left; font-size: 14px;">
							<label class="list-name" for="leavemess"><?php echo lang('member_leaving_message'); ?>：</label>
							<textarea id="leavemessage" maxlength="100" placeholder="<?php echo lang('member_buyer_message'); ?>"></textarea>
						</div>
					</li>
					<li class="first" style="float:right;clear:none;">
						<div class="calu-box">
							<p class="slivergrey">
								<span><?php echo lang('goods_total'); ?><b class="orange-bold js-goods-num">0</b><?php echo lang('member_kinds_of_goods'); ?> <?php echo lang('member_total'); ?>：</span>
								<span class="txtmoney">￥<b class="js-total-money">0.00</b></span>
							</p>
							<p class="slivergrey">
								<span><?php echo lang('goods_freight'); ?>：</span>
								<span class="txtmoney">￥<b id="express">0.00</b></span>
							</p>
							
							<p class="slivergrey">
								<span><?php echo lang('member_total_discount'); ?>：</span>
								<span class="txtmoney">￥<b id="discount_money">0.00</b></span>
							</p>
							
							<?php if(count($shop_config['order_invoice_content_list'])): ?>
							<p class="slivergrey">
								<span><?php echo lang('member_invoice_tax'); ?>：</span>
								<span class="txtmoney">￥<b id="invoice_tax_money">0.00</b></span>
							</p>
							<?php endif; if($shop_config['order_balance_pay']): ?>
							<p class="slivergrey">
								<span><?php echo lang('member_use_balance'); ?>：</span>
								<span class="txtmoney">￥<b id="use_balance">0.00</b></span>
							</p>
							<?php endif; ?>
						</div>
					</li>
					<li style="border: 1px solid #e4e4e4;">
<!-- 						<div class="lside"> -->
<!-- 							<p class="save-passw"> -->
<!-- 								<span class="slivergrey">输入支付密码：</span> -->
<!-- 								<input type="password" id="cbkpaypwd"> -->
<!-- 							</p> -->
<!-- 						</div> -->
						<div class="rside">
							<div class="lside">
								<p>
									<span class="slivergrey"><?php echo lang('member_amount_payable'); ?>：</span>
									<span class="orange-bold big">￥<b id="realprice">0.00</b>
										<?php if($count_point_exchange): ?><b>+<?php echo $count_point_exchange; ?><?php echo lang('goods_integral'); ?></b><?php endif; ?>
									</span>
								</p>
								<p class="vivi-blue"><?php echo lang('member_pay_soon'); ?>！</p>
							</div>
							<a href="javascript:void(0);" class="btn-jiesuan"><?php echo lang('member_place_order'); ?></a>
							<input type="hidden" id="hidden_discount_money" value="<?php echo $discount_money; ?>" />
							<input type="hidden" id="hidden_express" value="<?php echo $express; ?>" />
							<input type="hidden" id="hidden_count_money" value="<?php echo $count_money; ?>" />
							<input type="hidden" id="count_point_exchange" value="<?php echo $count_point_exchange; ?>"/>
							<input type="hidden" id="hidden_full_mail_money" value="<?php echo $promotion_full_mail['full_mail_money']; ?>"/>
							<input type="hidden" id="hidden_full_mail_is_open" value="<?php echo $promotion_full_mail['is_open']; ?>"/>
							<input type="hidden" id="goods_sku_list" value="<?php echo $goods_sku_list; ?>" />
							<input type="hidden" id="hidden_order_invoice_tax" value="<?php echo $shop_config['order_invoice_tax']; ?>"/>
							<input type="hidden" id="hidden_order_tag" value="<?php echo $order_tag; ?>"/>
							<input type="hidden" id="hidden_pick_up_money" value="<?php echo $pick_up_money; ?>"/>
							<input type="hidden" id="hidden_is_logistice" value="<?php echo $shop_config['is_logistics']; ?>" />
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</form>

<div id="mask" style="display: none;"></div>
<div class="pop-main pop-compare" style="display: none;">
	<div class="pop-header">
		<span><?php echo lang('member_reminder'); ?></span>
		<a class="pop-close" href="javascript:;" title="<?php echo lang('goods_close'); ?>"></a>
	</div>
	<div class="pop-con">
		<i class="pop-icon"></i>
		<p class="pop-text"><?php echo lang('member_sure_delete'); ?>？</p>
		<a href="javascript:;" class="pop-sure main-bg-color"><?php echo lang('goods_determine'); ?></a><a href="javascript:;" class="cancel-btn"><?php echo lang('goods_cancel'); ?></a>
	</div>
</div>

<div class="edit-address modbox" style="display: none;margin-left:-400px;">
	<div class="edit-box">
		<h3><?php echo lang('member_new_delivery_address_information'); ?><i class="close-modbox"></i></h3>
		<div class="edit-form">
			<ul>
				<li>
					<label><i>*</i><?php echo lang('member_consignee'); ?>：</label>
					<input type="text" id="consigner" maxlength="20" class="s-length">
				</li>
				<li>
					<label><i>*</i><?php echo lang('member_phone_number'); ?>：</label>
					<input type="text" id="mobile" maxlength="11" class="s-length">
				</li>
				<li>
					<label><?php echo lang('member_fixed_telephone'); ?>：</label>
					<input type="text" id="phone" maxlength="20" class="s-length">
				</li>
				<li style="min-height: 25px;">
					<label style="float: left;line-height: 26px;margin-right:5px;"><i>*</i><?php echo lang('member_location'); ?>：</label>
					<div class="deliver" style="float: left;">
						<div id="store-selector">
							<script src="__TEMP__/<?php echo $style; ?>/public/js/ns_init_address.js"></script>
<select name="province" id="selProvinces" onchange="getProvince(this,'#selCities')" class="select_addr">
	<option value="-1">请选择省</option>
</select>
<select name="city" id="selCities" onchange="getSelCity(this,'#selDistricts')" class="select_addr">
	<option value="-1">请选择市</option>
</select>
<select name="district" id="selDistricts" class="select_addr">
	<option value="-1">请选择区</option>
</select>
<div class="required-notice fl">
	<i class="notice-icon"></i><span class="notice-text address-notice"></span>
</div>
<script>
initProvince("#selProvinces");
</script>
						</div>
					</div>
				</li>
				<li style="clear: both;">
					<label><i>*</i><?php echo lang('member_detailed_address'); ?>：</label>
					<input type="text" id="detailed_address" maxlength="30" class="l-length">
				</li>
				<li style="clear: both;">
					<label><?php echo lang('member_zip_code'); ?>：</label>
					<input type="text" id="zipcode" maxlength="6" onkeyup="this.value=this.value.replace(/\D/g,'')" class="l-length">
				</li>
			</ul>
			<input type="hidden" id="address_id" value="0">
			<button class="btn-save" id="save_shipping_address"><?php echo lang('member_preservation'); ?></button>
		</div>
	</div>
</div>

<!-- <div id="edit-paypwd" class="modbox" style="display: none;margin-left:-305px;"> -->
<!-- 	<h3> -->
<!-- 		设置支付密码<i class="close-modbox"></i> -->
<!-- 	</h3> -->
<!-- 	<div> -->
<!-- 		<p> -->
<!-- 			<label>手机：</label> -->
<!-- 			<input type="text" id="mobile" readonly="readonly" style="width: 93px; border: none;"> -->
<!-- 			<input type="button" value="发送验证码" id="sendcode" data-mobileid="mobile" class="btn" onclick="sendSms(this, 'sms_setpaypwd');"> -->
<!-- 		</p> -->
<!-- 		<p> -->
<!-- 			<label>手机验证码：</label> -->
<!-- 			<input type="text" id="authcode" maxlength="8" class="input" onkeyup="onlyNum(this);"> -->
<!-- 		</p> -->
<!-- 		<p> -->
<!-- 			<label>设置支付密码：</label> -->
<!-- 			<input type="password" id="paypwd" maxlength="16" class="input"> -->
<!-- 			<span class="tip">限数字和字母，6到16个字符</span> -->
<!-- 		</p> -->
<!-- 		<p> -->
<!-- 			<label>再输支付密码：</label> -->
<!-- 			<input type="password" id="repaypwd" maxlength="16" class="input"> -->
<!-- 		</p> -->
<!-- 		<a href="javascript:void(0);" onclick="editPaypwd();" class="btn" style="margin-left: 94px; margin-top: 20px">提交</a> -->
<!-- 	</div> -->
<!-- </div> -->


<!-- 底部 -->

<!--
	创建时间：2017年2月7日 12:11:41
	功能描述： 底部，联系我们、电话 
-->
<div class="footer">
 <div class="dsc-service">
        <div class="w w1200 relative">
            <ul class="service-list">
                <li>
                    <div class="service-tit service-zheng"><img src="__TEMP__/<?php echo $style; ?>/public/images/icon-zheng.png"></div>
                    <div class="service-txt">正品保障</div>
                </li>
                <li>
                    <div class="service-tit service-qi"><img src="__TEMP__/<?php echo $style; ?>/public/images/icon-qi.png"></i></div>
                    <div class="service-txt">七天包退</div>
                </li>
                <li>
                    <div class="service-tit service-hao"><img src="__TEMP__/<?php echo $style; ?>/public/images/icon-grin.png"></div>
                    <div class="service-txt">好评如潮</div>
                </li>
                <li>
                    <div class="service-tit service-shan"><img src="__TEMP__/<?php echo $style; ?>/public/images/icon-light.png"></i></div>
                    <div class="service-txt">闪电发货</div>
                </li>
                <li class="last">
                    <div class="service-tit service-quan"><img src="__TEMP__/<?php echo $style; ?>/public/images/icon-tronphy.png"></div>
                    <div class="service-txt">权威荣誉</div>
                </li>
            </ul>
        </div>
    </div>
<div class="dsc-help">
        <div class="w w1200">
            <div class="help-list">
				<?php if(is_array($platform_help_class) || $platform_help_class instanceof \think\Collection || $platform_help_class instanceof \think\Paginator): if( count($platform_help_class)==0 ) : echo "" ;else: foreach($platform_help_class as $key=>$class_vo): ?>
                <div class="help-item">
                    <h3><?php echo $class_vo['class_name']; ?></h3>
                    <ul>
                    	<?php if(is_array($platform_help_document) || $platform_help_document instanceof \think\Collection || $platform_help_document instanceof \think\Paginator): if( count($platform_help_document)==0 ) : echo "" ;else: foreach($platform_help_document as $key=>$document_vo): if($class_vo['class_id'] == $document_vo['class_id']): ?>	
                       <li><a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id='.$document_vo['id']); ?>" title="<?php echo $document_vo['title']; ?>" target="_blank"><?php echo $document_vo['title']; ?></a></li>
                    		<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="help-cover">
                <div class="help-ctn">
                    <div class="help-ctn-mt">
                        <span>服务热线</span>
                        <strong><?php echo $web_info['web_phone']; ?></strong>
                    </div>
                    <div class="help-ctn-mb">
                        
                        <a id="IM" im_type="dsc" href="<?php echo $custom_service['value']['service_addr']; ?>" target="_blank" class="btn-ctn"><img src="__TEMP__/<?php echo $style; ?>/public/images/icon-csu.png" style="vertical-align: middle;">&nbsp;&nbsp;咨询客服</a>
                                            </div>
                </div>
                <div class="help-scan">
                    <div class="code" >
                    	<img src="<?php echo __IMG($web_info['web_qrcode']); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
	创建时间：2017年2月7日 12:13:09
	功能描述： 底部、公司信息 
-->
<div class="dsc-copyright">
	<div class="w w1200" id="bottom_copyright">
		<p class="copyright_info">
			<span id="copyright_desc"></span>
		</p>
		<b>
		    <a  href="javascript:;" target="_blank" class="copyright-logo"><?php echo $web_info['third_count']; ?></a>&nbsp;&nbsp;
			<a href="http://www.niushop.com.cn" target="_blank" class="copyright-logo" id="copyright_companyname"></a>
			<a href="#" id="copyright_meta"></a>
		</b>
	</div>
</div>



<script src="__TEMP__/<?php echo $style; ?>/public/js/payment_orders/shipping_address.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/payment_orders/payment_orders.js"></script>


<?php if($uid == ''): ?>
	<style>
.verification-code{
	position:relative;
}
.verification-code img{
	position: absolute;
	top: 5px;
	right: 5px;
	z-index:101;
	width:100px;
	height:30px;
}
</style>
<script type="text/javascript"> 
$(document).ready(function(){
	$(window).on("resize",function(){
		//获取当前屏幕的宽度和高度
		var window_width = parseFloat($(window).width());
		var window_height = parseFloat($(window).height());
		//获取登录框的宽度和高度
		var div_width = parseFloat($("#layui-layer").css("width"));
		var div_height = parseFloat($("#layui-layer").css("height"));
		//确定登录框的显示位置
		var top = (window_height-div_height)/2;
		var left = (window_width-div_width)/2;
		$("#layui-layer").css({"top":top,"left":left});
	})
	//自执行一次resize函数
	$(window).trigger("resize");
});
function titleMove() {
	var moveable = true;
	var loginDiv = document.getElementById("layui-layer");
	//以下变量提前设置好
	var clientX = window.event.clientX;//鼠标水平位置
	var clientY = window.event.clientY;//鼠标垂直位置
	var moveTop = parseFloat(loginDiv.style.top);//登录框的top属性
	var moveLeft = parseFloat(loginDiv.style.left);//登录框的left属性
	var docX = parseFloat(window.innerWidth);//可视区域的宽度
	var docY = parseFloat(window.innerHeight);//可视区域的高度
	var divWidth = parseFloat(loginDiv.style.width);//登录框的宽度
	var divHeight = parseFloat(loginDiv.style.height);//登录框的高度 
	var max_width = docX-divWidth;
	var max_height = docY-divHeight;
	document.onmousemove = function MouseMove() {
		if (moveable) {
			var y = moveTop + window.event.clientY - clientY;  //当前鼠标位置减去上次鼠标位置
			var x = moveLeft + window.event.clientX - clientX;
			if (x >= 0 && y >= 0 && moveTop+divHeight<=docY &&	moveLeft+divWidth<=docX) {
				loginDiv.style.top = y + "px";
				loginDiv.style.left = x + "px";
			}else{
				if(x<0){
					loginDiv.style.left = "5px";
			}else if(y<0){
				loginDiv.style.top = "5px";
			}else if(moveTop+divHeight>docY){
				loginDiv.style.top = max_height + "px";
			}else if(moveLeft+divWidth>docX){
				loginDiv.style.left = max_width + "px";
			}
		} 
	}
}

document.onmouseup = function Mouseup() {
		moveable = false;
	}
}
</script>
<input id="goods_id" value="<?php echo $goods_info['goods_id']; ?>" type="hidden">
<div id="mask-layer-login" style="display:none;position:fixed;top:0;width:100%;height:100%;z-index:999999;background:rgba(0,0,0,0.75);"></div>
<div class="layui-layer layui-layer-page layer-anim" id="layui-layer" type="page" times="100002" showtime="0" contype="string" style="display:none;z-index: 19891015;position:fixed;width:346px;height:436px;">
	<div class="layui-layer-title" style="cursor: move;" id="control-trawaaa"  onmousedown="titleMove();">您尚未登录<span style="width:40px;display:inline-block "></span></div>
	<div id="NS_LOGIN_LAYER_DIALOG" class="layui-layer-content">
		<div id="1487644497l6UAoM" class="login-form">
			<div class="login-con pos-r">
				<div class="login-wrap">
					<div class="login-tit">
						还没有账号？<a href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" class="regist-link color">立即注册<i>&gt;</i></a>
					</div>
					<div class="login-radio">
						<ul>
							<li class="active" id="login2" onclick="setTab('login',2,2)">会员登录</li>
						</ul>
					</div>
					<!-- 普通登录 star -->
					<div id="con_login_2" class="form">
						<div class="form-group item-name">
							<!-- 错误项标注 给div另添加一个class值'error' star -->
							<div class="form-control-box">
								<i class="icon"></i>
								<input type="text" name="txtName" id="txtName" placeholder="手机号/会员名/邮箱" class="text" tabindex="1" autocomplete="off" aria-required="true" />
							</div>
							<!-- 错误项标注 给div另添加一个class值'error' end -->
						</div>
						<div class="form-group item-password">
							<div class="form-control-box">
								<i class="icon"></i>
								<input type="password" name="txtPWD" id="txtPWD" placeholder="请输入密码" class="text" tabindex="2"  autocomplete="off" aria-required="true" />
							</div>
						</div>
						<?php if($login_verify_code['pc'] == 1): ?>
						<div class="form-group verification-code">
							<div class="form-control-box">
								<input type="text" id="vertification" class="text vertification" name="vertification" placeholder="请输入验证码 " />
								<img id="verify_img" src="<?php echo __URL('SHOP_MAIN/captcha'); ?>" alt="captcha" onclick="this.src='<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>'+'&send='+Math.random()" />
							</div>
						</div>
						<input type="hidden" id="hidden_captcha_src" value="<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>" />
						<?php endif; ?>
<!-- 						<div class="safety"> -->
<!-- 							<label for="remember"> -->
<!-- 								<input type="checkbox" name="expire" checked="checked" type="checkbox" value="1"> -->
<!-- 								<span style="display:inline-block;padding-bottom:7px;">7天内自动登录</span> -->
<!-- 							</label> -->
<!-- 							<a class="forget-password fr" href="<?php echo __URL('SHOP_MAIN/login/findpasswd'); ?>" style="margin-top:2px;">忘记密码？</a> -->
<!-- 						</div> -->
						<div class="login-btn">
							<input type="hidden" name="act" value="act_login" />
							<input type="hidden" name="back_act" />
							<input type="button" name="buttom" class="btn-img btn-entry bg-color" id="loginsubmit" onclick="btnlogin(this)" value="立即登录" />
						</div>
						<div class="item-coagent">
							<?php if($Wchat_info['is_use'] == 1): ?>
								<a href="<?php echo __URL('APP_MAIN/login/oauthlogin?type=WCHAT'); ?>" data-id="wchat" class="website-login"><i class="weixin"></i></a>
							<?php endif; if($qq_info['is_use'] == 1): ?>
								<a href="<?php echo __URL('APP_MAIN/login/oauthlogin?type=QQLOGIN'); ?>" data-id="qq" class="website-login"><i class="qq"></i></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<span class="layui-layer-setwin"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span><span class="layui-layer-resize"></span>
</div>
<!-- 验证码脚本 -->
<script type="text/javascript">
// 登陆 登录时 登录按钮"变暗"
function btnlogin(event) {
	var goodsid = $("#goods_id").val();
	var userName = $('#txtName').val();
	var password = $('#txtPWD').val();
	var vertification = "";
	if(userName==''){
		$.msg('用户名不可为空');
		$('#txtName').select();
		return;
	}
	if(password==''){
		$.msg('密码不可为空');
		$('#txtPWD').select();
		return;
	}
	if("<?php echo $login_verify_code['pc']; ?>" == 1){
		vertification = $('#vertification').val();
		if(vertification == undefined || vertification==''){
			$.msg('验证码不可为空');
			$("#vertification").select();
			return;
		}
	}
	$.ajax({
		type:"post",
		url:"<?php echo __URL('SHOP_MAIN/login/login'); ?>",
		data:{"userName" : userName,"password" : password,"vertification" : vertification},
		success : function(data){
			if(data['code']>0){
				$("#hidden_uid").val(data['code']);
				var tag = $('#mask-layer-login').attr("data-tag");
				if(goodsid == '' || tag==undefined ){
					$.msg('登陆成功！');
					window.location.reload();
				}else{
					login_buy_goods(event);
				}
			}else{
				$.msg(data['message']);
				$("#verify_img").attr("src",'<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>&send='+Math.random());
			}
		}
	});
}
function login_buy_goods(event){
	var image_url = "";
	var goodsid =  $("#goods_id").val();
	var tag = $('#mask-layer-login').attr("data-tag");
	 $.cart.add(goodsid, $(".amount-input").val(), {
		is_sku: true,
		image_url: image_url,
		event: event,
		tag : tag
	})
}
</script>
<?php endif; ?>


<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<?php if($default_client): ?>
<div style="position:fixed;right:0;bottom:10%;z-index:999999;" onclick="locationWap()" id="go_mobile">
	<img src="__TEMP__/<?php echo $style; ?>/public/images/go_mobile.png"/>
</div>
<script>
$(function(){
	checkTerminal()
});
window.onresize = function(){
	checkTerminal();
}
function checkTerminal(){
	if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i)) && window.screen.availWidth<768){
		//跳到手机端
		$("#go_mobile").show();
	}else{
		$("#go_mobile").hide();
	}
}
//跳转到wap端
function locationWap(){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('SHOP_MAIN/index/deleteClientCookie'); ?>",
		success : function(data){
			location.href= __URL("SHOP_MAIN");
		}
	})
}
</script>
<?php endif; ?>
</body>
</html>