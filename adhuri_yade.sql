-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 09:56 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adhuri_yade`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'aarav', 'aarav@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'chandan mishra', 'chandan@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(12) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `alt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image_url`, `alt`) VALUES
(6, 'assets/uploads/7673310815dd1382c9030b.jpg', 'aarav'),
(7, 'assets/uploads/10539267115dd138850268b.jpg', 'dsz'),
(8, 'assets/uploads/9169841985dd141462d5ee.jpg', 'sdfg');

-- --------------------------------------------------------

--
-- Table structure for table `poetry`
--

CREATE TABLE `poetry` (
  `id` int(12) NOT NULL,
  `tittle` varchar(600) NOT NULL,
  `poetry` varchar(900) NOT NULL,
  `inserted_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poetry`
--

INSERT INTO `poetry` (`id`, `tittle`, `poetry`, `inserted_date`) VALUES
(7, 'sdfgh', '<p>sdfgh</p>', '2019-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `quots`
--

CREATE TABLE `quots` (
  `id` int(12) NOT NULL,
  `tittle` varchar(2000) NOT NULL,
  `quots` varchar(3000) NOT NULL,
  `inserted_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quots`
--

INSERT INTO `quots` (`id`, `tittle`, `quots`, `inserted_date`) VALUES
(67, 'Jakhm Itna Gehra Hai Izhaar Kya Kare.', '<h4 style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: #414141; font-family: \'Open Sans\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: center;\"><strong>Jakhm Itna Gehra Hai Izhaar Kya Kare.</strong></h4>\r\n<h4 style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: #414141; font-family: \'Open Sans\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: center;\"><strong>Ham Khud Nishan Ban Gy Oro Ka Kya Kare.</strong></h4>\r\n<h4 style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: #414141; font-family: \'Open Sans\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: center;\"><strong>Mar Gy Ham Magar Khuli Rahi Akhein.</strong></h4>\r\n<h4 style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: #414141; font-family: \'Open Sans\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: center;\"><strong>Kyuki Hamari Akhon Ko Unka Intezar Hai.</strong></h4>', '2019-11-17 20:34:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poetry`
--
ALTER TABLE `poetry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quots`
--
ALTER TABLE `quots`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `poetry`
--
ALTER TABLE `poetry`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `quots`
--
ALTER TABLE `quots`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
