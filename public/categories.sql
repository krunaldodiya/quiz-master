# ************************************************************
# Sequel Pro SQL dump
# Version 5438
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 8.0.13)
# Database: padhakoo
# Generation Time: 2019-03-14 06:19:31 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `parent_id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,0,'GK','2019-03-14 11:31:15','2019-03-14 11:31:15'),
	(2,1,'History','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(3,1,'Geography','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(4,1,'Computer Fundamental','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(5,1,'Indian Politics','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(6,1,'Indian Economy','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(7,1,'Indian Culture','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(8,1,'General Science','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(9,1,'Physics','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(10,1,'Chemistry','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(11,1,'Biology','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(12,1,'Technology','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(13,1,'Sports','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(14,1,'Inventions','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(15,1,'Books and Authors','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(16,1,'Basic General Knowledge','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(17,1,'Famous Personalities','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(18,1,'Awards and Honours','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(19,1,'World Geography','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(20,1,'Famous Places in India','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(21,1,'Days and Years','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(22,1,'World Organisations','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(23,1,'Environmental Science','2019-03-14 11:31:34','2019-03-14 11:31:34'),
	(24,2,'Indian History','2019-03-14 11:34:34','2019-03-14 11:34:34'),
	(25,2,'Ancient History Art and Culture','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(26,2,'Deccan Dynasties and Sangam Dynasty','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(27,2,'Indus Valley Civilisation','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(28,2,'Jainism and Buddhism','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(29,2,'Mauryan Empire','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(30,2,'Magadha Empire','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(31,2,'Harshavardhana Empire','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(32,2,'Vedic Age','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(33,2,'Medieval History Art and Culture','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(34,2,'Bhakti Movement','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(35,2,'Gulam Dynasty','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(36,2,'Khalji Dynasty','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(37,2,'Lodi and Sayyid Dynasty','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(38,2,'Tughlaq Dynasty','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(39,2,'Maratha Empire','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(40,2,'Sikh Empire','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(41,2,'Mughal Empire','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(42,2,'18th Century Revolts and Reform','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(43,2,'British Rule in India','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(44,2,'Modern Indian History','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(45,2,'Struggle for Independence of India','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(46,2,'World History','2019-03-14 11:38:45','2019-03-14 11:38:45'),
	(47,3,'Indian Geography','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(48,3,'Universe','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(49,3,'Earth','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(50,3,'Atmosphere','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(51,3,'Hydrosphere','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(52,3,'Lithosphere','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(53,3,'Political Geography of India','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(54,3,'Climate and Weather in Indian Geography','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(55,3,'Agriculture and Soil in Indian Geography','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(56,3,'Indian Rivers, Lakes and Water','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(57,3,'Natural Resources and Industries in Indian Geography','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(58,3,'Transportation system of India','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(59,3,'Environment and Ecology in Indian Geography','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(60,3,'Population and Tribes in Indian Geography','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(61,3,'Miscellaneous Indian Geography','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(62,3,'World Climate and Weather','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(63,3,'World Agriculture, Minerals and Industries','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(64,3,'World Environment and Ecology','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(65,3,'Miscellaneous World Geography','2019-03-14 11:42:06','2019-03-14 11:42:06'),
	(66,4,'Computer Fundamental Miscellaneous','2019-03-14 11:49:09','2019-03-14 11:49:09'),
	(67,4,'Operating System','2019-03-14 11:49:09','2019-03-14 11:49:09'),
	(68,4,'MS Word','2019-03-14 11:49:09','2019-03-14 11:49:09'),
	(69,4,'MS Excel','2019-03-14 11:49:09','2019-03-14 11:49:09'),
	(70,4,'Power Point','2019-03-14 11:49:09','2019-03-14 11:49:09'),
	(71,4,'Tally','2019-03-14 11:49:09','2019-03-14 11:49:09');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
