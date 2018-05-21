<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:52:"template/shop\default\Member\balanceWithdrawals.html";i:1513303782;s:38:"template/shop\default\Member\base.html";i:1513303782;s:35:"template/shop\default\urlModel.html";i:1513303782;s:37:"template/shop\default\controlTop.html";i:1513303782;s:44:"template/shop\default\controlHeadSerach.html";i:1513303782;s:47:"template/shop\default\controlHeadSearchAdv.html";i:1513303782;s:46:"template/shop\default\controlHeadGoodType.html";i:1513303782;s:43:"template/shop\default\controlCommonNav.html";i:1513303782;s:49:"template/shop\default\Member\controlLeftMenu.html";i:1513303782;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta charset="UTF-8">
<title><?php echo $title; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_common.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_color_style.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/iconfont.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_bottom.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/user.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_shop_common.css">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_components.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/nav.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.cookie.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.method.js"></script>
<script type="text/javascript">
var SHOPMAIN='SHOP_MAIN';//外置JS调用
var upload = "__UPLOAD__";//外置JS调用
var APPMAIN='APP_MAIN';//外置JS调用
var temp = "__TEMP__/";//外置JS调用
var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
</script>

<style type="text/css">
td{padding:10px;border: 1px Black; width:46px;}
table{background-color:#eeeeee;border:0;width:100%;}
.integral_title{display:block;font-size:18px;text-align:center;padding:20px;}
.user-right .tabmenu .tab li {border-bottom: 2px #ff6600 solid;} 
.Withdrawals{
	width:10%;float:left;padding:5px 10px;
}
.Withdrawals-right{
	width:85%;float:left;padding:5px 10px;
}
.commision-total{
	line-height:30px;
}
.extract{
	 width: 100%;
}
.commision-right{
	width: 28%;
    line-height: 25px;
    float: left;
    text-align: left;
    border: 2px solid #ddd;
    padding: 5px;
 	margin:10px;
	margin-left:0px; 
}
.commision-right-btn{
    line-height: 25px;
    float: left;
    text-align: left;
    padding: 5px;
/* 	margin-top: 70px; */
/*     margin-left: 10px; */
}  
.tip-text{
	width: 90%;
    float: right;
	color: #DD997F;
}  
.btn-style{
	    width: 7%;
    line-height: 30px;
    text-align: center;
    background: red;
	margin-left:100px;
	margin-top: 12px;
    margin-bottom: 12px;
}
.horn-text{
	width: 50%;
    margin-left: 100px;
	color: #DD997F;
}
.modal-content{
	  width: 472px;
    left: 254px;
}	  
.active{
	border:2px dashed red;
} 
.commision-right-money{
	width: 21%;
    line-height: 25px;
    float: left;
    text-align: left;
    border: 1px solid #e5e5e5;
    padding: 5px;
/* 	margin:10px; */
}
.show-box{
	height: 25px;
    padding-left: 5px;
	border: 1px solid #ddd;
}
</style>

</head>
<body>
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
<!-- 公共的顶部（部分界面不用，） -->

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


<div class="margin-w1210 clearfix">
	<div class="w">
		<div class="breadcrumb clearfix">
			<a href="<?php echo __URL('SHOP_MAIN'); ?>" class="index"><?php echo lang('home_page'); ?></a>
			<span class="crumbs-arrow">&gt;</span>
			<span class="last"><?php echo lang('member_user_center'); ?></span>
		</div>
		<div class="user-left"> <div class="sideNav">
  <h1><a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>"><span><?php echo lang('my_mall'); ?></span></a></h1>
  <div class="userInfo">
    <div class="myInfo clearfix"> 
      <div class="photo">
        <div class="mask">
        <?php if($member_img != '' and $member_img != '0'): ?>
        	<img id="headImagePath" src="<?php echo __IMG($member_img); ?>" style="border-radius: 0;display: block;">
        <?php else: ?>
        	<img id="headImagePath" src="__TEMP__/<?php echo $style; ?>/public/images/temp_default_user_portrait_0.png" style="border-radius: 0;display: block;">
        <?php endif; ?>
      </div> 
      </div>
      <div class="info-op">
      	<ul>
      		<li class="info-op1"><span style="color: #fff;padding-left: 20px;"><?php echo $member_detail['level_name']; ?></span></li> 
        	<li class="info-op1"><i></i><a href="<?php echo __URL('SHOP_MAIN/member/person'); ?>"><?php echo lang('modifying_data'); ?></a></li>
        	<li class="info-op2"><i></i><a href="javascript:logout();" target="_top"><?php echo lang('safe_exit'); ?></a></li>
        </ul>
      </div>
    </div>
    <a class="name" href="<?php echo __URL('SHOP_MAIN/member/person'); ?>"><?php echo $member_info['user_info']['nick_name']; ?></a>
  </div>
</div>
 <div class="navList">
      <div class="func func1 clearfix">
        <p class="title"><i></i><span><?php echo lang('member_member_center'); ?></span></p>
        <a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>"  class="item"><span><?php echo lang('member_welcome_page'); ?></span><i></i></a> 
        <a href="<?php echo __URL('SHOP_MAIN/member/person'); ?>"  class="item "><span><?php echo lang('member_personal_data'); ?></span><i></i></a>
        <a href="<?php echo __URL('SHOP_MAIN/member/usersecurity'); ?>"  class="item "><span><?php echo lang('member_account_security'); ?></span><i></i></a>
        <a href="<?php echo __URL('SHOP_MAIN/member/addresslist'); ?>" class="item "><span><?php echo lang('member_delivery_address'); ?></span><i></i></a>
        <!-- 目前只有平台余额，直接进入详情 -->
        <a href="<?php echo __URL('SHOP_MAIN/member/balancelist'); ?>" class="item " id="qiye_balance"><span><?php echo lang('member_account_balance'); ?></span><i></i></a>
        <a href="<?php echo __URL('SHOP_MAIN/member/balancewithdrawlist'); ?>" class="item " id="qiye_balance_Withdrawals"><span><?php echo lang('member_cash_register'); ?></span><i></i></a>
        <!-- <a href="SHOP_MAIN/member/balanceWithdrawals" class="item " id="qiye_balance_Withdrawals"><span>余额提现</span><i></i></a> -->
        <a href="<?php echo __URL('SHOP_MAIN/member/vouchers'); ?>"  class="item "><span><?php echo lang('member_my_coupon'); ?></span><i></i></a>
        <a href="<?php echo __URL('SHOP_MAIN/member/integrallist'); ?>"  class="item " id="qiye_point"><span><?php echo lang('member_my_points'); ?></span><i></i></a>
      </div>
      <div class="func func2 clearfix">
        <p class="title"><i></i><span><?php echo lang('member_trading_center'); ?></span></p>
        <a href="<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>"  class="item "><span><?php echo lang('member_my_order'); ?></span><i></i></a> 
        <a href="<?php echo __URL('SHOP_MAIN/member/backlist'); ?>"   class="item "><span><?php echo lang('refund_return_maintenance'); ?></span><i></i></a> 
        <a href="<?php echo __URL('SHOP_MAIN/member/goodsevaluationlist'); ?>"   class="item "><span><?php echo lang('commodity_evaluation_drying_list'); ?></span><i></i></a> 
        <a href="<?php echo __URL('SHOP_MAIN/member/goodscollectionlist'); ?>" class="item "><span><?php echo lang('member_merchandise_collection'); ?></span><i></i></a> 
          <a href="<?php echo __URL('SHOP_MAIN/member/shopcollectionlist'); ?>" class="item "><span>店铺收藏</span><i></i></a> 
      </div>
</div> </div>
<script type="text/javascript">
	$(function(){
		//选中
		$('.navList>a').removeClass('curs');
		var path_info='<?php echo $path_info; ?>';
// 		alert(path_info);
// 		alert();
		if(path_info==''||path_info=="member"){
			$("[href^='<?php echo __URL('SHOP_MAIN/member/index'); ?>']").addClass('curs');
		}else{
			$("[href^='<?php echo __URL('SHOP_MAIN/'.$path_info); ?>']").addClass('curs');
		}
	})
</script>
		
    <div data-alert class="alert-box alert" id="errerMsg" style="display: none;"><a href="#" class="close">&times;</a></div>
    <!--submit errow tip end-->
    <!--content begin-->
    <div style="width:82%;float:left;">
        <div class="panel extract">
		        <div class="commision-total">
		        	<div class="commision-total" style="width:8%;float:left;padding:5px 10px;font-size: 14px;"><?php echo lang('member_cash_available'); ?>:</div>
		        	  <div style="width: 80%;clear: both;content: '';display: inline-table;font-size:18px;color:#FF4040;margin:10px;" id="Amount">
		        	  ¥<?php echo $account; ?>
		        	  </div>
		        </div>
        </div>
        <div class="panel extract" style="clear: both;content: '';display: inline-block;">
		    <div class="commision-total" style="width:8%;float:left;padding:5px 10px;font-size: 14px;"><?php echo lang('member_cash_account'); ?>:</div>
		    <div style="width: 90%;clear: both;content: '';display: inline-table;">
			    <?php if(is_array($account_list) || $account_list instanceof \think\Collection || $account_list instanceof \think\Paginator): if( count($account_list)==0 ) : echo "" ;else: foreach($account_list as $k=>$vo): ?>
			    <div class="commision-right">
			    	<div style="width:20%;float:right;text-align: center;margin-top: -8px;margin-right: -8px;"><a href="javascript:;" onclick="updatebankinfo(<?php echo $vo['id']; ?>,<?php echo $shop_id; ?>);"><img src="__TEMP__/<?php echo $style; ?>/public/images/edit-cash.png"/ style="margin-right: 10px;"></a><a href="JavaScript:;" onclick="deletecash(<?php echo $vo['id']; ?>);"><img src="__TEMP__/<?php echo $style; ?>/public/images/delete-cash.png"/></a></div>
			    	<div style="margin-top: 10px;">
			    	<span><?php echo lang('member_full_name'); ?>：<?php echo $vo['realname']; ?></span><br/>
			    	<span><?php echo lang('member_sub_branch_information'); ?>：<?php echo $vo['branch_bank_name']; ?></span><br/>
			    	<span><?php echo lang('member_bank_account'); ?>：<?php echo $vo['account_number']; ?></span>
			    	</div>
			    	<input type="hidden" value="<?php echo $vo['id']; ?>" class="bank_account_id"/>
			    </div>  
			    <?php endforeach; endif; else: echo "" ;endif; if(!empty($account_list)): ?>
			    <div class="commision-right-btn" style="border: 0;width:100%;"><input type="button" value="<?php echo lang('member_click_add'); ?>"  onclick="add_banck();" style="width: 65px;height: 30px;background: #e5e5e5;cursor: pointer;border:0;"/></div>   
				<?php else: ?>
				 <div class="commision-right-btn" style="border: 0;margin-top:0;"><input type="button" value="<?php echo lang('member_click_add'); ?>"  onclick="add_banck();" style="width: 65px;height: 30px;background: #e5e5e5;cursor: pointer;border:0;"/></div>   
				<?php endif; ?>
			 </div>		        
		     
		       
        </div>
        <div class="panel extract" style="content:'';clear:both;display:inline-block;">
        	<div class="commision-total" style="width:8%;float:left;padding:5px 10px;font-size: 14px;"><?php echo lang('member_cash_withdrawal'); ?>:</div>
        	<div class="commision-right-money" style="border:0;padding:5px 0px;">
		    	<input type="text" id="money" placeholder="<?php echo lang('member_enter_amount'); ?>" style="height: 28px;padding-left: 5px;border: 1px solid #e5e5e5;"/>
		    </div>  
        </div>
        <div class="panel extract" style="content:'';clear:both;display:inline-block;">
			<?php if($cash != '' && $poundage != ''): ?>
			<div class="tip-text"><?php echo lang('member_minimum_withdrawal'); ?><span id="MinaAmountCash"><?php echo $cash; ?></span><?php echo lang('element'); ?> ，<?php echo lang('member_must_serve'); ?><span id="IntTimes"><?php echo $poundage; ?></span><?php echo lang('member_integral_multiple'); ?></div>
			<?php else: ?>
			<div class="tip-text"><?php echo lang('member_minimum_withdrawal'); ?><span id="MinaAmountCash">0</span><?php echo lang('element'); ?> ，<?php echo lang('member_must_serve'); ?><span id="IntTimes">1</span><?php echo lang('member_integral_multiple'); ?></div>
			<?php endif; ?>
        </div>
         <div class="panel extract">
        	<div class="btn-style">
        	<input type="hidden" id="bank_id"value=""/>
	        	<a href="javascript:;" onclick="btnSave()" class="button red" style="color:#fff;"><?php echo lang('member_apply_immediately'); ?></a>
	        </div>
            <?php if($withdraw_message != ''): ?>
	        <div class="horn-text" > <?php echo lang('member_notes'); ?>:<?php echo $withdraw_message; ?></div>
            <?php endif; ?> 
        </div>
<!-- 添加银行账户弹出 -->
   <div class="modal fade hide" id="add_banck" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php echo lang('member_add_account'); ?></h4>
            </div>
            <div class="modal-body">
            	<div class="modal-infp-style">
            		<table>
            			<tr>
            				<td style="width:20%"><?php echo lang('member_full_name'); ?>：</td>
            				<td colspan='3'>
            					<input type="text" placeholder="<?php echo lang('member_enter_your_real_name'); ?>" id="realname" class="show-box"/>
            				</td>
            			</tr>
            			<tr>
            				<td><?php echo lang('cell_phone_number'); ?>：</td>
            				<td colspan='3'><input type="text" placeholder="<?php echo lang('member_enter_your_phone_number'); ?>" id="mobile" class="show-box"></td>
            			</tr>
            			
            			<tr>
            				<td><?php echo lang('member_account_type'); ?>:</td>
            				<td colspan='3'>
            					<select id="bank_type">
								   <option  value="<?php echo lang('member_bank_card'); ?>" ><?php echo lang('member_bank_card'); ?> </option>
								   <option value="<?php echo lang('member_alipay'); ?>" style="display:none;"><?php echo lang('member_alipay'); ?></option>
								</select>
            				</td>
            			</tr>
            			<tr>
            				<td><?php echo lang('member_sub_branch_information'); ?>:</td>
            				<td colspan='3'><input type="text" placeholder="<?php echo lang('member_input_sub_branch_information'); ?>" id="branch_bank_name" class="show-box"/></td>
            			</tr>
            			<tr>
            				<td><?php echo lang('member_bank_account'); ?>:</td>
            				<td colspan='3'><input type="text" placeholder="<?php echo lang('member_input_bank_account'); ?>" id="account_number" class="show-box" onkeyup="value=value.replace(/[^\d+(\.\d+)?]/g,'')"/></td>
            			</tr>
            		</table>
            		<input type="hidden" value="<?php echo $shop_id; ?>" id="shop_id"/>
            		<input type="hidden" id="accountid" value=""/>
            	</div>
            </div>
            <div class="modal-footer">
            <button class="btn btn-info" onclick="save()" id="butSubmit" data-dismiss="modal" aria-hidden="true" style="display:inline-block;"><?php echo lang('add'); ?></button>
            <button type="button" class="btn btn-default close"><?php echo lang('goods_close'); ?></button>
            </div>
        </div>
    </div>
</div>

<!-- 添加银行账户弹出结束 -->
        
        
        
        
        
<!--         <div class="panel extract-account" style="border:0px;"> -->
<!--             <ul class="side-nav" > -->
<!--                  <?php if(count($account_list) == 0): ?> -->
<!--                 	<li ><a href="APP_MAIN/member/accountList?shop_id=<?php echo $shop_id; ?>" style="padding:6px 15px;"><span>请添加提现账号 <br></span><i class="arrow"></i></a></li> -->
<!--                  <?php else: ?> -->
<!--                 	<li> -->
<!--                 	 <?php if(is_array($account_list) || $account_list instanceof \think\Collection || $account_list instanceof \think\Paginator): $i = 0; $__LIST__ = $account_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> -->
<!-- 					          <a href="APP_MAIN/member/accountList?shop_id=<?php echo $shop_id; ?>" style="padding:6px 15px;" > -->
<!-- 					               <span><?php echo $vo['branch_bank_name']; ?><br><?php echo $vo['account_number']; ?> </span> -->
<!-- 					               <i class="arrow" ></i></a> -->
<!-- 					          </a> -->
<!-- 					          <input type="hidden" value="<?php echo $vo['id']; ?>" id="bank_account_id"/> -->
<!-- 	                 <?php endforeach; endif; else: echo "" ;endif; ?>  -->
<!-- 	                </li> -->
<!--                 <?php endif; ?> -->
<!--             </ul> -->
<!--         </div> -->
<!--         <div class="row extract-monynumber"> -->
<!--             <div class="large-12 columns"> -->
<!--                 <input type="text" class="" style="border:0px;" id="money" placeholder="请输入提取金额"> -->
<!--             </div> -->
<!--             <div class="tip-text">最低提现金额为<span id="MinaAmountCash"><?php echo $cash; ?></span>元 ，必须为<span id="IntTimes"><?php echo $poundage; ?></span>的整数倍</div> -->
<!--         </div> -->
       
    
     <input type="hidden" value="<?php echo $shop_id; ?>" id="id"/>
  </div>

	</div>
</div>


<script type="text/javascript"src="__TEMP__/<?php echo $style; ?>/public/js/common.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/shopping_cart.js"></script>

 <script type="text/javascript">
 $(function(){
	 $('.commision-right').eq(0).click();
 })
function add_banck(){
	$("#add_banck").show();
    $("#myModalLabel").text("<?php echo lang('member_add_account'); ?>");
    $("#butSubmit").text("<?php echo lang('add'); ?>");
}
$(".close").click(function(){
	$("#add_banck").hide();
})
$(".commision-right").click(function(){
	$(".commision-right").removeClass('active');
	$(this).addClass('active');
	var bank_id = $(this).find(".bank_account_id").val();
	var bank_id = $("#bank_id").val($(this).find(".bank_account_id").val());
})
//删除银行账号信息
function deletecash(id){
		$.ajax({
			url: "<?php echo __URL('SHOP_MAIN/member/delaccount'); ?>",
			data: { "id": id },
			type: "post",
			success: function (res) {
				$.msg(res.message);
				 if (res.code == 1) {
					window.location.reload();
				}
			}
		})
	}
//修改银行账号原始数据弹出
function updatebankinfo(id,shop_id){
	$.ajax({
		url: "<?php echo __URL('SHOP_MAIN/member/getbankinfo'); ?>",
		data: { "id": id ,"shop_id" : shop_id},
		type: "post",
		success: function (data) {
// 			alert(JSON.stringify(data));
// 			alert(data['realname']);
			var id = $("#accountid").val(data['id']);
			var realname = $("#realname").val(data['realname']);
			var mobile = $("#mobile").val(data['mobile']);
			var bank_type = $("#bank_type").val(data['bank_type']);
			var account_number = $("#account_number").val(data['account_number']);
			var branch_bank_name = $("#branch_bank_name").val(data['branch_bank_name']);
			$("#add_banck").show();
            $("#myModalLabel").text("<?php echo lang('member_balance_recharge'); ?>");
            $("#butSubmit").text("<?php echo lang('member_preservation'); ?>");
		}
	})
}
//添加银行账户保存
function save(){
		var id = $("#accountid").val();
		//alert(id);
		var shop_id = $("#shop_id").val();
		var realname = $("#realname").val();
		var mobile = $("#mobile").val();
		var bank_type = $("#bank_type").val();
		var account_number = $("#account_number").val();
		var branch_bank_name = $("#branch_bank_name").val();
        if(realname==''){
        	$.msg("<?php echo lang('member_name_cannot_empty'); ?>");
    		$("#realname").focus();
        	return false;
        }
        if(!(/^1[3|4|5|7|8][0-9]{9}$/.test(mobile))){
        	$.msg("<?php echo lang('member_phone_not_correct'); ?>");
    		$("#mobile").focus();
        	return false;
        }
        if(branch_bank_name==''){
        	$.msg("<?php echo lang('member_branch_cannot_empty'); ?>");
    		$("#branch_bank_name").focus();
        	return false;
        }
        if(account_number==''){
        	$.msg("<?php echo lang('member_bank_cannot_empty'); ?>");
    		$("#account_number").focus();
        	return false;
        }
        var reg = /^\d{16,19}$/;
        if(!(reg.test(account_number))){
        	$.msg("<?php echo lang('member_bank_account_incorrectly'); ?>");
        	$("#account_number").focus();
        	return false;
        }
      
        if(id !=''){
        	//alert('123');
        	$.ajax({
    			type : "post",
    			url : "<?php echo __URL('SHOP_MAIN/member/updatebanckaccount'); ?>",
    			dataType : "json",
    			data : {
    				"realname":realname,
    				"mobile":mobile,
    				"bank_type":bank_type,
    				"account_number":account_number,
    				"id" : id,
    				"branch_bank_name":branch_bank_name
    			},
    			success : function(data) {
    				//alert(JSON.stringify(data));
    				$.msg(data.message);
    				if(data['code']>0){
    					$.msg("<?php echo lang('success_changed'); ?>");
    					window.location.href = __URL("SHOP_MAIN/member/balancewithdrawals?shop_id="+shop_id);
    				}
    				
    			}
    		})
        }else{
        	$.ajax({
    			type : "post",
    			url : "<?php echo __URL('SHOP_MAIN/member/addaccount'); ?>",
    			dataType : "json",
    			data : {
    				"realname":realname,
    				"mobile":mobile,
    				"bank_type":bank_type,
    				"account_number":account_number,
    				"branch_bank_name":branch_bank_name
    			},
    			success : function(data) {
    				//alert(JSON.stringify(data));
    				$.msg(data.message);
    				if(data['code']>0){
    					window.location.href = __URL("SHOP_MAIN/member/balancewithdrawals?shop_id="+shop_id);
    				}
    				
    			}
    		})
        }
        
		
	}

   function btnSave(){
		var shop_id = $("#id").val();
		var bank_id = $("#bank_id").val();
		var cash = $.trim($("#money").val());
		var MaxCashAmount = $.trim($("#Amount").text());
		var MinaAmountCash = $.trim($("#MinaAmountCash").text());
		var IntTimes = $.trim($("#IntTimes").html());
            MaxCashAmount = MaxCashAmount.substr(1);
            if(bank_id == null || bank_id == ""){
            	$.msg("<?php echo lang('member_add_current_account'); ?>");
	            return;
            }
//             var reg = /^\+?[1-9][0-9]*$/;
        	var reg = /^\d+((.{0,1})\d{0,2})$/;
      
            if (reg.test(cash)) {
            	cash = Number(cash);
                MaxCashAmount = Number(MaxCashAmount);
                MinaAmountCash = Number(MinaAmountCash);
                if (cash > 0) {
                    if (cash <= MaxCashAmount) {
                        if (cash >= MinaAmountCash) {
                            if (cash % parseInt(IntTimes) == 0) {
                            
                                $.ajax({
                                	type:"post",
                                    url: "<?php echo __URL('SHOP_MAIN/member/balancewithdrawals'); ?>",
                                    data: { "bank_id": bank_id, "cash": cash},
                                    success: function (res) {
                                        // alert(JSON.stringify(res));
                                        if (res['code'] >0) {
                                        	$.msg("<?php echo lang('member_submitted_for_review'); ?>...");
        									window.location.href = __URL("SHOP_MAIN/member/balancewithdrawlist");
                                        } else {
                                        	$.msg(res['message']);
                                        } 
                                    }
                                })
                            } else {
                                //$("#CashAmount").focus();
                                $.msg("<?php echo lang('member_withdrawals_must_be'); ?>" + IntTimes + "<?php echo lang('member_integral_multiple'); ?>");
                                return false;
                            }
                        } else {
                            //$("#CashAmount").focus();
                            $.msg("<?php echo lang('member_withdrawals_must_greater'); ?>" + MinaAmountCash);
                            return false;
                        }


                    } else {
                        //$("#CashAmount").focus();
                        $.msg("<?php echo lang('member_maximum_amount'); ?>" + MaxCashAmount);
                        return false;
                    }
                } else {
                    //$("#CashAmount").focus();
                    $.msg("<?php echo lang('member_not_present'); ?>");
                    return false;
                }
            } else {
                //$("#CashAmount").focus();
                $.msg("<?php echo lang('member_amount_not_legal'); ?>");
                return false;
            }
        }
    </script>


</body>
</html>