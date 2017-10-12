-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-07-01 17:45:57
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- 表的结构 `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` varchar(20) NOT NULL,
  `content` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `car`
--

INSERT INTO `car` (`id`, `head`, `content`) VALUES
(1, 'ggww', '二二二、\r\n'),
(2, '恶搞怕麻烦呢啊减肥了南方科技发你看', 'hsgnaghnaguinagjawfbwejjewognwfwifbwfu'),
(3, '绯闻绯闻粪坑围观卡和U币付额外覅被外界', ''),
(4, '噶微风万分开个房背景', ''),
(5, '个呢么快改吧家赶快把快乐不分开发货呗、', '哥哥哥呵呵热个帅哥\r\n'),
(6, 'haeskkjfsgkj个', 'gasjaenmzngwjkg'),
(7, '改啊改判为咖啡粉开发', '官网王文科了国内外开放\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `kno`
--

CREATE TABLE IF NOT EXISTS `kno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` varchar(20) NOT NULL,
  `content` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `kno`
--

INSERT INTO `kno` (`id`, `head`, `content`) VALUES
(8, 'fafe', 'fefe'),
(9, ' 阿门聊免费看色哥这个', '各位爱干嘛了吗\r\n'),
(10, '模糊了规模玩gkl', '阿莫姑娘娃交往困难了安高敬爱个报告供暖将\r\n'),
(11, '啊给我个老拿我发我份呢', ''),
(12, '尕娃嗯啊看过那', ''),
(13, '我国 跑完罚万马文科', '钢卡娃娃儿康复啊\r\n'),
(14, '阿飞无法我没法老王啊飞机', '干违法把发酵后八分卡哈尔积分而我还1');

-- --------------------------------------------------------

--
-- 表的结构 `newsuserinfo`
--

CREATE TABLE IF NOT EXISTS `newsuserinfo` (
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(20) NOT NULL COMMENT '密码',
  `email` varchar(20) NOT NULL COMMENT '邮箱'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `newsuserinfo`
--

INSERT INTO `newsuserinfo` (`username`, `password`, `email`) VALUES
('twfwf', 'qfqfqf', 'fwqfqf@q.com'),
('twfw', 'afad', 'fwqfqf@q.com'),
('twf', 'ddq', 'fwqfqf@q.com'),
('sdff', 'wfw', 'dd@qq.com'),
('abc', '123', 'dd@qq.com'),
('rgtg#', 'fwwf', 'fwfw@qq.com'),
('rgtg', '', 'fwfw@qq.com'),
('3ggk#', '', ''),
('ffef', '', ''),
('f#', '', ''),
('ihuig#', '', ''),
('dfee#$#5', '', ''),
('dsad#$', '', ''),
('sdawew', '', ''),
('', '', ''),
('qazxc', '123zxc', 'qazxc@qq.com'),
('q', '', ''),
('ef', '', ''),
('fe', '', ''),
('qazxf', '1234zx', 'qaz@qq.co'),
('1234', 'qaz123', 'qaz@qq.com'),
('fefeg', '123qaz', 'fefeg@qq'),
('fefegj', 'qaz741', 'fefeg@qq'),
('fefegjff', 'qaz741', 'fefeg@qq'),
('fefefg', 'qaz741', 'ffe@163.c'),
('gefg', '741qaz', '1@qq.com'),
('ssss', '111111a', '1@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `sport`
--

CREATE TABLE IF NOT EXISTS `sport` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `head` varchar(20) NOT NULL,
  `content` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `sport`
--

INSERT INTO `sport` (`id`, `head`, `content`) VALUES
(1, '全球飞凤飞飞', ''),
(2, '格尔额', ''),
(3, '货物给我飞飞', ''),
(4, '那我弄论文我我我我ioqfihinfhn', '赶紧忙肯购物交流看法服务公开微博各位各位感觉好玩各位各位感觉为各位感觉无法无法忘记和范围包括我开房玩不玩\r\n'),
(5, '给你给我那个文件给我个', '');

-- --------------------------------------------------------

--
-- 表的结构 `tec`
--

CREATE TABLE IF NOT EXISTS `tec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` varchar(20) NOT NULL,
  `content` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `tec`
--

INSERT INTO `tec` (`id`, `head`, `content`) VALUES
(1, ' 但很多很多、', 'svvsv'),
(2, '  aa', 'sdsvs'),
(3, '为服务网能给看', ''),
(4, '服务广告我们无法见面', ''),
(5, '跟我给我哥我国', ''),
(6, '饿死哥哥哥哥月', '和各位各位 '),
(7, '恶劣开个 爱国', ''),
(8, '红色劲儿仍OK了1', '哥哥是你二三个空冷m');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
