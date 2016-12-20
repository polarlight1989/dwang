/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : chengjian

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-11-23 19:57:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for arcs
-- ----------------------------
DROP TABLE IF EXISTS `arcs`;
CREATE TABLE `arcs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `cdate` varchar(11) NOT NULL,
  `mdate` varchar(11) NOT NULL,
  `lang` varchar(11) NOT NULL DEFAULT 'zh',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of arcs
-- ----------------------------
INSERT INTO `arcs` VALUES ('3', '11', '公司文化', '公司文化公司文化', '/Uploads/c0b01905/18812f05/da1f20ff/2a4a681f/73319.png', '<p>公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化</p>', '1478975277', '', 'zh');
INSERT INTO `arcs` VALUES ('4', '11', '公司文化', '公司文化公司文化', '/Uploads/86a3cd18/b686d670/c5ab971b/445232d9/30183.png', '<p>公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化</p>', '1478975287', '', 'zh');
INSERT INTO `arcs` VALUES ('5', '11', '公司文化', '公司文化公司文化', '/Uploads/86a3cd18/b686d670/c5ab971b/445232d9/30183.png', '<p>公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化</p>', '1478975290', '', 'zh');
INSERT INTO `arcs` VALUES ('14', '43', '代表项目测试代表项目测试代表项目测试代表项目测试', '代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试', '/Uploads/c41f5866/a85b97a1/232dcbc4/ff00b070/73318.png', '代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试', '1479119775', '1479249121', 'zh');
INSERT INTO `arcs` VALUES ('18', '43', '代表项目测试', '代表项目测试', '/Uploads/c41f5866/a85b97a1/232dcbc4/ff00b070/73318.png', '代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试', '1479119775', '1479119923', 'zh');
INSERT INTO `arcs` VALUES ('19', '43', '代表项目测试', '代表项目测试', '/Uploads/86a3cd18/b686d670/c5ab971b/445232d9/30183.png', '<p>\n	代表项目测试代表项目测试代表项目测试代表\n</p>\n<p>\n	<br />\n</p>\n<p>\n	项目测试代表项目测试\n</p>\n<p>\n	<br />\n</p>\n<p>\n	代表项目测试\n</p>', '1479119895', '1479119941', 'zh');
INSERT INTO `arcs` VALUES ('17', '43', '代表项目测试', '代表项目测试', '/Uploads/86a3cd18/b686d670/c5ab971b/445232d9/30183.png', '<p>\n	代表项目测试代表项目测试代表项目测试代表\n</p>\n<p>\n	<br />\n</p>\n<p>\n	项目测试代表项目测试\n</p>\n<p>\n	<br />\n</p>\n<p>\n	代表项目测试\n</p>', '1479119895', '1479119941', 'zh');
INSERT INTO `arcs` VALUES ('20', '43', '代表项目测试', '代表项目测试', '/Uploads/c41f5866/a85b97a1/232dcbc4/ff00b070/73318.png', '代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试', '1479119775', '1479119923', 'zh');
INSERT INTO `arcs` VALUES ('21', '43', '代表项目测试', '代表项目测试', '/Uploads/c41f5866/a85b97a1/232dcbc4/ff00b070/73318.png', '代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试', '1479119775', '1479119923', 'zh');
INSERT INTO `arcs` VALUES ('22', '43', '代表项目测试', '代表项目测试', '/Uploads/86a3cd18/b686d670/c5ab971b/445232d9/30183.png', '<p>\n	代表项目测试代表项目测试代表项目测试代表\n</p>\n<p>\n	<br />\n</p>\n<p>\n	项目测试代表项目测试\n</p>\n<p>\n	<br />\n</p>\n<p>\n	代表项目测试\n</p>', '1479119895', '1479119941', 'zh');
INSERT INTO `arcs` VALUES ('23', '43', '代表项目测试', '代表项目测试', '/Uploads/86a3cd18/b686d670/c5ab971b/445232d9/30183.png', '<p>\n	代表项目测试代表项目测试代表项目测试代表\n</p>\n<p>\n	<br />\n</p>\n<p>\n	项目测试代表项目测试\n</p>\n<p>\n	<br />\n</p>\n<p>\n	代表项目测试\n</p>', '1479119895', '1479119941', 'zh');
INSERT INTO `arcs` VALUES ('27', '48', '测试视频', '/public/videojs/oceans-clip1.mp4', '/public/temp/videp.png', '<span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span>', '1479125632', '1479258353', 'zh');
INSERT INTO `arcs` VALUES ('28', '48', '测试视频', '/public/videojs/oceans-clip.mp4', '/public/temp/videp.png', '<span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span>', '1479125632', '', 'zh');
INSERT INTO `arcs` VALUES ('29', '48', '测试视频', '/public/videojs/oceans-clip.mp4', '/public/temp/videp.png', '<span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span>', '1479125632', '', 'zh');
INSERT INTO `arcs` VALUES ('30', '48', '测试视频', '/public/videojs/oceans-clip.mp4', '/public/temp/videp.png', '<span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span>', '1479125632', '', 'zh');
INSERT INTO `arcs` VALUES ('31', '48', '测试视频', '/public/videojs/oceans-clip.mp4', '/public/temp/videp.png', '<span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span><span style=\"white-space:normal;\">测试视频</span>', '1479125632', '', 'zh');
INSERT INTO `arcs` VALUES ('32', '11', '123123', '123123', '', '123123', '1479248493', '', 'en');

-- ----------------------------
-- Table structure for areas
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `rules` varchar(500) NOT NULL,
  `cdate` varchar(11) NOT NULL,
  `mdate` varchar(11) NOT NULL,
  `jumpurl` varchar(255) NOT NULL,
  `lang` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of areas
-- ----------------------------
INSERT INTO `areas` VALUES ('6', '新加坡', '新加坡1|http://www.baidu.com\n新加坡2|http://www.baidu.com\n新加坡3|http://www.baidu.com\n新加坡4|http://www.baidu.com\n新加坡5|http://www.baidu.com\n新加坡6|http://www.baidu.com', '1479893329', '', '', 'zh');
INSERT INTO `areas` VALUES ('7', '香港', '香港1|http://www.baidu.com\n香港2|http://www.baidu.com\n香港3|http://www.baidu.com\n香港4|http://www.baidu.com\n香港5|http://www.baidu.com', '1479893351', '1479893792', '', 'zh');
INSERT INTO `areas` VALUES ('8', '非洲', '非洲1|http://www.baidu.com\n非洲2|http://www.baidu.com\n非洲3|http://www.baidu.com\n非洲4|http://www.baidu.com\n非洲5|http://www.baidu.com\n非洲6|http://www.baidu.com', '1479893363', '', '', 'zh');
INSERT INTO `areas` VALUES ('9', '波兰', '波兰1|http://www.baidu.com\n波兰2|http://www.baidu.com\n波兰3|http://www.baidu.com\n波兰4|http://www.baidu.com\n波兰5|http://www.baidu.com\n波兰6|http://www.baidu.com', '1479893409', '', '', 'zh');

-- ----------------------------
-- Table structure for catalogs
-- ----------------------------
DROP TABLE IF EXISTS `catalogs`;
CREATE TABLE `catalogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `entitle` varchar(50) NOT NULL,
  `cdate` varchar(11) NOT NULL,
  `mdate` varchar(11) NOT NULL,
  `actionurl` varchar(50) NOT NULL,
  `ord` int(50) NOT NULL DEFAULT '100',
  `level` int(3) NOT NULL,
  `content` varchar(3000) CHARACTER SET utf8 NOT NULL,
  `encontent` varchar(3000) NOT NULL,
  `type` varchar(50) NOT NULL,
  `thumb` varchar(300) NOT NULL,
  `tpl` varchar(100) NOT NULL,
  `arctpl` varchar(50) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `mark` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of catalogs
