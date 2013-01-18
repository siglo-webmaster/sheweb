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
-- Table structure for table `pedidosproveedoresentradasalmacen`
--

DROP TABLE IF EXISTS `pedidosproveedoresentradasalmacen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosproveedoresentradasalmacen` (
  `idpedidosproveedoresentradasalmacen` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NULL DEFAULT NULL,
  `documentoproveedor` varchar(255) DEFAULT NULL,
  `observaciones` text,
  `bodega_idbodega` int(11) NOT NULL,
  `pedidosproveedores_idpedidosproveedores` int(11) NOT NULL,
  `usuarios_idusuarios` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`idpedidosproveedoresentradasalmacen`),
  KEY `fk_pedidosproveedoresentradasalmacen_bodega1` (`bodega_idbodega`),
  KEY `fk_pedidosproveedoresentradasalmacen_pedidosproveedores1` (`pedidosproveedores_idpedidosproveedores`),
  KEY `fk_pedidosproveedoresentradasalmacen_usuario` (`usuarios_idusuarios`),
  CONSTRAINT `fk_pedidosproveedoresentradasalmacen_bodega1` FOREIGN KEY (`bodega_idbodega`) REFERENCES `bodega` (`idbodega`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedoresentradasalmacen_pedidosproveedores1` FOREIGN KEY (`pedidosproveedores_idpedidosproveedores`) REFERENCES `pedidosproveedores` (`idpedidosproveedores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedoresentradasalmacen_usuario` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usergroups_user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosproveedoresentradasalmacen`
--

LOCK TABLES `pedidosproveedoresentradasalmacen` WRITE;
/*!40000 ALTER TABLE `pedidosproveedoresentradasalmacen` DISABLE KEYS */;
INSERT INTO `pedidosproveedoresentradasalmacen` VALUES (1,'2013-01-02 10:31:38',NULL,'wqqsqwsqws',1,1,1),(2,'2013-01-08 17:00:17',NULL,'',1,2,1),(3,'2013-01-09 07:41:34',NULL,'',1,4,1),(4,'2013-01-09 07:53:26',NULL,'',1,4,1),(5,'2013-01-09 07:55:35',NULL,'',1,4,1),(6,'2013-01-10 15:35:05',NULL,'',1,3,1),(7,'2013-01-10 15:43:10',NULL,'',1,6,1),(8,'2013-01-10 16:00:33','salida de almacen 234564','estas son las observaciones',1,6,1),(9,'2013-01-10 17:04:22','','',1,6,1),(10,'2013-01-14 13:41:21','t','gjg',1,59,1),(11,'2013-01-18 16:45:19','7668','76858',1,58,1),(12,'2013-01-18 17:23:26','sdfsdf','sdfsdfsdf',1,58,1);
/*!40000 ALTER TABLE `pedidosproveedoresentradasalmacen` ENABLE KEYS */;
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
