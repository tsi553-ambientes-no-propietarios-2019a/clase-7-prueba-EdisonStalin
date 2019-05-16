-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 06:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prueba_b1`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `Id_producto` int(11) NOT NULL,
  `Cod_Producto` varchar(30) NOT NULL,
  `Nombre_Producto` varchar(30) NOT NULL,
  `Tipo_Producto` varchar(30) NOT NULL,
  `Stock_Producto` int(11) NOT NULL,
  `Precio_Producto` float NOT NULL,
  `fk_idTienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`Id_producto`, `Cod_Producto`, `Nombre_Producto`, `Tipo_Producto`, `Stock_Producto`, `Precio_Producto`, `fk_idTienda`) VALUES
(3, 'a12', 'mazana', 'fruta', 100, 0.4, 2),
(10, 'p2a', 'pera', 'fruta', 10, 0.25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tienda`
--

CREATE TABLE `tienda` (
  `Cod_Tienda` int(11) NOT NULL,
  `Nombre_Tienda` varchar(30) NOT NULL,
  `Usuario_Tienda` varchar(30) NOT NULL,
  `Clave_Tienda` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tienda`
--

INSERT INTO `tienda` (`Cod_Tienda`, `Nombre_Tienda`, `Usuario_Tienda`, `Clave_Tienda`) VALUES
(1, 'floreria Maria', 'Maria', '123'),
(2, 'tienda pedrito', 'Edison', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_producto`),
  ADD KEY `fk_idTienda` (`fk_idTienda`);

--
-- Indexes for table `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`Cod_Tienda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tienda`
--
ALTER TABLE `tienda`
  MODIFY `Cod_Tienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_idTienda` FOREIGN KEY (`fk_idTienda`) REFERENCES `tienda` (`Cod_Tienda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
