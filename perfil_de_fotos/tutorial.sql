-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2023 a las 13:06:06
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
-- Base de datos: `tutorial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `foto` text NOT NULL,
  `foto1` text NOT NULL,
  `foto2` text NOT NULL,
  `foto3` text NOT NULL,
  `psw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `email`, `foto`, `foto1`, `foto2`, `foto3`, `psw`) VALUES
('jose', 'jose@gmail.com', 'images/FB_IMG_1691129647257.jpg', 'images/FB_IMG_1673924602863.jpg', 'images/FB_IMG_1670735331635.jpg', 'images/FB_IMG_1667947141616.jpg', '123456'),
('julio', 'jucecado@gmail.com', 'images/IMG_20230423_175747_290.jpg', '', '', '', '123456'),
('maria', 'maria@gmail.com', 'images/FB_IMG_1681249420422.jpg', '', '', '', '123456'),
('paco', 'paco@gmail.com', 'images/FB_IMG_1682310032881.jpg', 'images/FB_IMG_1669058684989.jpg', '', '', '123456'),
('paquita', 'paquita@gmail.com', 'images/FB_IMG_1667947141616.jpg', 'images/FB_IMG_1674478949245.jpg', '', '', '123456'),
('pedro', 'pedro@gmail.com', 'images/IMG_20221112_111654_742.jpg', '', '', '', '123456'),
('Felipe de Jesús Lópe', 'xelipe.deje@gmail.com', 'images/audifonos bluetooh.jpg', '', '', '', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
