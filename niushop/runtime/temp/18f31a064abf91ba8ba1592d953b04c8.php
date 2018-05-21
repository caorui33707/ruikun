<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:41:"template/platform\Goods\addGoodsSpec.html";i:1513303781;s:27:"template/platform\base.html";i:1526464627;s:44:"template/platform\controlCommonVariable.html";i:1513303781;s:31:"template/platform\urlModel.html";i:1513303781;s:33:"template/platform\openDialog.html";i:1513303781;}*/ ?>
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
.table{
	width:98%;
	display:table;
    border-left: 1px dotted #e5e5e5;
    border-right: 1px dotted #e5e5e5;
    border-bottom: 1px dotted #e5e5e5;
    background: rgba(204, 204, 204, 0.09);
    padding: 0px 10px 10px 10px;
}
.table-body{
	min-height:50px;
	max-height:410px;
	overflow-y:auto;
	overflow-x:hidden;
}
.inline-block{display:inline-block;}
.w5{width:5%;}
.w75{width:70%;}
.w19{width:10%;text-align:center;}
.w100{width:100%;
    height: 40px;
    line-height: 40px;
    border-bottom: 1px dotted #e5e5e5;}
.add-spec{
	height: 40px;
    line-height: 40px;
	border-bottom:1px dotted #E6E6E6;
}
input{
	vertical-align: initial;
}
.table input[type="text"], input[type="password"], input.text, input.password {
    font: 12px/20px Arial;
    color: #777;
    background-color: #FFF;
    vertical-align: baseline;
	margin-bottom:0px;
}
.set-style dl dt {
	text-align:left;
	    width: 7%;
}
label.line-label{
	display:inline-block;
	margin-right:10px;
	font-weight:normal;
}
.edit_button{
	background-color: #53b567;
    border-color: #4bae5f;
    color: #fff;
    width: 80px;
    line-height: 30px;
    border: 0;
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
							
<section class="panel panel-default">
	<header class="panel-heading font-bold"> 添加规格 </header>
	<div class="panel-body">
		<div class="form-horizontal" id="goods_brand_form" name="form">
			<div class="form-group">
				<label class="col-sm-2 control-label">规格名称：</label>
				<div class="col-md-2">
					<input type="text" class="form-control" id="spec_name" name="spec_name" value="" required>
				</div>
<!-- 				<label class="col-md-8 error" for="brand_name" ></label> -->
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
				<label class="col-sm-2 control-label">规格排序：</label>
				<div class="col-md-1">
					<input type="text" class="form-control" id="sort" value="255" onkeyup='this.value=this.value.replace(/\D/gi,"")' required>
				</div>
<!-- 				<label class="col-md-9 error" for="brand_initial" ></label> -->
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
				<label class="col-sm-2 control-label">是否启用：</label>
				<div class="col-md-4">
					<label class="switch">
                         <input id="is_visible" type="checkbox" >
                         <span></span> 
                    </label>
				</div>
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
				<label class="col-sm-2 control-label">展示方式：</label>
				<div class="col-sm-2">
					<label class="line-label"><input type="radio" name="show_type" id="show_type1" value="1" checked onchange="change_show_type(1)">文字</label>
					<label class="line-label"><input type="radio" name="show_type" id="show_type2" value="2" onchange="change_show_type(2)">颜色</label>
					<label class="line-label"><input type="radio" name="show_type" id="show_type3" value="3" onchange="change_show_type(3)">图片</label>
				</div>
				
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="table">
				<div class="w100">
					<div class="col-sm-2 control-label"></div>
					<div class="inline-block w75">属性名称</div>
					<div class="inline-block w19">操作</div>
				</div>
				<div class="table-body">
				<div class="w100 spec_data">
					<div class="col-sm-2 control-label"><label style="margin-left: 5px;"> <input type="checkbox" style=""></label></div>
					<div class="inline-block w75">
						<input type="text" name="spec_value" style="margin-right: 20px;">
					</div>
					<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>
				</div>
				</div>
				<div><div class="col-sm-2 control-label"></div><a href="javascript:;" onclick="addSpecValue(this)"><i class="fa fa-plus"></i>&nbsp;&nbsp;添加一个属性</a></div>
			</div>
            
            <div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-2">
					<button class="edit_button" onclick="addGoodsSpec();">提交</button>
<!-- 					<a href="javascript:void(0);" onclick="addGoodsBrandAjax()" class="btn btn-primary">保存</a> -->
				</div>
			</div>
		</div>
	</div>
</section>
<script>
var flag = false;
function addSpecValue(e){
	var show_type = $("input[name='show_type']:checked").val();
	var spec_data_num = $(".spec_data").length;
	var html = '<div class="w100 spec_data">';
		html += '<div class="col-sm-2 control-label"><label style="margin-left: 5px;"> <input type="checkbox"></label></div>';
	if(show_type ==2){
		html += '<div class="inline-block w75" style="margin-right: 4px;"><input type="text" name="spec_value" style="margin-right:20px;"><input type="color" name="spec_value_data" style="width:60px;margin-top:5px;"/></div>';
	}else{
		html += '<div class="inline-block w75" style="margin-right: 4px;"><input type="text" name="spec_value"  style="margin-right:20px;"></div>';
	}
	 html += '<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div></div>';
	 $(e).parents(".table").find(".table-body").append(html);
}
function delSpecValue(e){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				$(e).parents('.w100').remove();
			},"取消,#e57373" : function(){
				$(this).dialog('close');
			}
		},
		contentText:"你确定删除吗？",
		title:"消息提醒"
	});
}
function addGoodsSpec() {
	var spec_name = $.trim($("#spec_name").val());
	var sort = $("#sort").val();
	var show_type = $("input[name='show_type']:checked").val();
	if ($("#is_visible").prop("checked")) {
		var is_visible = 1;
	} else {
		var is_visible = 0;
	}
	if(show_type==2){
		var data_obj = $(".spec_data");
		var spec_value_str = '';
		data_obj.each(function(i){
			if(data_obj.eq(i) != ''){
				var spec_value_name = $.trim(data_obj.eq(i).find("input[name='spec_value']").val());
				var spec_value_data = data_obj.eq(i).find("input[name='spec_value_data']").val();
				var new_str = '';
				new_str = spec_value_name+ ':' +spec_value_data;
				spec_value_str = spec_value_str + ',' + new_str;
			}
		});
		spec_value_str = spec_value_str.substr(1);
	}else{
		var spec_value_obj = $("input[name='spec_value']");
		var spec_value_str = '';
		spec_value_obj.each(function(i){
			if($.trim(spec_value_obj.eq(i).val()) != ''){
				spec_value_str += ',' + $.trim(spec_value_obj.eq(i).val());
			}
		});
		spec_value_str = spec_value_str.substr(1);
	}
	if(spec_name == ''){
		showMessage('error', "规格名称不能为空");
		$("#spec_name").focus();
		return false;
	}
	if(spec_value_str == ''){
		showMessage('error', "属性名称不能为空！");
		$("input[name='spec_value']").focus();
		return false;
	}
	if(flag){
		return;
	}
	flag = true;
	$.ajax({
		type : "post",
		url : "<?php echo __URL('PLATFORM_MAIN/goods/addgoodsspec'); ?>",
		data : {
			'spec_name' : spec_name,
			'sort' : sort,
			'is_visible' : is_visible,
			'show_type' : show_type,
			'spec_value_str' : spec_value_str,
		},
		success : function(data) {
			if (data["code"] > 0) {
				showMessage('success', "添加成功","<?php echo __URL('PLATFORM_MAIN/goods/goodsspeclist'); ?>");
			} else {
				showMessage('error', "添加失败");
				flag = false;
			}
		}
	});
}
/**
 * 改变展示方式
 */
function change_show_type(type){
	if(type==2){
		$("input[name='spec_value']").after('<input type="color" style="width:60px;margin-top:5px;" name="spec_value_data"/>');
	}else{
		$("input[name='spec_value']").next("input[type='color']").remove();
	}
}
</script>

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