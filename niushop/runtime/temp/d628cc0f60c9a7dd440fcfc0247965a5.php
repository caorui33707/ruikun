<?php if (!defined('THINK_PATH')) exit(); /*a:11:{s:46:"template/shop\default\Member\userSecurity.html";i:1513303782;s:38:"template/shop\default\Member\base.html";i:1513303782;s:35:"template/shop\default\urlModel.html";i:1513303782;s:37:"template/shop\default\controlTop.html";i:1513303782;s:44:"template/shop\default\controlHeadSerach.html";i:1513303782;s:47:"template/shop\default\controlHeadSearchAdv.html";i:1513303782;s:46:"template/shop\default\controlHeadGoodType.html";i:1513303782;s:43:"template/shop\default\controlCommonNav.html";i:1513303782;s:49:"template/shop\default\Member\controlLeftMenu.html";i:1513303782;s:48:"template/shop\default\controlBottomLinkHelp.html";i:1513303782;s:40:"template/shop\default\controlBottom.html";i:1513303782;}*/ ?>
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

<style>
#find-box .item {
    width: 650px;
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
		

<?php if($atc == ''): ?>
	<!-- 账户安全主页 -->
  <div class="user-right" id="user_security">
    <div class="box"> 
      <h5 class="user-title user-title-t"> <span> <?php echo lang('member_account_security'); ?></span></h5>
      <div class="blank"></div>
      <div id="safe05">
      
      	<!-- 密码修改 -->
        <div class="mc">
          <div class="fore1"> <s class="fore1_3"></s><strong><?php echo lang('member_login_password'); ?></strong> </div>
          <div class="fore2"> <span class="ftx-03"><?php echo lang('member_change_passwords_regularly'); ?>。</span> <span style="color: #E31939;"></span> </div>
          <div class="fore3">
            <input type="button" value="<?php echo lang('member_modify'); ?>" onclick="window.location.href='<?php echo __URL('SHOP_MAIN/member/usersecurity','atc=user_pwd'); ?>'" class="main-btn main-btn-large" />
          </div>
        </div>
         
         <!-- 邮箱 -->
        <div class="mc">
       	 <?php if($member_info['user_info']['user_email'] != ''): ?>
          <div class="fore1"> <s class="fore1_3"></s> <strong><?php echo lang('member_mailbox_binding'); ?></strong> </div>
          <div class="fore2"> <span class="ftx-03"><?php echo lang('member_verified_mailbox'); ?>：<?php echo $member_info['user_info']['user_email']; ?></span> </div>
          <div class="fore3"> 
               <input type="button" value="<?php echo lang('member_modify'); ?>" onclick="window.location.href='<?php echo __URL('SHOP_MAIN/member/usersecurity','atc=user_email'); ?>'" class="main-btn main-btn-large" />
          </div>
         <?php else: ?>
          <div class="fore1"> <s class="fore1_1"></s> <strong><?php echo lang('member_mailbox_binding'); ?></strong> </div>
          <div class="fore2"> <span tyle="color: #ED5854;"><?php echo lang('member_retrieve_password'); ?></span> </div>
          <div class="fore3"> 
               <a href="<?php echo __URL('SHOP_MAIN/member/usersecurity','atc=user_email'); ?>" class="btn btn-7"><?php echo lang('member_mailbox_binding'); ?></a> 
          </div>
          <?php endif; ?>
        </div>
        
        <!-- 手机 -->
        <div class="mc">
          <?php if($member_info['user_info']['user_tel'] != ''): ?>
          <div class="fore1"> <s class="fore1_3"></s> <strong><?php echo lang('member_bind_mobile'); ?></strong> </div>
          <div class="fore2"> <span class="ftx-03"><?php echo lang('member_phone_bound'); ?>：<?php echo $member_info['user_info']['user_tel']; ?></span> </div>
          <div class="fore3">
          	 <input type="button" value="<?php echo lang('member_modify'); ?>" onclick="window.location.href='<?php echo __URL('SHOP_MAIN/member/usersecurity','atc=user_mobile'); ?>'" class="main-btn main-btn-large" /> 
          </div>
          <?php else: ?>
          <div class="fore1"> <s class="fore1_1"></s> <strong><?php echo lang('mobile_verification'); ?></strong> </div>
          <div class="fore2"> <span style="color: #ED5854;"><?php echo lang('member_receive_changes_account'); ?></span> </div>
          <div class="fore3"> <a href="<?php echo __URL('SHOP_MAIN/member/usersecurity','atc=user_mobile'); ?>" class="btn btn-7"><?php echo lang('member_bind_mobile'); ?></a> </div>
          <?php endif; ?>
        </div>
		
      </div>   
    </div>
  </div>
