-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 12 月 27 日 17:41
-- 服务器版本: 5.5.9
-- PHP 版本: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 数据库: `tiltViewer`
--

-- --------------------------------------------------------

--
-- 表的结构 `tilt_album`
--

CREATE TABLE IF NOT EXISTS `tilt_album` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '相册ID',
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '相册名称',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '相册描述',
  `created` int(10) unsigned NOT NULL COMMENT '创建时间',
  `updated` int(10) unsigned NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `tilt_album`
--

INSERT INTO `tilt_album` (`id`, `name`, `description`, `created`, `updated`) VALUES
(8, '都是　a''s', '奥萨是', 1356581445, 1356581973),
(9, 'sddd', 'dddd', 1356581565, 1356582001),
(10, 'sd', 'sdd', 1356581571, 1356581571),
(11, 'sdsd', 'sdsd', 1356581576, 1356581576),
(12, 'sds', 'sdsd', 1356581580, 1356581580),
(15, 'assss', 'as', 1356582135, 1356593275);

-- --------------------------------------------------------

--
-- 表的结构 `tilt_images`
--

CREATE TABLE IF NOT EXISTS `tilt_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '照片id',
  `album_id` int(10) unsigned NOT NULL COMMENT '相册ID',
  `url` varchar(255) NOT NULL COMMENT '照片地址',
  `mime` varchar(32) NOT NULL COMMENT '图片mime',
  `description` varchar(255) NOT NULL COMMENT '图片描述',
  `created` int(10) unsigned NOT NULL COMMENT '创建日起',
  `updated` int(10) unsigned NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `tilt_images`
--

INSERT INTO `tilt_images` (`id`, `album_id`, `url`, `mime`, `description`, `created`, `updated`) VALUES
(1, 15, '/upload/2012_09_14_13.52.51.jpg', 'image/jpeg', '', 1356599148, 1356599148),
(2, 15, '/upload/2012_09_14_13.53.30.jpg', 'image/jpeg', '', 1356599149, 1356599149),
(3, 15, '/upload/2012_09_14_14.40.01.jpg', 'image/jpeg', '', 1356599149, 1356599149),
(4, 15, '/upload/2012_09_15_09.25.39.jpg', 'image/jpeg', '', 1356599150, 1356599150),
(5, 15, '/upload/2012_09_15_12.08.56.jpg', 'image/jpeg', '', 1356599150, 1356599150),
(6, 15, '/upload/2012_09_16_09.45.08.jpg', 'image/jpeg', '', 1356599151, 1356599151),
(7, 15, '/upload/2012_09_16_09.49.46.jpg', 'image/jpeg', '', 1356599151, 1356599151),
(8, 15, '/upload/2012_09_16_15.15.14.jpg', 'image/jpeg', '', 1356599152, 1356599152),
(9, 15, '/upload/2012_09_17_15.14.06.jpg', 'image/jpeg', '', 1356599153, 1356599153),
(10, 15, '/upload/2012_09_18_13.55.07.jpg', 'image/jpeg', '', 1356599153, 1356599153),
(11, 15, '/upload/2012_09_20_22.32.25.jpg', 'image/jpeg', '', 1356599154, 1356599154),
(12, 15, '/upload/2012_10_03_14.06.02.jpg', 'image/jpeg', '', 1356599155, 1356599155),
(13, 15, '/upload/2012_10_10_18.43.15.jpg', 'image/jpeg', '', 1356599155, 1356599155),
(14, 15, '/upload/2012_10_11_19.17.59.jpg', 'image/jpeg', '', 1356599156, 1356599156),
(15, 15, '/upload/2012_10_15_19.41.11.jpg', 'image/jpeg', '', 1356599157, 1356599157),
(16, 15, '/upload/2012_10_16_18.41.16.jpg', 'image/jpeg', '', 1356599158, 1356599158),
(17, 15, '/upload/2012_10_21_10.28.45.jpg', 'image/jpeg', '', 1356599159, 1356599159),
(18, 15, '/upload/2012_10_23_21.34.38.jpg', 'image/jpeg', '', 1356599160, 1356599160),
(19, 15, '/upload/2012_12_14_15.11.36.jpg', 'image/jpeg', '', 1356599164, 1356599164),
(20, 15, '/upload/2012_12_21_18.22.42.jpg', 'image/jpeg', '', 1356599165, 1356599165);
