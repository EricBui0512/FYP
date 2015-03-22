# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.41-0ubuntu0.12.04.1)
# Database: spa
# Generation Time: 2015-03-22 08:55:57 +0000
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
  `city_id` int(11) unsigned NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`),
  KEY `fk_address_city_id` (`city_id`),
  CONSTRAINT `fk_address_city_id` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;

INSERT INTO `addresses` (`id`, `city_id`, `district`, `address`, `postal_code`, `created_at`, `updated_at`)
VALUES
	(1,71,'Central - Near Orchard','488 Changi Road','419898','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(2,86,'Far North','Kampong Glam Shop Houses  786 North Bridge Road','198754','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(5,74,'Central East','1013 Geylang East Avenue 3 #01-136','458303','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(6,87,'North','49 Jalan Pemimpin APS INDUSTRIAL BUILDING','198000','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(7,70,'Central - Orchard','1 Lok Yang Way Jurong #19B','546824','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(8,66,'South West','10 Pioneer Sector 1 #01-00','26995','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(9,77,'Upper East Coast','Block 5022 Ang Mo Kio Industrial Park 2 #01-31','366127','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(10,82,'Central West','70 Woodlands Industrial Park E','17855','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(11,84,'North West','86 International Road','276266','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(12,78,'Far East','Block 192 Pandan Loop #01-26 PANTECH INDUSTRIAL COMPLEX','599633','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(13,69,'Central','31 Penjuru Lane','745902','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(14,78,'Far East','8 Woodlands Loop','364517','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(15,69,'Central','11 Joo Koon Circle','388758','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(16,71,'Central - Near Orchard','1002 Eunos Avenue 8 #01-42','544057','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(17,68,'City','126 Gul Circle','244565','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(18,86,'Far North','642 Rowell Road #02-115','250571','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(19,62,'City Business District Marina','545 Orchard Road #11-13 Far East Shopping Centre','237401','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(20,85,'Far North West','90 Horne Road','404184','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(21,67,'City - Business District','25 Tuas Avenue 2','108146','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(22,81,'Central North','206 Tagore Lane','252656','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(23,76,'East Coast','50 Hillview Terrace','245511','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(24,86,'Far North','30 Loyang Way, Loyang Industrial Estate #03-04','355519','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(25,74,'Central East','35 Pioneer Sector 2','577786','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(26,70,'Central - Orchard','No. 6 Sixth Lok Yang Road Jurong Industrial Estate','809995','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(27,78,'Far East','9 Tuas Avenue 18','612556','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(28,74,'Central East','104 Jurong East Street 13 #01-102','347360','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(29,64,'Central South','39 Defu Lane 7','18905','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(30,67,'City - Business District','11 Tanjong Rhu Road #18-01 The Waterside','75238','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(31,69,'Central','No. 29 Woodlands Industrial Park E1 #04-17 Northtech','424191','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(32,63,'City Business District CDB ','491B River Valley Road #04-01 Valley Point Office Tower','614920','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(33,62,'City Business District Marina','55 Hume Avenue #06-09','744484','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(34,69,'Central','Blk 2021 Bukit Batok Street 23 #01-226','637430','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(35,64,'Central South','Block 3005 Ubi Avenue 3 #01-64','523292','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(36,64,'Central South','3018 Bedok Nth St 5 #01-32 Singapore 486132','494111','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(37,77,'Upper East Coast','Paya Lebar Rd Singapore 1440','74282','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(38,66,'South West','6 Joo Koon Crescent','368235','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(39,67,'City - Business District','32 Tuas View Loop','178100','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(40,65,'South','3016 Bedok Nth Ave 4 #01-03','89439','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(41,69,'Central','15 Pioneer Sector 2','41367','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(42,78,'Far East','51 Tuas Ave 1 Singapore 639501 ','333865','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(43,80,'North East','623 Aljunied Road #07-03 ALJUNIED INDUSTRIAL COMPLEX','694356','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(44,78,'Far East','21 Lor Ampas #09-00 Singapore 328782','291710','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(45,86,'Far North','66 Tannery Lane #01-04D Sindo Building','430421','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(46,80,'North East','26 Benoi Sector Jurong','719298','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(47,83,'Far West','322D King Georges Avenue','353254','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(48,82,'Central West','8 Tanjong Penjuru JURONG INDUSTRIAL ESTATE','420652','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(49,64,'Central South','44 Pioneer Sector 2','468456','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(50,65,'South','8 Tanjong Penjuru','19034','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(51,83,'Far West','11 Kian Teck Road','243502','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(52,63,'City Business District CDB ','261 Waterloo Street #02-26','551474','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(53,70,'Central - Orchard','Blk 9-H Yuan Ching Road #15-82','788571','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(54,69,'Central','20 Shaw Road #06-05 CHING SHINE INDUSTRIAL BUILDING','663502','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(55,77,'Upper East Coast','1 Scotts Road #16-12','765579','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(56,86,'Far North','23A Jalan Grisek','25640','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(57,85,'Far North West','8A Tuas Ave 13 Singapore 638981','592790','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(58,80,'North East','Block 3016 Bedok North Avenue 4 #01-03 EASTECH','484615','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(59,64,'Central South','48 Tuas Basin Link Singapore 638778 ','294532','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(60,66,'South West','1 Bt Batok St 22 #03-28 Singapore 659592','206633','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(61,65,'South','50 Kian Teck Road','279167','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(62,70,'Central - Orchard','63 Hillview Ave #03-09 Lam Soon Ind Bldg Singapore 669569 ','14587','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(63,69,'Central','Block 35 Tannery Road #11-10 Tannery Block, Ruby Industrial Complex','216366','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(64,65,'South','5 Tuas Avenue 3 Bok Seng Building','66899','2015-02-26 09:23:00','2015-02-26 09:23:00');

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



# Dump of table business_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `business_categories`;

CREATE TABLE `business_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `business_categories` WRITE;
/*!40000 ALTER TABLE `business_categories` DISABLE KEYS */;

