-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 09:27 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Name` varchar(50) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Edition` int(11) NOT NULL,
  `Publication` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Name`, `Author`, `Subject`, `Edition`, `Publication`) VALUES
('Concepts of Physics Volume 1', 'H.C.Verma', 'Physics', 1, 'Paperback'),
('Concepts of Physics Volume 2', 'H.C.Verma', 'Physics', 1, 'Paperback'),
('New Pattern IIT JEE Chemistry', 'R.K.Gupta', 'Chemistry', 0, 'Arihant'),
('A Master Resource Book in MATHEMATICS for JEE Main', 'Prafull K Agarwal', 'Mathematics', 3, 'Arihant'),
('JEE Main Mathematics in 40 Days', ' Rajeev Manocha', 'Mathematics', 4, 'Arihant'),
('Solomons & Fryhle''s Organic Chemistry for JEE ', ' M.S. Chouhan ', 'Chemistry', 3, 'Maestro'),
('Physical Chemistry', 'O.P.Tandan', 'Chemistry', 7, 'G.R.Bhatla'),
('Numerical Chemistry', 'R.C.Mukharji', 'Chemistry', 4, 'Bharati Bhavan'),
('Problems in General Physics', 'Irodov', 'Physics', 5, 'Arihant'),
('Fundamentals-Physics', 'Halliday, Resnick & Walker', 'Physics', 6, 'Wiley'),
('Trigonometry', 'S.L Loney', 'Mathematics', 3, 'Arihant'),
('Higher Agebra', 'Hall & Knight', 'Mathematics', 1, 'Arihant'),
('Chapter - wise Solutions: JEE Main Mathematics ', ' Bhupinder Singh Tomar', 'Mathematics', 1, 'Pearson Education (2014)'),
('Concepts of Maths', 'Pande', 'Mathematics', 1, 'Arihant');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `Exam_Name` varchar(15) NOT NULL,
  `Day` char(10) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Time` varchar(15) NOT NULL,
  `Course` char(10) NOT NULL,
  `Topic` text NOT NULL,
  `Classroom` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`Exam_Name`, `Day`, `Date`, `Time`, `Course`, `Topic`, `Classroom`) VALUES
('Major_Test1', 'Monday', '21.06.16', '08:00-11:00', 'Advanced', 'quantum physics,Complex numbers,Inorganic chemistry', 'A001'),
('Major_Test1', 'Wednesday', '08.04.2015', '11:00-02:00', 'Mains', 'Thermodynamics, Physical Chemistry, Differentiation', 'M001'),
('Major_Test1', 'Friday', '12.04.16', '08:00-11:00', 'Medical', 'Thermodynamics,Theory of Evolution,Heart,Organic Chemistry', 'D001'),
('Major_Test1', 'Thursday', '12.04.16', '08:00-11:00', 'Foundation', 'Mole Concept, Complex numbers, trigognometry, Quantum mechanics, ', 'F001'),
('Major_Test2', 'Tuesday', '08.05.2015', '08:00-11:00', 'Mains', 'Sets relations and functions, mechanics, organic chemistry', 'M001');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Login_ID` varchar(10) NOT NULL,
  `First_Name` char(20) NOT NULL,
  `Middle_Name` char(20) NOT NULL,
  `Surname` char(20) NOT NULL,
  `Birthdate` varchar(10) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Qualification` char(20) NOT NULL,
  `Teaching_exp` int(2) NOT NULL,
  `Phone_No` bigint(11) NOT NULL,
  `Email_Id` varchar(40) NOT NULL,
  `Address1` varchar(100) NOT NULL,
  `Area` char(20) NOT NULL,
  `City` char(20) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Subject` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Login_ID`, `First_Name`, `Middle_Name`, `Surname`, `Birthdate`, `Gender`, `Qualification`, `Teaching_exp`, `Phone_No`, `Email_Id`, `Address1`, `Area`, `City`, `Pincode`, `Subject`) VALUES
