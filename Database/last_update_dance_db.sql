-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3360:3360
-- Generation Time: Aug 27, 2025 at 08:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `heard_about` varchar(50) NOT NULL,
  `project_type` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `vibe` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `wp_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `email`, `heard_about`, `project_type`, `message`, `vibe`, `created_at`, `wp_no`) VALUES
(2, 'aaa', 'a@gmail.com', 'Workshop', '1-on-1', 'ddd', 'Passion 💖', '2025-08-19 22:27:23', 345624522),
(3, 'badfb', 'asdf@gmail.com', 'Friend', '1-on-1', 'aergsedfaef', 'Passion 💖,Collab 🤝', '2025-08-19 22:58:20', 772251163),
(4, 'rtherthwrthsef', 'rrr@gmail.com', 'Event', 'Stage', 'ggg', 'Energy 🔥,Elegance 🌸', '2025-08-19 22:59:36', 443241398),
(5, 'fff', 'f@gmail.com', 'Other', 'Brand', 'eee', 'Energy 🔥,Elegance 🌸', '2025-08-19 23:10:32', 764293333),
(9, 'hello', 'hello@gmail.com', 'Event', 'Stage', 'aaaaaaaaaaaaa', 'Collab 🤝', '2025-08-27 23:25:35', 2147483647),
(10, 'yyy', 'y@gmail.com', 'Workshop', 'Workshop', 'ghvhh', 'Energy 🔥', '2025-08-27 23:35:58', 2147483647),
(11, 'vev', 'veve@gmail.com', 'Friend', 'Brand', 'dd', 'Elegance 🌸', '2025-08-27 23:36:38', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
