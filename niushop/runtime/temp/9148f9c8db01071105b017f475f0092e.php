<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:34:"template/platform\Login\login.html";i:1513303781;s:33:"template/platform\openDialog.html";i:1513303781;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="utf-8" />
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<title><?php echo $title_name; ?></title>
<!-- 禁止搜索引擎收录 -->
<meta name="robots" content="noarchive" />
<meta name="baidspider" content="noarchive" />
<meta name="googlebot" content="noarchive" />
<!-- 网站头像 -->
<link type="text/css" rel="stylesheet" href="PLATFORM_CSS/common.css"/>
<link type="text/css" rel="stylesheet" href="PLATFORM_CSS/animate.css"/>
<link type="text/css" rel="stylesheet" href="PLATFORM_CSS/login.css"/>
<!-- [if lt IE 9]-->
<script type="text/javascript" src="PLATFORM_JS/html5shiv.min.js"></script>
<script type="text/javascript" src="PLATFORM_JS/respond.min.js"></script>
<!-- [endif] -->
<script type="text/javascript" src="PLATFORM_JS/jquery.js"></script>
<script type="text/javascript" src="PLATFORM_JS/jquery.supersized.min.js"></script>
<script type="text/javascript" src="PLATFORM_JS/jquery.captcha.js"></script>
<style>
.verification-code{
	position:relative;
}
.verification-code img{
	position: absolute;
	top: 5px;
	right: -10px;
	z-index:101;
	width:100px;
	height:30px;
}
/* input{outline:none;  } 
 input:-webkit-autofill { 
     -webkit-box-shadow: 0 0 0px 1000px white inset !important; 
 }*/ 
</style>
<script>
	function refreshVerify() {
		var ts = Date.parse(new Date())/1000;
		var img = document.getElementById('verify_img');
		img.src = "/captcha?id="+ts;
	}
</script>
</head>
<body>
<div class="page-container">
	<div class="center">
		<div class="logo-info">
			<a href="javascript:void(0);"><img src="PLATFORM_IMG/logo3.png"></a>
			<p><?php echo $title_name; ?>系统管理中心</p>
		</div>
		<div class="line"><img src="PLATFORM_IMG/line.png"></div>
		<div class="form-info">
			<form id="AdminLoginModel" name="AdminLoginModel" method="post" autocomplete="off">
				<div class="input-text-box">
					<div class="form-group">
						<label class="tit">帐号</label>
						<!-- 用户名 -->
						<input type="text" id="username" class="username input-text" name="AdminLoginModel[username]" autocomplete="off" placeholder="请输入用户名" />
					</div>
					<div class="form-group">
						<label class="tit">密码</label>
						<!-- 密码 -->
						<input type="password" id="password" class="username input-text" name="AdminLoginModel[password]" autocomplete="off" placeholder="请输入密码 " />
						<div class="js-info-error tip-error animated fadeInLefts" style="animation-duration: 0.2s; display:none;width: 100px;left:315px;">
<!-- 							<div class="tip-arrow"></div> -->
							<div class="tip-inners"></div>
						</div>
					</div>
					<?php if($login_verify_code['platform'] == 1): ?>
					<div class="form-group verification-code">
						<label class="tit">验证码</label>
						<!-- 密码 -->
						<input type="text" id="vertification" class="username input-text" name="AdminLoginModel[vertification]" autocomplete="off" placeholder="请输入验证码 " />
						<img  id="verify_img" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>'"  />
						<div class="js-info-code-error tip-error animated fadeInLefts" style="animation-duration: 0.2s; display:none;width: 75px;left:315px;">
<!-- 							<div class="tip-arrow"></div> -->
							<div class="tip-inners"></div>
						</div>
					</div>
					<?php endif; ?>
					<div class="form-group checkbox-signup">
						<!-- <label class="check-label"><input type="checkbox" checked="checked" />记住密码</label> -->
						<!--<a class="forget-password" href="SHOP_MAIN/login/findpasswd">忘记密码？</a> -->
					</div>
				</div>
				<input type="button" onclick="login()" class="submit" value="立即登录" />
			</form>
		</div>
	</div>
	<div class="bottom">
		<h6><?php echo $title_name; ?>(www.niushop.com.cn) 版权所有<font style="display: none">晋ICP备16001360号-2</font></h6>
		<div class="copyright">
			<p><a href="www.niushop.com.cn" target="_blank" class="copyright-logo"><img src="PLATFORM_IMG/logo2.png" />提供技术支持</a></p>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function() {
		
		var images = "PLATFORM_IMG/admin_login_bg_image_0.png|PLATFORM_IMG/admin_login_bg_image_1.png|PLATFORM_IMG/admin_login_bg_image_2.png".split("|");
		
		var slides = [];
		
		for(var i = 0; i < images.length; i++){
			slides.push({
				image: images[i]
			});
		}
		
		$.supersized({
			
			// 功能
			slide_interval: 4000,
			transition: 1,
			transition_speed: 1000,
			performance: 1,
			
				// 大小和位置
			min_width: 0,
			min_height: 0,
			vertical_center: 1,
			horizontal_center: 1,
			fit_always: 0,
			fit_portrait: 1,
			fit_landscape: 0,
			
				// 组件
			slide_links: 'blank',
			slides: slides
		});
	});
