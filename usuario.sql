-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-06-2023 a las 20:16:35
-- Versión del servidor: 8.0.22
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdform`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(30) NOT NULL,
  `papellido` varchar(30) NOT NULL,
  `sapellido` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login` varchar(20) NOT NULL,
  `passw` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `papellido`, `sapellido`, `email`, `login`, `passw`) VALUES
('Carla', 'Perez', 'Marinez', 'CarlaM@msn.com', 'Carla22', 'carla52'),
('Maria', 'Garcia', 'Garcia', 'cito@fmdi.com', 'MariaG', '123456'),
('Carlos', 'Perez', 'Salgado', 'd@msn.com', 'Carlos', '1234567'),
('Margarita', 'Silvestre', 'Delgado', 'Margarita@gmail.com', 'Margarita', '85269'),
('Pilar', 'Garcia', 'Sanchez', 'Pilar@gmail.com', 'Pilar', 'Pilar586'),
('Ricardo', 'Sanchez', 'Arias', 'RicardoA@hotmail.com', 'Ricardo', '147258'),
('Victor', 'Santiago', 'Def', 'vsd@gmail.com', 'vsd', 'AAAA'),
('Yessica', 'Sanchez', 'Vences', 'yssksanchez@hotmail.com', 'Yessica28', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
