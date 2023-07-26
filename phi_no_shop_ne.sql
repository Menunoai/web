-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 26, 2023 lúc 05:39 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phi_no_shop_ne`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh`
--

CREATE TABLE `anh` (
  `idanh` int(10) NOT NULL,
  `tenanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `anh`
--

INSERT INTO `anh` (`idanh`, `tenanh`) VALUES
(2, 'ảnh áo sơ mi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhchitiet`
--

CREATE TABLE `anhchitiet` (
  `idanhchitiet` int(11) NOT NULL,
  `idanh` int(11) NOT NULL,
  `tenanhchitiet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `idchitietsp` int(10) NOT NULL,
  `idmotasp` int(10) NOT NULL,
  `idmausac` int(10) NOT NULL,
  `idsize` int(10) NOT NULL,
  `soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`idchitietsp`, `idmotasp`, `idmausac`, `idsize`, `soluong`) VALUES
(1, 2, 1, 1, 10),
(2, 2, 3, 2, 5),
(3, 2, 3, 3, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddanhmuc` int(10) NOT NULL,
  `idmenu` int(10) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`iddanhmuc`, `idmenu`, `tendanhmuc`) VALUES
(1, 6, 'Đầm'),
(2, 6, 'Chân váy'),
(3, 6, 'Quần'),
(4, 6, 'Áo'),
(5, 5, 'Quần'),
(6, 5, 'Áo'),
(7, 4, 'Bé trai'),
(8, 4, 'Bé gái');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `iddonhang` int(10) NOT NULL,
  `idchitietsp` int(10) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `idtaikhoan` int(11) NOT NULL,
  `solanmuahang` int(11) NOT NULL DEFAULT 0,
  `sale` int(11) NOT NULL DEFAULT 0,
  `tongcong` int(11) NOT NULL,
  `tenmotasp` varchar(255) NOT NULL,
  `tuychon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `idloaisanpham` int(10) NOT NULL,
  `iddanhmuc` int(10) NOT NULL,
  `tenloaisanpham` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`idloaisanpham`, `iddanhmuc`, `tenloaisanpham`) VALUES
(1, 4, 'Áo sơ mi'),
(2, 4, 'Áo thun'),
(3, 3, 'Quần jeans'),
(4, 3, 'Quần dài'),
(5, 3, 'Quần lửng'),
(6, 3, 'Jumpsuit'),
(7, 2, 'Chân váy'),
(8, 2, 'Chân váy xếp ly'),
(9, 2, 'Chân váy xếp chữ A'),
(10, 1, 'Đầm'),
(11, 1, 'Đầm maxi/voan'),
(12, 1, 'Đầm thun'),
(13, 5, 'Quần jeans'),
(14, 5, 'Quần lửng/short'),
(15, 5, 'Quần dài'),
(16, 5, 'Quần khaki'),
(17, 5, 'Quần tây'),
(18, 6, 'Áo thun'),
(19, 6, 'Áo khoác'),
(20, 6, 'Áo polo'),
(21, 6, 'Áo sơ mi'),
(22, 6, 'Áo phao'),
(23, 6, 'Áo vest');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `idmausac` int(11) NOT NULL,
  `tenmausac` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`idmausac`, `tenmausac`) VALUES
(1, 'Đỏ'),
(2, 'Vàng'),
(3, 'Cam'),
(4, 'Lục'),
(5, 'Lam'),
(6, 'Tràm'),
(7, 'Tím');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(10) NOT NULL,
  `tenmenu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`idmenu`, `tenmenu`) VALUES
(1, 'Về chúng tôi'),
(2, 'Lifestyle'),
(3, 'Bộ sưu tập'),
(4, 'Trẻ em'),
(5, 'Nam'),
(6, 'Nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `motasp`
--

CREATE TABLE `motasp` (
  `idmotasp` int(10) NOT NULL,
  `idloaisanpham` int(10) NOT NULL,
  `tenmotasp` varchar(255) NOT NULL,
  `idanh` int(10) NOT NULL,
  `gia` int(11) NOT NULL,
  `luotxem` int(11) DEFAULT 0,
  `ghichu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `motasp`
