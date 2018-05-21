<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:37:"template/platform\Wchat\addMedia.html";i:1513303781;s:27:"template/platform\base.html";i:1513303781;s:44:"template/platform\controlCommonVariable.html";i:1513303781;s:31:"template/platform\urlModel.html";i:1513303781;s:33:"template/platform\openDialog.html";i:1513303781;}*/ ?>
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
							
<style>
.media {
	max-width: 800px;
	margin: 0 auto;
}

.media:after {
	content: "";
	display: table;
	clear: both;
}

.img-text {
	display: block;
	width: 100%;
	line-height: 120px;
	background: #ececec;
	text-align: center;
	font-size: 22px;
	color: #c0c0c0;
	font-weight: 400;
}

.media-left {
	width: 30%;
	margin-right: 2%;
}

.media-right {
	width: 60%;
	background: #f8f8f8;
	border: 1px solid #d3d3d3;
	border-radius: 5px;
	padding: 15px;
}

.media-left, .media-right {
	float: left;
}

.media-border {
	padding: 10px;
	border: 1px solid #d3d3d3;
	border-radius: 5px;
}

.media-border-title {
	padding: 10px;
	border: 1px solid #d3d3d3;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	position: relative;
}

.media-body {
	padding: 10px;
	border-bottom: 1px solid #d3d3d3;
	border-left: 1px solid #d3d3d3;
	border-right: 1px solid #d3d3d3;
	position: relative;
}

.media-body:after {
	content: "";
	display: table;
	clear: both;
}

.media-body p {
	width: 65%;
	float: left;
}

.media-body .media-body-div {
	width: 30%;
	float: right;
}

.media-body .media-body-div span {
	font-size: 16px;
	line-height: 62px;
}

.media-body .media-plus {
	font-size: 22px;
	line-height: 62px;
	text-align: center;
	display: block;
}

.actions{
	position: absolute;
	bottom: 0;
	right: 0;
	width: 100%;
	height: 100%;
	background-color: #e5e5e5;
	opacity: 0.4;
	color: #fff;
	text-align: right;
	z-index: 49;
	display: none;
}

.actions span{
	display: inline-block;
	background-color: rgba(0, 0, 0, 0.8);
	padding: 0 5px;
	color: #fff;
	z-index: 50;
	margin-left: 5px;
}

