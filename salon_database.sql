-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 03:22 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `salon_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`ID` int(11) NOT NULL,
  `Name` varchar(65) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`ID`, `Name`, `Address`, `Phone`, `Email`, `date`) VALUES
(1, 'seapogi', '2147483647', 0, 'seancanaryatienza@yahoo.com', '2018-04-17'),
(2, 'Stephanie', '2147483647', 0, 'stephaniefranciscorios@gmail.com', '2018-10-08'),
(3, 'Bianca', '94938342', 0, 'AKASJSH@Yahoo.com', '2018-04-27'),
(4, 'vashdklfsh', '9348989', 0, 'kgskj@gmail.com', '2018-04-20'),
(5, 'wejlEWKEJW', '9884342', 0, 'dsdhjhj@gmail.com', '2018-04-26'),
(6, 'jddjdjd', '2147483647', 0, 'wjwqjwj@gmail.com', '2018-04-27'),
(7, 'justin bieber', '83832892', 0, 'wkdweopkop@yahoo.com', '2018-04-21'),
(8, 'adjsjwijwij', '3344', 0, 'ioewjewiewi@gmail.com', '2018-04-28'),
(9, 'dewewwewwe', '33322', 0, 'erwejiew@gmail.com', '2018-04-27'),
(10, 'pak', '3432323', 0, 'ganern@hhaha.com', '2018-04-27'),
(11, 'pakjidsdas', '34323223', 0, 'ganasasern@hhaha.com', '2018-04-27'),
(12, 'nuginagawako', '343232233', 0, 'kailanganpumasa@hhaha.com', '2018-04-27'),
(13, 'nuginagawakok', '2147483647', 0, 'kailanganspumasa@hhaha.com', '2018-04-27'),
(14, 'wag', '882829', 0, 'nawag@yahoo.com', '2018-04-27'),
(15, 'kaya', '17171717', 0, 'ko@yahoo.com', '2018-04-27'),
(16, 'kung', '123456', 0, 'wala@yahoo.com', '2018-04-27'),
(17, 'kaya ko to', '1234569', 0, 'laban@yahoo.com', '2018-04-27'),
(18, 'kaya ko e', '12345694', 0, 'labane@yahoo.com', '2018-04-27'),
(19, 'kaya ko esdssss', '123435694', 0, 'labassne@yahoo.com', '2018-04-27'),
(20, 'kaya ko eqsdssss', '1234356294', 0, 'labasqsne@yahoo.com', '2018-04-27'),
(21, 'im', '2147483647', 0, 'gonna@yahoo.com', '2018-04-27'),
(22, 'wewew', '34344334', 0, 'dwewuo4372u@gmail.com', '2018-04-27'),
(23, 'iwqjwijwq', '992920912', 0, '3993129@gmail.com', '2018-04-27'),
(24, 'qsas', '288728172', 0, 'hjhsh@yahoo.com', '2018-04-27'),
(25, 'justin', '3212231', 0, 'asawanistephsijustin@gmail.com', '2018-04-27'),
(26, 'justina', '32122131', 0, 'asawasnistephsijustin@gmail.com', '2018-04-27'),
(27, 'justinaq', '321221312', 0, 'asawasnistepwhsijustin@gmail.com', '2018-04-27'),
(28, 'qwqhajhsajs', '2', 0, 'wkwsjkqw@qyh', '2018-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `email`, `password`) VALUES
(1, 'her', 'her@y.c', 'her'),
(2, 'SalonDeMilleno', 'SalonDemilleno@gmail.com', 'ba6a7d46028a82552da8fdede64d10e7'),
(3, 'lorena', 'stephanie@yahoo.com', '661880631ce1bee3558fe57f94c2f20a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
