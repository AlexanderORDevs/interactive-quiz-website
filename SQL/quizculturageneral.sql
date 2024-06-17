-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2024 a las 20:14:56
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
-- Base de datos: `quizculturageneral`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `usu_dni` int(8) NOT NULL,
  `corre_electronico` varchar(100) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `edad` int(3) NOT NULL,
  `puntaje` int(3) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido`, `usu_dni`, `corre_electronico`, `departamento`, `edad`, `puntaje`, `fecha_creacion`) VALUES
(43, 'alex', 'oyolo', 43256743, 'arau.jo7672@gmail.com', 'lima', 69, NULL, '2024-05-23 04:39:42'),
(46, 'alex', 'oyolo', 43256743, 'arau.jo7672@gmail.com', 'lima', 72, 1, '2024-05-23 04:50:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(255) NOT NULL,
  `respuesta_correcta` varchar(255) NOT NULL,
  `respuestas_incorrectas` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`respuestas_incorrectas`)),
  `categoria` varchar(100) NOT NULL,
  `dificultad` enum('facil','medio','dificil') NOT NULL,
  `fecha` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `respuesta_correcta`, `respuestas_incorrectas`, `categoria`, `dificultad`, `fecha`) VALUES
(1, '¿Cuál es la capital de Francia?', 'París', '[\"Londres\", \"Berlín\", \"Madrid\"]', 'historia', 'facil', '2024-05-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(100) NOT NULL,
  `usu_nombrecom` varchar(100) DEFAULT NULL,
  `usu_dni` int(8) DEFAULT NULL,
  `usu_contra` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usu_nombrecom`, `usu_dni`, `usu_contra`) VALUES
(3, 'Xiomara Tipte', 74185296, '123456789'),
(4, 'Alex Oyolo', 123, '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