.edit, .del {
	cursor: pointer;
}
.editting{display:none;}
.action .editting{display:block;color:red;text-align:right;}
</style>
<script type="text/javascript" charset="utf-8" src="PLATFORM_JS/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="PLATFORM_JS/ueditor/ueditor.all.js"></script>
<section class="panel panel-default">
	<header class="panel-heading font-bold"> 添加素材 </header>
	<div class="col-lg-12">
		<div class="m-b-sm">
			<div class="btn-group">
				<label class="btn btn-sm btn-info"> <input type="radio"
					name="type" id="type1" value="1"> <i
					class="fa fa-check text-active"></i> 文本
				</label> <label class="btn btn-sm btn-success"> <input type="radio"
					name="type" id="type2" value="2"> <i
					class="fa fa-check text-active"></i> 单图文
				</label> <label class="btn btn-sm btn-primary"> <input type="radio"
					name="type" id="type3" value="3" checked> <i
					class="fa fa-check text-active"></i> 多图文
				</label>
			</div>
		</div>
		<div class="row type1" style="display:none;">
			<form class="form-horizontal" method="get">
				<div class="form-group">
					<label class="col-sm-2 control-label">描述</label>
					<div class="col-md-4">
						<textarea id="type1_desc" class="form-control"
							style="overflow: scroll; height: 150px; max-height: 150px"></textarea>
					</div>
				</div>
			</form>
		</div>
		<div class="type2 media"  style="display: none;">
	<div class="media-left">
		<div class="media-border">
			<h5 class="type-title">标题</h5>
			<div style="text-align:center;">
				<img class="type2-img" src="" style="max-width:218px;max-height:120px;display:none;">
				<span class="img-text">封面图片</span>
			</div>
		</div>
	</div>
	<div class="media-right">
		<p> <span style="color:red;"> * </span> 标题 </p>
		<input style="width: 98%;" type="text" id="title" value="">
		<p>作者（选填）</p>
		<input style="width: 98%;" type="text" id="author" value="">
		<p>
			<span style="color:red;"> *</span> 封面 
		</p>
		<div>
			<div class="class-logo" style="background: #f8f8f8;">
				<p style="width: 270px; height: 150px;">
					<img id="imgLogo" src="" style="max-width:270px;max-height:150px;">
				</p>
			</div>
			<p class="hint">
				<span style="color: orange;">建议使用宽900像素-高500像素的图片。</span>
			</p>
			<input type="hidden" id="type2-img-hidden" value=""/>
			<div class="ncsc-upload-btn">
				<a href="javascript:void(0);"><span> <input
						hidefocus="true" size="1" class="input-file" name="file_upload"
						id="uploadImg" nc_type="change_store_label" type="file"
						onchange="imgUpload(this, 'type2-img', 'type2-img-hidden');"> <input type="hidden"
						id="Logo" value=""/></span>
				<p>
						<i class="fa fa-upload"></i>上传图片
					</p> </a>
			</div>
		</div>
		<p></p>
		<p>
			<input type="checkbox" id="show_cover_pic"
				style="margin-top: -2px; margin-right: 5px;"><label
				for="show_cover_pic"
				style="font-weight: normal; display: inline-block;">封面图片显示在正文中</label>
		</p>
		<p><span style="color:red;"> *</span> 摘要</p>
		<p>
			<textarea id="desc" style="width: 98%;"></textarea>
		</p>
		<p class="error">请输入模块描述</p>
		<p><span style="color:red;"> *</span> 正文</p>
		<div class="controls" id="discripContainer">
			<textarea id="tareaProductDiscrip1" name="discripArea"
				style="height: 100px; width: 100%; display: none;"></textarea>
			<script id="editor" type="text/plain"
				style="width: 100%; height: 100px;"></script>
			<span class="help-inline" style="display: none; color: red;">请输入商品描述</span>
		</div>
		<p></p>
		<p>原文链接</p>
		<input style="width: 98%;" type="text" id="content_source_url"
			value="">
	</div>
