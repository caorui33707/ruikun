<?php if (!defined('THINK_PATH')) exit(); /*a:11:{s:49:"template/shop\default\Member\reviewCommodity.html";i:1513303782;s:38:"template/shop\default\Member\base.html";i:1513303782;s:35:"template/shop\default\urlModel.html";i:1513303782;s:37:"template/shop\default\controlTop.html";i:1513303782;s:44:"template/shop\default\controlHeadSerach.html";i:1513303782;s:47:"template/shop\default\controlHeadSearchAdv.html";i:1513303782;s:46:"template/shop\default\controlHeadGoodType.html";i:1513303782;s:43:"template/shop\default\controlCommonNav.html";i:1513303782;s:49:"template/shop\default\Member\controlLeftMenu.html";i:1513303782;s:48:"template/shop\default\controlBottomLinkHelp.html";i:1513303782;s:40:"template/shop\default\controlBottom.html";i:1513303782;}*/ ?>
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

<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/reviewCommodity.css">

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
  <div class="evaluate_main">
    <div class="title"><a href="javascript:history.go(-1);" class="ncbtn-mini fr"><i class="icon-reply"></i><?php echo lang('back'); ?></a>
      <h3><?php echo lang('member_evaluation_purchased_goods'); ?></h3>
    </div>
    <form id="evalform" method="post" action="<?php echo __URL('SHOP_MAIN/member/moditycommodity'); ?>">
      <input type="hidden" name="form_submit" value="ok" />
      <div class="evaluate_block">
        <h4><?php echo lang('member_operation_prompt'); ?>：</h4>
        <ul>
          <li style="margin-bottom: 6px; float:none;"><?php echo lang('member_evaluation_information'); ?>。</li>
          <li style="margin-bottom: 6px; float:none;"><?php echo lang('grade_business'); ?>，<span class="orange"> <?php echo lang('member_cannot_be_modified'); ?>。</span></li>
