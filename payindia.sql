-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 05:53 AM
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
  `q_id` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `date` varchar(20) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(15, 'pvc_card', '18-11-2020-5fb50976c8508aZVF08.jpg', 'Data ajsfadsadmdn', 7, '18-11-2020'),
(16, 'votercard', '27-11-2020-5fc0eee1bfc88Screenshot (13).png', 'Hogya kaam tera!', 7, '27-11-2020');

-- --------------------------------------------------------

--
-- Table structure for table `bill_payment`
--

CREATE TABLE `bill_payment` (
  `id` int(20) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `ca_number` varchar(50) NOT NULL,
  `operator_circle` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `operator_circle_1` varchar(50) NOT NULL,
  `due_date` date NOT NULL,
  `client_name` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_payment`
--

INSERT INTO `bill_payment` (`id`, `payment_type`, `ca_number`, `operator_circle`, `amount`, `operator_circle_1`, `due_date`, `client_name`, `status`) VALUES
(3, 'option1', '1234567890', 'Punjab', 1234, 'Punjab State Power Corporation Ltd', '2020-02-22', 'Sonam Garg', 'false'),
(4, 'option1', '1234567890', 'Punjab', 1234, 'Punjab State Power Corporation Ltd', '2020-02-22', 'Sonam Garg', 'reject'),
(5, 'option1', '12345678901234567890', 'Punjab', 1213, 'Punjab State Power Corporation Ltd', '1111-11-24', 'Sonam Garg', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `fssai`
--

CREATE TABLE `fssai` (
  `id` int(11) NOT NULL,
  `aadhar_no` int(12) NOT NULL,
  `pan_card_no` int(10) NOT NULL,
  `business_detail` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_number` int(12) NOT NULL,
  `photo_name` varchar(50) NOT NULL,
  `noc` varchar(50) NOT NULL,
  `address_proof` varchar(50) NOT NULL,
  `other_document` varchar(50) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fssai`
--

INSERT INTO `fssai` (`id`, `aadhar_no`, `pan_card_no`, `business_detail`, `email`, `mobile_number`, `photo_name`, `noc`, `address_proof`, `other_document`, `comments`, `status`) VALUES
(3, 1234567890, 1234567890, 'Sonam', 'sonam@gmail.com', 987654321, '1234567890Screenshot (12).png', '1234567890Screenshot (12).png', '1234567890Screenshot (12).png', '', 'This is a test file.', 'false'),
(4, 1234567890, 1234567890, 'Sonam', 'sonam@gmail.com', 987654321, '1234567890Screenshot (12).png', '1234567890Screenshot (12).png', '1234567890Screenshot (12).png', '', 'This is a test file.', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `index_pan_card_uti`
--

CREATE TABLE `index_pan_card_uti` (
  `id` int(11) NOT NULL,
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
  `account_type` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id` int(11) NOT NULL,
  `registration_no` varchar(50) NOT NULL,
  `policy_expired_or_not` varchar(50) NOT NULL,
  `last_claim` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `registration_no`, `policy_expired_or_not`, `last_claim`, `status`) VALUES