-- ----------------------------
INSERT INTO `catalogs` VALUES ('3', '0', '', '企业概况', 'Situation', '', '1478956580', '', '100', '0', '<div class=\'txtConList\'><p style=\"text-align: center;\"><img src=\"/public/images/zuzhi.jpg\"/></p></div>', '', '', '/public//images/banner_zizhi.png', '', '', 'zh', '');
INSERT INTO `catalogs` VALUES ('4', '3', '', '关于我们', 'Company', '', '1478887011', 'catalogs', '100', '1', '', '', '', '/html/images/banner_zizhi.png', '', '', 'zh', '');
INSERT INTO `catalogs` VALUES ('36', '4', '', '领导班子', 'Leaders', '', '', 'catalogs/single', '100', '2', '', '', '', '/public//images/banner_zizhi.png', 'leaders', 'leaders', '', '');
INSERT INTO `catalogs` VALUES ('11', '3', '', '企业文化', 'Culture', '', '', 'catalogs/arcs', '100', '1', '', '', 'arcs', '/public//images/banner_zizhi.png', 'thumbarcs', 'arc', 'zh', '');
INSERT INTO `catalogs` VALUES ('43', '42', '', '代表项目', 'Project', '', '', 'catalogs/arcs', '100', '1', '', '', 'arcs', '/public//images/banner_dbxm.jpg', 'Project', 'thumbarc', '', '');
INSERT INTO `catalogs` VALUES ('33', '3', '', '荣誉资质', 'Honor', '', '1479113225', 'catalogs/single', '100', '2', '<ul class=\"zizhiList\">\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n	<li>\n		<a href=\"\" class=\"zizhipic\"><img src=\"/public/temp/zizhi1.png\" width=\"264px\" height=\"197px\" /></a> <span></span> \n	</li>\n</ul>', '', '', '/public/images/banner_zizhi.png', 'single', '', '', '');
INSERT INTO `catalogs` VALUES ('34', '3', '', '组织架构', 'Organization', '', '1479298885', 'catalogs/single', '100', '2', ' <br />\n<p style=\"text-align:center;\">\n	<br />\n<img src=\"/public/images/zuzhi.jpg\" />\n</p>\n<br />', '', 'single', '/public//images/banner_zizhi.png', 'single', '', 'zh', '');
INSERT INTO `catalogs` VALUES ('35', '4', '', '公司介绍', 'Information', '', '1479254197', 'catalogs/single', '100', '2', '<div class=\"txtConList\">\n	<h2>\n		<img src=\"/public/images/icon_1.png\" />    公司情况\n	</h2>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		公司简介  整合优势\n	</p>\n	<p>\n		上海城建国际工程有限公司（以下简称“城建国际”）是一家以海外工程建设、设计和管理、投资、建筑设备销售为一体的国际公司。城建国际整合了上海城建集团原有的海\n外业务，认真总结和吸取集团近年来新加坡、印度、安哥拉、香港等海外市场所取得的经验，依托集团的整体优势并充分利用原有资源，发挥其在投资、设计、施工、机械制\n造等专业领域的技术优势和核心业务优势，高水平地投身于海外工程建设。\n	</p>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		海外市场  厚积薄发\n	</p>\n	<p>\n		经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步形成了以新加坡、印度、香\n港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东北线C703标、C704标、C708标、C810标、地铁环\n线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688\n标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港\n落马洲支线上水—州头隧道工程LBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计\n划第二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。在印度：凭借丰富的地铁设计施工经验，以设计施工总承包的形式参与当地3条\n地铁与轨道交通建设，承接了新德里地铁高架Ⅱ期工程的BC-7、BC-34、BC-26标、新德里新机场地铁快线C5标、钦奈地铁项目一期UAA-04标、德里地铁三期工程CC05标、\n德里地铁三期工程CC27等工程项目。在非洲：以EPC总承包方式完成了在当地规模最大的标志性公共建筑——安哥拉罗安达国家体育场、繁荣二号、邮电大厦等多个办公楼项\n目，以及隆格水稻种植农工业农场项目土建分包工程，总计合同金额约为3.91亿美元。2010年作为非洲足球杯主赛场——安哥拉罗安达国家体育场荣获当地政府颁发的“最佳\n承包商”奖，承包商受到了总统的亲自接见，该工程成为安哥拉历史上唯一获此殊荣的工程。在海外市场拓展中，公司具有“对外国际经济技术合作经营”、“援外工程项\n目A级”以及新加坡“A1施工”资质，并多次被业主授予“最佳工程”、“安全金奖”、“优质高效”等荣誉，企业国际品牌逐步得到市场认可。\n	</p>\n	<p>\n		<br />\n	</p>\n</div>', '<div class=\"txtConList\">\n	<h2>\n		<img src=\"/public/images/icon_1.png\" />Infomation\n	</h2>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		公司简介 整合优势\n	</p>\n	<p>\n		上海城建国际工程有限公司（以下简称“城建国际”）是一家以海外工程建设、设计和管理、投资、建筑设备销售为一体的国际公司。城建国际整合了上海城建集团原有的海\n外业务，认真总结和吸取集团近年来新加坡、印度、安哥拉、香港等海外市场所取得的经验，依托集团的整体优势并充分利用原有资源，发挥其在投资、设计、施工、机械制\n造等专业领域的技术优势和核心业务优势，高水平地投身于海外工程建设。\n	</p>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		海外市场 ?厚积薄发\n	</p>\n	<p>\n		经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步形成了以新加坡、印度、香\n港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东北线C703标、C704标、C708标、C810标、地铁环\n线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688\n标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港\n落马洲支线上水—州头隧道工程LBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计\n划第二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。在印度：凭借丰富的地铁设计施工经验，以设计施工总承包的形式参与当地3条\n地铁与轨道交通建设，承接了新德里地铁高架Ⅱ期工程的BC-7、BC-34、BC-26标、新德里新机场地铁快线C5标、钦奈地铁项目一期UAA-04标、德里地铁三期工程CC05标、\n德里地铁三期工程CC27等工程项目。在非洲：以EPC总承包方式完成了在当地规模最大的标志性公共建筑——安哥拉罗安达国家体育场、繁荣二号、邮电大厦等多个办公楼项\n目，以及隆格水稻种植农工业农场项目土建分包工程，总计合同金额约为3.91亿美元。2010年作为非洲足球杯主赛场——安哥拉罗安达国家体育场荣获当地政府颁发的“最佳\n承包商”奖，承包商受到了总统的亲自接见，该工程成为安哥拉历史上唯一获此殊荣的工程。在海外市场拓展中，公司具有“对外国际经济技术合作经营”、“援外工程项\n目A级”以及新加坡“A1施工”资质，并多次被业主授予“最佳工程”、“安全金奖”、“优质高效”等荣誉，企业国际品牌逐步得到市场认可。\n	</p>\n	<p>\n		<br />\n	</p>\n</div>', '', '/public/images/banner_zizhi.png', 'single', '', 'en', '');
INSERT INTO `catalogs` VALUES ('38', '0', '', '媒体中心', 'Media', '', '', '', '100', '0', '', '', '', '/public/images/banner_mtzx.jpg', '', '', '', '');
INSERT INTO `catalogs` VALUES ('39', '3', '', '珍贵历程', 'History', '', '', 'dongtai/arcs', '100', '1', '', '', '', '/public/images/banner_mtzx.jpg', 'dongtai', 'dongtai', '', '');
INSERT INTO `catalogs` VALUES ('40', '0', '', '加入我们', 'JoinUs', '', '', '', '100', '0', '', '', '', '/public/images/banner_zxns.jpg', '', '', '', '');
INSERT INTO `catalogs` VALUES ('41', '40', '', '招贤纳士', 'Jobs', '', '', 'joinus/arcs', '100', '1', '', '', '', '/public/images/banner_zxns.jpg', 'joinus', 'joinus', '', '');
INSERT INTO `catalogs` VALUES ('42', '0', '', '产品与服务', 'Product', '', '', '', '100', '0', '', '', '', '/public//images/banner_dbxm.jpg', '', '', '', '');
INSERT INTO `catalogs` VALUES ('46', '42', '', '服务模式', 'Service Mode', '', '', 'catalogs/arcs', '100', '1', '', '', 'arcs', '/public/images/banner_dbxm.jpg', 'thumbarcs', '', '', '');
INSERT INTO `catalogs` VALUES ('45', '42', '', '区域市场', 'Market', '', '', 'areas/list', '100', '1', '', '', '', '/public/images/banner_dbxm.jpg', 'quyu', '', '', '');
INSERT INTO `catalogs` VALUES ('47', '40', '', '发展与机会', 'Progress', '', '1479123350', 'catalogs/single', '100', '1', '<div class=\"txtConList\">\n	<h2>\n		<img src=\"/public/images/icon_2.png\" />    发展与机会\n	</h2>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		<br />\n	</p>\n	<p>\n		人才是企业发展之本、竞争之本。城建国际视人才为企业第一资源，把依靠人才作为企业发展的根本前提，把尊重人才作为企业发展的根本准则，把推进企业和员工共同发展\n作为人才战略的根本任务。公司尊重员工的个性和追求，鼓励员工提升自身能力，认同员工所取得的成绩，并善于为各类人才提供充分施展才华的舞台，做到人尽其才，才尽\n其用，让员工分享企业发展成果，实现共同发展，共享成功。\n	</p>\n	<p>\n		城建国际为您提供多种职业发展方向：\n	</p>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		职能管理方向\n	</p>\n	<p>\n		如果您对管理感兴趣，但愿意继续关注自己的职能领域专业技术。您可以选择职能管理发展方向，城建国际将会为您的成长提供支持，您将可以把您的知识运用到您的专业领\n域，同时发挥您的管理才能。（市场—采购—财务—人力资源—行政—法务）\n	</p>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		专业技能方向\n	</p>\n	<p>\n		如果您想成为一名出色的工程师，想继续发展您的专业技能，并且能够保持自己在专业领域的领先地位。您可以选择专业技能职业发展方向，我们将为您提供广阔的专业领域\n发展空间，助您成长为技术类专家型人才！\n	</p>\n	<p style=\"color:#62abf6;font-size:20px;margin-top:25px;\">\n		项目管理方向\n	</p>\n	<p>\n		作为一家施工总承包企业，我们需要优秀的项目经理致力于工程项目管理。我们将为您提供专业的培训及海外学习机会，在通往优秀项目经理的职业道路上与您携手并进！\n	</p>\n</div>', '', '', '/public/images/banner_zxns.jpg', 'single', '', 'zh', '');
INSERT INTO `catalogs` VALUES ('48', '38', '', '企业宣传片', 'Videos', '', '', 'catalogs/arcs', '100', '1', '', '', '', '/public/images/banner_mtzx.jpg', 'videos', '', '', '');
INSERT INTO `catalogs` VALUES ('49', '38', '', '媒体来访', 'Visit', '', '', 'catalogs/arcs', '100', '1', '', '', 'arcs', '/public/images/banner_mtzx.jpg', 'thumbarcs', '', '', '');
INSERT INTO `catalogs` VALUES ('50', '33', '', '公司资质', 'Aptitude', '', '', 'catalogs/thumbs', '100', '2', '', '', '', '/public//images/banner_zizhi.png', 'thumbarcs2', '', '', '');
INSERT INTO `catalogs` VALUES ('51', '33', '', '历年荣誉', 'AllHonor', '', '', 'catalogs/thumbs', '100', '2', '', '', '', '/public//images/banner_zizhi.png', 'thumbarcs2', '', '', '');
INSERT INTO `catalogs` VALUES ('52', '38', '', '公司动态', 'News', '', '', 'catalogs/arcs', '100', '1', '', '', 'arcs', '', 'thumbarcs', 'arc', '', '');

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` varchar(100) NOT NULL,
  `zh` varchar(500) NOT NULL,
  `en` varchar(500) NOT NULL,
  `val` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('tel', '021-53599950', '021-53599950', '');
INSERT INTO `config` VALUES ('banner_3', '/Uploads/840734f7/8c87f1d4/3f7fa4a1/8dc721e6/590371.png', '', '');
INSERT INTO `config` VALUES ('banner_38', '/Uploads/c3ad8695/aff361ac/52277703/6aa38b0e/124455.jpg', '', '');
INSERT INTO `config` VALUES ('banner_40', '/Uploads/ed7fe762/d8272588/9eb87d59/f4b1d5b9/189078.jpg', '', '');
INSERT INTO `config` VALUES ('banner_42', '/Uploads/4663ec7f/785ca523/26c5cec4/41393d8a/152398.jpg', '', '');
INSERT INTO `config` VALUES ('footer_left', '页底信息 - 左', 'Delhi Metro phase three', '');
INSERT INTO `config` VALUES ('footer_mid', '页底信息 - 中', 'Delhi Metro phase three', '');
INSERT INTO `config` VALUES ('footer_right', '页底信息 - 右', '021-48679864 15333876849', '');
INSERT INTO `config` VALUES ('footer_2', 'Power By 上海钒斯', 'Power By 上海钒斯', '');
INSERT INTO `config` VALUES ('footer_1', '上海城建', 'Copyright', '');

-- ----------------------------
-- Table structure for dongtai
-- ----------------------------
DROP TABLE IF EXISTS `dongtai`;
CREATE TABLE `dongtai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `year` varchar(50) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `cdate` varchar(11) NOT NULL,
  `mdate` varchar(11) NOT NULL,
  `lang` varchar(255) NOT NULL DEFAULT 'zh',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of dongtai
