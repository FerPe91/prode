-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-02-2023 a las 21:58:28
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apuesta_libertadores`
--

DROP TABLE IF EXISTS `apuesta_libertadores`;
CREATE TABLE IF NOT EXISTS `apuesta_libertadores` (
  `usuario` varchar(20) NOT NULL,
  `fecha` varchar(10) NOT NULL,
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
  `p11` char(1) NOT NULL,
  `p12` char(1) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apuesta_torneoarg`
--

DROP TABLE IF EXISTS `apuesta_torneoarg`;
CREATE TABLE IF NOT EXISTS `apuesta_torneoarg` (
  `usuario` varchar(20) NOT NULL,
  `fecha` varchar(20) NOT NULL,
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
  `p11` char(1) NOT NULL,
  `p12` char(1) NOT NULL,
  `p13` char(1) NOT NULL,
  `p14` char(1) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `apuesta_torneoarg`
--

INSERT INTO `apuesta_torneoarg` (`usuario`, `fecha`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `puntaje`) VALUES
('leo', 'fecha5', 'L', 'L', 'E', 'E', 'V', 'V', 'V', 'L', 'L', 'L', 'L', 'L', 'E', 'E', 4),
('leo', 'todo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4),
('BENJA', 'fecha5', 'L', 'L', 'E', 'E', 'V', 'V', 'V', 'V', 'E', 'E', 'E', 'V', 'E', 'V', 4),
('BENJA', 'todo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat_eliminatorias`
--

DROP TABLE IF EXISTS `chat_eliminatorias`;
CREATE TABLE IF NOT EXISTS `chat_eliminatorias` (
  `usuario` varchar(15) NOT NULL,
  `mensaje` varchar(150) NOT NULL,
  `fecha` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat_libertadores`
--

DROP TABLE IF EXISTS `chat_libertadores`;
CREATE TABLE IF NOT EXISTS `chat_libertadores` (
  `usuario` varchar(15) NOT NULL,
  `mensaje` varchar(150) NOT NULL,
  `fecha` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat_torneoarg`
--

DROP TABLE IF EXISTS `chat_torneoarg`;
CREATE TABLE IF NOT EXISTS `chat_torneoarg` (
  `usuario` varchar(15) NOT NULL,
  `mensaje` varchar(150) NOT NULL,
  `fecha` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chat_torneoarg`
--

INSERT INTO `chat_torneoarg` (`usuario`, `mensaje`, `fecha`) VALUES
('leo', 'hola', '07/02  14:46'),
('BENJA', 'ddgd', '09/02  19:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `apellido` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `dni` int(8) NOT NULL,
  `telefono` int(10) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `saldo` int(5) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`apellido`, `nombre`, `dni`, `telefono`, `usuario`, `clave`, `saldo`) VALUES
('LEO BATTAGLIA', 'batttagli', 6296296, 59262, 'leo', '12', 7500),
('BATTAGLIA', 'BENJAMIN', 612629, 26269129, 'BENJA', '12', 4400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados_libertadores`
--

DROP TABLE IF EXISTS `resultados_libertadores`;
CREATE TABLE IF NOT EXISTS `resultados_libertadores` (
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
  `p11` char(1) NOT NULL,
  `p12` char(1) NOT NULL,
  PRIMARY KEY (`fecha`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resultados_libertadores`
--

INSERT INTO `resultados_libertadores` (`fecha`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`) VALUES
('GrupoA', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('GrupoB', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('GrupoC', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('GrupoD', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('GrupoE', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('GrupoF', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('GrupoG', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('GrupoH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados_torneoarg`
--

DROP TABLE IF EXISTS `resultados_torneoarg`;
CREATE TABLE IF NOT EXISTS `resultados_torneoarg` (
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
  `p11` char(1) NOT NULL,
  `p12` char(1) NOT NULL,
  `p13` char(1) NOT NULL,
  `p14` char(1) NOT NULL,
  PRIMARY KEY (`fecha`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resultados_torneoarg`
--

INSERT INTO `resultados_torneoarg` (`fecha`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`) VALUES
('fecha5', 'L', '-', 'N', '-', '-', 'L', 'V', 'N', 'L', '-', 'E', 'L', 'L', 'V');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_eliminatorias`
--

DROP TABLE IF EXISTS `resultado_eliminatorias`;
CREATE TABLE IF NOT EXISTS `resultado_eliminatorias` (
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
  PRIMARY KEY (`fecha`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resultado_eliminatorias`
--

INSERT INTO `resultado_eliminatorias` (`fecha`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`) VALUES
('fecha1y2', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('fecha3y4', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('fecha5y6', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('fecha7y8', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
