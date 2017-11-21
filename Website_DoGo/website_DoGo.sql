-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 14, 2014 at 02:21 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET FOREIGN_KEY_CHECKS=0;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT=0;
START TRANSACTION;

-- 
-- Database: `website_dogo`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `hdban`
-- 

CREATE TABLE `hdban` (
  `MaHDB` varchar(10) NOT NULL,
  `MaNV` varchar(10) NOT NULL,
  `MaKH` varchar(10) NOT NULL,
  `NgayBan` datetime NOT NULL,
  PRIMARY KEY  (`MaHDB`),
  KEY `MaNV` (`MaNV`),
  KEY `MaKH` (`MaKH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- 
-- Dumping data for table `hdban`
-- 

INSERT INTO `hdban` VALUES ('HDB01', 'NV01', 'KH01', '2014-08-12 13:21:25');
INSERT INTO `hdban` VALUES ('HDB02', 'NV01', 'KH01', '2014-08-03 00:00:00');
INSERT INTO `hdban` VALUES ('HDB03', 'NV02', 'KH03', '2014-01-14 13:22:37');
INSERT INTO `hdban` VALUES ('HDB04', 'NV02', 'KH04', '2014-03-18 13:22:55');
INSERT INTO `hdban` VALUES ('HDB05', 'NV01', 'KH04', '2014-08-05 13:25:54');

-- --------------------------------------------------------

-- 
-- Table structure for table `hdb_ct`
-- 

CREATE TABLE `hdb_ct` (
  `MaHDB` varchar(10) NOT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `MaHang` varchar(10) NOT NULL,
  `GhiChu` varchar(255) NOT NULL,
  PRIMARY KEY  (`MaHang`),
  KEY `MaHDB` (`MaHDB`),
  KEY `MaHang` (`MaHang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `hdb_ct`
-- 

INSERT INTO `hdb_ct` VALUES ('HDB02', 6500000, 3, 'MH01', '');
INSERT INTO `hdb_ct` VALUES ('HDB01', 5400000, 2, 'MH02', '');
INSERT INTO `hdb_ct` VALUES ('HDB01', 3400000, 1, 'MH03', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `hdnhap`
-- 

CREATE TABLE `hdnhap` (
  `MaHDN` varchar(10) NOT NULL,
  `MaNCC` varchar(10) NOT NULL,
  `NgayNhap` datetime NOT NULL,
  `MaNV` varchar(10) NOT NULL,
  PRIMARY KEY  (`MaHDN`),
  KEY `MaNCC` (`MaNCC`),
  KEY `MaNV` (`MaNV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `hdnhap`
-- 

INSERT INTO `hdnhap` VALUES ('HDN01', 'NCC01', '2013-01-09 13:57:29', 'NV01');
INSERT INTO `hdnhap` VALUES ('HDN02', 'NCC03', '2012-08-01 13:58:00', 'NV01');

-- --------------------------------------------------------

-- 
-- Table structure for table `hdnhap_ct`
-- 

CREATE TABLE `hdnhap_ct` (
  `MaHDN` varchar(10) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `MaHang` varchar(10) NOT NULL,
  `GhiChu` varchar(255) NOT NULL,
  PRIMARY KEY  (`MaHang`),
  KEY `MaHDN` (`MaHDN`),
  KEY `MaHang` (`MaHang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- 
-- Dumping data for table `hdnhap_ct`
-- 

INSERT INTO `hdnhap_ct` VALUES ('HDN01', 2, 3450000, 'MH01', '');
INSERT INTO `hdnhap_ct` VALUES ('HDN02', 3, 3400000, 'MH02', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `khachhang`
-- 

CREATE TABLE `khachhang` (
  `MaKH` varchar(10) NOT NULL,
  `HoTen` varchar(15) NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `DienThoai` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY  (`MaKH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `khachhang`
-- 

INSERT INTO `khachhang` VALUES ('KH01', 'Lê Văn Huy', '1989-08-26 11:54:54', 'Cổ Nhuế - Hà Nội', '098398439', 'huyvan@gmail.com');
INSERT INTO `khachhang` VALUES ('KH02', 'Trần Thị Huế', '1989-11-02 11:55:36', 'Bắc Từ Liêm - Hà Nội', '09483985', 'huetran@gmail.com');
INSERT INTO `khachhang` VALUES ('KH03', 'Lê Thị Mai', '1990-01-22 11:56:24', 'Trung Kính - Cầu Giấy', '094398439', 'mai89@gmail.com');
INSERT INTO `khachhang` VALUES ('KH04', 'Lê Minh Sơn', '2000-02-01 11:57:01', 'Bắc Từ Liêm - Hà Nội', '01234059840', 'minhson@gmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `loaimh`
-- 

CREATE TABLE `loaimh` (
  `MaLMH` varchar(10) NOT NULL,
  `TenLoaiMH` varchar(255) NOT NULL,
  PRIMARY KEY  (`MaLMH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `loaimh`
-- 

INSERT INTO `loaimh` VALUES ('01', 'Sản phẩm nổi bật');
INSERT INTO `loaimh` VALUES ('02', 'Phòng ngủ');
INSERT INTO `loaimh` VALUES ('03', 'Phòng vệ sinh');
INSERT INTO `loaimh` VALUES ('04', 'Phòng khách');
INSERT INTO `loaimh` VALUES ('05', 'Phòng làm việc');

-- --------------------------------------------------------

-- 
-- Table structure for table `mathang`
-- 

CREATE TABLE `mathang` (
  `MaNCC` varchar(10) NOT NULL,
  `MaHang` varchar(10) NOT NULL,
  `TenMH` varchar(255) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `MoTa` varchar(255) NOT NULL,
  `DVT` varchar(15) NOT NULL,
  `Gia_ban` varchar(100) default NULL,
  `SLTon` int(11) NOT NULL,
  `Thue` decimal(10,2) NOT NULL,
  `MaLMH` varchar(10) NOT NULL,
  PRIMARY KEY  (`MaHang`),
  KEY `MaLMH` (`MaLMH`),
  KEY `MaNCC` (`MaNCC`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `mathang`
-- 

INSERT INTO `mathang` VALUES ('NC002', 'MH04', 'tuphongkhach', '07.png', 'abc xyz', 'Bộ', '321.5', 12, 5.00, '01');
INSERT INTO `mathang` VALUES ('NC01', 'MH05', 'tuphongkhachkhamoc', 'tuphongkhachkhamoc.jpg', 'abc zxy', 'Đôi', '421.8', 6, 2.00, '01');
INSERT INTO `mathang` VALUES ('NC06', 'MH06', 'Bàn uống nước', 'dong-ky-voi-do-go-my-nghe-phu-hai1.jpg', 'abc - zyx', '2', '394', 10, 4.00, '01');
INSERT INTO `mathang` VALUES ('NC06', 'MH07', 'Bàn uống nước', 'luhuong.jpg', 'abc - zyx - abc', '2', '494', 10, 4.00, '01');
INSERT INTO `mathang` VALUES ('NC004', 'MH08', 'Nghế ngồi', 'thumb_1397743372.jpg', 'Nghề ngồi uống nước', '23', '147', 3, 1.00, '12');
INSERT INTO `mathang` VALUES ('NC004', 'MH09', 'Nghế ngồi', 'ban-an.jpg', 'bàn ăn cơm', '23', '147', 3, 1.00, '12');
INSERT INTO `mathang` VALUES ('NC004', 'MH10', 'Nghế ngồi', 'b6338b724477abd3f891297b39669327.jpg', 'bàn nghế phòng khách', '23', '147', 3, 1.00, '12');
INSERT INTO `mathang` VALUES ('NC004', 'MH11', 'Nghế ngồi', 'b6338b724477abd3f891297b39669327.jpg', 'bàn nghế phòng khách', '23', '147', 3, 1.00, '12');
INSERT INTO `mathang` VALUES ('NC004', 'MH12', 'Nghế ngồi', '659909552579946.jpg', 'bàn nghế phòng khách', '23', '147', 3, 1.00, '12');
INSERT INTO `mathang` VALUES ('NC004', 'MH13', 'Nghế ngồi', '659909552579946.jpg', 'bàn nghế phòng khách', '23', '147', 3, 1.00, '12');
INSERT INTO `mathang` VALUES ('NC004', 'MH14', 'Nghế ngồi', 'giuongngu.jpg', 'bàn nghế phòng khách', '23', '147', 3, 1.00, '12');

-- --------------------------------------------------------

-- 
-- Table structure for table `members`
-- 

CREATE TABLE `members` (
  `id` int(11) NOT NULL auto_increment,
  `level` int(2) default NULL,
  `HoTen` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(32) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `TP` varchar(255) NOT NULL,
  `QuocGia` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `repassword` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `members`
-- 

INSERT INTO `members` VALUES (13, 1, 'Nhung', 'nhungthoi@gmail.com', '09808', 'Đại mỗ', '', 'HN', '', 'nhungham', '');
INSERT INTO `members` VALUES (11, 1, 'Thuc', 'dac_thuc@yahoo.com', '091923', 'qa', '', 'admin', '', '123', '');
INSERT INTO `members` VALUES (7, 2, 'Thuc', 'thuclfc@gmail.com', '01642546737', 'Từ sơn bắc ninh', '', 'admin', '', 'lfc', '');
INSERT INTO `members` VALUES (14, NULL, 'Nhung Hâm', 'nhungham@gmail.com', '01696256892', 'Đại Mỗ', '', 'admin', '', 'nhung', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `nhacungcap`
-- 

CREATE TABLE `nhacungcap` (
  `MaNCC` varchar(10) NOT NULL,
  `TenNCC` varchar(50) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `DienThoai` varchar(15) NOT NULL,
  `Fax` varchar(15) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `GhiChu` varchar(255) NOT NULL,
  PRIMARY KEY  (`MaNCC`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `nhacungcap`
-- 

INSERT INTO `nhacungcap` VALUES ('NCC01', 'La Xuyên', 'Ba Vì - Hà Nội', '089398403', '0934094039', 'laxuyen@gmail.com', '');
INSERT INTO `nhacungcap` VALUES ('NCC02', 'Vạn Thắng', '305 Tôn Đức Thắng - Hà Nội', '0974838749', '01928430', 'vanthang@gmail.com', '');
INSERT INTO `nhacungcap` VALUES ('NCC03', 'Nghi Nga', '184 Tây Sơn - Hà Nội', '0124893895', '090390556', 'nghinga@gmail.com', '');
INSERT INTO `nhacungcap` VALUES ('NCC04', 'Vạn Bảo', '312 Đê La Thành - Hà Nội', '0912928392', '018918291', 'vanbao@gmail.com', '');
INSERT INTO `nhacungcap` VALUES ('NCC05', 'Thu Thoan', '109 C21 Thanh Xuân - Hà Nội', '0920834089403', '10920194', 'thuthoan@gmail.com', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `nhanvien`
-- 

CREATE TABLE `nhanvien` (
  `MaNV` varchar(10) NOT NULL,
  `HoTen` varchar(15) NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `PassWord` varchar(15) NOT NULL,
  `DienThoai` varchar(15) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY  (`MaNV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `nhanvien`
-- 

INSERT INTO `nhanvien` VALUES ('NV01', 'Nguyễn Thị Lý', '1990-08-06 11:33:42', 'lynguyen', '12345', '093245667', 'Bắc Từ Liêm', 'lynguyen@gmail.com');
INSERT INTO `nhanvien` VALUES ('NV02', 'Văn Công Tuấn', '1989-08-15 11:35:27', 'tuanvan', '12345', '09388495049', 'Hà Nam', 'nhombaotri@gmail.com');
INSERT INTO `nhanvien` VALUES ('NV03', 'Lê Thao Giang', '1989-08-11 11:37:05', 'thaogiang', '12345', '075894854', 'Hòa Bình', 'thaogiang93@gmail.com');
INSERT INTO `nhanvien` VALUES ('NV04', 'Trần Trà My', '1994-08-07 11:38:04', 'tramy', '12345', '093894834', 'Ninh Bình', 'tramy@gmail.com');
INSERT INTO `nhanvien` VALUES ('NV05', 'Trần Đức Bình', '1990-08-24 11:38:50', 'ducbinh', '12345', '012395049', 'Hải Phòng', 'ducbinh@gmail.com');
INSERT INTO `nhanvien` VALUES ('NV06', 'Lương Mạnh Hải', '1992-08-19 11:40:03', 'haimanh', '12345', '08738898493', 'Phú Thọ', 'haimanh@gmail.com');

SET FOREIGN_KEY_CHECKS=1;

COMMIT;