-- ----------------------------
INSERT INTO `dongtai` VALUES ('7', '大事记', '大事记大事记大事记', '1990', '', '<p>大事记大事记大事记</p>', '1478998257', '', 'zh');
INSERT INTO `dongtai` VALUES ('8', '大事记', '大事记大事记大事记', '1991', '', '<p>\n	大事记大事记大事记\n</p>', '1478998259', '1479895261', 'zh');
INSERT INTO `dongtai` VALUES ('9', '大事记', '大事记大事记大事记', '1992', '', '<p>\n	大事记大事记大事记\n</p>', '1478998261', '1479895267', 'zh');
INSERT INTO `dongtai` VALUES ('10', '大事记', '大事记大事记大事记大事记大事记大事记', '1993', '', '<p>\n	大事记大事记大事记\n</p>', '1478998265', '1479895272', 'zh');
INSERT INTO `dongtai` VALUES ('11', '大事记', '大事记大事记大事记大事记大事记大事记大事记大事记大事记', '1994', '', '<p>\n	大事记大事记大事记\n</p>', '1478998267', '1479895277', 'zh');
INSERT INTO `dongtai` VALUES ('12', '大事记', '大事记大事记大事记大事记大事记大事记大事记大事记大事记', '2000', '', '<p>大事记大事记大事记</p>', '1478998277', '', 'zh');
INSERT INTO `dongtai` VALUES ('13', '大事记', '大事记大事记大事记大事记大事记大事记大事记大事记大事记', '1995', '', '<p>大事记大事记大事记</p>', '1478998286', '', 'zh');
INSERT INTO `dongtai` VALUES ('14', '大事记', '大事记大事记大事记大事记大事记大事记大事记大事记大事记', '1995', '', '<p>大事记大事记大事记</p>', '1478998289', '', 'zh');
INSERT INTO `dongtai` VALUES ('6', '大事记', '大事记大事记大事记', '1996', '', '<p>\n	大事记大事记大事记\n</p>', '1478998242', '1479895287', 'zh');
INSERT INTO `dongtai` VALUES ('15', '大事记', '大事记大事记大事记大事记大事记大事记大事记大事记大事记', '1999', '', '<p>大事记大事记大事记</p>', '1478998294', '', 'zh');
INSERT INTO `dongtai` VALUES ('16', '大事记', '大事记大事记大事记大事记大事记大事记大事记大事记大事记', '1999', '', '<p>大事记大事记大事记</p>', '1478998297', '', 'zh');

