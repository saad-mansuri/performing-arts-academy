-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2020 at 11:24 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcaproject`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `female_male` ()  NO SQL
BEGIN
DECLARE FCNT INT;
DECLARE MCNT INT;

SELECT COUNT(*) FCNT FROM admin WHERE gender = 'Male';
SELECT COUNT(*) MCNT FROM admin WHERE gender = 'Female';

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `male_female` ()  BEGIN
DECLARE MCNT INT;
DECLARE FCNT INT;

SELECT COUNT(*) MCNT FROM userregistration WHERE gender = 'male';
SELECT COUNT(*) FCNT FROM userregistration WHERE gender = 'female';

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(6) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `DOJ` date NOT NULL,
  `contact_no` varchar(21) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `password`, `fname`, `lname`, `DOB`, `DOJ`, `contact_no`, `email_id`, `gender`) VALUES
(1, 'saadmansuri', 'saad123', 'Saad', 'Mansuri', '1998-09-24', '2019-10-01', '6353121872', 'saadmansuri249@gmail.com', 'Male'),
(3, 'parthparma', 'parth@45', 'Parth', 'Parma', '1997-11-08', '2019-10-01', '9856325248', 'parthparma45@gmail.com', 'Male'),
(4, 'mayurgohil', 'mayur66', 'Mayur', 'Gohil', '1997-07-17', '2019-11-01', '7546325248', 'mayurgohil66@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(6) NOT NULL,
  `scatname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(25) NOT NULL,
  `time` varchar(30) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `scatimg` varchar(15) NOT NULL,
  `scatid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `scatname`, `date`, `day`, `time`, `duration`, `price`, `scatimg`, `scatid`) VALUES
(2, 'Comedy Acting', '2020-01-03', 'Tuesday', '15:00-17:00', '120 Mins', '120 rs.', 'a4.jpg', 12),
(7, 'Ballet Dance', '2020-01-21', 'Tuesday', '12:00-16:00', '240 Mins', '240 rs.', 'd101.jpg', 6),
(11, 'Absolute Beginners Dance', '2020-01-25', 'Tuesday', '12:00-14:30', '150 Mins', '150 rs.', 'd2.jpg', 14),
(12, 'Ballroom Dance', '2020-01-31', 'Tuesday', '12:00-16:00', '240 Mins', '240 rs.', 'd3.jpg', 15),
(13, 'Belly Dance', '2020-01-20', 'Tuesday', '12:00-16:30', '180 Mins', '180 rs.', 'd4.jpg', 16),
(14, 'Bollywood Dance', '2020-01-19', 'Saturday', '16:00-18:00', '120 Mins', '120 rs.', 'd5.jpg', 17),
(15, 'Dance Workshop', '2020-01-22', 'Monday', '08:00-09:00', '60 Mins', '60 rs.', 'd6.jpg', 18),
(16, 'Salsa Dance', '2020-01-18', 'Wednesday', '20:00-22:00', '120 Mins', '120 rs.', 'd7.jpg', 19),
(17, 'Creative Writing Beginners', '2020-02-04', 'Tuesday', '12:00-16:00', '240 Mins', '240 rs.', 'w2.jpg', 20),
(18, 'Poetry Writing', '2020-01-29', 'Monday', '14:00-16:00', '120 Mins', '120 rs.', 'w3.jpg', 21),
(19, 'All Singing Beginners', '2020-01-11', 'Saturday', '08:00-10:00', '120 Mins', '120 rs.', 's2.jpg', 22),
(20, 'Singing Skill Developement ', '2020-01-21', 'Monday', '16:00-120:00', '240 Mins', '240 Rs.', 's3.jpg', 23),
(21, 'Singing Workshops', '2020-01-22', 'Saturday', '16:00-18:00', '120 Mins', '120 rs.', 's4.jpg', 24),
(22, 'Workplace Choirs', '2020-01-31', 'Friday', '12:00-13:00', '60 Mins', '60 rs.', 's5.jpg', 25),
(23, 'Runway or Catwalk Model', '2020-01-26', 'Saturday', '13:00-17:00', '120 Mins', '120 rs.', 'm2.jpg', 26),
(24, 'Commercial Model', '2020-01-25', 'Friday', '10:30-12:00', '90 Mins', '90 rs.', 'm3.jpg', 27),
(25, 'Plus-Size Model', '2020-01-25', 'Monday', '07:00-08:00', '60 Mins', '60 rs.', 'm4.jpg', 28),
(26, 'Child Model', '2020-01-25', 'Tuesday', '12:00-15:00', '180 Mins', '180 rs.', 'm5.jpg', 29),
(27, 'Glamour Model', '2020-01-17', 'Thurday', '11:00-13:00', '120 Mins', '120 rs.', 'm6.jpg', 30),
(28, 'Fitness Model', '2020-01-18', 'Thursday', '15:00-16:30', '90 Mins', '90 rs.', 'm7.jpg', 31),
(30, 'Portrait Photography', '2020-01-26', 'Saturday', '20:00-21:00', '60 Mins', '60 Rs.', 'p2.jpg', 33),
(31, 'Indian Street Photography', '2020-01-18', 'Thurday', '12:00-16:00', '240 Mins', '240 rs.', 'p3.jpg', 34),
(32, 'Documentory Photography', '2020-01-25', 'Friday', '13:00-17:00', '240 Mins', '240 rs.', 's4.jpg', 35),
(33, 'Lightroom for Photography', '2020-01-28', 'Monday', '18:00-20:00', '120 Mins', '120 rs.', 's9.jpg', 40),
(34, 'Food and Product Photography', '2020-01-29', 'Tuesday', '17:00-18:00', '60 Mins', '60 rs.', 's5.jpg', 36),
(35, 'Fine Arts Photography', '2019-12-06', 'Wednesday', '12:00-16:00', '240 Mins', '240 rs.', 's6.jpg', 37),
(36, 'Life Style Photography', '2019-12-09', 'Saturday', '12:30-14:30', '120 Mins', '120 rs.', 's7.jpg', 38),
(37, 'Photoshop for Photography', '2019-12-12', 'Monday', '07:00-09:00', '120 Mins', '120 rs.', 's8.jpg', 39),
(38, 'Photography Foundation', '2019-12-14', 'Friday', '17:30-18:30', '60 Mins', '60 rs.', 's10.jpg', 41),
(39, 'Writing For children', '2019-12-20', 'Friday', '10:30-12:00', '90 Mins', '90 rs.', 'w1.jpg', 7),
(41, 'Fashion Model', '2019-12-05', 'Tuesday', '12:00-16:00', '240 Mins', '240 rs.', 's1.jpg', 9),
(73, 'Acting Beginners', '2019-12-10', 'Monday', '12:00-14:00', '120 Mins', '120 rs.', 'a1.jpg', 5),
(75, 'Acting Beginners', '2019-12-11', 'Tuesday', '16:00-17:00', '60 Mins', '60 rs.', 'a1.jpg', 5),
(76, 'Acting Beginners', '2019-12-12', 'webnesday', '16:00-17:30', '90 Mins', '90 rs.', 'a1.jpg', 5),
(77, 'Ballet Dance', '2019-12-15', 'Monday', '12:00-16:00', '240 Mins', '240 rs.', 'd101.jpg', 6),
(79, 'Writing For children', '2019-12-05', 'Tuesday', '14:00-16:00', '120 Mins', '120 rs.', 'w1.jpg', 7),
(80, 'Writing For children', '2019-12-06', 'Wednesday', '14:00-15:00', '60 Mins', '60 rs.', 'w1.jpg', 7),
(81, 'Songs Writing', '2019-12-20', 'Friday', '08:00-10:00', '120 Mins', '120 rs.', 's1.jpg', 8),
(82, 'Songs Writing', '2019-12-21', 'Saturday', '10:00-12:00', '120 Mins', '120 rs.', 's1.jpg', 8),
(83, 'Songs Writing', '2019-12-24', 'Tuesday', '12:00-14:00', '120 Mins', '120 rs.', 's1.jpg', 8),
(84, 'Fashion Model', '2019-12-10', 'Tuesday', '12:00-16:00', '120 Mins', '120 rs.', 'm1.jpg', 9),
(85, 'Fashion Model', '2019-12-11', 'Wednesday', '18:00-19:00', '60 Mins', '60 rs.', 'm1.jpg', 9),
(86, 'Screen Acting', '2019-12-11', 'Wednesday', '18:00-19:00', '60 Mins', '60 rs.', 'a2.jpg', 10),
(87, 'Screen Acting', '2019-12-28', 'Friday', '18:00-19:00', '60 Mins', '60 rs.', 'a2.jpg', 10),
(88, 'Acting Workshops and Testers', '2019-12-25', 'Tuesday', '18:00-20:00', '120 Mins', '120 rs.', 'a3.jpg', 11),
(89, 'Acting Workshops and Testers', '2019-12-25', 'Wednesday', '17:00-20:00', '180 Mins', '180 rs.', 'a3.jpg', 11),
(90, 'Comedy Acting', '2019-11-06', 'Wednesday', '16:00-17:00', '60 Mins', '60 rs.', 'a4.jpg', 12),
(91, 'Comedy Acting', '2019-11-06', 'Wednesday', '17:00-19:00', '120 Mins', '120 Rs.', 'a4.jpg', 12),
(92, 'Acting Improves', '2019-11-16', 'Wednesday', '17:00-19:00', '120 Mins', '120 Rs.', 'a5.jpg', 13),
(93, 'Acting Improves', '2019-11-17', 'Thursday', '19:00-20:00', '60 Mins', '60 Rs.', 'a5.jpg', 13),
(94, 'Absolute Beginners Dance', '2020-01-23', 'Tuesday', '12:00-16:00', '240 Mins', '240 rs.', 'd2.jpg', 14),
(95, 'Ballroom Dance', '2020-01-31', 'Friday', '11:00-14:00', '180 Mins', '180 rs.', 'd3.jpg', 15),
(96, 'Belly Dance', '2020-02-16', 'Friday', '12:30-16:00', '150 Mins', '150 rs.', 'd4.jpg', 16),
(97, 'Bollywood Dance', '2020-01-18', 'Saturday', '12:00-13:00', '60 Mins', '60 rs.', 'd5.jpg', 17),
(98, 'Dance Workshop', '2020-01-31', 'Tuesday', '12:00-16:00', '240 Mins', '240 rs.', 'd6.jpg', 18),
(99, 'Salsa Dance', '2020-01-29', 'Tuesday', '12:30-16:00', '180 Mins', '180 rs.', 'd7.jpg', 19),
(100, 'Poetry Writing', '2019-11-18', 'Tuesday', '14:00-15:00', '60 Mins', '60 Rs.', 'w3.jpg', 21),
(101, 'All Singing Beginners', '2020-01-26', 'Tuesday', '12:00-16:00', '240 Mins', '240 rs.', 's2.jpg', 22),
(102, 'Digital Photography for Beginners', '2020-01-30', 'Wednesday', '15:30-17:00', '210 Mins', '210 rs.', 'p1.jpg', 32),
(103, 'Food and Product Photography', '2020-01-03', 'Tuesday', '17:00-18:00', '60 Mins', '60 rs.', 's5.jpg', 36);

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `id` int(6) NOT NULL,
  `bdid` int(6) NOT NULL,
  `bookingdate` date NOT NULL DEFAULT current_timestamp(),
  `userid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`id`, `bdid`, `bookingdate`, `userid`) VALUES
