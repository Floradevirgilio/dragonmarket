-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2018 a las 22:36:51
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dm_180728`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_cabecera`
--

CREATE TABLE `carrito_cabecera` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1' COMMENT 'El estado nos va indicar la situacion de la compra, por ej.:\n0 - ANULADO\n1 - Generado\n2 - Entregado\n\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_detalle`
--

CREATE TABLE `carrito_detalle` (
  `id` int(11) NOT NULL,
  `carrito_id` int(11) NOT NULL COMMENT 'Es el id de carrito_cabecera',
  `descripcion` varchar(75) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL COMMENT 'Asumimos que las cantidades son enteros',
  `precio_unitario` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Contiene el detalle del carrito		';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro_temporal`
--

CREATE TABLE `carro_temporal` (
  `id` int(11) NOT NULL,
  `productos_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `creado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `carro_temporal`
--

INSERT INTO `carro_temporal` (`id`, `productos_id`, `cantidad`, `users_id`, `creado`) VALUES
(94, 53, 1, 13, '2018-08-09 22:34:42'),
(95, 14, 1, 13, '2018-08-09 22:34:44'),
(96, 17, 1, 13, '2018-08-09 22:34:51'),
(97, 28, 1, 13, '2018-08-09 22:34:56'),
(98, 50, 1, 11, '2018-08-09 22:35:18'),
(99, 24, 1, 11, '2018-08-09 22:35:20'),
(100, 9, 2, 11, '2018-08-09 22:35:23'),
(101, 36, 1, 11, '2018-08-09 22:35:26'),
(102, 30, 1, 11, '2018-08-09 22:35:29'),
(103, 46, 1, 11, '2018-08-09 22:35:34'),
(104, 17, 1, 12, '2018-08-09 22:36:00'),
(105, 2, 2, 12, '2018-08-09 22:36:07'),
(106, 21, 1, 12, '2018-08-09 22:36:17'),
(107, 29, 1, 12, '2018-08-09 22:36:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

CREATE TABLE `lineas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `activo` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`id`, `nombre`, `activo`) VALUES
(1, 'MEMORIAS', 1),
(2, 'PLACAS DE VIDEO', 1),
(3, 'DISCOS RIGIDOS', 1),
(4, 'PROCESADORES', 1),
(5, 'SOFTWARE', 1),
(6, 'GABINETES', 1),
(7, 'EQUIPO ARMADO', 1),
(8, 'MONITORES', 1),
(9, 'MOTHERBOARD', 1),
(10, 'PLACAS DE AUDIO', 1),
(11, 'MOUSE / TECLADOS', 1),
(12, 'FUENTES DE ALIMENTACION', 1),
(13, 'ACCESORIOS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(75) COLLATE utf8mb4_spanish_ci NOT NULL,
  `lineas_id` int(11) NOT NULL,
  `precio` decimal(8,2) NOT NULL DEFAULT '0.00',
  `stock` int(11) NOT NULL DEFAULT '0',
  `activo` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `descripcion`, `lineas_id`, `precio`, `stock`, `activo`) VALUES
(1, 'Memoria Ram Ddr3 4gb 1600mhz Hynix', 1, '965.00', 1, 1),
(2, 'Memoria Kingston Hyperx Fury 8gb Ddr3 1866 Mh', 1, '2910.00', 1, 1),
(3, 'Memoria Pc 4gb Kingston Hyperx Fury Ddr3 1866mhz G', 1, '1359.00', 1, 1),
(4, 'Memoria 4gb Samsung Original Ddr3 1333 Mhz Sodimm', 1, '1799.00', 1, 1),
(5, 'Disco Rigido Western Digital Purple 1tb', 3, '2199.00', 1, 1),
(6, 'Disco Rigido Wd 320gb 7200 3,5 Sata2 8mb', 3, '799.00', 1, 1),
(7, 'Disco Solido Ssd Wd 500gb Blue Sata Western Digital', 3, '4999.00', 1, 1),
(8, 'Disco Externo Wd Elements 1 Tb Usb 3.0 Portatil', 3, '2099.00', 1, 1),
(9, 'Disco Rigido Western Digital Caviar Black 4tb', 3, '7399.00', 1, 1),
(10, 'Fuente Pc Gamer 750w Atx Led Rgb', 12, '2563.00', 1, 1),
(11, 'Fuente Alimentacion Pc Evga 700b 700w 80plus Bronce', 12, '3609.00', 1, 1),
(12, 'Fuente Alimentacion Atx Noga Net 550w 24 Pines 20+4 500w Pc', 12, '318.00', 1, 1),
(13, 'Fuente De Alimentacion De Ordenador Pc 600 Watts Atx 700w Pi', 12, '9785.00', 1, 1),
(14, 'Gabinete Cooler Master Masterbox 5 Msi Edition Usb 3.0', 6, '2999.00', 1, 1),
(15, 'Gabinete Pc Gamer Sentey Carved Usb 3.0 Con Coolers', 6, '779.00', 1, 1),
(16, 'Motherboard Gigabyte Ga-z370 Aorus Gaming 5 ', 9, '9199.00', 1, 1),
(17, 'Mother Gigabyte Ga H110m-h Intel H110 Ddr4 Hdmi Vga', 9, '1945.00', 1, 1),
(18, 'Mother Gigabyte B360m Usb3.1 M.2 Vga Hdmi 8va S1151 B360', 9, '2999.00', 1, 1),
(19, 'Motherboard Gigabyte Ga-z370-hd3 Intel 1151 Ddr4 Z370', 9, '4699.00', 1, 1),
(20, 'Monitor Samsung 22 Ultra Slim Full Hd 1080 Gaming Vga Hdmi', 8, '4199.00', 1, 1),
(21, 'Monitor Samsung 24 Curvo F390 Full Hd 1080 Freesync Hdmi Vga', 8, '5598.00', 1, 1),
(22, 'Monitor Led 24 Samsung F350 Full Hd Hdmi 5ms 60hz', 8, '4799.00', 1, 1),
(23, 'Placa Video Msi Geforce Gtx 1050ti 4gb Gaming X Gtx 1050 Ti', 2, '8799.00', 1, 1),
(24, 'Placa De Video Geforce Gigabyte Gt710 1gb Ddr3 ', 2, '1809.00', 1, 1),
(25, 'Placa Video Geforce Gtx 750 2gb Ddr5 Hdmi Dvi Vga Ex 1050', 2, '4399.00', 1, 1),
(26, 'Placa De Video Asus Nvidia Geforce Gtx 1080 Strix 8gb Fullh4', 2, '23739.00', 1, 1),
(27, 'Micro Procesador Amd Kaveri Apu A6 X2 7400k 3.9ghz Fm2', 4, '1409.00', 1, 1),
(28, 'Micro Procesador Intel Core I5 8400 4.0ghz 6 Core', 4, '7839.00', 1, 1),
(29, 'Micro Procesador Amd Ryzen 7 2700x 4.3ghz Octacore Am4', 4, '12789.00', 1, 1),
(30, 'Micro Procesador Intel Core I7 8700k 4.7ghz Coffee Lake', 4, '13589.00', 1, 1),
(31, 'Mouse Razer Gamer Deathadder Elite Chroma ', 11, '2309.00', 1, 1),
(32, 'Mouse Genius Dx-110 Usb 1000 Dpi', 11, '90.00', 1, 1),
(33, 'Mouse Genius Usb Optico 1000 Dpi Dx 110 Negr', 11, '107.00', 1, 1),
(34, 'Mouse Gamer Genius Gx Gaming Ammox X1 400 3200dpi 1ms', 11, '709.00', 1, 1),
(35, 'Teclado Mecanico Gamer Razer Blackwidow Chroma V2 En Espanol', 11, '5689.00', 1, 1),
(36, 'Combo Kit Gamer Mouse Teclado Auricular C/mic Retroiluminado', 11, '800.00', 1, 1),
(37, 'Teclado Genius Kb-110x Black Usb Espanol', 11, '195.00', 1, 1),
(38, 'Kit Teclado Mouse Inalambrico', 11, '319.00', 1, 1),
(39, 'Kit Mouse Y Teclado Logitech Mk235 Inalambrico', 11, '559.00', 1, 1),
(40, 'Teclado Genius Kb-125 Usb Black', 11, '199.00', 1, 1),
(41, 'Asus Xonar Dsx 7.1 High Definition Audio Pci-e', 10, '2367.00', 1, 1),
(42, 'Placa De Sonido Pci 4 Canales Directx 6.1 Noga Net', 10, '239.00', 1, 1),
(43, 'Placa De Sonido Asus Xonar Dsx 7.1', 10, '1799.00', 1, 1),
(44, 'Placa De Sonido Pci Netmak Nm-4ch Sonido 4 Canales', 10, '260.00', 1, 1),
(45, 'Windows 10 Pro 32/64 Bits', 5, '4958.00', 1, 1),
(46, 'Corel Draw X7 32/64 Bits', 5, '6420.00', 1, 1),
(47, 'Adobe Photoshop Cc 2017 32/64 Bits', 5, '4825.00', 1, 1),
(48, 'Adobe Ilustrator CC 2017 32/64 Bits', 5, '4975.00', 1, 1),
(49, 'Pc Gamer Armada Intel Core I7 8700 8va Gen 1tb Disco 8gb Ram', 7, '20999.00', 1, 1),
(50, 'Pc Armada Gamer Amd Ryzen 5 2400g Vega 1tb 8gb', 7, '14730.00', 1, 1),
(51, 'Pc Armada Gamer Amd A8 9600 X10 Nucleos Video R7 Ddr4 Hdmi', 7, '8499.00', 1, 1),
(52, 'Pc Gamer Armada | Cpu Intel I7 | 16gb 1tb Geforce Gtx 1080', 7, '59579.00', 1, 1),
(53, 'Pc Armada Cpu Intel Core I5 7400 7th - 8gb Ddr4 - 1tb - Hdmi', 7, '14186.00', 1, 1),
(54, 'Pc Armada Oficina Hogar Intel Celeron G4920 1tb Disco 4g Ram', 7, '8399.00', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `activo` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `email`, `pass`, `avatar`, `activo`) VALUES
(11, 'alan', 'alan', 'alan@alan.com', '$2y$10$RhCRblFDoAhXvOvP4W.i/OAQ8BjGcMihZ65cVJxK7KPTOKWGivhH6', '11.jpg', 1),
(12, 'agus', 'agus', 'agus@agus.com', '$2y$10$eCqdbf4TGX7X6ofVeqHHOemuIgS5bovKhLOoVfF9G7OOyyGSCPn02', '12.jpg', 1),
(13, 'dan', 'dan', 'dan@dan.com', '$2y$10$oKoi2/pO8lX.ctOaDU1gSuBXyKIYxe9h0FwBYoSDVmkpoKXO3/u1y', '13.jpg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito_cabecera`
--
ALTER TABLE `carrito_cabecera`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `usuario_id_idx` (`usuario_id`);

--
-- Indices de la tabla `carrito_detalle`
--
ALTER TABLE `carrito_detalle`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `carro_temporal`
--
ALTER TABLE `carro_temporal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `creado` (`id`);

--
-- Indices de la tabla `lineas`
--
ALTER TABLE `lineas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `lineas_id_idx` (`lineas_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito_cabecera`
--
ALTER TABLE `carrito_cabecera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrito_detalle`
--
ALTER TABLE `carrito_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carro_temporal`
--
ALTER TABLE `carro_temporal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `lineas`
--
ALTER TABLE `lineas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito_cabecera`
--
ALTER TABLE `carrito_cabecera`
  ADD CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `lineas_id` FOREIGN KEY (`lineas_id`) REFERENCES `lineas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
