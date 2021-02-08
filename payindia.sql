-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 10:09 AM
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
  `status` varchar(10) NOT NULL DEFAULT 'false',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aadharpan_link`
--

INSERT INTO `aadharpan_link` (`id`, `name`, `mobile`, `aadhar_no`, `pan_card`, `dob`, `pincode`, `gender`, `other_document`, `comment`, `status`, `r_id`) VALUES
(3, 'Tanishq', '9888123456', '1234567890', '1234567890', '2000-11-24', 410210, 0, '16-11-2020-5fb1e6f4432d5good_one.jpg', 'Hello world!', 'false', '5');

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
  `status` varchar(100) NOT NULL DEFAULT 'false',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aadhar_reprint`
--

INSERT INTO `aadhar_reprint` (`id`, `aadhar_no`, `mobile`, `other_documents`, `comments`, `status`, `r_id`) VALUES
(5, '1234567890', '1234567890', '10-11-2020-5faaa75731ff0good_one.jpg', '121tefadfasdada', 'false', ''),
(6, '123412341234', '9876543210', '', 'This is a test file.', 'true', ''),
(7, '1267899876543235678', '1234567890', '', '', 'false', ''),
(10, '12', '12', '', '12', 'reject', '5');

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
  `type` varchar(50) NOT NULL,
  `reply` varchar(100) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `q_id` varchar(20) NOT NULL,
  `r_id` int(10) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin1_replies`
--

INSERT INTO `admin1_replies` (`local_id`, `type`, `reply`, `comments`, `q_id`, `r_id`, `date`) VALUES
(1, 'itr_gst', '16-11-2020-5fb2941bc75d4good_one.jpg', 'Hello world.', '1', 0, '16-11-2020'),
(4, 'itr', '07-02-2021-601fbfa02267eScreenshot (12).png', 'Successfull.', '1', 0, '07-02-2021'),
(5, 'fssai', '07-02-2021-601fd5fb6ed4eScreenshot (12).png', 'This is the final template.', '3', 5, '07-02-2021'),
(7, 'fssai', '07-02-2021-601fdb2b32ac9Screenshot (12).png', 'This is the final template.', '3', 5, '07-02-2021');

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
  `r_id` int(10) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin2_replies`
--

