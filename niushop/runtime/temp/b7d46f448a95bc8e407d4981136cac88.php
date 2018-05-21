<?php if (!defined('THINK_PATH')) exit(); /*a:15:{s:44:"template/shop\default\Shop\shopGoodList.html";i:1513303782;s:36:"template/shop\default\Shop\base.html";i:1513303782;s:31:"template/shop\default\base.html";i:1513303782;s:35:"template/shop\default\urlModel.html";i:1513303782;s:37:"template/shop\default\controlTop.html";i:1513303782;s:49:"template/shop\default\Shop\controlHeadSerach.html";i:1513303782;s:47:"template/shop\default\Shop\controlHeadMenu.html";i:1513303782;s:46:"template/shop\default\controlRightSidebar.html";i:1513303782;s:59:"template/shop\default\Goods\controlStoreClassification.html";i:1513303782;s:51:"template/shop\default\Shop\controlShopGoodList.html";i:1513303782;s:59:"template/shop\blue\Goods\controlPopUpGoodsSkuAttribute.html";i:1513303781;s:48:"template/shop\default\controlBottomLinkHelp.html";i:1513303782;s:40:"template/shop\default\controlBottom.html";i:1513303782;s:39:"template/shop\default\controlLogin.html";i:1513303782;s:40:"template/shop\default\baidu_js_push.html";i:1513303782;}*/ ?>
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

<!-- 添加css、字体文件文件 -->


<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/ns_shop_common.css">

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

<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/shop_index.css">
<script type="text/javascript"src="__TEMP__/<?php echo $style; ?>/public/js/shop_index.js"></script>
<script type="text/javascript"src="__TEMP__/<?php echo $style; ?>/public/js/base.js"></script>
	<input type="hidden" id='shop_id' name="shop_id" value="<?php echo $shop_id; ?>"/>


