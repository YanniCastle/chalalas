-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2023 a las 12:18:56
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
-- Indices de la tabla `usuarios_registrados`
--
ALTER TABLE `usuarios_registrados`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios_registrados`
--
ALTER TABLE `usuarios_registrados`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
