-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 01:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pitstop`
--
CREATE DATABASE IF NOT EXISTS `pitstop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pitstop`;

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

DROP TABLE IF EXISTS `contractor`;
CREATE TABLE `contractor` (
  `contractor_id` int(11) NOT NULL,
  `company_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`contractor_id`, `company_name`) VALUES
(9, 'Honda'),
(10, 'Bodyshop'),
(11, 'Toyota'),
(12, 'Acura'),
(13, 'Lexus');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_car_record`
--

DROP TABLE IF EXISTS `contractor_car_record`;
CREATE TABLE `contractor_car_record` (
  `contractor_car_record_id` int(11) NOT NULL,
  `courtesy_number` varchar(30) NOT NULL,
  `car_specification` varchar(30) NOT NULL,
  `job_type` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `contractor_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contractor_car_record`
--

INSERT INTO `contractor_car_record` (`contractor_car_record_id`, `courtesy_number`, `car_specification`, `job_type`, `date`, `contractor_id`, `username`) VALUES
(14, '655555', 'Civic', 'Detailing', '2021-11-25', 9, 'admin1'),
(15, '456', 'Accord', 'Casual Wash', '2021-12-16', 9, 'admin1'),
(16, '5981', 'BMW 328i', 'Interior Detailing', '2021-12-14', 10, 'admin1'),
(17, 'Nissan', 'Rogue', 'Exterior', '2021-12-15', 10, 'admin1'),
(18, '8135', 'Corolla', 'Waxing', '2021-12-08', 11, 'admin1'),
(19, '578', 'Camry', 'Detailing', '2021-12-09', 11, 'admin1'),
(20, '8711', 'MDX', 'Polishing', '2021-11-16', 12, 'admin1'),
(21, '5784', 'RDX', 'Steam Cleaning', '2021-11-18', 12, 'admin1'),
(22, '1285', 'RX 350', 'Detailing', '2021-11-11', 13, 'admin1'),
(23, '6894', 'IS 350', 'Waxing', '2021-11-06', 13, 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_record`
--

DROP TABLE IF EXISTS `customer_record`;
CREATE TABLE `customer_record` (
  `customer_record_id` int(11) NOT NULL,
  `car_specification` varchar(30) NOT NULL,
  `job_type` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `password_hash` varchar(80) NOT NULL,
  `two_factor_token` int(20) DEFAULT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `first_name`, `last_name`, `password_hash`, `two_factor_token`, `type`) VALUES
('admin1', 'Thilshan', 'Shunmugalingam', '$2y$10$OzEoz5H5LC5UVti8qdyqA.gYWvbFAW4OFJ/SvzTLeegLYqRWMPzFK', NULL, 'admin'),
('admin2', 'Rob', 'Brown', '$2y$10$F8M/mjb5KLbR/wtBHKcTdOErAHQQms8cAVYEr7B6eLOQLhb1LBTaK', NULL, 'admin'),
('admin3', 'Larry', 'Smith', '$2y$10$F8M/mjb5KLbR/wtBHKcTdOErAHQQms8cAVYEr7B6eLOQLhb1LBTaK', NULL, 'admin'),
('admin4', 'Maria', 'Williams', '$2y$10$F8M/mjb5KLbR/wtBHKcTdOErAHQQms8cAVYEr7B6eLOQLhb1LBTaK', NULL, 'admin'),
('admin5', 'Patricia', 'Miller', '$2y$10$F8M/mjb5KLbR/wtBHKcTdOErAHQQms8cAVYEr7B6eLOQLhb1LBTaK', NULL, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`contractor_id`);

--
-- Indexes for table `contractor_car_record`
--
ALTER TABLE `contractor_car_record`
  ADD PRIMARY KEY (`contractor_car_record_id`),
  ADD KEY `to_contractor_id_fk` (`contractor_id`),
  ADD KEY `to_username_fk` (`username`);

--
-- Indexes for table `customer_record`
--
ALTER TABLE `customer_record`
  ADD PRIMARY KEY (`customer_record_id`),
  ADD KEY `to_username_fk_2` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contractor`
--
ALTER TABLE `contractor`
  MODIFY `contractor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contractor_car_record`
--
ALTER TABLE `contractor_car_record`
  MODIFY `contractor_car_record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customer_record`
--
ALTER TABLE `customer_record`
  MODIFY `customer_record_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contractor_car_record`
--
ALTER TABLE `contractor_car_record`
  ADD CONSTRAINT `to_contractor_id_fk` FOREIGN KEY (`contractor_id`) REFERENCES `contractor` (`contractor_id`),
  ADD CONSTRAINT `to_username_fk` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `customer_record`
--
ALTER TABLE `customer_record`
  ADD CONSTRAINT `to_username_fk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
