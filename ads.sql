-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 08:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ad_id` int(11) NOT NULL,
  `posted_by` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image_1` varchar(200) NOT NULL,
  `image_2` varchar(200) DEFAULT NULL,
  `image_3` varchar(200) DEFAULT NULL,
  `category` int(11) NOT NULL,
  `is_negotiable` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `expiry_at` date NOT NULL,
  `condition_id` int(11) NOT NULL,
  `used_for` int(11) DEFAULT NULL,
  `location` varchar(100) NOT NULL,
  `is_boosted` tinyint(1) DEFAULT NULL,
  `delivery` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ad_id`, `posted_by`, `is_active`, `name`, `description`, `image_1`, `image_2`, `image_3`, `category`, `is_negotiable`, `price`, `created_at`, `expiry_at`, `condition_id`, `used_for`, `location`, `is_boosted`, `delivery`) VALUES
(4, 'biraj@golden-duck.com', 1, 'This is test product 4', 'This is test product 4', '1677954416.webp', NULL, NULL, 2, 0, 4343, '2023-03-05', '2023-03-18', 2, 2, 'Koteshowr, Kathmandu', NULL, 0),
(5, 'birajparajuli58@gmail.com', 1, 'This is test product 2', 'Hello world this is pridocsoocsocos cosc  sccsmc so csomcsomcs csoncscns', '1677995472.jpg', NULL, NULL, 2, 1, 1222, '2023-03-05', '2023-03-21', 1, 1, 'Anamnagar', NULL, 0),
(6, 'biraj@golden-duck.com', 1, 'This is test product 2', 'This is test description', '1678000947.jpg', NULL, NULL, 2, 1, 4343, '2023-03-05', '2023-03-28', 4, 1, 'Baneshowr', NULL, 0),
(7, 'birajparajuli58@gmail.com', 1, 'This is test product 1', 'This is product desc', '1678001642.jpg', NULL, NULL, 2, 1, 1212, '2023-03-05', '2023-03-23', 2, 1, 'Jadibuti', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
