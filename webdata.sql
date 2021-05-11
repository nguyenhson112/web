-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 11, 2021 lúc 04:21 AM
-- Phiên bản máy phục vụ: 8.0.21
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdata`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admingroup`
--

DROP TABLE IF EXISTS `admingroup`;
CREATE TABLE IF NOT EXISTS `admingroup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `group_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admingroup`
--

INSERT INTO `admingroup` (`id`, `group_name`, `group_description`, `status`, `created_at`, `update_at`) VALUES
(1, 'nhom 1', 'nhom 1', 1, '2021-01-14 17:00:00', NULL),
(2, 'nhom 2', 'nhom 2', 1, '2021-01-14 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_code` int DEFAULT NULL,
  `product_code` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `price` double DEFAULT NULL,
  `sale_off` double DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_code`, `product_code`, `quantity`, `price`, `sale_off`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 7990000, 0, 1, '2021-05-06 05:09:40', '2021-05-06 05:09:40'),
(2, 2, 1, 1, 12490000, 0, 1, '2021-05-06 05:11:15', '2021-05-06 05:11:15'),
(3, 2, 3, 1, 9290000, 0, 1, '2021-05-06 05:11:15', '2021-05-06 05:11:15'),
(4, 3, 2, 1, 7990000, 0, 1, '2021-05-06 06:05:41', '2021-05-06 06:05:41'),
(5, 3, 3, 1, 9290000, 0, 1, '2021-05-06 06:05:41', '2021-05-06 06:05:41'),
(6, 4, 3, 1, 9290000, 0, 1, '2021-05-06 06:07:57', '2021-05-06 06:07:57'),
(7, 5, 1, 1, 12490000, 0, 1, '2021-05-06 06:16:08', '2021-05-06 06:16:08'),
(8, 6, 2, 1, 7990000, 0, 1, '2021-05-06 07:10:19', '2021-05-06 07:10:19'),
(9, 6, 7, 1, 6690000, 0, 1, '2021-05-06 07:10:19', '2021-05-06 07:10:19'),
(10, 6, 8, 1, 9990000, 0, 1, '2021-05-06 07:10:19', '2021-05-06 07:10:19'),
(11, 6, 10, 1, 6590000, 0, 1, '2021-05-06 07:10:19', '2021-05-06 07:10:19'),
(12, 7, 7, 1, 6690000, 0, 1, '2021-05-06 07:17:58', '2021-05-06 07:17:58'),
(13, 7, 3, 1, 9290000, 0, 1, '2021-05-06 07:17:58', '2021-05-06 07:17:58'),
(14, 8, 1, 1, 12490000, 0, 1, '2021-05-06 19:52:16', '2021-05-06 19:52:16'),
(15, 9, 3, 1, 9290000, 0, 1, '2021-05-06 19:56:27', '2021-05-06 19:56:27'),
(16, 10, 3, 1, 9290000, 0, 1, '2021-05-06 20:04:09', '2021-05-06 20:04:09'),
(17, 11, 3, 1, 9290000, 0, 1, '2021-05-06 20:15:21', '2021-05-06 20:15:21'),
(18, 12, 4, 1, 7999000, 0, 1, '2021-05-07 22:44:02', '2021-05-07 22:44:02'),
(19, 13, 4, 1, 7999000, 0, 1, '2021-05-07 22:47:56', '2021-05-07 22:47:56'),
(20, 14, 4, 1, 7999000, 0, 1, '2021-05-07 22:48:43', '2021-05-07 22:48:43'),
(21, 15, 4, 2, 7999000, 0, 1, '2021-05-07 22:59:27', '2021-05-07 22:59:27'),
(22, 16, 2, 2, 7990000, 0, 1, '2021-05-07 23:06:56', '2021-05-07 23:06:56'),
(23, 16, 3, 1, 9290000, 0, 1, '2021-05-07 23:06:56', '2021-05-07 23:06:56'),
(24, 17, 4, 1, 7999000, 0, 1, '2021-05-07 23:14:11', '2021-05-07 23:14:11'),
(25, 18, 3, 1, 9290000, 0, 1, '2021-05-07 23:15:11', '2021-05-07 23:15:11'),
(26, 19, 3, 2, 9290000, 0, 1, '2021-05-07 23:46:45', '2021-05-07 23:46:45'),
(27, 20, 3, 1, 9290000, 0, 1, '2021-05-08 00:28:11', '2021-05-08 00:28:11'),
(28, 20, 4, 1, 7999000, 0, 1, '2021-05-08 00:28:11', '2021-05-08 00:28:11'),
(29, 21, 2, 1, 7990000, 0, 1, '2021-05-09 06:09:16', '2021-05-09 06:09:16'),
(30, 22, 3, 2, 9290000, 0, 1, '2021-05-09 06:09:57', '2021-05-09 06:09:57'),
(31, 23, 3, 1, 9290000, 0, 1, '2021-05-09 06:11:10', '2021-05-09 06:11:10'),
(32, 24, 2, 1, 7990000, 0, 1, '2021-05-09 18:47:25', '2021-05-09 18:47:25'),
(33, 25, 3, 1, 9290000, 0, 1, '2021-05-09 18:49:51', '2021-05-09 18:49:51'),
(34, 26, 3, 1, 9290000, 0, 1, '2021-05-09 18:55:59', '2021-05-09 18:55:59'),
(35, 27, 2, 1, 7990000, 0, 1, '2021-05-09 19:06:22', '2021-05-09 19:06:22'),
(36, 27, 44, 1, 30000000, 0, 1, '2021-05-09 19:06:22', '2021-05-09 19:06:22'),
(37, 28, 3, 1, 9290000, 0, 1, '2021-05-09 19:11:47', '2021-05-09 19:11:47'),
(38, 28, 44, 1, 30000000, 0, 1, '2021-05-09 19:11:47', '2021-05-09 19:11:47'),
(39, 28, 7, 1, 6690000, 0, 1, '2021-05-09 19:11:47', '2021-05-09 19:11:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `setday` timestamp NULL DEFAULT NULL,
  `order_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `feeshipping` double DEFAULT NULL,
  `order_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receiver_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receiver_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receiver_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receiver_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `setday`, `order_number`, `subtotal`, `feeshipping`, `order_status`, `status`, `created_at`, `updated_at`, `name`, `phone`, `email`, `address`, `receiver_name`, `receiver_phone`, `receiver_email`, `receiver_address`, `note`) VALUES
(1, NULL, '2021-05-06 05:09:40', '1620302980', 7990000, 0, '1', 1, '2021-05-06 05:09:40', '2021-05-06 05:09:40', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(2, NULL, '2021-05-06 05:11:15', '1620303075', 21780000, 0, '1', 1, '2021-05-06 05:11:15', '2021-05-06 05:11:15', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(3, 55, '2021-05-06 06:05:41', '1620306341', 17280000, 0, '1', 1, '2021-05-06 06:05:41', '2021-05-06 06:05:41', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(4, 55, '2021-05-06 06:07:57', '1620306477', 9290000, 0, '1', 1, '2021-05-06 06:07:57', '2021-05-06 06:07:57', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(5, 55, '2021-05-06 06:16:08', '1620306968', 12490000, 0, '1', 1, '2021-05-06 06:16:08', '2021-05-06 06:16:08', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(6, 55, '2021-05-06 07:10:19', '1620310219', 31260000, 0, '1', 1, '2021-05-06 07:10:19', '2021-05-06 07:10:19', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(7, 51, '2021-05-06 07:17:58', '1620310678', 15980000, 0, '1', 1, '2021-05-06 07:17:58', '2021-05-06 07:17:58', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(8, 55, '2021-05-06 19:52:16', '1620355936', 12490000, 0, '1', 1, '2021-05-06 19:52:16', '2021-05-06 19:52:16', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(9, 55, '2021-05-06 19:56:27', '1620356187', 9290000, 0, '1', 1, '2021-05-06 19:56:27', '2021-05-06 19:56:27', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(10, 55, '2021-05-06 20:04:09', '1620356649', 9290000, 0, '1', 1, '2021-05-06 20:04:09', '2021-05-06 20:04:09', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(11, 55, '2021-05-06 20:15:21', '1620357321', 9290000, 0, '1', 1, '2021-05-06 20:15:21', '2021-05-06 20:15:21', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(12, 55, '2021-05-07 22:44:02', '1620452642', 7999000, 0, '1', 1, '2021-05-07 22:44:02', '2021-05-07 22:44:02', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(13, 55, '2021-05-07 22:47:56', '1620452876', 7999000, 0, '1', 1, '2021-05-07 22:47:56', '2021-05-07 22:47:56', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(14, 55, '2021-05-07 22:48:43', '1620452923', 7999000, 0, '1', 1, '2021-05-07 22:48:43', '2021-05-07 22:48:43', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(15, 55, '2021-05-07 22:59:27', '1620453567', 15998000, 0, '1', 1, '2021-05-07 22:59:27', '2021-05-07 22:59:27', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(16, 55, '2021-05-07 23:06:56', '1620454016', 25270000, 0, '1', 1, '2021-05-07 23:06:56', '2021-05-07 23:06:56', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(17, 55, '2021-05-07 23:14:11', '1620454451', 7999000, 0, '1', 1, '2021-05-07 23:14:11', '2021-05-07 23:14:11', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(18, 55, '2021-05-07 23:15:11', '1620454511', 9290000, 0, '1', 1, '2021-05-07 23:15:11', '2021-05-07 23:15:11', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(19, 55, '2021-05-07 23:46:45', '1620456405', 18580000, 0, '1', 1, '2021-05-07 23:46:45', '2021-05-07 23:46:45', 'Nguyen Son', '0981328496', NULL, NULL, 'Nguyen Son', '0981328496', NULL, NULL, NULL),
(20, 55, '2021-05-08 00:28:11', '1620458891', 17289000, 0, '1', 1, '2021-05-08 00:28:11', '2021-05-08 00:28:11', 'Nguyễn Sơn', '0981328496', NULL, '123', 'Tran Tan', '766546', NULL, '456', 'Nhanh'),
(21, 55, '2021-05-09 06:09:16', '1620565756', 7990000, 0, '1', 1, '2021-05-09 06:09:16', '2021-05-09 06:09:16', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(22, 55, '2021-05-09 06:09:57', '1620565797', 18580000, 0, '1', 1, '2021-05-09 06:09:57', '2021-05-09 06:09:57', 'Tran Tan', '123456789', NULL, 'abc', 'Tran Tan', '123456789', NULL, 'abc', 'Nhanh'),
(23, 55, '2021-05-09 06:11:10', '1620565870', 9290000, 0, '1', 1, '2021-05-09 06:11:10', '2021-05-09 06:11:10', 'Nguyễn Sơn', '0981328496', NULL, '123456789', 'Nguyễn Sơn', '0981328496', NULL, 'qwertyu', 'Nhanh nha'),
(24, 48, '2021-05-09 18:47:25', '1620611245', 7990000, 0, '1', 1, '2021-05-09 18:47:25', '2021-05-09 18:47:25', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(25, 48, '2021-05-09 18:49:51', '1620611391', 9290000, 0, '1', 1, '2021-05-09 18:49:51', '2021-05-09 18:49:51', ' ', NULL, NULL, NULL, ' ', NULL, NULL, NULL, NULL),
(26, 48, '2021-05-09 18:55:59', '1620611759', 9290000, 0, '1', 1, '2021-05-09 18:55:59', '2021-05-09 18:55:59', 's Son', '0981328496', 'vipxiteen2014@gmail.com', 'asdasd', 's Son', '0981328496', 'vipxiteen2014@gmail.com', 'asdasd', 'asdsad'),
(27, 48, '2021-05-09 19:06:22', '1620612382', 37990000, 0, '1', 1, '2021-05-09 19:06:22', '2021-05-09 19:06:22', 'Nguyễn Hồng Sơn', '0981328496', 'nguyenhson112@gmail.com', '123', 'Nguyễn Hồng Sơn', '0981328496', 'nguyenhson112@gmail.com', '123', 'Nhanh dùm tôi'),
(28, 48, '2021-05-09 19:11:47', '1620612707', 45980000, 0, '1', 1, '2021-05-09 19:11:47', '2021-05-09 19:11:47', 'Nguyễn Sơn', '0981328496', 'vipxiteen2014@gmail.com', '123', 'Nguyễn Sơn', '0981328496', 'vipxiteen2014@gmail.com', '123', 'Nhanh nha');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `product_description` text COLLATE utf8_unicode_ci,
  `product_avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_content` text COLLATE utf8_unicode_ci,
  `product_type` int DEFAULT NULL,
  `product_supplier` int DEFAULT NULL,
  `status` int DEFAULT '1',
  `quantity` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_description`, `product_avatar`, `product_content`, `product_type`, `product_supplier`, `status`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Samsung Galaxy A9 2018', 12490000, 'Samsung Galaxy A9 2018 là mẫu smartphone đầu tiên trên thế giới có tới 4 camera chính. Với hệ thống camera thông minh, máy có khả năng chụp ảnh hết sức chuyên nghiệp.', 'upload/1620698748.jpg', 'Màn hình :1080 x 2220 Pixels 6.3 inches\r\nCamera :24 MP, 10 MP, 8 MP và 5 MP (4 camera) 24.0 MP\r\nPin :3800 mAh\r\nRAM :6 GB\r\nCPU :Qualcomm Snapdragon 660 8 nhân\r\nHĐH:Android 8 (Oreo)', 1, 1, 1, 10, NULL, '2021-05-10 19:07:30'),
