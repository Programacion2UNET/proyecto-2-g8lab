-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-02-2018 a las 23:06:51
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto-progra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `place`
--

CREATE TABLE `place` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(64) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `description` text NOT NULL,
  `place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `place`
--

INSERT INTO `place` (`id`, `name`, `category`, `start`, `end`, `created_at`, `description`, `place`) VALUES
(2, 'este ', '2', '0001-01-01', '0023-11-10', '2018-02-28 13:42:27', 'es ', 'unet'),
(3, 'este ', '2', '0001-01-01', '0023-11-10', '2018-02-28 13:43:16', 'es ', 'unet'),
(4, 'otro torneitox', '3', '2018-02-21', '2018-02-18', '2018-02-28 13:54:05', 'sadasd', 'asdsad'),
(5, 'copa si va', '1', '2018-02-23', '2018-06-08', '2018-02-28 18:34:45', 'si va ps', 'acapue'),
(6, 'asd', '1', '2017-07-13', '2018-02-10', '2018-02-28 18:40:48', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Registated`
--

CREATE TABLE `Registated` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tournament_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Registated`
--

INSERT INTO `Registated` (`id`, `user_id`, `created_at`, `tournament_id`) VALUES
(1, 4, '2018-02-26 17:09:48', 1),
(2, 4, '2018-02-28 18:21:32', 4),
(3, 4, '2018-02-28 18:21:40', 2),
(4, 9, '2018-02-28 18:23:06', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `team_name` varchar(255) NOT NULL,
  `id` bigint(20) NOT NULL,
  `in_charge` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`team_name`, `id`, `in_charge`, `user_name`, `short_name`, `email`, `password`, `create_at`, `admin`) VALUES
('griecomv', 4, 'Mario Grieco', 'mariojosuexz@gmail.com', 'griecomv', 'mariojosuexz@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '2018-02-22 00:52:17', 1),
('test tema name', 9, 'griecomv', 'test', 'test short demo', 'test@test.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '2018-02-23 15:06:14', 0),
('mario', 11, 'yo', 'mario josue grieco', 'mario', 'mariojosuexz@gmail20.com', '7688b6ef52555962d008fff894223582c484517cea7da49ee67800adc7fc8866', '2018-02-27 14:39:16', 0),
('Demo Tem', 12, 'EL DEMO', 'demo user name', 'demo short name', 'demo@demo.com', 'd3ad9315b7be5dd53b31a273b3b3aba5defe700808305aa16a3062b76658a791', '2018-02-28 01:06:27', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Registated`
--
ALTER TABLE `Registated`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `place`
--
ALTER TABLE `place`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `Registated`
--
ALTER TABLE `Registated`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
