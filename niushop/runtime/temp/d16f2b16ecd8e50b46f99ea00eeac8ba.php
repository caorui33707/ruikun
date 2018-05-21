<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:51:"template/shop\blue\Shop\applySecondCompanyInfo.html";i:1513303782;s:28:"template/shop\blue\base.html";i:1513303781;s:32:"template/shop\blue\urlModel.html";i:1513303782;s:34:"template/shop\blue\controlTop.html";i:1513303781;s:37:"template/shop\blue\controlBottom.html";i:1513303781;s:36:"template/shop\blue\controlLogin.html";i:1513303781;s:37:"template/shop\blue\baidu_js_push.html";i:1513303781;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta charset="UTF-8">
<meta name="renderer" content="webkit"> 
<title><?php if($title_before != ''): ?><?php echo $title_before; ?>&nbsp;-&nbsp;<?php endif; ?><?php echo $title; if($seoconfig['seo_title'] != ''): ?>&nbsp;-&nbsp;<?php echo $seoconfig['seo_title']; endif; ?></title>
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
<script type="text/javascript">
var SHOPMAIN = 'SHOP_MAIN';//外置JS调用
var APPMAIN = 'APP_MAIN';//外置JS调用
var upload = "__UPLOAD__";//外置JS调用
var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
var TEMP_IMG = "__TEMP__/<?php echo $style; ?>/public/images";
var temp = "__TEMP__/";//外置JS调用
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
<script src="__STATIC__/js/time_common.js" type="text/javascript"></script>
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

<link href="__TEMP__/<?php echo $style; ?>/public/css/apply/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/ns_shop_common.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/store_joinin.css">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/region.js"></script>
<style>
.btn:hover{color:white;}
</style>

</head>
<body>
<!-- 头部广告 -->



<!-- 公共的顶部（部分界面不用，例如，商家入驻） -->

	<!--
	创建时间：2017年2月7日 12:08:45
	功能描述： 顶部， 
-->
<style>
#menu-login{
	text-align:center;
}
#menu-login .register{
	margin-right:10px;
}
</style>
<div class="header-top">
	<div class="header-box">
		<font id="login-info" class="login-info"></font>
		<ul>
<!-- 			<li><a class="menu-hd home" href="<?php echo __URL('SHOP_MAIN'); ?>" target="_top"><i></i><?php echo lang('shop_index'); ?></a></li> -->
			<li class="menu-item">
				<div class="menu" id="menu-login">
					<a class="menu-hd myinfo" href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" target="_blank"><b></b></a>
					<div id="menu-2" class="menu-bd">
						<span class="menu-bd-mask"></span>
						<div class="menu-bd-panel">
							<a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" target="_blank"><?php echo lang('member_center'); ?></a>
							<a href="<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>" target="_blank"><?php echo lang('member_buy_treasure'); ?></a>
							<a href="<?php echo __URL('SHOP_MAIN/member/addresslist'); ?>" target="_blank"><?php echo lang('member_address_management'); ?></a>
							<a href="<?php echo __URL('SHOP_MAIN/member/goodscollectionlist'); ?>" target="_blank"><?php echo lang('member_baby_collection'); ?></a>
							<a href="javascript:logout();"><?php echo lang('loginout'); ?></a>
						</div>
					</div>
				</div>
			</li>
			<!-- <li class="menu-item cartbox"><a class="menu-hd cart" href="<?php echo __URL('SHOP_MAIN/goods/cart'); ?>" target="_top"><i></i>&nbsp;<?php echo lang('goods_cart'); ?></a></li> -->
			<li class="menu-item">
				<div class="menu">
					<a class="menu-hd we-chat" href="javascript:;" target="_top"><!-- <i></i> --><?php echo lang('attention_mall'); ?><b></b>
					</a>
					<div id="menu-5" class="menu-bd we-chat-qrcode">
						<span class="menu-bd-mask"></span> <a target="_top"> <img src="<?php echo __IMG($web_info['web_qrcode']); ?>" alt="<?php echo lang('official_wechat'); ?>"></a>
						<p class="font-14">关注</p>
					</div>
				</div>
			</li>
<!-- 			<li class="menu-item"> -->
<!-- 				<div class="menu"> -->
<!-- 					<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index'); ?>" class="menu-hd site-nav" target="_blank"> 商家支持 <b></b></a> -->
<!-- 					<div id="menu-7" class="menu-bd site-nav-main"> -->
<!-- 						<span class="menu-bd-mask"></span> -->
<!-- 						<div class="menu-bd-panel"> -->
<!-- 							<div class="site-nav-con"> -->
<!-- 								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=2'); ?>" target="_blank" title="常见问题">常见问题</a> -->
<!-- 								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=7'); ?>" target="_blank" title="网上支付">网上支付</a> -->
<!-- 								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=5'); ?>" target="_blank" title="验货与签收">验货与签收</a> -->
<!-- 								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=9'); ?>" target="_blank" title="退款说明">退款说明</a> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</li> -->
			<li class="menu-item"><a  href="<?php echo __URL('APP_MAIN'); ?>" class="menu-hd wap-nav" ><!-- <i></i> --><?php echo lang('mobile_terminal'); ?></a></li>
			<li class="menu-item"><a href="<?php echo __URL('SHOP_MAIN/helpcenter/index'); ?>" class="menu-hd site-nav" target="_blank"><?php echo lang('shop_help_center'); ?></a></li>
		</ul>
	</div>
</div>

