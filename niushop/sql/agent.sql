CREATE TABLE `sys_agent` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL DEFAULT '0' COMMENT '关联用户id',
  `province_id` tinyint(4) NOT NULL DEFAULT '0' COMMENT '省id',
  `city_id`   smallint(4) NOT NULL DEFAULT '0' COMMENT '市id',
  `district_id` smallint(4) NOT NULL DEFAULT '0' COMMENT '县/区id' ,
  `pid` tinyint(4) NOT NULL DEFAULT '0' COMMENT '上级代理商id',
  `identity_card` varchar(100) NOT NULL  DEFAULT '' COMMENT '身份证',
  `identity_card_photo` varchar(100)  DEFAULT '' COMMENT '身份证照片',
  `level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '级别 1省 2市 县3 ' ,
  `agent_name` varchar(50)  DEFAULT '' COMMENT '代理商名称',
  `desc` varchar(1000) NOT NULL DEFAULT '' COMMENT '代理商描述(备注)',
  `linkman_tel` varchar(100) NOT NULL DEFAULT '' COMMENT '联系人电话',
  `linkman_name` varchar(50) NOT NULL DEFAULT '' COMMENT '联系人姓名',
  `linkman_address` varchar(255) NOT NULL DEFAULT '' COMMENT '联系人地址',
  PRIMARY KEY (`id`),

   KEY `IDX_sys_agent_user_email` (`province_id`),
   KEY `IDX_sys_agent_city_id` (`city_id`),
   KEY `IDX_sys_agent_district_id` (`district_id`),
   KEY `IDX_sys_agent_pid` (`pid`),
   KEY `IDX_sys_agent_level` (`level`),
   KEY `IDX_sys_agent_uid` (`uid`)

) ENGINE=InnoDB  DEFAULT CHARSET=utf8  COMMENT='代理商';

alter table `sys_agent` add `is_status` int(11) NOT NULL DEFAULT '1' COMMENT '审核状态 1 审核中 2 审核失败 3 审核成功',


-- DROP TABLE IF EXISTS ns_express_company;
CREATE TABLE sys_agent_company (
  co_id INT(11) NOT NULL AUTO_INCREMENT COMMENT '代理公司id',
  company_name VARCHAR(50) NOT NULL DEFAULT '' COMMENT '公司名称',
  agent_id int(10) NOT NULL DEFAULT '0' COMMENT '代理商id',
  is_enabled INT(11) NOT NULL DEFAULT 1 COMMENT '使用状态',
  image VARCHAR(255) DEFAULT '' COMMENT '公司模版图片',
  bank_no VARCHAR(50) DEFAULT '' COMMENT '银行卡',
  phone VARCHAR(50) NOT NULL DEFAULT '' COMMENT '联系电话',
  orders INT(11) DEFAULT NULL,
  company_logo VARCHAR(255) DEFAULT '' COMMENT '公司logo',
  business_license VARCHAR(255) DEFAULT '' COMMENT '营业执照图',
  is_default INT(11) NOT NULL DEFAULT 0 COMMENT '是否设置为默认 0未设置 1 默认',
  PRIMARY KEY (co_id)
)
ENGINE = INNODB DEFAULT CHARSET=utf8 COMMENT = '代理公司';

CREATE TABLE sys_agent_staus (
  id INT(11) unsigned NOT NULL AUTO_INCREMENT  ,
  status tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 待审核 1 失败 2 成功',
  desc varchar(1000) NOT NULL  COMMENT '备注',
  PRIMARY KEY (id)
)
ENGINE = INNODB DEFAULT CHARSET=utf8 COMMENT = '代理商状态';

CREATE TABLE sys_agent_set (
  id INT(11) NOT NULL AUTO_INCREMENT ,
  up_type tinyint(4) NOT NULL DEFAULT '1' COMMENT '上级代理类型 1 个人 2 公司',
  down_type tinyint(4) NOT NULL DEFAULT '1' COMMENT '下级代理类型 1 个人 2 公司',
  `level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '级别 0省 1市 县2 ' ,
  ratio tinyint(4) NOT NULL DEFAULT '0' COMMENT '比例（%） 万分之一' ,
  PRIMARY KEY (id)
)
ENGINE = INNODB DEFAULT CHARSET=utf8 COMMENT = '代理费设置';



CREATE TABLE `ns_member_invite` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '上级uid',
  `p_invite_code` char(5) DEFAULT '' COMMENT '上级邀请码',
  index `IDX_ns_member_invite_code` (`p_invite_code`),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  COMMENT='推荐码关联表';


