-- MariaDB dump 10.19  Distrib 10.5.19-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u484575716_tunasjayamulia
-- ------------------------------------------------------
-- Server version	10.5.19-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner` (
  `banner_id` varchar(10) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(120) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `createdon` datetime DEFAULT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES ('613ac29a75','','','','613ac29a75.jpg','Fickar','2021-09-10 00:00:00'),('613ac2a642','','','','613ac2a642.jpg','Fickar','2021-09-10 00:00:00'),('613ac2b896','','','','613ac2b896.jpg','Fickar','2021-09-10 00:00:00'),('613ac2c717','','','','613ac2c717.jpg','Fickar','2021-09-10 00:00:00'),('613ac2d2df','','','','613ac2d2df.jpg','Fickar','2021-09-10 00:00:00'),('6322a07b04','','','','6322a07b04ba2.jpg','admin','2022-09-15 00:00:00'),('6322a08a91','','','','6322a08a910c0.jpg','admin','2022-09-15 00:00:00'),('6322a09ad1','','','','6322a09ad1fbf.jpg','admin','2022-09-15 00:00:00'),('6322a0acb3','','','','6322a0acb315e.jpg','admin','2022-09-15 00:00:00');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `gallery_id` varchar(10) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(120) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `createdon` datetime DEFAULT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES ('6139c101bb','Kanopi Besi Hollo','','Kanopi dengan Besi Hollo Atap Alderon','6139c101bb84e.jpg','Fickar','2021-09-09 00:00:00'),('6139c1df28','Kanopi Besi Hollo','','Kanopi dengan besi Hollo atap solartuff','6139c1df287fc.jpg','Fickar','2021-09-09 00:00:00'),('6139c9669b','Kanopi Besi Hollo','','Kanopi Besi Hollo dengan atap alderon','6139c9669b711.jpg','Fickar','2021-09-09 00:00:00'),('613ad5dcb7','Pagar Rumah','','Pagar Rumah dengan besi tempa ','613ad5dcb70d0.jpg','Fickar','2021-09-10 00:00:00'),('613ad62525','Teralis Jendela','','Teralis Jendela dengan besi tempa yang dibentuk','613ad62525bf7.jpg','Fickar','2021-09-10 00:00:00'),('613ad66526','Raling Tangga','','Raling Tangga besi dengan bahan yang berkualitas','613ad66526b41.jpg','Fickar','2021-09-10 00:00:00'),('6322a439c7','Kanopi Besi Hollo','','Kanopi Besi Hollo dan atap alderon berkualitas','6322a439c786d.jpg','admin','2022-09-15 00:00:00'),('6322a4e23c','Kanopi Besi Hollo','Kanopi Besi Hollo','Kanopi Besi Hollo dengan atap solar tuff','6322a4e23cc5e.jpg','admin','2022-09-15 00:00:00'),('6322a51526','Raling Tangga Besi dengan bahan berkualitas','','Raling Tangga Besi dengan bahan berkualitas','6322a515264f5.jpg','admin','2022-09-15 00:00:00');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `service_id` varchar(10) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(120) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `createdon` datetime DEFAULT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES ('613ad44870','Pengerjaan Kanopi','','','613ad44870435.jpg','Fickar','2021-09-10 00:00:00'),('613ad47106','Pengerjaan Pagar','','','613ad47106.jpg','Fickar','2021-09-10 00:00:00'),('613ad4cabd','Pengerjaan Raling Tangga','','','613ad4cabda66.jpg','Fickar','2021-09-10 00:00:00'),('613ad4e7c0','Pengerjaan Teralis Jendela','','','613ad4e7c0.jpg','Fickar','2021-09-10 00:00:00');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` varchar(60) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `role` enum('admin','customer') DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `photo` varchar(64) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('523def','increament','$2a$12$Mp2yhpCm4l.VilJqmAyJNOAZB6/XdHetvWAMFUIcJU7trkIrMXHwK','increamentsoft@gmail.com','increament','081210032243424','admin','2021-09-10 03:24:21',NULL,'2021-09-08 10:00:38',1),('524efg','tunasjayamulia','$2a$12$P18ajzLEqLKSsyWOBRuhRuL6ImHe.07ukPfxB681LOht2pfGGKgny','erickimoy85125@gmail.com','Tunas Jaya','081218351200','admin','2022-09-15 03:47:05',NULL,'2021-09-10 05:51:46',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

--
-- Dumping routines for database 'u484575716_tunasjayamulia'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-08 11:42:42
