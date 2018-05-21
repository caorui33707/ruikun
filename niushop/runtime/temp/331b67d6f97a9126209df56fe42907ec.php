<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:41:"template/wap\default\Goods\goodsList.html";i:1513303782;s:30:"template/wap\default\base.html";i:1513303782;s:34:"template/wap\default\urlModel.html";i:1513303783;s:45:"template/wap\default\Index\controlSearch.html";i:1513303782;s:55:"template/wap\default\Goods\goodsCategoryConditions.html";i:1513303782;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/common.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/category.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/group_goods_list.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.cookie.js" type="text/javascript"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/new_goods_list.js" type="text/javascript"></script>
<style>
.openList li dd {width: 90%;}
.openList li dl dt {font-size: 14px;width: 90%;height: 20px;overflow: hidden;}
.openList .goods-sales {font-size: 12px;}
.openList li dd i {font-size: 14px;}
.custom-search{width:90%;margin-left:20px;}
.custom-search .custom-search-input{width:97%;}
.custom-search-button{top:6px;}
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
	<a class="head_back" id="head_back"href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
	<div class="head-title"><script src="__TEMP__/<?php echo $style; ?>/public/js/public_assembly.js"></script>
<style>
/* .custom-search {width: 90%;margin-left: 20px;} */
/* .custom-search .custom-search-input{width:97%;} */
</style>
<div class="editing">
	<div class="control-group">
		<div class="custom-search" >
			<input type="text" class="custom-search-input" placeholder="<?php echo lang('search_goods'); ?>" style="background:#f4f4f4;border:none;border-radius:0;padding-right:10%;">
			<button type="button" class="custom-search-button"><?php echo lang('search'); ?></button>
			<input type="hidden" value="<?php echo $shop_id; ?>" id="hidden_shop_id"/>
		</div>
		<div class="component-border"></div>
	</div>
	<div class="sort">
		<i class="sort-handler"></i>
	</div>
</div></div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
<div id="index_content">
<!--列表页内容start-->
<section class="category-content-section">
	<section class="filtrate-term ">
		<ul>
			<li class="drop_down data-category"><a href="javascript:;" class="">分类<i class="fa fa-angle-down fa-lg" aria-hidden="true"></i></a></li>
			<li class="drop_down data-ordrt-sort"><a href="javascript:;">排序<i class="fa fa-angle-down fa-lg" aria-hidden="true"></i></a></li>
			<li class="data-screen"><a href="javascript:;">筛选<i class="fa fa-angle-down fa-lg" aria-hidden="true"></i></a></li>
			<!--  <i class="fa fa-list-ul fa-lg" aria-hidden="true"></i>-->
			<li class="data-display-mode"><a href="javascript:;"><i class="fa fa-th-large fa-lg" aria-hidden="true"></i></a></li>			
		</ul>
	</section>
	<!-- 商品列表 -->
	<div class="goods-list-grid openList">
		<div class="blank-div"></div>
		<div id="goods_list">
			<div class="tablelist-append clearfix"></div>
		</div>
	</div>
	<!-- 筛选条件 -->
	<!-- 筛选条件 -->
