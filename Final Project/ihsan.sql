-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 09:39 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `hotel_id` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `cnin_no` varchar(15) NOT NULL,
  `address` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `hotel_id`, `username`, `password`, `phone_no`, `cnin_no`, `address`) VALUES
(1, 1, 'ihsan', 'ihsan', '0341987874', '11201-1380050-7', 'Lakki Marwat Khyber Pakhtunkhwa Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `c_id` int(11) NOT NULL,
  `hotel_id` int(5) NOT NULL,
  `c_name` varchar(40) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_address` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`c_id`, `hotel_id`, `c_name`, `c_email`, `c_address`) VALUES
(1, 1, 'Sajid Ali Gulzar', 'sajidmosics@gamil.com', 'Swat pakistan'),
(2, 1, 'Majid', 'majid@gmail.com', 'Lakki Marwat');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(5) NOT NULL,
  `admin_id` int(5) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `address` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `admin_id`, `hotel_name`, `barcode`, `address`) VALUES
(1, 1, 'STC University of Peshawar', 'laksdfjaklsdfjioweruo', 'University of Peshawar');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `item_name` varchar(40) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `presence` varchar(5) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `hotel_id`, `item_name`, `price`, `description`, `presence`) VALUES
(1, 1, 'achar ghosht', 200, 'This dish is not available on sunday', 'yes'),
(2, 1, 'Tea', 30, 'available before 2:00 pm', 'yes'),
(3, 1, 'chicken', 210, 'Available any time', 'yes'),
(4, 1, 'soup', 230, 'available', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `o_id` int(15) NOT NULL,
  `c_id` int(11) NOT NULL,
  `item_id` int(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`o_id`, `c_id`, `item_id`, `date`, `time`) VALUES
(1, 1, 1, '1-oct-2019', '10:00 am'),
(1, 1, 2, '1-oct-2019', '10:00 am'),
(2, 2, 1, '2-oct-2019', '10:00 am'),
(3, 1, 3, '3-oct-2019', '12:00 pm'),
(1, 1, 3, '1-oct-2019', '10:00 am'),
(1, 1, 4, '1-oct-2019', '10:00 am'),
(2, 2, 3, '2-oct-2019', '10:00 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
