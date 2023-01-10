-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-01-2023 a las 20:37:06
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apuestasdeportivas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apuesta_eliminatorias`
--

DROP TABLE IF EXISTS `apuesta_eliminatorias`;
CREATE TABLE IF NOT EXISTS `apuesta_eliminatorias` (
  `usuario` varchar(20) NOT NULL,
  `fecha` varchar(15) NOT NULL,
  `p1` char(1) NOT NULL,
  `p2` char(1) NOT NULL,
  `p3` char(1) NOT NULL,
  `p4` char(1) NOT NULL,
  `p5` char(1) NOT NULL,
  `p6` char(1) NOT NULL,
  `p7` char(1) NOT NULL,
  `p8` char(1) NOT NULL,
  `p9` char(1) NOT NULL,
  `p10` char(1) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `apuesta_eliminatorias`
--

INSERT INTO `apuesta_eliminatorias` (`usuario`, `fecha`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `puntaje`) VALUES
('leo', 'fecha1y2', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 0),
('BENJA', 'fecha1y2', 'E', 'E', 'L', 'L', 'E', 'E', 'E', 'E', 'E', 'E', 0),
('LUCIA', 'fecha1y2', 'L', 'V', 'V', 'V', 'L', 'V', 'V', 'V', 'L', 'E', 0),
('fer', 'fecha1y2', 'L', 'L', 'L', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 0),
('MAMA', 'fecha1y2', 'L', 'L', 'L', 'E', 'E', 'V', 'V', 'V', 'V', 'E', 0),
('PAPA', 'fecha1y2', 'L', 'L', 'L', 'L', 'E', 'V', 'V', 'V', 'V', 'E', 0),
('PATO', 'fecha1y2', 'L', 'L', 'L', 'L', 'L', 'E', 'E', 'V', 'E', 'V', 0),
('MARCOS', 'fecha1y2', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