<div class="shade-div"></div>
<div class="screening_condition">
	<div class="head-title">
		<div class="mui-title">筛选</div>
	</div>
	<ul class="conditions">
		<!-- 品牌筛选 -->
		<?php if($category_count>0  && count($category_brands) > 0): ?>
		<li>
			<?php if(count($category_brands) > 2): ?>
			<div class="condition_name click-down" is_open = "0"><span>品牌</span><i class="fa fa-angle-down fa-lg" aria-hidden="true"></i></div>
			<?php else: ?>
			<div class="condition_name" is_open = "0"><span>品牌</span></div>
			<?php endif; ?>
			<div class="condition_value"  data-screen-type="brand">
				<a href="javascript:;" class="selected all">全部<img src="__TEMP__/<?php echo $style; ?>/public/images/pro_span4.png" alt=""></a>
				<?php if(is_array($category_brands) || $category_brands instanceof \think\Collection || $category_brands instanceof \think\Paginator): if( count($category_brands)==0 ) : echo "" ;else: foreach($category_brands as $k=>$brand): ?>
				<a href="javascript:;" data-brand-id="<?php echo $brand['brand_id']; ?>"><?php echo $brand['brand_name']; ?><img src="__TEMP__/<?php echo $style; ?>/public/images/pro_span4.png" alt=""></a>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</li>
		<?php endif; ?>
		<!-- 属性筛选 -->
		<?php if(count($attr_or_spec) > 0): if(is_array($attr_or_spec) || $attr_or_spec instanceof \think\Collection || $attr_or_spec instanceof \think\Paginator): if( count($attr_or_spec)==0 ) : echo "" ;else: foreach($attr_or_spec as $key=>$vo): if($vo['type'] != 1 and $vo['value'] != ''): if($vo['is_search'] == '1'): ?>
					<li>
						<?php if(count($vo['value_items']) > 2): ?>
						<div class="condition_name click-down" is_open = "0"><span><?php echo $vo['attr_value_name']; ?></span><i class="fa fa-angle-down fa-lg" aria-hidden="true"></i></div>
						<?php else: ?>
						<div class="condition_name" is_open = "0"><span><?php echo $vo['attr_value_name']; ?></span></div>
						<?php endif; ?>
						<div class="condition_value" data-screen-type="attr">
							<a href="javascript:;" class="selected all">全部<img src="__TEMP__/<?php echo $style; ?>/public/images/pro_span4.png" alt=""></a>
							<?php if(is_array($vo['value_items']) || $vo['value_items'] instanceof \think\Collection || $vo['value_items'] instanceof \think\Paginator): if( count($vo['value_items'])==0 ) : echo "" ;else: foreach($vo['value_items'] as $k=>$value): ?>
								<a href="javascript:;" data-attr-value="<?php echo $vo['attr_value_name']; ?>,<?php echo $value['value']; ?>,<?php echo $vo['attr_value_id']; ?>"><?php echo $value['value']; ?><img src="__TEMP__/<?php echo $style; ?>/public/images/pro_span4.png" alt=""></a>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</li>
					<?php endif; endif; endforeach; endif; else: echo "" ;endif; endif; ?>
		<!-- 规格筛选 -->
		<?php if(count($goods_spec_array) > 0): if(is_array($goods_spec_array) || $goods_spec_array instanceof \think\Collection || $goods_spec_array instanceof \think\Paginator): if( count($goods_spec_array)==0 ) : echo "" ;else: foreach($goods_spec_array as $key=>$vo): if($vo['is_screen'] == 1 and $vo['spec_name'] != ''): ?>
				<li>
					<?php if(count($vo['values']) > 2): ?>
					<div class="condition_name click-down" is_open = "0"><span><?php echo $vo['spec_name']; ?></span><i class="fa fa-angle-down fa-lg" aria-hidden="true"></i></div>
					<?php else: ?>
					<div class="condition_name" is_open = "0"><span><?php echo $vo['spec_name']; ?></span></div>
					<?php endif; ?>
					<div class="condition_value" data-screen-type="spec">
						<a href="javascript:;" class="selected all">全部<img src="__TEMP__/<?php echo $style; ?>/public/images/pro_span4.png" alt=""></a>
						<?php if(is_array($vo['values']) || $vo['values'] instanceof \think\Collection || $vo['values'] instanceof \think\Paginator): if( count($vo['values'])==0 ) : echo "" ;else: foreach($vo['values'] as $k=>$value): ?>
							<a href="javascript:;" data-spec-value="<?php echo $value['spec_id']; ?>:<?php echo $value['spec_value_id']; ?>"><?php echo $value['spec_value_name']; ?><img src="__TEMP__/<?php echo $style; ?>/public/images/pro_span4.png" alt=""></a>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</li>
				<?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
		<!-- 价格筛选 -->
		<?php if($category_count>0): ?>
			<li>
				<?php if(count($category_price_grades) > 2): ?>
				<div class="condition_name click-down" is_open = "0"><span>价格</span><i class="fa fa-angle-down fa-lg" aria-hidden="true"></i></div>
				<?php else: ?>
				<div class="condition_name" is_open = "0"><span>价格</span></div>
				<?php endif; ?>
				<div class="condition_value">
					<a href="javascript:;" class="selected all">全部<img src="__TEMP__/<?php echo $style; ?>/public/images/pro_span4.png" alt=""></a>
					<?php if(is_array($category_price_grades) || $category_price_grades instanceof \think\Collection || $category_price_grades instanceof \think\Paginator): if( count($category_price_grades)==0 ) : echo "" ;else: foreach($category_price_grades as $k=>$price_grades): ?>
						<a href="javascript:;" data-min-price="<?php echo $price_grades[0]; ?>" data-max-price="<?php echo $price_grades[1]; ?>">￥<?php echo $price_grades[0]; ?>&nbsp;-&nbsp;￥<?php echo $price_grades[1]; ?><img src="__TEMP__/<?php echo $style; ?>/public/images/pro_span4.png" alt=""></a>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</li>
		<?php endif; ?>
	</ul>
	<div class="bottom-area">
		<a href="javascript:;" class="reset">重置</a>
		<a href="javascript:;" class="confirm_screen">确认</a>
	</div>
