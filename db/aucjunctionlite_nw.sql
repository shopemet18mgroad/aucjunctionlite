-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 12:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aucjunctionlite`
--

-- --------------------------------------------------------

--
-- Table structure for table `addlot`
--

CREATE TABLE `addlot` (
  `sl_noadd` int(11) NOT NULL,
  `irole` varchar(225) DEFAULT NULL,
  `icategory` varchar(225) DEFAULT NULL,
  `icontactperson` varchar(225) DEFAULT NULL,
  `icompanyname` varchar(225) DEFAULT NULL,
  `iauctionid` varchar(225) DEFAULT NULL,
  `iauction_start` datetime(6) DEFAULT NULL,
  `iauction_end` datetime(6) DEFAULT NULL,
  `iemailid` varchar(225) DEFAULT NULL,
  `imageupload` tinytext DEFAULT NULL,
  `isubcategory` varchar(225) DEFAULT NULL,
  `iproductdes` varchar(225) DEFAULT NULL,
  `inspectiondate` datetime(6) DEFAULT NULL,
  `imrp` varchar(225) DEFAULT NULL,
  `startaucprice` varchar(225) DEFAULT NULL,
  `endaucprice` varchar(225) DEFAULT NULL,
  `sl_ano` int(11) DEFAULT NULL,
  `entryfee` int(11) DEFAULT NULL,
  `currentlocation` varchar(225) DEFAULT NULL,
  `iproductname` varchar(225) DEFAULT NULL,
  `cbid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addlot`
--

INSERT INTO `addlot` (`sl_noadd`, `irole`, `icategory`, `icontactperson`, `icompanyname`, `iauctionid`, `iauction_start`, `iauction_end`, `iemailid`, `imageupload`, `isubcategory`, `iproductdes`, `inspectiondate`, `imrp`, `startaucprice`, `endaucprice`, `sl_ano`, `entryfee`, `currentlocation`, `iproductname`, `cbid`) VALUES
(1, 'company', 'Automobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Car/11/2/58', '2022-03-22 11:00:00.000000', '2022-03-22 11:00:00.000000', 'NA', 'a:1:{i:0;s:21:\"Chrysanthemum_221.jpg\";}', 'Car', 'suma', '2022-03-22 11:00:00.000000', '1', '2', '3', NULL, 4, NULL, NULL, 0),
(2, 'company', 'Automobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Car/11/2/58', '2022-03-22 11:01:00.000000', '2022-03-22 11:01:00.000000', 'NA', 'a:1:{i:0;s:12:\"Desert30.jpg\";}', 'Car', 'suma', '2022-03-22 11:01:00.000000', '1000', '2000', '3000', NULL, 400, NULL, NULL, 0),
(3, 'company', 'Automobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Car/11/2/58', '2022-03-22 11:03:00.000000', '2022-03-22 11:03:00.000000', 'NA', 'a:1:{i:0;s:16:\"Hydrangeas18.jpg\";}', 'Car', 'suma', '2022-03-22 11:03:00.000000', '1000', '200', '300', NULL, 0, NULL, NULL, 0),
(4, 'company', 'Automobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Car/11/3/52', '2022-03-22 11:04:00.000000', '2022-03-22 11:05:00.000000', 'NA', 'a:1:{i:0;s:15:\"Jellyfish13.jpg\";}', 'Car', 'suma', '2022-03-22 11:04:00.000000', '1000', '2000', '300', NULL, 400, NULL, NULL, 0),
(5, 'company', 'Automobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Car/11/2/58', '2022-03-22 11:05:00.000000', '2022-03-22 11:05:00.000000', 'NA', 'a:1:{i:0;s:11:\"Koala13.jpg\";}', 'Car', 'suma', '2022-03-22 11:05:00.000000', '20000', '2', '300', NULL, 400, NULL, NULL, 0),
(6, 'company', 'Automobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Bike/11/8/48', '2022-03-22 11:09:00.000000', '2022-03-22 11:09:00.000000', 'NA', 'a:1:{i:0;s:19:\"Chrysanthemum26.jpg\";}', 'Bike', 'a', '2022-03-22 11:09:00.000000', '20000', '2000', '300', NULL, 400, NULL, NULL, 0),
(7, 'company', 'Automobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Bike/11/9/36', '2022-03-22 11:10:00.000000', '2022-03-22 18:10:00.000000', 'NA', 'a:1:{i:0;s:12:\"Desert31.jpg\";}', 'Bike', 'aaa', '2022-03-22 11:10:00.000000', '20000', '2000', 'a', NULL, 400, NULL, NULL, 0),
(8, 'company', 'Automobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Bike/11/10/24', '2022-03-22 11:10:00.000000', '2022-03-22 11:11:00.000000', 'NA', 'a:1:{i:0;s:16:\"Hydrangeas19.jpg\";}', 'Bike', 'AA', '2022-03-22 11:10:00.000000', '20000', '2000', 'a', NULL, 400, NULL, NULL, 0),
(9, 'company', 'Automobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Bike/11/11/14', '2022-03-22 11:11:00.000000', '2022-03-22 11:11:00.000000', 'NA', 'a:1:{i:0;s:15:\"Jellyfish14.jpg\";}', 'Bike', 'q', '2022-03-22 11:11:00.000000', '20000', 'a', 'ca', NULL, 400, NULL, NULL, 0),
(10, 'company', 'Automobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Bike/11/12/14', '2022-03-22 11:13:00.000000', '2022-03-22 11:13:00.000000', 'NA', 'a:1:{i:0;s:11:\"Koala14.jpg\";}', 'Bike', 'a', '2022-03-22 11:12:00.000000', '1', '2000', 'a', NULL, 0, NULL, NULL, 0),
(11, 'company', 'Mobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Mobile/11/19/21', '2022-03-23 11:20:00.000000', '2022-03-23 11:20:00.000000', 'NA', 'a:1:{i:0;s:19:\"Chrysanthemum27.jpg\";}', 'Mobile', 'a', '2022-03-23 11:20:00.000000', '20000', '2000', '300', NULL, 400, NULL, NULL, 0),
(12, 'company', 'Mobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Mobile/11/19/21', '2022-03-23 11:21:00.000000', '2022-03-23 11:21:00.000000', 'NA', 'a:1:{i:0;s:12:\"Desert32.jpg\";}', 'Mobile', 'a', '2022-03-23 11:21:00.000000', '1000', '2000', '300', NULL, 400, NULL, NULL, 0),
(13, 'company', 'Mobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Mobile/11/19/21', '2022-03-23 11:22:00.000000', '2022-03-23 11:22:00.000000', 'NA', 'a:1:{i:0;s:12:\"Tulips34.jpg\";}', 'Mobile', 'a', '2022-03-23 11:22:00.000000', '20000', '2000', '300', NULL, 4, NULL, NULL, 0),
(14, 'company', 'Mobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Mobile/11/19/21', '2022-03-23 11:27:00.000000', '2022-03-23 11:27:00.000000', 'NA', 'a:1:{i:0;s:14:\"Penguins19.jpg\";}', 'Mobile', 'aaaaa', '2022-03-23 11:27:00.000000', '1000', '200', '3', NULL, 0, NULL, NULL, 0),
(15, 'company', 'Mobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Mobile/11/19/21', '2022-03-22 11:30:00.000000', '2022-03-22 11:30:00.000000', 'NA', 'a:1:{i:0;s:20:\"Chrysanthemum_35.jpg\";}', 'Mobile', 'aa', '2022-03-22 11:30:00.000000', '20000a', 'a', 'a', NULL, 0, NULL, NULL, 0),
(18, 'company', 'Properties', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Properties/12/4/51', '2022-03-22 12:05:00.000000', '2022-03-22 12:05:00.000000', 'NA', 'a:1:{i:0;s:19:\"Chrysanthemum28.jpg\";}', 'Properties', 'aaaaaa', '2022-03-22 12:05:00.000000', '20000', '200', 'a', NULL, 400, NULL, NULL, 0),
(19, 'company', 'Properties', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Properties/12/7/5', '2022-03-22 12:08:00.000000', '2022-03-22 12:08:00.000000', 'NA', 'a:1:{i:0;s:20:\"Chrysanthemum_36.jpg\";}', 'Properties', 'aaaaaaa', '2022-03-22 12:07:00.000000', '1000', '200', '300', NULL, 400, NULL, NULL, 0),
(20, 'company', 'Properties', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Properties/12/8/22', '2022-03-22 12:08:00.000000', '2022-03-22 12:09:00.000000', 'NA', 'a:1:{i:0;s:14:\"Desert_212.jpg\";}', 'Properties', 'aaaaaaa', '2022-03-22 12:08:00.000000', '20000', '2000', 'a', NULL, 4, NULL, NULL, 0),
(21, 'company', 'Properties', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Properties/12/8/22', '2022-03-22 12:10:00.000000', '2022-03-22 12:10:00.000000', 'NA', 'a:1:{i:0;s:19:\"Lighthouse_2_27.jpg\";}', 'Properties', 'qqqqq', '2022-03-22 12:09:00.000000', '1000', '2000', '3000', NULL, 400, NULL, NULL, 0),
(22, 'company', 'Properties', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Properties/12/10/54', '2022-03-22 12:11:00.000000', '2022-03-22 12:11:00.000000', 'NA', 'a:1:{i:0;s:20:\"Chrysanthemum_37.jpg\";}', 'Properties', 'aaaaaaaaaaa', '2022-03-22 12:11:00.000000', '1', '2000', '300', NULL, 5, NULL, NULL, 0),
(23, 'company', 'Electronic Appliance', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/TV/12/18/47', '2022-03-22 12:19:00.000000', '2022-03-22 12:19:00.000000', 'NA', 'a:1:{i:0;s:19:\"Lighthouse_2_28.jpg\";}', 'TV', 'a', '2022-03-22 12:19:00.000000', '20000', '2000', '18000', NULL, 400, NULL, NULL, 0),
(24, 'company', 'Electronic Appliance', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/TV/12/20/2', '2022-03-22 12:20:00.000000', '2022-03-22 12:20:00.000000', 'NA', 'a:1:{i:0;s:19:\"Lighthouse_2_39.jpg\";}', 'TV', 'aaaaa', '2022-03-22 12:20:00.000000', '20000', '200', '300', NULL, 400, NULL, NULL, 0),
(25, 'company', 'Electronic Appliance', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/TV/12/21/8', '2022-03-22 12:21:00.000000', '2022-03-22 12:22:00.000000', 'NA', 'a:1:{i:0;s:16:\"Penguins_2_2.jpg\";}', 'TV', 'aaaaaaaaaa', '2022-03-22 12:21:00.000000', '1000', '2000', 'a', NULL, 400, NULL, NULL, 0),
(26, 'company', 'Electronic Appliance', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/TV/12/22/24', '2022-03-23 12:23:00.000000', '2022-03-23 12:23:00.000000', 'NA', 'a:1:{i:0;s:17:\"Lighthouse_25.jpg\";}', 'TV', 'aaaaaaa', '2022-03-24 12:22:00.000000', '1000', '200', '18000', NULL, 0, NULL, NULL, 0),
(27, 'company', 'Electronic Appliance', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/TV/12/24/13', '2022-03-23 12:24:00.000000', '2022-03-23 12:24:00.000000', 'NA', 'a:1:{i:0;s:19:\"Lighthouse_2_29.jpg\";}', 'TV', 'aaaaaaaaaaa', '2022-03-23 12:24:00.000000', '20000', '200', 'a', NULL, 400, NULL, NULL, 0),
(28, 'company', 'Furniture', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Furniture/12/29/15', '2022-03-23 12:30:00.000000', '2022-03-23 12:30:00.000000', 'NA', 'a:1:{i:0;s:20:\"Lighthouse_2_210.jpg\";}', 'Furniture', 'aaaaaaaaaaaa', '2022-03-22 12:30:00.000000', '20000', '2000', '300', NULL, 400, NULL, NULL, 0),
(29, 'company', 'Furniture', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Furniture/12/30/25', '2022-03-23 12:31:00.000000', '2022-03-23 12:31:00.000000', 'NA', 'a:1:{i:0;s:15:\"Lighthouse5.jpg\";}', 'Furniture', 'aaaaaaaaa', '2022-03-23 12:30:00.000000', '20000', '2000', '300', NULL, 400, NULL, NULL, 0),
(30, 'company', 'Furniture', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Furniture/12/30/25', '2022-03-23 12:32:00.000000', '2022-03-23 12:32:00.000000', 'NA', 'a:1:{i:0;s:20:\"Chrysanthemum_38.jpg\";}', 'Furniture', 'aaaaaaaaaa', '2022-03-23 12:32:00.000000', '1000', '2000', '300', NULL, 400, NULL, NULL, 0),
(31, 'company', 'Furniture', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Furniture/12/33/6', '2022-03-22 12:33:00.000000', '2022-03-22 12:33:00.000000', 'NA', 'a:1:{i:0;s:20:\"Lighthouse_2_211.jpg\";}', 'Furniture', 'aaaaaaaaaa', '2022-03-23 12:33:00.000000', '1000', '200', '300', NULL, 5, NULL, NULL, 0),
(32, 'company', 'Furniture', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Furniture/12/30/25', '2022-03-23 12:34:00.000000', '2022-03-23 12:34:00.000000', 'NA', 'a:1:{i:0;s:20:\"Lighthouse_2_212.jpg\";}', 'Furniture', 'aaaaaaa', '2022-03-23 12:34:00.000000', '20000', '2000', '300', NULL, 4, NULL, NULL, 0),
(33, 'company', 'Electronic Appliance', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Fridge/12/55/9', '2022-03-24 12:56:00.000000', '2022-03-24 12:56:00.000000', 'NA', 'a:1:{i:0;s:23:\"Chrysanthemum_2_211.jpg\";}', 'Fridge', 'aaaaaaa', '2022-03-23 12:55:00.000000', '1', '2000', '300', NULL, 5, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `adminprofile`
--

CREATE TABLE `adminprofile` (
  `slno` int(11) NOT NULL,
  `ausername` varchar(225) DEFAULT NULL,
  `apassword` varchar(225) DEFAULT NULL,
  `aoptions` tinyint(1) NOT NULL DEFAULT 1,
  `aotp` int(11) DEFAULT NULL,
  `aname` varchar(250) DEFAULT NULL,
  `averifiedemail` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminprofile`