<script type="text/javascript">
$.ajax({
	type:"post",
	url:"<?php echo __URL('SHOP_MAIN/components/getlogininfo'); ?>",
	success:function(data){
// 		var login_info_html='';
		if(data!=null && data!=""){
// 				login_info_html='<a class="sn-login color" href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" target="_top">'+data["user_info"]["nick_name"]+'</a><em><?php echo lang("welcome_back"); ?>！</em><a class="sn-register" href="javascript:logout();" target="_top"><?php echo lang('login_out'); ?></a>';
// 				$('div.login-info').html('<font id="login-info" class="login-info NS-USER-ALREADY-LOGIN"><em><a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" target="_blank" class="color NS-USER-NAME">'+data["user_info"]["nick_name"]+'</a></em><a href="javascript:logout();" data-method="post" class="logout bg-color"><?php echo lang('login_out'); ?></a></font>');
			$(".myinfo").html(data["user_info"]["nick_name"]+'<b></b>');
		
		}else{
// 			login_info_html='<em><?php echo lang("welcome_to"); ?><?php echo $title; ?></em><a class="login color" href="<?php echo __URL('SHOP_MAIN/login/index'); ?>" target="_top"><?php echo lang("login"); ?></a>&nbsp;|&nbsp;<a class="register" href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" target="_top"><?php echo lang("free_registration"); ?></a>';
// 			$('div.login-info').html('<font id="login-info" class="login-info"><a class="login color" href="<?php echo __URL('SHOP_MAIN/login/index'); ?>" target="_top"><?php echo lang('login'); ?></a>&nbsp;|&nbsp;<a class="register bg-color" href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" target="_top"><?php echo lang('free_registration'); ?></a></font>');
			$(".myinfo").hide();
			$('#menu-login').html('<a class="login color" href="<?php echo __URL('SHOP_MAIN/login/index'); ?>" target="_top"><?php echo lang('login'); ?></a>&nbsp;&nbsp;<span style="color:#e2e2e2;border-left:1px solid #e2e2e2;width:1px;height:18px;"></span>&nbsp;&nbsp;<a class="register" href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" target="_top" style=""><?php echo lang('free_registration'); ?></a>');
		}
// 		$('#login-info').html(login_info_html);
	}
});

