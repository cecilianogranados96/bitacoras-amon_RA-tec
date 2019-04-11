-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-04-2019 a las 18:16:10
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `TEC`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_tarea` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `porcentaje` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `evidencias` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `nombre`, `fecha_registro`, `id_tarea`, `id_persona`, `porcentaje`, `descripcion`, `evidencias`) VALUES
(10, 'EJEMPLO', '2019-03-08 21:54:59', 300400, 2, 80, 'ejemplo', '[\"8125-FACT56796.pdf\"]'),
(11, 'BITACORA', '2019-03-09 10:41:46', 300406, 1, 60, 'BITACORA', '[\"0138-Resumen_IEEE_1028_-_Jose_Ceciliano.docx\",\"0138-Resumen_IEEE_1028_-_Jose_Ceciliano1.docx\"]'),
(13, 'CIERRE', '2019-03-09 10:48:55', 300406, 1, 100, 'CIERRE', 'null');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(30) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `tarea_padre` int(30) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_limite` datetime NOT NULL,
  `fecha_cierre` datetime NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `id_persona`, `nombre`, `descripcion`, `tarea_padre`, `fecha_creacion`, `fecha_limite`, `fecha_cierre`, `estado`) VALUES
(300399, 1, 'PRIMER OBJETIVO A CUMPLIR:', '', 300399, '2019-03-07 19:21:47', '2019-03-15 00:00:00', '0000-00-00 00:00:00', 1),
(300400, 1, 'Primera tarea del PRIMER objetivo', 'Descripcion de la primera tarea del primer objetivo', 300399, '2019-03-07 19:22:11', '2019-03-11 00:00:00', '0000-00-00 00:00:00', 1),
(300401, 2, 'Segunda tarea del primer objetivo', 'Descripcion de la segunda tarea del primer objetivo', 300399, '2019-03-07 19:22:41', '2019-03-13 00:00:00', '0000-00-00 00:00:00', 1),
(300405, 2, 'SEGUNDO OBJETIVO A CUMPLIR:', '', 300405, '2019-03-07 19:24:06', '2019-03-06 00:00:00', '0000-00-00 00:00:00', 1),
(300406, 1, 'Primera tarea del SEGUNDO objetivo', 'Descripción de la primera tarea del segundo objetivo\n    UNO\n    DOS\n    TRES\n', 300405, '2019-03-07 19:24:23', '2019-03-13 00:00:00', '2019-03-09 10:48:55', 1),
(300407, 2, 'Segunda tarea del SEGUNDO objetivo', 'Descripción con estilos https://app.asana.com/0/273835044239197/list y una mención :skull: :grin: :heart_eyes: :sleepy: ', 300405, '2019-03-07 19:24:30', '2019-03-01 00:00:00', '0000-00-00 00:00:00', 1),
(623104, 2, 'Tercera tarea del primer objetivo', 'DESCRIPCION SIN ASIGNACION', 300399, '2019-03-09 15:38:26', '2019-03-07 00:00:00', '0000-00-00 00:00:00', 1),
(623106, 0, 'Tercera tarea del SEGUNDO objetivo', '', 300405, '2019-03-09 15:42:27', '2019-03-10 00:00:00', '2019-03-12 15:42:28', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipo` int(1) NOT NULL DEFAULT '1' COMMENT '1 ESTUDIANTE 2 PROFESOR'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `password`, `tipo`) VALUES
(0, '*No Asignado*', '', '3HkZcFJA', 1),
(1, 'ANDRES CECILIANO', 'cecilianogranados96@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Jose Andres Ceciliano Granados', 'cecilianogranados96@hotmail.com', '21232f297a57a5a743894a0e4a801fc3', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_bitacora`),
  ADD KEY `bitacora_estudiante` (`id_persona`),
  ADD KEY `bitacora_tarea` (`id_tarea`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_tarea` (`tarea_padre`),
  ADD KEY `persona_tarea` (`id_persona`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=623107;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `person` FOREIGN KEY (`id_persona`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `parent_tarea` FOREIGN KEY (`tarea_padre`) REFERENCES `tareas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persona_tarea` FOREIGN KEY (`id_persona`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
