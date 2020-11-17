-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2020 a las 03:42:15
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petsland`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(200) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `cantidad`, `descripcion`, `tipo`, `foto`) VALUES
(4, 'Chunky pollo 25', 2, 'bulto sabor a pollo por 25 kilos', '', 'https://github.com/ax14m/img_pets/blob/main/chunk1.jpeg?raw=true'),
(5, 'delidog', 1, 'Paquete 10 unidades ', '', 'https://github.com/ax14m/img_pets/blob/main/delidog.jpeg?raw=true'),
(6, 'Dogurmet', 2, 'bulto x 30 kilos', '', 'https://github.com/ax14m/img_pets/blob/main/dogurmet.jpeg?raw=true'),
(7, 'Dogurmet', 3, 'bulto x 30 kilos', '', 'https://github.com/ax14m/img_pets/blob/main/dogurmet.jpeg?raw=true'),
(8, 'nexgar', 1, 'antipulgas', '', 'https://github.com/ax14m/img_pets/blob/main/nexgard.jpeg?raw=true'),
(9, 'Pelota', 5, 'pelota grande', '', 'https://github.com/ax14m/img_pets/blob/main/pelota.jpeg?raw=true'),
(10, 'Taste Of de Will', 3, 'Bulto 15 LB', '', 'https://github.com/ax14m/img_pets/blob/main/nexgard.jpeg?raw=true'),
(11, 'vara gato', 10, 'juguetes gato', '', 'https://github.com/ax14m/img_pets/blob/main/varagato.jpeg?raw=true'),
(12, 'Pipican', 2, 'adiestrador', '', 'https://github.com/ax14m/img_pets/blob/main/pipican.jpeg?raw=true');

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
  MODIFY `idProducto` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