function logout(){
	$.ajax({
		url: "<?php echo __URL('SHOP_MAIN/member/logout'); ?>",
		type: "post",
		success: function (res) {
			if (res['code'] > 0) {
				$.msg("<?php echo lang('quit_successfully'); ?>！");
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


<!--头部商品分类 start-->

<!--头部商品分类 end-->

<!-- 右侧固定购物车 -->

<!-- 内容 -->

<div class="margin-w1210 clearfix" id="applySecond">
	<div class="headerLayout">
		<div class="headerCon">
			<h1 id="mallLogo"><a href="<?php echo __URL('SHOP_MAIN/index/index'); ?>" class="header-logo"><img src="__UPLOAD__/<?php echo $web_info['logo']; ?>"></a></h1>
			<div class="header-extra">
				<div class="panel-heading">
					<div class="more">
						<div class="progress">
							<div class="progress-wrap">
								<div class="progress-item passed">
									<div class="number">1</div>
									<div class="progress-desc">入驻须知</div>
								</div>
							</div>
							<div class="progress-wrap">
								<?php if($apply_state != 'apply'): ?>
								<div class="progress-item passed">
									<?php else: ?>
									<div class="progress-item ongoing">
								<?php endif; ?>
										<div class="number">2</div>
										<div class="progress-desc">公司信息认证</div>
									</div>
								</div>
								<div class="progress-wrap">
									<?php if($apply_state != 'apply'): ?>
									<div class="progress-item passed">
										<?php else: ?>
										<div class="progress-item tobe">
									<?php endif; ?>
											<div class="number">3</div>
											<div class="progress-desc">店铺信息认证</div>
										</div>
									</div>
									<div class="progress-wrap">
									<?php if($apply_state != 'apply'): ?>
										<div class="progress-item ongoing">
									<?php else: ?>
											<div class="progress-item tobe">
										<?php endif; ?>
												<div class="number">
													<i class="tick"></i>
												</div>
												<div class="progress-desc">
												<?php if($apply_state == 'refuse_apply' or $apply_state == 'is_system'): ?>
													审核结束
												<?php else: ?>
													等待审核
												<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="store-joinin-apply">
					<?php if($apply_state == 'is_apply'): ?>
					<div class="main">
						<div class="explain"><i></i>入驻申请已经提交，请等待管理员审核</div>
						<div class="bottom"></div>
					</div>
					<?php elseif($apply_state == 'refuse_apply' and $is_read == 0): ?>
					<div class="main">
						<div class="explain"><i></i>您的入驻申请被拒！您可以重新<a href="<?php echo __URL('SHOP_MAIN/shop/applyfristagreement?is_read=1'); ?>" class="point">申请入驻</a>!</div>
						<div class="bottom"></div>
					</div>
					<?php elseif($apply_state == 'is_system'): ?>
					<div class="main">
						<div class="explain"><i></i>您的入驻申请已被批准！您可以进入<a href="<?php echo __URL('ADMIN_MAIN'); ?>" class="point">商家管理中心</a>进行查看!</div>
						<div class="bottom"></div>
					</div>
					<?php else: ?>
					<div class="main">
						<div>
							<table border="0" cellpadding="0" cellspacing="0" class="all">
								<thead>
									<tr><th colspan="2" align="left">请选择您的开店身份</th></tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="radio" name="apply_type" value="1" checked="" onclick="radioShow()"> 个人 <input type="radio" name="apply_type" value="2" onclick="radioShow()"> 企业</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div id="apply_person_info" class="apply-company-info" style="display: block;">
							<div class="note"><i></i>以下所需要上传的电子版资质文件仅支持JPG\GIF\PNG格式图片，大小请控制在4096K之内。</div>
							<form id="form_person_info" name="form_person_info" action="" method="post" enctype="multipart/form-data" onsubmit="return supplier_person_Reg()">
								<table border="0" cellpadding="0" cellspacing="0" class="all">
									<thead>
										<tr><th colspan="2" align="left">请按照提示填写本人真实的资料</th></tr>
									</thead>
									<tbody>
										<tr>
											<th><i>*</i>公司名称：</th>
											<td><input name="company_name" type="text" value="" class="w200" id="company_name"> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>联系地址：</th>
											<td>
												<select name="province" id="seleAreaNext" onchange="GetProvince('#seleAreaNext','#seleAreaThird');getSelCity('#seleAreaThird','#seleAreaFouth');">
													<option value="0">请选择省</option>
												</select>
												<select name="city" id="seleAreaThird" onchange="getSelCity('#seleAreaThird','#seleAreaFouth');">
													<option value="0">请选择市</option>
												</select>
												<select name="district" id="seleAreaFouth">
													<option value="-1">请选择区</option>
												</select><span></span>
											</td>
										</tr>
										<tr>
											<th><i>*</i>详细地址：</th>
											<td><input name="address" class="w200" type="text" value="" id="company_address_detail"> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>姓名：</th>
											<td><input name="contacts_name" type="text" class="w200" value="" id="contacts_name"> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>联系人电话：</th>
											<td><input name="mobile" type="text" class="w200" value="" id="contacts_phone"> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>电子邮箱：</th>
											<td><input type="text" name="email" size="45" value="" class="w200" id="contacts_email"> <span></span></td>
										</tr>
									</tbody>
									<tfoot><tr><td colspan="20">&nbsp;</td></tr></tfoot>
								</table>
								<table border="0" cellpadding="0" cellspacing="0" class="all">
									<thead>
										<tr><th colspan="20" align="left">身份证信息</th></tr>
									</thead>
									<tbody>
										<tr>
											<th><i>*</i>身份证号码：</th>
											<td><input name="id_card_no" type="text" class="w200" value="" id="contacts_card_no"> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>手持身份证照片：</th>
											<td>
												<div>
													<p><img id="imglogo1" src="" style="width: 100px; height: 100px; border: medium none; display: block;" /></p>
													<a href="javascript:void(0);" style="display: block; position: relative; z-index: 1;">
														<span style="width: 97px; height: 34px; position: absolute; left: 0; top: 0; z-index: 2; cursor: pointer;">
															<input hidefocus="true" size="1" class="input-file" name="file_upload" id="contacts_card_electronic_1" nc_type="change_store_label" type="file" style="width: 97px; height: 34px; padding: 0; margin: 0; border: none 0; opacity: 0; filter: alpha(opacity = 0); cursor: pointer;" onchange="imgUpload1(this);">
															<input type="hidden" id="logo1" value="" />
														</span>
														<a class="btn btn-default"><i class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
													</a>
												</div><span id="id-hand-s"></span>
											</td>
										</tr>
										<tr>
											<th><i>*</i>身份证正面：</th>
											<td>
												<div>
													<p><img id="imglogo2" src="" style="width: 100px; height: 100px; border: medium none; display: block;" /></p>
													<a href="javascript:void(0);" style="display: block; position: relative; z-index: 1;">
														<span style="width: 97px; height: 34px; position: absolute; left: 0; top: 0; z-index: 2; cursor: pointer;">
															<input hidefocus="true" size="1" class="input-file" name="file_upload" id="contacts_card_electronic_2" nc_type="change_store_label" type="file" style="width: 97px; height: 34px; padding: 0; margin: 0; border: none 0; opacity: 0; filter: alpha(opacity = 0); cursor: pointer;" onchange="imgUpload2(this);">
															<input type="hidden" id="logo2" value="" />
														</span>
														<a class="btn btn-default"><i class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
													</a>
												</div><span id="id-front-s"></span>
											</td>
										</tr>
										<tr>
											<th><i>*</i>身份证反面：</th>
											<td>
												<div>
													<p><img id="imglogo3" src="" style="width: 100px; height: 100px; border: medium none; display: block;" /></p>
													<a href="javascript:void(0);" style="display: block; position: relative; z-index: 1;">
														<span style="width: 97px; height: 34px; position: absolute; left: 0; top: 0; z-index: 2; cursor: pointer;">
															<input hidefocus="true" size="1" class="input-file" name="file_upload" id="contacts_card_electronic_3" nc_type="change_store_label" type="file" style="width: 97px; height: 34px; padding: 0; margin: 0; border: none 0; opacity: 0; filter: alpha(opacity = 0); cursor: pointer;" onchange="imgUpload3(this);">
															<input type="hidden" id="logo3" value="" />
														</span>
														<a class="btn btn-default"><i class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
													</a>
												</div><span id="id-back-s"></span>
											</td>
										</tr>
									</tbody>
									<tfoot><tr><td colspan="20">&nbsp;</td></tr></tfoot>
								</table>
								<table border="0" cellpadding="0" cellspacing="0" class="all">
									<thead>
										<tr>
											<th colspan="20" align="left">开户银行信息</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th class="w150"><i>*</i>银行开户名：</th>
											<td><input name="bank_account_name" id="bank_account_name" type="text" class="w200" value=""> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>个人银行账号：</th>
											<td><input name="bank_account_number" id="bank_account_number" type="text" class="w200" value=""><span></span></td>
										</tr>
										<tr>
											<th><i>*</i>开户银行支行名称：</th>
											<td><input name="bank_name" type="text" id="bank_name" class="w200" value=""> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>支行联行号：</th>
											<td><input name="bank_code" type="text" id="bank_code" class="w200" value=""> <span></span></td>
										</tr>
									</tbody>
									<tfoot><tr><td colspan="20">&nbsp;</td></tr></tfoot>
								</table>
								<input type="hidden" name="shownum" value="1">
								<input type="hidden" name="do" value="1">
								<input type="hidden" name="person" value="1">
								<div class="bottom">
									<input type="button" value="上一步" class="btn" onclick="location.href='SHOP_MAIN/shop/applyfristagreement'">
									<input type="button" value="下一步" class="btn" onclick="next_page()">
								</div>
							</form>
						</div>
						<div id="apply_company_info" class="apply-company-info" style="display: none">
							<div class="note"><i></i>以下所需要上传的电子版资质文件仅支持JPG\GIF\PNG格式图片，大小请控制在4096K之内。</div>
							<form id="form_company_info" name="form_company_info" action="" method="post" enctype="multipart/form-data" onsubmit="return supplier_Reg()">
								<table border="0" cellpadding="0" cellspacing="0" class="all">
									<thead>
										<tr>
											<th colspan="2" align="left">公司及联系人信息</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th><i>*</i>公司名称：</th>
											<td><input name="company_name" type="text" value="" class="w200" id="company_name_2"> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>公司所在地：</th>
											<td>
												<select name="province" id="seleAreaCommpanyNext" onchange="GetProvince('#seleAreaCommpanyNext','#seleAreaCommpanyThird');getSelCity('#seleAreaCommpanyThird','#seleAreaCommpanyFouth');">
													<option value="0">请选择省</option>
												</select>
												<select name="city" id="seleAreaCommpanyThird" onchange="getSelCity('#seleAreaCommpanyThird','#seleAreaCommpanyFouth');">
													<option value="0">请选择市</option>
												</select>
												<select name="district" id="seleAreaCommpanyFouth">
													<option value="-1">请选择区</option>
												</select><span></span>
											</td>
										</tr>
										<tr>
											<th><i>*</i>公司详细地址：</th>
											<td><input name="address" class="w200" type="text" value="" id="company_address_detail_2"> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>公司类型：</th>
											<td>
												<select name="company_type" class="w200" id="company_type">
													<option value="">请选择</option>
													<option value="私营企业">私营企业</option>
													<option value="个体户">个体户</option>
													<option value="外企">外企</option>
													<option value="中外合资">中外合资</option>
												</select> <span></span>
											</td>
										</tr>
										<tr>
											<th><i>*</i>公司电话：</th>
											<td><input type="text" name="tel" value="" class="w100" id="company_phone"> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>公司规模：</th>
											<td>员工总数(人)：<input type="text" class="w50" name="" value="" id="company_employee_count"> 注册资金(万元)：<input type="text" class="w50" name="" value="" id="company_registered_capital"> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>联系人姓名：</th>
											<td><input name="contacts_name" type="text" class="w100" value="" id="contacts_name_2"> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>联系人电话：</th>
											<td><input name="mobile" type="text" class="w100" value="" id="contacts_phone_2"> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>电子邮箱：</th>
											<td><input type="text" name="email" size="45" value="" class="w200" id="contacts_email_2"> <span></span></td>
										</tr>
									</tbody>
									<tfoot><tr><td colspan="20">&nbsp;</td></tr></tfoot>
								</table>
								<table border="0" cellpadding="0" cellspacing="0" class="all">
									<thead>
										<tr>
											<th colspan="20" align="left">营业执照信息（副本）</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th><i>*</i>营业执照号：</th>
											<td><input name="business_licence_number" type="text" class="w200" value="" id="business_licence_number"> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>法定经营范围：</th>
											<td><textarea name="business_sphere" rows="3" class="w200" id="business_sphere" style="padding: 5px;"></textarea> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>营业执照号电子版：</th>
											<td>
												<div>
													<p><img id="imglogo4" src="" style="width: 100px; height: 100px; border: medium none; display: block;" /></p>
													<a href="javascript:void(0);" style="display: block; position: relative; z-index: 1;">
														<span style="width: 97px; height: 34px; position: absolute; left: 0; top: 0; z-index: 2; cursor: pointer;">
															<input hidefocus="true" size="1" class="input-file" name="file_upload" id="business_licence_number_electronic" nc_type="change_store_label" type="file" style="width: 97px; height: 34px; padding: 0; margin: 0; border: none 0; opacity: 0; filter: alpha(opacity = 0); cursor: pointer;" onchange="imgUpload4(this);">
															<input type="hidden" id="logo4" value="" />
														</span>
														<a class="btn btn-default"><i class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
													</a>
												</div>
												<span class="block">请确保图片清晰，文字可辨并有清晰的红色公章。</span>
											</td>
										</tr>
									</tbody>
									<tfoot><tr><td colspan="20">&nbsp;</td></tr></tfoot>
								</table>
								<table border="0" cellpadding="0" cellspacing="0" class="all">
									<thead>
										<tr>
											<th colspan="20" align="left">组织机构代码证</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th><i>*</i>组织机构代码：</th>
											<td><input name="organization_code" type="text" class="w200" value="" id="organization_code"> <span></span></td>
										</tr>
										<tr>
											<th><i>*</i>组织机构代码证电子版：</th>
											<td>
												<div>
													<p><img id="imglogo5" src="" style="width: 100px; height: 100px; border: medium none; display: block;" /></p>
													<a href="javascript:void(0);" style="display: block; position: relative; z-index: 1;">
														<span style="width: 97px; height: 34px; position: absolute; left: 0; top: 0; z-index: 2; cursor: pointer;">
															<input hidefocus="true" size="1" class="input-file" name="file_upload" id="organization_code_electronic" nc_type="change_store_label" type="file" style="width: 97px; height: 34px; padding: 0; margin: 0; border: none 0; opacity: 0; filter: alpha(opacity = 0); cursor: pointer;" onchange="imgUpload5(this);">
															<input type="hidden" id="logo5" value="" />
														</span>
														<a class="btn btn-default"><i class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
													</a>
												</div>
												<span class="block">请确保图片清晰，文字可辨并有清晰的红色公章。</span>
											</td>
										</tr>
									</tbody>
									<tfoot><tr><td colspan="20">&nbsp;</td></tr></tfoot>
								</table>
								<table border="0" cellpadding="0" cellspacing="0" class="all">
									<thead>
										<tr>
											<th colspan="20" align="left">一般纳税人证明<em>注：所属企业具有一般纳税人证明时，此项为必填。</em></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th class="w150">一般纳税人证明：</th>
											<td>
												<div>
													<p><img id="imglogo6" src="" style="width: 100px; height: 100px; border: medium none; display: block;" /></p>
													<a href="javascript:void(0);" style="display: block; position: relative; z-index: 1;">
														<span style="width: 97px; height: 34px; position: absolute; left: 0; top: 0; z-index: 2; cursor: pointer;">
															<input hidefocus="true" size="1" class="input-file" name="file_upload" id="general_taxpayer" nc_type="change_store_label" type="file" style="width: 97px; height: 34px; padding: 0; margin: 0; border: none 0; opacity: 0; filter: alpha(opacity = 0); cursor: pointer;" onchange="imgUpload6(this);">
															<input type="hidden" id="logo6" value="" />
														</span>
														<a class="btn btn-default"><i class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
													</a>
												</div>
												<span class="block">请确保图片清晰，文字可辨并有清晰的红色公章。</span>
											</td>
										</tr>
									</tbody>
									<tfoot><tr><td colspan="20">&nbsp;</td></tr></tfoot>
								</table>
								<input type="hidden" name="shownum" value="1">
								<input type="hidden" name="do" value="1">
								<input type="hidden" name="company" value="1">
								<div class="bottom">
									<input type="button" value="上一步" class="btn" onclick="location.href='SHOP_MAIN/shop/applyfristagreement'">
									<input type="button" value="下一步" class="btn" onclick="next_page()">
								</div>
							</form>
						</div>
					</div>
				<?php endif; ?>
				</div>
			</div>
			<div id="applyThird"  style="display:none;">
				<div class="headerLayout">
					<div class="headerCon">
						<h1 id="mallLogo"><a href="<?php echo __URL('SHOP_MAIN/index/index'); ?>" class="header-logo"><img src="__UPLOAD__/<?php echo $web_info['logo']; ?>"></a></h1>
						<div class="header-extra">
							<div class="panel-heading">
								<div class="more">
									<div class="progress">
										<div class="progress-wrap">
											<div class="progress-item passed">
												<div class="number">1</div>
												<div class="progress-desc">入驻须知</div>
											</div>
										</div>
										<div class="progress-wrap">
											<div class="progress-item passed">
												<div class="number">2</div>
												<div class="progress-desc">公司信息认证</div>
											</div>
										</div>
										<div class="progress-wrap">
											<div class="progress-item ongoing">
												<div class="number">3</div>
												<div class="progress-desc">店铺信息认证</div>
											</div>
										</div>
										<div class="progress-wrap">
											<div class="progress-item tobe">
												<div class="number">
													<i class="tick"></i>
												</div>
												<div class="progress-desc">等待审核</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="store-joinin-apply">
					<div class="main">
						<div id="apply_company_info" class="apply-company-info">
							<form id="form_store_info" name="form_company_info" action="" method="post" enctype="multipart/form-data" onsubmit="return supplier_Reg()">
								<table border="0" cellpadding="0" cellspacing="0" class="all">
									<thead>
										<tr>
											<th colspan="20" align="left">店铺经营信息</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th class="w150"><i>*</i>店铺名称：</th>
											<td><input name="supplier_name" type="text" class="w200" value="" id="shop_name"> <span></span><p class="emphasis">店铺名称注册后不可修改，请认真填写。</p></td>
										</tr>
										<tr>
											<th><i>*</i>店铺等级：</th>
											<td>
												<select name="rank_id" size="1" id="shop_type_name">
													<option value="0">请选择</option>
													<?php if(is_array($shop_type_list) || $shop_type_list instanceof \think\Collection || $shop_type_list instanceof \think\Paginator): if( count($shop_type_list)==0 ) : echo "" ;else: foreach($shop_type_list as $key=>$vo): ?>
													<option value="<?php echo $vo['instance_typeid']; ?>"><?php echo $vo['type_name']; ?></option>
													<?php endforeach; endif; else: echo "" ;endif; ?>
												</select> <span></span>
												<div id="grade_explain" class="grade_explain"></div>
											</td>
										</tr>
										<tr>
											<th><i>*</i>店铺分类：</th>
											<td>
												<select name="type_id" size="1" id="shop_group_name">
													<option value="0">请选择</option>
													<?php if(is_array($shop_group) || $shop_group instanceof \think\Collection || $shop_group instanceof \think\Paginator): if( count($shop_group)==0 ) : echo "" ;else: foreach($shop_group as $key=>$vt): ?>
													<option value="<?php echo $vt['shop_group_id']; ?>"><?php echo $vt['group_name']; ?></option>
													<?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
												<span></span>
												<p class="emphasis">请根据您所经营的内容认真选择店铺分类，注册后商家不可自行修改。</p>
											</td>
										</tr>
										
							<!-- 			<tr>
											<th class="w150">推荐人编号：</th>
											<td>
												<input name="supplier_name" type="text" class="w200" value="" id="assistant_code">
												<p class="emphasis"></p>
											</td>
										</tr> -->
									</tbody>
									<tfoot><tr><td colspan="20">&nbsp;</td></tr></tfoot>
								</table>
								<input type="hidden" name="shownum" value="3">
								<input type="hidden" name="do" value="1">
								<div class="bottom">
									<input type="button" value="上一步" class="btn" onclick="prev_page()">
									<input type="button" value="下一步" class="btn" onclick="save()">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
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
		<b> <a href="javascript:;" target="_blank" class="copyright-logo"><?php echo $web_info['third_count']; ?></a>&nbsp;&nbsp;
			<a href="http://www.niushop.com.cn" target="_blank" class="copyright-logo" id="copyright_companyname"></a>&nbsp;&nbsp;<a href="#" id="copyright_meta"></a>
		</b>
	</div>
</div> 


<script src="__TEMP__/<?php echo $style; ?>/public/js/address_new.js"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script type="text/javascript">
var flag = 1;
var assistant_uid = 0;
function next_page(){
	var apply_type=$("input[type='radio']:checked").val();
	var flag=true;
	if(apply_type==1){
		flag=$.testing("#applySecond #apply_person_info");
	}else{
		flag=$.testing("#applySecond #apply_company_info");
	}
	if(flag){
		$("#applySecond").hide();
		$("#applyThird").show();
		$.footer();
	};
}
function prev_page(){
	$("#applySecond").show();
	$("#applyThird").hide();
	$.footer();
}
function save(){
// 	if($.testing("#applyThird")){
		
// 	}
	var apply_type=$("input[type='radio']:checked").val();
	if(apply_type==1){
		var company_name=$("#company_name").val();
		var company_address_detail=$("#company_address_detail").val();
		var contacts_name=$("#contacts_name").val();
		var contacts_phone=$("#contacts_phone").val();
		var contacts_email=$("#contacts_email").val();
		var company_province_id=$("#seleAreaNext").val();
		var company_city_id=$("#seleAreaThird").val();
		var company_district_id=$("#seleAreaFouth").val();
		var contacts_card_no=$("#contacts_card_no").val();
		var contacts_card_electronic_1=$("#logo1").val();
		var contacts_card_electronic_2=$("#logo2").val();
		var contacts_card_electronic_3=$("#logo3").val();
		var bank_account_name=$("#bank_account_name").val();
		var bank_account_number=$("#bank_account_number").val();
		var bank_name=$("#bank_name").val();
		var bank_code=$("#bank_code").val();
	}else{
		var company_name=$("#company_name_2").val();
		var company_address_detail=$("#company_address_detail_2").val();
		var contacts_name=$("#contacts_name_2").val();
		var contacts_phone=$("#contacts_phone_2").val();
		var contacts_email=$("#contacts_email_2").val();
		var company_province_id=$("#seleAreaCommpanyNext").val();
		var company_city_id=$("#seleAreaCommpanyThird").val();
		var company_district_id=$("#seleAreaCommpanyFouth").val();
		var company_type=$("#company_type").val();
		var company_phone=$("#company_phone").val();
		var company_employee_count=$("#company_employee_count").val();
		var company_registered_capital=$("#company_registered_capital").val();
		var business_licence_number=$("#business_licence_number").val();
		var business_sphere=$("#business_sphere").val();
		var business_licence_number_electronic=$("#logo4").val();
		var organization_code=$("#organization_code").val();
		var organization_code_electronic=$("#logo5").val();
		var general_taxpayer=$("#logo6").val();
	}

	var shop_name=$("#shop_name").val();
	var shop_type_id=$("#shop_type_name").val();
	var assistant_code = 0;
	var recommend_uid = 0;
	var shop_group_id=$("#shop_group_name").val();
	var shop_type_name=$("#shop_type_name option:selected").text(); 
	var shop_group_name=$("#shop_group_name option:selected").text(); 

	if(flag == 1){
		var recommend_uid= assistant_uid;
	}else{
		return;
	}
	
	if(shop_name == ""){
		$("#shop_name").next().text("店铺名称不能为空").css({"float":"none"}).prev().focus();
		return;
	}else{
		$("#shop_name").next().text("");
	}
	if(shop_type_id == 0){
		$("#shop_type_name").next().text("请选择店铺等级").css({"float":"none"}).prev().focus();
		return;
	}else{
		$("#shop_type_name").next().text("");
	}
	
	if(shop_group_id == 0){
		$("#shop_group_name").next().text("请选择店铺分类").css({"float":"none"}).prev().focus();
		return;
	}else{
		$("#shop_group_name").next().text("");
	}
	$.ajax({
		type:'post',
		url:'<?php echo __URL('SHOP_MAIN/shop/applysecondcompanyinfo'); ?>',
		data:{
			"apply_type":apply_type,
			"company_name":company_name,
			"company_province_id":company_province_id,
			"company_city_id":company_city_id,
			"company_district_id":company_district_id,
			"company_address_detail":company_address_detail,
			"contacts_name":contacts_name,
			"contacts_phone":contacts_phone,
			"contacts_email":contacts_email,
			"contacts_card_no":contacts_card_no,
			"contacts_card_electronic_1":contacts_card_electronic_1,
			"contacts_card_electronic_2":contacts_card_electronic_2,
			"contacts_card_electronic_3":contacts_card_electronic_3,
			"bank_account_name":bank_account_name,
			"bank_account_number":bank_account_number,
			"bank_name":bank_name,
			"bank_code":bank_code,
			"shop_name":shop_name,
			"shop_type_name":shop_type_name,
			"shop_group_name":shop_group_name,
			"shop_type_id":shop_type_id,
			"shop_group_id":shop_group_id,
			"company_type":company_type,
			"company_phone":company_phone,
			"company_employee_count":company_employee_count,
			"company_registered_capital":company_registered_capital,
			"business_licence_number":business_licence_number,
			"business_sphere": business_sphere,
			"business_licence_number_electronic":business_licence_number_electronic,
			"organization_code": organization_code,
			"organization_code_electronic": organization_code_electronic,
			"general_taxpayer": general_taxpayer,
			"recommend_uid": recommend_uid
		},
		success:function(data){
			$.msg(data["message"],{time:2000});
			if (data["code"] > 0) {
			//location.href="SHOP_MAIN/Shop/applyFinish";
				location.reload();
			}
		}
	});
}

/**
 *图片上传
 */
/* function imgUpload(event) {
	var fileid = $(event).attr("id");
	var str = $(event).next().attr("id");
	fileCommonUpload("UPLOAD_URL", fileid,"__UPLOAD__",str);
} */
function imgUpload1(event) {
	var fileid = $(event).attr("id");
	var data = { 'file_path' : UPLOADCOMMON };
	uploadFile(fileid,data,function(res){
		if(res.code){
			$("#imglogo1").attr("src","__UPLOAD__/"+res.data);
			$("#logo1").val(res.data);
			showTip(res.message,"success");
		}else{
			showTip(res.message,"error");
		}
	});
}
function imgUpload2(event) {
	var fileid = $(event).attr("id");
	var data = { 'file_path' : UPLOADCOMMON };
	uploadFile(fileid,data,function(res){
		if(res.code){
			$("#imglogo2").attr("src","__UPLOAD__/"+res.data);
			$("#logo2").val(res.data);
			showTip(res.message,"success");
		}else{
			showTip(res.message,"error");
		}
	});
}
function imgUpload3(event) {
	var fileid = $(event).attr("id");
	var data = { 'file_path' : UPLOADCOMMON };
	uploadFile(fileid,data,function(res){
		if(res.code){
			$("#imglogo3").attr("src","__UPLOAD__/"+res.data);
			$("#logo3").val(res.data);
			showTip(res.message,"success");
		}else{
			showTip(res.message,"error");
		}
	});
}
function imgUpload4(event) {
	var fileid = $(event).attr("id");
	var data = { 'file_path' : UPLOADCOMMON };
	uploadFile(fileid,data,function(res){
		if(res.code){
			$("#imglogo4").attr("src","__UPLOAD__/"+res.data);
			$("#logo4").val(res.data);
			showTip(res.message,"success");
		}else{
			showTip(res.message,"error");
		}
	});
}
function imgUpload5(event) {
	var fileid = $(event).attr("id");
	var data = { 'file_path' : UPLOADCOMMON };
	uploadFile(fileid,data,function(res){
		if(res.code){
			$("#imglogo5").attr("src","__UPLOAD__/"+res.data);
			$("#logo5").val(res.data);
			showTip(res.message,"success");
		}else{
			showTip(res.message,"error");
		}
	});
}
function imgUpload6(event) {
	var fileid = $(event).attr("id");
	var data = { 'file_path' : UPLOADCOMMON };
	uploadFile(fileid,data,function(res){
		if(res.code){
			$("#imglogo6").attr("src","__UPLOAD__/"+res.data);
			$("#logo6").val(res.data);
			showTip(res.message,"success");
		}else{
			showTip(res.message,"error");
		}
	});
}

/**
 * 个人和企业切换
 */
function radioShow() {
	var apply_type = $("input[name='apply_type']");
	var showdiv = $(".apply-company-info");
	for(i = 0; i < apply_type.length; i++) {
		if(apply_type[i].checked) {
			showdiv[i].style.display = "block";
		} else {
			showdiv[i].style.display = "none";
		}
	}
}
/**
 * 省市区联动
 */
$(function() {
		var selCity = $("#seleAreaNext");
		var selCityCommpany= $("#seleAreaCommpanyNext");
		// 添加省
		$.ajax({
			type : "post",
			url : "<?php echo __URL('SHOP_MAIN/shop/getProvince'); ?>",
			dataType : "json",
			success : function(data) {
				if (data != null && data.length > 0) {
					for (var i = 0; i < data.length; i++) {
						selCity.append("<option value='"+data[i].province_id+"'>"+data[i].province_name+"</option>");
						selCityCommpany.append("<option value='"+data[i].province_id+"'>"+data[i].province_name+"</option>");
					}
				}
			}
		});
	});
	
	//推荐人手机号
	$("#assistant_code").blur(function(){
		assistant_uid = 0;
		if($(this).val().length>0){
			if(isNaN($(this).val())){
				$(this).next().text("请输入正确的推荐编号");
				flag = -1;
				$(this).focus();
				return;
			}
			
			$.ajax({
				type : "post",
				url:'<?php echo __URL('SHOP_MAIN/shop/getShopAssistantCode'); ?>',
				data : {"assistant_code" : $(this).val()},
				success : function(res){
					//alert(JSON.stringify(res));
					if(res.length>0){
						assistant_uid = res[0].uid
						$("#assistant_code").next().text("推荐编号可以使用");
						flag = 1;
					}else{
						$("#assistant_code").next().text("推荐编号不存在");
						flag = -1;
					}
				}
			});
		}else{
			$("#assistant_code").next().text("");
			flag = 1;
		}
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
		//获取<?php echo lang('login'); ?>框的宽度和高度
		var div_width = parseFloat($("#layui-layer").css("width"));
		var div_height = parseFloat($("#layui-layer").css("height"));
		//确定<?php echo lang('login'); ?>框的显示位置
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
	var moveTop = parseFloat(loginDiv.style.top);//<?php echo lang('login'); ?>框的top属性
	var moveLeft = parseFloat(loginDiv.style.left);//<?php echo lang('login'); ?>框的left属性
	var docX = parseFloat(window.innerWidth);//可视区域的宽度
	var docY = parseFloat(window.innerHeight);//可视区域的高度
	var divWidth = parseFloat(loginDiv.style.width);//<?php echo lang('login'); ?>框的宽度
	var divHeight = parseFloat(loginDiv.style.height);//<?php echo lang('login'); ?>框的高度 
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
	<div class="layui-layer-title" style="cursor: move;" id="control-trawaaa"  onmousedown="titleMove();"><?php echo lang('not_logged_yet'); ?><span style="width:40px;display:inline-block "></span></div>
	<div id="NS_LOGIN_LAYER_DIALOG" class="layui-layer-content">
		<div id="1487644497l6UAoM" class="login-form">
			<div class="login-con pos-r">
				<div class="login-wrap">
					<div class="login-tit">
						<?php echo lang('no_account_yet'); ?>？<a href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" class="regist-link color"><?php echo lang('register_immediately'); ?><i>&gt;</i></a>
					</div>
					<div class="login-radio">
						<ul>
							<li class="active" id="login2" onclick="setTab('login',2,2)"><?php echo lang('member_login'); ?></li>
						</ul>
					</div>
					<!-- 普通<?php echo lang('login'); ?> star -->
					<div id="con_login_2" class="form">
						<div class="form-group item-name">
							<!-- 错误项标注 给div另添加一个class值'error' star -->
							<div class="form-control-box">
								<i class="icon"></i>
								<input type="text" name="txtName" id="txtName" placeholder="<?php echo lang('cell_phone_number'); ?>/<?php echo lang('member_name'); ?>/<?php echo lang('mailbox'); ?>" class="text" tabindex="1" autocomplete="off" aria-required="true" />
							</div>
							<!-- 错误项标注 给div另添加一个class值'error' end -->
						</div>
						<div class="form-group item-password">
							<div class="form-control-box">
								<i class="icon"></i>
								<input type="password" name="txtPWD" id="txtPWD" placeholder="<?php echo lang('please_input_password'); ?>" class="text" tabindex="2"  autocomplete="off" aria-required="true" />
							</div>
						</div>
						<?php if($login_verify_code['pc'] == 1): ?>
						<div class="form-group verification-code">
							<div class="form-control-box">
								<input type="text" id="vertification" class="text vertification" name="vertification" placeholder="<?php echo lang('please_enter_verification_code'); ?> " />
								<img id="verify_img" src="<?php echo __URL('SHOP_MAIN/captcha'); ?>" alt="captcha" onclick="this.src='<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>'+'&send='+Math.random()" />
							</div>
						</div>
						<input type="hidden" id="hidden_captcha_src" value="<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>" />
						<?php endif; ?>
<!-- 						<div class="safety"> -->
<!-- 							<label for="remember"> -->
<!-- 								<input type="checkbox" name="expire" checked="checked" type="checkbox" value="1"> -->
<!-- 								<span style="display:inline-block;padding-bottom:7px;">7天内自动<?php echo lang('login'); ?></span> -->
<!-- 							</label> -->
<!-- 							<a class="forget-password fr" href="<?php echo __URL('SHOP_MAIN/login/findpasswd'); ?>" style="margin-top:2px;">忘记密码？</a> -->
<!-- 						</div> -->
						<div class="login-btn">
							<input type="hidden" name="act" value="act_login" />
							<input type="hidden" name="back_act" />
							<input type="button" name="buttom" class="btn-img btn-entry bg-color" id="loginsubmit" onclick="btnlogin(this)" value="<?php echo lang('logon_immediately'); ?>" />
						</div>
						<div class="item-coagent">
							<?php if($Wchat_info['is_use'] == 1): ?>
								<a href="<?php echo __URL('APP_MAIN/login/oauthlogin','type=WCHAT'); ?>" data-id="wchat" class="website-login"><i class="weixin"></i></a>
							<?php endif; if($qq_info['is_use'] == 1): ?>
								<a href="<?php echo __URL('APP_MAIN/login/oauthlogin','type=QQLOGIN'); ?>" data-id="qq" class="website-login"><i class="qq"></i></a>
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
// 登陆 <?php echo lang('login'); ?>时 <?php echo lang('login'); ?>按钮"变暗"
function btnlogin(event) {
	var goodsid = $("#goods_id").val();
	var userName = $('#txtName').val();
	var password = $('#txtPWD').val();
	var vertification = "";
	if(userName==''){
		$.msg('<?php echo lang('username_cannot_be_empty'); ?>');
		$('#txtName').select();
		return;
	}
	if(password==''){
		$.msg('<?php echo lang('password_must_not_be_empty'); ?>');
		$('#txtPWD').select();
		return;
	}
	if("<?php echo $login_verify_code['pc']; ?>" == 1){
		vertification = $('#vertification').val();
		if(vertification == undefined || vertification==''){
			$.msg('<?php echo lang('verification_code_must_not_be_null'); ?>');
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
				if(goodsid == '' || tag==undefined){
					$.msg('<?php echo lang('login_successful'); ?>！');
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