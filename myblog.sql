-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-27 12:54:37
-- 服务器版本： 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `blog_admin`
--

CREATE TABLE `blog_admin` (
  `id` mediumint(9) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` char(32) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `blog_admin`
--

INSERT INTO `blog_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'admin3', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'admin2', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `blog_article`
--

CREATE TABLE `blog_article` (
  `id` mediumint(9) NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `keywords` varchar(150) CHARACTER SET utf8 NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pic` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `click` mediumint(9) NOT NULL DEFAULT '0',
  `cateid` mediumint(9) NOT NULL,
  `time` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `blog_article`
--

INSERT INTO `blog_article` (`id`, `title`, `keywords`, `desc`, `pic`, `content`, `click`, `cateid`, `time`) VALUES
(1, '测试文章', '测试 哈哈', '测试 哈哈', '/static/uploads/20170328/63cad5b461283854041c6bb7d88bb9fd.jpg', '                                                                                                                                                                测试 哈哈测试 哈哈测试 哈哈测试 哈哈                               \r\n                                                               \r\n                                                               \r\n                                 测试 哈哈测试 哈哈测试 哈哈测试 哈哈       测试 哈哈测试 哈哈测试 哈哈测试 哈哈       测试 哈哈测试 哈哈测试 哈哈测试 哈哈                                     \r\n                                                               \r\n                                ', 39, 1, 1),
(2, '测试文章1', '测试，文章', '测试，文章', '/static/uploads/20170322/c267403d2513fa8b52eaec960debe5f6.jpg', '                                                                                                                                <p>测试，文章测试，文章测试，文章测试，文章</p>                               \r\n                                                               \r\n                                                               \r\n                                                               \r\n                                ', 50, 1, 1490188750),
(3, '测试文章2', '测试,文章', '测试,文章', '/static/uploads/20170322/df57d7c6377bffcb201173cf20bc99f2.jpg', '                                                                                                                                                                                                <p>测试，文章测试，文章测试，文章测试，文章</p>                               \r\n                                                               \r\n                                                               \r\n                                                               \r\n                                                               \r\n                                                               \r\n                                ', 23, 1, 1490188784),
(4, '测试文章3', '测试，发给，123', '测试，发给，123', '/static/uploads/20170328/e2295f6705b400b28e5e10077240fa5f.jpg', '                                                                                                                                                                <p>了换E文陈文we了</p>                               \r\n                                                               \r\n                                                               \r\n                                                               \r\n                                                               \r\n                                ', 28, 1, 1490188842),
(7, 'erfr', 'rttrtr', 'rttrtrtrtrrertttttttttttttttttt', NULL, '                                                                                         gfgfgfggfgfgfg hhhhhhhhhhhhhhhhyh</p>                               \r\n                                                               \r\n                                                               \r\n                                ', 0, 1, 1491739700);

-- --------------------------------------------------------

--
-- 表的结构 `blog_cate`
--

CREATE TABLE `blog_cate` (
  `id` mediumint(9) NOT NULL,
  `catename` varchar(30) CHARACTER SET utf8 NOT NULL,
  `keywords` varchar(150) CHARACTER SET utf8 NOT NULL,
  `desc` text CHARACTER SET utf8 NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '栏目类型0：列表 1：留言'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `blog_cate`
--

INSERT INTO `blog_cate` (`id`, `catename`, `keywords`, `desc`, `type`) VALUES
(1, '爱编程', '学习 编程 PHP MySQL', '我的编程路', 0),
(3, '爱生活', '生活 跑步 学习', '我的小生活', 0),
(6, '简介', '个人简介', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `blog_guest`
--

CREATE TABLE `blog_guest` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `nickname` char(16) NOT NULL DEFAULT '',
  `email` varchar(60) DEFAULT NULL,
  `book` text NOT NULL,
  `createtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `reply` text,
  `replytime` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `blog_link`
--

CREATE TABLE `blog_link` (
  `id` mediumint(9) NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `url` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `blog_link`
--

INSERT INTO `blog_link` (`id`, `title`, `desc`, `url`) VALUES
(1, '百度', '                jh                    https://www.baidu.comhttps://www.baidu.comhttps://www.baidu.com                                ', 'https://www.baidu.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_admin`
--
ALTER TABLE `blog_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_article`
--
ALTER TABLE `blog_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_cate`
--
ALTER TABLE `blog_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_guest`
--
ALTER TABLE `blog_guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_link`
--
ALTER TABLE `blog_link`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `blog_admin`
--
ALTER TABLE `blog_admin`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `blog_cate`
--
ALTER TABLE `blog_cate`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `blog_guest`
--
ALTER TABLE `blog_guest`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `blog_link`
--
ALTER TABLE `blog_link`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
