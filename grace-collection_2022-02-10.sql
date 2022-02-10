# ************************************************************
# Sequel Ace SQL dump
# Version 20025
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.7.37)
# Database: grace-collection
# Generation Time: 2022-02-10 10:58:43 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table illustrators
# ------------------------------------------------------------

DROP TABLE IF EXISTS `illustrators`;

CREATE TABLE `illustrators` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `instagram` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `illustrators` WRITE;
/*!40000 ALTER TABLE `illustrators` DISABLE KEYS */;

INSERT INTO `illustrators` (`id`, `name`, `image`, `instagram`, `location`, `website`)
VALUES
	(1,'Malika Favre','https://www.malikafavre.com/uploads/project_thumbnails/insta-mtime1527777787.png','malikafavre','Barcelona','malikafavre.com'),
	(2,'Jasmine Floyd','https://pbs.twimg.com/media/FI2IK2nXwAYKi_b?format=jpg&name=large','jasminefloyd',NULL,'jasminesillustrations.co.uk'),
	(3,'Tom Haugomat','https://cdn.sanity.io/images/0wi4u8fy/production/b6c5122df0d1a42a4166caf353813a7210a35589-1028x1500.jpg?rect=0,236,1028,1028&w=1600&h=1600','tomhaugomat','France','handsomefrank.com/illustrators/tom-haugomat'),
	(4,'Charlie Davis','https://inspgr.id/app/uploads/2020/05/illustration-charlie-davis-01-scaled.jpg','charliedavisillustration','London','charliedavisillustration.com'),
	(5,'Ryo Takemasa','https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/a42a5462111855.5a853e18d7d74.jpg','ryotakemasa',NULL,'ryotakemasa.com'),
	(6,'Tobias Hall','https://pro2-bar-s3-cdn-cf5.myportfolio.com/13db6078686b2e3ac46460cec2fba65b/61e9e21c-c5d5-4af4-9d4a-64af63b6fd9b_rwc_200x339x1003x1003x1003.jpg?h=7c64b5777931758ecde7f6d9765b3978','tobiashall','London','tobias-hall.co.uk'),
	(7,'Georgina Luck','https://images.squarespace-cdn.com/content/v1/609fda74dc3a4961f4602873/1621336705965-AHOUGHH7NZ9XPYFRMYUN/prt_250x250_1610796498_4x.jpg?format=500w','georgina.luck','East Sussex','georginaluck.com'),
	(8,'Maggie Enterrios','https://images.squarespace-cdn.com/content/5f9c6395df3ea97762a41f76/1604264791866-FK9OB69F3KOZ8ANINP8B/Maggie+Enterrios+illustrator+botanical+littlepatterns__0000s_0015_7FBC4302-B661-44EC-B239-391DEFD891D9+2_0016__0000_chry.jpg?content-type=image%2Fjpeg','littlepatterns','USA','littlepatterns.com');

/*!40000 ALTER TABLE `illustrators` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
