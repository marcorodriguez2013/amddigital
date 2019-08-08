-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2019 a las 00:05:40
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `amdigital`
--
CREATE DATABASE IF NOT EXISTS `amdigital` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `amdigital`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id` int(11) NOT NULL,
  `usu_nombres` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_apellidos` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_email` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_telefono` int(11) NOT NULL,
  `usu_celular` int(11) NOT NULL,
  `usu_dni` int(11) NOT NULL,
  `usu_fechaalta` date NOT NULL,
  `usu_usuario` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_password` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_acceso` int(11) NOT NULL,
  `usu_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id`, `usu_nombres`, `usu_apellidos`, `usu_email`, `usu_telefono`, `usu_celular`, `usu_dni`, `usu_fechaalta`, `usu_usuario`, `usu_password`, `usu_acceso`, `usu_estado`) VALUES
(9, 'Adiasoft', '', 'marcorodriguez2013@outlook.com', 424550, 959303030, 45463902, '2018-09-28', 'admin', '13c86565b051b5477c38dec5cefc3891273fc5c743c8578e49c96bea3aa0a0d1bfc062b70bd4c9dacdd3179b155319e72e895d757e6bc4d40f9fddf0eb3f643a', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
