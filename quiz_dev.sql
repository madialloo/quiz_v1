-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2018 at 12:38 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_dev`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `DATA_QUIZ`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `DATA_QUIZ` ()  BEGIN
    SELECT *  FROM T_QUIZ_QUIZ WHERE QUIZ_ID = 1;
END$$

DROP PROCEDURE IF EXISTS `DATA_QUIZ_QUESTION`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `DATA_QUIZ_QUESTION` ()  BEGIN
    SELECT *  FROM T_QUIZ_QUIZ WHERE QUIZ_ID IN (
        SELECT t_quiz_quiz.QUIZ_ID
        FROM T_QUIZ_QUIZ
        JOIN T_QUESTION_QTN ON T_QUIZ_QUIZ.QUIZ_ID = T_QUESTION_QTN.QUIZ_ID
        WHERE t_quiz_quiz.QUIZ_ID = 3
    );
END$$

DROP PROCEDURE IF EXISTS `testSelect`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `testSelect` (OUT `param1` INT)  BEGIN
    SELECT COUNT(*) INTO param1 FROM T_QUIZ_QUIZ;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `t_actualites_act`
--

DROP TABLE IF EXISTS `t_actualites_act`;
CREATE TABLE IF NOT EXISTS `t_actualites_act` (
  `ACT_ID` int(20) NOT NULL AUTO_INCREMENT,
  `ACT_INTITULE` varchar(150) NOT NULL,
  `ACT_DESCRIPTION` varchar(500) NOT NULL,
  `ACT_DATE_DEBUT` date NOT NULL,
  `ACT_DATE_FIN` date NOT NULL,
  `CPT_PSEUDO` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ACT_ID`),
  KEY `CPT_PSEUDO` (`CPT_PSEUDO`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_actualites_act`
--

INSERT INTO `t_actualites_act` (`ACT_ID`, `ACT_INTITULE`, `ACT_DESCRIPTION`, `ACT_DATE_DEBUT`, `ACT_DATE_FIN`, `CPT_PSEUDO`) VALUES
(1, 'Russia GRU claims: UK points finger at Kremlin military intelligence', 'The UK government has accused Russia military intelligence service of being behind four high-profile cyber-attacks.\r\n\r\nThe National Cyber Security Centre says targets included firms in Russia and Ukraine; the US Democratic Party; and a small TV network in the UK.\r\n\r\nA Russian foreign ministry spokeswoman described the accusation as a \"rich fantasy of our colleagues from Britain\".\r\n\r\nWorld Anti-Doping Agency computers are also said to have been attacked.\r\n\r\nFiles later emerged showing how British', '2018-10-11', '2018-10-13', 'responsable'),
(2, 'WhatsApp fixes booby-trap video call bug', 'Answering a booby-trapped video call via the WhatsApp messaging service could force the app to crash and close, a security expert has found.\r\n\r\nThe bug was a \"big deal\" said researcher Tavis Ormandy, who is part of the team that found it.\r\n\r\nIt was found in the messaging services apps used on Android and Apple smartphones.\r\n\r\nThe software loophole was discovered in late August and fixed in early October, said WhatsApps owner Facebook.\r\n\r\nNatalie Silvanovich, a member of a team Google set up to h', '2018-10-12', '2018-10-13', 'formateur8'),
(3, 'How to Delete Facebook and Instagram From Your Life Forever', 'You may have decided enough is enough: It’s time to delete Facebook.\r\n\r\nThere have been months — or is it years now? — of bad news about the social network. Last month, Facebook revealed that a security vulnerability exposed up to 50 million accounts to being hijacked by hackers. Through the vulnerability, a hacker could take over your account — meaning anything you ever posted on Facebook, or even apps that you connected with using your Facebook account, could have been infiltrated.\r\n\r\nThe comp', '2018-10-09', '2018-10-10', 'mdiallo'),
(4, 'Setting Up Your Tech on the Assumption You’ll Be Hacked', 'How do New York Times journalists use technology in their jobs and in their personal lives? Sheera Frenkel, a technology reporter in San Francisco, discussed the tech she’s using.\r\n\r\nQ. You cover cybersecurity and are extra careful about the security of your devices, apps and communications. What does your setup look like?\r\n\r\nA. I go into this job every day assuming that I’ve already been hacked. Being on the defensive keeps me vigilant about where I’ve left myself vulnerable in my day-to-day us', '2018-09-09', '2018-09-11', 'formateur7'),
(5, 'Network commands for Windows and Linux', 'BASIC NETWORK COMMANDS THAT EVERY ADMINISTRATOR SHOULD KNOW\r\nIn this article we will go through different network commands for Windows and Linux, this is essential for any network Administrator. These network commands, can be used separately or can be combined with Pandora FMS to monitor in real time, or as part of a long-term strategy. This post along with the network tools one, will serve to better manage your network and your time.\r\n\r\nIf you do not know about Pandora FMS, we invite you to vis', '2017-07-19', '2017-07-21', 'formateur5');

-- --------------------------------------------------------

--
-- Table structure for table `t_compte_cpt`
--

DROP TABLE IF EXISTS `t_compte_cpt`;
CREATE TABLE IF NOT EXISTS `t_compte_cpt` (
  `CPT_PSEUDO` varchar(25) NOT NULL,
  `CPT_MOTDEPASSE` varchar(255) DEFAULT NULL,
  `CPT_NOM` varchar(50) DEFAULT NULL,
  `CPT_PRENOM` varchar(255) NOT NULL,
  `CPT_TYPE` varchar(25) NOT NULL,
  `CPT_ACTIF` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`CPT_PSEUDO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_compte_cpt`
--

INSERT INTO `t_compte_cpt` (`CPT_PSEUDO`, `CPT_MOTDEPASSE`, `CPT_NOM`, `CPT_PRENOM`, `CPT_TYPE`, `CPT_ACTIF`) VALUES
('formateur5', '6df947313fe31c10c193464c2f10ab8ed858aabccafafe21742e9b5aaa473cb6', 'TEUR5', 'FORMA5', 'Formateur', 1),
('formateur7', '89150f9f4936f5d332530fffb6a30b8100af87cb3b11afec79b7807f042ef50e', 'TEUR7', 'FORMA7', 'Formateur', 1),
('formateur8', '4f3957dd81fc8537409b8a47ee8b44e63698a40e8ba8fa62636ba344521bd796', 'TEUR8', 'FORMA8', 'Formateur', 1),
('LABULABU', 'DOUDLABU', 'NANGA', 'CATHERINE', 'ADMINISTRATEUR', 1),
('mdiallo', '91c533c97b07e841c2a5ceb39272741aaa90dd1d7360bf61a8389eedd657a69e', 'DIALLO', 'Aliou', 'Administrator', 0),
('responsable', 'af9bee4c90d4f06dec7dda195ec0bcebf0d6f95c34981c1af31b39ddae369236', 'responsable', 'Admin Ppal', 'Administrator', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_joueur_jou`
--

DROP TABLE IF EXISTS `t_joueur_jou`;
CREATE TABLE IF NOT EXISTS `t_joueur_jou` (
  `JOU_ID` int(20) NOT NULL AUTO_INCREMENT,
  `JOU_PSEUDO` varchar(25) NOT NULL,
  `JOU_SCORE` int(20) NOT NULL,
  `MAT_ID` int(20) DEFAULT NULL,
  PRIMARY KEY (`JOU_ID`),
  KEY `MAT_ID` (`MAT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_joueur_jou`
--

INSERT INTO `t_joueur_jou` (`JOU_ID`, `JOU_PSEUDO`, `JOU_SCORE`, `MAT_ID`) VALUES
(1, 'mdiallo29', 100, 2),
(2, 'JOUEURL3', 1000, 1),
(3, 'lduval', 900, 4),
(4, 'rubini', 11000, 5),
(5, 'emilie', 700, 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_match_mat`
--

DROP TABLE IF EXISTS `t_match_mat`;
CREATE TABLE IF NOT EXISTS `t_match_mat` (
  `MAT_ID` int(20) NOT NULL AUTO_INCREMENT,
  `MAT_CODE` varchar(25) NOT NULL,
  `MAT_SITUATION` varchar(25) NOT NULL,
  `MAT_DATE_DEBUT` date NOT NULL,
  `MAT_DATE_FIN` date NOT NULL,
  `CPT_PSEUDO` varchar(25) DEFAULT NULL,
  `QUIZ_ID` int(20) DEFAULT NULL,
  PRIMARY KEY (`MAT_ID`),
  KEY `CPT_PSEUDO` (`CPT_PSEUDO`),
  KEY `QUIZ_ID` (`QUIZ_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_match_mat`
--

INSERT INTO `t_match_mat` (`MAT_ID`, `MAT_CODE`, `MAT_SITUATION`, `MAT_DATE_DEBUT`, `MAT_DATE_FIN`, `CPT_PSEUDO`, `QUIZ_ID`) VALUES
(1, 'MAT123IF', 'standby', '2018-11-20', '2018-11-21', 'responsable', 5),
(2, 'MAT143II', 'standby', '2018-11-20', '2018-11-21', 'responsable', 4),
(3, 'MAT127ID', 'standby', '2018-11-20', '2018-11-21', 'responsable', 2),
(4, 'MAT365IC', 'standby', '2018-11-20', '2018-11-21', 'responsable', 3),
(5, 'MAT789IZ', 'standby', '2018-11-20', '2018-11-21', 'responsable', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_question_qtn`
--

DROP TABLE IF EXISTS `t_question_qtn`;
CREATE TABLE IF NOT EXISTS `t_question_qtn` (
  `QTN_ID` int(20) NOT NULL AUTO_INCREMENT,
  `QTN_LIBELLE` varchar(255) NOT NULL,
  `QTN_TYPE` varchar(25) NOT NULL,
  `QTN_ORDRE` int(20) NOT NULL,
  `QTN_ETAT` tinyint(1) NOT NULL,
  `QTN_NBPOINTS` int(20) DEFAULT NULL,
  `QUIZ_ID` int(20) DEFAULT NULL,
  PRIMARY KEY (`QTN_ID`),
  KEY `QUIZ_ID` (`QUIZ_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_question_qtn`
--

INSERT INTO `t_question_qtn` (`QTN_ID`, `QTN_LIBELLE`, `QTN_TYPE`, `QTN_ORDRE`, `QTN_ETAT`, `QTN_NBPOINTS`, `QUIZ_ID`) VALUES
(1, 'Which of the following is most likely to send spam emails from your computer?', 'type_xxxx', 1, 1, 5, 1),
(2, 'How many OSI layers are there?', 'type_xxxx', 1, 1, 9, 3),
(3, 'At which layer do router devices operate?', 'type_xxxx', 1, 1, 10, 2),
(4, 'The Session layer communicates with which other layers?', 'type_xxxx', 1, 1, 3, 5),
(5, 'What devices operate at the Data Link Layer?', 'type_xxxx', 5, 1, 7, 4),
(6, 'What devices operate at the Data Link Layer?', 'type_xxxx', 2, 1, 7, 1),
(7, 'The Session layer communicates with which other layers?', 'type_xxxx', 2, 1, 7, 2),
(8, 'What devices operate at the Data Link Layer?', 'type_xxxx', 2, 1, 7, 3),
(9, 'The Session layer communicates with which other layers?', 'type_xxxx', 2, 1, 7, 4),
(10, 'What devices operate at the Data Link Layer?', 'type_xxxx', 3, 1, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_quiz_quiz`
--

DROP TABLE IF EXISTS `t_quiz_quiz`;
CREATE TABLE IF NOT EXISTS `t_quiz_quiz` (
  `QUIZ_ID` int(20) NOT NULL AUTO_INCREMENT,
  `QUIZ_INTITULE` varchar(50) NOT NULL,
  `QUIZ_DESCRIPTIF` varchar(255) NOT NULL,
  `QUIZ_IMG` varchar(25) NOT NULL,
  `QUIZ_ETAT` tinyint(1) NOT NULL,
  `CPT_PSEUDO` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`QUIZ_ID`),
  KEY `CPT_PSEUDO` (`CPT_PSEUDO`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_quiz_quiz`
--

INSERT INTO `t_quiz_quiz` (`QUIZ_ID`, `QUIZ_INTITULE`, `QUIZ_DESCRIPTIF`, `QUIZ_IMG`, `QUIZ_ETAT`, `CPT_PSEUDO`) VALUES
(1, 'Basic Network', 'This quiz contains questions related to basic network terms and components of a network and in the latest.', 'basic_network.png', 0, 'responsable'),
(2, 'Basic Network', 'This quiz contains questions related to basic network terms and components of a network and in the latest.', 'basic_network.png', 0, 'mdiallo'),
(3, 'Basic Network', 'This quiz contains questions related to basic network terms and components of a network and in the latest.', 'basic_network.png', 0, 'formateur5'),
(4, 'Basic Network', 'This quiz contains questions related to basic network terms and components of a network and in the latest.', 'basic_network.png', 0, 'formateur7'),
(5, 'Basic Network', 'This quiz contains questions related to basic network terms and components of a network and in the latest.', 'basic_network.png', 0, 'formateur8');

-- --------------------------------------------------------

--
-- Table structure for table `t_reponse_rep`
--

DROP TABLE IF EXISTS `t_reponse_rep`;
CREATE TABLE IF NOT EXISTS `t_reponse_rep` (
  `REP_ID` int(20) NOT NULL AUTO_INCREMENT,
  `REP_LIBELLE` varchar(255) NOT NULL,
  `REP_VALEUR` int(20) NOT NULL,
  `QTN_ID` int(20) DEFAULT NULL,
  PRIMARY KEY (`REP_ID`),
  KEY `QTN_ID` (`QTN_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_reponse_rep`
--

INSERT INTO `t_reponse_rep` (`REP_ID`, `REP_LIBELLE`, `REP_VALEUR`, `QTN_ID`) VALUES
(1, 'A computer not connected to a network.', 3, 1),
(2, 'A computer not connected to a network.A computer not connected to a network.', 3, 2),
(3, 'A computer not connected to a network.', 3, 3),
(4, 'A computer not connected to a network.', 3, 4),
(5, 'A computer not connected to a network.', 3, 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_actualites_act`
--
ALTER TABLE `t_actualites_act`
  ADD CONSTRAINT `t_actualites_act_ibfk_1` FOREIGN KEY (`CPT_PSEUDO`) REFERENCES `t_compte_cpt` (`CPT_PSEUDO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_joueur_jou`
--
ALTER TABLE `t_joueur_jou`
  ADD CONSTRAINT `t_joueur_jou_ibfk_1` FOREIGN KEY (`MAT_ID`) REFERENCES `t_match_mat` (`MAT_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_match_mat`
--
ALTER TABLE `t_match_mat`
  ADD CONSTRAINT `t_match_mat_ibfk_1` FOREIGN KEY (`CPT_PSEUDO`) REFERENCES `t_compte_cpt` (`CPT_PSEUDO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_match_mat_ibfk_2` FOREIGN KEY (`QUIZ_ID`) REFERENCES `t_quiz_quiz` (`QUIZ_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_question_qtn`
--
ALTER TABLE `t_question_qtn`
  ADD CONSTRAINT `t_question_qtn_ibfk_1` FOREIGN KEY (`QUIZ_ID`) REFERENCES `t_quiz_quiz` (`QUIZ_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_quiz_quiz`
--
ALTER TABLE `t_quiz_quiz`
  ADD CONSTRAINT `t_quiz_quiz_ibfk_1` FOREIGN KEY (`CPT_PSEUDO`) REFERENCES `t_compte_cpt` (`CPT_PSEUDO`) ON UPDATE CASCADE;

--
-- Constraints for table `t_reponse_rep`
--
ALTER TABLE `t_reponse_rep`
  ADD CONSTRAINT `t_reponse_rep_ibfk_1` FOREIGN KEY (`QTN_ID`) REFERENCES `t_question_qtn` (`QTN_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
