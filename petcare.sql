-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jan 2018 pada 15.25
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

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
-- Struktur dari tabel `care_type`
--

CREATE TABLE `care_type` (
  `id_caretype` varchar(10) NOT NULL DEFAULT '',
  `name_caretype` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `care_type`
--

INSERT INTO `care_type` (`id_caretype`, `name_caretype`) VALUES
('1', 'petshop'),
('2', 'grooming'),
('3', 'petshop+grooming');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `username` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `hp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`username`, `password`, `name`, `email`, `address`, `city`, `postal_code`, `hp`) VALUES
('andoviz', 'andovi', 'Andovi Izkar Z', 'izkarvix@yahoo.com', 'Petukangan Utara', 'Jakarta Selatan', 12260, '081233390192'),
('arbi19', 'arbi19', 'Muhammad Arbi', 'marbi19@gmail.com', 'Jl. RS. Fatmawati', 'Jakarta Selatan', 12450, '08992817281'),
('cobacoba', '1621a5dc746d5d19665ed742b2ef9736', 'coba', 'coba@gmail.com', 'cobacoba', 'Tangerang', 12457, '083781554433'),
('donimuh', 'doni123', 'Muhammad Doni Efrizal', 'mudon12@gmail.com', 'Cipayung', 'Jakarta Timur', 13890, '085678125439'),
('friz99', 'friz99', 'Fransisco Zayk', 'frizayk@gmail.com', 'Pademangan Barat', 'Jakarta Barat', 14420, '083878216573'),
('laramureff', 'latifah', 'Latifah Ramadhana M E', 'latifah_effendhi@yahoo.com', 'Komp. Kodam Jaya No. 5', 'Jakarta Timur', 13840, '085716179705'),
('lrme72', 'ae5e08bbbc747d1d85a1373ddab74435', 'Latifah', 'latifahrme@gmail.com', 'Cipayung', 'Jakarta Timur', 13840, '085716179705'),
('maris1', 'maris1', 'Mari Sumirah', 'maris1@ymail.com', 'Rawa Badak Utara', 'Jakarta Utara', 14230, '087782911352'),
('meisu19', 'meisu19', 'Meiling Susil', 'meimei19@gmail.com', 'Mangga Dua ', 'Jakarta Pusat', 10730, '082182566418'),
('mujahid18595', 'Syuhada18', 'Nanang', 'k.rezkananang@gmail.com', 'Cipete', 'Jaksel', NULL, '083891664433'),
('nanang', '89375ad4aa7969d2c6dc13b9d3f52bbf', 'Nanang', 'k.rezkananang@gmail.com', 'Karawang', 'Jakarta Selatan', 17710, '087825149023'),
('smile182', 'dd56c79463d6386abcfed1892c8d3ee1', 'Smile', 'smile@gmail.com', 'Bekasi', 'Jakarta Pusat', 17710, '3234343434'),
('tia21', 'tia21', 'Tiara Mutmainah', 'titia21@yahoo.co.id', 'Muara Gembong', 'Bekasi Barat', 17730, '087818872912');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `no_invoice` int(10) NOT NULL,
  `payment_date` date NOT NULL,
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
  `no_invoicedetail` int(10) NOT NULL,
  `no_orders` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice_det`
--

CREATE TABLE `invoice_det` (
  `no_invoicedetail` int(10) NOT NULL,
  `caretype` varchar(30) NOT NULL,
  `quantity` int(5) NOT NULL,
  `unit_price` int(30) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `no_orders` int(10) NOT NULL,
  `no_orderdetail` int(10) NOT NULL,
  `total` int(30) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `grooming_date` date NOT NULL,
  `grooming_time` varchar(10) NOT NULL,
  `shipping_fee` int(30) DEFAULT NULL,
  `user_customer` varchar(15) DEFAULT NULL,
  `status_order` varchar(200) NOT NULL,
  `feedback_mitra` varchar(50000) NOT NULL,
  `feedback_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`no_orders`, `no_orderdetail`, `total`, `order_date`, `grooming_date`, `grooming_time`, `shipping_fee`, `user_customer`, `status_order`, `feedback_mitra`, `feedback_user`) VALUES
(1, 1, 250000, '2017-12-10', '2017-12-13', '11:30AM', NULL, 'laramureff', 'Diterima Dengan Alasan', 'akan datang terlambat', 'diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_det`
--

CREATE TABLE `order_det` (
  `no_orderdetail` int(10) NOT NULL,
  `quantity` char(18) DEFAULT NULL,
  `unit_price` char(18) DEFAULT NULL,
  `category` varchar(20) NOT NULL,
  `id_petgrooming` varchar(10) DEFAULT NULL,
  `user_partners` varchar(15) DEFAULT NULL,
  `id_petshop` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_det`
--

INSERT INTO `order_det` (`no_orderdetail`, `quantity`, `unit_price`, `category`, `id_petgrooming`, `user_partners`, `id_petshop`) VALUES
(1, '1', '250000', '', 'z5', 'RDSM_14', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `user_partners` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(30) DEFAULT NULL,
  `hp` varchar(13) DEFAULT NULL,
  `partners_name` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `postal_code` char(18) DEFAULT NULL,
  `wop` varchar(5000) DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `file_gambar` varchar(25) NOT NULL,
  `id_caretype` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `partners`
--

INSERT INTO `partners` (`user_partners`, `password`, `email`, `hp`, `partners_name`, `address`, `city`, `postal_code`, `wop`, `owner`, `file_gambar`, `id_caretype`) VALUES
('ani12345', 'e0222f780c477b5881b0258ced0043fd', 'ani@gmail.com', '087825149023', 'Ani corp', 'Karawang', 'Jakarta Selatan', '42210', '   Kamis   pukul 10:00 PM sampai 10:30 AM', 'Ani', '', NULL),
('drei', 'drei123', 'drei@gmail.com', '089666555444', 'Nanang Care', 'Jl. Dharma Wangsa, Cipete Utara, Kebayoran Baru, Jakarta Selatan.', 'Jakarta Selatan', '11540', 'Senin-Jumat, 09.00-17.00 WIB', 'Nanang', 'logo1.jpg', '2'),
('eins', 'ein123', 'eins@gmail.com', '089888777666', 'Estu Care', 'Jl. Damai Raya, Cipete Utara, Kebayoran Baru, Jakarta Selatan.', 'Jakarta Selatan', '10250', 'Senin-Jumat, 09.00-17.00 WIB', 'Estu', 'eurekapetgrooming.png', '3'),
('funf', 'funf123', 'funf@gmail.com', '08955544433', 'Trandy Care', 'Jl. Kirai, Cipete Utara, Kebayoran Baru, Jakarta Selatan.', 'Jakarta Selatan', '12810', 'Senin-Jumat, 09.00-17.00 WIB', 'Trandy', '', '3'),
('iqbal shop', '5c2fb951458b57e8e049d48a55cdddad', 'comp@yahoo.com', '085692288145', 'iqbal hua hua', 'Jalan Mampang prapatan 2 no.18 Rt.011 RW.005 Jakarta Selatan', 'Jakarta Selatan', '12790', 'Senin Selasa Rabu Kamis Jumat  pukul 10:00 AM sampai 12:00 PM', 'iqbal', '', NULL),
('jakpetz', 'jakpetz', NULL, '(021)71791363', 'Jakpetz', 'Jalan Kemang Selatan Raya No. 125, Bangka, Mampang Prapatan, RT11 / RW4, Ciandak Timur', 'Jakarta Selatan', '12730', '9 AM - 7 PM', NULL, '', '2'),
('mich123', 'bcadd0eea68edc705196e1f0b748801b', 'riefqayx@yahoo.com', '085692288145', 'Rifqi PetCare', 'Jalan Mampang Prapatan 2 no.18 rt 011, rw 05 jakarta selatan', 'Jakarta Selatan', '12790', 'Senin Selasa     Minggupukul 12:00 PM sampai 10:00', 'test', '', NULL),
('mukti123', 'ad2512a09403babac72f95947bca42eb', 'mukti@gmail.com', '087825149023', 'Mukti care', 'Bekasi', 'Jakarta Selatan', '42210', 'Senin Selasa     pukul 08:00 AM sampai 05:00 PM', 'Mukti', '', NULL),
('oppipet25', 'oppipet1', NULL, '087889206888', 'Oppipet Salon & Grooming', 'Jl. Perumahan Green Garden, RT09/RW10, Kedoya Utara, Kebon Jeruk', 'Jakarta Barat', '11520', '9 AM - 6 PM', NULL, '', '2'),
('RDSM_14', 'bcadd0eea68edc705196e1f0b748801b', 'riefqayx@yahoo.com', '085692288145', 'Rifqi PetCare', 'Mampang Prapatan 2. No. 22, Rt.011 Rw.05 Jakarta Selatan', 'Jakarta Selatan', '12790', 'Setiap Hari Pukul 10.00-18.00', 'Rifqi Dhiyaulhaq Sami Miru', '', '3'),
('RDSM_14_13', 'bcadd0eea68edc705196e1f0b748801b', 'riefqayx@yahoo.com', '085692288145', 'Rifqi PetCare', 'Jalan Mampang Prapatan 2 no.18 rt 011, rw 05 jakarta selatan', 'Jakarta Selatan', '12790', 'Senin Selasa Rabu Kamis   pukul 08:00 AM sampai 08', 'Rifqi', '', NULL),
('rezka18', 'b9fb71328243dbc639f719740306f17b', 'rezka@gmail.com', '083891664433', 'Rezka Comp', 'rezka.comp@gmail.com', 'Jakarta Selatan', '12790', 'Setiap Hari Pukul 10.00-18.00', 'Rezka', '', '2'),
('rifqi1234', '3157cb760df14e9f8d366b326d8efc83', 'riefqayx@yahoo.com', '085692288145', 'Rifqi PetCare', 'rezka.comp@gmail.com', 'Jakarta Selatan', '12790', 'Senin Selasa Rabu Kamis   pukul 07:00 PM sampai 10:00 PM', 'Rifqi', '', NULL),
('saya12345', '899bcbe98b29c79199d08394ef2118f0', 'saya@gmail.com', '0823283232332', 'saya', 'saya', 'Jakarta Timur', '12122', 'Senin      pukul 10:00 PM sampai 08:00 AM', 'saya', '', NULL),
('shaleh123', 'f42466e789bdb0909ad1d01ef6f66e6e', 'shaleh@gmail.com', '087825149023', 'Shaleh Petcare', 'Bekasi', 'Jakarta Selatan', '42210', 'Senin Selasa Rabu Kamis Jumat  pukul 08:00 AM sampai 09:30 PM', 'Shaleh', '', NULL),
('test_123', 'cc03e747a6afbbcbf8be7668acfebee5', 'riefqayx@yahoo.com', '085692288145', 'tester123', 'Jalan Mampang Prapatan 2 no.18 rt 011, rw 05 jakarta selatan', 'Jakarta Selatan', '12790', ' Selasa Rabu Kamis Jumat  pukul 07:00 AM sampai 10:00 PM', 'test', '', NULL),
('vier', 'vier123', 'vier@gmail.com', '089555444333', 'Rifqi Care', 'Jl. Brawijaya, Cipete Utara, Kebayoran Baru, Jakarta Selatan.', 'Jakarta Selatan', '11560', 'Senin-Jumat, 09.00-17.00 WIB', 'Rifqi', 'petcareid.png', '1'),
('zwei', 'zwei123', 'zwei@gmail.com', '089777666555', 'Dzikri Care', 'Jl. Sawo Bawah, Cipete Utara, Kebayoran Baru, Jakarta Selatan.', 'Jakarta Selatan', '10550', 'Senin-Jumat, 09.00-17.00 WIB', 'Dzikri', '', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petgrooming`
--

CREATE TABLE `petgrooming` (
  `id_petgrooming` varchar(10) NOT NULL DEFAULT '',
  `price` int(11) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `package_name` varchar(50) DEFAULT NULL,
  `petcategory` varchar(15) NOT NULL,
  `user_partners` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petgrooming`
--

INSERT INTO `petgrooming` (`id_petgrooming`, `price`, `description`, `package_name`, `petcategory`, `user_partners`, `status`) VALUES
('z1', 150000, 'Memandikan Anjing untuk menghilangkan kutu', 'Mandi Kutu', 'Anjing', 'Ani', 'Belum Dikonfirmasi'),
('z10', 50000, 'Menggunting kuku hewan peliharaan', 'Grooming Kuku', 'Anjing', 'Shaleh', 'Konfirmasi'),
('z11', 50000, 'Membersihkan Telinga', 'Groomming Telinga', 'Kucing', 'Ani', 'Konfirmasi'),
('z2', 100000, 'Memandikan Kucing', 'Mandi Biasa', 'Kucing', 'Shaleh', 'Konfirmasi'),
('z3', 300000, 'Mandi dengan menggunakan shampoo khusus untuk menjaga kesehatan bulu dan kulit ', 'Mandi Sehat', 'Kucing', 'Ani', 'Konfirmasi'),
('z4', 250000, 'Paket Bersih bersih', 'Paket Bersih', 'Kucing', 'RDSM_14', 'Belum Dikonfirmasi'),
('z5', 50000, 'Paket Mandi Alami', 'Paket Bersih', 'Anjing', 'RDSM_14', 'Belum Dikonfirmasi'),
('z6', 50000, 'Sama dengan Paket Basic Grooming, tetapi menggunakan medicated shampoo', 'Mandi Obat / Obat Kutu', 'Anjing', 'Mukti', 'Konfirmasi'),
('z7', 70000, 'Mencukur botak bulu kucing', 'Cukur Botak', 'Kucing', 'Mukti', 'Konfirmasi'),
('z8', 80000, 'Membasmi kutu pada hewan peliharaan', 'Grooming Kutu', 'Kucing', 'Mukti', 'Konfirmasi'),
('z9', 100000, 'Membersihkan Jamur', 'Grooming Jamur', 'Anjing', 'Shaleh', 'Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petshop`
--

CREATE TABLE `petshop` (
  `id_petshop` varchar(10) NOT NULL DEFAULT '',
  `price` int(11) DEFAULT NULL,
  `availability` varchar(3) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `id_petcategory` int(11) DEFAULT NULL,
  `user_partners` varchar(15) NOT NULL DEFAULT '',
  `file_gambar` varchar(30) NOT NULL DEFAULT '',
  `id_shopcategory` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petshop`
--

INSERT INTO `petshop` (`id_petshop`, `price`, `availability`, `description`, `product_name`, `id_petcategory`, `user_partners`, `file_gambar`, `id_shopcategory`) VALUES
('A1', 50000, '20', 'Makanan Kucing', 'Makanan Kucing A', 1, 'drei', 'm1.jpg', 'FD1'),
('A10', 70000, '20', 'Makanan Anjing', 'Makanan Anjing E', 2, 'zwei', 'm9.jpg', 'FD1'),
('A2', 80000, '10', 'Makanan Kucing', 'Makanan Kucing B', 1, 'eins', 'm4.jpg', 'FD1'),
('A3', 45000, '50', 'Makanan Kucing', 'Makanan Kucing C', 1, 'funf', 'm3.jpg', 'FD1'),
('A4', 55000, '15', 'Makanan Kucing', 'Makanan Kucing D', 1, 'vier', 'm2.jpg', 'FD1'),
('A5', 30000, '10', 'Makanan Kucing', 'Makanan Kucing E', 1, 'zwei', 'm7.jpg', 'FD1'),
('A6', 90000, '100', 'Makanan Anjing', 'Makanan Anjing A', 2, 'drei', 'm10.jpeg', 'FD1'),
('A7', 100000, '25', 'Makanan Anjing', 'Makanan Anjing B', 2, 'eins', 'm11.jpg', 'FD1'),
('A8', 25000, '12', 'Makanan Anjing', 'Makanan Anjing C', 2, 'funf', 'm12.jpg', 'FD1'),
('A9', 65000, '120', 'Makanan Anjing', 'Makanan Anjing D', 2, 'vier', 'm14.jpg', 'FD1'),
('B1', 30000, '135', 'Aksesoris', 'Aksesoris Kucing', 1, 'drei', 'a4.jpg', 'AC1'),
('B2', 99000, '210', 'Aksesoris', 'Aksesoris Anjing', 2, 'eins', 'a13.jpg', 'AC1'),
('C1', 200000, '20', 'Vitamin', 'Vitamin Kucing', 1, 'vier', 'v1.jpg', 'VT1'),
('C2', 183000, '120', 'Vitamin', 'Vitamin Anjing', 2, 'funf', 'v4.jpg', 'VT1'),
('C3', 250000, '10', 'Vitamin', 'Vitamin Anjing dan Kucing', 3, 'eins', 'v7.jpg', 'VT1'),
('D1', 210000, '7', 'Tools', 'Tools A', 1, 'funf', 't2.jpg', 'TL1'),
('D2', 120000, '10', 'Tools', 'Tools A', 2, 'zwei', 't3.jpg', 'TL1'),
('E1', 200000, '10', 'Mainan ini dapat melatih peliharaan Anda agar lebih tangkas.', 'Mainan Anjing A', 2, 'zwei', 'm4.jpg', 'TY1'),
('E2', 290000, '5', 'Mainan ini dapat mengasah ketajaman kuku peliharaan Anda tanpa harus merusak perabotan di rumah', 'Mainan Kucing A', 1, 'vier', 'm10.jpg', 'TY1'),
('F1', 175000, '10', 'Shampoo untuk Anjing', 'Shampo Anjing', 2, 'vier', 's4.jpg', 'SP1'),
('F2', 150000, '10', 'Shampoo untuk Kucing', 'Shampo Kucing', 1, 'vier', 's5.jpg', 'SP1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pet_category`
--

CREATE TABLE `pet_category` (
  `id_petcategory` int(11) NOT NULL DEFAULT '0',
  `name_petcategory` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pet_category`
--

INSERT INTO `pet_category` (`id_petcategory`, `name_petcategory`) VALUES
(1, 'Kucing'),
(2, 'Anjing'),
(3, 'Kucing dan Anjing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_review` varchar(10) NOT NULL DEFAULT '',
  `review` varchar(300) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `no_invoice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(3, 'RDSM_14', 'bcadd0eea68edc705196e1f0b748801b', 3),
(5, 'admin', '2d84a6fa71f064b361c3877e9daa5809', 1),
(6, 'lrme72', 'ae5e08bbbc747d1d85a1373ddab74435', 2),
(7, 'rezka18', 'b9fb71328243dbc639f719740306f17b', 3),
(8, 'mich123', 'bcadd0eea68edc705196e1f0b748801b', 3),
(9, 'RDSM_14_13', 'bcadd0eea68edc705196e1f0b748801b', 3),
(10, 'rifqi1234', '3157cb760df14e9f8d366b326d8efc83', 3),
(11, 'iqbal shop', '5c2fb951458b57e8e049d48a55cdddad', 3),
(12, 'test_123', 'cc03e747a6afbbcbf8be7668acfebee5', 3),
(13, 'nanang', '89375ad4aa7969d2c6dc13b9d3f52bbf', 2),
(14, 'smile182', 'dd56c79463d6386abcfed1892c8d3ee1', 2),
(15, 'saya12345', '899bcbe98b29c79199d08394ef2118f0', 3),
(16, 'cobacoba', '1621a5dc746d5d19665ed742b2ef9736', 2),
(17, 'ani12345', 'e0222f780c477b5881b0258ced0043fd', 3),
(18, 'shaleh123', 'f42466e789bdb0909ad1d01ef6f66e6e', 3),
(19, 'mukti123', 'ad2512a09403babac72f95947bca42eb', 3);

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
  ADD PRIMARY KEY (`no_invoice`),
  ADD KEY `no_orders` (`no_orders`),
  ADD KEY `no_invoicedetail` (`no_invoicedetail`);

--
-- Indexes for table `invoice_det`
--
ALTER TABLE `invoice_det`
  ADD PRIMARY KEY (`no_invoicedetail`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`no_orders`),
  ADD KEY `R_9` (`user_customer`),
  ADD KEY `no_orderdetail` (`no_orderdetail`);

--
-- Indexes for table `order_det`
--
ALTER TABLE `order_det`
  ADD PRIMARY KEY (`no_orderdetail`),
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
  ADD KEY `R_2` (`user_partners`);

--
-- Indexes for table `petshop`
--
ALTER TABLE `petshop`
  ADD PRIMARY KEY (`id_petshop`,`user_partners`),
  ADD KEY `R_14` (`user_partners`),
  ADD KEY `R_13` (`id_petcategory`),
  ADD KEY `R_16` (`id_shopcategory`);

--
-- Indexes for table `pet_category`
--
ALTER TABLE `pet_category`
  ADD PRIMARY KEY (`id_petcategory`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `no_invoice` (`no_invoice`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `no_invoice` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice_det`
--
ALTER TABLE `invoice_det`
  MODIFY `no_invoicedetail` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `no_orders` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order_det`
--
ALTER TABLE `order_det`
  MODIFY `no_orderdetail` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`no_orders`) REFERENCES `orders` (`no_orders`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`no_invoicedetail`) REFERENCES `invoice_det` (`no_invoicedetail`);

--
-- Ketidakleluasaan untuk tabel `order_det`
--
ALTER TABLE `order_det`
  ADD CONSTRAINT `R_11` FOREIGN KEY (`id_petgrooming`,`user_partners`) REFERENCES `petgrooming` (`id_petgrooming`, `user_partners`),
  ADD CONSTRAINT `R_12` FOREIGN KEY (`id_petshop`,`user_partners`) REFERENCES `petshop` (`id_petshop`, `user_partners`);

--
-- Ketidakleluasaan untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `R_18` FOREIGN KEY (`id_caretype`) REFERENCES `care_type` (`id_caretype`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
