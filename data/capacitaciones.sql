-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2017 at 04:03 PM
-- Server version: 10.0.28-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capacitaciones`
--

-- --------------------------------------------------------

--
-- Table structure for table `asistencias`
--

CREATE TABLE `asistencias` (
  `id` int(11) NOT NULL,
  `capacitacion` int(11) NOT NULL,
  `empleado` int(11) NOT NULL,
  `asistencia` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `asistencias`
--

INSERT INTO `asistencias` (`id`, `capacitacion`, `empleado`, `asistencia`) VALUES
(1, 3, 25, 'N'),
(2, 3, 55, 'N'),
(3, 3, 62, 'N'),
(4, 3, 35, 'N'),
(5, 3, 8, 'N'),
(6, 3, 68, 'N'),
(7, 3, 54, 'N'),
(8, 3, 73, 'N'),
(9, 3, 63, 'N'),
(10, 3, 15, 'N'),
(11, 3, 41, 'N'),
(12, 3, 80, 'N'),
(13, 3, 12, 'N'),
(14, 3, 36, 'N'),
(15, 3, 42, 'N'),
(16, 3, 20, 'N'),
(17, 3, 26, 'N'),
(18, 3, 24, 'N'),
(19, 3, 69, 'N'),
(20, 3, 27, 'N'),
(21, 3, 51, 'N'),
(22, 3, 71, 'N'),
(23, 3, 38, 'N'),
(24, 3, 67, 'N'),
(25, 3, 30, 'N'),
(26, 3, 21, 'N'),
(27, 3, 64, 'N'),
(28, 3, 76, 'N'),
(29, 3, 47, 'N'),
(30, 3, 53, 'N'),
(31, 3, 14, 'N'),
(32, 3, 7, 'N'),
(33, 3, 13, 'N'),
(34, 3, 70, 'N'),
(35, 3, 48, 'N'),
(36, 3, 23, 'N'),
(37, 3, 52, 'N'),
(38, 3, 72, 'N'),
(39, 3, 4, 'N'),
(40, 3, 59, 'N'),
(41, 3, 11, 'N'),
(42, 3, 65, 'N'),
(43, 3, 32, 'N'),
(44, 3, 31, 'N'),
(45, 3, 33, 'N'),
(46, 3, 49, 'N'),
(47, 3, 39, 'N'),
(48, 3, 50, 'N'),
(49, 3, 66, 'N'),
(50, 3, 29, 'N'),
(51, 3, 60, 'N'),
(52, 3, 28, 'N'),
(53, 3, 6, 'N'),
(54, 3, 10, 'N'),
(55, 3, 17, 'N'),
(56, 3, 9, 'N'),
(57, 3, 34, 'N'),
(58, 3, 2, 'N'),
(59, 3, 74, 'N'),
(60, 3, 78, 'N'),
(61, 3, 57, 'N'),
(62, 3, 43, 'N'),
(63, 3, 1, 'N'),
(64, 3, 5, 'N'),
(65, 3, 75, 'N'),
(66, 3, 58, 'N'),
(67, 3, 37, 'N'),
(68, 3, 18, 'N'),
(69, 3, 61, 'N'),
(70, 3, 19, 'N'),
(71, 3, 46, 'N'),
(72, 3, 44, 'N'),
(73, 3, 56, 'N'),
(74, 3, 16, 'N'),
(75, 3, 45, 'N'),
(76, 3, 22, 'N'),
(77, 3, 40, 'N'),
(78, 3, 79, 'N'),
(79, 3, 3, 'N'),
(80, 3, 77, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `capacitaciones`
--

CREATE TABLE `capacitaciones` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `duracion` double NOT NULL,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `capacitaciones`
--

INSERT INTO `capacitaciones` (`id`, `fecha`, `duracion`, `titulo`, `proveedor`) VALUES
(3, '2017-01-18 07:00:00', 2, 'alimentacion saludable', 5),
(4, '2017-01-14 07:00:00', 2, 'taller', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cargos`
--

