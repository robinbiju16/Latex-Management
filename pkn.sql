-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2020 at 04:04 PM
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
-- Database: `pkn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(20) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `po` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `acc` bigint(20) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `ifsc` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `adress`, `po`, `place`, `district`, `mob`, `acc`, `bname`, `ifsc`) VALUES
('Palakkaran', 'Palakkaran Rubber Latex Collection Agency', 'Pathirickal', 'Pathanapuram', 'Kollam', 9876543210, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `inform`
--

DROP TABLE IF EXISTS `inform`;
CREATE TABLE IF NOT EXISTS `inform` (
  `mob` bigint(10) NOT NULL,
  `tinp` int(5) NOT NULL,
  `tinw` int(5) NOT NULL,
  `dat` date NOT NULL,
  PRIMARY KEY (`mob`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inform`
--

INSERT INTO `inform` (`mob`, `tinp`, `tinw`, `dat`) VALUES
(9876543201, 0, 3, '2019-05-07'),
(8281600536, 0, 1, '2019-05-07'),
(9876543120, 1, 4, '2019-04-11'),
(9867545323, 0, 4, '2019-05-06'),
(9747912430, 0, 2, '2020-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `latex`
--

DROP TABLE IF EXISTS `latex`;
CREATE TABLE IF NOT EXISTS `latex` (
  `tinno` int(5) NOT NULL,
  `date` date NOT NULL,
  `tinwht` int(5) NOT NULL,
  `amowht` int(3) NOT NULL,
  `mob` bigint(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tinno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latex`
--

INSERT INTO `latex` (`tinno`, `date`, `tinwht`, `amowht`, `mob`, `status`) VALUES
(4, '2019-03-10', 18, 5, 8281600536, 1),
(5, '2019-03-10', 18, 2, 9747912430, 1),
(6, '2019-03-09', 15, 3, 8281600536, 1),
(7, '2019-03-10', 18, 2, 8281600536, 1),
(12, '2019-05-06', 18, 7, 9867545323, 0),
(20, '2019-03-09', 15, 3, 9747912430, 1),
(40, '2019-03-09', 19, 3, 9747912430, 1),
(98, '2019-04-03', 22, 6, 8281600536, 1),
(99, '2019-04-03', 19, 1, 8281600536, 1),
(100, '2019-03-30', 15, 4, 8281600536, 0),
(101, '2019-03-30', 21, 4, 8281600536, 1),
(102, '2019-03-30', 18, 3, 9747912430, 1),
(103, '2019-03-30', 21, 2, 9747912430, 1),
(104, '2019-03-30', 18, 4, 9747912430, 1),
(105, '2019-03-30', 15, 5, 9747912430, 1),
(106, '2019-03-30', 15, 5, 9747912430, 1),
(121, '2020-07-19', 23, 4, 9747912430, 0),
(201, '2019-05-07', 19, 6, 8281600536, 1),
(202, '2019-05-07', 19, 3, 9876543201, 0),
(222, '2020-07-19', 28, 7, 9747912430, 0),
(322, '2019-11-20', 21, 6, 9876543201, 0),
(434, '2019-05-06', 10, 4, 8281600536, 0),
(555, '2019-05-06', 12, 3, 9867545323, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `mob` bigint(10) NOT NULL,
  `usrtype` int(1) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`mob`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`mob`, `usrtype`, `password`) VALUES
(9876543210, 0, '1234'),
(8281600536, 1, 'qwerty'),
(9747912430, 1, '12345'),
(9656780585, 1, '1234'),
(9744211018, 1, '123'),
(9876543120, 1, '123456'),
(9867545323, 1, 'qazwsx'),
(9876543201, 1, 'zxcvbnm');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

DROP TABLE IF EXISTS `msg`;
CREATE TABLE IF NOT EXISTS `msg` (
  `mob` bigint(10) NOT NULL,
  `mes` varchar(100) NOT NULL,
  `dat` datetime NOT NULL,
  `bid` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`mob`, `mes`, `dat`, `bid`) VALUES
(8281600536, 'hjkhkjhkj', '2019-03-18 06:14:16', 0),
(8281600536, 'Your order is in processing.. Deliver Shortly', '2019-03-18 06:14:16', 0),
(8281600536, 'Your order is in processing.. Deliver Shortly', '2019-03-18 06:14:16', 0),
(8281600536, 'Successfully Delivered your order', '2019-03-18 06:14:16', 0),
(9747912430, 'Your order is in processing.. Deliver Shortly', '2019-03-18 19:58:58', 0),
(9747912430, 'Successfully Register your order', '2019-03-22 20:08:49', 0),
(8281600536, 'Your order is in processing.. Deliver Shortly', '2019-03-22 20:08:54', 0),
(8281600536, 'Successfully Delivered your order', '2019-03-22 20:09:01', 0),
(9747912430, 'Your order is in processing.. Deliver Shortly', '2019-03-22 20:09:07', 0),
(9747912430, 'Successfully Delivered your order', '2019-03-22 20:09:14', 0),
(9747912430, 'Your order is in processing.. Deliver Shortly', '2019-03-22 20:09:20', 0),
(9747912430, 'Successfully Delivered your order', '2019-03-22 20:09:26', 0),
(9747912430, 'Your order is in processing.. Deliver Shortly', '2019-03-22 20:09:32', 0),
(9747912430, 'Successfully Delivered your order', '2019-03-22 20:09:40', 0),
(8281600536, 'Your order is in processing.. Deliver Shortly', '2019-03-22 20:09:45', 0),
(8281600536, 'Successfully Delivered your order', '2019-03-22 20:09:50', 0),
(8281600536, 'Your order is in processing.. Deliver Shortly', '2019-03-22 20:09:54', 0),
(8281600536, 'Successfully Delivered your order', '2019-03-22 20:09:59', 0),
(9747912430, 'Your order is in processing.. Deliver Shortly', '2019-03-22 20:10:03', 0),
(9747912430, 'Successfully Delivered your order', '2019-03-22 20:10:08', 0),
(8281600536, 'Your order is in processing.. Deliver Shortly', '2019-03-24 14:18:48', 0),
(9747912430, 'Your order is in processing.. Deliver Shortly', '2019-03-29 10:59:35', 0),
(9747912430, 'Successfully Delivered your order', '2019-03-29 10:59:47', 0),
(8281600536, 'Successfully Delivered your order', '2019-03-29 14:33:08', 0),
(8281600536, 'Your order is in processing.. Deliver Shortly', '2019-03-29 20:27:08', 0),
(9747912430, 'Successfully credit amount for tin<?php 1?>', '2019-04-05 13:34:50', 0),
(8281600536, 'Successfully credit amount for tin3', '2019-04-05 13:40:19', 0),
(8281600536, 'Successfully credit amount for tin', '2019-04-05 13:51:21', 0),
(8281600536, 'Successfully credit amount for tin', '2019-04-05 13:54:22', 0),
(8281600536, 'Successfully credit amount for tin', '2019-04-05 13:57:55', 0),
(8281600536, 'Successfully credit amount for tin', '2019-04-05 13:59:20', 0),
(8281600536, 'Successfully credit amount for tin.6.', '2019-04-05 14:01:33', 0),
(9747912430, 'Successfully credit amount for tin.5.', '2019-05-03 22:17:20', 0),
(8281600536, 'Your order is in processing.. Deliver Shortly', '2019-05-03 22:18:36', 0),
(9747912430, 'Your order is in processing.. Deliver Shortly', '2019-05-03 22:18:44', 0),
(9747912430, 'Successfully Delivered your order', '2019-05-03 22:18:51', 0),
(9747912430, 'Your order is in processing.. Deliver Shortly', '2019-05-06 13:36:13', 0),
(9747912430, 'Successfully Delivered your order', '2019-05-06 13:36:21', 0),
(8281600536, 'Successfully credit amount for tin.7.', '2019-05-06 13:37:52', 0),
(8281600536, 'Successfully credit amount for tin.7.', '2019-05-06 13:38:16', 0),
(8281600536, 'Successfully Register your order', '2019-05-06 13:53:34', 0),
(8281600536, 'Your order is in processing.. Deliver Shortly', '2019-05-07 13:23:10', 0),
(8281600536, 'Successfully credit amount for tin.200.', '2019-05-07 15:54:47', 0),
(8281600536, 'Successfully credit amount for tin.201.', '2019-05-10 19:13:10', 0),
(9747912430, 'Successfully credit amount for tin.20.', '2019-05-11 12:42:11', 0),
(9747912430, 'Successfully credit amount for tin.105.', '2019-05-11 12:43:57', 1),
(9747912430, 'Successfully credit amount for tin.40.', '2020-07-19 13:07:12', 1),
(9747912430, 'Successfully credit amount for tin.40.', '2020-07-19 13:07:36', 1),
(9747912430, 'Successfully credit amount for tin.104.', '2020-07-19 13:07:56', 1),
(9747912430, 'Successfully credit amount for tin.40.', '2020-07-19 13:08:12', 1),
(9867545323, 'Your order is in processing.. Deliver Shortly', '2020-07-19 13:09:09', 0),
(9867545323, 'Your order is in processing.. Deliver Shortly', '2020-07-19 13:09:14', 0),
(9747912430, 'Your order is in processing.. Deliver Shortly', '2020-07-19 13:09:24', 0),
(9747912430, 'Your order is in processing.. Deliver Shortly', '2020-07-19 13:09:29', 0),
(9747912430, 'Your order is in processing.. Deliver Shortly', '2020-07-19 13:09:32', 0),
(9747912430, 'Successfully Delivered your order', '2020-07-19 13:09:37', 0),
(9747912430, 'Successfully Delivered your order', '2020-07-19 13:10:05', 0),
(9747912430, 'Successfully credit amount for tin.106.', '2020-07-19 13:15:10', 1),
(9747912430, 'Successfully credit amount for tin.106.', '2020-07-19 13:15:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordr`
--

DROP TABLE IF EXISTS `ordr`;
CREATE TABLE IF NOT EXISTS `ordr` (
  `mob` bigint(10) NOT NULL,
  `qty` int(5) NOT NULL,
  `status` int(1) NOT NULL,
  `ordr_id` bigint(6) NOT NULL,
  `pdtcode` varchar(6) NOT NULL,
  `amnt` int(6) NOT NULL,
  `dat` date NOT NULL,
  PRIMARY KEY (`ordr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordr`
--

INSERT INTO `ordr` (`mob`, `qty`, `status`, `ordr_id`, `pdtcode`, `amnt`, `dat`) VALUES
(9747912430, 3, 2, 3, 'FR01', 3000, '2019-03-18'),
(9747912430, 1, 2, 4, 'FR02', 555, '2019-03-18'),
(9747912430, 30, 2, 5, 'EQ01', 450, '2019-03-18'),
(8281600536, 1, 2, 7, 'FR02', 555, '2019-03-18'),
(8281600536, 20, 2, 8, 'FR04', 20000, '2019-03-18'),
(8281600536, 2, 1, 24, 'FR01', 2000, '2019-05-07'),
(9876543201, 6, 0, 25, 'FR02', 3330, '2019-05-07'),
(8281600536, 1, 0, 15, 'FR01', 1000, '2019-03-29'),
(8281600536, 20, 1, 16, 'FR03', 9080, '2019-03-29'),
(8281600536, 20, 0, 17, 'EQ01', 300, '2019-03-29'),
(9747912430, 1, 0, 18, 'FR01', 1000, '2019-03-29'),
(9747912430, 30, 2, 19, 'FR01', 30000, '2019-03-29'),
(9747912430, 1, 0, 20, 'FR01', 1000, '2019-04-17'),
(9747912430, 4, 2, 21, 'FR01', 4000, '2019-05-03'),
(9867545323, 8, 1, 22, 'FR02', 4440, '2019-05-06'),
(9867545323, 1, 1, 23, 'FR01', 1000, '2019-05-06'),
(9747912430, 3, 2, 26, 'FR01', 3000, '2020-07-19'),
(9747912430, 100, 2, 27, 'EQ02', 1500, '2020-07-19'),
(9747912430, 4, 1, 28, 'EQ01', 60, '2020-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `from` int(16) NOT NULL,
  `to` int(16) NOT NULL,
  `payid` int(4) NOT NULL AUTO_INCREMENT,
  `payfor` int(4) NOT NULL,
  `paydate` datetime NOT NULL,
  `amt` int(7) NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pdtcode` varchar(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mfatur` varchar(30) DEFAULT NULL,
  `price` int(7) NOT NULL,
  `stock` int(6) NOT NULL,
  PRIMARY KEY (`pdtcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pdtcode`, `name`, `mfatur`, `price`, `stock`) VALUES
('EQ01', 'LATEX CUP', 'NILKAMAL', 15, 107),
('EQ02', 'LATEX CUP', 'NILKAMAL', 15, 101),
('FR01', 'BONE MEALS', 'KERAL', 1000, 252),
('FR02', 'CERAMIL', 'KERAL', 555, 481),
('FR04', 'FACTOMPOSE', 'TRT', 30, 500),
('RB002', '412', 'PALAKKARAN', 25, 120);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `tinno` int(5) NOT NULL,
  `dteofprch` date NOT NULL,
  `tinttlwht` float NOT NULL,
  `whtofltx` float NOT NULL,
  `drcofltx` float NOT NULL,
  `drcofrbr` float NOT NULL,
  `rtepkg` float NOT NULL,
  `totl` float NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`tinno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`tinno`, `dteofprch`, `tinttlwht`, `whtofltx`, `drcofltx`, `drcofrbr`, `rtepkg`, `totl`, `status`) VALUES
(4, '2019-04-05', 221, 198, 23, 45.54, 124, 5646.96, 1),
(5, '2019-04-05', 221, 201, 22, 44.22, 124, 5483.28, 1),
(6, '2019-04-05', 221, 203, 22, 44.66, 124, 5537.84, 1),
(7, '2019-04-05', 220, 200, 40, 80, 124, 9920, 1),
(20, '2019-04-05', 220, 202, 45, 90.9, 124, 11271.6, 1),
(40, '2019-03-10', 221, 199, 43, 85.57, 150, 12835.5, 1),
(98, '2019-05-06', 220, 192, 45, 86.4, 124, 10713.6, 0),
(99, '2019-05-07', 220, 200, 39, 78, 124, 9672, 0),
(101, '2019-04-05', 220, 195, 40, 78, 124, 9672, 0),
(102, '2019-04-05', 220, 199, 40, 79.6, 124, 9870.4, 0),
(103, '2019-04-05', 220, 197, 40, 78.8, 124, 9771.2, 0),
(104, '2019-04-05', 221, 199, 40, 79.6, 124, 9870.4, 1),
(105, '2019-05-06', 221, 201, 43, 86.43, 124, 10717.3, 1),
(106, '2020-07-19', 231, 211, 44, 92.84, 120, 11140.8, 1),
(201, '2019-05-07', 221, 196, 30, 58.8, 124, 7291.2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

DROP TABLE IF EXISTS `rate`;
CREATE TABLE IF NOT EXISTS `rate` (
  `rss4` float NOT NULL,
  `rss3` float NOT NULL,
  `rss2` float NOT NULL,
  `latex` float NOT NULL,
  `sino` int(1) NOT NULL,
  PRIMARY KEY (`sino`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rss4`, `rss3`, `rss2`, `latex`, `sino`) VALUES
(120, 122, 111, 111, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Name` varchar(30) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `Paddr` varchar(100) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `aditnmob` bigint(10) DEFAULT NULL,
  `acr` float NOT NULL,
  `rub` int(5) NOT NULL,
  `loc` varchar(30) NOT NULL,
  `Bname` varchar(30) NOT NULL,
  `accno` bigint(20) NOT NULL,
  `ifsc` varchar(20) NOT NULL,
  `tempadd` varchar(100) NOT NULL,
  PRIMARY KEY (`mob`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `mob`, `Paddr`, `email`, `aditnmob`, `acr`, `rub`, `loc`, `Bname`, `accno`, `ifsc`, `tempadd`) VALUES
('Joy Koshy', 8281600536, 'koyickal puthen veedu, pathirickal po pathanapuram', 'ajijoy619@gmail.com', 9747912430, 4, 800, 'near st george orthodox chapel', 'federal bank', 7654398000007832, 'fb00987', ''),
('subin', 9656780585, 'asddsadsa', 'frsaf@dfd.com', 35353, 34, 5353, 'fxcffc', 'gffff', 2323232, '54325', 'yygyg'),
('varghese joy', 9744211018, 'vattavila', 'aa', 35353, 3, 23, 'fdg', 'sd', 989, 'fds', 'aa bb cc'),
('anu', 9747912430, 'fdfdfdffdfd', 'asterisk2k18@gmail.com', 1431, 3, 133, ' dffsdfds ', 'sd', 3421432, 'das23', 'ccccccc'),
('gokul', 9867545323, 'hgyh xd cnnbgvbg', 'asterisk2k18@gmail.com', 9747912430, 5, 133, 'esxewsfrewrewrewre', 'SBI', 3421432545356456, 'sws43', 'sgfgsxefrexfrdxrdtrcfd'),
('KOSHY JOY', 9876543120, 'koyickal puthen veedu pathirickal po pathanapuram', 'asterisk2k18@gmail.com', 8281600536, 3, 1000, ' st george chapel,edathara ', 'SBI', 1234567890987678, 'das23', ''),
('Rahul satheesh', 9876543201, 'qwertyuiop', 'asterisk2k18@gmail.com', 8281600536, 6, 300, 'qwertyuiop', 'SBI', 3421432545354543, 'sws43', 'exsrddf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
