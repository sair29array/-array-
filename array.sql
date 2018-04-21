-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2018 a las 22:40:37
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `array`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin_user`
--

INSERT INTO `admin_user` (`id`, `email`, `pass`) VALUES
(1, 'sairsanchez29@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos_servicios_users`
--

CREATE TABLE `contratos_servicios_users` (
  `id_solicitud` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `servicio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_plan_escojido` varchar(10000) COLLATE utf8_spanish_ci NOT NULL,
  `facturacion_a_empresa` int(11) NOT NULL,
  `total_cobrar` int(11) NOT NULL,
  `cuota_plazo` int(11) NOT NULL,
  `total_pagado` int(11) NOT NULL,
  `deuda_pendiente` int(11) NOT NULL,
  `contrato_activo` int(11) NOT NULL,
  `fecha_activacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contratos_servicios_users`
--

INSERT INTO `contratos_servicios_users` (`id_solicitud`, `id_usuario`, `servicio`, `id_plan_escojido`, `facturacion_a_empresa`, `total_cobrar`, `cuota_plazo`, `total_pagado`, `deuda_pendiente`, `contrato_activo`, `fecha_activacion`) VALUES
(2, 2, 'diseÃ±o_grafico_corporativo', '[][15][][][][][][][8][7][][][][][][]', 0, 0, 0, 0, 0, 1, ''),
(3, 2, 'mantenimiento_soporte_tecnico', '1', 0, 0, 0, 0, 0, 1, ''),
(4, 9, 'software_multiproposito', '2', 0, 0, 0, 0, 0, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deudas_usuarios`
--

CREATE TABLE `deudas_usuarios` (
  `id_deuda` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total_cuotas` int(11) NOT NULL,
  `numero_cuotas_por_cancelar` int(11) NOT NULL,
  `fecha_facturacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_corte` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseno_grafico_corporativo`
--

CREATE TABLE `diseno_grafico_corporativo` (
  `id_planes` int(11) NOT NULL,
  `planes` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `cotizacion` int(11) NOT NULL,
  `cuota_inicial` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseño_paginas_web`
--

CREATE TABLE `diseño_paginas_web` (
  `id_planes` int(11) NOT NULL,
  `planes` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `cotizacion` int(11) NOT NULL,
  `cuota_inicial` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `diseño_paginas_web`
--

INSERT INTO `diseño_paginas_web` (`id_planes`, `planes`, `precio`, `cotizacion`, `cuota_inicial`) VALUES
(1, 'basico', 599999, 0, 599999),
(2, 'medium', 1199990, 1, 599999),
(3, 'premium', 1599990, 1, 799990);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos_descuentos`
--

CREATE TABLE `puntos_descuentos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `puntos` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `aplica` varchar(60) NOT NULL,
  `motivo` varchar(50) NOT NULL,
  `fecha_fin_descuento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puntos_descuentos`
--

INSERT INTO `puntos_descuentos` (`id`, `id_usuario`, `puntos`, `descuento`, `aplica`, `motivo`, `fecha_fin_descuento`) VALUES
(1, 2, 5, 10, 'Diseño de paginas web', 'Compra de pc de mesa', '12 de mayo de 2018'),
(2, 2, 3, 4, 'todo', 'completaste 8 puntos', '12 de mayo de 2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radio_online_streaming_hd`
--

CREATE TABLE `radio_online_streaming_hd` (
  `id_planes` int(11) NOT NULL,
  `planes` varchar(53) NOT NULL,
  `precio` double NOT NULL,
  `cotizacion` int(11) NOT NULL,
  `cuota_inicial` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `radio_online_streaming_hd`
--

INSERT INTO `radio_online_streaming_hd` (`id_planes`, `planes`, `precio`, `cotizacion`, `cuota_inicial`) VALUES
(1, 'basico', 299990, 0, 299990),
(2, 'medium', 499990, 0, 499990),
(3, 'premium', 699990, 1, 349990);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software_multiproposito`
--

CREATE TABLE `software_multiproposito` (
  `id_planes` int(11) NOT NULL,
  `planes` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `cotizacion` int(11) NOT NULL,
  `cuota_inicial` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `software_multiproposito`
--

INSERT INTO `software_multiproposito` (`id_planes`, `planes`, `precio`, `cotizacion`, `cuota_inicial`) VALUES
(1, 'basico', 999999, 1, 249999),
(2, 'medium', 999999, 1, 249999),
(3, 'premium', 999999, 1, 249999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cedula` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `departamento_ciudad` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `nit_empresa` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(10000) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `dealta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cedula`, `nombres`, `apellidos`, `departamento_ciudad`, `empresa`, `nit_empresa`, `email`, `pass`, `celular`, `dealta`) VALUES
(1, '1067962991', 'Sair', 'sanchez', '', '', '', 'sair.sanchez29@gmail.com', 'sair.sanchez29@gmail.comarray981129sa', '', 1),
(2, '32253230', 'SAIR ', 'SANCHEZ VALDERRAMA', 'MONTERÃ­A - CORDOBA', '', '', 'admin@admin', '123456', '3218070767', 1),
(4, '', '', '', '', '', '', 'arraycolombia@gmail.com', 'arraycolombia@gmail.comarray981129sa', '', 0),
(5, '', 'Carlos mario', 'Villera arroyo', '', '', '', 'carlosmariovilleraarroyo@gmail.com', 'carlosmariovilleraarroyo@gmail.comarray981129sa', '', 1),
(6, '', 'carlos', 'villera arroyo', '', '', '', 'holi@gmail.cokm', '123', '', 0),
(7, '', 'claudia', 'beltran', '', '', '', 'claudybel805@gmail.com', 'claudybel805@gmail.comarray981129sa', '', 0),
(8, '', 'angelica', 'ramos ramirez', '', '', '', 'angelicaramox@gmail.com', 'angelicaramox@gmail.comarray981129sa', '', 0),
(9, '', 'JUAN', 'RODRIGUEZ MENDEZ', 'BogotÃ¡ DC', '', '', 'juanmendez@gmail.com', '12345', '3218070767', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contratos_servicios_users`
--
ALTER TABLE `contratos_servicios_users`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- Indices de la tabla `deudas_usuarios`
--
ALTER TABLE `deudas_usuarios`
  ADD PRIMARY KEY (`id_deuda`);

--
-- Indices de la tabla `diseno_grafico_corporativo`
--
ALTER TABLE `diseno_grafico_corporativo`
  ADD PRIMARY KEY (`id_planes`);

--
-- Indices de la tabla `diseño_paginas_web`
--
ALTER TABLE `diseño_paginas_web`
  ADD PRIMARY KEY (`id_planes`);

--
-- Indices de la tabla `puntos_descuentos`
--
ALTER TABLE `puntos_descuentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `radio_online_streaming_hd`
--
ALTER TABLE `radio_online_streaming_hd`
  ADD PRIMARY KEY (`id_planes`);

--
-- Indices de la tabla `software_multiproposito`
--
ALTER TABLE `software_multiproposito`
  ADD PRIMARY KEY (`id_planes`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contratos_servicios_users`
--
ALTER TABLE `contratos_servicios_users`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `deudas_usuarios`
--
ALTER TABLE `deudas_usuarios`
  MODIFY `id_deuda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diseno_grafico_corporativo`
--
ALTER TABLE `diseno_grafico_corporativo`
  MODIFY `id_planes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diseño_paginas_web`
--
ALTER TABLE `diseño_paginas_web`
  MODIFY `id_planes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `puntos_descuentos`
--
ALTER TABLE `puntos_descuentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `radio_online_streaming_hd`
--
ALTER TABLE `radio_online_streaming_hd`
  MODIFY `id_planes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `software_multiproposito`
--
ALTER TABLE `software_multiproposito`
  MODIFY `id_planes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
