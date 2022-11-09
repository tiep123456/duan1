-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 07:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan_sanpham`
--

CREATE TABLE `binhluan_sanpham` (
  `id_binhluan` int(11) NOT NULL,
  `ten` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `noidung` varchar(500) NOT NULL,
  `trangthai` bit(50) NOT NULL,
  `id_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan_tintuc`
--

CREATE TABLE `binhluan_tintuc` (
  `id_binhluan` int(11) NOT NULL,
  `ten` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `noidung` varchar(500) NOT NULL,
  `trangthai` bit(50) NOT NULL,
  `id_tintuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_sp`
--

CREATE TABLE `danhmuc_sp` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL,
  `trangthai` bit(50) NOT NULL,
  `sap_xep` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc_sp`
--

INSERT INTO `danhmuc_sp` (`id_danhmuc`, `ten_danhmuc`, `trangthai`, `sap_xep`) VALUES
(1, 'dong ho', b'00000000000000000000000000000000000000000000000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_tintuc`
--

CREATE TABLE `danhmuc_tintuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(250) NOT NULL,
  `trangthai` bit(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `don_dat_hang`
--

CREATE TABLE `don_dat_hang` (
  `id_ddh` int(11) NOT NULL,
  `ngay_dat` datetime NOT NULL,
  `trangthai` bit(20) NOT NULL,
  `id_khachhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `don_dat_hang_chitiet`
--

CREATE TABLE `don_dat_hang_chitiet` (
  `id_ddh` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `ten_sanpham` varchar(250) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`id`, `ten`) VALUES
(1, 'Hải Sản');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `ten_sanpham` varchar(255) NOT NULL,
  `trangthai` bit(50) NOT NULL,
  `img` varchar(250) NOT NULL,
  `list_img` varchar(250) NOT NULL,
  `gia` decimal(18,0) NOT NULL DEFAULT 0,
  `gia_sell` decimal(18,0) NOT NULL DEFAULT 0,
  `chi_tiet` varchar(250) NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id_tintuc` int(11) NOT NULL,
  `ten_tintuc` varchar(255) NOT NULL,
  `img` varchar(250) NOT NULL,
  `luot_xem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `diachi`, `image`, `level`) VALUES
(14, 'Nguyễn Danh', '', '11', '0985225130', NULL, '', 2),
(15, 'Công Danh', '', '11', '1646391669', NULL, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan_sanpham`
--
ALTER TABLE `binhluan_sanpham`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Indexes for table `binhluan_tintuc`
--
ALTER TABLE `binhluan_tintuc`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Indexes for table `danhmuc_sp`
--
ALTER TABLE `danhmuc_sp`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `danhmuc_tintuc`
--
ALTER TABLE `danhmuc_tintuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  ADD PRIMARY KEY (`id_ddh`);

--
-- Indexes for table `don_dat_hang_chitiet`
--
ALTER TABLE `don_dat_hang_chitiet`
  ADD PRIMARY KEY (`id_ddh`,`id_sanpham`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan_sanpham`
--
ALTER TABLE `binhluan_sanpham`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binhluan_tintuc`
--
ALTER TABLE `binhluan_tintuc`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc_sp`
--
ALTER TABLE `danhmuc_sp`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `danhmuc_tintuc`
--
ALTER TABLE `danhmuc_tintuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  MODIFY `id_ddh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `don_dat_hang_chitiet`
--
ALTER TABLE `don_dat_hang_chitiet`
  MODIFY `id_ddh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