INSERT INTO `business_categories` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'Spa and Massage','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(2,'Body Massage','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(3,'Wellness Spa','2015-02-26 09:23:00','2015-02-26 09:23:00');

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
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`),
  KEY `fk_cancel_tran_id` (`tran_id`),
  KEY `fk_cancel_who_id` (`who_id`),
  CONSTRAINT `fk_cancel_tran_id` FOREIGN KEY (`tran_id`) REFERENCES `deal_transactions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cancel_who_id` FOREIGN KEY (`who_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table cities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(11) unsigned NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`),
  KEY `fk_city_country_id_idx` (`country_id`),
  CONSTRAINT `fk_city_country_id` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;

INSERT INTO `cities` (`id`, `country_id`, `city`, `created_at`, `updated_at`)
VALUES
	(1,253,'Can Tho','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(2,253,'Da Nang','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(3,253,'Hai Phong','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(4,253,'Ha Noi','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(5,253,'Ho Chi Minh City','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(6,253,'Ba Ria Vung Tau','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(7,253,'Bac Lieu','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(8,253,'Bac Giang','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(9,253,'Bac Ninh','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(10,253,'Bao Loc','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(11,253,'Bien Hoa','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(12,253,'Ben Tre','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(13,253,'Buon Ma Thuot','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(14,253,'Ca Mau','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(15,253,'Cam Pha','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(16,253,'Cao Lanh','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(17,253,'Da Lat','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(18,253,'Dien Bien Phu','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(19,253,'Dong Ha','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(20,253,'Dong Hoi','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(21,253,'Ha Tinh','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(22,253,'Ha Long','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(23,253,'Hai Duong','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(24,253,'Hoa Binh','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(25,253,'Hoi An','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(26,253,'Hue','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(27,253,'Hung Yen','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(28,253,'Kon Tum','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(29,253,'Lang Son','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(30,253,'Lao Cai','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(31,253,'Long Xuyen','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(32,253,'Mong Cai','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(33,253,'My Tho','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(34,253,'Nam Dinh','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(35,253,'Ninh Binh','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(36,253,'Nha Trang','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(37,253,'Cam Ranh','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(38,253,'Phan Rang-Thap Cham','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(39,253,'Phan Thiet','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(40,253,'Phu Ly','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(41,253,'Pleiku','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(42,253,'Quang Ngai','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(43,253,'Quy Nhon','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(44,253,'Rach Gia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(45,253,'Soc Trang','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(46,253,'Son La','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(47,253,'Tam Ky','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(48,253,'Tan An','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(49,253,'Thai Binh ddd','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(50,253,'Thai Nguyen','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(51,253,'Thanh Hoa','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(52,253,'Tra Vinh','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(53,253,'Tuy Hoa','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(54,253,'Tuyen Quang','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(55,253,'Uong Bi','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(56,253,'Viet Tri','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(57,253,'Vinh','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(58,253,'Vinh Yen','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(59,253,'Vinh Long','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(60,253,'Vung Tau','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(61,253,'Yen Bai','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(62,207,'City Business District Marina','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(63,207,'City Business District CDB ','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(64,207,'Central South','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(65,207,'South','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(66,207,'South West','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(67,207,'City - Business District','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(68,207,'City','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(69,207,'Central','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(70,207,'Central - Orchard','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(71,207,'Central - Near Orchard','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(72,207,'Central - Near Orchard','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(73,207,'Central','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(74,207,'Central East','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(75,207,'Central East','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(76,207,'East Coast','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(77,207,'Upper East Coast','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(78,207,'Far East','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(79,207,'Far East','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(80,207,'North East','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(81,207,'Central North','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(82,207,'Central West','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(83,207,'Far West','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(84,207,'North West','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(85,207,'Far North West','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(86,207,'Far North','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(87,207,'North','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(88,207,'Far North','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(89,207,'North East','2015-02-26 09:23:00','2015-02-26 09:23:00');

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

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;

INSERT INTO `company` (`id`, `name`, `address`, `phone`, `fax`, `fb_link`, `twitter_link`, `gplus_link`, `contact_email`)
VALUES
	(1,'SMBook','50 NANYANG AVENUE SINGAPORE 639798','888888','888888','facebook.com','https://twitter.com/?lang=en','google.com','hi@smbook.com');

/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table countries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;

INSERT INTO `countries` (`id`, `country`, `created_at`, `updated_at`)
VALUES
	(1,'Afghanistan','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(2,'Albania','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(3,'Algeria','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(4,'American Samoa','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(5,'Andorra','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(6,'Angola','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(7,'Anguilla','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(8,'Antarctica','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(9,'Antigua and Barbuda','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(10,'Argentina','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(11,'Armenia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(12,'Aruba','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(13,'Australia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(14,'Austria','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(15,'Azerbaijan','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(16,'Bahamas','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(17,'Bahrain','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(18,'Bangladesh','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(19,'Barbados','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(20,'Belarus','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(21,'Belgium','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(22,'Belize','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(23,'Benin','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(24,'Bermuda','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(25,'Bhutan','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(26,'Bolivia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(27,'Bosnia and Herzegovina','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(28,'Botswana','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(29,'Bouvet Island','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(30,'Brazil','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(31,'British Antarctic Territory','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(32,'British Indian Ocean Territory','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(33,'British Virgin Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(34,'Brunei','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(35,'Bulgaria','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(36,'Burkina Faso','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(37,'Burundi','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(38,'Cambodia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(39,'Cameroon','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(40,'Canada','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(41,'Canton and Enderbury Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(42,'Cape Verde','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(43,'Cayman Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(44,'Central African Republic','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(45,'Chad','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(46,'Chile','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(47,'China','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(48,'Christmas Island','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(49,'Cocos [Keeling] Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(50,'Colombia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(51,'Comoros','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(52,'Congo - Brazzaville','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(53,'Congo - Kinshasa','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(54,'Cook Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(55,'Costa Rica','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(56,'Croatia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(57,'Cuba','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(58,'Cyprus','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(59,'Czech Republic','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(60,'Czetch Ivoire','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(61,'Denmark','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(62,'Djibouti','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(63,'Dominica','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(64,'Dominican Republic','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(65,'Dronning Maud Land','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(66,'Ecuador','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(67,'Egypt','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(68,'El Salvador','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(69,'Equatorial Guinea','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(70,'Eritrea','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(71,'Estonia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(72,'Ethiopia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(73,'Falkland Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(74,'Faroe Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(75,'Fiji','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(76,'Finland','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(77,'France','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(78,'French Guiana','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(79,'French Polynesia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(80,'French Southern Territories','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(81,'French Southern and Antarctic Territories','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(82,'Gabon','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(83,'Gambia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(84,'Georgia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(85,'Germany','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(86,'Ghana','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(87,'Gibraltar','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(88,'Greece','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(89,'Greenland','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(90,'Grenada','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(91,'Guadeloupe','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(92,'Guam','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(93,'Guatemala','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(94,'Guernsey','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(95,'Guinea','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(96,'Guinea-Bissau','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(97,'Guyana','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(98,'Haiti','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(99,'Heard Island and McDonald Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(100,'Honduras','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(101,'Hong Kong SAR China','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(102,'Hungary','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(103,'Iceland','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(104,'India','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(105,'Indonesia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(106,'Iran','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(107,'Iraq','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(108,'Ireland','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(109,'Isle of Man','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(110,'Israel','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(111,'Italy','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(112,'Jamaica','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(113,'Japan','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(114,'Jersey','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(115,'Johnston Island','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(116,'Jordan','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(117,'Kazakhstan','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(118,'Kenya','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(119,'Kiribati','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(120,'Kuwait','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(121,'Kyrgyzstan','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(122,'Laos','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(123,'Latvia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(124,'Lebanon','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(125,'Lesotho','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(126,'Liberia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(127,'Libya','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(128,'Liechtenstein','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(129,'Lithuania','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(130,'Luxembourg','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(131,'Macau SAR China','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(132,'Macedonia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(133,'Madagascar','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(134,'Malawi','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(135,'Malaysia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(136,'Maldives','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(137,'Mali','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(138,'Malta','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(139,'Marshall Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(140,'Martinique','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(141,'Mauritania','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(142,'Mauritius','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(143,'Mayotte','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(144,'Metropolitan France','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(145,'Mexico','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(146,'Micronesia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(147,'Midway Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(148,'Moldova','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(149,'Monaco','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(150,'Mongolia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(151,'Montenegro','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(152,'Montserrat','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(153,'Morocco','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(154,'Mozambique','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(155,'Myanmar [Burma]','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(156,'Namibia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(157,'Nauru','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(158,'Nepal','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(159,'Netherlands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(160,'Netherlands Antilles','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(161,'Neutral Zone','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(162,'New Caledonia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(163,'New Zealand','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(164,'Nicaragua','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(165,'Niger','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(166,'Nigeria','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(167,'Niue','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(168,'Norfolk Island','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(169,'North Korea','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(170,'North Vietnam','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(171,'Northern Mariana Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(172,'Norway','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(173,'Oman','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(174,'Pacific Islands Trust Territory','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(175,'Pakistan','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(176,'Palau','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(177,'Palestinian Territories','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(178,'Panama','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(179,'Panama Canal Zone','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(180,'Papua New Guinea','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(181,'Paraguay','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(182,'People\'s Democratic Republic of Yemen','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(183,'Peru','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(184,'Philippines','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(185,'Pitcairn Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(186,'Poland','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(187,'Portugal','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(188,'Puerto Rico','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(189,'Qatar','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(190,'Romania','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(191,'Russia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(192,'Rwanda','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(193,'Saint Helena','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(194,'Saint Kitts and Nevis','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(195,'Saint Lucia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(196,'Saint Martin','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(197,'Saint Pierre and Miquelon','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(198,'Saint Vincent and the Grenadines','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(199,'Samoa','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(200,'San Marino','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(201,'Saudi Arabia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(202,'Senegal','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(203,'Serbia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(204,'Serbia and Montenegro','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(205,'Seychelles','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(206,'Sierra Leone','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(207,'Singapore','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(208,'Slovakia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(209,'Slovenia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(210,'Solomon Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(211,'Somalia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(212,'South Africa','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(213,'South Georgia and the South Sandwich Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(214,'South Korea','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(215,'Spain','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(216,'Sri Lanka','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(217,'Sudan','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(218,'Suriname','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(219,'Svalbard and Jan Mayen','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(220,'Swaziland','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(221,'Sweden','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(222,'Switzerland','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(223,'Syria','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(224,'Taiwan','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(225,'Tajikistan','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(226,'Tanzania','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(227,'Thailand','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(228,'Timor-Leste','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(229,'Togo','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(230,'Tokelau','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(231,'Tonga','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(232,'Trinidad and Tobago','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(233,'Tunisia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(234,'Turkey','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(235,'Turkmenistan','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(236,'Turks and Caicos Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(237,'Tuvalu','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(238,'U.S. Minor Outlying Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(239,'U.S. Miscellaneous Pacific Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(240,'U.S. Virgin Islands','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(241,'Uganda','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(242,'Ukraine','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(243,'Union of Soviet Socialist Republics','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(244,'United Arab Emirates','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(245,'United Kingdom','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(246,'United States','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(247,'Unknown or Invalid Region','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(248,'Uruguay','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(249,'Uzbekistan','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(250,'Vanuatu','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(251,'Vatican City','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(252,'Venezuela','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(253,'Vietnam','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(254,'Wake Island','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(255,'Wallis and Futuna','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(256,'Western Sahara','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(257,'Yemen','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(258,'Zambia','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(259,'Zimbabwe','2015-02-26 09:23:00','2015-02-26 09:23:00');

/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table deal_transactions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `deal_transactions`;

CREATE TABLE `deal_transactions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `deal_id` int(11) unsigned NOT NULL,
  `consumer_id` int(11) unsigned NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `consumer_email` varchar(255) NOT NULL DEFAULT '',
  `payment_date` datetime DEFAULT NULL,
  `payment_type` varchar(100) DEFAULT NULL,
  `payment_status` tinyint(1) DEFAULT '0',
  `qty` smallint(4) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_deal_tran_deal_id` (`deal_id`),
  KEY `fk_deal_tran_consumer_id` (`consumer_id`),
  CONSTRAINT `fk_deal_tran_deal_id` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_deal_tran_consumer_id` FOREIGN KEY (`consumer_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `deal_transactions` WRITE;
/*!40000 ALTER TABLE `deal_transactions` DISABLE KEYS */;

INSERT INTO `deal_transactions` (`id`, `deal_id`, `consumer_id`, `phone_number`, `consumer_email`, `payment_date`, `payment_type`, `payment_status`, `qty`, `amount`, `total`, `status`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(2,7,2,NULL,'xvbxv@gmai.com',NULL,'dddd',1,1,33000.00,NULL,1,'2015-02-26 09:23:00',NULL,NULL),
	(3,7,2,NULL,'xvbxv@gmai.com',NULL,'dddd',1,1,33000.00,NULL,1,'2015-02-26 09:23:00',NULL,NULL),
	(4,7,2,NULL,'xvbxv@gmai.com',NULL,'dddd',1,1,33000.00,NULL,1,'2015-02-26 09:23:00',NULL,NULL),
	(5,8,2,NULL,'xvbxv@gmai.com',NULL,'dddd',1,1,33000.00,NULL,1,'2015-02-26 09:23:00',NULL,NULL),
	(6,8,2,NULL,'xvbxv@gmai.com',NULL,'dddd',1,1,33000.00,NULL,1,'2015-02-26 09:23:00',NULL,NULL),
	(7,8,2,NULL,'xvbxv@gmai.com',NULL,'dddd',1,1,33000.00,NULL,1,'2015-02-26 09:23:00',NULL,NULL),
	(8,8,2,NULL,'xvbxv@gmai.com',NULL,'dddd',1,1,33000.00,NULL,1,'2015-02-26 09:23:00',NULL,NULL),
	(9,8,2,NULL,'xvbxv@gmai.com',NULL,'dddd',1,1,33000.00,NULL,1,'2015-02-26 09:23:00',NULL,NULL),
	(10,8,2,NULL,'xvbxv@gmai.com',NULL,'dddd',1,1,33000.00,NULL,1,'2015-02-26 09:23:00',NULL,NULL);

/*!40000 ALTER TABLE `deal_transactions` ENABLE KEYS */;
UNLOCK TABLES;


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
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `status` enum('new','active','drag') COLLATE utf8_unicode_ci DEFAULT 'new',
  PRIMARY KEY (`id`),
  KEY `fk_deals_service_id_idx` (`service_id`),
  CONSTRAINT `fk_deals_service_id` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `deals` WRITE;
/*!40000 ALTER TABLE `deals` DISABLE KEYS */;

INSERT INTO `deals` (`id`, `service_id`, `title`, `amount`, `discount`, `special_request`, `time_slot`, `remind_time`, `created_at`, `updated_at`, `status`)
VALUES
	(7,18,'T §?m ng?›m thu ¯?c l?­ ng’ø ¯i Dao Ž? ¯ k §¨t h ¯œp massage',460000.00,240000.00,'T ¯® xa x’øa ng’ø ¯i d?›n t ¯?c Dao Ž? ¯ t §­i v??ng n?§i SAPA Ž??œ n ¯?i ti §¨ng v ¯?i b?ÿi thu ¯?c t §?m c ¯? truy ¯n v?ÿ b §œo v ¯? s ¯?c kho §¯. Ng’ø ¯i Dao cho r §ñng:         _x000D__x000D_\n_x000D__x000D_\n- Ž?ÿn ??ng t §?m th ¯? thu ¯?c n?ÿy h §¨t Ž?au l’øng, m ¯i g ¯?i. TŽŸng c’ø ¯ng sinh l ¯ñc, tinh th §?n s §œng kho?­i, ph §n ch §n.     ','2015-02-26 09:23:00','2015-02-26 09:23:00','2015-02-26 09:23:00','2015-02-26 09:23:00','active'),
	(8,1,'Ch ¯n 1 trong 4 d ¯?ch v ¯ l?ÿm Ž? §?p t §­i Kay Spa',460000.00,240000.00,'','2015-02-26 09:23:00','2015-02-26 09:23:00','2015-02-26 09:23:00','2015-02-26 09:23:00','active'),
	(9,19,'Ch ¯n 1 trong 4 d ¯?ch v ¯ l?ÿm Ž? §?p t §­i Kay Spa',460000.00,240000.00,'','2015-02-26 09:23:00','2015-02-26 09:23:00','2015-02-26 09:23:00','2015-02-26 09:23:00','active'),
	(10,19,'ChŽŸm s??c da body & m §út t §­i Cham Spa & Massage',460000.00,240000.00,'','2015-02-26 09:23:00','2015-02-26 09:23:00','2015-02-26 09:23:00','2015-02-26 09:23:00','active'),
	(11,1,'dfhadofh ad fadf',13413413.00,413431.00,'314 c4 13 4134','2015-02-26 09:23:00','2015-02-26 09:23:00','2015-02-26 09:23:00','2015-02-26 09:23:00','active'),
	(12,1,'dfhadofh ad fadf',13413413.00,413431.00,'314 c4 13 4134','2015-02-26 09:23:00','2015-02-26 09:23:00','2015-02-26 09:23:00','2015-02-26 09:23:00','active');

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
  `created_at` timestamp NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`),
  KEY `fk_feedback_deal_id` (`deal_id`),
  KEY `fk_feedback_consumer_id` (`consumer_id`),
  CONSTRAINT `fk_feedback_deal_id` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_feedback_consumer_id` FOREIGN KEY (`consumer_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) unsigned DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `thumbnail_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `big_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table outlet_descriptions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `outlet_descriptions`;

