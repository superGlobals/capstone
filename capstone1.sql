-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 12:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone1`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(179, '', '2021-08-22 08:05:10', 'Add Class wq'),
(180, '', '2021-08-22 08:07:48', 'Add Class 212'),
(181, '1', '2021-08-22 08:15:05', 'Add Class asss'),
(182, '1', '2021-08-22 08:16:01', 'Add Class qws'),
(183, 'edward', '2021-08-22 08:17:28', 'Add Class xz'),
(184, '', '2021-08-22 08:18:50', 'Add Class awss'),
(185, 'admin', '2021-08-22 08:20:45', 'Add Subject 456'),
(186, 'admin', '2021-08-22 08:40:45', 'Add Class '),
(187, 'admin', '2021-08-22 14:31:07', 'Add Class '),
(188, 'admin', '2021-08-22 14:44:09', 'Add Class '),
(189, 'admin', '2021-08-22 14:44:32', 'Add Class '),
(190, 'admin', '2021-08-22 14:47:24', 'Add Class '),
(191, 'admin', '2021-08-22 14:55:34', 'Add Class '),
(192, 'admin', '2021-08-22 14:57:09', 'Add Department COED'),
(193, 'admin', '2021-08-22 14:57:35', 'Add Class '),
(194, 'admin', '2021-08-22 14:59:07', 'Add Teacher qwe'),
(195, 'admin', '2021-08-22 15:23:35', 'Edit Teacher Aguilar'),
(196, 'admin', '2021-08-22 15:27:44', 'Add Department CICT'),
(197, 'admin', '2021-08-22 15:29:19', 'Add Teacher awdsss'),
(198, 'admin', '2021-08-22 15:29:55', 'Add Teacher 43'),
(199, 'admin', '2021-08-22 15:34:49', 'Edit Teacher qwe'),
(200, 'admin', '2021-08-22 15:38:59', 'Edit Teacher Aguilar'),
(201, 'admin', '2021-08-22 15:39:05', 'Edit Teacher Aguilar'),
(202, 'edward', '2021-08-24 08:50:04', 'Add Student Edward'),
(203, 'edward', '2021-08-24 08:52:47', 'Add Student Edward'),
(204, 'edward', '2021-08-24 09:29:18', 'Add Student Edward'),
(205, 'admin', '2021-08-25 07:52:08', 'Add Department 1'),
(206, '000', '2021-08-25 09:07:57', 'Add User 000'),
(207, 'edward', '2021-08-25 09:08:51', 'Add Subject 09'),
(208, 'edward', '2021-08-25 09:09:21', 'Edit Subject 323232lo'),
(209, 'edward', '2021-08-25 09:09:35', 'Add Class wala'),
(210, '', '2021-08-25 09:09:59', 'Edit Subject '),
(211, 'edward', '2021-08-25 09:10:27', 'Add Department pow'),
(212, 'edward', '2021-08-25 09:10:59', 'Add Teacher wad'),
(213, 'edward', '2021-08-25 09:11:09', 'Edit Teacher awd'),
(214, 'edward', '2021-08-25 09:11:38', 'Add Student edward'),
(215, 'admin', '2021-08-26 10:38:05', 'Edit Student edward'),
(216, '', '2021-08-26 10:39:38', 'Edit Student edward'),
(217, 'admin', '2021-08-26 10:39:57', 'Edit Student edward'),
(218, 'admin', '2021-08-26 10:40:28', 'Edit Student Edward'),
(219, 'si', '2021-09-03 07:18:18', 'Add User si'),
(220, 'admin', '2021-09-03 07:19:46', 'Add Subject 789'),
(221, 'admin', '2021-09-03 07:20:09', 'Edit Subject 789'),
(222, 'admin', '2021-09-03 07:20:34', 'Add Class wala'),
(223, '', '2021-09-03 07:20:46', 'Edit Subject '),
(224, 'admin', '2021-09-03 07:21:09', 'Add Department 123'),
(225, 'admin', '2021-09-03 07:21:18', 'Edit Department 123'),
(226, 'admin', '2021-09-03 07:21:48', 'Add Department 123'),
(227, 'admin', '2021-09-03 07:22:00', 'Add Teacher edward'),
(228, 'admin', '2021-09-03 07:22:20', 'Edit Teacher Aguilar'),
(229, 'admin', '2021-09-03 07:24:03', 'Add Class wala'),
(230, 'admin', '2021-09-03 07:24:21', 'Add Student edward'),
(231, 'admin', '2021-09-03 07:24:38', 'Edit Student edward'),
(232, 'admin', '2021-09-03 07:32:53', 'Edit Department 123'),
(233, '21', '2021-09-03 07:52:05', 'Add User 21'),
(234, 'admin', '2021-09-03 07:52:29', 'Add Department 21'),
(235, 'edward', '2021-09-04 08:37:52', 'Add School Year 2021-2022'),
(236, 'edward', '2021-09-04 08:38:27', 'Add School Year 2021-2024'),
(237, 'edward', '2021-09-04 08:40:56', 'Add School Year 2021-2023'),
(238, '', '2021-09-04 08:53:23', 'Edit School Year 2021-2029'),
(239, '123', '2021-09-05 09:40:34', 'Add User 123'),
(240, '1234', '2021-09-05 09:42:30', 'Add User 1234'),
(241, 'admin', '2021-09-05 09:43:18', 'Add Subject 0987'),
(242, 'admin', '2021-09-05 09:43:45', 'Edit Subject 56'),
(243, 'admin', '2021-09-05 09:44:05', 'Add Class wala1'),
(244, '', '2021-09-05 09:44:15', 'Edit Subject '),
(245, 'admin', '2021-09-05 09:44:37', 'Add Department wala'),
(246, 'admin', '2021-09-05 09:44:45', 'Edit Department wala'),
(247, 'admin', '2021-09-05 09:45:14', 'Add Department wala'),
(248, 'admin', '2021-09-05 09:45:30', 'Add Teacher edward'),
(249, 'admin', '2021-09-05 09:45:43', 'Edit Teacher qwew'),
(250, 'admin', '2021-09-05 09:46:10', 'Add Class zxxxxxxxxxxxxxxxx'),
(251, 'admin', '2021-09-05 09:46:54', 'Add Student ADW'),
(252, 'admin', '2021-09-05 09:47:06', 'Edit Student ADW2'),
(253, 'admin', '2021-09-05 09:47:58', 'Add School Year 2021-2024'),
(254, '', '2021-09-05 09:48:04', 'Edit School Year 2021-2024S'),
(255, 'admin', '2021-09-05 17:45:08', 'Edit Teacher Aguilar'),
(256, 'edward', '2021-09-11 10:32:39', 'Add Department a,dcjkawjdhawldnkw'),
(257, 'edward', '2021-09-11 10:48:52', 'Add Teacher edward'),
(258, 'edward', '2021-09-12 09:56:26', 'Add Teacher 123'),
(259, 'edward', '2021-09-12 09:57:56', 'Add Teacher Edward'),
(260, 'admin', '2021-09-12 10:06:48', 'Add Teacher aguilar'),
(261, 'admin', '2021-09-25 08:54:05', 'Add Teacher awd'),
(262, '', '2021-09-25 09:16:04', 'Add School Year 2021-2024'),
(263, 'edward', '2021-09-26 10:27:48', 'Add Subject ITWS-09'),
(264, 'edward', '2021-10-11 10:01:43', 'Add Teacher hello'),
(265, 'edward', '2021-10-11 17:14:41', 'Add Class 1222'),
(266, 'edward', '2021-10-14 10:46:16', 'Add Student qwe'),
(267, 'edward', '2021-10-15 08:35:42', 'Add Student 123'),
(268, 'edward', '2021-10-19 08:40:20', 'Add Student Romeo'),
(269, 'edward', '2021-10-19 08:40:48', 'Add Student Bryan'),
(270, 'edward', '2021-10-19 08:41:07', 'Add Student Hannah'),
(271, 'edward', '2021-10-19 08:41:49', 'Add Student Whammy'),
(272, 'edward', '2021-10-19 09:40:23', 'Add Student awd'),
(273, 'edward', '2021-10-26 07:47:02', 'Add Teacher boy'),
(274, 'edward', '2021-10-31 09:31:59', 'Add Teacher wala'),
(275, 'edward', '2021-10-31 10:16:10', 'Add Teacher 1'),
(276, 'edward', '2021-10-31 19:13:59', 'Edit Teacher 1'),
(277, 'edward', '2021-11-03 10:50:31', 'Edit Student awd'),
(278, 'edward', '2021-11-03 15:45:07', 'Add Teacher 1'),
(279, 'edward', '2021-11-03 16:09:47', 'Add Teacher 2'),
(280, '', '2021-11-04 09:56:30', 'Add Student 0'),
(281, 'edward', '2021-11-04 10:14:57', 'Add Student juan ted boi abundat'),
(282, 'edward', '2021-11-04 10:18:27', 'Add Student qwQ'),
(283, 'edward', '2021-11-04 10:18:39', 'Add Student daw'),
(284, 'edward', '2021-11-04 10:18:51', 'Add Student ijlawd'),
(285, 'edward', '2021-11-04 10:19:02', 'Add Student kjnad'),
(286, 'edward', '2021-11-04 10:19:12', 'Add Student awd'),
(287, 'edward', '2021-11-04 10:19:28', 'Add Student ljklaw'),
(288, 'edward', '2021-11-04 10:19:38', 'Add Student adw'),
(289, 'edward', '2021-11-08 08:54:30', 'Add Teacher 0'),
(290, 'edward', '2021-11-16 17:30:12', 'Add Student poi'),
(291, 'edward', '2021-11-24 08:16:19', 'Edit Subject 90'),
(292, '', '2021-11-25 06:03:29', 'Edit Subject '),
(293, '', '2021-11-25 06:03:48', 'Edit Subject '),
(294, '', '2021-11-25 06:04:09', 'Edit Subject '),
(295, '', '2021-11-25 06:04:22', 'Edit Subject '),
(296, 'edward', '2021-11-25 06:05:57', 'Edit Department BSIT'),
(297, 'edward', '2021-11-25 06:06:17', 'Edit Department BSIT'),
(298, 'edward', '2021-11-25 06:07:53', 'Add Teacher Doms'),
(299, 'edward', '2021-11-25 06:08:22', 'Add Teacher Edward John'),
(300, 'edward', '2021-11-25 06:11:45', 'Add Subject ITWS06'),
(301, 'edward', '2021-11-25 06:12:09', 'Edit Subject ITWS-07'),
(302, 'edward', '2021-11-25 06:13:18', 'Edit Subject CC106'),
(303, 'doms', '2021-11-25 06:17:34', 'Add User doms'),
(304, 'edward', '2021-11-25 06:20:06', 'Edit Subject 0987'),
(305, 'edward', '2021-11-25 06:20:19', 'Edit Subject ITWS-09'),
(306, 'edward', '2021-11-25 12:49:14', 'Edit Subject IT-SIA01'),
(307, 'edward', '2021-11-25 12:50:07', 'Edit Subject IT-CAP02'),
(308, 'edward', '2021-11-25 12:50:49', 'Edit Subject IT-SP01'),
(309, 'edward', '2021-11-25 12:51:35', 'Edit Subject IT-SW01'),
(310, 'edward', '2021-11-25 12:52:17', 'Edit Subject IT-WS06'),
(311, 'edward', '2021-11-25 12:53:04', 'Add Subject IT-WS07'),
(312, 'hana', '2021-11-25 12:57:31', 'Add User hana'),
(313, 'admin', '2021-11-27 07:17:47', 'Add User admin'),
(314, 'edward', '2021-11-27 08:19:48', 'Add Teacher poi'),
(315, 'edward', '2021-12-03 21:19:22', 'Add Teacher sample'),
(316, 'edward', '2021-12-03 21:26:23', 'Add Teacher 123'),
(317, 'edward', '2021-12-03 21:57:58', 'Add Subject iouu99u'),
(318, 'edward', '2021-12-03 21:58:09', 'Edit Subject iouu99unknklbklbjlbjl'),
(319, 'edward', '2021-12-13 00:27:33', 'Add Class ADS'),
(320, 'edward', '2021-12-13 00:42:41', 'Add Teacher sampleww'),
(321, 'edward', '2021-12-13 01:05:57', 'Add School Year awd'),
(322, 'edward', '2021-12-13 01:06:59', 'Add School Year awd'),
(323, 'edward', '2021-12-13 07:54:25', 'Edit Student Romeo'),
(324, 'edward', '2021-12-23 09:41:45', 'Add School Year 2022-2023'),
(325, 'm', '2021-12-27 00:37:48', 'Add User m'),
(326, 'edward', '2021-12-27 00:38:16', 'Add Subject 22'),
(327, 'edward', '2021-12-27 00:38:27', 'Edit Subject 22'),
(328, 'edward', '2021-12-27 00:38:42', 'Add Class awf'),
(329, 'edward', '2021-12-27 00:39:11', 'Edit Teacher dela cruz'),
(330, 'edward', '2021-12-27 00:39:18', 'Edit Teacher dela cruz'),
(331, 'edward', '2021-12-27 00:39:40', 'Edit Student Edward1'),
(332, 'edward', '2021-12-27 00:40:50', 'Edit Student Edward'),
(333, 'jb', '2021-12-29 08:43:40', 'Add User jb');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `quiz_question_id` int(11) NOT NULL,
  `answer_text` varchar(100) NOT NULL,
  `choices` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `question_number`, `quiz_question_id`, `answer_text`, `choices`) VALUES
(221, 0, 207, '1', 'A'),
(222, 0, 207, '2', 'B'),
(223, 0, 207, '3', 'C'),
(224, 0, 207, '4', 'D'),
(225, 0, 208, '2', 'A'),
(226, 0, 208, '1', 'B'),
(227, 0, 208, '3', 'C'),
(228, 0, 208, '2', 'D'),
(229, 0, 209, '2', 'A'),
(230, 0, 209, '1', 'B'),
(231, 0, 209, '3', 'C'),
(232, 0, 209, '4', 'D'),
(233, 0, 211, 'w', 'A'),
(234, 0, 211, 'q', 'B'),
(235, 0, 211, 'e', 'C'),
(236, 0, 211, '2', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(11) NOT NULL,
  `floc` varchar(300) NOT NULL,
  `fdatein` varchar(100) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `floc`, `fdatein`, `fdesc`, `teacher_id`, `class_id`, `fname`, `uploaded_by`) VALUES
(27, '../admin/uploads/7401_File_Screenshot (159).png', '2021-12-27 18:49:14', 'my assignment', 79, 83, 'assignment #1', 'DomsBago');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`) VALUES
(1, 'BSIT-1A'),
(2, 'BSIT-4A'),
(7, 'BSIT-2A'),
(8, 'BSIT-3A'),
(9, 'BSBA-1B'),
(10, 'BSBA-4A');