--

INSERT INTO `motasp` (`idmotasp`, `idloaisanpham`, `tenmotasp`, `idanh`, `gia`, `luotxem`, `ghichu`) VALUES
(2, 1, 'Áo sơ mi', 2, 123456, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sale`
--

CREATE TABLE `sale` (
  `idsale` int(11) NOT NULL,
  `giasale` int(3) NOT NULL,
  `tensale` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sale`
--

INSERT INTO `sale` (`idsale`, `giasale`, `tensale`) VALUES
(1, 0, '0'),
(2, 30, 'sale 30%'),
(3, 50, 'sale 50%'),
(4, 70, 'sale 70%');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `idsize` int(10) NOT NULL,
  `tensize` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`idsize`, `tensize`) VALUES
(1, 'XXXL'),
(2, 'XXL'),
(3, 'XL'),
(4, 'L'),
(5, 'M'),
(6, 'S');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idtaikhoan` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vaitro` tinyint(1) NOT NULL DEFAULT 0,
  `hoten` varchar(50) DEFAULT NULL,
  `diachi` text DEFAULT NULL,
  `sdt` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`idtaikhoan`, `username`, `password`, `vaitro`, `hoten`, `diachi`, `sdt`) VALUES
(1, 'admin', 'admin123', 1, 'Admin', 'TX - LT - PT', '0962653118'),
(2, 'phi', 'phi', 0, '', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`idanh`);

--
-- Chỉ mục cho bảng `anhchitiet`
--
ALTER TABLE `anhchitiet`
  ADD PRIMARY KEY (`idanhchitiet`),
  ADD KEY `idanhmota` (`idanh`);

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`idchitietsp`),
  ADD KEY `idmotasp` (`idmotasp`),
  ADD KEY `idmausac` (`idmausac`),
  ADD KEY `idsize` (`idsize`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddanhmuc`),
  ADD KEY `idmenu` (`idmenu`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`iddonhang`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`idloaisanpham`),
  ADD KEY `iddanhmuc` (`iddanhmuc`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`idmausac`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Chỉ mục cho bảng `motasp`
--
ALTER TABLE `motasp`
  ADD PRIMARY KEY (`idmotasp`),
  ADD KEY `idloaisanpham` (`idloaisanpham`),
  ADD KEY `idanh` (`idanh`);

--
-- Chỉ mục cho bảng `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`idsale`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`idsize`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idtaikhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh`
--
ALTER TABLE `anh`
  MODIFY `idanh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `anhchitiet`
--
ALTER TABLE `anhchitiet`
  MODIFY `idanhchitiet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `idchitietsp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddanhmuc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `iddonhang` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `idloaisanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `idmausac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `motasp`
--
ALTER TABLE `motasp`
  MODIFY `idmotasp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sale`
--
ALTER TABLE `sale`
  MODIFY `idsale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `idsize` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idtaikhoan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anhchitiet`
--
ALTER TABLE `anhchitiet`
  ADD CONSTRAINT `anhchitiet_ibfk_1` FOREIGN KEY (`idanh`) REFERENCES `anh` (`idanh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD CONSTRAINT `chitietsp_ibfk_1` FOREIGN KEY (`idmotasp`) REFERENCES `motasp` (`idmotasp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietsp_ibfk_2` FOREIGN KEY (`idmausac`) REFERENCES `mausac` (`idmausac`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietsp_ibfk_3` FOREIGN KEY (`idsize`) REFERENCES `size` (`idsize`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD CONSTRAINT `danhmuc_ibfk_1` FOREIGN KEY (`idmenu`) REFERENCES `menu` (`idmenu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD CONSTRAINT `loaisanpham_ibfk_1` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`iddanhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `motasp`
--
ALTER TABLE `motasp`
  ADD CONSTRAINT `motasp_ibfk_1` FOREIGN KEY (`idloaisanpham`) REFERENCES `loaisanpham` (`idloaisanpham`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `motasp_ibfk_2` FOREIGN KEY (`idanh`) REFERENCES `anh` (`idanh`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
