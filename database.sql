
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2015 at 05:18 PM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u323038233_quikr`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate_items`
--

CREATE TABLE IF NOT EXISTS `donate_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngo_id` int(11) DEFAULT NULL,
  `category` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `ngo_id` (`ngo_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `donate_items`
--

INSERT INTO `donate_items` (`id`, `ngo_id`, `category`, `qty`, `user_id`, `post_date`) VALUES
(1, 4, 'Clothes', 20, 1, '2015-09-13 14:29:11'),
(2, 1, 'Blankets', 15, 2, '2015-09-13 14:29:11'),
(3, NULL, 'Books', 40, 5, '2015-09-13 14:30:18'),
(4, 0, 'Shoes', 10, 3, '2015-09-13 14:30:18'),
(5, NULL, 'Clothes', 30, 4, '2015-09-13 14:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `sale_id` int(20) DEFAULT NULL,
  `message` varchar(70) DEFAULT NULL,
  `post_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `sale_id` (`sale_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `sale_id`, `message`, `post_time`) VALUES
(1, 2, 1, 'Can we negotiate on the price?', '2015-09-13 14:24:48'),
(2, 4, 5, 'Please Can you elaborate on the looks/problems?', '2015-09-13 14:24:48'),
(3, 3, 1, 'Sorry, fixed price.', '2015-09-13 14:27:08'),
(4, 2, 1, 'Can you extend the due date please?', '2015-09-13 14:27:08'),
(5, 1, 0, 'How old is it?', '2015-09-13 14:28:11'),
(6, 1, 0, 'Please can I keep it for 1 more month than the due date?', '2015-09-13 14:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `ngos`
--

CREATE TABLE IF NOT EXISTS `ngos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `tags` varchar(50) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `reputation` int(11) DEFAULT NULL,
  `image_path` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ngos`
--

INSERT INTO `ngos` (`id`, `name`, `tags`, `city`, `location`, `reputation`, `image_path`) VALUES
(1, 'Sankalp We Care', 'Books, Blankets', 'Bangalore', 'Electronic City', 9, 'http://static.guim.co.uk/sys-images/Environment/Pix/columnists/2011/4/7/1302197044723/MDG--NGO-in-Cambodia-006.jpg'),
(2, 'All For All', 'Clothes, Computers', 'Bangalore', 'Banashankari', 7, 'http://cdn.youthkiawaaz.com/wp-content/uploads/2011/01/indian-NGO.jpg'),
(3, 'Prem', 'Bags, Shoes', 'Mumbai', 'Bandra', 8, 'http://www.youthmission.org.in/myimg/28ngo4.jpg'),
(4, 'Soch', 'Stationary, Clothes, Blankets', 'Delhi', 'Dwarka', 7, 'http://static.indianexpress.com/m-images/M_Id_307360_NGO.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `points` int(11) DEFAULT NULL,
  `offer` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `points`, `offer`) VALUES
(1, 15, 'WOW150'),
(2, 30, 'BEST200'),
(3, 15, 'TOP100');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sale_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `sale_id` (`sale_id`),
  KEY `seller_id` (`seller_id`),
  KEY `buyer_id` (`buyer_id`),
  KEY `sale_id_2` (`sale_id`),
  KEY `seller_id_2` (`seller_id`),
  KEY `buyer_id_2` (`buyer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `sale_id`, `seller_id`, `buyer_id`, `time`) VALUES
(1, 1, 3, 5, '2015-09-13 14:12:39'),
(2, 1, 3, 5, '2015-09-13 14:12:39'),
(3, 0, 2, 3, '2015-09-13 14:13:33'),
(4, 5, 2, 5, '2015-09-13 14:13:33'),
(5, 5, 2, 3, '2015-09-13 14:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE IF NOT EXISTS `rewards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `points` int(11) DEFAULT NULL,
  `offer` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `points`, `offer`) VALUES
(1, 25, 'GOTOP'),
(2, 10, 'UP1UP'),
(3, 40, 'FIRST1');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(20) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `post_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` date DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `offer_code` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `buyer_id` (`buyer_id`),
  KEY `user_id` (`user_id`),
  KEY `reward_id` (`offer_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `name`, `user_id`, `category_id`, `location`, `post_date`, `due_date`, `cost`, `offer_code`, `buyer_id`) VALUES
(0, 'Projector', 2, 1, 'Bangalore', '2015-09-13 13:51:08', '2015-10-15', 500, NULL, NULL),
(1, 'Engineering Math2', 3, 2, 'Bangalore', '2015-09-13 14:00:06', '2015-12-30', 100, NULL, NULL),
(2, 'Data Structures', 5, 2, 'Bangalore', '2015-09-13 14:00:06', '2015-12-30', 60, NULL, 3),
(5, 'OS Text Book', 2, 2, 'Bangalore', '2015-09-13 14:06:46', '2015-12-30', 0, NULL, NULL),
(6, 'Water Purifier', 4, 5, 'Delhi', '2015-09-13 14:06:46', '2016-09-21', 1500, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `phone_num` varchar(11) DEFAULT NULL,
  `student` tinyint(1) DEFAULT NULL,
  `institution` varchar(30) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `reputaion` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  `user_token` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_num`, `student`, `institution`, `city`, `address`, `reputaion`, `points`, `level`, `user_token`) VALUES
(3, 'Rajesh Kumar', 'rajesh.rk@yahoo.co.in', 'quikr7655', '8147483647', 0, NULL, 'Delhi', 'Ajmeri Gate', 7, 30, 'Gold', NULL),
(4, 'Piyush Agarwal', 'p.agarwal@gmail.com', 'piyushquikr', '9214748364', 1, 'RVCE', 'Bangalore', 'Mysore Road', 8, 23, 'Silver', NULL),
(5, 'Pooja Baluja', 'poojab@gmail.com', 'aestheticpoo', '7981272345', 1, 'PESIT South Campus', 'Bangalore', 'Electronic City', 9, 35, 'Diamond', NULL),
(6, 'Yashanjay Shinde', 'shinde.yash@ymail.com', 'terminator007', '9929772811', 0, NULL, 'Mumbai', 'Colaba', 6, 3, 'Silver', NULL),
(7, 'Rakesh Kumar', 'rkrakesh@gmail.com', '11raj77kumar', '8140183647', 1, 'PESIT South Campus', 'Bangalore', 'Electronic City', 6, 11, 'Gold', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE IF NOT EXISTS `users1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone_num` int(11) DEFAULT NULL,
  `student` tinyint(1) DEFAULT NULL,
  `institution` varchar(30) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `reputaion` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `name`, `email`, `phone_num`, `student`, `institution`, `city`, `address`, `reputaion`, `points`, `level`) VALUES
(2, 'saf', 'sfdg', 32432432, 1, 'hfj', 'djfhg', 'fghjfgf', 12, 21, 'gfk');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
