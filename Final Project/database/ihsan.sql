-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 07:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
  `pro_photo` varchar(200) NOT NULL,
  `address` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `hotel_id`, `username`, `password`, `phone_no`, `cnin_no`, `pro_photo`, `address`) VALUES
(1, 1, 'ihsan', 'ihsan', '0341987874', '11201-1380050-7', 'img_ihsan.png', 'Lakki Marwat Khyber Pakhtunkhwa Pakistan'),
(2, 2, 'sajid', 'sajid', '03472267126', '15606-0348777-1', 'img_sajid.jpg', 'Charbagh Swat Khyber Pakhtunkhwa Pakistan'),
(3, 3, 'sara', 'sara', '0328823483', '32487-234232-2', 'sara_img.jpg', 'Peshawar Khyber Pakhtunkhwa Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(40) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_address` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`c_id`, `c_name`, `c_email`, `c_address`) VALUES
(1, 'Sajid Ali Gulzar', 'sajidmosics@gamil.com', 'Swat pakistan'),
(2, 'Majid', 'majid@gmail.com', 'Lakki Marwat'),
(3, 'Ihsan Ullah', 'ihsanullahadamzai1997@gmail.com', 'Lakki Marwat'),
(4, 'Asif Ullah', 'asifullah@gmail.com', 'lakki marwat'),
(5, 'Fazal Hadi', 'fazal@gmail.com', 'Vilage Chopal , Tehsil & Post Office peshmal  Distt; mardan');

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
(1, 1, 'STC University of Peshawar', 'laksdfjaklsdfjioweruo', 'University of Peshawar'),
(2, 2, 'XYZ Hotel at Peshawar', 'asldkfjil3wuoiwerjrlm', 'Hashtnagri Peshawar Khyber Pakhtunkhwa Pakistan'),
(3, 3, 'Mecdonal University Road Peshawar ', 'sdfasdfwerwefsdgfdgdfh', 'University road Peshawar');

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
(2, 1, 'Tea', 20, 'available before 2:00 pm', 'no'),
(3, 1, 'chicken', 210, 'Available any time', 'yes'),
(4, 1, 'soup', 230, 'available', 'yes'),
(5, 1, 'White Karhahi', 500, 'Any time availabe', 'yes'),
(6, 1, 'mutton', 340, 'available', 'no'),
(7, 1, 'chicken beryani', 300, 'Not available on sunday', 'yes'),
(8, 1, 'alo gosht', 240, 'available from Dec 2019', 'yes'),
(9, 1, 'mota chawal', 180, 'available', 'yes'),
(10, 1, 'sada chawal', 150, 'available', 'no'),
(11, 1, 'coffee', 20, 'available', 'no'),
(12, 1, 'Tea type 2', 40, 'available before 2:00 pm', 'yes'),
(13, 1, 'Tea type 3', 40, 'available before 2:00 pm', 'no'),
(14, 1, 'unknown name', 220, 'available', 'no'),
(15, 2, 'mota chawal', 230, 'Available everyday', 'yes'),
(16, 1, 'Shami Kabab', 120, 'Available every day', 'yes'),
(17, 2, 'Tea', 30, 'Available   b  4         12 : 00 PM', 'yes'),
(18, 2, 'coffee', 35, 'available', 'no'),
(19, 2, 'chicken', 300, 'Available every day', 'yes'),
(20, 2, 'Fizza', 220, 'available', 'no'),
(21, 3, 'Roast', 250, 'Available', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `o_id` int(15) NOT NULL,
  `c_id` int(11) NOT NULL,
  `hotel_id` int(5) NOT NULL DEFAULT '1',
  `item_id` int(50) NOT NULL,
  `item_amount` int(3) NOT NULL DEFAULT '1',
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`o_id`, `c_id`, `hotel_id`, `item_id`, `item_amount`, `date`, `time`, `status`) VALUES
(1, 1, 1, 1, 1, '1-oct-2019', '10:00 am', 1),
(1, 1, 1, 2, 1, '1-oct-2019', '10:00 am', 1),
(2, 2, 1, 1, 1, '2-oct-2019', '10:00 am', 2),
(3, 1, 1, 3, 1, '3-oct-2019', '12:00 pm', 0),
(1, 1, 1, 3, 1, '1-oct-2019', '10:00 am', 1),
(1, 1, 1, 4, 1, '1-oct-2019', '10:00 am', 1),
(2, 2, 1, 3, 1, '2-oct-2019', '10:00 am', 2),
(4, 3, 1, 4, 1, '2-oct-2019', '12 00 pm', 0),
(4, 3, 1, 2, 1, '2-oct-2019', '12 00 pm', 0),
(5, 4, 1, 5, 1, '2-oct-2019', '12 00 pm', 0),
(5, 4, 1, 2, 1, '2-oct-2019', '12 00 pm', 0),
(1, 1, 1, 5, 1, '3 oct 2019', '11: 30 am', 1),
(1, 1, 1, 6, 2, '1 oct 2019', '10 : 00 pm', 1),
(3, 1, 1, 2, 2, '1 oct 2019', '10 : 00 am', 0),
(6, 3, 1, 6, 2, '23 may', '12:00', 0),
(7, 5, 1, 3, 3, '3 Oct 2019', '12 : 00 PM', 0),
(8, 2, 2, 15, 2, '3 Oct 2019', '11: 30 am', 1);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
