-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-02-2023 a las 03:14:59
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
('PPP', 'fecha1y2', 'V', 'V', 'V', 'V', 'V', 'L', 'L', 'L', 'L', 'E', 4),
('PPP', 'todo', '', '', '', '', '', '', '', '', '', '', 9),
('PPP', 'fecha3y4', 'V', 'V', 'V', 'V', 'V', 'L', 'L', 'L', 'L', 'L', 5),
('fff', 'fecha1y2', 'L', 'L', 'L', 'L', 'E', 'L', 'L', 'L', 'L', 'L', 9),
('fff', 'todo', '', '', '', '', '', '', '', '', '', '', 13),
('fff', 'fecha3y4', 'V', 'V', 'V', 'E', 'E', 'E', 'E', 'E', 'V', 'E', 4),
('ADMIN', 'fecha1y2', 'L', 'L', 'L', 'E', 'V', 'L', 'E', 'E', 'E', 'V', 4),
('ADMIN', 'todo', '', '', '', '', '', '', '', '', '', '', 4),
('tuuuuu', 'todo', '', '', '', '', '', '', '', '', '', '', 7),
('tuuuuu', 'fecha1y2', 'L', 'L', 'L', 'L', 'E', 'L', 'L', 'L', 'V', 'V', 7),
('tuuuuu', 'fecha5y6', 'L', 'L', 'L', 'E', 'E', 'E', 'E', 'L', 'L', 'L', 0),
('tuuuuu', 'fecha3y4', 'L', 'L', 'L', 'E', 'E', 'E', 'E', 'L', 'L', 'L', 0),
('patito', 'todo', '', '', '', '', '', '', '', '', '', '', 4),
('patito', 'fecha1y2', 'L', 'L', 'L', 'E', 'E', 'V', 'E', 'E', 'E', 'L', 4),
('as', 'fecha1y2', 'L', 'L', 'L', 'E', 'E', 'V', 'V', 'V', 'V', 'V', 3),
('mica12', 'fecha1y2', 'V', 'V', 'V', 'E', 'L', 'V', 'L', 'L', 'V', 'V', 3),
('ahora', '', 'L', 'L', 'L', 'E', 'V', 'V', 'V', 'V', 'V', 'V', 0),
('EEE', 'fecha1y2', 'V', 'V', 'V', 'V', 'V', 'L', 'L', 'L', 'L', 'L', 5),
('LEOP', 'fecha1y2', 'L', 'L', 'L', 'L', 'L', 'E', 'E', 'E', 'E', 'E', 5),
('luis_m', 'fecha1y2', 'L', 'L', 'L', 'E', 'E', 'E', 'E', 'E', 'E', 'L', 4),
('dibu', 'fecha1y2', 'V', 'V', 'E', 'E', 'V', 'L', 'L', 'L', 'L', 'V', 4);

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

--
-- Volcado de datos para la tabla `apuesta_libertadores`
--

