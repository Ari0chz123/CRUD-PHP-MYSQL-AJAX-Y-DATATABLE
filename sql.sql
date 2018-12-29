/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.20-log : Database - datatablephp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`datatablephp` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `datatablephp`;

/*Table structure for table `persona` */

DROP TABLE IF EXISTS `persona`;

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  PRIMARY KEY (`idpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `persona` */

insert  into `persona`(`idpersona`,`nombres`,`apellidos`,`email`,`direccion`,`foto`,`fecha_nacimiento`) values (2,'bryan','nuñez','gabriel@hotmail.com','piura','../imagenes/Desert.jpg','2018-06-06'),(11,'Roberto Aguirree','Valdieviezo','editable@hotmail.com','editable','../imagenes/Desert.jpg','2018-12-10'),(12,'Juana Zapata','Lara','juana@gmail.com','Peru 250 ','../imagenes/sinfoto.png','1995-01-20'),(13,'sofiaaaa','Zapata','sofia@gmail.com','Ecuador-Quito 520','../imagenes/sinfoto.png','1999-10-10'),(15,'chavo','Zapata','chavo@hotmail.com','Peru','../imagenes/sinfoto.png','1995-10-10'),(16,'dasd','ff','gfsg@hotmail.com','Peru','../imagenes/Desert.jpg','1998-10-10');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
