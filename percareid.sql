-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 10:04 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `percareid`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(10) NOT NULL,
  `username` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `date` date NOT NULL,
  `shipping` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cartdetail`
--

CREATE TABLE `cartdetail` (
  `id_cartdetail` int(10) NOT NULL,
  `id_cart` int(10) NOT NULL,
  `quantity` int(50) NOT NULL,
  `id_petshop` int(10) NOT NULL,
  `id_grooming` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_cart` int(11) NOT NULL,
  `billcountry` varchar(50) NOT NULL,
  `billfirstname` varchar(50) NOT NULL,
  `billlastname` varchar(50) NOT NULL,
  `billcity` varchar(50) NOT NULL,
  `billaddress` text NOT NULL,
  `billemail` varchar(50) NOT NULL,
  `billphone` varchar(20) NOT NULL,
  `shipcountry` varchar(50) NOT NULL,
  `shipfirstname` varchar(50) NOT NULL,
  `shiplastname` varchar(50) NOT NULL,
  `shipaddress` text NOT NULL,
  `shipcity` varchar(50) NOT NULL,
  `shipnotes` text NOT NULL,
  `payment_status` tinyint(1) NOT NULL,
  `information` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `location` varchar(30) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grooming`
--

CREATE TABLE `grooming` (
  `id_grooming` int(10) NOT NULL,
  `id_gcategory` int(10) NOT NULL,
  `id_vendor` int(10) NOT NULL,
  `availability` int(50) NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groomingcategory`
--

CREATE TABLE `groomingcategory` (
  `id_gcategory` int(10) NOT NULL,
  `id_grooming` int(10) NOT NULL,
  `name_gcategory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petshop`
--

CREATE TABLE `petshop` (
  `id_petshop` int(10) NOT NULL,
  `id_pcategory` int(10) NOT NULL,
  `id_vendor` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `availability` int(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petshopcategory`
--

CREATE TABLE `petshopcategory` (
  `id_pcategory` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `name_pcategory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `username` int(20) NOT NULL,
  `id_petshop` int(11) NOT NULL,
  `id_grooming` int(10) NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(10) NOT NULL,
  `vendorname` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `wop_mulai` varchar(6) NOT NULL,
  `wop_selesai` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `cartdetail`
--
ALTER TABLE `cartdetail`
  ADD PRIMARY KEY (`id_cartdetail`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `grooming`
--
ALTER TABLE `grooming`
  ADD PRIMARY KEY (`id_grooming`);

--
-- Indexes for table `groomingcategory`
--
ALTER TABLE `groomingcategory`
  ADD PRIMARY KEY (`id_gcategory`);

--
-- Indexes for table `petshop`
--
ALTER TABLE `petshop`
  ADD PRIMARY KEY (`id_petshop`);

--
-- Indexes for table `petshopcategory`
--
ALTER TABLE `petshopcategory`
  ADD PRIMARY KEY (`id_pcategory`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
