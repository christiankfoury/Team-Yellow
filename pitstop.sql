-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 06:26 PM
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
  MODIFY `contractor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contractor_car_record`
--
ALTER TABLE `contractor_car_record`
  MODIFY `contractor_car_record_id` int(11) NOT NULL AUTO_INCREMENT;

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
