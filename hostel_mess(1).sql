-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2015 at 05:38 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel_mess`
--

-- --------------------------------------------------------

--
-- Table structure for table `friday`
--

CREATE TABLE IF NOT EXISTS `friday` (
`id` int(11) NOT NULL,
  `name` text COLLATE utf16_bin NOT NULL,
  `image` text COLLATE utf16_bin NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `friday`
--

INSERT INTO `friday` (`id`, `name`, `image`, `price`) VALUES
(1, ' Special Biryani', 'dishes/biryani.jpg', 100),
(2, 'Kabab', 'dishes/kabab.jpg', 10),
(3, 'Lassi', 'dishes/lassi.jpg', 20),
(4, 'Salad and Raita', 'dishes/raita.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) COLLATE utf16_bin NOT NULL,
  `password` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('13CS173', '173'),
('13CS185', '185'),
('13CS29', 'moon');

-- --------------------------------------------------------

--
-- Table structure for table `monday`
--

CREATE TABLE IF NOT EXISTS `monday` (
`id` int(11) NOT NULL,
  `name` text COLLATE utf16_bin NOT NULL,
  `image` text COLLATE utf16_bin NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `monday`
--

INSERT INTO `monday` (`id`, `name`, `image`, `price`) VALUES
(1, 'Chicken Biryani', 'dishes/biryani.jpg', 70),
(2, 'Korma', 'dishes/korma.jpg', 80),
(3, 'Salad', 'dishes/salad.jpg', 0),
(4, 'Lassi', 'dishes/lassi.jpg', 20),
(5, 'Chapati', 'dishes/chapati.jpg', 0),
(6, 'Daal Mash', 'dishes/daalmash.jpg', 70),
(7, 'Fresh Juice', 'dishes/fruitjuice.jpg', 40);

-- --------------------------------------------------------

--
-- Table structure for table `saturday`
--

CREATE TABLE IF NOT EXISTS `saturday` (
`id` int(11) NOT NULL,
  `name` text COLLATE utf16_bin NOT NULL,
  `image` text COLLATE utf16_bin NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `saturday`
--

INSERT INTO `saturday` (`id`, `name`, `image`, `price`) VALUES
(2, 'Mix Vegetable', 'dishes/mixvegetable.jpg', 70),
(3, 'Lassi', 'dishes/lassi.jpg', 20),
(4, 'Salad', 'dishes/salad.jpg', 0),
(5, 'Chapati', 'dishes/chapati.jpg', 0),
(6, 'Daal Mash', 'dishes/daalmash.jpg', 50),
(7, 'Fresh Juice', 'dishes/fruitjuice.jpg', 50),
(8, 'Chola Biryani', 'dishes/chanabiryani.jpg', 70);

-- --------------------------------------------------------

--
-- Table structure for table `std_data`
--

CREATE TABLE IF NOT EXISTS `std_data` (
  `std_id` varchar(10) COLLATE utf16_bin NOT NULL,
  `name` text COLLATE utf16_bin NOT NULL,
  `roomno` varchar(10) COLLATE utf16_bin NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `std_data`
--

INSERT INTO `std_data` (`std_id`, `name`, `roomno`, `amount`) VALUES
('13CS01', 'SUFIA ALI', '12', 2000),
('13CS05', 'SHIFA SHAH', '15', 2000),
('13CS07', 'Safdar Jamil', '420', 2000),
('13CS09', 'SABA SAMROO', '1', 2000),
('13CS13', 'SUNDUS ABRO', '2', 2000),
('13CS155', 'Idrees Malik', '204', 2000),
('13CS159', 'NAILA KHATIAN', '8', 2000),
('13CS17', 'GHULAM RASOOL', '7', 2000),
('13CS173', 'Iqra Urooj', '1111', 100),
('13CS185', 'Tahira', '2222', 2000),
('13CS21', 'Pardeep Kumar', '420', 2000),
('13CS23', 'SANJHA ', '5', 2000),
('13CS25', 'SANIA', '4', 2000),
('13CS29', 'Jahanzeb Jabbar', '110', -5700),
('13CS41', 'IQRA ZAHID', '6', 2000),
('13CS45', 'SAMINA', '11', 2000),
('13CS59', 'Abdul Salam', '420', 2000),
('13CS81', 'Sheeza', '00', 2000),
('13CS93', 'SHAHBAZ HAIDER', '13', 2000),
('13CS97', 'BARKHA KANJWANI', '19', 2000),
('13CS99', 'SUBHI HADDAD', '21', 2000),
('13ES111', 'XYZ', 'zzzz', -520),
('13SW', 'Sumit', '1000', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `sunday`
--

CREATE TABLE IF NOT EXISTS `sunday` (
`id` int(11) NOT NULL,
  `name` text COLLATE utf16_bin NOT NULL,
  `image` text COLLATE utf16_bin NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `sunday`
--

INSERT INTO `sunday` (`id`, `name`, `image`, `price`) VALUES
(1, 'White Rice', 'dishes/wrice.jpg', 70),
(2, 'Korma', 'dishes/korma.jpg', 80),
(3, 'Mix Vegetable', 'dishes/mixvegetable.jpg', 70),
(4, 'Salad', 'dishes/salad.jpg', 0),
(5, 'Chapati', 'dishes/chapati.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `thursday`
--

CREATE TABLE IF NOT EXISTS `thursday` (
`id` int(11) NOT NULL,
  `name` text COLLATE utf16_bin NOT NULL,
  `image` text COLLATE utf16_bin NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `thursday`
--

INSERT INTO `thursday` (`id`, `name`, `image`, `price`) VALUES
(1, 'Chicken Biryani', 'dishes/biryani.jpg', 70),
(2, 'Tikka', 'dishes/tikka.jpg', 100),
(3, 'Lassi', 'dishes/lassi.jpg', 20),
(4, 'Salad', 'dishes/salad.jpg', 0),
(5, 'Chapati', 'dishes/chapati.jpg', 0),
(6, 'Daal Mong', 'dishes/daalmong.jpg', 50),
(7, 'Fresh Juice', 'dishes/fruitjuice.jpg', 50),
(8, 'Chola Biryani', 'dishes/chanabiryani.jpg', 70);

-- --------------------------------------------------------

--
-- Table structure for table `tuesday`
--

CREATE TABLE IF NOT EXISTS `tuesday` (
`id` int(11) NOT NULL,
  `name` text COLLATE utf16_bin NOT NULL,
  `image` text COLLATE utf16_bin NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `tuesday`
--

INSERT INTO `tuesday` (`id`, `name`, `image`, `price`) VALUES
(1, 'Chicken Biryani', 'dishes/biryani.jpg', 70),
(2, 'Korma', 'dishes/korma.jpg', 80),
(3, 'Lassi', 'dishes/lassi.jpg', 20),
(4, 'Salad', 'dishes/salad.jpg', 0),
(5, 'Chapati', 'dishes/chapati.jpg', 0),
(6, 'Daal Mong', 'dishes/daalmong.jpg', 50),
(7, 'Fresh Juice', 'dishes/fruitjuice.jpg', 50);

-- --------------------------------------------------------

--
-- Table structure for table `wednesday`
--

CREATE TABLE IF NOT EXISTS `wednesday` (
`id` int(11) NOT NULL,
  `name` text COLLATE utf16_bin NOT NULL,
  `image` text COLLATE utf16_bin NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `wednesday`
--

INSERT INTO `wednesday` (`id`, `name`, `image`, `price`) VALUES
(1, 'White Rice', 'dishes/wrice.jpg', 70),
(2, 'Fried Fish', 'dishes/fish.jpg', 80),
(3, 'Lassi', 'dishes/lassi.jpg', 20),
(4, 'Salad', 'dishes/salad.jpg', 0),
(5, 'Chapati', 'dishes/chapati.jpg', 0),
(6, 'Bhindi', 'dishes/bhindi.jpg', 70),
(7, 'Fresh Juice', 'dishes/fruitjuice.jpg', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friday`
--
ALTER TABLE `friday`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD UNIQUE KEY `std_id` (`username`);

--
-- Indexes for table `monday`
--
ALTER TABLE `monday`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `saturday`
--
ALTER TABLE `saturday`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `std_data`
--
ALTER TABLE `std_data`
 ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `sunday`
--
ALTER TABLE `sunday`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `thursday`
--
ALTER TABLE `thursday`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tuesday`
--
ALTER TABLE `tuesday`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `wednesday`
--
ALTER TABLE `wednesday`
 ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friday`
--
ALTER TABLE `friday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `monday`
--
ALTER TABLE `monday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `saturday`
--
ALTER TABLE `saturday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sunday`
--
ALTER TABLE `sunday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `thursday`
--
ALTER TABLE `thursday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tuesday`
--
ALTER TABLE `tuesday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `wednesday`
--
ALTER TABLE `wednesday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
