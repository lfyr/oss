/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : oss

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-03-21 10:57:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for oss_admin
-- ----------------------------
DROP TABLE IF EXISTS `oss_admin`;
CREATE TABLE `oss_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL COMMENT '文件名',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '下载路径',
  `bucket` varchar(255) NOT NULL,
  `root_dir` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of oss_admin
-- ----------------------------
INSERT INTO `oss_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '');
INSERT INTO `oss_admin` VALUES ('4', 'wcy', '21232f297a57a5a743894a0e4a801fc3', 'dearedu-hai', 'wcy');
INSERT INTO `oss_admin` VALUES ('5', 'jhg', '21232f297a57a5a743894a0e4a801fc3', 'dearedu-hai', 'jhg');

-- ----------------------------
-- Table structure for oss_admin_role
-- ----------------------------
DROP TABLE IF EXISTS `oss_admin_role`;
CREATE TABLE `oss_admin_role` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` smallint(5) unsigned NOT NULL COMMENT '管理员id',
  `role_id` smallint(5) unsigned NOT NULL COMMENT '角色id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='会员角色表';

-- ----------------------------
-- Records of oss_admin_role
-- ----------------------------
INSERT INTO `oss_admin_role` VALUES ('14', '4', '8');
INSERT INTO `oss_admin_role` VALUES ('15', '5', '8');

-- ----------------------------
-- Table structure for oss_privilege
-- ----------------------------
DROP TABLE IF EXISTS `oss_privilege`;
CREATE TABLE `oss_privilege` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pri_name` varchar(30) NOT NULL COMMENT '权限名称',
  `module_name` varchar(20) NOT NULL COMMENT '模块名称',
  `controller_name` varchar(20) NOT NULL COMMENT '控制器名称',
  `action_name` varchar(20) NOT NULL COMMENT '方法名称',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '上级权限的ID，0：代表顶级权限',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=845 DEFAULT CHARSET=utf8 COMMENT='权限表';

-- ----------------------------
-- Records of oss_privilege
-- ----------------------------
INSERT INTO `oss_privilege` VALUES ('820', '权限列表', 'Admin', 'Privilege', 'lst', '838');
INSERT INTO `oss_privilege` VALUES ('821', '权限添加', 'Admin', 'Privilege', 'add', '820');
INSERT INTO `oss_privilege` VALUES ('822', '权限修改', 'Admin', 'Privilege', 'edit', '820');
INSERT INTO `oss_privilege` VALUES ('823', '权限删除', 'Admin', 'Privilege', 'del', '820');
INSERT INTO `oss_privilege` VALUES ('824', '角色列表', 'Admin', 'Role', 'lst', '838');
INSERT INTO `oss_privilege` VALUES ('825', '角色删除', 'Admin', 'Role', 'del', '824');
INSERT INTO `oss_privilege` VALUES ('826', '角色添加', 'Admin', 'Role', 'add', '824');
INSERT INTO `oss_privilege` VALUES ('827', '角色修改', 'Admin', 'Role', 'edit', '824');
INSERT INTO `oss_privilege` VALUES ('828', '管理员列表', 'Admin', 'Admin', 'lst', '838');
INSERT INTO `oss_privilege` VALUES ('829', '管理员添加', 'Admin', 'Admin', 'add', '828');
INSERT INTO `oss_privilege` VALUES ('830', '管理员删除', 'Admin', 'Admin', 'del', '828');
INSERT INTO `oss_privilege` VALUES ('831', '管理员修改', 'Admin', 'Admin', 'edit', '828');
INSERT INTO `oss_privilege` VALUES ('832', 'OSS管理', 'Admin', 'Oss', 'del', '0');
INSERT INTO `oss_privilege` VALUES ('833', '文件上传', 'Admin', 'Oss', 'upload', '832');
INSERT INTO `oss_privilege` VALUES ('834', '文件列表', 'Admin', 'Oss', 'index', '832');
INSERT INTO `oss_privilege` VALUES ('835', '目录上传', 'Admin', 'Oss', 'upload_dir', '832');
INSERT INTO `oss_privilege` VALUES ('836', '创建目录', 'Admin', 'Oss', 'create_dir', '832');
INSERT INTO `oss_privilege` VALUES ('839', '库切换', 'NULL', 'NULL', 'NULL', '0');
INSERT INTO `oss_privilege` VALUES ('838', '系统管理', 'null', 'null', 'null', '0');
INSERT INTO `oss_privilege` VALUES ('840', 'dearedu-hai', 'Admin', 'Oss', 'kqh', '839');
INSERT INTO `oss_privilege` VALUES ('841', 'dearedu-jiang', 'Admin', 'Oss', 'kqh', '839');
INSERT INTO `oss_privilege` VALUES ('842', 'dearedu-static-resource', 'Admin', 'Oss', 'kqh', '839');
INSERT INTO `oss_privilege` VALUES ('843', 'dearedu-test', 'Admin', 'Oss', 'kqh', '839');

-- ----------------------------
-- Table structure for oss_role
-- ----------------------------
DROP TABLE IF EXISTS `oss_role`;
CREATE TABLE `oss_role` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(30) NOT NULL COMMENT '角色名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='角色表';

-- ----------------------------
-- Records of oss_role
-- ----------------------------
INSERT INTO `oss_role` VALUES ('8', '普通');

-- ----------------------------
-- Table structure for oss_role_privilege
-- ----------------------------
DROP TABLE IF EXISTS `oss_role_privilege`;
CREATE TABLE `oss_role_privilege` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pri_id` smallint(5) unsigned NOT NULL COMMENT '权限的id',
  `role_id` smallint(5) unsigned NOT NULL COMMENT '角色的id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COMMENT='角色权限表';

-- ----------------------------
-- Records of oss_role_privilege
-- ----------------------------
INSERT INTO `oss_role_privilege` VALUES ('87', '832', '8');
INSERT INTO `oss_role_privilege` VALUES ('88', '833', '8');
INSERT INTO `oss_role_privilege` VALUES ('89', '834', '8');
INSERT INTO `oss_role_privilege` VALUES ('90', '835', '8');
INSERT INTO `oss_role_privilege` VALUES ('91', '836', '8');
