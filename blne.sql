-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2024 at 02:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blne`
--

-- --------------------------------------------------------

--
-- Table structure for table `aname`
--

CREATE TABLE `aname` (
  `Sl No` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dnameID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aname`
--

INSERT INTO `aname` (`Sl No`, `name`, `dnameID`) VALUES
(1, 'Alur', 'Alur'),
(2, 'Arehalli', 'Belur'),
(3, 'Arkalgudu', 'Arkalgudu'),
(4, 'Arsikere', 'Arsikere'),
(5, 'Arsikere - FL/Dealer/Others', 'MI - TV - WM'),
(6, 'Balupete', 'Sakaleshpura'),
(7, 'Belur', 'Belur'),
(8, 'Bettadpura', 'Rajendra Kodagu'),
(9, 'Bikod', 'Belur'),
(10, 'BLN - SF Engineers - Hassan', 'Hassan'),
(11, 'BLN - SF Engineers - MI', 'MI - TV - WM'),
(12, 'CR Patna', 'CR Patna'),
(13, 'CR Patna - FL/Dealer/Others', 'MI - TV - WM'),
(14, 'Customer/Friends/Relatives', 'Personal'),
(15, 'Dudda', 'Hassan'),
(16, 'Free Lancer_Alur_d2h', 'Alur'),
(17, 'Free Lancer_Hsn_d2h', 'Hassan'),
(18, 'Gandsi', 'Arsikere'),
(19, 'Gorur', 'Hassan'),
(20, 'Hagare', 'Hassan'),
(21, 'Halebeedu', 'Belur'),
(22, 'Hassan - City', 'Hassan'),
(23, 'Hirisave', 'CR Patna'),
(24, 'HN Pura', 'HN Pura'),
(25, 'Javagal-Arsikere', 'Arsikere'),
(26, 'Javagal-Belur', 'Belur'),
(27, 'Kerlapura', 'Arkalgudu'),
(28, 'Kittane', 'Hassan'),
(29, 'Konanur', 'Arkalgudu'),
(30, 'Koodrasthe', 'Sakaleshpura'),
(31, 'Maaglu_Kodlipete', 'Sakaleshpura'),
(32, 'Magge_Rayarkoppalu', 'Sakaleshpura'),
(33, 'Nuggehalli', 'CR Patna'),
(34, 'Other Credits', 'Personal'),
(35, 'Ramnathpura', 'Arkalgudu'),
(36, 'Sakaleshpura', 'Sakaleshpura'),
(37, 'Sakaleshpura - FL/Dealer/Others', 'MI - TV - WM'),
(38, 'Shanthigrama', 'Hassan'),
(39, 'Sharavanbelagola', 'CR Patna'),
(40, 'Spares and Others', 'Hassan');

-- --------------------------------------------------------

--
-- Table structure for table `dname`
--

