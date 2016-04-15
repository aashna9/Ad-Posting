-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2013 at 04:52 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ad_posting`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_details`
--

CREATE TABLE IF NOT EXISTS `ad_details` (
  `ad_no` varchar(20) NOT NULL,
  `s_id` varchar(20) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `ad_title` varchar(50) NOT NULL,
  `ad_description` varchar(300) NOT NULL,
  `posted_date` datetime NOT NULL,
  `price` double NOT NULL,
  `ad_image` varchar(20) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `website` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `c_name` varchar(30) NOT NULL,
  `c_id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_name`, `c_id`) VALUES
('education and learning', 'c01'),
('dining', 'c02'),
('services', 'c03'),
('health', 'c04'),
('electronic and technology', 'c05'),
('mobile phones', 'c06'),
('home and lifestyle', 'c07'),
('real estate', 'c08'),
('vehicles', 'c09'),
('travel and tourism', 'c10'),
('jobs', 'c11'),
('community', 'c12'),
('freelance', 'c13'),
('music and movies', 'c16'),
('matrimonial', 'c14'),
('news', 'c15'),
('entertainment', 'c17'),
('events', 'c18');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `u_name` varchar(35) NOT NULL,
  `u_email` varchar(40) NOT NULL,
  `u_password` varchar(30) NOT NULL,
  `i_am` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--


