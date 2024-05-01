-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2024 at 10:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smoothies`
--

-- --------------------------------------------------------

--
-- Table structure for table `catgory`
--

CREATE TABLE `catgory` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `catgory`
--

INSERT INTO `catgory` (`cat_id`, `cat_name`, `cat_text`) VALUES
(10, 'ປັ້ນຮ້ອນ', ''),
(11, 'ປັ້ນເຢັນ', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pro_id` varchar(255) NOT NULL,
  `imageInput` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `pro_bpric` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pro_id`, `imageInput`, `pro_name`, `cat_id`, `pro_bpric`) VALUES
(8, 'A02', '384179.jpg', 'ປັ້ນໂກໂກ໊', 11, 28000.00),
(9, 'A01', 'images (1).jpg', 'ປັ້ນເພືອດ', 11, 28000.00),
(10, 'A03', '2253947625.jpg', 'ກາເຟ່ຮ້ອນ', 10, 30000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catgory`
--
ALTER TABLE `catgory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catgory`
--
ALTER TABLE `catgory`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `catgory` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