</div>
<div class="type3 media">
	<div class="media-left">
		<div class="media-border-title js-action action" onmouseover="show(this)"
			onmouseout="hide(this)" onclick="edit(this, 0)">
			<div style="position: relative;text-align:center;">
				<img class="type3-img-0" src="" style="max-width:218px;max-height:120px;display:none;">
				<span class="img-text">封面图片</span>
				<h5 class="type3-title-0" 
					style="position: absolute; bottom: 0; width: 100%; background: #bbb; color: #fff; margin: 0; padding: 5px 0;text-align:left;">标题</h5>
			</div>
			<div class="actions"><span class="edit">编辑</span></div>
			<span class="editting">编辑中</span>
			<input type="hidden" name="hidden0" id="title0" value="">
			<input type="hidden" name="hidden0" id="author0" value="">
			<input type="hidden" name="hidden0" id="cover0" value="">
			<input type="hidden" name="hidden0" id="show_cover_pic0" value="">
			<input type="hidden" name="hidden0" id="summary0" value="">
			<input type="hidden" name="hidden0" id="content0" value="">
			<input type="hidden" name="hidden0" id="content_source_url0" value="">
		</div>
		<div class="media-body js-action" onmouseover="show(this)"
			onmouseout="hide(this)" onclick="edit(this, 1)">
			<p class="type3-title-1">标题</p>
			<div class="media-body-div">
				<img class="type3-img-1" src="" style="max-width:62px;max-height:62px;display:none;">
				<span class="img-text">缩略图</span>
			</div>
			<div class="actions"><span class="edit">编辑</span></div>
			<span class="editting">编辑中</span>
			<input type="hidden" name="hidden1" id="title1" value="">
			<input type="hidden" name="hidden1" id="author1" value="">
			<input type="hidden" name="hidden1" id="cover1" value="">
			<input type="hidden" name="hidden1" id="show_cover_pic1" value="">
			<input type="hidden" name="hidden1" id="summary1" value="">
			<input type="hidden" name="hidden1" id="content1" value="">
			<input type="hidden" name="hidden1" id="content_source_url1" value="">
		</div>
		<div class="media-body">
			<span class="media-plus"><a href="javascript:;"><i
					class="fa fa-plus"></i></a></span>
		</div>
	</div>
	<div class="media-right" id="dir" dir="0">
		<p>标题</p>
		<input style="width: 98%;" type="text" id="form_title" value=""
			onchange="changeElement('title')">
		<p>
		<p>作者</p>
		<input style="width: 98%;" type="text" id="form_author" value=""
			onchange="changeElement('author')">
		<p>
			封面<span></span>
		</p>
		<div>
			<div class="class-logo" style="background: #f8f8f8;">
				<p style="width: 270px; height: 150px;">
					<img id="imgLogo1" src=""  style="max-width:270px;max-height:150px;">
				</p>
			</div>
			<p class="hint">
				<span style="color: orange;">建议使用宽900像素-高500像素的图片。</span>
			</p>
			<div class="ncsc-upload-btn">
				<a href="javascript:void(0);"><span> <input
						hidefocus="true" size="1" class="input-file" name="file_upload"
						id="uploadImg1" nc_type="change_store_label" type="file"
						onchange="imgUpload(this, 'type3-img-', 'cover');"> <input type="hidden"
						id="Logo1" value=""/></span>
				<p>
						<i class="fa fa-upload"></i>上传图片
					</p> </a>
			</div>
		</div>
		<p></p>
		<p>
			<input type="checkbox" id="form_show_cover_pic" onchange="changeElement('show_cover_pic')"
				style="margin-top: -2px; margin-right: 5px;"><label
				for="show_cover_pic"
				style="font-weight: normal; display: inline-block;">封面图片显示在正文中</label>
		</p>
		<p>摘要</p>
		<p>
			<textarea id="form_summary" style="width: 98%;" onchange="changeElement('summary')"></textarea>
		</p>
		<p class="error">请输入模块描述</p>
		<p>正文</p>
		<div class="controls" id="discripContainer">
			<textarea id="tareaProductDiscrip" name="discripArea"
				style="height: 100px; width: 100%; display: none; "></textarea>
			<script id="editor1" type="text/plain"
				style="width: 100%; height: 100px;"></script>
			<span class="help-inline" style="display: none; color: red;">请输入商品描述</span>
		</div>
		<p></p>
		<p>原文链接</p>
		<input style="width: 98%;" type="text" id="form_content_source_url"
			value="" onchange="changeElement('content_source_url')">
	</div>
</div>
		<div class="row">
		<div class="panel-body">
		<div class="form-group">
					<div class="col-sm-4 col-sm-offset-2">
						<a href="javascript:void(0);" onclick="save()"
							class="btn btn-primary">保存</a>
					</div>
			</div>	</div></div>
	</div>
