-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2017 at 08:18 PM
-- Server version: 5.7.11-0ubuntu6
-- PHP Version: 7.0.4-7ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `location` varchar(150) NOT NULL,
  `resume` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `phone`, `location`, `resume`) VALUES
(1, 'Nadeem', 'nadeem@yahoo.com', '112233', 'kashmir', 'zerolight_product1_2.jpg'),
(2, 'Qamir', 'Gilgit', '332211', 'Islamabad', NULL),
(3, 'Shafqat', 'shafqat@yahoo.com', '12345', 'Islamabad', NULL),
(4, 'kascohr8', 'mailtomayaz@gmail.com', 'islamabad', '112233', NULL),
(5, 'kascohr', 'mailtomayaz@gmail.com', '112233', 'islamabad', NULL),
(6, 'kascohr', 'mailtomayaz@gmail.com', '112233', 'islamabad', NULL),
(7, 'kascohr', 'mailtomayaz@gmail.com', '112233', 'islamabad7', NULL),
(8, 'Ayaz', 'ayaz.m@allshoreresources.com', '122334', 'haripur', 'triad_product1_1.jpg'),
(9, 'Ayaz', 'ayaz.m@allshoreresources.com', '122334', 'haripur', NULL),
(11, 'shaid', 'shaid@allshoreresources.com', '2224', 'iqbal town', NULL),
(12, 'Danish', 'danish@google.com', '3442134', 'Rawalpinid32', 'iota-kremlin-gobi-tan.jpg'),
(13, 'kascohr83', 'shaid@allshoreresource3s.com', '34421343', 'islamabad73', 'iota-nomadzl-ring-base-scope-mounts.jpg'),
(14, 'Ayaz23', 'ayaz.m@allshoreresources3.com', '122334', 'haripur3', 'featured-nomad_2.jpg'),
(15, 'Ayaz', 'ayaz.m@allshoreresources.com', '3442134', 'haripur', 'iota-triadzl-picatinny-scope-mounts.jpg'),
(16, 'Ayaz', 'ayaz.m@allshoreresources3.com', '122334', 'haripur3', 'kremlin_product2_1.jpg'),
(17, 'Ayaz', 'ayaz.m@allshoreresources3.com', '122334', 'haripur3', 'kremlin_product2_1.jpg'),
(18, 'asdf', 'ayaz.m@allshoreresources.com', '122334', 'iqbal town', ''),
(19, 'asdf', 'ayaz.m@allshoreresources.com', '122334', 'iqbal town', 'triad_product2_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