CREATE TABLE `ns_member` (
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `member_name` varchar(50) NOT NULL DEFAULT '' COMMENT '前台用户名',
  `member_level` int(11) NOT NULL DEFAULT '0' COMMENT '会员等级',
  `memo` varchar(1000) DEFAULT NULL COMMENT '备注',
  `reg_time` int(11) DEFAULT '0' COMMENT '注册时间',
  `invite_code` char(5) DEFAULT '' COMMENT '邀请码',
  KEY `IDX_ns_member_invite_code` (`invite_code`),
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  COMMENT='前台用户表';

  
alter table `ns_member` add  `invite_code` char(5) DEFAULT '' COMMENT '邀请码';


alter table `ns_member` add unique  `UN_ns_member_invite_code` (`invite_code`);


CREATE TABLE `sys_user` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `instance_id` int(11) NOT NULL DEFAULT '0' COMMENT '实例信息',
  `user_name` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  `mobile` varchar(15) NOT NULL,
  `user_password` varchar(255) NOT NULL DEFAULT '' COMMENT '用户密码（MD5）',
  `user_status` int(11) NOT NULL DEFAULT '1' COMMENT '用户状态  用户状态默认为1',
  `user_headimg` varchar(255) NOT NULL DEFAULT '' COMMENT '用户头像',
  `is_system` int(1) NOT NULL DEFAULT '0' COMMENT '是否是系统后台用户 0 不是 1 是',
  `is_member` int(11) NOT NULL DEFAULT '0' COMMENT '是否是前台会员',
  `user_tel` varchar(20) NOT NULL DEFAULT '' COMMENT '手机号',
  `user_tel_bind` int(1) NOT NULL DEFAULT '0' COMMENT '手机号是否绑定 0 未绑定 1 绑定 ',
  `user_qq` varchar(255) DEFAULT '' COMMENT 'qq号',
  `qq_openid` varchar(255) NOT NULL DEFAULT '' COMMENT 'qq互联id',
  `qq_info` varchar(2000) NOT NULL DEFAULT '' COMMENT 'qq账号相关信息',
  `user_email` varchar(50) NOT NULL DEFAULT '' COMMENT '邮箱',
  `user_email_bind` int(1) NOT NULL DEFAULT '0' COMMENT '是否邮箱绑定',
  `wx_openid` varchar(255) DEFAULT NULL COMMENT '微信用户openid',
  `wx_is_sub` int(1) NOT NULL DEFAULT '0' COMMENT '微信用户是否关注',
  `wx_info` varchar(2000) DEFAULT NULL COMMENT '微信用户信息',
  `other_info` varchar(255) DEFAULT NULL COMMENT '附加信息',
  `current_login_ip` varchar(255) DEFAULT NULL COMMENT '当前登录ip',
  `current_login_type` int(11) DEFAULT NULL COMMENT '当前登录的操作终端类型',
  `last_login_ip` varchar(255) DEFAULT NULL COMMENT '上次登录ip',
  `last_login_type` int(11) DEFAULT NULL COMMENT '上次登录的操作终端类型',
  `login_num` int(11) NOT NULL DEFAULT '0' COMMENT '登录次数',
  `real_name` varchar(50) DEFAULT '' COMMENT '真实姓名',
  `sex` smallint(6) DEFAULT '0' COMMENT '性别 0保密 1男 2女',
  `location` varchar(255) DEFAULT '' COMMENT '所在地',
  `nick_name` varchar(50) DEFAULT '牛酷用户' COMMENT '用户昵称',
  `wx_unionid` varchar(255) NOT NULL DEFAULT '' COMMENT '微信unionid',
  `qrcode_template_id` int(11) NOT NULL DEFAULT '0' COMMENT '模板id',
  `wx_sub_time` int(11) DEFAULT '0' COMMENT '微信用户关注时间',
  `wx_notsub_time` int(11) DEFAULT '0' COMMENT '微信用户取消关注时间',
  `reg_time` int(11) DEFAULT '0' COMMENT '注册时间',
  `current_login_time` int(11) DEFAULT '0' COMMENT '当前登录时间',
  `last_login_time` int(11) DEFAULT '0' COMMENT '上次登录时间',
  `birthday` int(11) DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `IDX_sys_user_user_email` (`user_email`),
  KEY `IDX_sys_user_user_name` (`user_name`),
  KEY `IDX_sys_user_user_password` (`user_password`),
  KEY `IDX_sys_user_user_tel` (`user_tel`),
  KEY `IDX_sys_user_wx_openid` (`wx_openid`),
  KEY `IDX_sys_user_wx_unionid` (`wx_unionid`),
  KEY `IDX_sys_user_user_mobile` (`mobile`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=372 COMMENT='系统用户表';


alter table `sys_user` add  `is_agent` int(11)    NOT NULL DEFAULT '0'   COMMENT '是否是代理商会员' after is_member   ;

alter table `sys_user_admin` add  `is_agent` int(11)    NOT NULL DEFAULT '0'   COMMENT '是否是代理商会员' after is_admin   ;
