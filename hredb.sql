-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2016 at 11:25 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('c464f9e1d7d26bb0c92b722d22403c35', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:43.0) Gecko/20100101 Firefox/43.0', 1455005084, 'a:8:{s:9:"user_data";s:0:"";s:5:"email";s:20:"enockoloo6@gmail.com";s:7:"user_id";s:1:"5";s:12:"is_logged_in";b:1;s:4:"role";s:1:"1";s:6:"f_name";s:6:"Enock ";s:5:"photo";s:19:"assets/img2/8s1.jpg";s:11:"other_names";N;}');

-- --------------------------------------------------------

--
-- Table structure for table `house_details`
--

CREATE TABLE IF NOT EXISTS `house_details` (
`house_id` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `price` varchar(30) NOT NULL,
  `house_description` varchar(15) NOT NULL,
  `road` varchar(15) NOT NULL,
  `photo1` varchar(40) NOT NULL,
  `owner` int(10) NOT NULL,
  `rfacility` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `house_details`
--

INSERT INTO `house_details` (`house_id`, `type`, `location`, `price`, `house_description`, `road`, `photo1`, `owner`, `rfacility`) VALUES
(5, 'ilyf', 'nairobi wire', '', '', '', 'assets/img2/5s4.jpg', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `house_owners`
--

CREATE TABLE IF NOT EXISTS `house_owners` (
  `house` int(10) NOT NULL,
  `house_owner` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house_owners`
--

INSERT INTO `house_owners` (`house`, `house_owner`) VALUES
(0, 6),
(0, 6),
(0, 6),
(0, 6),
(0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `Image_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Image_id`, `user_id`, `image_name`) VALUES
(5, 6, 'assets/img2/5s4.jpg'),
(NULL, 5, 'assets/img2/4s8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE IF NOT EXISTS `interests` (
  `person_id` int(10) NOT NULL,
  `activity` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(10) NOT NULL,
  `sender_id` int(10) NOT NULL,
  `recipient_id` int(10) NOT NULL,
  `message body` varchar(100) NOT NULL,
  `message_status` varchar(10) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(10) NOT NULL,
  `f_name` varchar(15) NOT NULL,
  `other_names` varchar(25) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `national_id` int(15) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `role` int(5) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `f_name`, `other_names`, `phone_number`, `email`, `national_id`, `nationality`, `occupation`, `age`, `role`, `password`, `photo`) VALUES
(5, 'Enock ', 'Oloo', '0701058958', 'enockoloo6@gmail.com', 30442011, '', '', '', 1, 'fcd5c7d74e70e94a8983a3362239e903', 'assets/img2/12s.jpg'),
(6, 'oll', 'ol', '8756', 'oloo6@gmail.com', 578, '', '', '', -1, 'fcd5c7d74e70e94a8983a3362239e903', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `house_details`
--
ALTER TABLE `house_details`
 ADD PRIMARY KEY (`house_id`), ADD UNIQUE KEY `photo1` (`photo1`), ADD KEY `owner` (`owner`);

--
-- Indexes for table `house_owners`
--
ALTER TABLE `house_owners`
 ADD KEY `house` (`house`), ADD KEY `house_owner` (`house_owner`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD KEY `Image_id` (`Image_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
 ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`message_id`), ADD KEY `sender_id` (`sender_id`), ADD KEY `recipient_id` (`recipient_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `house_details`
--
ALTER TABLE `house_details`
MODIFY `house_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `house_details`
--
ALTER TABLE `house_details`
ADD CONSTRAINT `house_details_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `house_owners` (`house_owner`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `house_owners`
--
ALTER TABLE `house_owners`
ADD CONSTRAINT `house_owners_ibfk_1` FOREIGN KEY (`house_owner`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`Image_id`) REFERENCES `house_details` (`house_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `images_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `interests`
--
ALTER TABLE `interests`
ADD CONSTRAINT `interests_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`message_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
