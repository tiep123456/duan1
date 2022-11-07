-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 07, 2022 lúc 10:11 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopfood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan_sanpham`
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
-- Cấu trúc bảng cho bảng `binhluan_tintuc`
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
-- Cấu trúc bảng cho bảng `danhmuc_sp`
--

CREATE TABLE `danhmuc_sp` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL,
  `trangthai` bit(50) NOT NULL,
  `sap_xep` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_sp`
--

INSERT INTO `danhmuc_sp` (`id_danhmuc`, `ten_danhmuc`, `trangthai`, `sap_xep`) VALUES
(2, 'dong ho', b'00000000000000000000000000000000000000000000000000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_tintuc`
--

CREATE TABLE `danhmuc_tintuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(250) NOT NULL,
  `trangthai` bit(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_dat_hang`
--

CREATE TABLE `don_dat_hang` (
  `id_ddh` int(11) NOT NULL,
  `ngay_dat` datetime NOT NULL,
  `trangthai` bit(20) NOT NULL,
  `id_khachhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_dat_hang_chitiet`
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
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_khachhang` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sdt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
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

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `ten_sanpham`, `trangthai`, `img`, `list_img`, `gia`, `gia_sell`, `chi_tiet`, `luot_xem`, `id_danhmuc`) VALUES
(1, 'dong ho', b'00000000000000000000000000000000000000000000000000', '', '', '0', '0', 'sanpham dong ho', 0, 0),
(2, 'sadasdasasdasdasddas', b'00000000000000000000000000000000000000000000000000', 'xcacasdas', 'asdasdasd', '200', '120', 'adasdasdasdasd', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id_tintuc` int(11) NOT NULL,
  `ten_tintuc` varchar(255) NOT NULL,
  `img` varchar(250) NOT NULL,
  `luot_xem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan_sanpham`
--
ALTER TABLE `binhluan_sanpham`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Chỉ mục cho bảng `binhluan_tintuc`
--
ALTER TABLE `binhluan_tintuc`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Chỉ mục cho bảng `danhmuc_sp`
--
ALTER TABLE `danhmuc_sp`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `danhmuc_tintuc`
--
ALTER TABLE `danhmuc_tintuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  ADD PRIMARY KEY (`id_ddh`);

--
-- Chỉ mục cho bảng `don_dat_hang_chitiet`
--
ALTER TABLE `don_dat_hang_chitiet`
  ADD PRIMARY KEY (`id_ddh`,`id_sanpham`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan_sanpham`
--
ALTER TABLE `binhluan_sanpham`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binhluan_tintuc`
--
ALTER TABLE `binhluan_tintuc`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc_sp`
--
ALTER TABLE `danhmuc_sp`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `danhmuc_tintuc`
--
ALTER TABLE `danhmuc_tintuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  MODIFY `id_ddh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `don_dat_hang_chitiet`
--
ALTER TABLE `don_dat_hang_chitiet`
  MODIFY `id_ddh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
