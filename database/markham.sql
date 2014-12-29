-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2014 at 07:12 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `markham`
--
CREATE DATABASE IF NOT EXISTS `markham` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `markham`;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(500) NOT NULL,
  UNIQUE KEY `message` (`message`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`date`, `name`, `email`, `phone`, `message`) VALUES
('2014-04-02', 'Smith Osinowo', 'smithymethods@yahoo.com', '08026319876', 'This is an awesome website.'),
('2014-04-02', 'Sowale Tolulope', 'tolu@live.com', '6476564567', 'this is cool'),
('2014-04-02', 'Newton Osinowo', 'newton407@yahoo.com', '6473849454', 'This is wonderful');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productid` varchar(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `year` int(7) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `product_name`, `author`, `price`, `year`, `product_image`) VALUES
('MKB100', 'WordPress To Go', 'Sarah McHarry', '210', 2013, 'products/wordpress.jpg'),
('MKB101', 'C# 5.0 in a Nutshell', 'Ben Albahari', '200', 2005, 'products/CNutshell.jpg'),
('MKB102', 'Creating a Website: Missing Manual', 'Matthew MacDonald', '150', 2010, 'products/website-creation.jpg'),
('MKB103', 'SQL All-in-One For Dummies', 'Allen G. Taylor', '300', 2011, 'products/sql.jpg'),
('MKB104', 'Java Performance: The Definitive Guide', 'Scott Oaks', '380', 2007, 'products/java.jpg'),
('MKB105', 'Professional Android 4 Application Development', 'Reto Meier', '350', 2006, 'products/android.jpg'),
('MKB106', 'Oracle 10g Developer: PL/SQL Programming', 'Joan Casteel', '400', 2014, 'products/oracle.jpg'),
('MKB107', 'Adobe Photoshop CC for Photographers', 'Martin Evening', '290', 2005, 'products/photoshop.jpg'),
('MKB108', 'Programming in HTML5 with JavaScript and CSS3', 'Glenn Johnson', '320', 2004, 'products/html.jpg'),
('MKB109', 'Ajax: The Complete Reference', 'Thomas Powell', '250', 2006, 'products/ajax.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` smallint(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `first_name`, `last_name`, `address`, `email`) VALUES
(1, 'newton407', 'e10adc3949ba59abbe56e057f20f883e', 'Newton', 'Osinowo', '256 Yorland, Toronto', 'newton407@yahoo.com'),
(13, 'smithymethods', 'c33367701511b4f6020ec61ded352059', 'Smith', 'Osinowo', '10, Shawnee Circle, Toronto', 'smithymethod@yahoo.com'),
(14, 'chinedu', 'e10adc3949ba59abbe56e057f20f883e', 'chinedu', 'chinedu', '2, frank avenue, toronto', 'chinedu@yahoo.com'),
(16, 'tolex', 'e10adc3949ba59abbe56e057f20f883e', 'Tolu', 'Sowale', '265, Yorkland, Toronto', 'tolu@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
