-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2021 a las 14:26:04
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
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Descripcion` varchar(50) DEFAULT NULL,
  `Estado` tinyint(1) DEFAULT NULL,
  `Id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Descripcion`, `Estado`, `Id`) VALUES
('Programación', 1, 1),
('Dibujo técnico', 1, 2),
('Química', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `IdCurso` int NOT NULL,
  `CodigoOperacion` char(18) DEFAULT NULL,
  `Monto` char(18) DEFAULT NULL,
  `Estado` char(18) DEFAULT NULL,
  `Id` int NOT NULL,
  `IdAlumno` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`IdCurso`, `CodigoOperacion`, `Monto`, `Estado`, `Id`, `IdAlumno`) VALUES
(1, '7283', '15.0000', '1', 6, 13),
(1, '7283', '15.0000', '1', 7, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `Nombre` varchar(20) DEFAULT NULL,
  `Descripcion` varchar(300) DEFAULT NULL,
  `Precio` decimal(10,4) DEFAULT NULL,
  `Idioma` varchar(20) DEFAULT NULL,
  `Duracion` date DEFAULT NULL,
  `Id` int NOT NULL,
  `IdCategoria` int DEFAULT NULL,
  `Estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`Nombre`, `Descripcion`, `Precio`, `Idioma`, `Duracion`, `Id`, `IdCategoria`, `Estado`) VALUES
('Fundamentos de Java', 'En este curso darás tus primero pasos con el lenguaje Java', '15.0000', 'Español', NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `Id` tinyint NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `ApellidoPaterno` varchar(40) NOT NULL,
  `ApellidoMaterno` varchar(40) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Tipo` char(1) NOT NULL,
  `Estado` tinyint NOT NULL,
  `Pais` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`Id`, `Nombres`, `ApellidoPaterno`, `ApellidoMaterno`, `FechaNacimiento`, `Tipo`, `Estado`, `Pais`) VALUES
(13, 'justin', 'bieber', 'malette', '2021-06-05', 'E', 1, 'NF'),
(24, 'usuario', 'Sesion', 'dias', '2021-06-05', 'E', 1, 'PE'),
(25, 'prueba', 'PR', 'ba', '2021-06-05', 'E', 1, 'PE'),
(26, '', '', '', '2021-06-05', 'E', 1, 'PE'),
(27, '', '', '', '2021-06-05', 'E', 1, 'PE');

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
(2, 'Mr.UWU12', 'contra', 'D', 'uwu@gmail.com', 24),
(3, 'CallIt', 'prueba2', 'D', 'mrvain@gmail.com', 24),
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
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdCurso` (`IdCurso`),
  ADD KEY `IdAlumno` (`IdAlumno`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdCategoria` (`IdCategoria`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `usuario_ibfk_1` (`IdPersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `Id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`IdCurso`) REFERENCES `curso` (`Id`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`IdAlumno`) REFERENCES `persona` (`Id`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`Id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`IdPersona`) REFERENCES `persona` (`Id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
