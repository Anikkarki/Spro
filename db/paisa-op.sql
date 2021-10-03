-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 07:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paisa-op`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `A_ID` int(11) NOT NULL,
  `pass` varchar(15) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`A_ID`, `pass`, `name`) VALUES
(1, 'admin', 'admin'),
(2, 'hello', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `B_ID` int(11) NOT NULL,
  `B_title` varchar(100) DEFAULT NULL,
  `A_ID` int(11) DEFAULT NULL,
  `B_content` varchar(800) DEFAULT NULL,
  `B_date` date DEFAULT NULL,
  `Com_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`B_ID`, `B_title`, `A_ID`, `B_content`, `B_date`, `Com_ID`) VALUES
(2, 'lets learn about finance', 1, '    Fincance is the management of large amounts of money, especially by governments or large companies.Finance is a broad term that describes activities associated with banking, leverage or debt, credit, capital markets, money, and investments. Basically, finance represents money management and the process of acquiring needed funds. Finance also encompasses the oversight, creation, and study of money, banking, credit, investments, assets, and liabilities that make up financial systems.\r\n', '2021-09-13', NULL),
(3, 'Money', 2, '  Money is a current medium of exchange in the form of coins and banknotes; coins and banknotes collectively.Money, a commodity accepted by general consent as a medium of economic exchange. It is the medium in which prices and values are expressed; as currency, it circulates anonymously from person to person and country to country, thus facilitating trade, and it is the principal measure of wealth.', '2021-09-13', NULL),
(5, 'Finance in Nepal', NULL, 'Nefinsco is The First Finance Company of Private Sector in Nepal stabilized in 2049 B.S. Till Then Nefinsco has been known as The most Mature finance company in Nepal providing its products among the Nefinsco Clients.\r\n\r\nNefinsco, As The Trend setter in the market has the initiation of innovating some of the very first products launched in Nepal like Hire purchase, Margin Lending which became very', '2021-09-26', NULL),
(7, 'Bankruptcy Spells Death for Many Businesses', NULL, 'Chapter 11 bankruptcy protection is supposed to allow companies to shed debt and get a fresh start. Ideally, creditors recover most of what they’re owed as the restructured firm begins turning a profit.Yet, more companies are liquidated than rebuilt, giving up the second chance at success that the law aims to encourage. In the process, these liquidations ultimately shortchange creditors by billions of dollars a year, according to new research by Harvard Business School Assistant Professor Samuel B. Antill, who studied three decades of court filings.', '2021-09-26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `C_ID` int(11) NOT NULL,
  `C_name` varchar(30) DEFAULT NULL,
  `c_total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`C_ID`, `C_name`, `c_total`) VALUES
(1, 'real state', 100),
(2, 'Insurance', NULL),
(3, 'Saving', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Com_ID` int(11) NOT NULL,
  `U_ID` int(11) DEFAULT NULL,
  `com` varchar(200) DEFAULT NULL,
  `C_date` date DEFAULT NULL,
  `B_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Com_ID`, `U_ID`, `com`, `C_date`, `B_ID`) VALUES
(25, 2, ' Do finance in Nepal riski?', '2021-10-02', 5),
(26, 2, ' multiple comment\r\n', '2021-10-02', 5),
(27, 1, ' hello\r\n', '2021-10-03', 5);

-- --------------------------------------------------------

--
-- Table structure for table `investment_table`
--

CREATE TABLE `investment_table` (
  `Inv_ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `pbp` date DEFAULT NULL,
  `max_pbp` date DEFAULT NULL,
  `invested_amount` int(11) DEFAULT NULL,
  `return_amount` int(11) DEFAULT NULL,
  `U_ID` int(11) DEFAULT NULL,
  `C_name` varchar(30) DEFAULT NULL,
  `C_ID` int(11) DEFAULT NULL,
  `sum_retn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `investment_table`
--

INSERT INTO `investment_table` (`Inv_ID`, `Name`, `total_amount`, `pbp`, `max_pbp`, `invested_amount`, `return_amount`, `U_ID`, `C_name`, `C_ID`, `sum_retn`) VALUES
(7, 'test', -28000, '2021-09-24', '2021-12-24', 30000, 1000, NULL, 'real', 1, 2000),
(8, 'two test', -37300, '2021-12-24', '2022-07-30', 40300, 3000, NULL, 'Insurance', 2, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `U_ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `description` varchar(350) DEFAULT NULL,
  `pass` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`U_ID`, `Name`, `email`, `description`, `pass`) VALUES
(1, 'test', 'test@gmail.com', 'hi i am test.It can be edited as well', 0x31323334),
(2, 'anik', 'anik@gmail.com', '', 0x616e696b);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`B_ID`),
  ADD KEY `Com_ID` (`Com_ID`),
  ADD KEY `A_ID` (`A_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Com_ID`),
  ADD KEY `B_ID` (`B_ID`);

--
-- Indexes for table `investment_table`
--
ALTER TABLE `investment_table`
  ADD PRIMARY KEY (`Inv_ID`),
  ADD KEY `U_ID` (`U_ID`),
  ADD KEY `C_ID` (`C_ID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD UNIQUE KEY `U_ID` (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `B_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Com_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `investment_table`
--
ALTER TABLE `investment_table`
  MODIFY `Inv_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`Com_ID`) REFERENCES `comment` (`Com_ID`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`A_ID`) REFERENCES `admin_tbl` (`A_ID`);

--
-- Constraints for table `investment_table`
--
ALTER TABLE `investment_table`
  ADD CONSTRAINT `investment_table_ibfk_1` FOREIGN KEY (`U_ID`) REFERENCES `user_info` (`U_ID`),
  ADD CONSTRAINT `investment_table_ibfk_2` FOREIGN KEY (`C_ID`) REFERENCES `category` (`C_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
