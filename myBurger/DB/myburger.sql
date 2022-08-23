-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 05:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myburger`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `addon_id` varchar(10) NOT NULL,
  `addon_name` varchar(100) NOT NULL,
  `addon_price` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`addon_id`, `addon_name`, `addon_price`) VALUES
('a001', 'Brioche Bun', '40'),
('a002', 'Sesame Seed', '35'),
('a003', 'Potato Bun', '50'),
('a004', 'Regular', '20'),
('a005', 'Beef Bacon', '75'),
('a006', 'Salami', '75'),
('a007', 'Ham', '50'),
('a008', 'Pastrami', '120'),
('a009', 'Sausage (Chicken)', '40'),
('a010', 'Egg Poached', '15');

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` varchar(15) NOT NULL,
  `admin_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_password`) VALUES
('raad', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `burgers`
--

CREATE TABLE `burgers` (
  `burger_id` varchar(10) NOT NULL,
  `burger_name` varchar(100) NOT NULL,
  `burger_size` varchar(13) NOT NULL,
  `burger_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `burgers`
--

INSERT INTO `burgers` (`burger_id`, `burger_name`, `burger_size`, `burger_price`) VALUES
('b001', 'Big Mad', 'Big', 300),
('b002', 'Mad Max', 'Max', 450),
('b003', 'Single Delish', 'Regular', 150),
('b004', 'Chick-fill-a', 'Regular', 250),
('b005', 'Maddox', 'Big', 500),
('b006', 'Beef Haven', 'Large', 400),
('b007', 'Chicken BBQ', 'Regular', 170),
('b008', 'Beef Bacon', 'Large', 300),
('b009', 'Beef Salami', 'large', 450);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` varchar(10) NOT NULL,
  `Item` varchar(100) NOT NULL,
  `Size` varchar(13) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `Item`, `Size`, `Price`) VALUES
('a005', 'Beef', 'Regular', 75),
('a010', 'Egg', 'Regular', 15),
('b010', 'Veggie', 'Regular', 200),
('s001', 'Fries', 'Single', 80),
('s010', 'Chicken', '10', 100);

-- --------------------------------------------------------

--
-- Table structure for table `customer_list`
--

CREATE TABLE `customer_list` (
  `customer_id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(13) NOT NULL,
  `address` varchar(200) NOT NULL,
  `customer_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_list`
--

INSERT INTO `customer_list` (`customer_id`, `name`, `phone`, `address`, `customer_password`) VALUES
('c001', 'Raad', 123, 'Address1', 'Raad'),
('c002', 'Ozy', 1234, 'address11', '1234'),
('c010', 'a', 12, 'asa', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `job_candidates`
--

CREATE TABLE `job_candidates` (
  `job_id` varchar(10) NOT NULL,
  `candidate_name` varchar(100) NOT NULL,
  `candidate_phone` int(13) NOT NULL,
  `candidate_email` varchar(50) NOT NULL,
  `qualifications` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_candidates`
--

INSERT INTO `job_candidates` (`job_id`, `candidate_name`, `candidate_phone`, `candidate_email`, `qualifications`) VALUES
('j002', 'Mahbub', 1557, 'mahbub@gmail.com', '3'),
('j001', 'Raad', 155, 'asc@gmail.com', '1'),
('j002', 'Rex', 224, 'rex@gmail.com', '4'),
('j001', 'Tyler', 22, 'ssds', '6');

-- --------------------------------------------------------

--
-- Table structure for table `job_listings`
--

CREATE TABLE `job_listings` (
  `job_id` varchar(10) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `vacancy` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_listings`
--

INSERT INTO `job_listings` (`job_id`, `designation`, `vacancy`) VALUES
('j001', 'Salesman', 5),
('j002', 'Chef', 3),
('j003', 'Sous Chef', 3),
('j004', 'Cleaner', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sides`
--

CREATE TABLE `sides` (
  `side_id` varchar(10) NOT NULL,
  `side_name` varchar(100) NOT NULL,
  `side_size` varchar(13) NOT NULL,
  `side_price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sides`
--

INSERT INTO `sides` (`side_id`, `side_name`, `side_size`, `side_price`) VALUES
('s001', 'Fries', 'Single', '80'),
('s002', 'Fries', 'Double', '150'),
('s003', 'Curly Fries', 'Single', '100'),
('s004', 'Curly fries', 'Double', '180'),
('s005', 'Poutine', 'Regular', '250'),
('s006', 'Nuggets', '10', '150'),
('s007', 'Nuggets', '20', '280'),
('s008', 'Hash Browns', '10', '150'),
('s009', 'Hash Browns', '20', '280'),
('s010', 'Chicken Balls', '10', '100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`addon_id`);

--
-- Indexes for table `burgers`
--
ALTER TABLE `burgers`
  ADD PRIMARY KEY (`burger_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer_list`
--
ALTER TABLE `customer_list`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `job_candidates`
--
ALTER TABLE `job_candidates`
  ADD PRIMARY KEY (`candidate_name`);

--
-- Indexes for table `job_listings`
--
ALTER TABLE `job_listings`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `sides`
--
ALTER TABLE `sides`
  ADD PRIMARY KEY (`side_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
