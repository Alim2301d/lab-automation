-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 01:08 PM
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
-- Database: `lab_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(15) NOT NULL,
  `Manufact_id` int(15) NOT NULL,
  `testing_id` int(15) NOT NULL,
  `entry date` datetime NOT NULL DEFAULT current_timestamp(),
  `total` int(15) DEFAULT NULL,
  `approve` int(15) DEFAULT NULL,
  `dissaprove` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `Manufact_id`, `testing_id`, `entry date`, `total`, `approve`, `dissaprove`) VALUES
(17, 16, 16, '2023-02-27 20:40:23', 1000, 500, 500),
(18, 17, 18, '2023-02-27 20:40:35', 2000, 300, 1700),
(19, 16, 17, '2023-02-28 15:54:33', 1000, 200, 800);

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `m_id` int(15) NOT NULL,
  `product_id` int(15) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`m_id`, `product_id`, `date`, `quantity`) VALUES
(16, 1, '2023-02-27 20:39:05', 1000),
(17, 2, '2023-02-27 20:39:12', 2000),
(18, 1, '2023-02-27 20:39:32', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `name`, `description`) VALUES
(1, 'Bulb', '100 watt :)'),
(2, 'product', 'second');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Test_id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Test_id`, `name`, `description`) VALUES
(1, 'demo', 'demo'),
(2, 'test2', 'okkk'),
(3, 'test3', 'check');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `testing_id` int(15) NOT NULL,
  `manufact_id` int(15) DEFAULT NULL,
  `test_id` int(15) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `quantity` int(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`testing_id`, `manufact_id`, `test_id`, `date`, `quantity`, `status`) VALUES
(16, 16, 1, '2023-02-27 20:39:48', 1000, 1),
(17, 16, 3, '2023-02-27 20:39:52', 1000, 1),
(18, 17, 2, '2023-02-27 20:40:00', 2000, 1),
(19, 18, 3, '2023-02-27 20:40:07', 90000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com\r\n', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`),
  ADD UNIQUE KEY `testing_id_2` (`testing_id`),
  ADD KEY `manufact__fk` (`Manufact_id`),
  ADD KEY `testing_id` (`testing_id`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `pro_fk` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Test_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`testing_id`),
  ADD KEY `manu_fk` (`manufact_id`),
  ADD KEY `test_fk` (`test_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `m_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `Test_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `testing_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`testing_id`) REFERENCES `testing` (`testing_id`),
  ADD CONSTRAINT `manufact__fk` FOREIGN KEY (`Manufact_id`) REFERENCES `manufacture` (`m_id`);

--
-- Constraints for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD CONSTRAINT `pro_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `testing`
--
ALTER TABLE `testing`
  ADD CONSTRAINT `manu_fk` FOREIGN KEY (`manufact_id`) REFERENCES `manufacture` (`m_id`),
  ADD CONSTRAINT `test_fk` FOREIGN KEY (`test_id`) REFERENCES `test` (`Test_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
