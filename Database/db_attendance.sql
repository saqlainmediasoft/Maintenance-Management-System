-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2014 at 07:02 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lati` varchar(10) DEFAULT NULL,
  `longi` varchar(10) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `time` varchar(15) DEFAULT NULL,
  `date_time` varchar(25) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `lati`, `longi`, `date`, `time`, `date_time`, `user_id`, `type`) VALUES
(1, '2.2572849', '102.273593', '2014-04-09', '04:44:07 PM', '2014-04-09 04:44:07 PM', 1, 'restaurant'),
(2, '2.2672782', '102.373593', '2014-04-09', '04:54:12 PM', '2014-04-09 04:54:12 PM', 1, 'restaurant'),
(3, '2.2773196', '102.473583', '2014-04-09', '05:42:39 PM', '2014-04-09 05:42:39 PM', 1, 'restaurant'),
(4, '2.2872375', '102.573600', '2014-04-09', '05:55:21 PM', '2014-04-09 05:55:21 PM', 1, 'restaurant'),
(5, '2.2972682', '102.673595', '2014-04-09', '05:56:57 PM', '2014-04-09 05:56:57 PM', 1, 'restaurant'),
(6, '2.3072303', '102.773603', '2014-04-09', '06:01:07 PM', '2014-04-09 06:01:07 PM', 1, 'restaurant'),
(7, '2.2572903', '102.273589', '2014-04-09', '06:11:45 PM', '2014-04-09 06:11:45 PM', 1, 'restaurant'),
(8, '2.2572392', '102.273600', '2014-04-10', '09:04:41 AM', '2014-04-10 09:04:41 AM', 1, 'restaurant'),
(9, '2.2572932', '102.273575', '2014-04-10', '09:14:08 AM', '2014-04-10 09:14:08 AM', 1, 'restaurant'),
(10, '2.2572547', '102.273586', '2014-04-10', '09:14:26 AM', '2014-04-10 09:14:26 AM', 1, 'restaurant'),
(11, '2.2573189', '102.273584', '2014-04-10', '09:56:55 AM', '2014-04-10 09:56:55 AM', 1, 'restaurant'),
(12, '2.2572444', '102.273599', '2014-04-10', '09:57:16 AM', '2014-04-10 09:57:16 AM', 1, 'restaurant'),
(13, '2.257237', '102.273602', '2014-04-10', '10:30:56 AM', '2014-04-10 10:30:56 AM', 1, 'restaurant'),
(14, '2.2572358', '102.273602', '2014-04-10', '11:27:02 AM', '2014-04-10 11:27:02 AM', 1, 'restaurant'),
(15, '2.257276', '102.273596', '2014-04-10', '11:50:04 AM', '2014-04-10 11:50:04 AM', 1, 'restaurant'),
(16, '2.2572482', '102.273597', '2014-04-10', '11:51:42 AM', '2014-04-10 11:51:42 AM', 1, 'restaurant'),
(17, '2.2572506', '102.273598', '2014-04-10', '04:42:58 PM', '2014-04-10 04:42:58 PM', 1, 'restaurant'),
(18, '2.2572506', '102.273598', '2014-04-11', '12:04:27 PM', '2014-04-11 12:04:27 PM', 1, 'restaurant'),
(19, '2.2573059', '102.273585', '2014-04-11', '02:33:45 PM', '2014-04-11 02:33:45 PM', 1, 'restaurant'),
(20, '2.2573278', '102.273583', '2014-04-11', '04:14:39 PM', '2014-04-11 04:14:39 PM', 1, 'restaurant'),
(21, '2.2573162', '102.273589', '2014-04-11', '04:35:37 PM', '2014-04-11 04:35:37 PM', 1, 'restaurant'),
(22, '2.2572458', '102.273594', '2014-04-11', '05:48:52 PM', '2014-04-11 05:48:52 PM', 1, 'restaurant'),
(23, '2.2573103', '102.273587', '2014-04-12', '09:06:12 AM', '2014-04-12 09:06:12 AM', 1, 'restaurant'),
(24, '2.2572256', '102.273605', '2014-04-12', '10:41:50 AM', '2014-04-12 10:41:50 AM', 2, 'restaurant'),
(25, '2.2573421', '102.273582', '2014-04-12', '10:42:00 AM', '2014-04-12 10:42:00 AM', 2, 'restaurant'),
(26, '2.2572169', '102.273606', '2014-04-12', '10:42:08 AM', '2014-04-12 10:42:08 AM', 2, 'restaurant'),
(27, '2.2572998', '102.273587', '2014-04-12', '11:03:36 AM', '2014-04-12 11:03:36 AM', 3, 'restaurant'),
(28, '2.2572065', '102.273612', '2014-04-12', '12:08:31 PM', '2014-04-12 12:08:31 PM', 1, 'restaurant'),
(29, '2.2573097', '102.273588', '2014-04-12', '12:54:20 PM', '2014-04-12 12:54:20 PM', 1, 'restaurant'),
(30, '2.2572395', '102.273600', '2014-04-12', '01:14:29 PM', '2014-04-12 01:14:29 PM', 1, 'restaurant'),
(31, '2.2572515', '102.273602', '2014-04-12', '01:19:09 PM', '2014-04-12 01:19:09 PM', 1, 'restaurant'),
(32, '2.2572819', '102.273594', '2014-04-12', '01:19:15 PM', '2014-04-12 01:19:15 PM', 1, 'restaurant'),
(33, '2.2573091', '102.273589', '2014-04-12', '01:27:20 PM', '2014-04-12 01:27:20 PM', 1, 'restaurant'),
(34, '2.2573243', '102.273586', '2014-04-14', '10:19:27 AM', '2014-04-14 10:19:27 AM', 1, 'restaurant'),
(35, '2.2573112', '102.273587', '2014-04-14', '10:34:43 AM', '2014-04-14 10:34:43 AM', 2, 'restaurant'),
(36, '2.2573175', '102.273585', '2014-04-14', '11:13:11 AM', '2014-04-14 11:13:11 AM', 1, 'restaurant'),
(37, '2.2573146', '102.273588', '2014-04-14', '11:16:23 AM', '2014-04-14 11:16:23 AM', 1, 'restaurant'),
(38, '2.2573216', '102.273587', '2014-04-14', '11:16:39 AM', '2014-04-14 11:16:39 AM', 1, 'restaurant'),
(39, '2.257352', '102.273580', '2014-04-21', '09:54:03 AM', '2014-04-21 09:54:03 AM', 1, 'restaurant'),
(40, '2.2572025', '102.273287', '2014-04-21', '11:39:51 AM', '2014-04-21 11:39:51 AM', 5, 'restaurant'),
(41, '2.2572614', '102.273271', '2014-04-21', '12:27:57 PM', '2014-04-21 12:27:57 PM', 3, 'restaurant'),
(42, '2.2571921', '102.273359', '2014-04-22', '12:53:53 PM', '2014-04-22 12:53:53 PM', 3, 'restaurant'),
(43, '2.2572029', '102.273295', '2014-04-22', '12:56:27 PM', '2014-04-22 12:56:27 PM', 3, 'restaurant'),
(44, '2.2571911', '102.273380', '2014-04-28', '11:25:17 AM', '2014-04-28 11:25:17 AM', 1, 'restaurant'),
(45, '2.2573383', '102.273368', '2014-05-02', '03:04:21 PM', '2014-05-02 03:04:21 PM', 1, 'restaurant'),
(46, '2.2572925', '102.273429', '2014-05-02', '04:30:48 PM', '2014-05-02 04:30:48 PM', 1, NULL),
(47, '2.2573946', '102.273466', '2014-05-14', '09:49:25 AM', '2014-05-14 09:49:25 AM', 1, NULL),
(48, '2.2572864', '102.273265', '2014-05-14', '10:01:03 AM', '2014-05-14 10:01:03 AM', 1, NULL),
(49, '2.2573063', '102.273439', '2014-05-14', '11:39:38 AM', '2014-05-14 11:39:38 AM', 1, NULL),
(50, '2.2573088', '102.273289', '2014-06-16', '10:16:36 AM', '2014-06-16 10:16:36 AM', 1, NULL),
(51, '2.2573024', '102.273325', '2014-06-16', '12:19:52 PM', '2014-06-16 12:19:52 PM', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fault_list`
--

