# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.41-0ubuntu0.12.04.1)
# Database: booking
# Generation Time: 2015-03-05 14:15:08 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table addresses
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;

INSERT INTO `addresses` (`id`, `city_id`, `district`, `address`, `postal_code`, `created_at`, `updated_at`)
VALUES
  (1,2,'','306 - đường 2/9, Hai Chau','','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (2,2,'','225 Nguyễn Chí Thanh, Hai Chau','','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (3,2,'','123 Nguyen Van Linh, Hai Chau','','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (4,2,'','328 Hoang Dieu, Hai Chau','','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (5,2,'','423 Nguyen Huu Tho, Hai Chau','','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (6,2,'','dafdfad','2342','2015-03-02 15:49:44','2015-03-02 15:49:44'),
  (7,2,'','dddddddd','dddd','2015-03-02 15:50:39','2015-03-02 15:50:39');

/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table assigned_roles
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `assigned_roles` WRITE;
/*!40000 ALTER TABLE `assigned_roles` DISABLE KEYS */;

INSERT INTO `assigned_roles` (`id`, `user_id`, `role_id`)
VALUES
  (1,1,1),
  (2,2,2),
  (3,3,3);

/*!40000 ALTER TABLE `assigned_roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table business_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `business_categories`;

CREATE TABLE `business_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `business_categories` WRITE;
/*!40000 ALTER TABLE `business_categories` DISABLE KEYS */;

INSERT INTO `business_categories` (`id`, `name`, `created_at`, `updated_at`)
VALUES
  (1,'Category one','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (2,'Category two','2015-02-26 09:23:22','2015-02-26 09:23:22');

/*!40000 ALTER TABLE `business_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cancellations
# ------------------------------------------------------------

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



# Dump of table cities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;

INSERT INTO `cities` (`id`, `country_id`, `city`, `created_at`, `updated_at`)
VALUES
  (1,257,'Can Tho','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (2,257,'Da Nang','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (3,257,'Hai Phong','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (4,257,'Ha Noi','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (5,257,'Ho Chi Minh City','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (6,257,'Ba Ria Vung Tau','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (7,257,'Bac Lieu','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (8,257,'Bac Giang','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (9,257,'Bac Ninh','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (10,257,'Bao Loc','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (11,257,'Bien Hoa','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (12,257,'Ben Tre','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (13,257,'Buon Ma Thuot','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (14,257,'Ca Mau','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (15,257,'Cam Pha','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (16,257,'Cao Lanh','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (17,257,'Da Lat','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (18,257,'Dien Bien Phu','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (19,257,'Dong Ha','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (20,257,'Dong Hoi','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (21,257,'Ha Tinh','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (22,257,'Ha Long','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (23,257,'Hai Duong','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (24,257,'Hoa Binh','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (25,257,'Hoi An','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (26,257,'Hue','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (27,257,'Hung Yen','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (28,257,'Kon Tum','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (29,257,'Lang Son','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (30,257,'Lao Cai','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (31,257,'Long Xuyen','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (32,257,'Mong Cai','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (33,257,'My Tho','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (34,257,'Nam Dinh','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (35,257,'Ninh Binh','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (36,257,'Nha Trang','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (37,257,'Cam Ranh','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (38,257,'Phan Rang-Thap Cham','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (39,257,'Phan Thiet','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (40,257,'Phu Ly','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (41,257,'Pleiku','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (42,257,'Quang Ngai','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (43,257,'Quy Nhon','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (44,257,'Rach Gia','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (45,257,'Soc Trang','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (46,257,'Son La','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (47,257,'Tam Ky','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (48,257,'Tan An','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (49,257,'Thai Binh ddd','2015-02-26 09:23:22','2015-02-27 16:16:21'),
  (50,257,'Thai Nguyen','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (51,257,'Thanh Hoa','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (52,257,'Tra Vinh','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (53,257,'Tuy Hoa','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (54,257,'Tuyen Quang','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (55,257,'Uong Bi','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (56,257,'Viet Tri','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (57,257,'Vinh','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (58,257,'Vinh Yen','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (59,257,'Vinh Long','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (60,257,'Vung Tau','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (61,257,'Yen Bai','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (63,4,'adfadf','2015-02-27 15:55:49','2015-02-27 15:55:49'),
  (64,4,'dsfda','2015-02-27 16:05:03','2015-02-27 16:05:03'),
  (65,3,'sfgsfg','2015-02-27 16:08:14','2015-02-27 16:08:14'),
  (67,3,'gfsgfsg','2015-02-27 16:10:16','2015-02-27 16:10:16'),
  (69,4,'dddd','2015-02-27 16:15:04','2015-02-27 16:15:04');

/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table company
# ------------------------------------------------------------

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



# Dump of table countries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;

INSERT INTO `countries` (`id`, `country`, `created_at`, `updated_at`)
VALUES
  (1,'Afghanistan','2015-02-26 09:23:20','2015-02-26 09:23:20'),
  (2,'Albania','2015-02-26 09:23:20','2015-02-26 09:23:20'),
  (3,'Algeria','2015-02-26 09:23:20','2015-02-26 09:23:20'),
  (4,'American Samoa','2015-02-26 09:23:20','2015-02-26 09:23:20'),
  (5,'Andorra','2015-02-26 09:23:20','2015-02-26 09:23:20'),
  (6,'Angola','2015-02-26 09:23:20','2015-02-26 09:23:20'),
  (7,'Anguilla','2015-02-26 09:23:20','2015-02-26 09:23:20'),
  (8,'Antarctica','2015-02-26 09:23:20','2015-02-26 09:23:20'),
  (9,'Antigua and Barbuda','2015-02-26 09:23:20','2015-02-26 09:23:20'),
  (10,'Argentina','2015-02-26 09:23:20','2015-02-26 09:23:20'),
  (11,'Armenia','2015-02-26 09:23:20','2015-02-26 09:23:20'),
  (12,'Aruba','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (13,'Australia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (14,'Austria','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (15,'Azerbaijan','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (16,'Bahamas','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (17,'Bahrain','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (18,'Bangladesh','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (19,'Barbados','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (20,'Belarus','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (21,'Belgium','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (22,'Belize','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (23,'Benin','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (24,'Bermuda','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (25,'Bhutan','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (26,'Bolivia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (27,'Bosnia and Herzegovina','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (28,'Botswana','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (29,'Bouvet Island','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (30,'Brazil','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (31,'British Antarctic Territory','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (32,'British Indian Ocean Territory','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (33,'British Virgin Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (34,'Brunei','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (35,'Bulgaria','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (36,'Burkina Faso','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (37,'Burundi','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (38,'Cambodia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (39,'Cameroon','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (40,'Canada','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (41,'Canton and Enderbury Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (42,'Cape Verde','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (43,'Cayman Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (44,'Central African Republic','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (45,'Chad','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (46,'Chile','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (47,'China','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (48,'Christmas Island','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (49,'Cocos [Keeling] Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (50,'Colombia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (51,'Comoros','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (52,'Congo - Brazzaville','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (53,'Congo - Kinshasa','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (54,'Cook Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (55,'Costa Rica','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (56,'Croatia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (57,'Cuba','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (58,'Cyprus','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (59,'Czech Republic','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (60,'Côte d’Ivoire','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (61,'Denmark','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (62,'Djibouti','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (63,'Dominica','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (64,'Dominican Republic','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (65,'Dronning Maud Land','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (67,'Ecuador','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (68,'Egypt','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (69,'El Salvador','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (70,'Equatorial Guinea','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (71,'Eritrea','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (72,'Estonia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (73,'Ethiopia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (74,'Falkland Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (75,'Faroe Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (76,'Fiji','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (77,'Finland','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (78,'France','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (79,'French Guiana','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (80,'French Polynesia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (81,'French Southern Territories','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (82,'French Southern and Antarctic Territories','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (83,'Gabon','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (84,'Gambia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (85,'Georgia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (86,'Germany','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (87,'Ghana','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (88,'Gibraltar','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (89,'Greece','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (90,'Greenland','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (91,'Grenada','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (92,'Guadeloupe','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (93,'Guam','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (94,'Guatemala','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (95,'Guernsey','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (96,'Guinea','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (97,'Guinea-Bissau','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (98,'Guyana','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (99,'Haiti','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (100,'Heard Island and McDonald Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (101,'Honduras','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (102,'Hong Kong SAR China','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (103,'Hungary','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (104,'Iceland','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (105,'India','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (106,'Indonesia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (107,'Iran','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (108,'Iraq','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (109,'Ireland','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (110,'Isle of Man','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (111,'Israel','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (112,'Italy','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (113,'Jamaica','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (114,'Japan','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (115,'Jersey','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (116,'Johnston Island','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (117,'Jordan','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (118,'Kazakhstan','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (119,'Kenya','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (120,'Kiribati','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (121,'Kuwait','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (122,'Kyrgyzstan','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (123,'Laos','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (124,'Latvia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (125,'Lebanon','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (126,'Lesotho','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (127,'Liberia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (128,'Libya','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (129,'Liechtenstein','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (130,'Lithuania','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (131,'Luxembourg','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (132,'Macau SAR China','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (133,'Macedonia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (134,'Madagascar','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (135,'Malawi','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (136,'Malaysia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (137,'Maldives','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (138,'Mali','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (139,'Malta','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (140,'Marshall Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (141,'Martinique','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (142,'Mauritania','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (143,'Mauritius','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (144,'Mayotte','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (145,'Metropolitan France','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (146,'Mexico','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (147,'Micronesia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (148,'Midway Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (149,'Moldova','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (150,'Monaco','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (151,'Mongolia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (152,'Montenegro','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (153,'Montserrat','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (154,'Morocco','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (155,'Mozambique','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (156,'Myanmar [Burma]','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (157,'Namibia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (158,'Nauru','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (159,'Nepal','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (160,'Netherlands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (161,'Netherlands Antilles','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (162,'Neutral Zone','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (163,'New Caledonia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (164,'New Zealand','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (165,'Nicaragua','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (166,'Niger','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (167,'Nigeria','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (168,'Niue','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (169,'Norfolk Island','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (170,'North Korea','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (171,'North Vietnam','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (172,'Northern Mariana Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (173,'Norway','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (174,'Oman','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (175,'Pacific Islands Trust Territory','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (176,'Pakistan','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (177,'Palau','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (178,'Palestinian Territories','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (179,'Panama','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (180,'Panama Canal Zone','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (181,'Papua New Guinea','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (182,'Paraguay','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (183,'People\'s Democratic Republic of Yemen','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (184,'Peru','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (185,'Philippines','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (186,'Pitcairn Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (187,'Poland','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (188,'Portugal','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (189,'Puerto Rico','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (190,'Qatar','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (191,'Romania','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (192,'Russia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (193,'Rwanda','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (194,'Réunion','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (195,'Saint Barthélemy','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (196,'Saint Helena','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (197,'Saint Kitts and Nevis','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (198,'Saint Lucia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (199,'Saint Martin','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (200,'Saint Pierre and Miquelon','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (201,'Saint Vincent and the Grenadines','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (202,'Samoa','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (203,'San Marino','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (204,'Saudi Arabia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (205,'Senegal','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (206,'Serbia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (207,'Serbia and Montenegro','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (208,'Seychelles','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (209,'Sierra Leone','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (210,'Singapore','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (211,'Slovakia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (212,'Slovenia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (213,'Solomon Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (214,'Somalia','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (215,'South Africa','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (216,'South Georgia and the South Sandwich Islands','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (217,'South Korea','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (218,'Spain','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (219,'Sri Lanka','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (220,'Sudan','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (221,'Suriname','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (222,'Svalbard and Jan Mayen','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (223,'Swaziland','2015-02-26 09:23:21','2015-02-26 09:23:21'),
  (224,'Sweden','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (225,'Switzerland','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (226,'Syria','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (227,'São Tomé and Príncipe','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (228,'Taiwan','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (229,'Tajikistan','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (230,'Tanzania','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (231,'Thailand','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (232,'Timor-Leste','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (233,'Togo','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (234,'Tokelau','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (235,'Tonga','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (236,'Trinidad and Tobago','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (237,'Tunisia','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (238,'Turkey','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (239,'Turkmenistan','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (240,'Turks and Caicos Islands','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (241,'Tuvalu','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (242,'U.S. Minor Outlying Islands','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (243,'U.S. Miscellaneous Pacific Islands','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (244,'U.S. Virgin Islands','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (245,'Uganda','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (246,'Ukraine','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (247,'Union of Soviet Socialist Republics','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (248,'United Arab Emirates','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (249,'United Kingdom','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (250,'United States','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (251,'Unknown or Invalid Region','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (252,'Uruguay','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (253,'Uzbekistan','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (254,'Vanuatu','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (255,'Vatican City','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (256,'Venezuela','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (257,'Vietnam','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (258,'Wake Island','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (259,'Wallis and Futuna','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (260,'Western Sahara','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (261,'Yemen','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (262,'Zambia','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (263,'Zimbabwe','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (264,'Åland Islands','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (265,'aaaa','2015-02-27 14:35:51','2015-02-27 14:35:51');

/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table deal_transactions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `deal_transactions`;

CREATE TABLE `deal_transactions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `deal_id` int(11) NOT NULL,
  `consumer_id` int(11) unsigned NOT NULL,
  `consumer_email` varchar(255) NOT NULL DEFAULT '',
  `payment_date` datetime DEFAULT NULL,
  `payment_type` varchar(100) DEFAULT NULL,
  `payment_status` tinyint(1) DEFAULT '0',
  `num` smallint(4) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `crated_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table deals
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `deals` WRITE;
/*!40000 ALTER TABLE `deals` DISABLE KEYS */;

INSERT INTO `deals` (`id`, `service_id`, `title`, `amount`, `discount`, `special_request`, `time_slot`, `remind_time`, `created_at`, `updated_at`)
VALUES
  (7,18,'Tắm ngâm thuốc lá người Dao đỏ kết hợp massage',460000.00,240000.00,'Từ xa xưa người dân tộc Dao đỏ tại vùng núi SAPA đã nổi tiếng với bài thuốc tắm cổ truyền và bảo vệ sức khoẻ. Người Dao cho rằng:         \r\n\r\n- Đàn ông tắm thứ thuốc này hết đau lưng, mỏi gối. Tăng cường sinh lực, tinh thần sảng khoái, phấn chấn.     ','2015-03-12 00:00:00','2015-03-28 00:00:00','2015-03-01 07:42:55','2015-03-01 07:42:55'),
  (8,1,'Chọn 1 trong 4 dịch vụ làm đẹp tại Kay Spa',460000.00,240000.00,'','2015-03-31 00:00:00','2015-03-30 00:00:00','2015-03-01 08:34:00','2015-03-01 08:34:00'),
  (9,19,'Chọn 1 trong 4 dịch vụ làm đẹp tại Kay Spa',460000.00,240000.00,'','2015-03-31 00:00:00','2015-03-30 00:00:00','2015-03-01 08:34:40','2015-03-01 08:34:40'),
  (10,19,'Chăm sóc da body & mặt tại Cham Spa & Massage',460000.00,240000.00,'','2015-03-31 00:00:00','2015-03-30 00:00:00','2015-03-01 08:35:27','2015-03-01 08:35:27');

/*!40000 ALTER TABLE `deals` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table feedbacks
# ------------------------------------------------------------

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



# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `thumbnail_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`id`, `ref_id`, `image_path`, `thumbnail_path`, `image_type`, `created_at`, `updated_at`)
VALUES
  (1,1,'asset/upload/D4C21840-5F68-48EA-A63E-7AC4C3D9B43A.JPG',NULL,'service','2015-02-26 09:23:22','2015-02-26 09:23:22');

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
  ('2015_02_26_090619_init_database',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table outlet_descriptions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `outlet_descriptions`;

CREATE TABLE `outlet_descriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `summary` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `outlet_descriptions` WRITE;
/*!40000 ALTER TABLE `outlet_descriptions` DISABLE KEYS */;

INSERT INTO `outlet_descriptions` (`id`, `full_description`, `summary`, `created_at`, `updated_at`)
VALUES
  (1,'Sử dụng các loại mỹ phẩm và dược phẩm hoàn toàn từ thiên nhiên. Không gian spa sang trọng, hiện đại. Đội ngũ nhân viên chuyên nghiệp, thân thiện','Sử dụng các loại mỹ phẩm và dược phẩm hoàn toàn từ thiên nhiên. Không gian spa sang trọng, hiện đại. Đội ngũ nhân viên chuyên nghiệp, thân thiện','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (2,'Nổi tiếng với các dịch vụ chăm sóc da mặt, chăm sóc chuyên sâu với nuskin. Spa đem lại cho khách hàng những phút giây thư giãn tuyệt vời nhất. Nhân viên được đào tạo chuyên nghiệp','Nổi tiếng với các dịch vụ chăm sóc da mặt, chăm sóc chuyên sâu với nuskin. Spa đem lại cho khách hàng những phút giây thư giãn tuyệt vời nhất. Nhân viên được đào tạo chuyên nghiệp','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (3,'Không gian rộng rãi, sang trọng. Có nhiều dịch vụ làm đẹp, chăm sóc sức khỏe, đem lại giây phút thư giãn cho bạn. Phục vụ chu đáo, chuyên nghiệp','Không gian rộng rãi, sang trọng. Có nhiều dịch vụ làm đẹp, chăm sóc sức khỏe, đem lại giây phút thư giãn cho bạn. Phục vụ chu đáo, chuyên nghiệp','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (4,'Description','Sumary','2015-03-01 09:12:02','2015-03-01 09:12:02'),
  (5,'Description 2','Sumary','2015-03-01 09:13:37','2015-03-01 09:13:37');

/*!40000 ALTER TABLE `outlet_descriptions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table outlets
# ------------------------------------------------------------

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
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `outlets` WRITE;
/*!40000 ALTER TABLE `outlets` DISABLE KEYS */;

INSERT INTO `outlets` (`id`, `name`, `admin_id`, `address_id`, `retailer_id`, `description_id`, `outlet_register_id`, `website`, `phone`, `operation_hour`, `rate`, `active`, `created_at`, `updated_at`)
VALUES
  (1,'Minh Toan Graxy - Spa Beauty',2,3,1,1,'MTID001','www.minhtoan.com.vn',NULL,'',NULL,1,'2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (2,'Minh Toan Graxy - Spa One',2,1,1,1,'MTID002','www.minhtoan.com.vn',NULL,'',NULL,1,'2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (3,'Minh Toan Graxy - Spa Two',2,4,2,1,'MTID003','www.minhtoan.com.vn',NULL,'',NULL,1,'2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (4,'Phi Lu - Spa Beauty',1,4,2,1,'PLID001','www.philu.com.vn',NULL,'',NULL,1,'2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (5,'Golden Hill - Spa Beautify',2,1,1,NULL,'GL0004','www.goldenhill.com.vn',NULL,'',NULL,0,'2015-02-26 16:38:46','2015-02-26 16:38:46'),
  (6,'Tắm ngâm thuốc lá người Dao đỏ kết hợp massage',2,2,1,NULL,'PL00012','',NULL,'',NULL,0,'2015-03-01 09:08:27','2015-03-01 09:08:27'),
  (7,'Tắm ngâm thuốc lá người Dao đỏ kết hợp massage 22',2,1,2,4,'PL000444','',NULL,'',NULL,0,'2015-03-01 09:12:02','2015-03-01 09:12:02'),
  (8,'Tắm ngâm thuốc lá người Dao đỏ kết hợp massage 22',2,3,2,5,'PL00042542','',NULL,'',NULL,0,'2015-03-01 09:13:37','2015-03-01 09:13:37');

/*!40000 ALTER TABLE `outlets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_reminders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_reminders`;

CREATE TABLE `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table permission_role
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`)
VALUES
  (1,1,1),
  (2,2,1),
  (3,3,1),
  (4,4,1),
  (5,5,1),
  (6,6,1),
  (7,6,2);

/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`),
  UNIQUE KEY `permissions_display_name_unique` (`display_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;

INSERT INTO `permissions` (`id`, `name`, `display_name`)
VALUES
  (1,'manage_blogs','manage blogs'),
  (2,'manage_posts','manage posts'),
  (3,'manage_comments','manage comments'),
  (4,'manage_users','manage users'),
  (5,'manage_roles','manage roles'),
  (6,'post_comment','post comment');

/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table promotion
# ------------------------------------------------------------

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



# Dump of table retailers
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `retailers` WRITE;
/*!40000 ALTER TABLE `retailers` DISABLE KEYS */;

INSERT INTO `retailers` (`id`, `admin_id`, `category_id`, `address_id`, `company_register_id`, `name`, `website`, `created_at`, `updated_at`)
VALUES
  (1,2,1,1,'MT00001','Minh Toan Graxy','','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (2,2,1,2,'PL00001','Phi Lu','','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (3,1,1,2,'PL00002','Phi Lu 2','','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (5,2,1,1,'GL0003','Golden Hill','','2015-02-26 16:04:13','2015-02-26 16:04:13'),
  (7,2,1,1,'GL0003','Golden Hill','','2015-02-27 01:55:43','2015-02-27 01:55:43');

/*!40000 ALTER TABLE `retailers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`)
VALUES
  (1,'admin','2015-02-26 09:23:20','2015-02-26 09:23:20'),
  (2,'retailer','2015-02-26 09:23:20','2015-02-26 09:23:20'),
  (3,'user','2015-02-26 09:23:20','2015-02-26 09:23:20');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table service_conditions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `service_conditions`;

CREATE TABLE `service_conditions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `special_condition` longtext COLLATE utf8_unicode_ci,
  `condition1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `condition2` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `service_conditions` WRITE;
/*!40000 ALTER TABLE `service_conditions` DISABLE KEYS */;

INSERT INTO `service_conditions` (`id`, `special_condition`, `condition1`, `condition2`, `created_at`, `updated_at`)
VALUES
  (1,NULL,'','','2015-03-01 04:32:21','2015-03-01 04:32:21'),
  (2,NULL,'','','2015-03-01 04:38:24','2015-03-01 04:38:24'),
  (3,'Cham Spa & Massage\r\nĐịa chỉ: Thửa đất số 2,3 Lô B2.9 Khu đô thị mới Hoà Xuân - Cẩm Lệ - Đà Nẵng\r\nĐiện thoại: 0511.221.7777\r\nGiờ mở cửa: 10h - 23h\r\nHạn sử dụng: 10/03/2015\r\nÁp dụng: 01 phiếu/01 lần/01 người. Không bù tiền.\r\nKhách hàng có thể mua nhiều phiếu để sử dụng nhiều lần\r\nPhiếu không có giá trị quy đổi thành tiền, không hoàn tiền thừa, không áp dụng chung với các chương trình khuyến mãi khác.\r\nKhách hàng vui lòng đặt chỗ trước khi đến để được phục vụ tốt nhất.','','','2015-03-01 04:40:48','2015-03-01 04:40:48');

/*!40000 ALTER TABLE `service_conditions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table service_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `service_details`;

CREATE TABLE `service_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `summary` longtext COLLATE utf8_unicode_ci NOT NULL,
  `highlights` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `service_details` WRITE;
/*!40000 ALTER TABLE `service_details` DISABLE KEYS */;

INSERT INTO `service_details` (`id`, `summary`, `highlights`, `created_at`, `updated_at`)
VALUES
  (1,'','','2015-03-01 04:32:21','2015-03-01 04:32:21'),
  (2,'Gói tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị tại Cham Spa được ví như một bài thuốc quý vừa có tác dụng chữa bệnh, vừa làm đẹp cho cơ thể và tăng cường sức khỏe.\r\nQuý trình dịch vụ gồm 2 phần với 120 phút (Vui lòng theo dõi thông tin chi tiết).\r\nGói dịch vụ còn kèm theo một suất ăn nhẹ: 1 bát cháo giải cảm, 1 đĩa trái cây và thức uống dinh dưỡng và sử dụng hồ bơi, hồ bơi Jacuzzi gia nhiệt nước nóng.\r\nCham Spa & Massage với trang thiết bị hiện đại, kiến trúc cổ kính độc đáo mới lạ với đội ngũ nhân viên được đào tạo chuyên nghiệp, thân thiện sẽ mang đến cho bạn những phút giây thư giãn tuyệt vời.\r\nCham Spa & Massage đang có các ưu đãi phát hành thẻ cho Khách hàng bao gồm thẻ Thẻ Bạch Kim (20,000,000đ); Thẻ Vàng (10,000,000đ); Thẻ Bạc (4,000,000đ); không giới hạn số lần sử dụng trong ngày & đặc biệt khuyến mãi phát hành thẻ phụ.\r\nÁp dụng cho nam & nữ. Tiền tip tùy ý','','2015-03-01 04:36:01','2015-03-01 04:36:01'),
  (3,'Gói tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị tại Cham Spa được ví như một bài thuốc quý vừa có tác dụng chữa bệnh, vừa làm đẹp cho cơ thể và tăng cường sức khỏe.\r\nQuý trình dịch vụ gồm 2 phần với 120 phút (Vui lòng theo dõi thông tin chi tiết).\r\nGói dịch vụ còn kèm theo một suất ăn nhẹ: 1 bát cháo giải cảm, 1 đĩa trái cây và thức uống dinh dưỡng và sử dụng hồ bơi, hồ bơi Jacuzzi gia nhiệt nước nóng.\r\nCham Spa & Massage với trang thiết bị hiện đại, kiến trúc cổ kính độc đáo mới lạ với đội ngũ nhân viên được đào tạo chuyên nghiệp, thân thiện sẽ mang đến cho bạn những phút giây thư giãn tuyệt vời.\r\nCham Spa & Massage đang có các ưu đãi phát hành thẻ cho Khách hàng bao gồm thẻ Thẻ Bạch Kim (20,000,000đ); Thẻ Vàng (10,000,000đ); Thẻ Bạc (4,000,000đ); không giới hạn số lần sử dụng trong ngày & đặc biệt khuyến mãi phát hành thẻ phụ.\r\nÁp dụng cho nam & nữ. Tiền tip tùy ý','','2015-03-01 04:38:24','2015-03-01 04:38:24'),
  (4,'Gói tắm ngâm thuốc lá Dao đỏ kết hợp massage liên kết điều trị tại Cham Spa được ví như một bài thuốc quý vừa có tác dụng chữa bệnh, vừa làm đẹp cho cơ thể và tăng cường sức khỏe.\r\nQuý trình dịch vụ gồm 2 phần với 120 phút (Vui lòng theo dõi thông tin chi tiết).\r\nGói dịch vụ còn kèm theo một suất ăn nhẹ: 1 bát cháo giải cảm, 1 đĩa trái cây và thức uống dinh dưỡng và sử dụng hồ bơi, hồ bơi Jacuzzi gia nhiệt nước nóng.\r\nCham Spa & Massage với trang thiết bị hiện đại, kiến trúc cổ kính độc đáo mới lạ với đội ngũ nhân viên được đào tạo chuyên nghiệp, thân thiện sẽ mang đến cho bạn những phút giây thư giãn tuyệt vời.\r\nCham Spa & Massage đang có các ưu đãi phát hành thẻ cho Khách hàng bao gồm thẻ Thẻ Bạch Kim (20,000,000đ); Thẻ Vàng (10,000,000đ); Thẻ Bạc (4,000,000đ); không giới hạn số lần sử dụng trong ngày & đặc biệt khuyến mãi phát hành thẻ phụ.\r\nÁp dụng cho nam & nữ. Tiền tip tùy ý','','2015-03-01 04:40:48','2015-03-01 04:40:48');

/*!40000 ALTER TABLE `service_details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `outlet_id` int(10) unsigned NOT NULL,
  `condition_id` int(10) unsigned DEFAULT NULL,
  `detail_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `time_operate` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;

INSERT INTO `services` (`id`, `outlet_id`, `condition_id`, `detail_id`, `name`, `price`, `active`, `time_operate`, `created_at`, `updated_at`)
VALUES
  (1,3,NULL,NULL,'Xông hơi thảo dược',NULL,1,'','2015-02-26 09:23:22','2015-02-26 09:23:22'),
  (2,4,NULL,NULL,'Waxing nách',NULL,1,'','2015-02-26 09:23:22','2015-02-26 09:23:23'),
  (3,2,NULL,NULL,'Mặt nạ cao bí đao',NULL,1,'','2015-02-26 09:23:23','2015-02-26 09:23:23'),
  (18,1,1,1,'Tắm ngâm thuốc lá người Dao đỏ kết hợp massage',230000.00,1,'','2015-03-01 04:32:21','2015-03-01 04:32:21'),
  (19,3,2,3,'Tắm ngâm thuốc lá người Dao đỏ kết hợp massage 22',230000.00,1,'','2015-03-01 04:38:24','2015-03-01 04:38:24'),
  (20,3,3,4,'Tắm ngâm thuốc lá người Dao đỏ kết hợp massage 22',230000.00,1,'','2015-03-01 04:40:49','2015-03-01 04:40:49'),
  (21,0,NULL,NULL,NULL,NULL,1,'','2015-03-01 07:41:44','2015-03-01 07:41:44');

/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table terms_conditions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `terms_conditions`;

CREATE TABLE `terms_conditions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext NOT NULL,
  `configure_no` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table users
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `address_id`, `first_name`, `last_name`, `username`, `email`, `password`, `confirmation_code`, `remember_token`, `confirmed`, `user_type`, `created_at`, `updated_at`)
VALUES
  (1,0,'','','admin','admin@example.org','$2y$10$qFqrC0yPGBzKEBJqwNgi0eQlrKcAkDtlvTt9iTBWbq/Adi7H3X/P2','c87f3a63d171cd7c813893a3b7e1ee94','sDq1LOBQnLnsvKUewEcpriv7VzjweDQbMctvQAjAIGuGZOjYfxTdYTl8ezuZ',1,'admin','2015-02-26 09:23:20','2015-03-01 08:28:02'),
  (2,0,'','','dungho','dungho@gmail.com','$2y$10$fTf6tPUrEsZAn/7NnR9OfOyGFrDdf6DOR871xWmR4RvzwiELYr6.e','b3ca5572a88af9895e746fa3d8c4419f','bgUt2ZpWpg8AL2A6KdYY6NLhXvtuTAv1u7mE970mKKOEKJexsKPeXUmfGIp1',1,'retailer','2015-02-26 09:23:20','2015-03-04 15:34:58'),
  (3,0,'','','user','user@example.org','$2y$10$qHaYhAag/kWGHlnggiPhlua28W8kT9C1MTJJYJ4aeLXMZmmSk2QRm','10d928cd1834b6b6b70974b6b8e28f37','Lm3vtAzG42g1tHqEMjXYxUb4Kodj7NivVI3817bemyeEDnm3ks1BchTVEIZZ',1,'user','2015-02-26 09:23:20','2015-03-01 08:26:14');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