INSERT INTO `apuesta_libertadores` (`usuario`, `fecha`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `puntaje`) VALUES
('tuuuuu', 'GrupoA', 'V', 'V', 'V', 'E', 'E', 'E', 'E', 'L', 'L', 'L', 'E', 'E', 3),
('tuuuuu', 'GrupoB', 'L', 'L', 'L', 'L', 'E', 'L', 'E', 'E', 'E', 'E', 'E', 'L', 0),
('patito', 'GrupoA', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'E', 'E', 'E', 'E', 'E', 7),
('patito', 'GrupoF', 'V', 'V', 'E', 'E', 'E', 'E', 'E', 'E', 'L', 'L', 'E', 'E', 0),
('as', 'GrupoA', 'L', 'L', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'V', 'V', 2),
('as', 'GrupoF', 'L', 'L', 'L', 'L', 'L', 'L', 'E', 'E', 'V', 'V', 'E', 'E', 0),
('mica12', 'GrupoA', 'L', 'L', 'L', 'L', 'L', 'L', 'E', 'E', 'E', 'E', 'E', 'E', 6),
('mica12', 'GrupoB', 'V', 'V', 'V', 'V', 'E', 'E', 'E', 'E', 'L', 'L', 'L', 'L', 0),
('mica12', 'GrupoC', 'L', 'L', 'L', 'E', 'L', 'E', 'E', 'V', 'E', 'E', 'V', 'V', 0),
('mica12', 'GrupoD', 'L', 'L', 'E', 'E', 'E', 'E', 'V', 'V', 'V', 'V', 'V', 'E', 0),
('mica12', 'GrupoH', 'V', 'V', 'E', 'V', 'E', 'E', 'E', 'L', 'L', 'L', 'L', 'E', 0),
('EEE', 'GrupoB', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'E', 'E', 'V', 'V', 0),
('ADMIN', 'GrupoD', 'L', 'L', 'L', 'L', 'L', 'L', 'E', 'E', 'E', 'E', 'E', 'E', 0),
('ADMIN', 'GrupoG', 'L', 'L', 'L', 'L', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'L', 0),
('ADMIN', 'GrupoE', 'L', 'L', 'L', 'E', 'E', 'E', 'V', 'V', 'V', 'V', 'E', 'L', 0),
('ADMIN', 'GrupoC', 'E', 'E', 'E', 'V', 'V', 'V', 'E', 'E', 'E', 'E', 'E', 'V', 0),
('ADMIN', 'GrupoH', 'L', 'L', 'L', 'L', 'E', 'E', 'E', 'V', 'V', 'V', 'E', 'E', 0),
('ADMIN', 'GrupoA', 'V', 'E', 'E', 'E', 'L', 'L', 'L', 'L', 'L', 'E', 'E', 'E', 5),
('ADMIN', 'GrupoB', 'L', 'L', 'L', 'E', 'E', 'E', 'E', 'E', 'E', 'V', 'E', 'E', 0),
('juapolo', 'GrupoD', 'L', 'L', 'L', 'L', 'E', 'E', 'E', 'E', 'E', 'V', 'V', 'V', 0);

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
('ADMIN', 'todo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 8),
('ADMIN', 'fecha1', 'L', 'L', 'E', 'E', 'V', 'V', 'V', 'E', 'E', 'V', 'E', 'E', 'E', 'E', 8),
('as', 'fecha1', 'L', 'L', 'L', 'L', 'E', 'E', 'V', 'V', 'E', 'E', 'V', 'L', 'V', 'V', 4),
('as', 'todo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4),
('PPP', 'fecha1', 'V', 'V', 'V', 'V', 'L', 'L', 'E', 'L', 'L', 'L', 'E', 'E', 'L', 'L', 3),
('ppp', 'todo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3),
('leo:boca', 'todo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4),
('leo:boca', 'fecha1', 'V', 'V', 'E', 'E', 'E', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'E', 4),
('mica12', 'todo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14),
('mica12', 'fecha1', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 14),
('ahora', '', 'V', 'V', 'V', 'V', 'V', 'V', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 0),
('ahora', 'todo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
('EEE', 'fecha1', 'V', 'V', 'E', 'E', 'E', 'E', 'V', 'L', 'L', 'L', 'E', 'E', 'E', 'E', 8),
('dibu', 'todo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

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

--
-- Volcado de datos para la tabla `chat_eliminatorias`
--

INSERT INTO `chat_eliminatorias` (`usuario`, `mensaje`, `fecha`) VALUES
('ADMIN', 'Ã±', '01/02  10:37'),
('ADMIN', 'Ã±', '01/02  10:39'),
('ADMIN', 'hola', '01/02  10:39'),
('ADMIN', 'chau', '01/02  10:40'),
('ADMIN', 'leo', '01/02  10:40'),
('ADMIN', 'leo', '01/02  10:40'),
('ADMIN', 'prueba', '01/02  10:41'),
('ADMIN', 'prueba2', '01/02  10:41'),
('ADMIN', 'pr3', '01/02  10:41'),
('ADMIN', 'fgsfg', '01/02  14:36'),
('dibu', 'hil', '02/02  16:29'),
('dibu', 'dfasf', '03/02  20:53');

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

--
-- Volcado de datos para la tabla `chat_libertadores`
--

INSERT INTO `chat_libertadores` (`usuario`, `mensaje`, `fecha`) VALUES
('ADMIN', 'hola', '26/01  15:15'),
('ADMIN', 'hola', '26/01  15:15'),
('ADMIN', 'ca', '26/01  15:23'),
('ADMIN', 'dfz', '26/01  18:06'),
('ADMIN', 'NUEIBO ENSAJE', '26/01  18:13'),
('ADMIN', '5q4w46 rrtust uutsu utu ', '26/01  23:58'),
('ADMIN', 'aaaa', '01/02  10:42'),
('ADMIN', 'jklh', '01/02  10:42'),
('ADMIN', 'wef', '01/02  13:42'),
('ADMIN', 'fgfgg', '01/02  13:42'),
('juapolo', 'CVZ', '01/02  13:55'),
('ADMIN', 'sdsds', '01/02  18:14'),
('dibu', 'hjjjjj', '03/02  11:47');

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
('ADMIN', 'holaa', '26/01  15:15'),
('ADMIN', 'ppp', '26/01  15:22'),
('ADMIN', 'aaaaaaaaaa', '26/01  18:25'),
('ADMIN', 'wqeqeqweewqe', '26/01  18:26'),
('ADMIN', 'bobbo', '26/01  18:26'),
('ADMIN', 'bobbo', '26/01  18:31'),
('ADMIN', '33', '26/01  18:31'),
('ADMIN', '222', '26/01  18:31'),
('ADMIN', '222', '26/01  18:31'),
('ADMIN', 'qwq', '26/01  18:32'),
('ADMIN', 'qqq', '26/01  18:32'),
('ADMIN', 'eee', '26/01  18:32'),
('ADMIN', 'eee', '26/01  18:32'),
('ADMIN', '11', '26/01  18:32'),
('ADMIN', '222', '26/01  18:33'),
('ADMIN', '3333', '26/01  18:33'),
('ADMIN', '3333', '26/01  18:34'),
('ADMIN', 'we', '26/01  18:34'),
('ADMIN', 'er', '26/01  18:34'),
('ADMIN', 'rr', '26/01  18:34'),
('ADMIN', 'qqqqq', '26/01  23:06'),
('ADMIN', 'aaaaaaaaaaa', '26/01  23:06'),
('ADMIN', 'aaaaaaaaaaa', '26/01  23:07'),
('ADMIN', 'uuuuuuuuuuuu', '27/01  00:02'),
('ADMIN', 'fdcg', '27/01  00:02'),
('ADMIN', 'klgilhkl', '01/02  10:26'),
('ADMIN', 'prueba', '01/02  10:42'),
('ADMIN', 'sdf', '01/02  10:42'),
('ADMIN', 'LOOLO', '01/02  13:47'),
('dibu', 'hola a tofos', '03/02  21:01');

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
('juan', 'perez', 23337878, 452, 'juapolo', 'lolu', 556333),
('o', 'i', 1445, 234324234, 'tyyytr', '45', 0),
('qwqwwww', 'rrr', 788888888, 234324234, 'ADMINistr', '4555', 0),
('rio', 'asf', 2333, 444, 'pppq', 'rtrt', 0),
('luciaaaaaaa', 'benja', 11111, 22222, 'pppp', '111', 10399),
('leo', 'battaglia', 22390970, 234324234, 'admini', '123', 2542738),
('fer', 'pereyr', 456565, 4577222, 'fer_op', '11', 0),
('battaglia', 'benja', 57966333, 455633, 'benaj_b', '122', 0),
('tito', 'ggg', 245566, 666666666, 'jujuuu', '77', 0),
('qqqq', 'wwww', 222222, 33333, 'fff', 'tt', 2000),
('battaglia', 'benja', 9999, 666666666, 'admin444', '123', 20000),
('ahora', 'vmos', 8888899, 11111111, 'ahora', 'va', 53666),
('rd', 'df', 77777, 5296262, 'leandrooooo', '77889', 15000),
('ll', 'benja', 3333, 666666666, 'kkkk', '1212', 1000),
('asd', 'sad', 3, 234324234, 'as', '12', 39232),
('qqqq', 'wwww', 111, 2222, 'LeoB', '123', 0),
('gf', 'h', 56457, 234324234, 'leop', '333', 6277),
('qqqq', 'wwww', 35, 55, 'tuuuuu', '23', 15500),
('ll', 'benja', 34234, 666666666, 'eee', '123', 1500),
('martinez', 'luis', 363635594, 4225963, 'luis_m', '123', 32833),
('micaela', 'lola', 99999, 2494555, 'mica12', '44', 22500),
('pato', 'perez', 77422, 45, 'patito', '12', 196500),
('battaglia', 'fede', 223909706, 666666666, 'fede_ba', '111', 0),
('battaglia', 'Leandro', 33361575, 249488888, 'leo:boca', '144', 47500),
('messi', 'leonel', 4455544, 543524665, 'leomessi', '111', 0),
('martinez', 'emiliano', 33699999, 666666, 'dibu', '1212', 78381);

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
('GrupoA', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L'),
('GrupoB', '', '', '', '', '', '', '', '', '', '', '', ''),
('GrupoC', '', '', '', '', '', '', '', '', '', '', '', ''),
('GrupoD', '', '', '', '', '', '', '', '', '', '', '', ''),
('GrupoE', '', '', '', '', '', '', '', '', '', '', '', ''),
('GrupoF', '', '', '', '', '', '', '', '', '', '', '', ''),
('GrupoG', '', '', '', '', '', '', '', '', '', '', '', ''),
('GrupoH', '', '', '', '', '', '', '', '', '', '', '', '');

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
  `p14` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resultados_torneoarg`
--

INSERT INTO `resultados_torneoarg` (`fecha`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`) VALUES
('fecha1', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E');

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
('fecha1y2', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L'),
('fecha3y4', 'V', 'V', 'V', 'V', 'V', 'V', 'V', 'V', 'V', 'V'),
('fecha5y6', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n'),
('fecha7y8', '', '', '', '', '', '', '', '', '', ''),
('fecha9y10', '', '', '', '', '', '', '', '', '', ''),
('fecha11y12', '', '', '', '', '', '', '', '', '', ''),
('fecha13y14', '', '', '', '', '', '', '', '', '', ''),
('fecha15y16', '', '', '', '', '', '', '', '', '', ''),
('fecha17y18', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
