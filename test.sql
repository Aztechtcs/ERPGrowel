-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 08, 2018 at 06:01 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

DROP TABLE IF EXISTS `buyer`;
CREATE TABLE IF NOT EXISTS `buyer` (
  `name` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`name`, `date`) VALUES
('abc', '2018-03-30 11:09:15'),
('absh', '2018-04-02 05:28:30'),
('Bhartiye', '2018-04-02 11:28:19'),
('fashion', '2018-03-30 10:37:19'),
('jk', '2018-03-30 12:23:04'),
('kjas', '2018-03-30 12:10:39'),
('Kokaidi', '2018-04-02 08:24:54'),
('ksaj', '2018-03-30 12:09:42'),
('manish', '2018-04-13 05:04:00'),
('mnksd', '2018-03-30 12:08:31'),
('monoprix', '2018-03-30 12:39:27'),
('nasiruddin', '2018-04-03 04:53:22'),
('neha', '2018-04-02 11:43:10'),
('nk', '2018-03-30 12:23:58'),
('rishi', '2018-04-02 11:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `rbd` int(11) NOT NULL COMMENT 'Reminder Before Days',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `rbd`) VALUES
(1, 'Merchandiser', 2),
(2, 'Sampling', 15),
(3, 'Store_febric', 1),
(4, 'Production', 1),
(5, 'Documentation', 0),
(6, 'Accounts', 0),
(7, 'Accessories Store', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_work`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `get_work`;
CREATE TABLE IF NOT EXISTS `get_work` (
`id` int(11)
,`byuser_id` int(11)
,`start_time` timestamp
,`work` varchar(500)
,`complete` int(1)
,`ConsumeTime` bigint(21)
,`comment` varchar(400)
);

-- --------------------------------------------------------

--
-- Table structure for table `material_flow`
--

DROP TABLE IF EXISTS `material_flow`;
CREATE TABLE IF NOT EXISTS `material_flow` (
  `int` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`int`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material_flow`
--

INSERT INTO `material_flow` (`int`, `name`) VALUES
(6, ''),
(3, 'cutting'),
(4, 'fabric laying'),
(1, 'fabric received in store'),
(5, 'lay cutting'),
(2, 'proceed for inspection');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

DROP TABLE IF EXISTS `mobile`;
CREATE TABLE IF NOT EXISTS `mobile` (
  `phone` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`phone`, `name`, `type`, `department_id`) VALUES
('8800940916', 'Ravinder Master', 1, 4),
('9205129389', 'Sunaina', 1, 1),
('9560969260', 'Ashok', 1, 4),
('9716942965', 'Nasiruddin', 1, 1),
('9818899215', 'Sanjay Gulati', 1, 1),
('9821685057', 'Kavita', 1, 1),
('9873146399', 'Mahendra', 1, 1),
('9891726238', 'vijay master', 1, 2),
('9891744388', 'Archana', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_log`
--

DROP TABLE IF EXISTS `mobile_log`;
CREATE TABLE IF NOT EXISTS `mobile_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(500) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=310 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_log`
--

INSERT INTO `mobile_log` (`id`, `message`, `datetime`) VALUES
(1, '{http://api.msg91.com/api/sendhttp.php?sender=MSGIND&route=4&mobiles=9716942965&authkey=212278AQBrPfyBwO5ae077e7&country=0&message=Today Tasks _ | manishabcd / ORIGINAL SAMPLE GIVEN | manishabcd / FABRIC QUALITY GIVEN | manishabcd / COLOR STANDARD GIVEN | manishabcd / SPEC RECEIVED DATE<br> Success- 38647a6d7444383537303939},{9716942965},{Today Tasks _ | manishabcd / ORIGINAL SAMPLE GIVEN | manishabcd / FABRIC QUALITY GIVEN | manishabcd / COLOR STANDARD GIVEN | manishabcd / SPEC RECEIVED DATE}', '2018-04-26 07:50:27'),
(2, '{testdemo},{9205129389},{Hi Sunaina, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:11:07'),
(3, '{testdemo},{9716942965},{Hi Nasiruddin, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:11:07'),
(4, '{testdemo},{9818899215},{Hi Director, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:11:08'),
(5, '{testdemo},{9821685057},{Hi Kavita, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:11:08'),
(6, '{testdemo},{9873146399},{Hi Mahendra, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:11:08'),
(7, '{testdemo},{9891744388},{Hi Archana, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:11:08'),
(8, '{testdemo},{9891726238},{Hi vijay master, Total 1 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>}', '2018-05-02 09:11:08'),
(9, '{testdemo},{8800940916},{Hi Ravinder Master, Total 0 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/1/4 <br>}', '2018-05-02 09:11:08'),
(10, '{testdemo},{9205129389},{Hi Sunaina, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:11:18'),
(11, '{testdemo},{9716942965},{Hi Nasiruddin, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:11:18'),
(12, '{testdemo},{9818899215},{Hi Director, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:11:18'),
(13, '{testdemo},{9821685057},{Hi Kavita, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:11:18'),
(14, '{testdemo},{9873146399},{Hi Mahendra, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:11:18'),
(15, '{testdemo},{9891744388},{Hi Archana, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:11:18'),
(16, '{testdemo},{9891726238},{Hi vijay master, Total 1 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>}', '2018-05-02 09:11:19'),
(17, '{testdemo},{8800940916},{Hi Ravinder Master, Total 0 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/1/4 <br>}', '2018-05-02 09:11:19'),
(18, '{testdemo},{9205129389},{Hi Sunaina Good Morning Enjoy <br>}', '2018-05-02 09:14:37'),
(19, '{testdemo},{9716942965},{Hi Nasiruddin Good Morning Enjoy <br>}', '2018-05-02 09:14:37'),
(20, '{testdemo},{9818899215},{Hi Director Good Morning Enjoy <br>}', '2018-05-02 09:14:37'),
(21, '{testdemo},{9821685057},{Hi Kavita Good Morning Enjoy <br>}', '2018-05-02 09:14:37'),
(22, '{testdemo},{9873146399},{Hi Mahendra Good Morning Enjoy <br>}', '2018-05-02 09:14:37'),
(23, '{testdemo},{9891744388},{Hi Archana Good Morning Enjoy <br>}', '2018-05-02 09:14:37'),
(24, '{testdemo},{9891726238},{Hi vijay master Good Morning Enjoy <br>}', '2018-05-02 09:14:37'),
(25, '{testdemo},{8800940916},{Hi Ravinder Master, Total 0 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/1/4 <br>}', '2018-05-02 09:14:37'),
(26, '{testdemo},{9205129389},{Hi Sunaina, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:15:41'),
(27, '{testdemo},{9716942965},{Hi Nasiruddin, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:15:41'),
(28, '{testdemo},{9818899215},{Hi Director, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:15:41'),
(29, '{testdemo},{9821685057},{Hi Kavita, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:15:41'),
(30, '{testdemo},{9873146399},{Hi Mahendra, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:15:42'),
(31, '{testdemo},{9891744388},{Hi Archana, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:15:42'),
(32, '{testdemo},{9891726238},{Hi vijay master, Total 1 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>}', '2018-05-02 09:15:42'),
(33, '{testdemo},{8800940916},{Hi Ravinder Master, Total 0 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/1/4 <br>}', '2018-05-02 09:15:42'),
(34, '{testdemo},{9205129389},{Hi Sunaina, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:15:53'),
(35, '{testdemo},{9716942965},{Hi Nasiruddin, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:15:53'),
(36, '{testdemo},{9818899215},{Hi Director, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:15:53'),
(37, '{testdemo},{9821685057},{Hi Kavita, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:15:53'),
(38, '{testdemo},{9873146399},{Hi Mahendra, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:15:53'),
(39, '{testdemo},{9891744388},{Hi Archana, Total 4 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:15:53'),
(40, '{testdemo},{9891726238},{Hi vijay master, Total 1 Pending Work click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>}', '2018-05-02 09:15:54'),
(41, '{testdemo},{8800940916},{Hi Ravinder Master Good Morning Enjoy <br>}', '2018-05-02 09:15:54'),
(42, '{testdemo},{9205129389},{Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:18:41'),
(43, '{testdemo},{9716942965},{Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:18:41'),
(44, '{testdemo},{9818899215},{Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:18:41'),
(45, '{testdemo},{9821685057},{Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:18:41'),
(46, '{testdemo},{9873146399},{Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:18:41'),
(47, '{testdemo},{9891744388},{Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:18:41'),
(48, '{testdemo},{9891726238},{Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>}', '2018-05-02 09:18:41'),
(49, '{testdemo},{8800940916},{Hi Ravinder Master Good Morning Enjoy <br>}', '2018-05-02 09:18:41'),
(50, '{testdemo},{9205129389},{Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:19:44'),
(51, '{testdemo},{9716942965},{Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:19:44'),
(52, '{testdemo},{9818899215},{Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:19:44'),
(53, '{testdemo},{9821685057},{Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:19:44'),
(54, '{testdemo},{9873146399},{Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:19:44'),
(55, '{testdemo},{9891744388},{Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>}', '2018-05-02 09:19:44'),
(56, '{testdemo},{9891726238},{Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>}', '2018-05-02 09:19:44'),
(57, '{testdemo},{8800940916},{Hi Ravinder Master Good Morning Enjoy <br>}', '2018-05-02 09:19:44'),
(58, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:30:08'),
(59, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:30:08'),
(60, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:30:08'),
(61, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:30:08'),
(62, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:30:08'),
(63, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:30:08'),
(64, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:30:08'),
(65, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Enjoy <br>\"}', '2018-05-02 09:30:08'),
(66, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:31:22'),
(67, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:31:22'),
(68, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:31:22'),
(69, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:31:22'),
(70, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:31:22'),
(71, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:31:22'),
(72, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:31:22'),
(73, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Enjoy <br>\"}', '2018-05-02 09:31:22'),
(74, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:20'),
(75, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:20'),
(76, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:20'),
(77, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:20'),
(78, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:20'),
(79, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:20'),
(80, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:40:20'),
(81, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Everyday may not be good, but there is something good in every day\"}', '2018-05-02 09:40:20'),
(82, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:23'),
(83, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:23'),
(84, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:23'),
(85, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:23'),
(86, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:23'),
(87, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:23'),
(88, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:40:23'),
(89, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Set a goal that makes you want to jump out of bed in the morning\"}', '2018-05-02 09:40:23'),
(90, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:24'),
(91, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:24'),
(92, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:24'),
(93, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:24'),
(94, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:24'),
(95, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:24'),
(96, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:40:24'),
(97, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning When you start each day with a grateful heart\"}', '2018-05-02 09:40:24'),
(98, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:26'),
(99, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:26'),
(100, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:26'),
(101, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:26'),
(102, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:26'),
(103, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:26'),
(104, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:40:26'),
(105, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Having a rough morning?\"}', '2018-05-02 09:40:26'),
(106, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:27'),
(107, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:27'),
(108, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:27'),
(109, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:27'),
(110, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:28'),
(111, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:28'),
(112, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:40:28'),
(113, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Set a goal that makes you want to jump out of bed in the morning\"}', '2018-05-02 09:40:28'),
(114, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:29'),
(115, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:29'),
(116, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:29'),
(117, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:29'),
(118, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:29'),
(119, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:29'),
(120, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:40:29'),
(121, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Everyday may not be good, but there is something good in every day\"}', '2018-05-02 09:40:29'),
(122, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:31'),
(123, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:31'),
(124, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:31'),
(125, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:31'),
(126, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:31'),
(127, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:31'),
(128, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:40:31'),
(129, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Having a rough morning?\"}', '2018-05-02 09:40:31'),
(130, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:33'),
(131, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:33'),
(132, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:33'),
(133, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:33'),
(134, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:34'),
(135, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:34'),
(136, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:40:34'),
(137, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning \"}', '2018-05-02 09:40:34'),
(138, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:51'),
(139, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:51'),
(140, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:51'),
(141, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:51'),
(142, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:51'),
(143, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:51'),
(144, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:40:51'),
(145, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Everyday may not be good, but there is something good in every day\"}', '2018-05-02 09:40:51'),
(146, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:53'),
(147, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:53'),
(148, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:53'),
(149, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:53'),
(150, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:53'),
(151, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:53'),
(152, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:40:53'),
(153, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Everyday may not be good, but there is something good in every day\"}', '2018-05-02 09:40:53'),
(154, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:55'),
(155, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:55'),
(156, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:55'),
(157, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:55'),
(158, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:55'),
(159, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:55'),
(160, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:40:55'),
(161, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Having a rough morning?\"}', '2018-05-02 09:40:55'),
(162, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:56'),
(163, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:57'),
(164, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:57'),
(165, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:57'),
(166, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:57'),
(167, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:57'),
(168, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:40:57'),
(169, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning When you start each day with a grateful heart\"}', '2018-05-02 09:40:57'),
(170, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:58'),
(171, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:58'),
(172, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:58'),
(173, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:58'),
(174, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:58'),
(175, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:40:58'),
(176, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:40:58'),
(177, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Having a rough morning?\"}', '2018-05-02 09:40:58'),
(178, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:00'),
(179, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:00'),
(180, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:00'),
(181, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:00'),
(182, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:00'),
(183, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:00'),
(184, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:41:00'),
(185, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Everyday may not be good, but there is something good in every day\"}', '2018-05-02 09:41:00'),
(186, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:01'),
(187, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:01'),
(188, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:01'),
(189, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:01'),
(190, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:01'),
(191, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:01'),
(192, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:41:01'),
(193, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Everyday may not be good, but there is something good in every day\"}', '2018-05-02 09:41:01'),
(194, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:04'),
(195, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:04'),
(196, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:04'),
(197, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:04'),
(198, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:04'),
(199, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:04'),
(200, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:41:04'),
(201, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning When you start each day with a grateful heart\"}', '2018-05-02 09:41:04'),
(202, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:06'),
(203, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:06'),
(204, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:06'),
(205, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:06'),
(206, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:06'),
(207, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:06'),
(208, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:41:06'),
(209, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning When you start each day with a grateful heart\"}', '2018-05-02 09:41:06'),
(210, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:07'),
(211, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:07'),
(212, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:07'),
(213, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:07'),
(214, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:07'),
(215, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:07'),
(216, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:41:07'),
(217, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Everyday may not be good, but there is something good in every day\"}', '2018-05-02 09:41:07'),
(218, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:08'),
(219, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:08'),
(220, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:08'),
(221, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:08'),
(222, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:08'),
(223, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:08'),
(224, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:41:08'),
(225, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Rise up, start fresh see the bright opportunity in each day\"}', '2018-05-02 09:41:08'),
(226, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:09'),
(227, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:10'),
(228, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:10'),
(229, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:10'),
(230, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:10'),
(231, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:10'),
(232, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:41:10'),
(233, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Set a goal that makes you want to jump out of bed in the morning\"}', '2018-05-02 09:41:10'),
(234, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:11'),
(235, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:11'),
(236, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:11'),
(237, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:11'),
(238, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:11'),
(239, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:11'),
(240, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:41:11'),
(241, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Having a rough morning?\"}', '2018-05-02 09:41:11'),
(242, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:12'),
(243, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:12'),
(244, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:12'),
(245, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:12'),
(246, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:12'),
(247, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:12'),
(248, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:41:12'),
(249, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning When you start each day with a grateful heart\"}', '2018-05-02 09:41:12'),
(250, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:14'),
(251, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:14'),
(252, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:14'),
(253, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:14'),
(254, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:14'),
(255, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:14'),
(256, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:41:14'),
(257, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Rise up, start fresh see the bright opportunity in each day\"}', '2018-05-02 09:41:14'),
(258, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:21'),
(259, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:21'),
(260, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:21'),
(261, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:21'),
(262, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:21'),
(263, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:21'),
(264, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:41:21'),
(265, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Having a rough morning?\"}', '2018-05-02 09:41:21'),
(266, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:24'),
(267, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:24'),
(268, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:24'),
(269, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:24'),
(270, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:24'),
(271, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:24'),
(272, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:41:24'),
(273, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Everyday may not be good, but there is something good in every day\"}', '2018-05-02 09:41:24'),
(274, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:30'),
(275, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:30'),
(276, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:30'),
(277, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:30'),
(278, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:30'),
(279, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:41:30'),
(280, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:41:31'),
(281, '{\"testdemo\"},{\"8800940916\"},{\"Hi Ravinder Master Good Morning Everyday may not be good, but there is something good in every day\"}', '2018-05-02 09:41:31'),
(282, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:43:18'),
(283, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:43:18'),
(284, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:43:18'),
(285, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:43:18'),
(286, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:43:18'),
(287, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:43:18'),
(288, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:43:18'),
(289, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:43:59'),
(290, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:43:59'),
(291, '{\"testdemo\"},{\"9818899215\"},{\"Hi Director, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:43:59'),
(292, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:43:59'),
(293, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:43:59'),
(294, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:43:59'),
(295, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:43:59'),
(296, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:58:33'),
(297, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:58:33'),
(298, '{\"testdemo\"},{\"9818899215\"},{\"Hi Sanjay Gulati, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:58:33'),
(299, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:58:33'),
(300, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:58:33'),
(301, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 09:58:33'),
(302, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 09:58:33'),
(303, '{\"testdemo\"},{\"9205129389\"},{\"Hi Sunaina, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 10:04:35'),
(304, '{\"testdemo\"},{\"9716942965\"},{\"Hi Nasiruddin, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 10:04:35'),
(305, '{\"testdemo\"},{\"9818899215\"},{\"Hi Sanjay Gulati, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 10:04:35'),
(306, '{\"testdemo\"},{\"9821685057\"},{\"Hi Kavita, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 10:04:36'),
(307, '{\"testdemo\"},{\"9873146399\"},{\"Hi Mahendra, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 10:04:36'),
(308, '{\"testdemo\"},{\"9891744388\"},{\"Hi Archana, 4 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/2/1 <br>\"}', '2018-05-02 10:04:36'),
(309, '{\"testdemo\"},{\"9891726238\"},{\"Hi vijay master, 1 Pending Work for you Click http://127.0.0.1/ERPGrowel/Alert/tl/15/2 <br>\"}', '2018-05-02 10:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

DROP TABLE IF EXISTS `operation`;
CREATE TABLE IF NOT EXISTS `operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operation`
--

INSERT INTO `operation` (`id`, `name`) VALUES
(1, 'cutting'),
(2, 'swing');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `size` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Style_id` varchar(12) NOT NULL,
  `buyer_name` varchar(45) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `number`, `color`, `size`, `quantity`, `Style_id`, `buyer_name`, `datetime`) VALUES
(2, 'njkda', 'nk', '', 909, '0', '', '2018-03-30 11:07:29'),
(3, 'abc', 'red', '', 1000, '0', '', '2018-03-30 11:09:15'),
(4, 'ksaj', 'ksaj', '', 9, '5', 'ksaj', '2018-03-30 12:09:42'),
(5, 'ikjik', 'jikj', '', 898, '6', 'kjas', '2018-03-30 12:09:49'),
(6, 'jkia', 'ko', '', 9, '3', 'kjas', '2018-03-30 12:10:39'),
(7, 'nso', 'Red', '', 1000, '2', 'Kokaidi', '2018-03-30 12:16:27'),
(8, 'jk', '89', '', 890, '7', 'jk', '2018-03-30 12:23:04'),
(9, '78', 'hju', '', 89, '7', 'nk', '2018-03-30 12:23:58'),
(10, 'abc', 'red', '', 100, '8', 'Kokaidi', '2018-03-30 12:28:41'),
(11, 'monoprix_1', 'red', '', 1080, '9', 'monoprix', '2018-03-30 12:39:27'),
(12, 'order_ABC', 'red', '', 600, '10', 'Bhartiye', '2018-04-02 05:09:04'),
(13, 'hj', 'uw', '', 89, '11', 'absh', '2018-04-02 05:28:30'),
(14, '2856b', 'red', '', 70, '10', 'Kokaidi', '2018-04-02 08:01:18'),
(15, '7', 'red', 'M', 100, '12', 'nasiruddin', '2018-04-02 10:44:00'),
(16, '7', 'red', 'S', 105, '12', 'nasiruddin', '2018-04-02 10:44:00'),
(17, '123', 'black', 'm', 257, '13', 'rishi', '2018-04-02 11:13:46'),
(18, '123', 'black', 's', 1000, '13', 'rishi', '2018-04-02 11:13:46'),
(19, 'order1', 'red', 'm', 50, '14', 'neha', '2018-04-02 11:16:59'),
(20, 'order1', 'red', 'xl', 100, '14', 'neha', '2018-04-02 11:16:59'),
(21, 'order1', 'red', 's', 120, '14', 'neha', '2018-04-02 11:16:59'),
(22, 'order1', 'black', 's', 40, '14', 'neha', '2018-04-02 11:16:59'),
(23, 'or1', 'red', 's', 100, '15', 'neha', '2018-04-02 11:44:02'),
(24, 'or1', 'red', 'm', 120, '15', 'neha', '2018-04-02 11:44:02'),
(25, 'or1', 'red', 'l', 150, '15', 'neha', '2018-04-02 11:44:02'),
(26, 'manishor1', 'Red', 'M', 100, '16', 'manish', '2018-04-13 05:04:33'),
(27, 'manishor1', 'Red', 'L', 20, '16', 'manish', '2018-04-13 05:04:33'),
(28, 'manishor1', 'Orange', 'XL', 120, '16', 'manish', '2018-04-13 05:04:33'),
(29, 'on123', 'Red', 'M', 100, '0', 'buyernm', '2018-05-08 05:03:05'),
(30, 'on123', 'Orange', 'L', 120, '0', 'buyernm', '2018-05-08 05:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `order_processed`
--

DROP TABLE IF EXISTS `order_processed`;
CREATE TABLE IF NOT EXISTS `order_processed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `operation_id` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_processed`
--

INSERT INTO `order_processed` (`id`, `order_id`, `quantity`, `operation_id`, `datetime`) VALUES
(1, 1, 100, 1, '2018-04-03 06:49:33'),
(2, 1, 140, 2, '2018-04-03 06:49:54'),
(3, 2, 10, 1, '2018-04-03 09:17:00'),
(4, 2, 10, 1, '2018-04-03 09:17:00'),
(5, 2, 10, 1, '2018-04-03 09:21:41'),
(6, 2, 10, 1, '2018-04-03 09:21:41'),
(7, 3, 10, 1, '2018-04-03 09:24:40'),
(8, 3, 10, 1, '2018-04-03 09:24:40'),
(9, 17, 10, 1, '2018-04-03 09:34:21'),
(10, 17, 10, 1, '2018-04-03 09:34:21'),
(11, 18, 10, 1, '2018-04-03 09:34:45'),
(12, 18, 10, 1, '2018-04-03 09:34:45'),
(13, 16, 10, 1, '2018-04-03 11:34:15'),
(14, 17, 10, 1, '2018-04-03 11:34:15'),
(15, 12, 10, 1, '2018-04-03 11:36:36');

-- --------------------------------------------------------

--
-- Stand-in structure for view `order_status`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `order_status`;
CREATE TABLE IF NOT EXISTS `order_status` (
`id` int(11)
,`number` varchar(45)
,`color` varchar(45)
,`size` varchar(20)
,`Total Order` int(11)
,`completed` decimal(32,0)
,`datetime` timestamp
,`remain` decimal(33,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `process_sequence`
--

DROP TABLE IF EXISTS `process_sequence`;
CREATE TABLE IF NOT EXISTS `process_sequence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `process_sequence`
--

INSERT INTO `process_sequence` (`id`, `name`) VALUES
(20, 'cut bundling and tagging'),
(17, 'cutting lay'),
(3, 'fabric approval'),
(1, 'fabric development'),
(9, 'fabric inspection'),
(2, 'fabric lab dip preparation'),
(16, 'fabric layering'),
(8, 'fabric purchasing'),
(13, 'fabric testing'),
(10, 'favric shade banding'),
(6, 'final pattern making'),
(27, 'finished product'),
(26, 'garment finishing'),
(24, 'garment repair'),
(5, 'garment sampling'),
(25, 'garment washing'),
(14, 'issue fabric for cutting section'),
(21, 'issue to stitching floor'),
(19, 'layer numbering'),
(15, 'marker making'),
(7, 'pattern grading'),
(4, 'pattern making'),
(28, 'product folding and packing'),
(30, 'Ready to ship'),
(11, 'segregation of fabric y its widths'),
(12, 'shade band'),
(29, 'Shipment inspection'),
(18, 'sorting of cut components'),
(23, 'stitching process end of the line '),
(22, 'stitching process in line inspecction');

-- --------------------------------------------------------

--
-- Table structure for table `stock_discription`
--

DROP TABLE IF EXISTS `stock_discription`;
CREATE TABLE IF NOT EXISTS `stock_discription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_id` int(11) NOT NULL,
  `discription` varchar(300) NOT NULL,
  `used_by` varchar(30) NOT NULL,
  `history` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_discription`
--

INSERT INTO `stock_discription` (`id`, `stock_id`, `discription`, `used_by`, `history`) VALUES
(1, 1, 'SERVER DELL Intel exon CPU E3 1225 v3 3.2GHz 8GB RAM', 'SERVER', ''),
(2, 2, 'Lenovo ', 'SERVER', ''),
(12, 5, 'Qhmpl', 'SERVER', ''),
(13, 6, 'logictak', 'SERVER', 'Quantum 8806033682935'),
(14, 1, 'zebronic new \r\nintel core 2 duo 3GHz \r\n2gb ran\r\n', 'Archana', ''),
(15, 2, 'tech com new', 'Archana', ''),
(17, 6, 'dell new\r\n', 'Archana', ''),
(18, 5, 'dell new', 'Archana', ''),
(19, 1, 'intel pentium 4 cpu 3.06GHz\r\n\r\n1gb  ram\r\n', 'morya', ''),
(20, 2, 'acer', 'morya', ''),
(21, 5, 'lenovo', 'morya', ''),
(22, 6, 'astrom', 'morya', ''),
(23, 9, 'Old working', 'morya', ''),
(24, 1, 'intel pentium cpu g2030 3.GHz\r\n\r\n2gb ram\r\n', 'vijay', ''),
(25, 2, 'acer', 'vijay', ''),
(26, 5, 'hp old', 'vijay', ''),
(27, 6, 'lenovo', 'vijay', ''),
(28, 9, 'intex', 'vijay', ''),
(29, 1, 'intel core 2 duo E6550 2.33GHz\r\n\r\n1.97GB ram\r\n', 'mukul', ''),
(30, 2, 'compaq', 'mukul', ''),
(31, 5, 'dell', 'mukul', ''),
(32, 6, 'logictac', 'mukul', 'techcom'),
(33, 9, 'luminous', 'mukul', ''),
(34, 1, 'intel core i3 -3220 CPU\r\n3.30GH  Ram 2gb\r\n512GB harddisk\r\n', 'firoz', ''),
(35, 2, 'lenovo', 'firoz', ''),
(36, 6, 'technext', 'firoz', ''),
(37, 9, 'intex', 'firoz', ''),
(38, 9, 'intex', 'SERVER', ''),
(39, 1, 'intel coreTM 2 duo cpu E8400 @ 3.00GHz\r\n\r\nRam 2gb\r\n', 'kavita', ''),
(40, 2, 'AOC', 'kavita', ''),
(41, 5, 'beekonnect', 'kavita', ''),
(42, 6, 'lenovo', 'kavita', ''),
(43, 9, 'intex', 'kavita', ''),
(44, 1, 'intel core 2 duo E8300 2.83Ghz\r\n\r\nRam 2GB\r\n\r\n', 'pragti', ''),
(45, 2, 'tech come new', 'pragti', ''),
(46, 5, 'beekonnect old', 'pragti', ''),
(47, 6, 'dell new', 'pragti', ''),
(48, 9, 'luminus', 'pragti', ''),
(49, 1, 'intel core 2 duo CPU E8300 2.83GHz \r\nRam 2gb\r\n', 'neha', ''),
(50, 2, 'techcom new', 'neha', ''),
(51, 5, 'dell new', 'neha', ''),
(52, 6, 'dell new', 'neha', ''),
(53, 9, 'luminus', 'neha', ''),
(54, 1, 'intel pentium dual cpu E2160 1.80GHz \r\n\r\nram 2GB', 'ayush', ''),
(55, 2, 'dell', 'ayush', ''),
(56, 5, 'enter world', 'ayush', ''),
(57, 6, 'lenovo', 'ayush', ''),
(58, 9, 'intex', 'ayush', ''),
(59, 1, 'pentium dual-core r5220 2.50GHz\r\n\r\nram 2gb', 'sunaina', ''),
(60, 2, 'aoc', 'sunaina', ''),
(61, 5, 'dell new', 'sunaina', ''),
(62, 6, 'lenovo', 'sunaina', ''),
(63, 9, 'luminus', 'sunaina', ''),
(64, 1, 'intel core i3 CPU\r\n 3.30Ghz \r\n\r\nram 2gb', 'shiv kumar', ''),
(65, 2, 'lenovo', 'shiv kumar', ''),
(66, 5, 'lenovo', 'shiv kumar', ''),
(68, 6, 'dell new', 'shiv kumar', ''),
(69, 2, 'Aoc', 'NA in Shiv room', ''),
(70, 6, 'Quantom', 'NA Shiv room', ''),
(71, 5, 'DELL new', 'NA Shiv room', ''),
(72, 1, 'i3 CPU\r\n2gb ram', 'master', ''),
(73, 2, 'lenovo', 'master', ''),
(74, 5, 'lenovo', 'master', ''),
(75, 6, 'lenovo', 'master', ''),
(76, 9, 'luminus', 'master', ''),
(77, 9, 'luminus', 'shiv kumar', ''),
(78, 2, 'HP old', 'NA in master room', ''),
(79, 1, 'intel core 2 duo CPU E8400 3.00GHz\r\n\r\nram 2gb', 'vivek', ''),
(80, 2, 'beekonnect', 'vivek', ''),
(81, 2, 'AOC', 'vivek', ''),
(82, 6, 'dell', 'vivek', ''),
(83, 9, 'intex', 'vivek', ''),
(84, 2, 'hp old', 'NA in vivek room', ''),
(85, 2, 'techcome new', 'NA in vivek room', ''),
(86, 1, 'intel core 2 duo CPU\r\ne7300 2.66GHz\r\n\r\nRam 2gb', 'nasirhussain', ''),
(87, 2, 'AOC', 'nasirhussain', ''),
(88, 5, 'dell OLD', 'nasirhussain', ''),
(89, 6, 'astrum', 'nasirhussain', ''),
(90, 9, 'intex', 'nasirhussain', ''),
(91, 1, 'intel core i3 3220 cpu\r\n@ 3.30 GHz\r\n\r\nRAM 2GB', 'shushanta', ''),
(92, 5, 'dell', 'shushanta', ''),
(93, 2, 'lenovo', 'shushanta', ''),
(94, 6, 'Quantum', 'shushanta', 'technext'),
(95, 9, 'intex', 'shushanta', ''),
(96, 5, 'enter world', 'firoz', ''),
(97, 1, 'intel pentium g3250 3.2 GHz\r\n\r\nram 8Gb', 'priya', ''),
(98, 2, 'AOC', 'priya', ''),
(99, 5, 'dell', 'priya', ''),
(100, 6, 'dell', 'priya', '');

-- --------------------------------------------------------

--
-- Table structure for table `stock_type`
--

DROP TABLE IF EXISTS `stock_type`;
CREATE TABLE IF NOT EXISTS `stock_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_type`
--

INSERT INTO `stock_type` (`id`, `item`) VALUES
(1, 'CUP'),
(2, 'Monitor'),
(5, 'Keyboard'),
(6, 'Mouse'),
(7, 'Printer'),
(8, 'wire'),
(9, 'UPS');

-- --------------------------------------------------------

--
-- Table structure for table `stock_type_detail`
--

DROP TABLE IF EXISTS `stock_type_detail`;
CREATE TABLE IF NOT EXISTS `stock_type_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_typeID` int(11) NOT NULL,
  `detail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_type_detail`
--

INSERT INTO `stock_type_detail` (`id`, `stock_typeID`, `detail`) VALUES
(1, 1, 'RAM'),
(2, 1, 'HDD');

-- --------------------------------------------------------

--
-- Table structure for table `store_material`
--

DROP TABLE IF EXISTS `store_material`;
CREATE TABLE IF NOT EXISTS `store_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier` varchar(20) NOT NULL,
  `item` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL DEFAULT 'NA',
  `color_code` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL DEFAULT 'NA',
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_material`
--

INSERT INTO `store_material` (`id`, `supplier`, `item`, `color`, `color_code`, `size`, `name`) VALUES
(1, 'kokai', 'label', 'NA', '001', 'NA', 'kokai white'),
(2, 'kokai', 'button', 'red', '#007', 'NA', 'kokai button'),
(3, 'kokai', 'abc', 'NULL', '', 'NULL', 'kokai abc');

-- --------------------------------------------------------

--
-- Table structure for table `store_rack`
--

DROP TABLE IF EXISTS `store_rack`;
CREATE TABLE IF NOT EXISTS `store_rack` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_rack`
--

INSERT INTO `store_rack` (`id`, `store_id`, `name`) VALUES
(1, 1, 'RACK 1'),
(2, 2, 'RACK 1');

-- --------------------------------------------------------

--
-- Table structure for table `store_room`
--

DROP TABLE IF EXISTS `store_room`;
CREATE TABLE IF NOT EXISTS `store_room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_room`
--

INSERT INTO `store_room` (`id`, `name`) VALUES
(1, 'accessories room'),
(2, 'fabric room');

-- --------------------------------------------------------

--
-- Table structure for table `store_stock`
--

DROP TABLE IF EXISTS `store_stock`;
CREATE TABLE IF NOT EXISTS `store_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_rack_id` int(11) NOT NULL,
  `store_material_id` int(11) NOT NULL,
  `quentity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

DROP TABLE IF EXISTS `styles`;
CREATE TABLE IF NOT EXISTS `styles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`id`, `name`, `datetime`) VALUES
(1, 'aqk[l8qj', '2018-03-30 11:58:29'),
(2, 'style 1', '2018-03-30 12:01:59'),
(3, 'aked', '2018-03-30 12:06:48'),
(4, 'jmk', '2018-03-30 12:08:05'),
(5, 'ksaj', '2018-03-30 12:09:13'),
(6, 'jij', '2018-03-30 12:09:49'),
(7, 'jk', '2018-03-30 12:23:04'),
(8, 'style 123', '2018-03-30 12:28:41'),
(9, 'papyrus', '2018-03-30 12:39:27'),
(10, 'style abc', '2018-04-02 05:09:04'),
(11, 'hj', '2018-04-02 05:28:30'),
(12, 'jamesbondStyle', '2018-04-02 08:59:58'),
(13, 'baghi', '2018-04-02 11:13:09'),
(14, '007', '2018-04-02 11:15:57'),
(15, 'st1', '2018-04-02 11:43:10'),
(16, 'manishStyle1', '2018-04-13 05:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `tna`
--

DROP TABLE IF EXISTS `tna`;
CREATE TABLE IF NOT EXISTS `tna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `startday` varchar(1) NOT NULL,
  `endday` int(11) NOT NULL,
  `department` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tna`
--

INSERT INTO `tna` (`id`, `name`, `startday`, `endday`, `department`) VALUES
(1, 'ORIGINAL SAMPLE GIVEN', 'A', 0, '{1}'),
(2, 'FABRIC QUALITY GIVEN', 'A', 0, '{1}'),
(3, 'COLOR STANDARD GIVEN', 'A', 0, '{1}'),
(4, 'FABRIC QLTY SUBMISSION', 'A', 5, '{1,3}'),
(5, 'FABRIC QUALITY APPROVAL', 'A', 11, '{1,3}'),
(6, 'GREIGE FABRIC ORDER', 'A', 11, '{1,3}'),
(7, 'LAB DIPS/STRIKE-OFF SUB', 'A', 5, '{1,3}'),
(8, 'LAB DIPS/STRIKE-OFF APPRVL', 'A', 11, '{1,3}'),
(9, 'INITIAL OF BULK SUBMISSION', 'A', 35, '{1,3}'),
(10, 'INITIAL OF BULK APPROVAL', 'A', 42, '{1,3}'),
(11, 'FINAL BULK IN HOUSE', 'A', 60, '{3}'),
(12, 'BULK LOTS SUBMISSION', 'A', 60, '{1,3}'),
(13, 'BULK LOTS APPROVAL', 'A', 67, '{1,3}'),
(14, 'FABRIC INSPECTION DATE', 'A', 60, '{1,3}'),
(15, 'FPT REPORT/GPT ', 'A', 40, '{1}'),
(16, 'MAIN LABEL IN HOUSE', 'A', 20, '{1,7}'),
(17, 'PRICE TAGS AND BARCODES', 'A', 20, '{1,7}'),
(18, 'WASH CARE LABEL', 'A', 20, '{1,7}'),
(19, 'Other Trims/ Material', 'A', 20, '{1,7}'),
(20, 'ZIPPER', 'A', 20, '{1}'),
(21, 'SPEC RECEIVED DATE', 'A', 0, '{1}'),
(22, '1ST FIT SUBMISSION', 'A', 10, '{1,2}'),
(23, '1ST FIT COMMENTS', 'A', 17, '{1,2}'),
(24, '2ND FIT SUBMISSION', 'A', 22, '{1,2}'),
(25, '2ND FIT APPROVAL', 'A', 27, '{1,2}'),
(26, 'SIZE SET SUBMISSION (Internal size set)', 'A', 30, '{1,2}'),
(27, 'SIZE SET APPROVAL', 'A', 35, '{1,2}'),
(28, 'PP SUBMISSION ', 'A', 40, '{1,2}'),
(29, 'PP SAMPLE APPROVAL', 'A', 45, '{1,2}'),
(30, 'SHIPMENT SAMPLE SUBMISSION', 'A', 80, '{1,2,4}'),
(31, 'SHIPMENT SAMPLE APPROVAL', 'A', 85, '{1,4}'),
(32, 'TRIM CARD', 'A', 52, '{1}'),
(33, 'TEST REPORT', 'A', 47, '{1}'),
(34, 'PRODUCTION CUT DATE', 'A', 68, '{1,4}'),
(35, 'DCMNT,SHORTG,APPROVAL', 'A', 85, '{1,4,5,6}'),
(36, 'INSPECTION REQUEST ', 'A', 87, '{1,4}'),
(37, 'FINAL INSPECTION DATE', 'A', 90, '{1,4,5}'),
(38, 'EX-FACTORY', 'A', 90, '{1,4,5}'),
(39, 'handover', 'A', 90, '{1,4,5,6}');

-- --------------------------------------------------------

--
-- Table structure for table `tna_60`
--

DROP TABLE IF EXISTS `tna_60`;
CREATE TABLE IF NOT EXISTS `tna_60` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `startday` varchar(1) NOT NULL,
  `endday` int(11) NOT NULL,
  `department` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tna_60`
--

INSERT INTO `tna_60` (`id`, `name`, `startday`, `endday`, `department`) VALUES
(1, 'ORIGINAL SAMPLE GIVEN', 'A', 0, '{1}'),
(2, 'FABRIC QUALITY GIVEN', 'A', 0, '{1}'),
(3, 'COLOR STANDARD GIVEN', 'A', 0, '{1}'),
(4, 'FABRIC QLTY SUBMISSION', 'A', 5, '{1,3}'),
(5, 'FABRIC QUALITY APPROVAL', 'A', 8, '{1,3}'),
(6, 'GREIGE FABRIC ORDER', 'A', 8, '{1,3}'),
(7, 'LAB DIPS/STRIKE-OFF SUB', 'A', 5, '{1,3}'),
(8, 'LAB DIPS/STRIKE-OFF APPRVL', 'A', 9, '{1,3}'),
(9, 'INITIAL OF BULK SUBMISSION', 'A', 25, '{1,3}'),
(10, 'INITIAL OF BULK APPROVAL', 'A', 32, '{1,3}'),
(11, 'FINAL BULK IN HOUSE', 'A', 33, '{3}'),
(12, 'BULK LOTS SUBMISSION', 'A', 34, '{1,3}'),
(13, 'BULK LOTS APPROVAL', 'A', 37, '{1,3}'),
(14, 'FABRIC INSPECTION DATE', 'A', 33, '{1,3}'),
(15, 'FPT REPORT/GPT ', 'A', 32, '{1}'),
(16, 'MAIN LABEL IN HOUSE', 'A', 37, '{1,7}'),
(17, 'PRICE TAGS AND BARCODES', 'A', 20, '{1,7}'),
(18, 'WASH CARE LABEL', 'A', 20, '{1,7}'),
(19, 'Other Trims/ Material', 'A', 20, '{1,7}'),
(20, 'ZIPPER', 'A', 20, '{1}'),
(21, 'SPEC RECEIVED DATE', 'A', 0, '{1}'),
(22, '1ST FIT SUBMISSION', 'A', 10, '{1,2}'),
(23, '1ST FIT COMMENTS', 'A', 17, '{1,2}'),
(24, '2ND FIT SUBMISSION', 'A', 22, '{1,2}'),
(25, '2ND FIT APPROVAL', 'A', 27, '{1,2}'),
(26, 'SIZE SET SUBMISSION (Internal size set)', 'A', 36, '{1,2}'),
(27, 'SIZE SET APPROVAL', 'A', 42, '{1,2}'),
(28, 'PP SUBMISSION ', 'A', 36, '{1,2}'),
(29, 'PP SAMPLE APPROVAL', 'A', 42, '{1,2}'),
(30, 'SHIPMENT SAMPLE SUBMISSION', 'A', 50, '{1,2,4}'),
(31, 'SHIPMENT SAMPLE APPROVAL', 'A', 55, '{1,4}'),
(32, 'TRIM CARD', 'A', 42, '{1}'),
(33, 'TEST REPORT', 'A', 37, '{1}'),
(34, 'PRODUCTION CUT DATE', 'A', 42, '{1,4}'),
(35, 'DCMNT,SHORTG,APPROVAL', 'A', 52, '{1,4,5,6}'),
(36, 'INSPECTION REQUEST ', 'A', 55, '{1,4}'),
(37, 'FINAL INSPECTION DATE', 'A', 60, '{1,4,5}'),
(38, 'EX-FACTORY', 'A', 60, '{1,4,5}'),
(39, 'handover', 'A', 60, '{1,4,5,6}');

-- --------------------------------------------------------

--
-- Table structure for table `tna_80`
--

DROP TABLE IF EXISTS `tna_80`;
CREATE TABLE IF NOT EXISTS `tna_80` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `startday` varchar(1) NOT NULL,
  `endday` int(11) NOT NULL,
  `department` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tna_80`
--

INSERT INTO `tna_80` (`id`, `name`, `startday`, `endday`, `department`) VALUES
(1, 'ORIGINAL SAMPLE GIVEN', 'A', 1, '{1}'),
(2, 'FABRIC QUALITY GIVEN', 'A', 1, '{1}'),
(3, 'COLOR STANDARD GIVEN', 'A', 1, '{1}'),
(4, 'FABRIC QLTY SUBMISSION', 'A', 2, '{1,3}'),
(5, 'FABRIC QUALITY APPROVAL', 'A', 6, '{1,3}'),
(6, 'GREIGE FABRIC ORDER', 'A', 6, '{1,3}'),
(7, 'LAB DIPS/STRIKE-OFF SUB', 'A', 15, '{1,3}'),
(8, 'LAB DIPS/STRIKE-OFF APPRVL', 'A', 20, '{1,3}'),
(9, 'INITIAL OF BULK SUBMISSION', 'A', 35, '{1,3}'),
(10, 'INITIAL OF BULK APPROVAL', 'A', 40, '{1,3}'),
(11, 'FINAL BULK IN HOUSE', 'A', 49, '{3}'),
(12, 'BULK LOTS SUBMISSION', 'A', 50, '{1,3}'),
(13, 'BULK LOTS APPROVAL', 'A', 55, '{1,3}'),
(14, 'FABRIC INSPECTION DATE', 'A', 56, '{1,3}'),
(15, 'FPT REPORT/GPT ', 'A', 43, '{1}'),
(16, 'MAIN LABEL IN HOUSE', 'A', 15, '{1,7}'),
(17, 'PRICE TAGS AND BARCODES', 'A', 15, '{1,7}'),
(18, 'WASH CARE LABEL', 'A', 15, '{1,7}'),
(19, 'Other Trims/ Material', 'A', 15, '{1,7}'),
(20, 'SPEC RECEIVED DATE', 'A', 1, '{1}'),
(21, '1ST FIT SUBMISSION', 'A', 12, '{1,2}'),
(22, '1ST FIT COMMENTS', 'A', 16, '{1,2}'),
(23, '2ND FIT SUBMISSION', 'A', 23, '{1,2}'),
(24, '2ND FIT APPROVAL', 'A', 27, '{1,2}'),
(25, 'SIZE SET SUBMISSION (Internal size set)', 'A', 12, '{1,2}'),
(26, 'SIZE SET APPROVAL', 'A', 17, '{1,2}'),
(27, 'PP SUBMISSION ', 'A', 46, '{1,2}'),
(28, 'PP SAMPLE APPROVAL', 'A', 51, '{1,2}'),
(29, 'SHIPMENT SAMPLE SUBMISSION', 'A', 75, '{1,2,4}'),
(30, 'SHIPMENT SAMPLE APPROVAL', 'A', 80, '{1,4}'),
(31, 'TRIM CARD', 'A', 47, '{1}'),
(32, 'TEST REPORT', 'A', 42, '{1}'),
(33, 'PRODUCTION CUT DATE', 'A', 52, '{1,4}'),
(34, 'DCMNT,SHORTG,APPROVAL', 'A', 78, '{1,4,5,6}'),
(35, 'INSPECTION REQUEST ', 'A', 79, '{1,4}'),
(36, 'FINAL INSPECTION DATE', 'A', 81, '{1,4,5}'),
(37, 'EX-FACTORY', 'A', 83, '{1,4,5}'),
(38, 'handover', 'A', 86, '{1,4,5,6}');

-- --------------------------------------------------------

--
-- Table structure for table `tna_task`
--

DROP TABLE IF EXISTS `tna_task`;
CREATE TABLE IF NOT EXISTS `tna_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `fixed_date` date NOT NULL,
  `Day` char(9) NOT NULL,
  `Order_Number` varchar(11) NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `comments` varchar(250) NOT NULL,
  `finish_date` date DEFAULT NULL,
  `department` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tna_task`
--

INSERT INTO `tna_task` (`id`, `name`, `fixed_date`, `Day`, `Order_Number`, `completed`, `comments`, `finish_date`, `department`) VALUES
(1, 'ORIGINAL SAMPLE GIVEN', '2018-04-26', 'Thursday', '87808', 1, '', '2018-04-27', '{1}'),
(2, 'FABRIC QUALITY GIVEN', '2018-04-26', 'Thursday', '87808', 1, '', '2018-04-27', '{1}'),
(3, 'COLOR STANDARD GIVEN', '2018-04-26', 'Thursday', '87808', 1, '', '2018-04-27', '{1}'),
(4, 'FABRIC QLTY SUBMISSION', '2018-04-27', 'Friday', '87808', 1, 'FAbric quality submitted on 28/04 but Bhartiya has advised they will review from the initial yardage printed and processed.', '2018-04-30', '{1,3}'),
(5, 'FABRIC QUALITY APPROVAL', '2018-05-01', 'Tuesday', '87808', 0, '', NULL, '{1,3}'),
(6, 'GREIGE FABRIC ORDER', '2018-05-01', 'Tuesday', '87808', 1, 'Order on 30 april', '2018-05-02', '{1,3}'),
(7, 'LAB DIPS/STRIKE-OFF SUB', '2018-05-10', 'Thursday', '87808', 0, '', NULL, '{1,3}'),
(8, 'LAB DIPS/STRIKE-OFF APPRVL', '2018-05-15', 'Tuesday', '87808', 0, '', NULL, '{1,3}'),
(9, 'INITIAL OF BULK SUBMISSION', '2018-05-30', 'Wednesday', '87808', 0, '', NULL, '{1,3}'),
(10, 'INITIAL OF BULK APPROVAL', '2018-06-04', 'Monday', '87808', 0, '', NULL, '{1,3}'),
(11, 'FINAL BULK IN HOUSE', '2018-06-13', 'Wednesday', '87808', 0, '', NULL, '{3}'),
(12, 'BULK LOTS SUBMISSION', '2018-06-14', 'Thursday', '87808', 0, '', NULL, '{1,3}'),
(13, 'BULK LOTS APPROVAL', '2018-06-19', 'Tuesday', '87808', 0, '', NULL, '{1,3}'),
(14, 'FABRIC INSPECTION DATE', '2018-06-20', 'Wednesday', '87808', 0, '', NULL, '{1,3}'),
(15, 'FPT REPORT/GPT ', '2018-06-07', 'Thursday', '87808', 0, '', NULL, '{1}'),
(16, 'MAIN LABEL IN HOUSE', '2018-05-10', 'Thursday', '87808', 0, '', NULL, '{1,7}\n'),
(17, 'PRICE TAGS AND BARCODES', '2018-05-10', 'Thursday', '87808', 0, '', NULL, '{1,7}\n'),
(18, 'WASH CARE LABEL', '2018-05-10', 'Thursday', '87808', 0, '', NULL, '{1,7}\n'),
(19, 'Other Trims/ Material', '2018-05-10', 'Thursday', '87808', 0, '', NULL, '{1,7}\n'),
(20, 'SPEC RECEIVED DATE', '2018-04-26', 'Thursday', '87808', 1, '', '2018-04-27', '{1}'),
(21, '1ST FIT SUBMISSION', '2018-05-07', 'Monday', '87808', 0, '', NULL, '{1,2}\n'),
(22, '1ST FIT COMMENTS', '2018-05-11', 'Friday', '87808', 0, '', NULL, '{1,2}\n'),
(23, '2ND FIT SUBMISSION', '2018-05-18', 'Friday', '87808', 0, '', NULL, '{1,2}\n'),
(24, '2ND FIT APPROVAL', '2018-05-22', 'Tuesday', '87808', 0, '', NULL, '{1,2}\n'),
(25, 'SIZE SET SUBMISSION (Internal ', '2018-05-07', 'Monday', '87808', 0, '', NULL, '{1,2}\n'),
(26, 'SIZE SET APPROVAL', '2018-05-12', 'Saturday', '87808', 0, '', NULL, '{1,2}\n'),
(27, 'PP SUBMISSION ', '2018-06-11', 'Monday', '87808', 0, '', NULL, '{1,2}\n'),
(28, 'PP SAMPLE APPROVAL', '2018-06-15', 'Friday', '87808', 0, '', NULL, '{1,2}\n'),
(29, 'SHIPMENT SAMPLE SUBMISSION', '2018-07-09', 'Monday', '87808', 0, '', NULL, '{1,2,4}\n'),
(30, 'SHIPMENT SAMPLE APPROVAL', '2018-07-14', 'Saturday', '87808', 0, '', NULL, '{1,4}\n'),
(31, 'TRIM CARD', '2018-06-11', 'Monday', '87808', 0, '', NULL, '{1}\n'),
(32, 'TEST REPORT', '2018-06-06', 'Wednesday', '87808', 0, '', NULL, '{1}\n'),
(33, 'PRODUCTION CUT DATE', '2018-06-16', 'Saturday', '87808', 0, '', NULL, '{1,4}\n'),
(34, 'DCMNT,SHORTG,APPROVAL', '2018-07-12', 'Thursday', '87808', 0, '', NULL, '{1,4,5,6}\n'),
(35, 'INSPECTION REQUEST ', '2018-07-13', 'Friday', '87808', 0, '', NULL, '{1,4}\n'),
(36, 'FINAL INSPECTION DATE', '2018-07-16', 'Monday', '87808', 0, '', NULL, '{1,4,5}\n'),
(37, 'EX-FACTORY', '2018-07-17', 'Tuesday', '87808', 0, '', NULL, '{1,4,5}\n'),
(38, 'handover', '2018-07-20', 'Friday', '87808', 0, '', NULL, '{1,4,5,6}\n'),
(39, 'ORIGINAL SAMPLE GIVEN', '2018-04-26', 'Thursday', '87801', 1, '', '2018-04-27', '{1}\n'),
(40, 'FABRIC QUALITY GIVEN', '2018-04-26', 'Thursday', '87801', 1, '', '2018-04-27', '{1}\n'),
(41, 'COLOR STANDARD GIVEN', '2018-04-26', 'Thursday', '87801', 1, '', '2018-04-27', '{1}\n'),
(42, 'FABRIC QLTY SUBMISSION', '2018-04-27', 'Friday', '87801', 1, '', '2018-04-30', '{1,3}\n'),
(43, 'FABRIC QUALITY APPROVAL', '2018-05-01', 'Tuesday', '87801', 0, '', NULL, '{1,3}\n'),
(44, 'GREIGE FABRIC ORDER', '2018-05-01', 'Tuesday', '87801', 1, 'completed on 30 April  ', '2018-05-02', '{1,3}\n'),
(45, 'LAB DIPS/STRIKE-OFF SUB', '2018-05-10', 'Thursday', '87801', 0, '', NULL, '{1,3}\n'),
(46, 'LAB DIPS/STRIKE-OFF APPRVL', '2018-05-15', 'Tuesday', '87801', 0, '', NULL, '{1,3}\n'),
(47, 'INITIAL OF BULK SUBMISSION', '2018-05-30', 'Wednesday', '87801', 0, '', NULL, '{1,3}\n'),
(48, 'INITIAL OF BULK APPROVAL', '2018-06-04', 'Monday', '87801', 0, '', NULL, '{1,3}\n'),
(49, 'FINAL BULK IN HOUSE', '2018-06-13', 'Wednesday', '87801', 0, '', NULL, '{3}\n'),
(50, 'BULK LOTS SUBMISSION', '2018-06-14', 'Thursday', '87801', 0, '', NULL, '{1,3}\n'),
(51, 'BULK LOTS APPROVAL', '2018-06-19', 'Tuesday', '87801', 0, '', NULL, '{1,3}\n'),
(52, 'FABRIC INSPECTION DATE', '2018-06-20', 'Wednesday', '87801', 0, '', NULL, '{1,3}\n'),
(53, 'FPT REPORT/GPT ', '2018-06-07', 'Thursday', '87801', 0, '', NULL, '{1}\n'),
(54, 'MAIN LABEL IN HOUSE', '2018-05-10', 'Thursday', '87801', 0, '', NULL, '{1,7}\n'),
(55, 'PRICE TAGS AND BARCODES', '2018-05-10', 'Thursday', '87801', 0, '', NULL, '{1,7}\n'),
(56, 'WASH CARE LABEL', '2018-05-10', 'Thursday', '87801', 0, '', NULL, '{1,7}\n'),
(57, 'Other Trims/ Material', '2018-05-10', 'Thursday', '87801', 0, '', NULL, '{1,7}\n'),
(58, 'SPEC RECEIVED DATE', '2018-04-26', 'Thursday', '87801', 1, '', '2018-04-27', '{1}\n'),
(59, '1ST FIT SUBMISSION', '2018-05-07', 'Monday', '87801', 0, '', NULL, '{1,2}\n'),
(60, '1ST FIT COMMENTS', '2018-05-11', 'Friday', '87801', 0, '', NULL, '{1,2}\n'),
(61, '2ND FIT SUBMISSION', '2018-05-18', 'Friday', '87801', 0, '', NULL, '{1,2}\n'),
(62, '2ND FIT APPROVAL', '2018-05-22', 'Tuesday', '87801', 0, '', NULL, '{1,2}\n'),
(63, 'SIZE SET SUBMISSION (Internal ', '2018-05-07', 'Monday', '87801', 0, '', NULL, '{1,2}\n'),
(64, 'SIZE SET APPROVAL', '2018-05-12', 'Saturday', '87801', 0, '', NULL, '{1,2}\n'),
(65, 'PP SUBMISSION ', '2018-06-11', 'Monday', '87801', 0, '', NULL, '{1,2}\n'),
(66, 'PP SAMPLE APPROVAL', '2018-06-15', 'Friday', '87801', 0, '', NULL, '{1,2}\n'),
(67, 'SHIPMENT SAMPLE SUBMISSION', '2018-07-09', 'Monday', '87801', 0, '', NULL, '{1,2,4}\n'),
(68, 'SHIPMENT SAMPLE APPROVAL', '2018-07-14', 'Saturday', '87801', 0, '', NULL, '{1,4}\n'),
(69, 'TRIM CARD', '2018-06-11', 'Monday', '87801', 0, '', NULL, '{1}\n'),
(70, 'TEST REPORT', '2018-06-06', 'Wednesday', '87801', 0, '', NULL, '{1}\n'),
(71, 'PRODUCTION CUT DATE', '2018-06-16', 'Saturday', '87801', 0, '', NULL, '{1,4}\n'),
(72, 'DCMNT,SHORTG,APPROVAL', '2018-07-12', 'Thursday', '87801', 0, '', NULL, '{1,4,5,6}\n'),
(73, 'INSPECTION REQUEST ', '2018-07-13', 'Friday', '87801', 0, '', NULL, '{1,4}\n'),
(74, 'FINAL INSPECTION DATE', '2018-07-16', 'Monday', '87801', 0, '', NULL, '{1,4,5}\n'),
(75, 'EX-FACTORY', '2018-07-17', 'Tuesday', '87801', 0, '', NULL, '{1,4,5}\n'),
(76, 'handover', '2018-07-20', 'Friday', '87801', 0, '', NULL, '{1,4,5,6}\n'),
(77, 'ORIGINAL SAMPLE GIVEN', '2018-05-02', 'Wednesday', 'on123', 0, '', NULL, '{1}'),
(78, 'FABRIC QUALITY GIVEN', '2018-05-02', 'Wednesday', 'on123', 0, '', NULL, '{1}'),
(79, 'COLOR STANDARD GIVEN', '2018-05-02', 'Wednesday', 'on123', 0, '', NULL, '{1}'),
(80, 'FABRIC QLTY SUBMISSION', '2018-05-03', 'Thursday', 'on123', 0, '', NULL, '{1,3}'),
(81, 'FABRIC QUALITY APPROVAL', '2018-05-07', 'Monday', 'on123', 0, '', NULL, '{1,3}'),
(82, 'GREIGE FABRIC ORDER', '2018-05-07', 'Monday', 'on123', 0, '', NULL, '{1,3}'),
(83, 'LAB DIPS/STRIKE-OFF SUB', '2018-05-16', 'Wednesday', 'on123', 0, '', NULL, '{1,3}'),
(84, 'LAB DIPS/STRIKE-OFF APPRVL', '2018-05-21', 'Monday', 'on123', 0, '', NULL, '{1,3}'),
(85, 'INITIAL OF BULK SUBMISSION', '2018-06-05', 'Tuesday', 'on123', 0, '', NULL, '{1,3}'),
(86, 'INITIAL OF BULK APPROVAL', '2018-06-11', 'Monday', 'on123', 0, '', NULL, '{1,3}'),
(87, 'FINAL BULK IN HOUSE', '2018-06-19', 'Tuesday', 'on123', 0, '', NULL, '{3}'),
(88, 'BULK LOTS SUBMISSION', '2018-06-20', 'Wednesday', 'on123', 0, '', NULL, '{1,3}'),
(89, 'BULK LOTS APPROVAL', '2018-06-25', 'Monday', 'on123', 0, '', NULL, '{1,3}'),
(90, 'FABRIC INSPECTION DATE', '2018-06-26', 'Tuesday', 'on123', 0, '', NULL, '{1,3}'),
(91, 'FPT REPORT/GPT ', '2018-06-13', 'Wednesday', 'on123', 0, '', NULL, '{1}'),
(92, 'MAIN LABEL IN HOUSE', '2018-05-16', 'Wednesday', 'on123', 0, '', NULL, '{1,7}'),
(93, 'PRICE TAGS AND BARCODES', '2018-05-16', 'Wednesday', 'on123', 0, '', NULL, '{1,7}'),
(94, 'WASH CARE LABEL', '2018-05-16', 'Wednesday', 'on123', 0, '', NULL, '{1,7}'),
(95, 'Other Trims/ Material', '2018-05-16', 'Wednesday', 'on123', 0, '', NULL, '{1,7}'),
(96, 'SPEC RECEIVED DATE', '2018-05-02', 'Wednesday', 'on123', 0, '', NULL, '{1}'),
(97, '1ST FIT SUBMISSION', '2018-05-14', 'Monday', 'on123', 0, '', NULL, '{1,2}'),
(98, '1ST FIT COMMENTS', '2018-05-17', 'Thursday', 'on123', 0, '', NULL, '{1,2}'),
(99, '2ND FIT SUBMISSION', '2018-05-24', 'Thursday', 'on123', 0, '', NULL, '{1,2}'),
(100, '2ND FIT APPROVAL', '2018-05-28', 'Monday', 'on123', 0, '', NULL, '{1,2}'),
(101, 'SIZE SET SUBMISSION (Internal ', '2018-05-14', 'Monday', 'on123', 0, '', NULL, '{1,2}'),
(102, 'SIZE SET APPROVAL', '2018-05-18', 'Friday', 'on123', 0, '', NULL, '{1,2}'),
(103, 'PP SUBMISSION ', '2018-06-16', 'Saturday', 'on123', 0, '', NULL, '{1,2}'),
(104, 'PP SAMPLE APPROVAL', '2018-06-21', 'Thursday', 'on123', 0, '', NULL, '{1,2}'),
(105, 'SHIPMENT SAMPLE SUBMISSION', '2018-07-16', 'Monday', 'on123', 0, '', NULL, '{1,2,4}'),
(106, 'SHIPMENT SAMPLE APPROVAL', '2018-07-20', 'Friday', 'on123', 0, '', NULL, '{1,4}'),
(107, 'TRIM CARD', '2018-06-18', 'Monday', 'on123', 0, '', NULL, '{1}'),
(108, 'TEST REPORT', '2018-06-12', 'Tuesday', 'on123', 0, '', NULL, '{1}'),
(109, 'PRODUCTION CUT DATE', '2018-06-22', 'Friday', 'on123', 0, '', NULL, '{1,4}'),
(110, 'DCMNT,SHORTG,APPROVAL', '2018-07-18', 'Wednesday', 'on123', 0, '', NULL, '{1,4,5,6}'),
(111, 'INSPECTION REQUEST ', '2018-07-19', 'Thursday', 'on123', 0, '', NULL, '{1,4}'),
(112, 'FINAL INSPECTION DATE', '2018-07-21', 'Saturday', 'on123', 0, '', NULL, '{1,4,5}'),
(113, 'EX-FACTORY', '2018-07-23', 'Monday', 'on123', 0, '', NULL, '{1,4,5}'),
(114, 'handover', '2018-07-26', 'Thursday', 'on123', 0, '', NULL, '{1,4,5,6}');

-- --------------------------------------------------------

--
-- Table structure for table `user_work`
--

DROP TABLE IF EXISTS `user_work`;
CREATE TABLE IF NOT EXISTS `user_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `work_id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `work`;
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
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `date`, `start_time`, `end_time`, `work`, `complete`, `task_id`, `byuser_id`) VALUES
(54, '2018-03-06', '2018-03-06 07:13:17', '2018-03-06 23:24:19', 'tea break', 1, 0, 1),
(56, '2018-03-07', '2018-03-06 23:33:08', '2018-03-13 06:49:29', 'hii work are ready', 1, 0, 3),
(57, '2018-03-07', '2018-03-06 23:33:50', '2018-04-01 23:26:03', 'ERP solution ready', 1, 0, 3),
(61, '2018-03-07', '2018-03-07 00:33:55', '2018-03-07 06:03:55', 'admin user work', 0, 0, 1),
(62, '2018-03-07', '2018-03-07 02:17:01', '2018-03-07 07:47:01', 'not done work', 0, 0, 1),
(63, '2018-03-07', '2018-03-07 02:21:34', '2018-03-07 07:51:34', 'hi thi is my work', 0, 0, 1),
(64, '2018-03-07', '2018-03-07 03:11:41', '2018-03-07 08:41:41', 'jiksadikds\n', 0, 0, 1),
(65, '2018-03-07', '2018-03-07 03:11:53', '2018-03-07 08:41:53', 'tea break', 0, 0, 1),
(66, '2018-03-07', '2018-03-07 03:13:03', '2018-03-07 08:43:03', 'bhjfs f  fds dfs  s sdfc daf ad f dsaf dsf dsf sdf fd', 0, 0, 1),
(67, '2018-03-07', '2018-03-07 03:13:56', '2018-03-07 03:18:51', '1234567890123456789012345678901234567890123456789012345678901234567890', 1, 0, 1),
(68, '2018-03-07', '2018-03-07 03:17:57', '2018-03-07 08:47:57', 'hi i am fine there and hope you will be glade there .\n 1 2 3 4 5 6 7 8 9 0 1 2 3 4 5  6 ', 0, 0, 1),
(69, '2018-03-07', '2018-03-07 05:22:54', '2018-03-07 10:52:54', 'complete loggoff', 0, 0, 1),
(70, '2018-03-07', '2018-03-07 05:25:56', '2018-04-01 23:26:10', 'testing software solution', 1, 0, 3),
(71, '2018-03-07', '2018-03-07 05:39:04', '2018-03-07 11:09:04', 'flight booking', 0, 0, 4),
(72, '2018-03-07', '2018-03-07 06:17:41', '2018-03-29 00:14:32', 'Sampling', 1, 0, 3),
(73, '2018-03-07', '2018-03-07 06:18:09', '2018-03-13 06:49:46', 'help to mukul', 1, 0, 3),
(74, '2018-03-08', '2018-03-07 23:41:25', '2018-03-29 00:12:47', 'Server Open and check mail', 1, 0, 3),
(75, '2018-03-08', '2018-03-08 00:58:07', '2018-03-29 00:13:16', 'mail check aztech', 1, 0, 3),
(76, '2018-03-13', '2018-03-13 06:53:08', '2018-03-29 00:13:29', 'Github repository AztechLive site', 1, 0, 3),
(77, '2018-03-14', '2018-03-13 23:26:13', '2018-03-13 23:33:36', 'meeting with sanjay sir', 1, 0, 3),
(78, '2018-03-14', '2018-03-13 23:32:35', '2018-03-14 04:40:32', 'Stock maintain Codding', 1, 0, 3),
(79, '2018-03-14', '2018-03-14 02:23:40', '2018-03-14 02:27:49', 'Ayush Net not working', 1, 0, 3),
(80, '2018-03-15', '2018-03-14 23:25:58', '2018-03-14 23:51:07', 'ayush net problem', 1, 0, 3),
(81, '2018-03-15', '2018-03-15 00:15:35', '2018-03-15 00:16:03', 'neha screan toolbal not shown', 1, 0, 3),
(82, '2018-03-15', '2018-03-15 00:17:45', '2018-03-15 00:31:53', 'archana net problem', 1, 0, 3),
(83, '2018-03-15', '2018-03-15 00:20:05', '2018-03-15 00:32:17', 'designer net not working', 1, 0, 3),
(87, '2018-03-15', '2018-03-15 01:35:43', '2018-03-15 02:12:22', 'priya printing problem', 1, 0, 3),
(88, '2018-03-15', '2018-03-15 02:33:16', '2018-03-15 02:37:38', 'neha browsing problem', 1, 0, 3),
(89, '2018-03-15', '2018-03-15 04:42:15', '2018-03-15 04:42:41', 'demo', 1, 0, 3),
(90, '2018-03-16', '2018-03-15 23:28:05', '2018-03-29 00:16:17', 'growelimpex site development', 1, 0, 3),
(91, '2018-03-16', '2018-03-15 23:41:54', '2018-03-29 00:12:17', 'domain transfer process', 1, 0, 3),
(92, '2018-03-16', '2018-03-16 01:29:57', '2018-03-16 02:00:39', 'neha form registration', 1, 0, 3),
(93, '2018-03-16', '2018-03-16 04:39:12', '2018-03-16 05:04:00', 'meeting', 1, 0, 3),
(94, '2018-03-16', '2018-03-16 07:19:29', '2018-03-29 00:13:48', 'internet explorer issue', 1, 0, 3),
(95, '2018-03-19', '2018-03-18 23:28:28', '2018-03-18 23:45:52', 'sever check', 1, 0, 3),
(96, '2018-03-19', '2018-03-18 23:28:33', '2018-03-18 23:45:08', 'mail check', 1, 0, 3),
(97, '2018-03-19', '2018-03-19 01:50:01', '2018-03-19 02:22:02', 'harshita mail setup', 1, 0, 3),
(98, '2018-03-19', '2018-03-19 04:14:27', '2018-03-19 04:43:35', 'newsprintgroup.com registration', 1, 0, 3),
(99, '2018-03-19', '2018-03-19 06:22:34', '2018-03-29 12:14:52', 'growelimpex site upload to hosting server', 1, 0, 3),
(100, '2018-03-20', '2018-03-19 23:12:50', '2018-03-19 23:20:17', 'sunaina display problem', 1, 0, 3),
(101, '2018-03-20', '2018-03-20 06:23:31', '2018-03-29 12:16:38', 'logic algorithm design for store management system application', 1, 0, 3),
(102, '2018-03-21', '2018-03-20 23:21:53', '2018-03-20 23:39:35', 'check status for domain transfer', 1, 0, 3),
(103, '2018-03-21', '2018-03-20 23:51:22', '2018-03-21 05:09:15', 'domain transfer process', 1, 0, 3),
(104, '2018-03-21', '2018-03-21 00:36:13', '2018-03-21 00:57:36', 'scanner Issue', 1, 0, 3),
(105, '2018-03-21', '2018-03-21 03:14:33', '2018-03-21 05:06:04', 'printer services', 1, 0, 3),
(106, '2018-03-22', '2018-03-21 23:20:56', '2018-03-21 23:50:32', 'accosseries room nasir problem', 1, 0, 3),
(107, '2018-03-22', '2018-03-22 00:28:30', '2018-03-22 00:32:51', 'auditor printer help', 1, 0, 3),
(108, '2018-03-26', '2018-03-25 23:21:32', '2018-03-25 23:30:06', 'domain transfer check', 1, 0, 3),
(109, '2018-03-26', '2018-03-26 00:53:46', '2018-03-26 01:26:11', 'priya computer problem', 1, 0, 3),
(110, '2018-03-26', '2018-03-26 02:39:07', '2018-03-26 03:11:31', 'sunaina laptop problem', 1, 0, 3),
(111, '2018-03-26', '2018-03-26 02:56:05', '2018-03-26 02:56:21', 'demo work 1', 1, 0, 3),
(112, '2018-03-26', '2018-03-26 03:36:17', '2018-03-26 04:03:42', 'meeting for planing with neha', 1, 0, 3),
(113, '2018-03-27', '2018-03-26 23:09:47', '2018-03-26 23:29:56', 'Domain transfer check', 1, 0, 3),
(114, '2018-03-27', '2018-03-26 23:45:38', '2018-03-27 02:07:09', 'transfer process feedback', 1, 0, 3),
(115, '2018-03-27', '2018-03-26 23:49:22', '2018-03-27 01:58:04', 'mukul scanner problem', 1, 0, 3),
(116, '2018-03-27', '2018-03-27 02:12:29', '2018-03-27 02:16:55', 'mukul help', 1, 0, 3),
(117, '2018-03-27', '2018-03-27 02:17:38', '2018-03-27 02:50:56', 'kavita newsprintgroup.com work', 1, 0, 3),
(118, '2018-03-27', '2018-03-27 02:30:05', '2018-03-27 03:27:58', 'newsprintgroup login work', 1, 0, 3),
(119, '2018-03-27', '2018-03-26 21:13:43', '2018-03-26 21:17:46', 'sunaina printer not working', 1, 0, 3),
(120, '2018-03-27', '2018-03-26 21:20:16', '2018-03-26 22:38:39', 'Planning discuss for ERPgrowel with neha', 1, 0, 3),
(121, '2018-03-28', '2018-03-27 22:14:39', '2018-03-27 22:20:33', 'sunaina system Problem', 1, 0, 3),
(122, '2018-03-29', '2018-03-29 04:53:05', '2018-03-29 05:00:35', 'check mail server space, resource', 1, 0, 3),
(123, '2018-03-29', '2018-03-29 06:19:18', '2018-03-29 06:35:08', 'sunaina help', 1, 0, 3),
(124, '2018-03-29', '2018-03-28 22:43:10', '2018-03-28 22:44:50', 'mukul help', 1, 0, 3),
(125, '2018-03-29', '2018-03-29 01:03:00', '2018-03-29 01:04:30', 'demo work 2', 1, 0, 3),
(126, '2018-03-30', '2018-03-30 04:48:45', '2018-03-30 05:00:39', 'Samsung Printer not work', 1, 0, 3),
(127, '2018-03-30', '2018-03-29 20:52:26', '2018-03-29 20:58:29', 'Vivek store help', 1, 0, 3),
(128, '2018-03-30', '2018-03-29 21:42:45', '2018-03-29 21:59:49', 'anshul mail setup', 1, 0, 3),
(129, '2018-03-30', '2018-03-29 22:10:13', '2018-03-29 22:15:59', 'Pransht ji call', 1, 0, 3),
(130, '2018-03-30', '2018-03-29 22:21:21', '2018-03-29 22:30:17', 'mukul help', 1, 0, 3),
(131, '2018-03-30', '2018-03-29 23:54:06', '2018-03-29 23:56:55', 'priya need anshulmalik@growelimpex.com password ', 1, 0, 3),
(132, '2018-04-02', '2018-04-02 04:45:57', '2018-04-02 05:00:35', 'mail chek', 1, 0, 3),
(133, '2018-04-02', '2018-04-02 05:03:29', '2018-04-02 05:07:02', 'prashant sir call', 1, 0, 3),
(134, '2018-04-02', '2018-04-02 05:16:39', '2018-04-02 06:28:14', 'erp updation', 1, 0, 3),
(135, '2018-04-02', '2018-04-01 21:21:58', '2018-04-01 21:30:53', 'printer connecton on laptop', 1, 0, 3),
(136, '2018-04-03', '2018-04-03 04:44:31', '2018-04-03 04:56:29', 'mukul visual gems ', 1, 0, 3),
(137, '2018-04-03', '2018-04-03 05:04:10', '2018-04-03 05:04:10', 'demo', 0, 0, 3),
(138, '2018-04-03', '2018-04-03 05:13:31', '2018-04-03 05:25:15', 'mail check', 1, 0, 3),
(139, '2018-04-03', '2018-04-03 05:19:02', '2018-04-03 05:23:48', 'mukul help', 1, 0, 3),
(140, '2018-04-03', '2018-04-02 20:06:27', '2018-04-02 20:55:59', 'compny profile work', 1, 0, 3),
(141, '2018-04-03', '2018-04-02 22:00:49', '2018-04-02 23:27:48', 'nitesh system cloud backup setup', 1, 0, 3),
(142, '2018-04-03', '2018-04-02 23:02:14', '2018-04-02 23:27:58', 'mukul window 7 migration', 1, 0, 3),
(143, '2018-04-05', '2018-04-05 05:00:16', '2018-04-05 05:22:23', 'net not working', 1, 0, 3),
(144, '2018-04-05', '2018-04-05 06:53:52', '2018-04-05 09:11:55', 'ayush pc not boot', 1, 0, 3),
(145, '2018-04-06', '2018-04-06 06:32:30', '2018-04-06 07:30:58', 'mail check', 1, 0, 3),
(146, '2018-04-09', '2018-04-09 04:40:57', '2018-04-09 04:45:33', 'mail check', 1, 0, 3),
(147, '2018-04-09', '2018-04-09 06:15:02', '2018-04-09 07:00:01', 'sunaina help', 1, 0, 3),
(148, '2018-04-09', '2018-04-08 22:40:53', '2018-04-09 10:40:53', 'PPT work', 0, 0, 3),
(149, '2018-04-09', '2018-04-08 22:53:52', '2018-04-10 07:01:21', 'erp PO cancellation', 1, 0, 3),
(150, '2018-04-10', '2018-04-10 07:01:16', '2018-04-09 19:44:24', 'mail check\n', 1, 0, 3),
(151, '2018-04-11', '2018-04-11 04:35:18', '2018-04-11 04:54:29', 'shiv kumar hardisk Problem', 1, 0, 3),
(152, '2018-04-11', '2018-04-11 05:20:32', '2018-04-11 05:25:01', 'wifi net not working', 1, 0, 3),
(153, '2018-04-11', '2018-04-11 06:00:36', '2018-04-11 06:29:17', 'sunaina system problem', 1, 0, 3),
(154, '2018-04-11', '2018-04-11 06:46:53', '2018-04-11 06:51:51', 'mukul help', 1, 0, 3),
(155, '2018-04-11', '2018-04-11 06:57:43', '2018-04-11 07:06:33', 'mail test', 1, 0, 3),
(156, '2018-04-12', '2018-04-12 04:44:45', '2018-04-12 05:00:33', 'mail check', 1, 0, 3),
(157, '2018-04-12', '2018-04-12 05:32:51', '2018-04-12 05:42:20', 'samsung printer proble', 1, 0, 3),
(158, '2018-04-12', '2018-04-11 20:47:48', '2018-04-11 21:24:36', 'mail bounce in mahendra computer', 1, 0, 3),
(159, '2018-04-12', '2018-04-11 21:55:36', '2018-04-11 22:01:15', 'photoshop download need for merchant ', 1, 0, 3),
(160, '2018-04-12', '2018-04-11 22:01:12', '2018-04-11 22:27:45', 'ppt linking marketing', 1, 0, 3),
(161, '2018-04-13', '2018-04-13 04:54:38', '2018-04-12 21:06:25', 'ERP', 1, 0, 3),
(162, '2018-04-13', '2018-04-13 05:58:12', '2018-04-13 06:33:17', 'photo copy', 1, 0, 3),
(163, '2018-04-13', '2018-04-12 21:06:10', '2018-04-12 21:15:38', 'shipping scanner problem', 1, 0, 3),
(164, '2018-04-16', '2018-04-16 04:54:10', '2018-04-16 06:21:47', 'mail check', 1, 0, 3),
(165, '2018-04-16', '2018-04-16 05:11:55', '2018-04-16 06:04:49', 'net problem in Accounts Department', 1, 0, 3),
(166, '2018-04-16', '2018-04-15 18:50:17', '2018-04-15 20:05:19', 'server internet not work', 1, 0, 3),
(167, '2018-04-16', '2018-04-15 21:45:36', '2018-04-16 00:20:04', 'kavita printout', 1, 0, 3),
(168, '2018-04-18', '2018-04-18 04:42:18', '2018-04-18 05:08:21', 'Nitesh Printer Problem', 1, 0, 3),
(169, '2018-04-18', '2018-04-18 05:12:22', '2018-04-18 06:07:34', 'mail check', 1, 0, 3),
(170, '2018-04-18', '2018-04-18 05:58:51', '2018-04-18 06:07:06', 'tally not open', 1, 0, 3),
(171, '2018-04-18', '2018-04-18 00:39:52', '2018-04-19 05:22:19', 'mahendra Printer connect', 1, 0, 3),
(172, '2018-04-19', '2018-04-19 05:25:03', '2018-04-19 05:47:17', 'sunaina Help', 1, 0, 3),
(173, '2018-04-23', '2018-04-23 05:07:04', '2018-04-23 05:19:31', 'Server mail download', 1, 0, 3),
(174, '2018-04-23', '2018-04-23 00:35:08', '2018-04-23 00:58:59', 'sunaina bounce back', 1, 0, 3),
(175, '2018-04-24', '2018-04-24 06:14:25', '2018-04-24 06:32:42', 'Ravinder Master Printout', 1, 0, 3),
(176, '2018-04-24', '2018-04-24 07:13:58', '2018-04-23 19:30:24', 'meeting with Krishan ji', 1, 0, 3),
(177, '2018-04-24', '2018-04-23 20:53:40', '2018-04-23 22:40:00', 'nitesh computer issue', 1, 0, 3),
(178, '2018-04-24', '2018-04-23 22:40:24', '2018-04-23 23:09:02', 'shushanta scanner issue', 1, 0, 3),
(179, '2018-04-25', '2018-04-25 06:35:47', '2018-04-25 06:39:23', 'Accounts Computer  susanta problem', 1, 0, 3),
(180, '2018-04-25', '2018-04-24 19:33:34', '2018-04-24 20:05:44', 'masterji marker print', 1, 0, 3),
(181, '2018-04-25', '2018-04-24 21:13:36', '2018-04-24 21:28:18', 'archana printout', 1, 0, 3),
(182, '2018-04-25', '2018-04-24 21:33:01', '2018-04-24 22:07:04', 'Tally Problem', 1, 0, 3),
(183, '2018-04-26', '2018-04-26 04:37:19', '2018-04-25 19:52:29', 'manish ERP cansult', 1, 0, 3),
(184, '2018-04-26', '2018-04-26 05:34:10', '2018-04-26 05:45:52', 'rishi computer Problem', 1, 0, 3),
(185, '2018-04-27', '2018-04-27 05:25:29', '2018-04-27 05:26:48', 'shiv kumar help', 1, 0, 3),
(186, '2018-04-30', '2018-04-30 05:02:31', '2018-04-30 05:08:33', 'mahendar ji net not working', 1, 0, 3),
(187, '2018-04-30', '2018-04-30 05:25:33', '2018-04-29 22:41:49', 'Alibaba Sourcing', 1, 0, 3),
(188, '2018-04-30', '2018-04-30 05:58:27', '2018-04-30 06:25:11', 'mahendra ji pdf problem', 1, 0, 3),
(189, '2018-04-30', '2018-04-29 23:46:11', '2018-04-30 00:30:46', 'PO cancle ', 1, 0, 3),
(190, '2018-05-02', '2018-05-02 04:32:38', '2018-05-02 04:44:44', 'server on . and load info mail', 1, 0, 3),
(191, '2018-05-02', '2018-05-02 05:10:11', '2018-05-02 05:13:04', 'Archana PDF not open', 1, 0, 3),
(192, '2018-05-03', '2018-05-03 04:50:03', '2018-05-03 04:56:47', 'internet not working', 1, 0, 3),
(193, '2018-05-03', '2018-05-03 05:26:55', '2018-05-03 05:28:34', 'Ashok wifi problem', 1, 0, 3),
(194, '2018-05-03', '2018-05-03 06:27:06', '2018-05-02 21:17:39', 'monosprit costing sheet', 1, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `work_answer`
--

DROP TABLE IF EXISTS `work_answer`;
CREATE TABLE IF NOT EXISTS `work_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `work_id` int(11) NOT NULL,
  `comment` varchar(400) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_answer`
--

INSERT INTO `work_answer` (`id`, `work_id`, `comment`) VALUES
(1, 85, 'nhjjssd'),
(2, 85, 'njdsa'),
(3, 85, 'jnksd'),
(4, 87, 'Printer now working fine \r\n\r\nPrint with only HP Paper Option for printing'),
(5, 88, 'newsprintgroup.com site have server problem issue server could not response on any desktop. work in only mobile device.  '),
(6, 89, 'demo'),
(7, 92, '500 Internel server error from Sprintgroup Server.\r\n\r\nso mail a T&C file and filled form to neha@growelimpex.com '),
(8, 93, 'browser installation and close all pages'),
(9, 96, 'info@aztechtcs.com Mail\r\n\r\n'),
(10, 95, 'no issue download mail and clean server space.'),
(11, 97, 'conpleted setup bigrock mail server and config in harshitaenterprises.net domain'),
(12, 98, 'complete registration .'),
(13, 100, 'only loose wire problem. '),
(14, 102, 'contact to billing team'),
(15, 104, 'resolved with driver update'),
(16, 105, 'completed servicing HR Shiv kumar Printer + Accounts Printer Services + Accounts printer refill,\r\n\r\nBill pending 300+300+250'),
(17, 103, 'completed all process and veryfi EPP auth code also.\r\nnow last and final approvel from hostelevator + domain registrar controller pending its take upto 7days process period. \r\n\r\n \r\n'),
(18, 106, 'hang computer problem fixed by uninstall unused tools and software .'),
(19, 107, ' cheque and adharcard printing'),
(20, 108, 'Your current Registrar needs to approve your domain name\'s transfer. Please wait while this transfer request is processed.'),
(21, 109, 'every thing is fine and help for color print for File. '),
(22, 111, 'ok completed '),
(23, 110, 'done after small setting in outook all mails are receive in sunaina laptop. '),
(24, 112, 'understand process'),
(25, 113, 'drop request mail to compliance@publicdomainregistry.com ,\r\n\r\nYour current Registrar needs to approve your domain name\'s transfer. Please wait while this transfer request is processed.'),
(26, 115, 'upgrade from windows xp to 7 migration,\r\n\r\nand upgrade outlook mail and export/import , all printer antivirous setup in mukul computer , \r\n\r\none manual scan is panding.'),
(27, 114, 'domain transfer completed and all DNS setting/setup completed.  '),
(28, 116, 'not femilier with windows 7 so need xp back'),
(30, 117, 'label search done.'),
(31, 118, '	pasword changes so login with another id'),
(32, 119, 'samsung printer ip conflicted so reboot network . '),
(33, 120, 'understand all workflow production process'),
(34, 122, 'anshulmalik@  used 1.20GB server space.\r\n\r\ncad, ayush are not in used'),
(35, 123, 'form 12B and rent slip Fillup'),
(36, 121, 'monitor wire was loose so tight wire pin .  '),
(37, 124, 'excel file freez. '),
(38, 91, 'completed'),
(39, 74, 'daily work....'),
(40, 75, 'daily checked'),
(41, 76, 'already completed'),
(42, 94, 'need for newprintgroup site work already done'),
(43, 72, ''),
(44, 99, ''),
(45, 90, ''),
(46, 101, 'working in future'),
(47, 126, 'ip conflicted so reboot network .'),
(48, 127, ''),
(49, 128, 'handover new password and access'),
(50, 129, 'wifi connection problem in Mobile'),
(51, 130, 'outlook internet problem solve by after close and reopen .'),
(52, 131, 'not need because of another urgent work'),
(53, 132, 'checked all mails.'),
(54, 133, 'internet not working because flightMODE was on.'),
(55, 134, 'updation complete '),
(56, 135, 'weak signal '),
(57, 136, 'broken link repaired'),
(58, 139, 'VGems upgrade version require. Upgraded'),
(59, 138, 'checked'),
(60, 140, 'completed and mailed to neha, print out sent to Prashant sir'),
(61, 141, 'completed'),
(62, 142, 'completed'),
(63, 143, 'reconfig router boot '),
(64, 144, 'operating system corrupted so backup file with Linux OS, on server 33GB files'),
(65, 146, 'not any important mail'),
(66, 147, 'scan pc for marval'),
(67, 149, 'delete po record'),
(68, 150, 'checked '),
(69, 151, 'hard disk was undetected. because of dust/loose wire .'),
(70, 152, 'change port'),
(71, 153, 'disk cleanup and remove old windows instalation file 25GB  '),
(72, 154, 'visual gems data not visible so change yr 2017'),
(73, 155, 'modify mail monitoring '),
(74, 156, 'checked {{docdalta}} mail'),
(75, 157, 'dark image'),
(76, 158, 'create PPT dropbox URL . for reduce size'),
(77, 159, 'unable to download so arrenge next day'),
(78, 160, 'done created'),
(79, 162, 'police document'),
(80, 161, 'template & TNA discuss with manish'),
(81, 163, 'scan & Mail document (shipping) '),
(82, 165, 'correct now working '),
(83, 164, 'checked not any important mail received'),
(84, 166, 'network gateway issue '),
(85, 167, 'monoprix label order, but lot no are missing in documnets'),
(86, 168, 'Reset Driver because Printer IP address changed to 198.168.1.109 -> 198.168.1.104 \r\n\r\nnow working'),
(87, 170, 'now connected .'),
(88, 169, 'not any important mail receive'),
(89, 171, '.'),
(90, 172, 'TNA discuss'),
(91, 173, 'downloaded '),
(92, 174, 'remote email space problem so sent without attacthment '),
(93, 175, 'contact kishan ji for export cad file.'),
(94, 176, 'convert marker in pdf format by help krishn ji'),
(95, 177, 'computer pdf converter install'),
(96, 178, 'done'),
(97, 179, 'POPup Problem.'),
(98, 180, 'done print all marker'),
(99, 181, 'Printout Bill from whatsapp'),
(100, 182, 'Tally Licence was expire so renew it by remote user'),
(101, 184, 'usb port was not working so tight the wire and now working'),
(102, 185, 'attendence issue'),
(103, 186, 'now working after reset and cconnect wifi dongal'),
(104, 188, 'not possible to convert image in tyf file'),
(105, 187, ''),
(106, 189, 'login with supervisor and manish ERP calling with febric room'),
(107, 190, 'completed'),
(108, 191, 'virous Spam from unknown person.. '),
(109, 192, 'complaint to airtel now completed'),
(110, 193, 'wifi connect in laptop '),
(111, 194, 'cost given ');

-- --------------------------------------------------------

--
-- Structure for view `get_work`
--
DROP TABLE IF EXISTS `get_work`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_work`  AS  select `work`.`id` AS `id`,`work`.`byuser_id` AS `byuser_id`,`work`.`start_time` AS `start_time`,`work`.`work` AS `work`,`work`.`complete` AS `complete`,timestampdiff(MINUTE,`work`.`start_time`,`work`.`end_time`) AS `ConsumeTime`,`work_answer`.`comment` AS `comment` from (`work` left join `work_answer` on((`work`.`id` = `work_answer`.`work_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `order_status`
--
DROP TABLE IF EXISTS `order_status`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY INVOKER VIEW `order_status`  AS  select `order`.`id` AS `id`,`order`.`number` AS `number`,`order`.`color` AS `color`,`order`.`size` AS `size`,`order`.`quantity` AS `Total Order`,sum(`order_processed`.`quantity`) AS `completed`,`order`.`datetime` AS `datetime`,(`order`.`quantity` - sum(`order_processed`.`quantity`)) AS `remain` from (`order` join `order_processed` on((`order_processed`.`order_id` = `order`.`id`))) where (`order_processed`.`operation_id` = 1) group by `order_processed`.`order_id` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