(43, 72, '2019-11-28', 4),
(45, 73, '2019-11-28', 4),
(56, 78, '2019-11-28', 3),
(62, 89, '2019-11-28', 4),
(70, 13, '2019-11-29', 3),
(71, 94, '2019-11-29', 6),
(72, 93, '2019-11-29', 4),
(73, 30, '2019-11-29', 4),
(74, 85, '2019-11-29', 4),
(75, 25, '2019-11-29', 4),
(76, 28, '2019-11-29', 4),
(77, 24, '2019-11-30', 4),
(78, 73, '2019-11-30', 4),
(79, 75, '2019-11-30', 4),
(80, 11, '2019-11-30', 3),
(81, 84, '2019-12-30', 4),
(85, 2, '2020-01-03', 3),
(87, 90, '2020-01-03', 0),
(89, 2, '2020-01-03', 3),
(91, 73, '2020-06-01', 3),
(92, 86, '2020-06-01', 3),
(93, 86, '2020-08-13', 3),
(96, 102, '2020-08-29', 3),
(97, 87, '2020-08-30', 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(6) NOT NULL,
  `catname` varchar(30) NOT NULL,
  `catimg` varchar(30) NOT NULL,
  `catisdisplay` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`, `catimg`, `catisdisplay`) VALUES
(25, 'Drama Acting Classes', 'pc-1.jpg', 'Yes'),
(26, 'Dancing Classes', 'd1.jpg', 'Yes'),
(32, 'Writing Classes', 'pc-3.jpg', 'Yes'),
(33, 'Singing Classes', 's11.jpg', 'Yes'),
(34, 'Photography', 'p1111.jpg', 'Yes'),
(37, 'Modelling Classes', 'jubinshah.jpg', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `scatid` int(6) NOT NULL,
  `scatname` varchar(50) NOT NULL,
  `scatimg` varchar(30) NOT NULL,
  `scatisdisplay` varchar(20) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `catid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`scatid`, `scatname`, `scatimg`, `scatisdisplay`, `discription`, `catid`) VALUES