CREATE TABLE IF NOT EXISTS `tbl_fault_list` (
  `fault_id` int(11) NOT NULL AUTO_INCREMENT,
  `fault_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`fault_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_fault_list`
--

INSERT INTO `tbl_fault_list` (`fault_id`, `fault_name`) VALUES
(1, 'Bulb Halogen'),
(2, 'Fius'),
(3, 'LED'),
(4, 'Tiang Vertical'),
(5, 'Tiang Overhead'),
(6, 'Kabel'),
(7, 'Loop Sensor'),
(8, 'Perkakas Alat'),
(9, 'Lain Lain');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fault_report`
--

CREATE TABLE IF NOT EXISTS `tbl_fault_report` (
  `rep_id` int(11) NOT NULL AUTO_INCREMENT,
  `junction_name` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `reportno` varchar(50) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `time` varchar(15) DEFAULT NULL,
  `date_time` varchar(25) DEFAULT NULL,
  `fault_id` int(11) DEFAULT NULL,
  `junc_id` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT '0',
  PRIMARY KEY (`rep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `tbl_fault_report`
--

INSERT INTO `tbl_fault_report` (`rep_id`, `junction_name`, `description`, `reportno`, `date`, `time`, `date_time`, `fault_id`, `junc_id`, `user_id`) VALUES
(1, 'S4 UiTM Permatang Pauh, Sebrang Perai', 'Working Fine', '1212', '2014-04-11', '12:33:26 PM', '2014-04-11 12:33:26 PM', 1, 1, 1),
(2, 'S4 UiTM Permatang Pauh, Sebrang Perai', 'Working Fine', '2581', '2014-04-11', '12:34:14 PM', '2014-04-11 12:34:14 PM', 2, 2, 2),
(3, 'S4 UiTM Permatang Pauh, Sebrang Perai', 'OK', '125128', '2014-04-11', '02:19:26 PM', '2014-04-11 02:19:26 PM', 3, 3, 1),
(4, 'S4 UiTM Permatang Pauh, Sebrang Perai', 'OK OK', '125128', '2014-04-11', '02:19:47 PM', '2014-04-11 02:19:47 PM', 4, 4, 2),
(5, 'S4 UiTM Permatang Pauh, Sebrang Perai', 'OK OK', '125128', '2014-04-11', '02:20:41 PM', '2014-04-11 02:20:41 PM', 5, 5, 1),
(6, 'S4 UiTM Permatang Pauh, Sebrang Perai', 'change LED', '4578', '2014-04-11', '02:24:46 PM', '2014-04-11 02:24:46 PM', 6, 6, 2),
(7, 'S4 UiTM Permatang Pauh, Sebrang Perai', 'Repair DIM', '1587', '2014-04-11', '02:29:11 PM', '2014-04-11 02:29:11 PM', 7, 7, 3),
(8, 'S4 UiTM Permatang Pauh, Sebrang Perai', 'change the Detector Card', '441522', '2014-04-11', '02:34:16 PM', '2014-04-11 02:34:16 PM', 8, 8, 4),
(9, 'S4 UiTM Permatang Pauh, Sebrang Perai', 'ASDFASDF', '34896', '2014-04-11', '03:21:29 PM', '2014-04-11 03:21:29 PM', 9, 9, 5),
(10, 'S3 Permatang Tinggi  Pulau Pinang ROB-6', 'LED Rosak', '0124578', '2014-04-11', '04:37:44 PM', '2014-04-11 04:37:44 PM', 1, 10, 6),
(11, 'S3 Perindustrian Bkt Minyak, Seberang Perai Tengah', 'LED Rosak', '1458', '2014-04-11', '05:47:14 PM', '2014-04-11 05:47:14 PM', 2, 11, 7),
(12, 'S4 Jalan Sg.Puyu / Bagan Lalang, Seberang Perai Utara', 'LED Rosak', '14586', '2014-04-11', '05:47:58 PM', '2014-04-11 05:47:58 PM', 3, 12, 8),
(13, 'S4 Jalan Raja Uda, Seberang Perai Utara', 'kabel breaks', '15489', '2014-04-12', '09:08:49 AM', '2014-04-12 09:08:49 AM', 4, 13, 9),
(14, 'S3 Valdor Sungai, Sg.Bakap, Seberang Perai Selatan', 'LED ROSAK AGAIN', '1245', '2014-04-12', '10:31:54 AM', '2014-04-12 10:31:54 AM', 5, 22, 1),
(15, 'S4 Jalan Raja Uda, Seberang Perai Utara', 'Lamp cable problem', '369852', '2014-04-12', '10:33:46 AM', '2014-04-12 10:33:46 AM', 6, 21, 2),
(16, 'S3 Jalan Sungai Bakap (D) ROB-10', 'other problems', '63598', '2014-04-12', '11:04:52 AM', '2014-04-12 11:04:52 AM', 7, 22, 3),
(17, 'S4 Jalan Tasek Mutiara 1 ', 'testing', '147852369', '2014-04-12', '11:25:00 AM', '2014-04-12 11:25:00 AM', 8, 21, 3),
(18, 'S4 UiTM Permatang Pauh, Sebrang Perai', 'dddddd', '15426', '2014-04-12', '11:52:22 AM', '2014-04-12 11:52:22 AM', 9, 20, 2),
(20, 'S3 Valdor Sungai, Sg.Bakap, Seberang Perai Selatan', 'asdfa', '15426', '2014-04-12', '12:15:42 PM', '2014-04-12 12:15:42 PM', 1, 19, 5),
(21, 'S4 Jalan Raja Uda, Seberang Perai Utara', 'asdf', '15426', '2014-04-12', '12:16:19 PM', '2014-04-12 12:16:19 PM', 2, 18, 6),
(22, 'S4 Permatang Buluh', 'asdf', '15426', '2014-04-12', '12:17:11 PM', '2014-04-12 12:17:11 PM', 3, 17, 7),
(23, 'S3 Permatang Tinggi  Pulau Pinang ROB-6', 'asdf', '15426', '2014-04-12', '01:00:16 PM', '2014-04-12 01:00:16 PM', 4, 16, 2),
(24, 'S3 Permatang Tinggi  Pulau Pinang ROB-6', 'OK', '457821', '2014-04-12', '01:01:10 PM', '2014-04-12 01:01:10 PM', 5, 15, 4),
(25, 'S3 Permatang Tinggi  Pulau Pinang ROB-6', 'OK', '457821', '2014-04-12', '01:02:02 PM', '2014-04-12 01:02:02 PM', 6, 14, 8),
(26, 'S3 Permatang Tinggi  Pulau Pinang ROB-6', 'OK', '457821', '2014-04-12', '01:02:22 PM', '2014-04-12 01:02:22 PM', 7, 13, 1),
(27, 'S3 Valdor Sungai, Sg.Bakap, Seberang Perai Selatan', 'hdgrhr', '1475', '2014-04-12', '01:28:25 PM', '2014-04-12 01:28:25 PM', 8, 12, 1),
(28, 'S3 Valdor Sungai, Sg.Bakap, Seberang Perai Selatan', 'hdgrhr', '1475', '2014-04-12', '01:28:49 PM', '2014-04-12 01:28:49 PM', 9, 11, 1),
(29, 'S3 Valdor Sungai, Sg.Bakap, Seberang Perai Selatan', 'hdgrhr', '1475', '2014-04-12', '01:29:05 PM', '2014-04-12 01:29:05 PM', 1, 10, 1),
(30, 'S3 Permatang Tinggi  Pulau Pinang ROB-6', 'No Fault', '14528', '2014-04-14', '10:20:21 AM', '2014-04-14 10:20:21 AM', 2, 9, 1),
(31, 'S3 Permatang Tinggi  Pulau Pinang ROB-6', 'No Fault', '14528', '2014-04-14', '10:24:30 AM', '2014-04-14 10:24:30 AM', 3, 8, 1),
(32, 'S3 Permatang Tinggi  Pulau Pinang ROB-6', 'No Fault', '14528', '2014-04-14', '10:25:19 AM', '2014-04-14 10:25:19 AM', 4, 7, 1),
(33, 'S4 Permatang Buluh', 'No Fault', '3694', '2014-04-14', '10:28:45 AM', '2014-04-14 10:28:45 AM', 5, 4, 1),
(34, 'S4 Permatang Buluh', 'No Fault', '3694', '2014-04-14', '10:29:18 AM', '2014-04-14 10:29:18 AM', 6, 5, 1),
(35, 'S4 Jalan Sg.Puyu / Bagan Lalang, Seberang Perai Utara', 'Checking', '1452', '2014-04-14', '10:32:09 AM', '2014-04-14 10:32:09 AM', 7, 3, 2),
(36, 'S4 Jalan Sg.Puyu / Bagan Lalang, Seberang Perai Utara', 'testing', '1452', '2014-04-14', '10:35:33 AM', '2014-04-14 10:35:33 AM', 8, 1, 2),
(37, 'S3 Jalan Sungai Bakap (D) ROB-10', 'testing', '1452', '2014-04-14', '10:36:23 AM', '2014-04-14 10:36:23 AM', 9, 2, 2),
(38, 'S3 Jalan Sungai Bakap (D) ROB-10', 'testing', '1452', '2014-04-14', '10:39:11 AM', '2014-04-14 10:39:11 AM', 1, 22, 2),
(39, 'S3 Jalan Sungai Bakap (D) ROB-10', 'testing', '2580', '2014-04-14', '10:43:06 AM', '2014-04-14 10:43:06 AM', 2, 10, 2),
(40, 'S3 Jalan Sungai Bakap (D) ROB-10', 'testing', '2580', '2014-04-14', '10:45:54 AM', '2014-04-14 10:45:54 AM', 3, 12, 2),
(41, 'S3 Jalan Sungai Bakap (D) ROB-10', 'testing', '2580', '2014-04-14', '10:46:56 AM', '2014-04-14 10:46:56 AM', 4, 15, 2),
(42, 'S3 Jalan Sungai Bakap (D) ROB-10', 'testing', '2580', '2014-04-14', '10:47:19 AM', '2014-04-14 10:47:19 AM', 5, 18, 2),
(43, 'S3 Jalan Sungai Bakap (D) ROB-10', 'testing', '2580', '2014-04-14', '10:47:50 AM', '2014-04-14 10:47:50 AM', 6, 16, 2),
(44, 'S3 Jalan Sungai Bakap (D) ROB-10', 'testing', '2580', '2014-04-14', '10:50:07 AM', '2014-04-14 10:50:07 AM', 7, 14, 2),
(45, 'S3 Jalan Sungai Bakap (D) ROB-10', 'testing', '2580', '2014-04-14', '10:50:27 AM', '2014-04-14 10:50:27 AM', 8, 22, 2),
(46, 'S3 Jalan Susur Permatang Buluh Ke Pajak Song', 'testing', '2568', '2014-04-14', '10:54:45 AM', '2014-04-14 10:54:45 AM', 9, 2, 2),
(47, 'S4 UiTM Permatang Pauh, Sebrang Perai', 'testing', '2568', '2014-04-14', '10:55:48 AM', '2014-04-14 10:55:48 AM', 1, 4, 2),
(48, 'S4 Sungai Lokan Ke Permatang Tok Bidan-J1, Seberang Perai Utara', 'testing the junction', '2568', '2014-04-14', '10:58:23 AM', '2014-04-14 10:58:23 AM', 2, 12, 2),
(49, 'S4 Permatang Buluh', 'change LED', '1235', '2014-04-14', '11:02:39 AM', '2014-04-14 11:02:39 AM', 3, 3, 2),
(50, 'S3 Perindustrian Bkt Minyak, Seberang Perai Tengah', 'ok', '1245', '2014-04-14', '12:24:48 PM', '2014-04-14 12:24:48 PM', 4, 6, 1),
(51, 'S4 Jalan Raja Uda, Seberang Perai Utara', 'Change Fius', '15426', '2014-04-12', '12:16:19 PM', '2014-04-12 12:16:19 PM', 2, 18, 6),
(52, 'S3 Jalan Sungai Bakap (B) ROB-10', 'change bulb', '1475', '2014-04-21', '10:13:56 AM', '2014-04-21 10:13:56 AM', 1, 21, 1),
(53, 'S3 Jalan Sungai Bakap (B) ROB-10', 'change bulb', '1475', '2014-04-21', '10:19:59 AM', '2014-04-21 10:19:59 AM', 1, 21, 1),
(54, 'S4 UiTM Permatang Pauh, Sebrang Perai', 'change bulb', '1475', '2014-04-21', '10:24:44 AM', '2014-04-21 10:24:44 AM', 2, 4, 1),
(55, 'S4 Permatang Buluh', 'change bulb', '1475', '2014-04-21', '10:27:29 AM', '2014-04-21 10:27:29 AM', 5, 3, 1),
(56, 'S4 Permatang Buluh', 'change bulb', '1475', '2014-04-21', '10:27:39 AM', '2014-04-21 10:27:39 AM', 9, 3, 1),
(57, 'S3 Jalan Susur Permatang Buluh Ke Pajak Song', 'change bulb', '1475', '2014-04-21', '10:34:17 AM', '2014-04-21 10:34:17 AM', 5, 2, 1),
(58, 'S3 Jalan Susur Permatang Buluh Ke Pajak Song', 'change bulb', '1475', '2014-04-21', '10:35:23 AM', '2014-04-21 10:35:23 AM', 2, 2, 1),
(59, 'S4 Jalan Raja Uda, Seberang Perai Utara', 'change bulb', '9865', '2014-04-21', '10:41:03 AM', '2014-04-21 10:41:03 AM', 6, 13, 1),
(60, 'S4 Jalan Raja Uda, Seberang Perai Utara', 'change bulb', '9865', '2014-04-21', '10:41:20 AM', '2014-04-21 10:41:20 AM', 5, 13, 1),
(61, 'S4 Jalan Raja Uda, Seberang Perai Utara', 'change bulb', '9865', '2014-04-21', '10:41:29 AM', '2014-04-21 10:41:29 AM', 1, 13, 1),
(62, 'S3 Jalan Sungai Bakap (D) ROB-10', 'Change Fius', '1478', '2014-04-21', '12:31:33 PM', '2014-04-21 12:31:33 PM', 5, 22, 3),
(63, 'S3 Jalan Sungai Bakap (D) ROB-10', 'Change LED', '1258', '2014-04-21', '12:32:24 PM', '2014-04-21 12:32:24 PM', 3, 22, 3),
(64, 'S3 Jalan Sungai Bakap (D) ROB-10', 'Change LED', '1258', '2014-04-21', '12:32:52 PM', '2014-04-21 12:32:52 PM', 3, 22, 3),
(65, 'S3 Jalan Sungai Bakap (D) ROB-10', 'Change the wiring', '1247', '2014-04-21', '12:33:48 PM', '2014-04-21 12:33:48 PM', 9, 22, 3),
(66, 'S3 Jalan Sungai Bakap (D) ROB-10', 'Change the Fius', '1248', '2014-04-21', '12:34:55 PM', '2014-04-21 12:34:55 PM', 2, 22, 3),
(67, 'S3 Jalan Sungai Bakap (D) ROB-10', 'Change the Fius', '1258', '2014-04-21', '12:35:18 PM', '2014-04-21 12:35:18 PM', 2, 22, 3),
(68, 'S3 Jalan Sungai Bakap (D) ROB-10', 'Change the Fius', '1214', '2014-04-21', '12:35:25 PM', '2014-04-21 12:35:25 PM', 2, 22, 3),
(69, 'S3 Jalan Sungai Bakap (D) ROB-10', 'Change the Fius', '1369', '2014-04-21', '12:35:33 PM', '2014-04-21 12:35:33 PM', 2, 22, 3),
(70, 'S3 Jalan Sungai Bakap (D) ROB-10', 'Change the Kabels', '1368', '2014-04-21', '12:36:04 PM', '2014-04-21 12:36:04 PM', 6, 22, 3),
(71, 'S3 Jalan Sungai Bakap (D) ROB-10', 'Put new tiang', '1367', '2014-04-21', '12:37:47 PM', '2014-04-21 12:37:47 PM', 4, 22, 3),
(72, 'S3 Jalan Perusahaan Perai / Kg.Dock, Seberang Perai', 'change tiang', '1478', '2014-04-22', '12:55:42 PM', '2014-04-22 12:55:42 PM', 4, 5, 3),
(73, 'S3 Permatang Tinggi Pulau Pinang ROB-6', 'dgdgdgdbdbr', '1478', '2014-04-28', '11:25:52 AM', '2014-04-28 11:25:52 AM', 6, 20, 1),
(74, 'S4 Perindustrian Bkt Minyak, Seberang Perai Tengah', 'Tiang Change', '1458', '2014-05-02', '03:05:03 PM', '2014-05-02 03:05:03 PM', 5, 7, 1),
(75, 'S4 Permatang Buluh', 'ittwt', '8645590', '2014-05-14', '10:02:08 AM', '2014-05-14 10:02:08 AM', 1, 3, 1),
(76, 'S4 Permatang Buluh', 'testing', '1452', '2014-05-14', '11:40:49 AM', '2014-05-14 11:40:49 AM', 4, 3, 1),
(77, 'S3 Jalan Sungai Bakap (B) ROB-10', 'changing the Tiang Overhead. ', '14785', '2014-06-16', '10:19:00 AM', '2014-06-16 10:19:00 AM', 5, 21, 1),
(78, 'kgyd', 'yeyut', '5645', '2014-06-16', '12:16:23 PM', '2014-06-16 12:16:23 PM', 3, 0, 1),
(79, 'S3 Jalan Perusahaan Perai / Kg.Dock, Seberang Perai', 'yeyut', '5645', '2014-06-16', '12:16:43 PM', '2014-06-16 12:16:43 PM', 3, 5, 1),
(80, 'S4 Permatang Buluh', 'LED change', '1452', '2014-06-16', '12:21:03 PM', '2014-06-16 12:21:03 PM', 3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_junction`
--

CREATE TABLE IF NOT EXISTS `tbl_junction` (
  `junc_id` int(11) NOT NULL AUTO_INCREMENT,
  `junc_name` varchar(100) DEFAULT NULL,
  `lati` varchar(15) DEFAULT '0',
  `longi` varchar(15) DEFAULT '0',
  PRIMARY KEY (`junc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_junction`
--

INSERT INTO `tbl_junction` (`junc_id`, `junc_name`, `lati`, `longi`) VALUES
(1, 'S4 Jalan Paya Keladi, Seberang Perai, Pulau Pinang', '2.2572849', '102.273593'),
(2, 'S3 Jalan Susur Permatang Buluh Ke Pajak Song', '2.2672849', '102.373593'),
(3, 'S4 Permatang Buluh', '2.2772849', '102.473593'),
(4, 'S4 UiTM Permatang Pauh, Sebrang Perai', '2.2872849', '102.573593'),
(5, 'S3 Jalan Perusahaan Perai / Kg.Dock, Seberang Perai', '2.2972849', '102.673593'),
(6, 'S3 Perindustrian Bkt Minyak, Seberang Perai Tengah', '2.3072849', '102.773593'),
(7, 'S4 Perindustrian Bkt Minyak, Seberang Perai Tengah', '2.2972849', '102.273593'),
(8, 'S4 Jalan Tasek Mutiara 1 & Jalan Tasek Mutiara 2, Seberang Perai Selatan', '2.2972849', '102.273593'),
(9, 'S4 Persimpagan Jalan Gamilan Sg.Bakap', '2.2972849', '102.273593'),
(10, 'S3 Valdor Sungai, Sg.Bakap, Seberang Perai Selatan', '2.2972849', '102.273593'),
(11, 'S4 Sungai Lokan Ke Tok Bidan-J2, Seberang Perai Utara', '2.2972849', '102.273593'),
(12, 'S4 Sungai Lokan Ke Permatang Tok Bidan-J1, Seberang Perai Utara', '2.2972849', '102.273593'),
(13, 'S4 Jalan Raja Uda, Seberang Perai Utara', '2.2972849', '102.273593'),
(14, 'S4 Jalan Sg.Puyu / Bagan Lalang, Seberang Perai Utara', '2.2972849', '102.273593'),
(15, 'S.3 Jalan Changkat ROB-11', '2.2972849', '102.273593'),
(16, 'S.3 Sungai Rambai (Under Bridge) ROB-3', '2.2972849', '102.273593'),
(17, 'S.4 Jalan Pinang Tunggal ROB-7', '2.2972849', '102.273593'),
(18, 'S.3 Jalan Alma ROB-5', NULL, NULL),
(19, 'S.4 Jalan Sungai Ramai (Near Hotel)', NULL, NULL),
(20, 'S3 Permatang Tinggi Pulau Pinang ROB-6', NULL, NULL),
(21, 'S3 Jalan Sungai Bakap (B) ROB-10', NULL, NULL),
(22, 'S3 Jalan Sungai Bakap (D) ROB-10', '2.2772849', '102.873593');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_picture`
--

CREATE TABLE IF NOT EXISTS `tbl_picture` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_name` varchar(100) DEFAULT NULL,
  `junc_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_picture`
--

INSERT INTO `tbl_picture` (`pic_id`, `pic_name`, `junc_id`, `user_id`, `date`, `time`, `date_time`) VALUES
(1, 'IMG_1.JPG', 2, 1, '2014-05-14', '10:53:22 AM', '2014-05-14 10:53:22 AM'),
(2, 'IMG_2.JPG', 2, 1, '2014-05-14', '10:54:11 AM', '2014-05-14 10:54:11 AM'),
(4, 'IMG_3.JPG', 1, 1, '2014-05-14', '11:02:14 AM', '2014-05-14 11:02:14 AM'),
(5, 'IMG_4.JPG', 1, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(6, 'IMG_5.JPG', 1, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(7, 'IMG_6.JPG', 1, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(8, 'IMG_7.JPG', 1, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(9, 'IMG_8.JPG', 1, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(10, 'IMG_9.JPG', 1, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(11, 'IMG_10.JPG', 1, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(12, 'IMG_11.JPG', 1, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(13, 'IMG_12.JPG', 1, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(14, 'IMG_13.JPG', 1, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(15, 'IMG_14.JPG', 1, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(16, 'IMG_15.JPG', 1, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(17, 'IMG_16.JPG', 1, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(18, 'IMG_5.JPG', 3, 1, '2014-05-14', '11:41:34 AM', '2014-05-14 11:41:34 AM'),
(19, 'IMG_17.JPG', 1, 1, '2014-05-14', '02:41:34 PM', '2014-05-14 02:41:34 PM'),
(20, 'IMG_18.JPG', 1, 1, '2014-05-14', '02:41:34 PM', '2014-05-14 02:41:34 PM'),
(21, 'IMG_19.JPG', 1, 1, '2014-05-14', '02:41:34 PM', '2014-05-14 02:41:34 PM'),
(22, 'IMG_20.JPG', 1, 1, '2014-05-14', '02:41:34 PM', '2014-05-14 02:41:34 PM'),
(23, 'IMG_21.JPG', 1, 1, '2014-05-14', '02:41:34 PM', '2014-05-14 02:41:34 PM'),
(24, 'IMG_22.JPG', 1, 1, '2014-05-14', '02:41:34 PM', '2014-05-14 02:41:34 PM'),
(25, 'IMG_23.JPG', 3, 1, '2014-05-14', '02:41:34 PM', '2014-05-14 02:41:34 PM'),
(26, '20140508_163225.jpg', 3, 1, '2014-06-16', '10:23:48 AM', '2014-06-16 10:23:48 AM'),
(27, '20140505_141759.jpg', 6, 1, '2014-06-16', '12:22:55 PM', '2014-06-16 12:22:55 PM'),
(28, '20140616_122518.jpg', 6, 1, '2014-06-16', '12:25:54 PM', '2014-06-16 12:25:54 PM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `type` varchar(50) DEFAULT 'Guest',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `firstname`, `lastname`, `username`, `password`, `type`) VALUES
(1, 'EN.', 'Badrul', 'ppk', '3bb3f4dbc050a34d9c401067d396db13', 'Admin'),
(2, 'Rosli', 'Saad', 'rosli', '0cc175b9c0f1b6a831c399e269772661', 'Guest'),
(3, 'Mr.', 'Tahir', 'tahir', '0cc175b9c0f1b6a831c399e269772661', 'Guest'),
(4, 'Mr.', 'Baharah', 'baharah', '0cc175b9c0f1b6a831c399e269772661', 'Guest'),
(5, 'Test', 'User', 'test', '098f6bcd4621d373cade4e832627b4f6', 'Guest'),
(6, 'Demo', 'User', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'Admin'),
(7, 'Test', 'User', 'testuser', 'a', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
