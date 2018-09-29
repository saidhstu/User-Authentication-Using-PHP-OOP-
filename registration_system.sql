/*
SQLyog Community v12.09 (64 bit)
MySQL - 5.7.13-log : Database - registration_system
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`registration_system` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `registration_system`;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dob` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `terms` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`first_name`,`last_name`,`username`,`password`,`email`,`phone`,`dob`,`city`,`country`,`terms`) values (11,'Saidur','Rohman','saidhstu','123456','saidhstu@gmail.com','01744975940','08/02/1996','Nacogdoches','Bangladesh','on'),(12,'Safiqul','Islam','safiqulhstu','boo2sdff','saidhstu@gmail.com','0172323213','08/23/1994','Dhaka','Bangladesh','on'),(13,'Saiful','Islam','saidhstu','boo2','saidhstu13@gmail.com','9363321799','08/09/1983','Nacogdoches','Bangladesh','on'),(14,'Ariful','Rohman','root','boo2','saidhstu13@gmail.coms','9363321799','08/20/1930','Nacogdoches','Bangladesh','on'),(16,'Rokon','Islam','rokonhstu','123456','rokon@gmail.com','01723232131','08/12/1997','Dhaka','Bangladesh','0');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
