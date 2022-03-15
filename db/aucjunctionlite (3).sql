-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 01:35 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `currentlocation` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addlot`
--

INSERT INTO `addlot` (`sl_noadd`, `irole`, `icategory`, `icontactperson`, `icompanyname`, `iauctionid`, `iauction_start`, `iauction_end`, `iemailid`, `imageupload`, `isubcategory`, `iproductdes`, `inspectiondate`, `imrp`, `startaucprice`, `endaucprice`, `sl_ano`, `entryfee`, `currentlocation`) VALUES
(2, 'individual', 'Automobile', '', 'NA', 'AUC/Bike/13/2/8', '2022-03-11 13:02:00.000000', '2022-03-11 13:02:00.000000', 'aa', 'a:1:{i:0;s:44:\"WhatsApp_Image_2022-01-10_at_3_01_28_PM.jpeg\";}', 'Properties', 'aa', '2022-03-11 13:02:00.000000', 'aa', 'aa', 'aa', NULL, 0, NULL),
(4, 'company', 'Toys', '', 'aa', 'AUC/Furniture/13/3/56', '2022-03-11 13:04:00.000000', '2022-03-11 13:04:00.000000', 'NA', 'a:2:{i:0;s:34:\"Screenshot_20220207-102431_(1).jpg\";i:1;s:30:\"Screenshot_20220207-102431.jpg\";}', 'Properties', 'aa', '2022-03-11 13:04:00.000000', 'aa', 'aaa', 'aa', NULL, 0, NULL),
(6, 'company', 'Automobile', '', 'aa', 'AUC/Bike/13/12/17', '2022-03-11 13:12:00.000000', '2022-03-11 13:12:00.000000', 'NA', 'a:1:{i:0;s:30:\"Screenshot_20220207-102438.jpg\";}', 'Properties', 'aaaa', '2022-03-11 13:12:00.000000', 'aaa', 'aaa', 'aa', NULL, 0, NULL),
(7, 'company', 'Automobile', '', 'aa', 'AUC/Bike/13/13/2', '2022-03-11 13:13:00.000000', '2022-03-11 13:13:00.000000', 'NA', 'a:1:{i:0;s:50:\"WhatsApp_Image_2022-02-26_at_12_19_49_PM_(1)1.jpeg\";}', 'Properties', 'aaa', '2022-03-11 13:13:00.000000', 'aa', 'aa', 'aa', NULL, 0, NULL),
(8, 'company', 'Automobile', '', 'ss', 'AUC/Bike/13/13/49', '2022-03-11 13:14:00.000000', '2022-03-11 13:14:00.000000', 'NA', 'a:3:{i:0;s:46:\"WhatsApp_Image_2022-02-26_at_12_23_33_PM2.jpeg\";i:1;s:50:\"WhatsApp_Image_2022-02-26_at_12_19_49_PM_(1)2.jpeg\";i:2;s:46:\"WhatsApp_Image_2022-02-26_at_12_19_49_PM3.jpeg\";}', 'Properties', 'aaa', '2022-03-11 13:14:00.000000', 'aa', 'aa', 'aa', NULL, 0, NULL);

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
(1, 'megha@gmail.com', 'bWVnaGE=', 1, NULL, NULL, NULL);

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
(2, 'Bike', '', 'NA', 'AUC/Bike/13/2/8', '2022-03-11 13:02:00.000000', '2022-03-11 13:02:00.000000', 1, 'individual', 'aa', NULL),
(4, 'Furniture', '', 'aa', 'AUC/Furniture/13/3/56', '2022-03-11 13:04:00.000000', '2022-03-11 13:04:00.000000', 1, 'company', 'NA', NULL),
(6, 'Bike', '', 'aa', 'AUC/Bike/13/12/17', '2022-03-11 13:12:00.000000', '2022-03-11 13:12:00.000000', 1, 'company', 'NA', NULL),
(7, 'Bike', '', 'aa', 'AUC/Bike/13/13/2', '2022-03-11 13:13:00.000000', '2022-03-11 13:13:00.000000', 1, 'company', 'NA', NULL),
(8, 'Bike', '', 'ss', 'AUC/Bike/13/13/49', '2022-03-11 13:13:00.000000', '2022-03-11 13:14:00.000000', 1, 'company', 'NA', NULL);

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
(1, 'megha sangmesh ', '8548857535', '111111111111', 'meghasangmesh2@gmail.com', 'bWVnaGE=', 'bWVnaGE=', 'a:1:{i:0;s:49:\"WhatsApp_Image_2022-02-26_at_12_40_59_PM_(1).jpeg\";}', 'Kormangala', 'Bangalore', 'Karnataka', 'India', '560047', 'megha ', 'a:1:{i:0;s:46:\"WhatsApp_Image_2022-02-26_at_12_19_49_PM1.jpeg\";}', 1, NULL, NULL),
(2, 'megha', '8548857535', '111111111111', 'megha@gmail.com', 'bWVnaGE=', 'bWVnaGE=', 'a:1:{i:0;s:30:\"Screenshot_20220207-102447.jpg\";}', 'kormangala ', 'megha ', 'Karnataka', 'India', '111111', 'megha sangmesh', 'a:1:{i:0;s:49:\"WhatsApp_Image_2022-02-26_at_12_40_59_PM_(2).jpeg\";}', 0, NULL, NULL);

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
(1, 'suma', '8548857535', '111111111111', 'meghasangmesh2gmail.com', 'bWVnaGE=', 'bWVnaGE=', 'a:1:{i:0;s:49:\"WhatsApp_Image_2022-02-26_at_12_19_49_PM_(1).jpeg\";}', 'kormangala ', 'Bangalore', 'Karnataka', 'India', '487555', 'megha', 'a:1:{i:0;s:50:\"WhatsApp_Image_2022-02-26_at_12_19_49_PM_(1)1.jpeg\";}', '1', NULL, NULL, 'INDIVIDUAL', 'madhu', NULL, NULL),
(2, 'aaaaaaa', '8548857535', NULL, 'megha@gmail.com', 'MjlBQURDQjIyMzBNMVpQ', 'MjlBQURDQjIyMzBNMVpQ', NULL, '11', NULL, NULL, 'India', '2222222', 'megha', NULL, '0', '29AADCB2230M1ZP', 'Type of Seller', 'BUSSINESS', 'megha', NULL, NULL),
(3, 'megha sangmesh', '8548857535', NULL, 'megha@gmail.com', 'bWVnaGE=', '', NULL, '', '', 'Karnataka', 'India', '', 'sangmesh ', NULL, '0', '', 'Type of Seller', 'BUSSINESS', '', NULL, NULL),
(4, 'megha sangmesh', '8548857535', NULL, 'meghasangmesh2@gmail.com', 'bWVnaGE=', 'bWVnaGE=', NULL, '#11 c-1  jurum Lakshman Rao Nagar', 'Bangalore', 'Karnataka', 'India', '560047', 'sangmesh ', NULL, '0', '18AABCU9603R1ZM', 'Type of Seller', 'BUSSINESS', 'meghaenterprises', NULL, NULL),
(5, 'megha sangmesh', '8548857535', NULL, 'meghasangmesh2@gmail.com', 'bWVnaGE=', 'bWVnaGE=', NULL, 'Lakshman rao nagra ', 'Bangalore', 'Karnataka', 'India', '560047', 'megha sangmesh', NULL, '0', '18AABCU9603R1ZM', 'Type of Seller', 'BUSSINESS', 'meghasangmesh ', NULL, NULL),
(6, 'megha sangmesh ', '8548857535', '111111111111', 'meghasangmesh2@gmail.com', 'bWVnaGE=', 'bWVnaGE=', 'a:1:{i:0;s:30:\"Screenshot_20220207-102251.jpg\";}', 'kormangala', 'Bangalore', 'Karnataka', 'India', '560074', 'megha ', 'a:1:{i:0;s:45:\"WhatsApp_Image_2022-02-26_at_12_19_49_PM.jpeg\";}', '0', NULL, NULL, 'INDIVIDUAL', NULL, NULL, NULL);

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
-- Indexes for table `buyerdetails`
--
ALTER TABLE `buyerdetails`
  ADD PRIMARY KEY (`buysl_no`);

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
  MODIFY `sl_noadd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `sl_ano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `buyerdetails`
--
ALTER TABLE `buyerdetails`
  MODIFY `buysl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sellerdetails`
--
ALTER TABLE `sellerdetails`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
