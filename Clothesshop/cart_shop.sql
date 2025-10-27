-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2024 at 02:31 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(145, 'Sepatu Aerostreet 2', '225000', 'image/produk/sepatu/s6.jpg', 1, '225000', 'p10025'),
(146, 'Sepatu Aerostreet 3', '225000', 'image/produk/sepatu/s7.jpg', 10, '2250000', 'p10026'),
(147, 'Dragon distro white', '100000', 'image/produk/baju1.jpg', 1, '100000', 'p1000'),
(148, 'T-shirt tokyo black', '40000', 'image/produk/tshirt/baju9.jpg', 1, '40000', 'p1006');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int NOT NULL DEFAULT '1',
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Dragon distro white', '100000', 1, 'image/produk/baju1.jpg', 'p1000'),
(2, 'Angel Distro Black', '100000', 1, 'image/produk/baju2.jpg', 'p1001'),
(3, 'The Spirit Distro White', '100000', 1, 'image/produk/baju3.jpg', 'p1002'),
(4, 'Baju Switer Distro AbuBlack', '100000', 1, 'image/produk/baju4.jpg', 'p1003'),
(5, 'T-shirt I dont speak up', '40000', 1, 'image/produk/tshirt/baju5.jpg', 'p1004'),
(6, 'T-shirt tedy bear', '35000', 1, 'image/produk/tshirt/baju6.jpg', 'p1005'),
(7, 'T-shirt tokyo black', '40000', 1, 'image/produk/tshirt/baju9.jpg', 'p1006'),
(8, 'T-shirt gladiator black-ungu', '55000', 1, 'image/produk/tshirt/baju10.jpg', 'p1007'),
(9, 'T-shirt work hard and dream big', '60000', 1, 'image/produk/tshirt/baju11.jpg', 'p1008'),
(10, 'T-shirt anda butuh uang?', '80000', 1, 'image/produk/tshirt/baju12.jpg', 'p1009'),
(11, 'T-shirt tahanan ayanggg', '50000', 1, 'image/produk/tshirt/baju13.jpg', 'p10010'),
(12, 'T-shirt satt sett', '55000', 1, 'image/produk/tshirt/baju14.jpg', 'p10011'),
(13, 'Celana carga varian blue', '80000', 1, 'image/produk/celana/cg1.jpg', 'p10012'),
(14, 'Celana cargo varian abu gelap', '75000', 1, 'image/produk/celana/cg2.jpg', 'p10013'),
(15, 'Celana cargo varian abu terang', '75000', 1, 'image/produk/celana/cg3.jpg', 'p10014'),
(16, 'Celana cargo varian hijau gelap', '75000', 1, 'image/produk/celana/cg4.jpg', 'p10015'),
(17, 'Celana jeans laki/perempuan blue', '60000', 1, 'image/produk/celana/cj1.jpg', 'p10016'),
(18, 'Celana jeans laki/perempuan black', '65000', 1, 'image/produk/celana/cj2.jpg', 'p10017'),
(19, 'Celana training Nike', '65000', 1, 'image/produk/celana/ct1.jpg', 'p10018'),
(20, 'Celana training FIFA U-17 World Cup', '80000', 1, 'image/produk/celana/ct2.jpg', 'p10019'),
(21, 'Sepatu NIKE 1', '180000', 1, 'image/produk/sepatu/s1.jpg', 'p10020'),
(22, 'Sepatu NIKE 2', '180000', 1, 'image/produk/sepatu/s2.jpg', 'p10021'),
(23, 'Sepatu NIKE 3', '180000', 1, 'image/produk/sepatu/s3.jpg', 'p10022'),
(24, 'Sepatu NIKE 4', '180000', 1, 'image/produk/sepatu/s4.jpg', 'p10023'),
(25, 'Sepatu Aerostreet', '225000', 1, 'image/produk/sepatu/s5.jpg', 'p10024'),
(26, 'Sepatu Aerostreet 2', '225000', 1, 'image/produk/sepatu/s6.jpg', 'p10025'),
(27, 'Sepatu Aerostreet 3', '225000', 1, 'image/produk/sepatu/s7.jpg', 'p10026'),
(28, 'Sepatu Aerostreet 3', '225000', 1, 'image/produk/sepatu/s8.jpg', 'p10027');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
