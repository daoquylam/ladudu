-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 03:34 PM
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
  `ID` int(11) NOT NULL,
  `IDDonHang` int(11) NOT NULL,
  `IDSanPham` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ID`, `IDDonHang`, `IDSanPham`, `SoLuong`, `Gia`) VALUES
(1, 13, 1, 3, 1000),
(2, 13, 1, 2, 1000),
(3, 14, 1, 3, 1000),
(4, 14, 7, 1, 1000),
(5, 14, 4, 1, 1000),
(6, 15, 1, 3, 1000),
(7, 15, 7, 1, 1000),
(8, 15, 4, 1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `ID` int(11) NOT NULL,
  `IDUser` int(11) DEFAULT NULL,
  `HoTen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoDienThoai` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TongTien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`ID`, `IDUser`, `HoTen`, `Email`, `SoDienThoai`, `DiaChi`, `TongTien`) VALUES
(13, 14, 'aaaaaaaabbbb', 'abc234@gmail.com', '987654321', '1234abcd 56789cd', 5000),
(14, 14, 'aaaaaaaabbbb', 'abc234@gmail.com', '987654321', '1234abcd 56789cd', 5000),
(15, 14, 'aaaaaaaabbbb', 'abc234@gmail.com', '987654321', '1234abcd 56789cd', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `ID` int(11) NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`ID`, `Ten`) VALUES
(1, 'Gỗ Nguyên Liệu'),
(2, 'Nội Thất Gỗ');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(11) NOT NULL,
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

INSERT INTO `sanpham` (`ID`, `IDLoaiSanPham`, `TenSanPham`, `Gia`, `GiamGia`, `MoTa`, `ChatLieu`, `MauSac`, `KichThuoc`, `XuatXu`, `Imagee`, `SoLuong`) VALUES
(1, 1, 'Gỗ Thông', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '1.jpg', NULL),
(2, 2, 'Gỗ Cao Su', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '2.jpg', NULL),
(3, 1, 'Bàn ăn lớn', 1000, 0, 'Đây là bàn ăn nguyên liệu gỗ aaa.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '3.jpg', NULL),
(4, 2, 'Ghế Gỗ Cao Su', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '4.jpg', NULL),
(5, 2, 'Gỗ Cao Su 1', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '5.jpg', NULL),
(6, 2, 'Gỗ Cao Su 2', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '6.jpg', NULL),
(7, 2, 'Gỗ Cao Su 3', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '7.jpg', NULL),
(8, 2, 'Gỗ Cao Su 4', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '8.jpg', NULL),
(9, 2, 'Gỗ Cao Su 5', 1000, 0, 'Đây là Gỗ Thông nguyên liệu.......', 'Gỗ tươi', 'nâu', '10x10x10', 'việt nam', '9.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `HoTen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` int(11) NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `HoTen`, `Email`, `Matkhau`, `SoDienThoai`, `DiaChi`) VALUES
(1, 'daoquylam', 'abc@gmail.com', '123456', 987654321, NULL),
(5, 'quyamaaaa', 'aabc@gmail.com', '123456', 987654321, NULL),
(6, 'aaaaaaaa', 'agggggg@gmao.com', 'abcabc', 1234567890, NULL),
(7, 'aaaaaaaaaa', 'quaaaa@gmail.com', 'abcabc', 1234567890, NULL),
(8, 'adsafdad', 'qaaa@gmail.com', '123456', 987654321, NULL),
(9, 'dungaaaa', 'abc123@gmail.com', '123456', 987654321, NULL),
(10, 'ahhihihihssss', 'ahd@gmail.com', '123456', 987654321, NULL),
(11, 'ahhihihihssss', 'aaahd@gmail.com', '123456', 987654321, NULL),
(12, 'daolammmmmmm', 'aw@gai.com', '123456', 1234567890, NULL),
(13, 'daoquylaaaaa', 'quyaaaaaaaa@gm.aaa', '123456', 987654321, 'afpeigjwgjsldjs'),
(14, 'aaaaaaaabbbb', 'abc234@gmail.com', '123456', 987654321, '1234abcd 56789cd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `chitietdonhang_ibfk_1` (`IDDonHang`),
  ADD KEY `chitietdonhang_ibfk_2` (`IDSanPham`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `donhang_ibfk_1` (`IDUser`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `sanpham` (`IDLoaiSanPham`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`IDDonHang`) REFERENCES `donhang` (`ID`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`IDSanPham`) REFERENCES `sanpham` (`ID`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `users` (`ID`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham` FOREIGN KEY (`IDLoaiSanPham`) REFERENCES `loaisanpham` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