<?php elseif($atc == 'user_pwd'): ?>
<style>
  #find-box .item .old-pwd-error {
    background: #FFFDEE;
    border: 1px #EDD28B solid;
    color: #666;
    width: auto;
    max-width: 260px;
    padding: 5px 10px;
    margin-left: 10px;
    display: inline-block;
    font-size: 12px;
    color: #999;
    display: none;
}
</style>
 <div class="user-right" id='user_pwd'>
    <div class="box"> 
            <h5 title="<?php echo lang('member_modify_login_password'); ?>" class="user-title user-title-t"> <span><?php echo lang('member_modify_login_password'); ?></span> </h5>
            <div class="blank"></div>
      <div id="find_pw3">
        <div class="find_con">
         <div id="sflex04" class="stepflex stepflex_te">
	            <dl class="normal doing">
	              <dt class="s-num">1</dt>
	              <dd class="s-text"> <?php echo lang('member_password_modification'); ?> <s></s> <b></b> </dd>
	            </dl>
	            <dl class="last">
	              <dt class="s-num">&nbsp;</dt>
	              <dd class="s-text"> <?php echo lang('member_complete'); ?> <s></s> <b></b> </dd>
	            </dl>
          </div>
          <div id="find-box" class="uc_box">
              <div id="error_container"></div>
              <div class="item">
                <label class="con_un"><?php echo lang('member_origina_password'); ?>:</label>
                <input name="old_password" id="old_password" type="password" tabindex="1" placeholder="<?php echo lang('member_enter_original_password'); ?>" class="text" />
                <span class="error"><?php echo lang('member_enter_original_password'); ?>!</span>
                <span class="error"><?php echo lang('member_password_error'); ?>!</span>
              </div>
              <div class="item">
                <label class="con_un"><?php echo lang('member_new_password'); ?>:</label>
                <input name="newpassword" id="newpassword" type="password" tabindex="1" placeholder="<?php echo lang('please_input_password'); ?>" class="text" />
                <span class="error"><?php echo lang('member_enter_new_password'); ?>!</span>
              </div>
              <div class="item">
                <label class="con_un"><?php echo lang('member_confirm_password'); ?>:</label>
                <input name="newpassword1" id="newpassword1" type="password" tabindex="2" placeholder="<?php echo lang('member_enter_password_again'); ?>" class="text" />
                <span class="error"><?php echo lang('member_enter_password_again'); ?>!</span>
                <span class="error"><?php echo lang('member_password_inconsistent'); ?>!</span>
              </div>
              
              <div class="item">
                <label class="con_un">&nbsp;</label>
                <input type="hidden" name="act" value="password_reset_success" />
                <input type="button" id="btn_submit" name="btn_submit" class="main-btn main-btn-large" value="<?php echo lang('member_submit'); ?>" onclick="modifyPwd()"/>
              </div>
          </div>
        </div>
       </div>
     </div> 
     <script type="text/javascript">
		function modifyPwd(){
			var old_password=$('#old_password').val();
			var new_password=$('#newpassword').val();
			var new_password1=$('#newpassword1').val();
		  if(old_password.length==0){
        $("#old_password").next(".error").show();
        return false;
      }else{
         $("#old_password").next(".error").hide();
      }
      if(new_password.length==0){
        $("#newpassword").next(".error").show();
        return false;
      }else{
         $("#newpassword").next(".error").hide();
      }
       if(new_password1.length==0){
        $("#newpassword1").next(".error").show();
        return false;
      }else{
         $("#newpassword1").next(".error").hide();
      }
      if(new_password1!=new_password){
        $("#newpassword1").next().next(".error").show();
        return false;
      }else{
         $("#newpassword1").next(".error").hide();
      }
			$.ajax({
                 url: "<?php echo __URL('SHOP_MAIN/member/modifypassword'); ?>",
                 data: { "new_password":new_password,"old_password":old_password },
                 type: "post",
                 success: function (res) {
                  // alert(JSON.stringify(res));
                     if (res['code']> 0) {
                    	 $('#user_pwd #find-box').html('<div class="find_box_end"><p> <i></i><?php echo lang('member_password_changes_succeeded'); ?>！ </p><p class="on_go"> <a href="<?php echo __URL('SHOP_MAIN/member/usersecurity'); ?>" title="<?php echo lang('member_instant_shopping'); ?>" class="back"><?php echo lang('member_return_account_security_center'); ?>&gt;&gt;</a> </p></div>'); 
                         $('#user_pwd #sflex04 .normal').removeClass('doing');
                         $('#user_pwd #sflex04 .normal').removeClass('done');
                         $('#user_pwd #sflex04 .last').addClass('doing');
                     } else if(res['code'] == -2005){
                        $("#old_password").next().next(".error").show();
                     }else{
                        $("#old_password").next().next(".error").hide();
                     }
                 }
             })
		}
	 </script>  
