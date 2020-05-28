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
-- Table structure for table `songs`
--

DROP TABLE IF EXISTS `songs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `songs` (
  `SongID` int(11) NOT NULL AUTO_INCREMENT,
  `SongName` varchar(220) NOT NULL,
  `ArtistID` int(11) NOT NULL,
  `UploadedDate` date NOT NULL,
  `Genre` varchar(10) NOT NULL,
  `AlbumArtSrc` varchar(255) DEFAULT NULL,
  `Duration` varchar(255) DEFAULT NULL,
  `Description` text,
  `year` int(11) DEFAULT NULL,
  `SongSrc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`SongID`),
  KEY `fk_2` (`ArtistID`),
  CONSTRAINT `fk_2` FOREIGN KEY (`ArtistID`) REFERENCES `artists` (`ArtistID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1011 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `songs`
--

LOCK TABLES `songs` WRITE;
/*!40000 ALTER TABLE `songs` DISABLE KEYS */;
INSERT INTO `songs` VALUES (1001,'Mal Mitak Thiyanna',1001,'2019-08-28','Pop','/uploads/songs/albumart/mal_mitak.jpg','03:40','Description of the song Mal mitak ',2015,'/uploads/songs/mal_mitak.mp3'),(1002,'Eka wasanthayaka',1001,'2019-08-28','Pop','/uploads/songs/albumart/eka_wasanthayaka.jpg','03:40','Description of the song Eka wasanthayaka',2014,'/uploads/songs/Eka_Wasanthayaka.mp3'),(1003,'Meedum dumaraye',1001,'2019-08-28','Pop','/uploads/songs/albumart/Meedum_Dumaraye.jpg','03:41','Description of the song Meedum dumaraye',2015,'/uploads/songs/Meedum_Dumaraye.mp3'),(1004,'Chakithaya',1002,'2019-08-28','Pop','/uploads/songs/albumart/Chakithaya.jpg','03:23','Description of the song Chakithaya',2016,'/uploads/songs/Chakithaya.mp3'),(1005,'Sanda Raajini',1002,'2019-08-28','Classical','/uploads/songs/albumart/Sanda_Rajini.jpg','03:40','Description of the song Sanda Raajini',2017,'/uploads/songs/Sanda_Rajini.mp3'),(1006,'Kuweni',1003,'2019-08-28','Pop','/uploads/songs/albumart/Kuweni.jpg','03:42','Description of the song Kuweni',2015,'/uploads/songs/Kuweni.mp3'),(1007,'Naadagam Geeya',1003,'2019-08-28','Pop','/uploads/songs/albumart/Nadagam_Geeya.jpg','03:05','Description of the song Naadagam Geeya',2016,'/uploads/songs/Nadagam_Geeya.mp3'),(1008,'Sansaraye Maa',1003,'2019-08-28','Pop','/uploads/songs/albumart/Sansaraye_Ma.jpg','03:40','Description of the song Sansaraye Maa',2018,'/uploads/songs/Sansaraye_Ma.mp3'),(1010,'Galana Gaga ',1004,'2019-08-29','Pop','/uploads/songs/albumart/5d67a895505602.45057827.jpg','02:56','Hello',2017,'/uploads/songs/5d67a895507d48.88896942.mp3');
/*!40000 ALTER TABLE `songs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-30 16:10:28
