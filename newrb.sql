-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 04:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newrb`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthday`
--

CREATE TABLE `birthday` (
  `id` int(25) NOT NULL,
  `logid` int(25) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `massge` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` bigint(120) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `birthday`
--

INSERT INTO `birthday` (`id`, `logid`, `name`, `massge`, `mobile`, `dob`, `image`, `status`, `created`) VALUES
(1, 1, 'shubham knaungo', '<p><strong>happy britday shubham</strong></p>\r\n', 8989719137, '1994-10-19', 'assets/birthdayimages/1.jpg', 0, '2022-07-09 14:02:29'),
(2, 1, 'shubbahm', '<p>hbd</p>\r\n', 7412589630, '2022-07-09', 'assets/birthdayimages/2.jpg', 0, '2022-07-09 14:04:44'),
(3, 1, 'sd', '<p>sss</p>\r\n', 8989719137, '2022-07-12', 'assets/birthdayimages/3.png', 0, '2022-07-10 15:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `business_gallery`
--

CREATE TABLE `business_gallery` (
  `id` int(200) NOT NULL,
  `user_id` int(20) NOT NULL,
  `business_id` int(200) NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `business_gallery`
--

INSERT INTO `business_gallery` (`id`, `user_id`, `business_id`, `images`, `created`) VALUES
(1, 1, 1, 'assets/businessimg/gallery/1.png', '2022-06-19 13:12:44'),
(2, 1, 1, 'assets/businessimg/gallery/2.png', '2022-06-19 13:12:53'),
(3, 1, 1, 'assets/businessimg/gallery/3.png', '2022-06-19 13:13:01'),
(4, 1, 1, 'assets/businessimg/gallery/4.png', '2022-06-19 13:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `business_information`
--

CREATE TABLE `business_information` (
  `id` int(200) NOT NULL,
  `logid` int(200) NOT NULL,
  `businessname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ownername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `business_dsc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` bigint(220) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `careted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `business_information`
--

INSERT INTO `business_information` (`id`, `logid`, `businessname`, `ownername`, `business_dsc`, `mobile`, `image`, `status`, `careted`) VALUES
(1, 1, 'tent ouse', 'shubham', '<p>nice one</p>\r\n', 8989719133, 'assets/businessimg/1.png', 0, '2022-06-19 12:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `cid` bigint(255) NOT NULL,
  `c_emailid` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `userrole` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`cid`, `c_emailid`, `c_password`, `userrole`, `status`, `date`) VALUES
(1, 's@gmail.com', '7ac3f5ccbf043f5245c972b26f8cde87', 2, 0, '0000-00-00 00:00:00'),
(2, 'sh@gmail.com', '202cb962ac59075b964b07152d234b70', 2, 1, '2022-01-27 05:33:13'),
(3, 'shubham12@gmail.com', '2b24d495052a8ce66358eb576b8912c8', 3, 1, '2022-02-27 11:52:49'),
(4, 'q@gmail.com', '7ac3f5ccbf043f5245c972b26f8cde87', 2, 1, '2022-02-27 15:01:37'),
(5, 'shub@gmail.com', '7ac3f5ccbf043f5245c972b26f8cde87', 4, 1, '2022-03-06 15:01:37'),
(6, 'jnp@gmail.com', '202cb962ac59075b964b07152d234b70', 5, 1, '2022-03-12 07:36:58'),
(7, 'so@gmail.com', '202cb962ac59075b964b07152d234b70', 7, 1, '2022-04-10 08:29:45'),
(8, 'manish@gmail.com', '7ac3f5ccbf043f5245c972b26f8cde87', 2, 1, '2022-05-22 07:51:25'),
(9, 'aditya@gmail.com', '7ac3f5ccbf043f5245c972b26f8cde87', 3, 1, '2022-05-23 06:49:16'),
(10, 'sidhhart@gmail.com', '7ac3f5ccbf043f5245c972b26f8cde87', 4, 1, '2022-05-23 06:50:14'),
(11, 'rnrathore@gmail.com', '7ac3f5ccbf043f5245c972b26f8cde87', 7, 1, '2022-05-23 06:50:31'),
(13, 'sandiprathore@gmail.com', '7ac3f5ccbf043f5245c972b26f8cde87', 5, 1, '2022-05-23 06:50:50'),
(14, 'lokendrarathore@gmail.com', '7ac3f5ccbf043f5245c972b26f8cde87', 6, 1, '2022-05-23 06:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `condolence`
--

CREATE TABLE `condolence` (
  `id` int(25) NOT NULL,
  `logid` int(25) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `massge` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `dod` date NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `condolence`
--

INSERT INTO `condolence` (`id`, `logid`, `name`, `massge`, `mobile`, `dod`, `image`, `status`, `created`) VALUES
(1, 1, 'gt', '<p>sad</p>\r\n', 7412589630, '2022-07-19', 'assets/condolenceimages/1.png', 0, '2022-07-09 15:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `desiredpartner`
--

CREATE TABLE `desiredpartner` (
  `id` bigint(200) NOT NULL,
  `user_id` bigint(200) DEFAULT NULL,
  `rid` bigint(200) DEFAULT NULL,
  `fromage` bigint(200) DEFAULT NULL,
  `toage` bigint(200) DEFAULT NULL,
  `fromheight` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `toheight` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desiredmarital` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desiredtongue` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`desiredtongue`)),
  `desiredmangal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desiredshani` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desirededucation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desiredoccupation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desiredincome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desireddiet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desireddrink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desiredsmoke` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desiredcomplexion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desiredbody` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desiredchallenge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `desiredpartner`
--

INSERT INTO `desiredpartner` (`id`, `user_id`, `rid`, `fromage`, `toage`, `fromheight`, `toheight`, `desiredmarital`, `desiredtongue`, `desiredmangal`, `desiredshani`, `desirededucation`, `desiredoccupation`, `desiredincome`, `desireddiet`, `desireddrink`, `desiredsmoke`, `desiredcomplexion`, `desiredbody`, `desiredchallenge`, `status`, `date`) VALUES
(1, 1, 3, 22, 25, '4 foot 1 inch', '5 foot 1 inch', 'Married', '[\"Bengali\",\"Marathi\"]', '[\"Yes\"]', '[\"Yes\"]', '[\"Doctorate\"]', '[\"Business\"]', '5lac-6lac', '[\"Non-veg\"]', '[\"No\"]', '[\"No\"]', '[\"Whitish-Brown\",\"Whitish-Medium\"]', '[\"Average\"]', '[\"Physically\"]', 1, '2021-12-23 16:38:51'),
(2, 1, 5, 20, 24, '4 foot 1 inch', '4 foot 1 inch', 'Single', '[\"Hindi\",\"English\"]', '[\"Yes\"]', '[\"Yes\"]', 'null', '[\"Business\",\"Job-Government\",\"Job-Private\"]', '5lac-6lac', '[\"Veg\"]', '[\"No\"]', '[\"No\"]', '[\"Fair\"]', '[\"Slim\",\"Average\"]', '[\"No\"]', 1, '2022-04-24 06:35:49'),
(3, 4, 7, 20, 28, '5 foot 2 inch', '5 foot 5 inch', 'Single', '[\"Marathi\",\"Maithli\",\"English\"]', '[\"No\"]', '[\"No\"]', '[\"does-not-matter\",\"under_graduate\",\"graduate\",\"post_graduate\",\"Medicine\",\"Doctorate\",\"Professional-Degree\"]', '[\"Does-Not-Matter\",\"Business\",\"Job-Private\"]', 'No Income', '[\"Veg\",\"Eggtarian\"]', '[\"No\"]', '[\"No\"]', '[\"Fair\",\"Whitish-Medium\",\"Whitish\"]', '[\"Slim\",\"Average\"]', '[\"No\"]', 1, '2022-05-15 05:36:56'),
(4, 5, 8, 21, 29, '5 foot 2 inch', '5 foot 6 inch', 'Single', '[\"Hindi\",\"Marathi\",\"Gujrati\",\"English\"]', '[\"Yes\"]', '[\"Yes\"]', '[\"Medicine\"]', '[\"Does-Not-Matter\"]', 'No Income', '[\"Veg\"]', '[\"No\"]', '[\"No\"]', '[\"Very-Fair\",\"Fair\",\"Whitish-Brown\",\"Whitish-Medium\",\"Whitish\"]', '[\"Slim\",\"Average\"]', '[\"No\"]', 1, '2022-05-15 13:16:38'),
(5, 5, 9, 22, 30, '5 foot 3 inch', '5 foot 8 inch', 'Single', '[\"Hindi\",\"Marathi\",\"Gujrati\",\"English\"]', '[\"Yes\"]', '[\"Yes\"]', '[\"graduate\",\"post_graduate\",\"Medicine\"]', '[\"Business\",\"Job-Government\",\"Job-Private\"]', '10lac-12lac', '[\"Veg\",\"Eggtarian\"]', '[\"No\"]', '[\"No\"]', '[\"Very-Fair\",\"Fair\",\"Whitish-Medium\",\"Whitish\"]', '[\"Slim\",\"Average\"]', '[\"No\"]', 1, '2022-05-15 13:52:19'),
(6, 6, 10, 25, 30, '5 foot 3 inch', '5 foot 7 inch', 'Single', '[\"Hindi\",\"Marathi\",\"Gujrati\",\"Rajasthani\",\"English\"]', '[\"Yes\"]', '[\"Yes\"]', '[\"graduate\",\"post_graduate\",\"Medicine\",\"Professional-Degree\"]', '[\"Business\",\"Job-Government\",\"Job-Private\"]', '10lac-12lac', '[\"Veg\",\"Eggtarian\"]', '[\"No\"]', '[\"No\"]', '[\"Very-Fair\",\"Fair\",\"Whitish\"]', '[\"Slim\",\"Average\"]', '[\"No\"]', 1, '2022-05-21 13:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `educationinformation`
--

CREATE TABLE `educationinformation` (
  `id` bigint(100) NOT NULL,
  `user_id` bigint(100) DEFAULT NULL,
  `rid` bigint(100) DEFAULT NULL,
  `education` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `otheredu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `educationallevel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userbiuseens` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `biuneesimage` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupationdescription` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `income` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `educationinformation`
--

INSERT INTO `educationinformation` (`id`, `user_id`, `rid`, `education`, `otheredu`, `educationallevel`, `occupation`, `userbiuseens`, `biuneesimage`, `occupationdescription`, `income`, `status`, `date`) VALUES
(1, 1, 1, 'High-School', 'none', '[\"Bachelor Of Veterinary Science\"]', '[\"Business\",\"Defence\"]', 'Yes', '', 'shuh\r\n      \r\n                 \r\n      \r\n        ', '0-1lac', 1, '2021-12-19 13:04:50'),
(2, 1, 3, 'Trade-School', 'now   ', '[\"BDS\",\"BFA\",\"BGL\"]', '[\"Government\"]', 'Yes', 'assets/famliyimages/bussinesimage/16428525481590234451s_Fraazo_(1).jpeg', 'good one      \r\n      \r\n                 \r\n      \r\n                 \r\n      \r\n        ', '8lac-9lac', 1, '2022-01-22 11:50:32'),
(3, 1, 5, 'Trade-School', 'shubham', '[\"BBA\",\"BDS\"]', '[\"Government\"]', 'No', NULL, 'bv              \r\n      \r\n        ', '8lac-9lac', 1, '2022-01-22 11:59:37'),
(4, 1, 4, 'Trade-School', 'we', '[\"Bachelors in Technology\"]', '[\"Government\"]', 'No', 'assets/usercover/rathore.png', 'ddd          \r\n      \r\n        ', '9lac-10lac', 1, '2022-01-22 12:07:52'),
(5, 1, 2, 'High-School', 'sd', '[\"Bachelors in Computers\"]', '[\"Government\"]', 'Yes', 'assets/famliyimages/bussinesimage/1642853372839528.png', 'new         \r\n      \r\n                 \r\n      \r\n        ', '7lac-8lac', 1, '2022-01-22 12:09:32'),
(6, 4, 7, 'Graduate', 'None', '[\"Bachelors in Computers\",\"BSc Computer Science\"]', '[\"Private\"]', 'No', NULL, 'I am team leader in TCS pune. Handling a team of 20 people on project work.         \r\n      \r\n        ', '10lac-12lac', 1, '2022-05-15 05:10:06'),
(7, 5, 8, 'Post-Graduate', 'MBA in Finance   ', '[\"Bachelors in Technology\",\"Diploma\"]', '[\"Others\"]', 'Yes', 'assets/usercover/rathore.png', 'Having Business of Farm euimpment Manufacturer\r\n                 \r\n      \r\n        ', 'morethan_15lac', 1, '2022-05-15 12:57:46'),
(8, 5, 9, 'Graduate', 'None', '[\"Bachelors in Computers\"]', '[\"Private\"]', 'No', NULL, 'I am Software Engineer & team leader in Capgemini company in pune. Working on US based project.            \r\n      \r\n          ', '12lac-15lac', 1, '2022-05-15 13:47:48'),
(9, 6, 10, 'Graduate', 'Phd. Running', '[\"BSc Computer Science\"]', '[\"Private\"]', 'No', 'assets/usercover/rathore.png', 'Senior software consultant in infosys company in indore.        \r\n      \r\n        ', '5lac-6lac', 1, '2022-05-21 13:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(50) NOT NULL,
  `logid` int(50) NOT NULL,
  `eventname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `parsonanme` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `eventloction` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `eventdate` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `mobile` bigint(200) NOT NULL,
  `emailid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `logid`, `eventname`, `parsonanme`, `description`, `eventloction`, `eventdate`, `starttime`, `endtime`, `mobile`, `emailid`, `eimage`, `status`, `created`) VALUES
(1, 1, 'ram  navi ', 'shubham', '<p>big rally in khandwa</p>\r\n', 'khandwa', '2022-06-28', '19:51:00', '23:51:00', 8989719137, 'shubham@gmail.com', 'assets/eventimages/1.PNG', 0, '2022-06-25 14:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `hospice`
--

CREATE TABLE `hospice` (
  `id` bigint(200) NOT NULL,
  `hid` bigint(250) NOT NULL,
  `hopicuniqid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hospicname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registrationnmber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registratioyear` date NOT NULL,
  `hospice_desc` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `facilities` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `room` bigint(255) NOT NULL,
  `pricefromhospic` bigint(200) NOT NULL,
  `pricetohospic` bigint(200) NOT NULL,
  `hospicelectricity` bigint(200) NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` bigint(150) NOT NULL,
  `address` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `landmark` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `landline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hemail` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hospice`
--

INSERT INTO `hospice` (`id`, `hid`, `hopicuniqid`, `hospicname`, `registrationnmber`, `registratioyear`, `hospice_desc`, `facilities`, `note`, `room`, `pricefromhospic`, `pricetohospic`, `hospicelectricity`, `country`, `state`, `district`, `city`, `pincode`, `address`, `landmark`, `mobile`, `landline`, `hemail`, `facebook`, `instagram`, `image`, `status`, `date`) VALUES
(1, 2, 'rshb-6211074409078', 'Kshtirya Rathore Samaj', 'rebs12', '2022-02-16', '<p>1.5 km from the new bus stand and near Nagar Ghat, Vishwakarma Panchal Dharamshala offers two and three bedded rooms as well as dormitory accommodation. It is affordable, and suited for families and groups</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It is believed that prayers offered here at Omkareshwar Jyotirling, also give you the blessings of Kedarnath and Panch Kedar. Besides the Jyotirling temple, there are many other temples and places of religious importance to visit in Omkareshwar. Most of them are quite near Vishwakarma Panchal Dharamshala.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<ol>\r\n	<li>Valet provided by venue</li>\r\n	<li>Parking space available for 300 vehicles</li>\r\n	<li>If venue is taken without F&amp;B, rental is applicable.</li>\r\n	<li>Food provided by the venue</li>\r\n	<li>Outside food/caterer allowed at the venue</li>\r\n	<li>Non-Veg allowed at the venue</li>\r\n	<li>Outside decorators allowed</li>\r\n	<li>Decor provided by the venue</li>\r\n	<li>Decorators allowed with royalty</li>\r\n</ol>\r\n', '<p>1.&nbsp; It is mandatory for all the guests to present valid photo identification at the time of check-in. According to government regulations, a valid Photo ID has to be carried by every person above the age of 18.</p>\r\n\r\n<p>2.&nbsp; Please note that this might be the Dharmshala / Bhavan / Ashram / Sanatorium. Yatris has to accept &amp; comply by all their rules / terms &amp; conditions to ensure that all can have a stay truly to a very sanctimonious spiritual experience for all.</p>\r\n\r\n<p>3.&nbsp; Dharmshala / Bhavan / Ashram / Sanatorium management has also right of refusal of entry if booking is in violation of their rules. No refund would be applicable in case they denies check-in under such circumstances.</p>\r\n\r\n<p>4.&nbsp; The standard check-in time and check-out time is mentioned on the page. Please make your reservation accordingly as early check-in or late check-out might not be possible.</p>\r\n\r\n<p>5.&nbsp; Please note that almost all the rooms/hall have a certain capacity for the guests/room, it is mentioned on the page. This limit is strictly followed.</p>\r\n\r\n<p>6.&nbsp; There are Dharmshala / Bhavan / Ashram / Sanatorium which can be booked only for the Yatris following principle of certain religion. It is clearly mentioned for each room type.</p>\r\n\r\n<p>7.&nbsp; A booking confirmation is an acknowledgement confirming that we have received your request for accommodation. However, it is subject to Dharmshala management&rsquo;s modification/cancellation in case of any unfavorable situation, and the yatradham.org management cannot be held responsible or liable for any such changes.</p>\r\n\r\n<p>8.&nbsp; Any dispute arising out of this service shall be subject to Bhavnagar (Gujarat) jurisdiction.</p>\r\n\r\n<p>9.&nbsp; We may change these terms at any time by posting notifications online.</p>\r\n\r\n<p>10.&nbsp; Please note that in case of any incident / event our liability is limited to the convenience fee only. Our services are provided to the best of our ability<', 23, 23650, 23650, 22, 'India', ' Madhya Pradesh', 'Khandwa', 'khandwa', 450000, '23 panjab', '05 panjab', '[\"7896541228\",\"896532147\"]', '[\"7896541230\"]', '[\"shubham@gmal.com\"]', 'http://localhost/Rathores/Hospiceform', 'http://localhost/Rathores/Hospiceform', 'assets/hospic/hospicimage/16482031071631593414D7.jpg', 0, '2022-02-19 15:05:40'),
(2, 2, 'sd-621a26639b8b9', 'sds', 'sd@147', '2022-02-13', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy&nbsp;</p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley&nbsp;</p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 85, 2563, 24560, 10, 'India', 'Andra Pradesh', 'Anantapur', 'khandwa', 450000, '105 panjab new', 'shubham 150', '[\"9874563210\",\"7896541230\"]', '[\"8523697408\",\"7485963210\"]', '[\"sh@gmail.com\",\"s@gmail.com\"]', 'https://getbootstrap.com/docs/4.0/components/modal/', 'https://getbootstrap.com/docs/4.0/components/modal/', 'assets/hospic/hospicimage/1645880931Logo_(1).png', 0, '2022-02-26 13:08:52'),
(3, 2, 'demo-621b1dfe021ac', 'demo', 'Red@14785', '2022-02-15', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>\r\n', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>\r\n', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>\r\n', 84, 2365890, 2365890, 23, 'India', ' Madhya Pradesh', 'Gwalior', 'khandwa', 450000, '104 shrty ', '104 shudem', '[\"756321489\",\"9876543210\"]', '[\"2365897409\",\"7412589630\"]', '[\"sh@gmail.com\",\"sd@gmail.com\"]', 'https://www.lipsum.com/', 'https://www.lipsum.com/', 'assets/hospic/hospicimage/1645944318logo.jpg', 0, '2022-02-27 06:45:18'),
(4, 2, 'sdre-621b20f9c04a1', 'sdre', 'sdrt#123', '2022-02-13', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc</p>\r\n', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc</p>\r\n', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc</p>\r\n', 1477, 23, 23, 10, 'India', 'Arunachal Pradesh', 'Changlang', 'khandwa', 450000, '105 panj', 'panjb', '[\"9874563210\",\"7896541230\"]', '[\"85236974110\",\"1478523960\"]', '[\"sh@gmail.com\",\"sf@gmail.com\"]', 'https://www.lipsum.com/', 'https://www.lipsum.com/', 'assets/hospic/hospicimage/1645945081logo.png', 0, '2022-02-27 06:58:01'),
(5, 8, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Kshtriya Rathore Samaj Indore', '16400', '1978-02-22', '<p>1.5 km from the new bus stand and near Nagar Ghat, Vishwakarma Panchal Dharamshala offers two and three bedded rooms as well as dormitory accommodation. It is affordable, and suited for families and groups.</p>\r\n\r\n<p>It is believed that&nbsp; prayers offered here at Omkareshwar Jyotirling, also give you the blessings of Kedarnath and Panch Kedar. Besides the Jyotirling temple, there are many other temples and places of religious importance to visit in Omkareshwar. Most of them are quite near Vishwakarma Panchal Dharamshala.&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Indore Railway Station - 79 km</li>\r\n	<li>Indore Airport - 84 km</li>\r\n	<li>Ujjain Airport - 134 km</li>\r\n	<li>Ujjain Railway Station - 139 km</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<ul>\r\n	<li>Valet provided by venue</li>\r\n	<li>Parking space available for 300 vehicles</li>\r\n	<li>If venue is taken without F&amp;B, rental is applicable.</li>\r\n	<li>Food provided by the venue</li>\r\n	<li>Outside food/caterer allowed at the venue</li>\r\n	<li>Non-Veg allowed at the venue</li>\r\n	<li>Outside decorators allowed</li>\r\n	<li>Decor provided by the venue</li>\r\n	<li>Decorators allowed with royalty</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p>1.&nbsp; It is mandatory for all the guests to present valid photo identification at the time of check-in. According to government regulations, a valid Photo ID has to be carried by every person above the age of 18.</p>\r\n\r\n<p>2.&nbsp; Please note that this might be the Dharmshala / Bhavan / Ashram / Sanatorium. Yatris has to accept &amp; comply by all their rules / terms &amp; conditions to ensure that all can have a stay truly to a very sanctimonious spiritual experience for all.</p>\r\n\r\n<p>3.&nbsp; Dharmshala / Bhavan / Ashram / Sanatorium management has also right of refusal of entry if booking is in violation of their rules. No refund would be applicable in case they denies check-in under such circumstances.</p>\r\n\r\n<p>4.&nbsp; The standard check-in time and check-out time is mentioned on the page. Please make your reservation accordingly as early check-in or late check-out might not be possible.</p>\r\n\r\n<p>5.&nbsp; Please note that almost all the rooms/hall have a certain capacity for the guests/room, it is mentioned on the page. This limit is strictly followed.</p>\r\n\r\n<p>6.&nbsp; There are Dharmshala / Bhavan / Ashram / Sanatorium which can be booked only for the Yatris following principle of certain religion. It is clearly mentioned for each room type.</p>\r\n\r\n<p>7.&nbsp; A booking confirmation is an acknowledgement confirming that we have received your request for accommodation. However, it is subject to Dharmshala management&rsquo;s modification/cancellation in case of any unfavorable situation, and the yatradham.org management cannot be held responsible or liable for any such changes.</p>\r\n\r\n<p>8.&nbsp; Any dispute arising out of this service shall be subject to Bhavnagar (Gujarat) jurisdiction.</p>\r\n\r\n<p>9.&nbsp; We may change these terms at any time by posting notifications online.</p>\r\n\r\n<p>10.&nbsp; Please note that in case of any incident / event our liability is limited to the convenience fee only. Our services are provided to the bes', 8, 8000, 24000, 12, 'India', ' Madhya Pradesh', 'Indore', 'Indore', 452006, '46 Biyabani', 'Near Gangwal Bus Stand', '[\"9827298272\",\"9827398273\",\"\"]', '[\"07312486180\",\"07312486181\"]', '[\"kshtriyarathoresamajindore@gmail.com\"]', 'kshtriyarathoresamajindore@facbook.com', 'kshtriyarathoresamajindore@instagram.com', 'assets/hospic/hospicimage/1653207877gardern_6.jpg', 0, '2022-05-22 08:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `hospicegarllay`
--

CREATE TABLE `hospicegarllay` (
  `id` bigint(200) NOT NULL,
  `hid` bigint(200) NOT NULL,
  `hgid` bigint(200) NOT NULL,
  `hguniqid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rgnumber` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  `status` bigint(20) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hospicegarllay`
--

INSERT INTO `hospicegarllay` (`id`, `hid`, `hgid`, `hguniqid`, `rgnumber`, `images`, `status`, `date`) VALUES
(1, 1, 2, 'rshb-6211074409078', 'rebs12', 'assets/hospic/hospicgarllay/1645536347logo_(6).png', 0, '2022-02-20 15:24:55'),
(2, 1, 2, 'rshb-6211074409078', 'rebs12', 'assets/hospic/hospicgarllay/1645371057ref4.png', 0, '2022-02-20 15:30:57'),
(3, 2, 2, 'sd-621a26639b8b9', 'sd@147', 'assets/hospic/hospicgarllay/1645943786Australia-Weather.jpg', 0, '2022-02-27 06:36:26'),
(4, 5, 8, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', '16400', 'assets/hospic/hospicgarllay/1653208417gardern_1.jpg', 0, '2022-05-22 08:33:37'),
(5, 5, 8, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', '16400', 'assets/hospic/hospicgarllay/1653208433gardern_3.jpg', 0, '2022-05-22 08:33:53'),
(6, 5, 8, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', '16400', 'assets/hospic/hospicgarllay/1653208449gardern_4.jpg', 0, '2022-05-22 08:34:09'),
(7, 5, 8, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', '16400', 'assets/hospic/hospicgarllay/1653208469gardern_8.jpg', 0, '2022-05-22 08:34:29'),
(8, 5, 8, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', '16400', 'assets/hospic/hospicgarllay/1653208485gardern_4.jpg', 0, '2022-05-22 08:34:45'),
(9, 5, 8, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', '16400', 'assets/hospic/hospicgarllay/1653208510gardern_5.jpg', 0, '2022-05-22 08:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `hospicemeber`
--

CREATE TABLE `hospicemeber` (
  `id` int(20) NOT NULL,
  `hmid` bigint(200) NOT NULL,
  `hospicid` bigint(200) NOT NULL,
  `hospicuniq` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `carepost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `carename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caregender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caremobile` bigint(200) NOT NULL,
  `caremail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `carefb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `careinsta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `carewhatsapp` bigint(200) NOT NULL,
  `careimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rgnumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` bigint(20) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hospicemeber`
--

INSERT INTO `hospicemeber` (`id`, `hmid`, `hospicid`, `hospicuniq`, `carepost`, `carename`, `caregender`, `caremobile`, `caremail`, `carefb`, `careinsta`, `carewhatsapp`, `careimage`, `rgnumber`, `status`, `date`) VALUES
(1, 2, 1, 'rshb-6211074409078', 'Guardian', 'Mr.shubham', 'female', 7896541230, 'sh@gmail.com', 'http://localhost/Rathores/addmeber/1', 'http://localhost/Rathores/addmeber/1', 7896541230, 'assets/hospic/communitymember/1645355298logo_(1).png', 'rebs12', 0, '2022-02-20 11:08:20'),
(2, 2, 1, 'rshb-6211074409078', 'Vice-Chairmen', 'shubham', 'youth', 7896541230, 'shubham@gmli.com', 'http://localhost/Rathores/addmeber/1', 'http://localhost/Rathores/addmeber/1', 7896541230, 'assets/hospic/communitymember/164535549021844.png', 'rebs12', 0, '2022-02-20 11:11:30'),
(3, 2, 1, 'sd-621a26639b8b9', 'Adviser', 'shubham kanungo', 'male', 7412589630, 'sk@gmail.com', 'https://www.lipsum.com/', 'https://www.lipsum.com/', 7896541230, 'assets/hospic/communitymember/1645946971logo_(6).png', 'sd@147', 0, '2022-02-27 07:29:31'),
(4, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Guardian', 'Lalbahadur Singh Rathore', 'male', 9827098271, 'lalbahadursinghrathore@gmail.com', 'lalbadursinghrathore@facebook.com', 'lalbadursinghrathore@instagram.com', 9827098271, 'assets/hospic/communitymember/1653208713B9.jpeg', '16400', 0, '2022-05-22 08:38:33'),
(5, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Chairmen', 'Mr. Kantilal Rathore', 'male', 9827098272, 'rathoresamajindore@gmail.com', 'kantilalrathore@facebook.com', 'kantilalrathore@instagram.com', 9827098272, 'assets/hospic/communitymember/1653208802B10.jpg', '16400', 0, '2022-05-22 08:40:02'),
(6, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Executive-chairmen', 'Mr. Surendra Rathore', 'male', 9827098273, 'surendrarathore@gmail.com', 'surendrarathore@facebook.com', 'surendrarathore@instagram.com', 9827098272, 'assets/hospic/communitymember/1653208886B11.jpg', '16400', 0, '2022-05-22 08:41:26'),
(7, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Vice-Chairmen', 'Mr. Anand Kumar Rathore', 'male', 9827098274, 'anandrathore@gmail.com', 'anandrathore@facebook.com', 'anandrathore@instagram.com', 9827098274, 'assets/hospic/communitymember/1653208973B12.jpg', '16400', 0, '2022-05-22 08:42:53'),
(8, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'General-Secretary', 'Mr. Vipin Rathore', 'male', 9827098275, 'vipinrathore@gmail.com', 'vipinrathore@facebook.com', 'vipinrathore@instagram.com', 9827098275, 'assets/hospic/communitymember/1653209068B13.jpg', '16400', 0, '2022-05-22 08:44:28'),
(9, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Secretary', 'Mr. Pankaj Rathore', 'male', 9827098276, 'pankajrathore@gmail.com', 'pankajrathore@facebook.com', 'pankajrathore@instagram.com', 9827098276, 'assets/hospic/communitymember/1653209198B14.jpg', '16400', 0, '2022-05-22 08:46:38'),
(10, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Joint-Secretary', 'Mr. Manish Singh Rathore', 'male', 9827098277, 'manishsinghrathore@gmail.com', 'manishsinghrathore@facebook.com', 'manishsinghrathore@instagram.com', 9827098277, 'assets/hospic/communitymember/1653209288B28.jpg', '16400', 0, '2022-05-22 08:48:08'),
(11, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Treasury-Chairmen', 'Mr. Kevat Rathore', 'male', 9827098278, 'kevatrathore@gmail.com', 'kevatrathore@facebook.com', 'kevetsinghrathore@instagram.com', 9827098278, 'assets/hospic/communitymember/1653209389B16.jpg', '16400', 0, '2022-05-22 08:49:49'),
(12, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Co-tresury-chairmen', 'Mr. Kavish Rathore', 'male', 9827098279, 'kavishrathore@gmail.com', 'kavishrathore@facebook.com', 'kavishrathore@instagram.com', 9827098279, 'assets/hospic/communitymember/1653209458IMG_20180805_104921563.jpg', '16400', 0, '2022-05-22 08:50:58'),
(13, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Chairmen', 'Mrs. Priyanka Rathore', 'female', 98270982781, 'priyankarathore@gmail.com', 'priyankarathore@facebook.com', 'priyankarathore@instagram.com', 98270982782, 'assets/hospic/communitymember/1653239724G1.jpg', '16400', 0, '2022-05-22 17:15:24'),
(14, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Vice-Chairmen', 'Mrs. Sunita Rathore', 'female', 98270982782, 'sunitarathore@gmail.com', 'sunitarathore@facebook.com', 'sunitarathore@instagram.com', 98270982782, 'assets/hospic/communitymember/1653239815G2.jpg', '16400', 0, '2022-05-22 17:16:55'),
(15, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Secretary', 'Mrs. Aishwarya Rathore', 'female', 98270982783, 'aishwaryarathore@gmail.com', 'aishwaryarathore@facebook.com', 'aishwaryarathore@instagram.com', 98270982783, 'assets/hospic/communitymember/1653239900G3.jpg', '16400', 0, '2022-05-22 17:18:20'),
(16, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Adviser', 'Mrs. Anita Rathore', 'female', 98270982784, 'anitarathore@gmail.com', 'anitarathore@facebook.com', 'anitarathore@instagram.com', 98270982784, 'assets/hospic/communitymember/1653239979G4.jpg', '16400', 0, '2022-05-22 17:19:39'),
(17, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Publicity-Minister', 'Mrs. Priya Rathore', 'female', 98270982785, 'priyarathore@gmail.com', 'priyarathore@facebook.com', 'priyarathore@instagram.com', 98270982785, 'assets/hospic/communitymember/1653240067G10.jpg', '16400', 0, '2022-05-22 17:21:07'),
(18, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Adviser', 'Mrs. Bhoomi Rathoe', 'female', 98270982786, 'bhoomirathore@gmail.com', 'bhoomirathore@facebook.com', 'bhoomirathore@instagram.com', 98270982786, 'assets/hospic/communitymember/1653240146G12.jpg', '16400', 0, '2022-05-22 17:22:26'),
(19, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Member', 'Mrs. Neha Rathore', 'female', 98270982787, 'neharathore@gmail.com', 'neharathore@facebook.com', 'neharathore@inastagram.com', 98270982787, 'assets/hospic/communitymember/1653240230G15.jpg', '16400', 0, '2022-05-22 17:23:50'),
(20, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Member', 'Mrs. Barkha Rathore', 'female', 98270982788, 'barkharathore@gmail.com', 'barkharathore@facebook.com', 'barkharathore@instagram.com', 98270982788, 'assets/hospic/communitymember/1653240299G18.jpg', '16400', 0, '2022-05-22 17:24:59'),
(21, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Member', 'Miss Sukirti Rathore', 'female', 98270982789, 'sukirtirathore@gmail.com', 'sukirtirathore@facebook.com', 'sukiritiathore@instagram.com', 98270982789, 'assets/hospic/communitymember/1653240404G41.jpg', '16400', 0, '2022-05-22 17:26:44'),
(22, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Member', 'Miss Archana Rathore', 'female', 98270982790, 'archanarathore@gmail.com', 'archanarathore@facebook.com', 'archanarathore@instagram.com', 98270982790, 'assets/hospic/communitymember/1653240510G17.jpeg', '16400', 0, '2022-05-22 17:28:30'),
(23, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Guardian', 'Mr. Manish Rathore', 'youth', 98270982791, 'manishrathore@gmail.com', 'manishrathore@facebook.com', 'manishrathore@inastagram,com', 98270982791, 'assets/hospic/communitymember/1653240799Men_1.jpg', '16400', 0, '2022-05-22 17:33:19'),
(24, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'General-Secretary', 'Mr. Nitin Kumar Rathore', 'youth', 98270982792, 'nitinrathore@gmail.com', 'nitinrathore@facebook.com', 'nitinrathore@inastagram.com', 98270982792, 'assets/hospic/communitymember/1653240884B2.jpg', '16400', 0, '2022-05-22 17:34:44'),
(25, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Treasury-Chairmen', 'Mr. Ankit Rathore', 'youth', 98270982793, 'ankitrathore@gmail.com', 'ankitrathore@facebook.com', 'ankitrathore@instagram.com', 98270982793, 'assets/hospic/communitymember/1653240972B6.jpg', '16400', 0, '2022-05-22 17:36:12'),
(26, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Education-Minister', 'Mr. Rupesh Rathore', 'youth', 98270982794, 'rupeshrathore@gmail.com', 'rupeshrathore@facebook.com', 'rupeshrathore@instagram.com', 98270982794, 'assets/hospic/communitymember/1653241093B9.jpeg', '16400', 0, '2022-05-22 17:38:13'),
(27, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Publicity-Minister', 'Mr. Keshav Rathore', 'youth', 98270982795, 'keshavrathore@gmail.com', 'keshavrathore@facebook.com', 'keshavhrathore@instagram.com', 98270982795, 'assets/hospic/communitymember/1653241161B10.jpg', '16400', 0, '2022-05-22 17:39:21'),
(28, 8, 5, 'Kshtriya-Rathore-Samaj-Indore-6289f3459bf76', 'Adviser', 'Mr. Kalyan Singh Rathore', 'youth', 98270982796, 'kalyansinghrathore@gmail.com', 'kalyansinghrathore@facebook.com', 'kalyansinghrathore@instagram.com', 98270982796, 'assets/hospic/communitymember/1653241252B14.jpg', '16400', 0, '2022-05-22 17:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `mabers`
--

CREATE TABLE `mabers` (
  `id` bigint(200) NOT NULL,
  `officid` bigint(200) NOT NULL,
  `chid` bigint(200) NOT NULL,
  `state` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `mberpost` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `mbername` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mbergender` text COLLATE utf8_unicode_ci NOT NULL,
  `mbrmobile` bigint(200) NOT NULL,
  `mberfb` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mbrinsta` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mbremail` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mbrwhatsapp` bigint(200) NOT NULL,
  `maberslug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mberimage` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `satats` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mabers`
--

INSERT INTO `mabers` (`id`, `officid`, `chid`, `state`, `mberpost`, `mbername`, `mbergender`, `mbrmobile`, `mberfb`, `mbrinsta`, `mbremail`, `mbrwhatsapp`, `maberslug`, `mberimage`, `satats`, `date`) VALUES
(1, 1, 3, ' Madhya Pradesh', 'Chairmen', 'shub', 'male', 7896541230, 'https://funkylife.in/whatsapp-status/', 'https://funkylife.in/whatsapp-status/', 'sh@gmail.com', 7896541230, 'shub-621ba59f30cf1', 'assets/community/mabers/1645979039Logo_(1).png', 0, '2022-02-27 16:23:59'),
(2, 1, 3, ' Madhya Pradesh', 'Joint-Secretary', 'shubham', 'male', 89654123040, 'http://localhost/Rathores/statemambers/1', 'http://localhost/Rathores/statemambers/1', 'sh@gmail.com', 7896541230, 'ser-621e02cc89bff', 'assets/community/mabers/1646553897Logo_(10).png', 0, '2022-03-01 11:26:04'),
(3, 2, 3, ' Madhya Pradesh', 'Joint-Secretary', 'new', 'male', 8965412307, 'http://localhost/Rathores/statemambers/1', 'http://localhost/Rathores/statemambers/1', 'sh@gmail.com', 897412589630, 'ser-621e02cc89bff', 'assets/community/mabers/1646554340logo_(4).jpg', 0, '2022-03-01 11:26:04'),
(4, 1, 3, ' Madhya Pradesh', 'Joint-Secretary', 'ser', 'male', 8965412307, 'http://localhost/Rathores/statemambers/1', 'http://localhost/Rathores/statemambers/1', 'sh@gmail.com', 897412589630, 'ser-621e02cc89bff', 'assets/community/mabers/1646133964150-26.jpg', 0, '2022-03-01 11:26:04'),
(5, 2, 3, ' Madhya Pradesh', 'Chairmen', 'Mr.parveen', 'male', 7412589630, 'https://www.freeformatter.com/javascript-beautifier.html#ad-output', 'https://www.freeformatter.com/javascript-beautifier.html#ad-output', 'sd@gmail.com', 8965231470, 'parveen-62246e1a5904c', 'assets/community/mabers/1646554650logo_(9).png', 0, '2022-03-06 08:17:30'),
(6, 1, 3, ' Madhya Pradesh', 'Joint-Secretary', 'Sneha Rathore', 'female', 8965412307, 'http://localhost/Rathores/statemambers/1', 'http://localhost/Rathores/statemambers/1', 'sh@gmail.com', 897412589630, 'ser-621e02cc89bff', 'assets/community/mabers/1646133964150-26.jpg', 0, '2022-03-01 11:26:04'),
(7, 1, 3, ' Madhya Pradesh', 'Joint-Secretary', 'ser', 'youth', 8965412307, 'http://localhost/Rathores/statemambers/1', 'http://localhost/Rathores/statemambers/1', 'sh@gmail.com', 897412589630, 'ser-621e02cc89bff', 'assets/community/mabers/1646553897Logo_(10).png', 0, '2022-03-01 11:26:04'),
(8, 5, 9, ' Madhya Pradesh', 'Guardian', 'Mr. Shambhu Dayal Rathore', 'male', 9826098261, 'shabhudayalrathore@facebook.com', 'shabhudayalrathore@instagram.com', 'shambhudayalrathore@gmail.com', 9826098261, 'Mr-Shambhu-Dayal-Rathore-628b31857a80a', 'assets/community/mabers/1653289349F8.jpg', 0, '2022-05-23 07:02:29'),
(9, 5, 9, ' Madhya Pradesh', 'Chairmen', 'Mr. Lalit Rathore', 'male', 9826098261, 'lalitrathore@facebook.com', 'lalitrathore@instagram.com', 'lalitrathore@gmail.com', 9826098262, 'Mr-Lalit-Rathore-628b31f7483dd', 'assets/community/mabers/1653289463F9.jpg', 0, '2022-05-23 07:04:23'),
(10, 5, 9, ' Madhya Pradesh', 'Treasury-Chairmen', 'Mr. Devilal Singh Rathore', 'male', 9826098263, 'devilalsinghathore@facebook.com', 'devilalsinghrathore@instagram.com', 'devilalsinghrathore@gmail.com', 9826098263, 'Mr-Devilal-Singh-Rathore-628b379b31bc2', 'assets/community/mabers/1653290907GF2.jpg', 0, '2022-05-23 07:28:27'),
(11, 5, 9, ' Madhya Pradesh', 'Chairmen', 'Mr. Purnima Rathore', 'female', 9826198261, 'purnimarathore@facebook.com', 'purnimarathore@instagram.com', 'purnimarathore@gmail.com', 9826198261, 'Mr-Purnima-Rathore-628b39806b51a', 'assets/community/mabers/1653292388womens_board_9.jpg', 0, '2022-05-23 07:36:32'),
(12, 5, 9, ' Madhya Pradesh', 'General-Secretary', 'Mrs. Padmini Rathore', 'female', 9826198262, 'padminirathore@facebook.com', 'padminirathore@instagram.com', 'padminirathore@gmail.com', 9826198262, 'Mrs-Padmini-Rathore-628b3c3cc5334', 'assets/community/mabers/1653292092womens_board_1.jpg', 0, '2022-05-23 07:48:12'),
(13, 5, 9, ' Madhya Pradesh', 'Treasury-Chairmen', 'Mrs. Shakuntala Rathore', 'female', 9826198263, 'shakuntalarathore@facebook.com', 'shakuntalarathore@instagram.com', 'shakuntalarathore@gmail.com', 9826198263, 'Mrs-Shakuntala-Rathore-628b3cc360b08', 'assets/community/mabers/1653292227womens_board_3.jpg', 0, '2022-05-23 07:50:27'),
(14, 5, 9, ' Madhya Pradesh', 'Chairmen', 'Mr. Malkhan Singh Rathore', 'youth', 9826298261, 'malkhansinghrathore@facebook.com', 'malkhansinghrathore@instagram.com', 'malkhansinghrathore@gmail.com', 9826298261, 'Mr-Malkhan-Singh-Rathore-628b3ea9445ae', 'assets/community/mabers/1653292713F11.jpeg', 0, '2022-05-23 07:58:33'),
(15, 5, 9, ' Madhya Pradesh', 'Organisation-Minister', 'Mr. Pratyush Rathore', 'youth', 9826298262, 'pratyushrathore@facebook.com', 'pratyushrathore@instagram.com', 'pratyushrathore@gmail.com', 9826298262, 'Mr-Pratyush-Rathore-628b3ef2c089d', 'assets/community/mabers/1653293096F17.jpg', 0, '2022-05-23 07:59:46'),
(16, 5, 9, ' Madhya Pradesh', 'Adviser', 'Mr. Nikhil Rathore', 'youth', 9826298263, 'nikhilrathore@facebook.com', 'nikhilrathore@instagram.com', 'nilkhilrathore@gmail.com', 9826298263, 'Mr-Nikhil-Rathore-628b3fba37dbd', 'assets/community/mabers/1653293137F20.jpg', 0, '2022-05-23 08:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `matrimonyfamilyinfo`
--

CREATE TABLE `matrimonyfamilyinfo` (
  `id` bigint(200) NOT NULL,
  `user_id` bigint(200) DEFAULT NULL,
  `frid` bigint(200) DEFAULT NULL,
  `grandfather_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grandfatherimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grandmother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grandmotherimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motherimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fatheroccupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motheroccupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_occupation_detail` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_occupation_detail` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sibling_array` varchar(550) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `famliyimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_type` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_values` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_income` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `famliy_bussines` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_businessimg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fcontactnumber` bigint(150) DEFAULT NULL,
  `whatsapp_number` bigint(150) DEFAULT NULL,
  `emailid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `hide` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matrimonyfamilyinfo`
--

INSERT INTO `matrimonyfamilyinfo` (`id`, `user_id`, `frid`, `grandfather_name`, `grandfatherimage`, `grandmother_name`, `grandmotherimage`, `father_name`, `father_image`, `mother_name`, `motherimage`, `fatheroccupation`, `motheroccupation`, `f_occupation_detail`, `m_occupation_detail`, `sibling_array`, `famliyimage`, `family_type`, `family_values`, `family_status`, `family_income`, `famliy_bussines`, `family_businessimg`, `fcontactnumber`, `whatsapp_number`, `emailid`, `address`, `status`, `hide`, `date`) VALUES
(1, 1, 2, 'Mr.dsd', 'assets/famliyimages/1642855083about-team-member-3.png', 'Dr.fdfdfd', 'assets/famliyimages/1642855083about-team-member-2.png', 'Mr.ewew', 'assets/famliyimages/1642855083about-team-member-31.png', 'Mrs.', 'assets/famliyimages/1642855083about-team-member-4.png', 'Job', 'Job', 'ssererer', 'ewe', '{\"sibling_gen\":[\"brother\",\"brother\",\"sister\",\"sister\",\"sister\"],\"sibling_status\":[\"Younger\",\"Elder\",\"Younger\",\"Elder\",\"Elder\"],\"sibling_name\":[\"bg\",\"sasa\",\"sdd\",\"ewee\",\"sder\"],\"sibling_marriage\":[\"Married\",\"Married\",\"Married\",\"Unmarried\",\"Unmarried\"],\"sibling_ocupation\":[\"ui\",\"eee\",\"sdfdf\",\"ggg\",\"sddd\"]}', 'assets/famliyimages/famliycoverimage/1642855084OLX_group.png', 'Nuclear', 'Orthodox', 'Upper-Middle-Class', '2lac-3lac', 'Yes', 'assets/famliyimages/bussinesimage/1642855084bounce_logo.png', 7412589630, 7896541230, 'shubham@gmail.com', 'sasasaadsdsdsdd', '0', '1', '2022-01-22 12:38:04'),
(2, 4, 7, 'Mr. Ramnath Prasad Rathore', 'assets/famliyimages/1652592144GF2.jpg', 'Mrs. Kamal Bai Rathore', 'assets/usercover/rathore.png', 'Mr. Pankaj Rathore', 'assets/famliyimages/1652592144F8.jpg', 'Mrs. Aarti Rathore', 'assets/famliyimages/1652592144womens_board_9.jpg', 'Business', 'Housewife', 'Whole seller for electronics Item', 'Beauti Parlour', '{\"sibling_gen\":[\"brother\",\"brother\",\"sister\",\"sister\",\"brother\"],\"sibling_status\":[\"Elder\",\"Younger\",\"Elder\",\"Younger\",\"Younger\"],\"sibling_name\":[\"Mahendra Rathore\",\"Aman Rathore\",\"Soumya Rathore\",\"Ananya Rathore\",\"\"],\"sibling_marriage\":[\"Married\",\"Unmarried\",\"Married\",\"Unmarried\",\"Unmarried\"],\"sibling_ocupation\":[\"Engaged in Family Business\",\"Study in CS final Year\",\"Housewife\",\"Software  Engineer in Microsoft, Pune\",\"\"]}', 'assets/famliyimages/famliycoverimage/1652592144P_20170624_202623_BF.jpg', 'Joint', 'Moderate', 'Middle-Class', 'morethan_15lac', 'Yes', 'assets/famliyimages/bussinesimage/1652592144Business_15.jpg', 9827098270, 9827098271, 'pankajrathore@gmail.com', '354 Suryadev Nagar ,Indore (M.P.)', '0', '1', '2022-05-15 05:22:24'),
(3, 5, 8, 'Mr. Nandkishor Rathore', 'assets/famliyimages/1652620350D8.jpg', 'Mrs. Pushpalata Rathore', 'assets/famliyimages/1652620350Grand_Mother.jpg', 'Mr.Anand Rathore', 'assets/famliyimages/1652620350F9.jpg', 'Mrs.', 'assets/famliyimages/1652620350G5.jpg', 'Job', 'Housewife', 'ASI in RPF', 'Housewife', '{\"sibling_gen\":[\"brother\",\"brother\",\"sister\",\"sister\"],\"sibling_status\":[\"Elder\",\"Younger\",\"Elder\",\"Younger\"],\"sibling_name\":[\"Ritesh Rathore\",\"Suraj Rathore\",\"Kavita Rathore\",\"Seema Rathoe\"],\"sibling_marriage\":[\"Married\",\"Unmarried\",\"Married\",\"Unmarried\"],\"sibling_ocupation\":[\"Looking after Family Business\",\"Software engineer  in Infobean\",\"Sr. Software Consultant\",\"Running final year in B.sc Computer\"]}', 'assets/famliyimages/famliycoverimage/1652620350IMG20190830222921.jpg', 'Joint', 'Traditional', 'Upper-Middle-Class', 'morethan_15lac', 'Yes', 'assets/famliyimages/bussinesimage/1652620350business_image_1.jpg', 9827198271, 9827298272, 'anand@gmail.com', '699 Ramraj colony, airport road, Jaipur, Rajasthan', '0', '0', '2022-05-15 13:12:30'),
(4, 5, 9, 'Late Mr. Kamalchand Rathore', 'assets/famliyimages/1652623496GF1.jpg', 'Mrs.Kusum Rathore', 'assets/famliyimages/1652623496womens_board_5.jpg', 'Mr.Deepak Rathore', 'assets/famliyimages/1652623562F7.jpg', 'Mrs. Naina Rathore', 'assets/famliyimages/1652623496G5.jpg', 'Business', 'Housewife', 'Supporting in Family Business', 'Principal in St. Joseph Convent School, Mumbai', '{\"sibling_gen\":[\"brother\",\"sister\",\"brother\",\"brother\"],\"sibling_status\":[\"Younger\",\"Elder\",\"Younger\",\"Younger\"],\"sibling_name\":[\"Ankit Rathore\",\"Adiiti Rathore\",\"\",\"\"],\"sibling_marriage\":[\"Unmarried\",\"Married\",\"Unmarried\",\"Unmarried\"],\"sibling_ocupation\":[\"Production Manager in Mahindra & Mahindra,Pune\",\"CA\",\"\",\"\"]}', 'assets/famliyimages/famliycoverimage/1652623496IMG20190830090940.jpg', 'Nuclear', 'Moderate', 'Middle-Class', '12lac-15lac', 'Yes', 'assets/famliyimages/bussinesimage/1652623496Business_20.jpg', 9826098260, 9826198261, 'deepak@gmail.com', '34 Vile Parle, Andheri East, Mumbai, Maharastra', '0', '0', '2022-05-15 14:04:56'),
(5, 6, 10, 'Late Mr. Premchand Rathore', 'assets/famliyimages/1653138997D9.jpg', 'Late Mrs. Savitribai Rathore', 'assets/famliyimages/1653138997DADI_1.jpg', 'Mr. Ashok Kumar Gehlot', 'assets/famliyimages/1653138997F6.jpg', 'Mrs. Surbhi Gehlot', 'assets/famliyimages/1653138997G5.jpg', 'Business', 'Job2', 'Spices & Masala Manufacturer', 'Running Own Beauti parlour', '{\"sibling_gen\":[\"brother\",\"sister\",\"sister\"],\"sibling_status\":[\"Younger\",\"Elder\",\"Elder\"],\"sibling_name\":[\"Abhishek Rathore\",\"Ritisha Rathore\",\"Kirti Rathore\"],\"sibling_marriage\":[\"Unmarried\",\"Married\",\"Married\"],\"sibling_ocupation\":[\"Studying CS final year\",\"Housewife\",\"Software Engineer\"]}', 'assets/famliyimages/famliycoverimage/1653138997IMG20190830090940.jpg', 'Nuclear', 'Moderate', 'Middle-Class', 'morethan_15lac', 'Yes', 'assets/famliyimages/bussinesimage/1653138997Spices_Masala.jpeg', 9893098930, 9893198931, 'ashok@gmail.com', '673 Chhatrapati Shivaji Colony, Near airport road, Indore, M.P.', '0', '0', '2022-05-21 13:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `matrimonyuser`
--

CREATE TABLE `matrimonyuser` (
  `id` bigint(200) NOT NULL,
  `user_id` bigint(200) DEFAULT NULL,
  `profilecreated` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mothertongue` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `languages` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marital` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resident` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pincode` bigint(150) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skin` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disability` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hobby` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `interest` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `otherhobby` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `otherinterest` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smoke` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `belongs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `religion` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adharimage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userprofileimage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coveimage` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `adharnumber` bigint(200) DEFAULT NULL,
  `bloodgroup` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthtime` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthplace` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `gotra` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `mamagotra` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `manglik` text COLLATE utf8_unicode_ci NOT NULL,
  `shani` text COLLATE utf8_unicode_ci NOT NULL,
  `moonsign` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `like_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `age` int(100) NOT NULL,
  `newall` text COLLATE utf8_unicode_ci NOT NULL DEFAULT 'All',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `matrimonyuser`
--

INSERT INTO `matrimonyuser` (`id`, `user_id`, `profilecreated`, `firstName`, `lastName`, `gender`, `dob`, `mothertongue`, `languages`, `marital`, `resident`, `country`, `state`, `district`, `city`, `pincode`, `address`, `height`, `weight`, `body`, `skin`, `disability`, `hobby`, `interest`, `otherhobby`, `otherinterest`, `diet`, `smoke`, `belongs`, `about`, `religion`, `adharimage`, `userprofileimage`, `coveimage`, `adharnumber`, `bloodgroup`, `birthtime`, `birthplace`, `gotra`, `mamagotra`, `manglik`, `shani`, `moonsign`, `like_id`, `status`, `age`, `newall`, `date`) VALUES
(1, 1, 'Self', 'fdsdd', 'fdfdf', 'Male', '2020-11-16', 'Hindi', 'Sindhi', 'NeverMarried', 'Citizen', '', NULL, NULL, 'cdds', 456656, 'fdsdsfdsgs', '4 foot 0 inch', 'between_85kg-90kg', 'Slim', 'Very_Fair', 'None', '[\"Writing\",\"Driving\"]', '[\"Yoga\",\"Cooking\"]', '', 'adad', '[\"veg\"]', 'No', 'Kshtriya-Rathore/Rathod', 'vdgdgdgd', 'Hindu', 'assets/useraddharimg/1638008074modal-form-fb.jpg', 'assets/useraddharimg/1638008257modal-new.jpg', '', NULL, '(A-)', '', '', '', '', '', '', '', '[\"1\"]', '', 24, 'M', '2022-04-24 12:59:38'),
(2, 1, 'Father', 'so', 'so', 'Female', '2021-11-10', 'Hindi', 'Hindi', 'NeverMarried', 'Citizen', 'India', 'Arunachal Pradesh', 'Anjaw', '', 0, '', '4 foot 0 inch', 'less>50kg', 'Slim', 'Very_Fair', 'None', '[\"Writing\",\"Driving\"]', '[\"Yoga\",\"Cooking\"]', 'sdasfaf', 'eewtwt', '[\"veg\"]', 'Yes', 'Kshtriya-Rathore/Rathod', 'sfdsfsdf', 'Hindu', 'assets/useraddharimg/1638008257modal-new.jpg', 'assets/useraddharimg/1638008257modal-new.jpg', '', NULL, '(A+)', '', '', '', '', 'No', '', '', '0', '', 25, 'All', '2022-04-24 11:19:40'),
(3, 1, 'Self', 'newshubham', 'kanungos', 'Female', '1994-10-19', 'Sindhi', 'Sindhi', 'AwaitingDivorce', 'Student_Visa', 'India', ' Madhya Pradesh', 'Khandwa', 'khandwaj', 450001, 'mata choke', '4 foot 5 inch', 'between_60kg-65kg', 'Average', 'Fair', 'Physically_Challenged_from_Birth', '[\"Dancing\",\"Puzzle\"]', '[\"Travel\",\"Writing\"]', 'rt', 'asss', '[\"veg\",\"non-veg\"]', 'Yes', 'Kshtriya-Rathore/Rathod', 'good demo', NULL, 'assets/useraddharimg/163869713520200118_192453.jpg', 'assets/userprofileimage/1642333244Capture3.PNG', '', NULL, '(B-)', '04:19 PM', 'khandwa', 'svff', 'svfff', 'Yes', 'No', 'sedfd', '[\"1\"]', '', 27, 'All', '2022-05-01 11:19:25'),
(4, 1, 'Mother', 'shub', 'sd', 'Male', '2021-12-14', 'Hindi', 'Hindi', 'AwaitingDivorce', 'Student_Visa', 'India', ' Madhya Pradesh', 'Khandwa', 'kanwa', 450000, 'dsadsd', '4 foot 5 inch', 'less>50kg', 'Slim', 'Very_Fair', 'None', '[\"Writing\",\"Driving\"]', '[\"Writing\",\"Yoga\"]', '', '', '[\"veg\"]', 'No', 'Kshtriya-Rathore/Rathod', 'retretretertett', 'Hindu', 'assets/useraddharimg/1638697703jm_denis.jpg', 'assets/userprofileimage/1638697703arashmil.jpg', '', NULL, '(A+)', '04:19 PM', 'sss', 'ss', 'ss', 'Yes', 'Yes', 'ss', '[\"1\"]', '', 28, 'M', '2022-04-24 12:59:46'),
(5, 1, 'Self', 'demo', 'demo', 'Male', '2015-02-19', 'Hindi', 'Sindhi', 'NeverMarried', 'Citizen', 'India', 'Aasam', 'Charaideo', 'sderr', 550000, 'Mata Choke Khandwa', '4 foot 0 inch', 'less>50kg', 'Slim', 'Very_Fair', 'None', '[\"Puzzle\",\"Writing\"]', '[\"Travel\",\"Writing\"]', 'eee', 'eee', '[\"veg\"]', 'No', 'Kshtriya-Rathore/Rathod', 'eetetetettetetetetetete', 'Hindu', 'assets/useraddharimg/1642089953Session_1.png', 'assets/userprofileimage/1642089953202111080107.jpg', 'assets/usercover/rathore.png', 852369741, '(A+)', '11:17 PM', 'kahndwa', 'wee', 'qq', 'Yes', 'Yes', 'ww', '[\"1\"]', '0', 29, 'M', '2022-04-24 12:59:50'),
(6, 2, 'Mother', 'shub', 's', 'Male', '2021-12-14', 'Hindi', 'Hindi', 'AwaitingDivorce', 'Student_Visa', 'India', ' Madhya Pradesh', 'Khandwa', 'kanwa', 450000, 'dsadsd', '4 foot 0 inch', 'less>50kg', 'Slim', 'Very_Fair', 'None', '[\"Writing\",\"Driving\"]', '[\"Writing\",\"Yoga\"]', '', '', '[\"veg\"]', 'No', 'Kshtriya-Rathore/Rathod', 'retretretertett', 'Hindu', 'assets/useraddharimg/1638697703jm_denis.jpg', 'assets/userprofileimage/1638697703arashmil.jpg', '', NULL, '(A+)', '04:19 PM', 'sss', 'ss', 'ss', 'Yes', 'Yes', 'ss', '[\"5\"]', '0', 27, 'M', '2022-05-15 13:19:13'),
(7, 4, 'Brother', 'Rahul ', 'Rathore', 'Male', '1996-04-02', 'Hindi', 'English', 'NeverMarried', 'Permanent_Resident', 'India', ' Madhya Pradesh', 'Indore', 'Indore', 452001, '78 Vijay Nagar, Near Sayaji Hotel', '5 foot 5 inch', 'between_55kg-60kg', 'Average', 'Very_Fair', 'None', '[\"Dancing\",\"Gardening\",\"Graphology\",\"Painting\",\"Photography\",\"Playing_Musical_Instruments\",\"Driving\"]', '[\"Movie\",\"Music\",\"Politics\",\"Travel\",\"Cooking\"]', 'Playing Cricket, Reading Novel', 'Reading Books, Playing Kho-kho', '[\"veg\"]', 'No', 'Kshtriya-Rathore/Rathod', 'I am a tall, dark, handsome, 30-year-old man looking for a second chance to find true love. I married four years ago but ended my brief marriage due to differences in lifestyle. I am a longtime practitioner of yoga and believe in leading a simple lifestyl', 'Hindu', 'assets/useraddharimg/1652590969Adhar_Card.jpg', 'assets/userprofileimage/1652590969B10.jpg', 'assets/usercover/1652592788P_20170314_134026.jpg', 123456789012, '(B+)', '11:37 AM', 'Indore', 'Urai Chosathiya', 'Kumbi Patel', 'No', 'Yes', 'Aris', '[\"1\"]', '0', 26, 'All', '2022-06-19 09:33:37'),
(8, 5, 'Father', 'अंकित ', 'राठौर', 'Male', '1995-05-05', 'Hindi', 'Hindi', 'NeverMarried', 'Permanent_Resident', 'India', ' RAJASTHANA  ', 'Jaipur', 'Jaipur', 454009, '340 Maharaja Road, Near Fort', '5 foot 6 inch', 'between_60kg-65kg', 'Average', 'Fair', 'None', '[\"Painting\",\"Photography\",\"Writing\",\"Driving\"]', '[\"Politics\",\"Reading\",\"Social_Service\",\"Sports\",\"Television\",\"Travel\"]', 'Singing Song, Playing Chess', 'Gardening', '[\"veg\"]', 'No', 'Kshtriya-Teli-Rathore/Rathod', 'I am a 26-year-old, 5’5″ tall woman based out of Bangalore. I have a congenital visual impairment that restricts my field of vision. My visual impairment has not stopped me from pursuing my education and I have an MBA Degree from the University of Mysore.', 'Hindu', 'assets/useraddharimg/1652618774Adhar_Card.jpg', 'assets/userprofileimage/1652618775Men_2.jpg', 'assets/usercover/1652619215B1.jpg', 345678901234, '(AB+)', '08:20 PM', 'Jodhpur', 'Kunjaniya', 'Parmar', 'Yes', 'Yes', 'Scorpio', NULL, '0', 27, 'All', '2022-05-15 13:16:04'),
(9, 5, 'Mother', 'Chanchal', 'Rathore', 'Female', '1998-04-09', 'Hindi', 'Hindi', 'NeverMarried', 'Permanent_Resident', 'India', ' Maharastra ', 'Mumbai City', 'Andheri', 462009, '34 Ville Parle, Near St. Marry School, Ahderi East,', '5 foot 3 inch', 'between_55kg-60kg', 'Slim', 'Fair', 'None', '[\"Cooking\",\"Dancing\",\"Gardening\",\"Painting\",\"Photography\",\"Puzzle\",\"Writing\"]', '[\"Health_&_Fitness\",\"Learning_New_Language\",\"Movie\",\"Music\",\"Reading\",\"Social_Service\",\"Television\",\"Yoga\"]', 'Singing Song, Playing Chess', 'Creating Youtube Cooking Videos', '[\"veg\"]', 'No', 'Kshtriya-Rathore/Rathod', 'I am 22 years old with a medium build and cheerful outlook towards life. I am a commerce graduate from Delhi University and I am currently figuring out the options I have in terms of pursuing my studies further or finding a job. I love painting and you wi', 'Hindu', 'assets/useraddharimg/1652622070Adhar.jpg', 'assets/userprofileimage/1652622070G40.jpg', 'assets/usercover/1652622210G3.jpg', 567890123456, '(B+)', '01:15 PM', 'Pune', 'Ajmeria', 'Choudhary', 'Yes', 'No', 'Libra', NULL, '0', 24, 'All', '2022-05-15 13:44:20'),
(10, 6, 'Sister', 'Suman', 'Rathore', 'Female', '1998-08-08', 'Hindi', 'Marathi', 'NeverMarried', 'Permanent_Resident', 'India', ' Madhya Pradesh', 'Ujjain', 'Ujjain', 453001, '73 Pardeshipura, Near Patanipura Chouraha', '5 foot 3 inch', 'between_55kg-60kg', 'Slim', 'Very_Fair', 'None', '[\"Cooking\",\"Dancing\",\"Gardening\",\"Painting\",\"Photography\",\"Writing\"]', '[\"Health_&_Fitness\",\"Learning_New_Language\",\"Movie\",\"Music\",\"Reading\",\"Television\",\"Travel\",\"Yoga\"]', 'Singing Song, Playing Games', 'Gardening', '[\"veg\",\"Eggetarian\"]', 'No', 'Kshtriya-Teli-Rathore/Rathod', 'I am a 26-year-old, 5’8″ tall, athletic woman based out of Mumbai. I have an engineering degree from IIT Mumbai and an MBA from IIM Ahmadabad. I am currently working as an investment banker for a large British bank based out of Mumbai. I intend to pursue ', 'Hindu', 'assets/useraddharimg/1653137549Adhar.jpg', 'assets/userprofileimage/1653137549G38.jpg', 'assets/usercover/1653137786womens_board_7.jpg', 123450987654, '(O-)', '04:21 PM', 'Ujjain', 'Jaweriya', 'Chouhan', 'Yes', 'No', 'Aris', NULL, '0', 23, 'All', '2022-05-21 12:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `metromonyusergallery`
--

CREATE TABLE `metromonyusergallery` (
  `id` bigint(200) NOT NULL,
  `user_id` bigint(200) DEFAULT NULL,
  `rid` bigint(200) DEFAULT NULL,
  `gimages` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `metromonyusergallery`
--

INSERT INTO `metromonyusergallery` (`id`, `user_id`, `rid`, `gimages`, `status`, `date`) VALUES
(1, 1, 3, 'assets/gallerys/1640281105output-onlinepngtools_(25).png', 0, '2021-12-23 17:38:25'),
(2, 1, 3, 'assets/gallerys/1640366396data_scientist_interview_questions_ebook_(2).png', 0, '2021-12-24 17:19:56'),
(3, 1, 5, 'assets/gallerys/1642090330Session_6.png', 0, '2022-01-13 16:12:10'),
(4, 1, 5, 'assets/gallerys/1642090389Session_7.png', 0, '2022-01-13 16:13:09'),
(5, 1, 5, 'assets/gallerys/1642090407Session_4.png', 0, '2022-01-13 16:13:27'),
(6, 1, 5, 'assets/gallerys/1642090427Session_5_.png', 0, '2022-01-13 16:13:47'),
(7, 1, 5, 'assets/gallerys/1642090446Session_2_.png', 0, '2022-01-13 16:14:06'),
(8, 1, 5, 'assets/gallerys/1642090474Session_2_.png', 0, '2022-01-13 16:14:34'),
(9, 1, 5, 'assets/gallerys/1642090495Session_3.png', 0, '2022-01-13 16:14:55'),
(10, 1, 4, 'assets/gallerys/164209063313.png', 0, '2022-01-13 16:17:13'),
(11, 1, 4, 'assets/gallerys/164209064214.png', 0, '2022-01-13 16:17:22'),
(12, 1, 4, 'assets/gallerys/164209065015.png', 0, '2022-01-13 16:17:30'),
(13, 1, 4, 'assets/gallerys/164209065911.png', 0, '2022-01-13 16:17:39'),
(14, 1, 4, 'assets/gallerys/164209066512.png', 0, '2022-01-13 16:17:45'),
(15, 1, 4, 'assets/gallerys/1642090673WhatsApp_Image_2022-01-10_at_11_11_26.jpeg', 0, '2022-01-13 16:17:53'),
(16, 1, 4, 'assets/gallerys/1642090687Session_5_.png', 0, '2022-01-13 16:18:07'),
(17, 1, 2, 'assets/gallerys/164209118912.png', 0, '2022-01-13 16:26:29'),
(18, 1, 2, 'assets/gallerys/164209120411.png', 0, '2022-01-13 16:26:44'),
(19, 1, 2, 'assets/gallerys/164209121415.png', 0, '2022-01-13 16:26:54'),
(20, 1, 2, 'assets/gallerys/1642091220Session_1.png', 0, '2022-01-13 16:27:00'),
(21, 1, 2, 'assets/gallerys/1642091227Session_6.png', 0, '2022-01-13 16:27:07'),
(22, 1, 2, 'assets/gallerys/1642091235Session_7.png', 0, '2022-01-13 16:27:15'),
(23, 1, 2, 'assets/gallerys/1642091246Session_4.png', 0, '2022-01-13 16:27:26'),
(24, 1, 1, 'assets/gallerys/1642091366Session_1.png', 0, '2022-01-13 16:29:26'),
(25, 1, 1, 'assets/gallerys/1645510044logo_(1).jpg', 0, '2022-02-22 06:07:25'),
(26, 1, 1, 'assets/gallerys/1645510063logo_(5).png', 0, '2022-02-22 06:07:43'),
(27, 1, 1, 'assets/gallerys/1645510073logo.png', 0, '2022-02-22 06:07:53'),
(28, 1, 1, 'assets/gallerys/1645510085logo_(6).png', 0, '2022-02-22 06:08:05'),
(29, 1, 1, 'assets/gallerys/1645510101logo.jpg', 0, '2022-02-22 06:08:21'),
(30, 4, 7, 'assets/gallerys/1652592712IMG20190830090940.jpg', 0, '2022-05-15 05:31:52'),
(31, 4, 7, 'assets/gallerys/1652592753IMG20190830090428.jpg', 0, '2022-05-15 05:32:33'),
(32, 4, 7, 'assets/gallerys/1652592599IMG_20180805_111345854.jpg', 0, '2022-05-15 05:29:59'),
(33, 4, 7, 'assets/gallerys/1652592610IMG_20180805_104921563.jpg', 0, '2022-05-15 05:30:10'),
(34, 4, 7, 'assets/gallerys/1652592624IMG-20190325-WA0006.jpg', 0, '2022-05-15 05:30:24'),
(35, 4, 7, 'assets/gallerys/1652592637P_20170314_134026.jpg', 0, '2022-05-15 05:30:37'),
(36, 5, 8, 'assets/gallerys/1652618834P_20170313_102109.jpg', 0, '2022-05-15 12:47:14'),
(37, 5, 8, 'assets/gallerys/1652618848P_20180503_220300.jpg', 0, '2022-05-15 12:47:28'),
(38, 5, 8, 'assets/gallerys/1652618862Men_1.jpg', 0, '2022-05-15 12:47:42'),
(39, 5, 8, 'assets/gallerys/1652618894P_20181225_122853.jpg', 0, '2022-05-15 12:48:14'),
(40, 5, 8, 'assets/gallerys/1652618907P_20180805_104434.jpg', 0, '2022-05-15 12:48:27'),
(41, 5, 8, 'assets/gallerys/1652618923IMG20190830223144.jpg', 0, '2022-05-15 12:48:43'),
(42, 5, 9, 'assets/gallerys/1652622116G3.jpg', 0, '2022-05-15 13:41:56'),
(43, 5, 9, 'assets/gallerys/1652622132G41.jpg', 0, '2022-05-15 13:42:12'),
(44, 5, 9, 'assets/gallerys/1652622146G32.jpg', 0, '2022-05-15 13:42:26'),
(45, 5, 9, 'assets/gallerys/1652622161G42.jpg', 0, '2022-05-15 13:42:41'),
(46, 5, 9, 'assets/gallerys/1652622172G15.jpg', 0, '2022-05-15 13:42:52'),
(47, 5, 9, 'assets/gallerys/1652622184G7.jpg', 0, '2022-05-15 13:43:04'),
(48, 5, 9, '', 0, '2022-05-15 13:43:04'),
(49, 5, 9, '', 0, '2022-05-15 13:43:04'),
(50, 5, 9, '', 0, '2022-05-15 13:43:04'),
(51, 6, 10, 'assets/gallerys/1653138109G1.jpg', 0, '2022-05-21 13:01:49'),
(52, 6, 10, 'assets/gallerys/1653138127G34.jpg', 0, '2022-05-21 13:02:07'),
(53, 6, 10, 'assets/gallerys/1653138138G37.jpg', 0, '2022-05-21 13:02:18'),
(54, 6, 10, 'assets/gallerys/1653138147womens_board_7.jpg', 0, '2022-05-21 13:02:27'),
(55, 6, 10, 'assets/gallerys/1653138156G33.jpg', 0, '2022-05-21 13:02:36'),
(56, 6, 10, 'assets/gallerys/1653138168G34.jpg', 0, '2022-05-21 13:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `nationalmabers`
--

CREATE TABLE `nationalmabers` (
  `id` bigint(200) NOT NULL,
  `noffid` int(150) NOT NULL,
  `nloid` int(150) NOT NULL,
  `nmberpost` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nmbername` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nmbergender` text COLLATE utf8_unicode_ci NOT NULL,
  `nmbrmobile` bigint(250) NOT NULL,
  `nmbremail` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nmberfb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nmbrinsta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nmbrwhatsapp` bigint(200) NOT NULL,
  `nmberimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nmaberslug` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `satats` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nationalmabers`
--

INSERT INTO `nationalmabers` (`id`, `noffid`, `nloid`, `nmberpost`, `nmbername`, `nmbergender`, `nmbrmobile`, `nmbremail`, `country`, `state`, `district`, `nmberfb`, `nmbrinsta`, `nmbrwhatsapp`, `nmberimage`, `nmaberslug`, `satats`, `date`) VALUES
(1, 1, 5, 'Chairmen', 'Mr.shubham', 'male', 7896541230, 'shubham@gmai.com', 'India', ' Madhya Pradesh', 'Katni', 'https://www.lipsum.com/', 'https://www.lipsum.com/', 9874563210, 'assets/community/mabers/1646744660150-26.jpg', 'Mr-shubham-62274bbe7ad5f', 0, '2022-03-08 12:27:42'),
(2, 1, 5, 'Chairmen', 'Ms.shurbhi', 'female', 7896541230, 'shubham@gmai.com', 'India', ' Madhya Pradesh', 'Katni', 'https://www.lipsum.com/', 'https://www.lipsum.com/', 9874563210, 'assets/community/mabers/1646744660150-26.jpg', 'Mr-shubham-62274bbe7ad5f', 0, '2022-03-08 12:27:42'),
(3, 1, 5, 'Chairmen', 'Ms.raki', 'youth', 7896541230, 'shubham@gmai.com', 'India', ' Madhya Pradesh', 'Katni', 'https://www.lipsum.com/', 'https://www.lipsum.com/', 9874563210, 'assets/community/mabers/1646744660150-26.jpg', 'Mr-shubham-62274bbe7ad5f', 0, '2022-03-08 12:27:42'),
(4, 2, 10, 'Chairmen', 'Mr. Ratan Singh Rathore', 'male', 9993099930, 'ratansinghrathore@gmail.com', 'India', ' Madhya Pradesh', 'Indore', 'ratansinghrathore@facebook.com', 'ratansinghrathore@instagram.com', 9993099930, 'assets/community/mabers/1653294840F1.jpg', 'Mr-Ratan-Singh-Rathore-628b45c328cec', 0, '2022-05-23 08:28:51'),
(5, 2, 10, 'Executive-chairmen', 'Mr. Devilal Rathore', 'male', 9993099931, 'devilalrathore@gmail.com', 'India', ' Madhya Pradesh', 'Gwalior', 'devilalrathore@facebook.com', 'devilalrathore@instagram.com', 9993099930, 'assets/community/mabers/1653294896F4.jpg', 'Mr-Devilal-Rathore-628b464adfdb0', 0, '2022-05-23 08:31:06'),
(6, 2, 10, 'Publicity-Minister', 'Mr. Prakash Rathore', 'male', 9993099933, 'prakashrathore@gmail.com', 'India', ' Madhya Pradesh', 'Indore', 'prakashrathore@facebook.com', 'prakashrathore@instagram.com', 9993099933, 'assets/community/mabers/1653294762D9.jpg', 'Mr-Prakash-Rathore-628b46aa407a0', 0, '2022-05-23 08:32:42'),
(7, 2, 10, 'Chairmen', 'Mrs. Shailja Rathore', 'female', 9993099941, 'shailjarathore@gmail.com', 'India', 'UTTAR PRADESH', 'Lalitpur', 'shailjarathore@facebook.com', 'shailjarathore@instagram.com', 9993099941, 'assets/community/mabers/1653478880G2.jpg', 'Mrs-Shailja-Rathore-628e147280971', 0, '2022-05-25 11:35:14'),
(8, 2, 10, 'Secretary', 'Mrs. Priyadarshani Rathore', 'female', 9993099942, 'priyadarshanirathore@gmail.com', 'India', ' RAJASTHANA  ', 'Jaipur', 'priyadarshanirathore@facebook.com', 'priyadarshanirathore@instagram.com', 9993099942, 'assets/community/mabers/1653478617G27.jpg', 'Mrs-Priyadarshani-Rathore-628e14d934e93', 0, '2022-05-25 11:36:57'),
(9, 2, 10, 'Member', 'Mrs. Monika Rathore', 'female', 9993099943, 'monikarathore@gmail.com', 'India', ' RAJASTHANA  ', 'Jaipur', 'monikarathore@facebook.com', 'monikarathore@instagram.com', 9993099943, 'assets/community/mabers/1653478758womens_board_10.jpg', 'Mrs-Monika-Rathore-628e156631b39', 0, '2022-05-25 11:39:18'),
(10, 2, 10, 'General-Secretary', 'Mrs. Rajpratap Singh Rathore', 'youth', 9993099951, 'rajpratapsinghrathore@gmail.com', 'India', ' Gujrat  ', 'Ahmedabad', 'rajpratapsinghrathore@facebook.com', 'rajpratapsinghrathore@instagram.com', 9993099951, 'assets/community/mabers/1653479055IMG_20180805_111345854.jpg', 'Mrs-Rajpratap-Singh-Rathore-628e168f89ebd', 0, '2022-05-25 11:44:15'),
(11, 2, 10, 'Organisation-Minister', 'Mrs. Rohan Pratap Singh Rathore', 'youth', 9993099952, 'rpsrathore@gmail.com', 'India', ' Maharastra ', 'Pune', 'rpsrathore@facebook.com', 'rpsrathore@instagram.com', 9993099952, 'assets/community/mabers/1653479163IMG20190830090428.jpg', 'Mrs-Rohan-Pratap-Singh-Rathore-628e16fb87b94', 0, '2022-05-25 11:46:03'),
(12, 2, 10, 'Adviser', 'Mr. Chetan Singh Rathore', 'youth', 9993099953, 'chetansinghrathore@gmail.com', 'India', ' Delhi ', 'New Delhi', 'chetansinghrathore@facebook.com', 'chetansinghrathore@instagram.com', 9993099953, 'assets/community/mabers/1653479267P_20181225_122853.jpg', 'Mr-Chetan-Singh-Rathore-628e1763b22e3', 0, '2022-05-25 11:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `nationalofiice`
--

CREATE TABLE `nationalofiice` (
  `id` bigint(200) NOT NULL,
  `socid` bigint(200) NOT NULL,
  `officename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `officergnumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `officeyears` date DEFAULT NULL,
  `officedesc` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(100) NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `officelandmark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `officmobile` varchar(280) COLLATE utf8_unicode_ci NOT NULL,
  `officelandline` varchar(280) COLLATE utf8_unicode_ci NOT NULL,
  `officehemail` varchar(280) COLLATE utf8_unicode_ci NOT NULL,
  `officefacebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `officeinstagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `officeimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `officslug` varchar(270) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nationalofiice`
--

INSERT INTO `nationalofiice` (`id`, `socid`, `officename`, `officergnumber`, `officeyears`, `officedesc`, `country`, `state`, `district`, `city`, `pincode`, `address`, `officelandmark`, `officmobile`, `officelandline`, `officehemail`, `officefacebook`, `officeinstagram`, `officeimage`, `officslug`, `status`, `date`) VALUES
(1, 5, 'Ntional', 'sd123', '2022-03-09', '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham</p>\r\n', 'India', ' Madhya Pradesh', 'Dhar', 'dfv', 456333, '1023 adhare', 'outer', '[\"9874563210\"]', '[\"8523697408\"]', '[\"df@gmail.com\"]', 'https://www.lipsum.com/', 'https://www.lipsum.com/', 'assets/community/officeimage/1646745563Logo_(10).png', 'sd-62272c3abb865', 0, '2022-03-08 10:13:14'),
(2, 10, 'Akhil Bhartiya Kshtriya Rathore Mahasabha', 'RABKRM-16600-01-2002', '2002-11-11', '<p>1.5 km from the new bus stand and near Nagar Ghat, Vishwakarma Panchal Dharamshala offers two and three bedded rooms as well as dormitory accommodation. It is affordable, and suited for families and groups.</p>\r\n\r\n<p>It is believed that&nbsp; prayers offered here at Omkareshwar Jyotirling, also give you the blessings of Kedarnath and Panch Kedar. Besides the Jyotirling temple, there are many other temples and places of religious importance to visit in Omkareshwar. Most of them are quite near Vishwakarma Panchal Dharamshala.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Indore Railway Station - 79 km</li>\r\n	<li>Indore Airport - 84 km</li>\r\n	<li>Ujjain Airport - 134 km</li>\r\n	<li>Ujjain Railway Station - 139 km</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'India', ' Delhi ', 'New Delhi', 'Delhi', 452001, '2930 Veer Durgadas Sqaure, M.G. Road', 'Opposite Central Finance Minister Bunglow', '[\"9893098930\"]', '[\"0112486184\"]', '[\"akhilbhartiyakshtriyarathoremahasabha@gmail.com\"]', 'akhilbhartiyakshtriyarathoremahasabha@facebook.com', 'akhilbhartiyakshtriyarathoremahasabha@instagram.com', 'assets/community/officeimage/1653294032D1.jpg', 'Akhil-Bhartiya-Kshtriya-Rathore-Mahasabha-628b43d0e7bba', 0, '2022-05-23 08:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `newpaperoffice`
--

CREATE TABLE `newpaperoffice` (
  `id` bigint(200) NOT NULL,
  `nlogid` bigint(200) NOT NULL,
  `npofficename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npofficerg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nprgyrars` date DEFAULT NULL,
  `npdec` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npcountry` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npstate` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npdistrict` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npcity` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nppincode` int(100) DEFAULT NULL,
  `npaddress` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npofficelandmark` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npofficmobile` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npofficelandline` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npofficehemail` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npofficefacebook` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npofficeinstagram` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npofficeimage` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnailimage` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paperpdf` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npslug` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newpaperoffice`
--

INSERT INTO `newpaperoffice` (`id`, `nlogid`, `npofficename`, `npofficerg`, `nprgyrars`, `npdec`, `npcountry`, `npstate`, `npdistrict`, `npcity`, `nppincode`, `npaddress`, `npofficelandmark`, `npofficmobile`, `npofficelandline`, `npofficehemail`, `npofficefacebook`, `npofficeinstagram`, `npofficeimage`, `thumbnailimage`, `paperpdf`, `npslug`, `status`, `date`) VALUES
(1, 6, 'natioal newpaper', 'rg@1234', '2022-03-15', '<p>haapy holi</p>\r\n', '', NULL, NULL, 'ghu khandwa', 450000, '01045 sdky', '102 sdky', '[\"78965412328\"]', '[\"987453209\"]', '[\"sh@gmail.com\"]', 'http://localhost/Rathores/newpaperoffice', 'http://localhost/Rathores/newpaperoffice', 'assets/News/npofficeimage/1647763987ref2.png', 'assets/News/thumbnailimage/16471749570001.jpg', 'assets/News/pdf/1647174957certificate.pdf', 'natioal-paper-622de52d7ec96', 0, '2022-03-13 12:35:57'),
(2, 13, 'Rathore Patrika Indore', 'RP30082016', '2016-08-30', '<p>1.5 km from the new bus stand and near Nagar Ghat, Vishwakarma Panchal Dharamshala offers two and three bedded rooms as well as dormitory accommodation. It is affordable, and suited for families and groups.</p>\r\n\r\n<p>It is believed that&nbsp; prayers offered here at Omkareshwar Jyotirling, also give you the blessings of Kedarnath and Panch Kedar. Besides the Jyotirling temple, there are many other temples and places of religious importance to visit in Omkareshwar. Most of them are quite near<', 'India', ' Madhya Pradesh', 'Indore', 'Indore', 452007, '60 Biyabani', 'Mahunaka Road', '[\"9827198271\",\"9827198271\"]', '[\"07312560096\",\"07312560099\"]', '[\"rathorepatrikaindore@gmail.com\"]', 'rathorepatrikaindore@facebook.com', 'rathorepatrikaindore@instagram.com', 'assets/News/npofficeimage/165348235303.jpg', 'assets/News/thumbnailimage/16534823531994-print-ad-1-1280-579-bcb73c77.jpg', 'assets/News/pdf/1653482353N3008002295.pdf', 'Rathore-Patrika-Indore-628e23716bd8a', 0, '2022-05-25 12:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `newsmaber`
--

CREATE TABLE `newsmaber` (
  `id` bigint(200) NOT NULL,
  `newslogid` bigint(200) NOT NULL,
  `newsid` bigint(200) NOT NULL,
  `memberpost` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `membername` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `membergander` text COLLATE utf8_unicode_ci NOT NULL,
  `membernumber` bigint(150) NOT NULL,
  `memberemailid` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `memberimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `memberfb` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `memberinsta` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `memberwtnum` int(100) NOT NULL,
  `memberslug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `satats` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newsmaber`
--

INSERT INTO `newsmaber` (`id`, `newslogid`, `newsid`, `memberpost`, `membername`, `membergander`, `membernumber`, `memberemailid`, `country`, `state`, `district`, `memberimage`, `memberfb`, `memberinsta`, `memberwtnum`, `memberslug`, `satats`, `date`) VALUES
(1, 1, 6, 'Manager', 'Mr.shubham kanungo', 'male', 8956231470, 'sh@gmail.com', 'India', ' Madhya Pradesh', 'Indore', 'assets/News/newsmabers/1647784849WhatsApp_Image_2021-12-12_at_12_56_59.jpeg', 'http://localhost/Rathores/newspapermambers/1', 'http://localhost/Rathores/newspapermambers/1', 2147483647, 'Mr-shubham-6237278910ed2', 0, '2022-03-20 13:09:29'),
(2, 2, 13, 'Manager', 'Sandeep Rathore', 'male', 9993299932, 'sandeeprathore@gmail.com', 'India', ' Madhya Pradesh', 'Indore', 'assets/News/newsmabers/1653482838B6.jpg', 'sandeeprathore@facebook.com', 'sandeeprathore@instagram.com', 2147483647, 'Sandeep-Rathore-628e2556e0829', 0, '2022-05-25 12:47:18'),
(3, 2, 13, 'Chief-Reporter', 'Mr. Rahul Rathore', 'youth', 9993299933, 'rahulrathore@gmail.com', 'India', ' Madhya Pradesh', 'Indore', 'assets/News/newsmabers/1653482920men_4.jpg', 'rahulrathore@facebook.com', 'rahulrathore@instagram.com', 2147483647, 'Mr-Rahul-Rathore-628e25a8191ec', 0, '2022-05-25 12:48:40'),
(4, 2, 13, 'Reporter', 'Mrs Aradhana Rathore', 'female', 9993299934, 'aradhanarathore@gmail.com', 'India', ' Madhya Pradesh', 'Gwalior', 'assets/News/newsmabers/1653483020womens_board_1.jpg', 'aradhanarathore@facebook.com', 'aradhanarathore@instagram.com', 2147483647, 'Mrs-Aradhana-Rathore-628e260c06a13', 0, '2022-05-25 12:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `newspaper`
--

CREATE TABLE `newspaper` (
  `id` int(200) NOT NULL,
  `newsoffice_id` int(200) NOT NULL,
  `year` bigint(200) NOT NULL,
  `paper_thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paper` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cerated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` bigint(200) NOT NULL,
  `ocid` bigint(200) NOT NULL,
  `officename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `officergnumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `officeyears` date DEFAULT NULL,
  `officedesc` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(100) NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `officelandmark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `officmobile` varchar(280) COLLATE utf8_unicode_ci NOT NULL,
  `officelandline` varchar(280) COLLATE utf8_unicode_ci NOT NULL,
  `officehemail` varchar(280) COLLATE utf8_unicode_ci NOT NULL,
  `officefacebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `officeinstagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `officeimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `officslug` varchar(270) COLLATE utf8_unicode_ci NOT NULL,
  `all` text COLLATE utf8_unicode_ci NOT NULL DEFAULT 'All',
  `status` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `ocid`, `officename`, `officergnumber`, `officeyears`, `officedesc`, `country`, `state`, `district`, `city`, `pincode`, `address`, `officelandmark`, `officmobile`, `officelandline`, `officehemail`, `officefacebook`, `officeinstagram`, `officeimage`, `officslug`, `all`, `status`, `date`) VALUES
(1, 3, 'sd', 'Rh@1452', NULL, '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham</p>\r\n', 'India', ' Madhya Pradesh', 'Katni', 'katni', 450000, '105 pajbi ', 'panjbi', '[\"9874563210\"]', '[\"8523697408\"]', '[\"df@gmail.com\"]', 'https://www.lipsum.com/', 'https://www.lipsum.com/', 'assets/community/officeimage/1646745296logo_(2).jpg', 'rh-621b96a1e2e8a', 'All', 0, '2022-02-27 15:20:01'),
(2, 3, 'shubham', 'Rh@1452', NULL, '<p>The state is a form of human association distinguished from other social groups by its purpose, the establishment of order and security; its methods, the laws and their enforcement; its territory, the area of jurisdiction or geographic boundaries; and finally by its sovereignty.</p>\r\n\r\n<p>The state is a form of human association distinguished from other social groups by its purpose, the establishment of order and security; its methods, the laws and their enforcement; its territory, the area of jurisdiction or geographic boundaries; and finally by its sovereignty.</p>\r\n', 'India', ' Madhya Pradesh', 'Katni', 'katni', 450000, '105 pajbi ', 'panjbi', '[\"7418529630\",\"987412589630\",\"9865321470\"]', '[\"7896541230\",\"9874563210\",\"7894561230\"]', '[\"s@gmail.com\",\"sda@gmail.com\"]', 'https://funkylife.in/whatsapp-status/', 'https://funkylife.in/whatsapp-status/', 'assets/community/officeimage/1646561154logo_(4).jpg', 'rh-621b96a1e2e8a', 'All', 0, '2022-02-27 15:20:01'),
(3, 5, 'rahore national', 'sh@123', NULL, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'India', ' Madhya Pradesh', 'Katni', 'khandwa', 450000, '105 address', 'near by ', '[\"2589631468\"]', '[\"8956237409\"]', '[\"sh@gmail.com\"]', 'https://www.youtube.com/watch?v=hPQ79rrkziM', 'https://www.youtube.com/watch?v=hPQ79rrkziM', 'assets/usercover/rathore.png', 'rahore-national-6224c8219e1fd', 'All', 0, '2022-03-06 14:41:37'),
(4, 5, 'new national new', 'sh@1423', NULL, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'India', 'Arunachal Pradesh', 'Anjaw', 'kahdwa', 450000, '203 new ationl', 'outer by', '[\"8956231469\"]', '[\"8523697409\"]', '[\"d2@gmail.com\"]', 'https://www.youtube.com/watch?v=hPQ79rrkziM', 'https://www.youtube.com/watch?v=hPQ79rrkziM', 'assets/community/officeimage/1646578153logo_(9).png', 'new-national-new-6224c9e97464d', 'All', 0, '2022-03-06 14:49:13'),
(5, 9, 'Madhya Pradesh Prantiya Kshtriya Rathore Samaj', 'R-16600-01-96', '1996-06-08', '<p>1.5 km from the new bus stand and near Nagar Ghat, Vishwakarma Panchal Dharamshala offers two and three bedded rooms as well as dormitory accommodation. It is affordable, and suited for families and groups.</p>\r\n\r\n<p>It is believed that&nbsp; prayers offered here at Omkareshwar Jyotirling, also give you the blessings of Kedarnath and Panch Kedar. Besides the Jyotirling temple, there are many other temples and places of religious importance to visit in Omkareshwar. Most of them are quite near Vishwakarma Panchal Dharamshala.&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Indore Railway Station - 79 km</li>\r\n	<li>Indore Airport - 84 km</li>\r\n	<li>Ujjain Airport - 134 km</li>\r\n	<li>Ujjain Railway Station - 139 km</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'India', ' Madhya Pradesh', 'Bhopal', 'Bhopal', 455001, '794 Arera Colony', 'Near St Joseph School', '[\"9826098260\"]', '[\"07552486184\"]', '[\"mpprantiyarathoresamajbhopal@gmail.com\"]', 'mpprantiyarathoresamajbhopal@facebook.com', 'mpprantiyarathoresamajbhopal@instagram.com', 'assets/community/officeimage/1653292466gardern_9.jpg', 'Madhya-Pradesh-Prantiya-Kshtriya-Rathore-Samaj-628b30b139a71', 'All', 0, '2022-05-23 06:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` bigint(200) NOT NULL,
  `sollogid` bigint(200) NOT NULL,
  `socialname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `socialyear` date NOT NULL,
  `socialdec` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` bigint(20) NOT NULL,
  `sociallandmark` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `officmobile` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`officmobile`)),
  `officelandline` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`officelandline`)),
  `officehemail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`officehemail`)),
  `socialfacebook` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `socialinstagram` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `profileimage` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `socialslug` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `sollogid`, `socialname`, `socialyear`, `socialdec`, `country`, `state`, `district`, `city`, `pincode`, `sociallandmark`, `officmobile`, `officelandline`, `officehemail`, `socialfacebook`, `socialinstagram`, `profileimage`, `socialslug`, `status`, `date`) VALUES
(1, 7, 'jay shri ram ji', '2022-04-11', 'jay shri ram ji nad jay ram jay ra', 'India', ' Madhya Pradesh', 'Katni', 'khandwa', 450001, '105panjab', '[\"852369741\",\"9874563209\"]', '[\"72033\",\"755030\"]', '[\"shu@g.com\",\"shg@g.com\"]', 'https://fontawesome.com/v5/icons/newspaper?s=solid', 'https://fontawesome.com/v5/icons/newspaper?s=solid', 'assets/social/socialgroup/1650020398WhatsApp_Image_2022-04-12_at_9_38_16_AM.jpeg', 'jay-shri-ram-6252b34452d6c', 0, '2022-04-10 10:36:52'),
(2, 11, 'Ubharata Bharat Mission', '2016-09-18', '813 Vivekananad Colonly', 'India', ' Madhya Pradesh', 'Ujjain', 'Ujjain', 453007, ' Near Sindhi Cololy', '[\"9926099260\",\"9926099261\"]', '[\"07322560098\",\"07322560098\"]', '[\"ubharatabharatmissionujjain@gmail.com\"]', 'ubharatabharatmissionujjain@facebook.com', 'ubharatabharatmissionujjain@instagram.com', 'assets/social/socialgroup/1653480683Community-Building-Stages.jpg', 'Ubharata-Bharat-Mission-628e1ceb097d1', 0, '2022-05-25 12:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `soicalmaber`
--

CREATE TABLE `soicalmaber` (
  `id` int(120) NOT NULL,
  `socaiid` int(120) NOT NULL,
  `sologid` int(120) NOT NULL,
  `name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `post` text COLLATE utf8_unicode_ci NOT NULL,
  `gender` text COLLATE utf8_unicode_ci NOT NULL,
  `mobile` bigint(200) NOT NULL,
  `emailid` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `facboock` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  `whatsappno` bigint(200) NOT NULL,
  `memberslug` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `soicalmaber`
--

INSERT INTO `soicalmaber` (`id`, `socaiid`, `sologid`, `name`, `post`, `gender`, `mobile`, `emailid`, `country`, `state`, `district`, `image`, `facboock`, `instagram`, `whatsappno`, `memberslug`, `status`, `date`) VALUES
(1, 1, 7, 'Mr.shubham kanungo', 'Member', 'male', 89895623147, 'shubhamka@gmail.com', 'India', ' Madhya Pradesh', 'Katni', 'assets/social/socialmember/1650004179istockphoto-1307615661-170667a.jpg', 'https://www.webslesson.info/2017/08/online-invoice-system-by-using-php-jquery.html', 'https://www.webslesson.info/2017/08/online-invoice-system-by-using-php-jquery.html', 8956231470, 'Mr-shubham-625910d392b4c', 0, '2022-04-15 11:59:39'),
(2, 2, 11, 'Mr R N Rathore', 'Member', 'male', 99993099930, 'rnrathore@gmail.com', 'India', ' Madhya Pradesh', 'Ujjain', 'assets/social/socialmember/1653481238men_4.jpg', 'rnrathore@facebook.com', 'rnrathore@instagram.com', 99993099930, 'Mr-R-N-Rathore-628e1f16d3c3e', 0, '2022-05-25 17:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(50) NOT NULL,
  `Fristname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Lastname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Mobilenumber` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `addharname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Belongs` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Bloodgroup` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Donate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Durgadasji` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `proimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `liked_profiles_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0:Active,1:DEactive',
  `userrole` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Fristname`, `Lastname`, `Email`, `Mobilenumber`, `addharname`, `password`, `Gender`, `Belongs`, `Bloodgroup`, `Donate`, `Durgadasji`, `images`, `proimage`, `liked_profiles_id`, `status`, `userrole`, `date`) VALUES
(1, 'shubham ', 'kanungo', 'shubham@gmail.com', '7412589630', '74125896320', '3b6beb51e76816e632a40d440eab0097', 'Male', 'Kshtriya Rathore/Rathod', '(A+)', 'Yes', 'yes', 'Upload Fail', 'assets/proimg/1.png', '[\"1\",\"4\",\"5\",\"3\",\"7\"]', 1, 1, '2021-11-21 06:31:14'),
(2, 'shubhamsh', 'kanungo', 's@gmail.com', '89897412589', '47855555555', 'c8ffe9a587b126f152ed3d89a146b445', 'Male', 'Kshtriya Rathore/Rathod', '(A+)', 'Yes', 'yes', 'assets/useraddharimg/1638028582modal-new.jpg', 'assets/proimg/1638028582modal-new.jpg', '[\"3\",\"5\"]', 1, 1, '2021-11-27 15:56:22'),
(3, 'swer', 'sader', 'ssd@gmail.com', '7412589630', '7412589633', '6d5323c6c3b57b082f840378cb9274ab', 'Male', 'Kshtriya Rathore/Rathod', '(A+)', 'Yes', 'yes', 'assets/useraddharimg/1638029157image_(1).png', 'assets/proimg/1638029157sds-imresizer_(1).jpeg', '0', 0, 1, '2021-11-27 16:05:57'),
(4, 'Rahul ', 'Rathore', 'rahul@gmail.com', '9039232356', '123456789012', '5f4dcc3b5aa765d61d8327deb882cf99', 'Male', 'Kshtriya Teli Rathore/Rathod', '(A+)', 'No', 'yes', 'assets/useraddharimg/1652535439Banner_Image.png', 'assets/proimg/1652535439RB_Logo.JPG', '', 1, 1, '2022-05-14 13:37:19'),
(5, 'Sandeep', 'Rathore', 'sandeep@gmail.com', '7879610610', '234567890123', '5f4dcc3b5aa765d61d8327deb882cf99', 'Male', 'Kshtriya Rathore/Rathod', '(A+)', 'No', 'yes', 'assets/useraddharimg/1652593443Adhar.jpg', 'assets/proimg/1652593443B1.jpg', '[\"7\",\"6\"]', 1, 1, '2022-05-15 05:44:04'),
(6, 'Seema', 'Rathore', 'seema@gmail.com', '9827723652', '123456789123', '5f4dcc3b5aa765d61d8327deb882cf99', 'Female', 'Kshtriya Teli Rathore/Rathod', '(O+)', 'Yes', 'yes', 'assets/useraddharimg/1653136844Adhar_Card.jpg', 'assets/proimg/1653136844G24.jpg', '', 1, 1, '2022-05-21 12:40:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birthday`
--
ALTER TABLE `birthday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_gallery`
--
ALTER TABLE `business_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_information`
--
ALTER TABLE `business_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `condolence`
--
ALTER TABLE `condolence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desiredpartner`
--
ALTER TABLE `desiredpartner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educationinformation`
--
ALTER TABLE `educationinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospice`
--
ALTER TABLE `hospice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospicegarllay`
--
ALTER TABLE `hospicegarllay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospicemeber`
--
ALTER TABLE `hospicemeber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mabers`
--
ALTER TABLE `mabers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrimonyfamilyinfo`
--
ALTER TABLE `matrimonyfamilyinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrimonyuser`
--
ALTER TABLE `matrimonyuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metromonyusergallery`
--
ALTER TABLE `metromonyusergallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nationalmabers`
--
ALTER TABLE `nationalmabers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nationalofiice`
--
ALTER TABLE `nationalofiice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newpaperoffice`
--
ALTER TABLE `newpaperoffice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsmaber`
--
ALTER TABLE `newsmaber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newspaper`
--
ALTER TABLE `newspaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soicalmaber`
--
ALTER TABLE `soicalmaber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthday`
--
ALTER TABLE `birthday`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `business_gallery`
--
ALTER TABLE `business_gallery`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `business_information`
--
ALTER TABLE `business_information`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `cid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `condolence`
--
ALTER TABLE `condolence`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `desiredpartner`
--
ALTER TABLE `desiredpartner`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `educationinformation`
--
ALTER TABLE `educationinformation`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospice`
--
ALTER TABLE `hospice`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hospicegarllay`
--
ALTER TABLE `hospicegarllay`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hospicemeber`
--
ALTER TABLE `hospicemeber`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `mabers`
--
ALTER TABLE `mabers`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `matrimonyfamilyinfo`
--
ALTER TABLE `matrimonyfamilyinfo`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matrimonyuser`
--
ALTER TABLE `matrimonyuser`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `metromonyusergallery`
--
ALTER TABLE `metromonyusergallery`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `nationalmabers`
--
ALTER TABLE `nationalmabers`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nationalofiice`
--
ALTER TABLE `nationalofiice`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newpaperoffice`
--
ALTER TABLE `newpaperoffice`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsmaber`
--
ALTER TABLE `newsmaber`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newspaper`
--
ALTER TABLE `newspaper`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soicalmaber`
--
ALTER TABLE `soicalmaber`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
