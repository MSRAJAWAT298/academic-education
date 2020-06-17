-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 05:53 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saexam1`
--

-- --------------------------------------------------------

--
-- Table structure for table `iv21bklho63hf5ttmap8fukcgj`
--

CREATE TABLE `iv21bklho63hf5ttmap8fukcgj` (
  `que_id` int(99) NOT NULL,
  `sess_id` varchar(99) DEFAULT NULL,
  `test_id` varchar(11) DEFAULT NULL,
  `que_des` varchar(1900) DEFAULT NULL,
  `ans1` varchar(299) DEFAULT NULL,
  `ans2` varchar(299) DEFAULT NULL,
  `ans3` varchar(299) DEFAULT NULL,
  `ans4` varchar(299) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mst_admin`
--

CREATE TABLE `mst_admin` (
  `id` int(11) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `confirm_pass` varchar(50) NOT NULL,
  `centre_name` varchar(60) NOT NULL,
  `centre_address` varchar(100) NOT NULL,
  `city` varchar(60) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `centre_code` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_admin`
--

INSERT INTO `mst_admin` (`id`, `loginid`, `pass`, `confirm_pass`, `centre_name`, `centre_address`, `city`, `phone`, `email`, `centre_code`) VALUES
(1, 'krishna', '123', '123', 'Apex Computer Institute', 'Maaji Plaza, Kampoo Lashkar, Gwalior', 'Gwalior', '9399699013', 'apex@gmail.com', 123369),
(2, 'bsconcept', '123', '123', 'BS Concept', 'Maaji Plaza, Kampoo, Lashkar, Gwalior', 'Gwalior', '8391259579', 'bsconcept@gmail.com', 123370);

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE `mst_question` (
  `que_id` int(5) NOT NULL,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(1900) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(1, 1, 'What is Computer?', 'Electronic Device', 'Electronic Car', 'Electronic TV', 'Electronic Truck', 1),
(2, 1, 'how many kinds of computer?', '1', '2', '3', '4', 4),
(3, 1, 'CPU Stand for?', 'Central Processing Union', 'Central Processing Unit', 'Central Primery Unit', 'Central Permit Unit', 2),
(4, 3, 'What is MS-DOS?', 'Operating synonims', 'Operation System', 'Operating System', 'Operating Service', 3),
(5, 3, 'What is Operating System', 'System Software', 'Application Software', 'Utility Software', 'System Driver', 1),
(6, 3, 'How many kind of command in MS_DOS?', '3', '1', '2', '4', 3),
(26, 2, 'A, B à¤¤à¤¥à¤¾ C à¤•à¥€ à¤µà¤°à¥à¤¤à¤®à¤¾à¤¨ à¤†à¤¯à¥ à¤•à¤¾ à¤¯à¥‹à¤— 90 à¤¹à¥ˆà¥¤ 6 à¤µà¤°à¥à¤· à¤ªà¤¹à¤²à¥‡ à¤‰à¤¨à¤•à¥€ à¤†à¤¯à¥ à¤®à¥‡à¤‚ 1:2:3 à¤•à¤¾ à¤…à¤¨à¥à¤ªà¤¾à¤¤ à¤¥à¤¾, C à¤•à¥€ à¤µà¤°à¥à¤¤à¤®à¤¾à¤¨ à¤†à¤¯à¥ à¤•à¤¿à¤¤à¤¨à¥€ à¤¹à¥ˆ?', '45    ', '36', '42', '40', 3),
(27, 1, '____ converts the programs written in assembly language into machine instructions .', 'Machine compiler', 'Interpreter', 'Assembler', 'Converter', 3),
(28, 1, 'Who Invented EDSAC?', 'John V. Neumann', 'J.P. Eckert and John Mauchiey', 'Maurice Wikes', 'Howard Aiken', 3),
(29, 1, 'Which of the following is not purely output device?', 'Screen', 'Printer', 'Speaker', 'Plotter', 1),
(30, 1, 'FORTRAN is a programming language. What does FORTRAN stand for?', 'File Translation', 'Format Translation', 'Formula Translation', 'Floppy Translation', 3),
(31, 1, 'Who developed a mechanical device in the 17th century that could add subtract, multiply, divide and find square roots? ', 'Napier ', 'Babbage ', 'Leibnitz ', 'None of the above', 4),
(32, 1, 'The data recording format in most of the modern magnetic tape is ', '7-bit ASCII', '&-bit EBCDIC', '8-bit ASCII ', '8-bit EBCDIC', 4),
(33, 1, 'IBM launched its first personal computer called IBM-PC in 1981. IT had chips from Intel, disk drives from tandon, operating system from Microsoft, the printer from Epson and the  Application Software from everywhere. Can You name the country which contribute ', 'India', 'China', 'Germany', 'Taiwan ', 4),
(34, 1, 'IBM 1401: ', 'The Mainframe ', 'The mini computer', 'Micro computer', 'Super computer ', 1),
(35, 1, 'The first digital computer built with IC chips was known as', 'IBM 7090', 'Apple ? 1', 'IBM System/360', 'Vax-10', 3),
(36, 1, 'A Group of magnetic tapes, videos or terminals usually under the control of one master is ', 'Cylinder ', 'Cluster', 'Surface', 'track', 2),
(37, 1, 'Easily relocatable language is?', 'Machine language ', 'Assembly language ', 'High level language ', 'Medium level language ', 2),
(38, 1, 'The interconnection Topologies are implemented using ....... as a node.', 'Control unit ', 'Micro processing ', 'Processing unit ', 'Micro processing & Processing unit ', 4),
(39, 1, 'Intel corporation produces chips for which computers?', 'IBM PCs', 'Apple/Macintosh PCs', 'Both of above ', 'None of the above', 1),
(40, 1, 'The first micro processor built by the Intel corporation was called ', '8008', '8080', '4004', '8800', 3),
(41, 1, 'EEPROM Stands for', 'Electronically Erasable Programmable Read-Only Memory', 'Electrically  Erasable Programmable Read-Only Memory', 'Electrically  Enabled  Programmable Read-Only Memory', 'Electronically Enabled Programmable Read-Only Memory', 2),
(42, 1, 'Which is the limitation of high level language?', 'Lower efficiency ', 'Machine dependence ', 'Machine level coding ', 'None of the above', 1),
(43, 1, 'High level language is also called ', 'Problem oriented language ', 'Business oriented language ', 'Mathematically oriented language ', 'All of the above', 4),
(44, 1, 'A collection of related instructions organized for a common purpose is referred to as ', 'File ', 'Database ', 'Program ', 'None of the above', 3),
(45, 1, 'A computer program that converts an entire program into machine language at one time is called a/an', 'Interpreter ', 'Simulator ', 'Compiler ', 'Commander ', 3),
(46, 1, 'The control unit of a microprocessor ', 'Stores data in the memory', 'Accepts input data from keyboard ', 'Performs arithmetic/logic function ', 'None of the above', 3),
(47, 1, 'Which of the following machine was not invented by Charles Babbage ? ', 'Tabulating Machine', 'Analytical Engine', 'Difference Engine', 'Both A and B', 1),
(48, 1, 'How many numbers could ENIAC store inits internal memory ', '100', '20', '80', '40', 2),
(49, 1, 'The value of the each bead in earth is', '1', '3', '5', '7', 1),
(50, 1, 'MICR stands for?', 'Magnetic initiate character recognition ', 'Magnetic ink character recognition ', 'Magnetic initiate character reward ', 'Magnetic internal character recognition ', 2),
(51, 1, 'MSI is the abbreviation of ', 'Medium Scale Integrated ', 'Medium System Integrated ', 'Medium Scale Intelligent ', 'Medium System Intelligent ', 1),
(52, 1, 'Through which device the main components of the computer communicate with each other?', 'Keyboard ', 'System Bus', 'Monitor ', 'Memory', 2),
(53, 1, 'The length of a word computer is measured in:\r\n', 'Bits', 'Byte ', 'Millimeters ', 'Meter ', 1),
(54, 1, 'Which of the following operation is not performed by computer?', 'Inputting ', 'Processing', 'Controlling ', 'Understanding', 4),
(55, 1, 'Computer system comprises of major units', 'Input unit, output unit, control unit', 'Input unit, output unit, control unit and storage ', 'Input unit, output unit, central processing unit and storage unit', 'Input unit, output unit, storage unit', 3),
(56, 1, 'The assembler directive EQU, when used in the instruction : Sum EQU 200 does,', 'Finds the first occurrence of Sum and assigns value 200 to it', 'Replaces every occurrence of sum with 200', 'Re-assign the address of sum by adding 200 to its original address', 'None of the above', 2),
(57, 1, 'The directive used to perform initialization before the execution of the code is.......... ', 'Reserve ', 'Store', 'Dataword ', 'EQU', 1),
(58, 1, 'Which statement is valid about interpreter?', 'It translates one instruction at a time', 'Object code is saved for future use ', 'Repeated interpretation is not necessary ', 'All of the above', 1),
(59, 1, 'Which is not a computer classification?', 'Mainframe ', 'Maxframe ', 'Mini', 'Notebook ', 2),
(60, 1, 'Which unit holds data permanently?', 'Input unit', 'Secondary Storage unit', 'Output unit', 'Primary memory unit', 2),
(61, 1, 'Magnetic tape can serve as:', 'Secondary-storage media', 'output media ', 'Input media ', 'None of the above', 4),
(62, 1, 'The first general purpose electronic digital computer in the world was', 'UNIVAC', 'EDVAC', 'ENIAC', 'All of the above', 1),
(63, 1, 'Computer instructions written the use of English words instead of binary machine code is celled', 'Mnemonics ', 'Symbolic code', 'Gray codes', 'Opcode ', 2),
(64, 5, 'Testing', '1', '2', '3', '4', 1),
(65, 5, 'TestingTestingTesting', '2', '3', '3', '5', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE `mst_result` (
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` varchar(21) DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_result`
--

INSERT INTO `mst_result` (`login`, `test_id`, `test_date`, `score`) VALUES
('jitendra', 1, '01/05/2018   04:57:18', 2),
('Mohit7', 1, '01/05/2018   05:06:39', 2),
('saurabh', 2, '02/05/2018   09:11:53', 12),
('neeraj', 2, '02/05/2018   09:12:26', 10),
('sunil', 2, '02/05/2018   09:16:17', 7),
('neeraj', 2, '02/05/2018   09:16:26', 4),
('neeraj', 2, '02/05/2018   09:18:14', 9),
('monu', 2, '02/05/2018   09:18:34', 6),
('devendra', 2, '02/05/2018   10:37:01', 14),
('neeraj9', 2, '02/05/2018   10:39:16', 11),
('jitendra', 1, '02/05/2018   02:31:47', 0),
('BharatRawat', 2, '02/05/2018   07:20:17', 5);

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

CREATE TABLE `mst_subject` (
  `sub_id` int(5) NOT NULL,
  `sub_name` varchar(25) DEFAULT NULL,
  `centre_code` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`sub_id`, `sub_name`, `centre_code`) VALUES
(1, 'Fundamental of Computer', 123369),
(2, 'Operating System', 123369),
(6, 'MS-Access', 123369),
(7, 'Maths', 123370),
(8, 'Compiler', 123369),
(9, 'ADA', 123369),
(10, 'DB', 123369),
(11, 'Apptitude', 123369);

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE `mst_test` (
  `test_id` int(5) NOT NULL,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(1, 1, 'Fundamental', '100'),
(2, 6, 'Partnership & Age', '20'),
(3, 2, 'MS-DOS', '100'),
(4, 5, 'Photoshop & PageMaker', '100'),
(5, 8, 'Week day exam', '10'),
(6, 9, 'Week day exam 2', '5'),
(7, 9, 'Week day exam', '5');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `user_id` int(5) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `conf_pass` varchar(20) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `userfname` varchar(60) NOT NULL,
  `edu_qualification` varchar(30) NOT NULL,
  `scuniverse` varchar(60) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `cscname` varchar(60) NOT NULL,
  `centre_id` varchar(80) NOT NULL,
  `agreed` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `login`, `pass`, `conf_pass`, `username`, `userfname`, `edu_qualification`, `scuniverse`, `dob`, `gender`, `address`, `city`, `phone`, `email`, `cscname`, `centre_id`, `agreed`) VALUES
(1, 'jitendra', '123', '123', 'Jitendra Singh', 'JM Singh', 'B.Sc', 'Science College', '1990-01-01', 'Male', 'SAF', 'Gwalior', 2147483647, 'jitendrasinghmahur@gmail.com', 'Apex Computer Institute', '123369', 'I Agreed'),
(21, 'msrajawat298', '123456', '123456', 'Mayank Singh Rajawat', 'Mayank', 'B.E', 'IPS', '1998-10-07', 'Male', 'Guda gudi ka naka\r\nGwalior', 'Gwalior', 2147483647, 'msrajawat300@gmail.com', 'Brilliant', '123369', 'I Agreed');

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE `mst_useranswer` (
  `que_id` int(6) NOT NULL,
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(1900) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_useranswer`
--

INSERT INTO `mst_useranswer` (`que_id`, `sess_id`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
(1, 'v02og965350bcb1ccrjlfb7jg5', 1, 'What is Computer?', 'Electronic Device', 'Electronic Car', 'Electronic TV', 'Electronic Truck', 1, 1),
(2, 'v02og965350bcb1ccrjlfb7jg5', 1, 'how many kinds of computer?', '1', '2', '3', '4', 4, 2),
(3, 'v02og965350bcb1ccrjlfb7jg5', 1, 'CPU Stand for?', 'Central Processing Union', 'Central Processing Unit', 'Central Primery Unit', 'Central Permit Unit', 2, 3),
(27, 'v02og965350bcb1ccrjlfb7jg5', 1, '____ converts the programs written in assembly language into machine instructions .', 'Machine compiler', 'Interpreter', 'Assembler', 'Converter', 3, 1),
(1, 'k6a2gnktlgi7seuov3olqeeb8i', 1, 'What is Computer?', 'Electronic Device', 'Electronic Car', 'Electronic TV', 'Electronic Truck', 1, 1),
(2, 'k6a2gnktlgi7seuov3olqeeb8i', 1, 'how many kinds of computer?', '1', '2', '3', '4', 4, 2),
(3, 'k6a2gnktlgi7seuov3olqeeb8i', 1, 'CPU Stand for?', 'Central Processing Union', 'Central Processing Unit', 'Central Primery Unit', 'Central Permit Unit', 2, 2),
(27, 'k6a2gnktlgi7seuov3olqeeb8i', 1, '____ converts the programs written in assembly language into machine instructions .', 'Machine compiler', 'Interpreter', 'Assembler', 'Converter', 3, 3),
(28, 'k6a2gnktlgi7seuov3olqeeb8i', 1, 'Who Invented EDSAC?', 'John V. Neumann', 'J.P. Eckert and John Mauchiey', 'Maurice Wikes', 'Howard Aiken', 3, 2),
(1, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'What is Computer?', 'Electronic Device', 'Electronic Car', 'Electronic TV', 'Electronic Truck', 1, 1),
(2, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'how many kinds of computer?', '1', '2', '3', '4', 4, 4),
(3, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'CPU Stand for?', 'Central Processing Union', 'Central Processing Unit', 'Central Primery Unit', 'Central Permit Unit', 2, 2),
(27, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, '____ converts the programs written in assembly language into machine instructions .', 'Machine compiler', 'Interpreter', 'Assembler', 'Converter', 3, 1),
(28, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'Who Invented EDSAC?', 'John V. Neumann', 'J.P. Eckert and John Mauchiey', 'Maurice Wikes', 'Howard Aiken', 3, 1),
(29, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'Which of the following is not purely output device?', 'Screen', 'Printer', 'Speaker', 'Plotter', 1, 2),
(30, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'FORTRAN is a programming language. What does FORTRAN stand for?', 'File Translation', 'Format Translation', 'Formula Translation', 'Floppy Translation', 3, 3),
(31, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'Who developed a mechanical device in the 17th century that could add subtract, multiply, divide and find square roots? ', 'Napier ', 'Babbage ', 'Leibnitz ', 'None of the above', 4, 3),
(32, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'The data recording format in most of the modern magnetic tape is ', '7-bit ASCII', '&-bit EBCDIC', '8-bit ASCII ', '8-bit EBCDIC', 4, 2),
(7, 'vjncn6ob4l36mcsu0cv39qbg1i', 2, 'à¤šà¤¾à¤° à¤¦à¥‚à¤§à¤µà¤¾à¤²à¥‹à¤‚ à¤¨à¥‡ à¤à¤• à¤šà¤¾à¤°à¤¾à¤—à¤¾à¤¹ à¤•à¤¿à¤°à¤¾à¤¯à¥‡ à¤ªà¤° à¤²à¤¿à¤¯à¤¾, M à¤¨à¥‡ 16 à¤—à¤¾à¤¯à¥‹à¤‚ à¤•à¥‹ 3 à¤®à¤¾à¤¹ à¤¤à¤•, N à¤¨à¥‡ 20 à¤—à¤¾à¤¯à¥‹à¤‚ à¤•à¥‹ 4 à¤®à¤¾à¤¹ à¤¤à¤•, O à¤¨à¥‡ 18 à¤—à¤¾à¤¯à¥‹à¤‚ à¤•à¥‹ 6 à¤®à¤¾à¤¹ à¤¤à¤• à¤¤à¤¥à¤¾ P à¤¨à¥‡ 42 à¤—à¤¾à¤¯à¥‹à¤‚ à¤•à¥‹ 2 à¤®à¤¾à¤¹ à¤¤à¤• à¤šà¤°à¤¾à¤¯à¤¾, à¤¯à¤¦à¤¿ à¤•à¤¿à¤°à¤¾à¤¯à¥‡ à¤•à¥€ à¤°à¤¾à¤¶à¤¿ à¤®à¥‡à¤‚  M à¤•à¤¾ à¤¹à¤¿à¤¸à¥à¤¸à¤¾à¤¾ 2400à¤°à¥‚. à¤¹à¥ˆ, à¤¤à¥‹ à¤œà¥à¤žà¤¾à¤¤ à¤•à¤°à¥‡à¤‚ O à¤•à¤¾ à¤¹à¤¿à¤¸à¥à¤¸à¤¾à¤¶ à¤•à¥à¤¯à¤¾à¤¨ à¤¹à¥‹à¤—à¤¾?', '3500', '4200', '4000', '5400', 4, 1),
(8, 'vjncn6ob4l36mcsu0cv39qbg1i', 2, '11250 à¤•à¥€ à¤°à¤¾à¤¶à¤¿ à¤•à¥‹ A, B à¤¤à¤¥à¤¾ C à¤®à¥‡à¤‚ à¤‡à¤¸ à¤ªà¥à¤°à¤•à¤¾à¤° à¤¬à¤¾à¤à¤Ÿà¤¾ à¤—à¤¯à¤¾ à¤•à¤¿ A à¤•à¤¾ à¤¹à¤¿à¤¸à¥à¤¸à¤¾7 B à¤¤à¤¥à¤¾ C à¤•à¥‡ à¤•à¥à¤² à¤¹à¤¿à¤¸à¥à¤¸à¥‡5 à¤•à¤¾ 1/4 à¤¹à¥‹, à¤¤à¥‹ à¤œà¥à¤žà¤¾à¤¤ à¤•à¤°à¥‡à¤‚ à¤•à¤¿ A à¤•à¤¾ à¤¹à¤¿à¤¸à¥à¤¸à¤¾  B à¤•à¥‡ à¤¹à¤¿à¤¸à¥à¤¸à¥‡à¤• à¤¸à¥‡ à¤•à¤¿à¤¤à¤¨à¤¾ à¤…à¤§à¤¿à¤• à¤¹à¥ˆ?', '2500', '1500', '1800', '650', 2, 2),
(9, 'vjncn6ob4l36mcsu0cv39qbg1i', 2, 'à¤¨à¤°à¥‡à¤¶ à¤”à¤° à¤œà¤¯à¥‡à¤¶ à¤¸à¤®à¤¾à¤¨ à¤ªà¥‚à¤à¤œà¥€ à¤²à¤—à¤¾à¤•à¤° à¤à¤• à¤µà¥à¤¯à¤¾à¤¿à¤ªà¤¾à¤° à¤•à¤¿à¤¯à¤¾ à¤œà¤¿à¤¸à¤®à¥‡à¤‚ à¤¨à¤°à¥‡à¤¶ à¤•à¥€ à¤ªà¥‚à¤à¤œà¥€ 8 à¤®à¤¹à¥€à¤¨à¥‡ à¤¤à¤• à¤¤à¤¥à¤¾ à¤œà¤¯à¥‡à¤¶ à¤•à¥€ 6 à¤®à¤¹à¥€à¤¨à¥‡ à¤¤à¤• à¤•à¥‡ à¤²à¤¿à¤¯à¥‡ à¤²à¤—à¥€ à¤°à¤¹à¥€ à¤¯à¤¦à¤¿ à¤•à¥à¤² 42,000à¤°à¥‚. à¤•à¤¾ à¤²à¤¾à¤­ à¤¹à¥à¤† à¤¹à¥‹ à¤¤à¥‹ à¤¨à¤°à¥‡à¤¶ à¤•à¥‹ à¤²à¤¾à¤­ à¤•à¥‡ à¤°à¥‚à¤ª à¤®à¥‡à¤‚ à¤•à¤¿à¤¤à¤¨à¥‡ à¤°à¥‚à¤ªà¤¯à¥‡ à¤®à¤¿à¤²à¥‡?', '6000', '12000 ', '24000', '18000', 3, 2),
(10, 'vjncn6ob4l36mcsu0cv39qbg1i', 2, 'A, B à¤¤à¤¥à¤¾ C à¤¤à¥€à¤¨ à¤¸à¤¾à¤à¥‡à¤¦à¤¾à¤° à¤®à¤¿à¤²à¤•à¤° à¤‡à¤¸ à¤ªà¥à¤°à¤•à¤¾à¤° à¤ªà¥‚à¤à¤œà¥€ à¤¨à¤¿à¤µà¥‡à¤¶ à¤•à¤°à¤¤à¥‡ à¤¹à¥ˆ à¤•à¤¿ A à¤•à¥€ à¤ªà¥‚à¤à¤œà¥€ à¤•à¤¾ 4 à¤—à¥à¤¨à¤¾     à¤¬à¤°à¤¾à¤¬à¤° B à¤•à¥€ à¤ªà¥‚à¤à¤œà¥€ à¤•à¤¾ 5 à¤—à¥à¤¨à¤¾ à¤¬à¤°à¤¾à¤¬à¤° C à¤•à¥€ à¤ªà¥‚à¤à¤œà¥€ à¤•à¤¾ 6 à¤—à¥à¤¨à¤¾ à¤¹à¥‹ à¤”à¤° à¤‰à¤¨à¥à¤¹à¥‡à¤‚à¤‚ à¤µà¤°à¥à¤· à¤•à¥‡ à¤…à¤‚à¤¤ à¤®à¥‡à¤‚ 14800à¤°à¥‚. à¤•à¤¾ à¤²à¤¾à¤­ à¤¹à¥à¤† à¤¹à¥‹, à¤¤à¥‹ A à¤•à¤¾ à¤¹à¤¿à¤¸à¥à¤¸à¤¾à¤¿ à¤•à¤¿à¤¤à¤¨à¤¾ à¤¹à¥‹à¤—à¤¾? ', '4000', '6000', '7000', '5000', 2, 3),
(1, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'What is Computer?', 'Electronic Device', 'Electronic Car', 'Electronic TV', 'Electronic Truck', 1, 3),
(0, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'What is Computer?', 'Electronic Device', 'Electronic Car', 'Electronic TV', 'Electronic Truck', 1, 4),
(0, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'how many kinds of computer?', '1', '2', '3', '4', 4, 4),
(0, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'CPU Stand for?', 'Central Processing Union', 'Central Processing Unit', 'Central Primery Unit', 'Central Permit Unit', 2, 4),
(27, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, '____ converts the programs written in assembly language into machine instructions .', 'Machine compiler', 'Interpreter', 'Assembler', 'Converter', 3, 4),
(29, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'Which of the following is not purely output device?', 'Screen', 'Printer', 'Speaker', 'Plotter', 1, 4),
(30, 'vjncn6ob4l36mcsu0cv39qbg1i', 1, 'FORTRAN is a programming language. What does FORTRAN stand for?', 'File Translation', 'Format Translation', 'Formula Translation', 'Floppy Translation', 3, 4),
(1, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'What is Computer?', 'Electronic Device', 'Electronic Car', 'Electronic TV', 'Electronic Truck', 1, 2),
(2, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'how many kinds of computer?', '1', '2', '3', '4', 4, 4),
(3, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'CPU Stand for?', 'Central Processing Union', 'Central Processing Unit', 'Central Primery Unit', 'Central Permit Unit', 2, 3),
(27, 'vq3ft57ko3ipepk1tslaajpjlc', 1, '____ converts the programs written in assembly language into machine instructions .', 'Machine compiler', 'Interpreter', 'Assembler', 'Converter', 3, 3),
(28, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'Who Invented EDSAC?', 'John V. Neumann', 'J.P. Eckert and John Mauchiey', 'Maurice Wikes', 'Howard Aiken', 3, 3),
(29, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'Which of the following is not purely output device?', 'Screen', 'Printer', 'Speaker', 'Plotter', 1, 3),
(30, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'FORTRAN is a programming language. What does FORTRAN stand for?', 'File Translation', 'Format Translation', 'Formula Translation', 'Floppy Translation', 3, 3),
(31, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'Who developed a mechanical device in the 17th century that could add subtract, multiply, divide and find square roots? ', 'Napier ', 'Babbage ', 'Leibnitz ', 'None of the above', 4, 3),
(32, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'The data recording format in most of the modern magnetic tape is ', '7-bit ASCII', '&-bit EBCDIC', '8-bit ASCII ', '8-bit EBCDIC', 4, 4),
(33, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'IBM launched its first personal computer called IBM-PC in 1981. IT had chips from Intel, disk drives from tandon, operating system from Microsoft, the printer from Epson and the  Application Software from everywhere. Can You name the country which contribute ', 'India', 'China', 'Germany', 'Taiwan ', 4, 1),
(34, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'IBM 1401: ', 'The Mainframe ', 'The mini computer', 'Micro computer', 'Super computer ', 1, 4),
(35, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'The first digital computer built with IC chips was known as', 'IBM 7090', 'Apple ? 1', 'IBM System/360', 'Vax-10', 3, 3),
(36, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'A Group of magnetic tapes, videos or terminals usually under the control of one master is ', 'Cylinder ', 'Cluster', 'Surface', 'track', 2, 2),
(37, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'Easily relocatable language is?', 'Machine language ', 'Assembly language ', 'High level language ', 'Medium level language ', 2, 2),
(38, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'The interconnection Topologies are implemented using ....... as a node.', 'Control unit ', 'Micro processing ', 'Processing unit ', 'Micro processing & Processing unit ', 4, 2),
(39, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'Intel corporation produces chips for which computers?', 'IBM PCs', 'Apple/Macintosh PCs', 'Both of above ', 'None of the above', 1, 3),
(40, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'The first micro processor built by the Intel corporation was called ', '8008', '8080', '4004', '8800', 3, 4),
(41, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'EEPROM Stands for', 'Electronically Erasable Programmable Read-Only Mem', 'Electrically  Erasable Programmable Read-Only Memo', 'Electrically  Enabled  Programmable Read-Only Memo', 'Electronically Enabled Programmable Read-Only Memo', 2, 4),
(42, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'Which is the limitation of high level language?', 'Lower efficiency ', 'Machine dependence ', 'Machine level coding ', 'None of the above', 1, 4),
(43, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'High level language is also called ', 'Problem oriented language ', 'Business oriented language ', 'Mathematically oriented language ', 'All of the above', 4, 4),
(44, 'vq3ft57ko3ipepk1tslaajpjlc', 1, 'A collection of related instructions organized for a common purpose is referred to as ', 'File ', 'Database ', 'Program ', 'None of the above', 3, 4),
(4, 'vq3ft57ko3ipepk1tslaajpjlc', 3, 'What is MS-DOS?', 'Operating synonims', 'Operation System', 'Operating System', 'Operating Service', 3, 1),
(5, 'vq3ft57ko3ipepk1tslaajpjlc', 3, 'What is Operating System', 'System Software', 'Application Software', 'Utility Software', 'System Driver', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_admin`
--
ALTER TABLE `mst_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_question`
--
ALTER TABLE `mst_question`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `mst_subject`
--
ALTER TABLE `mst_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `mst_test`
--
ALTER TABLE `mst_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_admin`
--
ALTER TABLE `mst_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_question`
--
ALTER TABLE `mst_question`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `mst_subject`
--
ALTER TABLE `mst_subject`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mst_test`
--
ALTER TABLE `mst_test`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