(4, '123467890', 'option3', 'option1', 'false');

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
(4, 'Tanishq Chamoli', 'Tanishq', 'tanishqspike114@gmail.com', '1234567890', 'option1', '#463 M Fouji colony Kharar', 'Kharar', '140210', '-1234567890', '12345678909', 'Hello', 'option1', 'Tanishq ChamoliScreenshot (12).png', 'on', '', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `msme`
--

CREATE TABLE `msme` (
  `id` int(11) NOT NULL,
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
  `other_document` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pfrefund`
--

CREATE TABLE `pfrefund` (
  `id` int(11) NOT NULL,
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
  `other_document` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'false'
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
  `document` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pvc_card`
--

INSERT INTO `pvc_card` (`id`, `cname`, `fpass`, `dispatch_address`, `mobile`, `document`, `status`) VALUES
(6, 'Tanishq Chamoli', 'Password', 'Home address', '0987654321', '17-11-2020-5fb33ef62247faZVF08.jpg', 'false'),
(7, 'Tanishq Chamoli', 'Password', 'Home address', '9888553116', '18-11-2020-5fb508498c153aZVF08.jpg', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `retailers`
--

CREATE TABLE `retailers` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `nii` int(10) NOT NULL,
  `tir` int(10) NOT NULL,
  `np` int(10) NOT NULL,
  `grr` int(10) NOT NULL,
  `rbr` int(10) NOT NULL,
  `lbr` int(10) NOT NULL,
  `vir` int(10) NOT NULL,
  `upr` int(10) NOT NULL,
  `gstreg` int(10) NOT NULL,
  `pfrefund` int(10) NOT NULL,
  `fastpanrate` int(10) NOT NULL,
  `pvc` int(10) NOT NULL,
  `nadr` int(10) NOT NULL,
  `udyog` int(10) NOT NULL,
  `password` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retailers`
--

INSERT INTO `retailers` (`id`, `email`, `mobile`, `cname`, `address`, `nii`, `tir`, `np`, `grr`, `rbr`, `lbr`, `vir`, `upr`, `gstreg`, `pfrefund`, `fastpanrate`, `pvc`, `nadr`, `udyog`, `password`, `create_date`, `status`) VALUES
(5, 'retailer@test.com', '1234567890', 'Test', 'Home-address', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, '$2y$10$8wpa0qJEmELkhMwFFyBhnOZOMAalc378GE7jUuEp6/.opgI6l.SrO', '2020-11-27 13:39:07', 'true'),
(6, 'test@test.com', '1234567890', 'Sonam', 'home', 1, 1, 1, 1, 1, 0, 11, 1, 1, 1, 11, 1, 1, 1, '$2y$10$RNzoMMvKM.0kqhIzAgk2m.jS8iKfo783.18WRj7DdalFnmKy.aR5i', '2020-11-27 14:08:15', 'false'),
(7, 'arjun@test', '1234567890', 'Arjun', 'home', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '$2y$10$44hUGs6OgQeZd37Ajrv4F.9hWA5BQ0ljmpLFH1X1d3Mi/qBcdeFfi', '2020-11-27 17:43:03', 'true');

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
(7, 'Tanishq', '2000-11-24', '1234567890', 'qwert', 'option1', 'hhvhv', 'Mohali', 'Mohali', 160021, 'Punjab', 'option1', 'option1', 'option1', '', '27-11-2020-5fc0ee13030a6Screenshot (12).png', '27-11-2020-5fc0ee1303e06Screenshot (12).png', '', 'Hello there', 'true');

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
-- Indexes for table `bill_payment`
--
ALTER TABLE `bill_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fssai`
--
ALTER TABLE `fssai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_pan_card_uti`
--
ALTER TABLE `index_pan_card_uti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itr_gst`
--
ALTER TABLE `itr_gst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msme`
--
ALTER TABLE `msme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pfrefund`
--
ALTER TABLE `pfrefund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pvc_card`
--
ALTER TABLE `pvc_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retailers`
--
ALTER TABLE `retailers`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aadhar_reprint`
--
ALTER TABLE `aadhar_reprint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin1_replies`
--
ALTER TABLE `admin1_replies`
  MODIFY `local_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin2`
--
ALTER TABLE `admin2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin2_replies`
--
ALTER TABLE `admin2_replies`
  MODIFY `local_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bill_payment`
--
ALTER TABLE `bill_payment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fssai`
--
ALTER TABLE `fssai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `index_pan_card_uti`
--
ALTER TABLE `index_pan_card_uti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `itr_gst`
--
ALTER TABLE `itr_gst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `msme`
--
ALTER TABLE `msme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pfrefund`
--
ALTER TABLE `pfrefund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pvc_card`
--
ALTER TABLE `pvc_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `retailers`
--
ALTER TABLE `retailers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `votercard`
--
ALTER TABLE `votercard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
