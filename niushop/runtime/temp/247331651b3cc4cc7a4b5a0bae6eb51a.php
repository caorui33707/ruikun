<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:46:"template/platform\Goods\addGoodsAttribute.html";i:1513303781;s:27:"template/platform\base.html";i:1513303781;s:44:"template/platform\controlCommonVariable.html";i:1513303781;s:31:"template/platform\urlModel.html";i:1513303781;s:33:"template/platform\openDialog.html";i:1513303781;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="ADMIN_CSS/defau.css">
<style type="text/css">
.error {
	padding-left: 5px !important;
}
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
.w75{width:15%;}
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
.attr-choose-wrap label, .relate-norm label {
	cursor: pointer;
	float: left;
	margin: 0 15px 10px 0;
	padding: 0 10px;
	color: #636363;
	line-height: 28px;
}
.attr-choose-wrap label.current, .relate-norm label.current {
	color: #636363;
	background: url(../images/icon_choose.gif) no-repeat right bottom;
}
a:hover{
	text-decoration: none;
}
input{
	width:100px;
}
.selectbox{
	width:130px;
}
label {
	font-weight: normal;
}
.text {
	color: #fb6b5b;
}
.attr_table{
	position: fixed;
	top: 10%;
	left: 50%;
	z-index: 1050;
	width: 560px;
	margin-left: -280px;
	background-color: #ffffff;
	border: 1px solid #999;
	border: 1px solid rgba(0, 0, 0, 0.3);
	outline: none;	
	box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
	background-clip: padding-box;
}
.edit_top{
	padding: 0px 20px;
	line-height: 40px;
	background: #e5e5e5;
}
.addSpec{
	height: 40px;
	line-height: 40px;
	padding: 0px 10px;
}
.modal-header {
	padding: 9px 15px;
	border-bottom: 1px solid #eee;
}
.modal-footer {
	padding: 14px 15px 15px;
	margin-bottom: 0;
	text-align: right;
	background-color: #f5f5f5;
	border-top: 1px solid #ddd;
	border-radius: 0 0 6px 6px;
	box-shadow: inset 0 1px 0 #ffffff;
}
.w140{width:140px;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;padding:0;height:23px;line-height:26px;}
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
	<header class="panel-heading font-bold"> 添加类型 </header>
	<div class="panel-body">
		<div class="form-horizontal" id="goods_brand_form" name="form">
			<div class="form-group">
				<label class="col-sm-2 control-label">类型名称：</label>
				<div class="col-md-2">
					<input type="text" class="form-control" id="attr_name" name="attr_name" value="" required>
				</div>
<!-- 				<label class="col-md-8 error" for="brand_name" ></label> -->
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
				<label class="col-sm-2 control-label">属性排序：</label>
				<div class="col-md-1">
					<input type="text" class="form-control" id="sort" value="0" placeholder="0" onkeyup='this.value=this.value.replace(/\D/gi,"")' required>
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
				<div class="table">
					<label class="col-sm-2 control-label">关联规格：</label>
					<?php if($goodsguige != ''): ?>
					<div class="padding-top padding-left padding-right attr-choose-wrap clearfix" style="border-bottom: 1px dotted #e5e5e5;width: 83%;float: right;text-align: left;">
						<?php if(is_array($goodsguige['data']) || $goodsguige['data'] instanceof \think\Collection || $goodsguige['data'] instanceof \think\Paginator): if( count($goodsguige['data'])==0 ) : echo "" ;else: foreach($goodsguige['data'] as $key=>$v): ?>
						<label class="ralationguige" style="margin-top: 8px;"><input type="checkbox" value="<?php echo $v['spec_id']; ?>" name="spec"/><?php echo $v['spec_name']; ?></label>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="table">
				<div class="w100">
					<div class="col-sm-2 control-label"></div>
					<div class="inline-block w75">排序</div>
					<div class="inline-block w75">属性名称</div>
					<div class="inline-block w75">所属类型</div>
					<div class="inline-block w75">属性值</div>
					<div class="inline-block w75">是否筛选</div>
					<div class="inline-block w19">操作</div>
				</div>
				<div class="table-body">
					<div class="w100 value_data">
						<div class="col-sm-2 control-label"><label style="margin-left: 5px;"><input type="checkbox"></label></div>
						<div class="inline-block w75">
							<input type="text" name="value_sort_0" placeholder="0" onkeyup='this.value=this.value.replace(/\D/gi,"")' />
						</div>
						<div class="inline-block w75" style="width:14%;">
							<input type="text" name="value_name_0" />
							<span class="spec_box_0"></span>
						</div>
						
						<div class="inline-block w75">
							<select class="selectbox_0" id="type_0" onchange="updateAttrselectvalue(0,this);" style="width:110px;">
								<option value="1">输入框</option>
								<option value="2">单选框</option>
								<option value="3">复选框</option>
							</select>
						</div>
						<div class="inline-block w75 w140" id="value_0"></div>
						<input type="hidden" id="value_hidden_0" value="">
						<div class="inline-block w75" style="width:10%;">
							<a href="javascript:;" class="is_search is_search_0" is_search="1" onclick="tab_is_search(this)"><i class="fa fa-check text-success text-active"></i></a>
						</div>
						<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>
					</div>
				</div>
				<div><div class="col-sm-2 control-label"></div><a href="javascript:;" onclick="addSpecValue(this)"><i class="fa fa-plus"></i>&nbsp;&nbsp;添加一个属性</a></div>
			</div>
            
            <div class="line line-dashed line-lg pull-in"></div>
            
              <!-- 点击编辑弹出框开始 -->
				<div class="attr_table" id="Attrbox" style="display:none;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h3 id="myModalLabel">编辑属性值</h3>
					</div>
					<div class="w100">
						<div class="inline-block w5"></div>
						<div class="inline-block w75" style="width:80%;">属性名称</div>
						<div class="inline-block w19">操作</div>
					</div>
					<div class="table-body">
						<div class="w100 Spec_data">
							<div class="inline-block w5"><label style="margin-left: 15px;"> <input type="checkbox"></label></div>
							<div class="inline-block w75" style="width:57%">
								<input type="text" name="attr_value" style="width:200px;">
							</div>
							<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>
						</div>
					</div>
					<div class="addSpec"><a href="javascript:;" onclick="addAttrSmallValue(this)"><i class="fa fa-plus"></i>&nbsp;&nbsp;添加一个属性</a></div>
						<div class="modal-footer">
							<input type="hidden" id="click_order"/>
							<button class="btn btn-info" onclick="submitAttrValue()" style="display:inline-block;">保存</button>
							<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
						</div>
					</div>
				<!-- 点击编辑弹出框结束 -->
          
				
			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-2">
					<button class="edit_button" onclick="addGoodsAttribute();">提交</button>
