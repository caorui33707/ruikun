var flag = false;
function saveAgent() {
	if (!Check_Consignee()) {
		return false;
	}
	var url = "";
/*	var ref_url = $("#ref_url").val();*/
	var addressID = $("#AddressID").val();
	var tempSeleAreaFouth = $("#seleAreaFouth").find("option:selected").text();
	// 表示没有区县
	if (tempSeleAreaFouth == "选择区/县") {
		tempSeleAreaFouth = "";
	}

    var agent_name = $("#agent_name").val();
    var agent_type = $(":radio[name='agent_type']:checked").val();
    var identity_card = $("#identity_card").val();
    var identity_card_photo = $("#Logo").val();
    var linkman_name = $("#linkman_name").val();
    var linkman_tel = $("#linkman_tel").val();
    var linkman_address = $("#linkman_address").val();

    var province_id = $("#seleAreaNext").val();
    var city_id = $("#seleAreaThird").val();
    var district_id = $("#seleAreaFouth").val();

    var desc = $("#desc").val();
    var is_blank = $("input[name='navigationtype']:checked").val();
    //var is_show = $("input[name='showtype']:checked").val();

    //公司 相关
    var company_name = $("#company_name").val();
    var business_licence_number = $("#business_licence_number").val();
    var business_license = $("#logo_business_license").val();
    var organization_code = $("#organization_code").val();
    //

	var agent_id=$("#agentid").val();
	if(flag){
		return;
	}
	flag = true;
	if(agent_id<=0 || agent_id==''){
		$.ajax({
			type: "POST",
			url: __URL(SHOPMAIN+"/member/agentSave"),
			data: {
                'agent_name': agent_name, // 代理商名称
                'agent_type' : agent_type,
                'identity_card': identity_card, // 身份证
                'identity_card_photo': identity_card_photo, // 身份证照片
                'linkman_name': linkman_name, // 联系人姓名
                'linkman_tel': linkman_tel, // 联系人姓名
                'linkman_address': linkman_address, //联系人地址

                'province_id': province_id,
                'city_id': city_id,
                'district_id': district_id,

                'desc': desc,
                //'is_show' : is_show

                'company_name': company_name,
                'business_licence_number': business_licence_number,
                'business_license': business_license,
                'organization_code': organization_code,
			},
			success: function (txt) {
				if (txt["code"] >0) {
				   window.location.href =__URL(SHOPMAIN+"/member/agentList");
				} else {
					$.msg(txt, {
						time: 2000
					});
					flag = false;
				}
			}
		});
	}else{
		$.ajax({
			type: "POST",
			url: __URL(SHOPMAIN+"/member/agentSave"),
            data: {
                'agent_name': agent_name, // 代理商名称
                'agent_type' : agent_type,
                'identity_card': identity_card, // 身份证
                'identity_card_photo': identity_card_photo, // 身份证照片
                'linkman_name': linkman_name, // 联系人姓名
                'linkman_tel': linkman_tel, // 联系人姓名
                'linkman_address': linkman_address, //联系人地址

                'province_id': province_id,
                'city_id': city_id,
                'district_id': district_id,

                'desc': desc,
                //'is_show' : is_show

                'company_name': company_name,
                'business_licence_number': business_licence_number,
                'business_license': business_license,
                'organization_code': organization_code,

                'id':agent_id,
            },
			success: function (txt) {
				if (txt["code"] > 0) {
					 window.location.href =__URL(SHOPMAIN+"/member/agentList");
				} else {
                    $.msg("操作失败", {
                        time: 2000
                    });
				}
			}
		});
	}
}

function Check_Consignee() {
	var reg = /^\d{11}$/;

    if ($("#agent_name").val() == "") {
        $.msg("代理商名称不能为空", {
            time: 2000
        });
        $("#agent_name").focus();
        return false;
    }

	if ($("#seleAreaFouth").val() < 0 || $("#seleAreaFouth").val() == "") {
		if ($("#seleAreaNext").val() == "" || $("#seleAreaNext").val() == -1) {
			$.msg("请选择省份", {
				time: 2000
			});
			$("#seleAreaNext").focus();
			return false;
		}
		// if ($("#seleAreaThird").val() == "" || $("#seleAreaThird").val() == -1) {
		// 	$.msg("请选择市", {
		// 		time: 2000
		// 	});
		// 	$("#seleAreaThird").focus();
		// 	return false;
		// }
		// if($("#seleAreaFouth").find("option").length>1 && $("#seleAreaFouth").val() == -1){
		// 	$.msg("请选择区/县", {
		// 		time: 2000
		// 	});
		// 	$("#seleAreaFouth").focus();
		// 	return false;
		// }
	}

	if ($("#AddressInfo").val() == "") {
		$.msg("详细地址不能为空", {
			time: 2000
		});
		$("#AddressInfo").focus();
		return false;
	} 
	if ($("#linkman_tel").val() == "") {
		$.msg("联系人电话不能为空", {
			time: 2000
		});
		$("#linkman_tel").focus();
		return false;
	} 
	if (!reg.test($("#linkman_tel").val())) {
		$.msg("请输入正确的联系人电话", {
			time: 2000
		});
		$("#linkman_tel").focus();
		return false;
	} 
	
	
	return true;
}

// 选择省份弹出市区
function GetProvince() {
	var id = $("#seleAreaNext").find("option:selected").val();
	var selCity = $("#seleAreaThird")[0];
	for (var i = selCity.length - 1; i >= 0; i--) {
		selCity.options[i] = null;
	}
	var opt = new Option("请选择市", "-1");
	selCity.options.add(opt);
	$.ajax({
		type : "post",
		url : __URL(SHOPMAIN+"/member/getCity"),
		dataType : "json",
		data : {
			"province_id" : id
		},
		success : function(data) {
			if (data != null && data.length > 0) {
				for (var i = 0; i < data.length; i++) {
					var opt = new Option(data[i].city_name,data[i].city_id);
					selCity.options.add(opt);
				}
			}
		}
	});
};
// 选择市区弹出区域
function getSelCity() {
	var id = $("#seleAreaThird").find("option:selected").val();
	var selArea = $("#seleAreaFouth")[0];
	for (var i = selArea.length - 1; i >= 0; i--) {
		selArea.options[i] = null;
	}
	var opt = new Option("请选择区县", "-1");
	selArea.options.add(opt);
	$.ajax({
		type : "post",
		url : __URL(SHOPMAIN+"/member/getDistrict"),
		dataType : "json",
		data : {
			"city_id" : id
		},
		success : function(data) {
			if (data != null && data.length > 0) {
				for (var i = 0; i < data.length; i++) {
					var opt = new Option(data[i].district_name,data[i].district_id);
					selArea.options.add(opt);
				}
			}
		}
	});
}