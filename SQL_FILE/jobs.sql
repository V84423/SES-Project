/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.19-MariaDB : Database - professional
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `cat_desc` text NOT NULL,
  `font` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `bg_image` varchar(255) DEFAULT NULL,
  `found_at` date DEFAULT NULL,
  `capital` int(100) DEFAULT NULL,
  `ceo` varchar(255) DEFAULT NULL,
  `employee` int(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_by_id` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `emails` */

DROP TABLE IF EXISTS `emails`;

CREATE TABLE `emails` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `job_id_email` int(4) NOT NULL,
  `to_user` varchar(200) NOT NULL,
  `from_user` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=268 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `user_id` int(12) NOT NULL,
  `email` varchar(200) NOT NULL,
  `jobtitle` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `jobtype` varchar(200) NOT NULL,
  `jobcategory` varchar(200) NOT NULL,
  `jobdesc` text NOT NULL,
  `vacancy` int(2) NOT NULL,
  `ex` int(2) NOT NULL,
  `sal` int(3) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `respon` text NOT NULL,
  `edu` text NOT NULL,
  `ben` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `image` varchar(200) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `major` */

DROP TABLE IF EXISTS `major`;

CREATE TABLE `major` (
  `id` int(4) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `profile_footprint` */

DROP TABLE IF EXISTS `profile_footprint`;

CREATE TABLE `profile_footprint` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by_id` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `project_footprint` */

DROP TABLE IF EXISTS `project_footprint`;

CREATE TABLE `project_footprint` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by_id` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `projects` */

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `projectType` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `estimate` varchar(255) DEFAULT NULL,
  `mates` int(10) DEFAULT NULL,
  `during` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `schedule` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `positions` text DEFAULT NULL,
  `areas` text DEFAULT NULL,
  `created_by_id` int(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT 1,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Table structure for table `projects_req` */

DROP TABLE IF EXISTS `projects_req`;

CREATE TABLE `projects_req` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) DEFAULT NULL,
  `created_by_id` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `receivemessage` */

DROP TABLE IF EXISTS `receivemessage`;

CREATE TABLE `receivemessage` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `send_id` int(10) DEFAULT NULL,
  `sendMail` varchar(255) DEFAULT NULL,
  `receive_id` int(10) DEFAULT NULL,
  `receiveMail` varchar(255) DEFAULT NULL,
  `mailText` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `savedjobs` */

DROP TABLE IF EXISTS `savedjobs`;

CREATE TABLE `savedjobs` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `user_id` int(12) NOT NULL,
  `job_id` int(12) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `job_type` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=670 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `searches` */

DROP TABLE IF EXISTS `searches`;

CREATE TABLE `searches` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `sendmessage` */

DROP TABLE IF EXISTS `sendmessage`;

CREATE TABLE `sendmessage` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) DEFAULT NULL,
  `send_id` int(10) DEFAULT NULL,
  `receive_id` int(10) DEFAULT NULL,
  `mailText` text DEFAULT NULL,
  `filenames` text DEFAULT NULL,
  `files` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

/*Table structure for table `skills` */

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `birthday` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `expYear` varchar(255) DEFAULT NULL,
  `wUnit` varchar(255) DEFAULT NULL,
  `wArea` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `category` int(1) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `filenames` text DEFAULT NULL,
  `files` text DEFAULT NULL,
  `engineerDevelopmentPhase` text DEFAULT NULL,
  `engineerLanguageTools` text DEFAULT NULL,
  `webDevelopmentPhase` text DEFAULT NULL,
  `webDevelopmentTools` text DEFAULT NULL,
  `pmDevelopmentPhase` text DEFAULT NULL,
  `pmDevelopmentProduct` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_by_id` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Table structure for table `type` */

DROP TABLE IF EXISTS `type`;

CREATE TABLE `type` (
  `id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname_kana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname_kana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(4) DEFAULT 0,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
