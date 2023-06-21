-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2022 at 10:30 PM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yoojiw_practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblUsers`
--

CREATE TABLE `tblUsers` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblUsers`
--

INSERT INTO `tblUsers` (`username`, `password`) VALUES
('jiwoon', 'jiwoonjiwoonjiwoon'),
('kate', '$2y$10$iJCZHB5uCXQQHSDeZWHhTeJYisnUX.DISJcmn3Tc7wAkVxdnfr7Bm'),
('john', 'johnjohnjohn'),
('henry', '$2y$10$eNt1gOjxqNFcP53des.IWu7hLTSWyQ5jRTxfg7pXVzQ944t0v2Z7m'),
('felix', '$2y$10$9GOYiAGWueDDHwPJG/EpqOkmrFg9Xzgfs2EFWSE66JMDcyJOB6W4G'),
('cindy', '$2y$10$s9J1u/xV4L6hnkWGj64/lOt8bC38gZNzH5QxP33B/OLYjujefIVzS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