<!-- 					<a href="javascript:void(0);" onclick="addGoodsBrandAjax()" class="btn btn-primary">保存</a> -->
				</div>
			</div>
		</div>
	</div>
</section>

<script>
//点击改变是否可以编辑属性值
function updateAttrselectvalue(order,e){
	$("#Attrbox").hide();
	if($(e).val()==1){
		$(e).parents(".value_data").find(".spec_box_"+order).html('<a href="javascript:;" style="color: #777;"></a>');
	}else{
		$(e).parents(".value_data").find(".spec_box_"+order).html('<a href="javascript:;" id="showAttrbox_'+order+'" onclick="showAttrbox('+order+',this);">编辑属性值</a>');
	}
	$(e).parents(".value_data").find("#value_"+order).html('');
	$("#Attrbox .Spec_data:gt(0)").remove();
	$("#Attrbox .Spec_data").eq(0).find("input[name='attr_value']").val('');
}
//点击编辑属性值弹出框事件
function showAttrbox(order,e){
	var click_order = $("#click_order").attr('click_order',order);
	var value_str = $(e).parents(".value_data").find("#value_"+order).text();
	if(value_str != undefined){
		var value_arr = value_str.split(',');
		var html = '';
		for(var i=0; i<value_arr.length; i++){
			html += '<div class="w100 Spec_data">';
			html += '<div class="col-sm-2 control-label"><label style="margin-left: 15px;"> <input type="checkbox"></label></div>';
			html += '<div class="inline-block w75" style="width:57%">';
			html += '<input type="text" name="attr_value" style="width:200px;margin-left:4px;line-height:normal;margin-top:7px;" value="'+value_arr[i]+'">';
			html += '</div>';
			html += '<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>';
			html += '</div>';
		}
	}else{
		var html = '';
		html += '<div class="w100 Spec_data">';
		html += '<div class="inline-block w5"><label style="margin-left: 15px;"> <input type="checkbox"></label></div>';
		html += '<div class="inline-block w75" style="width:57%">';
		html += '<input type="text" name="attr_value" style="width:200px;margin-left:4px;line-height:normal;margin-top:7px;" value="">';
		html += '</div>';
		html += '<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>';
		html += '</div>';
	}
	$(".Spec_data").remove();
	$(".attr_table .table-body").append(html);
	$("#Attrbox").show();
}
$(".close").click(function(){
	$("#Attrbox").hide();
})
$(".btn").click(function(){
	$("#Attrbox").hide();
})

