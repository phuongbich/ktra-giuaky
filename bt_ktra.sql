-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 25, 2021 lúc 05:30 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bt_ktra`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_word` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `user_name`, `email`, `pass_word`) VALUES
(105, 'nguyễn xuân lan', 'lanxn', 'lanxn@gmail.com', '123'),
(114, 'nguyễn bích phương', 'phuongnb', 'phuongnb@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_can_bo`
--

CREATE TABLE `tbl_can_bo` (
  `id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_don_vi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_can_bo`
--

INSERT INTO `tbl_can_bo` (`id`, `name`, `email`, `phone_number`, `address`, `id_don_vi`) VALUES
(1, '\r\nKiều Tuấn Dũng (TS)', 'dungkt@tlu.edu.vn', '0365875456', 'Tầng 2- C1 ĐH Thủy lợi, Hà nội', 2),
(2, '\r\nNguyễn Quỳnh Diệp (TS.)', 'diepnq@tlu.edu.vn', '0365848456', 'BM Tin học và Kỹ thuật tính toán, Khoa CNTT', 2),
(3, 'Phạm Thanh Bình (ThS.)', 'binhpt@tlu.edu.vn', ' 0365875485', 'Tầng 3- C5 ĐH Thủy lợi', 2),
(6, 'Trần Văn Hoè ( PGS.TS)', 'hoetv@tlu.edu.vn', '0904144983', 'P209 nhà A5, Đại học Thủy lợi', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donvi`
--

CREATE TABLE `tbl_donvi` (
  `id` int(10) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_donvi`
--

INSERT INTO `tbl_donvi` (`id`, `name`, `description`, `email`, `telephone`) VALUES
(0, 'KHOA KINH TẾ VÀ QUẢN LÝ', 'P209 nhà A5, Đại học Thủy lợi', 'kte@tlu.edu.vn', '021548762'),
(1, 'khoa công trình', 'Tầng 2 nhà A2 Đại học Thủy lợi', 'ctrinh@tlu.edu.vn', '0368247581'),
(2, 'khoa Công nghệ thông tin', '', 'cse@tlu.edu.vn', '0368247535');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `tbl_can_bo`
--
ALTER TABLE `tbl_can_bo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD KEY `tbl_can_bo_ibfk_1` (`id_don_vi`);

--
-- Chỉ mục cho bảng `tbl_donvi`
--
ALTER TABLE `tbl_donvi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telephone` (`telephone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT cho bảng `tbl_can_bo`
--
ALTER TABLE `tbl_can_bo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_can_bo`
--
ALTER TABLE `tbl_can_bo`
  ADD CONSTRAINT `tbl_can_bo_ibfk_1` FOREIGN KEY (`id_don_vi`) REFERENCES `tbl_donvi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