('200000', 'Prasanav', 'Santosh', 'Pandit', '27.03.1990', 'M', 'PhD Maths', 3, 9457893456, 'prasanavpandit@yahoo.com', '3, madhukrishna', 'murbad Road', 'Kalyan', 431567, 'Mathematics'),
('200002', 'Rohit', 'Dilip', 'Chillar', '1.04.1990', 'M', 'M.Sc.B.Ed', 5, 9849384859, 'rohit.chillar@gmail.com', 'Mahatma Gandhi Road', 'Fort', 'Mumbai', 400108, 'Chemistry'),
('200003', 'Anushri', 'Nitin', 'Tamore', '8.6.1989', 'F', 'M.Sc.B.Ed', 1, 716748364, 'anushritamore@gmail.com', '34-Sevasadan', 'Mahim', 'Mumbai', 345533, 'Mathematics'),
('200004', 'Shivam', 'Sumit', 'Shelke', '1.12.1989', 'M', 'Ph.D(Biology)', 4, 776543456, 'shivamshelke@gmail.com', 'D503,Heramb Heritage', 'Churni Road', 'Mumbai', 400103, 'Biology'),
('200005', 'Rutuja', 'arvind', 'kulkarni', '2.10.1989', 'F', 'M.Sc.Physics', 5, 9884738949, 'rutuja.k56@gmail.com', '64,asha villa', 'cotton green', 'Mumbai', 400311, 'Physics'),
('200008', 'Radha', 'krishna', 'yadav', '5.06.1985', 'F', 'M.Sc.Biology', 7, 9473836495, 'radha_yadav@yahoo.com', '101,krishnakunj', 'matunga', 'Mumbai', 400019, 'Biology'),
('200009', 'Anushka', 'Pradeep', 'Patil', '25.2.1988', 'F', 'btech,iit kharagpur', 5, 9564579318, 'anushkapatil2@gmail.com', '66/68 mint road', 'fort', 'mumbai', 400108, 'Chemistry'),
('200010', 'Dhiren', 'Rajeev', 'Kharat', '20.5.1990', 'M', 'Ph.D Physics', 3, 9384729473, 'dhiren293@hotmail.com', '47/8, mhdc', 'vashi', 'Mumbai', 400192, 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `login_master`
--

hCREATE TABLE `login_master` (
  `Login_ID` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Security_Ques` text NOT NULL,
  `Security_Ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_master`
--

INSERT INTO `login_master` (`Login_ID`, `password`, `Security_Ques`, `Security_Ans`) VALUES
('100000', 'admin', 'Which is your favourite game?', 'ice hockey'),
('200001', 'aakash', 'Which is your favourite place?', 'Ney York'),
('200002', 'rohit', 'Who is your favourite teacher?', 'Amol Sir'),
('200003', 'anushri', 'Which is your favourite game?', 'Golf'),
('200004', 'shivam', 'What is your favourite colour?', 'Pink'),
('300001', 'radhika', 'What is your favourite colour?', 'Blue'),
('300002', 'mansi', 'Which is your favourite game?', 'Basketball'),
('300003', 'vishal', 'Who is your best friend?', 'Koshal'),
('300004', 'richa', 'Who is your favourite teacher?', 'Shastri Maam'),
('300005', 'licha', 'Who is your favourite teacher?', 'Deven Sir');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Login_ID` varchar(11) NOT NULL,
  `Course` char(20) NOT NULL,
  `Exam_Name` char(20) NOT NULL,
  `Physics` int(3) NOT NULL,
  `Chemistry` int(3) NOT NULL,
  `Biology` int(3) NOT NULL,
  `Mathematics` int(3) NOT NULL,
  `Total` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Login_ID`, `Course`, `Exam_Name`, `Physics`, `Chemistry`, `Biology`, `Mathematics`, `Total`) VALUES
('300001', 'Advanced', 'Major_Test1', 54, 54, 0, 54, 162),
('300001', 'Advanced', 'Major_Test1', 54, 54, 0, 54, 162),
('300004', 'Medical', 'Major_Test1', 34, 76, 23, 56, 166),
('300004', 'Medical', 'Major_Test1', 34, 76, 23, 56, 166),
('300007', 'Mains', 'Major_Test1', 23, 34, 0, 54, 111),
('300007', 'Mains', 'Major_Test1', 23, 34, 0, 54, 111),
('300006', 'Mains', 'Major_Test1', 234, 23, 0, 45, 302),
('300006', 'Mains', 'Major_Test1', 234, 23, 0, 45, 302),
('300020', 'Medical', 'Major_Test1', 23, 43, 23, 67, 133),
('300020', 'Medical', 'Major_Test1', 23, 43, 23, 67, 133),
('300012', 'Advanced', 'Major_Test1', 12, 45, 0, 23, 80);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Login_ID` int(6) NOT NULL,
  `First_Name` char(50) NOT NULL,
  `Fathers_Name` char(50) NOT NULL,
  `Surname` char(50) DEFAULT NULL,
  `Gender` char(1) NOT NULL,
  `Birthdate` varchar(10) NOT NULL,
  `Phone_No` bigint(10) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Address1` varchar(50) NOT NULL,
  `Area` varchar(20) NOT NULL,
  `City` char(15) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `College_Name` char(30) NOT NULL,
  `SSC_Marks` float NOT NULL,
  `Entrance_Marks` int(4) DEFAULT NULL,
  `Course` char(10) NOT NULL,
  `Batch_ID` varchar(3) NOT NULL,
  `Fathers_No` bigint(10) DEFAULT NULL,
  `Mothers_Name` char(20) NOT NULL,
  `Mothers_No` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Login_ID`, `First_Name`, `Fathers_Name`, `Surname`, `Gender`, `Birthdate`, `Phone_No`, `Email_Id`, `Address1`, `Area`, `City`, `Pincode`, `College_Name`, `SSC_Marks`, `Entrance_Marks`, `Course`, `Batch_ID`, `Fathers_No`, `Mothers_Name`, `Mothers_No`) VALUES
(300001, 'Radhima', 'Pawan', 'Rathi', 'F', '28.01.2000', 8482925526, 'radhika.rathi@gmail.com', '302-arihant bldg', 'Gokul Nagar', 'Bhiwandi', 421302, 'V.G. Vaze College', 67, 0, 'Advanced', 'A01', 9322128921, 'Manju Rathi', 9326342547),
(300002, 'Mansi', 'Alok', 'Singh', 'F', '23.7.1995', 7654984568, 'mansi23singh@gmail.com', '1101- aashirwad chowk', 'sec 18', 'kharghar', 456321, 'Ruia College', 78.98, NULL, 'Foundation', 'F01', 987345764, 'Riya Singh', NULL),
(300003, 'Vishal', 'Suresh', 'Kene', 'M', '25.3.1999', 9876685234, 'vishal25kene@yahoo.com', '23-Mahesh Park', 'Shiwaji Chowk', 'Thane', 424767, 'Ruia College', 89, 87, 'Mains', 'M01', 8976542345, 'Rekha Kene', NULL),
(300004, 'Richa', 'Jitendra', NULL, 'F', '18.12.1996', 9867428110, 'richa@gmail.com', 'B-245,Sunflower Building', 'Marine lines', 'Mumbai', 400040, 'Ruia College', 98.56, 156, 'Medical', 'M01', 9987415610, 'Ragini Jitendra', NULL),
(300005, 'Rhea', 'Alok', 'Pradhan', 'F', '23.05.1999', 9753786678, 'rhea567@gmail.com', 'B7,harsh apartment', 'nerul', 'Mumbai', 400003, 'RAIT', 95.78, 123, 'Mains', 'M02', 9746484734, 'Chaitali', 9483493645),
(300006, 'Shaila', 'premchandra', 'Saxena', 'F', '7.8.1998', 9746586534, 'Shaila.saxenaan@yahoo.com', '42,asavari bhavan', 'sandhurst rd', 'Mumbai', 400678, 'Vidyalankar', 88.76, 132, 'Mains', 'M02', 9322128921, 'Radha', 9326342547),
(300007, 'Alok', 'Rajesh', 'Singh', 'M', '09-12-1980', 8482925526, 'alok176@gmail.com', '54,ashay', 'Dockyard rd', 'Mumbai', 400054, 'Vidyaniketan College', 92.92, 165, 'Mains', 'M03', 9726327382, 'Seema', 9982291021),
(300008, 'Saurabh', 'rakesh', 'chavan', 'M', '25.8.1996', 8482925526, 'sau.chav@gmail.com', '8/9', 'Fort', 'Mumbai', 400002, 'Saraswati Jr college', 94, 176, 'Advanced', 'A02', NULL, 'Riya', NULL),
(300009, 'Surabhi', 'Ramesh', 'chauhan', 'F', '25.0.1996', 8482927526, 'sau.chahv@gmail.com', '8/9', 'Fort', 'Mumbai', 400002, 'Saraswati Jr college', 94.01, 176, 'Advanced', 'A03', NULL, 'Riya', NULL),
(300011, 'Raj', 'Ravindra', 'More', 'F', '5.03.1999', 9846749683, 'raj.mre43@hotmail.com', '65,seva sadan', 'Gokul Nagar', 'Mumbai', 400040, 'Thakare college', 156, 0, 'A', 'A01', 9558338543, 'Suvarna', 9483958394),
(300012, 'Rajeshree', 'Ravindra', 'Gaikwad', 'F', '8.08.1999', 9856749683, 'rajeshree.g43@hotmail.com', '25,ganesh society', 'Sanpada', 'Mumbai', 400080, 'Nanavare college', 98, 186, 'Advanced', 'A02', 9558338543, 'Suvarna', 9483958394),
(300013, 'Praful', 'Raj', 'Roy', 'M', '6.05.1999', 9866348294, 'praf_03@gmail.com', '302-arihant bldg', 'Marine lines', 'Mumbai', 400223, 'Ruia College', 97, 145, 'Advanced', 'A03', NULL, 'Shikha', NULL),
(300014, 'Priyank', 'Shashank', 'Dalmia', 'M', '6.03.1998', 9384849343, 'priyank@gmail.com', '302-arihant bldg', 'Sion', 'Mumbai', 400037, 'V.G. Vaze College', 95.78, 0, 'Foundation', 'F01', NULL, 'Pradnya', NULL),
(300015, 'ranjani', 'akshay', 'shirke', 'F', '2.8.1999', 9438583732, 'ranjani464@yahoo.com', '5,sai siddhi', 'sewri', 'Mumbai', 400018, 'Shri d.p patil college', 90.09, NULL, 'Foundation', 'F03', NULL, 'Savita', NULL),
(300016, 'Ashish', 'Sanjay', 'Mahajan', 'M', '09-12-1980', 932416245, 'ashish@gmail.com', 'B-323,Sagar saniddhya', 'Shivaji Park', 'Mumbai', 400240, 'Ruparel college', 88, NULL, 'Foundation', 'F02', NULL, 'Sheetal', NULL),
(300017, 'Chinmay', 'amol', 'Rane', 'M', '8.12.1998', 8937589353, 'chinu323@gmail.com', 'B-245,Sunflower Building', 'Fort', 'Mumbai', 421302, 'Thakare college', 92.41, NULL, 'Medical', 'D01', NULL, 'Rajni', NULL),
(300018, 'Dhruv', 'Pawan', 'mehta', 'M', '5.03.1999', 8482925526, 'dhruv363@gmail.com', '6/7, Balkrishna society', 'Kurla', 'Mumbai', 400015, 'Simbodia college', 98.76, NULL, 'Medical', 'D02', NULL, 'Asha', NULL),
(300019, 'Radhika', 'Jayant', 'Marathe', 'F', '25.6.1997', 9834938539, 'radhika_m@gmail.com', '44,Saikrupa building', 'Wadala', 'Mumba', 400031, 'SIWS', 93.43, NULL, 'Medical', 'D03', NULL, 'Radha', NULL),
(300020, 'Kavya', 'Laksh', 'Maheshwari', 'F', '25.8.1996', 776543456, 'kavya@gmail.com', 'B-323,Sagar saniddhya', 'Marine lines', 'Mumbai', 400040, 'Ruia College', 98, NULL, 'Medical', 'D03', NULL, 'Rupali', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `Day` text NOT NULL,
  `Time` varchar(12) NOT NULL,
  `Classroom` varchar(4) NOT NULL,
  `Batch_ID` varchar(3) NOT NULL,
  `Subject` text NOT NULL,
  `Faculty` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`Day`, `Time`, `Classroom`, `Batch_ID`, `Subject`, `Faculty`) VALUES
('Monday', '8:00-11:00', 'M001', 'M01', 'Physics', 'Rutuja'),
('Monday', '8:00-11:00', 'A002', 'A01', 'Physics', 'Dhiren'),
('Monday', '8:00-11:00', 'F002', 'F01', 'Chemistry', 'Anushka'),
('Monday', '8:00-11:00', 'D001', 'D01', 'Chemistry', 'Rohit'),
('Monday', '11:00-14:00', 'M001', 'M01', 'Mathematics', 'Prasanav'),
('Monday', '11:00-14:00', 'M002', 'M03', 'Physics', 'Rutuja'),
('Monday', '11:00-14:00', 'A001', 'A01', 'Chemistry', 'Rohit'),
('Monday', '11:00-14:00', 'A002', 'A03', 'Physics', 'Dhiren'),
('Monday', '11:00-14:00', 'F001', 'F01', 'Mathematics', 'Anushri'),
('Monday', '11:00-14:00', 'F002', 'F03', 'Chemistry', 'Anushka'),
('Monday', '11:00-14:00', 'D001', 'D01', 'Biology', 'Shivam'),
('Monday', '14:00-17:00', 'M001', 'M02', 'Physics', 'Rutuja'),
('Monday', '14:00-17:00', 'M002', 'M03', 'Mathematics', 'Prasanav'),
('Monday', '14:00-17:00', 'A001', 'A02', 'Physics', 'Dhiren'),
('Monday', '14:00-17:00', 'A002', 'A03', 'Chemistry', 'Anushka'),
('Monday', '14:00-17:00', 'F001', 'F02', 'Chemistry', 'Rohit'),
('Monday', '14:00-17:00', 'F002', 'F03', 'Mathematics', 'Anushri'),
('Monday', '14:00-17:00', 'D001', 'D02', 'Biology', 'Shivam'),
('Monday', '14:00-17:00', 'D002', 'D03', 'Biology', 'Radha'),
('Monday', '17:00-20:00', 'M001', 'M02', 'Mathematics', 'Prasanav'),
('Monday', '17:00-20:00', 'A001', 'A02', 'Chemistry', 'Rohit'),
('Monday', '17:00-20:00', 'F001', 'F02', 'Mathematics', 'Anushri'),
('Monday', '17:00-20:00', 'D001', 'D02', 'Physics', 'Rutuja'),
('Monday', '17:00-20:00', 'D002', 'D03', 'Chemistry', 'Anushka'),
('Tuesday', '8:00-11:00', 'M001', 'M01', 'Chemistry', 'Rohit'),
('Tuesday', '8:00-11:00', 'A001', 'A01', 'Chemistry', 'Anushka'),
('Tuesday', '8:00-11:00', 'F001', 'F01', 'Mathematics', 'Prasanav'),
('Tuesday', '8:00-11:00', 'D001', 'D01', 'Mathematics', 'Anushri'),
('Tuesday', '11:00-14:00', 'M001', 'M01', 'Physics', 'Rutuja'),
('Tuesday', '11:00-14:00', 'M002', 'M03', 'Chemistry', 'Rohit'),
('Tuesday', '11:00-14:00', 'A001', 'A01', 'Mathematics', 'Prasanav'),
('Tuesday', '11:00-14:00', 'A002', 'A03', 'Chemistry', 'Anushka'),
('Tuesday', '11:00-14:00', 'F001', 'F01', 'Physics', 'Dhiren'),
('Tuesday', '11:00-14:00', 'F002', 'F03', 'Mathematics', 'Anushri'),
('Tuesday', '11:00-14:00', 'D001', 'D01', 'Biology', 'Shivam'),
('Tuesday', '14:00-17:00', 'M001', 'M02', 'Chemistry', 'Rohit'),
('Tuesday', '14:00-17:00', 'M002', 'M03', 'Physics', 'Rutuja'),
('Tuesday', '14:00-17:00', 'A001', 'A02', 'Chemistry', 'Anushka'),
('Tuesday', '14:00-17:00', 'A002', 'A03', 'Mathematics', 'Anushri'),
('Tuesday', '14:00-17:00', 'F001', 'F02', 'Mathematics', 'Prasanav'),
('Tuesday', '14:00-17:00', 'F002', 'F03', 'Physics', 'Dhiren'),
('Tuesday', '14:00-17:00', 'D001', 'D02', 'Biology', 'Shivam'),
('Tuesday', '14:00-17:00', 'D002', 'D03', 'Biology', 'Radha'),
('Tuesday', '17:00-20:00', 'M001', 'M02', 'Physics', 'Rutuja'),
('Tuesday', '17:00-20:00', 'A001', 'A02', 'Mathematics', 'Prasanav'),
('Tuesday', '17:00-20:00', 'F001', 'F02', 'Physics', 'Dhiren'),
('Tuesday', '17:00-20:00', 'D001', 'D02', 'Chemistry', 'Rohit'),
('Tuesday', '17:00-20:00', 'D002', 'D03', 'Mathematics', 'Anushri'),
('Wednesday', '8:00-11:00', 'M001', 'M01', 'Mathematics', 'Prasanav'),
('Wednesday', '8:00-11:00', 'A001', 'A01', 'Mathematics', 'Anushri'),
('Wednesday', '8:00-11:00', 'F001', 'F01', 'Physics', 'Rutuja'),
('Wednesday', '8:00-11:00', 'D001', 'D01', 'Physics', 'Dhiren'),
('Wednesday', '8:00-11:00', 'M001', 'M01', 'Mathematics', 'Prasanav'),
('Wednesday', '11:00-14:00', 'M001', 'M01', 'Chemistry', 'Rohit'),
('Wednesday', '11:00-14:00', 'M002', 'M03', 'Mathematics', 'Prasanav'),
('Wednesday', '11:00-14:00', 'A001', 'A01', 'Physics', 'Rutuja'),
('Wednesday', '11:00-14:00', 'A002', 'A03', 'Mathematics', 'Anushri'),
('Wednesday', '11:00-14:00', 'F001', 'F01', 'Chemistry', 'Anushka'),
('Wednesday', '11:00-14:00', 'F002', 'F03', 'Physics', 'Dhiren'),
('Wednesday', '11:00-14:00', 'D001', 'D01', 'Biology', 'Shivam'),
('Wednesday', '14:00-17:00', 'M001', 'M02', 'Mathematics', 'Prasanav'),
('Wednesday', '14:00-17:00', 'M002', 'M03', 'Chemistry', 'Rohit'),
('Wednesday', '14:00-17:00', 'A001', 'A02', 'Mathematics', 'Prasanav'),
('Wednesday', '14:00-17:00', 'A002', 'A03', 'Physics', 'Rutuja'),
('Wednesday', '14:00-17:00', 'F001', 'F02', 'Physics', 'Dhiren'),
('Wednesday', '14:00-17:00', 'F002', 'F03', 'Chemistry', 'Anushka'),
('Wednesday', '14:00-17:00', 'D001', 'D02', 'Biology', 'Shivam'),
('Wednesday', '14:00-17:00', 'D002', 'D03', 'Biology', 'Radha'),
('Wednesday', '17:00-20:00', 'M002', 'M02', 'Chemistry', 'Rohit'),
('Wednesday', '17:00-20:00', 'A002', 'A02', 'Physics', 'Rutuja'),
('Wednesday', '17:00-20:00', 'F002', 'F02', 'Chemistry', 'Anushka'),
('Wednesday', '17:00-20:00', 'D002', 'D02', 'Mathematics', 'Prasanav'),
('Wednesday', '17:00-20:00', 'D001', 'D03', 'Physics', 'Dhiren'),
('Thursday', '8:00-11:00', 'M001', 'M01', 'Physics', 'Rutuja'),
('Thursday', '8:00-11:00', 'A001', 'A01', 'Physics', 'Dhiren'),
('Thursday', '8:00-11:00', 'F001', 'F01', 'Chemistry', 'Anushka'),
('Thursday', '8:00-11:00', 'D001', 'D01', 'Chemistry', 'Rohit'),
('Thursday', '11:00-14:00', 'M001', 'M01', 'Mathematics', 'Prasanav'),
('Thursday', '11:00-14:00', 'A001', 'A01', 'Chemistry', 'Rohit'),
('Thursday', '11:00-14:00', 'F001', 'F01', 'Mathematics', 'Anushri'),
('Thursday', '14:00-17:00', 'F002', 'F03', 'Mathematics', 'Anushri'),
('Thursday', '14:00-17:00', 'D001', 'D02', 'Biology', 'Shivam'),
('Thursday', '14:00-17:00', 'D002', 'D03', 'Biology', 'Radha'),
('Thursday', '17:00-20:00', 'M001', 'M02', 'Mathematics', 'Prasanav'),
('Thursday', '17:00-20:00', 'A001', 'A02', 'Chemistry', 'Rohit'),
('Thursday', '17:00-20:00', 'F001', 'F02', 'Mathematics', 'Anushri'),
('Thursday', '17:00-20:00', 'D001', 'D02', 'Physics', 'Rutuja'),
('Thursday', '17:00-20:00', 'D002', 'D03', 'Chemistry', 'Anushka'),
('Friday', '8:00-11:00', 'M001', 'M01', 'Chemistry', 'Rohit'),
('Friday', '8:00-11:00', 'A001', 'A01', 'Chemistry', 'Anushka'),
('Friday', '8:00-11:00', 'F001', 'F01', 'Mathematics', 'Prasanav'),
('Friday', '8:00-11:00', 'D001', 'D01', 'Mathematics', 'Anushri'),
('Friday', '11:00-14:00', 'M001', 'M01', 'Physics', 'Rutuja'),
('Friday', '11:00-14:00', 'M002', 'M03', 'Chemistry', 'Rohit'),
('Friday', '11:00-14:00', 'A001', 'A01', 'Mathematics', 'Prasanav'),
('Friday', '11:00-14:00', 'A002', 'A03', 'Chemistry', 'Anushka'),
('Friday', '11:00-14:00', 'F001', 'F01', 'Physics', 'Dhiren'),
('Friday', '11:00-14:00', 'F002', 'F03', 'Mathematics', 'Anushri'),
('Friday', '11:00-14:00', 'D001', 'D01', 'Biology', 'Shivam'),
('Friday', '14:00-17:00', 'M001', 'M02', 'Chemistry', 'Rohit'),
('Friday', '14:00-17:00', 'M002', 'M03', 'Physics', 'Rutuja'),
('Friday', '14:00-17:00', 'A001', 'A02', 'Chemistry', 'Anushka'),
('Friday', '14:00-17:00', 'A002', 'A03', 'Mathematics', 'Anushri'),
('Friday', '14:00-17:00', 'F001', 'F02', 'Mathematics', 'Prasanav'),
('Friday', '14:00-17:00', 'F002', 'F03', 'Physics', 'Dhiren'),
('Friday', '14:00-17:00', 'D001', 'D02', 'Biology', 'Shivam'),
('Friday', '14:00-17:00', 'D002', 'D03', 'Biology', 'Radha'),
('Friday', '17:00-20:00', 'M001', 'M02', 'Physics', 'Rutuja'),
('Friday', '17:00-20:00', 'A001', 'A02', 'Mathematics', 'Prasanav'),
('Friday', '17:00-20:00', 'F001', 'F02', 'Physics', 'Dhiren'),
('Friday', '17:00-20:00', 'D001', 'D02', 'Chemistry', 'Rohit'),
('Friday', '17:00-20:00', 'D002', 'D03', 'Mathematics', 'Anushri'),
('Saturday', '8:00-11:00', 'M001', 'M01', 'Mathematics', 'Prasanav'),
('Saturday', '8:00-11:00', 'A001', 'A01', 'Mathematics', 'Anushri'),
('Saturday', '8:00-11:00', 'F001', 'F01', 'Physics', 'Rutuja'),
('Saturday', '8:00-11:00', 'D001', 'D01', 'Physics', 'Dhiren'),
('Saturday', '8:00-11:00', 'M001', 'M01', 'Mathematics', 'Prasanav'),
('Saturday', '11:00-14:00', 'M001', 'M01', 'Chemistry', 'Rohit'),
('Saturday', '11:00-14:00', 'M002', 'M03', 'Mathematics', 'Prasanav'),
('Saturday', '11:00-14:00', 'A001', 'A01', 'Physics', 'Rutuja'),
('Saturday', '11:00-14:00', 'A002', 'A03', 'Mathematics', 'Anushri'),
('Saturday', '11:00-14:00', 'F001', 'F01', 'Chemistry', 'Anushka'),
('Saturday', '11:00-14:00', 'F002', 'F03', 'Physics', 'Dhiren'),
('Saturday', '11:00-14:00', 'D001', 'D01', 'Biology', 'Shivam'),
('Saturday', '14:00-17:00', 'M001', 'M02', 'Mathematics', 'Prasanav'),
('Saturday', '14:00-17:00', 'M002', 'M03', 'Chemistry', 'Rohit'),
('Saturday', '14:00-17:00', 'A001', 'A02', 'Mathematics', 'Prasanav'),
('Saturday', '14:00-17:00', 'A002', 'A03', 'Physics', 'Rutuja'),
('Saturday', '14:00-17:00', 'F001', 'F02', 'Physics', 'Dhiren'),
('Saturday', '14:00-17:00', 'F002', 'F03', 'Chemistry', 'Anushka'),
('Saturday', '14:00-17:00', 'D001', 'D02', 'Biology', 'Shivam'),
('Saturday', '14:00-17:00', 'D002', 'D03', 'Biology', 'Radha'),
('Saturday', '17:00-20:00', 'M002', 'M02', 'Chemistry', 'Rohit'),
('Saturday', '17:00-20:00', 'A002', 'A02', 'Physics', 'Rutuja'),
('Saturday', '17:00-20:00', 'F002', 'F02', 'Chemistry', 'Anushka'),
('Saturday', '17:00-20:00', 'D002', 'D02', 'Mathematics', 'Prasanav'),
('Saturday', '17:00-20:00', 'D001', 'D03', 'Physics', 'Dhiren'),
('Tuesday', '02:00-05:00', 'M002', 'A03', 'Mathematics', 'Rohit'),
('Tuesday', '02:00-05:00', 'A002', 'A02', 'Chemistry', 'Rohit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Login_ID`);

--
-- Indexes for table `login_master`
--
ALTER TABLE `login_master`
  ADD PRIMARY KEY (`Login_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Login_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Login_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300021;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
