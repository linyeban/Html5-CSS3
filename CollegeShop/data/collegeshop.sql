/*
Navicat MySQL Data Transfer

Source Server         : lin
Source Server Version : 50628
Source Host           : localhost:3306
Source Database       : collegeshop

Target Server Type    : MYSQL
Target Server Version : 50628
File Encoding         : 65001

Date: 2016-07-16 21:39:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mid`),
  UNIQUE KEY `tb_admin_PK` (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('1', 's1', '123456');

-- ----------------------------
-- Table structure for `tb_dingdan`
-- ----------------------------
DROP TABLE IF EXISTS `tb_dingdan`;
CREATE TABLE `tb_dingdan` (
  `ddid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `dingdanhao` varchar(250) DEFAULT NULL,
  `shouhuoren` varchar(50) DEFAULT NULL,
  `sex` varchar(4) DEFAULT NULL,
  `dizhi` varchar(250) DEFAULT NULL,
  `youbian` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `zfff` varchar(50) DEFAULT NULL COMMENT '支付方式',
  `leaveword` varchar(253) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `zt` varchar(50) NOT NULL,
  `shff` varchar(252) DEFAULT NULL,
  `spc` varchar(250) DEFAULT NULL,
  `total` float(100,0) NOT NULL,
  `xiadanren` varchar(50) DEFAULT NULL,
  `slc` varchar(250) DEFAULT NULL COMMENT '数量串',
  PRIMARY KEY (`ddid`),
  UNIQUE KEY `tb_dingdan_PK` (`ddid`),
  KEY `Relationship_8_FK` (`uid`),
  CONSTRAINT `FK_TB_DINGD` FOREIGN KEY (`uid`) REFERENCES `tb_user` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_dingdan
-- ----------------------------
INSERT INTO `tb_dingdan` VALUES ('31', '1', '201607111816021', 'lin', '男', '仲恺', '655536', '13632352434', '1406123795@qq.com', '支付宝', '尽快', '2016-07-11 18:16:02', '未作任何处理', '普通平邮', '25@', '20', 't1', '1@');
INSERT INTO `tb_dingdan` VALUES ('32', '1', '201607120537371', 'lin', '男', '仲恺', '655536', '13632352434', '1406123795@qq.com', '支付宝', '3333', '2016-07-12 05:37:37', '未作任何处理', '普通平邮', '@25@', '20', 't1', '@1@');

-- ----------------------------
-- Table structure for `tb_dingdanmingxi`
-- ----------------------------
DROP TABLE IF EXISTS `tb_dingdanmingxi`;
CREATE TABLE `tb_dingdanmingxi` (
  `ddmxid` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `tb_shangpin_id` int(11) NOT NULL,
  PRIMARY KEY (`ddmxid`,`tb_shangpin_id`),
  KEY `fk_dingdanmingxi_tb_shangpin1_idx` (`tb_shangpin_id`),
  CONSTRAINT `FK_TB_DINGDMINGXI` FOREIGN KEY (`ddmxid`) REFERENCES `tb_dingdan` (`ddid`),
  CONSTRAINT `fk_dingdanmingxi_tb_shangpin1` FOREIGN KEY (`tb_shangpin_id`) REFERENCES `tb_shangpin` (`spid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_dingdanmingxi
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_gonggao`
-- ----------------------------
DROP TABLE IF EXISTS `tb_gonggao`;
CREATE TABLE `tb_gonggao` (
  `ggid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `time` date DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`ggid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_gonggao
-- ----------------------------
INSERT INTO `tb_gonggao` VALUES ('5', '222', '2016-07-07', '222');

-- ----------------------------
-- Table structure for `tb_leaveword`
-- ----------------------------
DROP TABLE IF EXISTS `tb_leaveword`;
CREATE TABLE `tb_leaveword` (
  `lwid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `content` varchar(253) DEFAULT NULL,
  PRIMARY KEY (`lwid`),
  UNIQUE KEY `leaveword_PK` (`lwid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_leaveword
-- ----------------------------
INSERT INTO `tb_leaveword` VALUES ('5', '0', '33', '2016-07-09 00:00:00', '333');
INSERT INTO `tb_leaveword` VALUES ('6', '0', '1', '2016-07-09 00:00:00', 'tttt');

-- ----------------------------
-- Table structure for `tb_pingjia`
-- ----------------------------
DROP TABLE IF EXISTS `tb_pingjia`;
CREATE TABLE `tb_pingjia` (
  `pjid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(252) DEFAULT NULL COMMENT '用户名',
  `title` varchar(200) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `content` text,
  `dingdanid` int(255) NOT NULL,
  PRIMARY KEY (`pjid`),
  UNIQUE KEY `FK_TB_SHANG_RELATIONS_TB_PINGJIA` (`pjid`) USING BTREE,
  KEY `tb_pingjia_PK` (`dingdanid`),
  CONSTRAINT `tb_pingjia_PK` FOREIGN KEY (`dingdanid`) REFERENCES `tb_dingdanmingxi` (`ddmxid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_pingjia
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_shangpin`
-- ----------------------------
DROP TABLE IF EXISTS `tb_shangpin`;
CREATE TABLE `tb_shangpin` (
  `spid` int(11) NOT NULL AUTO_INCREMENT,
  `mingcheng` varchar(50) DEFAULT NULL,
  `jianjie` text,
  `shichangjia` varchar(45) DEFAULT NULL,
  `xinghao` varchar(50) DEFAULT NULL,
  `tupian` text,
  `shuliang` int(11) DEFAULT NULL,
  `cishu` int(11) DEFAULT NULL,
  `typeid` int(11) DEFAULT NULL,
  `huiyuanjia` float DEFAULT NULL,
  `pinpai` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`spid`),
  UNIQUE KEY `tb_shangpin_PK` (`spid`),
  KEY `FK_TB_SHANG_RELATIONS_TB_TYPE` (`typeid`),
  CONSTRAINT `FK_TB_SHANG_RELATIONS_TB_TYPE` FOREIGN KEY (`typeid`) REFERENCES `tb_type` (`typeid`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_shangpin
-- ----------------------------
INSERT INTO `tb_shangpin` VALUES ('25', '百香果纸杯蛋糕', '质地轻盈，口感软滑，果香缭绕，让人回味', '25', 'danggao-1', 'image/cakes/passion-fruit-chocolate-cupcake.jpg', '3', '0', '3', '20', '蛋糕');
INSERT INTO `tb_shangpin` VALUES ('26', '红丝绒圆舞曲蛋糕', '红丝绒圆舞曲蛋糕', '25', 'sea-1', 'image/seasonal-specials/durian-cheese-mousse-cake.jpg', '3', '0', '2', '20', '季节精选');
INSERT INTO `tb_shangpin` VALUES ('27', '经典苹果派', '新鲜苹果，古老肉桂，妙绝口感，一旦爱上，欲罢不能', '10', 'pies-1', 'image/pies/apple.jpg', '5', '0', '4', '8', '派');
INSERT INTO `tb_shangpin` VALUES ('28', '迷你礼盒', '薄片香蕉，香草布丁，淡奶相融，清新草地，柔滑天空', '5', 'gitf-box', 'image/gitf-box/mini-cupcake-set.jpg', '5', '0', '1', '3', '礼盒');
INSERT INTO `tb_shangpin` VALUES ('29', 'dang', '2222222', '11', '22', 'image/pies/banana-cream.jpg', '5', '0', '4', '11', 'pies-2');

-- ----------------------------
-- Table structure for `tb_type`
-- ----------------------------
DROP TABLE IF EXISTS `tb_type`;
CREATE TABLE `tb_type` (
  `typeid` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`typeid`),
  UNIQUE KEY `tb_type_PK` (`typeid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_type
-- ----------------------------
INSERT INTO `tb_type` VALUES ('1', '礼盒');
INSERT INTO `tb_type` VALUES ('2', '季节精选');
INSERT INTO `tb_type` VALUES ('3', '蛋糕');
INSERT INTO `tb_type` VALUES ('4', '派');
INSERT INTO `tb_type` VALUES ('5', '礼品卡');

-- ----------------------------
-- Table structure for `tb_user`
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `qq` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `tb_user_PK` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('1', 't1', '123456', '', '', '');
INSERT INTO `tb_user` VALUES ('19', 's2', '123456', '2901109886@qq.com', '13632352434', '2901109886');