</div>
<!-- 价格区间 最小 -->
<input type="hidden" id="min_price" value=""> 
<!-- 价格区间 最大 -->
<input type="hidden" id="max_price" value="">
<!-- 筛选属性值 -->
<input type="hidden" id="attr" value="">
<!-- 筛选规格 -->
<input type="hidden" id="spec" value="">
<!-- 品牌id -->
<input type="hidden" id="brand_id" value="<?php echo $brand_id; ?>">
		
	<!-- 选择分类start -->
	<div class="data-category-select-layer">
		<ul class="primary_classification" >
			<?php if(empty($category_id) || (($category_id instanceof \think\Collection || $category_id instanceof \think\Paginator ) && $category_id->isEmpty())): ?>
			<li onclick="location.href='<?php echo __URL('APP_MAIN/goods/goodslist'); ?>'" class="active">全部分类</li>
			<?php else: ?>
			<li onclick="location.href='<?php echo __URL('APP_MAIN/goods/goodslist'); ?>'">全部分类</li>
			<?php endif; if(is_array($goodsCategoryList) || $goodsCategoryList instanceof \think\Collection || $goodsCategoryList instanceof \think\Paginator): if( count($goodsCategoryList)==0 ) : echo "" ;else: foreach($goodsCategoryList as $key=>$vo): ?>
			<li data-category-id="<?php echo $vo['category_id']; ?>" <?php if($vo['category_id'] == $category_id): ?>class="active"<?php endif; ?>><?php echo $vo['short_name']; ?></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<ul class="two_stage_classification">
			<?php if(is_array($goodsCategoryList) || $goodsCategoryList instanceof \think\Collection || $goodsCategoryList instanceof \think\Paginator): if( count($goodsCategoryList)==0 ) : echo "" ;else: foreach($goodsCategoryList as $key=>$vo): if(is_array($vo['child_list']) || $vo['child_list'] instanceof \think\Collection || $vo['child_list'] instanceof \think\Paginator): if( count($vo['child_list'])==0 ) : echo "" ;else: foreach($vo['child_list'] as $key=>$to): ?>
				<li <?php if($to['category_id'] == $category_id): ?> class="active" <?php endif; if($to['pid'] == $category_id): ?> style="display:block;" <?php endif; ?> data-pid="<?php echo $to['pid']; ?>" data-category-id="<?php echo $to['category_id']; ?>"><a href="<?php echo __URL('APP_MAIN/goods/goodslist','category_id='.$to['category_id']); ?>"><?php echo $to['category_name']; ?></a></li>
				<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<!-- 选择分类end -->
	<!-- 排序start -->
	<div class="filtrate-more sale-num">
		<span class="filtrate-sort"><a href="javascript:void(0)" class="">默认 </a></span>
		<span class="filtrate-sort"><a href="javascript:void(0)" class="" data-order-type="ng.sales" data-sort="asc"><?php echo lang('goods_sales_volume'); ?> </a></span>
		<span class="filtrate-sort"><a href="javascript:void(0)" class="" data-order-type="ng.is_new" data-sort="desc"><?php echo lang('goods_new'); ?> </a></span>
		<span class="filtrate-sort"><a href="javascript:void(0)" class="" data-order-type="ng.promotion_price" data-sort="desc"><?php echo lang('goods_price'); ?> </a></span>
	</div>
	<!-- 排序end -->
