-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 06 月 27 日 09:56
-- 服务器版本: 5.1.63
-- PHP 版本: 5.2.17p1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bosheng`
--

-- --------------------------------------------------------

--
-- 表的结构 `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `pid` smallint(6) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `access`
--

INSERT INTO `access` (`role_id`, `node_id`, `level`, `pid`, `module`) VALUES
(2, 1, 1, 0, NULL),
(2, 40, 2, 1, NULL),
(2, 30, 2, 1, NULL),
(3, 1, 1, 0, NULL),
(2, 69, 2, 1, NULL),
(2, 50, 3, 40, NULL),
(3, 50, 3, 40, NULL),
(1, 50, 3, 40, NULL),
(3, 7, 2, 1, NULL),
(3, 39, 3, 30, NULL),
(2, 39, 3, 30, NULL),
(2, 49, 3, 30, NULL),
(4, 1, 1, 0, NULL),
(4, 2, 2, 1, NULL),
(4, 3, 2, 1, NULL),
(4, 4, 2, 1, NULL),
(4, 5, 2, 1, NULL),
(4, 6, 2, 1, NULL),
(4, 7, 2, 1, NULL),
(4, 11, 2, 1, NULL),
(5, 25, 1, 0, NULL),
(5, 51, 2, 25, NULL),
(1, 1, 1, 0, NULL),
(1, 39, 3, 30, NULL),
(1, 40, 2, 1, NULL),
(1, 30, 2, 1, NULL),
(1, 7, 2, 1, NULL),
(1, 49, 3, 30, NULL),
(3, 69, 2, 1, NULL),
(3, 30, 2, 1, NULL),
(3, 40, 2, 1, NULL),
(1, 37, 3, 30, NULL),
(1, 36, 3, 30, NULL),
(1, 35, 3, 30, NULL),
(1, 34, 3, 30, NULL),
(1, 33, 3, 30, NULL),
(1, 32, 3, 30, NULL),
(1, 31, 3, 30, NULL),
(2, 32, 3, 30, NULL),
(2, 31, 3, 30, NULL),
(7, 1, 1, 0, NULL),
(7, 30, 2, 1, NULL),
(7, 40, 2, 1, NULL),
(7, 69, 2, 1, NULL),
(7, 50, 3, 40, NULL),
(7, 39, 3, 30, NULL),
(7, 49, 3, 30, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `baoming`
--

CREATE TABLE IF NOT EXISTS `baoming` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `hd_id` int(3) NOT NULL COMMENT '对应活动ID',
  `name` varchar(20) NOT NULL COMMENT '名字',
  `dianpu` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '店铺',
  `phone` varchar(11) NOT NULL COMMENT '电话',
  `remarks` varchar(200) NOT NULL COMMENT '备注',
  `c_time` int(13) NOT NULL COMMENT '报名时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- 转存表中的数据 `baoming`
--

INSERT INTO `baoming` (`id`, `hd_id`, `name`, `dianpu`, `phone`, `remarks`, `c_time`) VALUES
(12, 7, '测试', '东莞东城分馆', '15307578392', '测试', 1403327254),
(18, 13, '李哲', '东莞东城分馆', '13658236635', '测试', 1404547935),
(19, 14, '杨立', '大良云良店', '18676003855', '33333', 1404708603),
(20, 14, '冯颖欣', '大良云良店', '15918009953', '成人', 1404710355),
(21, 13, '周密', '大良云良店', '13635341514', '明天过来报名', 1404723897),
(22, 13, '小米', '大良教育城店', '13985236541', '啊啊啊啊啊', 1404724426),
(23, 13, '李小米', '大良教育城店', '13168579212', '', 1404724988),
(25, 14, '区初', '大良云良店', '15975743932', '', 1404729759),
(26, 14, '苏劲', '北滘怡和店', '18923212233', '', 1404732252),
(27, 14, '何佩怡', '大良云良店', '15899841749', '(°o°)', 1404748680),
(28, 14, '陈维龍', '大良云良店', '13543484660', '', 1404816134),
(29, 14, '梁裕添', '容桂青年路店', '13923232959', '。', 1404858217),
(30, 15, '超级密室', '北滘南源店', '15015800574', '', 1405065547),
(31, 15, '小君', '北滘怡和店', '13570994823', '', 1405140911),
(32, 15, '冯颖欣', '大良云良店', '15918009953', '报名', 1405148596),
(33, 14, '周璇', '大良云良店', '13426251314', '', 1405149319),
(34, 13, '鸿天', '大良云良店', '15015800574', '', 1405404837),
(35, 14, '黄石松', '伦教世纪广场店', '13002034522', '', 1407122069),
(36, 14, '吕文轩', '北滘怡和店', '13715405322', '', 1408991102),
(37, 14, '吕浩', '北滘怡和店', '13727311026', '咨询课程！', 1408991288),
(38, 14, '吴彦毅', '北滘南源店', '13724666555', '', 1409124305),
(39, 14, '陈玲', '大良云良店', '13726350901', '', 1412581418),
(40, 14, '舒盈盈', '大良云良店', '13392250727', '纤体塑身班', 1413810963),
(41, 14, '习东兴', '大良云良店', '13488119760', '', 1413890670),
(42, 14, '代佳', '大良云良店', '18942416086', '有没有成人班，什么时间', 1422856620);

-- --------------------------------------------------------

--
-- 表的结构 `dianpu`
--

CREATE TABLE IF NOT EXISTS `dianpu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `dianpu`
--

INSERT INTO `dianpu` (`id`, `name`, `status`) VALUES
(1, '大良云良店', 1),
(2, '大良教育城店', 1),
(3, '北滘怡和店', 1),
(4, '北滘南源店', 1),
(5, '容桂青年路店', 1),
(6, '容桂文星路店', 1),
(7, '伦教世纪广场店', 1),
(8, '陈村樟树路店', 1),
(9, '东莞东城分馆', 1);

-- --------------------------------------------------------

--
-- 表的结构 `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id` smallint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort` smallint(3) unsigned NOT NULL DEFAULT '0',
  `show` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `group`
--

INSERT INTO `group` (`id`, `name`, `title`, `create_time`, `update_time`, `status`, `sort`, `show`) VALUES
(2, 'App', '应用中心', 1222841259, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, '项目组1'),
(2, '项目组2'),
(3, '项目组3');

-- --------------------------------------------------------

--
-- 表的结构 `huodong`
--

CREATE TABLE IF NOT EXISTS `huodong` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '活动标题',
  `content` text NOT NULL COMMENT '活动内容',
  `view` int(6) NOT NULL COMMENT '阅读次数',
  `u_id` int(3) NOT NULL COMMENT '发布人ID',
  `status` int(1) NOT NULL COMMENT '0-不通过1-通过',
  `stop_time` int(13) NOT NULL COMMENT '结束时间',
  `start_time` varchar(13) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `huodong`
--

INSERT INTO `huodong` (`id`, `title`, `content`, `view`, `u_id`, `status`, `stop_time`, `start_time`) VALUES
(5, '测试a', '<p>测试aaaa</p><p>sd</p><p>df</p><p>s</p><p>df</p><p>sd</p>', 47, 1, 1, 1407254400, '1402329600'),
(7, '旗舰馆招生！', '<span id="comp-paste-div-8189">咏春拳，中国拳术中南拳之一。其起源有3 种说法：一说是福建 永春县严三娘 创造，一说是由少林寺和尚至 善从福建带到广州光孝寺，另一说是方永春所创造。该拳内容主要包括小稔头、标子和寻桥 3套拳，以上、中、下三搒手为基本动作。身型要求护裆，沉肩，落膊，抱拳，护胸。主要手型有凤眼拳、柳叶掌等。主要手法有挫手、撩手、三搒手、左右破排手、沉桥、黏打。主要步法有三字马、追马等。攻防中多采用闪身、贴身、紧 迫和紧打，动作敏捷，快速，刚柔相间。<br /><br />顺德博胜咏春文化传播有限公司是一家集咏春拳推广、普及，咏春文化传播和中华传统武术文化宣传于一体的专业武术文化传播公司。顺德博胜咏春文化传播有限公司是一家集咏春拳推广、普及，咏春文化传播和中华传统武术文化宣传于一体的专业武术文化传播公司。<br /><br />博胜咏春馆教练团队组建于2007年，在顺德从事咏春拳教学至今，已向近千爱好者传播咏春拳术。我们秉持“博揽群英 胜在共赢”的企业文化理念，即向各地招揽精英武术教练,招揽有志将中华武术发扬光大的精英创业团队,招收有兴趣传承中华武术的精英学员,创造一个多方共赢的发展环境,将咏春拳文化发扬光大,实现帮助广大人民群众强身健体，提高自我保护能力的目的。<br /><br />博胜咏春馆教练团队组建于2007年，在顺德从事咏春拳教学至今，已向近千爱好者传播咏春拳术。我们秉持“博揽群英 胜在共赢”的企业文化理念，即向各地招揽精英武术教练,招揽有志将中华武术发扬光大的精英创业团队,招收有兴趣传承中华武术的精英学员,创造一个多方共赢的发展环境,将咏春拳文化发扬光大,实现帮助广大人民群众强身健体，提高自我保护能力的目的。</span>', 84, 1, 1, 1403280000, '1403193600'),
(15, '2014暑期咏春拳训练营之花儿与少年篇', '<p><span style="font-family:宋体;FONT-SIZE: 13.5pt">2014</span><span style="font-family:宋体;FONT-SIZE: 13.5pt">暑期咏春拳训练营之花儿与少年篇</span></p><p>&nbsp;</p><p><img alt="" src="/upload/day_140711/201407111744548816.jpg" /></p><p><span style="font-size:16px;color:#ff0000;"><strong>&nbsp;北滘旗舰馆</strong></span></p><p><img alt="" src="/upload/day_140707/201407071629159585.jpg" /><br /></p><p><img src="/upload/day_140713/201407131011196738.png" alt="" /><br /></p><p><span style="font-family:宋体;font-size:16px;color:#ff0000;"></span>&nbsp;</p><p><img alt="" src="/upload/day_140707/201407071629347490.jpg" /><br /></p><p><img src="/upload/day_140713/201407131011347682.png" alt="" /><br /><br /><img src="/upload/day_140713/201407131011525288.png" alt="" /><br /></p><p><span style="font-family:宋体;color:#3e3e3e;FONT-SIZE: 12pt">&nbsp;<img src="/upload/day_140712/201407121701397402.png" alt="" /></span></p><p><span style="font-family:宋体;color:#3e3e3e;FONT-SIZE: 12pt">&nbsp;<img src="/upload/day_140712/201407121701578155.png" alt="" /></span></p><p><img src="/upload/day_140712/201407121708493479.png" alt="" /><br /></p><p><span style="font-family:宋体;color:#3e3e3e;FONT-SIZE: 12pt">&nbsp;<img src="/upload/day_140712/201407121723115010.png" alt="" /></span></p><p><img src="/upload/day_140712/201407121640537365.png" alt="" /><br /></p><p><img src="/upload/day_140712/201407121641126464.png" alt="" /><br /></p>', 744, 1, 1, 1409328000, '1404662400'),
(13, '2014暑期咏春拳训练营', '<p><span style="color:#ff0000;">2014暑期咏春拳训练营</span></p><p><span style="color:#ff0000;"></span>&nbsp;</p><p><img src="/upload/day_140806/201408061139124760.jpg" alt="" /><br /></p><p><span style="font-size:18px;"><span style="color:#ff0000;"><strong>标准馆<br /></strong></span><br /></span><img alt="" src="/upload/day_140701/201407011048096735.jpg" /></p><p>&nbsp;<img src="/upload/day_140713/201407131012361005.png" alt="" /></p><p><img alt="" src="/upload/day_140701/201407011048425964.jpg" /><br /><br /><img src="/upload/day_140713/201407131012483910.png" alt="" /><br /><br /><img alt="" src="/upload/day_140701/201407011049129809.jpg" /><br /></p><p><img src="/upload/day_140713/201407131013034249.png" alt="" /><br /></p><p><img src="/upload/day_140712/201407121704379815.png" alt="" /><br /></p><p><img src="/upload/day_140712/201407121704545331.png" alt="" /><br /><br /><img src="/upload/day_140712/201407121709567459.png" alt="" /><br /></p><p><img src="/upload/day_140712/201407121721593162.png" alt="" /><br /></p><p><img src="/upload/day_140712/201407121451407997.png" alt="" /></p><p><img src="/upload/day_140712/201407121452199663.png" alt="" /></p>', 380, 1, 1, 1409328000, '1404144000'),
(14, '博揽群英 胜在共赢', '<p><span style="color:#009900;">博揽群英 胜在共赢<br /><br /></span><img alt="" src="/upload/day_140704/201407041757278842.jpg" /><br /><strong><br /><img src="/upload/day_140712/201407121803189793.png" alt="" /><br /><br /></strong></p><p><img src="/upload/day_140712/201407121803578685.png" alt="" /><br /></p><p><img src="/upload/day_140712/201407121805289870.png" alt="" /><br /></p><p><br /></p><p><img alt="" src="/upload/day_140712/201407121504531606.png" /></p><p><br /><img src="/upload/day_140712/201407121809455245.png" alt="" /></p><p><img src="/upload/day_140712/201407121810018326.png" alt="" /></p><p><img src="/upload/day_140712/201407121810149709.png" alt="" /></p><p><img src="/upload/day_140712/201407121810242107.png" alt="" /></p><p><img src="/upload/day_140712/201407121810433885.png" alt="" /></p><p><img src="/upload/day_140712/201407121810545913.png" alt="" /></p><p><img src="/upload/day_140712/201407121812433930.png" alt="" /><br /></p><p><img src="/upload/day_140712/201407121812571212.png" alt="" /><br /></p><p><br /><img src="/upload/day_140712/201407121813296188.png" alt="" /></p><p><br /></p><p><img src="/upload/day_140712/201407121813418579.png" alt="" /><br /></p><p><span style="color: rgb(0, 153, 0);"><br /></span></p><p><br /></p>', 1043, 1, 1, 1419955200, '1404403200');

-- --------------------------------------------------------

--
-- 表的结构 `liuyan`
--

CREATE TABLE IF NOT EXISTS `liuyan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hd_id` int(3) NOT NULL COMMENT '活动ID',
  `name` varchar(20) NOT NULL COMMENT '呢称',
  `phone` varchar(11) NOT NULL COMMENT '联系电话',
  `liuyan` varchar(255) NOT NULL COMMENT '留言内容',
  `re_id` int(3) NOT NULL COMMENT '回复人ID',
  `re_c` varchar(300) NOT NULL COMMENT '回复内容',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0-不通过1-通过',
  `c_time` varchar(13) NOT NULL,
  `up_time` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `liuyan`
--

INSERT INTO `liuyan` (`id`, `hd_id`, `name`, `phone`, `liuyan`, `re_id`, `re_c`, `status`, `c_time`, `up_time`) VALUES
(1, 1, 'tiancan', '15914345140', '大家都来参加吧！！！', 1, '多谢你的参与！！', 0, '1403085284', '1403085328'),
(2, 1, '李', '15307578392', '86665588858', 0, '', 0, '1403162903', ''),
(4, 1, 'asd', '15914345142', 'asda', 0, '', 0, '1403168099', ''),
(5, 1, '递给哦', '15914345148', '464436', 0, '', 0, '1403172284', ''),
(9, 7, '型', '15015800574', '111', 0, '', 1, '1403938944', ''),
(7, 7, 'a', '15015800574', 'aaaaa', 0, '', 0, '1403237057', '');

-- --------------------------------------------------------

--
-- 表的结构 `node`
--

CREATE TABLE IF NOT EXISTS `node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `group_id` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=88 ;

--
-- 转存表中的数据 `node`
--

INSERT INTO `node` (`id`, `name`, `title`, `status`, `remark`, `sort`, `pid`, `level`, `type`, `group_id`) VALUES
(49, 'read', '查看', 1, '', NULL, 30, 3, 0, 0),
(40, 'Index', '默认模块', 1, '', 1, 1, 2, 0, 0),
(39, 'index', '列表', 1, '', NULL, 30, 3, 0, 0),
(37, 'resume', '恢复', 1, '', NULL, 30, 3, 0, 0),
(36, 'forbid', '禁用', 1, '', NULL, 30, 3, 0, 0),
(35, 'foreverdelete', '删除', 1, '', NULL, 30, 3, 0, 0),
(34, 'update', '更新', 1, '', NULL, 30, 3, 0, 0),
(33, 'edit', '编辑', 1, '', NULL, 30, 3, 0, 0),
(32, 'insert', '写入', 1, '', NULL, 30, 3, 0, 0),
(31, 'add', '新增', 1, '', NULL, 30, 3, 0, 0),
(30, 'Public', '公共模块', 1, '', 2, 1, 2, 0, 0),
(7, 'User', '后台用户', 1, '', 4, 1, 2, 0, 2),
(6, 'Role', '角色管理', 1, '', 3, 1, 2, 0, 2),
(2, 'Node', '节点管理', 1, '', 2, 1, 2, 0, 2),
(1, 'Admin', '后台管理', 1, '', NULL, 0, 1, 0, 0),
(50, 'main', '空白首页', 1, '', NULL, 40, 3, 0, 0),
(84, 'Huodong', '活动管理', 1, NULL, 5, 1, 2, 0, 2),
(85, 'Baoming', '报名管理', 1, NULL, 6, 1, 2, 0, 2),
(86, 'Liuyan', '留言管理', 1, NULL, 7, 1, 2, 0, 2),
(87, 'Dianpu', '网点管理', 1, NULL, 8, 1, 2, 0, 2);

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `ename` varchar(5) DEFAULT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parentId` (`pid`),
  KEY `ename` (`ename`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`id`, `name`, `pid`, `status`, `remark`, `ename`, `create_time`, `update_time`) VALUES
(1, '领导组', 0, 1, '', '', 1208784792, 1254325558),
(2, '员工组', 0, 1, '', '', 1215496283, 1254325566),
(7, '演示组', 0, 1, '', NULL, 1254325787, 0);

-- --------------------------------------------------------

--
-- 表的结构 `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(4, '27'),
(4, '26'),
(4, '30'),
(5, '31'),
(3, '22'),
(3, '1'),
(1, '4'),
(2, '3'),
(7, '2'),
(3, '35'),
(3, '36');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(64) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `bind_account` varchar(50) NOT NULL,
  `last_login_time` int(11) unsigned DEFAULT '0',
  `last_login_ip` varchar(40) DEFAULT NULL,
  `login_count` mediumint(8) unsigned DEFAULT '0',
  `verify` varchar(32) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `type_id` tinyint(2) unsigned DEFAULT '0',
  `info` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `account`, `nickname`, `password`, `bind_account`, `last_login_time`, `last_login_ip`, `login_count`, `verify`, `email`, `remark`, `create_time`, `update_time`, `status`, `type_id`, `info`) VALUES
(1, 'admin', '管理员', '21232f297a57a5a743894a0e4a801fc3', '', 1428735663, '183.27.118.169', 993, '8888', 'liu21st@gmail.com', '备注信息', 1222907803, 1239977420, 1, 0, ''),
(2, 'demo', '演示', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 1306159437, '127.0.0.1', 94, '8888', '', '', 1239783735, 1254325770, 1, 0, ''),
(3, 'member', '员工', 'aa08769cdcb26674c6706093503ff0a3', '', 1254326104, '127.0.0.1', 15, '', '', '', 1253514375, 1254325728, 1, 0, ''),
(4, 'leader', '领导', 'c444858e0aaeb727da73d2eae62321ad', '', 1284542339, '127.0.0.1', 17, '', '', '领导', 1253514575, 1254325705, 1, 0, ''),
(36, 'zhanghuihua', '张慧华', '21218cca77804d2ba1922c33e0151105', '', 0, NULL, 0, NULL, 'zhanghuihua@sohu.com', '', 1284448629, 1285638494, 1, 0, '');
