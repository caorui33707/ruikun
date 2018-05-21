<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:42:"template/shop\default\Shop\applyIndex.html";i:1513303782;s:31:"template/shop\default\base.html";i:1513303782;s:35:"template/shop\default\urlModel.html";i:1513303782;s:40:"template/shop\default\controlBottom.html";i:1513303782;s:39:"template/shop\default\controlLogin.html";i:1513303782;s:40:"template/shop\default\baidu_js_push.html";i:1513303782;}*/ ?>
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

<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/ns_shop_common.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/store_joinin.css">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/apply_jq.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.json.js"></script>
<!-- <script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/transport.js"></script> -->
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/user.js"></script>
<style>
.header-line {
    background-color: none;;
     border-bottom: none;
}
</style>

</head>
<body>
<!-- 头部广告 -->



<!-- 公共的顶部（部分界面不用，例如，商家入驻） -->


<!-- 头部，菜单栏、搜索、导航栏 -->


<!--头部商品分类 start-->

<!--头部商品分类 end-->

<!-- 右侧固定购物车 -->

<!-- 内容 -->

<div class="header">
			<h2 class="header-logo"><a href="<?php echo __URL('SHOP_MAIN/index/index'); ?>">
			<img src="__UPLOAD__/<?php echo $web_info['logo']; ?>"></a></h2>
			<ul class="header-menu">
				<li class="current">
				        <?php if($apply_state == 'apply'): ?> <a href="<?php echo __URL('SHOP_MAIN/shop/applyFristAgreement'); ?>" class="joinin">商家入驻申请</a>
						
						<?php endif; if($apply_state == 'is_system'): ?> <a href="<?php echo __URL('ADMIN_MAIN'); ?>" class="joinin">查看入驻进度</a>
					
						<?php endif; ?>
			
				</li>
				<li class="">
					<a href="<?php echo __URL('ADMIN_MAIN'); ?>" class="login"><i></i>商家管理中心</a>
				</li>
				<li class="">
					<a href="<?php echo __URL('SHOP_MAIN/cms/articleList?id=22&class_id=12'); ?>" class="faq"><i></i>商家帮助指南</a>
				</li>
			</ul>
		</div>
		<div class="header-line"><span></span></div>
		<div class="banner">
			<div class="user-box">
				<div class="user-joinin">
					<h3>亲爱的：<?php echo $member_info['user_name']; ?></h3>
					<dl>
						<dt>欢迎来到 B2B2C 商城</dt>
						<dd> 若您还没有填写入驻申请资料<br> 请点击“
							<a href="javascript:void(0)">我要入驻</a>”进行入驻资料填写</dd>
						<dd>若您的店铺还未开通<br> 请通过“
							<a href="javascript:void(0)">查看入驻进度</a>”了解店铺开通的最新状况 </dd>
					</dl>
					<div class="bottom">
					    <?php if($apply_state == 'is_system'): ?>
					     	<a href="<?php echo __URL('ADMIN_MAIN'); ?>">进入商家管理中心</a>
						<?php elseif($apply_state == 'apply'): ?>
							<a href="<?php echo __URL('SHOP_MAIN/shop/applyFristAgreement'); ?>">我要入驻</a>
						<?php elseif($apply_state == 'is_apply' or $apply_state == 'refuse_apply'): ?>
							<a href="<?php echo __URL('SHOP_MAIN/shop/applySecondCompanyInfo'); ?>">查看入驻进度</a>
						<?php endif; ?>
						
					</div>
				</div>
			</div>

			<div id="banner">
				<div id="ctrl1"> <span class="hov"></span> <span></span>  </div>
				<div id="img1" class="full-screen-slides" style="overflow:hidden;height:258px">
					<a href="javascript:;"><img src="__TEMP__/<?php echo $style; ?>/public/images/apply/apply_banner01.png" alt=""></a>
					<a href="javascript:;"><img src="__TEMP__/<?php echo $style; ?>/public/images/apply/apply_banner02.png" alt=""></a>
				</div>
			</div>
		</div>
		<div class="indextip">
			<div class="container">
				<span class="title"><i></i><h3>贴心提示</h3></span>
				<span class="content">【B2B2C】平台提供各类专业管家服务，协助您开通店铺、运营店铺、组织营销活动及分析运营数据，悉心为您解答各类疑问，引导您按相关规则展开运营；我们将竭尽全力，为您的店铺保驾护航。</span>
			</div>
		</div>
		<div class="w1000 mt30">
			<h2 class="index-title">入驻流程</h2>
			<div class="joinin-index-step">
				<span class="step"><i class="a"></i>签署入驻协议</span><span class="arrow"></span>
				<span class="step"><i class="b"></i>商家信息提交</span><span class="arrow"></span>
				<span class="step"><i class="c"></i>平台审核资质</span><span class="arrow"></span>
				<span class="step"><i class="d"></i>商家缴纳费用</span><span class="arrow"></span>
				<span class="step"><i class="e"></i>店铺开通</span>
			</div>
			<h2 class="index-title">入驻指南</h2>
			<div class="joinin-info">
				<ul class="tabs-nav">
					<a href="javascript:;"><li class="tabs-selected" id="tab-a">
						<h3>招商方向</h3>
					</li></a>
					<a href="javascript:;"><li class=""  id="tab-b">
						<h3>招商标准</h3>
					</li></a>
					<a href="javascript:;"><li class=""  id="tab-c">
						<h3>资质要求</h3>
					</li></a>
					<a href="javascript:;"><li class=""  id="tab-d">
						<h3>资费标准</h3>
					</li></a>
				</ul>
				<div class="tabs-panel" id="tabs-1">
					<?php echo $guide_list[0]['content']; ?>
				</div>
				<div class="tabs-panel" id="tabs-2" style="display:none;">
					<?php echo $guide_list[1]['content']; ?>
				</div>
				<div class="tabs-panel" id="tabs-3" style="display:none;">
					<?php echo $guide_list[2]['content']; ?>
				</div>
				<div class="tabs-panel" id="tabs-4" style="display:none;">
					<?php echo $guide_list[3]['content']; ?>
				</div>
			</div>
		</div>


