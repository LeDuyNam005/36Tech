-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2025 at 08:34 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgv`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `order_index` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `title`, `order_index`) VALUES
(1, '1. Bắt đầu', 1),
(2, '2. Viewport, @media, breakpoint', 2),
(3, '3. Thực hành nhỏ', 3),
(4, '4. Grid system', 4),
(5, '5. Áp dụng vào thực tế', 5);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` int NOT NULL,
  `chapter_id` int DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `video_id` varchar(50) NOT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `order_index` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `chapter_id`, `title`, `video_id`, `duration`, `order_index`) VALUES
(1, 1, '1. Responsive là gì?', 'uz5LIP85J5Y', '7:28', 1),
(2, 1, '2. Chúng ta sẽ làm gì?', '5QT0aeovTTY', '1:58', 2),
(3, 1, '3. Chuẩn bị công cụ làm việc', 'CIIYogDrGto', '3:55', 3),
(4, 2, '4. Khái niệm Viewport', 'XJiq_d0vGCQ', '03:11', 1),
(5, 2, '5. Media query (@media)', 'YgkzJkmDP3U', '18:01', 2),
(6, 2, '6. Khái niệm Breakpoints?', '0i37IU0wjlI', '09:24', 3),
(7, 2, '7. Media queries: Px, rem hay em?', 'aywAr27pkWE', '04:34', 4),
(8, 3, '8. Học responsive qua thực hành', '-NK4jLekauw', '23:33', 1),
(9, 3, '9. Responsive navigation bar', 'HYy4c6lcOlM', '27:12', 2),
(10, 4, '10. Hệ thống lưới (Grid system)', 'lvD5K50TZPk', '18:55', 1),
(11, 4, '11. Grid system - Phần 2', 'iKlMB01w47g', '10:46', 2),
(12, 4, '12. Tạo thư viện?', 'ScZaj1eG7DQ', '02:41', 3),
(13, 4, '13. Tạo đối tượng Grid', 'SZXvXXb_7aA', '13:50', 4),
(14, 4, '14. Tạo đối tượng Row', '9RHKgjuoIPQ', '13:06', 5),
(15, 4, '15. Tạo đối tượng Column', 'Ck-CnLU7HZI', '23:23', 6),
(16, 4, '16. Column offset', 'P4LW5HjrOQs', '08:04', 7),
(17, 4, '17. No gutters', 'u06X297OuFc', '02:31', 8),
(18, 5, '18. Giới thiệu chương', 'xPwt0rBL-3k', '03:31', 1),
(19, 5, '19. Sử dụng với các website khác', 'lJworR_9WRk', '08:38', 2),
(20, 5, '20. Ví dụ dựng layout - Level 1', '03HYwqbHrF0', '07:39', 3),
(21, 5, '21. Ví dụ dựng layout - Level 2', 'WREPR84fV80', '08:07', 4),
(22, 5, '22. Ví dụ dựng layout - Level 3', 'DZNA4oNtjOk', '15:29', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(100) DEFAULT NULL,
  `reset_token_expiry` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role` enum('user','admin') DEFAULT 'user',
  `avatar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `password`, `reset_token`, `reset_token_expiry`, `created_at`, `role`, `avatar`) VALUES
(1, 'admin', 'admin@example.com', 'admin', '$2y$10$yBro8HeZyjAZXLWQjZJu.O73AVwxdRFzWzaUNxiZpLMiG29ZUoUZm', NULL, NULL, '2025-12-16 15:03:50', 'admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapter_id` (`chapter_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
