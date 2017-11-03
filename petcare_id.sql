-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2017 at 12:38 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petcare.id`
--

-- --------------------------------------------------------

--
-- Table structure for table `care_type`
--

CREATE TABLE `care_type` (
  `id_caretype` varchar(10) NOT NULL,
  `name_caretype` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `hp` varchar(13) DEFAULT NULL,
  `user_customer` varchar(15) NOT NULL,
  `city` varchar(40) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `billname` varchar(50) DEFAULT NULL,
  `billaddress` varchar(100) DEFAULT NULL,
  `billcity` varchar(50) DEFAULT NULL,
  `billemail` varchar(30) DEFAULT NULL,
  `billphone` varchar(20) DEFAULT NULL,
  `shipname` varchar(50) DEFAULT NULL,
  `shipaddress` varchar(100) DEFAULT NULL,
  `shipcity` varchar(50) DEFAULT NULL,
  `shipnotes` varchar(50) DEFAULT NULL,
  `payment_stat` char(18) DEFAULT NULL,
  `information` varchar(100) DEFAULT NULL,
  `no_orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `no_orders` int(11) NOT NULL,
  `total` char(18) DEFAULT NULL,
  `order_date` char(18) DEFAULT NULL,
  `shipping_fee` char(18) DEFAULT NULL,
  `user_customer` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_det`
--

CREATE TABLE `order_det` (
  `no_orderdetail` char(18) NOT NULL,
  `quantity` char(18) DEFAULT NULL,
  `unit_price` char(18) DEFAULT NULL,
  `no_orders` int(11) NOT NULL,
  `id_petgrooming` varchar(10) DEFAULT NULL,
  `user_partners` varchar(15) DEFAULT NULL,
  `id_petshop` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `user_partners` varchar(15) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `hp` varchar(13) DEFAULT NULL,
  `partners_name` varchar(50) DEFAULT NULL,
  `wop` varchar(50) DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `postal_code` char(18) DEFAULT NULL,
  `id_caretype` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petgrooming`
--

CREATE TABLE `petgrooming` (
  `id_petgrooming` varchar(10) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `package_name` varchar(50) DEFAULT NULL,
  `user_partners` varchar(15) NOT NULL,
  `id_petcategory` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petshop`
--

CREATE TABLE `petshop` (
  `id_petshop` varchar(10) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `availability` varchar(3) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `id_petcategory` int(11) DEFAULT NULL,
  `user_partners` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pet_category`
--

CREATE TABLE `pet_category` (
  `id_petcategory` int(11) NOT NULL,
  `name_petcategory` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` varchar(10) NOT NULL,
  `review` varchar(300) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `no_orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `user_customer` varchar(15) DEFAULT NULL,
  `user_partners` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `care_type`
--
ALTER TABLE `care_type`
  ADD PRIMARY KEY (`id_caretype`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_customer`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`,`no_orders`),
  ADD KEY `R_15` (`no_orders`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`no_orders`),
  ADD KEY `R_9` (`user_customer`);

--
-- Indexes for table `order_det`
--
ALTER TABLE `order_det`
  ADD PRIMARY KEY (`no_orderdetail`,`no_orders`),
  ADD KEY `R_10` (`no_orders`),
  ADD KEY `R_11` (`id_petgrooming`,`user_partners`),
  ADD KEY `R_12` (`id_petshop`,`user_partners`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`user_partners`),
  ADD KEY `R_18` (`id_caretype`);

--
-- Indexes for table `petgrooming`
--
ALTER TABLE `petgrooming`
  ADD PRIMARY KEY (`id_petgrooming`,`user_partners`),
  ADD KEY `R_2` (`user_partners`),
  ADD KEY `R_4` (`id_petcategory`);

--
-- Indexes for table `petshop`
--
ALTER TABLE `petshop`
  ADD PRIMARY KEY (`id_petshop`,`user_partners`),
  ADD KEY `R_13` (`id_petcategory`),
  ADD KEY `R_14` (`user_partners`);

--
-- Indexes for table `pet_category`
--
ALTER TABLE `pet_category`
  ADD PRIMARY KEY (`id_petcategory`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`,`id`,`no_orders`),
  ADD KEY `R_16` (`id`,`no_orders`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `R_7` (`user_customer`),
  ADD KEY `R_8` (`user_partners`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `R_15` FOREIGN KEY (`no_orders`) REFERENCES `orders` (`no_orders`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `R_9` FOREIGN KEY (`user_customer`) REFERENCES `customer` (`user_customer`);

--
-- Constraints for table `order_det`
--
ALTER TABLE `order_det`
  ADD CONSTRAINT `R_10` FOREIGN KEY (`no_orders`) REFERENCES `orders` (`no_orders`),
  ADD CONSTRAINT `R_11` FOREIGN KEY (`id_petgrooming`,`user_partners`) REFERENCES `petgrooming` (`id_petgrooming`, `user_partners`),
  ADD CONSTRAINT `R_12` FOREIGN KEY (`id_petshop`,`user_partners`) REFERENCES `petshop` (`id_petshop`, `user_partners`);

--
-- Constraints for table `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `R_18` FOREIGN KEY (`id_caretype`) REFERENCES `care_type` (`id_caretype`);

--
-- Constraints for table `petgrooming`
--
ALTER TABLE `petgrooming`
  ADD CONSTRAINT `R_2` FOREIGN KEY (`user_partners`) REFERENCES `partners` (`user_partners`),
  ADD CONSTRAINT `R_4` FOREIGN KEY (`id_petcategory`) REFERENCES `pet_category` (`id_petcategory`);

--
-- Constraints for table `petshop`
--
ALTER TABLE `petshop`
  ADD CONSTRAINT `R_13` FOREIGN KEY (`id_petcategory`) REFERENCES `pet_category` (`id_petcategory`),
  ADD CONSTRAINT `R_14` FOREIGN KEY (`user_partners`) REFERENCES `partners` (`user_partners`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `R_16` FOREIGN KEY (`id`,`no_orders`) REFERENCES `invoice` (`id`, `no_orders`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `R_7` FOREIGN KEY (`user_customer`) REFERENCES `customer` (`user_customer`),
  ADD CONSTRAINT `R_8` FOREIGN KEY (`user_partners`) REFERENCES `partners` (`user_partners`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
