CREATE DATABASE  IF NOT EXISTS `missingpersons` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `missingpersons`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: missingpersons
-- ------------------------------------------------------
-- Server version	5.7.17-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `casedetails`
--

DROP TABLE IF EXISTS `casedetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casedetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fName` varchar(45) DEFAULT NULL,
  `lName` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `height` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `details` text,
  `userID` varchar(45) DEFAULT NULL,
  `lastseen` date DEFAULT NULL,
  `status` enum('solved','unsolved') DEFAULT 'unsolved',
  `lastlocation` varchar(45) DEFAULT NULL,
  `datePosted` datetime DEFAULT NULL,
  `dateSubmitted` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  `imageURL` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casedetails`
--

LOCK TABLES `casedetails` WRITE;
/*!40000 ALTER TABLE `casedetails` DISABLE KEYS */;
INSERT INTO `casedetails` VALUES (1,'Stan','Marsh',10,4.2,45,'Stan Marsh is a boy wearing a brown jacket and a blue hat with a red poofball.','1','2018-04-11','unsolved','Raisins','2018-04-11 00:00:00','2018-05-09 06:17:51.905215',NULL),(2,'Kyle','Broflovski',10,4.2,45,'Kyle Broflovski is a boy wearing an orange jacket and a green hat.','1','2017-05-12','unsolved','Skeeter\'s Bar','2017-05-12 00:00:00','2018-05-09 06:17:51.905215',NULL),(3,'Eric','Cartman',10,4.2,45,'Eric Cartman is a boy wearing a red jacket and a blue-green hat with a small yellow poofball.','1','2016-10-19','unsolved','South Park Mall','2016-10-19 00:00:00','2018-05-09 06:17:51.905215',NULL),(4,'Kenny','McCormick',10,4.2,45,'Kenny McCormick is a boy wearing a brown jacket an orange jacket that covers his face.','1','2015-07-10','unsolved','Raisins','2015-07-10 00:00:00','2018-05-09 06:17:51.905215',NULL),(5,'Butters','Stotch',10,4.2,45,'Butters Stotch is a boy wearing a green shirt. He has yellow spiky hair','1','2018-03-16','unsolved','Raisins','2018-03-16 00:00:00','2018-05-09 06:17:51.905215',NULL),(6,'Clyde','Donovan',10,4.2,45,'Clyde Donovan is a boy wearing a red jacket. He has a blue scarf and brown hair.','1','2017-07-21','unsolved','South Park Mall','2017-07-21 00:00:00','2018-05-09 06:17:51.905215',NULL),(7,'Tweek','Tweak',10,4.2,45,'Tweek Tweak is a boy wearing a green shirt. His shirt isn\'t buttoned properly and he has long, yellow spiky hair','1','2016-03-30','unsolved','Jimbo\'s Guns','2016-03-30 00:00:00','2018-05-09 06:17:51.905215',NULL),(8,'Craig','Tucker',10,4.2,45,'Craig Tucker is a boy wearing a blue jacket and a blue hat with a yellow poofball.','1','2017-01-28','unsolved','South Park Mall','2017-01-28 00:00:00','2018-05-09 06:17:51.905215',NULL),(9,'Jimmy','Valmer',10,4.2,45,'Jimmy Valmer is a boy wearing a yellow shirt. He has crutches.','1','2017-03-01','unsolved','Raisins','2017-03-01 00:00:00','2018-05-09 06:17:51.905215',NULL),(10,'Timmy','Burch',10,4.2,45,'Timmy Burch is a boy wearing a red shirt. He is on a wheelchair.','1','2014-03-18','unsolved','South Park Mall','2014-03-18 00:00:00','2018-05-09 06:17:51.905215',NULL),(11,'Token','Black',10,4.2,45,'Token Black is a boy wearing a purple shirt. He is black','1','2016-03-12','unsolved','Jimbo\'s Guns','2016-03-12 00:00:00','2018-05-09 06:17:51.905215',NULL),(12,'Wendy','Testaburger',10,4.2,45,'Wendy Testaburger is a girl wearing a purple jacket and a pink beret.','1','2018-03-19','solved','Skeeter\'s Bar','2018-03-19 00:00:00','2018-05-09 06:17:51.905215',NULL),(13,'Bebe','Stevens',10,4.2,45,'Bebe Stevens is a girl wearing a red jacket. She has curly yellow hair','1','2018-01-12','solved','Jimbo\'s Guns','2018-01-12 00:00:00','2018-05-09 06:17:51.905215',NULL),(14,'Heidi','Turner',10,4.2,45,'Heidi Turner is a girl wearing a green jacket and red gloves. She has gray hair.','1','2015-03-21','solved','Skeeter\'s Bar','2015-03-21 00:00:00','2018-05-09 06:17:51.905215',NULL),(15,'Red','',10,4.2,45,'Red is a girl wearing a violet jacket and purple gloves. She has red hair','1','2017-08-12','solved','Jimbo\'s Guns','2017-08-12 00:00:00','2018-05-09 06:17:51.905215',NULL),(16,'Lola','',10,4.2,45,'Lola is a girl wearing a green shirt and a blue headband. She has brown hair','1','2016-09-11','solved','South Park Mall','2016-09-11 00:00:00','2018-05-09 06:17:51.905215',NULL),(17,'Sally','Turner',10,4.2,45,'Sally Turner is a girl wearing a violet jacket and purple gloves. She has red hair and wears a pink hairpin.','1','2014-01-11','solved','Raisins','2014-01-11 00:00:00','2018-05-09 06:17:51.905215',NULL),(18,'Nelly','',10,4.2,45,'Nelly is a girl wearing a green shirt with a flower printed on it. She has brown ponytails','1','2016-08-08','solved','Raisins','2016-08-08 00:00:00','2018-05-09 06:17:51.905215',NULL),(19,'Annie','Nelson',10,4.2,45,'Annie Nelson is a girl wearing a brown jacket. She has yellow, short, curly hair.','1','2017-03-19','solved','South Park Mall','2017-03-19 00:00:00','2018-05-09 06:17:51.905215',NULL),(20,'Token','White',11,4.3,44,'Token White is a child','1','2016-03-12','unsolved','Jimbo\'s Guns','2016-03-12 00:00:00','2018-05-09 06:17:51.905215',NULL),(21,'asd','faf',21,5,67,'asdad',NULL,NULL,'unsolved',NULL,NULL,'2018-05-09 06:17:51.905215',NULL),(22,'asdads','assdad',123,12,21,'asdasd',NULL,NULL,'unsolved',NULL,NULL,'2018-05-09 06:17:51.905215',NULL);
/*!40000 ALTER TABLE `casedetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactus`
--

LOCK TABLES `contactus` WRITE;
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
INSERT INTO `contactus` VALUES (7,'','','',''),(8,'','','','');
/*!40000 ALTER TABLE `contactus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conversationId` int(11) NOT NULL,
  `senderId` int(11) DEFAULT NULL,
  `receiverId` int(11) DEFAULT NULL,
  `dateMessaged` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  `message` text,
  `postId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inbox`
--

LOCK TABLES `inbox` WRITE;
/*!40000 ALTER TABLE `inbox` DISABLE KEYS */;
INSERT INTO `inbox` VALUES (1,2,2,1,'2018-05-03 07:54:14.740907','Helo',1),(2,3,3,13,'2018-05-03 07:54:33.436657','Hey',3),(3,2,1,2,'2018-05-03 08:09:41.468324','aaa',1),(4,1,1,2,'2018-05-03 08:12:29.649240','new',2);
/*!40000 ALTER TABLE `inbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mpcommentmeta`
--

DROP TABLE IF EXISTS `mpcommentmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mpcommentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mpcommentmeta`
--

LOCK TABLES `mpcommentmeta` WRITE;
/*!40000 ALTER TABLE `mpcommentmeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `mpcommentmeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mpcomments`
--

