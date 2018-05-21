<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:50:"template/adminblue\System\goodsRecommendClass.html";i:1513303781;s:28:"template/adminblue\base.html";i:1513303780;s:45:"template/adminblue\controlCommonVariable.html";i:1513303780;s:32:"template/adminblue\urlModel.html";i:1513303781;s:34:"template/adminblue\pageCommon.html";i:1513303781;s:34:"template/adminblue\openDialog.html";i:1513303780;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
	<?php if($frist_menu['module_name']=='首页'): ?>
	<title><?php echo $title_name; ?> - 商家管理</title>
	<?php else: ?>
		<title><?php echo $title_name; ?> - <?php echo $frist_menu['module_name']; ?>管理</title>
	<?php endif; ?>
	<link rel="shortcut  icon" type="image/x-icon" href="ADMIN_IMG/admin_icon.ico" media="screen"/>
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_blue_common.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/simple-switch/css/simple.switch.three.css" />
	<style>
	.Switch_FlatRadius.On span.switch-open{background-color: #0072D2;border-color: #0072D2;}
	</style>
	<script src="__STATIC__/js/jquery-1.8.1.min.js"></script>
	<script src="__STATIC__/blue/bootstrap/js/bootstrap.js"></script>
	<script src="__STATIC__/bootstrap/js/bootstrapSwitch.js"></script>
	<script src="__STATIC__/simple-switch/js/simple.switch.js"></script>
	<script src="__STATIC__/js/jquery.unobtrusive-ajax.min.js"></script>
	<script src="__STATIC__/js/common.js"></script>
	<script src="__STATIC__/js/seller.js"></script>
	<script src="__STATIC__/js/load_task.js"></script>
	<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
	<script src="ADMIN_JS/jquery-ui.min.js"></script>
	<script src="ADMIN_JS/ns_tool.js"></script>
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_table_style.css">
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
	
<script type="text/javascript" src="__STATIC__/My97DatePicker/WdatePicker.js"></script>
<style  type="text/css">
.goodsRecommend{
	width:100%;
	display:inline-block;
}
.goodsRecommend .panel-heading{
	height:40px;
	line-height:40px;
	margin-top:15px;
	background:#F9F9F9;
	padding:0 15px;
	color:#00C0FF;
}
.goodsRecommend .handle{
	display:inline-block;
	background:#FB6B5B;
	padding:0 8px;
	font-size:12px;
	color:#fff;
	margin:7px;
	line-height:25px;
	float:right;
}
.td{
	width:20%;
	text-align:center;
}
.set-style{
	width:100%;
}
.set-style dl{
	width:100%;
	font-size: 0;
	/* line-height: 20px; */
	clear: both;
	padding: 0;
	margin: 0;
	border-bottom: dotted 1px #e5e5e5;
	overflow: hidden;
}
.set-style dl dt{
	font-size: 12px;
	line-height: 32px;
	vertical-align: top;
	letter-spacing: normal;
	word-spacing: normal;
	text-align: right;
	display: inline-block;
	width: 19%;
	padding: 10px 1% 10px 0;
	margin: 0;
	font-weight:normal;
}
.set-style dl dd{
	
	font-size: 12px;
	line-height: 32px;
	vertical-align: top;
	letter-spacing: normal;
	word-spacing: normal;
	display: inline-block;
	width: 78%;
	padding: 10px 0 10px 0;
}
.set-style dl dd input[type="text"]{
	font: 12px/20px Arial;
	color: #777;
	background-color: #FFF;
	vertical-align: top;
	display: inline-block;
	height:24px;
	line-height:24px;
	padding: 4px;
	border: 1px solid #CCC;
	outline: 0 none;
	width: 400px;
	margin:0;
}
.set-style dl dd textarea{
font: 12px/20px Arial;
color: #777;
background-color: #FFF;
vertical-align: top;
display: inline-block;
height: 60px;
padding: 4px;
border: solid 1px #CCC;
outline: 0 none;
	width: 400px;
	margin:0;
}
.hint{
font-size: 12px;
line-height: 16px;
color: #BBB;
margin-top: 10px;
}
.set-style dl dd p img{
	border: medium none;
	vertical-align: middle;
}
.info{
	width:405px;
	color: #c09853;
background-color: #fcf8e3;
border-color: #faebcc;
	padding: 8px;
border: 1px solid transparent;
border-radius: 4px;
}
.alert-goods-info{
	padding:5px;
	width:80px;
	height:110px;
	background:#D9EDF7;
	border:1px solid #BCE8F1;
	float:left;
	margin-right:2px;
}
.alert-goods-info img{
	display:block;
	margin:20px auto 0 auto;
}
.goods-name{
	display:block;
	white-space:nowrap;
	overflow:hidden; 
	text-overflow:ellipsis;
	text-align:center;
	margin-top:3px;
}
.search-goods-info{
	padding:5px;
	width:80px;
	height:110px;
	border:1px dashed #ddd;
	float:left;
	margin:5px 5px 0 0;
	cursor:pointer;
}

.table tr .td img{
	width:100px;
	display:inline-block;
}
.goods-logo-class{
	width:100%;
	margin-left:10px;
}
.goods-logo-class ul{
	overflow:hidden;
	margin: 0px;
}
.goods-logo-class ul li{
	float:left;	
	width:20%;
	cursor:pointer;
}
.imglogo{
	width:100%;
	margin:0 auto;
}
.mlr15{
	margin:0;
}
</style>

 
	</head>
<body>
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<input type="hidden" id="niushop_admin_model" value="<?php echo admin_model(); ?>">
<script>
function __URL(url){
	url = url.replace('SHOP_MAIN', '');
	url = url.replace('APP_MAIN', 'wap');
	url = url.replace('ADMIN_MAIN', $("#niushop_admin_model"));
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
<article class="ns-base-article">

	<aside class="ns-base-aside">
		<div class="ns-logo" onclick="location.href='<?php echo __URL('ADMIN_MAIN'); ?>';"></div>
		<div class="ns-main-block">
			<header>
				<article class="ns-base-user">
					<div class="ns-head-portrait">
						<?php if($user_headimg != ''): ?>
						<img src="<?php echo __IMG($user_headimg); ?>"/>
						<?php else: ?>
						<img src="__STATIC__/blue/img/head_portrait_default.png"/>
						<?php endif; ?>
					</div>
					<div class="ns-base-info">
						<span>欢迎您：<?php echo $user_name; ?></span>
						<span>角色：<?php echo $group_name; ?></span>
					</div>
				</article>
				<a href="#edit-password" data-toggle="modal" title="修改密码">修改密码</a>
				<a href="<?php echo __URL('ADMIN_MAIN/login/logout'); ?>" title="安全退出">安全退出</a>
			</header>
			<nav>
				<ul>
					<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
					<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
					<?php else: ?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</nav>
			<div style="height:50px;"></div>
			<div id="bottom_copyright">
				<footer>
					<img id="copyright_logo"/>
					<p>
						<span id="copyright_desc"></span>
						<br/>
						<span id="copyright_companyname"></span>
						<br/>
						<span id="copyright_meta"></span>
					</p>
				</footer>
			</div>
		</div>
	</aside>
	
	<section class="ns-base-section">
		<header class="ns-base-header">
			<div class="ns-search">
				<img src="__STATIC__/blue/img/nav_menu.png" title="导航管理" class="nav-menu js-nav" />
				<div class="ns-navigation-management">
					<div class="ns-navigation-title">
						<h4>导航管理</h4>
						<span>x</span>
					</div>
					<div style="height:40px;"></div>
					<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): if( count($nav_list)==0 ) : echo "" ;else: foreach($nav_list as $key=>$nav): ?>
					<dl>
						<dt><?php echo $nav['data']['module_name']; ?></dt>
						<?php if(is_array($nav['sub_menu']) || $nav['sub_menu'] instanceof \think\Collection || $nav['sub_menu'] instanceof \think\Paginator): if( count($nav['sub_menu'])==0 ) : echo "" ;else: foreach($nav['sub_menu'] as $key=>$nav_sub): ?>
						<dd onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$nav_sub['url']); ?>';"><?php echo $nav_sub['module_name']; ?></dd>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</dl>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<i class="ns-vertical-bar"></i>
				<div class="ns-search-block">
					<i class="fa fa-search" title="搜索"></i>
					<span>搜索</span>
					<div class="mask-layer-search">
						<input type="text" id="search_goods" placeholder="搜索" />
						<a href="javascript:search();"><img src="__STATIC__/blue/img/enter.png"/></a>
					</div>
				</div>
			</div>
			<nav>
				<ul>
					<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
					<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
						<span><?php echo $per['module_name']; ?></span>
						<?php if($per['module_id'] == 10000): ?>
							<span class="is-upgrade"></span>
						<?php endif; ?>
					</li>
					
					<?php else: ?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
						<span><?php echo $per['module_name']; ?></span>
						<?php if($per['module_id'] == 10000): ?>
							<span class="is-upgrade"></span>
						<?php endif; ?>
					</li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</nav>
			<div class="ns-base-tool">
				<div class="ns-help">
					<img src="__STATIC__/blue/img/user_admin_blue.png" width="30" >
					<!-- <i class="fa fa-question-circle-o"></i> -->
					<ul>
						<li title="前台首页" onclick="window.open('<?php echo __URL('SHOP_MAIN'); ?>')">
							<img src="__STATIC__/blue/img/home_pc.png"/>
							<a href="javascript:;">前台首页</a>
						</li>
						<li title="加入收藏" onclick="addFavorite()">
							<img src="__STATIC__/blue/img/add_favorites.png" />
							<a href="javascript:;">加入收藏</a>
						</li>
						<li title="清理缓存" onclick="delcache()">
							<img src="__STATIC__/blue/img/clear_the_cache.png"/>
							<a href="javascript:;">清理缓存</a>
						</li>
						<li title="退出登录" onclick="window.location.href='<?php echo __URL('ADMIN_MAIN/login/logout'); ?>'">
							<img src="__STATIC__/blue/img/loout.png"/>
							<a href="javascript:;">退出登录</a>
						</li>
					</ul>
				</div>
			</div>
		</header>
		
		
		
		<div style="position:relative;margin:10px 0;">
			<!-- 三级导航菜单 -->
			
			<nav class="ns-third-menu">
				<ul>
				<?php if(is_array($child_menu_list) || $child_menu_list instanceof \think\Collection || $child_menu_list instanceof \think\Paginator): if( count($child_menu_list)==0 ) : echo "" ;else: foreach($child_menu_list as $k=>$child_menu): if($child_menu['active'] == '1'): ?>
					<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
				<?php else: ?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</nav>
			
			
			<div class="right-side-operation">
				<ul>
					
