-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-01-15 05:37:47
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `name` char(10) NOT NULL,
  `password` char(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, '曾勋', '12345'),
(2, '刘奇', '12345');

-- --------------------------------------------------------

--
-- 表的结构 `cur`
--

DROP TABLE IF EXISTS `cur`;
CREATE TABLE IF NOT EXISTS `cur` (
  `cName` varchar(30) NOT NULL,
  `cTime` varchar(8) NOT NULL,
  `cTes` varchar(15) NOT NULL,
  `cStu` varchar(15) DEFAULT NULL,
  `cRes` int(3) DEFAULT NULL,
  UNIQUE KEY `cName` (`cName`,`cStu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cur`
--

INSERT INTO `cur` (`cName`, `cTime`, `cTes`, `cStu`, `cRes`) VALUES
('数据库', '2014-06', '刘建奇', '王财神', 97),
('生物', '2014-06', '刘奇生', '王财神', 66),
('数据库', '2014-06', '刘建奇', '赵日天', 69),
('生物', '2014-06', '刘奇生', '赵日天', NULL),
('高等数学', '2018-01', '牛志毅', '赵日天', NULL),
('历史', '2018-06', '方圆圆', '赵日天', 78),
('历史', '2018-06', '方圆圆', '李小龙', 66),
('高等数学', '2018-01', '牛志毅', '李小龙', NULL),
('JAVA', '2018-06', '杨超', '陈肯杰', NULL),
('历史', '2018-06', '方圆圆', '陈肯杰', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `sc`
--

DROP TABLE IF EXISTS `sc`;
CREATE TABLE IF NOT EXISTS `sc` (
  `ctime` varchar(10) NOT NULL,
  `cur` varchar(15) NOT NULL,
  `tes` varchar(15) NOT NULL,
  UNIQUE KEY `cur` (`cur`,`tes`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sc`
--

INSERT INTO `sc` (`ctime`, `cur`, `tes`) VALUES
('2014-06', '数据库', '刘建奇'),
('2014-06', '生物', '刘奇生'),
('2018-01', '高等数学', '牛志毅'),
('2018-06', '历史', '方圆圆'),
('2018-06', 'JAVA', '杨超');

-- --------------------------------------------------------

--
-- 表的结构 `stu`
--

DROP TABLE IF EXISTS `stu`;
CREATE TABLE IF NOT EXISTS `stu` (
  `id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `stu`
--

INSERT INTO `stu` (`id`, `name`, `password`) VALUES
(20140521, '赵日天', 'qq123'),
(20140033, '王财神', 'a123456'),
(20140500, '李小龙', 'a1234'),
(20140501, '陈肯杰', 'a1234');

-- --------------------------------------------------------

--
-- 表的结构 `tes`
--

DROP TABLE IF EXISTS `tes`;
CREATE TABLE IF NOT EXISTS `tes` (
  `id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tes`
--

INSERT INTO `tes` (`id`, `name`, `password`) VALUES
(201400, '刘建奇', 'a123'),
(201406, '刘奇生', 'a123'),
(201408, '杨超', 'a123'),
(201405, '方圆圆', 'a123'),
(201422, '牛志毅', 'a123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