</div>
<?php elseif($atc == 'user_mobile'): ?>
	<!-- 手机号绑定 -->
  <div class="user-right" id="user_mobile" >
    <div class="box"> 
      <h5 title="<?php echo lang('member_bind_mobile'); ?>" class="user-title user-title-t"> <span><?php echo lang('member_bind_mobile'); ?></span> </h5>
       
      <div class="blank"></div>
      <div id="find_pw3">
        <div class="find_con"> 
           <div id="sflex04" class="stepflex stepflex_te">
	            <dl class="normal doing">
	              <dt class="s-num">1</dt>
	              <dd class="s-text"> <?php echo lang('member_bind_mobile'); ?> <s></s> <b></b> </dd>
	            </dl>
	            <dl class="last">
	              <dt class="s-num">&nbsp;</dt>
	              <dd class="s-text"><?php echo lang('member_complete'); ?> <s></s> <b></b> </dd>
	            </dl>
          </div>
            <div id="find-box" class="uc_box" >
              <div id="error_container"></div>
              <div class="item">
                <label class="con_un"><?php echo lang('member_phone_number'); ?>：</label>
                <input name="mobile" id="mobile" type="text" tabindex="1" placeholder="<?php echo lang('member_enter_your_phone_number'); ?>" class="text">
                <span class="error"><?php echo lang('member_must_not_be_empty'); ?>!</span>
              </div>
              <?php if($login_verify_code['pc'] == 1): ?>
              <div class="item">
	              <label  class="con_un"><?php echo lang('member_verification_code'); ?>：</label>
	              <input type="text" id="captcha" name="captcha" tabindex="2" placeholder="<?php echo lang('please_enter_verification_code'); ?>" autocomplete="off" class="text text-te" />
	              <label class="img" style="margin-left: 5px"> <img class="verifyimg" src="<?php echo __URL('SHOP_MAIN/captcha'); ?>" onclick="this.src="<?php echo __URL('SHOP_MAIN/captcha'); ?>""  alt="captcha" style="vertical-align: middle; cursor: pointer; height: 35px;" /> </label>
	          	  <span id="vertify"></span>
              </div>
              <?php endif; if($notice['noticeMobile'] == 1): ?>
              <div class="item">
                <label class="con_un"><?php echo lang('member_mobile_verification_code'); ?>：</label>
                <input name="mobile_code" id="mobile_code" type="text" tabindex="2" placeholder="<?php echo lang('member_enter_mobile_verification_code'); ?>" class="text text_te">
                <input id="sendOutCode" name="code_mobile" type="button" value="<?php echo lang('member_get_mobile_verification_code'); ?>" bvalue="<?php echo lang('member_get_mobile_verification_code'); ?>" class="code" >
                <span class="error"><?php echo lang('member_must_not_be_empty'); ?>!</span>
              </div> 
              <?php endif; ?>
              <div class="item">
                <label class="con_un">&nbsp;</label>
                <input type="hidden" name="act" value="mobile_binding_success">
                <input type="button" id="btn_submit" name="btn_submit" class="main-btn main-btn-large" value="<?php echo lang('member_submit'); ?>" onclick="bindingMobile()">
              </div>
              
          </div>
        </div>
 <script type="text/javascript">
 	//手机绑定
    function bindingMobile(){
    	var mobile=$('#mobile').val();
    	var mobile_code=$('#mobile_code').val();
    	var vertification = $("#captcha").val();
    	
    	if(mobile==''){
    		$('#mobile').parent().children('.error').show();
    		return false;
    	}
    	$('#mobile').parent().children('.error').hide();
    	<?php if($login_verify_code['pc'] == 1): ?>
      	if(vertification == ''){
      			$("#captcha").trigger("focus");
      			$("#vertify").addClass("error").text("<?php echo lang('please_enter_verification_code'); ?>").show();
      			return false;
        } 
        <?php if($notice['noticeMobile'] != 1): ?>
        var result = '';
        $.ajax({
          type : "post",
          url : "<?php echo __URL('SHOP_MAIN/member/vertify'); ?>",
          data : {"vertification" : vertification},
          async : false,
          dataType:'json',
          success : function(res){
            if(res['code']== 1){
              result = true;
            }else{
              $("#vertify").addClass("error").text("<?php echo lang('member_verify_code_error'); ?>").show();
              result = false;
            }
            return result;
          }
        })
        if(!result){
          return false;
        }
        <?php endif; endif; ?>
		 
    	$("#vertify").hide();
    	
    	if(mobile_code==''){
    		$('#mobile_code').parent().children('.error').show();
    		return false;
    	}
    	$('#mobile_code').parent().children('.error').hide();
    	
    
    	 $.ajax({
             url: "<?php echo __URL('SHOP_MAIN/member/modifymobile'); ?>",
             data: {"mobile": mobile,"mobile_code":mobile_code,"vertification":vertification},
             type: "post",
             success: function (res) {
              //alert(JSON.stringify(res));
                 if (res["code"] > 0) {
                	$('#user_mobile #find-box').html('<div class="find_box_end"><p> <i></i> <?php echo lang('member_mobile_bind_success'); ?>！ </p><p class="on_go"> <a href="<?php echo __URL('SHOP_MAIN/member/usersecurity'); ?>" title="<?php echo lang('member_instant_shopping'); ?>" class="back"><?php echo lang('member_return_account_security_center'); ?>&gt;&gt;</a> </p></div>'); 
                    $('#user_mobile #sflex04 .normal').removeClass('doing');
                    $('#user_mobile #sflex04 .normal').removeClass('done');
                    $('#user_mobile #sflex04 .last').addClass('doing');
                 } else {
                     $.msg(res["message"]);
                 }
             }
         })
    }
 

 </script> 