DROP TABLE IF EXISTS `mpcomments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mpcomments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mpcomments`
--

LOCK TABLES `mpcomments` WRITE;
/*!40000 ALTER TABLE `mpcomments` DISABLE KEYS */;
INSERT INTO `mpcomments` VALUES (1,1,'A WordPress Commenter','wapuu@wordpress.example','https://wordpress.org/','','2018-03-27 03:04:59','2018-03-27 03:04:59','Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href=\"https://gravatar.com\">Gravatar</a>.',0,'1','','',0,0);
/*!40000 ALTER TABLE `mpcomments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mplinks`
--

DROP TABLE IF EXISTS `mplinks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mplinks` (
  `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mplinks`
--

LOCK TABLES `mplinks` WRITE;
/*!40000 ALTER TABLE `mplinks` DISABLE KEYS */;
/*!40000 ALTER TABLE `mplinks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mpoptions`
--

DROP TABLE IF EXISTS `mpoptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mpoptions` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`)
) ENGINE=InnoDB AUTO_INCREMENT=399 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mpoptions`
--

LOCK TABLES `mpoptions` WRITE;
/*!40000 ALTER TABLE `mpoptions` DISABLE KEYS */;
INSERT INTO `mpoptions` VALUES (1,'siteurl','http://wordpress.local','yes'),(2,'home','http://wordpress.local','yes'),(3,'blogname','missingpersons','yes'),(4,'blogdescription','Just another WordPress site','yes'),(5,'users_can_register','0','yes'),(6,'admin_email','claudesedillo@gmail.com','yes'),(7,'start_of_week','1','yes'),(8,'use_balanceTags','0','yes'),(9,'use_smilies','1','yes'),(10,'require_name_email','1','yes'),(11,'comments_notify','1','yes'),(12,'posts_per_rss','10','yes'),(13,'rss_use_excerpt','0','yes'),(14,'mailserver_url','mail.example.com','yes'),(15,'mailserver_login','login@example.com','yes'),(16,'mailserver_pass','password','yes'),(17,'mailserver_port','110','yes'),(18,'default_category','1','yes'),(19,'default_comment_status','open','yes'),(20,'default_ping_status','open','yes'),(21,'default_pingback_flag','0','yes'),(22,'posts_per_page','10','yes'),(23,'date_format','F j, Y','yes'),(24,'time_format','g:i a','yes'),(25,'links_updated_date_format','F j, Y g:i a','yes'),(26,'comment_moderation','0','yes'),(27,'moderation_notify','1','yes'),(28,'permalink_structure','/%year%/%monthnum%/%day%/%postname%/','yes'),(29,'rewrite_rules','a:91:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:12:\"robots\\.txt$\";s:18:\"index.php?robots=1\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:27:\"comment-page-([0-9]{1,})/?$\";s:39:\"index.php?&page_id=12&cpage=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}','yes'),(30,'hack_file','0','yes'),(31,'blog_charset','UTF-8','yes'),(32,'moderation_keys','','no'),(33,'active_plugins','a:2:{i:0;s:30:\"advanced-custom-fields/acf.php\";i:1;s:31:\"edit-any-table/EditAnyTable.php\";}','yes'),(34,'category_base','','yes'),(35,'ping_sites','http://rpc.pingomatic.com/','yes'),(36,'comment_max_links','2','yes'),(37,'gmt_offset','0','yes'),(38,'default_email_category','1','yes'),(39,'recently_edited','','no'),(40,'template','missingpersons','yes'),(41,'stylesheet','missingpersons','yes'),(42,'comment_whitelist','1','yes'),(43,'blacklist_keys','','no'),(44,'comment_registration','0','yes'),(45,'html_type','text/html','yes'),(46,'use_trackback','0','yes'),(47,'default_role','subscriber','yes'),(48,'db_version','38590','yes'),(49,'uploads_use_yearmonth_folders','1','yes'),(50,'upload_path','','yes'),(51,'blog_public','0','yes'),(52,'default_link_category','2','yes'),(53,'show_on_front','page','yes'),(54,'tag_base','','yes'),(55,'show_avatars','1','yes'),(56,'avatar_rating','G','yes'),(57,'upload_url_path','','yes'),(58,'thumbnail_size_w','150','yes'),(59,'thumbnail_size_h','150','yes'),(60,'thumbnail_crop','1','yes'),(61,'medium_size_w','300','yes'),(62,'medium_size_h','300','yes'),(63,'avatar_default','mystery','yes'),(64,'large_size_w','1024','yes'),(65,'large_size_h','1024','yes'),(66,'image_default_link_type','none','yes'),(67,'image_default_size','','yes'),(68,'image_default_align','','yes'),(69,'close_comments_for_old_posts','0','yes'),(70,'close_comments_days_old','14','yes'),(71,'thread_comments','1','yes'),(72,'thread_comments_depth','5','yes'),(73,'page_comments','0','yes'),(74,'comments_per_page','50','yes'),(75,'default_comments_page','newest','yes'),(76,'comment_order','asc','yes'),(77,'sticky_posts','a:0:{}','yes'),(78,'widget_categories','a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}','yes'),(79,'widget_text','a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}','yes'),(80,'widget_rss','a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}','yes'),(81,'uninstall_plugins','a:0:{}','no'),(82,'timezone_string','','yes'),(83,'page_for_posts','0','yes'),(84,'page_on_front','12','yes'),(85,'default_post_format','0','yes'),(86,'link_manager_enabled','0','yes'),(87,'finished_splitting_shared_terms','1','yes'),(88,'site_icon','0','yes'),(89,'medium_large_size_w','768','yes'),(90,'medium_large_size_h','0','yes'),(91,'initial_db_version','38590','yes'),(92,'mpuser_roles','a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}','yes'),(93,'fresh_site','0','yes'),(94,'widget_search','a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}','yes'),(95,'widget_recent-posts','a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}','yes'),(96,'widget_recent-comments','a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}','yes'),(97,'widget_archives','a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}','yes'),(98,'widget_meta','a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}','yes'),(99,'sidebars_widgets','a:5:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}s:13:\"array_version\";i:3;}','yes'),(100,'widget_pages','a:1:{s:12:\"_multiwidget\";i:1;}','yes'),(101,'widget_calendar','a:1:{s:12:\"_multiwidget\";i:1;}','yes'),(102,'widget_media_audio','a:1:{s:12:\"_multiwidget\";i:1;}','yes'),(103,'widget_media_image','a:1:{s:12:\"_multiwidget\";i:1;}','yes'),(104,'widget_media_gallery','a:1:{s:12:\"_multiwidget\";i:1;}','yes'),(105,'widget_media_video','a:1:{s:12:\"_multiwidget\";i:1;}','yes'),(106,'widget_tag_cloud','a:1:{s:12:\"_multiwidget\";i:1;}','yes'),(107,'widget_nav_menu','a:1:{s:12:\"_multiwidget\";i:1;}','yes'),(108,'widget_custom_html','a:1:{s:12:\"_multiwidget\";i:1;}','yes'),(109,'cron','a:4:{i:1525878302;a:3:{s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1525921529;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1525929761;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}','yes'),(110,'theme_mods_twentyseventeen','a:3:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1522905909;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}}}s:18:\"nav_menu_locations\";a:0:{}}','yes'),(114,'_site_transient_update_core','O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-4.9.5.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-4.9.5.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-4.9.5-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-4.9.5-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"4.9.5\";s:7:\"version\";s:5:\"4.9.5\";s:11:\"php_version\";s:5:\"5.2.4\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"4.7\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1525863978;s:15:\"version_checked\";s:5:\"4.9.5\";s:12:\"translations\";a:0:{}}','no'),(126,'can_compress_scripts','1','no'),(139,'recently_activated','a:0:{}','yes'),(147,'current_theme','','yes'),(148,'theme_mods_twentysixteen','a:4:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1522130632;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}}}}','yes'),(149,'theme_switched','','yes'),(150,'_transient_twentysixteen_categories','1','yes'),(151,'acf_version','4.4.12','yes'),(190,'_site_transient_update_themes','O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1525863976;s:7:\"checked\";a:4:{s:14:\"missingpersons\";s:3:\"1.0\";s:13:\"twentyfifteen\";s:3:\"1.9\";s:15:\"twentyseventeen\";s:3:\"1.5\";s:13:\"twentysixteen\";s:3:\"1.4\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}}','no'),(193,'theme_mods_missingpersons','a:1:{s:18:\"custom_css_post_id\";i:-1;}','yes'),(194,'theme_switch_menu_locations','a:0:{}','yes'),(195,'theme_switched_via_customizer','','yes'),(196,'customize_stashed_theme_mods','a:0:{}','no'),(251,'eat_options','a:5:{s:8:\"eat_host\";s:5:\"local\";s:6:\"eat_db\";s:14:\"missingpersons\";s:8:\"eat_user\";s:4:\"root\";s:7:\"eat_pwd\";s:4:\"1234\";s:12:\"eat_friendly\";s:0:\"\";}','yes'),(260,'core_updater.lock','1524625514','no'),(334,'_site_transient_timeout_browser_bd6a9fe252598f30ffd1edb8511fd2b1','1525919121','no'),(335,'_site_transient_browser_bd6a9fe252598f30ffd1edb8511fd2b1','a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:13:\"66.0.3359.139\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}','no'),(392,'_site_transient_timeout_community-events-4501c091b0366d76ea3218b6cfdd8097','1525888016','no'),(393,'_site_transient_community-events-4501c091b0366d76ea3218b6cfdd8097','a:2:{s:8:\"location\";a:1:{s:2:\"ip\";s:2:\"::\";}s:6:\"events\";a:1:{i:0;a:7:{s:4:\"type\";s:6:\"meetup\";s:5:\"title\";s:65:\"WP 15th Anniv, WPUGPH\'s 2nd yr and Gutenberg vs Page-builder talk\";s:3:\"url\";s:64:\"https://www.meetup.com/Manila-WordPress-Meetup/events/248990674/\";s:6:\"meetup\";s:23:\"Manila WordPress Meetup\";s:10:\"meetup_url\";s:47:\"https://www.meetup.com/Manila-WordPress-Meetup/\";s:4:\"date\";s:19:\"2018-05-26 14:00:00\";s:8:\"location\";a:4:{s:8:\"location\";s:19:\"Manila, Philippines\";s:7:\"country\";s:2:\"ph\";s:8:\"latitude\";d:14.64175;s:9:\"longitude\";d:121.040321;}}}}','no'),(394,'category_children','a:0:{}','yes'),(395,'_site_transient_timeout_theme_roots','1525865774','no'),(396,'_site_transient_theme_roots','a:5:{s:6:\"backup\";s:7:\"/themes\";s:14:\"missingpersons\";s:7:\"/themes\";s:13:\"twentyfifteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:13:\"twentysixteen\";s:7:\"/themes\";}','no'),(398,'_site_transient_update_plugins','O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1525863982;s:8:\"response\";a:1:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.0.3\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.0.3.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"4.9.5\";s:12:\"requires_php\";b:0;s:13:\"compatibility\";O:8:\"stdClass\":0:{}}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:6:{s:30:\"advanced-custom-fields/acf.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:36:\"w.org/plugins/advanced-custom-fields\";s:4:\"slug\";s:22:\"advanced-custom-fields\";s:6:\"plugin\";s:30:\"advanced-custom-fields/acf.php\";s:11:\"new_version\";s:6:\"4.4.12\";s:3:\"url\";s:53:\"https://wordpress.org/plugins/advanced-custom-fields/\";s:7:\"package\";s:72:\"https://downloads.wordpress.org/plugin/advanced-custom-fields.4.4.12.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:75:\"https://ps.w.org/advanced-custom-fields/assets/icon-256x256.png?rev=1082746\";s:2:\"1x\";s:75:\"https://ps.w.org/advanced-custom-fields/assets/icon-128x128.png?rev=1082746\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:78:\"https://ps.w.org/advanced-custom-fields/assets/banner-1544x500.jpg?rev=1729099\";s:2:\"1x\";s:77:\"https://ps.w.org/advanced-custom-fields/assets/banner-772x250.jpg?rev=1729102\";}s:11:\"banners_rtl\";a:0:{}}s:31:\"edit-any-table/EditAnyTable.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:28:\"w.org/plugins/edit-any-table\";s:4:\"slug\";s:14:\"edit-any-table\";s:6:\"plugin\";s:31:\"edit-any-table/EditAnyTable.php\";s:11:\"new_version\";s:5:\"2.1.2\";s:3:\"url\";s:45:\"https://wordpress.org/plugins/edit-any-table/\";s:7:\"package\";s:57:\"https://downloads.wordpress.org/plugin/edit-any-table.zip\";s:5:\"icons\";a:1:{s:7:\"default\";s:58:\"https://s.w.org/plugins/geopattern-icon/edit-any-table.svg\";}s:7:\"banners\";a:0:{}s:11:\"banners_rtl\";a:0:{}}s:9:\"hello.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:3:\"1.6\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/plugin/hello-dolly.1.6.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:63:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=969907\";s:2:\"1x\";s:63:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=969907\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:65:\"https://ps.w.org/hello-dolly/assets/banner-772x250.png?rev=478342\";}s:11:\"banners_rtl\";a:0:{}}s:33:\"theme-my-login/theme-my-login.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:28:\"w.org/plugins/theme-my-login\";s:4:\"slug\";s:14:\"theme-my-login\";s:6:\"plugin\";s:33:\"theme-my-login/theme-my-login.php\";s:11:\"new_version\";s:6:\"6.4.10\";s:3:\"url\";s:45:\"https://wordpress.org/plugins/theme-my-login/\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/plugin/theme-my-login.6.4.10.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:67:\"https://ps.w.org/theme-my-login/assets/icon-256x256.png?rev=1131382\";s:2:\"1x\";s:67:\"https://ps.w.org/theme-my-login/assets/icon-128x128.png?rev=1131382\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:69:\"https://ps.w.org/theme-my-login/assets/banner-1544x500.jpg?rev=833903\";s:2:\"1x\";s:68:\"https://ps.w.org/theme-my-login/assets/banner-772x250.jpg?rev=833903\";}s:11:\"banners_rtl\";a:0:{}}s:26:\"wp-clone-template/main.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:31:\"w.org/plugins/wp-clone-template\";s:4:\"slug\";s:17:\"wp-clone-template\";s:6:\"plugin\";s:26:\"wp-clone-template/main.php\";s:11:\"new_version\";s:3:\"2.0\";s:3:\"url\";s:48:\"https://wordpress.org/plugins/wp-clone-template/\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/plugin/wp-clone-template.2.0.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:70:\"https://ps.w.org/wp-clone-template/assets/icon-256x256.png?rev=1108526\";s:2:\"1x\";s:70:\"https://ps.w.org/wp-clone-template/assets/icon-128x128.png?rev=1108526\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:73:\"https://ps.w.org/wp-clone-template/assets/banner-1544x500.png?rev=1108529\";s:2:\"1x\";s:72:\"https://ps.w.org/wp-clone-template/assets/banner-772x250.png?rev=1108529\";}s:11:\"banners_rtl\";a:0:{}}s:39:\"wp-theme-exporter/wp-theme-exporter.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:31:\"w.org/plugins/wp-theme-exporter\";s:4:\"slug\";s:17:\"wp-theme-exporter\";s:6:\"plugin\";s:39:\"wp-theme-exporter/wp-theme-exporter.php\";s:11:\"new_version\";s:3:\"1.2\";s:3:\"url\";s:48:\"https://wordpress.org/plugins/wp-theme-exporter/\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/plugin/wp-theme-exporter.1.2.zip\";s:5:\"icons\";a:1:{s:2:\"1x\";s:70:\"https://ps.w.org/wp-theme-exporter/assets/icon-128x128.jpg?rev=1738802\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:72:\"https://ps.w.org/wp-theme-exporter/assets/banner-772x250.jpg?rev=1738802\";}s:11:\"banners_rtl\";a:0:{}}}}','no');
/*!40000 ALTER TABLE `mpoptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mppostmeta`
--

DROP TABLE IF EXISTS `mppostmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mppostmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mppostmeta`
--

LOCK TABLES `mppostmeta` WRITE;
/*!40000 ALTER TABLE `mppostmeta` DISABLE KEYS */;
INSERT INTO `mppostmeta` VALUES (1,2,'_wp_page_template','default'),(4,1,'_edit_lock','1524563230:1'),(5,5,'_edit_last','1'),(7,5,'_edit_lock','1524563158:1'),(8,8,'_edit_last','1'),(9,8,'_edit_lock','1525250021:1'),(10,8,'_wp_page_template','5 - Specific Case.php'),(11,2,'_edit_lock','1524561475:1'),(12,12,'_edit_last','1'),(13,12,'_edit_lock','1525250025:1'),(14,12,'_wp_page_template','index.php'),(15,15,'_edit_lock','1524650319:1'),(16,15,'_wp_trash_meta_status','publish'),(17,15,'_wp_trash_meta_time','1524650324'),(18,14,'_edit_last','1'),(19,14,'_edit_lock','1525250014:1'),(20,14,'_wp_page_template','2 - Browse Cases (full).php'),(21,17,'_edit_last','1'),(22,17,'_edit_lock','1525250018:1'),(23,17,'_wp_page_template','3 - Browse Cases (pics).php'),(24,19,'_edit_last','1'),(25,19,'_wp_page_template','4 - Search Page.php'),(26,19,'_edit_lock','1525250020:1'),(27,21,'_edit_last','1'),(28,21,'_wp_page_template','6B - User Dashboard.php'),(29,21,'_edit_lock','1525250023:1'),(30,25,'_edit_last','1'),(31,25,'_wp_page_template','8 - About.php'),(32,25,'_edit_lock','1525250059:1'),(33,27,'_edit_last','1'),(34,27,'_wp_page_template','9 - FAQ.php'),(35,27,'_edit_lock','1525250060:1'),(36,29,'_edit_last','1'),(37,29,'_wp_page_template','7C - Submit Report.php'),(38,29,'_edit_lock','1525250058:1'),(39,2,'_wp_trash_meta_status','publish'),(40,2,'_wp_trash_meta_time','1525250129'),(41,2,'_wp_desired_post_slug','sample-page');
/*!40000 ALTER TABLE `mppostmeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mpposts`
--

DROP TABLE IF EXISTS `mpposts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mpposts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mpposts`
--

LOCK TABLES `mpposts` WRITE;
/*!40000 ALTER TABLE `mpposts` DISABLE KEYS */;
INSERT INTO `mpposts` VALUES (1,1,'2018-03-27 03:04:59','2018-03-27 03:04:59','Welcome to WordPress. This is your first post. Edit or delete it, then start writing!','Hello world!','','publish','open','open','','hello-world','','','2018-03-27 03:04:59','2018-03-27 03:04:59','',0,'http://wordpress.local/?p=1',0,'post','',1),(2,1,'2018-03-27 03:04:59','2018-03-27 03:04:59','This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:\n\n<blockquote>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</blockquote>\n\n...or something like this:\n\n<blockquote>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</blockquote>\n\nAs a new WordPress user, you should go to <a href=\"http://wordpress.local/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!','Sample Page','','trash','closed','open','','sample-page__trashed','','','2018-05-02 08:35:29','2018-05-02 08:35:29','',0,'http://wordpress.local/?page_id=2',0,'page','',0),(5,1,'2018-04-23 05:23:02','2018-04-23 05:23:02','Hi! Please help','Test Post','','publish','open','open','','test-post','','','2018-04-23 05:23:02','2018-04-23 05:23:02','',0,'http://wordpress.local/?p=5',0,'post','',0),(6,1,'2018-04-23 05:23:02','2018-04-23 05:23:02','Hi! Please help','Test Post','','inherit','closed','closed','','5-revision-v1','','','2018-04-23 05:23:02','2018-04-23 05:23:02','',5,'http://wordpress.local/2018/04/23/5-revision-v1/',0,'revision','',0),(8,1,'2018-04-24 09:17:22','2018-04-24 09:17:22','','5 - Specific Case','','publish','closed','closed','','5-specific-case','','','2018-04-24 09:34:59','2018-04-24 09:34:59','',0,'http://wordpress.local/?page_id=8',0,'page','',0),(9,1,'2018-04-24 09:17:22','2018-04-24 09:17:22','','5 - Specific Case','','inherit','closed','closed','','8-revision-v1','','','2018-04-24 09:17:22','2018-04-24 09:17:22','',8,'http://wordpress.local/2018/04/24/8-revision-v1/',0,'revision','',0),(10,1,'2018-04-24 09:18:24','2018-04-24 09:18:24','qweqweqweqweqweqweqweqweqweqweqweqweqewqweqeqweq','5 - Specific Case','','inherit','closed','closed','','8-revision-v1','','','2018-04-24 09:18:24','2018-04-24 09:18:24','',8,'http://wordpress.local/2018/04/24/8-revision-v1/',0,'revision','',0),(11,1,'2018-04-24 09:19:31','2018-04-24 09:19:31','','5 - Specific Case','','inherit','closed','closed','','8-revision-v1','','','2018-04-24 09:19:31','2018-04-24 09:19:31','',8,'http://wordpress.local/2018/04/24/8-revision-v1/',0,'revision','',0),(12,1,'2018-04-25 09:57:23','2018-04-25 09:57:23','','1 - Home','','publish','closed','closed','','1-home','','','2018-04-25 09:57:23','2018-04-25 09:57:23','',0,'http://wordpress.local/?page_id=12',0,'page','',0),(13,1,'2018-04-25 09:57:23','2018-04-25 09:57:23','','1 - Home','','inherit','closed','closed','','12-revision-v1','','','2018-04-25 09:57:23','2018-04-25 09:57:23','',12,'http://wordpress.local/2018/04/25/12-revision-v1/',0,'revision','',0),(14,1,'2018-04-25 09:59:28','2018-04-25 09:59:28','','2 - Browse Cases (Full)','','publish','closed','closed','','2-browse-cases-full','','','2018-05-02 08:35:49','2018-05-02 08:35:49','',0,'http://wordpress.local/?page_id=14',0,'page','',0),(15,1,'2018-04-25 09:58:44','2018-04-25 09:58:44','{\n    \"show_on_front\": {\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2018-04-25 09:58:39\"\n    },\n    \"page_on_front\": {\n        \"value\": \"12\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2018-04-25 09:58:39\"\n    }\n}','','','trash','closed','closed','','e9921d03-614c-41bb-b757-a4e3d00ff9b7','','','2018-04-25 09:58:44','2018-04-25 09:58:44','',0,'http://wordpress.local/?p=15',0,'customize_changeset','',0),(16,1,'2018-04-25 09:59:28','2018-04-25 09:59:28','','2 - Browse Cases (Full)','','inherit','closed','closed','','14-revision-v1','','','2018-04-25 09:59:28','2018-04-25 09:59:28','',14,'http://wordpress.local/2018/04/25/14-revision-v1/',0,'revision','',0),(17,1,'2018-04-25 10:00:12','2018-04-25 10:00:12','','3 - Browse Cases (With Pictures)','','publish','closed','closed','','3-browse-cases-with-pictures','','','2018-05-02 08:21:48','2018-05-02 08:21:48','',0,'http://wordpress.local/?page_id=17',0,'page','',0),(18,1,'2018-04-25 10:00:12','2018-04-25 10:00:12','','3 - Browse Cases (With Pictures)','','inherit','closed','closed','','17-revision-v1','','','2018-04-25 10:00:12','2018-04-25 10:00:12','',17,'http://wordpress.local/2018/04/25/17-revision-v1/',0,'revision','',0),(19,1,'2018-04-25 10:00:27','2018-04-25 10:00:27','','4 - Search Page','','publish','closed','closed','','4-search-page','','','2018-05-02 07:08:36','2018-05-02 07:08:36','',0,'http://wordpress.local/?page_id=19',0,'page','',0),(20,1,'2018-04-25 10:00:27','2018-04-25 10:00:27','','4 - Search Page','','inherit','closed','closed','','19-revision-v1','','','2018-04-25 10:00:27','2018-04-25 10:00:27','',19,'http://wordpress.local/2018/04/25/19-revision-v1/',0,'revision','',0),(21,1,'2018-04-25 10:00:49','2018-04-25 10:00:49','','6 - User Dashboard','','publish','closed','closed','','6-user-dashboard','','','2018-05-02 08:24:07','2018-05-02 08:24:07','',0,'http://wordpress.local/?page_id=21',0,'page','',0),(22,1,'2018-04-25 10:00:49','2018-04-25 10:00:49','','6 - User Dashboard','','inherit','closed','closed','','21-revision-v1','','','2018-04-25 10:00:49','2018-04-25 10:00:49','',21,'http://wordpress.local/2018/04/25/21-revision-v1/',0,'revision','',0),(25,1,'2018-04-25 10:08:45','2018-04-25 10:08:45','','8 - About','','publish','closed','closed','','8-about','','','2018-05-02 08:36:34','2018-05-02 08:36:34','',0,'http://wordpress.local/?page_id=25',0,'page','',0),(26,1,'2018-04-25 10:08:45','2018-04-25 10:08:45','','8 - About','','inherit','closed','closed','','25-revision-v1','','','2018-04-25 10:08:45','2018-04-25 10:08:45','',25,'http://wordpress.local/2018/04/25/25-revision-v1/',0,'revision','',0),(27,1,'2018-04-25 10:09:02','2018-04-25 10:09:02','','9 - FAQ','','publish','closed','closed','','9-faq','','','2018-05-02 08:36:40','2018-05-02 08:36:40','',0,'http://wordpress.local/?page_id=27',0,'page','',0),(28,1,'2018-04-25 10:09:02','2018-04-25 10:09:02','','9 - FAQ','','inherit','closed','closed','','27-revision-v1','','','2018-04-25 10:09:02','2018-04-25 10:09:02','',27,'http://wordpress.local/2018/04/25/27-revision-v1/',0,'revision','',0),(29,1,'2018-04-25 10:10:54','2018-04-25 10:10:54','','7 - Submit Report','','publish','closed','closed','','7-submit-report','','','2018-05-02 08:36:30','2018-05-02 08:36:30','',0,'http://wordpress.local/?page_id=29',0,'page','',0),(30,1,'2018-04-25 10:10:54','2018-04-25 10:10:54','','7 - Submit Report','','inherit','closed','closed','','29-revision-v1','','','2018-04-25 10:10:54','2018-04-25 10:10:54','',29,'http://wordpress.local/2018/04/25/29-revision-v1/',0,'revision','',0),(32,1,'2018-05-02 08:35:29','2018-05-02 08:35:29','This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:\n\n<blockquote>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</blockquote>\n\n...or something like this:\n\n<blockquote>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</blockquote>\n\nAs a new WordPress user, you should go to <a href=\"http://wordpress.local/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!','Sample Page','','inherit','closed','closed','','2-revision-v1','','','2018-05-02 08:35:29','2018-05-02 08:35:29','',2,'http://wordpress.local/2018/05/02/2-revision-v1/',0,'revision','',0),(33,1,'2018-05-09 05:47:43','0000-00-00 00:00:00','','Auto Draft','','auto-draft','open','open','','','','','2018-05-09 05:47:43','0000-00-00 00:00:00','',0,'http://wordpress.local/?p=33',0,'post','',0);
/*!40000 ALTER TABLE `mpposts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mpterm_relationships`
--

DROP TABLE IF EXISTS `mpterm_relationships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mpterm_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mpterm_relationships`
--

LOCK TABLES `mpterm_relationships` WRITE;
/*!40000 ALTER TABLE `mpterm_relationships` DISABLE KEYS */;
INSERT INTO `mpterm_relationships` VALUES (1,1,0),(5,1,0);
/*!40000 ALTER TABLE `mpterm_relationships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mpterm_taxonomy`
--

DROP TABLE IF EXISTS `mpterm_taxonomy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mpterm_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mpterm_taxonomy`
--

LOCK TABLES `mpterm_taxonomy` WRITE;
/*!40000 ALTER TABLE `mpterm_taxonomy` DISABLE KEYS */;
INSERT INTO `mpterm_taxonomy` VALUES (1,1,'category','',0,2);
/*!40000 ALTER TABLE `mpterm_taxonomy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mptermmeta`
--

DROP TABLE IF EXISTS `mptermmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mptermmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `term_id` (`term_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mptermmeta`
--

LOCK TABLES `mptermmeta` WRITE;
/*!40000 ALTER TABLE `mptermmeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `mptermmeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mpterms`
--

DROP TABLE IF EXISTS `mpterms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mpterms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mpterms`
--

LOCK TABLES `mpterms` WRITE;
/*!40000 ALTER TABLE `mpterms` DISABLE KEYS */;
INSERT INTO `mpterms` VALUES (1,'Uncategorized','uncategorized',0);
/*!40000 ALTER TABLE `mpterms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mpusermeta`
--

DROP TABLE IF EXISTS `mpusermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mpusermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mpusermeta`
--

LOCK TABLES `mpusermeta` WRITE;
/*!40000 ALTER TABLE `mpusermeta` DISABLE KEYS */;
INSERT INTO `mpusermeta` VALUES (1,1,'nickname','claudesedillo'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'syntax_highlighting','true'),(7,1,'comment_shortcuts','false'),(8,1,'admin_color','fresh'),(9,1,'use_ssl','0'),(10,1,'show_admin_bar_front','true'),(11,1,'locale',''),(12,1,'mpcapabilities','a:1:{s:13:\"administrator\";b:1;}'),(13,1,'mpuser_level','10'),(14,1,'dismissed_wp_pointers',''),(15,1,'show_welcome_panel','1'),(16,1,'session_tokens','a:2:{s:64:\"d629cefc92b402261ddb981ae2beffd7585d00c923063d73e5e52dfe80a9d774\";a:4:{s:10:\"expiration\";i:1526017609;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36\";s:5:\"login\";i:1525844809;}s:64:\"03afbbd354f3c537f1943f24a6bf7a87db9f012b8c4709298b8c453e767ebc22\";a:4:{s:10:\"expiration\";i:1527074202;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:77:\"Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0\";s:5:\"login\";i:1525864602;}}'),(17,1,'mpdashboard_quick_press_last_post_id','7'),(18,1,'community-events-location','a:1:{s:2:\"ip\";s:2:\"::\";}'),(19,1,'closedpostboxes_page','a:1:{i:0;s:9:\"submitdiv\";}'),(20,1,'metaboxhidden_page','a:5:{i:0;s:10:\"postcustom\";i:1;s:16:\"commentstatusdiv\";i:2;s:11:\"commentsdiv\";i:3;s:7:\"slugdiv\";i:4;s:9:\"authordiv\";}'),(21,1,'mpuser-settings','editor=tinymce'),(22,1,'mpuser-settings-time','1524563057');
/*!40000 ALTER TABLE `mpusermeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mpusers`
--

DROP TABLE IF EXISTS `mpusers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mpusers` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`),
  KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mpusers`
--

LOCK TABLES `mpusers` WRITE;
/*!40000 ALTER TABLE `mpusers` DISABLE KEYS */;
INSERT INTO `mpusers` VALUES (1,'claudesedillo','$P$BsRJx.IdloVnLDhNxdyBFu2jZn22UF1','claudesedillo','claudesedillo@gmail.com','','2018-03-27 03:04:58','1522895982:$P$BBPrcDlv4g3fCtKkKwbYR1fd6DQFoh/',0,'claudesedillo');
/*!40000 ALTER TABLE `mpusers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `threadpost`
--

DROP TABLE IF EXISTS `threadpost`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `threadpost` (
  `threadId` int(11) NOT NULL COMMENT 'postnumber or threadId for comments within a comment',
  `postId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `dateCommented` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  `message` text,
  PRIMARY KEY (`postId`,`threadId`),
  KEY `user_id_idx` (`userId`),
  KEY `post_id_idx` (`postId`),
  CONSTRAINT `post_id` FOREIGN KEY (`postId`) REFERENCES `casedetails` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_id` FOREIGN KEY (`userId`) REFERENCES `users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `threadpost`
--

LOCK TABLES `threadpost` WRITE;
/*!40000 ALTER TABLE `threadpost` DISABLE KEYS */;
INSERT INTO `threadpost` VALUES (1,1,1,'2018-04-11 16:00:00.000000','Help!'),(1,2,2,'2018-04-11 16:00:00.000000','Help is on the way!'),(10,10,1,'2018-05-05 03:47:22.820390','yo');
/*!40000 ALTER TABLE `threadpost` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `pinnedCases` varchar(100) DEFAULT NULL COMMENT 'caseID1;caseID2;caseID3',
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Claude',NULL,'1;2'),(2,'Jordan',NULL,NULL),(3,'Harvey',NULL,NULL),(4,'Jimbo',NULL,NULL),(5,'Ned',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'missingpersons'
--

--
-- Dumping routines for database 'missingpersons'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-09 21:44:49
