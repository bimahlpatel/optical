-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 08:29 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `optical`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `rec_date` datetime DEFAULT NULL,
  `fullname` varchar(80) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(2) NOT NULL DEFAULT 1 COMMENT '0=Admin, 1=Employee',
  `isActive` int(2) NOT NULL DEFAULT 0 COMMENT '0=No, 1=Yes',
  `isDelete` int(2) NOT NULL DEFAULT 0 COMMENT '0=No, 1=Yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `rec_date`, `fullname`, `mobile`, `emailid`, `password`, `role`, `isActive`, `isDelete`) VALUES
(1, '2020-07-22 12:47:03', 'Developer', '9924276751', 'patel6466bimal@gmail.com', 'c40a7d7a48c3af8bd7fb951b33489de2', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `administration_log`
--

CREATE TABLE `administration_log` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `login_at` datetime DEFAULT NULL,
  `logout_at` datetime DEFAULT NULL,
  `server_ip` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administration_log`
--

INSERT INTO `administration_log` (`id`, `adminid`, `login_at`, `logout_at`, `server_ip`) VALUES
(1, 1, '2024-08-10 10:20:55', NULL, '::1'),
(2, 1, '2024-08-10 10:21:08', NULL, '::1'),
(3, 1, '2024-08-12 16:48:39', NULL, '::1'),
(4, 1, '2024-08-13 16:48:13', NULL, '::1'),
(5, 1, '2024-08-13 17:48:46', NULL, '::1'),
(6, 1, '2024-08-14 16:55:35', NULL, '::1'),
(7, 1, '2024-08-15 19:30:56', NULL, '::1'),
(8, 1, '2024-08-16 20:02:41', NULL, '::1'),
(9, 1, '2024-08-18 05:52:43', '2024-08-18 05:54:57', '::1'),
(10, 1, '2024-08-18 05:55:48', NULL, '::1'),
(11, 1, '2024-08-18 13:08:35', NULL, '::1'),
(12, 1, '2024-08-19 11:37:10', NULL, '::1'),
(13, 1, '2024-08-20 16:38:15', NULL, '::1'),
(14, 1, '2024-08-23 18:49:52', NULL, '::1'),
(15, 1, '2024-08-24 07:01:04', NULL, '::1'),
(16, 1, '2024-08-26 16:53:50', NULL, '::1'),
(17, 1, '2024-08-28 16:35:59', NULL, '::1'),
(18, 1, '2024-08-29 16:35:36', NULL, '::1'),
(19, 1, '2024-08-31 17:11:33', NULL, '::1'),
(20, 1, '2024-09-01 05:59:18', NULL, '::1'),
(21, 1, '2024-09-01 17:53:45', NULL, '::1'),
(22, 1, '2024-09-02 16:56:15', NULL, '::1'),
(23, 1, '2024-09-03 19:24:02', NULL, '::1'),
(24, 1, '2024-09-04 17:07:53', NULL, '::1'),
(25, 1, '2024-09-05 17:25:59', NULL, '::1'),
(26, 1, '2024-09-07 18:34:01', NULL, '::1'),
(27, 1, '2024-09-08 17:54:10', NULL, '::1'),
(28, 1, '2024-09-09 17:35:54', NULL, '::1'),
(29, 1, '2024-09-17 17:53:11', NULL, '::1'),
(30, 1, '2024-09-18 14:24:32', NULL, '::1'),
(31, 1, '2024-09-19 20:31:34', NULL, '::1'),
(32, 1, '2024-09-26 17:59:34', NULL, '::1'),
(33, 1, '2024-09-26 17:59:48', NULL, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `sub_title`, `image`, `is_active`) VALUES
(1, 'tets', 'test', 'banner43.jpg', 1),
(2, 'home 1', 'home 1', 'banner11.jpg', 0),
(3, 'home 2', 'test', 'banner44.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_master`
--

CREATE TABLE `blog_master` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `blog_description` longtext NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brand_master`
--

CREATE TABLE `brand_master` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_logo` varchar(255) NOT NULL,
  `brand_description` longtext NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = active 1 = inactive',
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand_master`
--

INSERT INTO `brand_master` (`brand_id`, `brand_name`, `brand_logo`, `brand_description`, `is_active`, `created_date`, `updated_date`) VALUES
(1, 'test123123123', 'Contact_us3.png', 'test3213123123123', 0, '2024-09-01 18:27:11', '2024-09-02 17:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(225) NOT NULL,
  `category_slug` varchar(225) NOT NULL,
  `parent_category` varchar(225) NOT NULL,
  `category_type` varchar(225) NOT NULL,
  `category_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = active 1 = inactive',
  `isDelete` tinyint(1) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_slug`, `parent_category`, `category_type`, `category_status`, `isDelete`, `created_date`, `updated_date`) VALUES
(1, 'test11111', 'test1111', 'goggals', 'goggals', 1, 0, '2024-08-12 19:23:12', '2024-08-18 08:22:09'),
(2, 'Classes Eyeglasses', 'classes-eyeglasses', '1', 'men', 1, 0, '2024-08-24 07:26:17', '2024-08-24 11:19:37'),
(3, 'Premium Eyeglasses', 'premium-eyeglasses', '1', 'men', 0, 0, '2024-08-24 07:58:47', '2024-08-24 11:13:39'),
(4, 'Screen Eyeglasses', 'Screenp-eyeglasses', '1', 'men', 0, 0, '2024-08-24 07:59:24', '2024-08-24 11:29:24'),
(5, 'Classes Eyeglasses', 'classes-eyeglasses', '1', 'women', 0, 0, '2024-08-24 07:59:48', '2024-08-24 11:29:48'),
(6, 'Premium Eyeglasses', 'premium-eyeglasses', '1', 'women', 0, 0, '2024-08-24 07:59:58', '2024-08-24 11:29:58'),
(7, 'Screen Eyeglasses', 'Screenp-eyeglasses', '1', 'women', 0, 0, '2024-08-24 08:00:09', '2024-08-24 11:30:09'),
(8, 'Classes Eyeglasses', 'classes-eyeglasses', '1', 'kids', 0, 0, '2024-08-24 08:00:34', '2024-08-24 11:30:34'),
(9, 'Screen Eyeglasses', 'Screenp-eyeglasses', '2', 'men', 0, 0, '2024-08-24 08:01:29', '2024-08-24 11:31:29'),
(10, 'Screen Eyeglasses', 'Screenp-eyeglasses', '2', 'women', 0, 0, '2024-08-24 08:01:40', '2024-08-24 11:31:40'),
(11, 'Screen Eyeglasses', 'classes-eyeglasses', '2', 'kids', 0, 0, '2024-08-24 08:01:54', '2024-08-24 11:31:54'),
(12, 'Kids Glass', 'kids-glass', '2', 'kids', 0, 0, '2024-08-24 08:02:22', '2024-08-24 11:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE `category_master` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = active 1= inactive',
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`id`, `name`, `category_slug`, `isActive`, `created_date`, `updated_date`) VALUES
(1, 'Eye Glasses', 'eye-glasses', 0, '2024-08-24 08:59:31', '2024-09-01 06:07:21'),
(2, 'Screen Glasses', 'screen-glasses', 0, '2024-08-24 09:00:31', '2024-09-01 06:07:25'),
(3, 'Kids Glasses', 'kids-glasses', 0, '2024-08-24 09:00:45', '2024-09-01 06:07:27'),
(4, 'Contact Lenses', 'contact-lenses', 0, '2024-08-24 09:01:09', '2024-09-01 06:07:29'),
(5, 'SunGlasses', 'sunglasses', 0, '2024-08-24 09:01:29', '2024-09-01 06:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_setting`
--

CREATE TABLE `company_setting` (
  `id` int(11) NOT NULL,
  `compay_name` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_address` text NOT NULL,
  `company_contact` varchar(255) NOT NULL,
  `company_city` varchar(255) NOT NULL,
  `company_pincode` varchar(255) NOT NULL,
  `company_country` varchar(255) DEFAULT NULL,
  `about_company` text NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `linkedin_link` varchar(255) NOT NULL,
  `pinterest_link` varchar(255) NOT NULL,
  `instagram_link` varchar(255) NOT NULL,
  `google_link` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_setting`
--

INSERT INTO `company_setting` (`id`, `compay_name`, `company_email`, `company_address`, `company_contact`, `company_city`, `company_pincode`, `company_country`, `about_company`, `facebook_link`, `linkedin_link`, `pinterest_link`, `instagram_link`, `google_link`, `youtube_link`, `twitter_link`) VALUES
(1, 'vision11', 'v@g11.com', 'test11', '', 'surat11', '95959511', NULL, 'test11', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

CREATE TABLE `contact_enquiry` (
  `id` int(11) NOT NULL,
  `rec_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `server_ip` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `eye_checkup_appointment`
--

CREATE TABLE `eye_checkup_appointment` (
  `app_id` int(11) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `app_mobile` varchar(255) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` time NOT NULL,
  `is_approve` tinyint(1) NOT NULL DEFAULT 0,
  `is_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eye_checkup_appointment`
--

INSERT INTO `eye_checkup_appointment` (`app_id`, `app_name`, `app_mobile`, `app_date`, `app_time`, `is_approve`, `is_status`, `created_date`, `updated_date`) VALUES
(1, 'test', '9924276751', '2024-09-04', '00:00:00', 0, 0, '2024-09-19 20:21:41', '2024-09-19 23:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inq_id` int(11) NOT NULL,
  `inq_name` varchar(255) NOT NULL,
  `inq_mobile` varchar(255) NOT NULL,
  `inq_description` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inq_id`, `inq_name`, `inq_mobile`, `inq_description`, `created_date`, `updated_date`) VALUES
(1, 'verloop', '9408881214', 'weqweqweqwewqe', '2024-09-19 20:23:12', '2024-09-19 23:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `lenses_category_master`
--

CREATE TABLE `lenses_category_master` (
  `lense_cat_id` int(11) NOT NULL,
  `lense_cat_name` varchar(255) NOT NULL,
  `lenses_cat_slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=active 1=inactive',
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lenses_category_master`
--

INSERT INTO `lenses_category_master` (`lense_cat_id`, `lense_cat_name`, `lenses_cat_slug`, `is_active`, `created_date`, `updated_date`) VALUES
(1, 'DISPOSABILITY', 'disposability', 0, '2024-09-03 19:49:05', '2024-09-03 19:52:13'),
(2, 'BRANDS', 'brands', 0, '2024-09-03 19:49:45', '2024-09-03 19:52:59'),
(3, 'POWER', 'power', 0, '2024-09-03 19:50:26', '2024-09-03 19:53:01'),
(4, 'LENS SOLUTION', 'lens-solution', 0, '2024-09-03 19:50:40', '2024-09-03 19:53:03'),
(5, 'COLOR', 'color', 0, '2024-09-03 19:50:54', '2024-09-03 19:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `lenses_subcategory_master`
--

CREATE TABLE `lenses_subcategory_master` (
  `sub_category_id` int(11) NOT NULL,
  `lenses_cat_id` int(11) NOT NULL,
  `lenses_cat_type` varchar(255) NOT NULL,
  `lense_sub_cat_slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lenses_subcategory_master`
--

INSERT INTO `lenses_subcategory_master` (`sub_category_id`, `lenses_cat_id`, `lenses_cat_type`, `lense_sub_cat_slug`, `is_active`, `created_date`, `updated_date`) VALUES
(1, 1, 'Monthly', 'monthly', 0, '2024-09-03 20:55:04', '2024-09-04 00:01:28'),
(2, 1, 'Monthly Day and Night', 'monthly-day-and-night', 0, '2024-09-03 20:32:28', '2024-09-04 00:02:28'),
(3, 1, 'Daily', 'daily', 0, '2024-09-03 20:33:03', '2024-09-04 00:03:03'),
(4, 2, 'Aqualens', 'aqualens', 0, '2024-09-03 20:34:04', '2024-09-04 00:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `lense_product`
--

CREATE TABLE `lense_product` (
  `lp_id` int(11) NOT NULL,
  `lp_name` varchar(255) NOT NULL,
  `lp_slug` varchar(255) NOT NULL,
  `lp_cat_id` int(11) NOT NULL,
  `lp_subcat_id` int(11) NOT NULL,
  `lp_description` longtext NOT NULL,
  `lp_image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=Active 1=inactive',
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lense_product`
--

INSERT INTO `lense_product` (`lp_id`, `lp_name`, `lp_slug`, `lp_cat_id`, `lp_subcat_id`, `lp_description`, `lp_image`, `is_active`, `created_date`, `updated_date`) VALUES
(1, 'Aqualens NXT Monthly', 'aqualens-nxt-monthly', 1, 1, '<p>Manufacturer:&nbsp;CVI&nbsp;India&nbsp;Pvt&nbsp;Ltd.&nbsp;Imported&nbsp;&amp;&nbsp;marketed&nbsp;by&nbsp;CVI&nbsp;India&nbsp;Pvt&nbsp;Ltd.,&nbsp;Marketed&nbsp;By:Lenskart&nbsp;Solutions&nbsp;Pvt.&nbsp;Ltd.</p>\r\n', '0', 0, '2024-09-04 18:12:00', '2024-09-04 21:42:00'),
(2, 'Aqualens 24H Toric Monthly', 'aqualens-24h-toric-monthly', 1, 1, '<p>Manufacturer:&nbsp;CVI&nbsp;India&nbsp;Pvt&nbsp;Ltd.&nbsp;Imported&nbsp;&amp;&nbsp;marketed&nbsp;by&nbsp;CVI&nbsp;India&nbsp;Pvt&nbsp;Ltd.,&nbsp;Marketed&nbsp;By:Lenskart&nbsp;Solutions&nbsp;Pvt.&nbsp;Ltd.&nbsp;support@lenskart.com.</p>\r\n', 'FAQs-rafiki.png', 0, '2024-09-04 18:18:53', '2024-09-04 21:48:53'),
(3, 'product 1', '', 1, 1, 'product_description', 'test.jpg', 0, '2024-09-18 18:28:38', '2024-09-18 18:28:38'),
(4, 'product 1', 'product-1', 1, 1, 'product_description', 'test.jpg', 0, '2024-09-18 18:29:20', '2024-09-18 18:29:20'),
(5, 'product 1', 'product-1', 1, 1, 'product_description', 'test.jpg', 0, '2024-09-18 18:30:24', '2024-09-18 18:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `lense_product_detail`
--

CREATE TABLE `lense_product_detail` (
  `lpd_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `product_type` varchar(255) NOT NULL DEFAULT 'N/A',
  `type` varchar(255) NOT NULL DEFAULT 'N/A',
  `manufacturer_details` varchar(255) NOT NULL DEFAULT 'N/A',
  `country_of_origin` varchar(255) NOT NULL DEFAULT 'N/A',
  `model_no` varchar(255) NOT NULL DEFAULT 'N/A',
  `base_curve` varchar(255) NOT NULL DEFAULT 'N/A',
  `diameter` varchar(255) NOT NULL DEFAULT 'N/A',
  `lens_material` varchar(255) DEFAULT 'N/A',
  `packaging` varchar(255) NOT NULL DEFAULT 'N/A',
  `usage_duration` varchar(255) NOT NULL DEFAULT 'N/A',
  `water_content` varchar(255) NOT NULL DEFAULT 'N/A',
  `gender` varchar(255) NOT NULL DEFAULT 'N/A',
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lense_product_detail`
--

INSERT INTO `lense_product_detail` (`lpd_id`, `pro_id`, `product_type`, `type`, `manufacturer_details`, `country_of_origin`, `model_no`, `base_curve`, `diameter`, `lens_material`, `packaging`, `usage_duration`, `water_content`, `gender`, `created_date`, `updated_date`) VALUES
(1, 2, '', '', '', '', '', '', '', '', '', '', '', '', '2024-09-04 22:57:29', '2024-09-04 22:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `lense_product_gallery`
--

CREATE TABLE `lense_product_gallery` (
  `lpg_id` int(11) NOT NULL,
  `product_lense_id` int(11) NOT NULL,
  `lp_img_name` varchar(255) NOT NULL,
  `lp_img_path` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lense_product_gallery`
--

INSERT INTO `lense_product_gallery` (`lpg_id`, `product_lense_id`, `lp_img_name`, `lp_img_path`, `uploaded_on`) VALUES
(1, 2, 'banner3.jpg', '../assets/uploads/len_pid_2/', '2024-09-07 18:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `meta_keywords`
--

CREATE TABLE `meta_keywords` (
  `id` int(11) NOT NULL,
  `rec_date` datetime NOT NULL DEFAULT current_timestamp(),
  `slug` varchar(100) NOT NULL,
  `title` varchar(256) NOT NULL,
  `descriptions` mediumtext NOT NULL,
  `keywords` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meta_keywords`
--

INSERT INTO `meta_keywords` (`id`, `rec_date`, `slug`, `title`, `descriptions`, `keywords`) VALUES
(1, '2024-09-02 18:38:36', 'home', 'Home', 'Home page', 'Home page');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `product_sku` varchar(255) DEFAULT NULL,
  `product_cat_id` int(11) NOT NULL,
  `product_subcategory` int(11) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_image` longtext NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp(),
  `isActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_title`, `product_slug`, `product_sku`, `product_cat_id`, `product_subcategory`, `product_description`, `product_image`, `created_date`, `updated_date`, `isActive`) VALUES
(1, 'test123123', 'test123123', '123213', 1, 1, '<p>test12312321dsdasdasdasxqe2132exzaxazdxa123213aszxZXZ</p>\r\n', 'gdpr1.png', '2024-08-18 10:32:20', '2024-08-20 16:57:10', 0),
(2, 'test123123', 'test', '12', 2, 9, '<p>asdasdasd</p>\r\n', 'Contact_us2.png', '2024-08-20 18:38:04', '2024-08-26 18:02:21', 0),
(17, 'product 1', 'product-1', '1234', 1, 2, 'product_description', 'test1.jpg', '2024-09-17 22:27:10', '2024-09-17 22:27:10', 1),
(18, 'product 2', 'product-2', '1235', 2, 5, 'product_description', 'test.jpg', '2024-09-17 22:27:10', '2024-09-17 22:27:10', 1),
(19, 'product 3', 'product-3', '854', 3, 7, 'product_description', 'test3.png', '2024-09-17 22:27:10', '2024-09-17 22:27:10', 1),
(20, 'product 4', 'product-4', '565', 4, 8, 'product_description', 'test.jpg', '2024-09-17 22:27:10', '2024-09-17 22:27:10', 1),
(21, 'product 5', 'product-5', '66', 5, 9, 'product_description', 'test5.jpg', '2024-09-17 22:27:10', '2024-09-17 22:27:10', 1),
(22, 'product 6', 'product-6', '69', 1, 5, 'product_description', 'test8.png', '2024-09-17 22:27:10', '2024-09-17 22:27:10', 1),
(23, 'product 7', 'product-7', '5', 2, 1, 'product_description', 'test.jpg', '2024-09-17 22:27:10', '2024-09-17 22:27:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_frame_detail`
--

CREATE TABLE `product_frame_detail` (
  `pf_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `model_no` varchar(255) NOT NULL,
  `frame_type` varchar(255) DEFAULT NULL,
  `frame_shape` varchar(255) DEFAULT NULL,
  `frame_size` varchar(255) DEFAULT NULL,
  `frame_width` varchar(255) DEFAULT NULL,
  `frame_dimensions` varchar(255) DEFAULT NULL,
  `frame_colour` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `weight_group` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `frame_material` varchar(255) DEFAULT NULL,
  `temple_material` varchar(255) DEFAULT NULL,
  `prescription_type` varchar(255) DEFAULT NULL,
  `frame_style` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_frame_detail`
--

INSERT INTO `product_frame_detail` (`pf_id`, `product_id`, `model_no`, `frame_type`, `frame_shape`, `frame_size`, `frame_width`, `frame_dimensions`, `frame_colour`, `weight`, `weight_group`, `material`, `frame_material`, `temple_material`, `prescription_type`, `frame_style`) VALUES
(1, 1, '', 'Full Rim', 'Square', 'Medium', ' 135 mm', '53-16-142', 'Black', '16 gm', 'Light', 'Ultem & Stainless Steel', 'Ultem', 'Stainless Steel', 'Bifocal / Progressive', 'Standard'),
(2, 2, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `pg_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_img_name` varchar(255) NOT NULL,
  `product_img_path` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`pg_id`, `product_id`, `product_img_name`, `product_img_path`, `uploaded_on`) VALUES
(1, 2, 'banner4.jpg', '../assets/uploads/prid_2/', '2024-09-07 18:34:34'),
(2, 1, 'banner4.jpg', '../assets/uploads/prid_1/', '2024-09-07 19:13:20'),
(3, 1, 'banner3.jpg', '../assets/uploads/prid_1/', '2024-09-07 19:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `site_options`
--

CREATE TABLE `site_options` (
  `id` int(11) NOT NULL,
  `rec_date` datetime NOT NULL DEFAULT current_timestamp(),
  `option_key` varchar(255) NOT NULL,
  `option_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_options`
--

INSERT INTO `site_options` (`id`, `rec_date`, `option_key`, `option_value`) VALUES
(1, '2024-08-18 06:07:45', 'privacy-policy', '<p>adadasdasdasdasdasfsdfsdfdsfdsfsdf</p>\r\n'),
(2, '2024-08-18 06:07:00', 'terms-conditions', '<p>asdadasdasdasdqawrawrerwerwerfdsfewsfdsfewfdsfsdfsarewfdsfewsrfwefsfred</p>\r\n'),
(3, '2020-11-25 14:41:38', 'welcome-status', '0'),
(4, '2023-09-02 14:06:56', 'welcome-message', ''),
(5, '2021-12-27 14:55:13', 'disclaimer', ''),
(6, '2022-01-19 11:17:45', 'refund-policy', '');

-- --------------------------------------------------------

--
-- Table structure for table `sms_log`
--

CREATE TABLE `sms_log` (
  `id` int(11) NOT NULL,
  `rec_date` datetime NOT NULL DEFAULT current_timestamp(),
  `crontype` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'company',
  `parentid` int(11) NOT NULL DEFAULT 1,
  `cronname` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `msgcount` int(11) NOT NULL,
  `msgresponse` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `store_locator`
--

CREATE TABLE `store_locator` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `store_email` varchar(255) NOT NULL,
  `store_contactno` varchar(255) NOT NULL,
  `store_address` varchar(255) NOT NULL,
  `store_location` longtext NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_locator`
--

INSERT INTO `store_locator` (`store_id`, `store_name`, `store_email`, `store_contactno`, `store_address`, `store_location`, `is_active`) VALUES
(1, 'tet1', 'test1@g.com', 'test1', 'test1', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d238088.9831606749!2d72.71282420757989!3d21.186582372026773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1725514701935!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `tid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administration_log`
--
ALTER TABLE `administration_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_master`
--
ALTER TABLE `blog_master`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `brand_master`
--
ALTER TABLE `brand_master`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `company_setting`
--
ALTER TABLE `company_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eye_checkup_appointment`
--
ALTER TABLE `eye_checkup_appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `lenses_category_master`
--
ALTER TABLE `lenses_category_master`
  ADD PRIMARY KEY (`lense_cat_id`);

--
-- Indexes for table `lenses_subcategory_master`
--
ALTER TABLE `lenses_subcategory_master`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `lense_product`
--
ALTER TABLE `lense_product`
  ADD PRIMARY KEY (`lp_id`);

--
-- Indexes for table `lense_product_detail`
--
ALTER TABLE `lense_product_detail`
  ADD PRIMARY KEY (`lpd_id`);

--
-- Indexes for table `lense_product_gallery`
--
ALTER TABLE `lense_product_gallery`
  ADD PRIMARY KEY (`lpg_id`);

--
-- Indexes for table `meta_keywords`
--
ALTER TABLE `meta_keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_frame_detail`
--
ALTER TABLE `product_frame_detail`
  ADD PRIMARY KEY (`pf_id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `site_options`
--
ALTER TABLE `site_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_log`
--
ALTER TABLE `sms_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_locator`
--
ALTER TABLE `store_locator`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `administration_log`
--
ALTER TABLE `administration_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_master`
--
ALTER TABLE `blog_master`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand_master`
--
ALTER TABLE `brand_master`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_setting`
--
ALTER TABLE `company_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eye_checkup_appointment`
--
ALTER TABLE `eye_checkup_appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lenses_category_master`
--
ALTER TABLE `lenses_category_master`
  MODIFY `lense_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lenses_subcategory_master`
--
ALTER TABLE `lenses_subcategory_master`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lense_product`
--
ALTER TABLE `lense_product`
  MODIFY `lp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lense_product_detail`
--
ALTER TABLE `lense_product_detail`
  MODIFY `lpd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lense_product_gallery`
--
ALTER TABLE `lense_product_gallery`
  MODIFY `lpg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meta_keywords`
--
ALTER TABLE `meta_keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_frame_detail`
--
ALTER TABLE `product_frame_detail`
  MODIFY `pf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `pg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `site_options`
--
ALTER TABLE `site_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sms_log`
--
ALTER TABLE `sms_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store_locator`
--
ALTER TABLE `store_locator`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
