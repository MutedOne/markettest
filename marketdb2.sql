-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 07:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `emailAdmin` varchar(255) NOT NULL,
  `passAdmin` varchar(255) NOT NULL,
  `pict` varchar(255) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `emailAdmin`, `passAdmin`, `pict`) VALUES
(74, 'z@gmail.com', '$2y$10$.g4xH/ph.HPLKDI1TqIEfuoMTmHwn3dotZdWnvyw2cFohL89VileS', 'no'),
(75, 'a@gmail.com', '$2y$10$YLYN.VlG1BZ6PXF6lhpsvOE1fhvI7R/cldDjeyOJj1.sYUT.A6fWy', 'no'),
(76, 'stephen@gmail.com', '$2y$10$ymgiQPgB7KWptUDhiqkWqeeJePbWY4ooXx4rDIEYpFfzabYt42miW', 'no'),
(77, 'stephen@gmail.com', '$2y$10$t2nsRPcPlLfcqzxDS.IhlOeeMaYI8z27s8pUHvyL3yTaLGjtRQ0mC', 'no'),
(78, 'zd@gmail.com', '$2y$10$r4iJmtWrKe6ESuZfeaFlAuE1JbsmpGM3TkIxhoIWA6Ewkl2RFjiCK', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `idDealer` int(11) NOT NULL,
  `emailDealer` varchar(255) NOT NULL,
  `passDealer` varchar(255) NOT NULL,
  `pictDealer` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`idDealer`, `emailDealer`, `passDealer`, `pictDealer`) VALUES
(7, 'jen@gmail.com', 'sdasda', 'yes'),
(8, 'yoyo@gmail.com', 'sa', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `dealerProId` int(11) NOT NULL,
  `userProId` varchar(255) NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productBrandName` varchar(255) DEFAULT NULL,
  `productSize` varchar(255) DEFAULT NULL,
  `productPrize` varchar(255) DEFAULT NULL,
  `productQuantity` int(11) DEFAULT NULL,
  `productImg` varchar(255) DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`dealerProId`, `userProId`, `productName`, `productBrandName`, `productSize`, `productPrize`, `productQuantity`, `productImg`) VALUES
(7, '', '3', 'adidas', 'small', '3', 1, 'none'),
(7, '', 'bench', 'adidas', 'small', '24', 99, 'none'),
(2, '', 'nike21', 'nike', 'small', '12', 99, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `emailUser` varchar(255) NOT NULL,
  `passUser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `emailUser`, `passUser`) VALUES
(1, 'dawn@gmail.com', 'wassap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`idDealer`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `idDealer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