<div class="header">
	<div class="w1210 clearfix">
		<div class="logo-info">
			<?php if($web_info['logo'] != ''): ?>
				<a href="<?php echo __URL('SHOP_MAIN'); ?>" class="logo"><img src="__UPLOAD__/<?php echo $web_info['logo']; ?>" /></a>
			<?php endif; ?>
		</div>
		<div class="shop-info">
			<div class="shop">
				<div class="shop-name ">
					<a href="<?php echo __URL('SHOP_MAIN/shop/shopindex?shop_id='.$shop_id); ?>" title="<?php echo $shop_info['shop_name']; ?>"><?php echo $shop_info['shop_name']; ?></a>
				</div>
			
				

			</div>
			<div class="shop-main">
				
				<div class="shop-score-box">
					<div class="shop-score-item">
						<div class="shop-score-title">描 述</div>
						<div class="score color">
							<span><?php echo $shop_info['shop_desccredit']; ?></span>
						</div>
					</div>
					<div class="shop-score-item">
						<div class="shop-score-title">服 务</div>
						<div class="score color">
							<span><?php echo $shop_info['shop_servicecredit']; ?></span>
						</div>
					</div>
					<div class="shop-score-item">
						<div class="shop-score-title">发 货</div>
						<div class="score color">
							<span><?php echo $shop_info['shop_deliverycredit']; ?></span>
						</div>
					</div>
				</div>
				
			</div>
			<a class="slogo-triangle">
				<i class="icon-triangle"></i>
			</a>
			<div class="extra-info">
				<div class="hd">
					<p class="shop-collect">
						<a href="<?php echo __URL('SHOP_MAIN/shop/shopindex?shop_id='.$shop_id); ?>" title="<?php echo $shop_info['shop_name']; ?>" class="shop-logo">
							<?php if($shop_info['shop_logo'] == '' or $shop_info['shop_logo'] == null): ?>
							<img src="__TEMP__/<?php echo $style; ?>/public/images/default/default_shop_logo.png">
							<?php else: ?>
								<img src="__UPLOAD__/<?php echo $shop_info['shop_logo']; ?>">
							<?php endif; ?>
							
						</a>
						<?php if($is_favorites == 0): ?>
							<a href="javascript:" onclick="collectionShopOperation(<?php echo $shop_id; ?>,'shop','',this);"  class="collect-btn bg-color">加入收藏</a>
						<?php elseif($is_favorites == -1): ?>
							<a href="<?php echo __URL('SHOP_MAIN/login/index'); ?>" class="collect-btn bg-color">加入收藏</a>
						<?php else: ?>
							<a href="javascript:;" onclick="collectionShopOperation(<?php echo $shop_id; ?>,'shop','',this)"  class="collect-btn bg-color">取消收藏</a>
						<?php endif; ?>
						
					</p>
					<p class="collect-count">
						<em id="collect-count"><?php echo $shop_info['shop_collect']; ?></em>
					</p>
					<p class="collect-tip">已收藏</p>
				</div>
				<div class="bd">
					
					<div class="shop-rate">
						<h4>店铺动态评分</h4>
						<ul>
							<li>
								描述相符：
								<a target="_blank" href="javascript:void(0);">
									<em class="count color" title=""><?php echo $shop_info['shop_desccredit']; ?></em>
								</a>
							</li>
							<li>
								服务态度：
								<a target="_blank" href="javascript:void(0);">
									<em class="count color" title=""><?php echo $shop_info['shop_servicecredit']; ?></em>
								</a>
							</li>
							<li>
								发货速度：
								<a target="_blank" href="javascript:void(0);">
									<em class="count color" title=""><?php echo $shop_info['shop_deliverycredit']; ?></em>
								</a>
							</li>
						</ul>
					</div>
					
					<div class="extend ">
						<h4 class="extend-title">店铺服务</h4>
						<ul>
							<li>
								<label>店铺掌柜：</label>
								<div class="extend-right">
									<a href="/shop/1.html" class="color"><?php echo $shop_info['shop_name']; ?>店长</a>
								</div>
							</li>
							
							<li>
								<label>店铺客服：</label>
								<div class="extend-right">
									<span class="tool">
										
										<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $shop_info['shop_qq']; ?>&site=qq&menu=yes" class="service-btn">
											<img border="0" src="__TEMP__/<?php echo $style; ?>/public/images/customer_qq.gif" alt="点这里给我发消息">
										</a>
										
									</span>
								</div>
							</li>
							<li class="locus">
								<label>所在地：</label>
								<div class="extend-right">
									<span><?php echo $shop_info['live_store_address']; ?></span>
								</div>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="search">
			<form class="search-form" method="get" name="" id="search-form" action="" onsubmit="">
				<input type="hidden" name="type" id="searchtype" value="">
				<div class="search-info">
					<div class="search-box">
						<div class="search-box-con">
							<input class="search-box-input" name="keyword" id="keyword" tabindex="9" autocomplete="off" value="<?php echo $keyword; ?>" onfocus="if( this.value=='请输入关键词'){ this.value=''; }else{ this.value=this.value; }" onblur="if(this.value=='')this.value='请输入关键词'" type="text">
						</div>
					</div>
					<input type="button" onclick="search_all()" value="搜全站" class="button bg-color">
				</div>
				<input type="button" onclick="search_me()" value="搜本店" class="button button-spe">
			</form>
			<ul class="hot-query">
				<!-- 默认搜索词 -->
				
				<li class="first">
					<a href="" title=""></a>
				</li>
				
			</ul>
		</div>
	</div>

