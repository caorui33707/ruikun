<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:38:"template/platform\Goods\goodsList.html";i:1513303781;s:27:"template/platform\base.html";i:1526464627;s:44:"template/platform\controlCommonVariable.html";i:1513303781;s:31:"template/platform\urlModel.html";i:1513303781;s:27:"template/platform\page.html";i:1513303781;s:33:"template/platform\openDialog.html";i:1513303781;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>
<title><?php echo $title_name; ?></title>
<meta name="description" content="商城, 分销, 平台, 多店铺商城, 单店铺商城, tp5.0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!--[if lt IE 9]> <script src="js/ie/html5shiv.js" cache="false"></script> <script src="js/ie/respond.min.js" cache="false"></script> <script src="js/ie/excanvas.js" cache="false"></script> <![endif]-->
<script src="PLATFORM_JS/app.v2.js"></script>
<!-- <script src="__STATIC__/js/jquery-1.8.1.min.js"></script> -->
<link href="__STATIC__/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="PLATFORM_CSS/app.v2.css" type="text/css" /> -->
<!-- <link rel="stylesheet" href="PLATFORM_CSS/app.v1.css" type="text/css" /> -->
<script src="PLATFORM_JS/wysiwyg/demo.js" cache="false"></script>
<script src="__STATIC__/js/common.js"></script>

<script>
	/**
	 * Niushop商城系统 - 团队十年电商经验汇集巨献!
	 * ========================================================= Copy right
	 * 2015-2025 山西牛酷信息科技有限公司, 保留所有权利。
	 * ---------------------------------------------- 官方网址:
	 * http://www.niushop.com.cn 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
	 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
	 * =========================================================
	 * 
	 * @author : 小学生王永杰
	 * @date : 2016年12月16日 16:17:13
	 * @version : v1.0.0.0 商品发布中的第二步，编辑商品信息
	 */
		var PLATFORM_NAME = "<?php echo $title_name; ?>";
		var ADMINIMG = "ADMIN_IMG";//后台图片请求路径
		var ADMINMAIN = "ADMIN_MAIN";//后台请求路径
		var SHOPMAIN = "SHOP_MAIN";//PC端请求路径
		var APPMAIN = "APP_MAIN";//手机端请求路径
		var UPLOAD = "__UPLOAD__";//上传文件根目录
		var PAGESIZE = "<?php echo $pagesize; ?>";//分页显示页数
		var ROOT = "__ROOT__";//根目录
		var ADDONS = "__ADDONS__";
		var STATIC = "__STATIC__";
		var PLATFROMMAIN = "PLATFORM_MAIN";
		//上传文件路径
		var UPLOADGOODS = 'UPLOAD_GOODS';//存放商品图片
		var UPLOADGOODSSKU = 'UPLOAD_GOODS_SKU';//存放商品SKU
		var UPLOADGOODSBRAND = 'UPLOAD_GOODS_BRAND';//存放商品品牌图
		var UPLOADGOODSGROUP = 'UPLOAD_GOODS_GROUP';////存放商品分组图片
		var UPLOADGOODSCATEGORY = 'UPLOAD_GOODS_CATEGORY';////存放商品分类图片
		var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
		var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
		var UPLOADPAY = 'UPLOAD_PAY';//存放支付生成的二维码图片
		var UPLOADADV = 'UPLOAD_ADV';//存放广告位图片
		var UPLOADEXPRESS = 'UPLOAD_EXPRESS';//存放物流图片
		var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
		var UPLOADVIDEO = 'UPLOAD_VIDEO';//存放视频文件
</script>
<!-- 引入css js style等公共文件  start-->

<style>
.fa {
    display: grid;
   
}
.text-active, .active>.text {
    display: none;
}
</style>

