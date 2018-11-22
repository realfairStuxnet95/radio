-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 07:35 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radio`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio_files`
--

CREATE TABLE `audio_files` (
  `file_id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `file_name` varchar(1024) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `error` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_files`
--

INSERT INTO `audio_files` (`file_id`, `user_id`, `title`, `file_name`, `duration`, `category`, `description`, `type`, `error`, `status`, `regDate`) VALUES
(1, 3, 'Dani Kard Ft Jeezy Lawingo__Ninde_Prod By Kenny_Audio', 'uploads/118.mp3', '', 'RNB', 'Dani Kard Ft Jeezy Lawingo__Ninde_Prod By Kenny_Audio', 'audio', '', 'PENDING', '2018-05-29 11:33:41'),
(4, 4, 'Gutya By Antique Ft NKY PrOd By Kenny Official Audio 2016', 'uploads/207.mp3', '', 'AfroBeatz', 'Gutya By Antique Ft NKY PrOd By Kenny Official Audio 2016', 'audio', '', 'ACTIVE', '2018-05-29 12:17:56'),
(5, 6, 'Eminem - Berzerk Free Online Music', 'uploads/706.mp3', '', 'Jazz', 'Eminem - Berzerk Free Online Music', 'audio', '', 'ACTIVE', '2018-05-29 12:59:23'),
(7, 9, 'Eli Mill- SURVIVAL ', 'uploads/862.mp3', '', 'AfroBeatz', 'Eli Mill- SURVIVAL ', 'audio', '', 'ACTIVE', '2018-06-25 07:54:20'),
(10, 8, 'Dani Kard Ft Jeezy Lawingo__Ninde_Prod By Kenny_Audio', 'uploads/372.mp3', '', 'AfroBeatz', 'Dani Kard Ft Jeezy Lawingo__Ninde_Prod By Kenny_Audio', 'audio', '', 'ACTIVE', '2018-06-25 08:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `names` varchar(1024) NOT NULL,
  `status` varchar(50) NOT NULL,
  `type` int(10) NOT NULL,
  `profile_image` varchar(1024) NOT NULL,
  `isOnline` varchar(20) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`user_id`, `email`, `password`, `user_phone`, `names`, `status`, `type`, `profile_image`, `isOnline`, `regDate`) VALUES
(1, 'sam@gmail.com', 'd8ae5776067290c4712fa454006c8ec6', '', 'Manikiza samuel', 'ACTIVE', 0, '', 'no', '2018-05-29 07:33:22'),
(2, 'sam1@gmail.com', 'eb694a28c3b6ec3a1bf52ed4bf7294cc', '', 'manikiza', 'ACTIVE', 0, '', 'no', '2018-05-29 09:07:47'),
(3, 'sam12@gmail.com', '4afed532f06bff7d4d5b2dde81026df2', '', 'manikiza', 'ACTIVE', 0, '', 'no', '2018-05-29 09:16:37'),
(4, 'test@gmail.com', 'eb694a28c3b6ec3a1bf52ed4bf7294cc', '', 'testing', 'ACTIVE', 0, '', 'no', '2018-05-29 12:17:32'),
(5, 'manikiza@GMAIL.COM', 'eb694a28c3b6ec3a1bf52ed4bf7294cc', '250788998877', 'manikiza', 'ACTIVE', 0, '', 'no', '2018-05-29 12:39:01'),
(6, 'migambi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '250788998877', 'migambi jean', 'ACTIVE', 0, '', 'no', '2018-05-29 12:58:50'),
(7, 'sam@ref.com', 'eb694a28c3b6ec3a1bf52ed4bf7294cc', '250788996655', 'samuel sugira', 'ACTIVE', 0, '', 'no', '2018-06-05 09:25:16'),
(8, 'migambi@radio.com', 'eb694a28c3b6ec3a1bf52ed4bf7294cc', '250788564342', 'Migambi', 'ACTIVE', 0, '', 'no', '2018-06-25 07:44:29'),
(9, 'ziggy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '250788435678', 'ziggy ', 'ACTIVE', 0, '', 'no', '2018-06-25 07:53:55'),
(10, 'sam@radio.com', '478c1bd7383bbaed9aba41b832c84bdb', '250788654312', 'samuel manikiza', 'ACTIVE', 1, '', 'no', '2018-07-04 10:01:51'),
(11, 'fred@tv1.rw', 'eb694a28c3b6ec3a1bf52ed4bf7294cc', '250788998877', 'Fred epp', 'ACTIVE', 0, '', 'no', '2018-07-09 09:25:26'),
(12, 'info@radio1.com', 'e15d38092151c4bae08c7dce7c2b5a96', '250788987876', 'Radio1 Admin', 'ACTIVE', 1, '', 'no', '2018-07-24 09:13:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio_files`
--
ALTER TABLE `audio_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio_files`
--
ALTER TABLE `audio_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
