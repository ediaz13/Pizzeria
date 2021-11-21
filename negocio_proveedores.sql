-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 12:12 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `negocio`
--

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `razonsocial` varchar(100) NOT NULL,
  `cuit` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(30) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `razonsocial`, `cuit`,`direccion`,`telefono`) VALUES
(1, 'Lacteos La Graja Epica SRL', '14-234-345-245', 'Peron 234', '423-4455-7766'),
(2, 'Fiambreria Los jesuitas SA', '34-445-234-234', 'Los Sauces 3600', '44-4344-3434'),
(3, 'Distribuidora la rompe quesos CA', '23-344-234', 'Los palos grandes 3452', '23-234-2345-234'),
(4, 'Fabrica de masas Venezuela SRL', '56-345-345', 'San Martin 234', '34-2343-2344'),
(5, 'Prepizas La Caroreña Feliz CA', '45-454-234', 'Simon Bolivar', '34-4564-3454');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedores`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