CREATE TABLE `outlet_descriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `summary` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `outlet_descriptions` WRITE;
/*!40000 ALTER TABLE `outlet_descriptions` DISABLE KEYS */;

INSERT INTO `outlet_descriptions` (`id`, `full_description`, `summary`, `created_at`, `updated_at`)
VALUES
	(1,'Seek refuge in the calming retreat that we offer at S&N Spa ','Seek refuge in the calming retreat that we offer at S&N Spa and try out our various massage services that will leave you feeling refreshed and rejuvenated!','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(2,'Escape the stress and monotony of everyday life with a visit to Tang Dynasty Spa, and indulge yourself in a luxurious Oriental boutique spa experience at affordable prices.\n\nFirst opened in 2011 at North Bridge Road, the spa successfully expanded to its second branch at Bukit Timah. Here you can enjoy treatment rooms equipped with soft padded beds and private shower cubicles in a beautiful, serene environment. Our customized Oriental massage treatments are carried out by certified Therapists, expert at making you feel as relaxed and comfortable as possible as they knead away the knots and tensions in your body. In the Relaxation Lounge, our Foot Reflexology specialists will also pamper you as you sit back in your armchair while enjoying free wifi and entertainment system. The skills and experience of our therapists combined with their warm and caring personalities, will make sure you rest, relax and rejuvenate fully.\n\nTang Dynasty Spa is fully committed to providing professional, high-quality service and cleanliness with excellent value. We look forward to serving you with the royal treatment you deserve from head to toes.','Escape the stress and monotony of everyday life with a visit to Tang Dynasty Massage & Spa, and indulge yourself in a luxurious Oriental boutique spa experience at affordable prices. Tang Dynasty Spa is fully committed to providing professional, high-quality service and cleanliness with excellent value. We are open 24 hours, giving you access to a sanctuary of bliss anytime you want around the clock. We look forward to serving you with the royal treatment you deserve from head to toes.','2015-02-26 09:23:00','2015-02-26 09:23:00');

/*!40000 ALTER TABLE `outlet_descriptions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table outlets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `outlets`;

