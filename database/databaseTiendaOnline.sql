-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-03-2014 a las 11:49:03
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `databaseTiendaOnline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `user` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `user`, `password`) VALUES
(1, 'Hector', 'thimael', '1234'),
(2, 'Juan', 'juan0611', '1234'),
(3, 'Valentina', 'mamer1', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaPedido`
--

CREATE TABLE IF NOT EXISTS `lineaPedido` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idPedido` int(100) DEFAULT NULL,
  `idProducto` int(100) DEFAULT NULL,
  `unidades` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Volcado de datos para la tabla `lineaPedido`
--

INSERT INTO `lineaPedido` (`id`, `idPedido`, `idProducto`, `unidades`) VALUES
(51, 66, 1, 1),
(52, 67, 1, 1),
(53, 67, 3, 1),
(54, 68, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idCliente` varchar(10) DEFAULT NULL,
  `fechaPedido` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `idCliente`, `fechaPedido`) VALUES
(66, '1', '1395311469'),
(67, '1', '1395312211'),
(68, '1', '1395312514');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(18) DEFAULT NULL,
  `descripcion` varchar(502) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `existencias` int(10) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `existencias`, `imagen`) VALUES
(1, 'Iphone 5s', 'El iPhone 5s ha sido imaginado con visión, pensado con dedicación, y construido con precisión. Su esencia no es lo tecnológicamente posible, sino lo tecnológicamente útil. No es sólo lo que viene. Es lo que debería venir.', '700.00', 9, 'http://www.downloadsource.es/upload/news/Apple/apple-iphone-5s.jpg'),
(2, 'Iphone 4s', 'El Apple iPhone 4S es una mejora del iPhone 4 que, manteniendo el diseño original, actualiza su hardware. Posee la misma pantalla de 3.5 pulgadas a 640 x 960 pixels de resolución, pero por dentro posee un procesador dual-core A5 que provee el doble de velocidad. Además sube su velocidad de conectividad hasta 14.4Mbps HSPA, incorpora una cámara de 8 megapixels con captura de video 1080p y corre el renovado iOS 5.', '500.00', 5, 'http://all-spares.com/nfs/content/6424/file/iphone4s.jpg'),
(3, 'Samsung S3', 'El Samsung Galaxy S III es el nuevo smartphone Android insignia del fabricante. Posee una pantalla Super AMOLED HD 720p de 4.8 pulgadas, procesador Exynos 4 Quad de cuatro núcleos a 1.4GHz, 1GB de RAM, 16GB o 32GB de memoria interna, ranura microSD y corre Android 4.0 Ice Cream Sandwich con la interfaz TouchWiz.', '300.00', 12, 'http://cdn.applicantes.com/wp-content/uploads/2013/11/Samsung-Galaxy-SII.jpg'),
(4, 'Samsung S4', 'El Samsung Galaxy S 4 es la cuarta entrega de la serie Galaxy S, esta vez con una pantalla de 4.99 pulgadas Full HD Super AMOLED y 441ppi, cámara trasera de 13 megapixels, cámara frontal de 2 megapixels, 2GB de RAM, procesador Exynos 5 Octa para la versión 3G o Snapdragon 600 para la versión LTE, 16GB/32GB/64GB de almacenamiento interno, ranura microSD, Android 4.2.2 Jelly Bean y varias aplicaciones como Smart Stay, Smart Scroll, S Health, S Voice y muchas mejoras más.', '400.00', 10, 'http://blog.phonehouse.es/wp-content/uploads/2013/05/13.03.14-Galaxy_S4.jpg'),
(5, 'Motorola motoX', 'El Moto X plantea un juego distinto, con opciones de personalización tanto en colores como en materiales utilizados, así como también características inteligentes que lo permiten separarlo de la carrera por el mejor hardware, como su arquitectura X8 para atención contextual y cámara de 10 megapixels Clearpixel para mayor claridad de fotos. El Moto X posee una pantalla AMOLED 720p de 4.7 pulgadas, procesador dual-core Snapdragon S4 Pro, 2GB de RAM, 16GB o 32GB de almacenamiento interno', '400.00', 10, 'http://forum.xda-developers.com/deviceForum/screenshots/2449/20130906T110847.png'),
(6, 'Motorola motoG', 'El Motorola Moto G es la nueva apuesta de Motorola para lograr el balance ideal entre precio y prestaciones. Con precios que arrancan desde los 180 dólares, el Moto G ofrece una pantalla 720p de 4.5 pulgadas, procesador quad-core Snapdragon 400, 1GB de RAM, 8GB o 16GB de almacenamiento interno, cámara trasera de 5 megapixels, cámara frontal de 1.3 megapixels y Android 4.3 Jelly Bean, con actualización a Android 4.4 KitKat garantizado.', '400.00', 10, 'http://forum.xda-developers.com/deviceForum/screenshots/2684/20131209T093823.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
