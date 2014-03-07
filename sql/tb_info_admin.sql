-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-03-2014 a las 19:01:52
-- Versión del servidor: 5.5.35-0ubuntu0.13.10.2
-- Versión de PHP: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_vallartamenu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_info_admin`
--

CREATE TABLE IF NOT EXISTS `tb_info_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_admin` int(11) NOT NULL,
  `nombre_lugar` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `correo` varchar(45) COLLATE ucs2_spanish_ci NOT NULL,
  `password` varchar(25) COLLATE ucs2_spanish_ci NOT NULL,
  `nombre_encargado` varchar(45) COLLATE ucs2_spanish_ci NOT NULL,
  `tipo_lugar` varchar(30) COLLATE ucs2_spanish_ci NOT NULL,
  `subcategoria` varchar(25) COLLATE ucs2_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE ucs2_spanish_ci NOT NULL,
  `url` varchar(60) COLLATE ucs2_spanish_ci NOT NULL,
  `descripcion` text COLLATE ucs2_spanish_ci NOT NULL,
  `direccion` varchar(45) COLLATE ucs2_spanish_ci NOT NULL,
  `horario` varchar(15) COLLATE ucs2_spanish_ci NOT NULL,
  `zona` varchar(25) COLLATE ucs2_spanish_ci NOT NULL,
  `ult_login` varchar(15) COLLATE ucs2_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
