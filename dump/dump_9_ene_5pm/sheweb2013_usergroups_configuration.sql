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
-- Table structure for table `usergroups_configuration`
--

DROP TABLE IF EXISTS `usergroups_configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usergroups_configuration` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rule` varchar(40) DEFAULT NULL,
  `value` varchar(20) DEFAULT NULL,
  `options` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usergroups_configuration`
--

LOCK TABLES `usergroups_configuration` WRITE;
/*!40000 ALTER TABLE `usergroups_configuration` DISABLE KEYS */;
INSERT INTO `usergroups_configuration` VALUES (1,'version','1.8','CONST','userGroups version'),(2,'password_strength','0','a:3:{i:0;s:4:\"weak\";i:1;s:6:\"medium\";i:2;s:6:\"strong\";}','password strength:<br/>weak: password of at least 5 characters, any character allowed.<br/>\r\n			medium: password of at least 5 characters, must contain at least 2 digits and 2 letters.<br/>\r\n			strong: password of at least 5 characters, must contain at least 2 digits, 2 letters and a special character.'),(3,'registration','FALSE','BOOL','allow user registration'),(4,'public_user_list','FALSE','BOOL','logged users can see the complete user list'),(5,'public_profiles','FALSE','BOOL','allow everyone, even guests, to see user profiles'),(6,'profile_privacy','TRUE','BOOL','logged user can see other users profiles'),(7,'personal_home','FALSE','BOOL','users can set their own home'),(8,'simple_password_reset','FALSE','BOOL','if true users just have to provide user and email to reset their password.<br/>Otherwise they will have to answer their custom question'),(9,'user_need_activation','TRUE','BOOL','if true when a user creates an account a mail with an activation code will be sent to his email address'),(10,'user_need_approval','FALSE','BOOL','if true when a user creates an account a user with user admin rights will have to approve the registration.<br/>If both this setting and user_need_activation are true the user will need to activate is account first and then will need the approval'),(11,'user_registration_group','2','GROUP_LIST','the group new users automatically belong to'),(12,'dumb_admin','TRUE','BOOL','users with just admin write permissions won\'t see the Main Configuration and Cron Jobs panels'),(13,'super_admin','FALSE','BOOL','users with userGroups admin admin permission will have access to everything, just like root'),(14,'permission_cascade','TRUE','BOOL','if a user has on a controller admin permissions will have access to write and read pages. If he has write permissions will also have access to read pages'),(15,'server_executed_crons','FALSE','BOOL','if true crons must be executed from the server using a crontab');
/*!40000 ALTER TABLE `usergroups_configuration` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-09 16:00:06
