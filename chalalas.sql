-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2023 a las 02:40:59
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
-- Base de datos: `pruebas`
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
  `Imagen` varchar(35) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`Id`, `Titulo`, `Fecha`, `Comentario`, `Imagen`, `precio`) VALUES
(15, 'lampara', '2023-08-14 01:52:46', 'Lampara de mano inalambrica', 'lampara_amarilla_1.jpg', 220),
(16, 'cargador', '2023-08-14 02:00:19', 'cargador para celular usb', 'cargador_sony_1.jpg', 100),
(17, 'laptop HP', '2023-08-14 02:03:34', 'Laptop blanca de 15\"', 'IMG_20230523_173837_627.jpg', 4000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuarios`
--

CREATE TABLE `datos_usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Apellido` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Direccion` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_usuarios`
--

INSERT INTO `datos_usuarios` (`Id`, `Nombre`, `Apellido`, `Direccion`) VALUES
(1, 'Ana ', 'Lopez', 'Gran Via'),
(4, 'Sandrita', 'Martin  ', 'Sagasta'),
(5, 'Juan ', 'Gomez', 'Gran Via'),
(7, 'Yanni ', 'Castle ', 'oriente 253,  57'),
(8, 'Toto', 'Torres', 'Argentina'),
(10, 'Toreto', 'Tomas ', 'Pamplona '),
(12, 'Jose', 'Carrilo', 'Barcelona'),
(13, 'Maria', 'Campos', 'Mexici D.F.'),
(14, 'Lalo  ', 'Toscano  ', 'Argeliassfghfgh'),
(17, 'fgh', 'fgh', 'fgh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuarios2`
--

CREATE TABLE `datos_usuarios2` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Usuarios` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Mail` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_usuarios2`
--

INSERT INTO `datos_usuarios2` (`Id`, `Nombre`, `Usuarios`, `Mail`, `Telefono`, `Password`) VALUES
(4, 'Sandrita', 'Martin  ', 'Sagasta', '', ''),
(5, 'Juan ', 'Gomez', 'Gran Via', '', ''),
(7, 'Yanni ', 'Castle ', 'oriente 253,  57', '', ''),
(8, 'Toto', 'Torres', 'Argentina', '', ''),
(10, 'Toreto', 'Tomas ', 'Pamplona ', '', ''),
(12, 'Jose', 'Carrilo', 'Barcelona', '', ''),
(13, 'Maria', 'Campos', 'Mexici D.F.', '', ''),
(14, 'Lalo  ', 'Toscano  ', 'Argeliassfghfgh', '', ''),
(17, 'fgh', 'fgh', 'fgh', '', ''),
(18, 'lala', 'lala', 'lala', '', ''),
(19, 'werwer', 'werwer', 'werwer', '', ''),
(22, 'Juan Perez', 'Locochon 25', 'choncho@yahoo.com.mx ', '554777777', '123456789'),
(23, 'SSSSS', 'SSSSS', 'SSS', 'SSSS', 'SSSSS'),
(27, '8888', '88888', '888', '8888', '8888'),
(28, '555', '555', '555', '555', '555'),
(29, 'AAAAAAAAAAA', 'AAAAAAAAAAAAAA', 'AAAAAAAAAAAAA', 'AAAAAAAAAAAA', 'AAAAAAAAAAAAA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `correo` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `usu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`correo`, `pass`, `usu`) VALUES
('yannicastle5@gmail.com', '123456', 'Yanni'),
('jucecado@yahoo.com.mx', '123456', 'jucecado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilusuarios`
--

CREATE TABLE `perfilusuarios` (
  `Id` int(11) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Perfil` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfilusuarios`
--

INSERT INTO `perfilusuarios` (`Id`, `Usuario`, `Password`, `Perfil`) VALUES
(1, 'pepe', '123456', 'administrador'),
(2, 'maria', '123456', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuarios` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuarios`, `password`) VALUES
(1, 'pepe pepe', '123456'),
(2, 'Maria', '54321'),
(8, 'oscar', '24568');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_pass`
--

CREATE TABLE `usuarios_pass` (
  `ID` int(11) NOT NULL,
  `USUARIOS` varchar(20) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_pass`
--

INSERT INTO `usuarios_pass` (`ID`, `USUARIOS`, `PASSWORD`) VALUES
(7, 'Jose', '$2y$12$FI.PqCG8447htT5bXf9ilOfTfsHU5keZJNYAOP./7ShbV5y2aRjOa'),
(9, 'Pedro', '$2y$12$h0shJTXr0oFJ3QaO/JdH7.Cna2zHFd4CQ0..ESH7gsePMQuZvrAJe'),
(10, 'Guadalupe', '$2y$12$fdtoeWvi8P8HtM7siQR/8.qsf/3AN8fwglJp2FVEYD3PJyiPRbJB.'),
(11, 'Maria', '54321'),
(12, 'juan', '$2y$12$PyOTUWDJLBaxvM4/FaVYdexVB0aXFSfrNaCWZX4UecpByw6ijrKOK'),
(13, 'Fernando', '$2y$12$ybGCTIX3WHTjorfGSKpG5uWfhzl.Lsu24BsLaojffiKVp.aLXILSe'),
(14, 'pepe', '$2y$12$ExvDfKGcYAh9FFBOuOyJ3edngVsBsGLFG10QHBuwfio4n6uskvZU.'),
(15, 'lolo', '$2y$12$nB4iBUTUQKdRq7lxAsrE7OksVjlMEwB9hsVAxQWMIGMVuR3YVeZcq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_pass2`
--

CREATE TABLE `usuarios_pass2` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(35) NOT NULL,
  `USUARIOS` varchar(20) NOT NULL,
  `MAIL` varchar(40) NOT NULL,
  `TELEFONO` varchar(20) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_pass2`
--

INSERT INTO `usuarios_pass2` (`ID`, `NOMBRE`, `USUARIOS`, `MAIL`, `TELEFONO`, `PASSWORD`) VALUES
(21, 'toledo', 'toledo', 'toledo@gmail.com', '5544332211', '$2y$12$ROm5Vev/7zVSi9IJ2d14v.Xgpg6f.GIRJZbPj4fdtU.GQ15nWsw7y'),
(27, 'Yanni', 'Yanni Castle', 'yannicastle5@gmail.com', '5517602354', '$2y$12$ZEbqCPoPKeVSINWGTtg9neJ13xBUDPq7E5eVJaQWlBFCEhKnefmJ2'),
(30, 'jose', 'jose5', 'jose5@gmail.com', '5544332211', '$2y$12$YjVi6ZfbnqmUkjzecwAaVOJ8chatTTWyDsklbeiD2Q6jgtwUgFvAu'),
(31, 'teresa', 'teresa5', 'teresa5@gmail.com', '5544332211', '$2y$12$uRWKzOQeuePCXetqN63fh.roOfjrpYzhPuVfd//gMeWxQEdU47Rwi'),
(32, 'teresa 5555555', 'teresa5 ', 'teresa5@gmail.com ', '5544332211 ', '$2y$12$YhZzi7iHutX4rSHmdNOUpu1PK4Y6BeS3jLu2NMj1sO1thDnBw/n/m'),
(33, 'teresa 00000', 'teresa5 ', 'teresa5@gmail.com ', '5544332211 ', '$2y$12$hEKFLQlqNAfzUSCOjtwqbONpK1bJ1HQ1eiRGriLGn3jI/tB5bhEme'),
(34, 'jucecado 55555', 'jucecado5 ', 'jucecado@yahoo.com.mx ', '5525289298 ', '$2y$12$MeMm2DX51DcQyZcBbJCaPeHYtiRCdSu8.4cgKFPO8PDeBaXhTIhF6'),
(41, 'Oscar Chavez Chavez ', 'Oscarito25 ', 'oscarito25@gmail.com  ', '25525289298  ', '$2y$12$Lqz82MpxzShZ7vgqX6a7MeMR8z6l6zLWdq7d.3LNHDpY33EmvjVPa'),
(42, 'Guadalupe', 'Guadalupe', 'guadalupe@gmail.com', '5544332211', '$2y$12$XBE.3TSmSzLi0gQx2Ei9I.TVKjegiomZp7n3n3//5Wr/TiobSccN6'),
(43, 'pacatelas', 'pacatelas', 'pacatelas@gmail.com', '5544332211', '$2y$12$f5UMKbJEbA4xvNQh5c68GufC.jz.rhInQlJM/5mS0n8uKzk.kNpNy'),
(44, 'Maria Aguilar', 'Maria32', 'yannicastle55@gmail.com', '5544332211', '$2y$12$LZuEwW20hvlqDwr4E9zoEebocQP9NL5aryN8Dfafbdomhnj9mN/GO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `datos_usuarios2`
--
ALTER TABLE `datos_usuarios2`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `perfilusuarios`
--
ALTER TABLE `perfilusuarios`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_pass`
--
ALTER TABLE `usuarios_pass`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios_pass2`
--
ALTER TABLE `usuarios_pass2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `datos_usuarios2`
--
ALTER TABLE `datos_usuarios2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `perfilusuarios`
--
ALTER TABLE `perfilusuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios_pass`
--
ALTER TABLE `usuarios_pass`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios_pass2`
--
ALTER TABLE `usuarios_pass2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