</script>
<ul class="quality" id="supersized"></ul>
</body>
<!-- 表单验证 -->
<script type="text/javascript" src="PLATFORM_JS/jquery.validate.js"></script>
<script type="text/javascript" src="PLATFORM_JS/jquery.validate.custom.js"></script>
<script type="text/javascript" src="PLATFORM_JS/messages_zh.js"></script>
<!-- 验证规则 -->
<script id="client_rules" type="text">
[{"id": "adminloginmodel-username", "name": "AdminLoginModel[username]", "attribute": "username", "rules": {"required":true,"messages":{"required":"请输入用户名"}}},{"id": "adminloginmodel-password", "name": "AdminLoginModel[password]", "attribute": "password", "rules": {"required":true,"messages":{"required":"请输入密码"}}},{"id": "adminloginmodel-vertification", "name": "AdminLoginModel[vertification]", "attribute": "vertification", "rules": {"required":true,"messages":{"required":"请输入验证码"}}},{"id": "adminloginmodel-username", "name": "AdminLoginModel[username]", "attribute": "username", "rules": {"string":true,"messages":{"string":"用户名必须是一条字符串。","maxlength":"用户名长度必需在100以内"},"maxlength":50}},{"id": "adminloginmodel-password", "name": "AdminLoginModel[password]", "attribute": "password", "rules": {"string":true,"messages":{"string":"密码必须是一条字符串。","maxlength":"密码长度必需在32以内"},"maxlength":32}},{"id": "adminloginmodel-rememberme", "name": "AdminLoginModel[rememberMe]", "attribute": "rememberMe", "rules": {"boolean":{"trueValue":"1","falseValue":"0"},"message":{"boolean":"记住用户名密码的值必须要么为\"1\"，要么为\"0\"。"}}},]
</script>
<!-- 错误模板 -->
<!--当显示的时候，tip-error样式为fadeInLeft;当隐藏的时候，样式为fadeOutLeft-->
<script id="error_template" type="text">
<div class="tip-error animated fadeInLeft" style="animation-duration: 0.2s;">
	<div class="tip-arrow"></div>
	<div class="tip-inner"></div>
</div>
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
<script type="text/javascript">
function login() {
	var username = $("#username").val();
	var password = $("#password").val();
	var vertification = $("#vertification").val();
	if("<?php echo $login_verify_code['platform']; ?>" == 1){
		if(vertification == undefined || vertification == ''){
			$(".js-info-code-error").show();
			$(".js-info-code-error").text('请输入验证码');
			return;
		}
	}
	$.ajax({
		type : "post",
		url : "<?php echo __URL('PLATFORM_MAIN/login/login'); ?>",
		data : {
			'userName' : username,
			'password' : password,
			'vertification' : vertification,
		},
		success : function(data) {
			if (data["code"] > 0) {
				$(".fadeInLefts").hide();
				location.href = "<?php echo __URL('PLATFORM_MAIN/index/index'); ?>";
			}else{
				if(data.message == "验证码错误"){
					$(".js-info-code-error").show();
					$(".js-info-code-error").text(data.message);
					$("#verify_img").attr("src",'<?php echo captcha_src(); ?>');
				}else{
					$(".js-info-error").show();
					$(".js-info-error").text(data.message);
					$("#verify_img").attr("src",'<?php echo captcha_src(); ?>');
				}
			}
		}
	});
}

$().ready(function() {
	
	if(top != window){
		top.location.href = "/login.html";
		return;
	}
	
	var error_template = $("#error_template").html();
	//alert(error_template);
	/**
	 * 初始化validator默认值
	 */
	$.validator.setDefaults({
		errorPlacement: function(error, element) {
			var error_id = $(error).attr("id");
			//alert(error_id);
			var error_msg = $(error).text();
			//alert(error_msg);
			var element_id = $(error).attr("for");
				if ($.trim(error_msg) == 0) {
				return;
			}
				var error_dom = $("[id='" + error_id + "']");
				if (error_dom.size() > 0) {
				$(error_dom).removeClass("fadeOutLeft");
				$(error_dom).addClass("fadeInLeft");
			} else {
				error_dom = $($.parseHTML(error_template));
				$(error_dom).attr("id", error_id);
				$(error_dom).find(".tip-inner").html(error_msg);
				$(element).after(error_dom);
			}
		},
		// 失去焦点验证
		onfocusout: function(element) {
			$(element).valid();
		},
		// 成功后移除错误提示
		success: function(error) {
			var error_id = $(error).attr("id");
			var element_id = $(error).attr("for");
				var error_dom = $("[id='" + error_id + "']");
				if (error_dom.size() > 0) {
				$(error_dom).removeClass("fadeInLeft");
				$(error_dom).addClass("fadeOutLeft");
			}
		}
	});
	var validator = $("#AdminLoginModel").validate();
	// 验证规则，此验证规则会影响编辑器中JavaScript的的格式化操作
	$.validator.addRules($("#client_rules").html());
	// 表单第一项获取焦点
	$("form").find(":input").not(":hidden").first().focus();
	
	$("body").keypress(function(e){
		if(e.keyCode == 13){
			login();
		}
	});
});
</script>
</html>