-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 12:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_membership_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `log_id` int(11) UNSIGNED NOT NULL,
  `account_id` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `action_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_content` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `books_visits`
--

CREATE TABLE `books_visits` (
  `visit_id` int(11) NOT NULL,
  `book_visits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `account_id` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cellNo` varchar(255) NOT NULL,
  `lrn` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_systemStatus` varchar(255) NOT NULL,
  `access_level` int(11) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `account_id`, `lastName`, `firstName`, `middleName`, `email`, `cellNo`, `username`, `password`, `user_systemStatus`, `access_level`, `date_registered`) VALUES
(1, '9589', 'Calderon', 'John Emmanuel', 'Cruz', 'james.calderon023@gmail.com', '', 'Calderon', '$2y$10$mqUkVJ/8d6HLGyu1UB0jguBfxdpjHDxj2/oC1Go9eOpHhlndKMzf2', '', 1, '2021-05-05 07:24:54'),
(2, '1920', 'Cruz', 'Hans Christian', 'Ibardolasa', 'hanschristianpogi@gmail.com', '', 'hans123', '$2y$10$pt/eoiW7TtsOkWNKOYtx/uex9JSrAbYK1Dqi07ls2HFdHCKLGqZlG', '', 0, '2021-04-28 05:50:41'),
(3, '53637', 'Reyes', 'Dennis Jim', 'Catindig', 'dennisjimpogi@gmail.com', '', 'dennis123', '$2y$10$JDh5MuTO5dWWljkz5TgJReiOUCOcJ.Ws9sCFWkl/GuSNL5moCiQaK', '', 0, '2021-04-28 05:34:33'),
(4, '78968', 'Fajardo', 'Cindy', 'Alindao', 'cindyfajardoganda@gmail.com', '', 'cindy123', '$2y$10$WP1OGoDsgekTxKOSZ7ep4O.2.6GvlyIHKhyAdPDuBd08TEw7La2C.', '', 0, '2021-04-28 05:40:01'),
(5, '94197', 'Mendez', 'Eaonne', 'Dael', 'eaonnepogi@gmail.com', '', 'eaonne123', '$2y$10$el9lm6Z8odup5Hn5XRQUmuwj5g4hsajgDPGV96zOS0w78R3fsSTAu', '', 0, '2021-04-28 06:05:34'),
(6, '93339', 'Bronzal', 'Jemuel', 'wala', 'jemuelwala@gmail.com', '', 'jemuel123', '$2y$10$plvi4AHLWdqGIB/cxbQ.0ORVBik.jcArDhVe7hM19OTCRzf3ZDGDG', '', 0, '2021-04-28 06:23:14'),
(7, '57966', 'Soriano', 'Erwin', 'wala', 'erwintulfo@gmail.com', '', 'erwin123', '$2y$10$hlPPCmC4mG5eCrdBX46z0Ov8GcWr0.6CBDvWcZR2FTP8eUo2CGoMW', '', 0, '2021-04-28 06:25:03'),
(8, '74802', 'Villanueva', 'Ezekiel', 'wala', 'kylepogi@gmail.com', '', 'kyle123', '$2y$10$Fy0FPLdYlXe5JrSpW8XjcuacCRTYS/PF9zasV3X24BeOQjg/Oac5i', '', 0, '2021-04-29 03:23:06'),
(9, '91297', 'Banaag', 'Moises', 'Eliseo', 'moisespogi@gmail.com', '', 'moises123', '$2y$10$InNb3Gd08qAk7Kccjk1IE.e7qU3Kx.kHwkctElmu.92Aez6qR09A.', '', 0, '2021-04-29 04:02:08'),
(10, '98850', 'Cruz', 'Kalfontein', 'Tibegar', 'kalfonpogi@gmail.com', '', 'kalfon123', '$2y$10$W3sL39v0WvO/MgB9B/6s..N3oEfr96tqc7CMW/7KjQOfPf9FsDwNS', '', 1, '2021-05-05 07:28:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `books_visits`
--
ALTER TABLE `books_visits`
  ADD PRIMARY KEY (`book_visits`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `account_id` (`account_id`,`email`,`cellNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books_visits`
--
ALTER TABLE `books_visits`
  MODIFY `book_visits` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;