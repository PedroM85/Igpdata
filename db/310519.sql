-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para igp_global
CREATE DATABASE IF NOT EXISTS `igp_global` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `igp_global`;

-- Volcando estructura para tabla igp_global.tbl_circuitos
CREATE TABLE IF NOT EXISTS `tbl_circuitos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `circuito` char(50) DEFAULT '0' COMMENT 'Nombre del Circuito',
  `idCiudad` int(11) NOT NULL DEFAULT '0',
  `vueltas` int(11) DEFAULT '0',
  `suspension` char(50) DEFAULT '0' COMMENT 'Dureza de la suspencion',
  `altucoche` int(11) DEFAULT '0' COMMENT 'Altura del coche',
  `nivelaleron` int(11) DEFAULT '0',
  `pits` int(11) DEFAULT '0',
  `compa` int(11) DEFAULT '0',
  `Fcreation` date DEFAULT NULL,
  `sitReg` int(11) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla igp_global.tbl_circuitos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_circuitos` DISABLE KEYS */;
REPLACE INTO `tbl_circuitos` (`Id`, `circuito`, `idCiudad`, `vueltas`, `suspension`, `altucoche`, `nivelaleron`, `pits`, `compa`, `Fcreation`, `sitReg`) VALUES
	(1, '312', 1, 3123, '123', 123, 123, 123, 123, '2019-05-25', 0),
	(2, '3124', 3, 3123, '123', 123, 123, 123, 123, '2019-05-25', 0);
/*!40000 ALTER TABLE `tbl_circuitos` ENABLE KEYS */;

-- Volcando estructura para tabla igp_global.tbl_ciudad
CREATE TABLE IF NOT EXISTS `tbl_ciudad` (
  `idCiudad` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(20) NOT NULL,
  `sitReg` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idCiudad`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla igp_global.tbl_ciudad: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_ciudad` DISABLE KEYS */;
REPLACE INTO `tbl_ciudad` (`idCiudad`, `ciudad`, `sitReg`) VALUES
	(1, 'China', 1),
	(2, 'Canada', 1),
	(3, 'Australia', 1),
	(4, 'Italia', 1),
	(5, 'Prueba', 0);
/*!40000 ALTER TABLE `tbl_ciudad` ENABLE KEYS */;

-- Volcando estructura para tabla igp_global.tbl_imagenes
CREATE TABLE IF NOT EXISTS `tbl_imagenes` (
  `idImagen` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `ruta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idImagen`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla igp_global.tbl_imagenes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_imagenes` DISABLE KEYS */;
REPLACE INTO `tbl_imagenes` (`idImagen`, `titulo`, `ruta`) VALUES
	(1, '7', '881558m.jpg');
/*!40000 ALTER TABLE `tbl_imagenes` ENABLE KEYS */;

-- Volcando estructura para tabla igp_global.tbl_persona
CREATE TABLE IF NOT EXISTS `tbl_persona` (
  `idpersona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT '0',
  `apellido` varchar(30) DEFAULT '0',
  `email` varchar(50) DEFAULT '0',
  `Fcreation` date DEFAULT NULL,
  `Act` int(1) DEFAULT NULL,
  PRIMARY KEY (`idpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla igp_global.tbl_persona: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_persona` DISABLE KEYS */;
REPLACE INTO `tbl_persona` (`idpersona`, `nombre`, `apellido`, `email`, `Fcreation`, `Act`) VALUES
	(1, 'Pedro', 'Maneiro', 'pedromaneiro@gmail.com', '2019-05-07', 1),
	(2, 'Pedro', 'Maneiro', 'pedromaneiro@gmail.com', '2019-04-30', 1),
	(3, 'Pedro', 'Maneiro', 'pedromaneiro@gmail.com', '2019-05-07', 1),
	(4, 'ewweç\r\n', 'wee', 'erw@dasd.com', '0000-00-00', 0);
/*!40000 ALTER TABLE `tbl_persona` ENABLE KEYS */;

-- Volcando estructura para tabla igp_global.tbl_puntos
CREATE TABLE IF NOT EXISTS `tbl_puntos` (
  `idPunto` int(11) NOT NULL AUTO_INCREMENT,
  `idpersona` int(11) NOT NULL,
  `1B` int(11) NOT NULL,
  `2B` int(11) NOT NULL,
  `3B` int(11) NOT NULL,
  `4B` int(11) NOT NULL,
  `puntofinal` float NOT NULL,
  PRIMARY KEY (`idPunto`),
  KEY `FK_tbl_puntos_tbl_persona` (`idpersona`),
  CONSTRAINT `FK_tbl_puntos_tbl_persona` FOREIGN KEY (`idpersona`) REFERENCES `tbl_persona` (`idpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla igp_global.tbl_puntos: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_puntos` DISABLE KEYS */;
REPLACE INTO `tbl_puntos` (`idPunto`, `idpersona`, `1B`, `2B`, `3B`, `4B`, `puntofinal`) VALUES
	(1, 3, 0, 0, 0, 0, 0),
	(2, 2, 0, 0, 0, 0, 0),
	(3, 4, 0, 0, 0, 0, 0),
	(4, 1, 3, 3, 3, 3, 3),
	(5, 1, 3, 3, 3, 3, 3),
	(6, 3, 4, 4, 4, 4, 4),
	(7, 2, 4, 4, 4, 4, 4),
	(8, 4, 4, 4, 4, 4, 4),
	(9, 2, 4, 4, 4, 4, 4),
	(10, 3, 4, 4, 4, 4, 4),
	(11, 4, 4, 4, 4, 4, 4),
	(12, 1, 3, 3, 3, 3, 3),
	(13, 3, 0, 0, 0, 0, 0),
	(14, 1, 3, 3, 3, 3, 3),
	(15, 4, 0, 0, 0, 0, 0),
	(16, 1, 3, 3, 3, 3, 3),
	(17, 3, 4, 4, 4, 4, 4),
	(18, 2, 0, 0, 0, 0, 0),
	(19, 2, 4, 4, 4, 4, 4),
	(20, 4, 4, 4, 4, 4, 4),
	(21, 2, 4, 4, 4, 4, 4),
	(22, 3, 4, 4, 4, 4, 4),
	(23, 4, 4, 4, 4, 4, 4),
	(24, 1, 3, 3, 3, 3, 3);
/*!40000 ALTER TABLE `tbl_puntos` ENABLE KEYS */;

-- Volcando estructura para tabla igp_global.tbl_usuario
CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(50) DEFAULT '0',
  `passUser` varchar(100) DEFAULT '0',
  `idpersona` int(11) DEFAULT NULL,
  PRIMARY KEY (`iduser`),
  KEY `FK_tbl_usuario_tbl_persona` (`idpersona`),
  CONSTRAINT `FK_tbl_usuario_tbl_persona` FOREIGN KEY (`idpersona`) REFERENCES `tbl_persona` (`idpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla igp_global.tbl_usuario: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_usuario` DISABLE KEYS */;
REPLACE INTO `tbl_usuario` (`iduser`, `nomUser`, `passUser`, `idpersona`) VALUES
	(1, 'Maneiro', 'd93a5def7511da3d0f2d171d9c344e91', 1),
	(2, 'Maneiro1', 'd93a5def7511da3d0f2d171d9c344e91', 2),
	(3, 'Maneiro2', 'd93a5def7511da3d0f2d171d9c344e91', 3),
	(4, '', '0144712dd81be0c3d9724f5e56ce6685', 4);
/*!40000 ALTER TABLE `tbl_usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
