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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoriapadre` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `raiz` tinyint(1) NOT NULL,
  PRIMARY KEY (`idcategoria`),
  KEY `fk_categoria_categoria1` (`idcategoriapadre`),
  CONSTRAINT `fk_categoria_categoria1` FOREIGN KEY (`idcategoriapadre`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,NULL,'Humanidades',1),(2,NULL,'Derecho',1),(3,NULL,'Medicina',1),(4,2,'Derecho civil',0);
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usergroups_access`
--

DROP TABLE IF EXISTS `usergroups_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usergroups_access` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `element` int(3) NOT NULL,
  `element_id` bigint(20) NOT NULL,
  `module` varchar(140) NOT NULL,
  `controller` varchar(140) NOT NULL,
  `permission` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usergroups_access`
--

LOCK TABLES `usergroups_access` WRITE;
/*!40000 ALTER TABLE `usergroups_access` DISABLE KEYS */;
INSERT INTO `usergroups_access` VALUES (1,2,3,'Parametros','pais','read'),(2,2,4,'Parametros','pais','read'),(3,2,4,'Parametros','pais','write'),(4,2,4,'Parametros','pais','admin');
/*!40000 ALTER TABLE `usergroups_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidosproveedores_has_pedidosproveedoresentradasalmacen`
--

DROP TABLE IF EXISTS `pedidosproveedores_has_pedidosproveedoresentradasalmacen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosproveedores_has_pedidosproveedoresentradasalmacen` (
  `idpedidosproveedores` int(11) NOT NULL,
  `idpedidosproveedoresentradasalmacen` int(11) NOT NULL,
  PRIMARY KEY (`idpedidosproveedores`,`idpedidosproveedoresentradasalmacen`),
  KEY `fk_pedidosproveedores_has_pedidosproveedoresentradasalmacen_p2` (`idpedidosproveedoresentradasalmacen`),
  KEY `fk_pedidosproveedores_has_pedidosproveedoresentradasalmacen_p1` (`idpedidosproveedores`),
  CONSTRAINT `fk_pedidosproveedores_has_pedidosproveedoresentradasalmacen_p1` FOREIGN KEY (`idpedidosproveedores`) REFERENCES `pedidosproveedores` (`idpedidosproveedores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedores_has_pedidosproveedoresentradasalmacen_p2` FOREIGN KEY (`idpedidosproveedoresentradasalmacen`) REFERENCES `pedidosproveedoresentradasalmacen` (`idpedidosproveedoresentradasalmacen`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosproveedores_has_pedidosproveedoresentradasalmacen`
--