-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `s_name` varchar(50) NOT NULL,
  `s_id` varchar(20) NOT NULL,
  `c_id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`s_name`, `s_id`, `c_id`) VALUES
('airline - travel', 's61', 'c11'),
('construction vehicles ', 's58', 'c09'),
('other electronic items', 's55', 'c05'),
('home theatre', 's54', 'c05'),
('music systems', 's53', 'c05'),
('desktops, PDAs and tablets', 's52', 'c05'),
('advertising, media and public relations', 's60', 'c11'),
('tax, audit, accounting and finance', 's59', 'c11'),
('SUVs and vans', 's57', 'c09'),
('motor service and repair', 's56', 'c09'),
('mobile handest', 's001', 'c06'),
('mobile accessories', 's002', 'c06'),
('computer sand accessories', 's003', 'c05'),
('cameras and accessories', 's004', 'c05'),
('computer and accessories', 's005', 'c05'),
('CDs and DVDs', 's006', 'c05'),
('home appliances ', 's007', 'c05'),
('tools,machinery,industrial equipments', 's008', 'c05'),
('video-games and consoles', 's009', 'c05'),
('cars', 's010', 'c09'),
('motorcycles and scooters', 's011', 'c09'),
('bicycles and auto-rickshaws', 's012', 'c09'),
('buses,tempos and trucks', 's013', 'c09'),
('spare parts and accessories', 's014', 'c09'),
('tractors and agricultural equipments', 's015', 'c09'),
('houses:appartments for sale', 's016', 'c08'),
('houses-appartments for rent', 's017', 'c08'),
('land-plots for sale', 's018', 'c08'),
('office,shops-commercial', 's019', 'c08'),
('space', 's020', 'c08'),
('paying guest,hotels', 's021', 'c08'),
('vacation rentals and servicwe', 's022', 'c08'),
('art,collectibles and hobbies', 's023', 'c07'),
('books and magzines', 's024', 'c07'),
('clothing and accessories', 's025', 'c07'),
('for babies and children ', 's026', 'c07'),
('furniture', 's027', 'c07'),
('garden', 's028', 'c07'),
('musical instrment', 's030', 'c07'),
('jewellery and watches', 's029', 'c07'),
('pets and accessories', 's032', 'c07'),
('sports and fitness', 's031', 'c07'),
('mobile phone apps', 's033', 'c06'),
('mobile phone dealers', 's034', 'c06'),
('mobile phone repair,services', 's035', 'c06'),
('home decor furnishings', 's036', 'c07'),
('coins and stamps', 's037', 'c07'),
('barter exchange', 's038', 'c07'),
('bags and luggage', 's039', 'c07'),
('air conditioner and coolers', 's040', 'c07'),
('toys and games', 's041', 'c07'),
('discounted and sale items', 's042', 'c07'),
('fashion accessories', 's043', 'c07'),
('gifts and stationary', 's044', 'c07'),
('wholesale and bulk', 's045', 'c07'),
('antiques and handicrafts', 's046', 'c07'),
('everything else', 's047', 'c07'),
('fax,EPABX , office equipments', 's048', 'c05'),
('UPS, invertors and generators', 's49', 'c05'),
('office supplies', 's50', 'c05'),
('i-pods,MP3 players', 's51', 'c05'),
('architects, interior designers', 's62', 'c11'),
('banking and finance insurance', 's63', 'c11'),
('BPO, call centre and KPO', 's64', 'c11'),
('catering - hospitality', 's65', 'c11'),
('content writers-translators', 's66', 'c11'),
('customer service', 's67', 'c11'),
('education - teaching', 's68', 'c11'),
('engineering', 's69', 'c11'),
('fashion designing and merchandising', 's70', 'c11'),
('freelancers', 's71', 'c11'),
('healthcare - medicine', 's72', 'c01'),
('internet - webdesigners', 's73', 'c01'),
('human resource', 's74', 'c11'),
('IT hardware', 's75', 'c11'),
('IT software', 's76', 'c11'),
('marketing', 's77', 'c11'),
('non-profit - NGO - volunteering jobs', 's78', 'c11'),
('part time ', 's79', 'c11'),
('real estate - construction', 's80', 'c11'),
('resumes', 's81', 'c11'),
('retail', 's82', 'c11'),
('sales', 's83', 'c11'),
('secretarial - office staff', 's84', 'c11'),
('summer trainees - freshers', 's85', 'c11'),
('telecom', 's86', 'c11'),
('work from home', 's87', 'c11'),
('art, entertainment, publishing jobs', 's88', 'c11'),
('clerical-administrative jobs', 's89', 'c11'),
('hotel jobs', 's90', 'c11'),
('legal jobs', 's91', 'c11'),
('mannual labour', 's92', 'c11'),
('manufacturing - operation jobs', 's93', 'c11'),
('restaurant, food service ', 's94', 'c11'),
('other jobs', 's95', 'c11'),
('Advertising - Designing-printing', 's96', 'c03'),
('Airline - Train - Bus Tickets', 's97', 'c03'),
('Astrology - Numerology', 's98', 'c03'),
('Business Offers', 's99', 'c03'),
('Baby Sitters - Nanny', 's100', 'c03'),
('Car Rentals - Taxi Services', 's101', 'c03'),
('Carpenters - Upholstery', 's102', 'c03'),
('Computer - Web Services', 's103', 'c03'),
('Cooks', 's104', 'c03'),
('Courier Services', 's105', 'c03'),
('doctors', 's106', 'c03'),
('drivers', 's107', 'c03'),
('dth and set top boxes', 's108', 'c03'),
('elcetronics and appliances repair', 's109', 'c03'),
('event-party-planners-dj', 's110', 'c03'),
('Health - Fitness', 's111', 'c03'),
('Hotels - Resorts', 's112', 'c03'),
('Household Repairs - Renovation', 's113', 'c03'),
('Interior Designers - Architects', 's114', 'c03'),
('Investment - Financial Planning', 's115', 'c03'),
('Lawyers - Advocates', 's116', 'c03'),
('loans - insurance', 's117', 'c03'),
('maids and housekeepin', 's118', 'c03'),
('movers and packers', 's119', 'c03'),
('parlours and saloons', 's120', 'c03'),
('placement - recrruitment agencies', 's121', 'c03'),
('plumbers - electricians', 's122', 'c03'),
('restaurant - coffee shops', 's123', 'c03'),
('retail', 's124', 'c03'),
('taxation-audit', 's125', 'c03'),
('travel agents', 's126', 'c03'),
('vaastu', 's127', 'c03'),
('vacation - tour packages', 's128', 'c03'),
('consultants', 's129', 'c03'),
('financial legal services', 's130', 'c03'),
('writing-editing-translating', 's131', 'c03'),
('it services', 's132', 'c03'),
('repairs and maintenance , AMCs ', 's133', 'c03'),
('other serices ', 's134', 'c03'),
('career counsellin', 's135', 'c01'),
('play schools - creche', 's136', 'c01'),
('professional and short term courses', 's137', 'c01'),
('workshops', 's138', 'c01'),
('Schools', 's139', 'c01'),
('Correspondence, Distance Learning', 's140', 'c01'),
('Language Classes', 's141', 'c01'),
('Coaching, Tuitions', 's142', 'c01'),
('Music, Theatre, Dance Classes', 's143', 'c01'),
('Hobby Classes', 's144', 'c01'),
('Admission Counseling', 's145', 'c01'),
('Study Abroad', 's146', 'c01'),
('Text Books, Study Material', 's147', 'c01'),
('Other Education & Learning', 's148', 'c01'),
('acting schools', 's149', 'c17'),
('actor-model portfolios', 's150', 'c17'),
('acting - modeling roles', 's151', 'c17'),
('fashion designers - stylists', 's152', 'c17'),
('make up - hair', 's153', 'c17'),
('modelling agencies', 's154', 'c17'),
('musicians', 's155', 'c17'),
('photographers - cameraman', 's156', 'c17'),
('script writers', 's157', 'c17'),
('set designers', 's158', 'c17'),
('sound engineers', 's159', 'c17'),
('studios - loaction for hire', 's160', 'c17'),
('art directors - editors', 's161', 'c17'),
('other entertainment', 's162', 'c17'),
('announcements', 's163', 'c12'),
('car pool - bike ride', 's164', 'c12'),
('charity- donate - ngo', 's165', 'c12'),
('lost - found', 's166', 'c12'),
('tender notices', 's167', 'c12'),
('activities', 's168', 'c12'),
('artists musicians', 's169', 'c12'),
('photography', 's170', 'c12'),
('sports', 's171', 'c12'),
('clubs', 's172', 'c12'),
('other community', 's173', 'c12'),
('brides', 's174', 'c14'),
('grooms', 's175', 'c14'),
('wedding planners', 's176', 'c14'),
('face of the week', 's177', 'c18'),
('dance music concerts', 's178', 'c18'),
('exhibition - trade affairs', 's179', 'c18'),
('festivals', 's180', 'c18'),
('theatre - plays - movies', 's181', 'c18'),
('workshops  - seminars', 's182', 'c18'),
('Hospitals, Clinics', 's183', 'c04'),
('Chemists', 's184', 'c04'),
('Parlours, Saloons', 's185', 'c04'),
('Gymnasium, Yoga, Health Clubs', 's186', 'c04'),
('Cosmetics', 's187', 'c04'),
('Exercise Equipments', 's188', 'c04'),
('Health Care Products, Medicines', 's189', 'c04'),
('Path Labs, Testing Centres', 's190', 'c04'),
('Alternative Treatments', 's191', 'c04'),
('Other Health, Beauty & Fitness', 's192', 'c04'),
('Cafe, Fast Food Joints', 's193', 'c02'),
('Restaurants', 's194', 'c02'),
('Food Items', 's195', 'c02'),
('Fruits, Vegetable Shops', 's196', 'c02'),
('Grocery Stores, Supermarkets', 's197', 'c02'),
('Ice Cream Parlours, Juice Centres', 's198', 'c02'),
('Home Delivery', 's199', 'c02'),
('Meat, Poultry Shops', 's200', 'c02'),
('Banquet Halls', 's201', 'c02'),
('Caters', 's202', 'c02'),
('Other Food & Dining', 's203', 'c02'),
('Airline Tickets', 's204', 'c10'),
('Bus Tickets', 's205', 'c10'),
('Guest Houses', 's206', 'c10'),
('Serviced Apartments', 's207', 'c10'),
('Visa & Other Travel Services', 's218', 'c10'),
('Hotels, Resorts', 's209', 'c10'),
('Homestays', 's210', 'c10'),
('House Boats', 's211', 'c10'),
('Taxi, Bus, Car Rentals', 's212', 'c10'),
('Tour Packages', 's213', 'c10'),
('Immigration Services', 's214', 'c10'),
('Tourist Guides, Companions', 's215', 'c10'),
('Travel Agents, Tour Operators', 's216', 'c10'),
('Tourist Information Bureau & Centers', 's208', 'c10');
