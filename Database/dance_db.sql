-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307:3307
-- Generation Time: Aug 24, 2025 at 12:41 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `about_me` text DEFAULT NULL,
  `home_page_video` varchar(255) DEFAULT NULL,
  `dashboard_image` varchar(255) DEFAULT NULL,
  `about_us_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_profile_pic` varchar(255) NOT NULL,
  `admin_profile_bg` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `company_name`, `username`, `email`, `password`, `first_name`, `last_name`, `address`, `city`, `country`, `postal_code`, `about_me`, `home_page_video`, `dashboard_image`, `about_us_image`, `created_at`, `updated_at`, `admin_profile_pic`, `admin_profile_bg`, `title`, `sub_title`) VALUES
(1, 'Agrawal_Tech', 'Khushi', 'khushi111@gmail.com', 'ad123', 'khushi', 'Agrawal', 'Delhi,India.', 'Delhi', 'India', '4422232', 'Dance_Choreographer', 'Videos/dance.MOV', 'Uploads/admin1.jpg', 'Images\\person1.jpg', '2025-08-23 15:55:06', '2025-08-24 10:17:49', 'Uploads/person1.jpg', 'Uploads/vacation.jpeg', 'I tell stories through movement.', 'From soulful classical fusions to electrifying\r\nstage choreography,I bring emotion to every beat');

-- --------------------------------------------------------

--
-- Table structure for table `dance_types`
--

CREATE TABLE `dance_types` (
  `srno` int(3) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `type_des` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dance_types`
--

INSERT INTO `dance_types` (`srno`, `type_name`, `type_des`, `image_url`) VALUES
(1, 'Weddings and Events', 'I craft heartfelt dances that make weddings and events unforgettable.', 'images/wedding_dance1.jpg'),
(2, 'Freestyle', 'Freestyle lets me express raw emotion and spontaneous joy in dance.', 'images/freestyle.jpg\"'),
(3, 'Contemporary Dance', 'I bring fluid storytelling to every contemporary move.', 'images/contemporary_dance.jpg'),
(4, 'Hip Hop Dance', 'My hip-hop style radiates energy and bold attitude with every beat.\r\n\r\n', 'images/hiphop2.jpg'),
(5, 'Stage/Brand Dance', 'My stage presence captivates audiences and elevates brand stories.', 'images/stage_dance1.jpg'),
(6, 'Belly Dance', 'An ancient art that reveals modern elegance — belly dance is beauty in motion', 'images/belly dance1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `video_url` varchar(500) NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `tag_line` varchar(255) DEFAULT NULL,
  `video_type` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `video_url`, `image_url`, `tag_line`, `video_type`, `created_at`) VALUES
(1, 'Yoga Session', 'Best ways to sneak yoga into your holiday', 'videos/yoga.mp4', 'images/yoga.jpeg', 'Lifestyle, Travel', 'Practice', '2025-08-21 19:40:43'),
(2, 'Strawberry Breakfast', '5 Best Healthy Strawberry Breakfast Recipes', 'videos/recipe.mp4', 'images/recipe.jpeg', 'Breakfast, Nutrition', 'Rehearsal', '2025-08-21 19:40:43'),
(3, 'Vacation in Italy', 'Boating around the Cinque Terre in Italy', 'videos/vacation.mp4', 'images/vacation.jpeg', 'Travel, Adventure', 'Performance', '2025-08-21 19:40:43'),
(4, 'another ', 'qqqqqq', 'videos/dance_reel.mp4\r\n', 'images/vacation.jpeg', 'hello', 'practice', '2025-08-22 05:52:05'),
(5, 'welcome ', 'wedgfaewrysetg3ae', 'videos/wedding.mp4\r\n', 'images/wd2.jpeg', 'hyy', 'bye', '2025-08-22 05:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `thumbnail` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `title`, `category`, `video_url`, `thumbnail`, `created_at`) VALUES
(4, 'Zee Awards 2023', 'stage', 'Videos\\dance_reel.mp4', 'Images\\zee_awards.jpeg', '2025-08-20 22:57:41'),
(6, 'Fusion Beats MV', 'music', 'Videos\\fusion_beats.mp4', 'Images/fusion_beats.jpeg', '2025-08-20 22:59:57'),
(9, 'Dance Reel 2023', 'reels', 'Videos\\dance_reel.mp4', 'Images/dance_reel.jpeg', '2025-08-20 23:04:15'),
(10, 'Brand Campaign XYZ', 'brand', 'Videos\\brand_campaign.mp4', 'Images/brand_campaign.jpeg', '2025-08-20 23:04:15'),
(11, 'Jaipur Wedding', 'wedding', 'Videos\\jaipur_wedding.mp4', 'Images/jaipur_wedding.jpeg', '2025-08-20 23:05:05'),
(12, 'reel2', 'reels', 'Videos\\dance_reel.mp4', 'images/dance_reel2.jpeg', '2025-08-20 23:38:56'),
(13, 'wedding 2', 'wedding', 'Videos\\jaipur_wedding.mp4', 'Images/wd2.jpeg', '2025-08-21 09:51:37'),
(14, 'wedding3', 'wedding', 'Videos\\jaipur_wedding.mp4', 'Images/wd3.jpeg', '2025-08-21 09:51:37');

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
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `email`, `heard_about`, `project_type`, `message`, `vibe`, `created_at`) VALUES
(1, 'aaa', 'a@gmail.com', 'Workshop', '1-on-1', 'ddd', '', '2025-08-19 22:27:23'),
(5, 'badfb', 'asdf@gmail.com', 'Friend', '1-on-1', 'aergsedfaef', 'Passion 💖,Collab 🤝', '2025-08-19 22:58:20'),
(6, 'rtherthwrthsef', 'rrr@gmail.com', 'Event', 'Stage', 'ggg', 'Energy 🔥,Elegance 🌸', '2025-08-19 22:59:36'),
(7, 'fff', 'f@gmail.com', 'Other', 'Brand', 'eee', 'Energy 🔥,Elegance 🌸', '2025-08-19 23:10:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `dance_types`
--
ALTER TABLE `dance_types`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dance_types`
--
ALTER TABLE `dance_types`
  MODIFY `srno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