</section>
<script>
UE.getEditor('editor1').addListener("selectionchange",function(){
	changeElement('content');
});
function changeElement(name){
// 	alert(name);
	var dir = $("#dir").attr('dir');
	if(name == 'show_cover_pic'){
		if($("#form_"+name).prop("checked")){
			var form_show_cover_pic = 1;
		}else{
			var form_show_cover_pic = 0;
		}
		$("#"+name+dir).val(form_show_cover_pic);
	}else if(name == 'content'){
		var content = UE.getEditor('editor1').getContent();
		$("#"+name+dir).val(content);
	}else{
		$("#"+name+dir).val($("#form_"+name).val());
	}
	if(name == 'title'){
		if($("#form_"+name).val() == ''){
			$(".type3-title-"+dir).html('标题');
		}else{
			$(".type3-title-"+dir).html($("#form_"+name).val());
		}
	}
}
function edit(event, num){
	$(".js-action").removeClass('action');
	$(event).addClass('action');
	$("#dir").attr('dir',num);
	//获取 隐藏域中的值
	var title = $("#title"+num).val();
	var author = $("#author"+num).val();
	var cover = $("#cover"+num).val();
	var show_cover_pic = $("#show_cover_pic"+num).val();
	var summary = $("#summary"+num).val();
	var content = $("#content"+num).val();
	var content_source_url = $("#content_source_url"+num).val();
	//把 form 的值填进去
	$("#form_title").val(title);
	$("#form_author").val(author);
	$("#imgLogo1").attr('src','__UPLOAD__/'+cover);
	if(show_cover_pic == 1){
		$("#form_show_cover_pic").prop("checked","checked");
	}else{
		$("#form_show_cover_pic").prop("checked","");
	}
	
	$("#form_summary").val(summary);
	UE.getEditor('editor1').setContent(content);
	$("#form_content_source_url").val(content_source_url);
	
// 	alert(title);
// 	alert(author);
// 	alert(cover);
// 	alert(show_cover_pic);
// 	alert(summary);
// 	alert(content);
// 	alert(content_source_url);
}
function save(){
	var type = $("input[type='radio'][name='type']:checked").val();
	if(type == 1){
		//文本提交
		var title = $("#type1_desc").val();
		var content = '';
	}else if(type == 2){
		// 单图文 提交
		var title = $("#title").val();
		var author = $("#author").val();
		var cover = $("#type2-img-hidden").val();
		if($("#show_cover_pic").prop("checked")){
			var show_cover_pic = 1;
		}else{
			var show_cover_pic = 0;
		}
		var summary = $("#desc").val();
		var content = UE.getEditor('editor').getContent();
		var content_source_url = $("#content_source_url").val();
		var contents = title+'`|`'+author+'`|`'+cover+'`|`'+show_cover_pic+'`|`'+summary+'`|`'+content+'`|`'+content_source_url;
		if(title == ''){
			showMessage('error', '标题不能为空');
			return false;
		}else if(cover == ''){
			showMessage('error', '请上传封面图片');
			return false;
		}else if(summary == ''){
			showMessage('error', '摘要不能为空');
			return false;
		}else if(content == ''){
			showMessage('error', '正文不能为空');
			return false;
		}
// 		return false;
	}else if(type == 3){
		// 多图文提交
		var title = $("#title0").val();
		var contents = '';
		var num = $(".js-action").length;
		for(var i=0; i<num; i++){
			var content_new = '';
			$("input[name='hidden"+i+"']").each(function(){
				if($("input[name='hidden"+i+"']").eq(0).val() == ""){
					showMessage('error', '第'+(i+1)+'篇文章的标题不能为空');
					return false;
				}else if($("input[name='hidden"+i+"']").eq(2).val() == ""){
					showMessage('error', '第'+(i+1)+'篇文章的封面图片不能为空');
					return false;
				}else if($("input[name='hidden"+i+"']").eq(4).val() == ""){
					showMessage('error', '第'+(i+1)+'篇文章的摘要不能为空');
					return false;
				}else if($("input[name='hidden"+i+"']").eq(5).val() == ""){
					showMessage('error', '第'+(i+1)+'篇文章的正文不能为空');
					return false;
				}else{
					content_new = content_new +'`|`'+ $(this).val();
				}
			});
			content_new = content_new.substring(3);
			contents = contents +'`$`'+ content_new;
		}
		contents = contents.substring(3);
	}else{
		showMessage('error', '请选择消息类型');
		return false;
	}
	//类型,标题,content
	//content = 标题,作者,封面图片,显示在正文,摘要,正文,链接地址;标题,作者,封面图片,显示在正文,摘要,正文,链接地址
	$.ajax({
			type : "post",
			url : "<?php echo __URL('PLATFORM_MAIN/wchat/addmedia'); ?>",
			async : true,
			data : {
				"type" : type, "title" : title, "content" : contents
			},
			success : function(data) {
				if(data['code'] > 0){
					showMessage('success', data['message'], "<?php echo __URL('PLATFORM_MAIN/Wchat/materialMessage'); ?>");
				}else{
					showMessage('error', data['message']);
				}
			}
	});
}

	$(".media-plus").click(
					function() {
						var num = $(this).parents(".media-left").find(
								".media-body").length;
						if (num > 7) {
							showMessage('error', '最多只可以加入8条图文消息。');
							return false;
						}
						var html = '';
							html += '<div class="media-body js-action" onmouseover="show(this)" onmouseout="hide(this)" onclick="edit(this, '+num+')">';
							html += '<p class="type3-title-'+num+'">标题</p><div class="media-body-div"><img class="type3-img-'+num+'" src="" style="max-width:62px;max-height:62px;display:none;"><span class="img-text">缩略图</span></div>';
							html += '<div class="actions"><span class="edit">编辑</span><span class="del">删除</span></div>';
							html += '<span class="editting">编辑中</span>';
							html += '<input type="hidden" name="hidden'+num+'" id="title'+num+'" value="">';
							html += '<input type="hidden" name="hidden'+num+'" id="author'+num+'" value="">';
							html += '<input type="hidden" name="hidden'+num+'" id="cover'+num+'" value="">';
							html += '<input type="hidden" name="hidden'+num+'" id="show_cover_pic'+num+'" value="">';
							html += '<input type="hidden" name="hidden'+num+'" id="summary'+num+'" value="">';
							html += '<input type="hidden" name="hidden'+num+'" id="content'+num+'" value="">';
							html += '<input type="hidden" name="hidden'+num+'" id="content_source_url'+num+'" value="">';
							html += '</div>';
						$(this).parents(".media-left").find(".media-body").eq(
								num - 2).after(html);
					});



	/**
	 *图片上传
	 */
	function imgUpload(event, imgsrc, imghidden) {
		if(imghidden == 'cover'){
			var dir = $("#dir").attr('dir');
			imgsrc = imgsrc+dir;
			imghidden = imghidden+dir;
		}
		var fileid = $(event).attr("id");
		var str = $(event).next().attr("id");
// 		fileCommonUpload("UPLOAD_URL", fileid, "__UPLOAD__", str);
		var url = 'PLATFORM_MAIN';
		var path = '__UPLOAD__';
		var result='';
		var imgpath = "#img"+str;
		var imgval = "#"+str;
// 		var a = 
// 		alert(a);
// 		return false;
		var data = { 'file_path' : UPLOADCOMMON };
		uploadFile(fileid,data,function(res){
			if(res.code){
				$("."+imgsrc).attr("src","__UPLOAD__/"+res.data);
				$("."+imgsrc).show();
				$("."+imgsrc).next(".img-text").hide();
				$("#"+imghidden).val(res.data);
				$(imgpath).attr("src","__UPLOAD__/"+res.data);
				$(imgval).val(res.data);
				showTip(res.message,"success");
			}else{
				showTip(res.message,"error");
			}
		});
/* 		$.ajaxFileUpload({
			url : url+'/Upload/fileCommonUpload', //用于文件上传的服务器端请求地址
			secureuri : false, //一般设置为false
			fileElementId : fileid, //文件上传空间的id属性  <input type="file" id="file" name="file" />
			dataType : 'text', //返回值类型 一般设置为json
			async : false,
			contentType : "text/json;charset=utf-8",
			success : function(data) //服务器成功响应处理函数
			{
				if (data) {		
					$("."+imgsrc).attr("src",path+"/"+data);
					$("."+imgsrc).show();
					$("."+imgsrc).next(".img-text").hide();
					$("#"+imghidden).val(data);
					$(imgpath).attr("src",path+"/"+data);
					$(imgval).val(data);	
// 					$(event).parents(".media").find("img.type-img").attr("src",path+"/"+data);
					showMessage('success', '上传成功',"#");
				}else{
					showMessage('error', '上传失败');
				}
			}
		}); */
	}
	$("#title").change(function(){
		if($(this).val() == ''){
			$(this).parents(".media").find("h5.type-title").html('标题');
		}else{
			$(this).parents(".media").find("h5.type-title").html($(this).val());
		}
	});
</script>
<script>
/**
 * 点击消息类型  切换表单
*/
$("input[type=radio][name='type']").click(function(){
	var type = $(this).val();
	$(".type1").hide();
	$(".type2").hide();
	$(".type3").hide();
	$(".type"+type).show();
});
var ue = UE.getEditor('editor');
var ue1 = UE.getEditor('editor1');
function show(event) {
	$(event).children('.actions').show();
}
function hide(event) {
	$(event).children('.actions').hide();
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