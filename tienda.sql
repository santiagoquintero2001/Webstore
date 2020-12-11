-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2020 a las 01:12:15
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `precio` int(15) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `descripcion`, `cantidad`, `precio`, `foto`) VALUES
(8, 'Chocochips', 'Cookie with chocochips', 22, 1000, 'https://github.com/santiagoquintero2001/fotos/blob/main/chocochips-cookie.jpg?raw=true'),
(9, 'ChocoJet', 'Cookie with Jet', 25, 1000, 'https://github.com/santiagoquintero2001/fotos/blob/main/chocojet-cookie.jpg?raw=true'),
(10, 'Chocolate^3', 'Cookie with 3 differents type of chocolate.', 30, 1000, 'https://github.com/santiagoquintero2001/fotos/blob/main/chocolate3-cookie.jpg?raw=true'),
(11, 'Oreo', 'Cookie with oreo', 28, 1000, 'https://github.com/santiagoquintero2001/fotos/blob/main/oreo-cookie.jpg?raw=true'),
(13, 'Red Velvet', 'Red Velvet´s cookie', 25, 1000, 'https://github.com/santiagoquintero2001/fotos/blob/main/redvelvet-cookie.jpg?raw=true');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