<!-- 引入css js 公共文件  end-->
</head>
<body style="background:transparent;">
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<input type="hidden" id="niushop_admin_model" value="<?php echo admin_model(); ?>">
<input type="hidden" id="niushop_platform_model" value="<?php echo platform_model(); ?>">
<script>
function __URL(url){
	url = url.replace('SHOP_MAIN', '');
	url = url.replace('APP_MAIN', 'wap');
	url = url.replace('ADMIN_MAIN', $("#niushop_admin_model"));
	url = url.replace('PLATFORM_MAIN', $("#niushop_platform_model"));
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
		if(url_model==1 || url_model==true){
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

//处理图片路径
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = UPLOAD+"\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
		<section class="bg-dark dk top-sidebar">
			<div class="navbar-header aside-md">
<!-- 				<a href="#"  data-toggle="fullscreen"><img -->
<!-- 					src="PLATFORM_IMG/logo1.png" class="m-r-sm"></a> -->
			</div>
			<ul class="nav navbar-nav navbar-right hidden-xs nav-user" style="position:fixed;top:0;right:0;z-index:10;">
				<li class="dropdown"><a href="#" class="dropdown-toggle dker"
					data-toggle="dropdown"> <span class="thumb-sm avatar pull-left">
							<img src="__STATIC__/images/default_user_portrait.gif">
					</span> <?php echo $username; ?> <b class="caret"></b>
				</a>
					<ul class="dropdown-menu animated fadeInRight">
						<span class="arrow top"></span>
						<li><a href="#">修改密码</a></li>
						<li><a href="<?php echo __URL('SHOP_MAIN'); ?>">商城首页</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo __URL('PLATFORM_MAIN/Login/logout'); ?>">安全退出</a></li>
					</ul>
				</li>
	<!-- 			<li class="hidden-xs">
					<a href="#" class="dropdown-toggle dker" data-toggle="dropdown"> <i class="navtop-icon icon-bell"></i> 
						<span class="badge badge-sm up bg-danger m-l-n-sm count" style="display: inline-block;">3</span> 
					</a>
			        <section class="dropdown-menu aside-xl">
			          <section class="panel bg-white">
			            <header class="panel-heading b-light bg-light"> <strong>You have <span class="count" style="display: inline;">3</span> notifications</strong> </header>
			            <div class="list-group list-group-alt animated fadeInRight"><a href="#" class="media list-group-item" style="display: block;"><span class="pull-left thumb-sm text-center"><i class="fa fa-envelope-o fa-2x text-success"></i></span><span class="media-body block m-b-none">Sophi sent you a email<br><small class="text-muted">1 minutes ago</small></span></a> <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <img src="images/avatar.jpg" alt="John said" class="img-circle"> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br>
			              <small class="text-muted">10 minutes ago</small> </span> </a> <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br>
			              <small class="text-muted">1 hour ago</small> </span> </a> </div>
			            <footer class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="fa fa-cog"></i></a> <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a> </footer>
			          </section>
			        </section>
			    </li>
		      <li class="dropdown hidden-xs"> 
		      	<a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="navtop-icon icon-search" style="height:20px;line-height:20px;"></i></a>
		        <section class="dropdown-menu aside-xl animated fadeInUp">
		          <section class="panel bg-white">
		            <form role="search">
		              <div class="form-group wrapper m-b-none">
		                <div class="input-group">
		                  <input type="text" class="form-control" placeholder="Search">
		                  <span class="input-group-btn">
		                  <button type="submit" class="btn btn-info btn-icon"><i class="fa fa-search"></i></button>
		                  </span> </div>
		              </div>
		            </form>
		          </section>
		        </section>
		      </li> -->
		      <li class="hidden-xs"> 
		      	<a href="<?php echo __URL('SHOP_MAIN'); ?>" title="新窗口打开商城首页" target="_black" class="dker"><i class="navtop-icon icon-home"></i></a>
		      </li>
		      <li class="hidden-xs"> 
		      	<a href="javescript:void(0);" onclick="delcache()" title="清除缓存" class="dker"><i class="navtop-icon icon-clear"></i></a>
		      </li>
		      <li class="hidden-xs"> 
		      	<a href="<?php echo __URL('PLATFORM_MAIN/Login/logout'); ?>" title="安全退出管理中心" class="dker"><i class="navtop-icon icon-power-off"></i></a>
		      </li>
			</ul>
		</section>
		
		<div class="left-sidebar" id="sidebar" style="display:none;">
			<div id="first-sidebar" class="nav-primary first" >
				<ul class="nav">
						<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): $i = 0; $__LIST__ = $nav_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<li class='<?php if($vo['data']['module_id'] == $headid): ?>active<?php endif; ?>' style="position: relative;text-align:center;height:68px;margin:0;">
							<a href="<?php echo __URL('PLATFORM_MAIN/'.$vo['data']['url']); ?>" onclick="show_menu(<?php echo $vo['data']['module_id']; ?>)" style="height:68px;">
								<div style="padding-top:15px;padding-left:24px;">
									<i class="nav-icon <?php echo $vo['data']['icon_class']; ?>"></i>
								</div>
								<div style="margin:0;height:33px;line-height:22px;"><?php echo $vo['data']['module_name']; ?></div>
								<div class="arrow-left"></div>
							</a>
						</li> 
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
			</div>
			<div id="second-sidebar" class="nav-primary second">
				<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): $i = 0; $__LIST__ = $nav_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!(empty($vo['sub_menu']) || (($vo['sub_menu'] instanceof \think\Collection || $vo['sub_menu'] instanceof \think\Paginator ) && $vo['sub_menu']->isEmpty()))): ?>
												<ul class="nav menu-nav <?php if($vo['data']['module_id'] == $headid): ?>block<?php else: ?>hide<?php endif; ?>" id="menu_<?php echo $vo['data']['module_id']; ?>" >
													<?php if(is_array($vo['sub_menu']) || $vo['sub_menu'] instanceof \think\Collection || $vo['sub_menu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sub_menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
													<li <?php if($v1['module_id'] == $second_menu_id): ?>class="active"<?php endif; ?> style="position: relative;">
														<a href="<?php echo __URL('PLATFORM_MAIN/'.$v1['url']); ?>" <?php if(strtoupper($v1['method']) == strtoupper($action)): ?>class="active"<?php endif; ?>> 
														<span><?php echo $v1['module_name']; ?></span>
														</a>
														<i class="triangle1"></i>
													</li>
													<?php endforeach; endif; else: echo "" ;endif; ?>
												</ul> 
												<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
			
		</div>
		<div id="content" class="main">
					<section class="vbox">
						<header class="header bg-white b-b b-light panel-title">
				            <p> <?php echo $frist_menu['module_name']; ?> >
								<a href="<?php echo __URL('PLATFORM_MAIN/'.$secend_menu['url']); ?>"><?php echo $secend_menu['module_name']; ?></a>
							</p>
				            <!-- 当前位置 -->
				        </header>
						<section class="scrollable wrapper">
						<?php if(!(empty($three_menu_list) || (($three_menu_list instanceof \think\Collection || $three_menu_list instanceof \think\Paginator ) && $three_menu_list->isEmpty()))): ?>
							<div class="row panel-body" style="padding-top:0px;">
						<?php if(is_array($three_menu_list) || $three_menu_list instanceof \think\Collection || $three_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $three_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vt): $mod = ($i % 2 );++$i;?>
								<a href="<?php echo __URL('PLATFORM_MAIN/'.$vt['url']); ?>" class="btn btn-sm <?php if(strtoupper($vt['method']) == strtoupper($action)): ?>btn-primary<?php else: ?>btn-default<?php endif; ?>"><?php echo $vt['module_name']; ?></a>
						<?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						<?php endif; ?>
						<!-- 操作提示  start -->
						<?php if(!(empty($tips) || (($tips instanceof \think\Collection || $tips instanceof \think\Paginator ) && $tips->isEmpty()))): ?>
							<section class="panel-default m-b-sm">
								<div class="alert alert-info">
									<p>
					                  <button type="button" class="close"><i class="fa fa-minus"></i></button>
					                  <i class="fa fa-hand-o-right m-r-xs"></i><strong>操作提示</strong>
					                </p>
					                <?php if(is_array($tips) || $tips instanceof \think\Collection || $tips instanceof \think\Paginator): if( count($tips)==0 ) : echo "" ;else: foreach($tips as $key=>$vt): ?>
					                   <p class="alert-p m-l-xl"><i class="fa fa-caret-right m-r-xs"></i><?php echo $vt; ?></p>
					                <?php endforeach; endif; else: echo "" ;endif; ?>
				                </div>
							</section>
						<?php endif; ?>
						<!-- 操作提示  end -->
							
<div class="row padder-v">
		<div class="col-sm-7">
			<!-- 			<a href="PLATFORM_MAIN/Auth/addUser" class="btn btn-sm btn-primary"><i -->
			<!-- 				class="fa fa-plus"></i> 添加用户 </a> -->
		</div>
		
		<div class="col-sm-2">
			<input type="text" id="search_text" class="input-sm form-control" placeholder="请输入商品名称"> 
		</div>
		<div class="col-sm-2">
			<div style="width:25%;float:left;line-height: 30px;">上下架</div>
			<select class="input-sm form-control" id="shop_type" style="width:75%;float:left;">
                <option value="">全部</option>
                <option value="-1">待审核</option>
				<option value="1">上架</option>
				<option value="0">下架</option>
            </select>			
		</div>
		<div class="col-sm-1">
			<button class="btn btn-sm btn-default" type="button" onclick="LoadingInfo(1)">搜索</button>
		</div>
	</div>
<section class="panel panel-default">
	<div class="table-responsive">
		<table class="table table-striped b-t b-light text-sm">
			<thead>
				<tr>
					<th width="20"><input type="checkbox"></th>
					<th>图片</th>
					<th>编号</th>
					<th style="width: 23%;">商品名称</th>
					<th>店铺</th>
					<th class="center">新品</th>
					<th class="center">精品</th>
					<th class="center">热卖</th>
					<th>分类&品牌</th>
					<th>价格</th>
					<th>库存</th>
					<th>商品状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody id="list">
				
			</tbody>
		</table>
	</div>
	<script src="PLATFORM_JS/page.js"></script>
<footer class="panel-footer">
	<div class="row" id="page">
		<div class="col-sm-5" >
<!--                     <select class="input-sm form-control input-s-sm inline"> -->
<!--                       <option value="0">Bulk action</option> -->
<!--                       <option value="1">Delete selected</option> -->
<!--                       <option value="2">Bulk edit</option> -->
<!--                       <option value="3">Export</option> -->
<!--                     </select> -->
<!--                     <button class="btn btn-sm btn-default">Apply</button> -->
        </div>
		<div class="col-sm-2 text-center"> 
			<small class="text-muted inline m-tb-8">总计 <span id="total_count_num"></span>个记录 分为<span id="page_count_num"></span>页</small> 
		</div>
		<div class="col-sm-5 text-right text-center-xs">
			<ul class="pagination pagination-sm m-t-none m-b-none">
				<li><a id="beginPage" class="btn btn-sm btn-default disabled">首页</a></li>
				<li><a id="prevPage" class="btn btn-sm btn-default disabled">上一页</a></li>
				<li id="pageNumber"></li>
				<li><a id="nextPage" class="btn btn-sm btn-default">下一页</a></li>
				<li><a id="lastPage" class="btn btn-sm btn-default">末页</a></li>
			</ul>
		</div>
		<input type="hidden" id="page_count" />
	</div>
</footer>
<script>
$(function() {
	$("#page").show();//显示分页z
});
function JumpForPage(obj) {
	jumpNumber = $(obj).text();
	LoadingInfo($(obj).text());
	$("#page ul li a.active").removeClass("active");
	$(obj).addClass("active");
	if (jumpNumber == 1) {
		changeClass("prev");
	} else if (jumpNumber < parseInt($("#page_count").val())) {
		changeClass();
	} else if (jumpNumber == parseInt($("#page_count").val())) {
		changeClass("next");
	}
}
$("#beginPage").click(function() {
	if(jumpNumber!=1){
		jumpNumber = 1;
		LoadingInfo(1);
		changeClass("begin");
	}
});
//上一页
$("#prevPage").click(function() {
	var obj = $("#pageNumber .active");
	var index = parseInt(obj.text()) - 1;
	if (index > 0) {
		obj.removeClass("active");
		obj.prev().addClass("active");
		jumpNumber = index;
		LoadingInfo(index);
		//判断是否是第一页
		if (index == 1) {
			changeClass("prev");
		} else {
			changeClass();
		}
	}
});
//下一页
$("#nextPage").click(function() {
	var obj = $("#pageNumber .active");
	//当前页加一（下一页）
	var index = parseInt(obj.text()) + 1;
	if (index <= $("#page_count").val()) {
		jumpNumber = index;
		LoadingInfo(index);
		obj.removeClass("active");
		obj.next().addClass("active");
		//判断是否是最后一页
		if (index == $("#page_count").val()) {
			changeClass("next");
		} else {
			changeClass();
		}
	}
});
//末页
$("#lastPage").click(
		function() {
			jumpNumber = $("#page_count").val();
			if(jumpNumber>1){
				LoadingInfo(jumpNumber);
				$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
				changeClass("next");
			}
		});
</script>
</section>

						</section>
					</section>
					<a href="#" class="hide nav-off-screen-block"
						data-toggle="class:nav-off-screen" data-target="#nav"></a>
				</div>
	</section>
<script>
var PLATFORMMAIN = 'PLATFORM_MAIN';
var UPLOAD = '__UPLOAD__';
</script>
<script>
function tab_menu(id){
	if(id == 1){
		$(".nav1").hide();
		$(".nav2").show();
	}else if(id == 2){
		$(".nav1").show();
		$(".nav2").hide();
	}
}
$(".close").click(function(){
	$(this).children('i').toggleClass("fa-minus");
	$(this).children('i').toggleClass("fa-plus");
	$(this).parents('.alert').find(".alert-p").toggleClass("hide");
});
function show_menu(pid){
// 	$(".menu-nav").removeClass('block');
// 	$(".menu-nav").addClass('hide');
// 	$("#menu_"+pid).removeClass('hide');
// 	$("#menu_"+pid).addClass('block');
	var url = $("#menu_"+pid+" li").eq(0).find('a').attr('href');
	location.href = url;
}
/**
 * 清理缓存
 */
function delcache() {
	$.ajax({
		url : __URL(ADMINMAIN+"/system/deletecache"),
		type : "post",
		data : {},
		dataType : "json",
		success : function(data) {
			if (data) {
				showMessage('success', '缓存更新成功');
			} else {
				showMessage('error', '更新失败，请检查文件权限');
			}
		}
	});
}
</script>
	<!-- Bootstrap -->
	<!-- App -->

	<script src="PLATFORM_JS/charts/easypiechart/jquery.easy-pie-chart.js"></script>
	<script src="PLATFORM_JS/charts/sparkline/jquery.sparkline.min.js"></script>
	<script src="PLATFORM_JS/charts/flot/jquery.flot.min.js"></script>
	<script src="PLATFORM_JS/charts/flot/jquery.flot.tooltip.min.js"></script>
	<script src="PLATFORM_JS/charts/flot/jquery.flot.resize.js"></script>
	<script src="PLATFORM_JS/charts/flot/jquery.flot.grow.js"></script>
	<script src="PLATFORM_JS/charts/flot/demo.js"></script>
	<script src="PLATFORM_JS/calendar/bootstrap_calendar.js"></script>
	<script src="PLATFORM_JS/calendar/demo.js"></script>
	<script src="PLATFORM_JS/sortable/jquery.sortable.js"></script>
	<script src="PLATFORM_JS/datatables/jquery.dataTables.min.js"
		cache="false"></script>
	<script src="PLATFORM_JS/nestable/jquery.nestable.js"></script>
	<script src="PLATFORM_JS/nestable/demo.js"></script>
	<script src="PLATFORM_JS/libs/underscore-min.js" cache="false"></script>
	<script src="PLATFORM_JS/fuelux/fuelux.js" cache="false"></script>
	<script src="PLATFORM_JS/fuelux/demo.datagrid.js" cache="false"></script>
	<!-- slider -->
	<script src="PLATFORM_JS/slider/bootstrap-slider.js" cache="true"></script>
	<!-- select2 -->
	<script src="PLATFORM_JS/select2/select2.min.js" cache="true"></script>

	<!-- markdown -->
	
<script type="text/javascript">
function modifyGoodsRecommend(goods_id, type, is_recommend){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('PLATFORM_MAIN/Goods/modifyGoodsRecommend'); ?>",
		async : true,
		data : {
			"goods_id" : goods_id,
			"type" : type,
			"is_recommend" : is_recommend
		},
		success : function(data) {
			return true;
		}
	});
}
$(function(){
	LoadingInfo(1);
});
	//查询用户列表
	function LoadingInfo(pageIndex) {
		var goods_name =$("#search_text").val();
		var state = $("#shop_type").val();
		$.ajax({
			type : "post",
			url : "<?php echo __URL('PLATFORM_MAIN/goods/goodslist'); ?>",
			async : true,
			data : {
				"pageIndex" : pageIndex, "goods_name" : goods_name, "state" : state
			},
			success : function(data) {
				var html = '';
				$("#total_count_num").text(data["total_count"]);
				$("#page_count_num").text(data["page_count"]);
				$("#page_count").val(data["page_count"]);
				$("#pageNumber a").remove();
				if (data["data"].length > 0) {
					for (var i = 0; i < data["data"].length; i++) {
						html += '<tr>';
						html += '<td><input type="checkbox" name="sub" value="'+ data['data'][i]['goods_id']+'"></td>';
						html += '<td><img src="'+__IMG(data["data"][i]["pic_cover_micro"])+'"></td>';
						html += '<td>'+data['data'][i]['code']+'</td>';
						html += '<td>'+data["data"][i]["goods_name"]+'</td>';
						html += '<td>'+data["data"][i]["shop_name"]+'</td>';
						if(data["data"][i]["is_platform_new"] > 0){
							html += '<td class="center"><a href="#" class="active" onclick="modifyGoodsRecommend('+data["data"][i]["goods_id"]+',1,0)" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>';
						}else{
							html += '<td class="center"><a href="#" class="" onclick="modifyGoodsRecommend('+data["data"][i]["goods_id"]+',1,1)" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>';
						}
						if(data["data"][i]["is_platform_best"] > 0){
							html += '<td class="center"><a href="#" class="active" onclick="modifyGoodsRecommend('+data["data"][i]["goods_id"]+',2,0)" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>';
						}else{
							html += '<td class="center"><a href="#" class="" onclick="modifyGoodsRecommend('+data["data"][i]["goods_id"]+',2,1)" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>';
						}
						if(data["data"][i]["is_platform_hot"] > 0){
							html += '<td class="center"><a href="#" class="active" onclick="modifyGoodsRecommend('+data["data"][i]["goods_id"]+',3,0)" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>';
						}else{
							html += '<td class="center"><a href="#" class="" onclick="modifyGoodsRecommend('+data["data"][i]["goods_id"]+',3,1)" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>';
						}
						if(data["data"][i]["brand_name"] != null){
							html += '<td><div class="media-body"><div>'+data["data"][i]["category_name"]+'</div><small class="text-muted">'+data["data"][i]["brand_name"]+'</small></div></td>';
						}else{
							html += '<td><div class="media-body"><div>'+data["data"][i]["category_name"]+'</div></div></td>';
						}
						html += '<td>' + data["data"][i]["price"] + '</td>';
						html += '<td>' + data["data"][i]["stock"] + '</td>';
						if(data["data"][i]["state"] == 1){
							html += '<td>已上架</td>';
						}else if(data["data"][i]["state"] == 10 || data["data"][i]["state"] == 0){
							html += '<td>已下架</td>';
						}else if(data["data"][i]["state"] == -1){
                            html += '<td>待审核</td>';
                        }
						html += '<td><a target="_BLANK" href="'+__URL('SHOP_MAIN/goods/goodsinfo?goodsid=' + data["data"][i]["goods_id"])+'">查看</a>  &nbsp;&nbsp;&nbsp;';
						if(data["data"][i]["state"] == 1){
							html += ' <a href="javascript:void(0);" onclick="modifyGoodsOnline('+data["data"][i]["goods_id"]+')">违规下架</a>';
						}else if(data["data"][i]["state"] == 10 || data["data"][i]["state"] == 0){
							html += ' <a href="javascript:void(0);" onclick="deleteGoods('+data["data"][i]["goods_id"]+')">删除</a>';
						}else if(data["data"][i]["state"] == -1){
                            html += ' <a href="javascript:void(0);" onclick="modifyGoodsExam('+data["data"][i]["goods_id"]+')">审核</a>';
                        }
						
						html += '</td>';
						html += '</tr>';
					}
				} else {
					html += '<tr align="center"><th colspan="9">暂无符合条件的数据记录</th></tr>';
				}
				$("#list").html(html);
				var totalpage = $("#page_count").val();
				if (totalpage == 1) {
					changeClass("all");
				}
				var $html = pagenumShow(jumpNumber,totalpage,<?php echo $pageshow; ?>)
				$("#pageNumber").append($html);
			}
		});
	}
	
	

	//商品上架id合计
	//商品上架id合计
	function goodsIdCount(){
		var goods_ids= "";
		$("#list input[type='checkbox']:checked").each(function() {
			if (!isNaN($(this).val())) {
				var state = $(this).data("state");
				if(state == 0){
					$( "#dialog" ).dialog({
			            buttons: {
			                "确定,#e57373": function() {
			                    $(this).dialog('close');
			                }
			            },
			            contentText:"记录中包含已下架记录",
			            title:"消息提醒",
			        });
					return false;
				}
				goods_ids = $(this).val() + "," + goods_ids;
			}
		});
		goods_ids = goods_ids.substring(0, goods_ids.length - 1);
		if(goods_ids == ""){
			$( "#dialog" ).dialog({				
	            buttons: {
	                "确定,#e57373": function() {
	                    $(this).dialog('close');
	                }
	            },
	            contentText:"请选择需要操作的记录",
	            title:"消息提醒",
	        });
			return false;
		}
		modifyGoodsOnline(goods_ids);
	}
	
	//商品上下架
	function modifyGoodsOnline(goods_ids){
		$.ajax({
			type : "post",
			url : "<?php echo __URL('PLATFORM_MAIN/goods/modifygoodsoffline'); ?>",
			async : true,
			data : {
				"goods_ids" : goods_ids
			},
			success : function(data) {
				if(data["code"] > 0 ){
					showMessage('success', "下架成功","<?php echo __URL('PLATFORM_MAIN/goods/goodslist'); ?>");
				}else{
					showMessage('error', "下架失败");
				}
			}
		})
	}

    //商品审核
    function modifyGoodsExam(goods_ids){
        $( "#dialog" ).dialog({
            buttons: {
                "确定": function() {
                    $(this).dialog('close');
                    $.ajax({
                        type : "post",
                        url : "<?php echo __URL('PLATFORM_MAIN/goods/modifygoodsexam'); ?>",
                        async : true,
                        data : {
                            "goods_ids" : goods_ids
                        },
                        success : function(data) {
                            if(data["code"] > 0 ){
                                showMessage('success', "通过成功","<?php echo __URL('PLATFORM_MAIN/goods/goodslist'); ?>");
                            }else{
                                showMessage('error', "通过失败");
                            }
                        }
                    })
                },
                "取消,#e57373": function() {
                    $(this).dialog('close');
                }

            },
            contentText:"你确定通过此审核吗？",
            title:"消息提醒"
        });
    }
	
	function deleteGoods(goods_ids){
		$( "#dialog" ).dialog({
            buttons: {
                "确定": function() {
                    $(this).dialog('close');
                    $.ajax({
            			type : "post",
            			url : "<?php echo __URL('PLATFORM_MAIN/goods/deletegoods'); ?>",
            			async : true,
            			data : {
            				"goods_ids" : goods_ids
            			},
            			success : function(data) {
            				if(data["code"] > 0 ){
            					showMessage('success', "删除成功","<?php echo __URL('PLATFORM_MAIN/goods/goodslist'); ?>");
            				}else{
            					showMessage('error', "删除失败");
            				}
            			}
            		})
                },
                "取消,#e57373": function() {
                    $(this).dialog('close');
                }
                
            },
            contentText:"你确定删除吗？",
            title:"消息提醒"
        });
	}
	$("#search_text").keypress(function(e){
		if(e.keyCode == 13){
			LoadingInfo(1);
		}
	});
