-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 04:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunnysky`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Mustak Ahmed', 'mustak@gmail.com', 'f171720ef99ae744a369d52267c25acc');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `logo`, `created_at`) VALUES
(15, 'LG', 'LG , formerly Lucky-Goldstar from 1983 to 1995, is a South Korean multinational conglomerate corporation founded by Koo In-hwoi and managed by successive generations of his family. It is the fourth-largest chaebol in South Korea. Its headquarters are in the LG Twin Towers building in Yeouido-dong, Yeongdeungpo District, Seoul. ', 'upload/1629220939-Lg.jpg', '2021-08-17'),
(19, 'iPhone', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'upload/1629700738-iphone_logo.png', '2021-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `b_id`, `name`, `picture`, `created_at`) VALUES
(4, 13, 'Iphone 12', 'upload/1629259325-iphone_12c.jpg', '2021-08-18'),
(5, 13, 'Iphone Xs', 'upload/1629259472-iphone-xs-max-silver.jpeg', '2021-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewid` int(11) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `resolution` varchar(255) DEFAULT NULL,
  `technology` varchar(255) DEFAULT NULL,
  `screenToBody` varchar(255) DEFAULT NULL,
  `features` varchar(255) DEFAULT NULL,
  `systemChip` varchar(255) DEFAULT NULL,
  `processor` varchar(255) DEFAULT NULL,
  `gpu` varchar(255) DEFAULT NULL,
  `ram` varchar(255) DEFAULT NULL,
  `internalStorage` varchar(255) DEFAULT NULL,
  `deviceType` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `charging` varchar(255) DEFAULT NULL,
  `maxChargeSpeedWired` varchar(255) DEFAULT NULL,
  `rearDualCamera` varchar(255) DEFAULT NULL,
  `mainCamera` varchar(255) DEFAULT NULL,
  `cameraSpecifications` varchar(255) DEFAULT NULL,
  `secondCamera` varchar(255) DEFAULT NULL,
  `secondCameraSpecifications` varchar(255) DEFAULT NULL,
  `videoRecording` varchar(255) DEFAULT NULL,
  `cameraFeatures` varchar(255) DEFAULT NULL,
  `frontCamera` varchar(255) DEFAULT NULL,
  `videoCapture` varchar(255) DEFAULT NULL,
  `Dimensions` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `materials` varchar(255) DEFAULT NULL,
  `resistance` varchar(255) DEFAULT NULL,
  `biometrics` varchar(255) DEFAULT NULL,
  `keysRight` varchar(255) DEFAULT NULL,
  `colors` varchar(255) DEFAULT NULL,
  `fiveG` varchar(255) DEFAULT NULL,
  `lteFDD` varchar(255) DEFAULT NULL,
  `lteTDD` varchar(255) DEFAULT NULL,
  `umts` varchar(255) DEFAULT NULL,
  `dataSpeed` varchar(255) DEFAULT NULL,
  `dualSIM` varchar(255) DEFAULT NULL,
  `simType` varchar(255) DEFAULT NULL,
  `headphones` varchar(255) DEFAULT NULL,
  `speakers` varchar(255) DEFAULT NULL,
  `multimediaFeaturs` varchar(255) DEFAULT NULL,
  `screenMirroring` varchar(255) DEFAULT NULL,
  `additionalMicrophone` varchar(255) DEFAULT NULL,
  `bluetooth` varchar(255) DEFAULT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `usb` varchar(255) DEFAULT NULL,
  `connectivityFeatures` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `sensor` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `hearingAidCompatible` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `inTheBox` varchar(255) DEFAULT NULL,
  `officiallyAnnounced` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `videocomparison`
--

CREATE TABLE `videocomparison` (
  `videoComparisonId` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `videoreview`
--

CREATE TABLE `videoreview` (
  `videoReviewId` int(11) NOT NULL,
  `ReviewTitle` text DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewid`);

--
-- Indexes for table `videocomparison`
--
ALTER TABLE `videocomparison`
  ADD PRIMARY KEY (`videoComparisonId`);

--
-- Indexes for table `videoreview`
--
ALTER TABLE `videoreview`
  ADD PRIMARY KEY (`videoReviewId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videocomparison`
--
ALTER TABLE `videocomparison`
  MODIFY `videoComparisonId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videoreview`
--
ALTER TABLE `videoreview`
  MODIFY `videoReviewId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
