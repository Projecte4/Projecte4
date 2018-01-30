-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2018 a las 16:41:14
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_mycontacts`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `direccion1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `direccion2` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_postal1` int(5) NOT NULL,
  `codigo_postal2` int(5) DEFAULT NULL,
  `latitud1` int(9) NOT NULL,
  `longitud1` int(9) NOT NULL,
  `latitud2` int(9) DEFAULT NULL,
  `longitud2` int(9) DEFAULT NULL,
  `telefono` int(9) NOT NULL,
  `id_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id_contacto`, `nombre`, `apellidos`, `correo`, `direccion1`, `direccion2`, `codigo_postal1`, `codigo_postal2`, `latitud1`, `longitud1`, `latitud2`, `longitud2`, `telefono`, `id_usu`) VALUES
(1, 'Alberto', 'Blanco', 'Ablanco@gmail.com', 'iokese', NULL, 0, NULL, 0, 0, NULL, NULL, 987654321, 3),
(2, 'Pepe', 'Marron', 'pmarron@gmail.com', 'un lugar de la mancha', NULL, 0, NULL, 0, 0, NULL, NULL, 9886534, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `nombre_usu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos_usu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nick` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `nombre_usu`, `apellidos_usu`, `correo`, `nick`, `password`) VALUES
(2, 'Anush', 'Aram Zafra', '', 'anush97', 'QAZ123qaz'),
(3, 'David', 'Martinez Punzano', 'La verdad es que no', 'damapu96', 'QWEqwe123'),
(5, 'hola', 'quetal', '', 'estoy', 'bien'),
(6, 'Felipe', 'Gonzalez', '', 'fego', 'QWEqwe123'),
(8, '', '', '', '', 'QWEqwe123'),
(10, 'vil', 'gioÃ±', '', 'Ã±Ã±Ã±Ã±', '1234'),
(11, 'sdg', 'tgh', '', 'fg', 'qwe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `FK_id_usu` (`id_usu`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`),
  ADD UNIQUE KEY `clau_nick` (`nick`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `FK_id_usu` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id_usu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
