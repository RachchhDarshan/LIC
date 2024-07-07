-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 04:09 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_no_302`
--

CREATE TABLE `form_no_302` (
  `id` int(100) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Father_full_name` varchar(30) NOT NULL,
  `Mother_full_name` varchar(30) NOT NULL,
  `Wife_full_name` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Merried` varchar(10) NOT NULL,
  `Birth_date` int(10) NOT NULL,
  `Age` int(100) NOT NULL,
  `Proof_of_age_provided` varchar(20) NOT NULL,
  `Birth_place` varchar(20) NOT NULL,
  `Nationality` varchar(10) NOT NULL,
  `Citizenship` varchar(20) NOT NULL,
  `Correspondence_address` varchar(20) NOT NULL,
  `House_no1` varchar(20) NOT NULL,
  `City` varchar(10) NOT NULL,
  `District` varchar(15) NOT NULL,
  `State` varchar(10) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Pin_code` int(10) NOT NULL,
  `S_T_D` varchar(20) NOT NULL,
  `Policy_name` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `House_no2` varchar(40) NOT NULL,
  `City2` varchar(20) NOT NULL,
  `District2` varchar(10) NOT NULL,
  `State2` varchar(10) NOT NULL,
  `Country2` varchar(15) NOT NULL,
  `Pin_code2` varchar(10) NOT NULL,
  `S_T_D2` int(10) NOT NULL,
  `Name_address_of_heir` varchar(30) NOT NULL,
  `Percentage_share` varchar(100) NOT NULL,
  `Age2` int(100) NOT NULL,
  `Relationship_with_insured` varchar(50) NOT NULL,
  `Heirs_minor` varchar(20) NOT NULL,
  `Relation_of_appointee_to_heir` varchar(50) NOT NULL,
  `Consent_signature_of_designated_person` varchar(50) NOT NULL,
  `Id_number` int(10) NOT NULL,
  `Types_of_account` varchar(20) NOT NULL,
  `Account_no` int(12) NOT NULL,
  `Micer_code` int(20) NOT NULL,
  `I_F_S_C` int(15) NOT NULL,
  `Bank_name` varchar(20) NOT NULL,
  `Mobile_number` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `His_signature_is_to_be_insured` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_no_302`
--

INSERT INTO `form_no_302` (`id`, `User_id`, `Name`, `Father_full_name`, `Mother_full_name`, `Wife_full_name`, `Gender`, `Merried`, `Birth_date`, `Age`, `Proof_of_age_provided`, `Birth_place`, `Nationality`, `Citizenship`, `Correspondence_address`, `House_no1`, `City`, `District`, `State`, `Country`, `Pin_code`, `S_T_D`, `Policy_name`, `Address`, `House_no2`, `City2`, `District2`, `State2`, `Country2`, `Pin_code2`, `S_T_D2`, `Name_address_of_heir`, `Percentage_share`, `Age2`, `Relationship_with_insured`, `Heirs_minor`, `Relation_of_appointee_to_heir`, `Consent_signature_of_designated_person`, `Id_number`, `Types_of_account`, `Account_no`, `Micer_code`, `I_F_S_C`, `Bank_name`, `Mobile_number`, `Email`, `His_signature_is_to_be_insured`) VALUES
(40, 11, 'darshan', 'sureshbhai', 'shilaben', 'love', 'male', 'non-marrid', 2, 18, 'xyz', 'rajkot', 'indian', 'indian', '58', 'jamnagar', 'jamnagar', 'jamnagar', 'gujarat', 'india', 361001, '565656', 'jivan vima', 'jamnagar', 'jamnagar', 'jamnara', 'jamnagar', 'gujarat', 'india', '361005', 565656, 'darshan', '50', 18, 'friend', 'shyam', 'friend', 'dsp', 123, 'saving', 113232323, 125, 23232, 'JAMA', 942587485, 'Love@gmail.com', ''),
(50, 8, 'darshit', 'sureshbhai', '', '', '', '', 0, 18, '', '', '', '', '', '', '', '', '', '', 0, '', '', 'jamnagae', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', 0, 0, 0, '', 1234567980, 'darshit@123gmail.com', ''),
(51, 11, 'parin', 'maheshbhai', 'xyz', 'xyz', 'male', 'non-marrid', 2, 18, 'xyz', 'rajkot', 'indian', 'indian', 'jamnagar', 'jamnagar', 'jamnagar', 'jamnagar', 'gujarat', 'india', 361001, '232323232', 'jivan vima', 'kalavad', 'jamnagar', 'jamnagar', 'jamnagar', 'gujarat', 'india', '361001', 22521455, 'parin', '50', 19, 'friend', 'shyam', 'friend', 'dsp', 123, 'saving', 1212212212, 22656565, 31313, 'jamnagar', 2147483647, 'parin@gmail.com', 'pn'),
(52, 11, 'shyam', 'Rajubhai', 'illa ben', 'xyz', 'male', 'non-marrid', 2, 18, 'xyz', 'rajkot', 'indian', 'indian', 'jamnagar', 'jamnagar', 'jamnagar', 'jamnagar', 'gujarat', 'india', 361001, '25252525', 'jivan chatri', 'rajkot', 'jamnagar', 'jamnara', 'jamnagar', 'gujarat', 'india', '2512121', 1214545468, 'shyam', '50', 18, 'friend', 'shyam', 'friend', 'shyam', 12022012, 'saving', 202020120, 145451215, 1212123232, 'jamnagar', 56565665, 'shyam@gmail.com', 'aa'),
(53, 11, 'meet', 'xyz', 'xyz', 'xyz', 'male', 'non-marrid', 10, 18, 'xyz', 'rajkot', 'indian', 'indian', 'jamnagar', 'jamnagar', 'jamnagar', 'jamnagar', 'gujarat', 'india', 361001, '255515123', 'life cancer pol', 'jamnagar', 'jamnagar', 'jamnagar', 'jamnagar', 'gujarat', 'india', '361001', 565656565, 'meet', '50', 18, 'friend', 'shyam', 'friend', 'meet', 323232, 'saving', 1313131, 1312121, 323232, 'jamnagar', 26262626, 'meet@gmail.com', 'met'),
(54, 20, 'Kl', '', '', '', '', '', 0, 25, '', '', '', '', '', '', '', '', '', '', 0, '', '', 'Rajkot ', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', 0, 0, 0, '', 2147483647, 'pobarudarshan2003@gmail.com', ''),
(55, 21, 'darshan', '', '', '', '', '', 0, 18, '', '', '', '', '', '', '', '', '', '', 0, '', '', 'Ty kk', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', 0, 0, 0, '', 2147483647, 'pobarudarshan2003@gmail.com', ''),
(56, 21, 'darshan', '', '', '', '', '', 0, 18, '', '', '', '', '', '', '', '', '', '', 0, '', '', 'Ty kk', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', 0, 0, 0, '', 2147483647, 'pobarudarshan2003@gmail.com', ''),
(57, 11, 'Abc', '', '', '', '', '', 0, 19, '', '', '', '', '', '', '', '', '', '', 0, '', '', 'Jamnagar ', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', 0, 0, 0, '', 2147483647, 'abc@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` int(10) NOT NULL,
  `policy_name` longtext NOT NULL,
  `policy_detail` longtext NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `policy_name`, `policy_detail`, `User_id`) VALUES
