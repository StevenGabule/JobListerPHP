-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 06:52 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbjoblister`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcategories`
--

CREATE TABLE `tblcategories` (
  `category_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategories`
--

INSERT INTO `tblcategories` (`category_id`, `type`) VALUES
(1, 'Web Analysis'),
(2, 'Business Analysis'),
(3, 'Project Manager'),
(4, 'Web Developer'),
(5, 'Web Designer');

-- --------------------------------------------------------

--
-- Table structure for table `tbljobs`
--

CREATE TABLE `tbljobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `job_title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `location` text NOT NULL,
  `contact_user` varchar(50) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljobs`
--

INSERT INTO `tbljobs` (`id`, `category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`, `post_date`) VALUES
(1, 1, 'asd', 'web developer', '', '23.00', 'asdasd', 'asdasd', 'asd', '2018-02-14'),
(2, 4, 'company names', 'web designer', '', '21000.00', 'valencia citys', 'sjohn doe', 'jsoshbayo@gmail.com', '2018-02-23'),
(4, 4, 'company names', 'web designer', '', '21000.00', 'valencia citys', 'sjohn doe', 'jsoshbayo@gmail.com', '2018-02-23'),
(5, 1, 'asd', '', '', '23.00', 'asdasd', 'asdasd', 'asd', '2018-02-14'),
(6, 4, 'company names', '', '', '21000.00', 'valencia citys', 'sjohn doe', 'jsoshbayo@gmail.com', '2018-02-23'),
(7, 4, 'company names', '', '', '21000.00', 'valencia citys', 'sjohn doe', 'jsoshbayo@gmail.com', '2018-02-23'),
(8, 1, 'asd', '', '', '23.00', 'asdasd', 'asdasd', 'asd', '2018-02-14'),
(9, 4, 'company names', '', '', '21000.00', 'valencia citys', 'sjohn doe', 'jsoshbayo@gmail.com', '2018-02-23'),
(10, 4, 'company names', '', '', '21000.00', 'valencia citys', 'sjohn doe', 'jsoshbayo@gmail.com', '2018-02-23'),
(11, 1, 'asd', '', '', '23.00', 'asdasd', 'asdasd', 'asd', '2018-02-14'),
(12, 4, 'company names', '', '', '21000.00', 'valencia citys', 'sjohn doe', 'jsoshbayo@gmail.com', '2018-02-23'),
(13, 4, 'company names', '', '', '21000.00', 'valencia citys', 'sjohn doe', 'jsoshbayo@gmail.com', '2018-02-23'),
(14, 4, 'company names', '', '', '21000.00', 'valencia citys', 'sjohn doe', 'jsoshbayo@gmail.com', '2018-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `id` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `middlename` char(1) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcategories`
--
ALTER TABLE `tblcategories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbljobs`
--
ALTER TABLE `tbljobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_title_2` (`job_title`);
ALTER TABLE `tbljobs` ADD FULLTEXT KEY `job_title` (`job_title`);
ALTER TABLE `tbljobs` ADD FULLTEXT KEY `description` (`description`);

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcategories`
--
ALTER TABLE `tblcategories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbljobs`
--
ALTER TABLE `tbljobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