-- ----------------------------
-- Table structure for joinus
-- ----------------------------
DROP TABLE IF EXISTS `joinus`;
CREATE TABLE `joinus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `cdate` varchar(11) NOT NULL,
  `mdate` varchar(11) NOT NULL,
  `lang` varchar(50) NOT NULL DEFAULT 'zh',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of joinus
-- ----------------------------
INSERT INTO `joinus` VALUES ('5', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('10', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('7', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('8', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('9', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('11', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('12', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('13', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('14', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('15', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('16', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('17', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('18', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('19', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('20', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');
INSERT INTO `joinus` VALUES ('21', '招聘测试', '区域测试', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '<p>\n	经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。\n</p>', '1478970403', '1479114740', 'zh');

-- ----------------------------
-- Table structure for langs
-- ----------------------------
DROP TABLE IF EXISTS `langs`;
CREATE TABLE `langs` (
  `id` varchar(255) NOT NULL,
  `zh` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of langs
-- ----------------------------
INSERT INTO `langs` VALUES ('indexname', '首页', 'welcome', 'front');

-- ----------------------------
-- Table structure for leaders
-- ----------------------------
DROP TABLE IF EXISTS `leaders`;
CREATE TABLE `leaders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `cdate` varchar(11) NOT NULL,
  `mdate` varchar(11) NOT NULL,
  `lang` varchar(50) NOT NULL DEFAULT 'zh',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of leaders
