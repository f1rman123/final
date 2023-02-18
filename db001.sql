-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 02:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db001`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(255) NOT NULL,
  `produk_deskripsi` varchar(255) NOT NULL,
  `produk_harga` int(11) NOT NULL,
  `produk_stok` int(11) NOT NULL,
  `produk_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_nama`, `produk_deskripsi`, `produk_harga`, `produk_stok`, `produk_img`) VALUES
(1, 'crewneck K001', 'Gratis ongkir daerah Makassar tanggal 3-5 Februari 2023 launching produk', 65000, 20, 'trifting/baju2.jpeg'),
(2, 'crewneck K002', 'Gratis ongkir daerah Makassar tanggal 3-5 Februari 2023 launching produk', 65000, 6, 'trifting/baju3.jpeg'),
(3, 'crewneck K003', 'Gratis ongkir daerah Makassar tanggal 3-5 Februari 2023 launching produk', 65000, 16, 'trifting/baju4.jpeg\r\n'),
(4, 'Kemeja K001', 'Gratis ongkir daerah Makassar tanggal 3-5 Februari 2023 launching produk', 55000, 30, 'trifting/kemeja1.jpeg'),
(5, 'Kemeja K002', 'Gratis ongkir daerah Makassar tanggal 3-5 Februari 2023 launching produk', 55000, 30, 'trifting/kemeja2.jpeg'),
(6, 'Kemeja K003', 'Gratis ongkir daerah Makassar tanggal 3-5 Februari 2023 launching produk', 55000, 30, 'trifting/kemeja3.jpeg'),
(7, 'CelanaJ001', 'Gratis ongkir daerah Makassar tanggal 3-5 Februari 2023 launching produk', 70000, 40, 'trifting/celana1.jpeg'),
(8, 'CelanaJ002', 'Gratis ongkir daerah Makassar tanggal 3-5 Februari 2023 launching produk', 70000, 22, 'trifting/celana2.jpeg'),
(9, 'CelanaJ003', 'Gratis ongkir daerah Makassar tanggal 3-5 Februari 2023 launching produk', 70000, 33, 'trifting/celana1.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