<!--           <li style="margin-bottom: 6px; float:none;">图片上传请使用jpg\jpeg\png等格式、单张大小不超过1M的图片，最多可发布5张晒图，上传后的图片也将被保存在个人主页相册中以便其它使用。</li> -->
        </ul>
      </div>
      <div class="tabmenu2">
        <ul class="tab" style="border-bottom: solid 1px #E7E7E7;">
          <li class="active" style="float:none"><a href="javascript:void(0);" style="font-size:16px; font-weight: 600; text-decoration: none; color: #E60012; padding: 7px 19px 9px 19px;border-bottom: solid 2px #E60012; cursor: default;"><?php echo lang('member_evaluation_purchased_goods'); ?></a></li>
        </ul>
      </div>
      <input type="hidden" id="order_id" value="<?php echo $order_id; ?>">
      <input type="hidden" id="order_no" value="<?php echo $order_no; ?>">
      <?php foreach($list as $vo): ?>
      <div class="evaluate" ogid="<?php echo $vo['order_goods_id']; ?>" oid="<?php echo $vo['order_id']; ?>">
      		<div class="evaluate_left">
      			<div class="evaluate_left_top">
      				<img src="<?php echo __IMG($vo['picture_info']['pic_cover_small']); ?>">
      			</div>
      			<div class="evaluate_left_bottom">
      				<div class="evaluate_left_bottom_main">
      					<a href="javascript:void(0);"><?php echo $vo['goods_name']; ?></a>
      				</div>
      			</div>
      		</div>
      		<div class="evaluate_right">
      			<!-- <div class="item-rate-act">
      				<ul>
      				 	<li class="good">
	      				 	<label for="rate_good<?php echo $vo['order_goods_id']; ?>">
	      				 		<input type="radio" class="good-rate" id="rate_good<?php echo $vo['order_goods_id']; ?>" name="rate<?php echo $vo['order_goods_id']; ?>" value="1">
	      				 		<i class="tb-rate-ico ico-good" title="好评"></i>
	      				 	</label>
      				 	</li>
      				 	<li class="normal">
      				 		<label for="rate_normal<?php echo $vo['order_goods_id']; ?>">
	      				 		<input type="radio" class="normal-rate" id="rate_normal<?php echo $vo['order_goods_id']; ?>" name="rate<?php echo $vo['order_goods_id']; ?>" value="2">
	      				 		<i class="tb-rate-ico ico-neutral" title="中评"></i>
	      				 	</label>
      				 	</li>
      				 	<li class="bad">
      				 		<label for="rate_bad<?php echo $vo['order_goods_id']; ?>">
	      				 		<input type="radio" class="bad-rate" id="rate_bad<?php echo $vo['order_goods_id']; ?>" name="rate<?php echo $vo['order_goods_id']; ?>" value="3">
	      				 		<i class="tb-rate-ico ico-bad" title="差评"></i>
	      				 	</label>
      				 	</li>
      				</ul>
      			</div> -->
      			<div>
      				<div class="evaluate_right_one star"><?php echo lang('member_commodity_score'); ?>：
						<a href="javascript:void(0)" val="1" sel="red"><img src="__TEMP__/<?php echo $style; ?>/public/images/star_red.png"/></a>  
        				<a href="javascript:void(0)" val="2" sel="red"><img src="__TEMP__/<?php echo $style; ?>/public/images/star_red.png"/></a>  
        				<a href="javascript:void(0)" val="3" sel="red"><img src="__TEMP__/<?php echo $style; ?>/public/images/star_red.png"/></a>  
        				<a href="javascript:void(0)" val="4" sel="red"><img src="__TEMP__/<?php echo $style; ?>/public/images/star_red.png"/></a>  
        				<a href="javascript:void(0)" val="5" sel="red"><img src="__TEMP__/<?php echo $style; ?>/public/images/star_red.png"/></a> 
            		</div>
      			</div>
      			
      			<div class="rate_content">
      				<textarea name="" cols="60" rows="4"   placeholder="<?php echo lang('member_content_evaluated'); ?>。" style="resize: none;"></textarea>
      				<span class="evaluate_right_two"> 
      				<input type='file' class="input-file" name='file_upload' id="img_<?php echo $vo['order_goods_id']; ?>" onchange='UploadImage(this);' />
      				</span >
      				<span class="evaluate_right_three"><i></i><?php echo lang('member_buyers_slide_show'); ?></span>
      				<span class="evaluate_right_imgs">
      				</span>
      				<span class="evaluate_right_four">0/5</span>
     				<span class="evaluate_right_isni"><label> <input type="checkbox" id="checkbox<?php echo $vo['order_goods_id']; ?>" class="checkbox vm">&nbsp;<?php echo lang('member_anonymous_evaluation'); ?></label></span>
      			</div>
      		</div>
      </div>
      <?php endforeach; ?>
            <div class="evaluate_form">
                <div class="evaluate_bottom">
            		<input id="btn_submit" type="button" class="submit" onclick="doSubmit(1)" value="<?php echo lang('member_submit'); ?>"/>
       			 </div>
      		</div>
    </form>
    <input type="hidden" id="isSub" value="true">
  </div>
  
  <input type="hidden" id="style" name="style" value="<?php echo $style; ?>" />
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

<!-- 添加js文件 -->
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/review.js"></script>
<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script>
$(function(){
  
  $("li[data-href^='<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>'").addClass('current');
  $(".js-bread-crumb").attr("href",'<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>');
  $(".js-bread-crumb").text("<?php echo lang('member_my_order'); ?>");
  $(".js-bread-crumb").parent().append('<span class="crumbs-arrow">&gt;</span><a href="<?php echo __URL('SHOP_MAIN/member/reviewCommodity','orderid='.$order_id); ?>"><?php echo lang('goods_commodity_evaluation'); ?></a>');
});
</script>

</body>
</html>