-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 10:31 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelong`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan_customer`
--

CREATE TABLE `pesan_customer` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan_customer`
--

INSERT INTO `pesan_customer` (`nama`, `email`, `judul`, `isi`) VALUES
('raihan', 'calisscafe@gmail.com', 'sasasa', 'dededede'),
('regina', 'raihanhasyim00@gmail.com', 'Hotel Mewah', 'Hotel diisini sangat mewah dan bagus saya sangat suka hotel yang ada disini lebih dilengkapio lagi hotel hotelnya agar lebih memuaskan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan_customer`
--
ALTER TABLE `pesan_customer`
  ADD PRIMARY KEY (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
