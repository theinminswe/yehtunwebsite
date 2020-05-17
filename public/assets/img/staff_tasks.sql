-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 03:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prj_mmhr`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff_tasks`
--

CREATE TABLE `staff_tasks` (
  `id` bigint(11) NOT NULL,
  `staffs_id` int(11) DEFAULT NULL,
  `task` varchar(255) DEFAULT NULL,
  `from_date` datetime DEFAULT NULL,
  `to_date` datetime DEFAULT NULL,
  `staffids` text DEFAULT NULL COMMENT 'Many Staff Assign',
  `is_complete` tinyint(1) DEFAULT NULL,
  `is_confirm` tinyint(1) DEFAULT NULL,
  `task_status` tinyint(2) DEFAULT NULL COMMENT '1 = complete\n2 = pending\n3 = cancel\n4 = rejected\n',
  `remarks` text DEFAULT NULL COMMENT '{1=>''comment'',2=>''test''}',
  `complete_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_tasks`
--

INSERT INTO `staff_tasks` (`id`, `staffs_id`, `task`, `from_date`, `to_date`, `staffids`, `is_complete`, `is_confirm`, `task_status`, `remarks`, `complete_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Hey Finsihe The Task 1', '2020-04-01 20:42:53', '2020-04-30 20:43:05', '[{\"staffid\":6,\"status\":\"test\",\"complete_date\":\"0\",\"is_confirm\":\"0\",\"confirm_by\":\"0\"},{\"staffid\":3,\"status\":\"0\",\"complete_date\":\"0\",\"is_confirm\":\"0\",\"confirm_by\":\"0\"},{\"staffid\":8,\"status\":\"test\",\"complete_date\":\"0\",\"is_confirm\":\"0\",\"confirm_by\":\"0\"},{\"staffid\":1,\"status\":\"complete\",\"complete_date\":\"2020-05-15\",\"is_confirm\":\"1\",\"confirm_by\":2}]', NULL, NULL, NULL, NULL, NULL, '2020-04-12 07:31:25', '2020-05-15 09:48:40', NULL),
(2, 8, 'Hey Finsihe The Task 2', '2020-04-01 20:43:17', '2020-04-15 20:43:24', '[{\"staffid\":2,\"status\":\"complete\",\"complete_date\":\"2020-05-08\",\"is_confirm\":\"1\",\"confirm_by\":\"1\"},{\"staffid\":3,\"status\":\"complete\",\"complete_date\":\"2020-04-26\",\"is_confirm\":\"1\",\"confirm_by\":\"1\"},{\"staffid\":1,\"status\":\"test\",\"complete_date\":\"2020-05-15\",\"is_confirm\":\"0\",\"confirm_by\":\"0\"}]', NULL, NULL, NULL, NULL, NULL, '2020-04-12 07:31:25', '2020-05-15 06:27:47', NULL),
(3, 9, 'Hey Finsihe The Task 3', '2020-05-01 20:43:31', '2020-05-11 20:43:35', '[{\"staffid\":1,\"status\":\"complete\",\"complete_date\":\"2020-05-13\",\"is_confirm\":\"1\",\"confirm_by\":\"8\"},{\"staffid\":3,\"status\":\"0\",\"complete_date\":\"0\",\"is_confirm\":\"0\",\"confirm_by\":\"0\"},{\"staffid\":6,\"status\":\"0\",\"complete_date\":\"0\",\"is_confirm\":\"0\",\"confirm_by\":\"0\"}]', NULL, NULL, NULL, NULL, NULL, '2020-04-12 07:31:25', '2020-05-13 17:27:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff_tasks`
--
ALTER TABLE `staff_tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_tasks`
--
ALTER TABLE `staff_tasks`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
