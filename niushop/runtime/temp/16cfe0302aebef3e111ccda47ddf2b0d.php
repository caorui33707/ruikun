<?php if (!defined('THINK_PATH')) exit(); /*a:11:{s:45:"template/shop\default\Member\orderDetail.html";i:1513303782;s:38:"template/shop\default\Member\base.html";i:1513303782;s:35:"template/shop\default\urlModel.html";i:1513303782;s:37:"template/shop\default\controlTop.html";i:1513303782;s:44:"template/shop\default\controlHeadSerach.html";i:1513303782;s:47:"template/shop\default\controlHeadSearchAdv.html";i:1513303782;s:46:"template/shop\default\controlHeadGoodType.html";i:1513303782;s:43:"template/shop\default\controlCommonNav.html";i:1513303782;s:49:"template/shop\default\Member\controlLeftMenu.html";i:1513303782;s:48:"template/shop\default\controlBottomLinkHelp.html";i:1513303782;s:40:"template/shop\default\controlBottom.html";i:1513303782;}*/ ?>
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

<link href="__TEMP__/<?php echo $style; ?>/public/css/order/ns_order_detail.css" rel="stylesheet">
<link href="__TEMP__/<?php echo $style; ?>/public/css/plugin/tooltips.css" rel="stylesheet">
<script src="__TEMP__/<?php echo $style; ?>/public/js/plugin/jquery.pure.tooltips.js"></script>
<style>
.goods-items td{
	padding:2px 5px;
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
		
<div class="user-right">
	<div class="box">
		<div class="tabmenu">
			<ul class="tab pngFix">
				<li class="first active"><?php echo lang('member_order_details'); ?></li>
			</ul>
		</div>
		<div style="float:left;width:50%;display: inline-block;">
			<table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#eeeeee" class="order_detail">
				<tr>
					<td width="20%" align="right" bgcolor="#ffffff">商家店铺：</td>
					<td align="left" bgcolor="#ffffff"><?php echo $order['shop_name']; ?></td>
				</tr>
				<tr>
					<td width="20%" align="right" bgcolor="#ffffff"><?php echo lang('member_order_number'); ?>：</td>
					<td align="left" bgcolor="#ffffff"><?php echo $order['order_no']; ?></td>
				</tr>
				<tr>
					<td align="right" bgcolor="#ffffff"><?php echo lang('member_order_status'); ?>：</td>
					<td align="left" bgcolor="#ffffff"><?php echo $order['status_name']; ?></td>
				</tr>
				<tr>
					<td align="right" bgcolor="#ffffff"><?php echo lang('member_payment_method'); ?>：</td>
					<td align="left" bgcolor="#ffffff"><?php echo $order['payment_type_name']; ?></td>
				</tr>
				<tr>
					<td align="right" bgcolor="#ffffff"><?php echo lang('member_payment_status'); ?>：</td>
					<td align="left" bgcolor="#ffffff"><?php echo $order['pay_status_name']; ?></td>
				</tr>
				<tr>
					<td align="right" bgcolor="#ffffff"><?php echo lang('member_delivery_mode'); ?>：</td>
					<td align="left" bgcolor="#ffffff"><?php echo $order['shipping_type_name']; ?>&nbsp;&nbsp;<?php echo $order['shipping_company_name']; ?></td>
				</tr>
				<?php switch($order['shipping_type']): case "1": ?>
					<tr>
						<td align="right" bgcolor="#ffffff"><?php echo lang('member_receiving_information'); ?>：</td>
							<td align="left" bgcolor="#ffffff"><?php echo $order['receiver_name']; ?>，<?php echo $order['receiver_mobile']; ?>，<?php echo $order['address']; ?><?php echo $order['receiver_address']; if($order['receiver_zip']!=''): ?>&nbsp;，<?php echo $order['receiver_zip']; endif; ?></td>
					</tr>
					<?php break; case "2": ?>
					<tr>
						<td align="right" bgcolor="#ffffff"><?php echo lang('member_self_addressed_address'); ?>：</td>
						<td align="left" bgcolor="#ffffff"><?php echo $order['order_pickup']['province_name']; ?>&nbsp;<?php echo $order['order_pickup']['city_name']; ?>&nbsp;<?php echo $order['order_pickup']['dictrict_name']; ?>&nbsp;<?php echo $order['order_pickup']['address']; ?></td>
					</tr>
					<?php break; endswitch; if(!empty($order['buyer_invoice_info'])): ?>
				<tr>
					<td align="right" bgcolor="#ffffff"><?php echo lang('member_invoice_header'); ?>：</td>
					<td align="left" bgcolor="#ffffff">
						<?php if(!empty($order['buyer_invoice_info'][0])): ?>
						<?php echo $order['buyer_invoice_info'][0]; endif; ?>
					</td>
				</tr>
				<tr>
					<td align="right" bgcolor="#ffffff" style="width: 22%;"><?php echo lang('member_taxpayer_identification_number'); ?>：</td>
					<td align="left" bgcolor="#ffffff">
						<?php if(!empty($order['buyer_invoice_info'][2])): ?>
						<?php echo $order['buyer_invoice_info'][2]; else: ?>
						-
						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td align="right" bgcolor="#ffffff"><?php echo lang('member_invoice_content'); ?>：</td>
					<td align="left" bgcolor="#ffffff">
						<?php if(!empty($order['buyer_invoice_info'][1])): ?>
						<?php echo $order['buyer_invoice_info'][1]; endif; ?>
					</td>
				</tr>
				<?php endif; if($order['buyer_message'] != ''): ?>
				<tr>
					<td align="right" bgcolor="#ffffff"><?php echo lang('member_buyer_message'); ?>：</td>
					<td><?php echo $order['buyer_message']; ?></td>
				</tr>
				<?php else: ?>
				<tr>
					<td align="right" bgcolor="#ffffff"><?php echo lang('member_buyer_message'); ?>：</td>
					<td><?php echo lang('member_no_messages'); ?></td>
				</tr>
				<?php endif; ?>
				
			</table>
		</div>
		
		<?php if($order['order_status'] == 0): ?>
		<div class="tab_right">
			<dl>
				<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
				<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_submitted_and_payment'); ?></dd>
			</dl>
			<ul>
				<li>1. <?php echo lang('member_no_pay_yet'); ?>。</li>
				<li>2. <?php echo lang('member_cancel_the_order'); ?>。</li>
				<li>3. <?php echo lang('member_created_order'); if($order_buy_close_time == '' || $order_buy_close_time == 0): ?>60<?php else: ?><?php echo $order_buy_close_time; endif; ?><?php echo lang('member_automatically_closes'); ?>。</li>
			</ul>
		</div>
		<?php endif; if($order['order_status'] == 1): ?>
		<div class="tab_right">
			<dl>
				<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
				<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_wait_patiently_shipment'); ?>...</dd>
			</dl>   
			<ul >
				<li>1. <?php echo lang('member_seven_days_return'); ?>。</li>
				<li>2、<?php echo lang('member_customer_service_required'); ?>。</li>
			</ul>
		</div>
		<?php endif; if($order['order_status'] == 2): ?>
		<div class="tab_right">
			<dl>
				<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
			<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_shipment_and_patient'); ?>...</dd>
			</dl>
			<ul>
				<li>1. <?php echo lang('member_seven_days_return'); ?>。</li>
				<li>2、<?php echo lang('member_customer_service_required'); ?>。</li>
			</ul>
		</div>
		<?php endif; if($order['order_status'] == 3): ?>
		<div class="tab_right">
			<dl>
				<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
			<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_received_goods'); ?></dd>
			</dl>
			<ul>
				<li>1、<?php echo lang('member_contact_the_seller'); ?>。</li>
				<li>2、<?php echo lang('member_customer_service_required'); ?>。</li>
			</ul>
		</div>
		<?php endif; if($order['order_status'] == 4): ?>
		<div class="tab_right">
			<dl>
				<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
			<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_completed'); ?></dd>
			</dl>
			<ul>
				<li>1、<?php echo lang('member_contact_the_seller'); ?>。</li>
				<li>2、<?php echo lang('member_customer_service_required'); ?>。</li>
			</ul>
		</div>
		<?php endif; if($order['order_status'] == 5): ?>
		<div class="tab_right">
			<dl>
				<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
				<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_closed'); ?></dd>
			</dl>
			<ul></ul>
		</div>
		<?php endif; if($order['order_status'] == -1): ?>
		<div class="tab_right">
		<dl>
			<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
			<dd><?php echo lang('member_order_status'); ?>：<?php echo lang('member_refund'); ?></dd>
			</dl>
			<ul>
				<li>1、<?php echo lang('member_refund_and_contact_seller'); ?>。</li>
				<li>2、<?php echo lang('member_customer_service_required'); ?>。</li>
			</ul>
		</div>
		<?php endif; if($order['order_status'] == -2): ?>
		<div class="tab_right">
			<dl>
				<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
			<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_have_refunded'); ?></dd>
			</dl>
			<ul></ul>
		</div>
		<?php endif; ?>
		<br/>
		<?php if(count($order['order_goods_no_delive']) >0): ?>
		<table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#eeeeee" ></table>
		<div class="blank"></div>
		<div class="tabmenu">
			<ul class="tab pngFix">
				<li class="first active"><?php echo lang('member_list_of_goods'); ?></li>
			</ul>
		</div>
		
		<table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#eeeeee" class="goods-items">
			<tr>
				<th width="30%" align="center" bgcolor="#ffffff"><?php echo lang('member_commodity_name'); ?></th>
				<th width="20%" align="center" bgcolor="#ffffff"><?php echo lang('member_attribute'); ?></th>
				<th width="15%" align="center" bgcolor="#ffffff"><?php echo lang('member_commodity_price'); ?></th>
				<th width="10%" align="center" bgcolor="#ffffff"><?php echo lang('member_quantity_purchased'); ?></th>
				<th width="15%" align="center" bgcolor="#ffffff"><?php echo lang('goods_subtotal'); ?></th>
				<th width="10%" align="center" bgcolor="#ffffff"><?php echo lang('member_distribution_status'); ?></th>
			</tr>
			<?php if(is_array($order['order_goods_no_delive']) || $order['order_goods_no_delive'] instanceof \think\Collection || $order['order_goods_no_delive'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['order_goods_no_delive'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsData): $mod = ($i % 2 );++$i;?>
			<tr>
				<td bgcolor="#ffffff">
					<div class="ui-centered-image" style="width: 48px; height: 48px;float: left;margin-right: 10px;">
						<img src="<?php echo __IMG($goodsData['picture_info']['pic_cover_micro']); ?>" style="max-width: 48px;max-height: 48px;">
					</div>
					<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goodsData['goods_id']); ?>" target="_blank"><?php echo $goodsData['goods_name']; ?></a>
				</td>
				<td align="center" bgcolor="#ffffff">
				<?php if($goodsData['sku_name'] != ''): ?>
					<?php echo $goodsData['sku_name']; endif; ?>
				</td>
				<td align="center" bgcolor="#ffffff">￥<?php echo $goodsData['price']; ?></td>
				<td align="center" bgcolor="#ffffff"><?php echo $goodsData['num']; ?></td>
				<td align="center" bgcolor="#ffffff"><?php echo $goodsData['goods_money']; ?></td>
				<td align="center" bgcolor="#ffffff">
					<span><?php echo $goodsData['shipping_status_name']; ?></span>
					<?php if($goodsData['refund_status'] != 0): ?>
						<p><a href="<?php echo __URL('ADMIN_MAIN/order/orderrefunddetail','itemid='.$goodsData['order_goods_id']); ?>" style="color:#E31939;"><?php echo $goodsData['status_name']; ?></a></p>
					<?php endif; ?>
				</td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<?php endif; if(is_array($order['goods_packet_list']) || $order['goods_packet_list'] instanceof \think\Collection || $order['goods_packet_list'] instanceof \think\Paginator): if( count($order['goods_packet_list'])==0 ) : echo "" ;else: foreach($order['goods_packet_list'] as $key=>$vo): ?>
		<table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#eeeeee" style="margin-top:15px;">
			<tr>
				<th width="30%" align="left" >
					<span><?php echo $vo['packet_name']; ?></span>
					<?php if($vo['is_express'] == 1): ?>
					<span><?php echo $vo['express_name']; ?>：</span>
					<span><?php echo $vo['express_code']; ?></span>
					<?php endif; ?>
				</th>
				<th width="20%"></th>
				<th width="15%">
					<?php if($vo['is_express'] == 1): ?>
					<a class="js-query-logistics" data-express-code="<?php echo $vo['express_code']; ?>" data-express-name="<?php echo $vo['express_name']; ?>" data-express-id="<?php echo $vo['express_id']; ?>" href="javascript:;"><?php echo lang('member_inquiry_logistics'); ?></a>
					<?php endif; ?>
				</th>
				<th width="10%"></th>
				<th width="15%"></th>
				<th width="10%"><?php echo lang('member_distribution_status'); ?></th>
			</tr>
			<?php if(is_array($vo['order_goods_list']) || $vo['order_goods_list'] instanceof \think\Collection || $vo['order_goods_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['order_goods_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsvo): $mod = ($i % 2 );++$i;?>
			<tr>
				<td bgcolor="#ffffff">
					<div class="ui-centered-image" style="width: 48px; height: 48px;float: left;margin-right: 10px;">
						<img src="<?php echo __IMG($goodsvo['picture_info']['pic_cover_micro']); ?>" style="max-width: 48px;max-height: 48px;">
					</div>
					<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goodsvo['goods_id']); ?>" target="_blank"><?php echo $goodsData['goods_name']; ?></a>
				</td>
				<td align="center" bgcolor="#ffffff">
				<?php if($goodsvo['sku_name'] != ''): ?>
					<?php echo $goodsvo['sku_name']; endif; ?>
				</td>
				<td align="center" bgcolor="#ffffff">￥<?php echo $goodsvo['price']; ?></td>
				<td align="center" bgcolor="#ffffff"><?php echo $goodsvo['num']; ?></td>
				<td align="center" bgcolor="#ffffff"><?php echo $goodsvo['goods_money']; ?></td>
				<td align="center" bgcolor="#ffffff"><?php echo $goodsvo['shipping_status_name']; ?></td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="blank"></div>
		<div class="tabmenu">
			<ul class="tab pngFix">
				<li class="first active"><?php echo lang('member_total_cost'); ?></li>
			</ul>
		</div>
		<table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#eeeeee">
			<tr>
				
			<td colspan="7" align="right" >
				<span><?php echo lang('member_total_commodity_value'); ?>：￥<?php echo $order['goods_money']; ?>，</span>
				
				<?php if($order['user_platform_money']>0): ?>
				<span><?php echo lang('member_balance_payment'); ?>：￥<?php echo $order['user_platform_money']; ?>，</span>
				<?php endif; if($order['coupon_money']>0): ?>
				<span><?php echo lang('member_coupons'); ?>：￥<?php echo $order['coupon_money']; ?>，</span>
				<?php endif; if($order['tax_money']>0): ?>
				<span><?php echo lang('member_invoice_tax'); ?>：￥<?php echo $order['tax_money']; ?>，</span>
				<?php endif; if($order['promotion_money']>0): ?>
				<span><?php echo lang('member_full_discount'); ?>：￥<?php echo $order['promotion_money']; ?>，</span>
				<?php endif; if($order['point']>0): ?>
				<span><?php echo lang('member_use_integral'); ?>：<?php echo $order['point']; ?>，</span>
				<?php endif; ?>
				
				<span> <?php echo lang('member_actual_payment'); ?>：<b style="color: #f44;">￥<?php echo $order['pay_money']; ?></b></span>
				<span>（<?php echo lang('free_shipping'); ?> ￥<?php echo $order['shipping_money']; ?>）</span>
			</td>
			</tr>
		</table>
	</div>
</div>

	</div>
</div>

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


<script type="text/javascript"src="__TEMP__/<?php echo $style; ?>/public/js/common.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/shopping_cart.js"></script>

<script>
$(function(){
	
	//查询物流
	$(".js-query-logistics").mouseover(function(){
		$(".js-query-logistics").removeAttr("data-show");
		$(this).attr("data-show",1);
	});

	var html = '<div class="silider-express">';
		html += '<div class="mask-layer-loading" style="text-align:center;">';
		html += '<img src="ADMIN_IMG/mask_load.gif"/>';
		html += '<div style="text-align:center;margin-top:10px;"><?php echo lang('member_effort_loading'); ?>...</div>';
		html += '</div>';
		html += '</div>';
	$('.js-query-logistics').pt({
		content: html,
		position : 'l',
		open : function(res){
			var curr_express = $(".js-query-logistics[data-show]");
			var express_id = curr_express.attr("data-express-id");
			var express_name = curr_express.attr("data-express-name");
			var express_code = curr_express.attr("data-express-code");
			if(express_id != undefined && express_name != undefined){
				if(curr_express.attr("data-express-info") == undefined){
					$.ajax({
						type : "post",
						url : "<?php echo __URL('SHOP_MAIN/member/getordergoodsexpressmessage'); ?>",
						data : {"express_id":express_id},
						success : function(data) {
							var html = "";
							if (data.length > 0) {
								html += '<div class="logistics-tip">';
									html += '<div class="title">'+express_name+'&nbsp;&nbsp;&nbsp;<?php echo lang('member_waybill_number'); ?>：'+express_code+'</div>';
									html += '<div class="content">';
										html += '<ul>';
										for (var i = 0; i < data.length; i++){
											if(i==0){
												html += '<li class="first">';
											}else{
												html += '<li>';
											}
												html += '<i class="node-icon"></i>';
												html += '<a href="" target="_blank">'+data[i]["AcceptStation"]+'</a>';
												html += '<div class="ftx-13">'+data[i]["AcceptTime"]+'</div>';
											html += '</li>';
										}
										html += '</ul>';
									html += '</div>';
								html += '</div>';
							}else{
								html += '<div class="logistics-tip"><div class="content">'+data["Reason"]+'</div></div>';
							} 
							res.html(html);
							curr_express.attr("data-express-info",html);//保存物流信息
						}
					});
				}else{
					res.html(curr_express.attr("data-express-info"));
				}
			}
		}
	});
})
</script>

</body>
</html>