<script type="text/javascript">
//全站搜索
function search_all(){
	var keyword=$('#keyword').val();
	location.href=__URL("SHOP_MAIN/goods/goodslist?keyword="+keyword);
}
//本店搜索
function search_me(){
	var keyword=$('#keyword').val();
	location.href=__URL("SHOP_MAIN/shop/shopgoodlist?shop_id=<?php echo $shop_id; ?>&goods_group_id=0&keyword="+keyword);
}
//收藏店铺操作
function collectionShopOperation(fav_id,fav_type,log_msg,even){
	var evtext=$(even).text();
	var ajaxUrl="<?php echo __URL('SHOP_MAIN/components/collectiongoodsorshop'); ?>";
	var updateText="取消收藏";
	if(evtext==updateText){
		ajaxUrl="<?php echo __URL('SHOP_MAIN/components/cancelcollgoodsorshop'); ?>";
		updateText="加入收藏";
		$('#collect-count').text(Number($('#collect-count').text())-1);
	}else{
		$('#collect-count').text(Number($('#collect-count').text())+1);
	}
	$.ajax({
		type:"post",
		url:ajaxUrl,
		async:true,
		data:{'fav_id':fav_id,
			  'fav_type':fav_type,
			  'log_msg':log_msg
		},
		success:function(res){
			if(res['code']>0){	
				$.msg(evtext+'成功！');
				$(even).text(updateText);
			}else{
				$.msg(evtext+'失败！');
			}
			
		}
	});
}

</script>
</div>
	


<!--头部商品分类 start-->

	<!--功能：店铺头部菜单-->
<!--创建人：李志伟-->
<!--时间：2017年2月7日16:51:22-->

<div class="layout">
	
	<div class="shop-header-banner">
		<?php if($shop_banner == ''): else: ?>
			<img src="__UPLOAD__/<?php echo $shop_banner; ?>" style="width:100%;">
		<?php endif; ?>
	</div>
	
	<div class="shop-menu">
		<ul>
			<?php if($goods_group_id == ''): ?>	
			<li class="select"><a href="<?php echo __URL('SHOP_MAIN/shop/shopindex?shop_id='.$shop_id); ?>" target="">首页</a></li>
			<?php else: ?>
			<li><a href="<?php echo __URL('SHOP_MAIN/shop/shopindex?shop_id='.$shop_id); ?>" target="">首页</a></li>
			<?php endif; if($goods_group_id == '0'): ?>
				<li class="all-category select">
			<?php else: ?>
				<li class="all-category">
			<?php endif; ?>
				<a href="<?php echo __URL('SHOP_MAIN/shop/shopgoodlist?shop_id='.$shop_id.'&goods_group_id=0'); ?>" target="">
					全部分类
					<span class="arrow"></span>
				</a>
				<div class="all-category-coupon" style="display: none;">

					<!-- 获取店铺内商品分类 -->
					
					
							<div style="width:100%;overflow:hidden;text-align: -webkit-left;margin-left: 50px;margin-left:50px;"><a href="SHOP_MAIN/shop/shopgoodlist?shop_id=<?php echo $shop_id; ?>&goods_group_id=0" target="_blank">全部 &gt;</a></div>
						
				

					<?php foreach($goods_group_list as $vo): ?> 
						<dl>
							<dt>
								<a href="<?php echo __URL('SHOP_MAIN/shop/shopgoodlist?shop_id='.$shop_id.'&goods_group_id='.$vo['group_id']); ?>" target="_blank"><?php echo $vo['group_name']; ?></a>
							</dt>
							<dd>
								<ul>
								<?php if(is_array($vo['child_list']) || $vo['child_list'] instanceof \think\Collection || $vo['child_list'] instanceof \think\Paginator): if( count($vo['child_list'])==0 ) : echo "" ;else: foreach($vo['child_list'] as $k1=>$v1): ?>
			
									<li>
										<a href="<?php echo __URL('SHOP_MAIN/shop/shopgoodlist?shop_id='.$shop_id.'&goods_group_id='.$v1['group_id']); ?>" target="_blank"><?php echo $v1['group_name']; ?></a>
									</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</dd>
						</dl>
					<?php endforeach; ?>
				

				</div>
			</li>
			<!-- 获取店铺导航 -->
				<?php if(is_array($goods_group_list) || $goods_group_list instanceof \think\Collection || $goods_group_list instanceof \think\Paginator): $k = 0; $__LIST__ = $goods_group_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k < 13): if($goods_group_id == $vo['group_id']): ?>
					 	<li class="select"> <a href="<?php echo __URL('SHOP_MAIN/shop/shopgoodlist?shop_id='.$shop_id.'&goods_group_id='.$vo['group_id']); ?>" target="_parent"><?php echo $vo['group_name']; ?></a></li>
					 <?php else: ?>
					 	<li> <a href="<?php echo __URL('SHOP_MAIN/shop/shopgoodlist?shop_id='.$shop_id.'&goods_group_id='.$vo['group_id']); ?>" target="_parent"><?php echo $vo['group_name']; ?></a></li>
					 <?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
			
			
		</ul>
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

	<div class="condition-screen w1210">
		<div class="blank15"></div>
		<div class="content-wrap category-wrap clearfix">
			<!--
	创建人：王永杰
	创建时间：2017年2月7日 12:16:17
	功能描述： 店內商品分类 
