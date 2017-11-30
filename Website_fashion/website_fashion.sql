-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2017 at 01:10 PM
-- Server version: 5.6.31
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE IF NOT EXISTS `dondathang` (
  `MaDDH` int(11) NOT NULL,
  `Date` varchar(200) DEFAULT NULL,
  `MaHH` varchar(100) NOT NULL,
  `TenHH` varchar(200) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiatriDH` int(11) NOT NULL,
  `HoTen` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `SDT` varchar(16) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`MaDDH`, `Date`, `MaHH`, `TenHH`, `SoLuong`, `GiatriDH`, `HoTen`, `Email`, `SDT`, `address`, `note`) VALUES
(24, '2017-11-27 15:10:55', 'MH07', 'Bàn uống nước', 1, 494, 'Thị Chinh', 'chinhthi@gmail.com', '0966514983', 'BN', ''),
(25, '2017-11-27 15:11:56', 'MH13', 'Nghế ngồi', 2, 294, 'thuclfc', 'thuclfc@gmail.com', '01642546737', 'TS-BN', ''),
(18, '2017-11-23 15:15:25', 'MH04', 'tuphongkhach', 1, 322, 'Thucnd', 'thuclfc@gmail.com', '01642546737', 'fs', 'fsfs'),
(19, '2017-11-24 10:04:05', 'MH09', 'Nghế ngồi', 1, 147, 'namnh', 'namnh@gmail.com', '0966514983', 'từ sơn', ''),
(21, '2017-11-24 11:02:14', 'MH11', 'Nghế ngồi', 1, 147, 'lfc', 'lfc@gmail.com', '01649580989', 'TPHCM', ''),
(22, '2017-11-24 11:10:03', 'MH12', 'Nghế ngồi', 2, 294, 'Thucnd', 'thuclfc@gmail.com', '1642546328', 'Le Van Luong', ''),
(23, '2017-11-24 11:14:09', 'MH12', 'Nghế ngồi', 1, 147, 'Phương', 'phuongpt@gmail.com', '0966514983', 'bắc ninh', '');

-- --------------------------------------------------------

--
-- Table structure for table `hdban`
--

CREATE TABLE IF NOT EXISTS `hdban` (
  `MaHDB` varchar(10) NOT NULL,
  `MaNV` varchar(10) NOT NULL,
  `MaKH` varchar(10) NOT NULL,
  `NgayBan` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hdban`
--

INSERT INTO `hdban` (`MaHDB`, `MaNV`, `MaKH`, `NgayBan`) VALUES
('HDB01', 'NV01', 'KH01', '2014-08-12 13:21:25'),
('HDB02', 'NV01', 'KH01', '2014-08-03 00:00:00'),
('HDB03', 'NV02', 'KH03', '2014-01-14 13:22:37'),
('HDB04', 'NV02', 'KH04', '2014-03-18 13:22:55'),
('HDB05', 'NV01', 'KH04', '2014-08-05 13:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `hdb_ct`
--

CREATE TABLE IF NOT EXISTS `hdb_ct` (
  `MaHDB` varchar(10) NOT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `MaHang` varchar(10) NOT NULL,
  `GhiChu` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hdb_ct`
--

INSERT INTO `hdb_ct` (`MaHDB`, `DonGia`, `SoLuong`, `MaHang`, `GhiChu`) VALUES
('HDB02', '6500000', 3, 'MH01', ''),
('HDB01', '5400000', 2, 'MH02', ''),
('HDB01', '3400000', 1, 'MH03', '');

-- --------------------------------------------------------

--
-- Table structure for table `hdnhap`
--

CREATE TABLE IF NOT EXISTS `hdnhap` (
  `MaHDN` varchar(10) NOT NULL,
  `MaNCC` varchar(10) NOT NULL,
  `NgayNhap` datetime NOT NULL,
  `MaNV` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hdnhap`
--

INSERT INTO `hdnhap` (`MaHDN`, `MaNCC`, `NgayNhap`, `MaNV`) VALUES
('HDN01', 'NCC01', '2013-01-09 13:57:29', 'NV01'),
('HDN02', 'NCC03', '2012-08-01 13:58:00', 'NV01');

-- --------------------------------------------------------

--
-- Table structure for table `hdnhap_ct`
--

CREATE TABLE IF NOT EXISTS `hdnhap_ct` (
  `MaHDN` varchar(10) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `MaHang` varchar(10) NOT NULL,
  `GhiChu` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hdnhap_ct`
--

INSERT INTO `hdnhap_ct` (`MaHDN`, `SoLuong`, `DonGia`, `MaHang`, `GhiChu`) VALUES
('HDN01', 2, '3450000', 'MH01', ''),
('HDN02', 3, '3400000', 'MH02', '');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `MaKH` varchar(10) NOT NULL,
  `HoTen` varchar(15) NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `DienThoai` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `HoTen`, `NgaySinh`, `DiaChi`, `DienThoai`, `Email`) VALUES
('KH01', 'Lê Văn Huy', '1989-08-26 11:54:54', 'Cổ Nhuế - Hà Nội', '098398439', 'huyvan@gmail.com'),
('KH02', 'Trần Thị Huế', '1989-11-02 11:55:36', 'Bắc Từ Liêm - Hà Nội', '09483985', 'huetran@gmail.com'),
('KH03', 'Lê Thị Mai', '1990-01-22 11:56:24', 'Trung Kính - Cầu Giấy', '094398439', 'mai89@gmail.com'),
('KH04', 'Lê Minh Sơn', '2000-02-01 11:57:01', 'Bắc Từ Liêm - Hà Nội', '01234059840', 'minhson@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE IF NOT EXISTS `lienhe` (
  `Date` varchar(200) NOT NULL,
  `Hoten` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `content` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`Date`, `Hoten`, `email`, `content`) VALUES
('2014-09-17 21:52:58', 'Thuc', 'thuclfc@gmail.com', 'dac thuc'),
('2014-09-17 21:51:32', 'Nhung', 'nguyennhung_14492@yahoo.com', 'Nhung hâm'),
('2017-11-24 16:45:58', 'thuclfc', 'thuclfc@gmail.com', 'abc xyz');

-- --------------------------------------------------------

--
-- Table structure for table `loaimh`
--

CREATE TABLE IF NOT EXISTS `loaimh` (
  `MaLMH` varchar(10) NOT NULL,
  `TenLoaiMH` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaimh`
--

INSERT INTO `loaimh` (`MaLMH`, `TenLoaiMH`) VALUES
('01', 'Sản phẩm nổi bật'),
('02', 'Phòng ngủ'),
('03', 'Phòng vệ sinh'),
('04', 'Phòng khách'),
('05', 'Phòng làm việc');

-- --------------------------------------------------------

--
-- Table structure for table `mathang`
--

CREATE TABLE IF NOT EXISTS `mathang` (
  `MaNCC` varchar(10) NOT NULL,
  `MaHang` varchar(10) NOT NULL,
  `TenMH` varchar(255) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `MoTa` varchar(255) NOT NULL,
  `DVT` varchar(15) NOT NULL,
  `Gia_ban` varchar(100) DEFAULT NULL,
  `SLTon` int(11) NOT NULL,
  `Thue` decimal(10,2) NOT NULL,
  `MaLMH` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mathang`
--

INSERT INTO `mathang` (`MaNCC`, `MaHang`, `TenMH`, `HinhAnh`, `MoTa`, `DVT`, `Gia_ban`, `SLTon`, `Thue`, `MaLMH`) VALUES
('', 'MH06', 'Dress', 'imgp1860_copy.jpg', 'red dress', '', '129', 15, '0.00', ''),
('', 'MH02', 'Váy ngắn', 'IMGP1989_copy_thumb_399x600.jpg', 'Váy ngắn hở mông', '', '129', 10, '0.00', ''),
('NC06', 'MH07', 'Bàn uống nước', 'imgp3609 copy-min.jpg', 'abc - zyx - abc', '2', '494', 0, '4.00', '01'),
('NC004', 'MH08', 'Nghế ngồi', 'imgp2042_copy_666x1000_672x1000.jpg', 'Nghề ngồi uống nước', '23', '147', 8, '1.00', '03'),
('NC004', 'MH09', 'Nghế ngồi', 'imgp3645 copy-min.jpg', 'bàn ăn cơm', '23', '147', 4, '1.00', '12'),
('NC004', 'MH10', 'Nghế ngồi', 'imgp0932.jpg', 'bàn nghế phòng khách', '23', '147', 4, '1.00', '12'),
('NC004', 'MH11', 'Nghế ngồi', 'imgp2103_copy_666x1000_346x644.jpg', 'bàn nghế phòng khách', '23', '147', 1, '1.00', '04'),
('NC004', 'MH12', 'Nghế ngồi', 'imgp1376.jpg', 'bàn nghế phòng khách', '23', '147', 0, '1.00', '03'),
('NC004', 'MH13', 'Nghế ngồi', 'IMGP2274_copy_thumb_400x600.jpg', 'bàn nghế phòng khách', '23', '147', 8, '1.00', '04'),
('NC004', 'MH14', 'Nghế ngồi', 'imgp2300_copy_666x1000.jpg', 'bàn nghế phòng khách', '23', '147', 1, '1.00', '04'),
('', 'MH01', 'Áo vest', 'imgp0912.jpg', 'Áo vest được làm từ chất liệu cao cấp...', '', '125', 10, '0.00', ''),
('', 'MH15', 'Áo dài Việt Nam', 'imgp3645 copy-min.jpg', 'Áo dài Việt Nam được làm từ lụa tơ tằm cao cấp...', '', '236', 10, '0.00', ''),
('', 'MH16', 'Áo khoác', 'imgp2272_copy_666x1000_thumb_403x599.jpg', 'Áo khoác được làm từ lông cừu cao cấp.', '', '320', 15, '0.00', ''),
('', 'MH17', 'Áo da', 'imgp1376.jpg', 'Áo da được làm từ da cao cấp.', '', '320', 17, '0.00', ''),
('', 'MH18', 'Áo da bò', 'alb_1482304118_902.jpg', 'làm từ da bò nguyên miếng', '', '125', 15, '0.00', ''),
('', 'mh19', 'Quần Tây', 'imgp0912.jpg', 'Quần tây phù hơp với đàn ông', '', '230', 10, '0.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL,
  `level` int(2) DEFAULT NULL,
  `HoTen` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(32) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `TP` varchar(255) NOT NULL,
  `QuocGia` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `repassword` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `level`, `HoTen`, `email`, `dienthoai`, `address`, `Name`, `TP`, `QuocGia`, `password`, `repassword`) VALUES
(7, 2, 'Thuc Nguyen', 'thuclfc@gmail.com', '01696256892', 'tam lư - từ sơn', '', 'admin', '', 'lfc', ''),
(1, 1, 'chinhdt', 'chinhthi@gmail.com', '01642546328', '', '', '', '', '123456789', ''),
(15, 2, 'Thucnd', 'thucnd@gmail.com', '01642546328', 'Le Van Luong', '', '', '', '123456', '');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE IF NOT EXISTS `nhacungcap` (
  `MaNCC` varchar(10) NOT NULL,
  `TenNCC` varchar(50) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `DienThoai` varchar(15) NOT NULL,
  `Fax` varchar(15) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `GhiChu` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`, `DiaChi`, `DienThoai`, `Fax`, `Email`, `GhiChu`) VALUES
('NCC01', 'La Xuyên', 'Ba Vì - Hà Nội', '089398403', '0934094039', 'laxuyen@gmail.com', ''),
('NCC02', 'Vạn Thắng', '305 Tôn Đức Thắng - Hà Nội', '0974838749', '01928430', 'vanthang@gmail.com', ''),
('NCC03', 'Nghi Nga', '184 Tây Sơn - Hà Nội', '0124893895', '090390556', 'nghinga@gmail.com', ''),
('NCC04', 'Vạn Bảo', '312 Đê La Thành - Hà Nội', '0912928392', '018918291', 'vanbao@gmail.com', ''),
('NCC05', 'Thu Thoan', '109 C21 Thanh Xuân - Hà Nội', '0920834089403', '10920194', 'thuthoan@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `MaNV` varchar(10) NOT NULL,
  `HoTen` varchar(15) NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `PassWord` varchar(15) NOT NULL,
  `DienThoai` varchar(15) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `HoTen`, `NgaySinh`, `UserName`, `PassWord`, `DienThoai`, `DiaChi`, `Email`) VALUES
('NV01', 'Nguyễn Thị Lý', '1990-08-06 11:33:42', 'lynguyen', '12345', '093245667', 'Bắc Từ Liêm', 'lynguyen@gmail.com'),
('NV02', 'Văn Công Tuấn', '1989-08-15 11:35:27', 'tuanvan', '12345', '09388495049', 'Hà Nam', 'nhombaotri@gmail.com'),
('NV03', 'Lê Thao Giang', '1989-08-11 11:37:05', 'thaogiang', '12345', '075894854', 'Hòa Bình', 'thaogiang93@gmail.com'),
('NV04', 'Trần Trà My', '1994-08-07 11:38:04', 'tramy', '12345', '093894834', 'Ninh Bình', 'tramy@gmail.com'),
('NV05', 'Trần Đức Bình', '1990-08-24 11:38:50', 'ducbinh', '12345', '012395049', 'Hải Phòng', 'ducbinh@gmail.com'),
('NV06', 'Lương Mạnh Hải', '1992-08-19 11:40:03', 'haimanh', '12345', '08738898493', 'Phú Thọ', 'haimanh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `src_img` text COLLATE utf8_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `src_img`, `year`, `link`) VALUES
(1, 'thời trang mùa hè', 'image/slider1.jpg', 2014, '1'),
(2, 'thời trang mùa đông', 'image/slider2.jpg', 2014, '1'),
(3, 'thời trang mùa xuân', 'image/slider3.jpg', 2017, '2'),
(4, 'thời trang mùa thu', 'image/slider4.jpg', 2017, '2'),
(5, 'thời trang mùa hạ', 'image/slider5.jpg', 2017, '2'),
(6, 'thời trang mùa hè', 'image/slider3.jpg', 2014, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`MaDDH`);

--
-- Indexes for table `hdban`
--
ALTER TABLE `hdban`
  ADD PRIMARY KEY (`MaHDB`),
  ADD KEY `MaNV` (`MaNV`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Indexes for table `hdb_ct`
--
ALTER TABLE `hdb_ct`
  ADD PRIMARY KEY (`MaHang`),
  ADD KEY `MaHDB` (`MaHDB`),
  ADD KEY `MaHang` (`MaHang`);

--
-- Indexes for table `hdnhap`
--
ALTER TABLE `hdnhap`
  ADD PRIMARY KEY (`MaHDN`),
  ADD KEY `MaNCC` (`MaNCC`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `hdnhap_ct`
--
ALTER TABLE `hdnhap_ct`
  ADD PRIMARY KEY (`MaHang`),
  ADD KEY `MaHDN` (`MaHDN`),
  ADD KEY `MaHang` (`MaHang`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `loaimh`
--
ALTER TABLE `loaimh`
  ADD PRIMARY KEY (`MaLMH`);

--
-- Indexes for table `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`MaHang`),
  ADD KEY `MaLMH` (`MaLMH`),
  ADD KEY `MaNCC` (`MaNCC`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `MaDDH` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