-- ----------------------------
INSERT INTO `leaders` VALUES ('5', '领导姓名', '主管', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。', '1478970403', '', 'zh');
INSERT INTO `leaders` VALUES ('35', '领导姓名', '主管', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。', '1478970403', '', 'zh');
INSERT INTO `leaders` VALUES ('34', '领导姓名', '主管', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。', '1478970403', '', 'zh');
INSERT INTO `leaders` VALUES ('31', '领导姓名', '主管', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。', '1478970403', '', 'zh');
INSERT INTO `leaders` VALUES ('32', '领导姓名', '主管', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。', '1478970403', '', 'zh');
INSERT INTO `leaders` VALUES ('33', '领导姓名', '主管', '/Uploads/ec510efa/3ab56f04/f250d82f/3f551e1e/100202.png', '经历了十多年的探索和努力，海外业务从轨道交通施工，向轨道交通产品、场馆建设、燃气管线、污水处理、房屋、建筑等多个门类扩展，并逐步\n形成了以新加坡、印度、香港、非洲为中心的四大核心成熟市场。在新加坡：先后承接了包括新加坡深污水系统DTSS-T01工程，以及地铁东\n北线C703标、C704标、C708标、C810标、地铁环线C825标、C822标、C852标、C855标、地铁市区线一期C902标、地铁市区线二期C920\n标、地铁市区线三期C923A标、地铁东北线延长713标、地铁大士西延长线C1688标等项目，滨海湾金沙综合度假胜地P8402标。在香港：先后承\n接了包括香港九广铁路西北线葵青隧道段DB320项目、香港九广铁路西北线屯门车站CC212、CC213标、香港落马洲支线上水—州头隧道工程\nLBD201标、净化海港计划第二期甲昂船洲污水处理厂连接隧道及主泵房隔膜墙建造工程项目0905标、香港新界麒麟村0701工程，净化海港计划第\n二期甲昂船洲污水处理厂改善工程–排放水隧道及消毒设施之地下隔膜墙工程项目0918标。', '1478970403', '', 'zh');

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tpl` varchar(255) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', '0', '保险产品管理', '', '', '', 'icon-umbrella');
INSERT INTO `menus` VALUES ('2', '0', '代理人管理', '', '', '', 'icon-users');
INSERT INTO `menus` VALUES ('3', '0', '部组管理', '', '', '', 'icon-pointer');
INSERT INTO `menus` VALUES ('4', '0', '保单管理', '', '', '', 'icon-note');
INSERT INTO `menus` VALUES ('5', '0', '薪酬设置', '', '', '', 'icon-diamond');
INSERT INTO `menus` VALUES ('6', '0', '账单管理', '', '', '', 'icon-bar-chart');
INSERT INTO `menus` VALUES ('7', '0', '考核', '', '', '', 'icon-calculator');
INSERT INTO `menus` VALUES ('8', '0', '系统设置', '', '', '', 'icon-settings');
INSERT INTO `menus` VALUES ('9', '1', '保险公司添加', 'company.detail', '', 'company_detail', '');
INSERT INTO `menus` VALUES ('10', '1', '保险公司管理', 'ajaxtable_page', '', 'company_list', '');
INSERT INTO `menus` VALUES ('11', '1', '险种添加', '', '', 'product_detail', '');
INSERT INTO `menus` VALUES ('12', '1', '险种管理', '', '', 'product_list', '');
INSERT INTO `menus` VALUES ('13', '2', '工号入档', '', '', 'job_add', '');
INSERT INTO `menus` VALUES ('14', '2', '代理人列表', '', '', 'user_list', '');
INSERT INTO `menus` VALUES ('15', '3', '营业組列表', '', '', 'relationList/1', '');
INSERT INTO `menus` VALUES ('16', '0', '营业部列表', '', '', 'relationList/２', '');
INSERT INTO `menus` VALUES ('17', '3', '营业区列表', '', '', 'relationList/３', '');
INSERT INTO `menus` VALUES ('18', '4', '添加保单', '', '', 'insurance_add', '');
INSERT INTO `menus` VALUES ('19', '4', '保单查询', '', '', 'insurance_list', '');

-- ----------------------------
-- Table structure for thumbs
-- ----------------------------
DROP TABLE IF EXISTS `thumbs`;
CREATE TABLE `thumbs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(100) NOT NULL,
  `cdate` varchar(11) NOT NULL,
  `mdate` varchar(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `lang` varchar(50) NOT NULL DEFAULT 'zh',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of thumbs
-- ----------------------------
INSERT INTO `thumbs` VALUES ('16', '/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg', '1479328734', '1479328754', '荣誉资质5', '50', 'zh');
INSERT INTO `thumbs` VALUES ('12', '/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg', '1479328730', '1479328762', '荣誉资质9', '50', 'zh');
INSERT INTO `thumbs` VALUES ('13', '/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg', '1479328731', '1479328760', '荣誉资质8', '50', 'zh');
INSERT INTO `thumbs` VALUES ('14', '/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg', '1479328732', '1479328758', '荣誉资质7', '50', 'zh');
INSERT INTO `thumbs` VALUES ('15', '/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg', '1479328734', '1479328756', '荣誉资质6', '50', 'zh');
INSERT INTO `thumbs` VALUES ('20', '/Uploads/52d86794/29a77ff1/941fc754/88d438ac/35172.jpg', '1479328739', '1479623554', '荣誉资质1', '50', 'zh');
INSERT INTO `thumbs` VALUES ('21', '/Uploads/b412bd06/f43d1fdd/a52645c1/64cd902f/97509.jpg', '1479714861', '1479714901', 'http://www.baidu.com', '100', 'zh');
INSERT INTO `thumbs` VALUES ('22', '/Uploads/2a9aaa4e/e30b40a2/9866c996/1905455d/181608.jpg', '1479714862', '1479714899', 'http://www.baidu.com', '100', 'zh');
INSERT INTO `thumbs` VALUES ('23', '/Uploads/4b5cee59/f0f43e80/9e496d9d/f27d7493/246477.jpg', '1479714862', '1479714900', 'http://www.baidu.com', '100', 'zh');

-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `cdate` varchar(11) NOT NULL,
  `mdate` varchar(11) NOT NULL,
  `lang` varchar(11) NOT NULL DEFAULT 'zh',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of videos
-- ----------------------------
INSERT INTO `videos` VALUES ('3', '11', '公司文化', '公司文化公司文化', '/Uploads/c0b01905/18812f05/da1f20ff/2a4a681f/73319.png', '<p>公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化</p>', '1478975277', '', 'zh');
INSERT INTO `videos` VALUES ('4', '11', '公司文化', '公司文化公司文化', '/Uploads/86a3cd18/b686d670/c5ab971b/445232d9/30183.png', '<p>公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化</p>', '1478975287', '', 'zh');
INSERT INTO `videos` VALUES ('5', '11', '公司文化', '公司文化公司文化', '/Uploads/86a3cd18/b686d670/c5ab971b/445232d9/30183.png', '<p>公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化公司文化</p>', '1478975290', '', 'zh');
INSERT INTO `videos` VALUES ('14', '43', '代表项目测试', '代表项目测试', '/Uploads/c41f5866/a85b97a1/232dcbc4/ff00b070/73318.png', '代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试', '1479119775', '1479119923', 'zh');
INSERT INTO `videos` VALUES ('18', '43', '代表项目测试', '代表项目测试', '/Uploads/c41f5866/a85b97a1/232dcbc4/ff00b070/73318.png', '代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试', '1479119775', '1479119923', 'zh');
INSERT INTO `videos` VALUES ('19', '43', '代表项目测试', '代表项目测试', '/Uploads/86a3cd18/b686d670/c5ab971b/445232d9/30183.png', '<p>\n	代表项目测试代表项目测试代表项目测试代表\n</p>\n<p>\n	<br />\n</p>\n<p>\n	项目测试代表项目测试\n</p>\n<p>\n	<br />\n</p>\n<p>\n	代表项目测试\n</p>', '1479119895', '1479119941', 'zh');
INSERT INTO `videos` VALUES ('17', '43', '代表项目测试', '代表项目测试', '/Uploads/86a3cd18/b686d670/c5ab971b/445232d9/30183.png', '<p>\n	代表项目测试代表项目测试代表项目测试代表\n</p>\n<p>\n	<br />\n</p>\n<p>\n	项目测试代表项目测试\n</p>\n<p>\n	<br />\n</p>\n<p>\n	代表项目测试\n</p>', '1479119895', '1479119941', 'zh');
INSERT INTO `videos` VALUES ('20', '43', '代表项目测试', '代表项目测试', '/Uploads/c41f5866/a85b97a1/232dcbc4/ff00b070/73318.png', '代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试', '1479119775', '1479119923', 'zh');
INSERT INTO `videos` VALUES ('21', '43', '代表项目测试', '代表项目测试', '/Uploads/c41f5866/a85b97a1/232dcbc4/ff00b070/73318.png', '代表项目测试代表项目测试代表项目测试代表项目测试代表项目测试', '1479119775', '1479119923', 'zh');
INSERT INTO `videos` VALUES ('22', '43', '代表项目测试', '代表项目测试', '/Uploads/86a3cd18/b686d670/c5ab971b/445232d9/30183.png', '<p>\n	代表项目测试代表项目测试代表项目测试代表\n</p>\n<p>\n	<br />\n</p>\n<p>\n	项目测试代表项目测试\n</p>\n<p>\n	<br />\n</p>\n<p>\n	代表项目测试\n</p>', '1479119895', '1479119941', 'zh');
INSERT INTO `videos` VALUES ('23', '43', '代表项目测试', '代表项目测试', '/Uploads/86a3cd18/b686d670/c5ab971b/445232d9/30183.png', '<p>\n	代表项目测试代表项目测试代表项目测试代表\n</p>\n<p>\n	<br />\n</p>\n<p>\n	项目测试代表项目测试\n</p>\n<p>\n	<br />\n</p>\n<p>\n	代表项目测试\n</p>', '1479119895', '1479119941', 'zh');
SET FOREIGN_KEY_CHECKS=1;