<li><a href="javascript:void(0);" onclick="addBlock()"><i class="fa fa-plus-circle"></i>&nbsp;添加促销版块</a></li>

					
					<li <?php if($warm_prompt_is_show == 'show'): ?>style="display:none;"<?php endif; ?>><a class="js-open-warmp-prompt"><i class="fa fa-info-circle"></i>&nbsp;提示</a></li>
					
				</ul>
			</div>
		</div>
		<!-- 操作提示 -->
		
		<div class="ns-warm-prompt" <?php if($warm_prompt_is_show == 'hidden'): ?>style="display:none;"<?php endif; ?>>
			<div class="alert alert-info">
				<button type="button" class="close">&times;</button>
				<h4>
					<i class="fa fa-info-circle"></i>
					<span>操作提示</span>
				</h4>
				<div style="font-size:12px;text-indent:18px;">
					
						<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
						<?php echo $leftitem['module_name']; endif; endforeach; endif; else: echo "" ;endif; ?>
					
				</div>
			</div>
		</div>
		
		<div class="ns-main">
			
<div class="mb10 mlr15">
	<div class="tiphelp-info"><strong>提示：</strong>设置促销版块，设置方法如下：<br>
	点击“添加促销版块”按钮，在出现的下方列表中点击“编辑”按钮，按照要求输入相应内容，点击“保存”按钮，如果想要取消，点击“关闭”按钮即可，添加成功后会在前台首页轮播图下方显示所添加的版块内容。同时也可以进行删除操作。
	</div>
