-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2014 at 07:16 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--
CREATE DATABASE IF NOT EXISTS `laravel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laravel`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_04_28_183243_create_users_table', 1),
('2014_04_28_220333_create_project_table', 2),
('2014_04_28_220352_create_task_table', 2),
('2014_04_29_011100_create_task_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_title_unique` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Project 1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Project 2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Project 3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `project_id` int(11) NOT NULL,
  `priority` tinyint(4) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `title`, `project_id`, `priority`, `start_date`, `end_date`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Task2', 1, 2, '2014-04-01 19:30:00', '2014-04-07 19:30:00', 'DescriptionDescriptionDescriptionDescriptionDescriptionDescription', '2014-04-28 21:23:09', '2014-05-02 11:59:12'),
(3, 'Task3', 2, 1, '2014-03-01 20:30:00', '2014-03-04 20:30:00', 'Create Task\r\n\r\nTitle Project Start Date End Date Priority Description', '2014-04-28 21:27:17', '2014-05-03 00:37:18'),
(4, 'Task 4', 1, 4, '2014-05-02 17:36:09', '2014-05-04 14:11:28', '0000-00-00', '2014-04-28 21:28:37', '2014-04-28 21:28:37'),
(7, 'Task 6', 1, 1, '2014-05-02 17:36:12', '2014-05-05 14:11:29', 'sad', '2014-04-28 21:32:34', '2014-04-28 21:32:34'),
(8, 'Tast 7', 1, 2, '2014-05-02 17:36:33', '2014-05-19 14:11:31', 'sadas\r\nas\r\nd\r\na\r\nsd\r\nas\r\n\r\nds', '2014-04-28 21:33:30', '2014-04-28 21:33:30'),
(9, 'Task10', 3, 4, '2014-05-02 17:36:28', '2014-05-20 14:11:32', 'Desription dsription desription dsription dsription desription dsription dsription desription dsription dsription desription dsription dsription desription dsription dsription desription dsription dsription desription dsription dsription desription dsription dsription desription dsription dsription desription dsription dsription desription dsription dsription desription dsription dsription desription dsription dsription desription dsription dsription desription dsription dsription desr', '2014-05-01 23:48:47', '2014-05-01 23:57:53'),
(10, 'Task4', 2, 1, '2014-05-03 17:36:19', '2014-05-02 17:36:17', 'DescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescription', '2014-05-02 10:54:47', '2014-05-02 10:54:47'),
(11, 'Tast32', 2, 4, '2014-05-26 17:36:36', '2014-05-28 17:36:33', 'sadsd', '2014-05-02 12:00:01', '2014-05-02 12:02:10'),
(12, 'Task6', 1, 1, '2014-05-02 17:36:49', '2014-05-21 19:30:00', '', '2014-05-02 12:01:27', '2014-05-02 12:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Majid', 'mj', 'majid@mha.com', '$2y$10$7tgdYTghOlALNsdNrLrULOPLq/LbsAs3C38gRsWBK13MdQF9NjWf6', '2014-04-28 15:11:15', '2014-04-28 15:11:15'),
(4, 'Mohsen', 'mh', 'mohsen@mha.com', '$2y$10$792glDbb.osl3qsLaPxaCuyG7LiH6GsYUEf4S9dXipzX0DEGIKA1K', '2014-04-28 15:11:15', '2014-04-28 15:11:15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
