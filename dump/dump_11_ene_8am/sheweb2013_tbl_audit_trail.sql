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
-- Table structure for table `tbl_audit_trail`
--

DROP TABLE IF EXISTS `tbl_audit_trail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_audit_trail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `old_value` text COLLATE utf8_unicode_ci,
  `new_value` text COLLATE utf8_unicode_ci,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stamp` datetime NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_audit_trail_user_id` (`user_id`),
  KEY `idx_audit_trail_model_id` (`model_id`),
  KEY `idx_audit_trail_model` (`model`),
  KEY `idx_audit_trail_field` (`field`),
  KEY `idx_audit_trail_action` (`action`)
) ENGINE=InnoDB AUTO_INCREMENT=408 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_audit_trail`
--

LOCK TABLES `tbl_audit_trail` WRITE;
/*!40000 ALTER TABLE `tbl_audit_trail` DISABLE KEYS */;
INSERT INTO `tbl_audit_trail` VALUES (6,NULL,NULL,'CREATE','Pais','','2013-01-09 09:26:35','1','2'),(7,'','Venezuela','SET','Pais','nombre','2013-01-09 09:26:35','1','2'),(8,'','2','SET','Pais','idpais','2013-01-09 09:26:35','1','2'),(9,'Venezuela','Venezuela2','CHANGE','Pais','nombre','2013-01-09 09:32:29','1','2'),(10,'Venezuela2','Venezuela','CHANGE','Pais','nombre','2013-01-09 09:36:33','1','2'),(11,NULL,NULL,'CREATE','Pais','','2013-01-09 09:37:22','1','3'),(12,'','Ecuador','SET','Pais','nombre','2013-01-09 09:37:22','1','3'),(13,'','3','SET','Pais','idpais','2013-01-09 09:37:22','1','3'),(14,NULL,NULL,'CREATE','Pedidosproveedores','','2013-01-09 09:41:35','1','6'),(15,'','1','SET','Pedidosproveedores','idproveedor','2013-01-09 09:41:35','1','6'),(16,'','1','SET','Pedidosproveedores','moneda_idmoneda','2013-01-09 09:41:35','1','6'),(17,'','2013-01-02','SET','Pedidosproveedores','fechacierre','2013-01-09 09:41:35','1','6'),(18,'','2013-01-30','SET','Pedidosproveedores','fechaestimada','2013-01-09 09:41:35','1','6'),(19,'','esta es la descripcion del asunto','SET','Pedidosproveedores','descripcion','2013-01-09 09:41:35','1','6'),(20,'','estas son las observaciones','SET','Pedidosproveedores','observaciones','2013-01-09 09:41:35','1','6'),(21,'','1','SET','Pedidosproveedores','usuariocreacion','2013-01-09 09:41:35','1','6'),(22,'','2013-01-09 09:41:35','SET','Pedidosproveedores','fechacreacion','2013-01-09 09:41:35','1','6'),(23,'','activo','SET','Pedidosproveedores','estado','2013-01-09 09:41:35','1','6'),(24,'','6','SET','Pedidosproveedores','idpedidosproveedores','2013-01-09 09:41:35','1','6'),(25,NULL,NULL,'CREATE','Pedidosproveedoresitems','','2013-01-09 09:53:21','1','8'),(26,'','6','SET','Pedidosproveedoresitems','pedidosproveedores_idpedidosproveedores','2013-01-09 09:53:21','1','8'),(27,'','1','SET','Pedidosproveedoresitems','item_iditem','2013-01-09 09:53:21','1','8'),(28,'','4','SET','Pedidosproveedoresitems','solicitado','2013-01-09 09:53:21','1','8'),(29,'','activo','SET','Pedidosproveedoresitems','estado','2013-01-09 09:53:21','1','8'),(30,'','8','SET','Pedidosproveedoresitems','idpedidosproveedoresitems','2013-01-09 09:53:21','1','8'),(31,NULL,NULL,'CREATE','Pedidosproveedoresitems','','2013-01-09 10:14:25','1','9'),(32,'','4','SET','Pedidosproveedoresitems','pedidosproveedores_idpedidosproveedores','2013-01-09 10:14:25','1','9'),(33,'','1','SET','Pedidosproveedoresitems','item_iditem','2013-01-09 10:14:25','1','9'),(34,'','3','SET','Pedidosproveedoresitems','solicitado','2013-01-09 10:14:25','1','9'),(35,'','activo','SET','Pedidosproveedoresitems','estado','2013-01-09 10:14:25','1','9'),(36,'','9','SET','Pedidosproveedoresitems','idpedidosproveedoresitems','2013-01-09 10:14:25','1','9'),(37,NULL,NULL,'CREATE','Condicioncomercial','','2013-01-09 11:12:42','1','1'),(38,'','firme','SET','Condicioncomercial','nombre','2013-01-09 11:12:42','1','1'),(39,'','1','SET','Condicioncomercial','idcondicioncomercial','2013-01-09 11:12:42','1','1'),(40,NULL,NULL,'CREATE','Condicioncomercial','','2013-01-09 11:12:50','1','2'),(41,'','consignacion','SET','Condicioncomercial','nombre','2013-01-09 11:12:50','1','2'),(42,'','2','SET','Condicioncomercial','idcondicioncomercial','2013-01-09 11:12:50','1','2'),(43,NULL,NULL,'CREATE','Pedidosproveedoresitems','','2013-01-09 11:26:06','1','11'),(44,'','4','SET','Pedidosproveedoresitems','pedidosproveedores_idpedidosproveedores','2013-01-09 11:26:06','1','11'),(45,'','1','SET','Pedidosproveedoresitems','item_iditem','2013-01-09 11:26:06','1','11'),(46,'','3','SET','Pedidosproveedoresitems','solicitado','2013-01-09 11:26:06','1','11'),(47,'','1','SET','Pedidosproveedoresitems','condicioncomercial_idcondicioncomercial','2013-01-09 11:26:07','1','11'),(48,'','activo','SET','Pedidosproveedoresitems','estado','2013-01-09 11:26:07','1','11'),(49,'','11','SET','Pedidosproveedoresitems','idpedidosproveedoresitems','2013-01-09 11:26:07','1','11'),(50,'1','2','CHANGE','Pedidosproveedoresitems','condicioncomercial_idcondicioncomercial','2013-01-09 11:26:22','1','11'),(51,'2','1','CHANGE','Pedidosproveedoresitems','condicioncomercial_idcondicioncomercial','2013-01-09 11:26:29','1','11'),(52,'0','2','CHANGE','Pedidosproveedoresitems','condicioncomercial_idcondicioncomercial','2013-01-09 11:26:34','1','9'),(53,NULL,NULL,'DELETE','Pedidosproveedoresitems','','2013-01-09 11:26:43','1','9'),(54,NULL,NULL,'DELETE','Pedidosproveedoresitems','','2013-01-09 11:26:45','1','11'),(55,NULL,NULL,'DELETE','Pedidosproveedoresitems','','2013-01-09 11:26:48','1','7'),(56,NULL,NULL,'CREATE','Pedidosproveedoresitems','','2013-01-09 11:26:58','1','12'),(57,'','4','SET','Pedidosproveedoresitems','pedidosproveedores_idpedidosproveedores','2013-01-09 11:26:58','1','12'),(58,'','1','SET','Pedidosproveedoresitems','item_iditem','2013-01-09 11:26:58','1','12'),(59,'','6','SET','Pedidosproveedoresitems','solicitado','2013-01-09 11:26:58','1','12'),(60,'','1','SET','Pedidosproveedoresitems','condicioncomercial_idcondicioncomercial','2013-01-09 11:26:58','1','12'),(61,'','activo','SET','Pedidosproveedoresitems','estado','2013-01-09 11:26:58','1','12'),(62,'','12','SET','Pedidosproveedoresitems','idpedidosproveedoresitems','2013-01-09 11:26:58','1','12'),(63,NULL,NULL,'CREATE','Pedidosproveedoresitems','','2013-01-09 11:27:11','1','13'),(64,'','4','SET','Pedidosproveedoresitems','pedidosproveedores_idpedidosproveedores','2013-01-09 11:27:11','1','13'),(65,'','1','SET','Pedidosproveedoresitems','item_iditem','2013-01-09 11:27:11','1','13'),(66,'','7','SET','Pedidosproveedoresitems','solicitado','2013-01-09 11:27:11','1','13'),(67,'','2','SET','Pedidosproveedoresitems','condicioncomercial_idcondicioncomercial','2013-01-09 11:27:11','1','13'),(68,'','activo','SET','Pedidosproveedoresitems','estado','2013-01-09 11:27:12','1','13'),(69,'','13','SET','Pedidosproveedoresitems','idpedidosproveedoresitems','2013-01-09 11:27:12','1','13'),(70,'','1','CHANGE','Pedidosproveedores','usuarioaprobacion','2013-01-09 12:02:14','1','5'),(71,'0000-00-00 00:00:00','2013-01-30','CHANGE','Pedidosproveedores','fechaestimada','2013-01-09 12:02:14','1','5'),(72,'','2013-01-09 12:02:14','CHANGE','Pedidosproveedores','fechaaprobacion','2013-01-09 12:02:14','1','5'),(73,NULL,NULL,'CREATE','Pedidosproveedoresitems','','2013-01-09 12:11:14','1','14'),(74,'','6','SET','Pedidosproveedoresitems','pedidosproveedores_idpedidosproveedores','2013-01-09 12:11:14','1','14'),(75,'','1','SET','Pedidosproveedoresitems','item_iditem','2013-01-09 12:11:14','1','14'),(76,'','6','SET','Pedidosproveedoresitems','solicitado','2013-01-09 12:11:14','1','14'),(77,'','2','SET','Pedidosproveedoresitems','condicioncomercial_idcondicioncomercial','2013-01-09 12:11:14','1','14'),(78,'','activo','SET','Pedidosproveedoresitems','estado','2013-01-09 12:11:14','1','14'),(79,'','14','SET','Pedidosproveedoresitems','idpedidosproveedoresitems','2013-01-09 12:11:14','1','14'),(80,'','1','CHANGE','Pedidosproveedores','usuarioaprobacion','2013-01-09 13:33:01','1','4'),(81,'2013-01-16 00:00:00','2013-01-16','CHANGE','Pedidosproveedores','fechaestimada','2013-01-09 13:33:01','1','4'),(82,'','2013-01-09 01:33:01','CHANGE','Pedidosproveedores','fechaaprobacion','2013-01-09 13:33:02','1','4'),(83,'activo','aprobado','CHANGE','Pedidosproveedores','estado','2013-01-09 13:33:02','1','4'),(84,'2013-01-16 00:00:00','2013-01-16','CHANGE','Pedidosproveedores','fechaestimada','2013-01-09 13:34:18','1','4'),(85,'2013-01-09 01:33:01','2013-01-09 01:34:18','CHANGE','Pedidosproveedores','fechaaprobacion','2013-01-09 13:34:18','1','4'),(86,'aprobado','impreso','CHANGE','Pedidosproveedores','estado','2013-01-09 13:34:24','1','4'),(87,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacen','','2013-01-09 14:41:34','1','3'),(88,'','1','SET','Pedidosproveedoresentradasalmacen','bodega_idbodega','2013-01-09 14:41:34','1','3'),(89,'','4','SET','Pedidosproveedoresentradasalmacen','pedidosproveedores_idpedidosproveedores','2013-01-09 14:41:34','1','3'),(90,'','1','SET','Pedidosproveedoresentradasalmacen','usuarios_idusuarios','2013-01-09 14:41:34','1','3'),(91,'','2013-01-09 02:41:34','SET','Pedidosproveedoresentradasalmacen','fecha','2013-01-09 14:41:34','1','3'),(92,'','3','SET','Pedidosproveedoresentradasalmacen','idpedidosproveedoresentradasalmacen','2013-01-09 14:41:34','1','3'),(93,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacendetalle','','2013-01-09 14:41:34','1','3'),(94,'','3','SET','Pedidosproveedoresentradasalmacendetalle','idpedidosproveedoresentradasalmacen','2013-01-09 14:41:34','1','3'),(95,'','1','SET','Pedidosproveedoresentradasalmacendetalle','item_iditem','2013-01-09 14:41:34','1','3'),(96,'','4','SET','Pedidosproveedoresentradasalmacendetalle','cantidad','2013-01-09 14:41:35','1','3'),(97,'','3','SET','Pedidosproveedoresentradasalmacendetalle','idpedidosproveedoresentradasalmacendetalle','2013-01-09 14:41:35','1','3'),(98,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacen','','2013-01-09 14:53:26','1','4'),(99,'','1','SET','Pedidosproveedoresentradasalmacen','bodega_idbodega','2013-01-09 14:53:26','1','4'),(100,'','4','SET','Pedidosproveedoresentradasalmacen','pedidosproveedores_idpedidosproveedores','2013-01-09 14:53:26','1','4'),(101,'','1','SET','Pedidosproveedoresentradasalmacen','usuarios_idusuarios','2013-01-09 14:53:26','1','4'),(102,'','2013-01-09 02:53:26','SET','Pedidosproveedoresentradasalmacen','fecha','2013-01-09 14:53:26','1','4'),(103,'','4','SET','Pedidosproveedoresentradasalmacen','idpedidosproveedoresentradasalmacen','2013-01-09 14:53:26','1','4'),(104,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacen','','2013-01-09 14:55:35','1','5'),(105,'','1','SET','Pedidosproveedoresentradasalmacen','bodega_idbodega','2013-01-09 14:55:35','1','5'),(106,'','4','SET','Pedidosproveedoresentradasalmacen','pedidosproveedores_idpedidosproveedores','2013-01-09 14:55:35','1','5'),(107,'','1','SET','Pedidosproveedoresentradasalmacen','usuarios_idusuarios','2013-01-09 14:55:35','1','5'),(108,'','2013-01-09 02:55:35','SET','Pedidosproveedoresentradasalmacen','fecha','2013-01-09 14:55:35','1','5'),(109,'','5','SET','Pedidosproveedoresentradasalmacen','idpedidosproveedoresentradasalmacen','2013-01-09 14:55:35','1','5'),(110,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacendetalle','','2013-01-09 14:55:35','1','5'),(111,'','5','SET','Pedidosproveedoresentradasalmacendetalle','idpedidosproveedoresentradasalmacen','2013-01-09 14:55:35','1','5'),(112,'','1','SET','Pedidosproveedoresentradasalmacendetalle','item_iditem','2013-01-09 14:55:35','1','5'),(113,'','1','SET','Pedidosproveedoresentradasalmacendetalle','condicioncomercial_idcondicioncomercial','2013-01-09 14:55:35','1','5'),(114,'','3','SET','Pedidosproveedoresentradasalmacendetalle','cantidad','2013-01-09 14:55:35','1','5'),(115,'','5','SET','Pedidosproveedoresentradasalmacendetalle','idpedidosproveedoresentradasalmacendetalle','2013-01-09 14:55:35','1','5'),(116,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacendetalle','','2013-01-09 14:55:35','1','6'),(117,'','5','SET','Pedidosproveedoresentradasalmacendetalle','idpedidosproveedoresentradasalmacen','2013-01-09 14:55:35','1','6'),(118,'','1','SET','Pedidosproveedoresentradasalmacendetalle','item_iditem','2013-01-09 14:55:35','1','6'),(119,'','2','SET','Pedidosproveedoresentradasalmacendetalle','condicioncomercial_idcondicioncomercial','2013-01-09 14:55:35','1','6'),(120,'','1','SET','Pedidosproveedoresentradasalmacendetalle','cantidad','2013-01-09 14:55:35','1','6'),(121,'','6','SET','Pedidosproveedoresentradasalmacendetalle','idpedidosproveedoresentradasalmacendetalle','2013-01-09 14:55:35','1','6'),(122,NULL,NULL,'CREATE','Tipopedidosproveedores','','2013-01-09 15:18:34','1','1'),(123,'','novedades','SET','Tipopedidosproveedores','nombre','2013-01-09 15:18:34','1','1'),(124,'','1','SET','Tipopedidosproveedores','idtipopedidosproveedores','2013-01-09 15:18:34','1','1'),(125,NULL,NULL,'CREATE','Tipopedidosproveedores','','2013-01-09 15:19:04','1','2'),(126,'','reposicion','SET','Tipopedidosproveedores','nombre','2013-01-09 15:19:04','1','2'),(127,'','2','SET','Tipopedidosproveedores','idtipopedidosproveedores','2013-01-09 15:19:04','1','2'),(128,'novedades','novedad','CHANGE','Tipopedidosproveedores','nombre','2013-01-09 15:19:14','1','1'),(129,'2013-01-02 00:00:00','2013-01-02','CHANGE','Pedidosproveedores','fechacierre','2013-01-09 15:31:37','1','6'),(130,'2013-01-30 00:00:00','2013-01-30','CHANGE','Pedidosproveedores','fechaestimada','2013-01-09 15:31:37','1','6'),(131,'0','2','CHANGE','Pedidosproveedores','tipopedidosproveedores_idtipopedidosproveedores','2013-01-09 15:31:37','1','6'),(132,'0000-00-00 00:00:00','1969-12-31','CHANGE','Pedidosproveedores','fechacierre','2013-01-09 15:39:16','1','5'),(133,'2013-01-30 00:00:00','2013-01-30','CHANGE','Pedidosproveedores','fechaestimada','2013-01-09 15:39:16','1','5'),(134,'0','1','CHANGE','Pedidosproveedores','tipopedidosproveedores_idtipopedidosproveedores','2013-01-09 15:39:16','1','5'),(135,'2013-01-30 00:00:00','2013-01-30','CHANGE','Pedidosproveedores','fechaestimada','2013-01-09 15:40:14','1','5'),(136,'2013-01-09 12:02:14','2013-01-09 03:40:14','CHANGE','Pedidosproveedores','fechaaprobacion','2013-01-09 15:40:14','1','5'),(137,'activo','aprobado','CHANGE','Pedidosproveedores','estado','2013-01-09 15:40:14','1','5'),(138,'2013-01-09 00:00:00','2013-01-09','CHANGE','Pedidosproveedores','fechaestimada','2013-01-09 15:42:51','1','3'),(139,'2013-01-08 11:04:55','2013-01-09 03:42:51','CHANGE','Pedidosproveedores','fechaaprobacion','2013-01-09 15:42:51','1','3'),(140,'aprobado','activo','CHANGE','Pedidosproveedores','estado','2013-01-09 15:42:51','1','3'),(141,'2013-01-02 00:00:00','2013-01-02','CHANGE','Pedidosproveedores','fechacierre','2013-01-09 15:42:57','1','3'),(142,'2013-01-09 00:00:00','2013-01-09','CHANGE','Pedidosproveedores','fechaestimada','2013-01-09 15:42:57','1','3'),(143,'0','1','CHANGE','Pedidosproveedores','tipopedidosproveedores_idtipopedidosproveedores','2013-01-09 15:42:57','1','3'),(144,'2013-01-09 00:00:00','2013-01-09','CHANGE','Pedidosproveedores','fechaestimada','2013-01-09 15:43:04','1','3'),(145,'2013-01-09 03:42:51','2013-01-09 03:43:04','CHANGE','Pedidosproveedores','fechaaprobacion','2013-01-09 15:43:04','1','3'),(146,'activo','aprobado','CHANGE','Pedidosproveedores','estado','2013-01-09 15:43:04','1','3'),(147,'aprobado','impreso','CHANGE','Pedidosproveedores','estado','2013-01-09 15:43:13','1','3'),(148,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacen','','2013-01-10 10:35:05','1','6'),(149,'','1','SET','Pedidosproveedoresentradasalmacen','bodega_idbodega','2013-01-10 10:35:05','1','6'),(150,'','3','SET','Pedidosproveedoresentradasalmacen','pedidosproveedores_idpedidosproveedores','2013-01-10 10:35:05','1','6'),(151,'','1','SET','Pedidosproveedoresentradasalmacen','usuarios_idusuarios','2013-01-10 10:35:05','1','6'),(152,'','2013-01-10 10:35:05','SET','Pedidosproveedoresentradasalmacen','fecha','2013-01-10 10:35:05','1','6'),(153,'','6','SET','Pedidosproveedoresentradasalmacen','idpedidosproveedoresentradasalmacen','2013-01-10 10:35:05','1','6'),(154,NULL,NULL,'CREATE','Pedidosproveedores','','2013-01-10 10:36:32','1','7'),(155,'','1','SET','Pedidosproveedores','idproveedor','2013-01-10 10:36:32','1','7'),(156,'','1','SET','Pedidosproveedores','moneda_idmoneda','2013-01-10 10:36:32','1','7'),(157,'','1','SET','Pedidosproveedores','tipopedidosproveedores_idtipopedidosproveedores','2013-01-10 10:36:32','1','7'),(158,'','2013-01-09','SET','Pedidosproveedores','fechacierre','2013-01-10 10:36:32','1','7'),(159,'','2013-01-31','SET','Pedidosproveedores','fechaestimada','2013-01-10 10:36:32','1','7'),(160,'','lkmkmlmlmlkm','SET','Pedidosproveedores','descripcion','2013-01-10 10:36:32','1','7'),(161,'','kpkpkopkpkpkpok','SET','Pedidosproveedores','observaciones','2013-01-10 10:36:32','1','7'),(162,'','1','SET','Pedidosproveedores','usuariocreacion','2013-01-10 10:36:32','1','7'),(163,'','2013-01-10 10:36:32','SET','Pedidosproveedores','fechacreacion','2013-01-10 10:36:32','1','7'),(164,'','activo','SET','Pedidosproveedores','estado','2013-01-10 10:36:32','1','7'),(165,'','7','SET','Pedidosproveedores','idpedidosproveedores','2013-01-10 10:36:32','1','7'),(166,NULL,NULL,'CREATE','Pedidosproveedoresitems','','2013-01-10 10:36:52','1','15'),(167,'','7','SET','Pedidosproveedoresitems','pedidosproveedores_idpedidosproveedores','2013-01-10 10:36:52','1','15'),(168,'','1','SET','Pedidosproveedoresitems','item_iditem','2013-01-10 10:36:52','1','15'),(169,'','4','SET','Pedidosproveedoresitems','solicitado','2013-01-10 10:36:52','1','15'),(170,'','1','SET','Pedidosproveedoresitems','condicioncomercial_idcondicioncomercial','2013-01-10 10:36:52','1','15'),(171,'','activo','SET','Pedidosproveedoresitems','estado','2013-01-10 10:36:52','1','15'),(172,'','15','SET','Pedidosproveedoresitems','idpedidosproveedoresitems','2013-01-10 10:36:53','1','15'),(173,NULL,NULL,'CREATE','Pedidosproveedoresitems','','2013-01-10 10:37:07','1','16'),(174,'','7','SET','Pedidosproveedoresitems','pedidosproveedores_idpedidosproveedores','2013-01-10 10:37:07','1','16'),(175,'','1','SET','Pedidosproveedoresitems','item_iditem','2013-01-10 10:37:07','1','16'),(176,'','9','SET','Pedidosproveedoresitems','solicitado','2013-01-10 10:37:07','1','16'),(177,'','2','SET','Pedidosproveedoresitems','condicioncomercial_idcondicioncomercial','2013-01-10 10:37:08','1','16'),(178,'','activo','SET','Pedidosproveedoresitems','estado','2013-01-10 10:37:08','1','16'),(179,'','16','SET','Pedidosproveedoresitems','idpedidosproveedoresitems','2013-01-10 10:37:08','1','16'),(180,'','1','CHANGE','Pedidosproveedores','usuarioaprobacion','2013-01-10 10:37:33','1','7'),(181,'2013-01-31 00:00:00','2013-01-31','CHANGE','Pedidosproveedores','fechaestimada','2013-01-10 10:37:33','1','7'),(182,'','2013-01-10 10:37:33','CHANGE','Pedidosproveedores','fechaaprobacion','2013-01-10 10:37:33','1','7'),(183,'activo','aprobado','CHANGE','Pedidosproveedores','estado','2013-01-10 10:37:33','1','7'),(184,'2013-01-31 00:00:00','2013-01-31','CHANGE','Pedidosproveedores','fechaestimada','2013-01-10 10:37:43','1','7'),(185,'2013-01-10 10:37:33','2013-01-10 10:37:43','CHANGE','Pedidosproveedores','fechaaprobacion','2013-01-10 10:37:43','1','7'),(186,'','1','CHANGE','Pedidosproveedores','usuarioaprobacion','2013-01-10 10:38:00','1','6'),(187,'2013-01-30 00:00:00','2013-01-30','CHANGE','Pedidosproveedores','fechaestimada','2013-01-10 10:38:00','1','6'),(188,'','2013-01-10 10:38:00','CHANGE','Pedidosproveedores','fechaaprobacion','2013-01-10 10:38:00','1','6'),(189,'activo','aprobado','CHANGE','Pedidosproveedores','estado','2013-01-10 10:38:00','1','6'),(190,'aprobado','impreso','CHANGE','Pedidosproveedores','estado','2013-01-10 10:38:12','1','6'),(191,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacen','','2013-01-10 10:43:11','1','7'),(192,'','1','SET','Pedidosproveedoresentradasalmacen','bodega_idbodega','2013-01-10 10:43:11','1','7'),(193,'','6','SET','Pedidosproveedoresentradasalmacen','pedidosproveedores_idpedidosproveedores','2013-01-10 10:43:11','1','7'),(194,'','1','SET','Pedidosproveedoresentradasalmacen','usuarios_idusuarios','2013-01-10 10:43:11','1','7'),(195,'','2013-01-10 10:43:10','SET','Pedidosproveedoresentradasalmacen','fecha','2013-01-10 10:43:11','1','7'),(196,'','7','SET','Pedidosproveedoresentradasalmacen','idpedidosproveedoresentradasalmacen','2013-01-10 10:43:11','1','7'),(197,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacendetalle','','2013-01-10 10:43:11','1','7'),(198,'','7','SET','Pedidosproveedoresentradasalmacendetalle','idpedidosproveedoresentradasalmacen','2013-01-10 10:43:11','1','7'),(199,'','1','SET','Pedidosproveedoresentradasalmacendetalle','item_iditem','2013-01-10 10:43:11','1','7'),(200,'','2','SET','Pedidosproveedoresentradasalmacendetalle','condicioncomercial_idcondicioncomercial','2013-01-10 10:43:11','1','7'),(201,'','3','SET','Pedidosproveedoresentradasalmacendetalle','cantidad','2013-01-10 10:43:11','1','7'),(202,'','7','SET','Pedidosproveedoresentradasalmacendetalle','idpedidosproveedoresentradasalmacendetalle','2013-01-10 10:43:11','1','7'),(203,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacen','','2013-01-10 11:00:33','1','8'),(204,'','1','SET','Pedidosproveedoresentradasalmacen','bodega_idbodega','2013-01-10 11:00:33','1','8'),(205,'','6','SET','Pedidosproveedoresentradasalmacen','pedidosproveedores_idpedidosproveedores','2013-01-10 11:00:34','1','8'),(206,'','salida de almacen 234564','SET','Pedidosproveedoresentradasalmacen','documentoproveedor','2013-01-10 11:00:34','1','8'),(207,'','estas son las observaciones','SET','Pedidosproveedoresentradasalmacen','observaciones','2013-01-10 11:00:34','1','8'),(208,'','1','SET','Pedidosproveedoresentradasalmacen','usuarios_idusuarios','2013-01-10 11:00:34','1','8'),(209,'','2013-01-10 11:00:33','SET','Pedidosproveedoresentradasalmacen','fecha','2013-01-10 11:00:34','1','8'),(210,'','8','SET','Pedidosproveedoresentradasalmacen','idpedidosproveedoresentradasalmacen','2013-01-10 11:00:34','1','8'),(211,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacendetalle','','2013-01-10 11:00:34','1','8'),(212,'','8','SET','Pedidosproveedoresentradasalmacendetalle','idpedidosproveedoresentradasalmacen','2013-01-10 11:00:34','1','8'),(213,'','1','SET','Pedidosproveedoresentradasalmacendetalle','item_iditem','2013-01-10 11:00:34','1','8'),(214,'','2','SET','Pedidosproveedoresentradasalmacendetalle','condicioncomercial_idcondicioncomercial','2013-01-10 11:00:34','1','8'),(215,'','4','SET','Pedidosproveedoresentradasalmacendetalle','cantidad','2013-01-10 11:00:34','1','8'),(216,'','8','SET','Pedidosproveedoresentradasalmacendetalle','idpedidosproveedoresentradasalmacendetalle','2013-01-10 11:00:34','1','8'),(217,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacenfallados','','2013-01-10 11:00:34','1','2'),(218,'','8','SET','Pedidosproveedoresentradasalmacenfallados','idpedidosproveedoresentradasalmacen','2013-01-10 11:00:34','1','2'),(219,'','1','SET','Pedidosproveedoresentradasalmacenfallados','item_iditem','2013-01-10 11:00:34','1','2'),(220,'','2','SET','Pedidosproveedoresentradasalmacenfallados','cantidad','2013-01-10 11:00:34','1','2'),(221,'','observacioones del fallado','SET','Pedidosproveedoresentradasalmacenfallados','observaciones','2013-01-10 11:00:34','1','2'),(222,'','2','SET','Pedidosproveedoresentradasalmacenfallados','idpedidosproveedoresentradasalmacenfallados','2013-01-10 11:00:34','1','2'),(223,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacen','','2013-01-10 12:04:22','1','9'),(224,'','1','SET','Pedidosproveedoresentradasalmacen','bodega_idbodega','2013-01-10 12:04:22','1','9'),(225,'','6','SET','Pedidosproveedoresentradasalmacen','pedidosproveedores_idpedidosproveedores','2013-01-10 12:04:22','1','9'),(226,'','1','SET','Pedidosproveedoresentradasalmacen','usuarios_idusuarios','2013-01-10 12:04:22','1','9'),(227,'','2013-01-10 12:04:22','SET','Pedidosproveedoresentradasalmacen','fecha','2013-01-10 12:04:22','1','9'),(228,'','9','SET','Pedidosproveedoresentradasalmacen','idpedidosproveedoresentradasalmacen','2013-01-10 12:04:22','1','9'),(229,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacendetalle','','2013-01-10 12:04:22','1','9'),(230,'','9','SET','Pedidosproveedoresentradasalmacendetalle','idpedidosproveedoresentradasalmacen','2013-01-10 12:04:23','1','9'),(231,'','1','SET','Pedidosproveedoresentradasalmacendetalle','item_iditem','2013-01-10 12:04:23','1','9'),(232,'','2','SET','Pedidosproveedoresentradasalmacendetalle','condicioncomercial_idcondicioncomercial','2013-01-10 12:04:23','1','9'),(233,'','3','SET','Pedidosproveedoresentradasalmacendetalle','cantidad','2013-01-10 12:04:23','1','9'),(234,'','9','SET','Pedidosproveedoresentradasalmacendetalle','idpedidosproveedoresentradasalmacendetalle','2013-01-10 12:04:23','1','9'),(235,NULL,NULL,'CREATE','Pedidosproveedoresentradasalmacenfallados','','2013-01-10 12:04:23','1','3'),(236,'','9','SET','Pedidosproveedoresentradasalmacenfallados','idpedidosproveedoresentradasalmacen','2013-01-10 12:04:23','1','3'),(237,'','1','SET','Pedidosproveedoresentradasalmacenfallados','item_iditem','2013-01-10 12:04:23','1','3'),(238,'','2','SET','Pedidosproveedoresentradasalmacenfallados','cantidad','2013-01-10 12:04:23','1','3'),(239,'','2','SET','Pedidosproveedoresentradasalmacenfallados','condicioncomercial_idcondicioncomercial','2013-01-10 12:04:23','1','3'),(240,'','caratulas ralladas','SET','Pedidosproveedoresentradasalmacenfallados','observaciones','2013-01-10 12:04:23','1','3'),(241,'','3','SET','Pedidosproveedoresentradasalmacenfallados','idpedidosproveedoresentradasalmacenfallados','2013-01-10 12:04:23','1','3'),(242,NULL,NULL,'CREATE','Pedidosproveedores','','2013-01-10 14:15:26','1','8'),(243,'','1','SET','Pedidosproveedores','idproveedor','2013-01-10 14:15:26','1','8'),(244,'','1','SET','Pedidosproveedores','moneda_idmoneda','2013-01-10 14:15:26','1','8'),(245,'','1','SET','Pedidosproveedores','tipopedidosproveedores_idtipopedidosproveedores','2013-01-10 14:15:26','1','8'),(246,'','2013-01-11','SET','Pedidosproveedores','fechacierre','2013-01-10 14:15:26','1','8'),(247,'','2013-01-24','SET','Pedidosproveedores','fechaestimada','2013-01-10 14:15:26','1','8'),(248,'','1','SET','Pedidosproveedores','usuariocreacion','2013-01-10 14:15:26','1','8'),(249,'','2013-01-10 02:15:26','SET','Pedidosproveedores','fechacreacion','2013-01-10 14:15:26','1','8'),(250,'','activo','SET','Pedidosproveedores','estado','2013-01-10 14:15:26','1','8'),(251,'','8','SET','Pedidosproveedores','idpedidosproveedores','2013-01-10 14:15:26','1','8'),(252,NULL,NULL,'CREATE','Pedidosproveedores','','2013-01-10 14:46:50','1','9'),(253,'','1','SET','Pedidosproveedores','idproveedor','2013-01-10 14:46:50','1','9'),(254,'','1','SET','Pedidosproveedores','moneda_idmoneda','2013-01-10 14:46:50','1','9'),(255,'','1','SET','Pedidosproveedores','tipopedidosproveedores_idtipopedidosproveedores','2013-01-10 14:46:50','1','9'),(256,'','2013-01-02','SET','Pedidosproveedores','fechacierre','2013-01-10 14:46:50','1','9'),(257,'','2013-01-23','SET','Pedidosproveedores','fechaestimada','2013-01-10 14:46:50','1','9'),(258,'','kljjlkjkljklj','SET','Pedidosproveedores','descripcion','2013-01-10 14:46:50','1','9'),(259,'','klmlkmklm','SET','Pedidosproveedores','observaciones','2013-01-10 14:46:50','1','9'),(260,'','1','SET','Pedidosproveedores','usuariocreacion','2013-01-10 14:46:50','1','9'),(261,'','2013-01-10 02:46:50','SET','Pedidosproveedores','fechacreacion','2013-01-10 14:46:50','1','9'),(262,'','activo','SET','Pedidosproveedores','estado','2013-01-10 14:46:50','1','9'),(263,'','9','SET','Pedidosproveedores','idpedidosproveedores','2013-01-10 14:46:50','1','9'),(264,NULL,NULL,'CREATE','Pedidosproveedores','','2013-01-10 14:48:32','1','10'),(265,'','1','SET','Pedidosproveedores','idproveedor','2013-01-10 14:48:32','1','10'),(266,'','1','SET','Pedidosproveedores','moneda_idmoneda','2013-01-10 14:48:32','1','10'),(267,'','1','SET','Pedidosproveedores','tipopedidosproveedores_idtipopedidosproveedores','2013-01-10 14:48:32','1','10'),(268,'','2013-01-02','SET','Pedidosproveedores','fechacierre','2013-01-10 14:48:32','1','10'),(269,'','2013-01-17','SET','Pedidosproveedores','fechaestimada','2013-01-10 14:48:32','1','10'),(270,'','hhhhjnkmk lk l lk ','SET','Pedidosproveedores','descripcion','2013-01-10 14:48:32','1','10'),(271,'','mokpkpokop pokpok','SET','Pedidosproveedores','observaciones','2013-01-10 14:48:32','1','10'),(272,'','1','SET','Pedidosproveedores','usuariocreacion','2013-01-10 14:48:32','1','10'),(273,'','2013-01-10 02:48:32','SET','Pedidosproveedores','fechacreacion','2013-01-10 14:48:32','1','10'),(274,'','activo','SET','Pedidosproveedores','estado','2013-01-10 14:48:32','1','10'),(275,'','10','SET','Pedidosproveedores','idpedidosproveedores','2013-01-10 14:48:32','1','10'),(276,NULL,NULL,'CREATE','Pedidosproveedores','','2013-01-10 14:55:09','1','11'),(277,'','1','SET','Pedidosproveedores','idproveedor','2013-01-10 14:55:09','1','11'),(278,'','1','SET','Pedidosproveedores','moneda_idmoneda','2013-01-10 14:55:09','1','11'),(279,'','1','SET','Pedidosproveedores','tipopedidosproveedores_idtipopedidosproveedores','2013-01-10 14:55:09','1','11'),(280,'','1','SET','Pedidosproveedores','usuariocreacion','2013-01-10 14:55:09','1','11'),(281,'','2013-01-10 02:55:09','SET','Pedidosproveedores','fechacreacion','2013-01-10 14:55:09','1','11'),(282,'','activo','SET','Pedidosproveedores','estado','2013-01-10 14:55:09','1','11'),(283,'','11','SET','Pedidosproveedores','idpedidosproveedores','2013-01-10 14:55:09','1','11'),(284,NULL,NULL,'CREATE','Pedidosproveedores','','2013-01-10 14:56:54','1','12'),(285,'','1','SET','Pedidosproveedores','idproveedor','2013-01-10 14:56:54','1','12'),(286,'','1','SET','Pedidosproveedores','moneda_idmoneda','2013-01-10 14:56:54','1','12'),(287,'','1','SET','Pedidosproveedores','tipopedidosproveedores_idtipopedidosproveedores','2013-01-10 14:56:54','1','12'),(288,'','jlkjlkjklj','SET','Pedidosproveedores','descripcion','2013-01-10 14:56:54','1','12'),(289,'','kjmlkjkjj','SET','Pedidosproveedores','observaciones','2013-01-10 14:56:54','1','12'),(290,'','1','SET','Pedidosproveedores','usuariocreacion','2013-01-10 14:56:54','1','12'),(291,'','2013-01-10 02:56:54','SET','Pedidosproveedores','fechacreacion','2013-01-10 14:56:54','1','12'),(292,'','activo','SET','Pedidosproveedores','estado','2013-01-10 14:56:54','1','12'),(293,'','12','SET','Pedidosproveedores','idpedidosproveedores','2013-01-10 14:56:54','1','12'),(294,NULL,NULL,'CREATE','Pedidosproveedores','','2013-01-10 14:59:33','1','13'),(295,'','1','SET','Pedidosproveedores','idproveedor','2013-01-10 14:59:33','1','13'),(296,'','1','SET','Pedidosproveedores','moneda_idmoneda','2013-01-10 14:59:33','1','13'),(297,'','1','SET','Pedidosproveedores','tipopedidosproveedores_idtipopedidosproveedores','2013-01-10 14:59:33','1','13'),(298,'','1','SET','Pedidosproveedores','usuariocreacion','2013-01-10 14:59:33','1','13'),(299,'','2013-01-10 02:59:33','SET','Pedidosproveedores','fechacreacion','2013-01-10 14:59:33','1','13'),(300,'','activo','SET','Pedidosproveedores','estado','2013-01-10 14:59:33','1','13'),(301,'','13','SET','Pedidosproveedores','idpedidosproveedores','2013-01-10 14:59:33','1','13'),(302,NULL,NULL,'CREATE','Pedidosproveedoresdocumentos','','2013-01-10 14:59:33','1','1'),(303,'','comprobante.jpg','SET','Pedidosproveedoresdocumentos','url','2013-01-10 14:59:33','1','1'),(304,'','13','SET','Pedidosproveedoresdocumentos','pedidosproveedores_idpedidosproveedores','2013-01-10 14:59:33','1','1'),(305,'','1','SET','Pedidosproveedoresdocumentos','idpedidosproveedoresdocumentos','2013-01-10 14:59:33','1','1'),(334,NULL,NULL,'CREATE','Pedidosproveedores','','2013-01-10 15:12:29','1','16'),(335,'','1','SET','Pedidosproveedores','idproveedor','2013-01-10 15:12:29','1','16'),(336,'','1','SET','Pedidosproveedores','moneda_idmoneda','2013-01-10 15:12:29','1','16'),(337,'','1','SET','Pedidosproveedores','tipopedidosproveedores_idtipopedidosproveedores','2013-01-10 15:12:29','1','16'),(338,'','2013-01-03','SET','Pedidosproveedores','fechacierre','2013-01-10 15:12:29','1','16'),(339,'','llmlmlm','SET','Pedidosproveedores','descripcion','2013-01-10 15:12:29','1','16'),(340,'','1','SET','Pedidosproveedores','usuariocreacion','2013-01-10 15:12:29','1','16'),(341,'','2013-01-10 03:12:29','SET','Pedidosproveedores','fechacreacion','2013-01-10 15:12:29','1','16'),(342,'','activo','SET','Pedidosproveedores','estado','2013-01-10 15:12:29','1','16'),(343,'','16','SET','Pedidosproveedores','idpedidosproveedores','2013-01-10 15:12:29','1','16'),(344,NULL,NULL,'CREATE','Pedidosproveedoresdocumentos','','2013-01-10 15:12:29','1','4'),(345,'','bandera.png','SET','Pedidosproveedoresdocumentos','url','2013-01-10 15:12:29','1','4'),(346,'','16','SET','Pedidosproveedoresdocumentos','pedidosproveedores_idpedidosproveedores','2013-01-10 15:12:29','1','4'),(347,'','4','SET','Pedidosproveedoresdocumentos','idpedidosproveedoresdocumentos','2013-01-10 15:12:29','1','4'),(374,NULL,NULL,'CREATE','Pedidosproveedores','','2013-01-10 15:48:37','1','19'),(375,'','1','SET','Pedidosproveedores','idproveedor','2013-01-10 15:48:37','1','19'),(376,'','1','SET','Pedidosproveedores','moneda_idmoneda','2013-01-10 15:48:37','1','19'),(377,'','1','SET','Pedidosproveedores','tipopedidosproveedores_idtipopedidosproveedores','2013-01-10 15:48:37','1','19'),(378,'','1','SET','Pedidosproveedores','usuariocreacion','2013-01-10 15:48:37','1','19'),(379,'','2013-01-10 03:48:37','SET','Pedidosproveedores','fechacreacion','2013-01-10 15:48:37','1','19'),(380,'','activo','SET','Pedidosproveedores','estado','2013-01-10 15:48:37','1','19'),(381,'','19','SET','Pedidosproveedores','idpedidosproveedores','2013-01-10 15:48:37','1','19'),(382,NULL,NULL,'CREATE','Pedidosproveedoresdocumentos','','2013-01-10 15:48:37','1','7'),(383,'','uploadedfiles/pedidosproveedoresdocumentos/19/comprobante.jpg','SET','Pedidosproveedoresdocumentos','url','2013-01-10 15:48:37','1','7'),(384,'','19','SET','Pedidosproveedoresdocumentos','pedidosproveedores_idpedidosproveedores','2013-01-10 15:48:37','1','7'),(385,'','comprobante.jpg','SET','Pedidosproveedoresdocumentos','nombre','2013-01-10 15:48:37','1','7'),(386,'','7','SET','Pedidosproveedoresdocumentos','idpedidosproveedoresdocumentos','2013-01-10 15:48:37','1','7'),(387,NULL,NULL,'CREATE','Tiposdocumentosanexos','','2013-01-10 16:07:56','1','1'),(388,'','url','SET','Tiposdocumentosanexos','nombre','2013-01-10 16:07:56','1','1'),(389,'','1','SET','Tiposdocumentosanexos','idtiposdocumentosanexos','2013-01-10 16:07:56','1','1'),(390,NULL,NULL,'CREATE','Tiposdocumentosanexos','','2013-01-10 16:08:10','1','2'),(391,'','archivo','SET','Tiposdocumentosanexos','nombre','2013-01-10 16:08:10','1','2'),(392,'','2','SET','Tiposdocumentosanexos','idtiposdocumentosanexos','2013-01-10 16:08:10','1','2'),(393,NULL,NULL,'CREATE','Pedidosproveedores','','2013-01-10 16:35:25','1','20'),(394,'','1','SET','Pedidosproveedores','idproveedor','2013-01-10 16:35:25','1','20'),(395,'','1','SET','Pedidosproveedores','moneda_idmoneda','2013-01-10 16:35:25','1','20'),(396,'','1','SET','Pedidosproveedores','tipopedidosproveedores_idtipopedidosproveedores','2013-01-10 16:35:25','1','20'),(397,'','kjnkjnkn','SET','Pedidosproveedores','descripcion','2013-01-10 16:35:25','1','20'),(398,'','1','SET','Pedidosproveedores','usuariocreacion','2013-01-10 16:35:25','1','20'),(399,'','2013-01-10 04:35:25','SET','Pedidosproveedores','fechacreacion','2013-01-10 16:35:25','1','20'),(400,'','activo','SET','Pedidosproveedores','estado','2013-01-10 16:35:25','1','20'),(401,'','20','SET','Pedidosproveedores','idpedidosproveedores','2013-01-10 16:35:25','1','20'),(402,NULL,NULL,'CREATE','Pedidosproveedoresdocumentos','','2013-01-10 16:35:25','1','8'),(403,'','uploadedfiles/pedidosproveedoresdocumentos/20/comprobante.jpg','SET','Pedidosproveedoresdocumentos','url','2013-01-10 16:35:25','1','8'),(404,'','20','SET','Pedidosproveedoresdocumentos','pedidosproveedores_idpedidosproveedores','2013-01-10 16:35:25','1','8'),(405,'','comprobante.jpg','SET','Pedidosproveedoresdocumentos','nombre','2013-01-10 16:35:25','1','8'),(406,'','1','SET','Pedidosproveedoresdocumentos','tiposdocumentosanexos_idtiposdocumentosanexos','2013-01-10 16:35:25','1','8'),(407,'','8','SET','Pedidosproveedoresdocumentos','idpedidosproveedoresdocumentos','2013-01-10 16:35:25','1','8');
/*!40000 ALTER TABLE `tbl_audit_trail` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-11  8:18:40