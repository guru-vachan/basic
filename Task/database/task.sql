-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 08:01 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(4) NOT NULL,
  `cat_nm` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_nm`) VALUES
(1, 'Architecture'),
(2, 'Data Science'),
(3, 'Android'),
(5, 'Digital'),
(17, 'Computer');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `d_id` int(11) NOT NULL,
  `emp_id` int(3) NOT NULL,
  `u_id` int(3) NOT NULL,
  `b_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`d_id`, `emp_id`, `u_id`, `b_id`) VALUES
(1, 12, 0, 2),
(0, 4, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE `intern` (
  `b_id` int(4) NOT NULL,
  `u_id` int(3) NOT NULL,
  `b_nm` varchar(60) NOT NULL,
  `b_subcat` varchar(25) NOT NULL,
  `b_desc` longtext NOT NULL,
  `b_publisher` varchar(40) NOT NULL,
  `b_price` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`b_id`, `u_id`, `b_nm`, `b_subcat`, `b_desc`, `b_publisher`, `b_price`) VALUES
(7, 4, 'Visual Basic 2005', '17', '''VB connectivity''', 'Pearson', 120),
(8, 4, 'Java & Xml', '17', '''Complete Reference''', 'TATA Mcgerw Hill', 500),
(52, 4, 'spam', '29', 'sfefh', 'dfefewf', 566),
(53, 15, 'wet work', '17', 'dont need one.', 'baap tumhara', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `subcat_id` int(4) NOT NULL,
  `parent_id` int(4) NOT NULL,
  `subcat_nm` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`subcat_id`, `parent_id`, `subcat_nm`) VALUES
(1, 1, 'Architecture'),
(2, 2, 'Data Science'),
(3, 3, 'Android'),
(5, 5, 'Digital'),
(17, 17, 'Programming'),
(18, 17, 'Database'),
(19, 17, 'Web-Design'),
(20, 17, 'Networking'),
(27, 19, 'Biology'),
(28, 19, 'Medical'),
(29, 17, 'O.S.'),
(33, 20, 'CAT'),
(31, 20, 'GMAT'),
(32, 20, 'MBA'),
(34, 20, 'BBA'),
(35, 21, 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(4) NOT NULL,
  `u_fnm` varchar(35) NOT NULL,
  `u_unm` varchar(25) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `Type` int(2) NOT NULL,
  `u_gender` varchar(7) NOT NULL,
  `u_email` varchar(35) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_city` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fnm`, `u_unm`, `u_pwd`, `Type`, `u_gender`, `u_email`, `u_contact`, `u_city`) VALUES
(2, 'Shital', 'shital', 'shital', 0, 'Female', 'shital@yahoo.com', '9985689856', 'Rajkot'),
(4, 'admin', 'admin', 'admin123', 1, 'Female', 'admin@gmail.com', '9859632561', 'Rajkot'),
(5, 'Kaushik', 'Darcy', '160160160', 0, 'Male', 'darcy@gmail.com', '9016388880', 'Rajkot'),
(6, 'sanjeev', 'kumar', 'sanjeev', 0, 'Male', 'sanjeevtech2@gmail.com', '9015501897', 'Ahmedabad'),
(7, 'guru', 'guruvachan', 'guru@123', 0, 'Male', 'guruvachanj@gmail.com', '8527136561', 'Surat'),
(13, 'ankita khare', 'ankita', 'khare', 1, 'Female', 'ankitakhare5401@gmail.com', '8377026459', 'Ahmedabad'),
(12, 'gut', 'guru', '456', 1, 'Male', 'hututi@gmail.com', '1234567894', 'Baroda'),
(14, 'gram', 'ghj', '147', 1, 'Female', 'dfgdr@gmail.com', '2356497952', 'Ahmedabad'),
(15, 'Abhi', 'abhi', 'abhi', 1, 'Male', 'a@gmail.com', '8527136561', 'Baroda'),
(16, 'ashutosh ', 'singh', 'qazwsx12', 1, 'Male', 'sbfsnefjj@gmail.com', '564512454', 'Ahmedabad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`u_id`,`b_id`);

--
-- Indexes for table `intern`
--
ALTER TABLE `intern`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `intern`
--
ALTER TABLE `intern`
  MODIFY `b_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `subcat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
