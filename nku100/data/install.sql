-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 12:48 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nku`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activityAddress` varchar(255) NOT NULL,
  `activityTime` datetime NOT NULL,
  `activityContent` text NOT NULL,
  `activityName` varchar(255) NOT NULL,
  `activityId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activityAddress`, `activityTime`, `activityContent`, `activityName`, `activityId`, `categoryId`) VALUES
('八里台校区东方艺术大楼演播厅', '2019-03-31 09:00:00', '南开大学京剧传承基地启动仪式', '南开大学京剧传承基地启动仪式', 1, 5),
('八里台校区田家炳音乐厅', '2019-03-31 14:00:00', '南开大学建校100周年倒计时200天仪式暨第二届南开大学MBA校友会发展论坛', '南开大学建校100周年倒计时200天仪式暨第二届南开大学MBA校友会发展论坛', 2, 1),
('八里台校区主楼小礼堂', '2019-03-29 14:30:00', '巴里·马歇尔院士（诺奖）：突破性的创新-诺贝尔奖得主的诞生与合作机遇', '巴里·马歇尔院士（诺奖）：突破性的创新-诺贝尔奖得主的诞生与合作机遇', 3, 2),
('八里台校区省身楼一楼多功能厅', '2019-03-26 00:00:00', '威廉·科恩：处在十字路口的中美关系', '威廉·科恩：处在十字路口的中美关系', 4, 2),
('八里台校区生物站报告厅', '2019-03-26 12:30:00', '邓子新，中国科学院院士（Member，CAS），第三世界科学院院士（Fellow，TWAS），美国微生物科学院院士（Fellow，AAM）。现担任微生物代谢国家重点实验室主任，中国微生物学会理事长, 中国农业生物技术学会副理事长，国际工业微生物遗传学组织专家委员会（GIM-IC）主席。现任美国《ACS Chemical Biology》副主编，《CELL Chemical Biology》, 《Applied & Environmental Microbiology》等数十个国内外刊物编委。\r\n\r\n1982年获华中农业大学学士学位，毕业后留校任助教，1987年获英国University of East Anglia博士学位，在英国John Innes 研究中心做博士后一年；1988，1991，1992年先后在华中农业大学始任讲师、副教授、教授；1993年遴选为博导；2000年始任上海交通大学教授，2004年被评为教育部“长江学者”特聘教授。\r\n\r\n长期从事微生物代谢的分子生物学研究，主攻放线菌遗传学及抗生素生物合成的化学生物学，打开DNA硫修饰新领域，在国内外学术刊物上发表300余篇研究论文。 \r\n\r\n先后获得国家自然科学二等奖（2008）、上海市（2004）和农业部科技进步一等奖（1994）、教育部自然科学一等奖(2015)、二等奖(2007)、“瑞典国王Baudiouin奖”(1997)等。蝉联2005、2006年中国高校十大科技进展和环球科学2007全球十大科学新闻。1990年以来，相继被授予国家级有突出贡献的专家(1991)、霍英东基金会青年教师奖(1991)、首届“中国青年科学家奖”提名奖(1993)、首届国家杰出青年科学基金奖(1994)、“中国青年科技奖”(1994)、上海市十大科技创新英才(2005)、上海市科技领军人物(2006)、上海市劳动模范(2007)、全国五一劳动奖章(2008)、全国先进工作者(2010)、何梁何利奖（2012）、谈家桢生命科学成就奖（2017）等。\r\n', '邓子新院士：我平凡科研案例背后的科学与人文思考\r\n', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryName` varchar(255) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryName`, `categoryId`) VALUES
('百年校庆', 1),
('百年南开大讲坛', 2),
('学术活动', 3),
('发展活动', 4),
('文体活动', 5),
('纪念活动', 6),
('校友活动', 7),
('其他活动', 8);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `collegeId` int(11) NOT NULL,
  `collegeName` varchar(255) NOT NULL,
  `collegeCampus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `figure`
--

CREATE TABLE `figure` (
  `figureName` varchar(255) NOT NULL,
  `figureDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `figure`
--

INSERT INTO `figure` (`figureName`, `figureDescription`) VALUES
('刘泽华', 'http://100.nankai.edu.cn/2018/1010/c10885a110544/page.htm'),
('叶嘉莹', 'http://100.nankai.edu.cn/2019/0104/c10885a117886/page.htm'),
('周恩来', 'http://100.nankai.edu.cn/2019/0109/c10885a118076/page.htm'),
('郭永怀', 'http://100.nankai.edu.cn/2018/1207/c10885a116193/page.htm'),
('陈永胜', 'http://100.nankai.edu.cn/2019/0109/c10885a118074/page.htm'),
('顾沛', 'http://100.nankai.edu.cn/2018/1010/c10885a110539/page.htm');

-- --------------------------------------------------------

--
-- Table structure for table `hold`
--

CREATE TABLE `hold` (
  `activityId` int(11) NOT NULL,
  `hostId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `hostName` varchar(255) NOT NULL,
  `hostId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`hostName`, `hostId`) VALUES
('汉语言文化学院', 1),
('南开大学MBA校友会', 2),
('生命科学学院', 3),
('国际交流处', 4);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `managerId` int(11) NOT NULL,
  `managerName` varchar(255) NOT NULL,
  `managerGender` varchar(255) NOT NULL,
  `managerMail` varchar(255) NOT NULL,
  `collegeId` int(11) NOT NULL,
  `managerHomework` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messageId` int(11) NOT NULL,
  `messageContent` text NOT NULL,
  `messageTime` datetime NOT NULL,
  `usersName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1564050965),
('m130524_201442_init', 1564051626);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `managerId` int(11) NOT NULL,
  `messageId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dxj', 'wCgUrEQa1PCUr09J0LpETqvYrG5t9u6O', '$2y$13$V5zEyneI0C2mI0UfHTmdTONFsuGQHGdhimrxnDGx2xPX.bjYYfTta', NULL, 'admin@163.com', 10, 1564051658, 1564051658);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersPassword` varchar(255) NOT NULL,
  `usersName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activityId`),
  ADD KEY `fk_categoryId` (`categoryId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`collegeId`);

--
-- Indexes for table `figure`
--
ALTER TABLE `figure`
  ADD PRIMARY KEY (`figureName`);

--
-- Indexes for table `hold`
--
ALTER TABLE `hold`
  ADD PRIMARY KEY (`activityId`,`hostId`),
  ADD KEY `fk_hostId` (`hostId`);

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`hostId`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerId`),
  ADD KEY `fk_collegeId` (`collegeId`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageId`),
  ADD KEY `fk_usersName` (`usersName`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`managerId`,`messageId`),
  ADD KEY `fk_messageId` (`messageId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `collegeId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `hostId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messageId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `fk_categoryId` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`);

--
-- Constraints for table `hold`
--
ALTER TABLE `hold`
  ADD CONSTRAINT `fk_activityId` FOREIGN KEY (`activityId`) REFERENCES `activity` (`activityId`),
  ADD CONSTRAINT `fk_hostId` FOREIGN KEY (`hostId`) REFERENCES `host` (`hostId`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `fk_collegeId` FOREIGN KEY (`collegeId`) REFERENCES `college` (`collegeId`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_usersName` FOREIGN KEY (`usersName`) REFERENCES `users` (`usersName`);

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `fk_managerId` FOREIGN KEY (`managerId`) REFERENCES `manager` (`managerId`),
  ADD CONSTRAINT `fk_messageId` FOREIGN KEY (`messageId`) REFERENCES `message` (`messageId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
