-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2016 at 03:22 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belancon`
--

-- --------------------------------------------------------

--
-- Table structure for table `contributors`
--

CREATE TABLE IF NOT EXISTS `contributors` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `send_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Rizqi Maulana', 'sakukode@gmail.com', 'perbanyak koleksi ikon nya', '2016-07-19 07:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL,
  `icon_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `icon_id`, `type`, `filename`, `created_at`, `created_by`) VALUES
(1, 1, 'png', 'user-1.png', '2016-07-10 08:14:13', 1),
(2, 1, 'psd', 'user-1.psd', '2016-07-10 08:14:13', 1),
(3, 1, 'ai', 'user-1.ai', '2016-07-10 08:14:13', 1),
(4, 2, 'png', 'user-4.png', '2016-07-10 08:14:13', 1),
(5, 2, 'psd', 'user-4.psd', '2016-07-10 08:14:13', 1),
(6, 2, 'ai', 'user-4.ai', '2016-07-10 08:14:13', 1),
(7, 3, 'png', 'user-3.png', '2016-07-10 08:14:13', 1),
(8, 3, 'psd', 'user-3.psd', '2016-07-10 08:14:13', 1),
(9, 3, 'ai', 'user-3.ai', '2016-07-10 08:14:13', 1),
(10, 4, 'png', 'user-1.png', '2016-07-10 08:14:13', 1),
(11, 4, 'psd', 'user-1.psd', '2016-07-10 08:14:13', 1),
(12, 4, 'ai', 'user-1.ai', '2016-07-10 08:14:13', 1),
(13, 5, 'png', 'user-4.png', '2016-07-10 08:14:13', 1),
(14, 5, 'psd', 'user-4.psd', '2016-07-10 08:14:13', 1),
(15, 5, 'ai', 'user-4.ai', '2016-07-10 08:14:13', 1),
(16, 6, 'png', 'user-3.png', '2016-07-10 08:14:13', 1),
(17, 6, 'psd', 'user-3.psd', '2016-07-10 08:14:13', 1),
(18, 6, 'ai', 'user-3.ai', '2016-07-10 08:14:13', 1),
(19, 7, 'png', 'user-1.png', '2016-07-10 08:14:13', 1),
(20, 7, 'psd', 'user-1.psd', '2016-07-10 08:14:13', 1),
(21, 7, 'ai', 'user-1.ai', '2016-07-10 08:14:13', 1),
(22, 8, 'png', 'user-4.png', '2016-07-10 08:14:13', 1),
(23, 8, 'psd', 'user-4.psd', '2016-07-10 08:14:13', 1),
(24, 8, 'ai', 'user-4.ai', '2016-07-10 08:14:13', 1),
(25, 9, 'png', 'user-3.png', '2016-07-10 08:14:13', 1),
(26, 9, 'psd', 'user-3.psd', '2016-07-10 08:14:13', 1),
(27, 9, 'ai', 'user-3.ai', '2016-07-10 08:14:13', 1),
(28, 10, 'png', 'user-1.png', '2016-07-10 08:14:13', 1),
(29, 10, 'psd', 'user-1.psd', '2016-07-10 08:14:13', 1),
(30, 10, 'ai', 'user-1.ai', '2016-07-10 08:14:13', 1),
(31, 11, 'png', 'user-4.png', '2016-07-10 08:14:13', 1),
(32, 11, 'psd', 'user-4.psd', '2016-07-10 08:14:13', 1),
(33, 11, 'ai', 'user-4.ai', '2016-07-10 08:14:13', 1),
(34, 12, 'png', 'user-3.png', '2016-07-10 08:14:13', 1),
(35, 12, 'psd', 'user-3.psd', '2016-07-10 08:14:13', 1),
(36, 12, 'ai', 'user-3.ai', '2016-07-10 08:14:13', 1),
(37, 13, 'png', 'user-1.png', '2016-07-10 08:14:13', 1),
(38, 13, 'psd', 'user-1.psd', '2016-07-10 08:14:13', 1),
(39, 13, 'ai', 'user-1.ai', '2016-07-10 08:14:13', 1),
(40, 14, 'png', 'user-4.png', '2016-07-10 08:14:13', 1),
(41, 14, 'psd', 'user-4.psd', '2016-07-10 08:14:13', 1),
(42, 14, 'ai', 'user-4.ai', '2016-07-10 08:14:13', 1),
(43, 15, 'png', 'user-3.png', '2016-07-10 08:14:13', 1),
(44, 15, 'psd', 'user-3.psd', '2016-07-10 08:14:13', 1),
(45, 15, 'ai', 'user-3.ai', '2016-07-10 08:14:13', 1),
(46, 16, 'png', 'user-1.png', '2016-07-10 08:14:13', 1),
(47, 16, 'psd', 'user-1.psd', '2016-07-10 08:14:13', 1),
(48, 16, 'ai', 'user-1.ai', '2016-07-10 08:14:13', 1),
(49, 17, 'png', 'user-4.png', '2016-07-10 08:14:13', 1),
(50, 17, 'psd', 'user-4.psd', '2016-07-10 08:14:13', 1),
(51, 17, 'ai', 'user-4.ai', '2016-07-10 08:14:13', 1),
(52, 18, 'png', 'user-3.png', '2016-07-10 08:14:13', 1),
(53, 18, 'psd', 'user-3.psd', '2016-07-10 08:14:13', 1),
(54, 18, 'ai', 'user-3.ai', '2016-07-10 08:14:13', 1),
(55, 19, 'png', 'user-1.png', '2016-07-10 08:14:13', 1),
(56, 19, 'psd', 'user-1.psd', '2016-07-10 08:14:13', 1),
(57, 19, 'ai', 'user-1.ai', '2016-07-10 08:14:13', 1),
(58, 20, 'png', 'user-4.png', '2016-07-10 08:14:13', 1),
(59, 20, 'psd', 'user-4.psd', '2016-07-10 08:14:13', 1),
(60, 20, 'ai', 'user-4.ai', '2016-07-10 08:14:13', 1),
(61, 21, 'png', 'user-3.png', '2016-07-10 08:14:13', 1),
(62, 21, 'psd', 'user-3.psd', '2016-07-10 08:14:13', 1),
(63, 21, 'ai', 'user-3.ai', '2016-07-10 08:14:13', 1),
(64, 22, 'png', 'user-1.png', '2016-07-10 08:14:13', 1),
(65, 22, 'psd', 'user-1.psd', '2016-07-10 08:14:13', 1),
(66, 22, 'ai', 'user-1.ai', '2016-07-10 08:14:13', 1),
(67, 23, 'png', 'user-4.png', '2016-07-10 08:14:13', 1),
(68, 23, 'psd', 'user-4.psd', '2016-07-10 08:14:13', 1),
(69, 23, 'ai', 'user-4.ai', '2016-07-10 08:14:13', 1),
(70, 24, 'png', 'user-3.png', '2016-07-10 08:14:13', 1),
(71, 24, 'psd', 'user-3.psd', '2016-07-10 08:14:13', 1),
(72, 24, 'ai', 'user-3.ai', '2016-07-10 08:14:13', 1),
(73, 25, 'png', 'user-1.png', '2016-07-10 08:14:13', 1),
(74, 25, 'psd', 'user-1.psd', '2016-07-10 08:14:13', 1),
(75, 25, 'ai', 'user-1.ai', '2016-07-10 08:14:13', 1),
(76, 26, 'png', 'user-4.png', '2016-07-10 08:14:13', 1),
(77, 26, 'psd', 'user-4.psd', '2016-07-10 08:14:13', 1),
(78, 26, 'ai', 'user-4.ai', '2016-07-10 08:14:13', 1),
(79, 27, 'png', 'user-3.png', '2016-07-10 08:14:13', 1),
(80, 27, 'psd', 'user-3.psd', '2016-07-10 08:14:13', 1),
(81, 27, 'ai', 'user-3.ai', '2016-07-10 08:14:13', 1),
(82, 28, 'png', 'user-1.png', '2016-07-10 08:14:13', 1),
(83, 28, 'psd', 'user-1.psd', '2016-07-10 08:14:13', 1),
(84, 28, 'ai', 'user-1.ai', '2016-07-10 08:14:13', 1),
(85, 29, 'png', 'user-4.png', '2016-07-10 08:14:13', 1),
(86, 29, 'psd', 'user-4.psd', '2016-07-10 08:14:13', 1),
(87, 29, 'ai', 'user-4.ai', '2016-07-10 08:14:13', 1),
(88, 30, 'png', 'user-3.png', '2016-07-10 08:14:13', 1),
(89, 30, 'psd', 'user-3.psd', '2016-07-10 08:14:13', 1),
(90, 30, 'ai', 'user-3.ai', '2016-07-10 08:14:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE IF NOT EXISTS `icons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `default_image` varchar(255) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `name`, `category`, `tags`, `type`, `price`, `created_at`, `created_by`, `default_image`, `views`) VALUES
(1, 'Beatiful woman 1', 'Woman', 'people, woman, flat', 'paid', '0', '2016-07-07 12:48:30', 1, 'user-1.png', 0),
(2, 'Farmer Man 1', 'Man', 'people, man, flat, farm', 'free', '0', '2016-07-07 12:49:30', 1, 'user-4.png', 0),
(3, 'Business man 1', 'Man', 'people, man, flat, business', 'paid', '0', '2016-07-07 12:50:31', 1, 'user-3.png', 10),
(4, 'Beatiful woman 2', 'Woman', 'people, woman, flat', 'free', '0', '2016-07-07 12:48:31', 1, 'user-1.png', 0),
(5, 'Farmer Man 2', 'Man', 'people, man, flat, farm', 'free', '0', '2016-07-07 12:49:31', 1, 'user-4.png', 0),
(6, 'Business man 2', 'Man', 'people, man, flat, business', 'free', '0', '2016-07-07 12:50:32', 1, 'user-3.png', 0),
(7, 'Beatiful woman 3', 'Woman', 'people, woman, flat', 'free', '0', '2016-07-07 12:48:32', 1, 'user-1.png', 7),
(8, 'Farmer Man 3', 'Man', 'people, man, flat, farm', 'free', '0', '2016-07-07 12:49:32', 1, 'user-4.png', 5),
(9, 'Business man 3', 'Man', 'people, man, flat, business', 'paid', '0', '2016-07-07 12:50:33', 1, 'user-3.png', 0),
(10, 'Beatiful woman 4', 'Woman', 'people, woman, flat', 'free', '0', '2016-07-07 12:48:33', 1, 'user-1.png', 0),
(11, 'Farmer Man 4', 'Man', 'people, man, flat, farm', 'free', '0', '2016-07-07 12:49:33', 1, 'user-4.png', 0),
(12, 'Business man 4', 'Man', 'people, man, flat, business', 'paid', '0', '2016-07-07 12:50:34', 1, 'user-3.png', 0),
(13, 'Beatiful woman 5', 'Woman', 'people, woman, flat', 'free', '0', '2016-07-07 12:48:34', 1, 'user-1.png', 0),
(14, 'Farmer Man 5', 'Man', 'people, man, flat, farm', 'free', '0', '2016-07-07 12:49:34', 1, 'user-4.png', 0),
(15, 'Business man 5', 'Man', 'people, man, flat, business', 'free', '0', '2016-07-07 12:50:35', 1, 'user-3.png', 0),
(16, 'Beatiful woman 6', 'Woman', 'people, woman, flat', 'free', '0', '2016-07-07 12:48:35', 1, 'user-1.png', 0),
(17, 'Farmer Man 6', 'Man', 'people, man, flat, farm', 'free', '0', '2016-07-07 12:49:35', 1, 'user-4.png', 0),
(18, 'Business man 6', 'Man', 'people, man, flat, business', 'free', '0', '2016-07-07 12:50:36', 1, 'user-3.png', 0),
(19, 'Beatiful woman 7', 'Woman', 'people, woman, flat', 'free', '0', '2016-07-07 12:48:36', 1, 'user-1.png', 0),
(20, 'Farmer Man 7', 'Man', 'people, man, flat, farm', 'free', '0', '2016-07-07 12:49:36', 1, 'user-4.png', 0),
(21, 'Business man 7', 'Man', 'people, man, flat, business', 'free', '0', '2016-07-07 12:50:32', 1, 'user-3.png', 0),
(23, 'Farmer Man 8', 'Man', 'people, man, flat, farm', 'paid', '0', '2016-07-07 12:49:31', 1, 'user-4.png', 0),
(24, 'Business man 8', 'Man', 'people, man, flat, business', 'free', '0', '2016-07-07 12:50:32', 1, 'user-3.png', 0),
(25, 'Beatiful woman 9', 'Woman', 'people, woman, flat', 'free', '0', '2016-07-07 12:48:32', 1, 'user-1.png', 0),
(26, 'Farmer Man 9', 'Man', 'people, man, flat, farm', 'free', '0', '2016-07-07 12:49:32', 1, 'user-4.png', 0),
(27, 'Business man 9', 'Man', 'people, man, flat, business', 'free', '0', '2016-07-07 12:50:33', 1, 'user-3.png', 0),
(28, 'Beatiful woman 10', 'Woman', 'people, woman, flat', 'free', '0', '2016-07-07 12:48:33', 1, 'user-1.png', 0),
(29, 'Farmer Man 10', 'Man', 'people, man, flat, farm', 'free', '0', '2016-07-07 12:49:33', 1, 'user-4.png', 0),
(30, 'Business man 10', 'Man', 'people, man, flat, business', 'free', '0', '2016-07-07 12:50:34', 1, 'user-3.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1469091059, 1, 'Admin', 'Belancon', 'ADMIN', '0'),
(10, '127.0.0.1', 'sakukode', '$2y$08$0ociS.LjOmCfW9/3za6.duRTIkgbIgsK0u.h8yVKsmO3p8T4QDWV2', NULL, 'sakukode@gmail.com', NULL, NULL, NULL, NULL, 1469079323, 1469095155, 1, 'Rizqi', 'Maulana', NULL, '085842874104'),
(12, '127.0.0.1', 'testmember', '$2y$08$RqAHJAKnICzMhi5.jOXy3OS58QOo87t4oor9FAjMkxxPhosW1S0bW', NULL, 'testmember@belancon.com', NULL, NULL, NULL, NULL, 1469090996, 1469091009, 1, 'Test', 'Member', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(11, 10, 1),
(13, 12, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contributors`
--
ALTER TABLE `contributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contributors`
--
ALTER TABLE `contributors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
