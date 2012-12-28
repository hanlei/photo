-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 12 月 28 日 14:39
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
  `size` int(10) NOT NULL,
  `height` int(6) NOT NULL,
  `width` int(6) NOT NULL,
  `date` int(10) NOT NULL,
  `mime` varchar(32) NOT NULL COMMENT '图片mime',
  `description` varchar(255) NOT NULL COMMENT '图片描述',
  `created` int(10) unsigned NOT NULL COMMENT '创建日起',
  `updated` int(10) unsigned NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `tilt_images`
--

INSERT INTO `tilt_images` (`id`, `album_id`, `url`, `size`, `height`, `width`, `date`, `mime`, `description`, `created`, `updated`) VALUES
(29, 15, '/upload/15/2009_06_25_18.56.24_4.jpg', 14651, 240, 180, 1245927384, 'image/jpeg', '', 1356676656, 1356676656),
(30, 15, '/upload/15/2009_07_11_17.52.32_4.jpg', 21801, 240, 180, 1247305952, 'image/jpeg', '', 1356676656, 1356676656);
