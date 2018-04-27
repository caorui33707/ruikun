CREATE TABLE `article` (
  `article_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL DEFAULT '',
  `author_email` varchar(60) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `article_type` tinyint(1) unsigned NOT NULL DEFAULT '2',
  `is_open` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `file_url` varchar(255) NOT NULL DEFAULT '',
  `open_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `article_cat` (
  `cat_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL DEFAULT '',
  `cat_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `show_in_nav` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `cat_type` (`cat_type`),
  KEY `sort_order` (`sort_order`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) DEFAULT NULL,
  `opennew` tinyint(1) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='导航栏';

CREATE TABLE `username` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT '' COMMENT '用户名',
  `mobile` char(11) DEFAULT '0' COMMENT '手机号',
  `passwd` char(32) DEFAULT '' COMMENT '密码',
  `register_time` int(11) DEFAULT '0' COMMENT '注册时间',
  `deleted` tinyint(3) DEFAULT '0' COMMENT '1 删除',
  `login_time` int(11) DEFAULT '0' COMMENT '登录时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`),
  KEY `register_time` (`register_time`),
  KEY `login_time` (`login_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(30) DEFAULT '' COMMENT '用户名',
  `passwd` char(32) DEFAULT '' COMMENT '密码',
  `register_time` int(11) DEFAULT '0' COMMENT '注册时间',
  `deleted` tinyint(3) DEFAULT '0' COMMENT '1 删除',
  `login_time` int(11) DEFAULT '0' COMMENT '登录时间',
  PRIMARY KEY (`id`),
  KEY `register_time` (`register_time`),
  KEY `login_time` (`login_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT '管理后台';



