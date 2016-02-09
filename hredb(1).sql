-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2016 at 09:07 PM
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
-- Table structure for table `house_details`
--

CREATE TABLE IF NOT EXISTS `house_details` (
`house_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `price` varchar(30) NOT NULL,
  `house_description` varchar(15) NOT NULL,
  `road` varchar(15) NOT NULL,
  `owner` varchar(15) NOT NULL,
  `photo1` varchar(80) NOT NULL,
  `photo2` varchar(80) NOT NULL,
  `rfacility` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `house_details`
--

INSERT INTO `house_details` (`house_id`, `type`, `location`, `price`, `house_description`, `road`, `owner`, `photo1`, `photo2`, `rfacility`) VALUES
(7, 'the big boy mansion', 'Kibera', '700-8990', '', 'ngong road', '0', 'assets/img2/a2.jpg', '', 'swimming pool'),
(9, 'House number 1', 'Kibera234446', '700-8990', '', 'ngong road', '0', 'assets/img2/a62.jpg', '', 'swimming pool'),
(10, 'shared apartments an', 'Kileleshwa', '14-150,000', '', 'Riverside drive', '0', 'assets/img2/a73.jpg', '', 'swimming pool'),
(18, 'wtrewte house 1', 'nairobi wire', '2534522', '', 'riverside', '0', 'assets/img2/p11.jpg', '', 't');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` varchar(10) NOT NULL,
  `message_content` varchar(400) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(20) NOT NULL,
  `f_name` varchar(15) NOT NULL,
  `other_names` varchar(25) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `national_id` int(15) NOT NULL,
  `nationality` int(15) NOT NULL,
  `role` int(5) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `f_name`, `other_names`, `phone_number`, `email`, `national_id`, `nationality`, `role`, `password`, `photo`) VALUES
(1, 'Peklo', 'u', 2147483647, 'solo@gmail.com', 2323231, 0, 1, '83878c91171338902e0fe0fb97a8c47a', 'assets/img2/'),
(2, 'Solomon', 'Obiero', 2147483647, 'solo@gmail.com', 54366356, 0, 1, '03c7c0ace395d80182db07ae2c30f034', ''),
(3, 'mm', ',n ', 870709, 'g@g.com', 6969, 0, -1, 'b2f5ff47436671b6e533d8dc3614845d', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house_details`
--
ALTER TABLE `house_details`
 ADD PRIMARY KEY (`house_id`);

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
MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