</div>

    </div>
  </div>
<?php elseif($atc == 'user_email'): ?>  
  <!-- 邮箱绑定 -->
  <div class="user-right" id="user_email" >
    <div class="box"> 
            <h5 title="<?php echo lang('member_mailbox_binding'); ?>" class="user-title user-title-t"> <span><?php echo lang('member_mailbox_binding'); ?></span> </h5>
       
       
            <div class="blank"></div>
      <div id="find_pw3">
        <div class="find_con"> 
                    <div id="sflex04" class="stepflex stepflex_te">
            <dl class="normal doing">
              <dt class="s-num">1</dt>
              <dd class="s-text"> <?php echo lang('member_mailbox_binding'); ?> <s></s> <b></b> </dd>
            </dl>
            <dl class="last">
              <dt class="s-num">&nbsp;</dt>
              <dd class="s-text"> <?php echo lang('member_complete'); ?> <s></s> <b></b> </dd>
            </dl>
          </div>
          <div id="find-box" class="uc_box">
              <div id="error_container"></div>
              <div class="item">
                <label class="con_un"><?php echo lang('member_your_email_address'); ?>：</label>
                <input name="email" id="email" type="text" tabindex="1" placeholder="<?php echo lang('member_enter_email_address'); ?>" class="text">
                 <span class="error"><?php echo lang('member_must_not_be_empty'); ?>!</span>
              </div>
              <?php if($login_verify_code['pc'] == 1): ?>
              <div class="item">
	              <label  class="con_un"><?php echo lang('member_verification_code'); ?>：</label>
	              <input type="text" id="captcha" name="captcha" tabindex="2" placeholder="<?php echo lang('please_enter_verification_code'); ?>" autocomplete="off" class="text text-te" />
	              <label class="img" style="margin-left: 5px"> <img class="verifyimg" src="<?php echo __URL('SHOP_MAIN/captcha'); ?>"onclick="this.src="<?php echo __URL('SHOP_MAIN/captcha'); ?>""  alt="captcha" style="vertical-align: middle; cursor: pointer; height: 35px;" /> </label>
	          	  <span id="vertify"></span>
              </div>
              <?php endif; if($notice['noticeEmail'] == 1): ?>
              <div class="item">
                <label class="con_un"><?php echo lang('member_mailbox_authentication_code'); ?>：</label>
                <input name="email_code" id="email_code" type="text" tabindex="2" placeholder="<?php echo lang('member_enter_mailbox_verification_code'); ?>" class="text text_te">
                <input id="sendOutCode" name="code_email" type="button" value="<?php echo lang('member_gets_mailbox_validation_codet'); ?>" bvalue="<?php echo lang('member_gets_mailbox_validation_codet'); ?>"  class="code"  >
                <span class="error"><?php echo lang('member_must_not_be_empty'); ?>!</span>
              </div> 
              <?php endif; ?>
              <div class="item">
                <label class="con_un">&nbsp;</label>
                <input type="hidden" name="act" value="email_binding_success">
                <input type="button" id="btn_submit" name="btn_submit" class="main-btn main-btn-large" value="<?php echo lang('member_submit'); ?>" onclick="bindingEmail()">
              </div>
          </div>
        </div>
        <script type="text/javascript">
    	//邮箱绑定
        function bindingEmail(){
        	var email=$('#email').val();
        	var email_code=$('#email_code').val();
        	var vertification = $("#captcha").val();
        	if(email==''){
        		$('#email').parent().children('.error').show();
        		return false;
        	}
        	$('#email').parent().children('.error').hide();
        	<?php if($login_verify_code['pc'] == 1): ?>
          	if(vertification == ''){
        			$("#captcha").trigger("focus");
        			$("#vertify").addClass("error").text("<?php echo lang('please_enter_verification_code'); ?>").show();
        			return false;
        		} 
          	$("#vertify").hide();
            <?php if($notice['noticeEmail'] != 1): ?>
              var result = '';
              $.ajax({
                type : "post",
                url : "<?php echo __URL('SHOP_MAIN/member/vertify'); ?>",
                data : {"vertification" : vertification},
                async : false,
                dataType:'json',
                success : function(res){
                  if(res['code']== 1){
                    result = true;
                  }else{
                    $("#vertify").addClass("error").text("<?php echo lang('member_verification_code_incorrect'); ?>").show();
                    result = false;
                  }
                  return result;
                }
              })
              if(!result){
                return false;
              }
              <?php endif; endif; ?>
        	if(email_code==''){
        		$('#email_code').parent().children('.error').show();
        		return false;
        	}
        	$('#email_code').parent().children('.error').hide()
        	
        	$.ajax({
                url: "<?php echo __URL('SHOP_MAIN/member/modifyemail'); ?>",
                data: { "email": email,'email_code':email_code },
                type: "post",
                success: function (res) {
                    if (res["code"]== 1) {
                    	$('#user_email #find-box').html('<div class="find_box_end"><p> <i></i> <?php echo lang('member_mailbox_binding_successful'); ?>！ </p><p class="on_go"> <a href="<?php echo __URL('SHOP_MAIN/member/usersecurity'); ?>" title="<?php echo lang('member_instant_shopping'); ?>" class="back"><?php echo lang('member_return_account_security_center'); ?>&gt;&gt;</a> </p></div>'); 
                        $('#user_email #sflex04 .normal').removeClass('doing');
                        $('#user_email #sflex04 .normal').removeClass('done');
                        $('#user_email #sflex04 .last').addClass('doing');
                    } else {
                    	 $.msg(res["message"]);
                    }
                }
            })
        }
     
        </script> 
      </div>

    </div>
  </div>
 <?php elseif($atc == 'user_pay_pwd'): ?> 
  <div class="user-right" id='user_pay_pwd'>
    <div class="box"> 
          <h5 title="<?php echo lang('member_set_payment_password'); ?>" class="user-title user-title-t"> <span><?php echo lang('member_set_payment_password'); ?></span> </h5>
          <div class="blank"></div>
    <div id="find_pw3">
      <div class="find_con">
       <div id="sflex04" class="stepflex stepflex_te">
            <dl class="normal doing">
              <dt class="s-num">1</dt>
              <dd class="s-text"> <?php echo lang('member_payment_password_settings'); ?> <s></s> <b></b> </dd>
            </dl>
            <dl class="last">
              <dt class="s-num">&nbsp;</dt>
              <dd class="s-text"><?php echo lang('member_complete'); ?> <s></s> <b></b> </dd>
            </dl>
        </div>
        <div id="find-box" class="uc_box">
            <div id="error_container"></div>
            <div class="item">
              <label class="con_un"><?php echo lang('member_payment_password'); ?>:</label>
              <input name="paymentPassword" id="paymentPassword" type="password" tabindex="1" placeholder="<?php echo lang('please_input_password'); ?>" class="text" />
              <span class="error"><?php echo lang('member_must_not_be_empty'); ?>!</span>
            </div>
            <div class="item">
              <label class="con_un"><?php echo lang('member_confirm_payment_password'); ?>:</label>
              <input name="againPaymentPassword" id="againPaymentPassword" type="password" tabindex="2" placeholder="<?php echo lang('member_confirm_password_again'); ?>" class="text" />
              <span class="error"><?php echo lang('member_must_not_be_empty'); ?>!</span>
              <span class="error"><?php echo lang('member_password_inconsistent'); ?>!</span>
            </div>
            
            <div class="item">
              <label class="con_un">&nbsp;</label>
              <input type="button" id="btn_submit" name="btn_submit" class="main-btn main-btn-large" value="<?php echo lang('member_submit'); ?>" onclick="setPayPwd()"/>
            </div>
        </div>
      </div>
     </div>
   </div> 
   </div>
   <script>
     function setPayPwd(){
      var paymentPassword = $("#paymentPassword").val();
      var againPaymentPassword = $("#againPaymentPassword").val();
      if(paymentPassword.length == 0){
        $("#paymentPassword").next(".error").show();
        return false;
      }else{
        $("#paymentPassword").next(".error").hide();
      }
      if(againPaymentPassword.length == 0){
        $("#againPaymentPassword").next(".error").show();
        return false;
      }else{
        $("#againPaymentPassword").next(".error").hide();
      }
      if(againPaymentPassword != paymentPassword){
        $("#againPaymentPassword").next().next(".error").show();
        return false;
      }else{
        $("#againPaymentPassword").next().next(".error").hide();
      }
      $.ajax({
        type :"post",
        url : "<?php echo __URL('SHOP_MAIN/member/setuserpaymentpassword'); ?>",
        data : {"payment_password" : paymentPassword},
        success : function(res){
         if (res['code']> 0) {
             $('#user_pay_pwd #find-box').html('<div class="find_box_end"><p> <i></i> <?php echo lang('member_password_settings_successful'); ?>！ </p><p class="on_go"> <a href="<?php echo __URL('SHOP_MAIN/member/usersecurity'); ?>" title="<?php echo lang('member_instant_shopping'); ?>" class="back"><?php echo lang('member_return_account_security_center'); ?>&gt;&gt;</a> </p></div>'); 
               $('#user_pay_pwd #sflex04 .normal').removeClass('doing');
               $('#user_pay_pwd #sflex04 .normal').removeClass('done');
               $('#user_pay_pwd #sflex04 .last').addClass('doing');
           } else {
               alert(res["message"]);
           }
        }
      })
     }
   </script>
  <?php elseif($atc == 'up_user_pay_pwd'): ?>
 <div class="user-right" id='up_user_pay_pwd'>
    <div class="box"> 
            <h5 title="<?php echo lang('member_change_payment_password'); ?>" class="user-title user-title-t"> <span><?php echo lang('member_change_payment_password'); ?></span> </h5>
            <div class="blank"></div>
      <div id="find_pw3">
        <div class="find_con">
         <div id="sflex04" class="stepflex stepflex_te">
              <dl class="normal doing">
                <dt class="s-num">1</dt>
                <dd class="s-text"> <?php echo lang('member_payment_password_modification'); ?> <s></s> <b></b> </dd>
              </dl>
              <dl class="last">
                <dt class="s-num">&nbsp;</dt>
                <dd class="s-text"> <?php echo lang('member_complete'); ?> <s></s> <b></b> </dd>
              </dl>
          </div>
          <div id="find-box" class="uc_box">
              <div id="error_container"></div>
              <div class="item">
                <label class="con_un"><?php echo lang('member_origina_password'); ?>:</label>
                <input name="old_paymentPassword" id="old_paymentPassword" type="password" tabindex="1" placeholder="<?php echo lang('member_enter_original_password'); ?>" class="text" />
                <span class="error"><?php echo lang('member_must_not_be_empty'); ?>!</span>
                <span class="error"><?php echo lang('member_original_password_incorrect'); ?>!</span>
              </div>

              <div class="item">
                <label class="con_un"><?php echo lang('member_new_password'); ?>:</label>
                <input name="new_paymentPassword" id="new_paymentPassword" type="password" tabindex="1" placeholder="<?php echo lang('please_input_password'); ?>" class="text" />
                <span class="error"><?php echo lang('member_must_not_be_empty'); ?>!</span>
              </div>
              <div class="item">
                <label class="con_un"><?php echo lang('member_confirm_password'); ?>:</label>
                <input name="new_again_paymentPassword" id="new_again_paymentPassword" type="password" tabindex="2" placeholder="<?php echo lang('member_confirm_password_again'); ?>" class="text" />
                <span class="error"><?php echo lang('member_must_not_be_empty'); ?>!</span>
                <span class="error"><?php echo lang('member_password_inconsistent'); ?>!</span>
              </div>
              
              <div class="item">
                <label class="con_un">&nbsp;</label>
                <input type="button" id="btn_submit" name="btn_submit" class="main-btn main-btn-large" value="<?php echo lang('member_submit'); ?>" onclick="modifyPayPwd()"/>
              </div>
          </div>
        </div>
       </div>
     </div> 
     <script type="text/javascript">
      function modifyPayPwd(){
        var old_paymentPassword = $("#old_paymentPassword").val();;
        var new_paymentPassword = $("#new_paymentPassword").val();
        var new_again_paymentPassword = $("#new_again_paymentPassword").val();
        $('#up_user_pay_pwd input[type="password"]').each(function(){
          if($(this).val()==''){
            $(this).next('.error').show();
            return false;
          }else{
            $(this).next('.error').hide();
          }
          if(new_again_paymentPassword != new_paymentPassword){
            $("#new_again_paymentPassword").next().next(".error").show();
            return false;
          }else{
            $("#new_again_paymentPassword").next().next(".error").hide();
          }       
        });
        $.ajax({
          type :"post",
          url : "<?php echo __URL('SHOP_MAIN/member/updateuserpaymentpassword'); ?>",
          data : {
            "old_payment_password" : old_paymentPassword,
            "new_payment_password" : new_paymentPassword
          },
          success : function(res){
            if(res['code'] == -1){
              $("#old_paymentPassword").next().next(".error").show();
            }
            if(res['code']>0){
              $("#old_paymentPassword").next().next(".error").hide();
              $('#up_user_pay_pwd #find-box').html('<div class="find_box_end"><p> <i></i> <?php echo lang('member_modified_successfully'); ?>！ </p><p class="on_go"> <a href="<?php echo __URL('SHOP_MAIN/member/usersecurity'); ?>" title="<?php echo lang('member_instant_shopping'); ?>" class="back"><?php echo lang('member_return_account_security_center'); ?>&gt;&gt;</a> </p></div>'); 
               $('#up_user_pay_pwd #sflex04 .normal').removeClass('doing');
               $('#up_user_pay_pwd #sflex04 .normal').removeClass('done');
               $('#up_user_pay_pwd #sflex04 .last').addClass('doing');
            }
          }
        })
      }
     </script>  
  </div>
 <?php endif; ?>
 <script>
 /**
  * 验证码发送
  */

 //倒计时函数
 function updateEndTime() {
 	var sendOutCode=$('#sendOutCode').val();
	if(sendOutCode!=undefined){
		sendOutCode=sendOutCode.replace('<?php echo lang('second'); ?>','');
		if(Number(sendOutCode)==0){
			$('#sendOutCode').val($('#sendOutCode').attr('bvalue'));
			$('#sendOutCode').removeAttr('disabled',true);
			return false;
		}else{
			$('#sendOutCode').val((Number(sendOutCode)-1)+"<?php echo lang('second'); ?>");	
		}
		setTimeout("updateEndTime()", 1000);
	}
 }
 //发送手机验证码
 $(function(){
 	$('#sendOutCode').click(function(){
    <?php if($login_verify_code['pc'] == 1): ?>
 		    var vertification = $("#captcha").val();
    <?php else: ?>
        var vertification = '';
    <?php endif; ?>
 		if($(this).attr('name')=='code_mobile'){
 			var mobile=$('#mobile').val();
 			if(mobile==''){
 				$('#mobile').parent().children('.error').text("<?php echo lang('member_phone_must_not_empty'); ?>").show();
 				return false;
 			}else{
 				$('#mobile').parent().children('.error').text('').hide();;
 			}
 			
 			//验证手机号格式是否正确
 			if(mobile.search(/^1(3|4|5|7|8)\d{9}$/) == -1){
 				$('#mobile').parent().children('.error').text("<?php echo lang('member_enter_correct_phone_format'); ?>").show();
 				return false;
 			}else{
 				$('#mobile').parent().children('.error').text('').hide();;
 			}
 			
 			$.ajax({
 		         url: __URL(SHOPMAIN+"/components/mobileverificationcode"),
 		         data: {"mobile": mobile,"vertification":vertification },
 		         type: "post",
 		         success: function (res) {
 		        	// alert(JSON.stringify(res));
 		        	if(res['code']==0){
 		        		$('#sendOutCode').val(120);
 		        		$('#sendOutCode').attr('disabled',true);
 		        		updateEndTime();
 		        	}else{
 		        		$.msg(res['message']);
 		        		$(".verifyimg").attr("src","<?php echo __URL('SHOP_MAIN/captcha'); ?>");
 		        	}
 		           
 		         }
 		     })

 		}else if($(this).attr('name')=='code_email'){		     //邮箱验证
 			var email = $('#email').val();
 			if(email == ''){
 				$('#email').parent().children('.error').text("<?php echo lang('member_email_must_not_empty'); ?>").show();;
 				return false;
 			}else{
 				$('#email').parent().children('.error').text('').hide();;
 			}
 			
 			//验证邮箱格式是否正确
 			if(email.search(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/) == -1){
 				$('#email').parent().children('.error').text("<?php echo lang('member_enter_correct_email_format'); ?>").show();
 				return false;
 			}else{
 				$('#email').parent().children('.error').text('').hide();;
 			}
 			
 			
 			 $.ajax({
 		         url:  __URL(SHOPMAIN+"/components/emailverificationcode"),
 		         data: {"email": email,"vertification":vertification  },
 		         type: "post",
 		         success: function (res) {
 		        	//alert(JSON.stringify(res));
 		        	if(res['code']==0){
 		        		$('#sendOutCode').val("120<?php echo lang('second'); ?>");
 		        		$('#sendOutCode').attr('disabled',true);
 		        		updateEndTime();
 		        	}else{
 		        		$.msg(res['message']);
 		        		$(".verifyimg").attr("src","<?php echo __URL('SHOP_MAIN/captcha'); ?>");
 		        	}
 		           
 		         }
 		     })
 		}
 		
 	})
 })

 
 
 </script>
<!-- <script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/verification_code.js"></script>  -->

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

<!-- 添加js文件 -->

</body>
</html>