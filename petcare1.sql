-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 04:45 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `care_type`
--

CREATE TABLE IF NOT EXISTS `care_type` (
  `id_caretype` varchar(10) NOT NULL,
  `name_caretype` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `care_type`
--

INSERT INTO `care_type` (`id_caretype`, `name_caretype`) VALUES
('1', 'petshop'),
('2', 'grooming'),
('3', 'petshop+grooming');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `hp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `password`, `name`, `email`, `address`, `city`, `postal_code`, `hp`) VALUES
('mujahid18595', 'Syuhada18', 'Nanang', 'k.rezkananang@gmail.com', 'Cipete', 'Jaksel', 11201, '083891664433');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
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

CREATE TABLE IF NOT EXISTS `orders` (
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

CREATE TABLE IF NOT EXISTS `order_det` (
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

CREATE TABLE IF NOT EXISTS `partners` (
  `user_partners` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
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

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`user_partners`, `password`, `email`, `address`, `hp`, `partners_name`, `wop`, `owner`, `city`, `postal_code`, `id_caretype`) VALUES
('drei', 'drei123', 'drei@gmail.com', 'Jl. Dharma Wangsa, Cipete Utara, Kebayoran Baru, Jakarta Selatan.', '089666555444', 'Nanang Care', 'Senin-Jumat, 09.00-17.00 WIB', 'Nanang', 'Jakarta Selatan', '11540', '2'),
('eins', 'ein123', 'eins@gmail.com', 'Jl. Damai Raya, Cipete Utara, Kebayoran Baru, Jakarta Selatan.', '089888777666', 'Estu Care', 'Senin-Jumat, 09.00-17.00 WIB', 'Estu', 'Jakarta Selatan', '10250', '3'),
('funf', 'funf123', 'funf@gmail.com', 'Jl. Kirai, Cipete Utara, Kebayoran Baru, Jakarta Selatan.', '08955544433', 'Trandy Care', 'Senin-Jumat, 09.00-17.00 WIB', 'Trandy', 'Jakarta Selatan', '12810', '3'),
('vier', 'vier123', 'vier@gmail.com', 'Jl. Brawijaya, Cipete Utara, Kebayoran Baru, Jakarta Selatan.', '089555444333', 'Rifqi Care', 'Senin-Jumat, 09.00-17.00 WIB', 'Rifqi', 'Jakarta Selatan', '11560', '1'),
('zwei', 'zwei123', 'zwei@gmail.com', 'Jl. Sawo Bawah, Cipete Utara, Kebayoran Baru, Jakarta Selatan.', '089777666555', 'Dzikri Care', 'Senin-Jumat, 09.00-17.00 WIB', 'Dzikri', 'Jakarta Selatan', '10550', '1');

-- --------------------------------------------------------

--
-- Table structure for table `petgrooming`
--

CREATE TABLE IF NOT EXISTS `petgrooming` (
  `id_petgrooming` varchar(10) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `package_name` varchar(50) DEFAULT NULL,
  `user_partners` varchar(15) NOT NULL,
  `id_petcategory` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petgrooming`
--

INSERT INTO `petgrooming` (`id_petgrooming`, `price`, `description`, `package_name`, `user_partners`, `id_petcategory`) VALUES
('z1', 150000, 'Memandikan Anjing untuk menghilangkan kutu', 'Mandi Kutu', 'drei', 2),
('z2', 100000, 'Memandikan Kucing', 'Mandi Biasa', 'zwei', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petshop`
--

CREATE TABLE IF NOT EXISTS `petshop` (
  `id_petshop` varchar(10) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `availability` varchar(3) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `id_petcategory` int(11) DEFAULT NULL,
  `user_partners` varchar(15) NOT NULL,
  `file_gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petshop`
--

INSERT INTO `petshop` (`id_petshop`, `price`, `availability`, `description`, `product_name`, `id_petcategory`, `user_partners`, `file_gambar`) VALUES
('A1', 50000, '20', 'Makanan Kucing ', 'Makanan Kucing A', 1, 'drei', ''),
('A10', 70000, '20', 'Makanan Anjing ', 'Makanan Anjing E', 2, 'zwei', ''),
('A2', 80000, '10', 'Makanan Kucing', 'Makanan Kucing B', 1, 'eins', ''),
('A3', 45000, '50', 'Makanan Kucing', 'Makanan Kucing C', 1, 'funf', ''),
('A4', 55000, '15', 'Makanan Kucing', 'Makanan Kucing D', 1, 'vier', ''),
('A5', 30000, '10', 'Makanan Kucing', 'Makanan Kucing E', 1, 'zwei', ''),
('A6', 90000, '100', 'Makanan Anjing', 'Makanan Anjing A', 2, 'drei', ''),
('A7', 100000, '25', 'Makanan Anjing ', 'Makanan Anjing B', 2, 'eins', ''),
('A8', 25000, '12', 'Makanan Anjing', 'Makanan Anjing C', 2, 'funf', ''),
('A9', 65000, '120', 'Makanan Anjing', 'Makanan Anjing D', 2, 'vier', ''),
('B1', 30000, '135', 'Aksesoris', 'Aksesoris Kucing', 1, 'drei', ''),
('B2', 99000, '210', 'Aksesoris ', 'Aksesoris Anjing', 2, 'eins', ''),
('C1', 200000, '20', 'Vitamin', 'Vitamin Kucing', 1, 'vier', ''),
('C2', 183000, '120', 'Vitamin ', 'Vitamin Anjing', 2, 'funf', ''),
('D1', 210000, '7', 'Tools', 'Tools A', 1, 'funf', ''),
('D2', 120000, '10', 'Tools', 'Tools A', 2, 'zwei', '');

-- --------------------------------------------------------

--
-- Table structure for table `pet_category`
--

CREATE TABLE IF NOT EXISTS `pet_category` (
  `id_petcategory` int(11) NOT NULL,
  `name_petcategory` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_category`
--

INSERT INTO `pet_category` (`id_petcategory`, `name_petcategory`) VALUES
(1, 'Kucing'),
(2, 'Aning');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
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

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(10) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `user_customer` varchar(15) DEFAULT NULL,
  `user_partners` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `user_customer`, `user_partners`) VALUES
('q1', 'Nanang', 'pusing', 'customer', 'mujahid18595', NULL),
('x1', 'Dzikrock', 'puyeng', 'partner', NULL, 'eins');

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
  ADD PRIMARY KEY (`username`);

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
  ADD CONSTRAINT `R_9` FOREIGN KEY (`user_customer`) REFERENCES `customer` (`username`);

--
-- Constraints for table `order_det`
--
ALTER TABLE `order_det`
  ADD CONSTRAINT `R_10` FOREIGN KEY (`no_orders`) REFERENCES `orders` (`no_orders`),
  ADD CONSTRAINT `R_11` FOREIGN KEY (`id_petgrooming`, `user_partners`) REFERENCES `petgrooming` (`id_petgrooming`, `user_partners`),
  ADD CONSTRAINT `R_12` FOREIGN KEY (`id_petshop`, `user_partners`) REFERENCES `petshop` (`id_petshop`, `user_partners`);

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
  ADD CONSTRAINT `R_16` FOREIGN KEY (`id`, `no_orders`) REFERENCES `invoice` (`id`, `no_orders`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `R_7` FOREIGN KEY (`user_customer`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `R_8` FOREIGN KEY (`user_partners`) REFERENCES `partners` (`user_partners`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
