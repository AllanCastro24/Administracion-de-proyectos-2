-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2021 a las 08:04:07
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diccionario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dialectos`
--

CREATE TABLE `dialectos` (
  `Id_dialecto` int(11) NOT NULL,
  `Dialecto` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mostrar` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dialectos`
--

INSERT INTO `dialectos` (`Id_dialecto`, `Dialecto`, `mostrar`) VALUES
(1, 'Maya', 'S'),
(2, 'Yoreme', 'N'),
(3, 'Cahita', 'S'),
(8, 'Náhuatl', 'S'),
(12, 'Yaqui', 'S'),
(14, 'Méxica', 'N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diccionario`
--

CREATE TABLE `diccionario` (
  `Id_diccionario` int(11) NOT NULL,
  `Id_dialecto` int(11) NOT NULL,
  `Palabra` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Traduccion` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `diccionario`
--

INSERT INTO `diccionario` (`Id_diccionario`, `Id_dialecto`, `Palabra`, `Traduccion`) VALUES
(1, 1, 'AKLAX', 'Enano'),
(2, 1, 'AM', 'Araña'),
(3, 1, 'AAK’', 'Lengua'),
(4, 1, 'AALAK’', 'Animal doméstico'),
(5, 8, 'Kal-le', 'casa'),
(6, 8, 'Tamal-le', 'tamal'),
(7, 8, 'Komal-le', 'comal'),
(8, 8, 'Tlaxkal-le', 'tortilla'),
(9, 8, 'Kual-le', 'bien'),
(11, 8, 'paina', 'correr'),
(12, 12, 'aamu', 'cazar'),
(13, 12, 'aapat', 'Delante de el'),
(14, 12, 'achai', 'Padre'),
(15, 12, 'ama butte', 'Demasiado'),
(16, 12, 'baajta', 'aflojar'),
(23, 3, 'chugo', 'Perro'),
(24, 3, 'mizi', 'Gato'),
(25, 3, 'tosali', 'Blanco'),
(26, 3, 'schiari', 'Verde'),
(27, 3, 'coba', 'Cabeza'),
(28, 3, 'choni', 'Cabello'),
(29, 3, 'cami', 'Brazo'),
(33, 1, 'Tojol', 'Valor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `Usuario` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contraseña` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_activo` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `Usuario`, `Contraseña`, `email`, `usuario_activo`) VALUES
(1, 'admin', 'admin', 'alan.castro.1226.ac@gmail.com', 'S'),
(126, 'Allan Castro', 'alancastro24', 'acastro12303@outlook.com', 'S'),
(138, 'Brandon Jimenez', 'brandon123', 'brandonj@gmail.com', 'S'),
(139, 'Alondra Gardea', 'alondra123', 'alo_gardea@gmail.com', 'S');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dialectos`
--
ALTER TABLE `dialectos`
  ADD PRIMARY KEY (`Id_dialecto`);

--
-- Indices de la tabla `diccionario`
--
ALTER TABLE `diccionario`
  ADD PRIMARY KEY (`Id_diccionario`),
  ADD KEY `id_dialecto_idx` (`Id_dialecto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dialectos`
--
ALTER TABLE `dialectos`
  MODIFY `Id_dialecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `diccionario`
--
ALTER TABLE `diccionario`
  MODIFY `Id_diccionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `diccionario`
--
ALTER TABLE `diccionario`
  ADD CONSTRAINT `id_dialecto` FOREIGN KEY (`Id_dialecto`) REFERENCES `dialectos` (`Id_dialecto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
