-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 11:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tinywebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `IDDonHang` int(11) NOT NULL,
  `IDSanPham` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `IDGioHang` int(11) NOT NULL,
  `IDSanPham` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `IDDonHang` int(11) NOT NULL,
  `IDUser` int(11) DEFAULT NULL,
  `MaGiamGia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TongTien` float DEFAULT NULL,
  `NgayTao` date DEFAULT NULL,
  `TrangThai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenKH` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChiGiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoDienThoai` int(11) DEFAULT NULL,
  `ThanhToan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `IDGioHang` int(11) NOT NULL,
  `IDUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `id_admin`
--

CREATE TABLE `id_admin` (
  `ID` int(11) NOT NULL,
  `Hoten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Matkhau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `IDLoaiSanPham` int(11) NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`IDLoaiSanPham`, `Ten`) VALUES
(1, 'Gỗ Nguyên Liệu'),
(2, 'Nội Thất Gỗ');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `IDSanPham` int(11) NOT NULL,
  `IDLoaiSanPham` int(11) DEFAULT NULL,
  `TenSanPham` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `GiamGia` int(11) DEFAULT NULL,
  `MoTa` text COLLATE utf8_unicode_ci,
  `ChatLieu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MauSac` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KichThuoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `XuatXu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Imagee` text COLLATE utf8_unicode_ci,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`IDSanPham`, `IDLoaiSanPham`, `TenSanPham`, `Gia`, `GiamGia`, `MoTa`, `ChatLieu`, `MauSac`, `KichThuoc`, `XuatXu`, `Imagee`, `SoLuong`) VALUES
(1, 1, 'Gỗ Thông', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '1', NULL),
(2, 2, 'Gỗ Cao Su', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '2', NULL),
(3, 1, 'Bàn ăn lớn', 1000, 0, 'Đây là bàn ăn nguyên liệu gỗ aaa.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '3', NULL),
(4, 2, 'Ghế Gỗ Cao Su', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '4', NULL),
(5, 2, 'Gỗ Cao Su 1', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '5', NULL),
(6, 2, 'Gỗ Cao Su 2', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '6', NULL),
(7, 2, 'Gỗ Cao Su 3', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '7', NULL),
(8, 2, 'Gỗ Cao Su 4', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '8', NULL),
(9, 2, 'Gỗ Cao Su 5', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '9', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `IDUser` int(11) NOT NULL,
  `HoTen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Ngaysinh` date DEFAULT NULL,
  `SoDienThoai` int(11) NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayTao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yeuthich`
--

CREATE TABLE `yeuthich` (
  `IDUser` int(11) NOT NULL,
  `IDSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`IDDonHang`,`IDSanPham`),
  ADD KEY `chitietdonhang_ibfk_2` (`IDSanPham`);

--
-- Indexes for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`IDGioHang`,`IDSanPham`),
  ADD KEY `chitietgiohang_ibfk_2` (`IDSanPham`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`IDDonHang`),
  ADD KEY `donhang_ibfk_1` (`IDUser`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`IDGioHang`),
  ADD KEY `giohang_ibfk_1` (`IDUser`);

--
-- Indexes for table `id_admin`
--
ALTER TABLE `id_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`IDLoaiSanPham`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IDSanPham`),
  ADD KEY `sanpham` (`IDLoaiSanPham`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IDUser`);

--
-- Indexes for table `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`IDUser`,`IDSanPham`),
  ADD KEY `yeuthich_ibfk_1` (`IDSanPham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `IDDonHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `IDGioHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `id_admin`
--
ALTER TABLE `id_admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `IDLoaiSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `IDSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `IDUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`IDDonHang`) REFERENCES `donhang` (`IDDonHang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`IDSanPham`) REFERENCES `sanpham` (`IDSanPham`);

--
-- Constraints for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `chitietgiohang_ibfk_1` FOREIGN KEY (`IDGioHang`) REFERENCES `giohang` (`IDGioHang`),
  ADD CONSTRAINT `chitietgiohang_ibfk_2` FOREIGN KEY (`IDSanPham`) REFERENCES `sanpham` (`IDSanPham`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `users` (`IDUser`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `users` (`IDUser`);

--
-- Constraints for table `id_admin`
--
ALTER TABLE `id_admin`
  ADD CONSTRAINT `id_admin_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`IDUser`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham` FOREIGN KEY (`IDLoaiSanPham`) REFERENCES `loaisanpham` (`IDLoaiSanPham`);

--
-- Constraints for table `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD CONSTRAINT `yeuthich` FOREIGN KEY (`IDUser`) REFERENCES `users` (`IDUser`),
  ADD CONSTRAINT `yeuthich_ibfk_1` FOREIGN KEY (`IDSanPham`) REFERENCES `sanpham` (`IDSanPham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