--

INSERT INTO `adminprofile` (`slno`, `ausername`, `apassword`, `aoptions`, `aotp`, `aname`, `averifiedemail`) VALUES
(1, 'suma@gmail.com', 'MTIz', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `sl_ano` int(11) NOT NULL,
  `icategory` varchar(225) DEFAULT NULL,
  `icontactperson` varchar(225) DEFAULT NULL,
  `icompanyname` varchar(225) DEFAULT NULL,
  `iauctionid` varchar(225) DEFAULT NULL,
  `iauction_start` datetime(6) DEFAULT NULL,
  `iauction_end` datetime(6) DEFAULT NULL,
  `aoption` tinyint(1) DEFAULT 0,
  `irole` varchar(225) DEFAULT NULL,
  `iemailid` varchar(225) DEFAULT NULL,
  `date` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`sl_ano`, `icategory`, `icontactperson`, `icompanyname`, `iauctionid`, `iauction_start`, `iauction_end`, `aoption`, `irole`, `iemailid`, `date`) VALUES
(10, 'Car', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Car/10/58/49', '2022-03-22 10:58:00.000000', '2022-03-22 10:59:00.000000', 1, 'company', 'NA', NULL),
(11, 'Car', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Car/11/0/41', '2022-03-22 11:00:00.000000', '2022-03-22 11:00:00.000000', 1, 'company', 'NA', NULL),
(12, 'Car', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Car/11/2/58', '2022-03-22 11:03:00.000000', '2022-03-22 11:03:00.000000', 1, 'company', 'NA', NULL),
(13, 'Car', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Car/11/3/52', '2022-03-22 11:04:00.000000', '2022-03-22 11:04:00.000000', 1, 'company', 'NA', NULL),
(14, 'Car', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Car/11/5/16', '2022-03-22 11:05:00.000000', '2022-03-22 11:05:00.000000', 1, 'company', 'NA', NULL),
(15, 'Bike', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Bike/11/8/48', '2022-03-22 11:08:00.000000', '2022-03-22 11:09:00.000000', 1, 'company', 'NA', NULL),
(16, 'Bike', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Bike/11/9/36', '2022-03-22 15:09:00.000000', '2022-03-22 18:20:00.000000', 1, 'company', 'NA', NULL),
(17, 'Bike', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Bike/11/10/24', '2022-03-22 11:10:00.000000', '2022-03-22 11:10:00.000000', 1, 'company', 'NA', NULL),
(18, 'Bike', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Bike/11/11/14', '2022-03-22 11:11:00.000000', '2022-03-22 11:11:00.000000', 1, 'company', 'NA', NULL),
(19, 'Bike', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Bike/11/12/14', '2022-03-23 11:12:00.000000', '2022-03-23 11:12:00.000000', 1, 'company', 'NA', NULL),
(20, 'Mobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Mobile/11/18/26', '2022-03-22 11:18:00.000000', '2022-03-22 11:18:00.000000', 1, 'company', 'NA', NULL),
(21, 'Mobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Mobile/11/19/21', '2022-03-22 11:19:00.000000', '2022-03-22 11:19:00.000000', 1, 'company', 'NA', NULL),
(22, 'Mobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Mobile/11/20/54', '2022-03-23 11:21:00.000000', '2022-03-23 11:21:00.000000', 1, 'company', 'NA', NULL),
(23, 'Mobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Mobile/11/22/7', '2022-03-23 11:22:00.000000', '2022-03-23 11:22:00.000000', 1, 'company', 'NA', NULL),
(24, 'Mobile', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Mobile/11/23/1', '2022-03-23 11:23:00.000000', '2022-03-23 11:23:00.000000', 1, 'company', 'NA', NULL),
(31, 'Properties', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Properties/12/4/51', '2022-03-22 12:05:00.000000', '2022-03-22 12:05:00.000000', 1, 'company', 'NA', NULL),
(32, 'Properties', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Properties/12/7/5', '2022-03-22 12:07:00.000000', '2022-03-22 12:07:00.000000', 1, 'company', 'NA', NULL),
(33, 'Properties', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Properties/12/8/22', '2022-03-22 12:08:00.000000', '2022-03-22 12:08:00.000000', 1, 'company', 'NA', NULL),
(34, 'Properties', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Properties/12/9/26', '2022-03-22 12:09:00.000000', '2022-03-22 12:09:00.000000', 1, 'company', 'NA', NULL),
(35, 'Properties', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Properties/12/10/54', '2022-03-22 12:11:00.000000', '2022-03-22 12:11:00.000000', 1, 'company', 'NA', NULL),
(36, 'TV', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/TV/12/17/33', '2022-03-22 12:17:00.000000', '2022-03-22 12:17:00.000000', 1, 'company', 'NA', NULL),
(37, 'TV', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/TV/12/18/47', '2022-03-22 12:18:00.000000', '2022-03-22 12:19:00.000000', 1, 'company', 'NA', NULL),
(38, 'TV', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/TV/12/20/2', '2022-03-22 12:20:00.000000', '2022-03-22 12:20:00.000000', 1, 'company', 'NA', NULL),
(39, 'TV', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/TV/12/21/8', '2022-03-22 12:21:00.000000', '2022-03-22 12:21:00.000000', 1, 'company', 'NA', NULL),
(40, 'TV', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/TV/12/22/24', '2022-03-24 12:22:00.000000', '2022-03-24 12:22:00.000000', 1, 'company', 'NA', NULL),
(41, 'TV', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/TV/12/24/13', '2022-03-23 12:24:00.000000', '2022-03-23 12:24:00.000000', 1, 'company', 'NA', NULL),
(42, 'Furniture', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Furniture/12/29/15', '2022-03-23 12:29:00.000000', '2022-03-23 12:29:00.000000', 1, 'company', 'NA', NULL),
(43, 'Furniture', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Furniture/12/30/25', '2022-03-23 12:30:00.000000', '2022-03-23 12:30:00.000000', 1, 'company', 'NA', NULL),
(44, 'Furniture', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Furniture/12/31/38', '2022-03-23 12:31:00.000000', '2022-03-23 12:31:00.000000', 1, 'company', 'NA', NULL),
(45, 'Furniture', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Furniture/12/33/6', '2022-03-23 12:33:00.000000', '2022-03-23 12:33:00.000000', 1, 'company', 'NA', NULL),
(46, 'Furniture', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Furniture/12/34/10', '2022-03-23 12:34:00.000000', '2022-03-23 12:34:00.000000', 1, 'company', 'NA', NULL),
(47, 'Fridge', 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '21/3/Fridge/12/55/9', '2022-03-24 12:55:00.000000', '2022-03-24 12:55:00.000000', 0, 'company', 'NA', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biddingdata`
--

CREATE TABLE `biddingdata` (
  `id` int(11) NOT NULL,
  `bidderusername` varchar(200) DEFAULT NULL,
  `sauctionid` varchar(200) DEFAULT NULL,
  `slotno` varchar(200) DEFAULT NULL,
  `bidvalue` int(11) DEFAULT NULL,
  `Date_time` datetime(6) DEFAULT current_timestamp(6),
  `bidamount` varchar(200) DEFAULT NULL,
  `sapproval` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyerdetails`
--

CREATE TABLE `buyerdetails` (
  `buysl_no` int(11) NOT NULL,
  `buyername` varchar(250) DEFAULT NULL,
  `buyercontactnumber` varchar(250) DEFAULT NULL,
  `buyerasdharnumber` varchar(250) DEFAULT NULL,
  `buyeremail` varchar(250) DEFAULT NULL,
  `buyerpass` varchar(250) DEFAULT NULL,
  `bconpassword` varchar(250) DEFAULT NULL,
  `buyeradharcard` tinytext DEFAULT NULL,
  `buyeraddress` varchar(250) DEFAULT NULL,
  `bcity` varchar(250) DEFAULT NULL,
  `buyerstate` varchar(250) DEFAULT NULL,
  `buyercountry` varchar(250) DEFAULT NULL,
  `buyerpincode` varchar(250) DEFAULT NULL,
  `buyercontactperson` varchar(250) DEFAULT NULL,
  `addressproof` tinytext DEFAULT NULL,
  `buyeroption` tinyint(1) DEFAULT 0,
  `botp` varchar(225) DEFAULT NULL,
  `bverifiedemail` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyerdetails`
--

INSERT INTO `buyerdetails` (`buysl_no`, `buyername`, `buyercontactnumber`, `buyerasdharnumber`, `buyeremail`, `buyerpass`, `bconpassword`, `buyeradharcard`, `buyeraddress`, `bcity`, `buyerstate`, `buyercountry`, `buyerpincode`, `buyercontactperson`, `addressproof`, `buyeroption`, `botp`, `bverifiedemail`) VALUES
(1, 'A', 'B', 'C', 'suma@gmail.com', 'MTIz', 'MTIz', 'w', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 1, 'f', 'f'),
(2, NULL, '9986879045', NULL, 'nishant6000@gmail.com', 'TmlzaGFudEAxMQ==', 'TmlzaGFudEAxMQ==', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `cart_payment`
--

CREATE TABLE `cart_payment` (
  `sl_no` int(11) NOT NULL,
  `auction_id` varchar(200) NOT NULL,
  `mybid` int(30) NOT NULL,
  `entry_fee` int(10) NOT NULL,
  `cart` tinyint(1) NOT NULL DEFAULT 0,
  `wishlist` tinyint(1) NOT NULL DEFAULT 0,
  `auction` tinyint(1) NOT NULL DEFAULT 0,
  `payment_status` tinyint(1) NOT NULL DEFAULT 0,
  `payment_init` tinyint(1) NOT NULL DEFAULT 0,
  `txn_id` varchar(300) DEFAULT NULL,
  `user_email` varchar(300) NOT NULL,
  `gst` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart_payment`
--

INSERT INTO `cart_payment` (`sl_no`, `auction_id`, `mybid`, `entry_fee`, `cart`, `wishlist`, `auction`, `payment_status`, `payment_init`, `txn_id`, `user_email`, `gst`) VALUES
(3, '21/3/Bike/11/9/36', 0, 20000, 0, 0, 1, 0, 0, NULL, 'suma@gmail.com', NULL),
(4, '21/3/Car/11/2/58', 0, 1, 1, 0, 0, 0, 0, NULL, 'suma@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `sl_no` int(10) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `phoneotp` int(10) DEFAULT NULL,
  `emailotp` int(10) DEFAULT NULL,
  `validity` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`sl_no`, `email`, `phone`, `phoneotp`, `emailotp`, `validity`) VALUES
(4, 'nishant6000@gmail.com', '9986879045', 56823, 57291, '2022-03-28 04:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `sellerdetails`
--

CREATE TABLE `sellerdetails` (
  `sl_no` int(11) NOT NULL,
  `iname` varchar(250) DEFAULT NULL,
  `icontactnumber` varchar(250) DEFAULT NULL,
  `iadharnumber` varchar(250) DEFAULT NULL,
  `iemailid` varchar(250) DEFAULT NULL,
  `ipass` varchar(250) DEFAULT NULL,
  `iconpass` varchar(250) DEFAULT NULL,
  `iadharcardfile` tinytext DEFAULT NULL,
  `iaddres` varchar(250) DEFAULT NULL,
  `iicity` varchar(250) DEFAULT NULL,
  `istate` varchar(250) DEFAULT NULL,
  `icountry` varchar(250) DEFAULT NULL,
  `ipincode` varchar(250) DEFAULT NULL,
  `icontactperson` varchar(250) DEFAULT NULL,
  `iaddresprof` tinytext DEFAULT NULL,
  `ioption` varchar(225) DEFAULT '0',
  `igstnumber` varchar(225) DEFAULT NULL,
  `itypeseller` varchar(225) DEFAULT NULL,
  `role` varchar(225) DEFAULT NULL,
  `icompanyname` varchar(225) DEFAULT NULL,
  `otp` varchar(225) DEFAULT NULL,
  `sverifiedemail` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellerdetails`
--

INSERT INTO `sellerdetails` (`sl_no`, `iname`, `icontactnumber`, `iadharnumber`, `iemailid`, `ipass`, `iconpass`, `iadharcardfile`, `iaddres`, `iicity`, `istate`, `icountry`, `ipincode`, `icontactperson`, `iaddresprof`, `ioption`, `igstnumber`, `itypeseller`, `role`, `icompanyname`, `otp`, `sverifiedemail`) VALUES
(1, 'suma', '9019754676', NULL, 'suma@gmail.com', 'MTIz', 'MTIz', NULL, 'aaaaaaaaaaaaaa', 'bangalore', 'Bihar', 'India', '571423', 'aaaaaaa', NULL, '0', '29AADCB2230M1ZP', 'Ltd , Pvt Ltd , LLP, Corp', 'COMPANY', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, NULL),
(2, NULL, NULL, NULL, 'charith_dev@gmail.com', 'YWFhYWFhYWFhYQ==', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, 'charith_dev@gmail.com', 'YWFhYWFhYWFhYQ==', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, 'charith_dev@gmail.com', 'YWFhYWFhYWFhYQ==', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, 'charith_dev@gmail.com', 'YWFhYWFhYWFhYQ==', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, 'charith_dev@gmail.com', 'YWFhYWFhYWFhYQ==', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'BUYER', NULL, NULL, NULL),
(7, NULL, NULL, NULL, 'charith_dev@gmail.com', 'YWFhYWFhYWFhYQ==', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'BUYER', NULL, NULL, NULL),
(8, NULL, NULL, NULL, 'charith_dev@gmail.com', 'YWFhYWFhYWFhYQ==', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'BUYER', NULL, NULL, NULL),
(9, NULL, NULL, NULL, 'charith_dev@gmail.com', 'YWFhYWFhYWFhYQ==', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'BUYER', NULL, NULL, NULL),
(10, NULL, NULL, NULL, 'charith_dev@gmail.com', 'YWFhYWFhYWFhYQ==', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'BUYER', NULL, NULL, NULL),
(11, NULL, NULL, NULL, 'charith_dev@gmail.com', 'YWFhYWFhYWFhYQ==', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'BUYER', NULL, NULL, NULL),
(12, NULL, NULL, NULL, 'charith_dev@gmail.com', 'YWFhYWFhYWFhYQ==', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'BUYER', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addlot`
--
ALTER TABLE `addlot`
  ADD PRIMARY KEY (`sl_noadd`);

--
-- Indexes for table `adminprofile`
--
ALTER TABLE `adminprofile`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`sl_ano`);

--
-- Indexes for table `biddingdata`
--
ALTER TABLE `biddingdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyerdetails`
--
ALTER TABLE `buyerdetails`
  ADD PRIMARY KEY (`buysl_no`);

--
-- Indexes for table `cart_payment`
--
ALTER TABLE `cart_payment`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `sellerdetails`
--
ALTER TABLE `sellerdetails`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addlot`
--
ALTER TABLE `addlot`
  MODIFY `sl_noadd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `sl_ano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `biddingdata`
--
ALTER TABLE `biddingdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyerdetails`
--
ALTER TABLE `buyerdetails`
  MODIFY `buysl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart_payment`
--
ALTER TABLE `cart_payment`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sellerdetails`
--
ALTER TABLE `sellerdetails`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