</div>
<div class="goodsRecommend">

	<?php if(!(empty($goods_recommend_class) || (($goods_recommend_class instanceof \think\Collection || $goods_recommend_class instanceof \think\Paginator ) && $goods_recommend_class->isEmpty()))): ?>
	<form id="block_list">
		<?php if(is_array($goods_recommend_class) || $goods_recommend_class instanceof \think\Collection || $goods_recommend_class instanceof \think\Paginator): if( count($goods_recommend_class)==0 ) : echo "" ;else: foreach($goods_recommend_class as $key=>$v): ?>
		<header class="panel-heading">
			<?php echo $v['class_name']; ?>
			<a href="javascript:void(0);" onclick="delGoodsRecommendClass(<?php echo $v['class_id']; ?>,this)" class="handle"><i class="fa fa-trash-o"></i>&nbsp; 删除 </a>
			<a href="javascript:void(0);" onclick="updateGoodsRecommendClass(<?php echo $v['class_id']; ?>)" class="handle" style="background:#01B044;"><i class="fa fa-cog"></i>&nbsp; 编辑 </a>
		</header>
		<div class="goods-logo-class">
			<ul>
			<?php if(!(empty($v['goods_list']) || (($v['goods_list'] instanceof \think\Collection || $v['goods_list'] instanceof \think\Paginator ) && $v['goods_list']->isEmpty()))): if(is_array($v['goods_list']) || $v['goods_list'] instanceof \think\Collection || $v['goods_list'] instanceof \think\Paginator): if( count($v['goods_list'])==0 ) : echo "" ;else: foreach($v['goods_list'] as $key=>$vg): ?>
			<li>
				<div style="width:80px;height:80px;">
				<img class="imglogo" src="<?php echo __IMG($vg['picture_info']['pic_cover_small']); ?>" alt="<?php echo $vg['goods_info']['goods_name']; ?>" title="<?php echo $vg['goods_info']['goods_name']; ?>"  style="border:1px dashed #e9e9e9;text-align:center;">
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; else: ?>
			<li>暂未选择商品</li>
			<?php endif; ?>
			</ul>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</form>
	<?php else: ?>
	<div class="tip-box">当前系统还未设置促销板块，<a href="javascript:void(0);" onclick="addBlock()">马上设置</a></div>
	<?php endif; ?>
