-- phpMyAdmin SQL Dump
-- version 4.2.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-08-30 18:42:57
-- 服务器版本： 5.6.17
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `yuls`
--

-- --------------------------------------------------------

--
-- 表的结构 `ch_order`
--

CREATE TABLE IF NOT EXISTS `ch_order` (
`id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `money` decimal(10,2) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `create_at` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0未支付 1 支付失败 2支付成功',
  `success_at` int(11) DEFAULT NULL,
  `opstate` varchar(255) DEFAULT NULL,
  `ovalue` varchar(255) DEFAULT NULL,
  `ekaorderid` varchar(255) DEFAULT NULL,
  `ekatime` varchar(255) DEFAULT NULL,
  `attach` varchar(255) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `ch_order`
--

INSERT INTO `ch_order` (`id`, `uid`, `money`, `remark`, `create_at`, `status`, `success_at`, `opstate`, `ovalue`, `ekaorderid`, `ekatime`, `attach`, `msg`) VALUES
(1, 1, '10.00', '10元试用', 1409413224, 2, 1409421637, '', '', NULL, NULL, NULL, NULL),
(2, 1, '10.00', '10元试用', 1409413257, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `ch_user`
--

CREATE TABLE IF NOT EXISTS `ch_user` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_at` int(11) NOT NULL,
  `last_login` int(11) NOT NULL,
  `nick_changed` int(1) NOT NULL DEFAULT '0',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `rank` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ch_user`
--

INSERT INTO `ch_user` (`id`, `username`, `nickname`, `password`, `reg_at`, `last_login`, `nick_changed`, `money`, `total_money`, `rank`) VALUES
(1, 'test22', '212', 'c4316e7b9f02e4dd76355af90794a6b0', 1409235115, 1409423616, 1, '10.00', '10.00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ch_order`
--
ALTER TABLE `ch_order`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_user`
--
ALTER TABLE `ch_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ch_order`
--
ALTER TABLE `ch_order`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ch_user`
--
ALTER TABLE `ch_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;