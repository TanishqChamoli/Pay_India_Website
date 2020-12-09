-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 04:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payindia`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadharpan_link`
--

CREATE TABLE `aadharpan_link` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `aadhar_no` varchar(20) NOT NULL,
  `pan_card` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `gender` int(11) NOT NULL,
  `other_document` varchar(200) NOT NULL,
  `comment` varchar(600) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aadharpan_link`
--

INSERT INTO `aadharpan_link` (`id`, `name`, `mobile`, `aadhar_no`, `pan_card`, `dob`, `pincode`, `gender`, `other_document`, `comment`, `status`) VALUES
(3, 'Tanishq', '9888123456', '1234567890', '1234567890', '2000-11-24', 410210, 0, '16-11-2020-5fb1e6f4432d5good_one.jpg', 'Hello world!', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `aadhar_reprint`
--

CREATE TABLE `aadhar_reprint` (
  `id` int(11) NOT NULL,
  `aadhar_no` varchar(20) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `other_documents` varchar(600) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aadhar_reprint`
--

INSERT INTO `aadhar_reprint` (`id`, `aadhar_no`, `mobile`, `other_documents`, `comments`, `status`) VALUES
(5, '1234567890', '1234567890', '10-11-2020-5faaa75731ff0good_one.jpg', '121tefadfasdada', 'false'),
(6, '123412341234', '9876543210', '', 'This is a test file.', 'true'),
(7, '1267899876543235678', '1234567890', '', '', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `table_id` int(50) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'incomplete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin1_replies`
--

CREATE TABLE `admin1_replies` (
  `local_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `reply` varchar(200) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `q_id` int(10) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin1_replies`
--

INSERT INTO `admin1_replies` (`local_id`, `type`, `reply`, `comments`, `q_id`, `date`) VALUES
(1, 'itr_gst', '16-11-2020-5fb2941bc75d4good_one.jpg', 'Hello world.', 1, '16-11-2020');

-- --------------------------------------------------------

--
-- Table structure for table `admin2`
--

CREATE TABLE `admin2` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `table_id` int(50) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'incomplete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin2_replies`
--

CREATE TABLE `admin2_replies` (
  `local_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `q_id` int(10) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin2_replies`
--

INSERT INTO `admin2_replies` (`local_id`, `type`, `reply`, `comments`, `q_id`, `date`) VALUES
(11, 'aadhar_reprint', '16-11-2020-5fb287685466cPIC NDA.jpg', 'This is for the test run.', 6, '16-11-2020');

-- --------------------------------------------------------

--
-- Table structure for table `bill_payment`
--

CREATE TABLE `bill_payment` (
  `payment_type` varchar(50) NOT NULL,
  `ca_number` varchar(50) NOT NULL,
  `operator_circle` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `operator_circle_1` varchar(50) NOT NULL,
  `due_date` date NOT NULL,
  `client_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fssai`
--

CREATE TABLE `fssai` (
  `aadhar_no` int(12) NOT NULL,
  `pan_card_no` int(10) NOT NULL,
  `business_detail` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_number` int(12) NOT NULL,
  `photo_name` varchar(50) NOT NULL,
  `noc` varchar(50) NOT NULL,
  `address_proof` varchar(50) NOT NULL,
  `other_document` varchar(50) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `index_pan_card_uti`
--

CREATE TABLE `index_pan_card_uti` (
  `client_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `office_address` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state1` varchar(50) NOT NULL,
  `firm_name` varchar(50) NOT NULL,
  `aadhar_no` varchar(16) NOT NULL,
  `pan_no` varchar(10) NOT NULL,
  `account_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index_pan_card_uti`
--

INSERT INTO `index_pan_card_uti` (`client_name`, `username`, `office_address`, `pincode`, `mobile_number`, `email`, `state1`, `firm_name`, `aadhar_no`, `pan_no`, `account_type`) VALUES
('Tanishq Chamoli', 'tanishq', 'tanishq', 123412, '1234567890', 'tanishq.chamoli@gmail.com', 'Punjab', 'Tanishq', '123456789120', '1234567890', 'Distributor');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `registration_no` varchar(50) NOT NULL,
  `policy_expired_or_not` varchar(50) NOT NULL,
  `last_claim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `itr_gst`
--

CREATE TABLE `itr_gst` (
  `id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `firm_name` varchar(50) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `firm_type` varchar(50) NOT NULL,
  `office_address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `acc_no` varchar(16) NOT NULL,
  `ifsc` varchar(11) NOT NULL,
  `nature_of_business_activity` varchar(50) NOT NULL,
  `placeofbusiness` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `confirm_docs` varchar(50) NOT NULL,
  `other_document` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itr_gst`
--

INSERT INTO `itr_gst` (`id`, `client_name`, `firm_name`, `client_email`, `mobile_number`, `firm_type`, `office_address`, `city`, `pincode`, `acc_no`, `ifsc`, `nature_of_business_activity`, `placeofbusiness`, `photo`, `confirm_docs`, `other_document`, `status`) VALUES
(1, 'Tanishq Chamoli', 'Tanishq', 'tanishqspike114@gmail.com', '9888553116', 'option1', '#463 M Fouji colony Kharar', 'Kharar', '140210', '1234567890987654', '12345678909', 'I am the king.', 'option2', 'Tanishq Chamoligood_one.jpg', 'on', 'Tanishq Chamoli', 'true'),
(2, 'Sonam Garg', 'Tanishq', 'tanishqspike114@gmail.com', '9888553116', 'option1', '#463 M Fouji colony Kharar', 'Kharar', '140210', '123456789876321', '123456432', 'Hello madam.', 'option1', 'Tanishq Chamoligood_one.jpg', 'on', 'Tanishq Chamoli', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `msme`
--

CREATE TABLE `msme` (
  `aadhar_no` varchar(12) NOT NULL,
  `gst_no` varchar(16) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `category` varchar(10) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `acc_no` varchar(16) NOT NULL,
  `ifsc` varchar(11) NOT NULL,
  `firm_name` varchar(50) NOT NULL,
  `firm_type` varchar(50) NOT NULL,
  `firm_date` date NOT NULL,
  `nature_of_work` varchar(50) NOT NULL,
  `office_address` varchar(50) NOT NULL,
  `state1` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `emp_working` varchar(50) NOT NULL,
  `physically_handicapped` varchar(50) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `pan_card` varchar(50) NOT NULL,
  `other_document` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pfrefund`
--

CREATE TABLE `pfrefund` (
  `aadhar_no` varchar(12) NOT NULL,
  `uan_no` varchar(12) NOT NULL,
  `pan_card_no` varchar(10) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `acc_no` varchar(16) NOT NULL,
  `ifsc` varchar(11) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `job_leaving_date` date NOT NULL,
  `request_type` varchar(50) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `other_document` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pvc_card`
--

CREATE TABLE `pvc_card` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `fpass` varchar(100) NOT NULL,
  `dispatch_address` varchar(600) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `document` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pvc_card`
--

INSERT INTO `pvc_card` (`id`, `cname`, `fpass`, `dispatch_address`, `mobile`, `document`, `status`) VALUES
(2, 'Tanishq Chamoli', 'Strong_pass', 'Home address', '123456789091', '16-11-2020-5fb1db8b95981good_one.jpg', 'false'),
(3, 'Sonam Garg', '1234', 'Address is correct', '1234567890', '16-11-2020-5fb1dbdf9bc23good_one.jpg', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `votercard`
--

CREATE TABLE `votercard` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `relative_name` varchar(100) NOT NULL,
  `relative_type` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `village` varchar(50) NOT NULL,
  `postoffice` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `ageproof_option` varchar(50) NOT NULL,
  `addressproof_option` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `ageproofdocument` varchar(50) NOT NULL,
  `addressproofdocument` varchar(50) NOT NULL,
  `otherdocument` varchar(50) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votercard`
--

INSERT INTO `votercard` (`id`, `name`, `dob`, `mobile`, `relative_name`, `relative_type`, `street`, `village`, `postoffice`, `pincode`, `state`, `district`, `ageproof_option`, `addressproof_option`, `gender`, `ageproofdocument`, `addressproofdocument`, `otherdocument`, `comments`, `status`) VALUES
(5, 'Tanishq', '2000-11-24', '1234567890', 'PD Mathpal', 'option2', '#463 M Fouji colony Kharar', 'Mohali', 'Mohali', 140210, 'Punjab', 'option2', 'option2', 'option2', 'Male', '13-11-2020-5fae8622041e4Screenshot (12).png', '13-11-2020-5fae86220b021Screenshot (12).png', '', '', 'false'),
(6, 'Sonam', '2000-08-14', '1234567890', 'Tanishq', 'option1', '#463 M Fouji colony Kharar', 'Mohali', 'Mohali', 140209, 'Punjab', 'option1', 'option1', 'option2', 'Female', '13-11-2020-5fae955365801good_one.jpg', '13-11-2020-5fae955366762good_one.jpg', '13-11-2020-5fae955360460good_one.jpg', 'Hello World!', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadharpan_link`
--
ALTER TABLE `aadharpan_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aadhar_reprint`
--
ALTER TABLE `aadhar_reprint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin1_replies`
--
ALTER TABLE `admin1_replies`
  ADD PRIMARY KEY (`local_id`);

--
-- Indexes for table `admin2`
--
ALTER TABLE `admin2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin2_replies`
--
ALTER TABLE `admin2_replies`
  ADD PRIMARY KEY (`local_id`);

--
-- Indexes for table `itr_gst`
--
ALTER TABLE `itr_gst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pvc_card`
--
ALTER TABLE `pvc_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votercard`
--
ALTER TABLE `votercard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aadharpan_link`
--
ALTER TABLE `aadharpan_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aadhar_reprint`
--
ALTER TABLE `aadhar_reprint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin1_replies`
--
ALTER TABLE `admin1_replies`
  MODIFY `local_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin2`
--
ALTER TABLE `admin2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin2_replies`
--
ALTER TABLE `admin2_replies`
  MODIFY `local_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `itr_gst`
--
ALTER TABLE `itr_gst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pvc_card`
--
ALTER TABLE `pvc_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `votercard`
--
ALTER TABLE `votercard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
