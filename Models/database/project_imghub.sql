-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2020 at 04:27 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_imghub`
--

-- --------------------------------------------------------

--
-- Table structure for table `imghub_account`
--

CREATE TABLE `imghub_account` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `intro` varchar(100) NOT NULL,
  `img_profile` varchar(100) NOT NULL,
  `account_group` varchar(100) NOT NULL,
  `grouplevel` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `lastupdate` varchar(100) NOT NULL,
  `since` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imghub_account`
--

INSERT INTO `imghub_account` (`id`, `username`, `password`, `email`, `account_name`, `intro`, `img_profile`, `account_group`, `grouplevel`, `level`, `lastupdate`, `since`) VALUES
(30072554, 'admin', '123456', 'koonnongamer@gmail.com', 'NonNie', 'It\'s my intro', '-', 'Develop', 'Leader', 'admin', '2020-04-09 07:09:29', ''),
(30072556, 'member', '123456', 'Nonzaioza71@gmail.com', 'Sorano', 'It\'s member intro', '-', 'Develop', 'Officer', 'member', '2020-04-09 07:09:29', ''),
(30072564, 'user', '123456', 'gg@gg.cc', 'Hello world', '', 'Capture3.PNG', 'No group', '', 'member', '2020-04-09 07:09:29', ''),
(30072568, 'test001', '123456', 'babababa@baba.baba', 'ImgTest', '', 'Array', 'No group', '', 'admin', '', ''),
(30072569, 'user01', '123456', 'ytutuytutu@hjgjghj.com', 'NonNie eiei', '', 'Array', 'No group', '', 'member', '', ''),
(30072570, 'cream01', '1234', 'kjhkhkhkjhk@gfvhfghfh.jkkj', 'ครีม', '', 'Array', 'No group', '', 'member', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `chat_id` int(11) NOT NULL,
  `chat_msg` varchar(200) NOT NULL,
  `chat_user1` int(11) NOT NULL,
  `chat_user2` int(11) NOT NULL,
  `chat_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`chat_id`, `chat_msg`, `chat_user1`, `chat_user2`, `chat_datetime`) VALUES
(8, 'Hi', 1, 1, '2020-04-05 03:55:07'),
(9, 'Hello', 1, 2, '2020-04-05 03:55:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imghub_account`
--
ALTER TABLE `imghub_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `chat_user1` (`chat_user1`),
  ADD KEY `chat_user2` (`chat_user2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imghub_account`
--
ALTER TABLE `imghub_account`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30072571;
--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
