-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 15, 2023 lúc 05:24 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `jms2`
--
CREATE DATABASE IF NOT EXISTS `jms2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jms2`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `journals`
--

CREATE TABLE `journals` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `editor` varchar(100) NOT NULL,
  `issn` varchar(9) NOT NULL,
  `publicationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `journals`
--

INSERT INTO `journals` (`id`, `title`, `editor`, `issn`, `publicationdate`) VALUES
(1, 'Car', 'Thanh Thảo', '2049-363', '2023-05-03'),
(2, 'Computer', 'Minh Hiếu', '2051-063', '2023-06-28'),
(3, 'English Education', 'Duy Hưng', '5719-994', '2023-02-14'),
(4, 'Information Technology', 'KTZ', '1254-785', '2023-06-04');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