-->
<!--提出来的  店内分类 -->
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/goods.css">
<div class="store-category">
	<h3 class="left-title">店内分类</h3>
	<div class="left-content tree">
		<ul>
		<?php if(is_array($goods_group_list) || $goods_group_list instanceof \think\Collection || $goods_group_list instanceof \think\Paginator): if( count($goods_group_list)==0 ) : echo "" ;else: foreach($goods_group_list as $k=>$v): ?>
			<li class="parent_li">
				<span><i class="icon-plus-sign"></i></span>
				<a href="SHOP_MAIN/shop/shopgoodlist?shop_id=<?php echo $shop_id; ?>&goods_group_id=<?php echo $v['group_id']; ?>" target="_self" title="<?php echo $v['group_name']; ?>" class="tree-first" name="<?php echo $v['group_id']; ?>"><?php echo $v['group_name']; ?></a>
				<ul>
				<?php if(is_array($v['child_list']) || $v['child_list'] instanceof \think\Collection || $v['child_list'] instanceof \think\Paginator): if( count($v['child_list'])==0 ) : echo "" ;else: foreach($v['child_list'] as $k1=>$v1): ?>
					<li style="display: none;" > <span><i class="arrow"></i></span>  <a href="SHOP_MAIN/shop/shopgoodlist?shop_id=<?php echo $shop_id; ?>&goods_group_id=<?php echo $v1['group_id']; ?>" target="_self" title="<?php echo $v1['group_name']; ?>" name="<?php echo $v1['group_id']; ?>"><?php echo $v1['group_name']; ?></a></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/tabs.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/goods.js"></script>
			<div class="main fr">
	<div class="" id="filter" style="">
		<!--排序-->
		<form method="GET" name="listform" action="<?php echo __URL('SHOP_MAIN/shop/shopgoodlist'); ?>">
			<div class="fore1">
				<dl class="order">
					<?php if(is_array($screen_list_two) || $screen_list_two instanceof \think\Collection || $screen_list_two instanceof \think\Paginator): $k = 0; $__LIST__ = $screen_list_two;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k == 1): if($order_type  == ''): ?>
								<dd class="first curr">
							<?php else: ?>
								<dd class="first">
							<?php endif; ?>
								<a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'?'.$condition_url); ?>"> 综合 </a>
							</dd>
						<?php else: if($order_type == $vo['order_type']): ?>
								<dd class="curr">
								<?php if($sort == 'desc'): ?>
									<a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'?'.$condition_url.'&order_type='.$vo['order_type'].'&sort=asc'); ?>"> <?php echo $vo['order_name']; ?>
									<b class="icon-order-DESCending"></b></a>
								<?php else: ?>
									<a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'?'.$condition_url.'&order_type='.$vo['order_type'].'&sort=DESC'); ?>"> <?php echo $vo['order_name']; ?>
									<b class="icon-order-ASCending"></b></a>
								<?php endif; else: ?>
								<dd class="">
								<a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'?'.$condition_url.'&order_type='.$vo['order_type'].'&sort=DESC'); ?>"> <?php echo $vo['order_name']; ?> <b class="icon-order-DESCending"></b> </a>
							<?php endif; endif; ?>
						</dd>
						
					<?php endforeach; endif; else: echo "" ;endif; ?>

				</dl>
				<div class="pagin">&nbsp;&nbsp;&nbsp;</div>
				<div class="total">
					共 <span class="color"><?php echo count($good_list); ?></span> 个商品
				</div>
			</div>
			<div class="fore2">
				<div class="filter-btn">

					<?php if($is_shipping_fee == 1): ?>
					<a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'&order_type='.$order_type.'&sort='.$sort); ?>" class="filter-tag curr">
					<?php else: ?>
					<a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'&order_type='.$order_type.'&sort='.$sort.'&is_shipping_fee=1'); ?>" class="filter-tag">
					<?php endif; ?>
					
						<input class="none" name="fff" onclick="" type="checkbox">
						<i class="icon"></i> <span class="text">包邮</span>
					</a>
					<?php if($is_stock == 1): ?>
					<a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'&order_type='.$order_type.'&sort='.$sort); ?>" class="filter-tag curr">
					<?php else: ?>
					<a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'&order_type='.$order_type.'&sort='.$sort.'is_stock=1'); ?>" class="filter-tag">
					<?php endif; ?>
						<input class="none" name="fff" onclick="" type="checkbox">
						<i class="icon"></i> <span class="text">仅显示有货</span>
					</a>
 
				</div>
			</div>
		</form>
	</div>

	<!--主体商品内容展示-->
	<form name="compareForm" action="compare.php" method="post" onsubmit="">
		<ul class="list-grid clearfix">
			<!-- 一行显示四个如果是四的倍数就样式价格last 及 item last-->
			<?php if(is_array($good_list) || $good_list instanceof \think\Collection || $good_list instanceof \think\Paginator): $k = 0; $__LIST__ = $good_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k%4 == 0): ?>
			<li class="item last">
			<?php else: ?>
				<li class="item">
			<?php endif; ?>
				<div class="item-con">
					<!--售罄-->
					<div class="item-pic">
						<a href="<?php echo __URL('SHOP_MAIN/goods/goodsInfo?goodsid='.$vo['goods_id']); ?>"
							title="<?php echo $vo['goods_name']; ?>" target="_blank"> <img
							src="__UPLOAD__/<?php echo $vo['pic_cover_mid']; ?>" alt="">
						</a>
					</div>
					<div class="item-info">
						<div class="item-price">
							<em class="sale-price color"><?php echo $vo['promotion_price']; ?></em> <em
								class="sale-count">已售<?php echo $vo['sales']; ?></em>
						</div>
						<div class="item-name">
							<!-- 注意商品名称长度，需考虑包邮、赠品标签 -->
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodsInfo?goodsid='.$vo['goods_id']); ?>"
								target="_blank" title="<?php echo $vo['goods_name']; ?>"><?php echo $vo['goods_name']; ?></a>
							<!-- 包邮、赠品标签  _star -->
							<?php if($vo['shipping_fee'] == 0): ?>
								 <i class="free-shipping">包邮</i>
							<?php endif; ?>
							<!-- 包邮、赠品标签  _end -->
						</div>
						<div class="item-con-info">
							<div class="fl">
								<div class="item-operate">
									 <a href="javascript:;" class="operate-btn collet-btn" onclick="collectionGoods(<?php echo $vo['goods_id']; ?>,'goods','<?php echo $vo['goods_name']; ?>',this,false)">
									 	<i <?php if($vo['is_favorite']>0): ?>style="background-position:-107px -11px;"<?php endif; ?> data-log-id="<?php echo $vo['is_favorite']; ?>"></i>
										<span> <?php if($vo['is_favorite']>0): ?>已收藏
					 							<?php else: ?>收藏<?php endif; ?>
					 					</span>
					 				</a>
									<a href="javascript:;" class="operate-btn comment-btn"> <i></i> <?php echo $vo['evaluates']; ?>
									</a>
								</div>
							</div>
							<div class="fr">
								<div class="item-add-cart">
									<!--售罄时，为加入购物车按钮添加sell-out-btn样式-->
									<a href="javascript:ShowGoodsAttribute(<?php echo $vo['goods_id']; ?>,'<?php echo $vo['goods_name']; ?>',<?php echo $vo['pic_id']; ?>,this);" class="add-cart" title="加入购物车"></a>
									<?php if(is_array($vo['sku_list']) || $vo['sku_list'] instanceof \think\Collection || $vo['sku_list'] instanceof \think\Paginator): if( count($vo['sku_list'])==0 ) : echo "" ;else: foreach($vo['sku_list'] as $key=>$pro_skus): ?>
									<input type="hidden" name="goods_sku<?php echo $vo['goods_id']; ?>" value="<?php echo $pro_skus['attr_value_items']; ?>;" stock="<?php echo $pro_skus['stock']; ?>" <?php if($vo['promotion_info'] != ''): ?> price="<?php echo $pro_skus['promote_price']; ?>" <?php else: ?> price="<?php echo $pro_skus['price']; ?>"<?php endif; ?> skuid="<?php echo $pro_skus['sku_id']; ?>" skuname="<?php echo $pro_skus['sku_name']; ?>">
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			 <?php endforeach; endif; else: echo "" ;endif; ?>

		</ul>
		<!--当没有数据时，显示如下div-->

		<script src="__TEMP__/<?php echo $style; ?>/public/js/goods/popupGoodsSkuAttribute.js" type="text/javascript"></script>