</script>
 <!-- <link rel="stylesheet" type="text/css" href="PLATFORM_JS/toastr/toastr.css">
<script type="text/javascript" src="PLATFORM_JS/toastr/toastr.js" charset="utf-8"></script>
<script type="text/javascript">
// function show(){
// 	toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!');
// 	toastr.success('修改成功');
// }
function showMessage(type, message, url){
	toastr.options.onHidden = function() { 
		alert(url);
		 window.location.href= url; 
	}
	if(type == 'success'){
		toastr.success(message);
	}
	if(type == 'error'){
		toastr.error(message);
	}
		
	
}
// 		function showMessage(type, message,url,time)
// 		{
// 			if(url == undefined){
// 				url = '';
// 			}
// 			if(time == undefined){
// 				time = 2;
// 			}
// 			//成功之后的跳转
// 			if(type == 'success')
// 				{
// 				$( "#dialog" ).dialog({				
// 		            buttons: {
// 		                "确定,#51A351": function() {
// 		                    $(this).dialog('close');
// 		                }
// 		            },
// 		            contentText:message,
// 		      		time:time,
// 		      		timeHref: url,
// 		        });
// 				}
// 			//失败之后的跳转
// 			if(type == 'error')
// 				{
// 				$( "#dialog" ).dialog({				
// 		            buttons: {
// 		                "确定,#e57373": function() {
// 		                    $(this).dialog('close');
// 		                }
// 		            },
// 		            time:time,
// 		            contentText:message,
// 		            timeHref: url,
// 		        });
// 				}
			
