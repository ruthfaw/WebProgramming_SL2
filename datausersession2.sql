-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 07:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datausersession2`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `namaDepan` varchar(20) NOT NULL,
  `namaTengah` varchar(20) NOT NULL,
  `namaBelakang` varchar(20) NOT NULL,
  `tempatLahir` varchar(30) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `wargaNegara` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noHP` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kodePos` varchar(10) NOT NULL,
  `fotoProfil` varchar(255) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password1` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tanggalLahir`, `NIK`, `wargaNegara`, `email`, `noHP`, `alamat`, `kodePos`, `fotoProfil`, `userName`, `password1`, `password2`) VALUES
('Monica', 'Ruth', 'Fabiola', 'Itallia', '2002-02-20', '1234567812345678', 'Italia', 'ruthfaw202@gmail.com', '12345678910', 'roma', '12345', 'imageUpload/irene.jpg', 'monicaruth', '123456', '123456'),
('Philip', 'Randy', 'Winata', 'Jakarta', '1995-04-18', '1234567812345679', 'Jepang', 'philiprandy@gmail.com', '12345678999', 'bogor', '16123', 'imageUpload/endi2.jpg', 'philrandy', '345678', '345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`userName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
