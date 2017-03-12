-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 03 月 12 日 07:56
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ihome`
--

-- --------------------------------------------------------

--
-- 表的结构 `homepopular`
--

CREATE TABLE IF NOT EXISTS `homepopular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province` varchar(255) NOT NULL COMMENT '所在省份',
  `belongs` varchar(255) NOT NULL COMMENT '归属',
  `price` varchar(25) NOT NULL COMMENT '租金',
  `imgsrc` varchar(255) NOT NULL COMMENT '图片',
  `star` float NOT NULL COMMENT '星级评分',
  `square` int(255) NOT NULL COMMENT '房屋面积',
  `comment_quantity` int(255) NOT NULL COMMENT '评论数量',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `homepopular`
--

INSERT INTO `homepopular` (`id`, `province`, `belongs`, `price`, `imgsrc`, `star`, `square`, `comment_quantity`) VALUES
(1, '昆明', '暖城心宿的家', '￥100/日', 'img/kunming.jpg', 4.5, 242, 50),
(2, '苏州', '苏州城外的微笑', '￥120/日', 'img/city-sz.jpg', 4.6, 230, 63),
(3, '重庆', '热辣山城', '￥90/日', 'img/city_cq.jpg', 4.3, 130, 30),
(4, '成都', '悠然自得', '￥150/日', 'img/city_cd.jpg', 4.55, 180, 48);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
