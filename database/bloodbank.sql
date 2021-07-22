-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 05:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_types`
--

CREATE TABLE `blood_types` (
  `id` int(11) NOT NULL,
  `hospital_id` int(255) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '1 : Available \r\n0 : Not available',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` int(255) NOT NULL COMMENT '1:In use\r\n0:deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_types`
--

INSERT INTO `blood_types` (`id`, `hospital_id`, `blood_type`, `status`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 1, 'A+', '0', '2021-07-20 13:34:33', '2021-07-21 08:38:07', 1),
(2, 1, 'A-', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(3, 3, 'A-', '1', '2021-07-20 13:34:33', '2021-07-21 11:44:52', 1),
(4, 3, 'A+', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(5, 3, 'B+', '1', '2021-07-20 13:34:33', '2021-07-21 07:16:58', 1),
(6, 3, 'B-', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(7, 1, 'B+', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(8, 1, 'B-', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(9, 3, 'O+', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(10, 3, 'O-', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(11, 1, 'O+', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(12, 1, 'O-', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(13, 1, 'A+', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(14, 1, 'AB+', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(15, 3, 'AB+', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(16, 3, 'AB-', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(17, 1, 'AB-', '1', '2021-07-20 13:34:33', '2021-07-21 03:57:51', 1),
(18, 1, 'A+', '1', '2021-07-20 13:34:33', '2021-07-21 07:12:54', 1),
(19, 3, 'ABC+', '1', '2021-07-20 13:34:33', '2021-07-21 07:58:15', 1),
(20, 5, 'A+', '1', '2021-07-20 13:34:33', '2021-07-21 08:13:22', 1),
(21, 5, 'A-', '1', '2021-07-20 13:34:33', '2021-07-21 08:13:30', 1),
(22, 5, 'B+', '1', '2021-07-20 13:34:33', '2021-07-21 08:13:40', 1),
(23, 5, 'B-', '1', '2021-07-20 13:34:33', '2021-07-21 08:13:48', 1),
(24, 5, 'AB+', '1', '2021-07-20 13:34:33', '2021-07-21 08:13:56', 1),
(25, 5, 'ABC+', '0', '2021-07-20 13:34:33', '2021-07-21 08:38:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `request_samples`
--

CREATE TABLE `request_samples` (
  `id` int(255) NOT NULL,
  `sample_id` int(255) NOT NULL,
  `hospital_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_samples`
--

INSERT INTO `request_samples` (`id`, `sample_id`, `hospital_id`, `user_id`, `updated_at`) VALUES
(1, 1, 1, 2, '2021-07-21 08:09:51'),
(2, 9, 3, 2, '2021-07-21 08:09:51'),
(3, 24, 5, 4, '2021-07-21 08:09:51'),
(4, 23, 5, 2, '2021-07-21 08:09:51'),
(5, 4, 3, 4, '2021-07-21 08:09:51'),
(6, 2, 1, 4, '2021-07-21 08:09:51'),
(7, 23, 5, 2, '2021-07-21 08:09:51'),
(8, 10, 3, 2, '2021-07-21 09:55:21'),
(9, 5, 3, 4, '2021-07-21 11:46:37'),
(10, 3, 3, 4, '2021-07-21 15:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('0','1') NOT NULL COMMENT '0 : Hospital\r\n1 : Receiver',
  `blood_type` varchar(255) DEFAULT NULL,
  `phone_no` int(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` int(11) NOT NULL COMMENT '1:Active User\r\n0:Inactive User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `blood_type`, `phone_no`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'Internshala Hospital', 'admin@hospital.com', 'che012teste10adc3949ba59abbe56e057f20f883e', '0', '', 9875747, '2021-07-20 13:34:33', '2021-07-21 15:22:25', 1),
(2, 'Lohith', 'lohith@user.com', 'che012teste10adc3949ba59abbe56e057f20f883e', '1', 'A+', 9875747, '2021-07-20 13:34:33', '2021-07-21 14:33:39', 1),
(3, 'New Hospital', 'admin@gmail.com', 'che012teste10adc3949ba59abbe56e057f20f883e', '0', ' ', 123456, '2021-07-20 13:34:33', '2021-07-21 15:21:27', 1),
(4, 'Mike', 'mike@user.com', 'che012teste10adc3949ba59abbe56e057f20f883e', '1', 'A+', 1233456, '2021-07-20 13:34:33', '2021-07-21 15:25:51', 1),
(5, 'One Hospital', 'admin@one.com', 'che012teste10adc3949ba59abbe56e057f20f883e', '0', ' ', 123456, '2021-07-20 13:34:33', '2021-07-21 04:02:52', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_types`
--
ALTER TABLE `blood_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital_id` (`hospital_id`);

--
-- Indexes for table `request_samples`
--
ALTER TABLE `request_samples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital_id` (`hospital_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sample_id` (`sample_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_types`
--
ALTER TABLE `blood_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `request_samples`
--
ALTER TABLE `request_samples`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_types`
--
ALTER TABLE `blood_types`
  ADD CONSTRAINT `blood_types_ibfk_1` FOREIGN KEY (`hospital_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `request_samples`
--
ALTER TABLE `request_samples`
  ADD CONSTRAINT `request_samples_ibfk_1` FOREIGN KEY (`hospital_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `request_samples_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `request_samples_ibfk_3` FOREIGN KEY (`sample_id`) REFERENCES `blood_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
