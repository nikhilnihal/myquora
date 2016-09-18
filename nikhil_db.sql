-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2015 at 07:33 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nikhil_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_table`
--

CREATE TABLE IF NOT EXISTS `answer_table` (
`ans_id` int(20) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `ans_ques_id` int(20) NOT NULL,
  `ans_by` varchar(20) NOT NULL,
  `a_upvote` int(20) NOT NULL,
  `a_downvote` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_table`
--

INSERT INTO `answer_table` (`ans_id`, `answer`, `ans_ques_id`, `ans_by`, `a_upvote`, `a_downvote`) VALUES
(2, 'cool', 4, 'nn', 0, 0),
(3, 'a class which is inside another class is called inner class', 3, 'raju@gmail.com', 0, 0),
(4, 'kjhkjhkj', 3, 'nikhil@gmail.com', 0, 0),
(5, 'poly = many   , morphism = form', 5, 'Nikhil@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `firstclass`
--

CREATE TABLE IF NOT EXISTS `firstclass` (
`ID` int(20) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `EML` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `GENDER` varchar(20) NOT NULL,
  `LANGUAGE1` varchar(20) NOT NULL,
  `LANGUAGE2` varchar(20) NOT NULL,
  `LANGUAGE3` varchar(20) NOT NULL,
  `COLLEGE` varchar(20) NOT NULL,
  `xp_level` int(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firstclass`
--

INSERT INTO `firstclass` (`ID`, `NAME`, `EML`, `PASSWORD`, `PHONE`, `GENDER`, `LANGUAGE1`, `LANGUAGE2`, `LANGUAGE3`, `COLLEGE`, `xp_level`, `time`) VALUES
(19, 'nikhil', 'nikhil@gmail.com', 'nik', ' 8981426690   ', 'male', 'C++', 'C', 'JAVA', 'IEM', 1, '1440232236'),
(20, '', 'raj@gamil.com', '123', '', '', '', '', '', '', 1, '1440232638'),
(21, '', 'rajkamalkashyap@gmai', '12345', '', '', '', '', '', '', 1, '1440232694'),
(22, '', 'nn', 'nn', '', '', '', '', '', '', 1, '1440232702'),
(23, '', 'atul@gmail.com', 'atul', '', '', '', '', '', '', 1, '1440233057'),
(24, '', 'atul@gmail.com', 'atul', '', '', '', '', '', '', 1, '1440233165'),
(25, '', 'raju@gmail.com', 'raju', '', '', '', '', '', '', 1, '1440233786');

-- --------------------------------------------------------

--
-- Table structure for table `question_table`
--

CREATE TABLE IF NOT EXISTS `question_table` (
`qid` int(20) NOT NULL,
  `question` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `question_by` varchar(20) NOT NULL,
  `no_of_comments` int(20) NOT NULL,
  `total_xp_part` int(20) NOT NULL,
  `views` int(20) NOT NULL,
  `EIWTK` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_table`
--

INSERT INTO `question_table` (`qid`, `question`, `category`, `question_by`, `no_of_comments`, `total_xp_part`, `views`, `EIWTK`) VALUES
(3, 'what is inner class ?', 'JAVA', 'nikhil@gmail.com', 2, 2, 7, 1),
(4, 'what do you mean by static function ?', 'JAVA', 'nikhil@gmail.com', 1, 1, 6, 1),
(5, 'what is polymorphism ???', 'JAVA', 'nikhil@gmail.com', 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reply_table`
--

CREATE TABLE IF NOT EXISTS `reply_table` (
`reply_id` int(20) NOT NULL,
  `reply` varchar(20) NOT NULL,
  `reply_ans_id` int(20) NOT NULL,
  `reply_by` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply_table`
--

INSERT INTO `reply_table` (`reply_id`, `reply`, `reply_ans_id`, `reply_by`) VALUES
(1, 'good :)', 3, 'nikhil@gmail.com'),
(2, '???', 4, 'nikhil@gmail.com'),
(3, 'wtf', 4, 'nikhil@gmail.com'),
(4, 'chu...', 2, 'nikhil@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_`
--

CREATE TABLE IF NOT EXISTS `user_` (
`id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `comment_up` int(2) DEFAULT NULL,
  `comment_down` int(2) DEFAULT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `reply_up` int(2) DEFAULT NULL,
  `reply_down` int(2) DEFAULT NULL,
  `ques_id` int(11) DEFAULT NULL,
  `eiwtk` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_19`
--

CREATE TABLE IF NOT EXISTS `user_19` (
`id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `comment_up` int(2) DEFAULT NULL,
  `comment_down` int(2) DEFAULT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `reply_up` int(2) DEFAULT NULL,
  `reply_down` int(2) DEFAULT NULL,
  `ques_id` int(11) DEFAULT NULL,
  `eiwtk` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_19`
--

INSERT INTO `user_19` (`id`, `comment_id`, `comment_up`, `comment_down`, `reply_id`, `reply_up`, `reply_down`, `ques_id`, `eiwtk`) VALUES
(1, 0, 0, 0, 0, 0, 0, 3, 1),
(2, 0, 0, 0, 0, 0, 0, 4, 1),
(3, 0, 0, 0, 0, 0, 0, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_20`
--

CREATE TABLE IF NOT EXISTS `user_20` (
`id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `comment_up` int(2) DEFAULT NULL,
  `comment_down` int(2) DEFAULT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `reply_up` int(2) DEFAULT NULL,
  `reply_down` int(2) DEFAULT NULL,
  `ques_id` int(11) DEFAULT NULL,
  `eiwtk` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_22`
--

CREATE TABLE IF NOT EXISTS `user_22` (
`id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `comment_up` int(2) DEFAULT NULL,
  `comment_down` int(2) DEFAULT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `reply_up` int(2) DEFAULT NULL,
  `reply_down` int(2) DEFAULT NULL,
  `ques_id` int(11) DEFAULT NULL,
  `eiwtk` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_23`
--

CREATE TABLE IF NOT EXISTS `user_23` (
`id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `comment_up` int(2) DEFAULT NULL,
  `comment_down` int(2) DEFAULT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `reply_up` int(2) DEFAULT NULL,
  `reply_down` int(2) DEFAULT NULL,
  `ques_id` int(11) DEFAULT NULL,
  `eiwtk` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_24`
--

CREATE TABLE IF NOT EXISTS `user_24` (
`id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `comment_up` int(2) DEFAULT NULL,
  `comment_down` int(2) DEFAULT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `reply_up` int(2) DEFAULT NULL,
  `reply_down` int(2) DEFAULT NULL,
  `ques_id` int(11) DEFAULT NULL,
  `eiwtk` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_25`
--

CREATE TABLE IF NOT EXISTS `user_25` (
`id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `comment_up` int(2) DEFAULT NULL,
  `comment_down` int(2) DEFAULT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `reply_up` int(2) DEFAULT NULL,
  `reply_down` int(2) DEFAULT NULL,
  `ques_id` int(11) DEFAULT NULL,
  `eiwtk` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_table`
--
ALTER TABLE `answer_table`
 ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `firstclass`
--
ALTER TABLE `firstclass`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `question_table`
--
ALTER TABLE `question_table`
 ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `reply_table`
--
ALTER TABLE `reply_table`
 ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `user_`
--
ALTER TABLE `user_`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_19`
--
ALTER TABLE `user_19`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_20`
--
ALTER TABLE `user_20`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_22`
--
ALTER TABLE `user_22`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_23`
--
ALTER TABLE `user_23`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_24`
--
ALTER TABLE `user_24`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_25`
--
ALTER TABLE `user_25`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_table`
--
ALTER TABLE `answer_table`
MODIFY `ans_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `firstclass`
--
ALTER TABLE `firstclass`
MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `question_table`
--
ALTER TABLE `question_table`
MODIFY `qid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reply_table`
--
ALTER TABLE `reply_table`
MODIFY `reply_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_`
--
ALTER TABLE `user_`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_19`
--
ALTER TABLE `user_19`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_20`
--
ALTER TABLE `user_20`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_22`
--
ALTER TABLE `user_22`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_23`
--
ALTER TABLE `user_23`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_24`
--
ALTER TABLE `user_24`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_25`
--
ALTER TABLE `user_25`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
