-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 06:13 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `id` int(11) NOT NULL,
  `bName` varchar(20) NOT NULL,
  `mName` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`id`, `bName`, `mName`, `phone`, `email`, `password`, `status`) VALUES
(1, 'Dhaka', 'Pretty', '01746247998', 'sazedanur160@gmail.com', '83ae7eb07e113cd64ad9322be712a11c', 1),
(2, 'Mirpur', 'Pretty', '01746247998', 'sazedanur160@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(7, 'Mirpur', 'Kamrun Nahar', '01624465947', 'sazedanur160@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(8, 'Dhaka', 'Kamrun Nahar', '01624465947', 'cannonfighters@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `des` text NOT NULL,
  `size` varchar(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `barcode` varchar(20) NOT NULL,
  `costPrice` float NOT NULL,
  `salePrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `des`, `size`, `color`, `barcode`, `costPrice`, `salePrice`) VALUES
(5, 'T-Shirt', ' T-Shirt', '32', '#ffffff', '202021', 1500, 2500),
(6, 'Panjabi', ' Panjabi', '36', '#5717cf', '202020', 1500, 2500),
(7, 'Pant', '  Pant', '42', '#ffffff', '202014', 1500, 2500),
(8, 'Pant', 'Boys', '40', '#000000', '202012', 1000, 2000),
(9, 'Pant', 'Girls', '40', '#000000', '202024', 1200, 3000),
(11, 'Tops', 'Ladies', '32', '#3017ab', '202027', 1000, 2200),
(12, 'T-shrit', 'Girls', '12', '#ad9090', '202026', 500, 1200),
(13, 'Pajama', 'Girls', '36', '#fefbfb', '202027', 500, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_details`
--

CREATE TABLE `tbl_purchase_details` (
  `id` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `cName` varchar(50) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `br_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `barcode` int(11) NOT NULL,
  `price` float NOT NULL,
  `qnt` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_purchase_details`
--

INSERT INTO `tbl_purchase_details` (`id`, `pdate`, `cName`, `invoice`, `br_id`, `product_id`, `barcode`, `price`, `qnt`, `total`) VALUES
(62, '2022-11-14', 'abc', '145', 2, 8, 202012, 1000, 5, 5000),
(63, '2022-11-14', 'abv', '145', 2, 8, 202012, 1000, 5, 5000),
(64, '2022-11-14', 'abv', '145', 2, 8, 202012, 1000, 4, 4000),
(65, '2022-11-14', 'xyz', '123', 2, 8, 202012, 1000, 3, 3000),
(66, '2022-11-14', 'xyz', '123', 2, 8, 202012, 1000, 3, 3000),
(67, '2022-11-14', 'xyz', '123', 2, 8, 202012, 1000, 3, 3000),
(68, '2022-11-14', 'ggfgf', '123', 2, 8, 202012, 1000, 4, 4000),
(74, '2022-11-13', 'abc', '125', 2, 6, 202020, 1500, 1, 1500),
(75, '2022-11-14', 'dffdfd', '123', 2, 8, 202012, 1000, 1, 1000),
(76, '2022-11-14', 'bbg', '123', 2, 9, 202024, 1200, 2, 2400),
(77, '2022-11-14', 'Data', '1002', 2, 8, 202012, 1000, 2, 2000),
(78, '2022-11-15', 'Data', '1002', 2, 7, 202014, 1500, 5, 7500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_summery`
--

CREATE TABLE `tbl_purchase_summery` (
  `id` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `company` varchar(50) NOT NULL,
  `invoice` int(11) NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `dis` float NOT NULL,
  `dis_amount` float NOT NULL,
  `grand_total` float NOT NULL,
  `pay` float NOT NULL,
  `due` float NOT NULL,
  `br_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_purchase_summery`
--

INSERT INTO `tbl_purchase_summery` (`id`, `pdate`, `company`, `invoice`, `total_quantity`, `total_price`, `dis`, `dis_amount`, `grand_total`, `pay`, `due`, `br_id`) VALUES
(1, '2022-11-13', 'Apex', 123, 5, 5000, 10, 500, 4500, 5000, 500, 2),
(2, '2022-11-13', 'Apex', 123, 11, 11000, 20, 2200, 8800, 9000, 200, 2),
(7, '2022-11-14', 'ggfgf', 121, 24, 24000, 10, 2400, 21600, 22000, 400, 2),
(8, '2022-11-14', 'dffdfd', 121, 21, 23000, 10, 2300, 20700, 25000, 4300, 2),
(9, '2022-11-14', 'bbg', 123, 23, 25400, 10, 2540, 22860, 22900, 40, 2),
(10, '2022-11-14', 'Data', 1002, 2, 2000, 20, 400, 1600, 1600, 0, 2),
(11, '2022-11-15', 'Data', 1002, 7, 9500, 10, 950, 8550, 8600, 50, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales_details`
--

CREATE TABLE `tbl_sales_details` (
  `id` int(11) NOT NULL,
  `sdate` varchar(50) NOT NULL,
  `invoice` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sale_price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` float NOT NULL,
  `br_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sales_details`
--

INSERT INTO `tbl_sales_details` (`id`, `sdate`, `invoice`, `product_id`, `sale_price`, `quantity`, `total_amount`, `br_id`) VALUES
(58, '13/11/2022', 2022001, 8, 2000, 2, 4000, 2),
(59, '13/11/2022', 2022002, 8, 2000, 4, 8000, 2),
(60, '13/11/2022', 2022002, 8, 2000, 5, 10000, 2),
(61, '14/11/2022', 2022003, 6, 2500, 2, 5000, 2),
(62, '14/11/2022', 2022004, 0, 2500, 2, 5000, 2),
(63, '14/11/2022', 2022005, 8, 2000, 2, 4000, 2),
(64, '14/11/2022', 2022006, 5, 2500, 4, 10000, 2),
(65, '14/11/2022', 2022007, 5, 2500, 4, 10000, 2),
(66, '14/11/2022', 2022008, 5, 2500, 2, 5000, 2),
(67, '14/11/2022', 2022008, 5, 2500, 3, 7500, 2),
(68, '14/11/2022', 2022009, 8, 2000, 1, 2000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales_summery`
--

CREATE TABLE `tbl_sales_summery` (
  `id` int(11) NOT NULL,
  `sdate` varchar(10) NOT NULL,
  `invoice` int(11) NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `dis` float NOT NULL,
  `dis_amount` float NOT NULL,
  `grand_total` float NOT NULL,
  `pay` float NOT NULL,
  `due` float NOT NULL,
  `br_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sales_summery`
--

INSERT INTO `tbl_sales_summery` (`id`, `sdate`, `invoice`, `total_quantity`, `total_price`, `dis`, `dis_amount`, `grand_total`, `pay`, `due`, `br_id`) VALUES
(16, '13/11/2022', 2022007, 5, 18000, 10, 800, 7200, 8000, -800, 2),
(17, '13/11/2022', 2022001, 2, 4000, 10, 400, 3600, 4000, -400, 2),
(18, '13/11/2022', 2022001, 3, 4000, 10, 400, 3600, 4000, -400, 2),
(19, '13/11/2022', 2022002, 5, 18000, 10, 1800, 16200, 16500, -300, 2),
(32, '14/11/2022', 2022005, 2, 4000, 10, 400, 3600, 4000, -400, 2),
(33, '14/11/2022', 2022005, 2, 4000, 10, 400, 3600, 4000, -400, 2),
(34, '14/11/2022', 2022005, 2, 4000, 10, 400, 3600, 4000, -400, 2),
(35, '14/11/2022', 2022005, 2, 4000, 10, 400, 3600, 4000, -400, 2),
(36, '14/11/2022', 2022005, 2, 4000, 10, 400, 3600, 4100, -500, 2),
(38, '14/11/2022', 2022009, 1, 2000, 10, 200, 1800, 2000, -200, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `br_id` int(11) NOT NULL,
  `qnt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`id`, `product_id`, `br_id`, `qnt`) VALUES
(1, 5, 3, 33),
(2, 6, 3, 59),
(3, 7, 3, 95),
(5, 8, 2, 40),
(6, 9, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_purchase_details`
--
ALTER TABLE `tbl_purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_purchase_summery`
--
ALTER TABLE `tbl_purchase_summery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sales_details`
--
ALTER TABLE `tbl_sales_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sales_summery`
--
ALTER TABLE `tbl_sales_summery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_purchase_details`
--
ALTER TABLE `tbl_purchase_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_purchase_summery`
--
ALTER TABLE `tbl_purchase_summery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_sales_details`
--
ALTER TABLE `tbl_sales_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tbl_sales_summery`
--
ALTER TABLE `tbl_sales_summery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