INSERT INTO `cargos` (`id`, `nombre`) VALUES
(1, 'Auxiliar administrativa'),
(2, 'Jef. de cuenta'),
(3, 'Auxiliar de causaciones'),
(4, 'Asistente sistemas integrados'),
(5, 'Aux de cuenta'),
(6, 'Asistente de cuenta'),
(7, 'Director de operaciones'),
(8, 'Aux. de aduanas'),
(9, 'Jefe oficina puertos'),
(10, 'Director comercial'),
(11, 'Digitador'),
(12, 'Gerente'),
(13, 'Jefe de contabilidad'),
(14, 'Revisor'),
(15, 'Aux de cafeteria'),
(16, 'Asistente de puertos'),
(17, 'Asistente de preimportaciones'),
(18, 'Aprendiz sena'),
(19, 'Auxiliar de facturacion'),
(20, 'Sub gerente'),
(21, 'Recepcionista'),
(22, 'Director de control interno'),
(23, 'Coordinador tecnología y sig'),
(24, 'Director contable y financiero'),
(25, 'Asistente contable'),
(26, 'Auxiliar de control'),
(27, 'Jefe de preimportaciones'),
(28, 'Asistente aduanas y p');

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` int(11) NOT NULL,
  `ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `cargo`, `ciudad`) VALUES
