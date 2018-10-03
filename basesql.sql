-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 09:27 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basesql`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl`
--

CREATE TABLE `acl` (
  `ai` int(10) UNSIGNED NOT NULL,
  `action_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acl`
--

INSERT INTO `acl` (`ai`, `action_id`, `user_id`) VALUES
(1, 1, 1937375294),
(2, 2, 1937375294),
(3, 3, 1937375294),
(4, 4, 1937375294),
(5, 5, 1937375294),
(6, 7, 1937375294),
(7, 8, 1937375294),
(8, 9, 1937375294),
(9, 10, 1937375294),
(10, 11, 1937375294);

-- --------------------------------------------------------

--
-- Table structure for table `acl_actions`
--

CREATE TABLE `acl_actions` (
  `action_id` int(10) UNSIGNED NOT NULL,
  `action_code` varchar(100) NOT NULL COMMENT 'No periods allowed!',
  `action_desc` varchar(100) NOT NULL COMMENT 'Human readable description',
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acl_actions`
--

INSERT INTO `acl_actions` (`action_id`, `action_code`, `action_desc`, `category_id`) VALUES
(1, 'module_add', 'To be view the module', 1),
(2, 'module_edit', 'To be edit the module', 1),
(3, 'module_delete', 'To be delete the module', 1),
(4, 'module_operations_add', 'To be view the Module Operation', 1),
(5, 'module_operations_edit', 'To be edit the module Operation', 1),
(6, 'module_operations_delete', 'To be Delete the Module Operation', 1),
(7, 'roles_add', 'To be view the Role', 1),
(8, 'roles_edit', 'To be edit the Role', 1),
(9, 'roles_delete', 'To be delete the Role', 1),
(10, 'users_add', 'To be view the User', 1),
(11, 'users_privilage', 'To be edit the Users Privilage', 1);

-- --------------------------------------------------------

--
-- Table structure for table `acl_categories`
--

CREATE TABLE `acl_categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_code` varchar(100) NOT NULL COMMENT 'No periods allowed!',
  `category_desc` varchar(100) NOT NULL COMMENT 'Human readable description'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acl_categories`
--

INSERT INTO `acl_categories` (`category_id`, `category_code`, `category_desc`) VALUES
(1, 'setting', 'Setting Module');

-- --------------------------------------------------------

--
-- Table structure for table `app_roles`
--

CREATE TABLE `app_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_roles`
--

INSERT INTO `app_roles` (`role_id`, `role_name`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `app_roles_actions`
--

CREATE TABLE `app_roles_actions` (
  `role_actions_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `action_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_roles_actions`
--

INSERT INTO `app_roles_actions` (`role_actions_id`, `role_id`, `category_id`, `action_id`) VALUES
(51, 1, 1, 1),
(52, 1, 1, 2),
(53, 1, 1, 3),
(54, 1, 1, 4),
(55, 1, 1, 5),
(56, 1, 1, 6),
(57, 1, 1, 7),
(58, 1, 1, 8),
(59, 1, 1, 9),
(60, 1, 1, 10),
(61, 1, 1, 11),
(62, 1, 2, 12),
(63, 1, 2, 13),
(64, 1, 3, 14),
(65, 1, 3, 15),
(66, 1, 3, 16),
(67, 1, 3, 17),
(68, 1, 4, 18),
(69, 1, 4, 19),
(70, 1, 4, 20);

-- --------------------------------------------------------

--
-- Table structure for table `auth_sessions`
--

CREATE TABLE `auth_sessions` (
  `id` varchar(128) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `login_time` datetime DEFAULT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0ig6a6c803d70jc8c7mbpgkhgl9uc7tn', '::1', 1537601224, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533373630313130323b),
('h24rbbm9ioevnh7qjplnti4ak71l25nt', '::1', 1537601102, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533373630313130323b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231393337333735323934223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031382d30392d32322030393a32353a3032223b7d223b),
('4jkon6gfmh5redgsognu713dfahn8ano', '::1', 1537601100, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533373630313130303b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231393337333735323934223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031382d30392d32322030393a31383a3436223b7d223b),
('4ai4cjua3kpvg7gp6d54iamrdue9s3e9', '::1', 1537600726, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533373630303732363b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231393337333735323934223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031382d30392d32322030393a31383a3436223b7d223b),
('pv5iusgfa9qnal8ags0euavgmdpp6lfg', '::1', 1537600439, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533373630303433393b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231393337333735323934223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031382d30392d32322030393a30383a3538223b7d223b),
('mel78glkjhrhlo52t8u6g26cfrd2dpp3', '::1', 1537600047, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533373630303034373b),
('l6962jf2upo5fik9cckmkbhvfra4c6ap', '::1', 1537600138, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533373630303133383b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231393337333735323934223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031382d30392d32322030393a30383a3538223b7d223b),
('9vigrjc2o4kk5nhfcgtjt6mh0gtfecja', '::1', 1537599425, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533373539393432353b),
('l1fgc4rc3f6pa8l1fh9bqfm5q8l544ag', '::1', 1537599728, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533373539393732383b);

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `conf_id` int(11) NOT NULL,
  `confc_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `keyword` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `field_type` varchar(15) NOT NULL,
  `options` text NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `read_only` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`conf_id`, `confc_id`, `keyword`, `value`, `field_type`, `options`, `required`, `read_only`) VALUES
(1, 1, 'app_name', 'czoxMToiREFJRE8gTWV0YWwiOw==', 'text', '', 1, 0),
(2, 1, 'phone_number', 'czoxMjoiMDQ0LTQyMDE2MTIzIjs=', 'text', '', 0, 0),
(3, 1, 'app_email', 'czoyOToibG50ZWNjLnByb2R1Y3Rpdml0eUBnbWFpbC5jb20iOw==', 'email', '', 0, 0),
(4, 1, 'app_template', 'czoxNDoiYmFzZS9iYXNlX2ZpdmUiOw==', 'select', 'base/base_one,base/base_two,base/base_three,base/base_four,base/base_five,base/base_six,base/base_seven', 0, 0),
(5, 1, 'timezone', 'czoxMjoiQXNpYS9Lb2xrYXRhIjs=', 'select', '', 0, 0),
(15, 1, 'default_currency', 'czoyOiI2MSI7', 'select', '', 0, 0),
(16, 1, 'default_country', 'czoyOiI5OSI7', 'select', '', 0, 0),
(17, 1, 'protocol', 'czo0OiJzbXRwIjs=', '', '', 0, 0),
(18, 1, 'smtp_host', 'czoyMDoic3NsOi8vc210cC5nbWFpbC5jb20iOw==', '', '', 0, 0),
(19, 1, 'smtp_port', 'czozOiI0NjUiOw==', '', '', 0, 0),
(20, 1, 'smtp_user', 'czoyOToibG50ZWNjLnByb2R1Y3Rpdml0eUBnbWFpbC5jb20iOw==', '', '', 0, 0),
(21, 1, 'smtp_pass', 'czoxMjoibG50ZWNjMTIzIUAjIjs=', '', '', 0, 0),
(22, 1, 'mailtype', 'czo0OiJodG1sIjs=', '', '', 0, 0),
(23, 1, '', 'd4363132326e75011974a3fc4b8dd554', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `configuration_categories`
--

CREATE TABLE `configuration_categories` (
  `confc_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration_categories`
--

INSERT INTO `configuration_categories` (`confc_id`, `category_name`, `category_desc`, `status`) VALUES
(1, 'Basic Settings', 'Changing this settings affects the application direclty without any confirmation. Please be sure what you are doing before edit.', 1),
(2, 'Email Settings', 'Transactional Email settings - Including SMTP', 1),
(3, 'SMS Settings', 'SMS Settings - Sender ID related settings', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(150) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `sortname`, `phonecode`) VALUES
(101, 'India', 'IND', 91);

-- --------------------------------------------------------

--
-- Table structure for table `denied_access`
--

CREATE TABLE `denied_access` (
  `ai` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL,
  `reason_code` tinyint(1) UNSIGNED DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ips_on_hold`
--

CREATE TABLE `ips_on_hold` (
  `ai` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_errors`
--

CREATE TABLE `login_errors` (
  `ai` int(10) UNSIGNED NOT NULL,
  `username_or_email` varchar(255) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_errors`
--

INSERT INTO `login_errors` (`ai`, `username_or_email`, `ip_address`, `time`) VALUES
(26, 'cascadeadmin', '49.204.220.22', '2018-09-19 19:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `username_or_email_on_hold`
--

CREATE TABLE `username_or_email_on_hold` (
  `ai` int(10) UNSIGNED NOT NULL,
  `username_or_email` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `auth_level` tinyint(3) UNSIGNED NOT NULL,
  `banned` enum('0','1') NOT NULL DEFAULT '0',
  `passwd` varchar(60) NOT NULL,
  `passwd_recovery_code` varchar(60) DEFAULT NULL,
  `passwd_recovery_date` datetime DEFAULT NULL,
  `passwd_modified_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `auth_level`, `banned`, `passwd`, `passwd_recovery_code`, `passwd_recovery_date`, `passwd_modified_at`, `last_login`, `created_at`, `modified_at`) VALUES
(1937375294, 'admin', 'appadmin@noreply.com', 1, '0', '$2y$11$k8Rc0HmiiKBjyb5fYb5o4Of5IDSmimeXYf35D6dlKa4Ic6gURBK8C', '$2y$11$BJUm.JF0ynkHvzsHsiqav.qZze6L.4yqIO0cf.WhzftR3Fj3JsHZy', '2018-05-29 17:00:19', '2018-05-29 17:02:21', '2018-09-22 09:25:02', '2018-02-19 11:54:22', '2018-09-22 07:25:02');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `ca_passwd_trigger` BEFORE UPDATE ON `users` FOR EACH ROW BEGIN
    IF ((NEW.passwd <=> OLD.passwd) = 0) THEN
        SET NEW.passwd_modified_at = NOW();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `user_address_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `address_line_1` varchar(255) NOT NULL,
  `address_line_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `pincode` varchar(15) NOT NULL,
  `neighborhood` varchar(255) NOT NULL,
  `labels` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`user_address_id`, `user_id`, `address_line_1`, `address_line_2`, `city`, `state`, `country_id`, `pincode`, `neighborhood`, `labels`) VALUES
(1, 1937375294, '', '', '', '', 101, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_phone`
--

CREATE TABLE `user_phone` (
  `user_contact_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `label` varchar(255) NOT NULL,
  `phone_code` varchar(15) NOT NULL,
  `phone_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_phone`
--

INSERT INTO `user_phone` (`user_contact_id`, `user_id`, `label`, `phone_code`, `phone_number`) VALUES
(1, 1937375294, '', '+91', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_profile_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `avatar` text NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `labels` text NOT NULL,
  `facebook_id` varchar(255) NOT NULL,
  `twitter_id` varchar(255) NOT NULL,
  `linkedin_id` varchar(255) NOT NULL,
  `instagram_id` varchar(255) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `anniversary` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_profile_id`, `user_id`, `company_id`, `first_name`, `last_name`, `gender`, `avatar`, `job_title`, `company`, `labels`, `facebook_id`, `twitter_id`, `linkedin_id`, `instagram_id`, `cover_image`, `dob`, `anniversary`) VALUES
(1, 1937375294, 0, 'App', 'Admin', 'Male', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `web_settings`
--

CREATE TABLE `web_settings` (
  `ws_id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `key_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acl`
--
ALTER TABLE `acl`
  ADD PRIMARY KEY (`ai`),
  ADD KEY `action_id` (`action_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `acl_actions`
--
ALTER TABLE `acl_actions`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `acl_categories`
--
ALTER TABLE `acl_categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_code` (`category_code`),
  ADD UNIQUE KEY `category_desc` (`category_desc`);

--
-- Indexes for table `app_roles`
--
ALTER TABLE `app_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `app_roles_actions`
--
ALTER TABLE `app_roles_actions`
  ADD PRIMARY KEY (`role_actions_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `action_id` (`action_id`);

--
-- Indexes for table `auth_sessions`
--
ALTER TABLE `auth_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`conf_id`),
  ADD KEY `confc_id` (`confc_id`);

--
-- Indexes for table `configuration_categories`
--
ALTER TABLE `configuration_categories`
  ADD PRIMARY KEY (`confc_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `denied_access`
--
ALTER TABLE `denied_access`
  ADD PRIMARY KEY (`ai`);

--
-- Indexes for table `ips_on_hold`
--
ALTER TABLE `ips_on_hold`
  ADD PRIMARY KEY (`ai`);

--
-- Indexes for table `login_errors`
--
ALTER TABLE `login_errors`
  ADD PRIMARY KEY (`ai`);

--
-- Indexes for table `username_or_email_on_hold`
--
ALTER TABLE `username_or_email_on_hold`
  ADD PRIMARY KEY (`ai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`user_address_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_phone`
--
ALTER TABLE `user_phone`
  ADD PRIMARY KEY (`user_contact_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `web_settings`
--
ALTER TABLE `web_settings`
  ADD PRIMARY KEY (`ws_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acl`
--
ALTER TABLE `acl`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `acl_actions`
--
ALTER TABLE `acl_actions`
  MODIFY `action_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `acl_categories`
--
ALTER TABLE `acl_categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_roles`
--
ALTER TABLE `app_roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `app_roles_actions`
--
ALTER TABLE `app_roles_actions`
  MODIFY `role_actions_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `conf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `configuration_categories`
--
ALTER TABLE `configuration_categories`
  MODIFY `confc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `denied_access`
--
ALTER TABLE `denied_access`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ips_on_hold`
--
ALTER TABLE `ips_on_hold`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_errors`
--
ALTER TABLE `login_errors`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `username_or_email_on_hold`
--
ALTER TABLE `username_or_email_on_hold`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `user_address_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_phone`
--
ALTER TABLE `user_phone`
  MODIFY `user_contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=526;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_profile_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=526;

--
-- AUTO_INCREMENT for table `web_settings`
--
ALTER TABLE `web_settings`
  MODIFY `ws_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acl`
--
ALTER TABLE `acl`
  ADD CONSTRAINT `acl_ibfk_1` FOREIGN KEY (`action_id`) REFERENCES `acl_actions` (`action_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `acl_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `acl_actions`
--
ALTER TABLE `acl_actions`
  ADD CONSTRAINT `acl_actions_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `acl_categories` (`category_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_phone`
--
ALTER TABLE `user_phone`
  ADD CONSTRAINT `user_phone_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