(2, 'Nokia 8.1', 7990000, 'Nâng tầm nhiếp ảnh ở cả camera trước và sau; hệ điều hành Android 9 Pie mới nhất cùng hiệu năng mạnh mẽ, Nokia 8.1 đáp ứng mọi sự kỳ vọng của người dùng.', 'upload/1620701409.jpg', 'Màn hình :	6.18 inches, 1080 x 2280 Pixels\r\nCamera trước :	20.0 MP\r\nCamera sau :	12.0 MP + 13.0 MP\r\nRAM :	4 GB\r\nBộ nhớ trong :	64 GB\r\nCPU :	Qualcomm Snapdragon 710, 8, 2 x 2.2 GHz & 6x 1.7 GHz\r\nGPU :	Adreno 616\r\nDung lượng pin :	3500 mAh\r\nHệ điều hành :	Android 9\r\nThẻ SIM :	2 SIM Nano (SIM 2 chung khe thẻ nhớ), 2 Sim', 1, 2, 1, 9, NULL, '2021-05-10 19:50:09'),
(3, 'Samsung Galaxy A70', 9290000, 'Chiếc điện thoại dành cho những điều lớn: màn hình lớn, viên pin dung lượng cao; 3 camera độ phân giải “siêu khủng”, Samsung A70 mở ra kỷ nguyên mới cho riêng bạn.', 'upload/1620705229.jpg', 'Màn hình :	6.7 inchs, 1080 x 2340 Pixels\r\nCamera trước :	32.0Mp\r\nCamera sau :	Chính 32 MP & Phụ 8 MP, 5 MP\r\nRAM :	6 GB\r\nBộ nhớ trong :	128 GB\r\nCPU :	Snapdragon 675 8 nhân 64-bit, 8, 2 nhân 2.0 Ghz & 6 nhân 1.7 Ghz\r\nGPU :	Adreno 612\r\nDung lượng pin :	4,500mAh\r\nHệ điều hành :	Android 9.0 (Pie)\r\nThẻ SIM :	Nano SIM, 2 Sim', 1, 1, 1, 7, NULL, '2021-05-10 20:53:49'),
(4, 'Xiaomi Pocophone F1', 7999000, '\"Ông vua tốc độ\" Pocophone F1 đã xuất hiện, bạn sẽ được tận hưởng tốc độ nhanh nhất, hiệu năng xử lý tuyệt vời nhất trong một mức giá khó tin.', 'upload/1620705163.jpg', 'Màn hình :	6.18 inches, 1080 x 2280 Pixels\r\nCamera trước :	20.0 MP\r\nCamera sau :	Camera kép 12MP+5MP\r\nRAM :	6 GB\r\nBộ nhớ trong :	64 GB\r\nCPU :	Snapdragon 845, 8, 2.8 GHz\r\nGPU :	Adreno 630\r\nDung lượng pin :	4000 mAh\r\nHệ điều hành :	Android 8\r\nThẻ SIM :	Nano SIM, 2 Sim', 1, 3, 1, 9, NULL, '2021-05-10 20:52:43'),
(5, 'Xiaomi Mi 8 Lite 128GB', 7490000, 'Xiaomi Mi 8 Lite 128GB có không gian lưu trữ cực lớn, thiết kế sang trọng và cấu hình vượt trội, luôn sẵn sàng cho mọi hoạt động của bạn.', 'upload/1620705183.jpg', 'Màn hình :	6.22 inches, 1080 x 2040 Pixel\r\nCamera trước :	24.0 MP\r\nCamera sau :	12.0 MP + 5.0 MP\r\nRAM :	6 GB\r\nBộ nhớ trong :	128 GB\r\nCPU :	SnapDragon 660, Octa-Core, 4x2.2 GHz Kryo 260 & 4x1.8 GHz Kryo 260\r\nGPU :	Adreno 512\r\nDung lượng pin :	3300mah\r\nHệ điều hành :	Android 8.1 Oreo (phiên bản Go)\r\nThẻ SIM :	Nano SIM, 2 Sim', 1, 3, 1, 2, NULL, '2021-05-10 20:53:03'),
(6, 'Samsung Galaxy A7 2018 - 128GB', 6490000, 'Với 3 camera sau, Samsung Galaxy A7 2018 128GB cho bạn thỏa sức sáng tạo trong nhiếp ảnh. Hơn nữa, Galaxy A7 còn phù hợp với giới trẻ bởi thiết kế phong cách và hiệu năng mạnh mẽ.', 'upload/1620705213.jpg', 'Màn hình :	6.0 inchs, 1080 x 2220 Pixels\r\nCamera trước :	24.0 MP\r\nCamera sau :	24 MP+8 MP+5 MP (3 camera)\r\nRAM :	6 GB\r\nBộ nhớ trong :	128 GB\r\nCPU :	Exynos 7885 8 nhân 64-bit, 8, 2 nhân 2.2 GHz Cortex-A73 & 6 nhân 1.6 GHz Cortex-A53\r\nGPU :	Mali™ G71\r\nDung lượng pin :	3300 mAh\r\nHệ điều hành :	Android 8 (Oreo)\r\nThẻ SIM :	Nano SIM, 2 Sim', 1, 1, 1, 2, NULL, '2021-05-10 20:53:33'),
(7, 'Xiaomi Mi 8 Lite 64GB', 6690000, 'Một siêu phẩm với thiết kế nổi bật, camera xuất sắc và cấu hình vô cùng mạnh mẽ, Xiaomi Mi 8 Lite là chiếc điện thoại mang trên mình tất cả những gì bạn cần.', 'upload/1620705275.jpg', 'Màn hình :	6.22 inches, 1080 x 2040 Pixel\r\nCamera trước :	24.0 MP\r\nCamera sau :	12.0 MP + 5.0 MP\r\nRAM :	4 GB\r\nBộ nhớ trong :	64 GB\r\nCPU :	SnapDragon 660, Octa-Core, 4x2.2 GHz Kryo 260 & 4x1.8 GHz Kryo 260\r\nGPU :	Adreno 512\r\nDung lượng pin :	3300mah\r\nHệ điều hành :	Android 8.1 Oreo (phiên bản Go)\r\nThẻ SIM :	Nano SIM, 2 Sim', 2, 3, 1, 4, NULL, '2021-05-10 20:54:35'),
(8, 'Honor 10', 9990000, 'Honor 10, chiếc smartphone sở hữu thiết kế bóng bẩy cuốn hút đi kèm cấu hình mạnh mẽ xuất sắc và khả năng chụp ảnh ưu việt.', 'upload/1620705294.jpg', 'Màn hình :	5.84\", 1080 x 2280 pixels\r\nCamera trước :	24 MP\r\nCamera sau :	24 MP và 16 MP\r\nRAM :	4 GB\r\nBộ nhớ trong :	128 GB\r\nCPU :	Hisilicon Kirin 970 , 8 nhân, 4 nhân 2.4 GHz Cortex-A73 & 4 nhân 1.8 GHz Cortex-A53\r\nGPU :	Mali-G72 MP12\r\nDung lượng pin :	3400 mAh\r\nHệ điều hành :	Android 8.1 (Oreo)\r\nThẻ SIM :	Nano SIM, 2 Sim, hỗ trợ 4G', 2, 4, 1, 3, NULL, '2021-05-10 20:54:54'),
(9, 'Honor 8X 128GB', 6990000, 'Honor 8X 128GB là chiếc điện thoại gần như hoàn hảo về mọi khía cạnh với thiết kế độc đáo, bộ nhớ trong cực lớn, màn hình viền mỏng và hiệu năng tuyệt vời.', 'upload/1620705486.jpg', 'Màn hình :	6.5 inchs, 1080 x 2340 Pixels\r\nCamera trước :	16.0 MP\r\nCamera sau :	20 MP và 2 MP (2 camera)\r\nRAM :	4 GB\r\nBộ nhớ trong :	128 GB\r\nCPU :	Hisilicon Kirin 710, 8, 4 x Cortex-A73 2.2 GHz + 4x Cortex-A53 1.7 GHz\r\nGPU :	Mali-G51 MP4\r\nDung lượng pin :	3750 mAh\r\nHệ điều hành :	Android 8.1\r\nThẻ SIM :	Nano SIM, 2 Sim', 2, 4, 1, 3, NULL, '2021-05-10 20:58:06'),
(10, 'Honor Play', 6590000, 'Một sản phẩm đỉnh cao dành riêng cho game thủ với hiệu năng siêu mạnh và những tối ưu cho chơi game, đó chính là Honor Play.', 'upload/1620705333.jpg', 'Màn hình :	6.3\", 1080 x 2340 pixels\r\nCamera trước :	16 MP\r\nCamera sau :	16 MP + 2 MP\r\nRAM :	4 GB\r\nBộ nhớ trong :	64 GB\r\nCPU :	Hisilicon Kirin 970, 8 nhân, 4 x 2.36 GHz + 4 x 1.8 GHz\r\nGPU :	Mali-G72 MP12\r\nDung lượng pin :	3750 mAh\r\nHệ điều hành :	Android 8.1 Oreo\r\nThẻ SIM :	Nano, 2 Sim, hỗ trợ 4G', 2, 4, 1, 8, NULL, '2021-05-10 20:55:33'),
(11, 'iPhone 6s Plus 32GB', 9990000, 'Apple iPhone 6s Plus là chiếc iPhone màn hình lớn nhất, cho phép người dùng làm được nhiều việc hơn trên không gian rộng lớn.', 'upload/1620705351.jpg', 'Màn hình :	1080 x 1920 pixels\r\nCamera trước :	5.0 MP\r\nCamera sau :	12.0 MP\r\nRAM :	2 GB\r\nBộ nhớ trong :	32 GB\r\nCPU :	Apple A9, 2 Nhân, 1.8 GHz\r\nGPU :	PowerVR GT7600\r\nDung lượng pin :	2750mAh\r\nThẻ SIM :	Nano Sim, 1 Sim', 2, 5, 1, 2, NULL, '2021-05-10 20:55:51'),
(12, 'Xiaomi Mi 9 SE 64GB', 8490000, 'Được thiết kế hướng tới những người dùng yêu thích dòng smartphone nhỏ gọn, Xiaomi Mi 9 SE cho phép bạn cầm nắm và mang theo bên mình một cách dễ dàng', 'upload/1620705436.jpg', 'Màn hình :	5.97 inches, 1080 x 2340 Pixels\r\nCamera trước :	20.0 MP\r\nCamera sau :	48 MP,13 MP +8 MP ( 3 camera )\r\nRAM :	6 GB\r\nBộ nhớ trong :	64 GB\r\nCPU :	Snap dragon 712, 8, 2.3Ghz\r\nGPU :	Adreno 614\r\nDung lượng pin :	3070 mAh\r\nHệ điều hành :	Android 9\r\nThẻ SIM :	Nano SIM, 2 Sim', 2, 3, 1, 5, NULL, '2021-05-10 20:57:16'),
(13, 'Asus VIVOBOOK X507UA-EJ234T/Core i3-7020U', 10590000, 'Asus Vivobook X507UA-EJ234T là sự kết hợp hoàn hảo giữa vẻ đẹp và hiệu năng, khi máy có cấu hình tốt cùng với thiết kế màn hình viền mỏng thời trang.', 'upload/1620705616.jpg', 'CPU :	Intel, Core i3\r\nRAM :	4 GB, DDR4\r\nỔ cứng :	HDD 5400rpm, HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 SATA3\r\nMàn hình :	15.6 inchs, 1920 x 1080 Pixels\r\nCard màn hình :	Intel® HD graphics, Tích hợp\r\nCổng kết nối :	LAN : Không, WIFI : 802.11 b/g/n\r\nHệ điều hành :	Windows 10 Home\r\nTrọng lượng :	1.68 Kg\r\nKích thước :	365 x 266 x 21.9 mm', 3, 6, 1, 10, NULL, '2021-05-10 21:00:16'),
(14, 'Dell Inspiron N3567S', 10990000, 'Dell Inspiron N3567S là chiếc máy tính dành cho học sinh, sinh viên và dân văn phòng. Nó có giá bán phải chăng, đi kèm với thiết kế hiện đại, chip Intel thế hệ 7 và màn hình lớn.', 'upload/1620705721.jpg', 'CPU :	Intel, Core i3\r\nRAM :	4 GB, DDR4\r\nỔ cứng :	HDD, 1 TB\r\nMàn hình :	15.6 inchs, 1366 x 768 Pixels\r\nCard màn hình :	Intel HD Graphics 620, Tích hợp\r\nCổng kết nối :	LAN : 10/100 Mbps Ethernet controller, WIFI : 802.11ac\r\nHệ điều hành :	Ubuntu\r\nTrọng lượng :	2.30 Kg\r\nKích thước :	380 x 260 x 23.65 mm', 3, 7, 1, 3, NULL, '2021-05-10 21:02:01'),
(15, 'HP 15-da0037TX/i3 7020U', 10990000, 'HP 15-da0037TX/i3 7020U là chiếc máy tính sở hữu một thiết kế đơn giản, màn hình lớn, chip xử lý Intel thế hệ thứ 7 và nhiều ưu điểm nữa bên cạnh một mức giá phải chăng.', 'upload/1620705740.jpg', 'CPU :	Intel, Core i3\r\nRAM :	4 GB, DDR4\r\nỔ cứng :	HDD, 500 GB\r\nMàn hình :	15.6 inchs, 1366 x 768 pixels\r\nCard màn hình :	NVIDIA® GeForce® MX110, Card rời\r\nCổng kết nối :	LAN : Integrated 10/100/1000 GbE LAN, WIFI : 802.11b/g/n (1x1) Wi-Fi® and Bluetooth® 4.2 combo\r\nHệ điều hành :	Windows 10 Home Single Language 64\r\nTrọng lượng :	1.77 Kg\r\nKích thước :	376 x 246 x 22.5 mm', 3, 8, 1, 8, NULL, '2021-05-10 21:02:20'),
(16, 'Asus Vivobook X407UA-BV488T/i3-7020U/4G+16GB Optane/1TB/WIN10', 10690000, 'Với công nghệ bộ nhớ Intel Optane, Asus Vivobook X407UA có tốc độ nhanh như ổ cứng SSD và bộ nhớ nhiều của ổ cứng HDD.', 'upload/1620706603.jpg', 'CPU :	Intel, Core i3\r\nRAM :	4GB + 16GB Optane, DDR4\r\nỔ cứng :	HDD 5400rpm, 1000 GB\r\nMàn hình :	14.0 inchs, 1366 x 768 Pixels\r\nCard màn hình :	Intel HD Graphics, Tích hợp\r\nCổng kết nối :	LAN : Không, WIFI : 802.11 a/b/g/n/ac\r\nHệ điều hành :	Windows 10 Home\r\nTrọng lượng :	1.55 KG\r\nKích thước :	328 x 246 x 21.9 ~22.9 mm (WxDxH)', 3, 6, 1, 8, NULL, '2021-05-10 21:16:43'),
(17, 'Dell Vostro 3568/Core i3-7020U/VTI32072W', 11890000, 'Dell Vostro 3568/Core i3-7020U là chiếc máy tính xách tay 15 inch lý tưởng dành cho người dùng văn phòng và học sinh, sinh viên. Laptop đến với màn hình lớn, bàn phím số và các tính năng bảo mật thiết yếu.', 'upload/1620706677.jpg', 'CPU :	Intel, Core i3\r\nRAM :	4 GB, DDR4\r\nỔ cứng :	HDD, 1 TB\r\nMàn hình :	15.6 inches, 1366 x 768 pixels\r\nCard màn hình :	Intel® UHD Graphics 620, Tích hợp\r\nCổng kết nối :	LAN : RJ-45- Ethernet port, WIFI : Intel 3165AC - 802.11ac and Bluetooth v4.2 combo\r\nHệ điều hành :	Windows 10 Home Single Language English\r\nTrọng lượng :	2.18 Kg\r\nKích thước :	380 x 260 x 23.65 mm', 3, 7, 1, 7, NULL, '2021-05-10 21:17:57'),
(18, 'HP Pavilion 14-ce1014TU/Core i3-8145U/4GB/500GB/WIN10', 12990000, 'Nếu bạn đang kiếm tìm một chiếc laptop có diện mạo hiện đại sang trọng, được tích hợp nhiều tính năng thú vị và cũng sở hữu hiệu năng ấn tượng thì HP Pavilion 14-ce1014TU chính là sản phẩm tối ưu dành cho bạn.', 'upload/1620705820.jpg', 'CPU :	Intel, Core i3\r\nRAM :	4 GB, DDR4\r\nỔ cứng :	HDD 5400rpm, 500 GB\r\nMàn hình :	14.0 inchs, 1920 x 1080 Pixels\r\nCard màn hình :	Intel® HD Graphics 600, Tích hợp\r\nCổng kết nối :	LAN : 10/100/1000 Mbps, WIFI : 802.11 b/g/n\r\nHệ điều hành :	Windows 10 Home SL 64\r\nTrọng lượng :	1,53kg\r\nKích thước :	Dài 324 mm - Rộng 227.6 mm - Dày 19.9 mm', 3, 8, 1, 3, NULL, '2021-05-10 21:03:40'),
(19, 'Chuột không dây quang Microsoft 1850', 350000, 'Chuột quang không dây Microsoft 1850 là giải pháp hữu hiệu nhằm thay thế chiếc bàn chuột touchpad của laptop', 'upload/1620705858.jpg', 'Nút ON/OFF	Để kéo dài tuổi thọ pin, hãy sử dụng công tắc Bật/Tắt để tắt nguồn khi không sử dụng.\r\nChế độ bảo hành	12 tháng 1 đổi 1\r\nMàu sắc	Đen\r\nCác mức DPI	1000\r\nĐặc điểm nổi bật	Nhỏ gọn tinh tế, thiết kế vừa tay cho cả nam và nữ\r\nThời lượng pin	Lên đến 12 tháng\r\nĐộ bền nút bấm	1 triệu lần nhấn\r\nDòng máy tương thích	Máy tính với Windows XP/Vista/7/8/10; Linus; Mac OS\r\nNhu cầu sử dụng	Phổ thông, văn phòng\r\nLoại chuột	Quang, không dây\r\nThương hiệu', 5, 9, 1, 1, NULL, '2021-05-10 21:04:18'),
(20, 'Chuột không dây Zadez M390 Đỏ', 200000, 'Vip', 'upload/1620705894.jpg', 'Tính năng	Tiết kiệm pin\r\nKích thước	92*58*32 mm\r\nTrọng lượng	55g\r\nKết nối Bluetooth	Kết nối không dây với băng tần 2.4G\r\nNút ON/OFF	Để kéo dài tuổi thọ pin, hãy sử dụng công tắc Bật/Tắt để tắt nguồn khi không sử dụng.\r\nChế độ bảo hành	12 tháng 1 đổi 1\r\nDòng máy tương thích	Sử dụng cho PC,Laptop\r\nNhu cầu sử dụng	Du lịch, văn phòng\r\nLoại chuột	Quang, không dây\r\nThương hiệu	ZADEZ\r\nMẫu mã	có thiết kế Ergonomic này sẽ giúp giảm tối đa nguy cơ dẫn đến Hội chứng ống cổ tay - là căn bệnh thường gặp đối với nhân viên văn phòng hoặc những người thường xuyên sử dụng máy tính.\r\nMàu sắc	Đỏ\r\nCác mức DPI	Độ phân giải 1000/1200/1600 DPI\r\nĐặc điểm nổi bật	- Khoảng cách kết nối tối đa 10m, góc nhận sóng 360 độ, tiết kiệm năng lượng thông minh - Thiết kế Ergonomic, hạn chế tác động đến cổ tay người dùng - Receiver siêu nhỏ\r\nThời lượng pin', 5, 10, 1, 8, NULL, '2021-05-10 21:04:54'),
(21, 'Adapter Sạc 1A ivalue MT-C-013 Trắng', 120000, 'Vip', 'upload/1620706361.jpg', 'Chất liệu	Nhựa ABS\r\nChế độ bảo hành	12 tháng 1 đổi 1\r\nThương hiệu	ivalue\r\nCường độ dòng điện	5V 1A\r\nCổng cáp kết nối	1 Cổng\r\nSố cổng USB	1\r\nDòng máy tương thích	Thiết bị điện thoại và máy tính bảng\r\nTính năng	Sạc và truyền dữ liệu', 5, 11, 1, 6, NULL, '2021-05-10 21:12:41'),
(22, 'LG INVERTER 1 HP V10ENW', 8690000, 'Loại máy lạnh: 1 HP - 1 chiều', 'upload/1620706298.jpg', ' Loại máy lạnh: 1 HP - 1 chiều\r\n Công nghệ Inverter\r\n Loại gas: R-32\r\n Làm lạnh nhanh\r\n Bảo hành: 24 tháng\r\n Xuất xứ: Thái Lan', 7, 12, 1, 6, NULL, '2021-05-10 21:11:38'),
(23, 'PHILIPS 43 INCH 43PFT5853S | 74', 6990000, 'Màn hình FullHD 43 inch', 'upload/1620706189.jpg', ' Màn hình FullHD 43 inch\r\n Âm thanh vòm ảo 16W\r\n Pixel Plus HD cải tiến hình ảnh\r\n Kết nối mạng, xem nội dung trực tuyến', 8, 13, 1, 1, NULL, '2021-05-10 21:09:49'),
(49, 'Oppo Reno series', 10000000, 'Vip', 'upload/1620706475.jpg', NULL, 1, 14, 1, 10, '2021-05-10 18:48:02', '2021-05-10 21:14:35'),
(44, 'Iphone 12 Pro Max', 30000000, 'Vip', 'upload/1620705973.jpg', NULL, 1, 5, 1, 20, '2021-05-04 01:51:28', '2021-05-10 21:06:13'),
(45, 'Iphone 11 Pro Max', 25000000, 'Vip', 'upload/1620705947.jpg', NULL, 1, 5, 1, 10, '2021-05-04 02:02:12', '2021-05-10 21:05:47'),
(46, 'OPPO Reno5 Marvel', 15000000, 'Vip', 'upload/1620706090.jpg', NULL, 1, 14, 1, 20, '2021-05-04 02:09:36', '2021-05-10 21:08:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producttype`
--

DROP TABLE IF EXISTS `producttype`;
CREATE TABLE IF NOT EXISTS `producttype` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortened_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `producttype`
--

INSERT INTO `producttype` (`id`, `type_name`, `type_description`, `type_avatar`, `shortened_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Điện thoại thông minh', NULL, NULL, NULL, 1, NULL, NULL),
(2, 'dien thoai thuong', NULL, NULL, NULL, 1, NULL, NULL),
(3, 'laptop', NULL, NULL, NULL, 1, NULL, NULL),
(4, 'tablet', NULL, NULL, NULL, 1, NULL, NULL),
(5, 'phu kien', NULL, NULL, NULL, 1, NULL, NULL),
(6, 'dien may', NULL, NULL, NULL, 1, NULL, NULL),
(7, 'May lanh', NULL, NULL, NULL, 1, NULL, NULL),
(8, 'Tivi', NULL, 'upload/1620644129.jpeg', NULL, 1, NULL, '2021-05-10 03:55:29'),
(9, 'May giat', NULL, NULL, NULL, 1, NULL, NULL),
(10, 'Tu lanh', NULL, 'upload/1620643852.jpg', NULL, 1, NULL, '2021-05-10 03:50:52'),
(32, 'Máy', 'Vip', 'upload/1620117788.jpg', NULL, 1, '2021-05-04 01:43:08', '2021-05-04 01:43:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_name`, `status`, `created_at`, `update_at`) VALUES
(1, 'Samsung', 1, NULL, NULL),
(2, 'Nokia', 1, NULL, NULL),
(3, 'Xiaomi', 1, NULL, NULL),
(4, 'Honor', 1, NULL, NULL),
(5, 'iPhone', 1, NULL, NULL),
(6, 'Asus', 1, NULL, NULL),
(7, 'Dell', 1, NULL, NULL),
(8, 'HP', 1, NULL, NULL),
(9, 'Microsoft', 1, NULL, NULL),
(10, 'Zadez', 1, NULL, NULL),
(11, 'ivalue', 1, NULL, NULL),
(12, 'LG', 1, NULL, NULL),
(13, 'PHILIPS ', 1, NULL, NULL),
(14, 'ELECTROLUX', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_code` int DEFAULT NULL,
  `User_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `isAdmin` int NOT NULL DEFAULT '0' COMMENT '=1 la admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `group_code`, `User_avatar`, `status`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(55, 'Tan', 'tan@gmail.com', NULL, '$2y$10$gurHd5EP6SSRNPSTQ3F9y.wWyg3ToINhJ.Ge9mHCAXgIlhsU0k45y', 2, 'upload/1620646316.jpg', 1, 0, NULL, '2021-05-06 05:25:50', '2021-05-10 04:31:56'),
(49, 'Sơn 1', 'Son1@gmail.com', NULL, '$2y$10$g3Wj0F5yk4/L67xzz8LuY.Z6Zt52yH9b/WBf81B0GUYbKXrDgmt6.', 2, NULL, 1, 1, NULL, '2021-05-03 01:35:13', '2021-05-07 01:37:05'),
(48, 'Sơn Nguyễn', 'nguyenhson112@gmail.com', NULL, '$2y$10$CoadLja8fYR8ncgol81On.h3948e.FKdVwFaliLxBvuYV09q.oyEW', 2, 'upload/1620646619.jpeg', 1, 1, NULL, '2021-05-03 01:32:58', '2021-05-10 04:36:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
