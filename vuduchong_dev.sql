-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2017 lúc 03:03 PM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vuduchong.dev`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(15) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `invalid` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 - Show 1 - Hide'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_group_users_permission`
--

CREATE TABLE `tbl_group_users_permission` (
  `id` tinyint(4) NOT NULL,
  `group_name` varchar(250) DEFAULT NULL,
  `list_permission` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` tinyint(4) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` tinyint(4) DEFAULT NULL,
  `invalid` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 - Show 1 - Hide'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_group_users_permission`
--

INSERT INTO `tbl_group_users_permission` (`id`, `group_name`, `list_permission`, `created_at`, `created_by`, `updated_at`, `updated_by`, `invalid`) VALUES
(1, 'Admin', 'access_user,edit_user,delete_user,add_user,profile_user,access_news,edit_news,delete_news,add_news,approve_news,access_permission,edit_permission,delete_permission,add_permission,access_menu,edit_menu,delete_menu,add_menu,access_system,edit_system,access_log,access_popup,edit_popup,delete_popup,add_popup,access_my_calendar,add_my_calendar,access_register_news,delete_register_news,access_restaurant,edit_restaurant,delete_restaurant,add_restaurant', '2015-02-11 17:00:00', NULL, '2017-07-24 01:40:59', 90, 0),
(9, 'MOD', '{\"User\":[\"index\",\"add\",\"edit\"],\"News\":[\"index\",\"add\",\"edit\",\"delete\"]}', '2017-10-03 16:07:50', 1, '2017-10-03 16:07:50', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_image`
--

CREATE TABLE `tbl_image` (
  `id` tinyint(3) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `invalid` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 - Show 1 - Hide',
  `order` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` tinyint(11) NOT NULL,
  `nleft` int(5) DEFAULT NULL,
  `nright` int(5) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `type` tinyint(2) DEFAULT NULL,
  `mgroup` tinyint(1) DEFAULT NULL,
  `parent_id` int(5) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `level` tinyint(2) DEFAULT NULL,
  `link_id` varchar(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `invalid` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `column` tinyint(4) DEFAULT '1',
  `class_menu` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `nleft`, `nright`, `title`, `type`, `mgroup`, `parent_id`, `slug`, `level`, `link_id`, `link`, `invalid`, `created_at`, `updated_at`, `created_by`, `updated_by`, `column`, `class_menu`) VALUES
(1, 1, 20, 'Danh mục gốc', NULL, 1, 0, NULL, 0, NULL, NULL, 0, '2017-05-24 15:01:59', NULL, NULL, NULL, 1, NULL),
(2, 1, 2, 'Danh mục gốc', NULL, 2, 0, NULL, 0, NULL, NULL, 0, '2017-05-24 15:01:59', NULL, NULL, NULL, 1, NULL),
(3, 2, 3, NULL, 0, 1, 1, NULL, 1, '', NULL, 0, '2017-05-24 15:02:51', '2017-07-04 17:35:51', 1, 1, 1, ''),
(4, 4, 5, NULL, 0, 1, 1, NULL, 1, '', NULL, 0, '2017-05-24 15:03:32', '2017-07-04 17:46:13', 1, 1, 1, ''),
(5, 6, 7, NULL, 0, 1, 1, NULL, 1, '', NULL, 0, '2017-05-31 14:15:22', '2017-07-04 17:46:24', 1, 1, 1, ''),
(6, 16, 17, NULL, 1, 1, 1, NULL, 1, '2', NULL, 0, '2017-05-31 14:16:59', '2017-07-04 17:50:33', 1, 1, 1, ''),
(7, 14, 15, NULL, 1, 1, 1, NULL, 1, '3', NULL, 0, '2017-05-31 14:17:16', '2017-07-05 17:26:33', 1, 1, 1, ''),
(8, 18, 19, NULL, 0, 1, 1, NULL, 1, '', NULL, 0, '2017-05-31 14:17:43', '2017-07-04 17:50:48', 1, 1, 1, ''),
(9, 8, 9, NULL, 0, 1, 1, NULL, 1, '', NULL, 0, '2017-06-12 17:27:46', '2017-07-04 17:46:31', 1, 1, 1, ''),
(10, 12, 13, NULL, 0, 1, 1, NULL, 1, '', NULL, 0, '2017-06-12 17:29:02', '2017-07-04 17:34:09', 1, 1, 1, ''),
(11, 10, 11, NULL, 0, 1, 1, NULL, 1, '', NULL, 0, '2017-06-12 17:29:52', '2017-07-05 10:39:26', 1, 1, 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_menu_detail`
--

CREATE TABLE `tbl_menu_detail` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  `mgroup` tinyint(4) NOT NULL,
  `link_id` int(11) NOT NULL,
  `link_url` text,
  `slug` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_menu_detail`
--

INSERT INTO `tbl_menu_detail` (`id`, `lang_id`, `title`, `type`, `mgroup`, `link_id`, `link_url`, `slug`) VALUES
(1, 1, 'Danh mục gốc', 0, 1, 0, NULL, ''),
(1, 2, 'Danh mục gốc', 0, 1, 0, NULL, ''),
(2, 1, 'Danh mục gốc', 0, 2, 0, NULL, ''),
(2, 2, 'Danh mục gốc', 0, 2, 0, NULL, ''),
(3, 1, 'FLC Luxury Hotel Samson', 0, 1, 0, '/vi/flc-luxury-hotel-samson.html', 'flc-luxury-hotel-samson'),
(3, 2, 'FLC Luxury Hotel Samson', 0, 1, 0, '/en/hotel.html', 'flc-luxury-hotel-samson'),
(4, 1, 'FLC Luxury Resort Samson', 0, 1, 0, '/vi/flc-luxury-resort-samson.html', 'flc-luxury-resort-samson'),
(4, 2, 'FLC Luxury Resort Samson', 0, 1, 0, '/en/resort.html', 'flc-luxury-resort-samson'),
(5, 1, 'FLC Grand Hotel Samson', 0, 1, 0, '/vi/flc-grand-hotel-samson.html', 'flc-grand-hotel-samson'),
(5, 2, 'FLC Grand Hotel Samson', 0, 1, 0, '', 'flc-grand-hotel-samson'),
(6, 1, 'Tin Tức - Sự Kiện', 1, 1, 2, '/vi/tin-tuc-su-kien-c2.html', 'tin-tuc-su-kien'),
(6, 2, 'News - Events', 1, 1, 2, '/en/news-c2.html', 'news-events'),
(7, 1, 'Khuyến Mãi', 1, 1, 3, '/vi/khuyen-mai-uu-dai-c3.html', 'khuyen-mai'),
(7, 2, 'Offers', 1, 1, 3, '/en/-c3.html', 'offers'),
(8, 1, 'Liên Hệ', 0, 1, 0, '', 'lien-he'),
(8, 2, 'Contact', 0, 1, 0, '', 'contact'),
(9, 1, 'FLC Samson Golf Links', 0, 1, 0, 'http://flcsamson.thew.vn/vi/flc-samson-golf-links.html', 'flc-samson-golf-links'),
(9, 2, 'FLC Samson Golf Links', 0, 1, 0, '', 'flc-samson-golf-links'),
(10, 1, 'Khám Phá - Giải Trí', 0, 1, 0, '//flcsamson.thew.vn/vi/giai-tri-kham-pha.html', 'kham-pha-giai-tri'),
(10, 2, 'Recreation', 0, 1, 0, '//flcsamson.thew.vn/en/giai-tri-kham-pha.html', 'recreation'),
(11, 1, 'FLC Samson Conference', 0, 1, 0, '//flcsamson.thew.vn/vi/trung-tam-hoi-nghi-flc.html', 'flc-samson-conference'),
(11, 2, 'FLC Samson Conference', 0, 1, 0, '', 'flc-samson-conference');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_module_permission`
--

CREATE TABLE `tbl_module_permission` (
  `id` int(11) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  `module_name` varchar(50) DEFAULT NULL,
  `module_value` varchar(50) DEFAULT NULL,
  `invalid` tinyint(4) DEFAULT NULL COMMENT '0: hiển thị - 1 khong hien thi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_module_permission`
--

INSERT INTO `tbl_module_permission` (`id`, `module`, `module_name`, `module_value`, `invalid`) VALUES
(1, 'user', 'NGƯỜI DÙNG', 'access,edit,delete,add,profile', 0),
(4, 'news', 'TIN TỨC', 'access,edit,delete,add,approve', 0),
(6, 'slide', 'SLIDE', 'access,edit,delete,add', 1),
(7, 'permission', 'PHÂN QUYỀN', 'access,edit,delete,add', 0),
(8, 'menu', 'MENU', 'access,edit,delete,add', 0),
(9, 'system', 'HỆ THỐNG', 'access,edit', 0),
(10, 'log', 'LOG TRUY CẬP', 'access,delete', 0),
(11, 'topic', 'CHỦ ĐỀ', 'access,edit,delete,add', 1),
(12, 'banner', 'BANNER', 'access,edit,delete,add', 1),
(13, 'photo', 'ẢNH', 'access,edit,delete,add', 1),
(14, 'popup', 'POPUP', 'access,edit,delete,add', 0),
(15, 'contact', 'LIÊN HỆ', 'access,edit,delete', 1),
(16, 'project', 'DỰ ÁN ', 'access,edit,delete,add', 1),
(18, 'project_detail', 'CHI TIẾT DỰ ÁN', 'access,edit,delete,add', 1),
(20, 'product', 'SẢN PHẨM', 'access,edit,delete,add', 0),
(21, 'meeting', 'HỘI NGHỊ & SK', 'access,edit,delete,add', 1),
(23, 'video', 'VIDEO', 'access,edit,delete,add', 1),
(24, 'my_calendar', 'LỊCH', 'access,add', 0),
(26, 'investment', 'LỢI ÍCH ĐẦU TƯ', 'access,edit,delete,add', 1),
(27, 'register_news', 'ĐĂNG KÝ NHẬN TIN', 'access,delete', 0),
(28, 'database', 'CƠ SỞ DỮ LIỆU', 'backup,restore,optimize,repair', 1),
(29, 'donate', 'DS QUYÊN GÓP', 'access,edit,delete,add', 1),
(30, 'people', 'GÂY QUỸ', 'access,edit,delete,add', 1),
(31, 'partner', 'NHÀ TÀI TRỢ', 'access,edit,delete,add', 1),
(32, 'register', 'ĐĂNG KÝ THAM GIA', 'access,edit,delete,add', 1),
(33, 'gallery', 'THƯ VIỆN ẢNH', 'access,edit,delete,add', 1),
(34, 'event', 'CHƯƠNG TRÌNH', 'access,edit,delete,add', 1),
(36, 'list_donate', 'DANH SÁCH ĐÓNG GÓP', 'access,edit,delete,add', 1),
(38, 'brand', 'THƯƠNG HIỆU', 'access,edit,delete,add', 1),
(39, 'restaurant', 'NHÀ HÀNG', 'access,edit,delete,add', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_persional_info`
--

CREATE TABLE `tbl_persional_info` (
  `id` tinyint(2) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8_unicode_ci NOT NULL,
  `background` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `invalid` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 - Show 1 - Hide',
  `order` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_persional_info`
--

INSERT INTO `tbl_persional_info` (`id`, `fullname`, `birthday`, `email`, `phone`, `address`, `job`, `avatar`, `background`, `description`, `created_at`, `updated_at`, `invalid`, `order`) VALUES
(1, 'Vũ Đức Hồng', '06/06/1993', 'vuduchong209305@gmail.com', '(+84) 986209305', 'Số 36 Phan Bá Vành, Cổ Nhuế, Hà Nội', 'Web Designer & Developer', '/assets/upload/images/avatar/_MG_1352.jpg', '/assets/upload/images/background/a.png', '<p>Học Bachkhoa aptech</p>\r\n', '2017-10-06 15:07:33', '2017-10-06 15:07:33', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_site_info`
--

CREATE TABLE `tbl_site_info` (
  `id` int(11) NOT NULL,
  `title` varchar(254) DEFAULT NULL,
  `description` varchar(1028) DEFAULT NULL,
  `phone` varchar(54) DEFAULT NULL,
  `email` varchar(54) DEFAULT NULL,
  `password_email` varchar(50) DEFAULT NULL,
  `website` varchar(54) DEFAULT NULL,
  `yahoo` varchar(255) DEFAULT NULL,
  `facebook` varchar(128) DEFAULT NULL,
  `tripadvisor` varchar(255) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `cname` varchar(128) DEFAULT NULL,
  `profile` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `hotline` varchar(255) DEFAULT NULL,
  `skype` varchar(50) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `description_seo` text,
  `keyword_seo` text,
  `lang_id` int(11) NOT NULL,
  `google` varchar(255) DEFAULT NULL,
  `email_config` varchar(50) DEFAULT NULL,
  `linkedin` varchar(250) DEFAULT NULL,
  `branch_address` varchar(255) DEFAULT NULL,
  `branch_phone` varchar(255) DEFAULT NULL,
  `branch_fax` varchar(255) DEFAULT NULL,
  `introduction` text,
  `maps` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `introduction_project` text,
  `product_des` text,
  `invesment_des` text,
  `service_des` text,
  `open_hour` varchar(255) DEFAULT NULL,
  `short_address` varchar(255) DEFAULT NULL,
  `flickr` varchar(255) DEFAULT NULL,
  `rss` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_site_info`
--

INSERT INTO `tbl_site_info` (`id`, `title`, `description`, `phone`, `email`, `password_email`, `website`, `yahoo`, `facebook`, `tripadvisor`, `logo`, `address`, `cname`, `profile`, `created_at`, `updated_at`, `hotline`, `skype`, `fax`, `twitter`, `mobile`, `youtube`, `description_seo`, `keyword_seo`, `lang_id`, `google`, `email_config`, `linkedin`, `branch_address`, `branch_phone`, `branch_fax`, `introduction`, `maps`, `instagram`, `introduction_project`, `product_des`, `invesment_des`, `service_des`, `open_hour`, `short_address`, `flickr`, `rss`) VALUES
(1, NULL, NULL, '+84 (0) 237 878 8888', 'vuduchong209305@gmail.com', 'gnohaloatnab', 'idigit.vn', NULL, 'https://www.facebook.com/tripviewflcsamson/', '', '/assets/uploads/site/images/Logo.png', 'Đường Hồ Xuân Hương, phường Quảng Cư, thành phố Sầm Sơn, tỉnh Thanh Hóa, Việt Nam', 'FLC Samson Beach & Golf Resort', NULL, NULL, '2017-06-12 17:37:02', '(84-4) 3762 1635/ 36', NULL, '', 'https://twitter.com/', NULL, '', 'FLC Samson Beach & Golf Resort', 'FLC Samson Beach & Golf Resort', 1, 'https://plus.google.com', 'seowebsite29@gmail.com', NULL, NULL, NULL, NULL, '', 'https://www.google.com/maps?ll=19.763922,105.918269&z=15&t=m&hl=en-US&gl=US&mapclient=embed&cid=11883903246864073422', 'https://www.instagram.com/flc_luxury_resort_samson/', '<p style=\"text-align: justify;\"><span style=\"font-size:16px;\"><strong>1, TH&Ocirc;NG TIN DỰ &Aacute;N:</strong></span><br />\r\n- &nbsp; &nbsp;T&ecirc;n gọi: HaLong Bay Golf Club &amp; Luxury Resort<br />\r\n- &nbsp; &nbsp;Vị tr&iacute;: Cột 3 &ndash; cột 8, phường Hồng H&agrave;, Th&agrave;nh phố Hạ Long, tỉnh Quảng Ninh&nbsp;<br />\r\n- &nbsp; &nbsp;Diện t&iacute;ch: 153ha<br />\r\n- &nbsp; &nbsp;Tổng mức đầu tư: 3.400 tỷ đồng</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" height=\"835\" src=\"/assets/uploads/systems/images/MB_Tong-the-%2B-18-lo-golf1.jpg\" width=\"1180\" /></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:16px;\"><strong>2, TIỆN &Iacute;CH - DỊCH VỤ:</strong></span><br />\r\n<span style=\"font-size:14px;\">- &nbsp; &nbsp;Trung t&acirc;m Hội nghị&nbsp;</span></p>\r\n\r\n<p>Thiết kế theo phong c&aacute;ch t&acirc;n cổ điển, sang trọng, trung t&acirc;m hội nghị quốc tế FLC Hạ Long t&iacute;ch hợp c&aacute;c chức năng, hội thảo, dịch vụ&hellip;l&agrave; lựa chọn h&agrave;ng đầu của c&aacute;c sự kiện mang tầm cỡ quốc gia v&agrave; quốc tế.&nbsp;</p>\r\n\r\n<p>FLC Hạ Long đ&atilde; đầu tư trang thiết bị, c&aacute;c hạng mục nội thất, &acirc;m thanh, &aacute;nh s&aacute;ng chất lượng cao, chuy&ecirc;n nghiệp, đồng bộ, hiện đại phục vụ cho c&aacute;c sự kiện lớn như: Hội nghị, biểu diễn nghệ thuật, đại tiệc, tổng kết v&agrave; c&aacute;c sự kiện trọng đại kh&aacute;c&hellip; với sức chứa l&ecirc;n đến 1.500 người.&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px;\">- &nbsp; &nbsp;Nh&agrave; h&agrave;ng &amp; Bar</span><br />\r\nVới thiết kế tinh tế v&agrave; tỉ mỉ trong từng chi tiết, hệ thống nh&agrave; h&agrave;ng tại FLC Hạ Long sẽ mang đến cho bạn một kh&ocirc;ng gian mới lạ, sang trọng m&agrave; ấm c&uacute;ng.&nbsp;<br />\r\nNơi đ&acirc;y, c&aacute;c đầu bếp thượng hạng với b&agrave;n tay kh&eacute;o l&eacute;o c&ugrave;ng sự s&aacute;ng tạo kh&ocirc;ng ngừng sẽ thổi l&agrave;n gi&oacute; mới v&agrave;o những m&oacute;n ăn truyền thống của c&aacute;c quốc gia khắp năm ch&acirc;u, đ&aacute;nh thức trọn vẹn khứu gi&aacute;c v&agrave; vị gi&aacute;c của mỗi thực kh&aacute;ch.&nbsp;<br />\r\n<span style=\"font-size:14px;\">- &nbsp; &nbsp;Trường đua ngựa</span><br />\r\nVốn l&agrave; một m&ocirc;n thể thao đẳng cấp thu h&uacute;t đ&ocirc;ng đảo người theo d&otilde;i, trường đua ngựa tại FLC Hạ Long Bay Golf &amp; Luxury Resort mang đến cho bạn cơ hội được tận mắt chứng kiến những ch&uacute; ngựa dũng m&atilde;nh tranh t&agrave;i.&nbsp;<br />\r\nTrang thiết bị hiện đại c&ugrave;ng một m&agrave;n h&igrave;nh lớn ngay trung t&acirc;m trường đua gi&uacute;p du kh&aacute;ch c&oacute; thể theo d&otilde;i diễn biến hồi hộp v&agrave; kịch t&iacute;nh của mọi cuộc đua một c&aacute;ch trọn vẹn nhất.&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px;\">- &nbsp; &nbsp;S&acirc;n Golf</span><br />\r\nMột s&acirc;n g&ocirc;n 18 hố tuyệt đẹp do Schmidt Curley thiết kế, FLC Hạ Long Golf &amp; Luxury Resort xứng đ&aacute;ng trở th&agrave;nh điểm đến về golf h&agrave;ng đầu tại Việt Nam.<br />\r\nFLC Hạ Long Golf Links l&agrave; s&acirc;n g&ocirc;n thử th&aacute;ch cho c&aacute;c g&ocirc;n thủ chuy&ecirc;n nghiệp thoả sức trải nghiệm v&agrave; tận hưởng v&ograve;ng g&ocirc;n của m&igrave;nh.<br />\r\nCơ sở vật chất v&agrave; c&aacute;c trang thiết bị tại FLC Hạ Long Golf Links được thiết kế h&agrave;i ho&agrave; trong từng chi tiết. Nh&agrave; c&acirc;u lạc bộ hiện đại nổi bật tr&ecirc;n lối v&agrave;o với phong cảnh được bao tr&ugrave;m cả s&acirc;n g&ocirc;n c&ugrave;ng sự tinh tế v&agrave; chu đ&aacute;o trong c&aacute;ch phục vụ.&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px;\">- &nbsp; &nbsp;Khu t&acirc;m linh</span><br />\r\nHạ Long kh&ocirc;ng chỉ c&oacute; những n&eacute;t đẹp h&ugrave;ng vĩ của n&uacute;i non, biển cả m&agrave; c&ograve;n c&oacute; sự linh thi&ecirc;ng của hồn đất. Nơi ấy đ&atilde; thổi luồng sinh kh&iacute; cho những c&ocirc;ng tr&igrave;nh t&acirc;m linh ấn tượng, l&agrave; điểm đến của những ai ưa th&iacute;ch sự b&igrave;nh lặng v&agrave; ri&ecirc;ng tư. Về với FLC Hạ Long Golf &amp; Luxury Resort, du kh&aacute;ch kh&ocirc;ng chỉ đắm ch&igrave;m trong l&agrave;n nước m&aacute;t l&agrave;nh của biển khơi m&agrave; c&ograve;n được ngao du qua miền đất của sự thanh b&igrave;nh.&nbsp;</p>\r\n', 'FLC HA LONG BAY GOLF CLUB & LUXURY RESORT - KỲ QUAN ĐỨNG GIỮA KỲ QUAN\r\n', 'FLC HA LONG BAY GOLF CLUB & LUXURY RESORT\r\n', 'FLC HA LONG BAY GOLF CLUB & LUXURY RESORT\r\n', 'Thứ Hai - Chủ Nhật từ 00:00 - 23:59', 'Sầm Sơn, Thanh Hóa', NULL, NULL),
(1, NULL, NULL, '+84 (0) 237 878 8888', 'info@flcsamson.com.vn', '', 'idigit.vn', NULL, 'https://www.facebook.com/tripviewflcsamson/', 'test tripad', '/assets/uploads/site/images/Logo.png', 'Ho Xuan Huong road, Quang Cu ward, Samson city, Thanh Hoa', 'FLC Samson Beach & Golf Resort', NULL, NULL, '2017-06-12 17:37:02', '(84-4) 3762 1635/ 36', NULL, '', '', NULL, '', 'FLC Samson Beach & Golf Resort', 'FLC Samson Beach & Golf Resort', 2, '', '', NULL, NULL, NULL, NULL, '', 'https://www.google.com/maps?ll=19.763922,105.918269&z=15&t=m&hl=en-US&gl=US&mapclient=embed&cid=11883903246864073422', 'https://www.instagram.com/flc_luxury_resort_samson/', '<p>updating...</p>\r\n', '<p><span style=\"line-height: 20.8px;\">FLC HA LONG BAY GOLF CLUB & Luxury Resort is pleased to inspire your interesting journey.</span></p>\r\n', '<p><span style=\"line-height: 20.8px;\">Influenced by European architecture, Mistral Top View Restaurant is located at the top of a hilly cove overlooking the majestic view of the golf course and gigantic ocean.</span></p>\r\n', '<p><span style=\"line-height: 20.8px;\">FLC HA LONG BAY GOLF CLUB & LUXURY RESORT có đầy đủ các tiện ích hiện đại phục vụ nhu cầu sống, làm việc và thư giãn của tất cả các quý khách. Mang đến một trải nghiệm tuyệt với nhất cho bạn.</span></p>\r\n', 'Mon - Sun from 00:00 - 23:59', 'Sam Son, Thanh Hoa', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` tinyint(2) NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` tinyint(1) NOT NULL,
  `updated_by` tinyint(1) NOT NULL,
  `order` tinyint(2) NOT NULL,
  `invalid` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 - Show 1 - Hide'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `name`, `image`, `link`, `created_at`, `updated_at`, `created_by`, `updated_by`, `order`, `invalid`) VALUES
(1, 'facebook', '/assets/upload/images/socials/facebook.svg', 'https://www.facebook.com/mixerc6dj', '2017-10-08 03:02:17', '2017-10-08 03:02:17', 1, 1, 1, 0),
(2, 'youtube', '/assets/upload/images/socials/youtube.svg', 'https://www.youtube.com/user/MixerC6', '2017-10-08 03:02:17', '2017-10-08 03:02:17', 1, 1, 2, 0),
(3, 'skype', '/assets/upload/images/socials/skype.svg', 'skype:vuduchong209305@gmail.com?chat', '2017-10-08 03:02:17', '2017-10-08 03:02:17', 1, 1, 3, 0),
(4, 'flickr', '/assets/upload/images/socials/flickr.svg', 'https://www.flickr.com/photos/vuduchong209305/albums', '2017-10-08 03:02:17', '2017-10-08 03:02:17', 1, 1, 4, 0),
(5, 'twitter', '/assets/upload/images/socials/twitter.svg', 'https://www.twitter.com/vuduchong209305', '2017-10-08 03:02:17', '2017-10-08 03:02:17', 1, 1, 5, 0),
(6, 'instagram', '/assets/upload/images/socials/instagram.svg', 'https://www.instagram.com/vuduchong/', '2017-10-08 03:02:17', '2017-10-08 03:02:17', 1, 1, 6, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `avatar_path` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `online` tinyint(1) DEFAULT NULL COMMENT '1 - Online 0 - Offline',
  `group` tinyint(4) NOT NULL,
  `invalid` tinyint(1) DEFAULT '0' COMMENT '0 - Show 1 - Hide',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 - Default 1 - Deleted',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `last_visited` datetime DEFAULT NULL,
  `reset_password_token` varchar(255) DEFAULT NULL,
  `created_token` int(11) DEFAULT NULL,
  `lang_id` tinyint(4) DEFAULT '1',
  `lang_desc` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `password`, `full_name`, `avatar_path`, `email`, `address`, `phone_number`, `online`, `group`, `invalid`, `deleted`, `created_at`, `updated_at`, `created_by`, `updated_by`, `last_visited`, `reset_password_token`, `created_token`, `lang_id`, `lang_desc`) VALUES
(1, 'vuduchong', '25f9e794323b453885f5181f1b624d0b', 'Vũ Đức Hồng', '/assets/upload/images/avatar/_MG_1352.jpg', 'vuduchong209305@gmail.com', 'Cẩm Phả', '0986209305', 1, 1, 0, 0, '2017-10-03 08:00:55', '2017-10-04 05:55:51', NULL, 1, '2017-10-10 19:31:20', NULL, NULL, 1, NULL),
(2, 'vuduchai', '25f9e794323b453885f5181f1b624d0b', 'Vũ Đức Hải', '/assets/upload/images/avatar/2014-07-22 10_21_09.jpg', 'vuduchai@gmail.com', 'Cẩm Phả', '0987654321', 0, 9, 0, 0, '2017-10-04 15:24:04', '2017-10-04 15:28:09', 1, 1, '2017-10-04 22:31:36', NULL, NULL, 1, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_group_users_permission`
--
ALTER TABLE `tbl_group_users_permission`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_menu_detail`
--
ALTER TABLE `tbl_menu_detail`
  ADD PRIMARY KEY (`id`,`lang_id`);

--
-- Chỉ mục cho bảng `tbl_module_permission`
--
ALTER TABLE `tbl_module_permission`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_persional_info`
--
ALTER TABLE `tbl_persional_info`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_site_info`
--
ALTER TABLE `tbl_site_info`
  ADD PRIMARY KEY (`id`,`lang_id`);

--
-- Chỉ mục cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `group_id` (`group`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tbl_group_users_permission`
--
ALTER TABLE `tbl_group_users_permission`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `tbl_module_permission`
--
ALTER TABLE `tbl_module_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT cho bảng `tbl_persional_info`
--
ALTER TABLE `tbl_persional_info`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `tbl_site_info`
--
ALTER TABLE `tbl_site_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`group`) REFERENCES `tbl_group_users_permission` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
