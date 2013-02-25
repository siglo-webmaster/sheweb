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
-- Table structure for table `pedidosproveedores`
--

DROP TABLE IF EXISTS `pedidosproveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosproveedores` (
  `idpedidosproveedores` int(11) NOT NULL AUTO_INCREMENT,
  `usuariocreacion` bigint(20) DEFAULT NULL,
  `usuarioaprobacion` bigint(20) DEFAULT NULL,
  `idproveedor` int(11) NOT NULL,
  `moneda_idmoneda` int(11) NOT NULL,
  `fechacreacion` timestamp NULL DEFAULT NULL,
  `fechacierre` timestamp NULL DEFAULT NULL,
  `fechaestimada` timestamp NULL DEFAULT NULL,
  `fechaaprobacion` timestamp NULL DEFAULT NULL,
  `fechaentrada` timestamp NULL DEFAULT NULL,
  `fechaliberacion` timestamp NULL DEFAULT NULL,
  `descripcion` text,
  `observaciones` text,
  `estado` varchar(45) DEFAULT NULL,
  `tipopedidosproveedores_idtipopedidosproveedores` int(11) NOT NULL,
  `tipostransporte_idtipostransporte` int(11) NOT NULL,
  PRIMARY KEY (`idpedidosproveedores`),
  KEY `fk_pedidosproveedores_terceros1` (`idproveedor`),
  KEY `fk_pedidosproveedores_moneda1` (`moneda_idmoneda`),
  KEY `fk_pedidosproveedores_usuariocreacion` (`usuariocreacion`),
  KEY `fk_pedidosproveedores_usuarioaprobacion` (`usuarioaprobacion`),
  KEY `fk_pedidosproveedores_tipopedidosproveedores1` (`tipopedidosproveedores_idtipopedidosproveedores`),
  KEY `fk_pedidosproveedores_tipostransporte1` (`tipostransporte_idtipostransporte`),
  CONSTRAINT `fk_pedidosproveedores_tipopedidosproveedores1` FOREIGN KEY (`tipopedidosproveedores_idtipopedidosproveedores`) REFERENCES `tipopedidosproveedores` (`idtipopedidosproveedores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedores_tipostransporte1` FOREIGN KEY (`tipostransporte_idtipostransporte`) REFERENCES `tipostransporte` (`idtipostransporte`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedores_moneda1` FOREIGN KEY (`moneda_idmoneda`) REFERENCES `moneda` (`idmoneda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedores_terceros1` FOREIGN KEY (`idproveedor`) REFERENCES `terceros` (`idterceros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedores_usuarioaprobacion` FOREIGN KEY (`usuarioaprobacion`) REFERENCES `usergroups_user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_pedidosproveedores_usuariocreacion` FOREIGN KEY (`usuariocreacion`) REFERENCES `usergroups_user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosproveedores`
--

LOCK TABLES `pedidosproveedores` WRITE;
/*!40000 ALTER TABLE `pedidosproveedores` DISABLE KEYS */;
INSERT INTO `pedidosproveedores` VALUES (1,1,1,1,1,'2013-01-02 09:40:40','2013-01-10 05:00:00','2013-01-23 05:00:00','2013-01-08 13:43:31',NULL,NULL,'adfdsafsadf','dsafsadfsadf','cerrado',0,0),(2,1,1,1,1,'2013-01-08 14:48:40','2013-01-01 05:00:00','2013-01-24 05:00:00','2013-01-08 14:48:58',NULL,NULL,'msañASDAdasda','adaDAdas','impreso',0,0),(3,1,1,1,1,'2013-01-08 15:38:58','2013-01-02 05:00:00','2013-01-09 05:00:00','2013-01-09 08:43:04',NULL,NULL,'mkmlmlkm','kmklmlkm','cerrado',1,0),(4,1,1,1,1,'2013-01-08 08:56:58','2013-01-02 05:00:00','2013-01-16 05:00:00','2013-01-09 06:34:18',NULL,NULL,'oijijiojoijoij','','impreso',0,0),(5,1,1,2,1,'2013-01-08 09:07:47','0000-00-00 00:00:00','2013-01-30 05:00:00','2013-01-09 08:40:14',NULL,NULL,'kmmlmklm','','aprobado',1,0),(6,1,1,1,1,'2013-01-09 14:41:35','2013-01-02 05:00:00','2013-01-30 05:00:00','2013-01-10 15:38:00',NULL,NULL,'esta es la descripcion del asunto','estas son las observaciones','impreso',2,0),(7,1,1,1,1,'2013-01-10 15:36:32','2013-01-09 05:00:00','2013-01-31 05:00:00','2013-01-10 15:37:43',NULL,NULL,'lkmkmlmlmlkm','kpkpkopkpkpkpok','aprobado',1,0),(8,1,NULL,1,1,'2013-01-10 07:15:26','2013-01-11 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(9,1,NULL,1,1,'2013-01-10 07:46:50','2013-01-02 05:00:00','2013-01-23 05:00:00',NULL,NULL,NULL,'kljjlkjkljklj','klmlkmklm','activo',1,0),(10,1,NULL,1,1,'2013-01-10 07:48:32','2013-01-02 05:00:00','2013-01-17 05:00:00',NULL,NULL,NULL,'hhhhjnkmk lk l lk ','mokpkpokop pokpok','activo',1,1),(11,1,NULL,1,1,'2013-01-10 07:55:09','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'','','activo',1,0),(12,1,NULL,1,1,'2013-01-10 07:56:54','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'jlkjlkjklj','kjmlkjkjj','activo',1,0),(13,1,NULL,1,1,'2013-01-10 07:59:33','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'','','activo',1,0),(16,1,NULL,1,1,'2013-01-10 08:12:29','2013-01-03 05:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'llmlmlm','','activo',1,0),(19,1,NULL,1,1,'2013-01-10 08:48:37','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'','','activo',1,0),(20,1,1,1,1,'2013-01-10 09:35:25','0000-00-00 00:00:00','0000-00-00 00:00:00','2013-01-11 16:43:50',NULL,NULL,'kjnkjnkn','','aprobado',1,0),(21,1,NULL,1,1,'2013-01-11 14:14:13','2013-01-02 05:00:00','2013-01-23 05:00:00',NULL,NULL,NULL,'ghdfgh','dhdhdhdfh','activo',1,0),(22,1,NULL,1,1,'2013-01-11 14:16:12','2013-01-03 05:00:00','2013-01-25 05:00:00',NULL,NULL,NULL,'fdsdg','dfghdh','activo',1,0),(23,1,NULL,1,1,'2013-01-11 14:17:55','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'','','activo',1,0),(24,1,NULL,1,1,'2013-01-11 14:19:19','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'','','activo',1,0),(25,1,NULL,1,1,'2013-01-11 14:20:07','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'','','activo',1,0),(26,1,NULL,1,1,'2013-01-11 14:21:26','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'','','activo',1,0),(27,1,NULL,1,1,'2013-01-11 14:22:12','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'','','activo',1,0),(29,1,NULL,1,1,'2013-01-11 14:27:55','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'','','activo',1,0),(30,1,NULL,1,1,'2013-01-11 14:28:16','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'','','activo',1,0),(31,1,NULL,1,1,'2013-01-11 14:32:09','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'','','activo',1,0),(32,1,NULL,1,1,'2013-01-11 14:34:51','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'','','activo',1,0),(33,1,NULL,1,1,'2013-01-11 14:37:22','2013-01-10 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(34,1,NULL,1,1,'2013-01-11 15:12:39','2013-01-22 05:00:00','2013-01-30 05:00:00',NULL,NULL,NULL,'rtyhehhd','dghdhdhdhdfh','activo',1,0),(36,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(38,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(39,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(40,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(41,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(42,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(43,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(44,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(45,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(46,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(47,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(48,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(49,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(50,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(51,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(52,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(53,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(54,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(55,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(56,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(57,1,NULL,1,1,'2013-01-11 15:49:55','2013-01-02 05:00:00','2013-01-24 05:00:00',NULL,NULL,NULL,'','','activo',1,0),(58,1,1,2,1,'2013-01-11 10:44:08','0000-00-00 00:00:00','0000-00-00 00:00:00','2013-01-14 14:48:03',NULL,NULL,'','','impreso',1,0),(59,1,1,1,1,'2013-01-14 13:27:24','0000-00-00 00:00:00','0000-00-00 00:00:00','2013-01-14 13:40:04',NULL,NULL,'','','impreso',1,0),(60,1,1,1,1,'2013-01-14 13:27:24','0000-00-00 00:00:00','0000-00-00 00:00:00','2013-01-14 14:11:04',NULL,NULL,'','','impreso',1,0),(61,1,NULL,1,1,'2013-01-16 16:34:10','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,'','','activo',1,1);
/*!40000 ALTER TABLE `pedidosproveedores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-16 17:33:54