CREATE TABLE `outlets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_id` int(11) unsigned NOT NULL,
  `address_id` int(10) unsigned DEFAULT NULL,
  `retailer_id` int(10) unsigned DEFAULT NULL,
  `description_id` int(10) unsigned DEFAULT NULL,
  `outlet_register_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `operation_hour` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `rate` float(8,2) DEFAULT NULL,
  `status` enum('new','active','drag') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'new',
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`),
  KEY `fk_outlet_admin_id_idx` (`admin_id`),
  KEY `fk_outlet_address_id_idx` (`address_id`),
  KEY `fk_outlet_retailer_id_idx` (`retailer_id`),
  KEY `fk_outlet_description_id_idx` (`description_id`),
  CONSTRAINT `fk_oultet_description_id` FOREIGN KEY (`description_id`) REFERENCES `outlet_descriptions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_outlet_address_id` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_outlet_admin_id` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_outlet_retailer_id` FOREIGN KEY (`retailer_id`) REFERENCES `retailers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `outlets` WRITE;
/*!40000 ALTER TABLE `outlets` DISABLE KEYS */;

INSERT INTO `outlets` (`id`, `name`, `admin_id`, `address_id`, `retailer_id`, `description_id`, `outlet_register_id`, `website`, `phone`, `operation_hour`, `rate`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'S & N Spa Pte Ltd',9,1,1,1,'PL00012','www.s-n-spa.com','43558993','24',NULL,'active','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(2,'Tang Dynasty Massage & Spa',10,2,2,2,'PL000444','www.tangdynastyspa.com','23458983','24',NULL,'active','2015-02-26 09:23:00','2015-02-26 09:23:00');

/*!40000 ALTER TABLE `outlets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_reminders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_reminders`;

CREATE TABLE `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00'
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
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`),
  KEY `fk_retailer_admin_id_idx` (`admin_id`),
  KEY `fk_category_id_idx` (`category_id`),
  KEY `fk_address_id_idx` (`address_id`),
  CONSTRAINT `fk_retailer_admin_id` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `business_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_address_id` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `retailers` WRITE;
/*!40000 ALTER TABLE `retailers` DISABLE KEYS */;

INSERT INTO `retailers` (`id`, `admin_id`, `category_id`, `address_id`, `company_register_id`, `name`, `website`, `created_at`, `updated_at`)
VALUES
	(1,9,1,1,'PL00002','S & N Spa Pte Ltd','www.s-n-spa.com','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(2,10,2,2,'GL0003','Tang Dynasty Massage & Spa','www.tangdynastyspa.com','2015-02-26 09:23:00','2015-02-26 09:23:00');

/*!40000 ALTER TABLE `retailers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table service_conditions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `service_conditions`;

CREATE TABLE `service_conditions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `special_condition` longtext COLLATE utf8_unicode_ci,
  `condition1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `condition2` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `service_conditions` WRITE;
/*!40000 ALTER TABLE `service_conditions` DISABLE KEYS */;