(47, 'LIC\'s Jeevan Arogya', '   LIC\'s Jeevan Arogya is a unique non-participating non-linked plan which provides health insurance cover against certain specified health risks and provides you with timely support in case of medical emergencies and helps you and your family remain financially independent in difficult times.\r\n\r\nHealth has been a major concern on everybody’s mind, including yours. In these days of skyrocketing medical expenses, when a family member is ill, it is a traumatic time for the rest of the family. As a caring person, you do not want to let any unfortunate incident to affect your plans for you and your family. So why let any medical emergencies shatter your peace of mind.\r\n\r\nfor more information follow this link :-\r\nhttps://licindia.in/Products/Withdrawn-Plans/Plan-parameter', 8),
(48, 'LIC\'s Cancer Cover', 'This is a fixed benefit health plan offering payouts for treatment of cancer. In case the customer is diagnosed with cancer, this plan will offer benefits irrespective of the costs incurred in the treatment. LIC Cancer Cover provides protection in case of Early Stage and Major Stage Cancer.\r\n\r\nfor more information follow this link :-\r\nhttps://licindia.in/Products/Withdrawn-Plans/LIC-s-Cancer-Cover', 8),
(49, 'LIC’s New Critical Illness Benefit Rider ', 'On first diagnosis of any one of the 15 Critical Illnesses as mentioned below, provided the same is admissible, the Critical Illness Sum Assured shall be payable. The Critical Illness Rider shall be payable only once during the term of the policy while the Policy is inforce. The Rider ceases to apply once the Critical Illness Sum Assured becomes payable.\r\n\r\nfor more information follow this link :-\r\nhttps://licindia.in/Products/Withdrawn-Plans/LIC-s-Critical-Illness-Benefit-Rider', 8),
(50, 'The Whole Life Policy', 'This plan is mainly devised to create an estate for the heirs of the policyholder as the plan basically provides for payment of sum assured plus bonuses on the death of the policyholder. However, considering the increased longevity of the Indian population, the Corporation has amended the above provision, thereby providing for payment of sum assured plus bonuses in the form of maturity claim on completion of age 80 years or on expiry of term of 40 years from date of commencement of the policy whichever is later.\r\n\r\nThe premiums under the policy are payable up to age 80 years of the policyholder or for a term of 35 years whichever is later.\r\n\r\nIf the payment of premium ceases after 3 years, a paid-up policy for such reduced sum assured will be automatically secured provided the reduced sum assured exclusive of any attached bonus is not less than Rs.250/-. Such reduced paid-up policy is not entitled to participate in the bonus declared thereafter but the bonuses already declared on the policy will remain attach, provided the policy is converted in to a paid-up policy after the premiums are paid for 5 years.\r\n \r\n\r\nfor more information follow this link :-\r\nhttps://licindia.in/Products/Withdrawn-Plans/The-Whole-Life-Policy.aspx', 11),
(51, 'The Whole Life Policy - Limited Payment ', 'This is the best form of life assurance for family provision since it enables the Life Assured to pay all the premiums during the ordinarily vigorous and most productive years of life. He need not pay any premium in the later stages of life if and when his conditions might become adverse. \r\n\r\nWith Profits Limited Payments Policies do not cease to participate in profits after completion of the premium paying period but continue to share in the periodical Bonus Distribution until the death of the Life Assured.The Without-Profit option is available under Table no. 3. \r\n\r\nIf the policyholder pays at least 3 years\' premiums and then discontinues paying any more premium, a reduced paid-up assurance policy comes into force.\r\n\r\nSuch a reduced paid-up Policy will not be entitled to participate in the profits declared thereafter, but such Bonus as has already been declared on the Policy will remain attached thereto. The premium paying term under this plan is five years minimum and 55 years maximum.\r\n\r\nfor more information follow this link :- \r\nhttps://licindia.in/Products/Withdrawn-Plans/The-Whole-Life-Policy-Limited-Payment', 11),
(52, 'LIC\'s Marriage Endowment/ Educational Annuity  ', 'This policy is suitable specially to meet the needs of marriage or higher education of the policyholder\'s children. It is a kind of an endowment policy in case of maturity. In case of early death of the policy holder the nominee will not get the S.A. and bonus immediately. Future premium are not payable after death of the policyholder the S.A. with bonus is payable only after the expiry of the term. In case of death caused by an accident, S.A. will be paid to the nominee immediately. At the maturity of the policy the policyholder can exercise option to take for the amount in lump sum or a convenient term can be chosen which can be used for future education of dependents.\r\n\r\nfor more information follow this link :- \r\nhttps://licindia.in/Products/Withdrawn-Plans/marriage-endowment.aspx', 8),
(53, 'LIC\'s Komal Jeevan', 'This is a Children\'s Money Back Plan that provides financial protection against death during the term of plan with periodic payments on survival at specified durations. This plan can be purchased by any of the parent or grand parent for a child aged 0 to 10 years.  \r\nfor more information follow this link :-\r\nhttps://licindia.in/Products/Withdrawn-Plans/Komal-Jeevan.aspx', 11),
(66, 'sasa', 'sasa', 8),
(72, 'zx', 'xx', 8),
(73, 'abc', 'abc', 8),
(75, 'div', 'div', 8),
(79, 'LIC’s New Jeevan Mangal ', 'LIC’s New Jeevan Mangal is a protection plan with return of premiums on maturity, where you may pay the premiums either in lump sum or regularly over the term of the policy. This plan has an in-built Accident Benefit which provides for double risk cover in case of accidental death.\r\n', 11),
(81, 'LIC\'s Jeevan Arogya', 'LIC\'s Jeevan Arogya is a unique non-participating non-linked plan which provides health insurance cover against certain specified health risks and provides you with timely support in case of medical emergencies and helps you and your family remain financially independent in difficult times. Health has been a major concern on everybody’s mind, including yours. In these days of skyrocketing medical expenses, when a family member is ill, it is a traumatic time for the rest of the family. As a caring person, you do not want to let any unfortunate incident to affect your plans for you and your family. So why let any medical emergencies shatter your peace of mind. for more information follow this link :- https://licindia.in/Products/Withdrawn-Plans/Plan-parameter', 11),
(82, 'LIC\'s Cancer Cover', 'This is a fixed benefit health plan offering payouts for treatment of cancer. In case the customer is diagnosed with cancer, this plan will offer benefits irrespective of the costs incurred in the treatment. LIC Cancer Cover provides protection in case of Early Stage and Major Stage Cancer. for more information follow this link :- https://licindia.in/Products/Withdrawn-Plans/LIC-s-Cancer-Cover', 11),
(84, 'LIC\'s Marriage Endowment/ Educational Annuity', 'This policy is suitable specially to meet the needs of marriage or higher education of the policyholder\'s children. It is a kind of an endowment policy in case of maturity. In case of early death of the policy holder the nominee will not get the S.A. and bonus immediately. Future premium are not payable after death of the policyholder the S.A. with bonus is payable only after the expiry of the term. In case of death caused by an accident, S.A. will be paid to the nominee immediately. At the maturity of the policy the policyholder can exercise option to take for the amount in lump sum or a convenient term can be chosen which can be used for future education of dependents. for more information follow this link :- https://licindia.in/Products/Withdrawn-Plans/marriage-endowment.aspx\r\n\r\n', 8),
(85, 'LIC\'s Komal Jeevan', 'This is a Children\'s Money Back Plan that provides financial protection against death during the term of plan with periodic payments on survival at specified durations. This plan can be purchased by any of the parent or grand parent for a child aged 0 to 10 years. for more information follow this link :- https://licindia.in/Products/Withdrawn-Plans/Komal-Jeevan.aspx', 8),
(86, 'The Whole Life Policy - Limited Payment', 'This is the best form of life assurance for family provision since it enables the Life Assured to pay all the premiums during the ordinarily vigorous and most productive years of life. He need not pay any premium in the later stages of life if and when his conditions might become adverse. With Profits Limited Payments Policies do not cease to participate in profits after completion of the premium paying period but continue to share in the periodical Bonus Distribution until the death of the Life Assured.The Without-Profit option is available under Table no. 3. If the policyholder pays at least 3 years\' premiums and then discontinues paying any more premium, a reduced paid-up assurance policy comes into force. Such a reduced paid-up Policy will not be entitled to participate in the profits declared thereafter, but such Bonus as has already been declared on the Policy will remain attached thereto. The premium paying term under this plan is five years minimum and 55 years maximum. for more information follow this link :- https://licindia.in/Products/Withdrawn-Plans/The-Whole-Life-Policy-Limited-Payment', 8),
(87, 'The Whole Life Policy', 'This plan is mainly devised to create an estate for the heirs of the policyholder as the plan basically provides for payment of sum assured plus bonuses on the death of the policyholder. However, considering the increased longevity of the Indian population, the Corporation has amended the above provision, thereby providing for payment of sum assured plus bonuses in the form of maturity claim on completion of age 80 years or on expiry of term of 40 years from date of commencement of the policy whichever is later. The premiums under the policy are payable up to age 80 years of the policyholder or for a term of 35 years whichever is later. If the payment of premium ceases after 3 years, a paid-up policy for such reduced sum assured will be automatically secured provided the reduced sum assured exclusive of any attached bonus is not less than Rs.250/-. Such reduced paid-up policy is not entitled to participate in the bonus declared thereafter but the bonuses already declared on the policy will remain attach, provided the policy is converted in to a paid-up policy after the premiums are paid for 5 years. for more information follow this link :- https://licindia.in/Products/Withdrawn-Plans/The-Whole-Life-Policy.aspx', 8),
(88, 'LIC’s New Jeevan Mangal 2', 'Chfbr', 20),
(89, 'LIC’s New Jeevan Mangal ', ' Dgl', 21);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Mobile_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Name`, `Password`, `Email_id`, `Mobile_number`) VALUES
(8, 'darshan', 'darshan', 'darshanr@gmail.com', 123456),
(11, 'pobaru darshan', '2003', 'pobarudarshan2003@gmail.com', 2147483647),
(20, 'Jk', '8765j8765', 'masimot595@dnitem.com', 2147483647),
(21, 'Akshay', 'akshay7799', 'Akotecha77@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_no_302`
--
ALTER TABLE `form_no_302`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkform_no_302` (`User_id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkpolicyuser` (`User_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_no_302`
--
ALTER TABLE `form_no_302`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form_no_302`
--
ALTER TABLE `form_no_302`
  ADD CONSTRAINT `fkform_no_302` FOREIGN KEY (`User_id`) REFERENCES `register` (`id`);

--
-- Constraints for table `policy`
--
ALTER TABLE `policy`
  ADD CONSTRAINT `fkpolicyuser` FOREIGN KEY (`User_id`) REFERENCES `register` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