</div>
<div class="goodsRecommend" id="add-goodsRecommend"></div>
<div class="modal fade hide" id="data" style="width:800px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" style="width:800px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>促销商品推荐</h3>
			</div>
			<div class="modal-body" style="height:700px;overflow:auto;">
				<div class="set-style">
					<dl>
						<dt><span class="color-red">*</span>模块名称</dt>
						<dd>
							<input type="hidden" class="form-control" id="class_id">
							<input type="text" class="form-control input-common" id="class_name" placeholder="请输入模块名称">
							<span class="error">请输入模块名称</span>
						</dd>
					</dl>
					<dl>
						<dt>排序</dt>
						<dd>
							<input type="text" class="form-control input-common" id="sort" onkeyup="this.value=this.value.replace(/\D/g,'')" placeholder="排序">
						</dd>
					</dl>
					<dl>
						<dt>已选商品</dt>
						<dd>
							<div class="info">
								<button type="button" class="close" data-dismiss="alert" style="margin-top:4px;">×</button>
								<p>单击查询出的商品选中，双击已选择的可以删除，最多5个，保存后生效。</p>
							</div>
						</dd>
						<dt></dt>
						<dd>
							<div id="goods_list"></div>
						</dd>
					</dl>
					<dl>
						<dt>选择要促销的商品:</dt>
						<dd></dd>
						<dt>选择分类</dt>
						<dd>
							<select name="account" class="form-control m-b category_first select-common" id="category_first_id" onchange="changeCategory(this, 1)" style="width:145px;height:34px;">
								<option value="0">商品分类一级</option>
								<?php if(is_array($category_list_1) || $category_list_1 instanceof \think\Collection || $category_list_1 instanceof \think\Paginator): $i = 0; $__LIST__ = $category_list_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc1): $mod = ($i % 2 );++$i;?>
									<option value="<?php echo $vc1['category_id']; ?>"><?php echo $vc1['category_name']; ?></option>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
							<select name="account" class="form-control m-b hide category_second select-common" id="category_second_id" onchange="changeCategory(this, 2)" style="width:145px;height:34px;">
								<option value="0">商品分类二级</option>
							</select>
							<select name="account" class="form-control m-b hide category_three select-common" id="category_three_id" onchange="changeCategory(this, 3)" style="width:145px;height:34px;">
								<option value="0">商品分类三级</option>
							</select>
						</dd>
						<dt>商品名称</dt>
						<dd>
							<input type="text" class="form-control input-common" id="search_info" placeholder="请输入商品名称">
							<button class="btn btn-primary" onclick="search_goods()">搜索</button>
						</dd>
					</dl>
					<dl>
						<dt></dt>
						<dd id="search_goods_list"></dd>
					</dl>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" onclick="save()">保存</button>
				<button class="btn" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>

			<script type="text/javascript" src="__STATIC__/js/jquery.cookie.js"></script>
<script src="__STATIC__/js/page.js"></script>
<div class="page" id="turn-ul" style="display: none;">
	<div class="pagination">
		<ul>
			<li class="total-data">共0有条数据</li>
			<li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="<?php echo $pagesize; ?>" data-default="<?php echo $pagesize; ?>" autocomplete="off"/>条</li>
			<li><a id="beginPage" class="page-disable" style="border: 1px solid #dddddd;">首页</a></li>
			<li><a id="prevPage" class="page-disable">上一页</a></li>
			<li id="pageNumber"></li>
			<li><a id="nextPage">下一页</a></li>
			<li><a id="lastPage">末页</a></li>
			<li class="page-count">共0页</li>
		</ul>
	</div>
