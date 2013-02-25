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
  PRIMARY KEY (`idpedidosproveedores`),
  KEY `fk_pedidosproveedores_terceros1` (`idproveedor`),
  KEY `fk_pedidosproveedores_moneda1` (`moneda_idmoneda`),
  KEY `fk_pedidosproveedores_usuariocreacion` (`usuariocreacion`),
  KEY `fk_pedidosproveedores_usuarioaprobacion` (`usuarioaprobacion`),
  KEY `fk_pedidosproveedores_tipopedidosproveedores1` (`tipopedidosproveedores_idtipopedidosproveedores`),
  CONSTRAINT `fk_pedidosproveedores_tipopedidosproveedores1` FOREIGN KEY (`tipopedidosproveedores_idtipopedidosproveedores`) REFERENCES `tipopedidosproveedores` (`idtipopedidosproveedores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedores_moneda1` FOREIGN KEY (`moneda_idmoneda`) REFERENCES `moneda` (`idmoneda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedores_terceros1` FOREIGN KEY (`idproveedor`) REFERENCES `terceros` (`idterceros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedores_usuarioaprobacion` FOREIGN KEY (`usuarioaprobacion`) REFERENCES `usergroups_user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_pedidosproveedores_usuariocreacion` FOREIGN KEY (`usuariocreacion`) REFERENCES `usergroups_user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosproveedores`
--

LOCK TABLES `pedidosproveedores` WRITE;
/*!40000 ALTER TABLE `pedidosproveedores` DISABLE KEYS */;
INSERT INTO `pedidosproveedores` VALUES (1,1,1,1,1,'2013-01-02 09:40:40','2013-01-10 05:00:00','2013-01-23 05:00:00','2013-01-08 13:43:31',NULL,NULL,'adfdsafsadf','dsafsadfsadf','cerrado',0),(2,1,1,1,1,'2013-01-08 14:48:40','2013-01-01 05:00:00','2013-01-24 05:00:00','2013-01-08 14:48:58',NULL,NULL,'msañASDAdasda','adaDAdas','impreso',0),(3,1,1,1,1,'2013-01-08 15:38:58','2013-01-02 05:00:00','2013-01-09 05:00:00','2013-01-09 08:43:04',NULL,NULL,'mkmlmlkm','kmklmlkm','impreso',1),(4,1,1,1,1,'2013-01-08 08:56:58','2013-01-02 05:00:00','2013-01-16 05:00:00','2013-01-09 06:34:18',NULL,NULL,'oijijiojoijoij','','impreso',0),(5,1,1,2,1,'2013-01-08 09:07:47','0000-00-00 00:00:00','2013-01-30 05:00:00','2013-01-09 08:40:14',NULL,NULL,'kmmlmklm','','aprobado',1),(6,1,NULL,1,1,'2013-01-09 14:41:35','2013-01-02 05:00:00','2013-01-30 05:00:00',NULL,NULL,NULL,'esta es la descripcion del asunto','estas son las observaciones','activo',2);
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

-- Dump completed on 2013-01-09 16:00:06
