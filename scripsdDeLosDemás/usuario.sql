-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2021 a las 11:33:45
-- Versión del servidor: 8.0.22
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plataforma_cursos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` tinyint NOT NULL,
  `Usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Contraseña` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Tipo` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Correo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `IdPersona` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Usuario`, `Contraseña`, `Tipo`, `Correo`, `IdPersona`) VALUES
(2, 'Mr.UWU12', 'contra', 'D', 'uwu@gmail.com', NULL),
(3, 'CallIt', 'prueba2', 'D', 'mrvain@gmail.com', NULL),
(8, 'usereuser', 'user', 'D', 'bira@afjd.com', NULL),
(9, 'nayelhy', 'contra', 'D', 'naye@gmail.com', NULL),
(14, 'Lana Del Rey', 'xd', 'A', 'lana@gmail.com', NULL),
(19, 'Moti', 'lol', 'E', 'moti@gmail.com', NULL),
(20, 'ggggggg', 'jj', 'E', 'ggg@gmail.com', NULL),
(21, 'frankie', 'uwu', 'E', 'frank@gmail.com', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdPersona` (`IdPersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`IdPersona`) REFERENCES `persona` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