</div>
<input type="hidden" id="page_count" />
<input type="hidden" id="page_size" />
<script>
/**
 * 保存当前的页面
 * 创建时间：2017年8月30日 19:29:20
 */
function savePage(index){
	var json = { page_index : index, show_number : $("#showNumber").val(), url :  window.location.href };
	$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
// 	console.log(json);
}

$(function() {
	try{
		
		$("#turn-ul").show();//显示分页
		var history_url = "";
		var json = { page_index : 1, show_number : <?php echo $pagesize; ?>, url :  window.location.href };
		var history_json = "";//用于临时保存分页数据
		if($.cookie('page_cookie') != undefined && $.cookie('page_cookie') != "" && $.cookie('page_cookie') != '""'){
			
			var cookie = eval("(" + $.cookie('page_cookie') + ")");
			if(cookie !=undefined && cookie != ""){
				json.page_index = cookie.page_index;
				if(cookie.show_number != undefined && cookie.show_number != "") json.show_number = cookie.show_number;
				else json.show_number = <?php echo $pagesize; ?>;
				history_url = cookie.url;
				history_json = cookie;
			}
			
		}else{
			
			savePage(json.page_index);
			
		}
		if(history_url != undefined && history_url != "" && history_url != json.url && json.page_index != 1){
			
			//如果页面发生了跳转，还原操作
			json.page_index = 1;
			json.show_number = <?php echo $pagesize; ?>;
			json.url = history_url;
// 			console.log("如果页面发生了跳转，还原操作");
			$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
		}

// 		console.log($.cookie('page_cookie'));
		$("#showNumber").val(json.show_number);
		if(json.page_index != 1) jumpNumber = json.page_index;
		LoadingInfo(json.page_index);//通过此方法调用分页类
		
	}catch(e){
		
		$("#turn-ul").hide();
		//当前页面没有分页，进行还原操作
		$.cookie('page_cookie',JSON.stringify(history_json),{ path: '/' });
// 		console.log(e);
// 		console.log("当前页面没有分页，进行还原操作");
// 		console.log($.cookie('page_cookie'));
		
	}
	
	//首页
	$("#beginPage").click(function() {
		if(jumpNumber!=1){
			jumpNumber = 1;
			LoadingInfo(1);
			savePage(1);
			changeClass("begin");
		}
		return false;
	});

	//上一页
	$("#prevPage").click(function() {
		var obj = $(".currentPage");
		var index = parseInt(obj.text()) - 1;
		if (index > 0) {
			obj.removeClass("currentPage");
			obj.prev().addClass("currentPage");
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			//判断是否是第一页
			if (index == 1) {
				changeClass("prev");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//下一页
	$("#nextPage").click(function() {
		var obj = $(".currentPage");
		//当前页加一（下一页）
		var index = parseInt(obj.text()) + 1;
		if (index <= $("#page_count").val()) {
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			obj.removeClass("currentPage");
			obj.next().addClass("currentPage");
			//判断是否是最后一页
			if (index == $("#page_count").val()) {
				changeClass("next");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//末页
	$("#lastPage").click(function() {
		jumpNumber = $("#page_count").val();
		if(jumpNumber>1){
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
			changeClass("next");
		}
		return false;
	});

	//每页显示页数
	$("#showNumber").blur(function(){
		if(isNaN($(this).val())){
			$("#showNumber").val(20);
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if($(this).val().indexOf(".") != -1){
			var index = $(this).val().indexOf(".");
			$("#showNumber").val($(this).val().substr(0,index));
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if(parseInt($(this).val())<=0){
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		//页数没有变化的话，就不要再执行查询
		if(parseInt($(this).val()) != $(this).attr("data-default")){
// 			jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
			$(this).attr("data-default",$(this).val());
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
		}
		return false;
	}).keyup(function(event){
		if(event.keyCode == 13){
			if(isNaN($(this).val())){
				$("#showNumber").val(20);
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
			//页数没有变化的话，就不要再执行查询
			if(parseInt($(this).val()) != $(this).attr("data-default")){
// 				jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
				$(this).attr("data-default",$(this).val());
				//总数据数量
				var total_count = parseInt($(".total-data").attr("data-total-count"));
				//计算用户输入的页数是否超过当前页数
				var curr_count = Math.ceil(total_count/parseInt($(this).val()));
				if( curr_count !=0 && curr_count < jumpNumber){
					jumpNumber = curr_count;//输入的页数超过了，没有那么多
				}
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
		}
		return false;
	});
});

//跳转页面
function JumpForPage(obj) {
	jumpNumber = $(obj).text();
	LoadingInfo($(obj).text());
	savePage($(obj).text());
	$(".currentPage").removeClass("currentPage");
	$(obj).addClass("currentPage");
	if (jumpNumber == 1) {
		changeClass("prev");
	} else if (jumpNumber < parseInt($("#page_count").val())) {
		changeClass();
	} else if (jumpNumber == parseInt($("#page_count").val())) {
		changeClass("next");
	}
}
</script>
		</div>
		
	</section>
</article>
	
<!-- 公共的操作提示弹出框 common-success：成功，common-warning：警告，common-error：错误，-->
<div class="common-tip-message js-common-tip">
	<div class="inner"></div>
</div>

<!--修改密码弹出框 -->
<div id="edit-password" class="modal hide fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="width:562px;top:50%;margin-top:-180.5px;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>修改密码</h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="pwd0" style="width: 160px;"><span class="color-red">*</span>原密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd0" placeholder="请输入原密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd1" style="width: 160px;"><span class="color-red">*</span>新密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd1" placeholder="请输入新密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd2" style="width: 160px;"><span class="color-red">*</span>再次输入密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd2" placeholder="请输入确认密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div style="text-align: center; height: 20px;" id="show"></div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn btn-primary" onclick="submitPassword()" style="display:inline-block;">保存</button>
		<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/jquery-ui-private.css">
<script>
var platform_shopname= '<?php echo $web_popup_title; ?>';
</script>
<script type="text/javascript" src="ADMIN_JS/jquery-ui-private.js" charset="utf-8"></script>
<script type="text/javascript" src="ADMIN_JS/jquery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
function showMessage(type, message,url,time){
	if(url == undefined){
		url = '';
	}
	if(time == undefined){
		time = 2;
	}
	//成功之后的跳转
	if(type == 'success'){
		$( "#dialog").dialog({
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
	if(type == 'error'){
		$( "#dialog").dialog({
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

function showConfirm(content){
	$( "#dialog").dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				return 1;
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
				return 0;
			}
		},
		contentText:content,
	});
}
</script>
<script src="ADMIN_JS/ns_common_base.js"></script>
<script src="__STATIC__/blue/js/ns_common_blue.js"></script>
<script>
$(function(){
	//顶部导航管理显示隐藏
	$(".ns-navigation-title>span").click(function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	$(".js-nav").toggle(function(){
		$(".ns-navigation-management").slideDown(400);
	},function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	//搜索展开
	$(".ns-search-block").hover(function(){
		if($(this).children(".mask-layer-search").is(":hidden")) $(this).children(".mask-layer-search").fadeIn(300);
	},function(){
		if($(this).children(".mask-layer-search").is(":visible")) $(this).children(".mask-layer-search").fadeOut(300);
	});
	
	$(".ns-base-tool .ns-help").hover(function(){
		if($(this).children("ul").is(":hidden")) $(this).children("ul").fadeIn(250);
	},function(){
		if($(this).children("ul").is(":visible")) $(this).children("ul").fadeOut(250);
	});
	
});

function addFavorite() {
	var url = window.location;
	var title = document.title;
	var ua = navigator.userAgent.toLowerCase();
	if (ua.indexOf("360se") > -1) {
		alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
	}else if (ua.indexOf("msie 8") > -1) {
		window.external.AddToFavoritesBar(url, title); //IE8
	}
	else if (document.all) {
		try{
			window.external.addFavorite(url, title);
		}catch(e){
			alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
		}
	}else if (window.sidebar) {
		window.sidebar.addPanel(title, url, "");
	}else {
		alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
	}
}

</script>

<script>
//改变商品分类触发事件
function changeCategory(event, level){
	var category_id = $(event).val();
	if(category_id == 0){
		$(event).parent().find(".category_second option:gt(0)").remove();
		$(event).parent().find(".category_three option:gt(0)").remove();
		return false;
	}
	if(level == 1){
		$(event).parent().find(".category_second").show(300);
		$(event).parent().find(".category_second option:gt(0)").remove();
		$(event).parent().find(".category_three option:gt(0)").remove();
		loadCategoryData(category_id, $(event).parent().find(".category_second"));
	}else if(level == 2){
		$(event).parent().find(".category_three").show(300);
		$(event).parent().find(".category_three option:gt(0)").remove();
		loadCategoryData(category_id, $(event).parent().find(".category_three"));
	}
}

// 加载数据
function loadCategoryData(category_id, obj){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/system/getgoodscategorylistajax'); ?>",
		data : { 'category_id' : category_id },
		success : function(data) {
			var html = '';
			if(data.length > 0){
				for(var i = 0; i < data.length; i++){
					html += '<option value="'+data[i]['category_id']+'">'+data[i]['category_name']+'</option>';
				}
			}
			$(obj).append(html);
		}
	});
}

/*
 * 添加促销版块
 */
function addBlock(){
	$(".tip-box").hide();
	$("#class_id").val(null);
	var num = $("#add-goodsRecommend").prev().find(".panel-heading").length;
	var show_type = "<?php echo $show_type; ?>";
	if(show_type == 0){
		if(num >4){
			showMessage('error','模块最多只能添加5个！');
		}else{
			var html = '';
			html += '<div class="goodsRecommend" id="recommendAdd">';
			html += '<header class="panel-heading">促销商品推荐 <a href="javascript:void(0);" onclick="delGoodsRecommendClass(0,this)" class="handle"><i class="fa fa-trash-o"></i>&nbsp; 删除 </a>';
			html += '<a href="javascript:void(0);" data-toggle="data" onclick="updateGoodsRecommendClass(0)" class="handle" style="background:#01B044;"><i class="fa fa-cog"></i>&nbsp; 编辑 </a></header>';
			html += '<table class="table table-striped m-b-none text-sm"><tbody align="center">';
			html += '<tr>';
			html += '</tr></table></div>';
			$("#add-goodsRecommend").html(html);
		}
	}else{
		var html = '';
		html += '<div class="goodsRecommend" id="recommendAdd">';
		html += '<header class="panel-heading">促销商品推荐 <a href="javascript:void(0);" onclick="delGoodsRecommendClass(0,this)" class="handle"><i class="fa fa-trash-o"></i>&nbsp; 删除 </a>';
		html += '<a href="javascript:void(0);" data-toggle="data" onclick="updateGoodsRecommendClass(0)" class="handle" style="background:#01B044;"><i class="fa fa-cog"></i>&nbsp; 编辑 </a></header>';
		html += '<table class="table table-striped m-b-none text-sm"><tbody align="center">';
		html += '<tr>';
		html += '</tr></table></div>';
		$("#add-goodsRecommend").html(html);
	}
	
}

/*
 * 编辑促销版块
 */
function updateGoodsRecommendClass(class_id){
	$("#data").modal("show");
	if(class_id > 0){
		$.ajax({
			type : 'post',
			url : "<?php echo __URL('ADMIN_MAIN/system/getgoodsrecommendclass'); ?>",
			data : {'class_id' : class_id},
			success : function(data){
				$("#class_name").val(data['class_name']);
				$("#sort").val(data['sort']);
				$("#class_id").val(class_id);
				goods_list_html = "";
			for(var i=0;i<data['goods_list'].length;i++){
					goods_list_html += '<div class="alert-goods-info" onDblClick="remove_selected_goods(this)">';
					goods_list_html += '<button type="button" class="close" data-dismiss="alert" style="color:#555;">×</button>';
					goods_list_html += '<input type="checkbox" name="selected_goods" value="'+data['goods_list'][i]['goods_id']+'" style="display:none;">';
					goods_list_html += '<img class="imglogo" src="'+__IMG(data['goods_list'][i]['picture_info']['pic_cover_small'])+'" width="60" height="60">';
					goods_list_html += '<label  class="goods-name" title="'+data['goods_list'][i]['goods_info']['goods_name']+'">'+data['goods_list'][i]['goods_info']['goods_name']+'</label>';
					goods_list_html += '</div>';
					$('#goods_list').html(goods_list_html);
				}
			}
		})
	}else{
		$("#class_name").val('');
		$("#sort").val('');
		$("#class_id").val('');
		$('#goods_list .alert-goods-info').remove();
	}
}

/*
 * 搜索商品
 */
function search_goods(){
	var goods_name = $("#search_info").val();
	if($("#category_three_id").val() > 0){
		var category_id = $("#category_three_id").val();
		var category_level = 3;
	}else if($("#category_second_id").val() > 0){
		var category_id = $("#category_second_id").val();
		var category_level = 2;
	}else{
		var category_id = $("#category_first_id").val();
		var category_level = 1;
	}
	$.ajax({
		type : 'post',
		url : "<?php echo __URL('ADMIN_MAIN/system/searchgoods'); ?>",
		data : {'goods_name':goods_name,'category_id':category_id, 'category_level':category_level},
		success : function(data){
			var html = '';
			if(data['data'].length > 0){
				for(var i=0;i<data['data'].length;i++){
					html += '<div class="search-goods-info" >';
					html += '<input type="checkbox" name="select_goods" value="'+data['data'][i]['goods_id']+'" style="display:none;">';
					html += '<img class="imglogo" src="'+__IMG(data['data'][i]['pic_cover_micro'])+'"  onclick="addSelectGoods(this)" width="70" height="70">';
					html += '<label class="goods-name" title="'+data['data'][i]['goods_name']+'">'+data['data'][i]['goods_name']+'</label>';
					html += '</div>';
				}
			}else{
				html += '<div class="col-sm-12"><p>暂无商品</p></div>';
			}
			$("#search_goods_list").html(html);
		}
	})
}

/*
 * 向板块中添加商品
 */
function addSelectGoods(event){
	var goods_id_obj = $("#goods_list").find('input[name="selected_goods"]');
	var goods_id_str = '';
	for(var i=0; i<goods_id_obj.length; i++){ 
		goods_id_str += ','+goods_id_obj[i].value; //如果选中，将value添加到变量s中 
	} 
	var goods_id = $(event).parent('.search-goods-info').children('input[name="select_goods"]').val();
	var goods_url = $(event).attr("src");
	var goods_name = $(event).parent('.search-goods-info').children('label').html();
	//判断添加商品的个数
	var goods_list_obj = $("#goods_list").find('input[name="selected_goods"]');
	if(goods_list_obj.length<5){
		
	}else{
		return false;
	}
	if(goods_id_str.indexOf(goods_id) > 0){
		return false;
	}else{
		var html = '';
		html += '<div class="alert-goods-info" onDblClick="remove_selected_goods(this)">';
		html += '<button type="button" class="close" data-dismiss="alert" style="color:#555;">×</button>';
		html += '<input type="checkbox" name="selected_goods" value="'+goods_id+'" style="display:none;">';
		html += '<img class="imglogo" src="'+goods_url+'" width="60" height="60">';
		html += '<label  class="goods-name" title="'+goods_name+'">'+goods_name+'</label>';
		html += '</div>';
		$("#goods_list").append(html);
	}
}

/*
 * 保存促销版块
 */
 function save(){
	var class_id = $("#class_id").val();
	var class_name = $("#class_name").val();
	var sort = $("#sort").val();
	var goods_id_obj = $("#goods_list").find('input[name="selected_goods"]');
	var goods_id_str = '';
	for(var i=0; i<goods_id_obj.length; i++){ 
		goods_id_str += ','+goods_id_obj[i].value; //如果选中，将value添加到变量s中 
	} 
	goods_id_str = goods_id_str.substr(1);
	if(class_name == ''){
		showMessage('error','版块名称不能为空！');
		$("#class_name").focus();
		return false;
	}
	var show_type = "<?php echo $show_type; ?>";
	$.ajax({
		type: 'post',
		url: "<?php echo __URL('ADMIN_MAIN/system/updategoodsrecommendclass'); ?>",
		data: {'class_id':class_id,'class_name':class_name,'goods_id_str':goods_id_str,'sort':sort,'show_type' : show_type},
		success:function(data){
			$("#data").modal("hide");
			if(data['code'] > 0){
				<?php if($show_type == 0): ?>
				showMessage('success',data['message'],"<?php echo __URL('ADMIN_MAIN/system/goodsrecommendclass'); ?>");
				<?php else: ?>
				showMessage('success',data['message'],"<?php echo __URL('ADMIN_MAIN/system/goodsrecommendclassmobile'); ?>");
				<?php endif; ?>
			}else{
				showMessage('error',data['message']);
			}
		}
	});
}
/**
 * 删除 促销版块
 */
function delGoodsRecommendClass(class_id,e){
	if(class_id > 0){
		$( "#dialog" ).dialog({
			buttons: {
				"确定": function() {
					$(this).dialog('close');
					$.ajax({
						type:"post",
						url:"<?php echo __URL('ADMIN_MAIN/system/delgoodsrecommendclass'); ?>",
						data:{'class_id':class_id},
						success:function (data) {
							if(data['code'] > 0){
								<?php if($show_type == 0): ?>
								showMessage('success',data['message'],"<?php echo __URL('ADMIN_MAIN/system/goodsrecommendclass'); ?>");
								<?php else: ?>
								showMessage('success',data['message'],"<?php echo __URL('ADMIN_MAIN/system/goodsrecommendclassmobile'); ?>");
								<?php endif; ?>
							}else{
								showMessage('error', data['message']);
							}
						}
					});
				},
				"取消,#e57373": function() {
					$(this).dialog('close');
				}
			},
			contentText:"确定删除？",
		});
	}else{
		$(e).parents('#recommendAdd').remove()
	}
}
//双击 移除已选择的商品
function remove_selected_goods(event){
	$(event).remove();
}
</script>

</body>
</html>