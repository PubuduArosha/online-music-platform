-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: music_streaming
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `playlists`
--

DROP TABLE IF EXISTS `playlists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playlists` (
  `PlaylistID` int(11) NOT NULL AUTO_INCREMENT,
  `PlaylistName` varchar(120) NOT NULL,
  `ListnerID` int(11) NOT NULL,
  `ArtworkSrc` varchar(255) DEFAULT NULL,
  `CreatedDate` date NOT NULL,
  `Description` text,
  `Privacy` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`PlaylistID`),
  KEY `fk_8` (`ListnerID`),
  CONSTRAINT `fk_8` FOREIGN KEY (`ListnerID`) REFERENCES `listeners` (`ListnerID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1010 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlists`
--

LOCK TABLES `playlists` WRITE;
/*!40000 ALTER TABLE `playlists` DISABLE KEYS */;
INSERT INTO `playlists` VALUES (1001,'Low Volume Funk',1002,'/uploads/Playlists/02.jpg  ','2019-08-28',NULL,0),(1002,'Relax Music',1002,'/uploads/Playlists/01.png   ','2019-08-28',NULL,0),(1003,'Rhythms',1004,'/uploads/Playlists/03.png   ','2019-08-28',NULL,1),(1004,'New Music',1004,'/uploads/Playlists/04.jpg  ','2019-08-28',NULL,1),(1005,'Study',1002,'/uploads/Playlists/05.jpg   ','2019-08-28',NULL,0),(1006,'Tendancy',1002,'/uploads/Playlists/06.jpg   ','2019-08-28',NULL,1),(1008,'Happy',1002,'/uploads/Playlists/5d67cadd9f2a80.08168213.jpg','2019-08-29','Play this when um happy',1);
/*!40000 ALTER TABLE `playlists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-30 16:10:24
