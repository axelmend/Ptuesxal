-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2024 a las 20:41:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `t_uesxal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asigna`
--

CREATE TABLE `asigna` (
  `Punto` float DEFAULT NULL,
  `Parcial` varchar(50) DEFAULT NULL,
  `Id_materia` int(11) DEFAULT NULL,
  `M_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `Id_carrera` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`Id_carrera`, `Nombre`) VALUES
(1, 'Ingenieria en Sistemas Computacionales'),
(2, 'Ingenieria en Mecanica Automotriz'),
(3, 'Ingenieria en Gestion Empresarial'),
(4, 'licenciatura en Psicologia Industrial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Id_categoria` int(11) NOT NULL,
  `Tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id_categoria`, `Tipo`) VALUES
(1, 'Deportivo'),
(2, 'Cultural');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `Id_materia` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Id_carrera` int(11) DEFAULT NULL,
  `Id_semestre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `Id_semestre` int(11) NOT NULL,
  `N_semestre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`Id_semestre`, `N_semestre`) VALUES
(1, 'Primero'),
(2, 'Segundo'),
(3, 'Tercero'),
(4, 'Cuarto'),
(5, 'Quinto'),
(6, 'Sexto'),
(7, 'Septimo'),
(8, 'Octavo'),
(9, 'Noveno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleres`
--

CREATE TABLE `talleres` (
  `Id_talleres` int(11) NOT NULL,
  `Dia` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Cupo` varchar(50) DEFAULT NULL,
  `Id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `talleres`
--

INSERT INTO `talleres` (`Id_talleres`, `Dia`, `Hora`, `Nombre`, `Status`, `Cupo`, `Id_categoria`) VALUES
(1, '2024-11-19', '13:00:00', 'Basketball', 'Activo', 'Vacio', 1),
(2, '2024-11-19', '13:00:00', 'Futbol', 'Activo', 'Vacio', 1),
(3, '2024-11-19', '14:00:00', 'Ajedrez', 'Activo', 'Vacio', 2),
(4, '2024-11-19', '15:00:00', 'Teatro', 'Activo', 'Vacio', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Matricula` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apaterno` varchar(50) DEFAULT NULL,
  `Amaterno` varchar(50) DEFAULT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Id_carrera` int(11) DEFAULT NULL,
  `Id_semestre` int(11) DEFAULT NULL,
  `Id_taller` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Matricula`, `Nombre`, `Apaterno`, `Amaterno`, `Tipo`, `Status`, `Id_carrera`, `Id_semestre`, `Id_taller`) VALUES
(1, 'Axel', 'Mendoza', 'Mejia', 'Admin', 'Activo', NULL, NULL, NULL),
(2, 'Jacob', 'Gonzales', 'Reza', 'Alumno', 'Activo', 1, 7, NULL),
(3, 'Sandra ', 'Alvarado ', 'Velazquez', 'Alumno', 'Activo', 3, 7, NULL),
(4, 'Brisa', 'Gutrieerez', 'Hernandez', 'Alumno', 'Activo', 2, 7, NULL),
(5, 'Lizhet', 'Sanchez', 'Sotelo', 'Docente', 'Activo', NULL, NULL, NULL),
(6, 'Jesus', 'Mares', 'Montes', 'Coordinador de Taller', 'Activo', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asigna`
--
ALTER TABLE `asigna`
  ADD KEY `Id_materia` (`Id_materia`),
  ADD KEY `M_usuario` (`M_usuario`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`Id_carrera`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id_categoria`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`Id_materia`),
  ADD KEY `Id_carrera` (`Id_carrera`),
  ADD KEY `Id_semestre` (`Id_semestre`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`Id_semestre`);

--
-- Indices de la tabla `talleres`
--
ALTER TABLE `talleres`
  ADD PRIMARY KEY (`Id_talleres`),
  ADD KEY `Id_categoria` (`Id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Matricula`),
  ADD KEY `Id_carrera` (`Id_carrera`),
  ADD KEY `Id_semestre` (`Id_semestre`),
  ADD KEY `Id_taller` (`Id_taller`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asigna`
--
ALTER TABLE `asigna`
  ADD CONSTRAINT `asigna_ibfk_1` FOREIGN KEY (`Id_materia`) REFERENCES `materias` (`Id_materia`),
  ADD CONSTRAINT `asigna_ibfk_2` FOREIGN KEY (`M_usuario`) REFERENCES `usuarios` (`Matricula`);

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`Id_carrera`) REFERENCES `carrera` (`Id_carrera`),
  ADD CONSTRAINT `materias_ibfk_2` FOREIGN KEY (`Id_semestre`) REFERENCES `semestre` (`Id_semestre`);

--
-- Filtros para la tabla `talleres`
--
ALTER TABLE `talleres`
  ADD CONSTRAINT `talleres_ibfk_1` FOREIGN KEY (`Id_categoria`) REFERENCES `categoria` (`Id_categoria`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_carrera`) REFERENCES `carrera` (`Id_carrera`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`Id_semestre`) REFERENCES `semestre` (`Id_semestre`),
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`Id_taller`) REFERENCES `talleres` (`Id_talleres`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