INSERT INTO `admin2_replies` (`local_id`, `type`, `reply`, `comments`, `q_id`, `r_id`, `date`) VALUES
(11, 'aadhar_reprint', '16-11-2020-5fb287685466cPIC NDA.jpg', 'This is for the test run.', 6, 0, '16-11-2020'),
(15, 'pvc_card', '18-11-2020-5fb50976c8508aZVF08.jpg', 'Data ajsfadsadmdn', 7, 0, '18-11-2020'),
(16, 'votercard', '27-11-2020-5fc0eee1bfc88Screenshot (13).png', 'Hogya kaam tera!', 7, 0, '27-11-2020'),
(18, 'form49a', '07-02-2021-601fca2cbcac2Screenshot (12).png', 'testing', 5, 5, '07-02-2021'),
(19, 'pan', '08-02-2021-6020f4c3aa331Screenshot (12).png', 'This is a test as well.', 2, 5, '08-02-2021');

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
  `status` varchar(20) NOT NULL DEFAULT 'false',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_payment`
--

INSERT INTO `bill_payment` (`id`, `payment_type`, `ca_number`, `operator_circle`, `amount`, `operator_circle_1`, `due_date`, `client_name`, `status`, `r_id`) VALUES
(3, 'option1', '1234567890', 'Punjab', 1234, 'Punjab State Power Corporation Ltd', '2020-02-22', 'Sonam Garg', 'false', ''),
(4, 'option1', '1234567890', 'Punjab', 1234, 'Punjab State Power Corporation Ltd', '2020-02-22', 'Sonam Garg', 'false', ''),
(5, 'option1', '12345678901234567890', 'Punjab', 1213, 'Punjab State Power Corporation Ltd', '1111-11-24', 'Sonam Garg', 'false', ''),
(6, 'option2', '12456789', 'Punjab', 1500, 'Punjab State Power Corporation Ltd', '2020-12-15', 'Sonam Garg', 'false', '5');

-- --------------------------------------------------------

--
-- Table structure for table `findyourpan`
--

CREATE TABLE `findyourpan` (
  `id` int(11) NOT NULL,
  `applicant_full_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` text NOT NULL,
  `district` text NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `other_document` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '''false''',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `findyourpan`
--

INSERT INTO `findyourpan` (`id`, `applicant_full_name`, `father_name`, `mother_name`, `address`, `state`, `district`, `dob`, `mobile`, `gender`, `other_document`, `comments`, `status`, `r_id`) VALUES
(1, 'sonam', 'bhim', 'bindu', '#243, sector 13, chandigarh', 'Punjab', 'option2', '2020-12-18', '8699212909', 'Female', '15-12-2020-5fd8c2f78ce18sign.jpeg', 'hey', 'false', '5');

-- --------------------------------------------------------

--
-- Table structure for table `form49a`
--

CREATE TABLE `form49a` (
  `id` int(11) NOT NULL,
  `area_code` varchar(100) NOT NULL,
  `aotype` varchar(100) NOT NULL,
  `range_code` varchar(100) NOT NULL,
  `ao_no` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `applicant_surname` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `abbreviation_yes_or_no` varchar(20) NOT NULL,
  `abbreviation_of_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `photograph` varchar(100) NOT NULL,
  `sign` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `other_surname` varchar(100) NOT NULL,
  `other_firstname` varchar(100) NOT NULL,
  `other_lastname` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'false',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form49a`
--

INSERT INTO `form49a` (`id`, `area_code`, `aotype`, `range_code`, `ao_no`, `category`, `applicant_surname`, `first_name`, `last_name`, `abbreviation_yes_or_no`, `abbreviation_of_name`, `gender`, `photograph`, `sign`, `comments`, `other_surname`, `other_firstname`, `other_lastname`, `status`, `r_id`) VALUES
(5, '236712673', '67', '6', '7', '', '7', '7', '7', 'Yes', '7', 'Male', '', '', '7', '7', '7', '7', 'true', '5'),
(6, '675812', '656', '67567', '6875', 'option1', 'uyivvuy', 'jhvhj', 'jhkvh', 'Yes', 'jkhgvhjhvhvhj', 'Male', '', '07-02-2021-601fc5705ffc5Screenshot (12).png', 'hjdsvfgdsfvgfvhsfsvfhawe kfyqufucqwerkv  fqgqwthis is ', 'hghgvv', 'ghvggv', 'asdfa', 'false', '5'),
(7, '675812', '656', '67567', '6875', '', 'uyivvuy', 'jhvhj', 'jhkvh', 'Yes', 'jkhgvhjhvhvhj', 'Male', '07-02-2021-601fc79dd95f1Screenshot (12).png', '07-02-2021-601fc79de6c78Screenshot (12).png', 'hjdsvfgdsfvgfvhsfsvfhawe kfyqufucqwerkv  fqgqwthis is ', 'hghgvv', 'ghvggv', 'asdfa', 'reject', '5');

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
  `status` varchar(20) NOT NULL DEFAULT 'false',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fssai`
--

INSERT INTO `fssai` (`id`, `aadhar_no`, `pan_card_no`, `business_detail`, `email`, `mobile_number`, `photo_name`, `noc`, `address_proof`, `other_document`, `comments`, `status`, `r_id`) VALUES
(3, 1234567890, 1234567890, 'Sonam', 'sonam@gmail.com', 987654321, '1234567890Screenshot (12).png', '1234567890Screenshot (12).png', '1234567890Screenshot (12).png', '', 'This is a test file.', 'true', '5'),
(4, 1234567890, 1234567890, 'Sonam', 'sonam@gmail.com', 987654321, '1234567890Screenshot (12).png', '1234567890Screenshot (12).png', '1234567890Screenshot (12).png', '', 'This is a test file.', 'false', '5');

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
  `status` varchar(20) NOT NULL DEFAULT 'false',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index_pan_card_uti`
--

INSERT INTO `index_pan_card_uti` (`id`, `client_name`, `username`, `office_address`, `pincode`, `mobile_number`, `email`, `state1`, `firm_name`, `aadhar_no`, `pan_no`, `account_type`, `status`, `r_id`) VALUES
(4, 'Tanishq Chamoli', 'tanishq', 'tanishq', 123412, '1234567890', 'tanishq.chamoli@gmail.com', 'Punjab', 'Tanishq', '123456789120', '1234567890', 'Distributor', 'false', '');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id` int(11) NOT NULL,
  `registration_no` varchar(50) NOT NULL,
  `policy_expired_or_not` varchar(50) NOT NULL,
  `last_claim` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'false',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `registration_no`, `policy_expired_or_not`, `last_claim`, `status`, `r_id`) VALUES
