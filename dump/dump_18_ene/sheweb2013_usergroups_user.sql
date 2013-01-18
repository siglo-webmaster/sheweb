CREATE DATABASE  IF NOT EXISTS `sheweb2013` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sheweb2013`;
-- MySQL dump 10.13  Distrib 5.5.28, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: sheweb2013
-- ------------------------------------------------------
-- Server version	5.5.28-0ubuntu0.12.04.3-log

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
-- Table structure for table `usergroups_user`
--

DROP TABLE IF EXISTS `usergroups_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usergroups_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) DEFAULT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) DEFAULT NULL,
  `email` varchar(120) NOT NULL,
  `home` varchar(120) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `question` text,
  `answer` text,
  `creation_date` datetime DEFAULT NULL,
  `activation_code` varchar(30) DEFAULT NULL,
  `activation_time` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `ban` datetime DEFAULT NULL,
  `ban_reason` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `group_id_idxfk` (`group_id`),
  CONSTRAINT `usergroups_user_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `usergroups_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usergroups_user`
--

LOCK TABLES `usergroups_user` WRITE;
/*!40000 ALTER TABLE `usergroups_user` DISABLE KEYS */;
INSERT INTO `usergroups_user` VALUES (1,1,'admin','cdaf21e7430ad7172f95bb3f5ac494d9','oborja@siglodelhombre.com','/site',4,'9*456/345*345+345/43345+8/534-23423+5!*2323/23!','no se','2013-01-02 15:37:35',NULL,NULL,'2013-01-18 19:58:48',NULL,NULL),(2,3,'hjimenez','94c434664deccadb172a75ce8556cae6','hjimenez@siglodelhombre.com',NULL,4,NULL,NULL,'2013-01-02 16:17:58',NULL,NULL,'2013-01-18 17:15:56',NULL,NULL),(3,4,'fteatino','25817d7d349dad0a49b3f0811ca5b611','fteatino@siglodelhombre.com',NULL,4,NULL,NULL,'2013-01-02 16:22:42',NULL,NULL,'2013-01-18 17:22:50',NULL,NULL),(4,5,'oborja','46614d1bf7d6d9d64d77d8b18650ec03','oborja@localhost.com',NULL,4,NULL,NULL,'2013-01-18 09:40:08',NULL,NULL,'2013-01-18 17:08:30',NULL,NULL),(5,5,'ogaleano','5900d4dff8f787a47f581f0e6f9a3701','ogaleano@siglodelhombre.com',NULL,4,NULL,NULL,'2013-01-18 11:40:41',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `usergroups_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-18 17:22:13