-- --------------------------------------------------------

--
-- Table structure for table `class_quiz`
--

CREATE TABLE `class_quiz` (
  `class_quiz_id` int(11) NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_quiz`
--

INSERT INTO `class_quiz` (`class_quiz_id`, `teacher_class_id`, `quiz_id`) VALUES
(88, 82, 69),
(89, 83, 70),
(90, 83, 70);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `p-incharge` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `p-incharge`) VALUES
(5, 'COED', 'Edward'),
(6, 'CICT', 'Edward A. Aguilar'),
(7, 'BSIT', 'Edward');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` varchar(100) NOT NULL,
  `end_event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(59, 'asd', '2021-09-02 00:00:00', '2021-09-03 00:00:00'),
(61, 'sad', '2021-09-05 09:00:00', '2021-09-05 09:30:00'),
(62, 'as', '2021-09-04 00:00:00', '2021-09-05 00:00:00'),
(65, 'MAY KWENTA', '2021-09-22 00:00:00', '2021-09-25 00:00:00'),
(67, 'web', '2021-09-07 00:00:00', '2021-09-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL,
  `floc` varchar(500) NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `floc`, `fdatein`, `fdesc`, `teacher_id`, `class_id`, `fname`, `uploaded_by`) VALUES
(40, '../admin/uploads/9286_File_filipino report.docx', '2022-01-16 08:30:28', '1st m,odule', 80, 84, 'module 1', 'EdwardAguilar');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `teacher_class_id`, `notification`, `date_of_notification`, `link`) VALUES
(195, 82, 'Upload Quiz', '2021-12-27 04:23:46', 'quiz_list.php'),
(196, 83, 'Will Start meeting @ 10:30am', '2021-12-27 10:12:11', 'join_meeting.php'),
(197, 83, 'Upload Quiz', '2021-12-27 10:33:44', 'quiz_list.php'),
(198, 83, 'Upload Quiz', '2021-12-27 10:41:58', 'quiz_list.php'),
(199, 83, 'Upload Assignment file name <b>assignment #1</b>', '2021-12-27 10:49:15', 'assignment_files.php'),
(200, 84, 'Upload Modules file name <b>sample</b>', '2022-01-16 00:30:28', 'downloadable_files.php');

-- --------------------------------------------------------

--
-- Table structure for table `notification_read`
--

CREATE TABLE `notification_read` (
  `notification_read_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_read` varchar(50) NOT NULL,
  `notification_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_read`
--

INSERT INTO `notification_read` (`notification_read_id`, `student_id`, `student_read`, `notification_id`) VALUES
(18, 2, 'yes', 194);

-- --------------------------------------------------------

--
-- Table structure for table `notification_read_teacher`
--

CREATE TABLE `notification_read_teacher` (
  `notification_read_teacher_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_read` varchar(100) NOT NULL,
  `notification_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `online_meeting`
--

CREATE TABLE `online_meeting` (
  `meeting_id` int(11) NOT NULL,
  `meeting_title` varchar(100) NOT NULL,
  `meeting_code` longtext NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `meeting_start` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `date_upload` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_meeting`
--

INSERT INTO `online_meeting` (`meeting_id`, `meeting_title`, `meeting_code`, `teacher_class_id`, `meeting_start`, `date_upload`, `description`) VALUES
(53, 'first meet', 'https://meet.jit.si/TvGADXiKabnQPbjNiYMqUk2G0Z4QOA', 83, '10:30am', '2021-12-27 18:12:10', 'rq');

-- --------------------------------------------------------

--
-- Table structure for table `question_type`
--

CREATE TABLE `question_type` (
  `question_type_id` int(11) NOT NULL,
  `question_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_type`
--

INSERT INTO `question_type` (`question_type_id`, `question_type`) VALUES
(1, 'Multiple Choice'),
(2, 'True or False');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(11) NOT NULL,
  `quiz_title` varchar(50) NOT NULL,
  `quiz_description` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `quiz_title`, `quiz_description`, `date_added`, `teacher_id`) VALUES
(69, 'Quiz number 1', 'multiple choice and true or flase', '2021-12-27 12:22:23', 20),
(70, 'Quiz number 2', 'multiple choice and true or false', '2021-12-27 18:32:05', 79),
(71, 'awd', 'awd', '2022-01-02 09:33:09', 80);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_options`
--

CREATE TABLE `quiz_options` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL,
  `coption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE `quiz_question` (
  `quiz_question_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question_type_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `question_text` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`quiz_question_id`, `quiz_id`, `question_type_id`, `points`, `question_text`, `date_added`, `answer`) VALUES
(206, 69, 2, 0, '<p>1 + 1 = 2</p>\r\n', '2021-12-27 12:22:42', 'True'),
(207, 69, 1, 0, '<p>what is</p>\r\n', '2021-12-27 12:23:24', 'B'),
(209, 70, 1, 0, '<p>question 1</p>\r\n', '2021-12-27 18:33:06', 'A'),
(210, 70, 2, 0, '<p>try</p>\r\n', '2021-12-27 18:39:38', 'True'),
(211, 70, 1, 0, '<p>sa</p>\r\n', '2021-12-27 18:39:53', 'B'),
(212, 70, 2, 0, '<p>w</p>\r\n', '2021-12-27 18:40:04', 'False');

-- --------------------------------------------------------

--
-- Table structure for table `schoolyear`
--

CREATE TABLE `schoolyear` (
  `sy_id` int(10) NOT NULL,
  `school_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolyear`
--

INSERT INTO `schoolyear` (`sy_id`, `school_year`) VALUES
(1, '2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `class_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `student_cor` varchar(100) NOT NULL,
  `student_status` varchar(100) NOT NULL,
  `date_of_request` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `class_id`, `username`, `password`, `email`, `picture`, `student_cor`, `student_status`, `date_of_request`) VALUES
(40, 'Bryan', 'Dela Cruz', 2, 'pc18-00057', '123', 'bryan@gmail.com', 'img/NO-IMAGE-AVAILABLE.jpg', 'img/', 'approved', '2021-12-18 19:36:22'),
(41, 'Romeo', 'Pantoja', 2, 'pc18-00058', '123', 'romeo@gmail.com', 'img/NO-IMAGE-AVAILABLE.jpg', 'img/', 'approved', '2021-12-18 19:36:47'),
(42, 'Whamy', 'Pascua', 2, 'pc18-00059', '123', 'whamy@gmail.com', 'img/NO-IMAGE-AVAILABLE.jpg', 'img/', 'approved', '2021-12-18 19:37:20'),
(43, 'Hana', 'Payumo', 2, 'pc18-00060', '123', 'hannah@gmail.com', 'img/NO-IMAGE-AVAILABLE.jpg', 'img/', 'approved', '2021-12-18 19:37:42'),
(54, 'Romeo', 'Pantoja', 9, 'pc18-00109', '$2y$10$YfmMywCMupiijCHQ8GgLVONXUwo2JVp/ZRfLgmFCc4DSYzKMnWLsC', 'rome222o@gmail.com', 'img/NO-IMAGE-AVAILABLE.jpg', 'img/Screenshot (159).png', 'pending', '2022-01-16 21:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `student_class_quiz`
--

CREATE TABLE `student_class_quiz` (
  `student_class_quiz_id` int(11) NOT NULL,
  `class_quiz_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_quiz_time` varchar(100) NOT NULL,
  `grade_status` varchar(100) NOT NULL,
  `total_grade` varchar(100) NOT NULL,
  `date_taken` varchar(100) NOT NULL,
  `essay_answer` longtext NOT NULL,
  `quiz_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_class_quiz`
--

INSERT INTO `student_class_quiz` (`student_class_quiz_id`, `class_quiz_id`, `student_id`, `student_quiz_time`, `grade_status`, `total_grade`, `date_taken`, `essay_answer`, `quiz_status`) VALUES
(115, 88, 40, '', '2 out of 2', '2', '2021-12-27 12:24:41', '', 'done'),
(116, 89, 40, '', '0 out of 1', '0', '2021-12-27 18:34:11', '', 'done'),
(117, 90, 40, '', '4 out of 4', '4', '2021-12-27 18:43:11', '', 'done'),
(118, 90, 41, '', '0 out of 4', '0', '2021-12-27 18:44:15', '', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `student_files`
--

CREATE TABLE `student_files` (
  `file_id` int(11) NOT NULL,
  `floc` varchar(500) NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_send_assignment`
--

CREATE TABLE `student_send_assignment` (
  `student_assignment_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `floc` varchar(100) NOT NULL,
  `assignment_fdatein` varchar(50) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `teacher_commend` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_send_assignment`
--

INSERT INTO `student_send_assignment` (`student_assignment_id`, `assignment_id`, `floc`, `assignment_fdatein`, `fdesc`, `fname`, `student_id`, `grade`, `teacher_commend`) VALUES
(52, 27, '../admin/uploads/3985_File_Angelo_Gedo_Cruz-Linux activity 101.doc', '2021-12-27 18:51:11', 'ii', 'pio', 40, '100', 'very good');

-- --------------------------------------------------------

--
-- Table structure for table `student_send_files`
--

CREATE TABLE `student_send_files` (
  `file_id` int(11) NOT NULL,
  `floc` varchar(500) NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `unit` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_title`, `description`, `unit`, `semester`) VALUES
(5, 'IT-CAP02', 'Capstone Projects and Research 2', 'qwerty1', 6, '2nd'),
(19, 'IT-SIA01', 'System Integration and Architecture', '', 6, '1st'),
(23, 'IT-SP01', 'Social and Professional Issues', '', 6, '1st'),
(24, 'IT-SW01', 'Seminars and Workshop', '', 3, '1st'),
(25, 'IT-WS06', 'Web Digital Media', 'test', 6, '1st'),
(26, 'IT-WS07', 'Mobile Application Technology', '2', 6, '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `department_id` int(10) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `about` varchar(500) NOT NULL,
  `teacher_status` varchar(20) NOT NULL,
  `date_of_request` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `username`, `password`, `firstname`, `lastname`, `email`, `department_id`, `picture`, `about`, `teacher_status`, `date_of_request`) VALUES
(80, 'edward', '123', 'Edward', 'Aguilar', 'edwardaguilar_14@yahoo.com', 0, 'img/NO-IMAGE-AVAILABLE.jpg', '', 'approved', '2021-12-29 09:36:56'),
(81, 'qwe', 'qwe', 'qwe', 'qwe', 'qweqw@yahoo.com', 0, 'img/NO-IMAGE-AVAILABLE.jpg', '', 'approved', '2021-12-29 14:53:58'),
(83, 'sir', '$2y$10$9nsgOUSI0I4oEzXiCqq83e2zEVpxVzDSTRgDhnv4b.PJUj0.hxZU.', 'Edward', 'Aguilar', 'ss@gmai.com', 0, 'img/NO-IMAGE-AVAILABLE.jpg', '', 'approved', '2022-03-31 17:47:26'),
(84, 'qwe', '$2y$10$mwhnfp.YS1zbGfOqGrwv9ex422t6lgzhleIArkvjvevMox3Cz9EVG', 'qwe', 'qwe', 'qwee0989@gmail.com', 0, 'img/NO-IMAGE-AVAILABLE.jpg', '', 'approved', '2022-04-01 06:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class`
--

CREATE TABLE `teacher_class` (
  `teacher_class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `thumbnails` varchar(100) NOT NULL,
  `school_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_class`
--

INSERT INTO `teacher_class` (`teacher_class_id`, `teacher_id`, `class_id`, `subject_id`, `thumbnails`, `school_year`) VALUES
(68, 70, 2, 24, 'img/logo.jpg', '2021-2022'),
(81, 71, 2, 5, 'img/logo.jpg', '2021-2022'),
(82, 20, 2, 5, 'img/logo.jpg', '2021-2022'),
(83, 79, 2, 5, 'img/logo.jpg', '2021-2022'),
(84, 80, 9, 5, 'img/logo.jpg', '2021-2022'),
(85, 81, 9, 5, 'img/logo.jpg', '2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class_announcements`
--

CREATE TABLE `teacher_class_announcements` (
  `teacher_class_announcements_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `teacher_id` int(100) NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class_student`
--

CREATE TABLE `teacher_class_student` (
  `teacher_class_student_id` int(11) NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_class_student`
--

INSERT INTO `teacher_class_student` (`teacher_class_student_id`, `teacher_class_id`, `student_id`, `teacher_id`) VALUES
(209, 80, 2, 20),
(210, 82, 40, 20),
(211, 83, 40, 79),
(212, 83, 41, 79),
(213, 83, 42, 79),
(214, 83, 43, 79),
(215, 85, 40, 81),
(216, 85, 41, 81);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_log`
--

CREATE TABLE `teacher_log` (
  `teacher_log_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_log`
--

INSERT INTO `teacher_log` (`teacher_log_id`, `username`, `full_name`, `login_date`, `logout_date`, `user_id`) VALUES
(10, 'edward', 'Edward Aguilar', '2021-11-27 08:17:33', '2021-12-27 12:26:52', 20),
(11, 'edward', 'Edward Aguilar', '2021-11-27 08:17:53', '2021-12-27 12:26:52', 20),
(12, 'edward', 'Edward Aguilar', '2021-11-27 08:18:31', '2021-12-27 12:26:52', 20),
(13, 'edward', 'Edward Aguilar', '2021-11-27 08:22:28', '2021-12-27 12:26:52', 20),
(14, 'poi', 'poi poi', '2021-11-27 08:24:19', '2021-11-28 08:31:36', 32),
(15, 'poi', 'poi poi', '2021-11-27 08:26:15', '2021-11-28 08:31:36', 32),
(16, 'edward', 'Edward Aguilar', '2021-11-27 20:18:42', '2021-12-27 12:26:52', 20),
(17, 'edward', 'Edward Aguilar', '2021-11-27 20:31:51', '2021-12-27 12:26:52', 20),
(18, 'edward', 'Edward Aguilar', '2021-11-27 21:03:13', '2021-12-27 12:26:52', 20),
(19, 'edward', 'Edward Aguilar', '2021-11-27 21:57:12', '2021-12-27 12:26:52', 20),
(20, 'edward', 'Edward Aguilar', '2021-11-28 06:07:09', '2021-12-27 12:26:52', 20),
(21, 'edward', 'Edward Aguilar', '2021-11-28 06:49:10', '2021-12-27 12:26:52', 20),
(22, 'edward', 'Edward Aguilar', '2021-11-28 08:30:16', '2021-12-27 12:26:52', 20),
(23, 'poi', 'poi poi', '2021-11-28 08:31:18', '2021-11-28 08:31:36', 32),
(24, 'edward', 'Edward Aguilar', '2021-11-28 08:31:41', '2021-12-27 12:26:52', 20),
(25, 'edward', 'Edward Aguilar', '2021-11-28 08:48:55', '2021-12-27 12:26:52', 20),
(26, 'edward', 'Edward Aguilar', '2021-11-28 20:24:22', '2021-12-27 12:26:52', 20),
(27, 'edward', 'Edward Aguilar', '2021-11-28 21:23:47', '2021-12-27 12:26:52', 20),
(28, 'edward', 'Edward Aguilar', '2021-11-28 21:24:42', '2021-12-27 12:26:52', 20),
(29, 'edward', 'Edward Aguilar', '2021-11-28 21:27:48', '2021-12-27 12:26:52', 20),
(30, 'edward', 'Edward Aguilar', '2021-11-28 22:11:51', '2021-12-27 12:26:52', 20),
(31, 'edward', 'Edward Aguilar', '2021-11-28 22:24:56', '2021-12-27 12:26:52', 20),
(32, 'edward', 'Edward Aguilar', '2021-11-28 22:29:42', '2021-12-27 12:26:52', 20),
(33, 'edward', 'Edward Aguilar', '2021-11-28 22:32:29', '2021-12-27 12:26:52', 20),
(34, 'edward', 'Edward Aguilar', '2021-11-28 22:35:59', '2021-12-27 12:26:52', 20),
(35, 'edward', 'Edward Aguilar', '2021-11-28 22:36:44', '2021-12-27 12:26:52', 20),
(36, 'edward', 'Edward Aguilar', '2021-11-28 22:52:47', '2021-12-27 12:26:52', 20),
(37, 'edward', 'Edward Aguilar', '2021-11-29 06:27:25', '2021-12-27 12:26:52', 20),
(38, 'edward', 'Edward Aguilar', '2021-11-29 07:07:04', '2021-12-27 12:26:52', 20),
(39, 'edward', 'Edward Aguilar', '2021-11-29 07:16:49', '2021-12-27 12:26:52', 20),
(40, 'edward', 'Edward Aguilar', '2021-11-29 07:18:38', '2021-12-27 12:26:52', 20),
(41, 'edward', 'Edward Aguilar', '2021-11-29 18:25:42', '2021-12-27 12:26:52', 20),
(42, 'edward', 'Edward Aguilar', '2021-11-29 18:56:55', '2021-12-27 12:26:52', 20),
(43, 'edward', 'Edward Aguilar', '2021-11-29 19:03:05', '2021-12-27 12:26:52', 20),
(44, 'edward', 'Edward Aguilar', '2021-12-02 05:23:54', '2021-12-27 12:26:52', 20),
(45, 'edward', 'Edward Aguilar', '2021-12-02 05:48:09', '2021-12-27 12:26:52', 20),
(46, 'edward', 'Edward Aguilar', '2021-12-02 05:53:12', '2021-12-27 12:26:52', 20),
(47, 'edward', 'Edward Aguilar', '2021-12-02 07:36:21', '2021-12-27 12:26:52', 20),
(48, 'edward', 'Edward Aguilar', '2021-12-02 07:41:28', '2021-12-27 12:26:52', 20),
(49, 'edward', 'Edward Aguilar', '2021-12-02 07:44:12', '2021-12-27 12:26:52', 20),
(50, 'edward', 'Edward Aguilar', '2021-12-02 10:09:57', '2021-12-27 12:26:52', 20),
(51, 'edward', 'Edward Aguilar', '2021-12-02 10:41:03', '2021-12-27 12:26:52', 20),
(52, 'edward', 'Edward Aguilar', '2021-12-02 11:02:20', '2021-12-27 12:26:52', 20),
(53, 'edward', 'Edward Aguilar', '2021-12-02 11:03:45', '2021-12-27 12:26:52', 20),
(54, 'edward', 'Edward Aguilar', '2021-12-02 11:36:48', '2021-12-27 12:26:52', 20),
(55, 'edward', 'Edward Aguilar', '2021-12-02 14:45:41', '2021-12-27 12:26:52', 20),
(56, 'edward', 'Edward Aguilar', '2021-12-02 14:52:54', '2021-12-27 12:26:52', 20),
(57, 'edward', 'Edward Aguilar', '2021-12-02 14:53:56', '2021-12-27 12:26:52', 20),
(58, 'edward', 'Edward Aguilar', '2021-12-02 15:09:37', '2021-12-27 12:26:52', 20),
(59, 'edward', 'Edward Aguilar', '2021-12-02 19:12:21', '2021-12-27 12:26:52', 20),
(60, 'edward', 'Edward Aguilar', '2021-12-02 19:51:23', '2021-12-27 12:26:52', 20),
(61, 'edward', 'Edward Aguilar', '2021-12-02 20:01:27', '2021-12-27 12:26:52', 20),
(62, 'edward', 'Edward Aguilar', '2021-12-02 20:20:48', '2021-12-27 12:26:52', 20),
(63, 'edward', 'Edward Aguilar', '2021-12-03 17:48:46', '2021-12-27 12:26:52', 20),
(64, 'edward', 'Edward Aguilar', '2021-12-03 21:29:36', '2021-12-27 12:26:52', 20),
(65, 'edward', 'Edward Aguilar', '2021-12-03 21:33:00', '2021-12-27 12:26:52', 20),
(66, 'edward', 'Edward Aguilar', '2021-12-03 22:00:07', '2021-12-27 12:26:52', 20),
(67, 'edward', 'Edward Aguilar', '2021-12-06 09:35:27', '2021-12-27 12:26:52', 20),
(68, 'sample', 'bjkawd ljbawd', '2021-12-06 11:29:11', '2021-12-06 11:41:52', 40),
(69, 'edward', 'Edward Aguilar', '2021-12-06 11:33:05', '2021-12-27 12:26:52', 20),
(70, 'sample', 'bjkawd ljbawd', '2021-12-06 11:40:45', '2021-12-06 11:41:52', 40),
(71, 'sample', 'sample lang', '2021-12-06 11:43:20', '2021-12-06 11:43:25', 45),
(72, 'try', 'try lang', '2021-12-06 11:49:12', '2021-12-06 11:49:15', 48),
(73, 'edward', 'Edward Aguilar', '2021-12-06 11:58:41', '2021-12-27 12:26:52', 20),
(74, 'juanted', 'juan dela cruz', '2021-12-08 08:09:01', '2021-12-08 08:09:50', 50),
(75, 'edward', 'Edward Aguilar', '2021-12-08 08:10:52', '2021-12-27 12:26:52', 20),
(76, 'edward', 'Edward Aguilar', '2021-12-08 09:15:10', '2021-12-27 12:26:52', 20),
(77, 'edward', 'Edward Aguilar', '2021-12-08 09:20:49', '2021-12-27 12:26:52', 20),
(78, 'edward', 'Edward Aguilar', '2021-12-08 10:53:50', '2021-12-27 12:26:52', 20),
(79, 'edward', 'Edward Aguilar', '2021-12-08 12:10:14', '2021-12-27 12:26:52', 20),
(80, 'edward', 'Edward Aguilar', '2021-12-08 17:49:55', '2021-12-27 12:26:52', 20),
(81, 'edward', 'Edward Aguilar', '2021-12-08 19:50:22', '2021-12-27 12:26:52', 20),
(82, 'edward', 'Edward Aguilar', '2021-12-09 05:53:52', '2021-12-27 12:26:52', 20),
(83, 'edward', 'Edward Aguilar', '2021-12-09 06:10:54', '2021-12-27 12:26:52', 20),
(84, 'edward', 'Edward Aguilar', '2021-12-09 07:08:17', '2021-12-27 12:26:52', 20),
(85, 'edward', 'Edward Aguilar', '2021-12-09 08:13:11', '2021-12-27 12:26:52', 20),
(86, 'edward', 'Edward Aguilar', '2021-12-09 08:24:42', '2021-12-27 12:26:52', 20),
(87, 'edward', 'Edward Aguilar', '2021-12-09 08:28:32', '2021-12-27 12:26:52', 20),
(88, 'edward', 'Edward Aguilar', '2021-12-09 08:44:54', '2021-12-27 12:26:52', 20),
(89, 'edward', 'Edward Aguilar', '2021-12-09 09:00:18', '2021-12-27 12:26:52', 20),
(90, 'edward', 'Edward Aguilar', '2021-12-09 09:48:53', '2021-12-27 12:26:52', 20),
(91, 'edward', 'Edward Aguilar', '2021-12-09 10:31:52', '2021-12-27 12:26:52', 20),
(92, 'lop', 'ko ko', '2021-12-09 13:27:41', '2021-12-09 13:27:52', 57),
(93, 'oi', 'lk lk', '2021-12-09 13:28:03', '2021-12-09 13:28:06', 56),
(94, 'lo', 'lo lo', '2021-12-09 13:28:14', '2021-12-09 13:28:17', 54),
(95, 'edward', 'Edward Aguilar', '2021-12-09 19:29:42', '2021-12-27 12:26:52', 20),
(96, 'edward', 'Edward Aguilar', '2021-12-09 19:30:02', '2021-12-27 12:26:52', 20),
(97, 'edward', 'Edward Aguilar', '2021-12-10 00:17:53', '2021-12-27 12:26:52', 20),
(98, 'edward', 'Edward Aguilar', '2021-12-10 01:17:23', '2021-12-27 12:26:52', 20),
(99, 'edward', 'Edward Aguilar', '2021-12-10 06:43:19', '2021-12-27 12:26:52', 20),
(100, 'edward', 'Edward Aguilar', '2021-12-10 08:34:51', '2021-12-27 12:26:52', 20),
(101, 'edward', 'Edward Aguilar', '2021-12-10 08:44:58', '2021-12-27 12:26:52', 20),
(102, 'edward', 'Edward Aguilar', '2021-12-10 10:05:43', '2021-12-27 12:26:52', 20),
(103, 'edward', 'Edward Aguilar', '2021-12-10 10:30:37', '2021-12-27 12:26:52', 20),
(104, 'edward', 'Edward Aguilar', '2021-12-10 10:43:01', '2021-12-27 12:26:52', 20),
(105, 'edward', 'Edward Aguilar', '2021-12-10 11:35:48', '2021-12-27 12:26:52', 20),
(106, 'edward', 'Edward Aguilar', '2021-12-10 14:39:57', '2021-12-27 12:26:52', 20),
(107, 'edward', 'Edward Aguilar', '2021-12-10 15:05:45', '2021-12-27 12:26:52', 20),
(108, 'edward', 'Edward Aguilar', '2021-12-10 16:38:48', '2021-12-27 12:26:52', 20),
(109, 'edward', 'Edward Aguilar', '2021-12-10 18:05:04', '2021-12-27 12:26:52', 20),
(110, 'edward', 'Edward Aguilar', '2021-12-10 18:17:49', '2021-12-27 12:26:52', 20),
(111, 'edward', 'Edward Aguilar', '2021-12-10 18:19:02', '2021-12-27 12:26:52', 20),
(112, 'edward', 'Edward Aguilar', '2021-12-10 18:54:16', '2021-12-27 12:26:52', 20),
(113, 'edward', 'Edward Aguilar', '2021-12-10 22:43:49', '2021-12-27 12:26:52', 20),
(114, 'edward', 'Edward Aguilar', '2021-12-10 23:14:37', '2021-12-27 12:26:52', 20),
(115, 'edward', 'Edward Aguilar', '2021-12-10 23:36:10', '2021-12-27 12:26:52', 20),
(116, 'edward', 'Edward Aguilar', '2021-12-11 00:18:33', '2021-12-27 12:26:52', 20),
(117, 'edward', 'Edward Aguilar', '2021-12-11 00:24:46', '2021-12-27 12:26:52', 20),
(118, 'edward', 'Edward Aguilar', '2021-12-11 00:28:58', '2021-12-27 12:26:52', 20),
(119, 'edward', 'Edward Aguilar', '2021-12-11 00:54:29', '2021-12-27 12:26:52', 20),
(120, 'edward', 'Edward Aguilar', '2021-12-11 01:26:02', '2021-12-27 12:26:52', 20),
(121, 'edward', 'Edward Aguilar', '2021-12-11 01:47:02', '2021-12-27 12:26:52', 20),
(122, 'edward', 'Edward Aguilar', '2021-12-11 02:07:32', '2021-12-27 12:26:52', 20),
(123, 'edward', 'Edward Aguilar', '2021-12-11 02:15:45', '2021-12-27 12:26:52', 20),
(124, 'edward', 'Edward Aguilar', '2021-12-11 02:41:33', '2021-12-27 12:26:52', 20),
(125, 'edward', 'Edward Aguilar', '2021-12-11 02:47:51', '2021-12-27 12:26:52', 20),
(126, 'edward', 'Edward Aguilar', '2021-12-11 02:51:00', '2021-12-27 12:26:52', 20),
(127, 'edward', 'Edward Aguilar', '2021-12-11 03:36:44', '2021-12-27 12:26:52', 20),
(128, 'edward', 'Edward Aguilar', '2021-12-11 03:41:04', '2021-12-27 12:26:52', 20),
(129, 'edward', 'Edward Aguilar', '2021-12-11 08:08:44', '2021-12-27 12:26:52', 20),
(130, 'edward', 'Edward Aguilar', '2021-12-11 08:17:04', '2021-12-27 12:26:52', 20),
(131, 'edward', 'Edward Aguilar', '2021-12-11 08:59:00', '2021-12-27 12:26:52', 20),
(132, 'edward', 'Edward Aguilar', '2021-12-11 09:06:34', '2021-12-27 12:26:52', 20),
(133, 'edward', 'Edward Aguilar', '2021-12-11 09:12:28', '2021-12-27 12:26:52', 20),
(134, 'edward', 'Edward Aguilar', '2021-12-11 09:21:36', '2021-12-27 12:26:52', 20),
(135, 'edward', 'Edward Aguilar', '2021-12-11 09:27:13', '2021-12-27 12:26:52', 20),
(136, 'edward', 'Edward Aguilar', '2021-12-11 09:30:46', '2021-12-27 12:26:52', 20),
(137, 'edward', 'Edward Aguilar', '2021-12-11 09:44:02', '2021-12-27 12:26:52', 20),
(138, 'edward', 'Edward Aguilar', '2021-12-11 09:48:38', '2021-12-27 12:26:52', 20),
(139, 'edward', 'Edward Aguilar', '2021-12-11 09:54:27', '2021-12-27 12:26:52', 20),
(140, 'edward', 'Edward Aguilar', '2021-12-11 09:59:04', '2021-12-27 12:26:52', 20),
(141, 'edward', 'Edward Aguilar', '2021-12-11 10:06:17', '2021-12-27 12:26:52', 20),
(142, 'edward', 'Edward Aguilar', '2021-12-11 10:08:19', '2021-12-27 12:26:52', 20),
(143, 'edward', 'Edward Aguilar', '2021-12-12 10:36:28', '2021-12-27 12:26:52', 20),
(144, 'edward', 'Edward Aguilar', '2021-12-12 10:42:34', '2021-12-27 12:26:52', 20),
(145, 'edward', 'Edward Aguilar', '2021-12-12 11:02:18', '2021-12-27 12:26:52', 20),
(146, 'edward', 'Edward Aguilar', '2021-12-12 13:01:13', '2021-12-27 12:26:52', 20),
(147, 'edward', 'Edward Aguilar', '2021-12-12 13:01:29', '2021-12-27 12:26:52', 20),
(148, 'edward', 'Edward Aguilar', '2021-12-12 13:11:32', '2021-12-27 12:26:52', 20),
(149, 'edward', 'Edward Aguilar', '2021-12-12 17:15:03', '2021-12-27 12:26:52', 20),
(150, 'juan', 'juan juan', '2021-12-12 17:18:59', '2021-12-12 17:19:12', 58),
(151, 'edward', 'Edward Aguilar', '2021-12-12 17:22:00', '2021-12-27 12:26:52', 20),
(152, 'edward', 'Edward Aguilar', '2021-12-12 17:34:08', '2021-12-27 12:26:52', 20),
(153, 'edward', 'Edward Aguilar', '2021-12-13 01:09:26', '2021-12-27 12:26:52', 20),
(154, 'edward', 'Edward Aguilar', '2021-12-13 03:09:57', '2021-12-27 12:26:52', 20),
(155, 'edward', 'Edward Aguilar', '2021-12-13 03:11:48', '2021-12-27 12:26:52', 20),
(156, 'edward', 'Edward Aguilar', '2021-12-13 04:02:49', '2021-12-27 12:26:52', 20),
(157, 'edward', 'Edward Aguilar', '2021-12-13 04:03:00', '2021-12-27 12:26:52', 20),
(158, 'edward', 'Edward Aguilar', '2021-12-13 07:55:35', '2021-12-27 12:26:52', 20),
(159, 'edward', 'Edward Aguilar', '2021-12-13 20:52:05', '2021-12-27 12:26:52', 20),
(160, 'edward', 'Edward Aguilar', '2021-12-13 20:58:37', '2021-12-27 12:26:52', 20),
(161, 'edward', 'Edward Aguilar', '2021-12-13 21:17:04', '2021-12-27 12:26:52', 20),
(162, 'edward', 'Edward Aguilar', '2021-12-27 10:27:43', '2021-12-27 12:26:52', 20);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_notification`
--

CREATE TABLE `teacher_notification` (
  `teacher_notification_id` int(11) NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_of_notification` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `link` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `class_quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_notification`
--

INSERT INTO `teacher_notification` (`teacher_notification_id`, `teacher_class_id`, `notification`, `status`, `date_of_notification`, `link`, `student_id`, `assignment_id`, `class_quiz_id`) VALUES
(56, 83, 'Submit Assignment file name <b>pio</b>', '', '2021-12-27 10:51:11', 'view_submit_assignment.php', 40, 27, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`) VALUES
(149, 'edward', '123', 'Edward', 'Aguilar'),
(158, 'admin', 'admin', 'admin', 'admin'),
(160, 'jb', '123', 'jkb', 'bjk');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(30) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`) VALUES
(217, 'edward', '2021-12-26 22:47:16', '2022-04-01 06:51:11', 149),
(218, 'edward', '2021-12-26 23:59:02', '2022-04-01 06:51:11', 149),
(219, 'edward', '2021-12-27 00:40:38', '2022-04-01 06:51:11', 149),
(220, 'edward', '2021-12-27 08:15:01', '2022-04-01 06:51:11', 149),
(221, 'edward', '2021-12-27 10:28:06', '2022-04-01 06:51:11', 149),
(222, 'edward', '2021-12-27 10:30:41', '2022-04-01 06:51:11', 149),
(223, 'admin', '2021-12-27 10:32:01', '2021-12-27 10:39:09', 158),
(224, 'edward', '2021-12-27 10:34:16', '2022-04-01 06:51:11', 149),
(225, 'admin', '2021-12-27 10:39:03', '2021-12-27 10:39:09', 158),
(226, 'edward', '2021-12-27 10:44:13', '2022-04-01 06:51:11', 149),
(227, 'edward', '2021-12-27 10:49:40', '2022-04-01 06:51:11', 149),
(228, 'edward', '2021-12-27 17:58:49', '2022-04-01 06:51:11', 149),
(229, 'edward', '2021-12-27 18:53:05', '2022-04-01 06:51:11', 149),
(230, 'edward', '2021-12-29 08:43:28', '2022-04-01 06:51:11', 149),
(231, 'edward', '2021-12-29 09:37:08', '2022-04-01 06:51:11', 149),
(232, 'edward', '2021-12-29 14:29:23', '2022-04-01 06:51:11', 149),
(233, 'edward', '2021-12-29 14:54:40', '2022-04-01 06:51:11', 149),
(234, 'edward', '2021-12-29 16:51:16', '2022-04-01 06:51:11', 149),
(235, 'edward', '2021-12-31 09:30:36', '2022-04-01 06:51:11', 149),
(236, 'edward', '2021-12-31 12:34:00', '2022-04-01 06:51:11', 149),
(237, 'edward', '2022-01-16 21:10:22', '2022-04-01 06:51:11', 149),
(238, 'edward', '2022-01-16 21:12:54', '2022-04-01 06:51:11', 149),
(239, 'edward', '2022-03-07 09:05:48', '2022-04-01 06:51:11', 149),
(240, 'edward', '2022-03-31 17:38:18', '2022-04-01 06:51:11', 149),
(241, 'edward', '2022-03-31 17:47:47', '2022-04-01 06:51:11', 149),
(242, 'edward', '2022-03-31 19:14:14', '2022-04-01 06:51:11', 149),
(243, 'edward', '2022-04-01 06:51:01', '2022-04-01 06:51:11', 149);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `class_quiz`
--
ALTER TABLE `class_quiz`
  ADD PRIMARY KEY (`class_quiz_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `notification_read`
--
ALTER TABLE `notification_read`
  ADD PRIMARY KEY (`notification_read_id`);

--
-- Indexes for table `notification_read_teacher`
--
ALTER TABLE `notification_read_teacher`
  ADD PRIMARY KEY (`notification_read_teacher_id`);

--
-- Indexes for table `online_meeting`
--
ALTER TABLE `online_meeting`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `question_type`
--
ALTER TABLE `question_type`
  ADD PRIMARY KEY (`question_type_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `quiz_options`
--
ALTER TABLE `quiz_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`quiz_question_id`);

--
-- Indexes for table `schoolyear`
--
ALTER TABLE `schoolyear`
  ADD PRIMARY KEY (`sy_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_class_quiz`
--
ALTER TABLE `student_class_quiz`
  ADD PRIMARY KEY (`student_class_quiz_id`);

--
-- Indexes for table `student_files`
--
ALTER TABLE `student_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `student_send_assignment`
--
ALTER TABLE `student_send_assignment`
  ADD PRIMARY KEY (`student_assignment_id`);

--
-- Indexes for table `student_send_files`
--
ALTER TABLE `student_send_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_class`
--
ALTER TABLE `teacher_class`
  ADD PRIMARY KEY (`teacher_class_id`);

--
-- Indexes for table `teacher_class_announcements`
--
ALTER TABLE `teacher_class_announcements`
  ADD PRIMARY KEY (`teacher_class_announcements_id`);

--
-- Indexes for table `teacher_class_student`
--
ALTER TABLE `teacher_class_student`
  ADD PRIMARY KEY (`teacher_class_student_id`);

--
-- Indexes for table `teacher_log`
--
ALTER TABLE `teacher_log`
  ADD PRIMARY KEY (`teacher_log_id`);

--
-- Indexes for table `teacher_notification`
--
ALTER TABLE `teacher_notification`
  ADD PRIMARY KEY (`teacher_notification_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `class_quiz`
--
ALTER TABLE `class_quiz`
  MODIFY `class_quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `notification_read`
--
ALTER TABLE `notification_read`
  MODIFY `notification_read_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notification_read_teacher`
--
ALTER TABLE `notification_read_teacher`
  MODIFY `notification_read_teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `online_meeting`
--
ALTER TABLE `online_meeting`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `question_type`
--
ALTER TABLE `question_type`
  MODIFY `question_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `quiz_options`
--
ALTER TABLE `quiz_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `quiz_question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `schoolyear`
--
ALTER TABLE `schoolyear`
  MODIFY `sy_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `student_class_quiz`
--
ALTER TABLE `student_class_quiz`
  MODIFY `student_class_quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `student_files`
--
ALTER TABLE `student_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_send_assignment`
--
ALTER TABLE `student_send_assignment`
  MODIFY `student_assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `student_send_files`
--
ALTER TABLE `student_send_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `teacher_class`
--
ALTER TABLE `teacher_class`
  MODIFY `teacher_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `teacher_class_announcements`
--
ALTER TABLE `teacher_class_announcements`
  MODIFY `teacher_class_announcements_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `teacher_class_student`
--
ALTER TABLE `teacher_class_student`
  MODIFY `teacher_class_student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `teacher_log`
--
ALTER TABLE `teacher_log`
  MODIFY `teacher_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `teacher_notification`
--
ALTER TABLE `teacher_notification`
  MODIFY `teacher_notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
