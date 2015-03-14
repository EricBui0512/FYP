/*
Navicat MySQL Data Transfer

Source Server         : server
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : booking

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-03-14 21:17:18
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `addresses`
-- ----------------------------
DROP TABLE IF EXISTS `addresses`;
CREATE TABLE `addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of addresses
-- ----------------------------
INSERT INTO addresses VALUES ('1', '2', '', '306 - đường 2/9, Hai Chau', '', '2015-03-13 02:49:49', '2015-03-13 02:49:49');
INSERT INTO addresses VALUES ('2', '2', '', '225 Nguyễn Chí Thanh, Hai Chau', '', '2015-03-13 02:49:49', '2015-03-13 02:49:49');
INSERT INTO addresses VALUES ('3', '2', '', '123 Nguyen Van Linh, Hai Chau', '', '2015-03-13 02:49:49', '2015-03-13 02:49:49');
INSERT INTO addresses VALUES ('4', '2', '', '328 Hoang Dieu, Hai Chau', '', '2015-03-13 02:49:49', '2015-03-13 02:49:49');
INSERT INTO addresses VALUES ('5', '2', '', '423 Nguyen Huu Tho, Hai Chau', '', '2015-03-13 02:49:49', '2015-03-13 02:49:49');

-- ----------------------------
-- Table structure for `assigned_roles`
-- ----------------------------
DROP TABLE IF EXISTS `assigned_roles`;
CREATE TABLE `assigned_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `assigned_roles_user_id_index` (`user_id`),
  KEY `assigned_roles_role_id_index` (`role_id`),
  CONSTRAINT `assigned_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `assigned_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of assigned_roles
-- ----------------------------
INSERT INTO assigned_roles VALUES ('1', '1', '1');
INSERT INTO assigned_roles VALUES ('2', '2', '2');
INSERT INTO assigned_roles VALUES ('3', '3', '3');

-- ----------------------------
-- Table structure for `business_categories`
-- ----------------------------
DROP TABLE IF EXISTS `business_categories`;
CREATE TABLE `business_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of business_categories
-- ----------------------------
INSERT INTO business_categories VALUES ('1', 'Category one', '2015-03-13 02:49:48', '2015-03-13 02:49:48');
INSERT INTO business_categories VALUES ('2', 'Category two', '2015-03-13 02:49:48', '2015-03-13 02:49:48');

-- ----------------------------
-- Table structure for `cancellations`
-- ----------------------------
DROP TABLE IF EXISTS `cancellations`;
CREATE TABLE `cancellations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tran_id` int(10) unsigned NOT NULL,
  `who_id` int(10) unsigned NOT NULL,
  `reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `who` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cancellations
-- ----------------------------

-- ----------------------------
-- Table structure for `cities`
-- ----------------------------
DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cities
-- ----------------------------
INSERT INTO cities VALUES ('1', '257', 'Can Tho', '2015-03-13 02:49:44', '2015-03-13 02:49:44');
INSERT INTO cities VALUES ('2', '257', 'Da Nang', '2015-03-13 02:49:44', '2015-03-13 02:49:44');
INSERT INTO cities VALUES ('3', '257', 'Hai Phong', '2015-03-13 02:49:44', '2015-03-13 02:49:44');
INSERT INTO cities VALUES ('4', '257', 'Ha Noi', '2015-03-13 02:49:44', '2015-03-13 02:49:44');
INSERT INTO cities VALUES ('5', '257', 'Ho Chi Minh City', '2015-03-13 02:49:44', '2015-03-13 02:49:44');
INSERT INTO cities VALUES ('6', '257', 'Ba Ria Vung Tau', '2015-03-13 02:49:44', '2015-03-13 02:49:44');
INSERT INTO cities VALUES ('7', '257', 'Bac Lieu', '2015-03-13 02:49:44', '2015-03-13 02:49:44');
INSERT INTO cities VALUES ('8', '257', 'Bac Giang', '2015-03-13 02:49:44', '2015-03-13 02:49:44');
INSERT INTO cities VALUES ('9', '257', 'Bac Ninh', '2015-03-13 02:49:44', '2015-03-13 02:49:44');
INSERT INTO cities VALUES ('10', '257', 'Bao Loc', '2015-03-13 02:49:44', '2015-03-13 02:49:44');
INSERT INTO cities VALUES ('11', '257', 'Bien Hoa', '2015-03-13 02:49:44', '2015-03-13 02:49:44');
INSERT INTO cities VALUES ('12', '257', 'Ben Tre', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('13', '257', 'Buon Ma Thuot', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('14', '257', 'Ca Mau', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('15', '257', 'Cam Pha', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('16', '257', 'Cao Lanh', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('17', '257', 'Da Lat', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('18', '257', 'Dien Bien Phu', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('19', '257', 'Dong Ha', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('20', '257', 'Dong Hoi', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('21', '257', 'Ha Tinh', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('22', '257', 'Ha Long', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('23', '257', 'Hai Duong', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('24', '257', 'Hoa Binh', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('25', '257', 'Hoi An', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('26', '257', 'Hue', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('27', '257', 'Hung Yen', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('28', '257', 'Kon Tum', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('29', '257', 'Lang Son', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('30', '257', 'Lao Cai', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('31', '257', 'Long Xuyen', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('32', '257', 'Mong Cai', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('33', '257', 'My Tho', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('34', '257', 'Nam Dinh', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('35', '257', 'Ninh Binh', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('36', '257', 'Nha Trang', '2015-03-13 02:49:45', '2015-03-13 02:49:45');
INSERT INTO cities VALUES ('37', '257', 'Cam Ranh', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('38', '257', 'Phan Rang-Thap Cham', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('39', '257', 'Phan Thiet', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('40', '257', 'Phu Ly', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('41', '257', 'Pleiku', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('42', '257', 'Quang Ngai', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('43', '257', 'Quy Nhon', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('44', '257', 'Rach Gia', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('45', '257', 'Soc Trang', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('46', '257', 'Son La', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('47', '257', 'Tam Ky', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('48', '257', 'Tan An', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('49', '257', 'Thai Binh', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('50', '257', 'Thai Nguyen', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('51', '257', 'Thanh Hoa', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('52', '257', 'Tra Vinh', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('53', '257', 'Tuy Hoa', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('54', '257', 'Tuyen Quang', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('55', '257', 'Uong Bi', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('56', '257', 'Viet Tri', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('57', '257', 'Vinh', '2015-03-13 02:49:46', '2015-03-13 02:49:46');
INSERT INTO cities VALUES ('58', '257', 'Vinh Yen', '2015-03-13 02:49:47', '2015-03-13 02:49:47');
INSERT INTO cities VALUES ('59', '257', 'Vinh Long', '2015-03-13 02:49:47', '2015-03-13 02:49:47');
INSERT INTO cities VALUES ('60', '257', 'Vung Tau', '2015-03-13 02:49:47', '2015-03-13 02:49:47');
INSERT INTO cities VALUES ('61', '257', 'Yen Bai', '2015-03-13 02:49:47', '2015-03-13 02:49:47');

-- ----------------------------
-- Table structure for `company`
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(500) NOT NULL DEFAULT '',
  `phone` varchar(15) NOT NULL DEFAULT '',
  `fax` varchar(15) DEFAULT NULL,
  `fb_link` varchar(100) DEFAULT NULL,
  `twitter_link` varchar(100) DEFAULT NULL,
  `gplus_link` varchar(100) DEFAULT NULL,
  `contact_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of company
-- ----------------------------

-- ----------------------------
-- Table structure for `countries`
-- ----------------------------
DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=265 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of countries
-- ----------------------------
INSERT INTO countries VALUES ('1', 'Afghanistan', '2015-03-13 02:49:28', '2015-03-13 02:49:28');
INSERT INTO countries VALUES ('2', 'Albania', '2015-03-13 02:49:28', '2015-03-13 02:49:28');
INSERT INTO countries VALUES ('3', 'Algeria', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('4', 'American Samoa', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('5', 'Andorra', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('6', 'Angola', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('7', 'Anguilla', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('8', 'Antarctica', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('9', 'Antigua and Barbuda', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('10', 'Argentina', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('11', 'Armenia', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('12', 'Aruba', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('13', 'Australia', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('14', 'Austria', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('15', 'Azerbaijan', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('16', 'Bahamas', '2015-03-13 02:49:29', '2015-03-13 02:49:29');
INSERT INTO countries VALUES ('17', 'Bahrain', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('18', 'Bangladesh', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('19', 'Barbados', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('20', 'Belarus', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('21', 'Belgium', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('22', 'Belize', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('23', 'Benin', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('24', 'Bermuda', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('25', 'Bhutan', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('26', 'Bolivia', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('27', 'Bosnia and Herzegovina', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('28', 'Botswana', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('29', 'Bouvet Island', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('30', 'Brazil', '2015-03-13 02:49:30', '2015-03-13 02:49:30');
INSERT INTO countries VALUES ('31', 'British Antarctic Territory', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('32', 'British Indian Ocean Territory', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('33', 'British Virgin Islands', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('34', 'Brunei', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('35', 'Bulgaria', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('36', 'Burkina Faso', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('37', 'Burundi', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('38', 'Cambodia', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('39', 'Cameroon', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('40', 'Canada', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('41', 'Canton and Enderbury Islands', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('42', 'Cape Verde', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('43', 'Cayman Islands', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('44', 'Central African Republic', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('45', 'Chad', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('46', 'Chile', '2015-03-13 02:49:31', '2015-03-13 02:49:31');
INSERT INTO countries VALUES ('47', 'China', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('48', 'Christmas Island', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('49', 'Cocos [Keeling] Islands', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('50', 'Colombia', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('51', 'Comoros', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('52', 'Congo - Brazzaville', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('53', 'Congo - Kinshasa', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('54', 'Cook Islands', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('55', 'Costa Rica', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('56', 'Croatia', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('57', 'Cuba', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('58', 'Cyprus', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('59', 'Czech Republic', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('60', 'Côte d’Ivoire', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('61', 'Denmark', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('62', 'Djibouti', '2015-03-13 02:49:32', '2015-03-13 02:49:32');
INSERT INTO countries VALUES ('63', 'Dominica', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('64', 'Dominican Republic', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('65', 'Dronning Maud Land', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('66', 'East Germany', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('67', 'Ecuador', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('68', 'Egypt', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('69', 'El Salvador', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('70', 'Equatorial Guinea', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('71', 'Eritrea', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('72', 'Estonia', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('73', 'Ethiopia', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('74', 'Falkland Islands', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('75', 'Faroe Islands', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('76', 'Fiji', '2015-03-13 02:49:33', '2015-03-13 02:49:33');
INSERT INTO countries VALUES ('77', 'Finland', '2015-03-13 02:49:34', '2015-03-13 02:49:34');
INSERT INTO countries VALUES ('78', 'France', '2015-03-13 02:49:34', '2015-03-13 02:49:34');
INSERT INTO countries VALUES ('79', 'French Guiana', '2015-03-13 02:49:34', '2015-03-13 02:49:34');
INSERT INTO countries VALUES ('80', 'French Polynesia', '2015-03-13 02:49:34', '2015-03-13 02:49:34');
INSERT INTO countries VALUES ('81', 'French Southern Territories', '2015-03-13 02:49:34', '2015-03-13 02:49:34');
INSERT INTO countries VALUES ('82', 'French Southern and Antarctic Territories', '2015-03-13 02:49:34', '2015-03-13 02:49:34');
INSERT INTO countries VALUES ('83', 'Gabon', '2015-03-13 02:49:34', '2015-03-13 02:49:34');
INSERT INTO countries VALUES ('84', 'Gambia', '2015-03-13 02:49:34', '2015-03-13 02:49:34');
INSERT INTO countries VALUES ('85', 'Georgia', '2015-03-13 02:49:34', '2015-03-13 02:49:34');
INSERT INTO countries VALUES ('86', 'Germany', '2015-03-13 02:49:34', '2015-03-13 02:49:34');
INSERT INTO countries VALUES ('87', 'Ghana', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('88', 'Gibraltar', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('89', 'Greece', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('90', 'Greenland', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('91', 'Grenada', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('92', 'Guadeloupe', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('93', 'Guam', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('94', 'Guatemala', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('95', 'Guernsey', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('96', 'Guinea', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('97', 'Guinea-Bissau', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('98', 'Guyana', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('99', 'Haiti', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('100', 'Heard Island and McDonald Islands', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('101', 'Honduras', '2015-03-13 02:49:35', '2015-03-13 02:49:35');
INSERT INTO countries VALUES ('102', 'Hong Kong SAR China', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('103', 'Hungary', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('104', 'Iceland', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('105', 'India', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('106', 'Indonesia', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('107', 'Iran', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('108', 'Iraq', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('109', 'Ireland', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('110', 'Isle of Man', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('111', 'Israel', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('112', 'Italy', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('113', 'Jamaica', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('114', 'Japan', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('115', 'Jersey', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('116', 'Johnston Island', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('117', 'Jordan', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('118', 'Kazakhstan', '2015-03-13 02:49:36', '2015-03-13 02:49:36');
INSERT INTO countries VALUES ('119', 'Kenya', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('120', 'Kiribati', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('121', 'Kuwait', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('122', 'Kyrgyzstan', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('123', 'Laos', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('124', 'Latvia', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('125', 'Lebanon', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('126', 'Lesotho', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('127', 'Liberia', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('128', 'Libya', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('129', 'Liechtenstein', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('130', 'Lithuania', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('131', 'Luxembourg', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('132', 'Macau SAR China', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('133', 'Macedonia', '2015-03-13 02:49:37', '2015-03-13 02:49:37');
INSERT INTO countries VALUES ('134', 'Madagascar', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('135', 'Malawi', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('136', 'Malaysia', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('137', 'Maldives', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('138', 'Mali', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('139', 'Malta', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('140', 'Marshall Islands', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('141', 'Martinique', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('142', 'Mauritania', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('143', 'Mauritius', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('144', 'Mayotte', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('145', 'Metropolitan France', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('146', 'Mexico', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('147', 'Micronesia', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('148', 'Midway Islands', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('149', 'Moldova', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('150', 'Monaco', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('151', 'Mongolia', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('152', 'Montenegro', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('153', 'Montserrat', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('154', 'Morocco', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('155', 'Mozambique', '2015-03-13 02:49:38', '2015-03-13 02:49:38');
INSERT INTO countries VALUES ('156', 'Myanmar [Burma]', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('157', 'Namibia', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('158', 'Nauru', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('159', 'Nepal', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('160', 'Netherlands', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('161', 'Netherlands Antilles', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('162', 'Neutral Zone', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('163', 'New Caledonia', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('164', 'New Zealand', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('165', 'Nicaragua', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('166', 'Niger', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('167', 'Nigeria', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('168', 'Niue', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('169', 'Norfolk Island', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('170', 'North Korea', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('171', 'North Vietnam', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('172', 'Northern Mariana Islands', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('173', 'Norway', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('174', 'Oman', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('175', 'Pacific Islands Trust Territory', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('176', 'Pakistan', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('177', 'Palau', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('178', 'Palestinian Territories', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('179', 'Panama', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('180', 'Panama Canal Zone', '2015-03-13 02:49:39', '2015-03-13 02:49:39');
INSERT INTO countries VALUES ('181', 'Papua New Guinea', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('182', 'Paraguay', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('183', 'People\'s Democratic Republic of Yemen', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('184', 'Peru', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('185', 'Philippines', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('186', 'Pitcairn Islands', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('187', 'Poland', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('188', 'Portugal', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('189', 'Puerto Rico', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('190', 'Qatar', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('191', 'Romania', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('192', 'Russia', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('193', 'Rwanda', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('194', 'Réunion', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('195', 'Saint Barthélemy', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('196', 'Saint Helena', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('197', 'Saint Kitts and Nevis', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('198', 'Saint Lucia', '2015-03-13 02:49:40', '2015-03-13 02:49:40');
INSERT INTO countries VALUES ('199', 'Saint Martin', '2015-03-13 02:49:41', '2015-03-13 02:49:41');
INSERT INTO countries VALUES ('200', 'Saint Pierre and Miquelon', '2015-03-13 02:49:41', '2015-03-13 02:49:41');
INSERT INTO countries VALUES ('201', 'Saint Vincent and the Grenadines', '2015-03-13 02:49:41', '2015-03-13 02:49:41');
INSERT INTO countries VALUES ('202', 'Samoa', '2015-03-13 02:49:41', '2015-03-13 02:49:41');
INSERT INTO countries VALUES ('203', 'San Marino', '2015-03-13 02:49:41', '2015-03-13 02:49:41');
INSERT INTO countries VALUES ('204', 'Saudi Arabia', '2015-03-13 02:49:41', '2015-03-13 02:49:41');
INSERT INTO countries VALUES ('205', 'Senegal', '2015-03-13 02:49:41', '2015-03-13 02:49:41');
INSERT INTO countries VALUES ('206', 'Serbia', '2015-03-13 02:49:41', '2015-03-13 02:49:41');
INSERT INTO countries VALUES ('207', 'Serbia and Montenegro', '2015-03-13 02:49:41', '2015-03-13 02:49:41');
INSERT INTO countries VALUES ('208', 'Seychelles', '2015-03-13 02:49:41', '2015-03-13 02:49:41');
INSERT INTO countries VALUES ('209', 'Sierra Leone', '2015-03-13 02:49:41', '2015-03-13 02:49:41');
INSERT INTO countries VALUES ('210', 'Singapore', '2015-03-13 02:49:41', '2015-03-13 02:49:41');
INSERT INTO countries VALUES ('211', 'Slovakia', '2015-03-13 02:49:41', '2015-03-13 02:49:41');
INSERT INTO countries VALUES ('212', 'Slovenia', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('213', 'Solomon Islands', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('214', 'Somalia', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('215', 'South Africa', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('216', 'South Georgia and the South Sandwich Islands', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('217', 'South Korea', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('218', 'Spain', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('219', 'Sri Lanka', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('220', 'Sudan', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('221', 'Suriname', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('222', 'Svalbard and Jan Mayen', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('223', 'Swaziland', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('224', 'Sweden', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('225', 'Switzerland', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('226', 'Syria', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('227', 'São Tomé and Príncipe', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('228', 'Taiwan', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('229', 'Tajikistan', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('230', 'Tanzania', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('231', 'Thailand', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('232', 'Timor-Leste', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('233', 'Togo', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('234', 'Tokelau', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('235', 'Tonga', '2015-03-13 02:49:42', '2015-03-13 02:49:42');
INSERT INTO countries VALUES ('236', 'Trinidad and Tobago', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('237', 'Tunisia', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('238', 'Turkey', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('239', 'Turkmenistan', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('240', 'Turks and Caicos Islands', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('241', 'Tuvalu', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('242', 'U.S. Minor Outlying Islands', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('243', 'U.S. Miscellaneous Pacific Islands', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('244', 'U.S. Virgin Islands', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('245', 'Uganda', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('246', 'Ukraine', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('247', 'Union of Soviet Socialist Republics', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('248', 'United Arab Emirates', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('249', 'United Kingdom', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('250', 'United States', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('251', 'Unknown or Invalid Region', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('252', 'Uruguay', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('253', 'Uzbekistan', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('254', 'Vanuatu', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('255', 'Vatican City', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('256', 'Venezuela', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('257', 'Vietnam', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('258', 'Wake Island', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('259', 'Wallis and Futuna', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('260', 'Western Sahara', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('261', 'Yemen', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('262', 'Zambia', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('263', 'Zimbabwe', '2015-03-13 02:49:43', '2015-03-13 02:49:43');
INSERT INTO countries VALUES ('264', 'Åland Islands', '2015-03-13 02:49:43', '2015-03-13 02:49:43');

-- ----------------------------
-- Table structure for `deals`
-- ----------------------------
DROP TABLE IF EXISTS `deals`;
CREATE TABLE `deals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` int(10) unsigned NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `amount` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `special_request` longtext COLLATE utf8_unicode_ci,
  `time_slot` datetime DEFAULT NULL,
  `remind_time` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of deals
-- ----------------------------
INSERT INTO deals VALUES ('7', '1', 'Tắm ngâm thuốc lá người Dao đỏ kết hợp massage', '700.00', '600.00', 'Từ xa xưa người dân tộc Dao đỏ tại vùng núi SAPA đã nổi tiếng với bài thuốc tắm cổ truyền và bảo vệ sức khoẻ. Người Dao cho rằng:         \r\n\r\n- Đàn ông tắm thứ thuốc này hết đau lưng, mỏi gối. Tăng cường sinh lực, tinh thần sảng khoái, phấn chấn.     ', '2015-03-12 00:00:00', '2015-03-28 00:00:00', '2015-03-01 07:42:55', '2015-03-01 07:42:55');
INSERT INTO deals VALUES ('8', '1', 'Chọn 1 trong 4 dịch vụ làm đẹp tại Kay Spa', '600.00', '500.00', '', '2015-03-31 00:00:00', '2015-03-30 00:00:00', '2015-03-01 08:34:00', '2015-03-01 08:34:00');
INSERT INTO deals VALUES ('9', '1', 'Chọn 1 trong 4 dịch vụ làm đẹp tại Kay Spa', '300.00', '200.00', '', '2015-03-31 00:00:00', '2015-03-30 00:00:00', '2015-03-01 08:34:40', '2015-03-01 08:34:40');
INSERT INTO deals VALUES ('10', '1', 'Chăm sóc da body & mặt tại Cham Spa & Massage', '400.00', '300.00', '', '2015-03-31 00:00:00', '2015-03-30 00:00:00', '2015-03-01 08:35:27', '2015-03-01 08:35:27');
INSERT INTO deals VALUES ('11', '1', 'dfhadofh ad fadf', '400.00', '300.00', '314 c4 13 4134', '2015-03-14 00:00:00', '2015-03-21 00:00:00', '2015-03-07 15:18:33', '2015-03-07 15:18:33');
INSERT INTO deals VALUES ('12', '1', 'dfhadofh ad fadf', '600.00', '700.00', '314 c4 13 4134', '2015-03-14 00:00:00', '2015-03-21 00:00:00', '2015-03-07 15:20:23', '2015-03-07 15:20:23');

-- ----------------------------
-- Table structure for `deal_transactions`
-- ----------------------------
DROP TABLE IF EXISTS `deal_transactions`;
CREATE TABLE `deal_transactions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `paypal_id` varchar(255) DEFAULT NULL,
  `deal_id` int(11) NOT NULL,
  `consumer_id` int(11) unsigned NOT NULL,
  `consumer_email` varchar(255) NOT NULL DEFAULT '',
  `phone_number` int(11) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `payment_type` varchar(100) DEFAULT NULL,
  `payment_status` tinyint(1) DEFAULT '0',
  `total` decimal(10,0) DEFAULT NULL,
  `qty` smallint(4) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of deal_transactions
-- ----------------------------
INSERT INTO deal_transactions VALUES ('49', null, '7', '4', 'nguyenducdn67@gmail.com', null, null, null, '0', '600', '1', '600.00', '1', '2015-03-14 14:08:33', '2015-03-14 14:08:33', null);
INSERT INTO deal_transactions VALUES ('50', null, '7', '4', 'nguyenducdn67@gmail.com', null, null, null, '0', '600', '1', '600.00', '1', '2015-03-14 14:09:01', '2015-03-14 14:09:01', null);
INSERT INTO deal_transactions VALUES ('51', null, '7', '4', 'nguyenducdn67@gmail.com', null, null, null, '0', '600', '1', '600.00', '1', '2015-03-14 14:09:30', '2015-03-14 14:09:30', null);
INSERT INTO deal_transactions VALUES ('52', null, '7', '4', 'nguyenducdn67@gmail.com', null, null, null, '0', '600', '1', '600.00', '1', '2015-03-14 14:10:37', '2015-03-14 14:10:37', null);
INSERT INTO deal_transactions VALUES ('53', null, '7', '4', 'nguyenducdn67@gmail.com', null, null, null, '0', '600', '1', '600.00', '1', '2015-03-14 14:11:14', '2015-03-14 14:11:14', null);
INSERT INTO deal_transactions VALUES ('54', null, '7', '4', 'nguyenducdn67@gmail.com', null, null, null, '0', '600', '1', '600.00', '1', '2015-03-14 14:11:43', '2015-03-14 14:11:43', null);
INSERT INTO deal_transactions VALUES ('55', 'PAY-5WV15133HU234794FKUCEECY', '7', '4', 'nguyenducdn67@gmail.com', null, null, null, '0', '600', '1', '600.00', '1', '2015-03-14 14:13:16', '2015-03-14 14:14:19', null);

-- ----------------------------
-- Table structure for `feedbacks`
-- ----------------------------
DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE `feedbacks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deal_id` int(10) unsigned NOT NULL,
  `consumer_id` int(10) unsigned NOT NULL,
  `feed_back` longtext COLLATE utf8_unicode_ci NOT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of feedbacks
-- ----------------------------

-- ----------------------------
-- Table structure for `images`
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `thumbnail_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `big_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO images VALUES ('1', '1', 'upload/spa.jpg', 'upload/spa.jpg', 'service', '2015-03-13 02:49:50', '2015-03-13 02:49:50', 'upload/spa.jpg');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO migrations VALUES ('2015_02_26_090619_init_database', '1');
INSERT INTO migrations VALUES ('2015_03_05_090619_init_database', '2');
INSERT INTO migrations VALUES ('2015_03_07_090619_init_database', '3');
INSERT INTO migrations VALUES ('2015_03_08_150540_add_bigpath_to_images', '4');

-- ----------------------------
-- Table structure for `outlets`
-- ----------------------------
DROP TABLE IF EXISTS `outlets`;
CREATE TABLE `outlets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_id` int(11) NOT NULL,
  `address_id` int(10) unsigned NOT NULL,
  `retailer_id` int(10) unsigned NOT NULL,
  `description_id` int(10) unsigned DEFAULT NULL,
  `outlet_register_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `operation_hour` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `rate` float(8,2) DEFAULT NULL,
  `status` enum('new','active','drag') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'new',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of outlets
-- ----------------------------
INSERT INTO outlets VALUES ('1', 'Minh Toan Graxy - Spa Beauty', '2', '5', '1', '1', 'MTID001', 'www.minhtoan.com.vn', null, '', null, 'active', '2015-03-13 02:49:51', '2015-03-13 02:49:51');
INSERT INTO outlets VALUES ('2', 'Minh Toan Graxy - Spa One', '2', '2', '1', '1', 'MTID002', 'www.minhtoan.com.vn', null, '', null, 'active', '2015-03-13 02:49:51', '2015-03-13 02:49:51');
INSERT INTO outlets VALUES ('3', 'Minh Toan Graxy - Spa Two', '2', '5', '1', '1', 'MTID003', 'www.minhtoan.com.vn', null, '', null, 'active', '2015-03-13 02:49:51', '2015-03-13 02:49:51');
INSERT INTO outlets VALUES ('4', 'Phi Lu - Spa Beauty', '2', '2', '2', '1', 'PLID001', 'www.philu.com.vn', null, '', null, 'active', '2015-03-13 02:49:51', '2015-03-13 02:49:51');

-- ----------------------------
-- Table structure for `outlet_descriptions`
-- ----------------------------
DROP TABLE IF EXISTS `outlet_descriptions`;
CREATE TABLE `outlet_descriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `summary` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of outlet_descriptions
-- ----------------------------
INSERT INTO outlet_descriptions VALUES ('1', 'Sử dụng các loại mỹ phẩm và dược phẩm hoàn toàn từ thiên nhiên. Không gian spa sang trọng, hiện đại. Đội ngũ nhân viên chuyên nghiệp, thân thiện', 'Sử dụng các loại mỹ phẩm và dược phẩm hoàn toàn từ thiên nhiên. Không gian spa sang trọng, hiện đại. Đội ngũ nhân viên chuyên nghiệp, thân thiện', '2015-03-13 02:49:47', '2015-03-13 02:49:47');
INSERT INTO outlet_descriptions VALUES ('2', 'Nổi tiếng với các dịch vụ chăm sóc da mặt, chăm sóc chuyên sâu với nuskin. Spa đem lại cho khách hàng những phút giây thư giãn tuyệt vời nhất. Nhân viên được đào tạo chuyên nghiệp', 'Nổi tiếng với các dịch vụ chăm sóc da mặt, chăm sóc chuyên sâu với nuskin. Spa đem lại cho khách hàng những phút giây thư giãn tuyệt vời nhất. Nhân viên được đào tạo chuyên nghiệp', '2015-03-13 02:49:47', '2015-03-13 02:49:47');
INSERT INTO outlet_descriptions VALUES ('3', 'Không gian rộng rãi, sang trọng. Có nhiều dịch vụ làm đẹp, chăm sóc sức khỏe, đem lại giây phút thư giãn cho bạn. Phục vụ chu đáo, chuyên nghiệp', 'Không gian rộng rãi, sang trọng. Có nhiều dịch vụ làm đẹp, chăm sóc sức khỏe, đem lại giây phút thư giãn cho bạn. Phục vụ chu đáo, chuyên nghiệp', '2015-03-13 02:49:47', '2015-03-13 02:49:47');

-- ----------------------------
-- Table structure for `password_reminders`
-- ----------------------------
DROP TABLE IF EXISTS `password_reminders`;
CREATE TABLE `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_reminders
-- ----------------------------

-- ----------------------------
-- Table structure for `permissions`
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`),
  UNIQUE KEY `permissions_display_name_unique` (`display_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO permissions VALUES ('1', 'manage_blogs', 'manage blogs');
INSERT INTO permissions VALUES ('2', 'manage_posts', 'manage posts');
INSERT INTO permissions VALUES ('3', 'manage_comments', 'manage comments');
INSERT INTO permissions VALUES ('4', 'manage_users', 'manage users');
INSERT INTO permissions VALUES ('5', 'manage_roles', 'manage roles');
INSERT INTO permissions VALUES ('6', 'post_comment', 'post comment');

-- ----------------------------
-- Table structure for `permission_role`
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission_role_permission_id_role_id_unique` (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO permission_role VALUES ('1', '1', '1');
INSERT INTO permission_role VALUES ('2', '2', '1');
INSERT INTO permission_role VALUES ('3', '3', '1');
INSERT INTO permission_role VALUES ('4', '4', '1');
INSERT INTO permission_role VALUES ('5', '5', '1');
INSERT INTO permission_role VALUES ('6', '6', '1');
INSERT INTO permission_role VALUES ('7', '6', '2');

-- ----------------------------
-- Table structure for `promotion`
-- ----------------------------
DROP TABLE IF EXISTS `promotion`;
CREATE TABLE `promotion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `big` varchar(255) DEFAULT NULL,
  `normal` varchar(255) DEFAULT NULL,
  `thumnail` varchar(255) DEFAULT NULL,
  `short_description` varchar(1000) DEFAULT NULL,
  `long_description` longtext,
  `position` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of promotion
-- ----------------------------

-- ----------------------------
-- Table structure for `retailers`
-- ----------------------------
DROP TABLE IF EXISTS `retailers`;
CREATE TABLE `retailers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `address_id` int(10) unsigned NOT NULL,
  `company_register_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of retailers
-- ----------------------------
INSERT INTO retailers VALUES ('1', '2', '1', '1', 'MT00001', 'Minh Toan Graxy', '', '2015-03-13 02:49:50', '2015-03-13 02:49:50');
INSERT INTO retailers VALUES ('2', '2', '1', '2', 'PL00001', 'Phi Lu', '', '2015-03-13 02:49:50', '2015-03-13 02:49:50');

-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO roles VALUES ('1', 'admin', '2015-03-13 02:49:26', '2015-03-13 02:49:26');
INSERT INTO roles VALUES ('2', 'retailer', '2015-03-13 02:49:26', '2015-03-13 02:49:26');
INSERT INTO roles VALUES ('3', 'user', '2015-03-13 02:49:26', '2015-03-13 02:49:26');

-- ----------------------------
-- Table structure for `services`
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `outlet_id` int(10) unsigned NOT NULL,
  `condition_id` int(10) unsigned DEFAULT NULL,
  `detail_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `status` enum('new','active','drag') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'new',
  `time_operate` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO services VALUES ('1', '3', null, null, 'Xông hơi thảo dược', null, 'active', '', '2015-03-13 02:49:52', '2015-03-13 02:49:52');
INSERT INTO services VALUES ('2', '3', null, null, 'Waxing nách', null, 'active', '', '2015-03-13 02:49:52', '2015-03-13 02:49:52');
INSERT INTO services VALUES ('3', '1', null, null, 'Mặt nạ cao bí đao', null, 'active', '', '2015-03-13 02:49:52', '2015-03-13 02:49:52');
INSERT INTO services VALUES ('7', '0', null, null, '', null, 'new', '', '2015-03-13 04:49:08', '2015-03-13 04:49:08');
INSERT INTO services VALUES ('8', '0', null, null, '', null, 'new', '', '2015-03-13 04:54:43', '2015-03-13 04:54:43');

-- ----------------------------
-- Table structure for `service_conditions`
-- ----------------------------
DROP TABLE IF EXISTS `service_conditions`;
CREATE TABLE `service_conditions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `special_condition` longtext COLLATE utf8_unicode_ci,
  `condition1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `condition2` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of service_conditions
-- ----------------------------
INSERT INTO service_conditions VALUES ('1', null, '', '', '2015-03-01 04:32:21', '2015-03-01 04:32:21');
INSERT INTO service_conditions VALUES ('2', null, '', '', '2015-03-01 04:38:24', '2015-03-01 04:38:24');
INSERT INTO service_conditions VALUES ('3', 'Cham Spa & Massage\r\nĐịa chỉ: Thửa đất số 2,3 Lô B2.9 Khu đô thị mới Hoà Xuân - Cẩm Lệ - Đà Nẵng\r\nĐiện thoại: 0511.221.7777\r\nGiờ mở cửa: 10h - 23h\r\nHạn sử dụng: 10/03/2015\r\nÁp dụng: 01 phiếu/01 lần/01 người. Không bù tiền.\r\nKhách hàng có thể mua nhiều phiếu để sử dụng nhiều lần\r\nPhiếu không có giá trị quy đổi thành tiền, không hoàn tiền thừa, không áp dụng chung với các chương trình khuyến mãi khác.\r\nKhách hàng vui lòng đặt chỗ trước khi đến để được phục vụ tốt nhất.', '', '', '2015-03-01 04:40:48', '2015-03-01 04:40:48');
INSERT INTO service_conditions VALUES ('4', 'adsfdgfg', 'dasfdgfg', 'warsetrdtf', '2015-03-08 10:48:58', '2015-03-08 10:48:58');
INSERT INTO service_conditions VALUES ('5', '<div class=\"v7_PM_Content\">\r\n				<div class=\"mTop20\">\r\n<ul class=\"v7_N_nav-tabs\">\r\n<li class=\"active\">\r\n<a href=\"#product_Description\">Thông tin chi tiết</a>\r\n</li>\r\n<li>\r\n<a href=\"#product_Comment\">Bình luận&nbsp;(0)</a>\r\n</li>\r\n<div class=\"c\"></div>\r\n</ul>\r\n<div class=\"v7_tab_content\">\r\n<div id=\"product_Description\" class=\"mTop15 f14 v7_tab_contentBox\">\r\n<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Công việc và cuộc sống với nhiều lo toan, bận rộn, áp lực khiến bạn cảm thấy mệt mỏi, căng thẳng và cơ thể mất dần năng lượng. Hãy gạt bỏ mọi lo toan và bận rộn để thư giãn tối đa và phục hồi năng lượng cơ thể với gói dịch vụ Chăm sóc mặt và body từ gốc đến ngọn.</span></span></p>\r\n<p style=\"text-align: center;\"><img alt=\"Chăm sóc da body &amp; mặt tại Cham Spa &amp; Massage 120 phút cho bạn làn da sáng hồng - 2\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/8r6i3/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg\"></p>\r\n<p style=\"text-align: center;\">Hình minh họa</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Quy trình dịch vụ: 120 phút</span></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Bước 1: Khách hàng được sử dụng miễn phí&nbsp;tắm hồ bơi, jaccuzi gia nhiệt nước nóng, tắm tráng.<br>\r\nBước 2: Hấp ủ tóc với tinh dầu bơ<br>\r\nBước 3: Tắm sữa.<br>\r\nBước 4: Tẩy tế bào chết, tẩy gót chân<br>\r\nBước 5: Ngâm chân gừng muối.</span></span></p>\r\n<p style=\"text-align: center;\"><img alt=\"Chăm sóc da body &amp; mặt tại Cham Spa &amp; Massage 120 phút cho bạn làn da sáng hồng - 1\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/hrv37/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg\"></p>\r\n<p style=\"text-align: center;\">Hình minh họa</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Ngâm chân với nước gừng giúp&nbsp;giảm stress, giảm cảm giác đau nhức, mệt mỏi, xua tan bệnh tật và lưu thông khí khuyết. Nếu chị em muốn có một làn da sạch mụn và hồng hào thì việc ngâm chân đều đặn sẽ có tác dụng rất tốt.</span></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Bước 6: Đắp ủ da bằng cám gạo<br>\r\nBước 7: Đắp mặt<br>\r\nBước 8: Xông hơi thuốc, xông hơi phần phụ khoa, xông khô<br>\r\nBước 9: Tắm tráng nước lá cây<br>\r\nBước 10: Dưỡng da<br>\r\nBước 11: Ăn nhẹ: Cháo &nbsp;</span></span></p>\r\n<p style=\"text-align: center;\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 2\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/b8p4c/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\"></p>\r\n<p style=\"text-align: center;\"><img alt=\"Chăm sóc da body &amp; mặt tại Cham Spa &amp; Massage 120 phút cho bạn làn da sáng hồng - 3\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/7v4v7/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg\"></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Việc dưỡng da bằng các thảo dược thiên nhiên &nbsp;sẽ giúp &nbsp;cải thiện độ trắng sáng, mịn màng cho da, còn có tác dụng thư giãn cơ thể, lấy lại độ đàn hồi và tái sinh tế bào mới. Sau liệu trình, các bạn sẽ cảm nhận sự tươi trẻ của làn da giúp phục hồi năng lượng cơ thể cùng sức sống mới cho &nbsp;làn da</span></span>.</p>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Cham <a style=\"color:inherit !important;font-size:inherit !important;text-decoration:inherit !important;\" href=\"http://muachung.vn/danh-muc/c-6/spa-lam-dep.html\" title=\"spa\" target=\"_blank\">Spa</a> &amp; Massage Đà Nẵng</strong></span></span></p>\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\">&nbsp;</p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Nằm cạnh sông Hàn thơ mộng của thành phố Đà Nẵng xinh đẹp, &nbsp;&nbsp;Cham Spa &amp; Massage&nbsp;tại Đà Nẵng là nơi bạn có thể chạm vào những kiến trúc Champa cổ xưa đã bị thất lạc cách đây gần 1800 năm. Sau những giờ làm việc căng thẳng, lo toan của cuộc sống hàng ngày khiến ta cảm thấy mệt mỏi, ta càng mong muốn được trở về với không gian thiền êm đềm, tĩnh lặng, cảm nhận mùi oải hương ngọt ngào phảng phất, mùi thơm của cây lá thuốc nam, ngâm mình trong làn nước xanh ấm áp của Hồ bơi ven sông Hàn đầy lãng mạn và bỏ lại từng cảm giác mỏi mệt trong bồn gỗ quý Pơ Mu&nbsp;<span style=\"padding: 0px; margin: 0px;\">với nước tắm dược liệu thơm lừng hòa quyện bởi hơn 39 vị thuốc bí truyền cổ xưa của Người Dao Đỏ- một dân tộc Vùng Núi Phía Bắc Việt Nam.&nbsp;</span><span style=\"padding: 0px; margin: 0px; line-height: 1.6;\">Dưới bàn tay điêu luyện của đội ngũ kỹ thuật viên chuyên nghiệp tại Cham Spa &amp; Massage, quý khách sẽ được tận hưởng những phút giây thư giãn tột cùng, đánh thức mọi giác quan, mang lại hiệu quả sức khỏe đến không ngờ.</span></span></span></p>\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: center;\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 3\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/bhhdt/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\"></p>\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\">&nbsp;</p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong style=\"padding: 0px; margin: 0px;\"><span style=\"padding: 0px; margin: 0px;\">Dịch</span>&nbsp;vụ bao gồm:</strong></span></span></p>\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\">&nbsp;</p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o 50 phòng, gồm: Khu dành cho nam/nữ/cặp đôi/vợ chồng riêng biệt, khu massage ngoài trời.</span></span></p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o Dịch vụ Spa &amp; Massage chăm sóc sức khỏe theo phương pháp Y học cổ truyền.&nbsp;</span></span></p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o Ngâm, tắm trong thùng gỗ quý Pơ Mu với lá thuốc cổ truyền của người Dao Đỏ, trị phong thấp, đau nhức, chống mỏi mệt, giải cảm, tăng cường sinh lực, đặc biệt tốt cho phụ nữ sau sinh.</span></span></p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o Xông hơi thuốc bắc, giải độc tố phần phụ khoa cho phụ nữ, giúp cơ thể thơm tho, trắng sáng mịn màng.</span></span></p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o Steambath, Sauna, hồ bơi Jacuzzi gia nhiệt nước nóng.</span></span></p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o Khu nhà hàng và Coffee</span></span></p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o&nbsp;Có suất ăn miễn phí đi kèm và nhiều món ăn theo thực đơn với giá trị dinh dưỡng cao, giúp bồi bổ sức khỏe.</span></span></p>\r\n</div>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 4\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/chlkv/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\"></p>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 2\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/308vj/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\" style=\"line-height: 20px;\"></p>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Thẻ Silver; 4.000.000 đ: &nbsp; Chỉ dành cho chính chủ thẻ ( Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\")<br>\r\nThẻ Gold: 10.000.000 đ:&nbsp;<br>\r\nOption 1: Mua thẻ tặng 1 thẻ &nbsp; (Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\")<br>\r\nOption 2: Chủ thẻ được dẫn 1 người khách đi kèm<br>\r\nĐược giảm 20% cho người thứ 3 trở lên cho tất cả các loại dịch vụ</span></span></p>\r\n<p><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Thẻ Platinum: 20.000.000 đ&nbsp;<br>\r\nOption 1: Được dùng cho tất cả các gói dịch vụ hiện có tại Cham Spa trừ sản phẩm<br>\r\nOption 2: Mua 1 thẻ tặng 1 thẻ (Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\")<br>\r\nOption 3: Được dẫn kèm 1 người khách đi cùng<br>\r\nĐược giảm 20% cho người thứ 3 trở lên cho tất cả các loại dịch vụ</span></span></p>\r\n</div>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 1\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/08/01/h7gyl/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\"></p>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 2\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/24/azjve/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.png\"></p>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: justify; background-color: rgb(255, 255, 255);\"><strong style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">Cham Spa &amp; Massage</strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">&nbsp;với lối&nbsp;kiến trúc cổ kính độc đáo của người Chăm và&nbsp;đội ngũ nhân viên được đào tạo&nbsp;</span><strong style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">chuyên nghiệp, thân thiện</strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">&nbsp;sẽ mang đến cho bạn những phút giây thư giãn tuyệt vời.</span></p>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 2\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/3ia4y/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\"></p>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 1\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/xjqrq/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\"></p>\r\n<p style=\"margin-top: 6px; font-family: Arial; line-height: 25px; font-size: 13.63636302948px; padding-left: 20px; text-align: justify; background-image: url(http://muachung.vn/style/images/list-arrow-black.png?v=0809); background-attachment: scroll; background-color: rgb(255, 255, 255); background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 3px; background-repeat: no-repeat;\"><strong><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Cham Spa &amp; Massage</span></span></strong></p>\r\n<ul style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; list-style: none outside none; background-color: rgb(255, 255, 255);\">\r\n<li style=\"margin-top: 6px; padding-left: 20px; text-align: justify; background-image: url(http://muachung.vn/style/images/list-arrow-black.png?v=0809); background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 3px; background-repeat: no-repeat;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Địa chỉ:&nbsp;<strong>Thửa đất số 2,3 Lô B2.9 Khu đô thị mới Hoà Xuân - Cẩm Lệ - Đà Nẵng</strong></span></span></li>\r\n<li style=\"margin-top: 6px; padding-left: 20px; text-align: justify; background-image: url(http://muachung.vn/style/images/list-arrow-black.png?v=0809); background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 3px; background-repeat: no-repeat;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Điện thoại:&nbsp;</span></span>05113 62 62 62</li>\r\n<li style=\"margin-top: 6px; padding-left: 20px; text-align: justify; background-image: url(http://muachung.vn/style/images/list-arrow-black.png?v=0809); background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 3px; background-repeat: no-repeat;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Giờ mở cửa: <strong>10h&nbsp;- 23h</strong></span></span></li>\r\n</ul>\r\n</div>\r\n<div id=\"product_Comment\" class=\"v7_tab_contentBox hidden\">\r\n<div class=\"mTop30\">\r\n<div class=\"v7_BD_Title\">\r\nBình luận\r\n</div>\r\n<div class=\"v7_border_Line_dashed\"></div>\r\n<!-- PHAN COMMENT -->\r\n<div><a name=\"comment\"></a></div>\r\n<div class=\"mTop15\">\r\n<div id=\"oauth_form\"></div>\r\n<div class=\"c\"></div>\r\n<div class=\"commentForm\" id=\"comment-content\">\r\n<!-- WRITE COMMENT -->\r\n<div class=\"comment-item last-item commentBlockWrite\" id=\"comment-user\">\r\n<div class=\"commentBlockContent\">\r\n<div class=\"mRight5\">\r\n<textarea id=\"comment-txt\" cols=\"30\" rows=\"3\" style=\"margin: 5px 0px 10px; width: 655px; overflow: hidden; height: 36px;\"></textarea>\r\n<div class=\"fr mLeft10\">\r\n<a id=\"comment-submit\" href=\"javascript:void(0)\" onclick=\"shop.comment.submit()\" class=\"btn_comment\"></a>\r\n</div>\r\n<div class=\"fr\">\r\n<a href=\"javascript:void(0)\" class=\"smiley\" onclick=\"shop.smiley.load(event, this, \'#comment-txt\')\"></a>\r\n</div>\r\n<div class=\"c\"></div>\r\n<div style=\"position: absolute; display: none; font-weight: normal; width: 655px; font-family: arial; line-height: normal; font-size: 12px; padding: 2px;\">&nbsp;</div><div style=\"position: absolute; display: none; font-weight: normal; width: 655px; font-family: arial; line-height: normal; font-size: 12px; padding: 2px;\">&nbsp;</div></div>\r\n</div>\r\n</div>\r\n<input type=\"hidden\" value=\"85054\" id=\"item-id\">\r\n<div id=\"comment-item-main\"></div>\r\n<!-- DS COMMENT -->\r\n<div id=\"comment-item-viewMore\"></div>\r\n</div>\r\n<!-- End center -->\r\n</div>\r\n</div>\r\n<script type=\"text/javascript\">\r\n//khoi tao san pham\r\nvar linkComment =\'http://muachung.vn/san-pham/p-85054/cham-soc-da-body-mat-tai-cham-spa-massage-120-phut-cho-ban-lan-da-sang-hong/binh-luan.html\', cid = 0;\r\nshop.comment.customer = {\"id\":0,\"email\":\"\",\"avatar\":\"\",\"phone\":\"\",\"address\":\"\",\"fullname\":\"\",\"plaza_id\":0,\"plaza\":[],\"order_process\":[],\"order_unuser\":[]};\r\n</script>\r\n</div>\r\n<div id=\"product_Rate\" class=\"v7_tab_contentBox hidden\">\r\n<input type=\"hidden\" name=\"item-id\" id=\"item-id\" value=\"85054\">\r\n<div class=\"mTop20\" id=\"rateArea\">\r\n<div class=\"pBottom10\">\r\n</div>\r\n</div>\r\n<script language=\"javascript\">\r\n\r\njQuery(document).ready(function () {\r\n	$(function(){$(\'#shopRateForm :radio.star\').rating();});\r\n	//Khi focus vào nếu chưa LOGIN thì bắt LOGIN\r\n	$(\'textarea\').focus(function(){\r\n		if(!IS_CUSTOMER_LOGIN){\r\n			shop.customer.login.show();\r\n		}\r\n	});\r\n	$(\'.rate_BSvote\').click(function(){\r\n		if(!IS_CUSTOMER_LOGIN){\r\n			shop.customer.login.show();\r\n		}\r\n	});  \r\n\r\n\r\n	jQuery(\".starLabel\").hover(function(){\r\n	    jQuery(\'#starLabel\').html(jQuery(this).children().attr(\"title\"));\r\n	},function(){\r\n	    jQuery(\'#starLabel\').html(\'\');\r\n	});\r\n	\r\n});\r\n\r\n\r\n\r\nshop.rate.comment.customer = {\"id\":0,\"email\":\"\",\"avatar\":\"\",\"phone\":\"\",\"address\":\"\",\"fullname\":\"\",\"plaza_id\":0,\"plaza\":[],\"order_process\":[],\"order_unuser\":[]};\r\n</script>\r\n</div>\r\n</div>\r\n<script type=\"text/javascript\">\r\n					function shopClick_tab(id) {\r\n						$(\'.v7_N_nav-tabs li a[href=\"#\' + id + \'\"]\').trigger(\'click\');\r\n					}\r\n					$(document).ready(function() {\r\n						$(\'.v7_N_nav-tabs li a\').click(function() {\r\n							var id_tab = $(this).attr(\'href\');\r\n\r\n							$(\'.v7_N_nav-tabs li\').removeClass(\"active\");\r\n							$(this).parent().addClass(\"active\");\r\n							$(\'.v7_tab_contentBox\').addClass(\"hidden\");\r\n							$(id_tab).removeClass(\"hidden\");\r\n							return false;\r\n						});\r\n					});</script>\r\n</div>\r\n<div class=\"v7_PM_OrderBuy mTop30\">\r\n<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\r\n<tbody><tr valign=\"TOP\">\r\n<td class=\"v7_tdBoxBotDetail\" style=\"border-right:  1px dashed #d1d1d1\" width=\"320\">\r\n<div>\r\n<div class=\"v7_BD_title\"><h1 id=\"f20\">Chăm sóc da body &amp; mặt tại Cham Spa &amp; Massage</h1></div>\r\n<div class=\"mTop10\">\r\n<div class=\"v7_BD_PriceNCC\">460.000đ</div>\r\n<div class=\"mTop5\">\r\n<div class=\"v7_BD_PriceMC\">230.000<span>đ</span></div>\r\n<div class=\"v7_BD_FreeShipType\"><b>Giao mã số phiếu</b></div>\r\n<div class=\"c\"></div>\r\n</div>\r\n</div>\r\n<div class=\"v7_BD_BuyNow\">\r\n<a class=\" fixPng\" href=\"javascript:void(0)\" onclick=\"shop.cart.activeAdminAddItem(0, 0);shop.cart.addItem(85054,1425349800,1427864340,73,1000)\"></a>\r\n</div>\r\n</div>\r\n</td>\r\n<td width=\"320\" class=\"v7_tdBoxBotDetail\">\r\n<div>\r\n<div class=\"f14\">\r\n<div class=\"v7_BoxAdr\" style=\"border-top: none;padding-top: 0\">\r\n<div class=\" v7_PM_BA_Name \" style=\"background: none;padding-left: 0\">\r\n<a id=\"8\" class=\"jTip\" href=\"javascript:void(0)\">Kho Đà Nẵng</a>\r\n<span class=\"hidden content8\"><img width=\"630\" src=\"http://muachung10.vcmedia.vn/map/0.543715001332143921.png\"></span>\r\n</div>\r\n<div class=\"mTop5\"> 21 Hàm Nghi - P.Vĩnh Trung - Q.Thanh Khê</div>\r\n<div class=\"mTop5\">Điện thoại:&nbsp;0511.2.603.603</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody></table>\r\n</div></div>', '**Điều kiện sử dụng**\r\nCham Spa & Massage\r\nĐịa chỉ: Thửa đất số 2,3 Lô B2.9 Khu đô thị mới Hoà Xuân - Cẩm Lệ - Đà Nẵng\r\nĐiện thoại: 005113 62 62 62\r\nThời gian áp dụng: 10h - 23h. Tất cả các ngày trong tuần. Không áp dụng cho lễ, tết\r\nHạn sử dụng phiếu: 06/04/2015\r\nÁp dụng: 01 phiếu/ 01 người/ 01 lần. Không bù tiền\r\nPhiếu không có giá trị quy đổi thành tiền mặt, không áp dụng chung với các chương trình khuyến mãi khác, không hoàn tiền thừa.\r\nQuý khách vui lòng gọi điện thoại trước khi đến để đảm bảo có chỗ và được phục vụ tốt nhất.', 'Điều kiện sử dụng\r\nCham Spa & Massage\r\nĐịa chỉ: Thửa đất số 2,3 Lô B2.9 Khu đô thị mới Hoà Xuân - Cẩm Lệ - Đà Nẵng\r\nĐiện thoại: 005113 62 62 62\r\nThời gian áp dụng: 10h - 23h. Tất cả các ngày trong tuần. Không áp dụng cho lễ, tết\r\nHạn sử dụng phiếu: 06/04/2015\r\nÁp dụng: 01 phiếu/ 01 người/ 01 lần. Không bù tiền\r\nPhiếu không có giá trị quy đổi thành tiền mặt, không áp dụng chung với các chương trình khuyến mãi khác, không hoàn tiền thừa.\r\nQuý khách vui lòng gọi điện thoại trước khi đến để đảm bảo có chỗ và được phục vụ tốt nhất.', '2015-03-08 10:56:35', '2015-03-08 10:56:35');
INSERT INTO service_conditions VALUES ('6', 'Công việc và cuộc sống với nhiều lo toan, bận rộn, áp lực khiến bạn cảm thấy mệt mỏi, căng thẳng và cơ thể mất dần năng lượng. Hãy gạt bỏ mọi lo toan và bận rộn để thư giãn tối đa và phục hồi năng lượng cơ thể với gói dịch vụ Chăm sóc mặt và body từ gốc đến ngọn. Chăm sóc da body & mặt tại Cham Spa & Massage 120 phút cho bạn làn da sáng hồng - 2 ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/8r6i3/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg) Hình minh họa Quy trình dịch vụ: 120 phút Bước 1: Khách hàng được sử dụng miễn phí tắm hồ bơi, jaccuzi gia nhiệt nước nóng, tắm tráng. Bước 2: Hấp ủ tóc với tinh dầu bơ Bước 3: Tắm sữa. Bước 4: Tẩy tế bào chết, tẩy gót chân Bước 5: Ngâm chân gừng muối. Chăm sóc da body & mặt tại Cham Spa & Massage 120 phút cho bạn làn da sáng hồng - 1 ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/hrv37/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg) Hình minh họa Ngâm chân với nước gừng giúp giảm stress, giảm cảm giác đau nhức, mệt mỏi, xua tan bệnh tật và lưu thông khí khuyết. Nếu chị em muốn có một làn da sạch mụn và hồng hào thì việc ngâm chân đều đặn sẽ có tác dụng rất tốt. Bước 6: Đắp ủ da bằng cám gạo Bước 7: Đắp mặt Bước 8: Xông hơi thuốc, xông hơi phần phụ khoa, xông khô Bước 9: Tắm tráng nước lá cây Bước 10: Dưỡng da Bước 11: Ăn nhẹ: Cháo ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/b8p4c/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg) Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2 Chăm sóc da body & mặt tại Cham Spa & Massage 120 phút cho bạn làn da sáng hồng - 3 Việc dưỡng da bằng các thảo dược thiên nhiên sẽ giúp cải thiện độ trắng sáng, mịn màng cho da, còn có tác dụng thư giãn cơ thể, lấy lại độ đàn hồi và tái sinh tế bào mới. Sau liệu trình, các bạn sẽ cảm nhận sự tươi trẻ của làn da giúp phục hồi năng lượng cơ thể cùng sức sống mới cho làn da. Cham Spa & Massage Đà Nẵng Nằm cạnh sông Hàn thơ mộng của thành phố Đà Nẵng xinh đẹp, Cham Spa & Massage tại Đà Nẵng là nơi bạn có thể chạm vào những kiến trúc Champa cổ xưa đã bị thất lạc cách đây gần 1800 năm. Sau những giờ làm việc căng thẳng, lo toan của cuộc sống hàng ngày khiến ta cảm thấy mệt mỏi, ta càng mong muốn được trở về với không gian thiền êm đềm, tĩnh lặng, cảm nhận mùi oải hương ngọt ngào phảng phất, mùi thơm của cây lá thuốc nam, ngâm mình trong làn nước xanh ấm áp của Hồ bơi ven sông Hàn đầy lãng mạn và bỏ lại từng cảm giác mỏi mệt trong bồn gỗ quý Pơ Mu với nước tắm dược liệu thơm lừng hòa quyện bởi hơn 39 vị thuốc bí truyền cổ xưa của Người Dao Đỏ- một dân tộc Vùng Núi Phía Bắc Việt Nam. Dưới bàn tay điêu luyện của đội ngũ kỹ thuật viên chuyên nghiệp tại Cham Spa & Massage, quý khách sẽ được tận hưởng những phút giây thư giãn tột cùng, đánh thức mọi giác quan, mang lại hiệu quả sức khỏe đến không ngờ. Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 3 ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/bhhdt/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg) Dịch vụ bao gồm: o 50 phòng, gồm: Khu dành cho nam/nữ/cặp đôi/vợ chồng riêng biệt, khu massage ngoài trời. o Dịch vụ Spa & Massage chăm sóc sức khỏe theo phương pháp Y học cổ truyền. o Ngâm, tắm trong thùng gỗ quý Pơ Mu với lá thuốc cổ truyền của người Dao Đỏ, trị phong thấp, đau nhức, chống mỏi mệt, giải cảm, tăng cường sinh lực, đặc biệt tốt cho phụ nữ sau sinh. o Xông hơi thuốc bắc, giải độc tố phần phụ khoa cho phụ nữ, giúp cơ thể thơm tho, trắng sáng mịn màng. o Steambath, Sauna, hồ bơi Jacuzzi gia nhiệt nước nóng. o Khu nhà hàng và Coffee o Có suất ăn miễn phí đi kèm và nhiều món ăn theo thực đơn với giá trị dinh dưỡng cao, giúp bồi bổ sức khỏe. Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 4 ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/chlkv/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg) Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2 Thẻ Silver; 4.000.000 đ: Chỉ dành cho chính chủ thẻ ( Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\") Thẻ Gold: 10.000.000 đ: Option 1: Mua thẻ tặng 1 thẻ (Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\") Option 2: Chủ thẻ được dẫn 1 người khách đi kèm Được giảm 20% cho người thứ 3 trở lên cho tất cả các loại dịch vụ Thẻ Platinum: 20.000.000 đ Option 1: Được dùng cho tất cả các gói dịch vụ hiện có tại Cham Spa trừ sản phẩm Option 2: Mua 1 thẻ tặng 1 thẻ (Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\") Option 3: Được dẫn kèm 1 người khách đi cùng Được giảm 20% cho người thứ 3 trở lên cho tất cả các loại dịch vụ Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 1 Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2 Cham Spa & Massage với lối kiến trúc cổ kính độc đáo của người Chăm và đội ngũ nhân viên được đào tạo chuyên nghiệp, thân thiện sẽ mang đến cho bạn những phút giây thư giãn tuyệt vời. Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2 Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 1', 'Công việc và cuộc sống với nhiều lo toan, bận rộn, áp lực khiến bạn cảm thấy mệt mỏi, căng thẳng và cơ thể mất dần năng lượng. Hãy gạt bỏ mọi lo toan và bận rộn để thư giãn tối đa và phục hồi năng lượng cơ thể với gói dịch vụ Chăm sóc mặt và body từ gốc đến ngọn. Chăm sóc da body & mặt tại Cham Spa & Massage 120 phút cho bạn làn da sáng hồng - 2 ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/8r6i3/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg) Hình minh họa Quy trình dịch vụ: 120 phút Bước 1: Khách hàng được sử dụng miễn phí tắm hồ bơi, jaccuzi gia nhiệt nước nóng, tắm tráng. Bước 2: Hấp ủ tóc với tinh dầu bơ Bước 3: Tắm sữa. Bước 4: Tẩy tế bào chết, tẩy gót chân Bước 5: Ngâm chân gừng muối. Chăm sóc da body & mặt tại Cham Spa & Massage 120 phút cho bạn làn da sáng hồng - 1 ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/hrv37/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg) Hình minh họa Ngâm chân với nước gừng giúp giảm stress, giảm cảm giác đau nhức, mệt mỏi, xua tan bệnh tật và lưu thông khí khuyết. Nếu chị em muốn có một làn da sạch mụn và hồng hào thì việc ngâm chân đều đặn sẽ có tác dụng rất tốt. Bước 6: Đắp ủ da bằng cám gạo Bước 7: Đắp mặt Bước 8: Xông hơi thuốc, xông hơi phần phụ khoa, xông khô Bước 9: Tắm tráng nước lá cây Bước 10: Dưỡng da Bước 11: Ăn nhẹ: Cháo ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/b8p4c/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg) Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2 Chăm sóc da body & mặt tại Cham Spa & Massage 120 phút cho bạn làn da sáng hồng - 3 Việc dưỡng da bằng các thảo dược thiên nhiên sẽ giúp cải thiện độ trắng sáng, mịn màng cho da, còn có tác dụng thư giãn cơ thể, lấy lại độ đàn hồi và tái sinh tế bào mới. Sau liệu trình, các bạn sẽ cảm nhận sự tươi trẻ của làn da giúp phục hồi năng lượng cơ thể cùng sức sống mới cho làn da. Cham Spa & Massage Đà Nẵng Nằm cạnh sông Hàn thơ mộng của thành phố Đà Nẵng xinh đẹp, Cham Spa & Massage tại Đà Nẵng là nơi bạn có thể chạm vào những kiến trúc Champa cổ xưa đã bị thất lạc cách đây gần 1800 năm. Sau những giờ làm việc căng thẳng, lo toan của cuộc sống hàng ngày khiến ta cảm thấy mệt mỏi, ta càng mong muốn được trở về với không gian thiền êm đềm, tĩnh lặng, cảm nhận mùi oải hương ngọt ngào phảng phất, mùi thơm của cây lá thuốc nam, ngâm mình trong làn nước xanh ấm áp của Hồ bơi ven sông Hàn đầy lãng mạn và bỏ lại từng cảm giác mỏi mệt trong bồn gỗ quý Pơ Mu với nước tắm dược liệu thơm lừng hòa quyện bởi hơn 39 vị thuốc bí truyền cổ xưa của Người Dao Đỏ- một dân tộc Vùng Núi Phía Bắc Việt Nam. Dưới bàn tay điêu luyện của đội ngũ kỹ thuật viên chuyên nghiệp tại Cham Spa & Massage, quý khách sẽ được tận hưởng những phút giây thư giãn tột cùng, đánh thức mọi giác quan, mang lại hiệu quả sức khỏe đến không ngờ. Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 3 ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/bhhdt/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg) Dịch vụ bao gồm: o 50 phòng, gồm: Khu dành cho nam/nữ/cặp đôi/vợ chồng riêng biệt, khu massage ngoài trời. o Dịch vụ Spa & Massage chăm sóc sức khỏe theo phương pháp Y học cổ truyền. o Ngâm, tắm trong thùng gỗ quý Pơ Mu với lá thuốc cổ truyền của người Dao Đỏ, trị phong thấp, đau nhức, chống mỏi mệt, giải cảm, tăng cường sinh lực, đặc biệt tốt cho phụ nữ sau sinh. o Xông hơi thuốc bắc, giải độc tố phần phụ khoa cho phụ nữ, giúp cơ thể thơm tho, trắng sáng mịn màng. o Steambath, Sauna, hồ bơi Jacuzzi gia nhiệt nước nóng. o Khu nhà hàng và Coffee o Có suất ăn miễn phí đi kèm và nhiều món ăn theo thực đơn với giá trị dinh dưỡng cao, giúp bồi bổ sức khỏe. Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 4 ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/chlkv/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg) Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2 Thẻ Silver; 4.000.000 đ: Chỉ dành cho chính chủ thẻ ( Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\") Thẻ Gold: 10.000.000 đ: Option 1: Mua thẻ tặng 1 thẻ (Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\") Option 2: Chủ thẻ được dẫn 1 người khách đi kèm Được giảm 20% cho người thứ 3 trở lên cho tất cả các loại dịch vụ Thẻ Platinum: 20.000.000 đ Option 1: Được dùng cho tất cả các gói dịch vụ hiện có tại Cham Spa trừ sản phẩm Option 2: Mua 1 thẻ tặng 1 thẻ (Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\") Option 3: Được dẫn kèm 1 người khách đi cùng Được giảm 20% cho người thứ 3 trở lên cho tất cả các loại dịch vụ Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 1 Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2 Cham Spa & Massage với lối kiến trúc cổ kính độc đáo của người Chăm và đội ngũ nhân viên được đào tạo chuyên nghiệp, thân thiện sẽ mang đến cho bạn những phút giây thư giãn tuyệt vời. Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2 Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 1', 'Công việc và cuộc sống với nhiều lo toan, bận rộn, áp lực khiến bạn cảm thấy mệt mỏi, căng thẳng và cơ thể mất dần năng lượng. Hãy gạt bỏ mọi lo toan và bận rộn để thư giãn tối đa và phục hồi năng lượng cơ thể với gói dịch vụ Chăm sóc mặt và body từ gốc đến ngọn. Chăm sóc da body & mặt tại Cham Spa & Massage 120 phút cho bạn làn da sáng hồng - 2 ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/8r6i3/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg) Hình minh họa Quy trình dịch vụ: 120 phút Bước 1: Khách hàng được sử dụng miễn phí tắm hồ bơi, jaccuzi gia nhiệt nước nóng, tắm tráng. Bước 2: Hấp ủ tóc với tinh dầu bơ Bước 3: Tắm sữa. Bước 4: Tẩy tế bào chết, tẩy gót chân Bước 5: Ngâm chân gừng muối. Chăm sóc da body & mặt tại Cham Spa & Massage 120 phút cho bạn làn da sáng hồng - 1 ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/hrv37/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg) Hình minh họa Ngâm chân với nước gừng giúp giảm stress, giảm cảm giác đau nhức, mệt mỏi, xua tan bệnh tật và lưu thông khí khuyết. Nếu chị em muốn có một làn da sạch mụn và hồng hào thì việc ngâm chân đều đặn sẽ có tác dụng rất tốt. Bước 6: Đắp ủ da bằng cám gạo Bước 7: Đắp mặt Bước 8: Xông hơi thuốc, xông hơi phần phụ khoa, xông khô Bước 9: Tắm tráng nước lá cây Bước 10: Dưỡng da Bước 11: Ăn nhẹ: Cháo ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/b8p4c/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg) Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2 Chăm sóc da body & mặt tại Cham Spa & Massage 120 phút cho bạn làn da sáng hồng - 3 Việc dưỡng da bằng các thảo dược thiên nhiên sẽ giúp cải thiện độ trắng sáng, mịn màng cho da, còn có tác dụng thư giãn cơ thể, lấy lại độ đàn hồi và tái sinh tế bào mới. Sau liệu trình, các bạn sẽ cảm nhận sự tươi trẻ của làn da giúp phục hồi năng lượng cơ thể cùng sức sống mới cho làn da. Cham Spa & Massage Đà Nẵng Nằm cạnh sông Hàn thơ mộng của thành phố Đà Nẵng xinh đẹp, Cham Spa & Massage tại Đà Nẵng là nơi bạn có thể chạm vào những kiến trúc Champa cổ xưa đã bị thất lạc cách đây gần 1800 năm. Sau những giờ làm việc căng thẳng, lo toan của cuộc sống hàng ngày khiến ta cảm thấy mệt mỏi, ta càng mong muốn được trở về với không gian thiền êm đềm, tĩnh lặng, cảm nhận mùi oải hương ngọt ngào phảng phất, mùi thơm của cây lá thuốc nam, ngâm mình trong làn nước xanh ấm áp của Hồ bơi ven sông Hàn đầy lãng mạn và bỏ lại từng cảm giác mỏi mệt trong bồn gỗ quý Pơ Mu với nước tắm dược liệu thơm lừng hòa quyện bởi hơn 39 vị thuốc bí truyền cổ xưa của Người Dao Đỏ- một dân tộc Vùng Núi Phía Bắc Việt Nam. Dưới bàn tay điêu luyện của đội ngũ kỹ thuật viên chuyên nghiệp tại Cham Spa & Massage, quý khách sẽ được tận hưởng những phút giây thư giãn tột cùng, đánh thức mọi giác quan, mang lại hiệu quả sức khỏe đến không ngờ. Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 3 ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/bhhdt/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg) Dịch vụ bao gồm: o 50 phòng, gồm: Khu dành cho nam/nữ/cặp đôi/vợ chồng riêng biệt, khu massage ngoài trời. o Dịch vụ Spa & Massage chăm sóc sức khỏe theo phương pháp Y học cổ truyền. o Ngâm, tắm trong thùng gỗ quý Pơ Mu với lá thuốc cổ truyền của người Dao Đỏ, trị phong thấp, đau nhức, chống mỏi mệt, giải cảm, tăng cường sinh lực, đặc biệt tốt cho phụ nữ sau sinh. o Xông hơi thuốc bắc, giải độc tố phần phụ khoa cho phụ nữ, giúp cơ thể thơm tho, trắng sáng mịn màng. o Steambath, Sauna, hồ bơi Jacuzzi gia nhiệt nước nóng. o Khu nhà hàng và Coffee o Có suất ăn miễn phí đi kèm và nhiều món ăn theo thực đơn với giá trị dinh dưỡng cao, giúp bồi bổ sức khỏe. Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 4 ![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/chlkv/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg) Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2 Thẻ Silver; 4.000.000 đ: Chỉ dành cho chính chủ thẻ ( Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\") Thẻ Gold: 10.000.000 đ: Option 1: Mua thẻ tặng 1 thẻ (Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\") Option 2: Chủ thẻ được dẫn 1 người khách đi kèm Được giảm 20% cho người thứ 3 trở lên cho tất cả các loại dịch vụ Thẻ Platinum: 20.000.000 đ Option 1: Được dùng cho tất cả các gói dịch vụ hiện có tại Cham Spa trừ sản phẩm Option 2: Mua 1 thẻ tặng 1 thẻ (Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\") Option 3: Được dẫn kèm 1 người khách đi cùng Được giảm 20% cho người thứ 3 trở lên cho tất cả các loại dịch vụ Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 1 Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2 Cham Spa & Massage với lối kiến trúc cổ kính độc đáo của người Chăm và đội ngũ nhân viên được đào tạo chuyên nghiệp, thân thiện sẽ mang đến cho bạn những phút giây thư giãn tuyệt vời. Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2 Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 1', '2015-03-09 04:13:36', '2015-03-09 04:13:36');
INSERT INTO service_conditions VALUES ('7', '', '', '', '2015-03-09 07:32:19', '2015-03-09 07:32:19');

-- ----------------------------
-- Table structure for `service_details`
-- ----------------------------
DROP TABLE IF EXISTS `service_details`;
CREATE TABLE `service_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `summary` longtext COLLATE utf8_unicode_ci NOT NULL,
  `highlights` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of service_details
-- ----------------------------
INSERT INTO service_details VALUES ('1', '', '', '2015-03-01 04:32:21', '2015-03-01 04:32:21');
INSERT INTO service_details VALUES ('2', 'Gói tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị tại Cham Spa được ví như một bài thuốc quý vừa có tác dụng chữa bệnh, vừa làm đẹp cho cơ thể và tăng cường sức khỏe.\r\nQuý trình dịch vụ gồm 2 phần với 120 phút (Vui lòng theo dõi thông tin chi tiết).\r\nGói dịch vụ còn kèm theo một suất ăn nhẹ: 1 bát cháo giải cảm, 1 đĩa trái cây và thức uống dinh dưỡng và sử dụng hồ bơi, hồ bơi Jacuzzi gia nhiệt nước nóng.\r\nCham Spa & Massage với trang thiết bị hiện đại, kiến trúc cổ kính độc đáo mới lạ với đội ngũ nhân viên được đào tạo chuyên nghiệp, thân thiện sẽ mang đến cho bạn những phút giây thư giãn tuyệt vời.\r\nCham Spa & Massage đang có các ưu đãi phát hành thẻ cho Khách hàng bao gồm thẻ Thẻ Bạch Kim (20,000,000đ); Thẻ Vàng (10,000,000đ); Thẻ Bạc (4,000,000đ); không giới hạn số lần sử dụng trong ngày & đặc biệt khuyến mãi phát hành thẻ phụ.\r\nÁp dụng cho nam & nữ. Tiền tip tùy ý', '', '2015-03-01 04:36:01', '2015-03-01 04:36:01');
INSERT INTO service_details VALUES ('3', 'Gói tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị tại Cham Spa được ví như một bài thuốc quý vừa có tác dụng chữa bệnh, vừa làm đẹp cho cơ thể và tăng cường sức khỏe.\r\nQuý trình dịch vụ gồm 2 phần với 120 phút (Vui lòng theo dõi thông tin chi tiết).\r\nGói dịch vụ còn kèm theo một suất ăn nhẹ: 1 bát cháo giải cảm, 1 đĩa trái cây và thức uống dinh dưỡng và sử dụng hồ bơi, hồ bơi Jacuzzi gia nhiệt nước nóng.\r\nCham Spa & Massage với trang thiết bị hiện đại, kiến trúc cổ kính độc đáo mới lạ với đội ngũ nhân viên được đào tạo chuyên nghiệp, thân thiện sẽ mang đến cho bạn những phút giây thư giãn tuyệt vời.\r\nCham Spa & Massage đang có các ưu đãi phát hành thẻ cho Khách hàng bao gồm thẻ Thẻ Bạch Kim (20,000,000đ); Thẻ Vàng (10,000,000đ); Thẻ Bạc (4,000,000đ); không giới hạn số lần sử dụng trong ngày & đặc biệt khuyến mãi phát hành thẻ phụ.\r\nÁp dụng cho nam & nữ. Tiền tip tùy ý', '', '2015-03-01 04:38:24', '2015-03-01 04:38:24');
INSERT INTO service_details VALUES ('4', 'Gói tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị tại Cham Spa được ví như một bài thuốc quý vừa có tác dụng chữa bệnh, vừa làm đẹp cho cơ thể và tăng cường sức khỏe.\r\nQuý trình dịch vụ gồm 2 phần với 120 phút (Vui lòng theo dõi thông tin chi tiết).\r\nGói dịch vụ còn kèm theo một suất ăn nhẹ: 1 bát cháo giải cảm, 1 đĩa trái cây và thức uống dinh dưỡng và sử dụng hồ bơi, hồ bơi Jacuzzi gia nhiệt nước nóng.\r\nCham Spa & Massage với trang thiết bị hiện đại, kiến trúc cổ kính độc đáo mới lạ với đội ngũ nhân viên được đào tạo chuyên nghiệp, thân thiện sẽ mang đến cho bạn những phút giây thư giãn tuyệt vời.\r\nCham Spa & Massage đang có các ưu đãi phát hành thẻ cho Khách hàng bao gồm thẻ Thẻ Bạch Kim (20,000,000đ); Thẻ Vàng (10,000,000đ); Thẻ Bạc (4,000,000đ); không giới hạn số lần sử dụng trong ngày & đặc biệt khuyến mãi phát hành thẻ phụ.\r\nÁp dụng cho nam & nữ. Tiền tip tùy ý', '', '2015-03-01 04:40:48', '2015-03-01 04:40:48');
INSERT INTO service_details VALUES ('5', 'dawsedrtfg', 'sfgdhfg', '2015-03-08 10:48:58', '2015-03-08 10:48:58');
INSERT INTO service_details VALUES ('6', 'Công việc và cuộc sống với nhiều lo toan, bận rộn, áp lực khiến bạn cảm thấy mệt mỏi, căng thẳng và cơ thể mất dần năng lượng. Hãy gạt bỏ mọi lo toan và bận rộn để thư giãn tối đa và phục hồi năng lượng cơ thể với gói dịch vụ Chăm sóc mặt và body từ gốc đến ngọn.\r\n\r\nChăm sóc da body & mặt tại Cham Spa & Massage 120 phút cho bạn làn da sáng hồng - 2\r\n![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/8r6i3/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg)\r\nHình minh họa\r\n\r\nQuy trình dịch vụ: 120 phút\r\n\r\nBước 1: Khách hàng được sử dụng miễn phí tắm hồ bơi, jaccuzi gia nhiệt nước nóng, tắm tráng.\r\nBước 2: Hấp ủ tóc với tinh dầu bơ\r\nBước 3: Tắm sữa.\r\nBước 4: Tẩy tế bào chết, tẩy gót chân\r\nBước 5: Ngâm chân gừng muối.\r\n\r\nChăm sóc da body & mặt tại Cham Spa & Massage 120 phút cho bạn làn da sáng hồng - 1\r\n![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/hrv37/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg)\r\nHình minh họa\r\n\r\nNgâm chân với nước gừng giúp giảm stress, giảm cảm giác đau nhức, mệt mỏi, xua tan bệnh tật và lưu thông khí khuyết. Nếu chị em muốn có một làn da sạch mụn và hồng hào thì việc ngâm chân đều đặn sẽ có tác dụng rất tốt.\r\n\r\nBước 6: Đắp ủ da bằng cám gạo\r\nBước 7: Đắp mặt\r\nBước 8: Xông hơi thuốc, xông hơi phần phụ khoa, xông khô\r\nBước 9: Tắm tráng nước lá cây\r\nBước 10: Dưỡng da\r\nBước 11: Ăn nhẹ: Cháo  \r\n![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/b8p4c/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg)\r\nTắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2\r\n\r\nChăm sóc da body & mặt tại Cham Spa & Massage 120 phút cho bạn làn da sáng hồng - 3\r\n\r\nViệc dưỡng da bằng các thảo dược thiên nhiên  sẽ giúp  cải thiện độ trắng sáng, mịn màng cho da, còn có tác dụng thư giãn cơ thể, lấy lại độ đàn hồi và tái sinh tế bào mới. Sau liệu trình, các bạn sẽ cảm nhận sự tươi trẻ của làn da giúp phục hồi năng lượng cơ thể cùng sức sống mới cho  làn da.', 'Cham Spa & Massage Đà Nẵng\r\n \r\nNằm cạnh sông Hàn thơ mộng của thành phố Đà Nẵng xinh đẹp,   Cham Spa & Massage tại Đà Nẵng là nơi bạn có thể chạm vào những kiến trúc Champa cổ xưa đã bị thất lạc cách đây gần 1800 năm. Sau những giờ làm việc căng thẳng, lo toan của cuộc sống hàng ngày khiến ta cảm thấy mệt mỏi, ta càng mong muốn được trở về với không gian thiền êm đềm, tĩnh lặng, cảm nhận mùi oải hương ngọt ngào phảng phất, mùi thơm của cây lá thuốc nam, ngâm mình trong làn nước xanh ấm áp của Hồ bơi ven sông Hàn đầy lãng mạn và bỏ lại từng cảm giác mỏi mệt trong bồn gỗ quý Pơ Mu với nước tắm dược liệu thơm lừng hòa quyện bởi hơn 39 vị thuốc bí truyền cổ xưa của Người Dao Đỏ- một dân tộc Vùng Núi Phía Bắc Việt Nam. Dưới bàn tay điêu luyện của đội ngũ kỹ thuật viên chuyên nghiệp tại Cham Spa & Massage, quý khách sẽ được tận hưởng những phút giây thư giãn tột cùng, đánh thức mọi giác quan, mang lại hiệu quả sức khỏe đến không ngờ.\r\nTắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 3\r\n![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/bhhdt/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg)\r\nDịch vụ bao gồm:\r\n \r\no 50 phòng, gồm: Khu dành cho nam/nữ/cặp đôi/vợ chồng riêng biệt, khu massage ngoài trời.\r\no Dịch vụ Spa & Massage chăm sóc sức khỏe theo phương pháp Y học cổ truyền. \r\no Ngâm, tắm trong thùng gỗ quý Pơ Mu với lá thuốc cổ truyền của người Dao Đỏ, trị phong thấp, đau nhức, chống mỏi mệt, giải cảm, tăng cường sinh lực, đặc biệt tốt cho phụ nữ sau sinh.\r\no Xông hơi thuốc bắc, giải độc tố phần phụ khoa cho phụ nữ, giúp cơ thể thơm tho, trắng sáng mịn màng.\r\no Steambath, Sauna, hồ bơi Jacuzzi gia nhiệt nước nóng.\r\no Khu nhà hàng và Coffee\r\no Có suất ăn miễn phí đi kèm và nhiều món ăn theo thực đơn với giá trị dinh dưỡng cao, giúp bồi bổ sức khỏe.\r\nTắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 4\r\n![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/chlkv/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg)\r\nTắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2\r\n\r\nThẻ Silver; 4.000.000 đ:   Chỉ dành cho chính chủ thẻ ( Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\")\r\nThẻ Gold: 10.000.000 đ: \r\nOption 1: Mua thẻ tặng 1 thẻ   (Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\")\r\nOption 2: Chủ thẻ được dẫn 1 người khách đi kèm\r\nĐược giảm 20% cho người thứ 3 trở lên cho tất cả các loại dịch vụ\r\n\r\nThẻ Platinum: 20.000.000 đ \r\nOption 1: Được dùng cho tất cả các gói dịch vụ hiện có tại Cham Spa trừ sản phẩm\r\nOption 2: Mua 1 thẻ tặng 1 thẻ (Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\")\r\nOption 3: Được dẫn kèm 1 người khách đi cùng\r\nĐược giảm 20% cho người thứ 3 trở lên cho tất cả các loại dịch vụ\r\n\r\nTắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 1\r\n\r\nTắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2\r\n\r\nCham Spa & Massage với lối kiến trúc cổ kính độc đáo của người Chăm và đội ngũ nhân viên được đào tạo chuyên nghiệp, thân thiện sẽ mang đến cho bạn những phút giây thư giãn tuyệt vời.\r\n\r\nTắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2\r\n\r\nTắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 1', '2015-03-08 10:56:35', '2015-03-08 10:56:35');
INSERT INTO service_details VALUES ('7', '<div class=\"v7_PM_Content\">\r\n				<div class=\"mTop20\">\r\n<ul class=\"v7_N_nav-tabs\">\r\n<li class=\"active\">\r\n<a href=\"#product_Description\">Thông tin chi tiết</a>\r\n</li>\r\n<li>\r\n<a href=\"#product_Comment\">Bình luận&nbsp;(0)</a>\r\n</li>\r\n<div class=\"c\"></div>\r\n</ul>\r\n<div class=\"v7_tab_content\">\r\n<div id=\"product_Description\" class=\"mTop15 f14 v7_tab_contentBox\">\r\n<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Công việc và cuộc sống với nhiều lo toan, bận rộn, áp lực khiến bạn cảm thấy mệt mỏi, căng thẳng và cơ thể mất dần năng lượng. Hãy gạt bỏ mọi lo toan và bận rộn để thư giãn tối đa và phục hồi năng lượng cơ thể với gói dịch vụ Chăm sóc mặt và body từ gốc đến ngọn.</span></span></p>\r\n<p style=\"text-align: center;\"><img alt=\"Chăm sóc da body &amp; mặt tại Cham Spa &amp; Massage 120 phút cho bạn làn da sáng hồng - 2\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/8r6i3/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg\"></p>\r\n<p style=\"text-align: center;\">Hình minh họa</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Quy trình dịch vụ: 120 phút</span></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Bước 1: Khách hàng được sử dụng miễn phí&nbsp;tắm hồ bơi, jaccuzi gia nhiệt nước nóng, tắm tráng.<br>\r\nBước 2: Hấp ủ tóc với tinh dầu bơ<br>\r\nBước 3: Tắm sữa.<br>\r\nBước 4: Tẩy tế bào chết, tẩy gót chân<br>\r\nBước 5: Ngâm chân gừng muối.</span></span></p>\r\n<p style=\"text-align: center;\"><img alt=\"Chăm sóc da body &amp; mặt tại Cham Spa &amp; Massage 120 phút cho bạn làn da sáng hồng - 1\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/hrv37/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg\"></p>\r\n<p style=\"text-align: center;\">Hình minh họa</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Ngâm chân với nước gừng giúp&nbsp;giảm stress, giảm cảm giác đau nhức, mệt mỏi, xua tan bệnh tật và lưu thông khí khuyết. Nếu chị em muốn có một làn da sạch mụn và hồng hào thì việc ngâm chân đều đặn sẽ có tác dụng rất tốt.</span></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Bước 6: Đắp ủ da bằng cám gạo<br>\r\nBước 7: Đắp mặt<br>\r\nBước 8: Xông hơi thuốc, xông hơi phần phụ khoa, xông khô<br>\r\nBước 9: Tắm tráng nước lá cây<br>\r\nBước 10: Dưỡng da<br>\r\nBước 11: Ăn nhẹ: Cháo &nbsp;</span></span></p>\r\n<p style=\"text-align: center;\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 2\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/b8p4c/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\"></p>\r\n<p style=\"text-align: center;\"><img alt=\"Chăm sóc da body &amp; mặt tại Cham Spa &amp; Massage 120 phút cho bạn làn da sáng hồng - 3\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2015/01/29/7v4v7/Cham-soc-da-body-mat-tai-Cham-Spa-Massage-120-phut-cho-ban-lan-da-sang-hong.jpg\"></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Việc dưỡng da bằng các thảo dược thiên nhiên &nbsp;sẽ giúp &nbsp;cải thiện độ trắng sáng, mịn màng cho da, còn có tác dụng thư giãn cơ thể, lấy lại độ đàn hồi và tái sinh tế bào mới. Sau liệu trình, các bạn sẽ cảm nhận sự tươi trẻ của làn da giúp phục hồi năng lượng cơ thể cùng sức sống mới cho &nbsp;làn da</span></span>.</p>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Cham <a style=\"color:inherit !important;font-size:inherit !important;text-decoration:inherit !important;\" href=\"http://muachung.vn/danh-muc/c-6/spa-lam-dep.html\" title=\"spa\" target=\"_blank\">Spa</a> &amp; Massage Đà Nẵng</strong></span></span></p>\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\">&nbsp;</p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Nằm cạnh sông Hàn thơ mộng của thành phố Đà Nẵng xinh đẹp, &nbsp;&nbsp;Cham Spa &amp; Massage&nbsp;tại Đà Nẵng là nơi bạn có thể chạm vào những kiến trúc Champa cổ xưa đã bị thất lạc cách đây gần 1800 năm. Sau những giờ làm việc căng thẳng, lo toan của cuộc sống hàng ngày khiến ta cảm thấy mệt mỏi, ta càng mong muốn được trở về với không gian thiền êm đềm, tĩnh lặng, cảm nhận mùi oải hương ngọt ngào phảng phất, mùi thơm của cây lá thuốc nam, ngâm mình trong làn nước xanh ấm áp của Hồ bơi ven sông Hàn đầy lãng mạn và bỏ lại từng cảm giác mỏi mệt trong bồn gỗ quý Pơ Mu&nbsp;<span style=\"padding: 0px; margin: 0px;\">với nước tắm dược liệu thơm lừng hòa quyện bởi hơn 39 vị thuốc bí truyền cổ xưa của Người Dao Đỏ- một dân tộc Vùng Núi Phía Bắc Việt Nam.&nbsp;</span><span style=\"padding: 0px; margin: 0px; line-height: 1.6;\">Dưới bàn tay điêu luyện của đội ngũ kỹ thuật viên chuyên nghiệp tại Cham Spa &amp; Massage, quý khách sẽ được tận hưởng những phút giây thư giãn tột cùng, đánh thức mọi giác quan, mang lại hiệu quả sức khỏe đến không ngờ.</span></span></span></p>\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: center;\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 3\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/bhhdt/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\"></p>\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\">&nbsp;</p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong style=\"padding: 0px; margin: 0px;\"><span style=\"padding: 0px; margin: 0px;\">Dịch</span>&nbsp;vụ bao gồm:</strong></span></span></p>\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\">&nbsp;</p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o 50 phòng, gồm: Khu dành cho nam/nữ/cặp đôi/vợ chồng riêng biệt, khu massage ngoài trời.</span></span></p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o Dịch vụ Spa &amp; Massage chăm sóc sức khỏe theo phương pháp Y học cổ truyền.&nbsp;</span></span></p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o Ngâm, tắm trong thùng gỗ quý Pơ Mu với lá thuốc cổ truyền của người Dao Đỏ, trị phong thấp, đau nhức, chống mỏi mệt, giải cảm, tăng cường sinh lực, đặc biệt tốt cho phụ nữ sau sinh.</span></span></p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o Xông hơi thuốc bắc, giải độc tố phần phụ khoa cho phụ nữ, giúp cơ thể thơm tho, trắng sáng mịn màng.</span></span></p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o Steambath, Sauna, hồ bơi Jacuzzi gia nhiệt nước nóng.</span></span></p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o Khu nhà hàng và Coffee</span></span></p>\r\n</div>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">o&nbsp;Có suất ăn miễn phí đi kèm và nhiều món ăn theo thực đơn với giá trị dinh dưỡng cao, giúp bồi bổ sức khỏe.</span></span></p>\r\n</div>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 4\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/chlkv/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\"></p>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 2\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/308vj/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\" style=\"line-height: 20px;\"></p>\r\n<div style=\"line-height: 25px; font-size: 13.63636302948px; color: rgb(34, 34, 34); font-family: arial, sans-serif; background-color: rgb(255, 255, 255);\">\r\n<p><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Thẻ Silver; 4.000.000 đ: &nbsp; Chỉ dành cho chính chủ thẻ ( Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\")<br>\r\nThẻ Gold: 10.000.000 đ:&nbsp;<br>\r\nOption 1: Mua thẻ tặng 1 thẻ &nbsp; (Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\")<br>\r\nOption 2: Chủ thẻ được dẫn 1 người khách đi kèm<br>\r\nĐược giảm 20% cho người thứ 3 trở lên cho tất cả các loại dịch vụ</span></span></p>\r\n<p><span style=\"font-size:14px;\"><span style=\"font-family:arial,helvetica,sans-serif;\">Thẻ Platinum: 20.000.000 đ&nbsp;<br>\r\nOption 1: Được dùng cho tất cả các gói dịch vụ hiện có tại Cham Spa trừ sản phẩm<br>\r\nOption 2: Mua 1 thẻ tặng 1 thẻ (Dùng cho gói dịch vụ \" Massage body\" hoặc \" Chăm sóc Từ Gốc Đến Ngọn\")<br>\r\nOption 3: Được dẫn kèm 1 người khách đi cùng<br>\r\nĐược giảm 20% cho người thứ 3 trở lên cho tất cả các loại dịch vụ</span></span></p>\r\n</div>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 1\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/08/01/h7gyl/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\"></p>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 2\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/24/azjve/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.png\"></p>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: justify; background-color: rgb(255, 255, 255);\"><strong style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">Cham Spa &amp; Massage</strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">&nbsp;với lối&nbsp;kiến trúc cổ kính độc đáo của người Chăm và&nbsp;đội ngũ nhân viên được đào tạo&nbsp;</span><strong style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">chuyên nghiệp, thân thiện</strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">&nbsp;sẽ mang đến cho bạn những phút giây thư giãn tuyệt vời.</span></p>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 2\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/3ia4y/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\"></p>\r\n<p style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"Tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa &amp; Massage - 1\" src=\"http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/xjqrq/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg\"></p>\r\n<p style=\"margin-top: 6px; font-family: Arial; line-height: 25px; font-size: 13.63636302948px; padding-left: 20px; text-align: justify; background-image: url(http://muachung.vn/style/images/list-arrow-black.png?v=0809); background-attachment: scroll; background-color: rgb(255, 255, 255); background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 3px; background-repeat: no-repeat;\"><strong><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Cham Spa &amp; Massage</span></span></strong></p>\r\n<ul style=\"font-family: Arial; line-height: 25px; font-size: 13.63636302948px; list-style: none outside none; background-color: rgb(255, 255, 255);\">\r\n<li style=\"margin-top: 6px; padding-left: 20px; text-align: justify; background-image: url(http://muachung.vn/style/images/list-arrow-black.png?v=0809); background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 3px; background-repeat: no-repeat;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Địa chỉ:&nbsp;<strong>Thửa đất số 2,3 Lô B2.9 Khu đô thị mới Hoà Xuân - Cẩm Lệ - Đà Nẵng</strong></span></span></li>\r\n<li style=\"margin-top: 6px; padding-left: 20px; text-align: justify; background-image: url(http://muachung.vn/style/images/list-arrow-black.png?v=0809); background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 3px; background-repeat: no-repeat;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Điện thoại:&nbsp;</span></span>05113 62 62 62</li>\r\n<li style=\"margin-top: 6px; padding-left: 20px; text-align: justify; background-image: url(http://muachung.vn/style/images/list-arrow-black.png?v=0809); background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 3px; background-repeat: no-repeat;\"><span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Giờ mở cửa: <strong>10h&nbsp;- 23h</strong></span></span></li>\r\n</ul>\r\n</div>\r\n<div id=\"product_Comment\" class=\"v7_tab_contentBox hidden\">\r\n<div class=\"mTop30\">\r\n<div class=\"v7_BD_Title\">\r\nBình luận\r\n</div>\r\n<div class=\"v7_border_Line_dashed\"></div>\r\n<!-- PHAN COMMENT -->\r\n<div><a name=\"comment\"></a></div>\r\n<div class=\"mTop15\">\r\n<div id=\"oauth_form\"></div>\r\n<div class=\"c\"></div>\r\n<div class=\"commentForm\" id=\"comment-content\">\r\n<!-- WRITE COMMENT -->\r\n<div class=\"comment-item last-item commentBlockWrite\" id=\"comment-user\">\r\n<div class=\"commentBlockContent\">\r\n<div class=\"mRight5\">\r\n<textarea id=\"comment-txt\" cols=\"30\" rows=\"3\" style=\"margin: 5px 0px 10px; width: 655px; overflow: hidden; height: 36px;\"></textarea>\r\n<div class=\"fr mLeft10\">\r\n<a id=\"comment-submit\" href=\"javascript:void(0)\" onclick=\"shop.comment.submit()\" class=\"btn_comment\"></a>\r\n</div>\r\n<div class=\"fr\">\r\n<a href=\"javascript:void(0)\" class=\"smiley\" onclick=\"shop.smiley.load(event, this, \'#comment-txt\')\"></a>\r\n</div>\r\n<div class=\"c\"></div>\r\n<div style=\"position: absolute; display: none; font-weight: normal; width: 655px; font-family: arial; line-height: normal; font-size: 12px; padding: 2px;\">&nbsp;</div><div style=\"position: absolute; display: none; font-weight: normal; width: 655px; font-family: arial; line-height: normal; font-size: 12px; padding: 2px;\">&nbsp;</div></div>\r\n</div>\r\n</div>\r\n<input type=\"hidden\" value=\"85054\" id=\"item-id\">\r\n<div id=\"comment-item-main\"></div>\r\n<!-- DS COMMENT -->\r\n<div id=\"comment-item-viewMore\"></div>\r\n</div>\r\n<!-- End center -->\r\n</div>\r\n</div>\r\n<script type=\"text/javascript\">\r\n//khoi tao san pham\r\nvar linkComment =\'http://muachung.vn/san-pham/p-85054/cham-soc-da-body-mat-tai-cham-spa-massage-120-phut-cho-ban-lan-da-sang-hong/binh-luan.html\', cid = 0;\r\nshop.comment.customer = {\"id\":0,\"email\":\"\",\"avatar\":\"\",\"phone\":\"\",\"address\":\"\",\"fullname\":\"\",\"plaza_id\":0,\"plaza\":[],\"order_process\":[],\"order_unuser\":[]};\r\n</script>\r\n</div>\r\n<div id=\"product_Rate\" class=\"v7_tab_contentBox hidden\">\r\n<input type=\"hidden\" name=\"item-id\" id=\"item-id\" value=\"85054\">\r\n<div class=\"mTop20\" id=\"rateArea\">\r\n<div class=\"pBottom10\">\r\n</div>\r\n</div>\r\n<script language=\"javascript\">\r\n\r\njQuery(document).ready(function () {\r\n	$(function(){$(\'#shopRateForm :radio.star\').rating();});\r\n	//Khi focus vào nếu chưa LOGIN thì bắt LOGIN\r\n	$(\'textarea\').focus(function(){\r\n		if(!IS_CUSTOMER_LOGIN){\r\n			shop.customer.login.show();\r\n		}\r\n	});\r\n	$(\'.rate_BSvote\').click(function(){\r\n		if(!IS_CUSTOMER_LOGIN){\r\n			shop.customer.login.show();\r\n		}\r\n	});  \r\n\r\n\r\n	jQuery(\".starLabel\").hover(function(){\r\n	    jQuery(\'#starLabel\').html(jQuery(this).children().attr(\"title\"));\r\n	},function(){\r\n	    jQuery(\'#starLabel\').html(\'\');\r\n	});\r\n	\r\n});\r\n\r\n\r\n\r\nshop.rate.comment.customer = {\"id\":0,\"email\":\"\",\"avatar\":\"\",\"phone\":\"\",\"address\":\"\",\"fullname\":\"\",\"plaza_id\":0,\"plaza\":[],\"order_process\":[],\"order_unuser\":[]};\r\n</script>\r\n</div>\r\n</div>\r\n<script type=\"text/javascript\">\r\n					function shopClick_tab(id) {\r\n						$(\'.v7_N_nav-tabs li a[href=\"#\' + id + \'\"]\').trigger(\'click\');\r\n					}\r\n					$(document).ready(function() {\r\n						$(\'.v7_N_nav-tabs li a\').click(function() {\r\n							var id_tab = $(this).attr(\'href\');\r\n\r\n							$(\'.v7_N_nav-tabs li\').removeClass(\"active\");\r\n							$(this).parent().addClass(\"active\");\r\n							$(\'.v7_tab_contentBox\').addClass(\"hidden\");\r\n							$(id_tab).removeClass(\"hidden\");\r\n							return false;\r\n						});\r\n					});</script>\r\n</div>\r\n<div class=\"v7_PM_OrderBuy mTop30\">\r\n<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\r\n<tbody><tr valign=\"TOP\">\r\n<td class=\"v7_tdBoxBotDetail\" style=\"border-right:  1px dashed #d1d1d1\" width=\"320\">\r\n<div>\r\n<div class=\"v7_BD_title\"><h1 id=\"f20\">Chăm sóc da body &amp; mặt tại Cham Spa &amp; Massage</h1></div>\r\n<div class=\"mTop10\">\r\n<div class=\"v7_BD_PriceNCC\">460.000đ</div>\r\n<div class=\"mTop5\">\r\n<div class=\"v7_BD_PriceMC\">230.000<span>đ</span></div>\r\n<div class=\"v7_BD_FreeShipType\"><b>Giao mã số phiếu</b></div>\r\n<div class=\"c\"></div>\r\n</div>\r\n</div>\r\n<div class=\"v7_BD_BuyNow\">\r\n<a class=\" fixPng\" href=\"javascript:void(0)\" onclick=\"shop.cart.activeAdminAddItem(0, 0);shop.cart.addItem(85054,1425349800,1427864340,73,1000)\"></a>\r\n</div>\r\n</div>\r\n</td>\r\n<td width=\"320\" class=\"v7_tdBoxBotDetail\">\r\n<div>\r\n<div class=\"f14\">\r\n<div class=\"v7_BoxAdr\" style=\"border-top: none;padding-top: 0\">\r\n<div class=\" v7_PM_BA_Name \" style=\"background: none;padding-left: 0\">\r\n<a id=\"8\" class=\"jTip\" href=\"javascript:void(0)\">Kho Đà Nẵng</a>\r\n<span class=\"hidden content8\"><img width=\"630\" src=\"http://muachung10.vcmedia.vn/map/0.543715001332143921.png\"></span>\r\n</div>\r\n<div class=\"mTop5\"> 21 Hàm Nghi - P.Vĩnh Trung - Q.Thanh Khê</div>\r\n<div class=\"mTop5\">Điện thoại:&nbsp;0511.2.603.603</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody></table>\r\n</div></div>', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO service_details VALUES ('8', 'p mặt\r\nBước 8: Xông hơi thuốc, xông hơi phần phụ khoa, xông khô\r\nBước 9: Tắm tráng nước lá cây\r\nBước 10: Dưỡng da\r\nBước 11: Ăn nhẹ: Cháo  \r\n![](http://muachung10.vcmedia.vn/thumb_w/640/i:gallery/2014/07/22/b8p4c/Tam-ngam-thuoc-la-Dao-do-ket-hop-massage-lien-ket-dieu-tri-Cham-Spa-Massage.jpg)\r\nTắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị - Cham Spa & Massage - 2\r\n\r\nChăm sóc da body & mặt tại Cham Spa & Massage 120 phút cho bạn làn da sáng hồng - 3\r\n\r\nViệc dưỡng da bằng các thảo dược thiên nhiên  sẽ giúp  cải thiện độ trắng sáng, mịn màng cho da, còn có tác dụng thư giãn cơ thể, lấy lại độ đàn hồi và tái sinh tế bào mới. Sau liệu trình, các bạn sẽ cảm nhận sự tươi trẻ của làn da giúp phục hồi năng lượng cơ thể cùng sức sống mới cho  làn da', '', '2015-03-09 07:32:19', '2015-03-09 07:32:19');

-- ----------------------------
-- Table structure for `terms_conditions`
-- ----------------------------
DROP TABLE IF EXISTS `terms_conditions`;
CREATE TABLE `terms_conditions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext NOT NULL,
  `configure_no` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of terms_conditions
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `address_id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `user_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO users VALUES ('1', '0', '', '', 'admin', 'admin@example.org', '$2y$10$LPUb/XF31wQ49gHSeNw88.cj7bufv0fuK/VkVlTdarf.2owSImlqm', '32fcfd898a9940fa86d4d8d43c980032', null, '1', 'admin', '2015-03-13 02:49:24', '2015-03-13 02:49:24');
INSERT INTO users VALUES ('2', '0', '', '', 'dungho', 'dungho@gmail.com', '$2y$10$BRO.OM/xENyZlZSRwycB/eKRECLgxO37R5UwJ4SdLT03OJwZt7Uie', 'c59d8eacad506347d001c509ef41b35f', 'iC8UeECTZRfyTEbCFuxYrSUQJRlJnMD1xFWvmZE79V99ujZc2T3AuCqapXpP', '1', 'retailer', '2015-03-13 02:49:24', '2015-03-14 08:34:36');
INSERT INTO users VALUES ('3', '0', '', '', 'user', 'user@example.org', '$2y$10$6z6DEVLCag0t9jrm4d.xuurMtGfOoFrBkDmLQW8J2eKwafP8dwQc2', 'd9fd998f4b2786bd603fe0a240cb40b1', 'QAk1OUFRZb7LYBfRKZJQZDGbOS2i3sUhXJSGLY0gDbc9iO1FdMTH6c76CEJk', '1', 'user', '2015-03-13 02:49:24', '2015-03-14 13:05:09');
INSERT INTO users VALUES ('4', '0', '', '', 'duc', 'nguyenducdn67@gmail.com', '$2y$10$fY9vsHYLzpf3C1TnsPR7nusVeVNGjvGZWozL1zZfHf6TZmHlUXayO', '394cc568506c6ce051d01c36f2d6be70', 'HYPrnlg2mxSUEpwndJKEGDZZz1wyhVuB8DhfiVl6jHD5ClwWQRFD5nqrp6uf', '1', 'user', '2015-03-13 02:50:02', '2015-03-14 13:47:48');