CREATE TABLE `dname` (
  `Sl No` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dname`
--

INSERT INTO `dname` (`Sl No`, `name`) VALUES
(1, 'Alur'),
(2, 'Arkalgudu'),
(3, 'Arsikere'),
(4, 'Belur'),
(5, 'CR Patna'),
(6, 'Hassan'),
(7, 'HN Pura'),
(8, 'MI - TV - WM'),
(9, 'Personal'),
(10, 'Rajendra Kodagu'),
(11, 'Sakaleshpura');

-- --------------------------------------------------------

--
-- Table structure for table `index`
--

CREATE TABLE `index` (
  `login` varchar(32) DEFAULT NULL,
  `Sl.no` int(255) NOT NULL,
  `Dt_of_Entry` date NOT NULL DEFAULT current_timestamp(),
  `District_Name` varchar(255) NOT NULL,
  `Area_Name` varchar(255) NOT NULL,
  `Shop_Name` varchar(255) NOT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `Credit` int(255) NOT NULL,
  `Cash` int(255) NOT NULL,
  `remarks` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index`
--

INSERT INTO `index` (`login`, `Sl.no`, `Dt_of_Entry`, `District_Name`, `Area_Name`, `Shop_Name`, `Item_Name`, `Credit`, `Cash`, `remarks`) VALUES
('', 80, '2023-02-09', 'Arkalgudu', 'Konanur', 'Annapoorna Electronics_Konanur_SSSD', 'GLK Kit', 1, 0, '\r\nasd\r\nasd\r\n\r\na\r\nsd\r\nasd\r\n\r\nassdaasd'),
('', 81, '2023-02-09', 'Hassan', 'Free Lancer_Hsn_d2h', 'FL_Purshotham_Heragu', 'EWP - MI Warranty Extension', 1, 0, NULL),
('', 82, '2023-02-17', 'Arkalgudu', 'Arkalgudu', 'Beerlingeshwara Stores_Arkalgudu_Dealer', 'Salary/Incentive/Call Payment', 1, 0, NULL),
('', 83, '2023-02-17', 'Arkalgudu', 'Kerlapura', 'Vinayaka Off Set_Kerlapura_SSSD', 'Recharge', 1, 0, NULL),
('', 84, '2023-03-02', 'Arkalgudu', 'Arkalgudu', 'Beerlingeshwara Stores_Arkalgudu_Dealer', 'MI Water Filter', 1, 0, NULL),
('', 86, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Corner Wall Mount', 12, 0, 'adasda'),
('', 87, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Corner Wall Mount', 13, 0, 'adasda'),
('', 88, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Corner Wall Mount', 13, 0, 'adasda'),
('', 89, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Corner Wall Mount', 13, 0, 'adasda'),
('', 90, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Wall Mount', 12, 0, 'adasd'),
('', 91, '2023-03-04', 'Personal', 'Customer/Friends/Relatives', 'Aloka_Hassan_Tataksy_Partner', 'IDBI Current Account Transfer', 1312, 0, 'asd\n\n'),
('', 92, '2023-03-04', 'Personal', 'Customer/Friends/Relatives', 'Aloka_Hassan_Tataksy_Partner', 'IDBI Current Account Transfer', 1312, 0, ''),
('', 93, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Corner Wall Mount', 123, 0, ''),
('', 94, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Corner Wall Mount', 123, 0, ''),
('', 95, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Corner Wall Mount', 123, 0, ''),
('', 96, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Corner Wall Mount', 123, 23, ''),
('', 97, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Corner Wall Mount', 123, 23, ''),
('', 98, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Corner Wall Mount', 123, 23, ''),
('', 99, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Corner Wall Mount', 123, 23, ''),
('', 100, '2023-03-04', 'Personal', 'Customer/Friends/Relatives', 'Aloka_Hassan_Tataksy_Partner', 'MI Corner Wall Mount', 0, 23213, ''),
('', 101, '2023-03-04', 'Personal', 'Customer/Friends/Relatives', 'Aloka_Hassan_Tataksy_Partner', 'MI Corner Wall Mount', 0, 23213, ''),
('', 102, '2023-03-04', 'Personal', 'Customer/Friends/Relatives', 'Aloka_Hassan_Tataksy_Partner', 'MI Corner Wall Mount', 0, 23213, ''),
('', 103, '2023-03-04', 'Personal', 'Customer/Friends/Relatives', 'Aloka_Hassan_Tataksy_Partner', 'MI Corner Wall Mount', 0, 23213, ''),
('', 104, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Wall Mount', 500, 0, 'CH67301'),
('', 105, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Vinayaka Electronics_Belagola_Prakash', 'Installation', 500, 0, 'CH67301'),
('', 106, '2023-03-04', 'CR Patna', 'Sharavanbelagola', 'Vinayaka Electronics_Belagola_Prakash', 'MI Wall Mount', 0, 500, 'CH67301'),
('', 107, '2023-03-04', 'Arkalgudu', 'Kerlapura', 'Manjunath_KS_Kerlapura_FL', 'MI Wall Mount', 2123, 0, ''),
('', 108, '2023-03-04', 'Alur', 'Alur', 'Manjunatha Xerox_Prakash', 'Others', 12, 0, ''),
('', 109, '2023-03-04', 'Alur', 'Alur', 'Manjunatha Xerox_Prakash', 'Others', 12, 0, 'ads'),
('', 110, '2023-03-04', 'Arkalgudu', 'Arkalgudu', 'Gagan Stores_Arkalgudu_Dealer', 'Others', 231, 0, ''),
('', 111, '2023-03-05', 'Alur', 'Free Lancer_Alur_d2h', 'FL_Appu_Alur', 'Others', 500, 0, 'CH67301'),
('', 112, '2023-03-05', 'Hassan', 'Dudda', 'Shambulingeshwara_Manju_FL', 'Others', -1, 0, ''),
('', 113, '2023-07-18', 'Arkalgudu', 'Konanur', 'Annapoorna Electronics_Konanur_SSSD', 'GLK Kit', 0, 1, ''),
('', 114, '2023-07-18', 'Arkalgudu', 'Konanur', 'Annapoorna Electronics_Konanur_SSSD', 'Recharge', 0, 2, ''),
('', 115, '2023-07-18', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'Salary/Incentive/Call Payment', 12, 0, ''),
('', 116, '2023-07-18', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'Salary/Incentive/Call Payment', 123123, 0, ''),
('', 117, '2023-07-18', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'Salary/Incentive/Call Payment', 123, 0, ''),
('', 118, '2023-02-09', 'Arkalgudu', 'Konanur', 'Annapoorna Electronics_Konanur_SSSD', 'GLK Kit', 1, 0, '\r\nasd\r\nasd\r\n\r\na\r\nsd\r\nasd\r\n\r\nassdaasd'),
('', 119, '2023-07-18', 'Arsikere', 'Gandsi', 'Jenushree Electronics_Lokesh_Gandsi', 'Others', 123, 0, ''),
('', 120, '2023-07-18', 'CR Patna', 'CR Patna', 'Sai Distributors_Raghu_Dishtv_DSSD', 'Others', 123, 0, ''),
('', 121, '2023-07-18', 'Hassan', 'BLN - SF Engineers - Hassan', 'd2h-Rakshith-Billa', 'Others', 123, 0, ''),
('', 122, '2023-07-18', 'Hassan', 'BLN - SF Engineers - Hassan', 'd2h_Shashi_Engineer', 'Others', 123, 0, ''),
('', 123, '2023-07-18', 'Hassan', 'Free Lancer_Hsn_d2h', 'FL_Harish_FL_Dasrakoppalu', 'Others', 123, 0, ''),
('', 124, '2023-08-06', 'MI - TV - WM', 'CR Patna - FL/Dealer/Others', 'Mi_Kishore_FL', 'Recharge', 12, 0, ''),
('', 125, '2023-08-06', 'MI - TV - WM', 'BLN - SF Engineers - MI', 'Mi_Doresh_BLN_FL', 'Others', 12, 0, ''),
('', 126, '2023-08-11', 'CR Patna', 'CR Patna', 'Metro Electronics_ Manju', 'MI Water Filter', 121, 3123, ''),
('', 127, '2023-08-11', 'Hassan', 'Hagare', 'Veerbadreshwara Sandeep - Hagare_FL', 'Others', 12, 12, ''),
('', 128, '2023-08-11', 'Hassan', 'Hagare', 'Veerbadreshwara Sandeep - Hagare_FL', 'MI Corner Wall Mount', 12, 0, ''),
('root', 129, '2023-08-11', 'Belur', 'Belur', 'JM Electronics_Munna', 'MI Corner Wall Mount', 12, 0, ''),
('root', 130, '2023-08-11', 'Hagarae', 'Hagare', '$shop_name', '$item_name', 0, 0, '$comment'),
('root', 131, '2023-08-11', 'Hassan', 'Free Lancer_Hsn_d2h', 'FL_Purshotham_Heragu', 'MI Water Filter', 123, 0, 'asdasd'),
('root', 132, '2023-08-17', 'Alur', 'Alur', 'Manjunatha Xerox_Prakash', 'MI Wall Mount', 12, 0, ''),
('user', 133, '2023-08-17', 'CR Patna', 'Sharavanbelagola', 'Aakash Electronics_Lokesh_SSSD', 'MI Wall Mount', 122, 0, ''),
('root', 134, '2023-08-17', 'Arkalgudu', 'Konanur', 'Keerthi Home Appliances_Prakash_SSSD', 'Installation', 12, 0, ''),
('root', 135, '2023-08-17', 'Personal', 'Customer/Friends/Relatives', 'Aloka_Hassan_Tataksy_Partner', 'Others', 12, 0, ''),
('', 136, '0000-00-00', '', '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Sl No` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Sl No`, `name`) VALUES
(1, 'Currency PCS Terminal Transfer'),
(2, 'Discount if any given'),
(3, 'EWP - MI Warranty Extension'),
(4, 'GLK Kit'),
(5, 'IDBI Current Account Transfer'),
(6, 'Installation'),
(7, 'MI Corner Wall Mount'),
(8, 'MI Wall Mount'),
(9, 'MI Water Filter'),
(10, 'Others'),
(11, 'Recharge'),
(12, 'Salary/Incentive/Call Payment'),
(13, 'SBI Saving Account Transfer'),
(14, 'Spare Part Sales'),
(15, 'Stabilizers');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'root', 'bln@23'),
(2, 'user', 'bln@55'),
(3, 'guest', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `Sl No` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `anameID` varchar(255) NOT NULL,
  `ph_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`Sl No`, `name`, `anameID`, `ph_no`) VALUES
(1, 'Aakash Electronics_Lokesh_SSSD', 'Sharavanbelagola', 1234567890),
(2, 'Adi Solar Electronics_Suresh Reddy', 'Ramnathpura', 123123),
(3, 'Adige Mane_Belur', 'Belur', 0),
(4, 'Aloka_Hassan_Tataksy_Partner', 'Customer/Friends/Relatives', 0),
(5, 'Annapoorna Electronics_Konanur_SSSD', 'Konanur', 0),
(6, 'Anugraha Stores - Puthur_Dealer', 'Hassan - City', 0),
(7, 'Arun Communication - New Bus stand_Dealer', 'Hassan - City', 0),
(8, 'Ashok DTH Point_Bikod_SSSD', 'Bikod', 0),
(9, 'Bajaj Electricals & Electronics_CR Patna', 'CR Patna', 0),
(10, 'Banashankari Communication_Arun_Gowrikoppalu', 'Hassan - City', 0),
(11, 'Banashankari Furnitures_Belur_SSSD', 'Belur', 0),
(12, 'Bandari Home Appliances_Katehalli_Dealer', 'Hassan - City', 0),
(13, 'Basaveshwara Enterprises_Dealer_Ramnathpura', 'Ramnathpura', 0),
(14, 'Basaveshwara General Stores_Balupete_Dealer', 'Balupete', 0),
(15, 'Beerlingeshwara Agro Stores_Belur_SSSD', 'Belur', 0),
(16, 'Beerlingeshwara Stores_Arkalgudu_Dealer', 'Arkalgudu', 0),
(17, 'Bhagyashree Home Appliances_SSSD', 'Konanur', 0),
(18, 'BLN Enterprises_Direct Sale', 'BLN - SF Engineers - Hassan', 0),
(19, 'BR Electronics_Anand_Hassan_Dealer', 'Hassan - City', 0),
(20, 'BR Electronics_Babu_Sun Distributor', 'Halebeedu', 0),
(21, 'Byrava Home Appliances_Hassan', 'Hassan - City', 0),
(22, 'Cauvery Krishna Complex_Rahid_SSSD', 'Hassan - City', 0),
(23, 'Champak_Maruthi_Bag_Tenent', 'Customer/Friends/Relatives', 0),
(24, 'Chandana Electronics_ Anu', 'CR Patna', 0),
(25, 'Chandan_United_Hassan_SKP', 'Customer/Friends/Relatives', 0),
(26, 'Chandu Electronics_Prabhu_SSSD', 'Arkalgudu', 0),
(27, 'Chethan_Thanmaiy Electronics_Hassan_Dishtv', 'Hassan - City', 0),
(28, 'd2h-Rakshith-Billa', 'BLN - SF Engineers - Hassan', 0),
(29, 'd2h_Shashi_Engineer', 'BLN - SF Engineers - Hassan', 0),
(30, 'Darshan Bangels Stores_Chethan_SSSD', 'Alur', 0),
(31, 'Deeksha Electronics_Manjegowda_FL_CR Patna', 'CR Patna', 0),
(32, 'Deepika Electronics_Abhi_CR Patna_FOS', 'CR Patna', 0),
(33, 'Deepu Electronics_Koodrasthe_Dilip', 'Koodrasthe', 0),
(34, 'Devaraj_BLN_FL_Hassan', 'BLN - SF Engineers - Hassan', 0),
(35, 'Doresh_BLN_FL_Hassan', 'BLN - SF Engineers - Hassan', 0),
(36, 'Dummy Activation', 'Spares and Others', 0),
(37, 'FL_Appu_Alur', 'Free Lancer_Alur_d2h', 0),
(38, 'FL_Ashok_Byrapura', 'Free Lancer_Alur_d2h', 0),
(39, 'FL_Harish_FL_Dasrakoppalu', 'Free Lancer_Hsn_d2h', 0),
(40, 'FL_Jayanna_Hassan', 'Free Lancer_Hsn_d2h', 0),
(41, 'FL_Mahesh_Alur', 'Free Lancer_Alur_d2h', 0),
(42, 'FL_Praveen_Parvathi Bangels_Alur', 'Free Lancer_Alur_d2h', 0),
(43, 'FL_Purshotham_Heragu', 'Free Lancer_Hsn_d2h', 0),
(44, 'FL_Ramachandra_Hassan', 'Free Lancer_Hsn_d2h', 0),
(45, 'FL_Shivanand_Hassan', 'Free Lancer_Hsn_d2h', 0),
(46, 'FL_Vijay_FL_Sundresh Cozin', 'Free Lancer_Hsn_d2h', 0),
(47, 'Gagan Stores_Arkalgudu_Dealer', 'Arkalgudu', 0),
(48, 'Gaju_BLN_FOS_Hassan', 'BLN - SF Engineers - Hassan', 0),
(49, 'Girish_FL_Belur', 'Belur', 0),
(50, 'Gopal_BLN_FL_Hassan', 'BLN - SF Engineers - Hassan', 0),
(51, 'Govindaraju_Didga_SSSD', 'Nuggehalli', 0),
(52, 'Gowtham_Hassan_Micromax_Dealer', 'Hassan - City', 0),
(53, 'Guru Prasad_FL_Arsikere', 'Arsikere', 0),
(54, 'Harish Electronics_Arkalgudu_SSSD', 'Arkalgudu', 0),
(55, 'Harish Electronics_Dinesh_SSSD_CR Patna', 'CR Patna', 0),
(56, 'Hassan Lodge_Prasanna_Dealer_Hassan', 'Hassan - City', 0),
(57, 'Hassanamba Stores_Parmesh_Hassan_Dealer', 'Hassan - City', 0),
(58, 'HD RF Remotes Sales', 'Spares and Others', 0),
(59, 'HDR Studio_Dealer_Mosalehosalli', 'Kittane', 0),
(60, 'Impana DTH - Yuvaraj Sun/Airtel', 'Hassan - City', 0),
(61, 'Jenushree Electronics_Lokesh_Gandsi', 'Gandsi', 0),
(62, 'JK Electronics_Syed_Hassan_SSSD', 'Hassan - City', 0),
(63, 'JM Electronics_Munna', 'Belur', 0),
(64, 'Jyothi Electronics_Kumar_TV Distributor', 'Halebeedu', 0),
(65, 'Jyothi Electronics_Nagraj_FL', 'Arehalli', 0),
(66, 'Jyothish Electronics_Magge_FL', 'Maaglu_Kodlipete', 0),
(67, 'Jyotish Electronics_Jyotish_FL', 'Magge_Rayarkoppalu', 0),
(68, 'Karthhik_Chowdeshwari_Hassan', 'Customer/Friends/Relatives', 0),
(69, 'Karthik Traders - Dealer_Hassan', 'Hassan - City', 0),
(70, 'Keerthi Home Appliances_Prakash_SSSD', 'Konanur', 0),
(71, 'Kothari Sales_Hassan', 'Hassan - City', 0),
(72, 'Lakshmi (Thirumala) Electronics_Shivanna_SSSD', 'Arkalgudu', 0),
(73, 'Lakshmi Book Stores_Parmesh_Mosalehosalli', 'Kittane', 0),
(74, 'Lakshmidevi Electronics_Pramodh_FL', 'Ramnathpura', 0),
(75, 'Lathashree Electronics_Balupete_Jagadish', 'Balupete', 0),
(76, 'Lucky Stores_Akram Pasha_SSSD', 'Konanur', 0),
(77, 'Mahesh DTH Centre_Mahesh_FL', 'Halebeedu', 0),
(78, 'Mahesh_Yogendra_FL', 'Belur', 0),
(79, 'Mallikarjuna Mobiles_Dealer_FL', 'Arehalli', 0),
(80, 'Manasa Footware_Mattnavale_Dealer', 'Hirisave', 0),
(81, 'Manju Studio_Shanthigrama_SSSD', 'Shanthigrama', 0),
(82, 'Manjunath Stores - Dealer_Santhepete', 'Hassan - City', 0),
(83, 'Manjunatha Xerox_Prakash', 'Alur', 0),
(84, 'Manjunath_KS_Kerlapura_FL', 'Kerlapura', 0),
(85, 'Maruthi Electronics_Devendra_Arkalgudu_FL', 'Arkalgudu', 0),
(86, 'Maruthi Electronics_K Hoskote_Mohan FL', 'Balupete', 0),
(87, 'Metro Electronics_ Manju', 'CR Patna', 0),
(88, 'Mi_Devaraju_BLN_FL', 'BLN - SF Engineers - MI', 0),
(89, 'Mi_Doresh_BLN_FL', 'BLN - SF Engineers - MI', 0),
(90, 'Mi_Gopal_BLN_FL', 'BLN - SF Engineers - MI', 0),
(91, 'Mi_Guru_FL_Arsikere', 'Arsikere - FL/Dealer/Others', 0),
(92, 'Mi_Harish_FL_Dasrakoppalu', 'BLN - SF Engineers - MI', 0),
(93, 'Mi_Kishore_FL', 'CR Patna - FL/Dealer/Others', 0),
(94, 'Mi_Rakesh_BLN_FOS_FL', 'BLN - SF Engineers - MI', 0),
(95, 'Mi_Rakshith_Billa', 'BLN - SF Engineers - MI', 0),
(96, 'Mi_Select_Cofi_Imran_SSSD_SKP', 'Sakaleshpura - FL/Dealer/Others', 0),
(97, 'Mi_Shashi_BLN', 'BLN - SF Engineers - MI', 0),
(98, 'Mi_Sonu_FL_CR_Patna', 'CR Patna - FL/Dealer/Others', 0),
(99, 'Mohan Foot Ware_Hirisave_SSSD', 'Hirisave', 0),
(100, 'Mythri Metals_Hassan', 'Hassan - City', 0),
(101, 'Nanjundeshwara Electronics_Madhu_FL', 'Arehalli', 0),
(102, 'National Electronics_Irfan_FL', 'Arehalli', 0),
(103, 'Naveen Electronics_Bettadpura_RV', 'Bettadpura', 0),
(104, 'Naveen_Hassan_SKP', 'Customer/Friends/Relatives', 0),
(105, 'Nazim E Point_Arkalgudu_SSSD', 'Arkalgudu', 0),
(106, 'Om Electronics_Hitesh_Hassan', 'Hassan - City', 0),
(107, 'Om Shopee Suryaprakash_Dhodi Road', 'Hassan - City', 0),
(108, 'Pavan Electronics_Pavan_FL_Alur', 'Alur', 0),
(109, 'Pradeep_Kittane_FL', 'Kittane', 0),
(110, 'Prakruthi Electronics_Hassan_Dealer', 'Hassan - City', 0),
(111, 'Praveen_BLN_CCO_Hassan', 'BLN - SF Engineers - Hassan', 0),
(112, 'Prince Electronics_Jagadish_SSSD', 'Alur', 0),
(113, 'Punyakoti Agency_Arsikere_SSSD', 'Arsikere', 0),
(114, 'Ragavendra_Dealer_Mosalehosalli', 'Kittane', 0),
(115, 'Rakesh_BLN_FL_Hassan', 'BLN - SF Engineers - Hassan', 0),
(116, 'Rameshwara Stores_Chidanand_Shanthigrama', 'Shanthigrama', 0),
(117, 'Ranganath Stores - Dealer_Hassan', 'Hassan - City', 0),
(118, 'Ravi Electronics_Belagola_SSSD', 'Sharavanbelagola', 0),
(119, 'RJ Creations_Hassan_Dealer', 'Hassan - City', 0),
(120, 'RN DTH Service_Keshava_Belur', 'Belur', 0),
(121, 'Roopsagar Electronics_Ganesh_SSSD', 'Konanur', 0),
(122, 'Saanvi Book Stores_Dhod Magge_Dealers', 'Ramnathpura', 0),
(123, 'Sai Distributors_Raghu_Dishtv_DSSD', 'CR Patna', 0),
(124, 'Samanth Verity Centre_Bhuvanahalli', 'Hassan - City', 0),
(125, 'Sandhya Provision Store_Kamthi Dealer', 'Alur', 0),
(126, 'Sanguli Rayan Electronics_ CR Patna_FL', 'CR Patna', 0),
(127, 'Sathish Mobiles & Xerox_Ramnathpura_Dealer', 'Ramnathpura', 0),
(128, 'SD Normal Remotes Sales', 'Spares and Others', 0),
(129, 'Select Cofi Works - Imran_SKP_SSSD', 'Sakaleshpura', 0),
(130, 'Select Radio House - Jagadish', 'Hassan - City', 0),
(131, 'Shambulingeshwara_Manju_FL', 'Dudda', 0),
(132, 'Sharika Communication_Ramesh', 'Dudda', 0),
(133, 'Shekar E Point_Arkalgudu_SSSD', 'Arkalgudu', 0),
(134, 'Shree Xerox_Ramnathpura_Shridhar', 'Ramnathpura', 0),
(135, 'Shreyas DTH - Lokesh_SKP_SSSD', 'Sakaleshpura', 0),
(136, 'Shri Guru Ragavendra_Hassan_Dealer', 'Hassan - City', 0),
(137, 'SKPC Bank_Daily Collection', 'Other Credits', 0),
(138, 'SLV Electronics_Krishna_SSSD', 'Arkalgudu', 0),
(139, 'SLV Fruits_Nagesh_SSSD', 'Hirisave', 0),
(140, 'SLV Provision Stores_Gorur', 'Gorur', 0),
(141, 'SN Electronics - Lingaraju', 'Hassan - City', 0),
(142, 'Somashekar_FL_Ramnathpura', 'Ramnathpura', 0),
(143, 'Somu Electronics_Belagola_Somu', 'Sharavanbelagola', 0),
(144, 'Sonu FL_CR Patna_Free Lancer', 'CR Patna', 0),
(145, 'SPJ Electronics_Jagadish_SSSD', 'Halebeedu', 0),
(146, 'SR Foot Ware_Nandish_Hirisave_FL', 'Hirisave', 0),
(147, 'Sri Chowdeshwari Mobiles _Hirisave_Dealer', 'Hirisave', 0),
(148, 'Sri Nanjundeshwara Home_Ramnathpura_Santhosh', 'Ramnathpura', 0),
(149, 'Sri Ram Communication - Vijayanagara_dealer', 'Hassan - City', 0),
(150, 'Sri Ram Fertilizers_Uchangi_Ramesh', 'Balupete', 0),
(151, 'Sri Ramanjeneya Stores_Hongada', 'Balupete', 0),
(152, 'Sri Sai Communication_Balupete', 'Balupete', 0),
(153, 'Srinivasa Stores_Dealer_Hsn', 'Hassan - City', 0),
(154, 'Star Electronics_Nanjundi_SSSD', 'Javagal-Belur', 0),
(155, 'Suprabhath Bangels_Hassan_Dealer', 'Hassan - City', 0),
(156, 'Surya Electronics - Salagame Road_dealer', 'Hassan - City', 0),
(157, 'Swagath Fancy Centre_Vijayanagara_Dealer', 'Hassan - City', 0),
(158, 'Taj Communication_Asif_SSSD', 'Arehalli', 0),
(159, 'Udaykumar_Salagame Road', 'Hassan - City', 0),
(160, 'VDR Communication_Hassan', 'Hassan - City', 0),
(161, 'Veenus Marketing - Indresh_Hassan', 'Hassan - City', 0),
(162, 'Veerbadreshwara Electronics_Yogesh_SSSD', 'Belur', 0),
(163, 'Veerbadreshwara Sandeep - Hagare_FL', 'Hagare', 0),
(164, 'Veerbadreshwara_Hosakote_Dealer', 'Balupete', 0),
(165, 'Veeresh_FL_Arsikere', 'Arsikere', 0),
(166, 'Venkteshwara_Sanath_Dealer', 'Hassan - City', 0),
(167, 'Vidhyarthi Bandar_Kumar_Hirisave', 'Hirisave', 0),
(168, 'Vidya Electronics_Ravi_Market', 'Hassan - City', 0),
(169, 'Vigneshwara Electronics_Koodrasthe_SSSD', 'Koodrasthe', 0),
(170, 'Vijay Electronics_Santhosh_SSSD', 'Belur', 0),
(171, 'Vijay Enterprises_Shanthigrama_FL', 'Shanthigrama', 0),
(172, 'Vijayalakshmi Electronics_Chandranna', 'Hirisave', 0),
(173, 'Viji_Carpenter_Hassan', 'Customer/Friends/Relatives', 0),
(174, 'Vinayaka Electronics_Belagola_Prakash', 'Sharavanbelagola', 0),
(175, 'Vinayaka Home Appliances_Hassan_Prakash', 'Hassan - City', 0),
(176, 'Vinayaka Off Set_Kerlapura_SSSD', 'Kerlapura', 0),
(177, 'VK Enterprises_Kiran_Dealer', 'Hassan - City', 0),
(178, 'VP Marketing_Purshotham_Hassan_SSSD', 'Hassan - City', 0),
(179, 'Vyshali Home Appliances_Prathap_Dealer', 'Javagal-Arsikere', 0),
(180, 'Wrong Recharges / Double Recharges', 'Spares and Others', 0),
(181, 'Yathish_VK_Hassanxs', 'Hassan - City', 0),
(182, 'YB Enterprises - Nataraj', 'CR Patna', 0),
(183, 'Yuvaraj Electronics_Yuvaraj', 'Nuggehalli', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aname`
--
ALTER TABLE `aname`
  ADD PRIMARY KEY (`Sl No`),
  ADD UNIQUE KEY `name` (`name`,`dnameID`);

--
-- Indexes for table `dname`
--
ALTER TABLE `dname`
  ADD PRIMARY KEY (`Sl No`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `index`
--
ALTER TABLE `index`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Sl No`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`Sl No`),
  ADD UNIQUE KEY `name` (`name`,`anameID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aname`
--
ALTER TABLE `aname`
  MODIFY `Sl No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `dname`
--
ALTER TABLE `dname`
  MODIFY `Sl No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `index`
--
ALTER TABLE `index`
  MODIFY `Sl.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `Sl No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `Sl No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