(5, 'Acting Beginners', 'a1.jpg', 'Yes', 'Our Acting Course for Beginners offers an introduction to acting in a friendly and supportive atmosphere. Ideal for those with little or no acting experience, this course provides the chance to explore acting technique in a playful, accessible and practical way.', 25),
(6, 'Ballet Dance', 'd101.jpg', 'Yes', 'Our adult ballet classes are suitable for all levels of experience and are an inspiring way to develop strength, flexibility and coordination. At our Ballet School, we have designed ballet lessons for four different levels:', 26),
(7, 'Writing For children', 'w1.jpg', 'Yes', 'Our Writing for Children\'s Books Courses encourages you to explore and analyse some of the most successful children’s books, as you start to create your own original children\'s story.\r\n', 32),
(8, 'Song Writing', 's1.jpg', 'Yes', 'Discover your voice as a songwriter and develop your skills. Our Songwriting Courses will provide you with the tools to write well crafted lyrics and melodies over chords. It will also give you a grounding in basic music theory and story telling commonly used in popular songwriting. Our course is open to those who do not play instruments and are new to writing, as well as more experienced writers, some of the best writers are not singers so this is not essential. Just a keen interest in writing great songs.', 33),
(9, 'Fashion Model', 'm1.jpg', 'Yes', 'We provide high-quality services including model training, events management and exclusive productions to all forms of agencies and companies, including all forms of marketing communications. Diva Modelling and Events has transformed the professional promotional industry across the Middle East. From it\'s global corporate headquarters in India.', 37),
(10, 'Screen Acting', 'a2.jpg', 'Yes', 'Our screen acting coaches are all working, professional actors and directors and we teach a variety of techniques, not adhering to just one school of thought. This enables a full and rounded approach for training actors allowing them to establish effective techniques that work for them as individuals. You will gain an insight into the technical requirements of working in front of a camera along with varied elements of established techniques.', 25),
(11, 'Acting Workshops and Testers', 'a3.jpg', 'Yes', 'Our Acting Workshops are an opportunity to explore different acting techniques in a short intensive class rather than a full course.\r\n\r\nFurther your acting skills by focusing on specialised areas such as Shakespeare, Physical Comedy, Audition Preparation, Meisner Technique and more.', 25),
(12, 'Comedy Acting', 'a4.jpg', 'Yes', 'The Comedy Acting course focuses on the skills needed to deliver authentic and relatable comic performances. Led by a professional actor, these practical courses are upbeat, playful and dynamic in nature.', 25),
(13, 'Acting Improves', 'a5.jpg', 'Yes', 'Our Improv Level 2 with Showcase course is the next step on your Improvisation journey. Whether you\'re developing your performance skills or looking to build confidence - enjoy the unpredictability and fun of Improv.', 25),
(14, 'Absolute Beginners Dance', 'd2.jpg', 'Yes', 'Everyone has to start somewhere, and there\'s no better place to learn to dance than on our Absolute Beginners Dance Classes.', 26),
(15, 'Ballroom Dance', 'd3.jpg', 'Yes', 'Ballroom Dance has enjoyed a revival in recent years, and is now one of the most popular dance styles around. With its grace, variety, and active social element, it\'s easy to understand why it continues to capture the imagination.', 26),
(16, 'Belly Dance', 'd4.jpg', 'Yes', 'One of the oldest forms of dance; Belly Dance is a great way to stay in shape no matter what your dance experience.\r\n\r\nBelly Dancing promotes femininity, balance, posture, strength, coordination and confidence as well as being a fun and highly expressive art form. Our adult Belly Dancing Classes are open to everyone.', 26),
(17, 'Bollywood Dance', 'd5.jpg', 'Yes', 'City Academy’s Bollywood Dance Classes for adults bring the high-energy rhythms of Indian cinema to London.\r\n\r\nWith evening course schedules – designed to fit around your working life – we offer you the chance to immerse yourself in the fun, lively, and colourful world of Bollywood. These classes are also a great way of improving your fitness.', 26),
(18, 'Dance Workshop', 'd6.jpg', 'Yes', 'Our Dance Workshops are an opportunity to explore choreography in a short intensive class rather than a full course.\r\nLearn inspiring routines and choreography in a range of different dance styles.', 26),
(19, 'Salsa Dance', 'd7.jpg', 'Yes', 'Immerse yourself in the rhythms of Latin America and experience this global dance phenomenon with our Salsa Classes in London for adults.', 26),
(20, 'Creative Writing Beginners', 'w2.jpg', 'Yes', 'Our Creative Writing Courses are here to guide you through different forms of writing, and help develop your individual voice as a writer.', 32),
(21, 'Poetry Writing', 'w3.jpg', 'Yes', 'On our Poetry courses, you will respond to new writing themes, and explore the many forms poetry can appear in. You will look at a wide range of work from professional poets and develop your voice through a range of practical exercises that look at tone, rhythm and meter. You will also look at ways to add form to your work, use of metaphor and lyricism, and ways in which descriptive imagery can elevate your writing.', 32),
(22, 'All Singing Beginners', 's2.jpg', 'Yes', 'Kickstart your singing journey with one of our Beginner Singing Lessons.', 33),
(23, 'Singing Skill Developement ', 's3.jpg', 'Yes', 'Our singing workshops offer the opportunity to explore artist and skills focused classes alongside vocal technique development work.', 33),
(24, 'Singing Workshops', 's4.jpg', 'Yes', 'Further your vocal skills by focusing on specialised areas such as Microphone Technique, Acting Through Song, Songwriting and more', 33),
(25, 'Workplace Choirs', 's5.jpg', 'Yes', 'Come together as a group on a weekly or monthly basis to form your own workplace choir. In a series of two hour singing lessons you will be coached by an experienced choir leader and have the option to work towards a performance in central London.', 33),
(26, 'Runway or Catwalk Model', 'm2.jpg', 'Yes', 'In fashion, a runway, catwalk or ramp, is a narrow, usually flat platform that runs into an auditorium or between sections of an outdoor seating area, used by models to demonstrate clothing and accessories during a fashion show.[1] In fashion jargon, \"what\'s on the catwalk\" or similar phrasing can refer to whatever is new and popular in fashion.', 37),
(27, 'Commercial Model', 'm3.jpg', 'Yes', 'A model is a person with a role either to promote, display or advertise commercial products (notably fashion clothing in fashion shows), or to serve as a visual aid for people who are creating works of art or to pose for photography.', 37),
(28, 'Plus-Size Model', 'm4.jpg', 'Yes', 'A plus-size model is an individual of average to larger stature (sometimes but not exclusively overweight or obese) who is engaged primarily in modeling plus-size clothing. Plus-size models also engage in work that is not strictly related to selling large-sized clothing, e.g., stock photography and advertising photography for cosmetics, household and pharmaceutical products and sunglasses.', 37),
(29, 'Child Model', 'm5.jpg', 'Yes', 'A child model refers to a child who is employed to display, advertise and promote commercial products or to serve as a subject of works of art, such as photography, painting and sculpture.', 37),
(30, 'Glamour Model', 'm6.jpg', 'Yes', 'Glamour modelling focuses on sexuality and thus general requirements are often unclear, being dependent more on each individual case. Glamour models can be any size or shape. There is no industry standard for glamour modelling and it varies greatly by country. For the most part, glamour models are limited to modelling in calendars, men\'s magazines, such as Playboy, bikini modelling, lingerie modelling, fetish modelling, music videos, and extra work in films. However, some extremely popular glamour models transition into commercial print modelling, appearing in swimwear, bikini and lingerie campaigns.', 37),
(31, 'Fitness Model', 'm7.jpg', 'Yes', 'Fitness modelling focuses on displaying a healthy, toned physique. Fitness models usually have defined muscle groups. The model\'s body weight is greater due to muscle weighing more than fat; however, they have a lower body fat percentage because the muscles are toned and sculpted. Fitness models are often used in magazine advertising; they can also in some cases be certified personal fitness trainers.', 37),
(32, 'Digital Photography for Beginners', 'p1.jpg', 'Yes', 'Our comprehensive DSLR Photography for Beginners course will give you all the technical information you need to get the most out of your camera, and begin to look at the aesthetics of photography to develop your personal style.', 34),
(33, 'Portrait Photography', 'p2.jpg', 'Yes', 'Our Portrait Photography courses will help you understand candid, urban, posed and naturally-lit portraiture. Exploring a range of portraiture types, from family to fine art and fashion, you will be guided by our professional portrait photographer, learning how to add drama, mood and texture to your images.', 34),
(34, 'Indian Street Photography', 'p3.jpg', 'Yes', 'With Indian being one of the busiest cities in the world, it’s difficult to know where and how to capture its essence. In this street photography workshop, you will be given the opportunity to document London’s vibrant urban landscape, diverse culture and it’s many interesting characters.', 34),
(35, 'Documentary Photography', 'p4.jpg', 'Yes', 'Our Documentary Photography courses are perfect for photographers to develop their documentary storytelling and photojournalism and produce strong reportage work.', 34),
(36, 'Food and Product Photography', 'p5.jpg', 'Yes', 'Capture your creations, from perfect plates of food to hand crafted jewellery. On this course you will learn how to create beautiful images and equip yourself with the skills needed to enter the commercial product photography market. This course will give you all the tools to tackle the challenges when photographing food and products.', 34),
(37, 'Fine Arts Photography', 'p6.jpg', 'Yes', 'Explore the creative possibilities of digital photography on our Fine Art Photography course. Focusing on portraiture, architecture, still life and more, fine art photography produces images that have a story unique to the artist.', 34),
(38, 'Life Style Photography', 'p7.jpg', 'Yes', 'Lifestyle photography allows the photographer to get creative and plan art direction through documenting a range of subjects. In this location based workshop, you can focus your project on lifestyle subjects such as food and dining, fashion, interior design or another subject that inspires you.', 34),
(39, 'Photoshop for Photography', 'p8.jpg', 'Yes', 'Photoshop is complex – a powerful image editing and manipulation software. Its many uses and techniques can be overwhelming, so we focus our Photoshop Course on the tools for editing photographs.', 34),
(40, 'Lightroom for Photography', 'p9.jpg', 'Yes', 'With the unique ability to edit multiple images quickly and efficiently, Adobe\'s Lightroom is the perfect tool to help your images reach their full potential. Lightroom can help you make small adjustments to exposure, contrast and image noise or allow you to create tonal and colour changes to create your individual style. Throughout this course, you will learn the fundamental principles of editing and gain knowledge on an effective digital workflow: importing, exporting, keywords, tagging and rating your images.', 34),
(41, 'Photography Foundation', 'p10.jpg', 'Yes', 'Our comprehensive DSLR Photography for Beginners course will give you all the technical information you need to get the most out of your camera, and begin to look at the aesthetics of photography to develop your personal style.', 34);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `dob`) VALUES
(1, 'saad', '0000-00-00'),
(10, 'Mansuri', '1998-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `userid` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `userimg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`userid`, `username`, `password`, `fname`, `lname`, `dob`, `contactno`, `email`, `gender`, `userimg`) VALUES
(3, 'tirthjain', 'tirth212', 'Tirth', 'Jain', '1998-12-25', '8956457859', 'tirthjain01@gmail.com', 'male', 'tirth.jpg'),
(4, 'parthparma', 'parth23', 'Parth', 'Parma', '1998-10-25', '7984814283', 'parth12@gmail.com', 'male', 'ad1.jpg'),
(5, 'guljar', 'mahesh44', 'Mahesh', 'galjar', '1998-12-15', '9874561243', 'mahesh@gmail.com', 'male', 'ac1.jpg'),
(6, 'jhanvigajjar', 'Jhanvi22', 'Jhanvi', 'gajjar', '1997-08-05', '9845351242', 'jhanvigajjar22@gmail.comm', 'female', 'gk.jpg'),
(7, 'mehulbhatt', 'mehul53', 'Mehul', 'Bhatt', '1996-08-14', '8845123623', 'mehukbhatt@gmail.comm', 'male', 'es.jpg'),
(8, 'danishjain', 'janish11', 'Danish', 'Jain', '1995-11-18', '8653524563', 'danishjain@gmail.comm', 'male', 'jd1.jpg'),
(9, 'shahrukh', 'shahrukh56', 'shahrukh', 'Shiakh', '1999-08-14', '8845123623', 'shahrukh@gmail.comm', 'male', 'ja1.jpg'),
(10, 'ajmalkhan', 'ajmal41', 'Ajmal', 'khan', '1998-11-30', '8545123641', 'ajmalkhan@gmail.comm', 'male', 'jg.jpg'),
(11, 'aadilmansuri', 'aadil89', 'Aadil', 'Mansuri', '1993-09-06', '7895623641', 'aadilmansuri@gmail.comm', 'male', 'ms11.jpg'),
(12, 'gajjarroy', 'tirth212', 'Roy', 'Gajjar', '1995-06-18', '9356457896', 'gajjarroy@gmail.com', 'male', 'mb.jpg'),
(13, 'gajjarrock', 'gajjar11', 'Rock', 'Gajjar', '1998-03-04', '9156457896', 'gajjarrock@gmail.com', 'male', 'ms.jpg'),
(14, 'lokesh', 'lokesh45', 'Lokesh', 'Rahuk', '1993-12-14', '8886897548', 'saadmansuri249@gmail.com', 'male', 'mn1.jpg'),
(15, 'rahuldada', 'rahuldada', 'Rahul', 'Dada', '1995-02-15', '9456897548', 'rahuldada49@gmail.com', 'male', 'op1.jpg'),
(18, 'sohil', 'sohil01', 'sohilkhan', 'khan', '1992-04-17', '1234567890', 'khan@gmail.com', 'male', 'rj11.jpg'),
(33, 'saadmansuri', 'saad56', 'Tirth', 'mansuri', '2019-01-06', '9428670654', 'tirth886@gmail.com', 'male', 'rf.jpg'),
(34, 'rohitsharma', 'rohitsharm', 'Rohit', 'Sharma', '0000-00-00', '6353121872', 'rohitsharma@gmail.com', 'male', 'rf11.jpg'),
(39, 'mayurgohil', 'mayur11', 'Gohil', 'Mayur', '0000-00-00', '9426852144', 'xyz@gmail.com', 'male', ''),
(40, 'mayurgohil', 'mayur11', 'Gohil', 'Mayur', '0000-00-00', '9426852144', 'xyz@gmail.com', 'male', ''),
(41, 'viratkohli', 'virat@45', 'Virat', 'Kohli', '0000-00-00', '6353231545', 'viratkohli@gmail.com', 'male', ''),
(42, 'viratkohli', 'virat@45', 'Virat', 'Kohli', '0000-00-00', '6353231545', 'viratkohli@gmail.com', 'male', ''),
(43, 'mushnnah', 'lhlvblavbh', 'Mansuri', 'Mohmmed', '0000-00-00', '6353128712', 'mansurimushannah@gmail.com', 'male', ''),
(44, 'mushnnah', 'lhlvblavbh', 'Mansuri', 'Mohmmed', '0000-00-00', '6353128712', 'mansurimushannah@gmail.com', 'male', ''),
(45, 'mashunnah', 'mushanna@', 'Mansuri', 'Mohmmed', '0000-00-00', '1234567899', 'asnfdslkhb@gmail.com', 'male', ''),
(46, 'mashunnah', 'mushanna@', 'Mansuri', 'Mohmmed', '0000-00-00', '1234567899', 'asnfdslkhb@gmail.com', 'male', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`scatid`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `scatid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `userid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
