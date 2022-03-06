-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 01:48 PM
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
(1, 'company', 'Automobile', '', 'aaaa', 'AUC/Cars/11/43/29', '2022-03-05 11:44:00.000000', '2022-03-05 11:44:00.000000', 'NA', 'a:1:{i:0;s:6:\"22.png\";}', 'TV', 'aaaa', '2022-03-05 11:44:00.000000', '1', 'aaa', 'aaa', NULL, 0, NULL),
(2, 'company', 'Automobile', '', 'aaaaaaaaaa', 'AUC/Cars/11/44/21', '2022-03-05 11:44:00.000000', '2022-03-05 11:44:00.000000', 'NA', 'a:1:{i:0;s:10:\"Capt11.PNG\";}', 'TV', 'aaaaaa', '2022-03-05 11:44:00.000000', '2', 'aaaaaaa', 'aaaaaaaa', NULL, 0, NULL),
(3, 'company', 'Home Appliance', '', 'aaaaaaaaa', 'AUC/Cars/11/45/0', '2022-03-05 11:45:00.000000', '2022-03-05 11:45:00.000000', 'NA', 'a:1:{i:0;s:33:\"amba-shakti-tmt-bar-250x25010.jpg\";}', 'TV', 'aaaaaa', '2022-03-05 11:45:00.000000', '3', 'aaaaaaa', 'aaaaaaaa', NULL, 0, NULL),
(4, 'individual', 'Automobile', '', 'aaaaaaaa', 'AUC/Bikes/11/45/41', '2022-03-05 11:46:00.000000', '2022-03-05 11:46:00.000000', 'aaaaaaaa', 'a:1:{i:0;s:33:\"amba-shakti-tmt-bar-250x25011.jpg\";}', 'Bikes', 'aaaaaaa', '2022-03-05 11:46:00.000000', '4', 'aaaaaaa', 'aaaaaaaaa', NULL, 0, NULL),
(5, 'individual', 'Home Appliance', '', 'NA', 'AUC/Cars/11/46/43', '2022-03-05 11:47:00.000000', '2022-03-05 11:47:00.000000', 'aa', 'a:1:{i:0;s:40:\"amba-shakti-tmt-bars-500x500_-_Copy8.jpg\";}', 'Mobile', 'aaaaa', '2022-03-12 11:47:00.000000', '5', 'aaaaaaaa', 'aaaaaaa', NULL, 0, NULL),
(6, 'company', 'Automobile', '', 'aaa', 'AUC/Cars/11/47/21', '2022-03-05 11:47:00.000000', '2022-03-05 11:47:00.000000', 'NA', 'a:1:{i:0;s:33:\"amba-shakti-tmt-bar-250x25012.jpg\";}', 'TV', 'aaaaaaaaa', '2022-03-05 11:47:00.000000', '6', 'aaaaaaaa', 'aaaaaaaa', NULL, 0, NULL),
(7, 'individual', 'Automobile', '', 'NA', 'AUC/Bikes/11/48/2', '2022-03-05 11:48:00.000000', '2022-03-05 11:48:00.000000', 'aaaaaaa', 'a:1:{i:0;s:40:\"amba-shakti-tmt-bars-500x500_-_Copy9.jpg\";}', 'Fridge', 'aaaaa', '2022-03-05 11:48:00.000000', '7', 'aaaaaaaa', 'aaaaaaaaa', NULL, 0, NULL),
(8, 'individual', 'Automobile', '', 'NA', 'AUC/Cars/11/48/42', '2022-03-05 11:49:00.000000', '2022-03-05 11:49:00.000000', 'aaaaaaaaa', 'a:1:{i:0;s:33:\"amba-shakti-tmt-bar-250x25013.jpg\";}', 'Bikes', 'aaaaaaa', '2022-03-05 11:48:00.000000', '8', 'wwwwwwww', 'wwwwwwww', NULL, 0, NULL),
(9, 'individual', 'Automobile', '', 'NA', 'AUC/Cars/11/49/43', '2022-03-04 11:50:00.000000', '2022-03-05 11:50:00.000000', 'aaaaaaa', 'a:1:{i:0;s:14:\"2_-_Copy14.png\";}', 'Washing Machine', 'aaaaaaa', '2022-03-05 11:49:00.000000', '9', 'aaaaaaaaa', 'aaaaa', NULL, 0, NULL),
(10, 'company', 'Home Appliance', '', 'aaaaa', 'AUC/Cars/11/50/20', '2022-03-05 11:50:00.000000', '2022-03-04 11:50:00.000000', 'NA', 'a:1:{i:0;s:33:\"amba-shakti-tmt-bars-500x5006.jpg\";}', 'Mobile', 'aaaaaaa', '2022-03-05 11:50:00.000000', '10', 'aaaaaaaaa', 'aaaaaaaaa', NULL, 0, NULL),
(11, 'company', 'Mobile', '', 's', 'AUC/Bikes/12/13/34', '2022-03-24 12:14:00.000000', '2022-03-07 12:14:00.000000', 'NA', 'a:1:{i:0;s:13:\"1_-_Copy2.png\";}', 'Washing Machine', 'd', '2022-03-02 12:13:00.000000', 's', 's', 's', NULL, 0, NULL),
(12, 'NA', 'Electronic Appliance', 'NA', 'NA', 'NA', '2022-03-31 12:15:00.000000', '2022-03-24 12:15:00.000000', 'NA', 'a:1:{i:0;s:13:\"1_-_Copy3.png\";}', 'Cars', 'c', '2022-03-19 12:14:00.000000', 'c', 'c', 'c', NULL, 0, NULL),
(13, 'company', 'Home Appliance', '', 'c', 'AUC/Laptop/12/15/37', '2022-03-23 12:16:00.000000', '2022-03-18 12:16:00.000000', 'NA', 'a:1:{i:0;s:14:\"2_-_Copy15.png\";}', 'Bikes', 'c', '2022-03-16 12:15:00.000000', 'c', 'c', 'c', NULL, 0, NULL),
(14, 'individual', 'Home Appliance', '', 'NA', 'AUC/Bikes/12/17/4', '2022-03-25 12:17:00.000000', '2022-03-22 12:17:00.000000', 'c', 'a:1:{i:0;s:6:\"23.png\";}', 'Laptop', 'c', '2022-03-07 12:17:00.000000', 'S', 'S', 'S', NULL, 0, NULL),
(15, 'company', 'Electronic Appliance', '', 'd', 'AUC/Bikes/12/21/56', '2022-03-19 12:22:00.000000', '2022-03-22 12:22:00.000000', 'NA', 'a:1:{i:0;s:33:\"amba-shakti-tmt-bar-250x25014.jpg\";}', 'Commercial', 'd', '2022-03-12 12:22:00.000000', 'd', 'd', 'd', NULL, 0, NULL),
(16, 'individual', 'Home Appliance', '', 'NA', 'AUC/Laptop/12/22/39', '2022-03-25 12:23:00.000000', '2022-03-17 12:23:00.000000', 'd', 'a:1:{i:0;s:13:\"1_-_Copy4.png\";}', 'Commercial', 'd', '2022-03-17 12:23:00.000000', 'd', 'd', 'd', NULL, 0, NULL),
(17, 'individual', 'Home Appliance', '', 'NA', 'AUC/Bikes/12/23/23', '2022-03-25 12:23:00.000000', '2022-03-09 12:23:00.000000', 'd', 'a:1:{i:0;s:14:\"2_-_Copy16.png\";}', 'Commercial', 'd', '2022-03-03 12:23:00.000000', 'd', 'd', 'd', NULL, 0, NULL),
(18, 'individual', 'Mobile', '', 'NA', 'AUC/Bikes/12/24/12', '2022-03-10 12:24:00.000000', '2022-04-02 12:24:00.000000', 'd', 'a:1:{i:0;s:14:\"2_-_Copy17.png\";}', 'Bikes', 'd', '2022-03-18 12:24:00.000000', 'd', 'd', 'd', NULL, 0, NULL),
(19, 'individual', 'Electronic Appliance', '', 'NA', 'AUC/Cars/12/25/3', '2022-03-15 12:25:00.000000', '2022-03-17 12:25:00.000000', 'd', 'a:1:{i:0;s:13:\"1_-_Copy5.png\";}', 'Commercial', 'd', '2022-03-23 12:25:00.000000', 'd', 'd', 'd', NULL, 0, NULL);

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
(1, 'Cars', '', 'aaaa', 'AUC/Cars/11/43/29', '2022-03-05 11:43:00.000000', '2022-03-05 11:43:00.000000', 1, 'company', 'NA', NULL),
(2, 'Cars', '', 'aaaaaaaaaa', 'AUC/Cars/11/44/21', '2022-03-05 11:44:00.000000', '2022-03-05 11:44:00.000000', 1, 'company', 'NA', NULL),
(3, 'Cars', '', 'aaaaaaaaa', 'AUC/Cars/11/45/0', '2022-03-05 11:45:00.000000', '2022-03-05 11:45:00.000000', 1, 'company', 'NA', NULL),
(4, 'Bikes', '', 'aaaaaaaa', 'AUC/Bikes/11/45/41', '2022-03-05 11:45:00.000000', '2022-03-05 11:45:00.000000', 1, 'Select', 'aaaaaaaa', NULL),
(5, 'Cars', '', 'NA', 'AUC/Cars/11/46/43', '2022-03-05 11:46:00.000000', '2022-03-05 11:46:00.000000', 1, 'individual', 'aa', NULL),
(6, 'Cars', '', 'aaa', 'AUC/Cars/11/47/21', '2022-03-05 11:47:00.000000', '2022-03-05 11:47:00.000000', 1, 'company', 'NA', NULL),
(7, 'Bikes', '', 'NA', 'AUC/Bikes/11/48/2', '2022-03-05 11:48:00.000000', '2022-03-05 11:48:00.000000', 1, 'individual', 'aaaaaaa', NULL),
(8, 'Cars', '', 'NA', 'AUC/Cars/11/48/42', '2022-03-05 11:48:00.000000', '2022-03-05 11:48:00.000000', 1, 'individual', 'aaaaaaaaa', NULL),
(9, 'Cars', '', 'NA', 'AUC/Cars/11/49/43', '2022-03-05 11:49:00.000000', '2022-03-05 11:49:00.000000', 1, 'individual', 'aaaaaaa', NULL),
(10, 'Cars', '', 'aaaaa', 'AUC/Cars/11/50/20', '2022-03-05 11:50:00.000000', '2022-03-05 11:50:00.000000', 1, 'company', 'NA', NULL),
(11, 'Bikes', '', 's', 'AUC/Bikes/12/13/34', '2022-03-05 15:13:00.000000', '2022-03-05 15:13:00.000000', 1, 'company', 'NA', NULL),
(12, 'Bikes', '', 'c', 'AUC/Bikes/12/14/29', '2022-03-05 12:17:00.000000', '2022-03-05 14:14:00.000000', 1, 'company', 'NA', NULL),
(13, 'Laptop', '', 'c', 'AUC/Laptop/12/15/37', '2022-03-18 12:15:00.000000', '2022-03-15 12:15:00.000000', 1, 'company', 'NA', NULL),
(14, 'Bikes', '', 'NA', 'AUC/Bikes/12/17/4', '2022-03-29 12:17:00.000000', '2022-04-29 12:17:00.000000', 1, 'individual', 'c', NULL),
(15, 'Laptop', '', 's', 'AUC/Laptop/12/21/25', '2022-03-22 12:21:00.000000', '2022-03-11 12:21:00.000000', 1, 'company', 'NA', NULL),
(16, 'Bikes', '', 'd', 'AUC/Bikes/12/21/56', '2022-03-16 12:22:00.000000', '2022-03-11 12:22:00.000000', 1, 'company', 'NA', NULL),
(17, 'Laptop', '', 'NA', 'AUC/Laptop/12/22/39', '2022-03-07 12:22:00.000000', '2022-03-09 12:22:00.000000', 1, 'individual', 'd', NULL),
(18, 'Bikes', '', 'NA', 'AUC/Bikes/12/23/23', '2022-03-30 12:23:00.000000', '2022-03-25 12:23:00.000000', 1, 'individual', 'd', NULL),
(19, 'Bikes', '', 'NA', 'AUC/Bikes/12/24/12', '2022-03-18 12:24:00.000000', '2022-03-16 12:24:00.000000', 1, 'individual', 'd', NULL),
(20, 'Cars', '', 'NA', 'AUC/Cars/12/25/3', '2022-03-16 12:25:00.000000', '2022-03-03 12:25:00.000000', 1, 'individual', 'd', NULL);

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
  `buyercity` varchar(250) DEFAULT NULL,
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

