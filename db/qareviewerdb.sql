-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 01:30 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qareviewerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `AnswerID` int(11) NOT NULL,
  `QuestionID` int(11) DEFAULT NULL,
  `Answer` varchar(255) DEFAULT NULL,
  `Reference` varchar(255) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `NumberEvaluaters` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`AnswerID`, `QuestionID`, `Answer`, `Reference`, `UserID`, `CreatedDate`, `NumberEvaluaters`) VALUES
(1, 1, 'The current president of the United States is Joe Biden.', 'Source 1', 2, '2023-07-01 11:49:29', 2),
(2, 1, 'Joe Biden is the president of the United States.', 'Source 2', 3, '2023-07-01 11:49:29', 2),
(3, 1, 'Donald Trump is the former president of the United States.', 'Source 3', 4, '2023-07-01 11:49:29', 1),
(4, 2, 'The capital city of France is Paris.', 'Source 4', 1, '2023-07-01 11:49:29', 0),
(5, 2, 'Paris is the capital of France.', 'Source 5', 3, '2023-07-01 11:49:29', 0),
(6, 2, 'France has Paris as its capital city.', 'Source 6', 5, '2023-07-01 11:49:29', 0),
(7, 3, 'Photosynthesis is the process by which green plants use sunlight to synthesize foods.', 'Source 7', 2, '2023-07-01 11:49:29', 0),
(8, 3, 'Plants convert carbon dioxide and water into glucose and oxygen during photosynthesis.', 'Source 8', 4, '2023-07-01 11:49:29', 0),
(9, 3, 'Sunlight is necessary for photosynthesis to occur in plants.', 'Source 9', 5, '2023-07-01 11:49:29', 0),
(10, 4, 'Smartphones have features such as a touchscreen, camera, internet connectivity, and apps.', 'Source 10', 1, '2023-07-01 11:49:29', 0),
(11, 4, 'They can be used for communication, entertainment, and productivity.', 'Source 11', 3, '2023-07-01 11:49:29', 0),
(12, 5, 'To bake a chocolate cake, you need ingredients such as flour, sugar, cocoa powder, eggs, and butter.', 'Source 12', 2, '2023-07-01 11:49:29', 0),
(13, 5, 'Mix the dry and wet ingredients, then bake the batter in a preheated oven.', 'Source 13', 4, '2023-07-01 11:49:29', 0),
(16, 9, 'Apple', 'Source1', 6, '2023-07-02 16:35:38', NULL),
(18, 9, 'apple', 'Source4', 6, '2023-07-02 16:38:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `answer_evaluates`
--

CREATE TABLE `answer_evaluates` (
  `EvaluateID` int(11) NOT NULL,
  `AnswerID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `RateCategory` varchar(30) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer_evaluates`
--

INSERT INTO `answer_evaluates` (`EvaluateID`, `AnswerID`, `UserID`, `RateCategory`, `CreatedDate`) VALUES
(1, 1, 3, '5STAR', '2023-07-01 11:49:29'),
(2, 1, 4, '4STAR', '2023-07-01 11:49:29'),
(3, 2, 1, '3STAR', '2023-07-01 11:49:29'),
(4, 2, 2, '2STAR', '2023-07-01 11:49:29'),
(5, 3, 5, '1STAR', '2023-07-01 11:49:29'),
(6, 1, 6, '2STAR', '2023-07-02 17:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QuestionID` int(11) NOT NULL,
  `Question` varchar(255) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Tags` varchar(255) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `NumberAnswerers` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QuestionID`, `Question`, `UserID`, `Tags`, `CreatedDate`, `NumberAnswerers`) VALUES
(1, 'Who is the president of the United States?', 1, 'Politics, Government', '2023-07-01 11:49:29', 3),
(2, 'What is the capital city of France?', 2, 'Geography, Travel', '2023-07-01 11:49:29', 3),
(3, 'How does photosynthesis work?', 3, 'Biology, Science', '2023-07-01 11:49:29', 3),
(4, 'What are the main features of a smartphone?', 4, 'Technology, Gadgets', '2023-07-01 11:49:29', 2),
(5, 'How do you bake a chocolate cake?', 5, 'Baking, Food', '2023-07-01 11:49:29', 2),
(9, 'Trái táo tiếng anh là gì ?', 6, 'Fruit, English', '2023-07-02 15:47:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `Role` varchar(30) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `Role`, `Password`) VALUES
(1, 'User1', 'Evaluater', '$2a$10$wogd2gthxx6/Xr5CTCJOnOEDsNsDgHLLmTELVAcAUTUAx71GoSx6i'),
(2, 'User2', 'Answerer', '$2a$10$wogd2gthxx6/Xr5CTCJOnOEDsNsDgHLLmTELVAcAUTUAx71GoSx6i'),
(3, 'User3', 'Evaluater', '$2a$10$wogd2gthxx6/Xr5CTCJOnOEDsNsDgHLLmTELVAcAUTUAx71GoSx6i'),
(4, 'User4', 'Questioner', '$2a$10$wogd2gthxx6/Xr5CTCJOnOEDsNsDgHLLmTELVAcAUTUAx71GoSx6i'),
(5, 'User5', 'Questioner', '$2a$10$wogd2gthxx6/Xr5CTCJOnOEDsNsDgHLLmTELVAcAUTUAx71GoSx6i'),
(6, 'Admin', 'Admin', '$2a$10$wogd2gthxx6/Xr5CTCJOnOEDsNsDgHLLmTELVAcAUTUAx71GoSx6i'),
(7, 'User6', 'Answerer', '$2a$10$wogd2gthxx6/Xr5CTCJOnOEDsNsDgHLLmTELVAcAUTUAx71GoSx6i'),
(8, 'User7', 'Viewer', '$2a$10$wogd2gthxx6/Xr5CTCJOnOEDsNsDgHLLmTELVAcAUTUAx71GoSx6i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`AnswerID`),
  ADD KEY `QuestionID` (`QuestionID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `answer_evaluates`
--
ALTER TABLE `answer_evaluates`
  ADD PRIMARY KEY (`EvaluateID`),
  ADD KEY `AnswerID` (`AnswerID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QuestionID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `AnswerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `answer_evaluates`
--
ALTER TABLE `answer_evaluates`
  MODIFY `EvaluateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `QuestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`QuestionID`) REFERENCES `questions` (`QuestionID`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE;

--
-- Constraints for table `answer_evaluates`
--
ALTER TABLE `answer_evaluates`
  ADD CONSTRAINT `answer_evaluates_ibfk_1` FOREIGN KEY (`AnswerID`) REFERENCES `answers` (`AnswerID`) ON DELETE CASCADE,
  ADD CONSTRAINT `answer_evaluates_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
