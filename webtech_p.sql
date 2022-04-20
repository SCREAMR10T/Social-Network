-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 01:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech_p`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postv` mediumint(100) NOT NULL,
  `provider` varchar(128) NOT NULL,
  `ptitle` varchar(250) NOT NULL,
  `pdesc` varchar(500) NOT NULL,
  `rate` int(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postv`, `provider`, `ptitle`, `pdesc`, `rate`, `time`) VALUES
(3, 'scream', 'I will fix your computer/laptop', 'I am very good at what I do. I will provide free software as well.', 12, '2022-04-11 05:42:33'),
(5, 'sakil', 'I will fix your computer', 'I am a computer engineer, trust me bro!', 12, '2022-04-17 18:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `uname` varchar(128) NOT NULL,
  `fname` varchar(128) NOT NULL,
  `images` varchar(128) NOT NULL,
  `bio` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`uname`, `fname`, `images`, `bio`) VALUES
('sakil', 'John Doe', 'Ellipse 153.png', 'This is my bio'),
('scream', 'John Doe', '277351313_298490132422148_3596416438181723489_n.jpg', 'I am a computer engineer.');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `provider` varchar(250) NOT NULL,
  `posttitle` varchar(250) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `reporter` varchar(250) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`provider`, `posttitle`, `reason`, `reporter`, `time`) VALUES
('testing2', 'sdsd', 'He is a cheater', 'sakil', '2022-04-19 15:03:03'),
('sakil', 'I will fix your computer', 'He is a cheater too', 'scream', '2022-04-19 15:07:27'),
('testing2', 'sdsd', '', 'scream', '2022-04-19 15:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `reqv` int(100) NOT NULL,
  `buyer` varchar(128) NOT NULL,
  `provider` varchar(128) NOT NULL,
  `postt` varchar(250) NOT NULL,
  `rate` int(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`reqv`, `buyer`, `provider`, `postt`, `rate`, `time`) VALUES
(6, 'sakil', 'testing2', 'sdsd', 6, '2022-04-14 08:44:33'),
(14, 'scream', 'sakil', 'I will fix your computer', 12, '2022-04-20 04:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `email`, `password`) VALUES
('sakil', 'asd@email.com', '123'),
('scream', 'asdasdas@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postv`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`reqv`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postv` mediumint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `reqv` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