(1, 'Ramirez Cruz Yuli Karina', 1, 1),
(2, 'Quintero Gonzalez Liliana', 2, 1),
(3, 'Urrego Martinez Paula Andrea', 3, 1),
(4, 'Moreno Salgado Ruben Adolfo', 4, 1),
(5, 'Ramirez Salazar Nubia Cecilia', 2, 1),
(6, 'Posada Castro Beatriz Elena', 5, 2),
(7, 'Martinez Galindo Adriana .', 2, 1),
(8, 'Arroyo Jimenez Ingrid Liceth', 5, 3),
(9, 'Quintero Galindo Cristhian Camilo', 6, 1),
(10, 'Pulecio Villamil Jaime Andres', 6, 1),
(11, 'Nieto Molano Oscar Ernesto', 7, 1),
(12, 'Carvajal UmaÑa Omar Eder', 8, 1),
(13, 'Martinez Garnica Sebastian .', 5, 1),
(14, 'Marin Jimenez Wilson .', 9, 3),
(15, 'Caicedo Hurtado Jaime', 8, 3),
(16, 'Salinas . Walter Cesar', 10, 1),
(17, 'Quinche Valderrama Manuel Andres', 11, 1),
(18, 'Rodriguez Ortiz Alvaro .', 12, 1),
(19, 'Rodriguez Sanchez Cindy Esmeralda', 11, 1),
(20, 'Chaparro Figueroa Anyi Natalia', 8, 1),
(21, 'Guerrero Orozco Wilton Ricardo', 8, 2),
(22, 'Siachoque Fuquene Nataly .', 11, 1),
(23, 'Molano Tinjaca Rafaela .', 2, 1),
(24, 'Cortes Torres Ronal Antonio Jeremias', 8, 1),
(25, 'Acevedo Martinez Luis Fernando', 9, 2),
(26, 'Cortes Quintero Luisa Fernanda', 5, 1),
(27, 'Duque Delgado Marvin Alonso', 8, 3),
(28, 'Pira Fernandez Yeimmi Paola', 13, 1),
(29, 'Pineda Correa Carlos Humberto', 5, 1),
(30, 'Guerrero Matiz Juan Gabriel', 5, 1),
(31, 'Ortiz Amortegui Robinson Leandro', 5, 1),
(32, 'Oliveros Castro Angie Paola', 8, 1),
(33, 'Ortiz Melo Danelly .', 6, 1),
(34, 'Quintero Gonzalez Elizabeth', 8, 1),
(35, 'Arevalo Bejarano Luis Eduardo', 11, 1),
(36, 'Castro Lamprea Luis Alberto', 14, 1),
(37, 'Roa Parra Miryam Ines', 15, 1),
(38, 'Florez Lopez Jeimmy Alexandra', 6, 1),
(39, 'Osorio Hernandez Elizabeth Natalia', 8, 1),
(40, 'Torres Cuervo Judy Katherine', 11, 1),
(41, 'Caicedo Rodriguez Yesica Alejandra', 11, 1),
(42, 'Castro Romero Yolanda', 16, 1),
(43, 'Ramirez Camacho Karen Viviana', 5, 1),
(44, 'Romero Ortiz Nidia Janeth', 8, 1),
(45, 'Sandoval Galviz Mary Janira', 11, 1),
(46, 'Rodriguez Tovar Juan Sebastian', 4, 1),
(47, 'Lopez Rico Doris Anyeli', 17, 1),
(48, 'Melendez Blanco Kellys Tatiana', 8, 2),
(49, 'Ortiz Nagles Yesica Fernanda', 18, 1),
(50, 'Parada Guacaneme Luz Estrella', 19, 1),
(51, 'Fajardo Osorio Sebastian .', 20, 1),
(52, 'Montero Monsalve Tatiana .', 5, 2),
(53, 'Luna MuÑoz Nicolas Fernando', 5, 1),
(54, 'Bernal Camargo Lizeth Yohana', 21, 1),
(55, 'Aldana PeÑaranda Nicolle .', 18, 1),
(56, 'Romero Pino Ruben Dario', 2, 1),
(57, 'Ramirez . Jeisson Giovanny', 11, 1),
(58, 'Rivera Rodriguez Alba Viviana', 18, 1),
(59, 'Moreno Velandia Fredy Alvaro', 2, 1),
(60, 'Pinzon Cubi Hans .', 14, 1),
(61, 'Rodriguez Ramirez Migdonia', 22, 1),
(62, 'Ardila Pineda Paula Camila', 5, 1),
(63, 'Caicedo Cruz Jessica Tatiana', 5, 1),
(64, 'Hernandez Sanchez Diego Felipe', 23, 1),
(65, 'Olaya Murcia Leidy Milena', 24, 1),
(66, 'Perez Perez Mario Luis', 18, 1),
(67, 'Guerrero Herrera Yenni Johanna', 2, 1),
(68, 'Beltran Parada Karen Astrid', 6, 1),
(69, 'Delgado Parra Leidy Marcela', 5, 1),
(70, 'Medina Mendez Yenny Paola', 2, 1),
(71, 'Florez Angulo Gustavo Luis', 8, 2),
(72, 'Montes Franco Claudia Esnedy', 25, 1),
(73, 'BolaÑos Extremor Deymer Luis', 8, 2),
(74, 'Quintero Velasquez Daniela .', 21, 1),
(75, 'Rincon Martinez Nelson Alexander', 8, 1),
(76, 'Joya Gomez Edwin Camilo', 6, 1),
(77, 'Velasquez Barragan Paola Andrea', 2, 1),
(78, 'Quiroz Rubio Janeth .', 26, 1),
(79, 'Trujillo Zamudio Pablo Andres', 27, 1),
(80, 'Cardenas Puentes Sonia Marcela', 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `email`, `telefono`) VALUES
(5, 'Arl Sura', 'capacitaciones@sura.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `sedes`
--

CREATE TABLE `sedes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sedes`
--

INSERT INTO `sedes` (`id`, `nombre`) VALUES
(1, 'Bogota'),
(2, 'Cartagena'),
(3, 'Buenaventura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleado` (`empleado`),
  ADD KEY `capacitacion` (`capacitacion`);

--
-- Indexes for table `capacitaciones`
--
ALTER TABLE `capacitaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proveedor` (`proveedor`);

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo` (`cargo`),
  ADD KEY `ciudad` (`ciudad`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `capacitaciones`
--
ALTER TABLE `capacitaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`empleado`) REFERENCES `empleados` (`id`),
  ADD CONSTRAINT `asistencias_ibfk_2` FOREIGN KEY (`capacitacion`) REFERENCES `capacitaciones` (`id`);

--
-- Constraints for table `capacitaciones`
--
ALTER TABLE `capacitaciones`
  ADD CONSTRAINT `capacitaciones_ibfk_1` FOREIGN KEY (`proveedor`) REFERENCES `proveedores` (`id`);

--
-- Constraints for table `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`cargo`) REFERENCES `cargos` (`id`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`ciudad`) REFERENCES `sedes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
