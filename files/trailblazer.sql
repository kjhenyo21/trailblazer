-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2013 at 12:14 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trailblazer`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

DROP TABLE IF EXISTS `company_info`;
CREATE TABLE IF NOT EXISTS `company_info` (
  `license_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`license_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`license_no`, `name`, `address`) VALUES
('4763467', 'Lalaine''s Bookstore', 'Naval, Biliran'),
('5409285', 'Lalaine''s Bookstore', 'Naval, Biliran');

-- --------------------------------------------------------

--
-- Table structure for table `database`
--

DROP TABLE IF EXISTS `database`;
CREATE TABLE IF NOT EXISTS `database` (
  `hostname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `database_name` varchar(255) NOT NULL,
  `database_driver` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doc_locations`
--

DROP TABLE IF EXISTS `doc_locations`;
CREATE TABLE IF NOT EXISTS `doc_locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `file_extension` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `doc_locations`
--

INSERT INTO `doc_locations` (`id`, `document`, `type`, `path`, `file_extension`) VALUES
(1, 'Cash Receipts Journal', 1, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\journals\\cash_receipts', 'jl'),
(2, 'Cash Disbursements Journal', 1, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\journals\\cash_disbursements', 'jl'),
(3, 'General Ledger', 2, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\ledgers\\general_ledgers', 'lg'),
(4, 'Income Statement', 3, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\financial_statements\\income_statements', 'is'),
(5, 'Balance Sheet', 3, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\financial_statements\\balance_sheets', 'fh'),
(6, 'Sale Transactions', 4, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\transaction_files\\sale_transactions', 'tf'),
(7, 'Purchase Transactions', 4, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\transaction_files\\purchase_transactions', 'gf'),
(8, 'Expense Transactions', 4, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\transaction_files\\expense_transactions', 'tf'),
(9, 'Nono', 5, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\transaction_files\\sale_transactions', 'lk');

-- --------------------------------------------------------

--
-- Table structure for table `doc_locations_temp`
--

DROP TABLE IF EXISTS `doc_locations_temp`;
CREATE TABLE IF NOT EXISTS `doc_locations_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `file_extension` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doc_types`
--

DROP TABLE IF EXISTS `doc_types`;
CREATE TABLE IF NOT EXISTS `doc_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `doc_types`
--

INSERT INTO `doc_types` (`id`, `type`) VALUES
(1, 'Journals'),
(2, 'Ledgers'),
(3, 'Financial Statements'),
(4, 'Transaction Files'),
(5, 'Log Files');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `date_accessed` datetime NOT NULL,
  `size` varchar(255) NOT NULL,
  `checksum` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `path`, `filename`, `date_created`, `date_modified`, `date_accessed`, `size`, `checksum`) VALUES
(1, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\journals\\cash_receipts', 'crj-1-2010.jl', '2013-03-18 21:23:38', '2013-03-20 15:03:50', '2013-03-18 21:23:38', '141', '969266750'),
(2, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\ledgers\\general_ledgers', 'gl-1-2010.lg', '2013-03-18 21:23:45', '2013-03-19 03:37:10', '2013-03-18 20:41:01', '197', '877393838'),
(3, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\financial_statements\\income_statements', 'is-1-2010.is', '2013-03-18 21:15:47', '2013-03-20 17:21:23', '2013-03-18 16:26:59', '85', '1980214701'),
(4, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\transaction_files\\sale_transactions', 'st-1-2010.tf', '2013-03-19 22:41:42', '2013-03-24 22:58:19', '2013-03-19 22:41:42', '779', '1515984537'),
(5, 'D:\\Kristian Lora\\My Documents\\Lalaine''s Bookstore\\transaction_files\\sale_transactions', 'std-1-2010.tf', '2013-03-19 22:41:25', '2013-03-20 15:24:34', '2013-03-18 15:57:05', '1037', '1878735891');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref` int(11) NOT NULL,
  `date_sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_received` datetime NOT NULL,
  `date_confirmed` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `or_no` varchar(255) NOT NULL,
  `amt` double NOT NULL,
  `reply` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ref` (`ref`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `Date` varchar(255) DEFAULT NULL,
  `OR No` varchar(255) DEFAULT NULL,
  `Amount Due` varchar(255) DEFAULT NULL,
  `VAT Amount` varchar(255) DEFAULT NULL,
  `Customer Name` varchar(255) DEFAULT NULL,
  `Customer Address` varchar(255) DEFAULT NULL,
  `Customer Contact` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Date`, `OR No`, `Amount Due`, `VAT Amount`, `Customer Name`, `Customer Address`, `Customer Contact`) VALUES
('2010-01-02', '6253', '997.50', '106.86', 'Mary Ann Polinar', 'Lahug. Cebu City', '9158342099'),
('2010-01-02', '6254', '36.00', '3.86', 'Yvette Doyongan', 'Kamputhaw. Cebu City', '9179414753'),
('2010-01-02', '6255', '304.50', '32.63', 'Mae Carmel Boquia', 'Dumanjug', '9332567821'),
('2010-01-04', '6256', '210.00', '22.50', 'Eriberta Canada', 'Carcar', '9053171598'),
('2010-01-04', '6257', '131.50', '14.09', 'Justine Balan', '', '9332567821'),
('2010-01-04', '6258', '61.50', '6.59', '', '', ''),
('2010-01-04', '6259', '99.50', '10.66', 'Elaine Pahang', 'Talisay City', '9332567821'),
('2010-01-04', '6260', '86.50', '9.27', '', '', ''),
('2010-01-06', '6261', '513.00', '54.96', 'Kirby Taghoy', '', '9332567821'),
('2010-01-06', '6262', '180.00', '19.29', 'Demelo Lao', '', '9994406820'),
('2010-01-06', '6263', '33.00', '3.54', 'Kristian Lora', 'Lahug', '9336925206'),
('2010-01-06', '6264', '5.00', '0.54', 'Karl Arevalo', 'Manila', '9332567821');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

DROP TABLE IF EXISTS `transaction_details`;
CREATE TABLE IF NOT EXISTS `transaction_details` (
  `Date` varchar(255) DEFAULT NULL,
  `OR No` varchar(255) DEFAULT NULL,
  `Item` varchar(255) DEFAULT NULL,
  `Quantity` varchar(255) DEFAULT NULL,
  `Unit Price` varchar(255) DEFAULT NULL,
  `Amount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`Date`, `OR No`, `Item`, `Quantity`, `Unit Price`, `Amount`) VALUES
('2010-01-02', '6253', 'DISCRT-MATH-ROSEN-4th-ED', '2', '480.00', '960.00'),
('2010-01-02', '6253', 'BEST-BUY-SCISSORS', '1', '37.50', '37.50'),
('2010-01-02', '6254', 'SUPERB-GP-318', '4', '9.00', '36.00'),
('2010-01-02', '6255', 'GUIDE-LEADRSHP-LEE', '1', '124.50', '124.50'),
('2010-01-02', '6255', 'OPTCL-MOUSE-ORANGE', '1', '180.00', '180.00'),
('2010-01-04', '6256', 'BOND-PAPR-METRO', '1', '160.00', '160.00'),
('2010-01-04', '6256', 'HBW-BALLPEN', '5', '10.00', '50.00'),
('2010-01-04', '6257', 'ERASER-PILOT', '1', '14.00', '14.00'),
('2010-01-04', '6257', 'HBW-BALLPEN', '4', '10.00', '40.00'),
('2010-01-04', '6257', 'BEAR-STUFF', '2', '38.50', '77.00'),
('2010-01-04', '6258', 'MONGOL-2-PENCIL', '3', '11.00', '33.00'),
('2010-01-04', '6258', 'ERASER-PILOT', '2', '14.00', '28.00'),
('2010-01-04', '6259', 'DESK-FRAME', '1', '99.00', '99.00'),
('2010-01-04', '6260', 'KEY-CHAIN', '2', '15.00', '30.00'),
('2010-01-04', '6260', 'SUPERB-GP-318', '5', '9.00', '45.00'),
('2010-01-04', '6260', 'MONGOL-2-PENCIL', '1', '11.00', '11.00'),
('2010-01-05', '6261', 'MONGOL-2-PENCIL', '3', '11.00', '33.00'),
('2010-01-05', '6261', 'DISCRT-MATH-ROSEN-4th-ED', '1', '480.00', '480.00'),
('2010-01-05', '6262', 'OPTCL-MOUSE-ORANGE', '1', '11.00', '180.00'),
('2010-01-05', '6263', 'MONGOL-2-PENCIL', '3', '11.00', '33.00'),
('2010-01-05', '6264', 'PINNACLE', '1', '5.00', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

DROP TABLE IF EXISTS `users_info`;
CREATE TABLE IF NOT EXISTS `users_info` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `sex` varchar(12) NOT NULL,
  `bdate` datetime NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`no`, `id`, `lname`, `fname`, `mname`, `sex`, `bdate`, `address`, `contact`, `email`) VALUES
(1, '2009-08015', 'Lora', 'Kristian Jacob', 'Abad', 'Male', '1992-12-12 00:00:00', 'Cebu', '09327331859', 'kjalora92@yahoo.com'),
(2, '2009-08015', 'Lora', 'Kristian Jacob', 'Abad', 'Male', '1992-12-12 00:00:00', 'Cebu', '09327331859', 'kjalora92@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

DROP TABLE IF EXISTS `user_accounts`;
CREATE TABLE IF NOT EXISTS `user_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `password` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `username`, `position`, `password`) VALUES
(1, 'kjhenyo21', 'kjalora92@yahoo.com', 'ifhv2cauTrb74hMHiXUCPuEvWXGZmvIiPmZrW7NcIJoeYSUGtny4tR9Gtl0RIonQ7M50wM4DbygYZSuaqC7KDA=='),
(2, 'kjhenyo21', 'kjalora92@yahoo.com', 'C7TwTxeJ5Om2aPqkinO1L0WwlOS76rKDuxDrVGYu3Bg5UhuE3cX8IL897d8Ze1g3o5fc6wOuJAyCbFdpCSvjbw==');

-- --------------------------------------------------------

--
-- Table structure for table `user_sessions`
--

DROP TABLE IF EXISTS `user_sessions`;
CREATE TABLE IF NOT EXISTS `user_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sessions`
--

INSERT INTO `user_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('04196db40c9b0f628d0fd9da402e2e5f', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:19.0) Gecko/20100101 Firefox/19.0', 1364166826, 'a:3:{s:6:"status";s:14:"authorizedUser";s:8:"username";s:9:"kjhenyo21";s:17:"items_of_interest";s:3:"250";}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
