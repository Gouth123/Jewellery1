-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 25, 2022 at 08:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewellery`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangales`
--

CREATE TABLE `bangales` (
  `Bid` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` double(9,2) NOT NULL,
  `shop` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bangales`
--

INSERT INTO `bangales` (`Bid`, `name`, `price`, `shop`, `image`) VALUES
(1, 'Leia Garnet Bangle', 65000.00, 'Laxmi', 'pic3.jpg'),
(3, 'Toned Gold Bangles', 82400.00, 'bhima', 'pic2.jpg'),
(4, 'Dual Toned Gold Bracelet', 45743.00, 'laxmi', 'pic4.jpg'),
(5, 'Sleek Gold Bangle', 50000.00, 'jos', 'pic5.jpg'),
(7, ' Dazzling Glam Bangle', 65000.00, 'jos', 'pic1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(225) NOT NULL,
  `cart_name` varchar(225) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(225) NOT NULL,
  `quantity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_name`, `price`, `image`, `quantity`) VALUES
(13, 'earrings2', 50000.00, 'jos', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` longtext NOT NULL,
  `msg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `msg`) VALUES
(10, 'jhsdjahdj', 'sus@gmail.com', 'jshdjas', 'kjhsdjsahd'),
(11, 'The Gallery', 'gouthampr54@gmail.com', 'warqwr', 'arstsydfuasd'),
(12, 'P R Goutham', '1@gmail.com', 'warqwr', 'waesdrtfyguhRTyuigh');

-- --------------------------------------------------------

--
-- Table structure for table `earrings`
--

CREATE TABLE `earrings` (
  `Eid` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` double(9,2) NOT NULL,
  `shop` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `earrings`
--

INSERT INTO `earrings` (`Eid`, `name`, `price`, `shop`, `image`) VALUES
(5, 'earrings2', 50000.00, 'jos', 'pic4.jpg'),
(7, 'Elegant Filigree Gold Stud Earrings', 65000.00, 'laxmi', 'pic3.jpg'),
(8, 'Glamorous 22 Karat Yellow Gold Earring', 65000.00, 'laxmi', 'pic5.jpg'),
(9, 'Artistic Floral Gold Drop Earrings', 80000.00, 'bhima', 'pic2.jpg'),
(10, 'Asymmetric 18 Karat Yellow Gold earring', 55000.00, 'jos', 'pic1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `nid` int(200) NOT NULL,
  `noti_fication` varchar(200) NOT NULL,
  `ndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `noti_fication`, `ndate`) VALUES
(55, 'jgjg', '2022-07-25'),
(56, 'uyfhv', '2022-07-27'),
(57, 'ytfghjk', '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `oid` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `number` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `method` varchar(225) NOT NULL,
  `flat` varchar(225) NOT NULL,
  `street` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `pin_code` varchar(225) NOT NULL,
  `total_product` float NOT NULL,
  `price_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`oid`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_product`, `price_total`) VALUES
(1, 'rahul', '929292929', '5@gmail.com', 'cash on delivery', 'ewrtdyfu, 2424242', '2424242', 'mangalore', 'dk', 'India', '575001', 0, 30),
(3, 'rahul', '929292929', '5@gmail.com', 'cash on delivery', 'ewrtdyfu, 2424242', '2424242', 'mangalore', 'dk', 'India', '575001', 0, 50);

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `oid` int(9) NOT NULL,
  `name` varchar(225) NOT NULL,
  `number` int(10) NOT NULL,
  `email` varchar(225) NOT NULL,
  `method` varchar(225) NOT NULL,
  `flat` varchar(225) NOT NULL,
  `street` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `total_product` double(10,5) NOT NULL,
  `price_total` double(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`oid`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_product`, `price_total`) VALUES
(1, 'rahul', 929292929, '5@gmail.com', 'cash on delivery', 'ewrtdyfu, 2424242', '2424242', 'mangalore', 'dk', 'India', 575001, 0.00000, 6.00000),
(2, 'rahul', 929292929, '5@gmail.com', 'cash on delivery', 'ewrtdyfu, ', 'khjghfdsdff', 'mangalore', 'dk', 'India', 575001, 0.00000, 80.00000),
(3, 'rahul', 929292929, '5@gmail.com', 'credit cart', 'ewrtdyfu', '2424242', 'mangalore', 'dk', 'India', 575001, 0.00000, 50.00000);

-- --------------------------------------------------------

--
-- Table structure for table `piercing`
--

CREATE TABLE `piercing` (
  `p_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(225) NOT NULL,
  `persons` varchar(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `piercing`
--

INSERT INTO `piercing` (`p_id`, `name`, `email`, `persons`, `date`) VALUES
(40, 'rahul', '5@gmail.com', '2', '2022-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `queryid` int(11) NOT NULL,
  `cid` int(255) NOT NULL,
  `query` longtext NOT NULL,
  `qdate` date NOT NULL,
  `rdate` date NOT NULL,
  `reply` longtext NOT NULL,
  `qstatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`queryid`, `cid`, `query`, `qdate`, `rdate`, `reply`, `qstatus`) VALUES
(1, 2, 'problem', '2021-01-09', '2021-02-06', 'we will solve it\r\n', 'replied');

-- --------------------------------------------------------

--
-- Table structure for table `rings`
--

CREATE TABLE `rings` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` double(9,2) NOT NULL,
  `shop` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rings`
--

INSERT INTO `rings` (`id`, `name`, `price`, `shop`, `image`) VALUES
(20, 'Sophisticated Diamond Ring', 80000.00, 'jos', 'pic1.png'),
(27, 'Bold Stylish Diamond Ring For Men', 55100.00, 'bhima', 'pic5.png'),
(28, 'Splendid 18 Karat Yellow Gold And Diamond Floral Ring', 72400.00, 'bhima', 'pic2.png'),
(29, 'Grand 22 Karat Yellow Gold Finger Ring', 45743.00, 'laxmi', 'pic4.png'),
(30, 'Eclectic Modern Ring', 76000.00, 'laxmi', 'pic3.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `uid` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `user_type` varchar(225) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`uid`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'rahul', 'p@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'user'),
(4, 'mike', '1@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'user'),
(7, 'Goutham', 'gouthampr54@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(8, 'goutham', '1@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'vendor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangales`
--
ALTER TABLE `bangales`
  ADD PRIMARY KEY (`Bid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `earrings`
--
ALTER TABLE `earrings`
  ADD PRIMARY KEY (`Eid`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `piercing`
--
ALTER TABLE `piercing`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`queryid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `rings`
--
ALTER TABLE `rings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangales`
--
ALTER TABLE `bangales`
  MODIFY `Bid` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `earrings`
--
ALTER TABLE `earrings`
  MODIFY `Eid` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `nid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `oid` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `oid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `piercing`
--
ALTER TABLE `piercing`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `queryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rings`
--
ALTER TABLE `rings`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `uid` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `queries`
--
ALTER TABLE `queries`
  ADD CONSTRAINT `queries_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `user_form` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