(4, '123467890', 'option3', 'option1', 'false', '5');

-- --------------------------------------------------------

--
-- Table structure for table `itr`
--

CREATE TABLE `itr` (
  `id` int(11) NOT NULL,
  `ayear` varchar(20) NOT NULL,
  `incomedetails` varchar(100) NOT NULL,
  `anualsalary` int(100) NOT NULL,
  `note` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `abia` int(100) NOT NULL,
  `businessname` varchar(200) NOT NULL,
  `bid` varchar(1000) NOT NULL,
  `aria` int(100) NOT NULL,
  `rid` varchar(200) NOT NULL,
  `aosa` int(100) NOT NULL,
  `osd` varchar(200) NOT NULL,
  `aaia` int(100) NOT NULL,
  `aid` varchar(200) NOT NULL,
  `lip` int(100) NOT NULL,
  `csf` int(100) NOT NULL,
  `ppf` int(100) NOT NULL,
  `hip` int(100) NOT NULL,
  `odus` int(100) NOT NULL,
  `gdoodus` varchar(500) NOT NULL,
  `oa` int(100) NOT NULL,
  `gdooa` varchar(500) NOT NULL,
  `everify` varchar(100) NOT NULL,
  `balancereturn` varchar(200) NOT NULL,
  `capitalgain` varchar(200) NOT NULL,
  `taxpayable` int(100) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `other_documents` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'false',
  `r_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itr`
--

INSERT INTO `itr` (`id`, `ayear`, `incomedetails`, `anualsalary`, `note`, `salary`, `abia`, `businessname`, `bid`, `aria`, `rid`, `aosa`, `osd`, `aaia`, `aid`, `lip`, `csf`, `ppf`, `hip`, `odus`, `gdoodus`, `oa`, `gdooa`, `everify`, `balancereturn`, `capitalgain`, `taxpayable`, `comments`, `other_documents`, `status`, `r_id`) VALUES
(1, '1', 'Call my customer', 1, 'Tanishq Chamoli', 'hh', 1111, 'jjb', 'j', 11111, 'j', 111111, 'jbjbjb', 111, 'b', 1111, 111, 111, 11, 11, 'j', 111, 'bj', 'No', 'Yes', 'Yes', 123121, 'g gn kgh', '07-02-2021-601fad2a921b3Screenshot (12).png', 'true', 5);

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
  `status` varchar(20) NOT NULL DEFAULT 'false',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itr_gst`
--

INSERT INTO `itr_gst` (`id`, `client_name`, `firm_name`, `client_email`, `mobile_number`, `firm_type`, `office_address`, `city`, `pincode`, `acc_no`, `ifsc`, `nature_of_business_activity`, `placeofbusiness`, `photo`, `confirm_docs`, `other_document`, `status`, `r_id`) VALUES
(1, 'Tanishq Chamoli', 'Tanishq', 'tanishqspike114@gmail.com', '9888553116', 'option1', '#463 M Fouji colony Kharar', 'Kharar', '140210', '1234567890987654', '12345678909', 'I am the king.', 'option2', 'Tanishq Chamoligood_one.jpg', 'on', 'Tanishq Chamoli', 'true', '5'),
(2, 'Sonam Garg', 'Tanishq', 'tanishqspike114@gmail.com', '9888553116', 'option1', '#463 M Fouji colony Kharar', 'Kharar', '140210', '123456789876321', '123456432', 'Hello madam.', 'option1', 'Tanishq Chamoligood_one.jpg', 'on', 'Tanishq Chamoli', 'true', '5'),
(4, 'Tanishq Chamoli', 'Tanishq', 'tanishqspike114@gmail.com', '1234567890', 'option1', '#463 M Fouji colony Kharar', 'Kharar', '140210', '-1234567890', '12345678909', 'Hello', 'option1', 'Tanishq ChamoliScreenshot (12).png', 'on', '', 'false', '5');

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
  `status` varchar(20) NOT NULL DEFAULT 'false',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msme`
--

INSERT INTO `msme` (`id`, `aadhar_no`, `gst_no`, `client_name`, `category`, `mobile_number`, `acc_no`, `ifsc`, `firm_name`, `firm_type`, `firm_date`, `nature_of_work`, `office_address`, `state1`, `district`, `pincode`, `gender`, `emp_working`, `physically_handicapped`, `comments`, `pan_card`, `other_document`, `status`, `r_id`) VALUES
(4, '12345', '2345', 'Test', 'option1', '1234567890', '12345678900999', 'hghh', 'vgj', 'option1', '2020-12-15', 'option1', 'sdfghjk', 'Punjab', 'option1', 410210, 'Male', 'Yes', 'No', 'This is a test\r\n', '12345Screenshot (12).png', '', 'false', '5');

-- --------------------------------------------------------

--
-- Table structure for table `pan`
--

CREATE TABLE `pan` (
  `id` int(11) NOT NULL,
  `afname` varchar(100) NOT NULL,
  `mn` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `pan` varchar(20) NOT NULL,
  `nameprint` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `dob` int(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `other_document` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'false',
  `r_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pan`
--

INSERT INTO `pan` (`id`, `afname`, `mn`, `aadhar`, `pan`, `nameprint`, `fname`, `mname`, `dob`, `gender`, `comments`, `other_document`, `status`, `r_id`) VALUES
(2, 'Tanishq', '9888553116', '541651892356182735', '654567486874', 'TC', 'KC', 'SC', 2000, 'on', 'Testing', '07-02-2021-601fb2de5ba3dScreenshot (12).png', 'true', 5);

-- --------------------------------------------------------

--
-- Table structure for table `passport`
--

CREATE TABLE `passport` (
  `id` int(11) NOT NULL,
  `apply_for` varchar(50) DEFAULT NULL,
  `type_of_application` tinytext DEFAULT NULL,
  `passport_type` tinytext DEFAULT NULL,
  `first_name` tinytext DEFAULT NULL,
  `middle_name` tinytext DEFAULT NULL,
  `surname` tinytext DEFAULT NULL,
  `aadhar_no` varchar(50) DEFAULT NULL,
  `marital_status` tinytext DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `birth_country_india` tinytext DEFAULT NULL,
  `birthplace` tinytext DEFAULT NULL,
  `state1` tinytext DEFAULT NULL,
  `district` tinytext DEFAULT NULL,
  `citizenship` tinytext DEFAULT NULL,
  `pan_card_no` varchar(50) DEFAULT NULL,
  `voter_id` varchar(50) DEFAULT NULL,
  `education_qualification` tinytext DEFAULT NULL,
  `emp_type` varchar(50) DEFAULT NULL,
  `govt_servant` tinytext DEFAULT NULL,
  `non_ncr` tinytext DEFAULT NULL,
  `mark` tinytext DEFAULT NULL,
  `other_names` tinytext DEFAULT NULL,
  `name_changed` tinytext DEFAULT NULL,
  `father_first_name` tinytext DEFAULT NULL,
  `father_middle_name` tinytext DEFAULT NULL,
  `father_surname` tinytext DEFAULT NULL,
  `mother_first_name` tinytext DEFAULT NULL,
  `mother_middle_name` tinytext DEFAULT NULL,
  `mother_surname` tinytext DEFAULT NULL,
  `guardian_first_name` tinytext DEFAULT NULL,
  `guardian_middle_name` tinytext DEFAULT NULL,
  `guardian_surname` tinytext DEFAULT NULL,
  `present_address` varchar(50) DEFAULT NULL,
  `house_no` int(10) DEFAULT NULL,
  `state_province` tinytext DEFAULT NULL,
  `present_district` tinytext DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `mobile_number` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address1` varchar(50) DEFAULT NULL,
  `applicant_name` tinytext DEFAULT NULL,
  `applicant_mobile` varchar(12) DEFAULT NULL,
  `applicant_email` varchar(50) DEFAULT NULL,
  `certificate1` varchar(50) DEFAULT NULL,
  `passport_detail` varchar(50) DEFAULT NULL,
  `applied_for_passport` tinytext DEFAULT NULL,
  `pending_proceeding` tinytext DEFAULT NULL,
  `warrant_or_summon` tinytext DEFAULT NULL,
  `warrant_for_arrest` tinytext DEFAULT NULL,
  `prohibit_departure` tinytext DEFAULT NULL,
  `convicted` varchar(10) DEFAULT NULL,
  `refused_denied_passport` varchar(10) DEFAULT NULL,
  `passport_impounded` varchar(10) DEFAULT NULL,
  `passport_revoked` varchar(10) DEFAULT NULL,
  `foreign_citizenship` varchar(10) DEFAULT NULL,
  `passport_other_country` varchar(10) DEFAULT NULL,
  `surrendered` varchar(10) DEFAULT NULL,
  `renunciation` varchar(10) DEFAULT NULL,
  `emergency_certi` varchar(10) DEFAULT NULL,
  `deported_from_other_country` varchar(10) DEFAULT NULL,
  `repatriated` varchar(10) DEFAULT NULL,
  `comments` varchar(50) DEFAULT NULL,
  `proof_of_birth` varchar(50) DEFAULT NULL,
  `residential_birth_proof` varchar(50) DEFAULT NULL,
  `other_document` varchar(50) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'false',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passport`
--

INSERT INTO `passport` (`id`, `apply_for`, `type_of_application`, `passport_type`, `first_name`, `middle_name`, `surname`, `aadhar_no`, `marital_status`, `dob`, `birth_country_india`, `birthplace`, `state1`, `district`, `citizenship`, `pan_card_no`, `voter_id`, `education_qualification`, `emp_type`, `govt_servant`, `non_ncr`, `mark`, `other_names`, `name_changed`, `father_first_name`, `father_middle_name`, `father_surname`, `mother_first_name`, `mother_middle_name`, `mother_surname`, `guardian_first_name`, `guardian_middle_name`, `guardian_surname`, `present_address`, `house_no`, `state_province`, `present_district`, `pincode`, `mobile_number`, `email`, `address1`, `applicant_name`, `applicant_mobile`, `applicant_email`, `certificate1`, `passport_detail`, `applied_for_passport`, `pending_proceeding`, `warrant_or_summon`, `warrant_for_arrest`, `prohibit_departure`, `convicted`, `refused_denied_passport`, `passport_impounded`, `passport_revoked`, `foreign_citizenship`, `passport_other_country`, `surrendered`, `renunciation`, `emergency_certi`, `deported_from_other_country`, `repatriated`, `comments`, `proof_of_birth`, `residential_birth_proof`, `other_document`, `status`, `r_id`) VALUES
(1, 'Reissue Passport', 'Normal', '60 Pages', 'sonam', 'garg', 'garg', '1234567', 'Married', '2020-11-24', 'No', 'chandigarh', 'Punjab', 'option3', 'Descent', '1234567', '1234567', '10th pass or above', 'Retired- Private Service', 'Yes', 'Yes', 'no', 'Yes', 'No', 'bindu', 'garg', 'gupta', 'sonam', 'garg', 'garg', 'sonam', '', 'garg', 'Yes', 0, 'Punjab', 'option2', 16001, '8699212909', 'co18350@ccet.ac.in', 'Yes', 'sonam garg garg', '8699212909', 'co18350@ccet.ac.in', 'No', 'No', 'No', 'No', 'No', 'Yes', 'Yes', '', 'Yes', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 'testing...', '', 'Spause Passport', '19-11-2020-5fb6251a4eaaasign.jpg', 'false', '5'),
(2, 'Reissue Passport', 'Normal', '36 Pages', 'sonam', 'garg', 'garg', '1234567890', 'Widow/Widower', '2020-12-24', 'No', 'chandigarh', 'Punjab', 'option3', 'Registration / Naturalization', '1234567890', '123456789', '7th pass or less', 'Retired- Private Service', 'Yes', 'No', 'no', 'Yes', 'Yes', 'sonam', 'garg', 'garg', 'sonam', 'garg', 'garg', 'sonam', '', 'garg', 'Yes', 0, 'Punjab', 'option1', 160019, '8699212909', 'sonamgarg2000@gmail.com', 'No', 'sonam', '8699212909', 'sonamgarg2000@gmail.com', 'Yes', 'No', 'Yes', 'Yes', 'No', 'No', 'No', '', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', '', 'Water Bill', '', 'reject', '5');

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
  `status` varchar(20) NOT NULL DEFAULT 'false',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pfrefund`
--

INSERT INTO `pfrefund` (`id`, `aadhar_no`, `uan_no`, `pan_card_no`, `client_name`, `mobile_number`, `acc_no`, `ifsc`, `father_name`, `dob`, `job_leaving_date`, `request_type`, `comments`, `other_document`, `status`, `r_id`) VALUES
(3, '1', '1', '1', '1', '1', '1', '1', '1', '0001-01-01', '0001-01-01', 'option1', '1', '', 'false', ''),
(4, '1', '1', '1', '1', '1', '1', '1', '1', '0001-01-11', '0001-11-01', 'option1', '1', '', 'false', '5');

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
  `status` varchar(20) NOT NULL DEFAULT 'false',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pvc_card`
--

INSERT INTO `pvc_card` (`id`, `cname`, `fpass`, `dispatch_address`, `mobile`, `document`, `status`, `r_id`) VALUES
(2, 'Tanishq Chamoli', 'Strong_pass', 'Home address', '123456789091', '16-11-2020-5fb1db8b95981good_one.jpg', 'false', ''),
(3, 'Sonam Garg', '1234', 'Address is correct', '1234567890', '16-11-2020-5fb1dbdf9bc23good_one.jpg', 'true', ''),
(6, 'Tanishq Chamoli', 'Password', 'Home address', '0987654321', '17-11-2020-5fb33ef62247faZVF08.jpg', 'false', '5'),
(7, 'Tanishq Chamoli', 'Password', 'Home address', '9888553116', '18-11-2020-5fb508498c153aZVF08.jpg', 'true', '5');

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
  `status` varchar(10) NOT NULL DEFAULT 'false',
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votercard`
--

INSERT INTO `votercard` (`id`, `name`, `dob`, `mobile`, `relative_name`, `relative_type`, `street`, `village`, `postoffice`, `pincode`, `state`, `district`, `ageproof_option`, `addressproof_option`, `gender`, `ageproofdocument`, `addressproofdocument`, `otherdocument`, `comments`, `status`, `r_id`) VALUES
(5, 'Tanishq', '2000-11-24', '1234567890', 'PD Mathpal', 'option2', '#463 M Fouji colony Kharar', 'Mohali', 'Mohali', 140210, 'Punjab', 'option2', 'option2', 'option2', 'Male', '13-11-2020-5fae8622041e4Screenshot (12).png', '13-11-2020-5fae86220b021Screenshot (12).png', '', '', 'reject', '5'),
(6, 'Sonam', '2000-08-14', '1234567890', 'Tanishq', 'option1', '#463 M Fouji colony Kharar', 'Mohali', 'Mohali', 140209, 'Punjab', 'option1', 'option1', 'option2', 'Female', '13-11-2020-5fae955365801good_one.jpg', '13-11-2020-5fae955366762good_one.jpg', '13-11-2020-5fae955360460good_one.jpg', 'Hello World!', 'false', '5'),
(7, 'Tanishq', '2000-11-24', '1234567890', 'qwert', 'option1', 'hhvhv', 'Mohali', 'Mohali', 160021, 'Punjab', 'option1', 'option1', 'option1', '', '27-11-2020-5fc0ee13030a6Screenshot (12).png', '27-11-2020-5fc0ee1303e06Screenshot (12).png', '', 'Hello there', 'true', '5');

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
-- Indexes for table `findyourpan`
--
ALTER TABLE `findyourpan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form49a`
--
ALTER TABLE `form49a`
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
-- Indexes for table `itr`
--
ALTER TABLE `itr`
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
-- Indexes for table `pan`
--
ALTER TABLE `pan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passport`
--
ALTER TABLE `passport`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aadhar_reprint`
--
ALTER TABLE `aadhar_reprint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin1_replies`
--
ALTER TABLE `admin1_replies`
  MODIFY `local_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin2`
--
ALTER TABLE `admin2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin2_replies`
--
ALTER TABLE `admin2_replies`
  MODIFY `local_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `bill_payment`
--
ALTER TABLE `bill_payment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `findyourpan`
--
ALTER TABLE `findyourpan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form49a`
--
ALTER TABLE `form49a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fssai`
--
ALTER TABLE `fssai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `index_pan_card_uti`
--
ALTER TABLE `index_pan_card_uti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `itr`
--
ALTER TABLE `itr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `itr_gst`
--
ALTER TABLE `itr_gst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `msme`
--
ALTER TABLE `msme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pan`
--
ALTER TABLE `pan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `passport`
--
ALTER TABLE `passport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pfrefund`
--
ALTER TABLE `pfrefund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
