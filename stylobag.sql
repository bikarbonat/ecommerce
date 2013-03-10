-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2013 at 07:21 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stylobag`
--

-- --------------------------------------------------------

--
-- Table structure for table `sb_category`
--

CREATE TABLE IF NOT EXISTS `sb_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_parent_id` int(11) DEFAULT NULL,
  `category_name` varchar(45) DEFAULT NULL,
  `category_slug` varchar(50) DEFAULT NULL,
  `category_sequence` int(11) DEFAULT NULL,
  `category_description` text,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sb_category`
--

INSERT INTO `sb_category` (`category_id`, `category_parent_id`, `category_name`, `category_slug`, `category_sequence`, `category_description`) VALUES
(1, 0, 'Backpack', 'backpack', 0, '<p>0</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sb_category_product`
--

CREATE TABLE IF NOT EXISTS `sb_category_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sequence` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sb_category_product`
--


-- --------------------------------------------------------

--
-- Table structure for table `sb_ci_sessions`
--

CREATE TABLE IF NOT EXISTS `sb_ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sb_ci_sessions`
--

INSERT INTO `sb_ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('f229709392c629399a0d9bdcc7433e06', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.7 (KHTML, like Gecko) RockMelt/0.16.91.483 Chrome/16.0.912.77 Safari', 1362062411, 'a:4:{s:9:"user_data";s:0:"";s:9:"logged_in";b:1;s:10:"user_level";s:1:"1";s:7:"user_id";s:1:"1";}'),
('7aa6cf676e521fcc8e517c6f4fa4f03e', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.7 (KHTML, like Gecko) RockMelt/0.16.91.483 Chrome/16.0.912.77 Safari', 1362062712, ''),
('a24944507c7fa2bffc00ef1f16f9700d', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.7 (KHTML, like Gecko) RockMelt/0.16.91.483 Chrome/16.0.912.77 Safari', 1362063411, ''),
('e28b3d9ebb0f82f437dc8b2cf8bc3868', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.7 (KHTML, like Gecko) RockMelt/0.16.91.483 Chrome/16.0.912.77 Safari', 1362499124, '');

-- --------------------------------------------------------

--
-- Table structure for table `sb_group`
--

CREATE TABLE IF NOT EXISTS `sb_group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(45) DEFAULT NULL,
  `group_permission` varchar(45) DEFAULT NULL,
  `group_discount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sb_group`
--

INSERT INTO `sb_group` (`group_id`, `group_name`, `group_permission`, `group_discount`) VALUES
(1, 'Super Administrator', '1', NULL),
(2, 'Administrator', '2', ''),
(3, 'Customer', '3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sb_image`
--

CREATE TABLE IF NOT EXISTS `sb_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `image_featured` int(11) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `sb_image`
--

INSERT INTO `sb_image` (`image_id`, `product_id`, `image_name`, `image_featured`) VALUES
(1, 26, '0b29f43de29ccb194dab5828e751df1e.jpg', 0),
(2, 26, 'da1f12e2a44122764a64be632e9dc013.jpg', 0),
(3, 26, 'aa9c595a5d99e3f2b7f265730c2cd272.jpg', 0),
(4, 27, 'e42d5c15fa34e90eee6d4e9c1155445c.jpg', 0),
(5, 27, 'b745cbb8f7d667e6f2d361e997d77e2f.jpg', 0),
(6, 27, 'e4745f36a20420aef25bb0559b354bcc.jpg', 0),
(7, 27, 'f882ba05d3ad7b82672662f4d72c8b69.jpg', 0),
(8, 28, '8ea966738b2d5a0ccdcaeea99d947a08.jpg', 0),
(9, 28, '776324d60a8ce00d0e2c20e4b12c2ab4.jpg', 0),
(10, 28, '17d989f8569664bcab3b1483a4e3269f.jpg', 0),
(11, 29, 'c1ea9c93620e787e266b0bc3ae0837eb.jpg', 0),
(12, 29, '6a41a9530a3cf91484f098e94d0ea116.jpg', 0),
(13, 29, 'c5b7b27c5c760af77838a0148c21d842.jpg', 0),
(14, 30, '0b0ddc2dd7dcaa94a2388772fdffc770.jpg', 0),
(15, 30, '72babaaeee89e2ba103c282c2ebfc0ff.jpg', 0),
(16, 30, '70c3b0cd030126443f08aa6d4ff33b87.jpg', 0),
(17, 31, '8967b44a7784c8bdc1390808e2b88e5e.jpg', 0),
(18, 31, '7352019f6739cec422b490181976e244.jpg', 0),
(19, 31, 'fe6c889e5c83a0f17614024d2806174f.jpg', 0),
(20, 32, '2181fd9160c3a842297b4099f27989f8.jpg', 0),
(21, 32, '46057d8fa96a30095adf1fecb49eda44.jpg', 0),
(22, 32, 'b452087e87f1802e37765092d3509dc7.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sb_order`
--

CREATE TABLE IF NOT EXISTS `sb_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_number` varchar(20) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `order_status` int(11) DEFAULT '0',
  `order_shipping` decimal(10,2) NOT NULL,
  `order_total` decimal(10,2) DEFAULT NULL,
  `order_name` varchar(150) NOT NULL,
  `order_address` text NOT NULL,
  `order_zip_code` varchar(10) NOT NULL,
  `order_city` varchar(100) NOT NULL,
  `order_state` varchar(100) NOT NULL,
  `order_phone` varchar(15) NOT NULL,
  `order_payment` text NOT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_number` (`order_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sb_order`
--

INSERT INTO `sb_order` (`order_id`, `order_number`, `user_id`, `order_date`, `order_status`, `order_shipping`, `order_total`, `order_name`, `order_address`, `order_zip_code`, `order_city`, `order_state`, `order_phone`, `order_payment`) VALUES
(1, '70961690', 1, '2013-02-13 14:45:59', 1, '0.00', '0.00', 'Mohd Farhan Firdaus', 'normal', '02600', 'Arau', 'Sabah/Labuan', '0192950480', ''),
(2, '74101818', 1, '2013-02-13 14:46:55', 2, '21.00', '136.00', 'Mohd Farhan Firdaus', 'normal', '02600', 'Arau', 'Sabah/Labuan', '0192950480', '');

-- --------------------------------------------------------

--
-- Table structure for table `sb_order_product`
--

CREATE TABLE IF NOT EXISTS `sb_order_product` (
  `order_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `order_product_quantity` int(11) DEFAULT NULL,
  `order_product_price` decimal(10,2) DEFAULT NULL,
  `order_product_subtotal` decimal(10,2) DEFAULT NULL,
  `order_contents` text NOT NULL,
  PRIMARY KEY (`order_product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sb_order_product`
--

INSERT INTO `sb_order_product` (`order_product_id`, `order_id`, `product_id`, `order_product_quantity`, `order_product_price`, `order_product_subtotal`, `order_contents`) VALUES
(1, 70961690, 1, 1, '53.00', '53.00', 'a:3:{s:4:"Name";s:11:"W03 - White";s:4:"Code";s:3:"W03";s:6:"Weight";s:3:"660";}'),
(2, 70961690, 2, 1, '62.00', '62.00', 'a:3:{s:4:"Name";s:9:"W04 - Red";s:4:"Code";s:3:"W04";s:6:"Weight";s:3:"660";}'),
(3, 74101818, 1, 1, '53.00', '53.00', 'a:3:{s:4:"Name";s:11:"W03 - White";s:4:"Code";s:3:"W03";s:6:"Weight";s:3:"660";}'),
(4, 74101818, 5, 1, '62.00', '62.00', 'a:3:{s:4:"Name";s:10:"W04 - Grey";s:4:"Code";s:3:"W04";s:6:"Weight";s:3:"660";}');

-- --------------------------------------------------------

--
-- Table structure for table `sb_product`
--

CREATE TABLE IF NOT EXISTS `sb_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(150) DEFAULT NULL,
  `product_code` varchar(10) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `product_image` text,
  `product_weight` int(11) DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT '0.00',
  `product_saleprice` decimal(10,2) DEFAULT '0.00',
  `product_description` text,
  `product_slug` varchar(200) DEFAULT NULL,
  `product_status` int(11) NOT NULL,
  `product_featured` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `sb_product`
--

INSERT INTO `sb_product` (`product_id`, `product_name`, `product_code`, `product_quantity`, `product_image`, `product_weight`, `product_price`, `product_saleprice`, `product_description`, `product_slug`, `product_status`, `product_featured`, `category_id`) VALUES
(1, 'W03 - White', 'W03', 0, 'fe6455dbc0a9f7b11799879938876e85.jpg', 660, '53.00', '0.00', '', 'W03-White', 0, 1, 1),
(2, 'W04 - Red', 'W04', 0, 'd9a0947da910e1dd40e780a37282f605.jpg', 660, '62.00', '0.00', '', 'W04-Red', 0, 1, 1),
(3, 'W04 - Purple', 'W04', 0, '0959cdbd180e1ff407a588c87af99eac.jpg', 660, '62.00', '0.00', '', 'W04-Purple', 0, 0, 1),
(4, 'W04 - Coffee', 'W04', 0, '86788022213ecc7a5b162458325d23cf.jpg', 660, '62.00', '0.00', '', 'W04-Coffee', 0, 0, 1),
(5, 'W04 - Grey', 'W04', 0, 'c65ae0437402851de2495431029c1b43.jpg', 660, '62.00', '0.00', '', 'W04-Grey', 0, 0, 1),
(6, 'W04 - Black', 'W04', 0, '0f3f125c081a258ef025593fe027a11f.jpg', 660, '62.00', '0.00', '', 'W04-Black', 0, 1, 1),
(7, 'W05 - Blue', 'W05', 0, '19d1c0fabe18415b481e20dbbf193b09.jpg', 620, '50.00', '0.00', '', 'W05-Blue', 0, 1, 1),
(8, 'W05 - Red', 'W05', 0, 'f648b960290528a3e31946463f72290e.jpg', 620, '50.00', '0.00', '', 'W05-Red', 0, 0, 1),
(10, 'W05 - Khaki', 'W05', 0, '52a6421745af9272ee4cf186d4e4be57.jpg', 620, '50.00', '0.00', '', 'W05-Khaki', 0, 1, 1),
(11, 'W05 - Pink', 'W05', 0, 'df044668d07fdc11f6f67cb23fdf635d.jpg', 620, '50.00', '0.00', '', 'W05-Pink', 0, 1, 1),
(12, 'W05 - Grey', 'W05', 0, 'd44958d0e9fc128b476a73552f178cfb.jpg', 620, '50.00', '0.00', '', 'W05-Grey', 0, 1, 1),
(13, 'W05 - Purple', 'W05', 0, 'e498632813a235ac616e6392fe1e037c.jpg', 620, '50.00', '0.00', '', 'W05-Purple', 0, 1, 1),
(14, 'W06 - Black', 'W06', 0, '550c5d0b75ad7388fd58957a113e966d.jpg', 1000, '60.00', '0.00', '', 'W06-Black', 0, 1, 1),
(15, 'W06 - Coffee', 'W06', 0, '7133b320a5809a9e8599b78c91a8d611.jpg', 1000, '60.00', '0.00', '', 'W06-Coffee', 0, 1, 1),
(16, 'W06 - Red', 'W06', 0, '1e9d198a25acae9ed9657c379e4fc8bf.jpg', 1000, '60.00', '0.00', '', 'W06-Red', 0, 1, 1),
(17, 'W08 - Red', 'W08', 0, 'fbdb52a895808d030945585b2326bf98.jpg', 600, '55.00', '0.00', '', 'W08-Red', 0, 1, 1),
(18, 'W08 - Black', 'W08', 0, '1ba4debe681030cff9e70e88aa5fdaaf.jpg', 600, '55.00', '0.00', '', 'W08-Black', 0, 0, 1),
(19, 'W08 - Coffee', 'W08', 0, '6d093beb55c1fd2be911a8ffb33f92a6.jpg', 600, '55.00', '0.00', '', 'W08-Coffee', 0, 1, 1),
(26, 'wowo', '', 0, NULL, 0, '100.00', '0.00', '', 'wowo', 0, 1, 1),
(27, 'asasas', '', 0, NULL, 0, '123.00', '0.00', '', 'asasas', 0, 1, 1),
(28, '121212', '', 0, NULL, 0, '121.00', '0.00', '', '121212', 0, 1, 1),
(29, 'asasas', '', 0, NULL, 0, '11212.00', '0.00', '', 'asasas', 0, 1, 1),
(30, 'asasas', '', 0, NULL, 0, '78.00', '0.00', '', 'asasas', 0, 1, 1),
(31, 'asasas', '', 0, NULL, 0, '12.00', '0.00', '', 'asasas', 0, 1, 1),
(32, 'asasas', '', 0, NULL, 0, '12313.00', '0.00', '', 'asasas', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sb_user`
--

CREATE TABLE IF NOT EXISTS `sb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(150) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `user_address` text,
  `user_zip_code` varchar(10) DEFAULT NULL,
  `user_city` varchar(100) DEFAULT NULL,
  `user_state` varchar(100) DEFAULT NULL,
  `user_code` varchar(20) DEFAULT NULL,
  `user_subcribe` int(11) DEFAULT NULL,
  `user_status` int(11) DEFAULT '0',
  `user_date_added` datetime DEFAULT NULL,
  `user_last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `sb_user`
--

INSERT INTO `sb_user` (`user_id`, `user_name`, `username`, `user_email`, `user_phone`, `user_password`, `group_id`, `user_address`, `user_zip_code`, `user_city`, `user_state`, `user_code`, `user_subcribe`, `user_status`, `user_date_added`, `user_last_login`) VALUES
(1, 'Mohd Farhan Firdaus', 'farhan', 'paanblogger@gmail.com', '0192950480', '123456', 1, 'normal', '02600', 'Arau', 'Perlis', NULL, NULL, NULL, NULL, '2013-02-28 14:40:31'),
(4, 'Code Garage', NULL, 'cgapp123@gmail.com', '60125236345', '123456', 3, 'test', '02600', 'Arau', 'Perlis', NULL, NULL, NULL, '2012-12-29 09:53:33', '2013-01-26 03:47:23'),
(3, 'Normal User', NULL, 'normal@mail.com', '0190000', 'normal', 3, 'normal', '02600', 'Arau', 'Perlis', NULL, NULL, NULL, '2012-12-19 16:15:25', '2012-12-29 12:48:54'),
(15, 'Code Garage', NULL, 'cgapp234@gmail.com', '60179193896', '1', 3, 'a', '09000', 'Kulim', 'Kedah', '10303292', NULL, 1, '2012-12-29 10:24:05', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
