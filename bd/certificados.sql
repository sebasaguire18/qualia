-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2024 a las 05:22:43
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qualia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificados`
--

CREATE TABLE `certificados` (
  `cert_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cert_nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cert_int_horaria` int(60) NOT NULL,
  `cert_tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cert_user` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cert_fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `cert_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `certificados`
--

INSERT INTO `certificados` (`cert_id`, `cert_nombre`, `cert_int_horaria`, `cert_tipo`, `cert_user`, `cert_fecha`, `cert_status`) VALUES
('61fa0cce92bad', 'Corte y Diseño de Empanadas', 50, '1', '1', '2022-02-01 23:47:10', 1),
('61fa1ee935637', 'Administración de Empresas', 15000, '4', '1', '2022-02-02 01:04:25', 1),
('6201fcfe92ea0', 'Técnico Progración de Software', 1000, '2', '1', '2022-02-08 00:17:50', 1),
('65e2917683c10', 'Manipulacion de alimentos', 100, '1', '', '2024-03-01 21:39:50', 1),
('65e2943fc3b65', 'Curso de baño de animales', 50, '1', '', '2024-03-01 21:51:43', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `emp_id` int(11) NOT NULL,
  `emp_nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `emp_nit` int(60) NOT NULL,
  `emp_direccion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `emp_telefono` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `emp_estado` varchar(1) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'A' COMMENT 'A: Activo  N: Sin pagar   B: Baja (cancelo suscripción)',
  `emp_activo` varchar(1) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'S' COMMENT 'S: Si activo N: No activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_id` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `rol_nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `rol_fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `rol_status` int(11) NOT NULL DEFAULT 1 COMMENT '0: Inactivo; 1: Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_id`, `rol_nombre`, `rol_fecha`, `rol_status`) VALUES
('64645990cb1d4', 'Administrador', '2024-02-23 23:23:50', 1),
('64645990cbqw1', 'Estudiante', '2024-02-23 23:24:12', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_dni` int(60) NOT NULL,
  `usu_ciudad_dep` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_correo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_pass` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_rol` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_prueba` int(11) NOT NULL DEFAULT 0 COMMENT 'valor en porcentaje teniendo en cuenta que se basa en 10 preguntas',
  `usu_fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `usu_status` int(11) NOT NULL DEFAULT 1 COMMENT '0: INACTIVO, 1: ACTIVO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `usu_dni`, `usu_ciudad_dep`, `usu_nombre`, `usu_correo`, `usu_pass`, `usu_rol`, `usu_prueba`, `usu_fecha`, `usu_status`) VALUES
(1, 23124762, 'Pereira R', 'Administrador', 'admin@mail.com', '123', '64645990cb1d4', 0, '2022-02-09 00:17:35', 1),
(2, 1010075303, 'Armenia Q', 'Sebastian Aguirre Vallejo', 'sebasaguire@mail.com', '123', '64645990cbqw1', 0, '2024-02-09 22:16:20', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
