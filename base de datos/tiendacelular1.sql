-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2015 a las 04:18:04
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendacelular1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `documento` int(11) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `role` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombres`, `apellidos`, `edad`, `correo`, `documento`, `password`, `role`, `username`, `img`) VALUES
(9, 'Andres', 'Suarez Hinestroza', 132, 'juanandres@gmail.com', 312232, '12345', 'user', 'andres', ''),
(14, 'Elvert', 'ramos', 23, 'asasdas9@gmail.com', 1063722732, '12345', 'vendedor', 'elvert', ''),
(129, 'Maria Altagracia', 'Ospina', 23, 'maria@gmail.com', 1012839217, '12345', 'user', 'maria06', './perfil/descarga.jpg'),
(131, 'fulano', 'de tal', 24, 'fulanito@gmail.com', 106472992, '12345', 'user', 'fulanito', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `id_equipo` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `accesorios` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `generacion` varchar(100) NOT NULL,
  `sistemaoperativo` varchar(100) NOT NULL,
  `precio` int(10) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `modelo`, `accesorios`, `marca`, `color`, `generacion`, `sistemaoperativo`, `precio`, `img`) VALUES
(6, 'Xperya M2', 'audifonos', 'sony', 'negro', '3g', 'Kitkat', 360000, 'imgres.jpg'),
(7, 'Moto g', 'cargador, auriculares', 'Motorola', 'negro', '3g', 'kitkat', 300000, '11142013102102AM_635_motorola-moto-g.jpeg'),
(8, 'iphone 4', 'cargador auriculares', 'apple', 'blanco', '3g', 'iOS', 380000, '20150130154010.jpg'),
(9, 'Galaxy ace', 'cargador', 'Samsung', 'negro', '3g', 'gingerbreak', 250000, 'imgrasdases.jpg'),
(10, 'Samsung galaxy S3', 'manos libres, cargador', 'Samsung', 'blanco,azul', '3g', 'Kitkat', 340000, '3182014113250AM_635_samsung_galaxy_s3_slim.jpeg'),
(11, 'Samsung Galaxy S4', 'Manos libres, Cargador', 'Samsung', 'blanco', '4g', 'Lollipop', 480000, 'celular-samsung-galaxy-s4-gt-i9505-2.jpg'),
(12, 'Samsung galaxy S5', 'cargador, Manos libres', 'Samsung', 'blanco,azul', '4g', 'Lollipop', 580000, 'samsung-galaxy-s5-2.jpg'),
(13, 'Samsung Galaxy S6', 'Cargador, Manos Libres', 'Samsung', 'blanco', '4g', 'lollipop', 1800000, 'e_1_edge_pc.jpg'),
(15, 'Moto G2', 'manos libres, cargador', 'Motorola', 'negro', '4g', 'Lollipop', 420000, 'mp-2-chips-16gb-android-4-4-kit-kat-3g-wi-fi-photo27886379-12-2b-36.jpg'),
(16, 'Xperia Z4', 'cargador,Manos libres', 'Sony', 'negro', '4g', 'lollipop', 1500000, 'maxresdefault.jpg'),
(17, 'Xperia M2 Aqua', 'Manos libres,Cargador y manilla de control', 'Sony', 'blanco, negro', '4g', 'Kitkat', 450000, '819201442916PM_635_sony_xperia_m2_aqua.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
  `id_plan` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` int(10) NOT NULL,
  `descuentousuario` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`id_plan`, `nombre`, `precio`, `descuentousuario`, `img`) VALUES
(9, 'Sin Limite', 300000, 0, '851-1829-large_default.png'),
(10, 'De Voz ilimitado', 200000, 0, 'P-planes-de-voz.png'),
(11, 'Voz y Datos', 250000, 0, 'lte-300x200.jpg'),
(12, 'Paquete de datos', 50000, 0, 'PlanesPaquetes.png'),
(14, 'Servicios Especiales', 280000, 0, 'trae-tu-movil.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedor`
--

CREATE TABLE IF NOT EXISTS `provedor` (
  `id_provedores` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costospormayor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE IF NOT EXISTS `vendedor` (
  `id_vendedor` int(11) NOT NULL,
  `nombre3` text NOT NULL,
  `nombre4` text NOT NULL,
  `apellido3` text NOT NULL,
  `apellido4` text NOT NULL,
  `edad1` int(11) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nombre3`, `nombre4`, `apellido3`, `apellido4`, `edad1`, `codigo`) VALUES
(5, 'asdaf', 'sadfadsf', 'dsfasf', 'dsafasf', 12, 0),
(6, 'asaf', 'afsafa', 'asfafs', 'asfsaf', 15, 0),
(7, 'asaf', 'afsafa', 'asfafs', 'asfsaf', 15, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idequipo` int(11) NOT NULL,
  `idplan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `idcliente`, `idequipo`, `idplan`) VALUES
(4, 129, 7, 11),
(5, 129, 11, 12),
(6, 9, 12, 14),
(7, 9, 16, 10),
(8, 131, 17, 11),
(9, 131, 7, 12),
(10, 131, 6, 11),
(11, 131, 7, 9),
(12, 129, 8, 14),
(13, 129, 13, 9),
(14, 129, 17, 14);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `provedor`
--
ALTER TABLE `provedor`
  ADD PRIMARY KEY (`id_provedores`),
  ADD KEY `id_equipo` (`id_equipo`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `provedor`
--
ALTER TABLE `provedor`
  MODIFY `id_provedores` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `provedor`
--
ALTER TABLE `provedor`
  ADD CONSTRAINT `provedor_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
