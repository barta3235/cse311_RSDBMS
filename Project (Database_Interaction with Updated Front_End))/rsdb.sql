-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 01:52 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Name`, `Password`) VALUES
(1100, 'Ahnaf', 'admin1234'),
(1200, 'Shadman', 'admin1235'),
(1300, 'Prottoy', 'admin1236');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookID` int(50) NOT NULL,
  `CustomerID` int(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MobileNumber` int(50) NOT NULL,
  `VehicleType` varchar(50) NOT NULL,
  `VehicleClass` varchar(50) NOT NULL,
  `VehicleID` int(50) NOT NULL,
  `VehicleFare` int(11) NOT NULL,
  `Driverphone` int(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `StartLocation` varchar(50) NOT NULL,
  `StartTime` varchar(50) NOT NULL,
  `EndLocation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookID`, `CustomerID`, `FirstName`, `MobileNumber`, `VehicleType`, `VehicleClass`, `VehicleID`, `VehicleFare`, `Driverphone`, `Date`, `StartLocation`, `StartTime`, `EndLocation`) VALUES
(34, 22, 'Ahnaf', 1621089962, 'Mercedes Benz', 'Premium', 4322, 1500, 0, '2021-9-10', 'khanpur', '11:30 am', 'chasara'),
(35, 22, 'ddddd', 1621089962, 'Camry', 'Economy', 4312, 200, 0, '2021-9-10', 'Jamtola', '12:40 pm', 'narayanganj'),
(36, 22, 'ddddd', 1621089962, 'Camry', 'Economy', 4312, 200, 1783476546, '2021-9-10', 'Jamtola', '12:40 pm', 'narayanganj'),
(39, 28, 'ddddd', 1921098963, 'Premio', 'Premium', 4313, 200, 0, '2021-9-11', 'Himalaya', '12:40 pm', 'chasara'),
(40, 28, 'ddddd', 1921098963, 'Civic', 'Premium', 4311, 500, 0, '2021-9-11', 'Himalaya', '12:40', 'bhola'),
(41, 28, 'ddddd', 1921098963, 'Civic', 'Premium', 4311, 500, 1783476545, '2021-9-11', 'Himalaya', '12:40', 'bhola'),
(42, 26, 'Daiyan', 1789674347, 'Mercedes Benz', 'Economy', 4322, 1500, 178347888, '2021-9-11', 'Himalaya', '12:40', 'd'),
(43, 29, 'Daiyan', 1789674346, 'Ford Van', 'Premium', 4325, 700, 0, '2021-9-11', 'Banani', '10:20pm', 'motijheeel bus stand'),
(44, 29, 'ddddd', 1789674346, 'Civic', 'Economy', 4311, 500, 1783476545, '2021-9-11', 'Himalaya', '12:40', 'ururur'),
(45, 22, 'Ahnaf', 1621089962, 'Civic', 'Economy', 4311, 500, 1783476545, '2021-9-11', 'Jamtola', '12:40 pm', 'narayanganj'),
(46, 31, ' Ron W', 1711522622, 'Mercedes Benz', 'Premium', 4322, 1500, 178347888, '2021-9-11', 'Jamtola', '12:40 pm', 'chasara'),
(47, 32, 'Daiyan', 1680012666, 'Mercedes Benz', 'Economy', 4322, 1500, 178347888, '2021-9-12', 'Himalaya', '12:40', 'ururur'),
(48, 29, 'Daiyan', 1789674346, 'Ford Van', 'Premium', 4325, 700, 1709976545, '2021-9-13', 'Gulshan', '11:30 pm', 'Banani'),
(49, 33, 'Sara', 1977533622, 'BMW', 'Premium', 4324, 1500, 0, '2021-9-13', 'chashara', '11:30 am', 'Pabna'),
(50, 33, 'Sara', 1977533622, 'BMW', 'Premium', 4324, 1500, 1553474444, '2021-9-13', 'chashara', '11:30 am', 'Pabna');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(50) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Birthdate` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `MobileNumber` int(50) NOT NULL,
  `CityAddress` varchar(50) NOT NULL,
  `StreetAddress` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Fname`, `Lname`, `Birthdate`, `Gender`, `MobileNumber`, `CityAddress`, `StreetAddress`, `Email`) VALUES
(22, 'jjjjjjjjjjjjj', ' karpa', '2021-09-01', 'Male', 1621089962, 'Narayanganj', 'Bank colony ', 'bartamitdaiyan@gmail.com'),
(24, '   toxy', '   locket', '0044-04-04', '   Male', 1720222334, '   Dinanaee', '      youyiyi', 'jevo.2987@gmail.com'),
(26, 'rahh', 'maan', '0004-04-04', 'Male', 1789674347, 'Narayanganj', 'indonasia', 'ahnafdaiyan3235@gmail.com'),
(27, '  shadman', '   dong', '0044-04-04', '  Male', 1789674348, '  Dinanaee', '    nakuyy', 'paali@gmail.com'),
(28, 'loknath', 'mishti', '0044-04-04', 'Male', 1921098963, 'Borishal', 'solimul road', 'bartamitdaiyan@gmail.com'),
(29, ' polash', ' rerre', '', ' Female', 1789674346, ' Narayanganj', '  ttrtrtr', 'bartamitdaiyan@gmail.com'),
(30, ' ddddd', ' fffff', '', ' Female', 1711533633, 'cheeeseeee', '  youyiyi', 'ahnafdaiyan3235@gmail.com'),
(31, 'chill', 'man', '0033-03-31', 'Female', 1711522622, 'Dinanaee', 'Erssaase', 'jevo.2987@gmail.com'),
(32, 'Prottoy', 'akil', '0033-03-31', 'Male', 1680012666, 'ngonj', 'indonasia', 'bartamitdaiyan@gmail.com'),
(33, 'Sara', 'Ashfi', '2005-08-12', 'Female', 1977533622, 'Narayanganj', 'Bank colony', 'sarajevo.2987@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `DriverID` int(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Age` int(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `NID` int(50) NOT NULL,
  `LicenseNumber` int(50) NOT NULL,
  `DriverMobile` int(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`DriverID`, `FirstName`, `LastName`, `Age`, `Gender`, `NID`, `LicenseNumber`, `DriverMobile`, `Password`) VALUES
(1, 'Robin', 'Hood', 44, 'Male', 91412341, 33312344, 1783476545, 'Driver1'),
(2, 'Michael', 'Scott', 33, 'Male', 91412342, 33312345, 1783476546, 'Driver2'),
(3, 'Rontal', 'Zeich', 22, 'Male', 91412343, 33312347, 1783476547, 'Driver3'),
(4, 'Dave', 'Rocks', 55, 'Male', 91412344, 33312348, 1783476548, 'Driver4'),
(5, 'Jim', 'helpfart', 55, 'Male', 91455679, 33312349, 1783476550, 'Driver5'),
(6, 'Pam', 'shittart', 33, 'Female', 91412377, 37712345, 1793476546, 'Driver6'),
(7, 'Kelly', 'coconut', 44, 'Female', 91552377, 31712345, 1553476546, 'Driver7'),
(8, 'Rock', 'Bottom', 25, 'Male', 91552444, 32712345, 1653476546, 'Driver8'),
(9, 'Gibs', 'Horton', 22, 'Male', 91412348, 33312300, 1783476500, 'Driver9'),
(10, 'Jane', 'Scott', 33, 'Female', 11412342, 13312345, 1700476546, 'Driver10'),
(11, 'Yota', 'Rota', 44, 'Female', 1552377, 31333345, 1779976546, 'Driver11'),
(12, 'Robert ', 'Clive', 31, 'Male', 61412341, 66312344, 178347888, 'Driver12'),
(13, 'Eva', 'brawn', 2021, ' Male', 17712342, 13666345, 1900476546, ' Driver13'),
(14, 'Pixam', 'Singh', 44, 'Female', 91232377, 22333345, 1553474444, 'Driver14'),
(15, 'Kala', 'Jahangir', 43, 'Male', 91412000, 33399344, 1709976545, 'Driver15'),
(16, ' Robert', ' California', 0, ' Male', 32323232, 11111111, 169430033, 'Driver16');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feed_Back_No` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `MobileNumber` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feed_Back_No`, `Name`, `MobileNumber`, `Email`, `Message`) VALUES
(1, 'Ahnaf', 1789674346, 'ahnaf@gmail.com', ' The company service is so spot on that I might start booking rides all day every day '),
(2, 'Sera', 1977533622, 'addddf@gmail.com', ' Very Good');

-- --------------------------------------------------------

--
-- Table structure for table `hiredriver`
--

CREATE TABLE `hiredriver` (
  `ID` int(50) NOT NULL,
  `FirstName` int(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Birthdate` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `MobileNumber` int(50) NOT NULL,
  `NID` int(50) NOT NULL,
  `LicenseNumber` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Experience` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hiredriver`
--

INSERT INTO `hiredriver` (`ID`, `FirstName`, `LastName`, `Birthdate`, `Gender`, `MobileNumber`, `NID`, `LicenseNumber`, `Email`, `Experience`) VALUES
(1, 0, '424242424', '4444-04-04 ', 'Male', 2147483647, 2147483647, 424242424, ' dgdg@ff.com', 'sfsfsfsf sfsfsfsfsfs fsfsfsfs sfsfsfsfs fsfs sfsfs fsfs fsfsf sfsfsf sfsfsfs'),
(2, 0, '9999999', '0353-03-04 ', 'Other', 999999999, 999999999, 9999999, ' dtytytyg@ff.com', 'sfsfsfsf sfsfsfsfsfs fsfsfsfs sfsfsfsfs fsfs sfsfs fsfs fsfsf sfsfsf sfsfsfs');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentSlipNumber` int(50) NOT NULL,
  `BookingID` int(50) NOT NULL,
  `CustomerContact` int(50) NOT NULL,
  `Amount` int(50) NOT NULL,
  `PaymentMethod` varchar(50) NOT NULL,
  `CardNumber` varchar(50) DEFAULT NULL,
  `CVV` varchar(50) DEFAULT NULL,
  `ExpireDate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentSlipNumber`, `BookingID`, `CustomerContact`, `Amount`, `PaymentMethod`, `CardNumber`, `CVV`, `ExpireDate`) VALUES
(11, 34, 1621089962, 1500, ' Cash', '', ' ', ''),
(13, 39, 1921098963, 200, ' Cash', '', ' ', ''),
(14, 47, 1680012666, 1500, ' Card', '', ' ', ''),
(15, 48, 1789674346, 700, ' Cash', '', ' ', ''),
(16, 50, 1977533622, 1500, ' Cash', '', ' ', '');

-- --------------------------------------------------------

--
-- Table structure for table `rentcar`
--

CREATE TABLE `rentcar` (
  `ID` int(50) NOT NULL,
  `OwnerName` varchar(50) NOT NULL,
  `MobileNumber` int(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `VehicleType` varchar(50) NOT NULL,
  `ModelName` varchar(50) NOT NULL,
  `ModelYear` int(50) DEFAULT NULL,
  `RegistrationNumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentcar`
--

INSERT INTO `rentcar` (`ID`, `OwnerName`, `MobileNumber`, `Address`, `Email`, `VehicleType`, `ModelName`, `ModelYear`, `RegistrationNumber`) VALUES
(3, 'Al hams', 0, ' fjfhjfaf', 'rrrr@h.coms', 'Sedan', 'rocket', 2000, '111122333'),
(4, 'hasankk', 0, ' toooot', 'tttot@h.coms', 'Mini-Van', 'pocket', 2004, '55555999');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `VehicleID` int(50) NOT NULL,
  `DriverID` int(50) NOT NULL,
  `ModelName` varchar(50) NOT NULL,
  `ModelYear` varchar(50) NOT NULL,
  `RegistrationNumber` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `ServiceClass` varchar(50) NOT NULL,
  `Fare` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`VehicleID`, `DriverID`, `ModelName`, `ModelYear`, `RegistrationNumber`, `Type`, `ServiceClass`, `Fare`) VALUES
(4311, 1, ' Civicc', ' 2020', ' 444eeecse111', ' Sedan', ' Premium', 500),
(4312, 2, 'Camry', '2020', '444eeecse112', 'Sedan', 'Economy', 200),
(4313, 3, 'Premio', '2020', '444eeecse113', 'Sedan', 'Economy', 200),
(4314, 4, ' Elantra', ' 2021', ' 444eeecse114', ' Sedan', ' Premium', 500),
(4315, 5, 'Allion', '2020', '444eeecse115', 'Sedan', 'Economy', 250),
(4316, 6, 'Corolla', '2020', '444eeecse116', 'Sedan', 'Economy', 200),
(4317, 7, 'Accord', '2020', '444eeecse117', 'Sedan', 'Premium', 500),
(4318, 8, 'Axio', '2020', '444eeecse118', 'Sedan', 'Economy', 200),
(4319, 9, 'Prius', '2020', '444eeecse119', 'Sedan', 'Economy', 200),
(4320, 10, 'Noah', '2020', '444eeecse200', 'Mini-Van', 'Economy', 800),
(4321, 11, ' Hiace', ' 2020', '88eee88eee', ' Mini-Van', ' Economy', 900),
(4322, 12, 'Mercedes Benz', '2020', '444eeecse88', 'Sedan', 'Premium', 1500),
(4323, 13, ' Land Cruiser', ' 2020', ' 444vvvvf66', ' SUV', ' Premium', 1500),
(4324, 14, 'BMW', '2020', '444eeee444', 'Sedan', 'Premium', 1500),
(4325, 15, 'Ford Van', '2020', '444eeee000', 'Mini-Van', 'Economy', 700),
(4326, 16, 'Mazda cx5', '2021', '3333eeee', 'Sedan', 'Premium', 700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookID`,`MobileNumber`,`CustomerID`) USING BTREE,
  ADD UNIQUE KEY `BookID` (`BookID`),
  ADD KEY `CustomerID_fk` (`CustomerID`),
  ADD KEY `MobileNumber_fk` (`MobileNumber`),
  ADD KEY `VehicleID_fk` (`VehicleID`),
  ADD KEY `MobileNumber` (`MobileNumber`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`,`MobileNumber`) USING BTREE,
  ADD UNIQUE KEY `MobileNumber` (`MobileNumber`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`DriverID`),
  ADD UNIQUE KEY `NID` (`NID`),
  ADD UNIQUE KEY `DriverMobile` (`DriverMobile`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feed_Back_No`),
  ADD KEY `MobileNumber_fk` (`MobileNumber`);

--
-- Indexes for table `hiredriver`
--
ALTER TABLE `hiredriver`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentSlipNumber`),
  ADD KEY `BookingID_fk` (`BookingID`),
  ADD KEY `CustomerContact` (`CustomerContact`);

--
-- Indexes for table `rentcar`
--
ALTER TABLE `rentcar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`VehicleID`),
  ADD KEY `DriverID_fk` (`DriverID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1301;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feed_Back_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hiredriver`
--
ALTER TABLE `hiredriver`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentSlipNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rentcar`
--
ALTER TABLE `rentcar`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `VehicleID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4327;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `CustomerID_fk` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `MobileNumber_fk` FOREIGN KEY (`MobileNumber`) REFERENCES `customer` (`MobileNumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `VehicleID_fk` FOREIGN KEY (`VehicleID`) REFERENCES `vehicle` (`VehicleID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `MobileNumber_booktable_fk` FOREIGN KEY (`MobileNumber`) REFERENCES `booking` (`MobileNumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `BookingID_fk` FOREIGN KEY (`BookingID`) REFERENCES `booking` (`BookID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `CustomerContact_fk` FOREIGN KEY (`CustomerContact`) REFERENCES `booking` (`MobileNumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `DriverID_fk` FOREIGN KEY (`DriverID`) REFERENCES `driver` (`DriverID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