// 		}
	</script> -->
<link rel="stylesheet" type="text/css"
	href="PLATFORM_CSS/jquery-ui-private.css">
<script>
var platform_shopname= '<?php echo $title_name; ?>';
</script>
<script type="text/javascript" src="PLATFORM_JS/jquery-ui-private.js"
	charset="utf-8"></script>
<script type="text/javascript" src="PLATFORM_JS/jQuery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
		function showMessage(type, message,url,time)
		{
			if(url == undefined){
				url = '';
			}
			if(time == undefined){
				time = 3;
			}
			//成功之后的跳转
			if(type == 'success')
				{
				$( "#dialog" ).dialog({				
		            buttons: {
		                "确定,#51A351": function() {
		                    $(this).dialog('close');
		                }
		            },
		            contentText:message,
		      		time:time,
		      		timeHref: url,
		        });
				}
			//失败之后的跳转
			if(type == 'error')
				{
				$( "#dialog" ).dialog({				
		            buttons: {
		                "确定,#e57373": function() {
		                    $(this).dialog('close');
		                }
		            },
		            time:time,
		            contentText:message,
		            timeHref: url,
		        });
				}
			
		}
		function showConfirm(content)
		{
			$( "#dialog" ).dialog({				
	            buttons: {
	                "确定,#e57373": function() {
	                    $(this).dialog('close');
	                    return 1;
	                },
	                "取消": function() {
	                    $(this).dialog('close');
	                    return 0;
	                }
	            },
	            contentText:content,
			});
			
		}
	</script>
	<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
	<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
	<script src="PLATFORM_JS/validation/jquery.validate.js" charset="utf-8" cache="false"></script>
	<script src="PLATFORM_JS/validation/messages_zh.js" charset="utf-8" cache="false"></script>
	<!-- wysiwyg -->
	<script src="PLATFORM_JS/wysiwyg/jquery.hotkeys.js" cache="false"></script>
	<script src="PLATFORM_JS/wysiwyg/bootstrap-wysiwyg.js" cache="false"></script>
	<script src="PLATFORM_JS/wysiwyg/demo.js" cache="false"></script>
	
</body>
</html>