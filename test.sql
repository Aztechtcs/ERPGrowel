-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 05:32 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `cus`
--

CREATE TABLE IF NOT EXISTS `cus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cus`
--

INSERT INTO `cus` (`id`, `name`, `emp_id`) VALUES
(1, 'tinu', 2),
(2, 'romy', 1),
(3, 'suraj', 3),
(4, 'karan', 4),
(5, 'motu', 2),
(6, 'patlu', 7),
(7, 'narayan', 1),
(8, 'surya', 4);

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `address`) VALUES
(1, 'nasir', '10179 nawab ganj'),
(2, 'anivesh', 'sarai rohilla'),
(3, 'vijaypal', 'noida  sec 22'),
(4, 'rishi ', 'gurgaao');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL,
  `last_login` timestamp NOT NULL,
  `login` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mothertongue`
--

CREATE TABLE IF NOT EXISTS `mothertongue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Tongue` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Tongue` (`Tongue`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `religion` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `religion` (`religion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`id`, `religion`) VALUES
(4, 'Christian'),
(1, 'Hindu'),
(3, 'Muslim'),
(2, 'Sikh');

-- --------------------------------------------------------

--
-- Table structure for table `sallery`
--

CREATE TABLE IF NOT EXISTS `sallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `sallery` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sallery`
--

INSERT INTO `sallery` (`id`, `emp_id`, `sallery`) VALUES
(1, 1, 15000),
(2, 2, 16000),
(3, 3, 18000),
(4, 4, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `stock_discription`
--

CREATE TABLE IF NOT EXISTS `stock_discription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_id` int(11) NOT NULL,
  `discription` varchar(300) NOT NULL,
  `used_by` varchar(30) NOT NULL,
  `history` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stock_discription`
--

INSERT INTO `stock_discription` (`id`, `stock_id`, `discription`, `used_by`, `history`) VALUES
(1, 1, 'SERVER DELL Intel exon CPU E3 1225 v3 3.2GHz 8GB RAM', 'SERVER', ''),
(2, 2, 'Lenovo ', 'SERVER', '');

-- --------------------------------------------------------

--
-- Table structure for table `stock_type`
--

CREATE TABLE IF NOT EXISTS `stock_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `stock_type`
--

INSERT INTO `stock_type` (`id`, `item`) VALUES
(1, 'CUP'),
(2, 'Monitor'),
(5, 'Keyboard'),
(6, 'Mouse'),
(7, 'Printer'),
(8, 'wire');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `byuser_id` int(11) NOT NULL COMMENT 'assign by id',
  `detail` varchar(256) NOT NULL COMMENT 'detail',
  `touser_id` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `sex` int(1) NOT NULL,
  `dob` date NOT NULL,
  `religion_id` int(2) NOT NULL,
  `country_id` int(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `sex`, `dob`, `religion_id`, `country_id`, `email`, `password`, `active`) VALUES
(1, 'firstname', 'lastname', 1, '1992-05-08', 1, 1, 'dummy@email.com', 'ABC', 1),
(2, '$firstname', '$lastname', 1, '0000-00-00', 1, 1, 'email@me.com', 'b148e7f41fdc3be4b14e8d17e068bbad', 0),
(3, 'nfsd', 'jjk', 1, '0000-00-00', 1, 1, 'demo@kf.co', 'dfba554928684dd4cc9090994977cf8f', 0),
(4, 'NJJ', 'GHGH', 1, '0000-00-00', 1, 1, 'demo@JD.D', 'dfba554928684dd4cc9090994977cf8f', 0),
(5, 'xyz', 'pqr', 0, '0000-00-00', 3, 1, 'demo@zzz.com', '900150983cd24fb0d6963f7d28e17f72', 0),
(6, 'ggg', 'gggg', 1, '0000-00-00', 1, 1, 'demo@xxx.xx', 'dfba554928684dd4cc9090994977cf8f', 0),
(7, 'pppp', 'pppp', 1, '0000-00-00', 1, 1, 'demo@pp.cc', 'dfba554928684dd4cc9090994977cf8f', 0),
(8, 'bh', 'hhh', 1, '0000-00-00', 1, 1, 'demo@kjh.oiu', 'dfba554928684dd4cc9090994977cf8f', 0),
(9, 'jhbh', 'bhbh', 1, '0000-00-00', 1, 1, 'demo@p.o', 'dfba554928684dd4cc9090994977cf8f', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `Profile_for` int(1) NOT NULL,
  `Marital_status` int(1) NOT NULL,
  `Children` varchar(2) NOT NULL DEFAULT 'NA',
  `Culture` int(11) NOT NULL,
  `PlaceofBirth` int(2) NOT NULL,
  `Nationality` int(2) NOT NULL,
  `Education` int(2) NOT NULL,
  `Profession` int(2) NOT NULL,
  `State` int(2) NOT NULL,
  `City` int(2) NOT NULL,
  `Height` varchar(15) NOT NULL,
  `Weight` varchar(15) NOT NULL,
  `Built` varchar(15) NOT NULL,
  `Complexion` varchar(8) NOT NULL,
  `Eyecolor` varchar(15) NOT NULL,
  `Haircolor` varchar(15) NOT NULL,
  `Diet` varchar(12) NOT NULL,
  `Drink` varchar(30) NOT NULL,
  `Smoke` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_work`
--

CREATE TABLE IF NOT EXISTS `user_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `work_id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_work`
--

INSERT INTO `user_work` (`id`, `work_id`, `user`, `password`, `email`) VALUES
(1, 0, 'admin', 'admin', 'nasir@aztechtcs.com'),
(3, 0, 'nasir', 'nasir', 'nasir@ghealthtech.com'),
(4, 0, 'archana', 'growel', 'archana@growelimpex.com');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `start_time` timestamp NOT NULL,
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `work` varchar(500) NOT NULL,
  `complete` int(1) NOT NULL DEFAULT '0',
  `task_id` int(11) NOT NULL,
  `byuser_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `date`, `start_time`, `end_time`, `work`, `complete`, `task_id`, `byuser_id`) VALUES
(52, '2018-03-06', '2018-03-06 07:04:52', '2018-03-06 23:24:07', 'dffd', 1, 0, 1),
(53, '2018-03-06', '2018-03-06 07:09:57', '2018-03-06 23:24:16', 'mkfc', 1, 0, 1),
(54, '2018-03-06', '2018-03-06 07:13:17', '2018-03-06 23:24:19', 'tea break', 1, 0, 1),
(56, '2018-03-07', '2018-03-06 23:33:08', '2018-03-07 05:03:08', 'hii work are ready', 0, 0, 3),
(57, '2018-03-07', '2018-03-06 23:33:50', '2018-03-07 05:03:50', 'ERP solution ready', 0, 0, 3),
(58, '2018-03-07', '2018-03-07 00:10:28', '2018-03-07 05:32:02', 'my new', 1, 0, 3),
(59, '2018-03-07', '2018-03-07 00:18:10', '2018-03-07 05:48:10', 'mee', 0, 0, 1),
(60, '2018-03-07', '2018-03-07 00:18:48', '2018-03-10 22:27:49', 'jsd', 1, 0, 3),
(61, '2018-03-07', '2018-03-07 00:33:55', '2018-03-07 06:03:55', 'admin user work', 0, 0, 1),
(62, '2018-03-07', '2018-03-07 02:17:01', '2018-03-07 07:47:01', 'not done work', 0, 0, 1),
(63, '2018-03-07', '2018-03-07 02:21:34', '2018-03-07 07:51:34', 'hi thi is my work', 0, 0, 1),
(64, '2018-03-07', '2018-03-07 03:11:41', '2018-03-07 08:41:41', 'jiksadikds\n', 0, 0, 1),
(65, '2018-03-07', '2018-03-07 03:11:53', '2018-03-07 08:41:53', 'tea break', 0, 0, 1),
(66, '2018-03-07', '2018-03-07 03:13:03', '2018-03-07 08:43:03', 'bhjfs f  fds dfs  s sdfc daf ad f dsaf dsf dsf sdf fd', 0, 0, 1),
(67, '2018-03-07', '2018-03-07 03:13:56', '2018-03-07 03:18:51', '1234567890123456789012345678901234567890123456789012345678901234567890', 1, 0, 1),
(68, '2018-03-07', '2018-03-07 03:17:57', '2018-03-07 08:47:57', 'hi i am fine there and hope you will be glade there .\n 1 2 3 4 5 6 7 8 9 0 1 2 3 4 5  6 ', 0, 0, 1),
(69, '2018-03-07', '2018-03-07 05:22:54', '2018-03-07 10:52:54', 'complete loggoff', 0, 0, 1),
(70, '2018-03-07', '2018-03-07 05:25:56', '2018-03-07 10:55:56', 'testing software solution', 0, 0, 3),
(71, '2018-03-07', '2018-03-07 05:39:04', '2018-03-07 11:09:04', 'flight booking', 0, 0, 4),
(72, '2018-03-07', '2018-03-07 06:17:41', '2018-03-07 11:47:41', 'Sampling', 0, 0, 3),
(73, '2018-03-07', '2018-03-07 06:18:09', '2018-03-07 11:48:09', 'help to mukul', 0, 0, 3),
(74, '2018-03-08', '2018-03-07 23:41:25', '2018-03-08 05:11:25', 'Server Open and check mail', 0, 0, 3),
(75, '2018-03-08', '2018-03-08 00:58:07', '2018-03-08 06:28:07', 'mail check aztech', 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `work_sub`
--

CREATE TABLE IF NOT EXISTS `work_sub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `work_id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `comment` varchar(500) NOT NULL,
  `complete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