function tab_is_search(e){
	var type = $(e).attr("is_search");
	if(type == 0){
		$(e).html('<i class="fa fa-check text-success text-active"></i>');
		$(e).attr("is_search", 1);
	}else{
		$(e).html('<i class="fa fa-times text-danger text"></i>');
		$(e).attr("is_search", 0);
	}
}
function submitAttrValue(){
	var click_order = $("#click_order").attr('click_order');
	var attr_value_obj = $("input[name='attr_value']");
	var attr_value_str = '';
	attr_value_obj.each(function(i){
		if(attr_value_obj.eq(i).val() != ''){
			attr_value_str += ',' + $.trim(attr_value_obj.eq(i).val());
		}
	});
	attr_value_str = attr_value_str.substr(1);
	$("#value_"+click_order).text(attr_value_str);
	$("#value_hidden_"+click_order).val(attr_value_str);
}
function addAttrSmallValue(e){
	var spec_data_num = $(".Spec_data").length;
	var html = '<div class="w100 Spec_data">';
	html += '<div class="col-sm-2 control-label"><label style="margin-left: 15px;"> <input type="checkbox" style=""></label></div>';
	html += '<div class="inline-block w75" style="width:57%">';
	html += '<input type="text" name="attr_value" style="width:200px;margin-left: 4px;line-height:normal;margin-top:7px;">';
	html += '</div>';
	html += '<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>';
	html += '</div>';
	$(e).parents(".attr_table").find(".table-body").append(html);
}
function addSpecValue(e){
	var data_obj_num = $(".value_data").length;
	var html = '<div class="w100 value_data">';
	html += '<div class="col-sm-2 control-label"><label style="margin-left: 5px;"> <input type="checkbox" style=""></label></div>';
	html += '<div class="inline-block w75" style="margin-right: 4px;padding-top: 7px;">';
	html += '<input type="text" name="value_sort_'+data_obj_num+'" onkeyup=\'this.value=this.value.replace(/\D/gi,"")\'>';
	html += '</div>';
	html += '<div class="inline-block w75" style="margin-right: 5px;width:14%;">';
	html += '<input type="text" name="value_name_'+data_obj_num+'" style="margin-right:5px;"><span class="spec_box_'+data_obj_num+'"></span>';
	html += '</div>';
	html += '<div class="inline-block w75" style="margin-right: 5px;">';
	html += '<select class="selectbox_'+data_obj_num+'" id="type_'+data_obj_num+'" style="width:110px;" onchange="updateAttrselectvalue('+data_obj_num+',this);">';
	html += '<option value="1">输入框</option>';
	html += '<option value="2">单选框</option>';
	html += '<option value="3">复选框</option>';
	html += '</select>';
	html += '</div>';
	html += '<div class="inline-block w75 w140" style="margin-right: 4px;" id="value_'+data_obj_num+'">';
	html += '</div>';
	html += '<input type="hidden" id="value_hidden_'+data_obj_num+'" value="">';
	html += '<div class="inline-block w75" style="margin-right: 5px;width:10%;">';
	html += '<a href="javascript:;" class="is_search is_search_'+data_obj_num+'"  is_search="1" onclick="tab_is_search(this)"><i class="fa fa-check text-success text-active"></i></a>';
	html +='</div>';
	html += '<div class="inline-block w19"><a href="javascript:;" onclick="delSpecValue(this)">删除</a></div>';
	html += '</div>';
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
function validation() {
	var attr_name = $("#attr_name");
	if (attr_name.val() == "") {
		attr_name.focus().next("span").show();
		return false;
	} else {
		attr_name.next("span").hide();
	}
	
	return true;
}
//编辑属性弹出框
$("#showAttrbox").click(function(){
// 	$("#Attrbox").show();
})

var flag = false;//防止重复提交
function addGoodsAttribute() {
	var attr_name = $.trim($("#attr_name").val());
	if(attr_name == ''){
		$("#attr_name").focus();
		showMessage('error',"类型名称不能为空");
		return false;
	}
	var sort = $("#sort").val();
	if ($("#is_visible").prop("checked")) {
		var is_visible = 1;
	} else {
		var is_visible = 0;
	}
	
	var select_box = '';
	$("input[name='spec']:checked").each(function(){
		select_box = select_box+','+$(this).val();
	});
	select_box = select_box.substring(1);
	
	var data_obj = $(".value_data");
	var data_obj_str = '';
	data_obj.each(function(i){
		if(data_obj.eq(i) != ''){
			var value_sort = $("input[name='value_sort_"+i+"']").val();
			var value_name = $.trim($("input[name='value_name_"+i+"']").val());
			var type = $("#type_"+i).val();
			var value = $("#value_hidden_"+i).val();
			if(type > 1){
				if(value == ''){
					$("#type_"+i).focus();
					showMessage('error',"类型为单选框或复选框时，属性值不能为空");
					flag = true;
					return false;
				}else{
					flag = false;
				}
			}
			var is_search = $(".is_search_"+i).attr("is_search");
			var new_str = '';
			new_str = value_name+ '|' +type+ '|' +value_sort+ '|' +is_search+ '|' +value;
			
			data_obj_str = data_obj_str + ';' + new_str;
		}
	});
	data_obj_str = data_obj_str.substr(1);
	var data_obj_arr = data_obj_str.split('|');
	if(data_obj_arr[0] == ''){
		showMessage('error',"商品类型属性名称不能为空！");
		return false;
	}
	
	if(flag){
		return;
	}
	flag = true;
	$.ajax({
		type : "post",
		url : "<?php echo __URL('PLATFORM_MAIN/goods/addattributeservice'); ?>",
		data : {
			'attr_name' : attr_name,
			'sort' : sort,
			'is_visible' : is_visible,
			'select_box' :select_box,
			'data_obj_str' : data_obj_str
		},
		success : function(data) {
			if (data["code"] > 0) {
				showMessage('success', "添加成功","<?php echo __URL('PLATFORM_MAIN/goods/attributelist'); ?>");
			} else {
				showMessage('error', "添加失败");
				flag = false;
			}
		}
	});
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