INSERT INTO `service_conditions` (`id`, `special_condition`, `condition1`, `condition2`, `created_at`, `updated_at`)
VALUES
	(1,'Payment : Our spa collects payment from customers upfront, that is before the treatment session. For cash payment, please note that the spa only accepts Singapore dollars. The spa also accepts NETS payment. Treatment prices quoted include the provision of service, usage of the spa premise, beverages served, materials used and the 7% GST (if any). Please note that all treatments utilised are strictly non-refundable. However, as part of our service guarantee, for customers who decide not to continue with the treatment for any reason, they can inform the therapist within the first 10 mins of the treatment session. For such cases, any payment collected before the treatment session will be refunded to the customers in full. Beyond the first 10 mins, there will be strictly no refund in any case.','Punctuality : Please arrive at the spa at least 15 minutes before the appointment time. Late arrival may result in shortening of the treatment time, as the spa needs to cater to the next customer. Should you be expected to be late, please contact the spa consultant earlier so that appropriate adjustment may be made.\nPlease note that for all appointments made, the spa will wait for the customer for a maximum of 15 mins from the appointment time. Beyond that, the spa will give the slot up for other customers. Thus please help by contacting us at least half an hour before, should you be late for the appointment or wish to cancel it.','reatment Selection : The spa seeks the understanding of customers to refrain from changing their mind about the type of treatment they want after informing the spa consultant or therapist as some of the treatments require ingredient preparation and once the ingredients are prepared, we are unable to change the treatment for you.','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(2,'Appointment Booking : To help the spa better schedule our appointments so that you can have your desired time slot and therapist, we recommend that our customers contact us at least 3 days before their preferred treatment date. While we may not be able to guarantee that we can accommodate your desired slot, we will do our utmost to commit our resources to meet your preferred schedule and therapist.',' Smoking/Food/Drinks : Please note that smoking is prohibited in the spa, in accordance to Singapore Law. No outside food or drinks is allowed in the spa.',' Mobile Phones and Gadgets : As all our customers come to the spa for relaxation and rejuvenation purposes, we will appreciate that our customers can refrain from speaking loudly in the spa. Mobile phones and electronic gadgets are discouraged from being brought into the treatment areas. If it is necessary to bring them into the treatment room, please switch to silent mode. Please respect the privacy of all our customers.','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(3,'Personal Belongings : Our staff will guide you to change into the appropriate attire prior to the start of the treatment. Please keep all your valuables within the lockers provided. We discourage our customers from wearing or bringing jewellery/valuables during your spa visit as they may need to be removed for the treatment. The spa will not take responsibility of any losses of valuables within the spa.','Medical Conditions : If you are feeling unwell, are pregnant, have high blood pressure, allergies or any other medical complaints or condition, please inform our spa consultant/therapist. This will help us recommend appropriate treatments or take necessary precautions. Please note that all treatments are taken at your own risk. If you have any doubt, please consult your doctor in advance.','Customer Information : Customers will need to provide customer information to enable the spa to perform internal administration and marketing activities such as contacting customers, billing etc. Customers also need to fill up a simple health questionnaire to help the spa assess your health conditions so that we are able to recommend the appropriate spa treatment for you. Please be assured that we will treat the customer information as confidential information and use the information only for the purpose of internal administration, internal marketing and monitoring purposes.','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(4,'Clientele : The spa offers services to both male and female clients. Separate treatment rooms (with attached shower facilities) are available for both genders.','Punctuality : Please arrive at the spa at least 15 minutes before the appointment time. Late arrival may result in shortening of the treatment time, as the spa needs to cater to the next customer. Should you be expected to be late, please contact the spa consultant earlier so that appropriate adjustment may be made.\nPlease note that for all appointments made, the spa will wait for the customer for a maximum of 15 mins from the appointment time. Beyond that, the spa will give the slot up for other customers. Thus please help by contacting us at least half an hour before, should you be late for the appointment or wish to cancel it.','reatment Selection : The spa seeks the understanding of customers to refrain from changing their mind about the type of treatment they want after informing the spa consultant or therapist as some of the treatments require ingredient preparation and once the ingredients are prepared, we are unable to change the treatment for you.','2015-02-26 09:23:00','2015-02-26 09:23:00');

/*!40000 ALTER TABLE `service_conditions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table service_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `service_details`;

CREATE TABLE `service_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `summary` longtext COLLATE utf8_unicode_ci NOT NULL,
  `highlights` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `service_details` WRITE;
/*!40000 ALTER TABLE `service_details` DISABLE KEYS */;

INSERT INTO `service_details` (`id`, `summary`, `highlights`, `created_at`, `updated_at`)
VALUES
	(1,' uses soothing, tapping and kneading strokes to work the entire body, relieving muscle tension and loosening sore joints. Swedish massage therapists use five basic strokes, which anyone can learn and use on themselves and others. They are effleurage (stroking); petrissage (muscles are lightly grabbed and lifted); friction (thumbs and fingertips work in deep circles into the thickest part of muscles); tapotement (chopping, beating, and tapping strokes); and vibration (fingers are pressed or flattened firmly on a muscle, then the area is shaken rapidly for a few seconds)',' uses soothing, tapping and kneading strokes to work the entire body, relieving muscle tension and loosening sore joints. Swedish massage therapists use five basic strokes, which anyone can learn and use on themselves and others. They are effleurage (stroking); petrissage (muscles are lightly grabbed and lifted); friction (thumbs and fingertips work in deep circles into the thickest part of muscles); tapotement (chopping, beating, and tapping strokes); and vibration (fingers are pressed or flattened firmly on a muscle, then the area is shaken rapidly for a few seconds)','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(2,'targets chronic tension in muscles that lie far below the surface of your body. You have five layers of muscle in your back, for instance, and while Swedish massage may help the first couple of layers, it won’t do much directly for the muscle underneath. Deep muscle techniques usually involve slow strokes, direct pressure or friction movements that go across the grain of the muscles. Massage therapists will use their fingers, thumbs or occasionally even elbows to apply the needed pressure.','targets chronic tension in muscles that lie far below the surface of your body. You have five layers of muscle in your back, for instance, and while Swedish massage may help the first couple of layers, it won’t do much directly for the muscle underneath. Deep muscle techniques usually involve slow strokes, direct pressure or friction movements that go across the grain of the muscles. Massage therapists will use their fingers, thumbs or occasionally even elbows to apply the needed pressure.','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(3,'is designed to help you train better, whether you’re a world champion or a weekend warrior. The techniques are similar to those in Swedish and deep tissue massage, but Greene says sports massage has been adapted to meet the athlete’s special needs. Pre-event massage can help warm up muscles and improve circulation before competition, but it can also energize or relax an athlete and help him focus on the competition. Post-event massage can push waste products out of the body and improve recovery.','is designed to help you train better, whether you’re a world champion or a weekend warrior. The techniques are similar to those in Swedish and deep tissue massage, but Greene says sports massage has been adapted to meet the athlete’s special needs. Pre-event massage can help warm up muscles and improve circulation before competition, but it can also energize or relax an athlete and help him focus on the competition. Post-event massage can push waste products out of the body and improve recovery.','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(4,' is a form of deep tissue massage that is applied to individual muscles. It is used to increase blood flow, reduce pain and release pressure on nerves caused by injuries to muscles and other soft tissue. Neuromuscular massage helps release trigger points, intense knots of tense muscle can also “refer” pain to other parts of the body. Relieving a tense trigger point in your back, for example, could help ease pain in your shoulder or reduce headaches.',' is a form of deep tissue massage that is applied to individual muscles. It is used to increase blood flow, reduce pain and release pressure on nerves caused by injuries to muscles and other soft tissue. Neuromuscular massage helps release trigger points, intense knots of tense muscle can also “refer” pain to other parts of the body. Relieving a tense trigger point in your back, for example, could help ease pain in your shoulder or reduce headaches.','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(5,'seeks to re-educate your body about posture. When posture is poor, Bienenfeld says, it can be reflected in a number of health problems, such as backaches, headaches and joint pain. Rolfing seeks to realign and straighten your body by working the myofascia, the connective tissue that surrounds your muscles and helps hold your body together. The 10-session, head-to-toe Rolfing program used to be rather painful, but Bienenfeld says new techniques that employ a therapist’s hands and elbows are quite tolerable and just as effective at improving your posture','seeks to re-educate your body about posture. When posture is poor, Bienenfeld says, it can be reflected in a number of health problems, such as backaches, headaches and joint pain. Rolfing seeks to realign and straighten your body by working the myofascia, the connective tissue that surrounds your muscles and helps hold your body together. The 10-session, head-to-toe Rolfing program used to be rather painful, but Bienenfeld says new techniques that employ a therapist’s hands and elbows are quite tolerable and just as effective at improving your posture','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(6,'is an offshoot of Rolfing that adds both mental and movement re-education to the physical work. In a series of 11 sessions, you get instruction on how to break bad posture habits and you also get a massage that focuses on returning your muscles and other tissue to their proper positions. The result can be dramatic. “Sometimes we can greatly increase the spaces in your joints to the point where you may grown three-fourths of an inch taller before you’re done,” Bienenfeld says','is an offshoot of Rolfing that adds both mental and movement re-education to the physical work. In a series of 11 sessions, you get instruction on how to break bad posture habits and you also get a massage that focuses on returning your muscles and other tissue to their proper positions. The result can be dramatic. “Sometimes we can greatly increase the spaces in your joints to the point where you may grown three-fourths of an inch taller before you’re done,” Bienenfeld says','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(7,'focuses on the skull and spinal column. Therapists use very gently pressure no more than the weight of a nickel to massage the bones, membranes and fluids that support and bathe your skull and spinal column. The theory is that these manipulations will reduce tension and counteract any physical trauma you may have experienced to your head over the years','focuses on the skull and spinal column. Therapists use very gently pressure no more than the weight of a nickel to massage the bones, membranes and fluids that support and bathe your skull and spinal column. The theory is that these manipulations will reduce tension and counteract any physical trauma you may have experienced to your head over the years','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(8,'another offshoot of Rolfing, was developed to teach people to maintain the improved alignment that they got through Rolfing. Aston-Patterning uses posture re-education and stresses physical fitness techniques.','another offshoot of Rolfing, was developed to teach people to maintain the improved alignment that they got through Rolfing. Aston-Patterning uses posture re-education and stresses physical fitness techniques.','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(9,' uses gentle, rocking massage to help release the body’s harmful “holding patterns.” If you injured your left shoulder as a child, for example, you still may unconsciously carry it lower than your right shoulder, throwing your body off balance and robbing you of energy. Therapists employ very light, gentle shaking techniques that are unlike traditional Swedish-style massage. The idea is to make people more aware of their bodies, especially the way they move and hold themselves. For some reason, freeing people of physical holding patterns also seems to rid them of emotional stress that they associated with the prior injury.',' uses gentle, rocking massage to help release the body’s harmful “holding patterns.” If you injured your left shoulder as a child, for example, you still may unconsciously carry it lower than your right shoulder, throwing your body off balance and robbing you of energy. Therapists employ very light, gentle shaking techniques that are unlike traditional Swedish-style massage. The idea is to make people more aware of their bodies, especially the way they move and hold themselves. For some reason, freeing people of physical holding patterns also seems to rid them of emotional stress that they associated with the prior injury.','2015-02-26 09:23:00','2015-02-26 09:23:00');

/*!40000 ALTER TABLE `service_details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `outlet_id` int(10) unsigned DEFAULT NULL,
  `condition_id` int(10) unsigned DEFAULT NULL,
  `detail_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `status` enum('new','active','drag') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'new',
  `time_operate` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`),
  KEY `fk_service_oultet_id_idx` (`outlet_id`),
  KEY `fk_service_condition_id_idx` (`condition_id`),
  KEY `fk_service_detail_id_idx` (`detail_id`),
  CONSTRAINT `fk_service_condition_id` FOREIGN KEY (`condition_id`) REFERENCES `service_conditions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_service_detail_id` FOREIGN KEY (`detail_id`) REFERENCES `service_details` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_service_oultet_id` FOREIGN KEY (`outlet_id`) REFERENCES `outlets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;

INSERT INTO `services` (`id`, `outlet_id`, `condition_id`, `detail_id`, `name`, `price`, `status`, `time_operate`, `created_at`, `updated_at`)
VALUES
	(1,2,1,8,'ba guan therapy',70.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(2,2,1,8,'ba guan therapy',84.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(3,2,1,8,'ba guan therapy',105.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(4,1,1,3,'body massage',75.00,'new','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(5,1,1,3,'body massage',90.00,'new','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(6,1,1,3,'body massage',113.00,'new','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(7,1,1,1,'essentil oil',80.00,'new','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(8,1,1,1,'essentil oil',96.00,'new','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(9,1,1,1,'essentil oil',120.00,'new','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(10,2,2,7,'foot massage',85.00,'new','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(11,2,2,7,'foot massage',102.00,'new','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(12,2,2,7,'foot massage',128.00,'new','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(13,1,2,2,'foot reflexology',90.00,'new','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(14,1,2,2,'foot reflexology',108.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(15,1,2,2,'foot reflexology',135.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(16,2,2,6,'gua sha therapy',95.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(17,2,2,6,'gua sha therapy',114.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(18,2,2,6,'gua sha therapy',143.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(19,1,2,5,'heat treatment',100.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(20,1,2,5,'heat treatment',120.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(21,1,2,5,'heat treatment',150.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(22,1,2,5,'jacuzzi massage',105.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(23,1,2,5,'jacuzzi massage',126.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(24,1,2,5,'jacuzzi massage',158.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(25,2,2,3,'oriental body massage',110.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(26,2,2,3,'oriental body massage',132.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(27,2,2,3,'oriental body massage',165.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(28,2,2,8,'oriental body massage with aroma oil',115.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(29,2,2,8,'oriental body massage with aroma oil',138.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(30,2,2,8,'oriental body massage with aroma oil',173.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(31,1,2,4,'oriental body massage with body scrub',130.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(32,1,2,4,'oriental body massage with body scrub',156.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(33,1,2,4,'oriental body massage with body scrub',195.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(34,2,2,7,'whitening body scrub',140.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(35,2,2,7,'whitening body scrub',168.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(36,2,2,7,'whitening body scrub',210.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(37,NULL,3,2,'ASTON-PATTERNING',80.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(38,NULL,3,2,'ASTON-PATTERNING',96.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(39,NULL,3,2,'ASTON-PATTERNING',120.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(40,NULL,3,4,'CRANIOSACRAL THERAPY',85.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(41,NULL,3,4,'CRANIOSACRAL THERAPY',102.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(42,NULL,3,4,'CRANIOSACRAL THERAPY',128.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(43,NULL,3,9,'DEEP TISSUE MASSAGE',90.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(44,NULL,3,9,'DEEP TISSUE MASSAGE',108.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(45,NULL,3,9,'DEEP TISSUE MASSAGE',135.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(46,NULL,3,1,'HELLERWORK',95.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(47,NULL,3,1,'HELLERWORK',114.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(48,NULL,3,1,'HELLERWORK',143.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(49,NULL,3,2,'NEUROMUSCULAR MASSAGE',100.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(50,NULL,3,2,'NEUROMUSCULAR MASSAGE',120.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(51,NULL,3,2,'NEUROMUSCULAR MASSAGE',150.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(52,NULL,4,5,'ROLFING',80.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(53,NULL,4,5,'ROLFING',96.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(54,NULL,4,5,'ROLFING',120.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(55,NULL,4,3,'SPORTS MASSAGE',85.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(56,NULL,4,3,'SPORTS MASSAGE',102.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(57,NULL,4,3,'SPORTS MASSAGE',128.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(58,NULL,4,1,'SWEDISH MASSAGE',90.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(59,NULL,4,1,'SWEDISH MASSAGE',108.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(60,NULL,4,1,'SWEDISH MASSAGE',135.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(61,NULL,4,9,'TRAGER',95.00,'active','30','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(62,NULL,4,9,'TRAGER',114.00,'active','60','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(63,NULL,4,9,'TRAGER',143.00,'active','90','2015-02-26 09:23:00','2015-02-26 09:23:00');

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

LOCK TABLES `terms_conditions` WRITE;
/*!40000 ALTER TABLE `terms_conditions` DISABLE KEYS */;

INSERT INTO `terms_conditions` (`id`, `description`, `configure_no`, `created_at`, `updated_at`)
VALUES
	(1,'Through the website, we (http://booking.enablestartup.com B.V. and its affiliate (distribution) partners) provide an online platform through which all types of temporary accommodations (for example hotels, motels, hostels and bed & breakfasts, collectively the \"accommodation(s)\"), can advertise their rooms for reservation, and through which visitors to the website can make such reservations. By making a reservation through http://booking.enablestartup.com, you enter into a direct (legally binding) contractual relationship with the accommodation provider at which you book. From the point at which you make your reservation, we act solely as an intermediary between you and the provider, transmitting the details of your reservation to the relevant accommodation provider and sending you a confirmation email for and on behalf of the accommodation provider.\n\nWhen rendering our services, the information that we disclose is based on the information provided to us by accommodation providers. As such, the accommodation providers are given access to an extranet through which they are fully responsible for updating all rates, availability and other information which is displayed on our website. Although we will use reasonable skill and care in performing our services we will not verify if, and cannot guarantee that, all information is accurate, complete or correct, nor can we be held responsible for any errors (including manifest and typographical errors), any interruptions (whether due to any (temporary and/or partial) breakdown, repair, upgrade or maintenance of our website or otherwise), inaccurate, misleading or untrue information or non-delivery of information. Each accommodation provider remains responsible at all times for the accuracy, completeness and correctness of the (descriptive) information (including the rates and availability) displayed on our website. Our website does not constitute and should not be regarded as a recommendation or endorsement of the quality, service level, qualification or (star) rating of any accommodations made available.\n\nOur services are made available for personal and non-commercial use only. Therefore, you are not allowed to re-sell, deep-link, use, copy, monitor (e.g. spider, scrape), display, download or reproduce any content or information, software, products or services available on our website for any commercial or competitive activity or purpose.','1. Scope of our Service','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(2,'The prices on our site are highly competitive. All prices on the http://booking.enablestartup.com website are per room for your entire stay and are displayed including VAT tax and all other taxes (subject to change of such taxes), unless stated differently on our website or in the confirmation email.\n\nSometimes cheaper rates are available on our website for a specific stay at a property, however, these rates made by accommodations providers may carry special restrictions and conditions, for example in respect to cancellation and refund. Please check the room and rate details thoroughly for any such conditions prior to making your reservation.\n\nIn the event of a crossed-out rate, we look at the prices currently being charged by the property in the 30-day window around your proposed check-in date. From the prices within this window, we display the third-highest price on offer as the crossed-out rate. To ensure we are making a fair comparison, we always use the same reservation conditions (meal plan, cancellation policy and room type). This means that you get the same room for a lower price compared to other check-in dates at the same time of year.\n\nWe want you to pay the lowest price possible for your stay. Should you find your accommodation, with the same reservation conditions, at a lower rate on the Internet after you have made a reservation through us, we will match the difference between our rate and the lower rate under the terms and conditions of the Best Price Guarantee.\n\nThe currency converter is for information purposes only and should not be relied upon as accurate and real time; actual rates may vary.\n\nObvious errors and mistakes (including misprints) are not binding.\n\nAll special offers and promotions are marked as such.','2. Prices and Best Price Guarantee','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(3,'Our service is free of charge because, unlike many other parties, we will not charge you for our service or add any additional (reservation) fees to the room rate.','3. Free of Charge','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(4,'SMbook.com respects your privacy. Please take a look at our privacy and cookies policy for further information','4. Privacy and Cookies','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(5,'If applicable and available, certain accommodation providers offer the opportunity for reservations to be paid (wholly or partly and as required under the payment policy of the accommodation) to the accommodation provider during the reservation process by means of secure online payment (all to the extent offered and supported by your bank). Payment is safely processed from your credit/debit card or bank account to the bank account of the accommodation provider through a third party payment processor.\n\nFor certain rates or special offers, please note that your credit card may be pre-authorized or charged (sometimes without any option for refund) upon reservation and confirmation of the booking. Please check the room details thoroughly for any such conditions prior to making your reservation.\n\nIn the event of credit card fraud or unauthorized use of your credit card by third parties, most banks and credit card companies bear the risk and cover all the charges resulting from such fraud or misuse, which may sometimes be subject to a deductible (usually set at EUR 50 (or the equivalent in your local currency)). In the event that your credit card company or bank charges you the deductible because of unauthorized transactions resulting from a reservation made on our website, we will pay you this deductible, up to an aggregate amount of EUR 50 (or the equivalent in your local currency). In order to be indemnified, please make sure that you report this fraud to your credit card provider (in accordance with its reporting rules and procedures) and contact us immediately by email (customer.relations@http://booking.enablestartup.com). Please state \'credit card fraud\' in the subject line of your email and provide us with evidence of the charged deductible (e.g. policy of the credit card company). This indemnification only applies to credit card reservations made using http://booking.enablestartup.com\'s secure server and the unauthorized use of your credit card resulting through our default or negligence and through no fault of your own while using the secure server.','5. Credit Card','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(6,'By making a reservation with an accommodation provider, you accept and agree to the relevant cancellation and no-show policy of that accommodation provider, and to any additional (delivery) terms and conditions of the accommodation provider that may apply to your reservation or during your stay, including for services rendered and/or products offered by the accommodation provider (the delivery terms and conditions of an accommodation provider can be obtained with the relevant accommodation provider). The general cancellation and no-show policy of each accommodation provider is made available on our website on the accommodation information pages, during the reservation procedure and in the confirmation email. Please note that certain rates or special offers are not eligible for cancellation or change. Please check the room details thoroughly for any such conditions prior to making your reservation. Please note that a reservation which requires down payment or (wholly or partly) prepayment may be cancelled (without a prior notice of default or warning) insofar the relevant (remaining) amount(s) cannot be collected in full on the relevant payment date in accordance with the relevant payment policy of the accommodation and the reservation. Late payment, wrong bank, debit or credit card details, invalid credit/debit cards or insufficient funds are for your own risk and account and you shall not be entitled to any refund of any (non-refundable) prepaid amount unless the accommodation agrees or allows otherwise under its (pre)payment and cancellation policy.\n\nIf you wish to review, adjust or cancel your reservation, please revert to the confirmation email and follow the instructions therein. Please note that you may be charged for your cancellation in accordance with the accommodation provider\'s cancellation, (pre)payment and no-show policy or not be entitled to any repayment of any (pre)paid amount. We recommend that you read the cancellation, (pre)payment and no-show policy of the accommodation provider carefully prior to making your reservation and remember to make further payments on time as may be required for the relevant reservation.','6. Cancellation','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(7,'By completing a booking, you agree to receive (i) an email which we may send you shortly prior to your arrival date, giving you information on your destination and providing you with certain information and offers (including third party offers to the extent that you have actively opted in for this information) relevant to your reservation and destination, and (ii) an email which we may send to you promptly after your stay inviting you to complete our guest review form. Please see our privacy and cookies policy for more information about how we may contact you.','7. Further Correspondence','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(8,'The default setting of the ranking of hotels on our website is \"Recommended\" (or any similar wording) (the \"Default Ranking\"). For your convenience, we also offer other ways to rank the hotel. Please note that the Default Ranking is created through a fully automated ranking system (algorithm) and is based on multiple criteria.\n\nThe completed guest review may be (a) uploaded onto the relevant property\'s information page on our website for the sole purpose of informing (future) customers of your opinion of the service (level) and quality of the accommodations, and (b) (wholly or partly) used and placed by http://booking.enablestartup.com at its sole discretion (e.g. for marketing, promotion or improvement of our service) on our website or such social media platforms, newsletters, special promotions, apps or other channels owned, hosted, used or controlled by http://booking.enablestartup.com. We reserve the right to adjust, refuse or remove reviews at our sole discretion. The guest review form should be regarded as a survey and does not include any (further commercial) offers, invitations or incentives whatsoever.','8. Ranking and Guest Reviews','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(9,'To the extent permitted by law, these terms and conditions and the provision of our services shall be governed by and construed in accordance with Dutch law and any dispute arising out of these general terms and conditions and our services shall exclusively be submitted to the competent courts in Amsterdam, the Netherlands.\n\nThe original UK English version of these terms and conditions may have been translated into other languages. The translated version is a courtesy and office translation only and you cannot derive any rights from the translated version. In the event of a dispute about the contents or interpretation of these terms and conditions or inconsistency or discrepancy between the UK English version and any other language version of these terms and conditions, the UK English language version to the extent permitted by law shall apply, prevail and be conclusive. The UK English version is available on our website (by selecting UK English language) or shall be sent to you upon your written request.\n\nIf any provision of these terms and conditions is or becomes invalid, unenforceable or non-binding, you shall remain bound by all other provisions hereof. In such event, such invalid provision shall nonetheless be enforced to the fullest extent permitted by applicable law, and you will at least agree to accept a similar effect as the invalid, unenforceable or non-binding provision, given the contents and purpose of these terms and conditions.','9. Miscellaneous','2015-02-26 09:23:00','2015-02-26 09:23:00');

/*!40000 ALTER TABLE `terms_conditions` ENABLE KEYS */;
UNLOCK TABLES;


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
  `created_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  `updated_at` timestamp NOT NULL DEFAULT '2015-02-26 09:23:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `address_id`, `first_name`, `last_name`, `username`, `email`, `password`, `confirmation_code`, `remember_token`, `confirmed`, `user_type`, `created_at`, `updated_at`)
VALUES
	(1,0,'CHUA WEI QUAN RONALD','','admin','admin@example.org','','c87f3a63d171cd7c813893a3b7e1ee94','BYTBpmsznlhXOo7sPwnUP5ZD9vxSL9Gqwj1qfjdswX0pXYbQLaTXnXoFVCZo',1,'admin','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(2,0,'DHAKSHINA MOORTHY PRADEEP','','dungho','dungho@gmail.com','','b3ca5572a88af9895e746fa3d8c4419f','M1lkyQY5SeKfyZmnpBxbyp0vtFkflV4hmpxFKYgxUmDyD1KoclQOlu8bh90T',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(3,0,'HAN JIANGLEI','','user','user@example.org','','10d928cd1834b6b6b70974b6b8e28f37','Lm3vtAzG42g1tHqEMjXYxUb4Kodj7NivVI3817bemyeEDnm3ks1BchTVEIZZ',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(4,0,'HO YUAN FA','','dung2','dung@gmail.com','','c7fb73defb62e3c6bddac9d136598fce',NULL,1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(5,0,'NGUYEN BAO TRI','','dungho2','dung2@gmail.com','','f52b785ef7880bdc25be42ef9a3cecd3',NULL,0,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(6,0,'NIM JIN XIANG','','dungho3','dung3@gmail.com','','dd7eb4029f3c5867bfa9fa05fd1edb50',NULL,0,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(7,0,'TAY JIN HENG','','dungho4','dungho4@gmail.com','','4e026c90a8ba9a8c3b3ec76ee9b70a45',NULL,0,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(8,0,'WU ZHENLIN','','tuong','tuong@gmail.com','','d8af70e71e70d0bbc5eadc3705c358d7','rMscUqacvA8vbE1XUGNEbhzgc4lt4lnUYNXTkeRtiVx8BJZLdkWoOiXDp3zd',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(9,0,'LIU CHENGLONG','','gewgawmagma','gewgawmagma@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(10,0,'TAN JUNYANG SAMUEL','','ridinggravy','ridinggravy@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(11,0,'CHRIS STEPHEN NAVEEN RANJIT','','shadsgrunt','shadsgrunt@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(12,0,'KELLY NG XINYI','','topopen','topopen@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(13,0,'LUO HUAN','','appraisercommand','appraisercommand@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(14,0,'SALIM WIBOWO HANG','','totteringtawdry','totteringtawdry@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(15,0,'YEO HUI PENG VALERIE','','forwardfusty','forwardfusty@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(16,0,'YEO XINYONG, JONATHAN','','unsightlycluster','unsightlycluster@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(17,0,'ANG CHUNG LAM','','wagtailcranky','wagtailcranky@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(18,0,'ANG SHIN YEE','','shutaccidental','shutaccidental@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(19,0,'ASSMI BIN HASHIM','','advisorfrazzled','advisorfrazzled@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(20,0,'CHEN WEIQING','','iceskatesdisfigured','iceskatesdisfigured@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(21,0,'CHIA MING EN','','aroundugly','aroundugly@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(22,0,'CHOW YEW WAH','','implyroguish','implyroguish@','','','',1,'retailer','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(23,0,'CHUNG QIWEN','','competentfields','competentfields@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(24,0,'CLEMENT OW ZHISEN','','doodlebunch','doodlebunch@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(25,0,'CLEMENT TAN WEE SENG','','stablesweet','stablesweet@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(26,0,'DU YIJUN','','queansea','queansea@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(27,0,'GN CHER TECK','','distressedpencil','distressedpencil@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(28,0,'HE ZHENHAO, KELVIN','','crayoncolobus','crayoncolobus@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(29,0,'KAY KIM ANN','','filletredwing','filletredwing@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(30,0,'KWOK WEI HONG LESTER','','forefingerski','forefingerski@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(31,0,'LEE JUN YAO, JEREMY','','troublepincers','troublepincers@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(32,0,'LI YONGER','','dupeexotic','dupeexotic@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(33,0,'LIM JUN SHENG','','cyclemarks','cyclemarks@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(34,0,'MUHAMMAD SYAFIQ BIN MA\'AROF','','kidneyedcaustic','kidneyedcaustic@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(35,0,'NG AI TING, ANDREA','','stuffedtwenty','stuffedtwenty@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(36,0,'NG ZHENG YANG CLEMENT','','gullimpressive','gullimpressive@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(37,0,'ONG XIAN HUI','','chipobtainable','chipobtainable@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(38,0,'SITI NAQIYAH BINTE REDZWAN','','operatesailing','operatesailing@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(39,0,'SOSALE BHARGAV','','woefulface','woefulface@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(40,0,'SUSANTI','','cocklelights','cocklelights@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(41,0,'TAN JUN YING GLADYS','','moondive','moondive@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(42,0,'TAY YU TONG','','dishesquilt','dishesquilt@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(43,0,'WAN LIUYANG','','codlolly','codlolly@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(44,0,'WONG SHIN YU ISABEL','','summitsimplistic','summitsimplistic@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(45,0,'YANG LIU','','tickreservoir','tickreservoir@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(46,0,'YAP YEN WUN','','sizzlingpish','sizzlingpish@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(47,0,'ALFRED SETIADI','','privilegefloss','privilegefloss@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(48,0,'ANG JING JIE','','skingive','skingive@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(49,0,'ANG ZHENG JIE','','furtiveon','furtiveon@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(50,0,'BENATHON WEE YAN ZHI','','whimsicalriding','whimsicalriding@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(51,0,'BRAM PRAWIRA GANI','','filletstomatoe','filletstomatoe@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(52,0,'CHEOH XIN MEI','','hailtrent','hailtrent@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(53,0,'CHEW CHEE HAU','','surprisedirty','surprisedirty@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(54,0,'CHIN WEI JIE','','bufffrilly','bufffrilly@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(55,0,'CHRISTHIO GUNAWAN','','irritateduncommon','irritateduncommon@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(56,0,'CLARENCE SIAH JUN DA','','lowerpussy','lowerpussy@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(57,0,'DAPHNE TAN SHI HUI','','tickingwitches','tickingwitches@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(58,0,'DING HAOHANG','','stinkywildfowl','stinkywildfowl@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(59,0,'FABIAN LEE JIN WEI','','vietnameseroller','vietnameseroller@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(60,0,'FAN XIAOXUAN','','turbulentshyster','turbulentshyster@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(61,0,'FONG ZHI EN, KELVIN','','burpthree','burpthree@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(62,0,'FREDDY KUSNANDAR SANTOSO','','boyscoutsaged','boyscoutsaged@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(63,0,'FUJI NEO','','leashrug','leashrug@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(64,0,'GOH WEI LI JERAMIE','','lungdefiant','lungdefiant@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(65,0,'HO TING XUAN','','damagedquestion','damagedquestion@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(66,0,'HUANG BO','','grizzledduster','grizzledduster@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(67,0,'HUTCHINSON RACHEL','','healthyaspiring','healthyaspiring@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(68,0,'JACKY LIM CHEE KONG','','previousburnish','previousburnish@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(69,0,'JOEL GOH RUI JIA','','weaversunny','weaversunny@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(70,0,'KANODIA ADARSH','','pillsearnest','pillsearnest@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(71,0,'LAM CHUN YIN','','gobemouchecartilage','gobemouchecartilage@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(72,0,'LAM YAOMING','','fillmarten','fillmarten@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(73,0,'LE NHU THONG','','desertedhabitual','desertedhabitual@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(74,0,'LEE CHAN KHONG','','sprypointed','sprypointed@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(75,0,'LEE KONG ZHOU','','plantscold','plantscold@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(76,0,'LI CHEN','','spiritedwilted','spiritedwilted@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(77,0,'LIM BOON CHIEH (LIN WENJIE)','','attendkit','attendkit@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(78,0,'LIM WEI FOONG','','coatioffended','coatioffended@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(79,0,'LIM YEW TECK NICHOLAS','','onionserene','onionserene@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(80,0,'LIN YIQUN CLEMENT','','spencerspotatoes','spencerspotatoes@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(81,0,'LIU FAN','','possessiveunequal','possessiveunequal@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(82,0,'LIU XIAO','','squelchhat','squelchhat@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(83,0,'LOK XIN QUAN','','oldribbit','oldribbit@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(84,0,'LOW YI SHENG','','corpusclelift','corpusclelift@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(85,0,'LU MENGJIAO','','junkfilibuster','junkfilibuster@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(86,0,'MEDIANA','','shandylovable','shandylovable@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(87,0,'MIN MIAOLIN','','forsakenfloating','forsakenfloating@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(88,0,'MUHAMMAD NADZIR BIN AZMI','','screechsatisfying','screechsatisfying@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(89,0,'NG JIA HAO GARY','','querulousbarber','querulousbarber@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(90,0,'NGUYEN QUOC DUY TAN','','swearstripey','swearstripey@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(91,0,'PETER JEZREEL','','deanshut','deanshut@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(92,0,'POH SHIE LIANG','','scruffyvessels','scruffyvessels@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(93,0,'QUEK TECK SOON TOMMY','','puncturerandom','puncturerandom@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(94,0,'RAYMOND','','chargeathletics','chargeathletics@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(95,0,'SEET YONG SONG KENNY','','snappingodd','snappingodd@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(96,0,'SMITH DAVID JOHN','','collarsatisfy','collarsatisfy@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(97,0,'SOON JIANYONG','','basmatiprotect','basmatiprotect@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(98,0,'SRIDHAR PRAKASH AMBARISH','','goosebassey','goosebassey@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00'),
	(99,0,'TAM JIN HANG','','purseshowy','purseshowy@','','','',1,'user','2015-02-26 09:23:00','2015-02-26 09:23:00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
