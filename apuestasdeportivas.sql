-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-01-2023 a las 18:46:22
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
  `fecha` varchar(5) NOT NULL,
  `p1` char(1) NOT NULL,
  `p2` char(1) NOT NULL,
  `p3` char(1) NOT NULL,
  `p4` char(1) NOT NULL,
  `p5` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `apuesta_eliminatorias`
--

INSERT INTO `apuesta_eliminatorias` (`usuario`, `fecha`, `p1`, `p2`, `p3`, `p4`, `p5`) VALUES
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('usuario_nm', 'f1', 'L', 'L', 'L', 'E', 'E'),
('usuario_nm', 'f1', 'L', 'L', 'L', 'E', 'E'),
('usuario_nm', 'f1', 'L', 'L', 'V', 'V', 'E'),
('ADMIN', 'f1', 'L', 'L', 'V', 'V', 'E'),
('ADMIN', 'f1', 'V', 'E', 'E', 'L', 'L'),
('ADMIN', 'f1', 'V', 'E', 'E', 'L', 'L'),
('ADMIN', 'f1', 'L', 'E', 'E', 'L', 'V'),
('ADMIN', 'f1', 'L', 'L', 'L', 'L', 'L'),
('mica12', 'f1', 'L', 'E', 'V', 'E', 'E'),
('ADMIN', 'f1', 'L', 'V', 'E', 'L', 'E'),
('ADMIN', 'f1', 'L', 'L', 'E', 'E', 'V'),
('ADMIN', 'f1', 'L', 'L', 'L', 'L', 'L'),
('luis_m', 'f1', 'L', 'L', 'E', 'E', 'V'),
('luis_m', 'f1', 'E', 'E', 'E', 'L', 'L');

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
  PRIMARY KEY (`dni`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`apellido`, `nombre`, `dni`, `telefono`, `usuario`, `clave`, `saldo`) VALUES
('juan', 'perez', 23337878, 452, 'juapolo', 'lolu', 0),
('o', 'i', 1445, 234324234, 'tyyytr', '45', 0),
('qwqwwww', 'rrr', 788888888, 234324234, 'ADMINistr', '4555', 0),
('rio', 'asf', 2333, 444, 'pppq', 'rtrt', 0),
('benja', 'benja', 11111, 22222, 'ppp', '123', 0),
('tpep', 'jghj', 22390970, 234324234, 'admin', '123', 145),
('fer', 'pereyr', 456565, 4577222, 'fer_op', '11', 0),
('battaglia', 'benja', 57966333, 455633, 'benaj_b', '122', 0),
('tito', 'ggg', 245566, 666666666, 'jujuuu', '77', 0),
('qqqq', 'wwww', 222222, 33333, 'fff', 'tt', 0),
('battaglia', 'benja', 9999, 666666666, 'admin444', '123', 0),
('ahora', 'vmos', 8888899, 11111111, 'ahora', 'va', 0),
('rd', 'df', 77777, 5296262, 'leandrooooo', '77889', 0),
('ll', 'benja', 3333, 666666666, 'kkkk', '1212', 0),
('asd', 'sad', 3, 234324234, 'as', '12', 0),
('qqqq', 'wwww', 111, 2222, 'LeoB', '123', 0),
('gf', 'h', 56457, 234324234, 'leop', '333', 0),
('qqqq', 'wwww', 35, 55, 'tuuuuu', '23', 0),
('ll', 'benja', 34234, 666666666, 'eee', '123', 0),
('martinez', 'luis', 363635594, 4225963, 'luis_m', '123', 0),
('micaela', 'lola', 99999, 2494555, 'mica12', '44', 0),
('pato', 'perez', 77422, 45, 'patito', '12', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
