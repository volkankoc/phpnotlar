-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 07, 2021 at 09:19 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `session_id` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `giris_saati` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cikis_saati` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `session_id`, `user`, `giris_saati`, `cikis_saati`) VALUES
(1, '0', 'volkan', '2021-01-07 08:02:22', '2021-01-07 08:51:23'),
(2, '0', 'ahmet', '2021-01-07 08:03:11', '2021-01-07 08:47:09'),
(3, '0', 'volkan', '2021-01-07 08:03:22', '2021-01-07 11:03:22'),
(4, '0', 'volkan', '2021-01-07 08:27:20', '2021-01-07 11:27:20'),
(5, '0', 'volkan', '2021-01-07 08:34:18', '2021-01-07 11:34:18'),
(6, '0', 'ahmet', '2021-01-07 08:40:05', '2021-01-07 11:40:05'),
(7, '0', 'volkan', '2021-01-07 08:44:28', '2021-01-07 11:44:28'),
(8, '0', 'ahmet', '2021-01-07 08:46:52', '2021-01-07 11:46:52'),
(9, '0', 'volkan', '2021-01-07 08:51:08', ''),
(10, '2', 'ahmet', '2021-01-07 08:55:05', '2021-01-07 08:56:27'),
(11, '1', 'volkan', '2021-01-07 08:56:56', '2021-01-07 08:57:43'),
(12, '1', 'volkan', '2021-01-07 08:57:23', '2021-01-07 08:57:43'),
(13, '2', 'ahmet', '2021-01-07 09:00:25', ''),
(14, 'jma8i5t7f16cp08a5sp8h5e8hi', 'volkan', '2021-01-07 09:08:06', '2021-01-07 09:14:31'),
(15, 'jma8i5t7f16cp08a5sp8h5e8hi', 'volkan', '2021-01-07 09:09:57', '2021-01-07 09:14:31'),
(16, 'jma8i5t7f16cp08a5sp8h5e8hi', 'ahmet', '2021-01-07 09:10:26', '2021-01-07 09:14:31'),
(17, 'jma8i5t7f16cp08a5sp8h5e8hi', 'ahmet', '2021-01-07 09:11:39', '2021-01-07 09:14:31'),
(18, 'jac6guugnr49v5loin5fcehlpp', 'ahmet', '2021-01-07 09:12:25', '2021-01-07 09:13:02'),
(19, 'jma8i5t7f16cp08a5sp8h5e8hi', 'volkan', '2021-01-07 09:13:21', '2021-01-07 09:14:31'),
(20, 'm3vngmjagd3muslufohq826vo7', 'ahmet', '2021-01-07 09:14:41', '2021-01-07 09:14:58'),
(21, 'e55ahbg3f93rr5hvf4c7777efg', 'volkan', '2021-01-07 09:15:18', '2021-01-07 09:15:34'),
(22, 'hlqeacs525377ebv8krdtg75oj', 'volkan', '2021-01-07 09:18:19', '2021-01-07 12:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `role`, `adsoyad`) VALUES
(1, 'volkan', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'volkan koç'),
(2, 'ahmet', '6074c6aa3488f3c2dddff2a7ca821aab', 'user', 'ahmet güntepe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
