-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 07:17 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chocosafin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `nama_lengkap`) VALUES
(1, 'finki@gmail.com', '60f7339c319a5659113c16a0f6ee3289', 'finki najma');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` int(8) NOT NULL,
  `poto` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jeniskelamin` enum('P','L','','') NOT NULL,
  `jabatan` enum('manager','marketing','customer service','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nik`, `poto`, `nama`, `tgl_lahir`, `alamat`, `jeniskelamin`, `jabatan`) VALUES
(4, 'jo.jpg', 'faiq', '1995-07-28', 'nanjung', 'L', 'marketing'),
(5, 'v.jpg', 'vina', '1997-08-26', 'margaasih', 'P', 'customer service'),
(6, 'b.JPG', 'bunga', '1997-03-04', 'margaasih', 'P', 'customer service'),
(7, 'ff.jpg', 'finaj', '1997-05-25', 'nanjung', 'P', 'manager'),
(8, 'r.jpg', 'riri', '1997-08-31', 'soreang', 'P', 'customer service'),
(9, 'adz.jpg', 'adzki', '1993-10-30', 'cimahi', 'L', 'marketing'),
(10, 'd.jpg', 'dea', '1996-12-03', 'nanjung', 'P', 'marketing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `nik` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