INSERT INTO `buyerdetails` (`buysl_no`, `buyername`, `buyercontactnumber`, `buyerasdharnumber`, `buyeremail`, `buyerpass`, `bconpassword`, `buyeradharcard`, `buyeraddress`, `buyercity`, `buyerstate`, `buyercountry`, `buyerpincode`, `buyercontactperson`, `addressproof`, `buyeroption`, `botp`, `bverifiedemail`) VALUES
(16, 'aaaaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaaaa', 'charith_dev@gmail.com', 'YWFhYWFhYWFhYQ==', 'YWFhYWFhYWFhYWFhYWFhYWE=', 'a:1:{i:0;s:9:\"Cap33.PNG\";}', 'aaaaaaaa', NULL, 'Karnataka', 'India', 'aaaaaaaaaa', 'aaaaaaaaaaa', 'a:1:{i:0;s:9:\"Cap34.PNG\";}', 1, NULL, NULL),
(17, 'dddd', '3333333333', '333333333333', 'charith_dev@gmail.com', 'YWFhYWFhYWFhYQ==', 'MjMzMzMzMzMzMw==', 'a:1:{i:0;s:9:\"suma.jpeg\";}', 'cff', '', 'Karnataka', 'India', '333333', 'zzzzzzzz', 'a:1:{i:0;s:49:\"WhatsApp_Image_2022-02-26_at_12_40_59_PM_(1).jpeg\";}', 1, NULL, NULL);

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
(1, 'omeshwari', '8548857535', NULL, 'meghasangmesh2gmail.com', 'bWFyZ2luLXRvcDoxMHB4', 'bWFyZ2luLXRvcDoxMHB4', NULL, 'mkkkjnbhvgcfxdzsa', 'bangalore', 'Karnataka', 'India', '145211', 'megha', NULL, '1', 'Adfghjk', 'Govt Regd Company', 'BUSSINESS', 'megha', NULL, NULL),
(3, 'aaaaaa', 'aaaaaa', NULL, 'meghasa@gmail.com', 'YWFhYWFhYQ==', '', NULL, 'aaaaaaa', NULL, NULL, 'India', '560047', 'aaaaaaa', NULL, '0', '', 'Type of Seller', 'BUSSINESS', '', NULL, NULL),
(4, '', '', NULL, 'meghasangmesh2gmail.com', 'YWFhYWFhYQ==', '', NULL, '', '', 'Karnataka', 'India', '', '', NULL, '0', '', 'Type of Seller', 'BUSSINESS', '', NULL, NULL),
(5, 'megha ', '8548857535', '111111111111', 'meghasangmesh2@gmail.com', 'bWVnaGEg', 'bWVnaGEg', 'a:1:{i:0;s:13:\"1_-_Copy1.png\";}', 'megha  sangmesh', 'Bangalore', 'Karnataka', 'India', '560047', 'megha sangmesh', 'a:1:{i:0;s:13:\"2_-_Copy8.png\";}', '0', NULL, NULL, 'INDIVIDUAL', NULL, NULL, NULL),
(6, 'veeta', '8746754355', NULL, 'meghasangmesh2@gmail.com', 'bWVnaGE=', 'MTIzNDU2Nzg5', NULL, 'k', NULL, NULL, 'India', '571423', 'd', NULL, '0', '32AADCB2230M1Z2', 'Ltd , Pvt Ltd , LLP, Corp', 'BUSSINESS', 'k', NULL, NULL);

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
  MODIFY `sl_noadd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `sl_ano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `buyerdetails`
--
ALTER TABLE `buyerdetails`
  MODIFY `buysl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sellerdetails`
--
ALTER TABLE `sellerdetails`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
