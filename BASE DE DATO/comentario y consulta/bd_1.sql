-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2018 a las 16:35:32
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `cedula`, `direccion`, `telefono`) VALUES
(1, 'juan', 'doria', '1067956431', 'dg 13 #3-116', '3146759228'),
(2, 'Gilmar', 'Martinez', '1098563231', 'dg 20 #2-122', '3009821765'),
(3, 'miguel', 'perez', '122344567', 'calle 34 # 3-5', '3104467890'),
(4, 'jose', 'vertel', '1223284487', 'calle 56 #5-2', '54642734'),
(5, 'guillermo', 'galvis', '47546590', 'call 45 # 3-5', '3005892345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_equipo`
--

CREATE TABLE `clientes_equipo` (
  `id` int(11) NOT NULL,
  `id_clientes` varchar(50) NOT NULL,
  `id_equipos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes_equipo`
--

INSERT INTO `clientes_equipo` (`id`, `id_clientes`, `id_equipos`) VALUES
(1, '1', '1'),
(2, '2', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daños`
--

CREATE TABLE `daños` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `repuesto` tinyint(1) NOT NULL,
  `desc_repuesto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `daños`
--

INSERT INTO `daños` (`id`, `descripcion`, `repuesto`, `desc_repuesto`) VALUES
(1, 'Daño pantalla', 1, 'Pantalla LED 42\"'),
(2, 'Parlante descompuesto', 1, 'Parlante Panaosnic 300ghz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `tipo_de_equipo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `id_orden_ingreso` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `tipo_de_equipo`, `marca`, `referencia`, `id_orden_ingreso`) VALUES
(1, 'Televisor', 'LG', '3A24C2038', 1),
(2, 'Equipo Sonido', 'Panasonic', 'BS78H43A', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_de_ingreso`
--

CREATE TABLE `orden_de_ingreso` (
  `id` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orden_de_ingreso`
--

INSERT INTO `orden_de_ingreso` (`id`, `fecha_ingreso`) VALUES
(1, '2017-11-19'),
(2, '2017-11-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_tecnico`
--

CREATE TABLE `reporte_tecnico` (
  `id` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_salida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reporte_tecnico`
--

INSERT INTO `reporte_tecnico` (`id`, `fecha_inicio`, `fecha_salida`) VALUES
(1, '2017-11-21', '2017-11-30'),
(2, '2017-11-04', '2017-11-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicos`
--

CREATE TABLE `tecnicos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `id_orden_ingreso` varchar(50) NOT NULL,
  `id_reporte_tec` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tecnicos`
--

INSERT INTO `tecnicos` (`id`, `nombre`, `apellido`, `cedula`, `id_orden_ingreso`, `id_reporte_tec`) VALUES
(1, 'Juan', 'Guillermo', '1065456112', '1', 1),
(2, 'Carlos', 'Peña', '1067569372', '2', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes_equipo`
--
ALTER TABLE `clientes_equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daños`
--
ALTER TABLE `daños`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden_de_ingreso`
--
ALTER TABLE `orden_de_ingreso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reporte_tecnico`
--
ALTER TABLE `reporte_tecnico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes_equipo`
--
ALTER TABLE `clientes_equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `daños`
--
ALTER TABLE `daños`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `orden_de_ingreso`
--
ALTER TABLE `orden_de_ingreso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reporte_tecnico`
--
ALTER TABLE `reporte_tecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
