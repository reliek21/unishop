-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.6-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5736
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla unishop.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla unishop.productos: ~15 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id`, `nombre`, `imagen`, `descripcion`, `precio`) VALUES
	(23, 'Camara Gopro Hero7 Black 12mp - WIFI', 'Camara Gopro Hero7 Black 12mp - WIFI.jpg', 'Numero de Pixeles\r\nMarca Gopro\r\nPanrtalla\r\nBateria\r\nColor Negro\r\n>\r\n* Pantalla TÃ¡ctil * Sumergible 10M * Micro SD Hasta 128GB * CÃ¡mara lenta 8x * Estabilizador de vÃ­deo HyperSmooth * Lente F/2.8 * Campo VisiÃ³n 170Âº * Video: 4K a 60fps - 1080p a 240fps * TransmisiÃ³n en directo * Micro HDMI ', '1.250.000'),
	(24, 'Camara Logitech Web C525hd', 'Camara Logitech Web C525hd.jpg', ' Marca Logitech\r\nVideoconferencias y grabaciones en alta definiciÃ³n, Con vÃ­deo HD (720p) en pantalla panorÃ¡mica en la mayorÃ­a de aplicaciones de mensajerÃ­a ', '135.000'),
	(25, 'Control PS4 Dualshock 4 - Negro', 'Control PS4 Dualshock 4.jpg', ' Marca Sony\r\nIncluye sensor sensible de seis ejes y panel tÃ¡ctil que ofrece a los jugadores nuevas formas de jugar e interactuar con los juegos. El nuevo botÃ³n de Compartir (Share) permite ver y compartir videos en tiempo real con un solo clic. ', '200.000'),
	(26, 'Diadema + Microfono Bluetooth Jbl T450bt |negro', 'DIADEMA + MICROFONO BLUETOOTH JBL T450BT.jpg', ' Tipo Diadema + Microfono\r\nMarca Jbl\r\nConexion Bluetooth\r\nColor Negro\r\nSon plegables, livianos, cÃ³modos y compactos. Debajo del capÃ³, un par de drivers de 32 mm sacan graves graves, reproduciendo el poderoso sonido JBL Pure Bass que has experimentado en lugares mucho mÃ¡s grandes. ', '195.000'),
	(27, 'Diadema + Microfono Jbl T450 |blanco', 'Diadema + Microfono Jbl T450.jpg', ' Tipo Diadema + Microfono\r\nMarca Jbl\r\nColor Blanco\r\n', '98.000'),
	(28, 'Diadema + Microfono Logitech H151 |negro', 'Diadema + Microfono Logitech H151.jpg', ' Tipo Diadema + Microfono\r\nMarca Logitech\r\nColor Negro\r\n', '85.000'),
	(29, 'Disco Duro USB 1 Tera Hd330 Adata Negro &quot;antigolpes&quot;', 'Disco Duro USB 1 Tera Hd330 Adata.jpg', ' Marca Adata\r\nCapacidad 1 Tera\r\nUSB 3.0\r\nColor Negro\r\n', '215.000'),
	(30, 'Game Pad Smarphone - Ipega 9076 Bluetooth Celular, PS3 y PC', 'Game Pad Smarphone - Ipega 9076 Bluetooth Celular, PS3 y PC.jpg', ' Marca Ipega\r\ncontrolador de juego inalÃ¡mbrico que se puede utilizar en celulares con Android / iPhone / tableta / TV inteligente / caja de TV y otros equipo * DiseÃ±o ergonÃ³mico * Receptor inalÃ¡mbrico 2.4G ', '80.000'),
	(31, 'Lampara USB Star Teck St-lh-013', 'Lampara USB Star Teck.jpg', ' Marca Star Tec\r\n13 LED ', '15.000'),
	(32, 'Mouse Inalambrico Ergonomico Trust Sura |negro Gris', 'Mouse Inalambrico Trust Varo Ergonomico.jpg', ' Conexion Inalambrico\r\nMarca Trust\r\nColor Negro\r\nRatÃ³n Ã³ptico inalÃ¡mbrico de diseÃ±o ergonÃ³mico y receptor micro-USB de fÃ¡cil almacenamiento//DiseÃ±o ergonÃ³mico con laterales de caucho para un agarre mÃ¡s firme/2 botones laterales y botÃ³n de selecciÃ³n de sensibilidad (800/-1600 DPI). ', '40.000'),
	(33, 'Pad Mouse Gel Tl-gl-009 Negro', 'Pad Mouse Gel Tl-gl-009.jpg', ' Marca Star Tec\r\nDiseÃ±o ecuadrado / Soporte en Gel / Recubrimiento en tela ', '18.000'),
	(34, 'Parlante 2.0 Logitech Bluetooth Z207|negro', 'Parlante 2.0 Logitech Bluetooth Z207.jpg', ' Marca Logitech\r\nTipo 2.0\r\nVatios\r\nSubwoofer NO\r\nEntrada 3.5 mm\r\nBluetooth Bluetooth\r\nPeso\r\nColor Negro ', '155.000'),
	(35, 'Parlante Bluetooth Jbl Go2|negro', 'Parlante Bluetooth Jbl Go2.jpg', 'Marca Jbl\r\nResiste Agua Si\r\nColor Negro ', '135.000'),
	(36, 'Tarjeta Video PCI Exp 6.0 GB DDR5 - EVGA Geforce Gtx 1060', 'Tarjeta Video PCI Exp 6.0 GB DDR5 - EVGA Geforce Gtx 1060.jpg', ' Marca EVGA\r\nCompatibilidad con los principales juegos: FIFA 2019, THE WITCHER 3 , PlayerUnknownâ€™s Battlegrounds, etc. ', '1.090.000'),
	(38, 'Teclado + Mouse + Numerico Inalambrico Microsoft', 'Teclado + Mouse + Numerico Inalambrico.jpg', ' Conexion Inalambrico\r\nMarca Microsoft\r\nDiseÃ±o con separacion ergonomica * Descansa Palmas acolchado * DiseÃ±o de domo en el teclado ', '310.000'),
	(39, 'Luis Blanco', 'Mouse Inalambrico Ergonomico Trust Sura.jpg', 'cwcwec', '18271827812');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla unishop.registro
CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla unishop.registro: ~0 rows (aproximadamente)
DELETE FROM `registro`;
/*!40000 ALTER TABLE `registro` DISABLE KEYS */;
INSERT INTO `registro` (`id`, `usuario`, `correo`, `pass`) VALUES
	(1, 'keiler', 'keilerguardo@gmail.com', '568b38636ce83d975688b9c0df79ceaa2fff8b0216af671e9f4fee48386cc7eb'),
	(2, 'targaryen', 'danjoseher05@gmail.com', '3fd729c2716b6365800bb4a96e823b9b7513009c6fccebf6030ebe18d350323e'),
	(3, 'luis ', 'lhernandezb@unicartagena.edu.c', 'b005c5f763b134c558a5edeb2df9acb11364b99c2de512e0a853164a07795b4c');
/*!40000 ALTER TABLE `registro` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
