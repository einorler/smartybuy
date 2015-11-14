-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: localhost    Database: pirkiniu_sarasas
-- ------------------------------------------------------
-- Server version	5.6.24

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
-- Table structure for table `prekes`
--

DROP TABLE IF EXISTS `prekes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prekes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prekes`
--

LOCK TABLES `prekes` WRITE;
/*!40000 ALTER TABLE `prekes` DISABLE KEYS */;
INSERT INTO `prekes` VALUES (28,'suris','Angelina'),(31,'pienas','Angelina'),(59,'keÄiupas','Mantas'),(80,'bulvÄ—s','angelina'),(89,'bananai','mantas'),(91,'svogÅ«nai','mantas'),(94,'duona','mantas'),(95,'bulvÄ—s','mantas');
/*!40000 ALTER TABLE `prekes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saldytuvas`
--

DROP TABLE IF EXISTS `saldytuvas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `saldytuvas` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `user` varchar(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `yra` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saldytuvas`
--

LOCK TABLES `saldytuvas` WRITE;
/*!40000 ALTER TABLE `saldytuvas` DISABLE KEYS */;
INSERT INTO `saldytuvas` VALUES (1,'keciupas','mantas','saldytuvas',1),(3,'pienas','mantas','saldytuvas',1),(4,'suris','mantas','saldytuvas',1),(6,'grietine','mantas','saldytuvas',1),(8,'majonezas','mantas','saldytuvas',1),(9,'kiausiniai','mantas','saldytuvas',1),(10,'kibinai','mantas','saldytuvas',1),(11,'bananai','mantas','bendros',0),(12,'rabarbarai','mantas','bendros',1),(14,'Medus','mantas','indauja',0),(15,'Cukrus','mantas','indauja',1),(16,'DantÅ³ pasta','mantas','buitis',1),(17,'Tualetinis popierius','mantas','buitis',0),(18,'UogienÄ—','mantas','indauja',1),(19,'vanduo','mantas','bendros',0),(20,'Muilas','mantas','buitis',1),(23,'iug','mantas','saldytuvas',1),(38,'Grybai','Mantas','bendros',1),(39,'qwrqw','mantas','bendros',1);
/*!40000 ALTER TABLE `saldytuvas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vartotojai`
--

DROP TABLE IF EXISTS `vartotojai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vartotojai` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vartotojai`
--

LOCK TABLES `vartotojai` WRITE;
/*!40000 ALTER TABLE `vartotojai` DISABLE KEYS */;
INSERT INTO `vartotojai` VALUES ('Angelina','mantas'),('Mantas','560333'),('pirkiniai','mantas'),('testas','testas');
/*!40000 ALTER TABLE `vartotojai` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-14 13:09:06
