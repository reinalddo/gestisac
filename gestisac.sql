/*
SQLyog Ultimate v9.02 
MySQL - 5.5.5-10.1.13-MariaDB : Database - gestisac
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gestisac` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gestisac`;

/*Table structure for table `contacto` */

DROP TABLE IF EXISTS `contacto`;

CREATE TABLE `contacto` (
  `IMAGEN` varchar(100) DEFAULT NULL,
  `CORREO_CENTRAL` varchar(100) DEFAULT NULL,
  `CONTACTO1` varchar(100) DEFAULT NULL,
  `CORREO1` varchar(100) DEFAULT NULL,
  `NUMERO1_C1` varchar(100) DEFAULT NULL,
  `NUMERO2_C1` varchar(100) DEFAULT NULL,
  `CONTACTO2` varchar(100) DEFAULT NULL,
  `CORREO2` varchar(100) DEFAULT NULL,
  `NUMERO1_C2` varchar(100) DEFAULT NULL,
  `NUMERO2_C2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contacto` */

insert  into `contacto`(`IMAGEN`,`CORREO_CENTRAL`,`CONTACTO1`,`CORREO1`,`NUMERO1_C1`,`NUMERO2_C1`,`CONTACTO2`,`CORREO2`,`NUMERO1_C2`,`NUMERO2_C2`) values ('imagen2.jpg','reinalddo@gmail.com','Reinaldo Matheus','otrocorreo@gmail.com','04140779258','','Evelyn Everts','evelyn@gmail.com','04163730399','02763413511');

/*Table structure for table `footer` */

DROP TABLE IF EXISTS `footer`;

CREATE TABLE `footer` (
  `DERECHOS` varchar(100) DEFAULT NULL,
  `TWITTER` varchar(100) DEFAULT NULL,
  `FACEBOOK` varchar(100) DEFAULT NULL,
  `YOUTUBE` varchar(100) DEFAULT NULL,
  `PINTEREST` varchar(100) DEFAULT NULL,
  `LINKEDIN` varchar(100) DEFAULT NULL,
  `INSTAGRAM` varchar(100) DEFAULT NULL,
  `DRIBBBLE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `footer` */

insert  into `footer`(`DERECHOS`,`TWITTER`,`FACEBOOK`,`YOUTUBE`,`PINTEREST`,`LINKEDIN`,`INSTAGRAM`,`DRIBBBLE`) values ('GESTISAC 2015','twitter','facebook','youtube','','','','');

/*Table structure for table `inicio` */

DROP TABLE IF EXISTS `inicio`;

CREATE TABLE `inicio` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IMAGEN` varchar(200) NOT NULL,
  `TITULO` varchar(100) NOT NULL,
  `DESCRIPCION` varchar(300) NOT NULL,
  `TITULO_BOTON` varchar(100) DEFAULT NULL,
  `ENLACE_BOTON` varchar(400) DEFAULT NULL,
  `ORDEN` int(2) DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `inicio` */

insert  into `inicio`(`ID`,`IMAGEN`,`TITULO`,`DESCRIPCION`,`TITULO_BOTON`,`ENLACE_BOTON`,`ORDEN`) values (7,'InfraestructuraTI.jpg','Infraestructura TI','infraestructura TI infraestructura TI infraestructura TI infraestructura TI infraestructura TI infraestructura TI infraestructura TI infraestructura TI','','',1),(8,'telemarketing.jpg','Titulo Slider','DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n DescripciÃ³n ','','',1);

/*Table structure for table `nosotros` */

DROP TABLE IF EXISTS `nosotros`;

CREATE TABLE `nosotros` (
  `IMAGEN` varchar(200) DEFAULT NULL,
  `TITULO` varchar(200) DEFAULT NULL,
  `DESCRIPCION1` varchar(200) DEFAULT NULL,
  `MISION` varchar(200) DEFAULT NULL,
  `VISION` varchar(200) DEFAULT NULL,
  `DESCRIPCION2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `nosotros` */

insert  into `nosotros`(`IMAGEN`,`TITULO`,`DESCRIPCION1`,`MISION`,`VISION`,`DESCRIPCION2`) values ('telemarketing.jpg','GESTISAC','LOGISTICA EFICICIENTE, GESTION Y PLANEAMIENTO DE PROYECTOS','Alinearnos con los objetivos y necesidades de los clientes para poder ofrecerles servicios de alta calidad.','Ganar reconocimiento en el rubro y consolidarnos de forma sostenible, para para garantizar seguridad y satisfacciÃ³n en nuestros clientes.','LOGISTICA EFICICIENTE, GESTION Y PLANEAMIENTO DE PROYECTOS LOGISTICA EFICICIENTE, GESTION Y PLANEAMIENTO DE PROYECTOS LOGISTICA EFICICIENTE, GESTION Y PLANEAMIENTO DE PROYECTOS');

/*Table structure for table `servicios` */

DROP TABLE IF EXISTS `servicios`;

CREATE TABLE `servicios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IMAGEN` varchar(200) NOT NULL,
  `TITULO` varchar(100) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `servicios` */

insert  into `servicios`(`ID`,`IMAGEN`,`TITULO`,`DESCRIPCION`) values (1,'imagen1.jpg','Servicio 1','Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 Servicio 1 '),(2,'imagen3.jpg','Servicio 2 ','Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 '),(3,'InfraestructuraTI.jpg','Infraestructura TI','Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 Servicio 2 v'),(4,'imagen2.jpg','Servicio 4','Servicio 4 Servicio 4 Servicio 4 Servicio 4 Servicio 4 Servicio 4 Servicio 4 Servicio 4 Servicio 4 Servicio 4 Servicio 4 Servicio 4 Servicio 4 Servicio 4 Servicio 4 Servicio 4 '),(6,'cronograma.jpg','Servicio 5','Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 Servicio 5 ');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `LOGIN` varchar(100) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `APELLIDO` varchar(100) DEFAULT NULL,
  `TIPO` int(1) DEFAULT NULL,
  `TELEFONO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`LOGIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`LOGIN`,`PASSWORD`,`NOMBRE`,`APELLIDO`,`TIPO`,`TELEFONO`) values ('master','12345','Andres','Barnuevo',0,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