<style>
#mask{display: none; position: fixed; z-index: 9999; width: 1903px; height: 1097px; top: 0px; left: 0px; opacity: 0.15; background: rgb(0, 0, 0);}
</style>
<div id="speDiv" style="display: none;">
	<div class="pop-header">
		<span><?php echo lang('goods_select_commodity_attribute'); ?></span> <a href="javascript:closeBuy()" title="<?php echo lang('goods_close'); ?>" class="spe-close"></a>
	</div>
	<div class="attr-list js-sku-list" style="margin: 0;"><!-- ajax 加载sku属性--></div>
	<div class="spe-btn">
		<a href="javascript:addToCart()" class="sure-btn"><?php echo lang('goods_add_cart'); ?></a>
		<a href="javascript:closeBuy()" class="cancel-btn"><?php echo lang('goods_cancel'); ?></a>
	</div>
	<input type="hidden" id="hidden_goodsid" />
	<input type="hidden" id="hidden_goods_name" />
	<input type="hidden" id="hidden_skuid" />
	<input type="hidden" id="hidden_skuname" />
	<input type="hidden" id="hidden_sku_price" />
	<input type="hidden" id="hidden_default_img_id" />
	<input type="hidden" id="hidden_max_buy" />
</div>
<div id="mask"></div>
		<!--分页-->
		<input type="hidden" name="shop_id" id="shop_id" value="<?php echo $shop_id; ?>" />
		</script>
	</form>

</div>
		</div>
		
	</div>



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




<!-- 添加js文件 -->
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_index.js"></script>	
<script type="text/javascript">
$(function(){
	var goods_group_id='<?php echo $goods_group_id; ?>';
	var even=$(".parent_li a[name=\'"+goods_group_id+"\']");
	even.addClass('current');
	even.parents('.parent_li').children('span').trigger('click');
})
</script>


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