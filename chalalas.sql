-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2023 a las 14:07:45
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chalalas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(25) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Comentario` text NOT NULL,
  `Imagen` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`Id`, `Titulo`, `Fecha`, `Comentario`, `Imagen`) VALUES
(2, 'Ayuda a Usuario', '2023-03-29 07:54:00', 'olvide contraseña', 'morada1.png'),
(3, 'soporte tecnico', '2023-03-29 07:57:32', 'necesito un cable LAN', 'Codigo matrix.png'),
(6, 'Tercera entrada', '2023-03-29 17:38:14', 'cxvcxcc dfg ddgdgfg dfgdgdfgdfg dfgh dfg\r\ndfgdgf\r\ndfg dfg dfgdfgdfg dfg dfg dfg dfg dfg dfgd   dfgdfg fg dfg dfg dfg dfg dfg dfgdfg dfg dfgdfg dfg dfgdfg dfg dfgd dfgdfg', 'morada2.png'),
(8, 'Otro comentario', '2023-03-30 07:02:46', 'Probando en nueva carpeta hj hjh  hjh jhj h jh h h jh h hjhjh h hj h h h hjhj hj h jh jh hj hj hjhj hj h hj ', 'OTAKU.png'),
(9, 'Saludo', '2023-04-12 23:16:54', 'bla bla bla', 'Chalalas icono.png'),
(10, 'ORGANIZAR TABLAS', '2023-06-13 11:42:04', 'Estos datos estan en otra base de datos.\r\nCorregir y meter tabla en base llamada: pruebas\r\n\r\nrecomendación; agregar la tabla (contenido) a pruebas\r\nla tabla esta en (bbddblog)', ''),
(11, 'NUEVOS DATOS', '2023-06-13 12:59:06', 'PROBANDO DATOS EN BASE (pruebas)', ''),
(12, '2222222', '2023-06-13 13:04:40', '22222222222', ''),
(13, '3333333', '2023-06-13 13:13:45', '33333333333', ''),
(14, 'prueba de raul', '2023-07-13 02:41:23', 'lala lala lalal lalal lal lal lal lal lal lal lal lal lal lal lal lal lal lal lal lal lal lal alal lal lal lal lal lal', 'aaa.PNG'),
(15, 'probando blog 1', '2023-07-29 13:46:27', 'agregando un comentario en el blog', 'aaa.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_registrados`
--

CREATE TABLE `usuarios_registrados` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(35) NOT NULL,
  `USUARIOS` varchar(20) NOT NULL,
  `MAIL` varchar(40) NOT NULL,
  `TELEFONO` varchar(20) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_registrados`
--

INSERT INTO `usuarios_registrados` (`ID`, `NOMBRE`, `USUARIOS`, `MAIL`, `TELEFONO`, `PASSWORD`) VALUES
(1, 'maria', 'maria1', 'maria@gmail.com', '5544332211', '$2y$12$69BwbNjbAhzLJ1Z8OopQS.dnO7C4RGuEgC.qKwrg9BdminPnBQEwK');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios_registrados`
--
ALTER TABLE `usuarios_registrados`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios_registrados`
--
ALTER TABLE `usuarios_registrados`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
