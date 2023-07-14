-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 15, 2023 lúc 05:26 AM
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
-- Cơ sở dữ liệu: `jms`
--
CREATE DATABASE IF NOT EXISTS `jms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jms`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `journals`
--

CREATE TABLE `journals` (
  `jid` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `editor` varchar(255) NOT NULL,
  `issn` varchar(9) NOT NULL,
  `publicationDate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `journals`
--

INSERT INTO `journals` (`jid`, `title`, `editor`, `issn`, `publicationDate`, `created_at`, `updated_at`) VALUES
(4, 'Atque enim.', 'Thao', '2805-334', '1990-08-03', '2023-06-12 11:05:49', '2023-06-12 12:25:03'),
(5, 'Magni est.', 'Dr. Nathanial O\'Hara', '2325-715', '1987-01-11', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(6, 'Sed velit veniam.', 'Gilbert Blanda', '6172-417', '1976-03-24', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(7, 'Rem et repellat.', 'Dr. Anibal Barrows', '8957-313', '1977-09-24', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(8, 'Vero sed.', 'Stacey Rath', '8767-037', '1975-02-11', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(9, 'Molestiae magni dolor.', 'Odie Fisher', '2250-301', '1980-10-15', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(10, 'Qui dicta voluptatibus.', 'Paxton Dare', '7252-222', '1979-08-31', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(11, 'Sit sed facere.', 'Alek Nicolas', '9591-950', '1976-08-28', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(12, 'Placeat cumque tenetur.', 'Jordane Windler DVM', '6056-015', '1994-05-16', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(13, 'Quis at.', 'Minnie Champlin', '1665-853', '1992-07-21', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(14, 'Nostrum iure placeat.', 'Fabiola Blanda', '8466-811', '1980-10-09', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(15, 'Aut dicta.', 'Kelton Carroll V', '0081-833', '1996-05-20', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(16, 'Nihil minima officia.', 'Broderick Brakus', '9332-496', '2014-12-16', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(17, 'Est non.', 'Nannie Mayert', '7959-365', '1985-01-13', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(18, 'Tempore dolor.', 'Dr. Nickolas Gusikowski', '8327-273', '1999-12-21', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(19, 'Et excepturi.', 'Golda Kulas', '6941-427', '2018-03-07', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(20, 'Facilis voluptatem.', 'Dr. Sienna Gottlieb', '9739-211', '2004-01-18', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(21, 'Aut autem placeat.', 'Margaretta Bode', '1306-333', '1996-01-31', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(22, 'Aut voluptatem.', 'Savion Zboncak', '1289-113', '1973-09-05', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(23, 'Et consequatur.', 'Ms. Noemi Quitzon Jr.', '9178-590', '1995-10-11', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(24, 'Libero illo sunt.', 'Dr. Genesis Deckow', '1375-518', '1970-03-14', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(25, 'Sequi est.', 'Jorge Pouros', '4889-135', '1976-03-17', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(26, 'Et harum.', 'Joshua Brown', '8442-051', '1991-08-20', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(27, 'Sed libero.', 'Prof. Nicklaus Schiller', '3095-036', '2008-12-12', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(28, 'Assumenda fugiat.', 'Clemmie Aufderhar', '6774-201', '2007-07-19', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(29, 'Odit minima.', 'Prof. Garnet Dibbert I', '8501-072', '2018-10-10', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(30, 'Sed inventore.', 'Brayan Kirlin', '7318-127', '2020-10-24', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(31, 'Quasi tempora voluptates.', 'Cordia Dibbert', '5681-723', '1976-03-30', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(32, 'Voluptas ad.', 'Prof. Raven Jast', '0366-987', '1979-12-13', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(33, 'Necessitatibus culpa quo.', 'Timothy Wiegand', '2022-568', '1990-11-29', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(34, 'Sunt ipsa sit.', 'Addison Johns II', '9534-937', '2013-02-17', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(35, 'Suscipit quo dolores.', 'Miss Amalia Oberbrunner', '4844-359', '2023-04-20', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(36, 'Id sit.', 'Francesco Rolfson V', '5516-501', '1973-08-23', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(37, 'Incidunt error eius.', 'Miss Alyce Labadie', '4251-206', '1978-05-23', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(38, 'Molestiae qui.', 'Drake Haag', '0261-715', '1984-08-18', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(39, 'Nihil adipisci.', 'Michale Botsford', '9426-140', '1973-11-11', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(40, 'Nesciunt quidem aliquid.', 'Ms. Bridgette Ferry', '6257-467', '2007-10-23', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(41, 'Id error odio.', 'Prof. Jasper Altenwerth I', '1223-394', '2007-12-14', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(42, 'Asperiores fugiat.', 'Mr. Bo Orn', '8933-251', '2014-02-06', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(43, 'Accusantium non.', 'Kirstin Dach', '5329-811', '1980-08-08', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(44, 'Rerum quia.', 'Mrs. Geraldine Simonis', '7098-847', '1991-04-15', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(45, 'Reiciendis harum.', 'Dr. Bailee Rice', '6187-453', '1983-08-22', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(46, 'Doloribus iste facere.', 'Roman Will', '4123-099', '1992-09-19', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(47, 'Cum temporibus.', 'Noemy Lockman', '0465-987', '2013-03-22', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(48, 'Quis qui.', 'Leif Stark', '0256-719', '2013-04-20', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(49, 'Id nemo ut.', 'Stewart Koch', '6830-627', '1989-03-04', '2023-06-12 11:05:49', '2023-06-12 11:05:49'),
(50, 'Explicabo qui.', 'Carole Maggio', '3678-939', '1985-03-08', '2023-06-12 11:05:49', '2023-06-12 11:05:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_12_164417_create_journals_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`jid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `journals`
--
ALTER TABLE `journals`
  MODIFY `jid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