<!-- 底部 -->

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



<script>
$(function() {
	$("#tab-a").click(function(){
		$("#tab-a").addClass("tabs-selected");
		$("#tab-b").removeClass("tabs-selected");
		$("#tab-c").removeClass("tabs-selected");
		$("#tab-d").removeClass("tabs-selected");
		$("#tabs-1").show();
		$("#tabs-2").hide();
		$("#tabs-3").hide();
		$("#tabs-4").hide();
	})
	$("#tab-b").click(function(){
		$("#tab-b").addClass("tabs-selected");
		$("#tab-a").removeClass("tabs-selected");
		$("#tab-c").removeClass("tabs-selected");
		$("#tab-d").removeClass("tabs-selected");
		$("#tabs-1").hide();
		$("#tabs-2").show();
		$("#tabs-3").hide();
		$("#tabs-4").hide();
	})
	$("#tab-c").click(function(){
		$("#tab-c").addClass("tabs-selected");
		$("#tab-b").removeClass("tabs-selected");
		$("#tab-a").removeClass("tabs-selected");
		$("#tab-d").removeClass("tabs-selected");
		$("#tabs-1").hide();
		$("#tabs-2").hide();
		$("#tabs-3").show();
		$("#tabs-4").hide();
	})
	$("#tab-d").click(function(){
		$("#tab-d").addClass("tabs-selected");
		$("#tab-b").removeClass("tabs-selected");
		$("#tab-c").removeClass("tabs-selected");
		$("#tab-a").removeClass("tabs-selected");
		$("#tabs-1").hide();
		$("#tabs-2").hide();
		$("#tabs-3").hide();
		$("#tabs-4").show();
	})
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