</section>
</div>
<div class="mask-div"></div>
<!-- 总页数 -->
<input type="hidden" id="page_count">
<!-- 当前页数 -->
<input type="hidden" id="page">
<input type="hidden" id='order' name="order"/>
<input type="hidden" id='sort' name="sort"/>
<input type="hidden" id='category_id' name='category_id' value="<?php echo $category_id; ?>" />

	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<script type="text/javascript">
$(function(){
	getgoodlist(1)
})
var is_load = true;//防止重复加载
function getgoodlist(page){
	$('#grouGoodsListmask').hide();
	$('.two-list-menu').hide();
	$('.two-list-menu li[pid]').hide();
	var order = $("#order").val();
	var sort = $("#sort").val();
	var min_price = $("#min_price").val();
	var max_price = $("#max_price").val();
	var attr = $("#attr").val();
	var spec = $("#spec").val();
	var brand_id = $("#brand_id").val();
	//展示方式
	if($.cookie("goods_list_display_mode")!= undefined && $.cookie("goods_list_display_mode") != ""){
		var display_mode = $.cookie("goods_list_display_mode");
		if(display_mode == "list"){
			$(".data-display-mode").find("i").attr("class","fa fa-list-ul fa-lg");
		}else if(display_mode == "big_img"){
			$(".data-display-mode").find("i").attr("class","fa fa-th-large fa-lg");
		}
	}else{
		var display_mode = "big_img";
		$(".data-display-mode").find("i").attr("class","fa fa-th-large fa-lg");
	}
	$("#page").val(page);
	if(is_load){
		is_load = false;
		$.ajax({
			type:"post",
			url : "<?php echo __URL('APP_MAIN/Goods/goodsList'); ?>",
			data : {
				'category_id':'<?php echo $category_id; ?>',
				'brand_id':brand_id,
				'order':order,
				'sort':sort, 
				"page" : page,
				"min_price" : min_price,
				"max_price" : max_price,
				"attr" : attr,
				"spec" : spec
			},
			beforeSend:function(){
				showLoadMaskLayer();
			},
			success : function(data){
				hiddenLoadMaskLayer();
				$("#page_count").val(data['page_count']);//总页数
				if(page == 1){
					var list_html = "";
				}else if(page > 1){
					var list_html = $('.tablelist-append').html();
				}
				if(data['data'].length >0 ){
					for(var i=0;i<data['data'].length;i++){
						var item=data['data'][i];
						if(display_mode == "big_img"){
						list_html+='<div class="product single_item info">'
									+'<li>'
										+'<div class="item">'
											+'<div class="item-tag-box">'
												+'<!--<?php echo lang("hot_sale"); ?>icon<?php echo lang("position_is"); ?>：0px 0px，<?php echo lang("goods_new"); ?>icon<?php echo lang("position_is"); ?>：0px -35px，<?php echo lang("competitive_products"); ?>icon<?php echo lang("position_is"); ?>：0px -70px-->'
											+'</div>'

											+'<div class="item-pic">'
												+'<a href="'+__URL('APP_MAIN/goods/goodsdetail?id='+item.goods_id)+'">'
													+'<img class="" src="'+__IMG(item.pic_cover_small)+'" alt="'+item.goods_name+'" style="display: block;max-width:100%;max-height:100%;">'
												+'</a>'
											+'</div>'

											+'<dl>'
												+'<dt>'
													+'<a href="'+__URL('APP_MAIN/goods/goodsdetail?id='+item.goods_id)+'">'+item.goods_name+'</a>'
												+'</dt>'
												+'<dd>'
													+'<i>￥'+item.promotion_price+'</i>'
												+'</dd>'
											+'</dl>'
										+'</div>'

										+'<div class="item-con-info">'
											+'<span class="goods-sales"> <?php echo lang("goods_sales_volume"); ?>：'+item.sales+'</span>'
											+'<div class="cart-box">'
												+'<a class="add-cart increase" data-goods_id="575" href="javascript:CartGoodsInfo('+item.goods_id+','+item.state+')"></a>'
												+'<a class="decrease hide" data-goods_id="575" style="right: 60px;"></a>'
											+'</div>'
										+'</div>'
									+'</li>'
								+'</div>';
						}else if(display_mode == "list"){
							list_html += '<div class="goods_info">';
							list_html +='<div class="goods_img">';
							list_html += '<a href="'+__URL('APP_MAIN/goods/goodsdetail?id='+item.goods_id)+'">';
							list_html += '<img src="'+__IMG(item.pic_cover_small)+'" alt="" class="pic"  onerror="this.src=\'__TEMP__/<?php echo $style; ?>/public/images/goods_img_empty.png\'">';
							list_html += '</a></div>';
							list_html += '<div class="data_info">';
							list_html += '<p class="goods_name" onclick="location.href=\''+__URL('APP_MAIN/goods/goodsdetail?id='+item.goods_id)+'\'">'+item['goods_name']+'</p>';
							list_html += '<div class="price_share">';
							list_html += '<span class="price">￥'+item['promotion_price']+'</span>';
							list_html += '</div>';
							list_html += '<div class="data-goods-sales-info"><span class="data-sales">销售量：<i>'+item.sales+'</i></span><span class="add_cart" onclick="CartGoodsInfo('+item.goods_id+','+item.state+')"></span></div>';
							list_html += '</div>';
							list_html += '</div>';
						}
					}
				}else{
					list_html+= '<p style="color:#939393;text-align:center;margin-top:100px;"><img src="__TEMP__/<?php echo $style; ?>/public/images/wap_nodata.png" height="100"><br>Sorry！没有找到您想要的商品……</p>';
				}
				is_load = true;
				$('.tablelist-append').html(list_html);
				var	goods_img_height = parseInt($('.goods_img').height());
				$(".data_info").height(goods_img_height);
			},
			error : function(data){
				hiddenLoadMaskLayer();
			}
		});	
	}
}

window.onresize = function(){
	var	goods_img_height = parseInt($('.goods_img').height());
	$(".data_info").height(goods_img_height);
}

//滑动到底部加载
$(window).scroll(function(){
	var totalheight = parseFloat($(window).height()) + parseFloat($(window).scrollTop());
	var content_box_height = parseFloat($(".tablelist-append").height()); 
	if(totalheight - content_box_height >= 100){
		if(is_load){
			var page = parseInt($("#page").val()) + 1;//页数
			var total_page_count = $("#page_count").val(); // 总页数
			if(page > total_page_count){
				return false;
			}else{
				getgoodlist(page);
			}
		}
		
	}
})
</script>
<script type="text/javascript">
$("#head_back").click(function (){
    var json ={
            "center" : "2"
        }
    window.webkit.messageHandlers.center.postMessage(json);
})
</script>


</body>
</html>