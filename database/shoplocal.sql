-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2021 at 12:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoplocal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `symbol` varchar(255) DEFAULT ''''''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shopkeepers`
--

CREATE TABLE `shopkeepers` (
  `s_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `location` varchar(500) NOT NULL,
  `fulladdress` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopkeepers`
--

INSERT INTO `shopkeepers` (`s_id`, `name`, `username`, `password`, `location`, `fulladdress`) VALUES
(1, 'Kansal Departmental Store', 'kansalstore', 'shop', 'Delhi', 'Greater Kailash 1, LBB,Delhi'),
(2, 'Delhi Bazaar Craft House', 'bazaarcraft', 'shop', 'Delhi', ' International Departure Terminal 3 (T3), Indira Gandhi International Airport, New Delhi, Delhi 110037'),
(3, 'Desi Aata Chakki', 'desiaata', 'shop', 'Sector 22', 'SCO 24, Sector 22C, Chandigarh'),
(4, 'Sapahiya Karyana Store', 'sapahiya', 'shop', 'Sehl', ' Sehl, Road, Sehal, Himachal Pradesh '),
(5, 'The Mega Star - Karyana or Grocery Store', 'megastar', 'shop', 'Ram Nagar', '139/12, Ram Nagar, Mangvayin, Mandi, Himachal Pradesh'),
(6, 'Patanjali Store', 'patanjali', 'shop', 'Bharat', 'Desh ki apni dukaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `shopkeepers`
--
ALTER TABLE `shopkeepers`
  ADD PRIMARY KEY (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