LOCK TABLES `pedidosproveedores_has_pedidosproveedoresentradasalmacen` WRITE;
/*!40000 ALTER TABLE `pedidosproveedores_has_pedidosproveedoresentradasalmacen` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidosproveedores_has_pedidosproveedoresentradasalmacen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `view_pedidosproveedoresitems`
--

DROP TABLE IF EXISTS `view_pedidosproveedoresitems`;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitems`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_pedidosproveedoresitems` (
  `idpedidosproveedoresitems` tinyint NOT NULL,
  `pedidosproveedores_idpedidosproveedores` tinyint NOT NULL,
  `item_iditem` tinyint NOT NULL,
  `solicitado` tinyint NOT NULL,
  `reservado` tinyint NOT NULL,
  `recibido` tinyint NOT NULL,
  `estado` tinyint NOT NULL,
  `usuarios_idusuarios` tinyint NOT NULL,
  `username` tinyint NOT NULL,
  `nombre` tinyint NOT NULL,
  `isbn` tinyint NOT NULL,
  `barcode` tinyint NOT NULL,
  `fechaedicion` tinyint NOT NULL,
  `fechacreacion` tinyint NOT NULL,
  `temporal` tinyint NOT NULL,
  `ideditorial` tinyint NOT NULL,
  `nombreeditorial` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

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

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudad` (
  `idciudad` int(11) NOT NULL AUTO_INCREMENT,
  `departamento_iddepartamento` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idciudad`),
  KEY `fk_ciudad_departamento1` (`departamento_iddepartamento`),
  CONSTRAINT `fk_ciudad_departamento1` FOREIGN KEY (`departamento_iddepartamento`) REFERENCES `departamento` (`iddepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudad`
--

LOCK TABLES `ciudad` WRITE;
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
INSERT INTO `ciudad` VALUES (1,1,'Bogota D.C.');
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_has_tipoformato`
--

DROP TABLE IF EXISTS `item_has_tipoformato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_has_tipoformato` (
  `item_iditem` int(11) NOT NULL,
  `tipoformato_idtipoformato` int(11) NOT NULL,
  PRIMARY KEY (`item_iditem`,`tipoformato_idtipoformato`),
  KEY `fk_item_has_tipoformato_tipoformato1` (`tipoformato_idtipoformato`),
  KEY `fk_item_has_tipoformato_item1` (`item_iditem`),
  CONSTRAINT `fk_item_has_tipoformato_item1` FOREIGN KEY (`item_iditem`) REFERENCES `item` (`iditem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_has_tipoformato_tipoformato1` FOREIGN KEY (`tipoformato_idtipoformato`) REFERENCES `tipoformato` (`idtipoformato`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_has_tipoformato`
--

LOCK TABLES `item_has_tipoformato` WRITE;
/*!40000 ALTER TABLE `item_has_tipoformato` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_has_tipoformato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moneda`
--

DROP TABLE IF EXISTS `moneda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moneda` (
  `idmoneda` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmoneda`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moneda`
--

LOCK TABLES `moneda` WRITE;
/*!40000 ALTER TABLE `moneda` DISABLE KEYS */;
INSERT INTO `moneda` VALUES (1,'COP'),(2,'USD'),(3,'EUR');
/*!40000 ALTER TABLE `moneda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiposidentificacion`
--

DROP TABLE IF EXISTS `tiposidentificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tiposidentificacion` (
  `idtiposidentificacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtiposidentificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiposidentificacion`
--

LOCK TABLES `tiposidentificacion` WRITE;
/*!40000 ALTER TABLE `tiposidentificacion` DISABLE KEYS */;
INSERT INTO `tiposidentificacion` VALUES (1,'cedula'),(2,'nit'),(3,'cedula extrangeria');
/*!40000 ALTER TABLE `tiposidentificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `view_pedidosproveedores`
--

DROP TABLE IF EXISTS `view_pedidosproveedores`;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedores`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_pedidosproveedores` (
  `idpedidosproveedores` tinyint NOT NULL,
  `usuariocreacion` tinyint NOT NULL,
  `usernamecreacion` tinyint NOT NULL,
  `usuarioaprobacion` tinyint NOT NULL,
  `usernameaprobacion` tinyint NOT NULL,
  `idproveedor` tinyint NOT NULL,
  `nombreproveedor` tinyint NOT NULL,
  `moneda_idmoneda` tinyint NOT NULL,
  `nombremoneda` tinyint NOT NULL,
  `fechacreacion` tinyint NOT NULL,
  `fechacierre` tinyint NOT NULL,
  `fechaaprobacion` tinyint NOT NULL,
  `fechaestimada` tinyint NOT NULL,
  `fechaentrada` tinyint NOT NULL,
  `fechaliberacion` tinyint NOT NULL,
  `descripcion` tinyint NOT NULL,
  `observaciones` tinyint NOT NULL,
  `estado` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `tipoformato`
--

DROP TABLE IF EXISTS `tipoformato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipoformato` (
  `idtipoformato` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipoformato`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoformato`
--

LOCK TABLES `tipoformato` WRITE;
/*!40000 ALTER TABLE `tipoformato` DISABLE KEYS */;
INSERT INTO `tipoformato` VALUES (1,'digital'),(2,'impreso'),(3,'pdo');
/*!40000 ALTER TABLE `tipoformato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidosproveedoresentradasalmacenfallados`
--

DROP TABLE IF EXISTS `pedidosproveedoresentradasalmacenfallados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosproveedoresentradasalmacenfallados` (
  `idpedidosproveedoresentradasalmacenfallados` int(11) NOT NULL AUTO_INCREMENT,
  `idpedidosproveedoresentradasalmacen` int(11) NOT NULL,
  `item_iditem` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`idpedidosproveedoresentradasalmacenfallados`),
  KEY `fk_pedidosproveedoresentradasalmacenfallados_pedidosproveedor1` (`idpedidosproveedoresentradasalmacen`),
  KEY `fk_pedidosproveedoresentradasalmacenfallados_item1` (`item_iditem`),
  CONSTRAINT `fk_pedidosproveedoresentradasalmacenfallados_pedidosproveedor1` FOREIGN KEY (`idpedidosproveedoresentradasalmacen`) REFERENCES `pedidosproveedoresentradasalmacen` (`idpedidosproveedoresentradasalmacen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedoresentradasalmacenfallados_item1` FOREIGN KEY (`item_iditem`) REFERENCES `item` (`iditem`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosproveedoresentradasalmacenfallados`
--

LOCK TABLES `pedidosproveedoresentradasalmacenfallados` WRITE;
/*!40000 ALTER TABLE `pedidosproveedoresentradasalmacenfallados` DISABLE KEYS */;
INSERT INTO `pedidosproveedoresentradasalmacenfallados` VALUES (1,1,1,1,'sdasdasd');
/*!40000 ALTER TABLE `pedidosproveedoresentradasalmacenfallados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidosproveedoresitemdetallereserva`
--

DROP TABLE IF EXISTS `pedidosproveedoresitemdetallereserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosproveedoresitemdetallereserva` (
  `idpedidosproveedoresitemdetallereserva` int(11) NOT NULL AUTO_INCREMENT,
  `pedidosproveedoresitems_idpedidosproveedoresitems` int(11) NOT NULL,
  `bodega_idbodega` int(11) NOT NULL,
  `usuarios_idusuarios` bigint(20) DEFAULT NULL,
  `reservado` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpedidosproveedoresitemdetallereserva`),
  KEY `fk_pedidosproveedoresitemdetallereserva_bodega1` (`bodega_idbodega`),
  KEY `fk_pedidosproveedoresitemdetallereserva_pedidosproveedoresite1` (`pedidosproveedoresitems_idpedidosproveedoresitems`),
  KEY `fk_pedidosproveedoresitemdetallereserva_idusuario` (`usuarios_idusuarios`),
  CONSTRAINT `fk_pedidosproveedoresitemdetallereserva_idusuario` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usergroups_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedoresitemdetallereserva_bodega1` FOREIGN KEY (`bodega_idbodega`) REFERENCES `bodega` (`idbodega`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedoresitemdetallereserva_pedidosproveedoresite1` FOREIGN KEY (`pedidosproveedoresitems_idpedidosproveedoresitems`) REFERENCES `pedidosproveedoresitems` (`idpedidosproveedoresitems`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosproveedoresitemdetallereserva`
--

LOCK TABLES `pedidosproveedoresitemdetallereserva` WRITE;
/*!40000 ALTER TABLE `pedidosproveedoresitemdetallereserva` DISABLE KEYS */;
INSERT INTO `pedidosproveedoresitemdetallereserva` VALUES (2,2,1,1,12);
/*!40000 ALTER TABLE `pedidosproveedoresitemdetallereserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `view_pedidosproveedoresentradasalmacendetalle`
--

DROP TABLE IF EXISTS `view_pedidosproveedoresentradasalmacendetalle`;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresentradasalmacendetalle`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_pedidosproveedoresentradasalmacendetalle` (
  `idpedidosproveedoresentradasalmacendetalle` tinyint NOT NULL,
  `idpedidosproveedoresentradasalmacen` tinyint NOT NULL,
  `item_iditem` tinyint NOT NULL,
  `cantidad` tinyint NOT NULL,
  `nombre` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `terceros`
--

DROP TABLE IF EXISTS `terceros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terceros` (
  `idterceros` int(11) NOT NULL AUTO_INCREMENT,
  `tiposidentificacion_idtiposidentificacion` int(11) NOT NULL,
  `ciudad_idciudad` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `identificacion` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `contacto` varchar(128) DEFAULT NULL,
  `telefonocontacto` varchar(45) DEFAULT NULL,
  `direccion` varchar(128) DEFAULT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`idterceros`),
  KEY `fk_terceros_tiposidentificacion1` (`tiposidentificacion_idtiposidentificacion`),
  KEY `fk_terceros_ciudad1` (`ciudad_idciudad`),
  CONSTRAINT `fk_terceros_tiposidentificacion1` FOREIGN KEY (`tiposidentificacion_idtiposidentificacion`) REFERENCES `tiposidentificacion` (`idtiposidentificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_terceros_ciudad1` FOREIGN KEY (`ciudad_idciudad`) REFERENCES `ciudad` (`idciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terceros`
--

LOCK TABLES `terceros` WRITE;
/*!40000 ALTER TABLE `terceros` DISABLE KEYS */;
INSERT INTO `terceros` VALUES (1,1,1,'PUBLIDISA','982380932798327','6554465','carlos@jojo.com','Carlos Augusto Torres Dias','n876yolh98oh90','cll 22 # 34 - 55','activo'),(2,2,1,'tirant','8987987','6554465','897yukj90yuhk','89yh98yky9','987987987','87oh098gh98yo','activo');
/*!40000 ALTER TABLE `terceros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidosproveedoresentradasalmacen`
--

DROP TABLE IF EXISTS `pedidosproveedoresentradasalmacen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosproveedoresentradasalmacen` (
  `idpedidosproveedoresentradasalmacen` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NULL DEFAULT NULL,
  `observaciones` text,
  `bodega_idbodega` int(11) NOT NULL,
  `pedidosproveedores_idpedidosproveedores` int(11) NOT NULL,
  `usuarios_idusuarios` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`idpedidosproveedoresentradasalmacen`),
  KEY `fk_pedidosproveedoresentradasalmacen_bodega1` (`bodega_idbodega`),
  KEY `fk_pedidosproveedoresentradasalmacen_pedidosproveedores1` (`pedidosproveedores_idpedidosproveedores`),
  KEY `fk_pedidosproveedoresentradasalmacen_usuario` (`usuarios_idusuarios`),
  CONSTRAINT `fk_pedidosproveedoresentradasalmacen_usuario` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usergroups_user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_pedidosproveedoresentradasalmacen_bodega1` FOREIGN KEY (`bodega_idbodega`) REFERENCES `bodega` (`idbodega`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedoresentradasalmacen_pedidosproveedores1` FOREIGN KEY (`pedidosproveedores_idpedidosproveedores`) REFERENCES `pedidosproveedores` (`idpedidosproveedores`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosproveedoresentradasalmacen`
--

LOCK TABLES `pedidosproveedoresentradasalmacen` WRITE;
/*!40000 ALTER TABLE `pedidosproveedoresentradasalmacen` DISABLE KEYS */;
INSERT INTO `pedidosproveedoresentradasalmacen` VALUES (1,'2013-01-02 10:31:38','wqqsqwsqws',1,1,1);
/*!40000 ALTER TABLE `pedidosproveedoresentradasalmacen` ENABLE KEYS */;
UNLOCK TABLES;

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
  PRIMARY KEY (`idpedidosproveedores`),
  KEY `fk_pedidosproveedores_terceros1` (`idproveedor`),
  KEY `fk_pedidosproveedores_moneda1` (`moneda_idmoneda`),
  KEY `fk_pedidosproveedores_usuariocreacion` (`usuariocreacion`),
  KEY `fk_pedidosproveedores_usuarioaprobacion` (`usuarioaprobacion`),
  CONSTRAINT `fk_pedidosproveedores_usuarioaprobacion` FOREIGN KEY (`usuarioaprobacion`) REFERENCES `usergroups_user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_pedidosproveedores_terceros1` FOREIGN KEY (`idproveedor`) REFERENCES `terceros` (`idterceros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedores_usuariocreacion` FOREIGN KEY (`usuariocreacion`) REFERENCES `usergroups_user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosproveedores`
--

LOCK TABLES `pedidosproveedores` WRITE;
/*!40000 ALTER TABLE `pedidosproveedores` DISABLE KEYS */;
INSERT INTO `pedidosproveedores` VALUES (1,1,NULL,1,1,'2013-01-02 09:40:40','2013-01-10 05:00:00','2013-01-23 05:00:00',NULL,NULL,NULL,'adfdsafsadf','dsafsadfsadf','activo');
/*!40000 ALTER TABLE `pedidosproveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usergroups_group`
--

DROP TABLE IF EXISTS `usergroups_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usergroups_group` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(120) NOT NULL,
  `level` int(6) DEFAULT NULL,
  `home` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `groupname` (`groupname`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usergroups_group`
--

LOCK TABLES `usergroups_group` WRITE;
/*!40000 ALTER TABLE `usergroups_group` DISABLE KEYS */;
INSERT INTO `usergroups_group` VALUES (1,'root',100,NULL),(2,'user',1,'/userGroups'),(3,'asesoresComerciales',70,'/site'),(4,'adminInventarios',30,'/categoria');
/*!40000 ALTER TABLE `usergroups_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terceros_has_tiposterceros`
--

DROP TABLE IF EXISTS `terceros_has_tiposterceros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terceros_has_tiposterceros` (
  `terceros_idterceros` int(11) NOT NULL,
  `tiposterceros_idtiposterceros` int(11) NOT NULL,
  PRIMARY KEY (`terceros_idterceros`,`tiposterceros_idtiposterceros`),
  KEY `fk_terceros_has_tiposterceros_tiposterceros1` (`tiposterceros_idtiposterceros`),
  KEY `fk_terceros_has_tiposterceros_terceros1` (`terceros_idterceros`),
  CONSTRAINT `fk_terceros_has_tiposterceros_terceros1` FOREIGN KEY (`terceros_idterceros`) REFERENCES `terceros` (`idterceros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_terceros_has_tiposterceros_tiposterceros1` FOREIGN KEY (`tiposterceros_idtiposterceros`) REFERENCES `tiposterceros` (`idtiposterceros`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terceros_has_tiposterceros`
--

LOCK TABLES `terceros_has_tiposterceros` WRITE;
/*!40000 ALTER TABLE `terceros_has_tiposterceros` DISABLE KEYS */;
INSERT INTO `terceros_has_tiposterceros` VALUES (1,2),(2,2);
/*!40000 ALTER TABLE `terceros_has_tiposterceros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamento` (
  `iddepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `pais_idpais` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`iddepartamento`),
  KEY `fk_departamento_pais1` (`pais_idpais`),
  CONSTRAINT `fk_departamento_pais1` FOREIGN KEY (`pais_idpais`) REFERENCES `pais` (`idpais`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (1,1,'Bogota D.C.');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `autor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autor` (
  `idautor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) NOT NULL,
  `apellido` varchar(128) NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`idautor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autor`
--

LOCK TABLES `autor` WRITE;
/*!40000 ALTER TABLE `autor` DISABLE KEYS */;
INSERT INTO `autor` VALUES (1,'Juan antonio','Rulfo','activo'),(2,'Pepito','Perez ','activo');
/*!40000 ALTER TABLE `autor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_has_categoria`
--

DROP TABLE IF EXISTS `item_has_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_has_categoria` (
  `item_iditem` int(11) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL,
  PRIMARY KEY (`item_iditem`,`categoria_idcategoria`),
  KEY `fk_item_has_categoria_categoria1` (`categoria_idcategoria`),
  KEY `fk_item_has_categoria_item1` (`item_iditem`),
  CONSTRAINT `fk_item_has_categoria_item1` FOREIGN KEY (`item_iditem`) REFERENCES `item` (`iditem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_has_categoria_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_has_categoria`
--

LOCK TABLES `item_has_categoria` WRITE;
/*!40000 ALTER TABLE `item_has_categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_has_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_has_terceros`
--

DROP TABLE IF EXISTS `item_has_terceros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_has_terceros` (
  `item_iditem` int(11) NOT NULL,
  `terceros_idterceros` int(11) NOT NULL,
  PRIMARY KEY (`item_iditem`,`terceros_idterceros`),
  KEY `fk_item_has_terceros_terceros1` (`terceros_idterceros`),
  KEY `fk_item_has_terceros_item1` (`item_iditem`),
  CONSTRAINT `fk_item_has_terceros_item1` FOREIGN KEY (`item_iditem`) REFERENCES `item` (`iditem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_has_terceros_terceros1` FOREIGN KEY (`terceros_idterceros`) REFERENCES `terceros` (`idterceros`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='item - proveedores\n';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_has_terceros`
--

LOCK TABLES `item_has_terceros` WRITE;
/*!40000 ALTER TABLE `item_has_terceros` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_has_terceros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usergroups_lookup`
--

DROP TABLE IF EXISTS `usergroups_lookup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usergroups_lookup` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `element` varchar(20) DEFAULT NULL,
  `value` int(5) DEFAULT NULL,
  `text` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usergroups_lookup`
--

LOCK TABLES `usergroups_lookup` WRITE;
/*!40000 ALTER TABLE `usergroups_lookup` DISABLE KEYS */;
INSERT INTO `usergroups_lookup` VALUES (1,'status',0,'banned'),(2,'status',1,'waiting activation'),(3,'status',2,'waiting approval'),(4,'status',3,'password change request'),(5,'status',4,'active');
/*!40000 ALTER TABLE `usergroups_lookup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pais`
--

DROP TABLE IF EXISTS `pais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pais` (
  `idpais` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpais`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pais`
--

LOCK TABLES `pais` WRITE;
/*!40000 ALTER TABLE `pais` DISABLE KEYS */;
INSERT INTO `pais` VALUES (1,'Colombia');
/*!40000 ALTER TABLE `pais` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usergroups_user`
--

LOCK TABLES `usergroups_user` WRITE;
/*!40000 ALTER TABLE `usergroups_user` DISABLE KEYS */;
INSERT INTO `usergroups_user` VALUES (1,1,'admin','cdaf21e7430ad7172f95bb3f5ac494d9','oborja@siglodelhombre.com','/userGroups/admin/documentation',4,'9*456/345*345+345/43345+8/534-23423+5!*2323/23!','no se','2013-01-02 15:37:35',NULL,NULL,'2013-01-02 20:38:42',NULL,NULL),(2,3,'hjimenez','94c434664deccadb172a75ce8556cae6','hjimenez@siglodelhombre.com',NULL,4,NULL,NULL,'2013-01-02 16:17:58',NULL,NULL,'2013-01-02 21:18:10',NULL,NULL),(3,4,'fteatino','25817d7d349dad0a49b3f0811ca5b611','fteatino@siglodelhombre.com',NULL,4,NULL,NULL,'2013-01-02 16:22:42',NULL,NULL,'2013-01-02 21:28:34',NULL,NULL);
/*!40000 ALTER TABLE `usergroups_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `view_pedidosproveedoresitemsagrupado`
--

DROP TABLE IF EXISTS `view_pedidosproveedoresitemsagrupado`;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitemsagrupado`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_pedidosproveedoresitemsagrupado` (
  `idpedidosproveedoresitems` tinyint NOT NULL,
  `pedidosproveedores_idpedidosproveedores` tinyint NOT NULL,
  `item_iditem` tinyint NOT NULL,
  `nombre` tinyint NOT NULL,
  `solicitado` tinyint NOT NULL,
  `recibido` tinyint NOT NULL,
  `reservado` tinyint NOT NULL,
  `estado` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `pedidosproveedoresitems`
--

DROP TABLE IF EXISTS `pedidosproveedoresitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosproveedoresitems` (
  `idpedidosproveedoresitems` int(11) NOT NULL AUTO_INCREMENT,
  `pedidosproveedores_idpedidosproveedores` int(11) NOT NULL,
  `item_iditem` int(11) NOT NULL,
  `solicitado` int(11) DEFAULT NULL,
  `recibido` int(11) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpedidosproveedoresitems`),
  KEY `fk_pedidosproveedoresitems_pedidosproveedores1` (`pedidosproveedores_idpedidosproveedores`),
  KEY `fk_pedidosproveedoresitems_item1` (`item_iditem`),
  CONSTRAINT `fk_pedidosproveedoresitems_pedidosproveedores1` FOREIGN KEY (`pedidosproveedores_idpedidosproveedores`) REFERENCES `pedidosproveedores` (`idpedidosproveedores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedoresitems_item1` FOREIGN KEY (`item_iditem`) REFERENCES `item` (`iditem`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosproveedoresitems`
--

LOCK TABLES `pedidosproveedoresitems` WRITE;
/*!40000 ALTER TABLE `pedidosproveedoresitems` DISABLE KEYS */;
INSERT INTO `pedidosproveedoresitems` VALUES (2,1,1,1,3,'activo'),(3,1,2,23,0,'activo');
/*!40000 ALTER TABLE `pedidosproveedoresitems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidosproveedoresentradasalmacendetalle`
--

DROP TABLE IF EXISTS `pedidosproveedoresentradasalmacendetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosproveedoresentradasalmacendetalle` (
  `idpedidosproveedoresentradasalmacendetalle` int(11) NOT NULL AUTO_INCREMENT,
  `idpedidosproveedoresentradasalmacen` int(11) NOT NULL,
  `item_iditem` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpedidosproveedoresentradasalmacendetalle`),
  KEY `fk_pedidosproveedoresentradasalmacendetalle_pedidosproveedore1` (`idpedidosproveedoresentradasalmacen`),
  KEY `fk_pedidosproveedoresentradasalmacendetalle_item1` (`item_iditem`),
  CONSTRAINT `fk_pedidosproveedoresentradasalmacendetalle_pedidosproveedore1` FOREIGN KEY (`idpedidosproveedoresentradasalmacen`) REFERENCES `pedidosproveedoresentradasalmacen` (`idpedidosproveedoresentradasalmacen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedoresentradasalmacendetalle_item1` FOREIGN KEY (`item_iditem`) REFERENCES `item` (`iditem`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosproveedoresentradasalmacendetalle`
--

LOCK TABLES `pedidosproveedoresentradasalmacendetalle` WRITE;
/*!40000 ALTER TABLE `pedidosproveedoresentradasalmacendetalle` DISABLE KEYS */;
INSERT INTO `pedidosproveedoresentradasalmacendetalle` VALUES (1,1,1,3);
/*!40000 ALTER TABLE `pedidosproveedoresentradasalmacendetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_has_autor`
--

DROP TABLE IF EXISTS `item_has_autor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_has_autor` (
  `item_iditem` int(11) NOT NULL,
  `autor_idautor` int(11) NOT NULL,
  PRIMARY KEY (`item_iditem`,`autor_idautor`),
  KEY `fk_item_has_autor_autor1` (`autor_idautor`),
  KEY `fk_item_has_autor_item1` (`item_iditem`),
  CONSTRAINT `fk_item_has_autor_item1` FOREIGN KEY (`item_iditem`) REFERENCES `item` (`iditem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_has_autor_autor1` FOREIGN KEY (`autor_idautor`) REFERENCES `autor` (`idautor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_has_autor`
--

LOCK TABLES `item_has_autor` WRITE;
/*!40000 ALTER TABLE `item_has_autor` DISABLE KEYS */;
INSERT INTO `item_has_autor` VALUES (1,2);
/*!40000 ALTER TABLE `item_has_autor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiposterceros`
--

DROP TABLE IF EXISTS `tiposterceros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tiposterceros` (
  `idtiposterceros` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtiposterceros`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiposterceros`
--

LOCK TABLES `tiposterceros` WRITE;
/*!40000 ALTER TABLE `tiposterceros` DISABLE KEYS */;
INSERT INTO `tiposterceros` VALUES (1,'cliente'),(2,'proveedor');
/*!40000 ALTER TABLE `tiposterceros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `view_pedidosproveedoresitemscorto`
--

DROP TABLE IF EXISTS `view_pedidosproveedoresitemscorto`;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitemscorto`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_pedidosproveedoresitemscorto` (
  `idppi` tinyint NOT NULL,
  `idpp` tinyint NOT NULL,
  `iditem` tinyint NOT NULL,
  `nombre` tinyint NOT NULL,
  `solicitado` tinyint NOT NULL,
  `recibido` tinyint NOT NULL,
  `estado` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `iditem` int(11) NOT NULL AUTO_INCREMENT,
  `editorial_ideditorial` int(11) NOT NULL,
  `nombre` varchar(512) DEFAULT NULL,
  `isbn` varchar(45) DEFAULT NULL,
  `barcode` varchar(45) DEFAULT NULL,
  `fechaedicion` date DEFAULT NULL,
  `fechacreacion` timestamp NULL DEFAULT NULL,
  `temporal` tinyint(1) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`iditem`),
  KEY `fk_item_editorial1` (`editorial_ideditorial`),
  CONSTRAINT `fk_item_editorial1` FOREIGN KEY (`editorial_ideditorial`) REFERENCES `editorial` (`ideditorial`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,1,'teoria general de conjuntos','1213123123','213243245437346','0000-00-00',NULL,1,'activo'),(2,1,'Gente de Aritama. La personalidad cultural de una aldea mestiza de Colombia, La','978-958-716-504-3','154235234','2012-01-01',NULL,1,'activo');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidosproveedoresdocumentos`
--

DROP TABLE IF EXISTS `pedidosproveedoresdocumentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosproveedoresdocumentos` (
  `idpedidosproveedoresdocumentos` int(11) NOT NULL AUTO_INCREMENT,
  `pedidosproveedores_idpedidosproveedores` int(11) NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`idpedidosproveedoresdocumentos`),
  KEY `fk_pedidosprovedoresdocumentos_pedidosproveedores1` (`pedidosproveedores_idpedidosproveedores`),
  CONSTRAINT `fk_pedidosprovedoresdocumentos_pedidosproveedores1` FOREIGN KEY (`pedidosproveedores_idpedidosproveedores`) REFERENCES `pedidosproveedores` (`idpedidosproveedores`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosproveedoresdocumentos`
--

LOCK TABLES `pedidosproveedoresdocumentos` WRITE;
/*!40000 ALTER TABLE `pedidosproveedoresdocumentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidosproveedoresdocumentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `editorial`
--

DROP TABLE IF EXISTS `editorial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `editorial` (
  `ideditorial` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`ideditorial`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `editorial`
--

LOCK TABLES `editorial` WRITE;
/*!40000 ALTER TABLE `editorial` DISABLE KEYS */;
INSERT INTO `editorial` VALUES (1,'alfaguara','activo'),(2,'Catarata','activo'),(3,'Siglo del Hombre Editores','activo');
/*!40000 ALTER TABLE `editorial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usergroups_cron`
--

DROP TABLE IF EXISTS `usergroups_cron`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usergroups_cron` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `lapse` int(6) DEFAULT NULL,
  `last_occurrence` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usergroups_cron`
--

LOCK TABLES `usergroups_cron` WRITE;
/*!40000 ALTER TABLE `usergroups_cron` DISABLE KEYS */;
INSERT INTO `usergroups_cron` VALUES (1,'garbage_collection',7,'2013-01-02 00:00:00'),(2,'unban',1,'2013-01-02 00:00:00');
/*!40000 ALTER TABLE `usergroups_cron` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bodega`
--

DROP TABLE IF EXISTS `bodega`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bodega` (
  `idbodega` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`idbodega`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bodega`
--

LOCK TABLES `bodega` WRITE;
/*!40000 ALTER TABLE `bodega` DISABLE KEYS */;
INSERT INTO `bodega` VALUES (1,'Principal calle 26','activo'),(2,'FILBO','activo'),(3,'Libreria Lerner Centro','activo'),(4,'Libreria Lerner Norte','activo');
/*!40000 ALTER TABLE `bodega` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `view_pedidosproveedoresitemdetallereserva`
--

DROP TABLE IF EXISTS `view_pedidosproveedoresitemdetallereserva`;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitemdetallereserva`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_pedidosproveedoresitemdetallereserva` (
  `idpedidosproveedoresitemdetallereserva` tinyint NOT NULL,
  `usuarios_idusuarios` tinyint NOT NULL,
  `username` tinyint NOT NULL,
  `bodega_idbodega` tinyint NOT NULL,
  `nombrebodega` tinyint NOT NULL,
  `reservado` tinyint NOT NULL,
  `solicitado` tinyint NOT NULL,
  `idpedidosproveedoresitems` tinyint NOT NULL,
  `item_iditem` tinyint NOT NULL,
  `nombre` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `view_pedidosproveedoresitems`
--

/*!50001 DROP TABLE IF EXISTS `view_pedidosproveedoresitems`*/;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitems`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_pedidosproveedoresitems` AS select `ppi`.`idpedidosproveedoresitems` AS `idpedidosproveedoresitems`,`ppi`.`pedidosproveedores_idpedidosproveedores` AS `pedidosproveedores_idpedidosproveedores`,`ppi`.`item_iditem` AS `item_iditem`,`ppi`.`solicitado` AS `solicitado`,`pid`.`reservado` AS `reservado`,`ppi`.`recibido` AS `recibido`,`ppi`.`estado` AS `estado`,`pid`.`usuarios_idusuarios` AS `usuarios_idusuarios`,`u`.`username` AS `username`,`i`.`nombre` AS `nombre`,`i`.`isbn` AS `isbn`,`i`.`barcode` AS `barcode`,`i`.`fechaedicion` AS `fechaedicion`,`i`.`fechacreacion` AS `fechacreacion`,`i`.`temporal` AS `temporal`,`e`.`ideditorial` AS `ideditorial`,`e`.`nombre` AS `nombreeditorial` from ((((`pedidosproveedoresitems` `ppi` join `item` `i` on((`i`.`iditem` = `ppi`.`item_iditem`))) join `editorial` `e` on((`e`.`ideditorial` = `i`.`editorial_ideditorial`))) left join `pedidosproveedoresitemdetallereserva` `pid` on((`ppi`.`idpedidosproveedoresitems` = `pid`.`pedidosproveedoresitems_idpedidosproveedoresitems`))) left join `usergroups_user` `u` on((`u`.`id` = `pid`.`usuarios_idusuarios`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_pedidosproveedores`
--

/*!50001 DROP TABLE IF EXISTS `view_pedidosproveedores`*/;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedores`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_pedidosproveedores` AS select `pp`.`idpedidosproveedores` AS `idpedidosproveedores`,`pp`.`usuariocreacion` AS `usuariocreacion`,`uc`.`username` AS `usernamecreacion`,`pp`.`usuarioaprobacion` AS `usuarioaprobacion`,`ua`.`username` AS `usernameaprobacion`,`pp`.`idproveedor` AS `idproveedor`,`t`.`nombre` AS `nombreproveedor`,`pp`.`moneda_idmoneda` AS `moneda_idmoneda`,`m`.`nombre` AS `nombremoneda`,`pp`.`fechacreacion` AS `fechacreacion`,`pp`.`fechacierre` AS `fechacierre`,`pp`.`fechaaprobacion` AS `fechaaprobacion`,`pp`.`fechaestimada` AS `fechaestimada`,`pp`.`fechaentrada` AS `fechaentrada`,`pp`.`fechaliberacion` AS `fechaliberacion`,`pp`.`descripcion` AS `descripcion`,`pp`.`observaciones` AS `observaciones`,`pp`.`estado` AS `estado` from ((((`pedidosproveedores` `pp` join `terceros` `t` on((`t`.`idterceros` = `pp`.`idproveedor`))) join `moneda` `m` on((`m`.`idmoneda` = `pp`.`moneda_idmoneda`))) left join `usergroups_user` `uc` on((`uc`.`id` = `pp`.`usuariocreacion`))) left join `usergroups_user` `ua` on((`ua`.`id` = `pp`.`usuariocreacion`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_pedidosproveedoresentradasalmacendetalle`
--

/*!50001 DROP TABLE IF EXISTS `view_pedidosproveedoresentradasalmacendetalle`*/;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresentradasalmacendetalle`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_pedidosproveedoresentradasalmacendetalle` AS select `d`.`idpedidosproveedoresentradasalmacendetalle` AS `idpedidosproveedoresentradasalmacendetalle`,`d`.`idpedidosproveedoresentradasalmacen` AS `idpedidosproveedoresentradasalmacen`,`d`.`item_iditem` AS `item_iditem`,`d`.`cantidad` AS `cantidad`,`i`.`nombre` AS `nombre` from (`pedidosproveedoresentradasalmacendetalle` `d` join `item` `i` on((`i`.`iditem` = `d`.`item_iditem`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_pedidosproveedoresitemsagrupado`
--

/*!50001 DROP TABLE IF EXISTS `view_pedidosproveedoresitemsagrupado`*/;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitemsagrupado`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_pedidosproveedoresitemsagrupado` AS select `view_pedidosproveedoresitems`.`idpedidosproveedoresitems` AS `idpedidosproveedoresitems`,`view_pedidosproveedoresitems`.`pedidosproveedores_idpedidosproveedores` AS `pedidosproveedores_idpedidosproveedores`,`view_pedidosproveedoresitems`.`item_iditem` AS `item_iditem`,`view_pedidosproveedoresitems`.`nombre` AS `nombre`,`view_pedidosproveedoresitems`.`solicitado` AS `solicitado`,`view_pedidosproveedoresitems`.`recibido` AS `recibido`,sum(`view_pedidosproveedoresitems`.`reservado`) AS `reservado`,`view_pedidosproveedoresitems`.`estado` AS `estado` from `view_pedidosproveedoresitems` group by `view_pedidosproveedoresitems`.`idpedidosproveedoresitems`,`view_pedidosproveedoresitems`.`pedidosproveedores_idpedidosproveedores`,`view_pedidosproveedoresitems`.`item_iditem`,`view_pedidosproveedoresitems`.`nombre`,`view_pedidosproveedoresitems`.`solicitado`,`view_pedidosproveedoresitems`.`recibido` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_pedidosproveedoresitemscorto`
--

/*!50001 DROP TABLE IF EXISTS `view_pedidosproveedoresitemscorto`*/;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitemscorto`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_pedidosproveedoresitemscorto` AS select distinct `view_pedidosproveedoresitemsagrupado`.`idpedidosproveedoresitems` AS `idppi`,`view_pedidosproveedoresitemsagrupado`.`pedidosproveedores_idpedidosproveedores` AS `idpp`,`view_pedidosproveedoresitemsagrupado`.`item_iditem` AS `iditem`,`view_pedidosproveedoresitemsagrupado`.`nombre` AS `nombre`,`view_pedidosproveedoresitemsagrupado`.`solicitado` AS `solicitado`,`view_pedidosproveedoresitemsagrupado`.`recibido` AS `recibido`,`view_pedidosproveedoresitemsagrupado`.`estado` AS `estado` from `view_pedidosproveedoresitemsagrupado` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_pedidosproveedoresitemdetallereserva`
--

/*!50001 DROP TABLE IF EXISTS `view_pedidosproveedoresitemdetallereserva`*/;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitemdetallereserva`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_pedidosproveedoresitemdetallereserva` AS select `d`.`idpedidosproveedoresitemdetallereserva` AS `idpedidosproveedoresitemdetallereserva`,`d`.`usuarios_idusuarios` AS `usuarios_idusuarios`,`u`.`username` AS `username`,`d`.`bodega_idbodega` AS `bodega_idbodega`,`b`.`nombre` AS `nombrebodega`,`d`.`reservado` AS `reservado`,`ppi`.`solicitado` AS `solicitado`,`ppi`.`idpedidosproveedoresitems` AS `idpedidosproveedoresitems`,`ppi`.`item_iditem` AS `item_iditem`,`i`.`nombre` AS `nombre` from ((((`pedidosproveedoresitemdetallereserva` `d` join `bodega` `b` on((`b`.`idbodega` = `d`.`bodega_idbodega`))) join `usergroups_user` `u` on((`u`.`id` = `d`.`usuarios_idusuarios`))) join `pedidosproveedoresitems` `ppi` on((`ppi`.`idpedidosproveedoresitems` = `d`.`pedidosproveedoresitems_idpedidosproveedoresitems`))) join `item` `i` on((`i`.`iditem` = `ppi`.`item_iditem`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-02 17:38:07
