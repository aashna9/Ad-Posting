-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2013 at 06:15 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('abc', '123'),
('xyz', '789');

-- --------------------------------------------------------

--
-- Table structure for table `ad_details`
--

CREATE TABLE IF NOT EXISTS `ad_details` (
  `ad_no` varchar(20) NOT NULL,
  `u_id` varchar(5) NOT NULL,
  `s_id` varchar(20) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `ad_title` tinytext NOT NULL,
  `ad_description` longtext NOT NULL,
  `posted_date` date NOT NULL,
  `price` double NOT NULL,
  `ad_image` varchar(50) NOT NULL,
  `website` varchar(35) NOT NULL,
  `views` int(11) NOT NULL,
  `responses` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`ad_no`),
  KEY `c_id` (`c_id`),
  KEY `s_id` (`s_id`),
  KEY `u_id` (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_details`
--

INSERT INTO `ad_details` (`ad_no`, `u_id`, `s_id`, `c_id`, `city`, `state`, `ad_title`, `ad_description`, `posted_date`, `price`, `ad_image`, `website`, `views`, `responses`, `status`) VALUES
('01', '01', 's001', 'c06', 'surat', 'gujarat', 'nikon camera in best price', 'new camera of grey colour.it is having 15 mega pixels.oyu can get it exclusively on this site at the best priceOn the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\nYou can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\nTo change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n', '2013-07-15', 999, 'C:\\wamp\\www\\adposting\\clips\\elec2.jpg', 'coolpix@nikon.com', 1, 2, 'active'),
('02', '02', 's018', 'c08', 'ahmedabad', 'gujarat', 'nikon cool price on sale', 'On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\nYou can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\nTo change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n', '2013-07-05', 851, 'adposting\\clips\\elec2.jpg', 'nikon@gmail.com', 3, 1, 'active'),
('03', '03', 's009', 'c10', 'delhi', 'delhi', 'On the Insert tab, the galleries include', 'get free tutorials of php and many more exclusively on this site.\r\nOn the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\nYou can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\nTo change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n\r\n', '2013-07-14', 0, '', '', 1, 0, 'active'),
('04', '05', 's001', 'c06', '', '', 'On the Insert tab, the galleries include items that are designed to coordinate ', 'u can get here exclusivelyOn the Insert tab, the galleries include items that are designed to coordinate On the Insert tab, the galleries include items that are designed to coordinate get free tutorials of php and many more exclusively on this site.\r\nOn the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\nget free tutorials of php and many more exclusively on this site.\r\nOn the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.', '0000-00-00', 0, '', 'website', 1, 4, 'active'),
('05', '05', 's018', 'c08', 'srat', 'sura', 'On the Insert tab, the galleries include items that are designed ', 'On the Insert tab, the galleries include items that are designed On the Insert tab, the galleries include items that are designed get free tutorials of php and many more exclusively on this site.\r\nOn the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\n\r\nget free tutorials of php and many more exclusively on this site.\r\nOn the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.', '0000-00-00', 1233, 'asdfghjk', 'website', 3, 0, 'active'),
('06', '05', 's010', 'c09', 'pune	', 'MAHARASHTRA	', 'On the Insert tab, the galleries include', 'On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\nYou can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\nTo change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n', '2013-08-19', 4500, 'clips/edu.jpg', 'website', 1, 6, 'active'),
('07', '07', 's001', 'c06', 'calcutta', 'wb', 'On the Insert tab, the galleries include items that are designed ', 'On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\nYou can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\nTo change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n', '0000-00-00', 123, '', '1213@fv.in', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `c_name` varchar(30) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `c_name` (`c_name`),
  UNIQUE KEY `c_name_2` (`c_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_name`, `c_id`) VALUES
('education', 'c01'),
('food_and_dining', 'c02'),
('services', 'c03'),
('health_and_fitness', 'c04'),
('electronics', 'c05'),
('mobile_phones', 'c06'),
('home_and_lifestyle', 'c07'),
('real_estate', 'c08'),
('vehicles', 'c09'),
('travel_and_tourism', 'c10'),
('jobs', 'c11'),
('community', 'c12'),
('music', 'c16'),
('matrimonial', 'c14'),
('news_headlines', 'c15'),
('entertainment', 'c17'),
('events', 'c18'),
('movies', 'c13');

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE IF NOT EXISTS `community` (
  `ad_no` varchar(10) NOT NULL,
  `c_id1` varchar(5) NOT NULL,
  `c_address1` varchar(500) NOT NULL,
  `c_select_field` varchar(50) NOT NULL,
  `c_starting_date` date NOT NULL,
  `c_valid_till` date NOT NULL,
  KEY `c_id` (`c_id1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`ad_no`, `c_id1`, `c_address1`, `c_select_field`, `c_starting_date`, `c_valid_till`) VALUES
('', '', '', 'Charity-Donate-NGO', '0000-00-00', '0000-00-00'),
('', '', '', 'Announcements', '0000-00-00', '0000-00-00'),
('', '', 'dfovo', 'Announcements', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `ad_no` varchar(11) NOT NULL,
  `b_address1` varchar(500) NOT NULL,
  `b_experience` varchar(50) NOT NULL,
  `b_courses` varchar(15) NOT NULL,
  `b_mobile_no1` varchar(15) NOT NULL,
  `b_T_name1` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`ad_no`, `b_address1`, `b_experience`, `b_courses`, `b_mobile_no1`, `b_T_name1`) VALUES
('0', 'G 40/ Nav Manglam,City Light,Surat', 'more then 3 years', 'Computer course', '98257711678', 'Future Vision'),
('0', 'corner Point Complex', 'more then 3 years', 'SCIENCE', '09825715276', 'Universe Classes'),
('0', 'A-302,Aakash Avenue ,Althan,Surat', '1 year', 'only Maths', '9537143998', 'Raj rani Classes'),
('0', 'Shop No.201 B, 1st Floor,  Raj Mandir Plaza, Nr. G.D Goenka School, Vesu.', '3 years', 'Drawing', '98241 83737', 'Sai Raj Art Academy'),
('0', 'M-401, Shiv Shakti Shopping Complex, Ghod Dod Road, Surat ', 'more then 3 years', 'College Studies', '9374716149', 'Pt Education'),
('0', 'Block No 303, Yash Plaza', '2 years', 'College Studies', '9825442418', 'Forum Languages'),
('0', 'Flat No 3, Annapurna Shopping Centre, Rander Road, Adajan', '1 year', 'Languages', '0261 2781428', 'National Classes'),
('0', 'Shop No-9, Pramukh Chambers, Rander Road, Rander, Sura', '1 year', 'Languages', '9227215989', 'Royal Education Centre'),
('0', '208, Poddar Plaza, Turning Point, Bhatar Road, Surat ', '2 years', 'Languages', '9343540356', 'Bloom Academy'),
('0', 'Rowhouse B/40, Yogikrupa Society, Bhatar Road, Surat ', '1 year', 'Languages', '9662046544 ', 'Samarpan Classes');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE IF NOT EXISTS `electronics` (
  `e_condition` varchar(30) NOT NULL,
  `e_user_type1` varchar(11) NOT NULL,
  `e_brand` varchar(30) NOT NULL,
  `e_price` varchar(30) NOT NULL,
  `e_want_to_sell` varchar(50) NOT NULL,
  `e_firm_name1` varchar(50) NOT NULL,
  `e_address1` varchar(500) NOT NULL,
  `e_mobile_number1` varchar(15) NOT NULL,
  `ad_no` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`e_condition`, `e_user_type1`, `e_brand`, `e_price`, `e_want_to_sell`, `e_firm_name1`, `e_address1`, `e_mobile_number1`, `ad_no`) VALUES
('New', 'Individual', 'L.G', '40000', 'Refrigerator', 'Balaji TV''s', 'Pandesara', '', NULL),
('Used', 'Individual', 'samsung', '10000', 'Refrigerator', '', 'Mumbai, Maharashtra, India', '08655333191', NULL),
('New', 'Individual', 'L.G', '18000', 'Refrigerator', '', 'Model town ,Delhi', '09998046590', NULL),
('Used', 'Individual', 'phillips', '2500', 'Others', '', 'Guwahati, Assam, India', '', NULL),
('Used', 'Individual', 'Sony', '25000', 'Computer & Laptops', 'Abhishek mishra', 'bharath university,selayur,agram road SELAIYUR', '08438480800', NULL),
('Used', 'Individual', 'Others', '3500', 'Others', '', 'Vellore, Tamil Nadu, India', '7708694166', NULL),
('Used', 'Individual', 'Others', '4200', 'Home appliance', '', 'Anand, Gujarat, India', '9879007994', NULL),
('Used', 'Individual', 'samsung', '', 'Camera', '', 'Indore, Madhya Pradesh, India', '9406588919', NULL),
('New', 'Individual', 'samsung', '50000', 'Computer & Laptops', '', 'Chennai, Tamil Nadu, India', '07708223456', NULL),
('Used', 'Individual', 'Others', '38000', 'Television', '', 'Chennai, Tamil Nadu, India', '9952988909', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE IF NOT EXISTS `entertainment` (
  `c_id` varchar(5) NOT NULL,
  `en_id` varchar(5) NOT NULL,
  `ad_no` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`en_id`),
  KEY `c_id` (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment`
--


-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `c_id` varchar(5) NOT NULL,
  `ev_id` varchar(5) NOT NULL,
  `ad_no` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ev_id`),
  KEY `c_id` (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--


-- --------------------------------------------------------

--
-- Table structure for table `field_category`
--

CREATE TABLE IF NOT EXISTS `field_category` (
  `f_id` varchar(10) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `field_category`
--

INSERT INTO `field_category` (`f_id`, `category`) VALUES
('f06', 'petrol'),
('f06', 'diesel'),
('f17', 'Groom'),
('f04', '2013'),
('f04', '2012'),
('f02', '2years'),
('f02', '1year'),
('f20', 'Never married'),
('f17', 'Bride'),
('f09', 'Individual'),
('f09', 'Dealer'),
('f10', 'Used'),
('f10', 'New'),
('f13', 'Anderoid'),
('f13', 'Apple-ios'),
('f13', 'Blackberry'),
('f13', 'Windows'),
('f14', 'Single'),
('f14', 'Dual'),
('f20', 'Divorced'),
('f20', 'Widowed'),
('f20', 'Seperated'),
('f20', 'Annuled'),
('f21', 'Hindu'),
('f21', 'Muslim'),
('f21', 'Christian'),
('f21', 'Sikh'),
('f21', 'Jain'),
('f21', 'Buddhist'),
('f21', 'Parsi'),
('f21', 'Jewesih'),
('f21', 'Spiritual-not-religion'),
('f21', 'Other'),
('f33', 'Bachelor'),
('f33', 'Master'),
('f33', 'Doctorate'),
('f33', 'Graduate'),
('f21', 'Diploma'),
('f21', 'Undergraduate'),
('f21', 'High School'),
('f21', 'less than high School'),
('f21', 'Others'),
('f24', 'Private Sector'),
('f24', 'Government sector'),
('f24', 'Defense Service'),
('f24', 'Self Employeed/Business'),
('f24', 'Others'),
('f25', 'Aries'),
('f25', 'Aquarius'),
('f25', 'Capricorn'),
('f25', 'Cancer'),
('f25', 'Gemini'),
('f25', 'Leo'),
('f25', 'Libria'),
('f25', 'pisces'),
('f25', 'pisces'),
('f25', 'Sagittarius'),
('f25', 'Scorpio'),
('f25', 'Taurus'),
('f25', 'Virgo'),
('f27', 'Gym'),
('f27', 'Yoga'),
('f27', 'Gym+yoga'),
('f32', 'Full Time'),
('f32', 'Part Time'),
('f32', 'home based'),
('f35', 'Unfurnished'),
('f35', 'Semi-Furnished'),
('f35', 'Fully Furnished'),
('f36', '1 RK'),
('f36', '1 BHK'),
('f36', '2 BHK'),
('f36', '3 BHK'),
('f36', '4 BHK'),
('f36', '4+ BHK'),
('f38', 'Individual'),
('f38', 'Broker'),
('f39', 'Rent'),
('f39', 'Sell'),
('f42', 'VEG'),
('f42', 'NONVEG'),
('f42', 'VEG+NONVEG'),
('f44', 'Resturents'),
('f44', 'Part Hall'),
('f44', 'Metting area'),
('f36', 'Not applicable'),
('f46', 'land'),
('f46', 'flat'),
('f46', 'bunglow'),
('f47', 'sell'),
('f47', 'Rent'),
('f49', 'Individual'),
('f49', 'Dealer'),
('f50', 'samsung'),
('f50', 'L.G'),
('f50', 'phillips'),
('f50', 'Sony'),
('f50', 'whirpool'),
('f50', 'Videocon'),
('f50', 'Hitachi'),
('f52', 'Announcements'),
('f52', 'Car pool - Bike ride'),
('f52', 'Charity-Donate-NGO'),
('f52', 'Lost-Found'),
('f52', 'Tender Notices'),
('f56', 'Computer courses'),
('f56', 'School courses'),
('f56', 'College Studies'),
('f56', 'only Maths'),
('f56', 'SCIENCE'),
('f56', 'Drawing'),
('f56', 'Dance'),
('f56', 'Singing'),
('f57', '1 year'),
('f57', '2 years'),
('f57', '3 years'),
('f57', 'more then 3 years'),
('f59', 'Hire of car'),
('f59', 'Tour package'),
('f59', 'flight booking'),
('f59', 'Railway booking'),
('f60', 'Name'),
('f30', '1 year'),
('f30', '2years'),
('f30', '3 years'),
('f30', '3 years or more'),
('f30', 'starting'),
('f27', 'seeling of equipments'),
('f27', 'Others'),
('f62', 'Refrigerator'),
('f62', 'Television'),
('f62', 'Camera'),
('f62', 'Cooler'),
('f62', 'Air-Conditioner'),
('f48', 'New'),
('f62', 'Home appliance'),
('f62', 'Home theator'),
('f62', 'Computer & Laptops'),
('f62', 'Accessories'),
('f62', 'Others'),
('f48', 'Used'),
('f50', 'Others'),
('f56', 'Languages'),
('f59', 'All '),
('f59', 'Others'),
('f33', 'Undergraduate'),
('f33', 'Others'),
('f75', 'Job Seeker'),
('f75', 'Job Recruiter'),
('f75', 'Job Consultancy'),
('f13', 'not applicable');

-- --------------------------------------------------------

--
-- Table structure for table `food_and_dining`
--

CREATE TABLE IF NOT EXISTS `food_and_dining` (
  `d_type_of_food` varchar(20) NOT NULL,
  `d_Hotel_name1` varchar(50) NOT NULL,
  `d_address1` varchar(500) NOT NULL,
  `d_mobile_no1` varchar(10) NOT NULL,
  `d_sevices` varchar(20) NOT NULL,
  `ad_no` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_and_dining`
--

INSERT INTO `food_and_dining` (`d_type_of_food`, `d_Hotel_name1`, `d_address1`, `d_mobile_no1`, `d_sevices`, `ad_no`) VALUES
('VEG', 'BEST WESTERN Yuvraj', '7/278/A1 ,Gulambaba Mill Compound,Opp. Railway Station, Laldarwaja, Varachha, Surat', '6505471', 'Resturents', NULL),
('VEG', 'Tex Palazzo Hotel', 'Ring Road, Textile Market, Surat', '6616018', 'Resturents', NULL),
('VEG', 'Ginger', 'Off Dumus Road, Near Iskon Mall, Piplod, Surat, ', '6666333', 'Resturents', NULL),
('VEG', 'Hotel Ostria', '6th Floor, Meghani Tower, Cinema Road, Delhi Gate, Station Rd, Mahindra Pur, Begampura, Surat', '2423133', 'Resturents', NULL),
('VEG+NONVEG', 'The Grand bhagwati', 'Dumas road,surat', '3980111', 'Part Hall', NULL),
('VEG', 'HOTEL APEX', 'RING ROAD, OPP LINEAR BUS STAND, DELHI GATE, SURAT 395003', '9426754634', 'Resturents', NULL),
('VEG+NONVEG', 'Budget Inn Bellevue', 'Near Railway Station; Sumul Dairy Road, Surat, ', '2532020', 'Resturents', NULL),
('VEG+NONVEG', 'The Gateway Hotel', 'Ghod Dod,surat', '6697000', 'Metting area', NULL),
('VEG+NONVEG', 'The Top Magnificent Banquets ', '4th Floor,Ripple, Above Croma, Opposite Iscon Mall, Piplod, Surat - 395007', '9227944341', 'Part Hall', NULL),
('VEG', 'HOTEL GOLDEN PLAZA', 'OPP TOWN HALL, NR KARNAVATI HOSPITAL, ELLISBRIDGE, AHMEDABAD 380006', '+(91)-79-2', 'Resturents', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `form_fields`
--

CREATE TABLE IF NOT EXISTS `form_fields` (
  `f_id` varchar(10) NOT NULL,
  `field_name` varchar(30) NOT NULL,
  `input_type` varchar(30) NOT NULL,
  `c_id` varchar(6) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_fields`
--

INSERT INTO `form_fields` (`f_id`, `field_name`, `input_type`, `c_id`) VALUES
('f01', 'kms_run', 't', 'c09'),
('f02', 'insurance_and_tax', 't', 'c09'),
('f03', 'model', 't', 'c09'),
('f04', 'year', 's', 'c09'),
('f05', 'mileage', 't', 'c09'),
('f06', 'fuel', 's', 'c09'),
('f07', 'condition_of_vehicles', 't', 'c09'),
('f08', 'colour', 't', 'c09'),
('f09', 'you_are', 'r', 'c06'),
('f10', 'mob_condition', 'r', 'c06'),
('f11', 'price', 't', 'c06'),
('f12', 'brand', 't', 'c06'),
('f13', 'os', 's', 'c06'),
('f14', 'number_of_sims', 'r', 'c06'),
('f15', 'unique_ad', 't', 'c06'),
('f16', 'm_name', 't', 'c14'),
('f17', 'ad_for', 's', 'c14'),
('f18', 'm_age', 't', 'c14'),
('f19', 'm_height', 't', 'c14'),
('f20', 'marital_status', 's', 'c14'),
('f21', 'religion', 's', 'c14'),
('f22', 'mother_tongue', 't', 'c14'),
('f23', 'education', 's', 'c14'),
('f24', 'occupation', 's', 'c14'),
('f25', 'sun_sign', 's', 'c14'),
('f26', 'mobile_number', 't', 'c14'),
('f27', 'services_provided', 's', 'c04'),
('f28', 'Address', 't', 'c04'),
('f29', 'job_applied_for_field', 't', 'c11'),
('f30', 'experience', 's', 'c11'),
('f31', 'salary_range', 't', 'c11'),
('f32', 'user_type', 'r', 'c11'),
('f33', 'qualification', 's', 'c11'),
('f34', 'r_address', 't', 'c08'),
('f35', 'r_furnished', 'r', 'c08'),
('f36', 'r_No_of_rooms', 's', 'c08'),
('f37', 'r_Area', 't', 'c08'),
('f38', 'r_you_are', 'r', 'c08'),
('f39', 'r_ad_type', 'r', 'c08'),
('f40', 'r_carpetarea', 't', 'c08'),
('f42', 'type_of_food', 'r', 'c02'),
('f43', 'address', 't', 'c02'),
('f60', 'mobile_no', 't', 'c02'),
('f44', 'sevices', 'r', 'c02'),
('f45', 'contact_no', 't', 'c04'),
('f46', 'r_what_u_want_to', 's', 'c08'),
('f48', 'e_condition', 'r', 'c05'),
('f49', 'e_user_type', 'r', 'c05'),
('f50', 'e_brand', 's', 'c05'),
('f51', 'address', 't', 'c12'),
('f52', 'select_field', 's', 'c12'),
('f53', 'starting_date', 'date', 'c12'),
('f54', 'valid_till', 'date', 'c12'),
('f55', 'address', 't', 'c01'),
('f56', 'courses', 'c', 'c01'),
('f57', 'experience', 's', 'c01'),
('f58', 'address', 't', 'c10'),
('f59', 'service_we_provide', 's', 'c10'),
('f41', 'Hotel_name', 't', 'c02'),
('f61', 'f_name', 't', 'c04'),
('f62', 'e_want_to_sell', 's', 'c05'),
('f63', 'e_price', 't', 'c05'),
('f64', 'mobile_no', 't', 'c01'),
('f65', 'T_name', 't', 'c01'),
('f66', 'e_firm_name', 't', 'c05'),
('f67', 'e_address', 't', 'c05'),
('f68', 'e_mobile_number', 't', 'c05'),
('f69', 'j_address', 't', 'c11'),
('f70', 'j_mobile_number', 't', 'c11'),
('f71', 'j_name', 't', 'c11'),
('f72', 't_name', 't', 'c10'),
('f73', 't_mobile_number', 't', 'c10'),
('f74', 'r_mobile_number', 't', 'c08'),
('f75', 'j_you_are', 's', 'c11');

-- --------------------------------------------------------

--
-- Table structure for table `health_and_fitness`
--

CREATE TABLE IF NOT EXISTS `health_and_fitness` (
  `f_name1` varchar(50) NOT NULL,
  `f_services_provided` varchar(20) NOT NULL,
  `f_Address1` varchar(500) NOT NULL,
  `f_contact_no1` varchar(15) NOT NULL,
  `ad_no` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_and_fitness`
--

INSERT INTO `health_and_fitness` (`f_name1`, `f_services_provided`, `f_Address1`, `f_contact_no1`, `ad_no`) VALUES
('Nirvana', 'Gym', 'Bhagwati Ashish,City light,Surat', '9727715421', NULL),
('Jay Kays Gym', 'Gym', 'Dhrumoter, opposite flr,Surat', '22575684', NULL),
('Body Line Health Club', 'seeling of equipment', 'Manu SmurtiSociety,Near Sai Palace,Pavat patia', '9374718271', NULL),
('Fitness Force', 'Gym+yoga', 'near Experimental high school,Surat', '2227988', NULL),
('Hally Ayu Care', 'Others', '203 Roman Point ,Varacha Road,Surat', '2548552', NULL),
('Kapadia Health Club', 'Others', '5 Tulsi Angan Appartment ,Surat', '2233813', NULL),
('Panch Ratna Health Club', 'Gym', 'Lg11/15 panch Ratna Tower, Opposite Sugar Spice, Parle point', '2503172', NULL),
('Staay Fit', 'Gym+yoga', 'Silver Spring Complex,Adajan,Surat', '3210300', NULL),
('Jariwala trading Pvt LTD', 'seeling of equipment', '701, World Trade Center, Ring Road,Surat.', '9879232323', NULL),
('Neo Electronical Appliance', 'seeling of equipment', 'C47, Functional Est Building,Udhna, Surat', '2277399', NULL),
('Slim Figure Center', 'Gym', 'A 101, Jim Palace ,Opposite Krishna Dairy, Bhattar Road ,Surat ', '2230190', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_and_lifestyle`
--

CREATE TABLE IF NOT EXISTS `home_and_lifestyle` (
  `c_id` varchar(5) NOT NULL,
  `home_id` varchar(5) NOT NULL,
  `ad_no` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`home_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_and_lifestyle`
--


-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `j_job_applied_for_field` varchar(25) NOT NULL,
  `j_experience` varchar(11) NOT NULL,
  `j_salary_range` int(9) NOT NULL,
  `j_user_type` varchar(11) NOT NULL,
  `j_qualification` varchar(15) NOT NULL,
  `j_address1` varchar(500) NOT NULL,
  `j_mobile_number1` varchar(20) NOT NULL,
  `j_name1` varchar(20) NOT NULL,
  `j_you_are1` varchar(20) NOT NULL,
  `ad_no` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`j_job_applied_for_field`, `j_experience`, `j_salary_range`, `j_user_type`, `j_qualification`, `j_address1`, `j_mobile_number1`, `j_name1`, `j_you_are1`, `ad_no`) VALUES
('REQUIRD GIRLS OR BOYS FOR', 'starting', 10, 'Full Time', 'no need', '', '', '', '', NULL),
('Internet Jobs', 'starting', 10, 'Part Time', 'hsc cleared', '', '', '', '', NULL),
('Client of Zillion Placeme', 'starting', 0, 'Full Time', 'Any Graduation', 'Chennai, Tamil Nadu, India', '08791272688', 'Mr. Atul', '', NULL),
('Accountent', 'starting', 0, 'Full Time', 'Bachelor', '', '9537143998', 'Vipul', 'Job Seeker', NULL),
('Web Designing', '1 year', 0, 'Part Time', 'Bachelor', '', '9537143998', 'Vipul', 'Job Seeker', NULL),
('Web Developer', '1 year', 0, 'Full Time', 'Graduate', '', '999818828', 'Sumit', 'Job Seeker', NULL),
('Web Designing', 'starting', 0, 'Part Time', 'Bachelor', '', '96016227440', 'Heena', 'Job Seeker', NULL),
('Actor', '3 years', 0, 'Part Time', 'Undergraduate', '', '9825447104', 'Pranay', 'Job Seeker', NULL),
('Web Developer', '3 years or ', 0, 'Full Time', 'Master', '', '9537143998', 'vipul malhotra', 'Job Recruiter', NULL),
('Sales manager', '1 year', 0, 'Full Time', 'Undergraduate', '', '9537143998', 'Pranay', 'Job Recruiter', NULL),
('programer', '2years', 0, 'Full Time', 'Master', '', '9537143998', 'Vinay', 'Job Recruiter', NULL),
('data entry', '1 year', 0, 'home based', 'Bachelor', '', '9537143998', 'Pranav', 'Job Recruiter', NULL),
('Naukri.com', '1 year', 0, '', 'Bachelor', '', '', 'Naukri.com', 'Job Consultancy', NULL),
('Monster.com', '1 year', 0, '', 'Bachelor', '', '', 'Monster.com', 'Job Consultancy', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `matrimonial`
--

CREATE TABLE IF NOT EXISTS `matrimonial` (
  `c_id1` varchar(5) NOT NULL,
  `a_name1` varchar(15) NOT NULL,
  `a_ad_for` varchar(15) NOT NULL,
  `a_m_age` varchar(15) NOT NULL,
  `a_m_height` varchar(15) NOT NULL,
  `a_marital_status` varchar(15) NOT NULL,
  `a_religion` varchar(15) NOT NULL,
  `a_mother_tongue` varchar(15) NOT NULL,
  `a_education` varchar(20) NOT NULL,
  `a_occupation` varchar(20) NOT NULL,
  `a_sun_sign` varchar(15) NOT NULL,
  `a_mobile_number1` varchar(10) NOT NULL,
  `ad_no` varchar(10) DEFAULT NULL,
  KEY `c_id` (`c_id1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matrimonial`
--

INSERT INTO `matrimonial` (`c_id1`, `a_name1`, `a_ad_for`, `a_m_age`, `a_m_height`, `a_marital_status`, `a_religion`, `a_mother_tongue`, `a_education`, `a_occupation`, `a_sun_sign`, `a_mobile_number1`, `ad_no`) VALUES
('', 'varun', 'Groom', '', '', 'Never married', 'Hindu', '', 'Bachelor', 'Private Sector', 'Aries', '', NULL),
('', 'Hemal  Dhameliy', 'Bride', '22', '5''7', 'Never married', 'Hindu', 'Gujarati', 'Bachelor', 'Others', 'Scorpio', '8866608049', NULL),
('', 'Heena Jain', 'Groom', '22', '5''7', 'Never married', 'Hindu', 'Marwari', 'Bachelor', 'Others', 'Scorpio', '9016227440', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_phones`
--

CREATE TABLE IF NOT EXISTS `mobile_phones` (
  `c_id1` varchar(5) NOT NULL,
  `m_you_are` varchar(10) NOT NULL,
  `m_price` varchar(10) NOT NULL,
  `m_mob_condition` varchar(15) NOT NULL,
  `m_brand` varchar(11) NOT NULL,
  `m_os` varchar(11) NOT NULL,
  `m_number_of_sims` varchar(10) NOT NULL,
  `m_unique_ad1` varchar(500) NOT NULL,
  `ad_no` varchar(10) DEFAULT NULL,
  KEY `c_id` (`c_id1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_phones`
--

INSERT INTO `mobile_phones` (`c_id1`, `m_you_are`, `m_price`, `m_mob_condition`, `m_brand`, `m_os`, `m_number_of_sims`, `m_unique_ad1`, `ad_no`) VALUES
('', 'Individual', '6700', 'New', 'HCL me u2', 'Anderoid', '', '', NULL),
('', 'Individual', '5000', 'Used', 'Micromax Ca', 'Anderoid', 'Dual', '', NULL),
('', 'Individual', '8900', 'New', 'Samsung Tre', 'Anderoid', 'Dual', 'Low price', NULL),
('', 'Individual', '2500', 'Used', 'Apple Ipone', 'Apple-ios', 'Single', 'low price', NULL),
('', 'Individual', '2000', 'Used', 'Apple ipone', 'Apple-ios', 'Dual', '', NULL),
('', 'Dealer', '12000', 'New', 'Samsung Gra', 'Anderoid', 'Dual', '', NULL),
('', 'Dealer', '18000', 'New', 'Micromax ca', 'Anderoid', 'Dual', '', NULL),
('', 'Dealer', '13000', 'New', 'samsung Cor', 'Anderoid', 'Dual', '', NULL),
('', 'Individual', '29000', 'New', 'Samsung s4', 'Anderoid', 'Dual', '', NULL),
('', 'Individual', '52000', 'New', 'Samsung gol', 'Anderoid', 'Dual', '', NULL),
('', 'Individual', '60000', 'New', 'Samsung Not', 'Anderoid', 'Dual', '', NULL),
('', 'Individual', '3000', 'Used', 'BlackBerry ', 'Blackberry', 'Single', '', NULL),
('', 'Individual', '32000', 'New', 'NokiaLumia ', 'Windows', 'Dual', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `mov_id` varchar(5) NOT NULL,
  `c_id` varchar(5) NOT NULL,
  `ad_no` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`mov_id`),
  KEY `c_id` (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--


-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `c_id` varchar(5) NOT NULL,
  `offer` varchar(10) NOT NULL,
  `ad_no` varchar(10) DEFAULT NULL,
  KEY `c_id` (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--


-- --------------------------------------------------------

--
-- Table structure for table `news_headlines`
--

CREATE TABLE IF NOT EXISTS `news_headlines` (
  `new_id` varchar(5) NOT NULL,
  `c_id` varchar(5) NOT NULL,
  `ad_no` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`new_id`),
  KEY `c_id` (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_headlines`
--


-- --------------------------------------------------------

--
-- Table structure for table `real_estate`
--

CREATE TABLE IF NOT EXISTS `real_estate` (
  `r_what_u_want_to` varchar(50) NOT NULL,
  `ad_no` varchar(10) NOT NULL,
  `r_address1` varchar(500) NOT NULL,
  `r_furnished` varchar(20) NOT NULL,
  `r_No_of_rooms` varchar(10) NOT NULL,
  `r_Area` varchar(25) NOT NULL,
  `r_you_are` varchar(15) NOT NULL,
  `r_ad_type1` varchar(20) NOT NULL,
  `r_carpetarea` varchar(30) NOT NULL,
  `r_mobile_number1` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `real_estate`
--

INSERT INTO `real_estate` (`r_what_u_want_to`, `ad_no`, `r_address1`, `r_furnished`, `r_No_of_rooms`, `r_Area`, `r_you_are`, `r_ad_type1`, `r_carpetarea`, `r_mobile_number1`) VALUES
('bunglow', '', 'Nr. Vegetable Market ,Adajan ,Surat', 'Unfurnished', '2 BHK', '13888 sq feet', 'Broker', 'Sell', '', ''),
('flat', '', 'Puniya Bhoomi,Vesu,Surat', 'Unfurnished', '3 BHK', '3699 persqr feet ', 'Broker', 'Sell', '1310 sq feer', ''),
('flat', '', 'Survey Number13, near Jk Pandey college,Vadod,Surat', 'Unfurnished', '3 BHK', '1104 sq feet', 'Broker', 'Sell', '', '9737330320'),
('flat', '', 'Survey number 13, Near JK PandeyCollege, Vadod, Surat', 'Unfurnished', '2 BHK', '1104 sq feet', 'Broker', 'Sell', '', '9737330320'),
('flat', '', 'Survey number 13, Near JK PandeyCollege, Vadod, Surat', 'Unfurnished', '1 BHK', '720 sq feet', 'Broker', 'Sell', '', '9737330320'),
('flat', '', 'Aakash Avenue,Near Sai residency,Althan Road ,Surat', 'Unfurnished', '3 BHK', '2150 sq feet', 'Broker', 'Sell', '', '9737330320'),
('flat', '', 'Aakash Avenue,Near Sai residency,Althan Road ,Surat', 'Unfurnished', '2 BHK', '1455 sq feet', 'Broker', '', '', '9737330320'),
('flat', '', 'Residentiall appartment,Near Somnath Mahdev, Parley point,Surat', 'Fully Furnished', '2 BHK', '4762 sq feet', 'Broker', 'Sell', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `u_id` varchar(5) NOT NULL,
  `contact_name` varchar(35) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `website` varchar(30) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`u_id`, `contact_name`, `username`, `email`, `password`, `contact_no`, `website`, `user_type`) VALUES
('01', 'abc', 'abc123', 'abc@fv.com', '123', '987654', '', 'advertiser'),
('02', 'ASD', 'ASD2', 'ASD@FV.COM', '789', '788', '', 'viewer'),
('03', 'lmn', 'lmn4', 'lmn5@fv.com', '789', '321', '', 'viewer'),
('04', 'xyz', 'xyz123', 'xyz@fv.com', '789', '654', '', 'viewer'),
('05', 'ab', 'abc12', 'abc@fv.com', 'abc123', '987654', '', 'advertiser'),
('06', 'aasd', 'assdf', 'aasd@hal.com', '123456', '1234567890', 'wertyt', 'advertiser'),
('07', 'abcd', 'abcd', 'ba@ac.com', '123456', '9999999999', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `ad_no` varchar(10) NOT NULL,
  `s_id` varchar(5) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--


-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `s_name` varchar(50) NOT NULL,
  `s_id` varchar(20) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  PRIMARY KEY (`s_id`),
  KEY `c_id` (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`s_name`, `s_id`, `c_id`) VALUES
('airline - travel', 's061', 'c11'),
('construction vehicles ', 's058', 'c09'),
('other electronic items', 's055', 'c05'),
('home theatre', 's054', 'c05'),
('music systems', 's053', 'c05'),
('desktops, PDAs and tablets', 's052', 'c05'),
('advertising, media and public relations', 's060', 'c11'),
('tax, audit, accounting and finance', 's059', 'c11'),
('SUVs and vans', 's057', 'c09'),
('motor service and repair', 's056', 'c09'),
('mobile handest', 's001', 'c06'),
('mobile accessories', 's002', 'c06'),
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
('houses-apartments for sale', 's016', 'c08'),
('houses-apartments for rent', 's017', 'c08'),
('land-plots for sale', 's018', 'c08'),
('office,shops-commercial', 's019', 'c08'),
('space', 's020', 'c08'),
('paying guest,hotels', 's021', 'c08'),
('vacation rentals and service', 's022', 'c08'),
('art,collectibles and hobbies', 's023', 'c07'),
('books and magzines', 's024', 'c07'),
('clothing and accessories', 's025', 'c07'),
('for babies and children ', 's026', 'c07'),
('furniture', 's027', 'c07'),
('garden', 's028', 'c07'),
('musical instrument', 's030', 'c07'),
('jewellery and watches', 's029', 'c07'),
('pets and accessories', 's032', 'c07'),
('sports and fitness', 's031', 'c07'),
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
('other household items', 's047', 'c07'),
('fax,EPABX , office equipments', 's048', 'c05'),
('UPS, invertors and generators', 's049', 'c05'),
('office supplies', 's050', 'c05'),
('i-pods,MP3 players', 's051', 'c05'),
('architects, interior designers', 's062', 'c11'),
('banking and finance insurance', 's063', 'c11'),
('BPO, call centre and KPO', 's064', 'c11'),
('catering - hospitality', 's065', 'c11'),
('content writers-translators', 's066', 'c11'),
('customer service', 's067', 'c11'),
('education - teaching', 's068', 'c11'),
('engineering', 's069', 'c11'),
('fashion designing and merchandising', 's070', 'c11'),
('freelancers', 's071', 'c11'),
('healthcare - medicine', 's072', 'c01'),
('internet - webdesigners', 's073', 'c01'),
('human resource', 's074', 'c11'),
('IT hardware', 's075', 'c11'),
('IT software', 's076', 'c11'),
('marketing', 's077', 'c11'),
('non-profit - NGO - volunteering jobs', 's078', 'c11'),
('part time ', 's079', 'c11'),
('real estate - construction', 's080', 'c11'),
('resumes', 's081', 'c11'),
('retail', 's082', 'c11'),
('sales', 's083', 'c11'),
('secretarial - office staff', 's084', 'c11'),
('summer trainees - freshers', 's085', 'c11'),
('telecom', 's086', 'c11'),
('work from home', 's087', 'c11'),
('art, entertainment, publishing jobs', 's088', 'c11'),
('clerical-administrative jobs', 's089', 'c11'),
('hotel jobs', 's090', 'c11'),
('legal jobs', 's091', 'c11'),
('mannual labour', 's092', 'c11'),
('manufacturing - operation jobs', 's093', 'c11'),
('restaurant, food service ', 's094', 'c11'),
('other jobs', 's095', 'c11'),
('Advertising - Designing-printing', 's096', 'c03'),
('Airline - Train - Bus Tickets', 's097', 'c03'),
('Astrology - Numerology', 's098', 'c03'),
('Business Offers', 's099', 'c03'),
('Baby Sitters - Nanny', 's100', 'c03'),
('Car Rentals - Taxi Services', 's101', 'c03'),
('Carpenters - Upholstery', 's102', 'c03'),
('Computer - Web Services', 's103', 'c03'),
('Cooks', 's104', 'c03'),
('Courier Services', 's105', 'c03'),
('doctors', 's106', 'c03'),
('drivers', 's107', 'c03'),
('DTH and set top boxes', 's108', 'c03'),
('elcetronics and appliances repair', 's109', 'c03'),
('event-party-planners-dj', 's110', 'c03'),
('Health - Fitness', 's111', 'c03'),
('Hotels - Resorts', 's112', 'c03'),
('Household Repairs - Renovation', 's113', 'c03'),
('Interior Designers - Architects', 's114', 'c03'),
('Investment - Financial Planning', 's115', 'c03'),
('Lawyers - Advocates', 's116', 'c03'),
('loans - insurance', 's117', 'c03'),
('maids and housekeeping', 's118', 'c03'),
('movers and packers', 's119', 'c03'),
('parlours and saloons', 's120', 'c03'),
('placement - recruitment agencies', 's121', 'c03'),
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
('IT services', 's132', 'c03'),
('repairs and maintenance , AMCs ', 's133', 'c03'),
('other serices ', 's134', 'c03'),
('career counselling', 's135', 'c01'),
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
('charity- donate - NGO', 's165', 'c12'),
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
('theatres - plays - movies', 's181', 'c18'),
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
('Visa & Other Travel Services', 's208', 'c10'),
('Hotels, Resorts', 's209', 'c10'),
('Homestays', 's210', 'c10'),
('House Boats', 's211', 'c10'),
('Taxi, Bus, Car Rentals', 's212', 'c10'),
('Tour Packages', 's003', 'c10'),
('Immigration Services', 's033', 'c10'),
('Tourist Guides, Companions', 's034', 'c10'),
('Travel Agents, Tour Operators', 's035', 'c10'),
('Tourist Information Bureau & Centers', 's213', 'c10');

-- --------------------------------------------------------

--
-- Table structure for table `travel_and_tourism`
--

CREATE TABLE IF NOT EXISTS `travel_and_tourism` (
  `ad_no` varchar(5) NOT NULL,
  `t_address1` varchar(500) NOT NULL,
  `t_service_we_provide` varchar(15) NOT NULL,
  `t_name1` varchar(50) NOT NULL,
  `t_mobile_number1` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_and_tourism`
--

INSERT INTO `travel_and_tourism` (`ad_no`, `t_address1`, `t_service_we_provide`, `t_name1`, `t_mobile_number1`) VALUES
('', '101, Vishwakarma Chambers, 1st Floor Near radha krishna Hotel,majura gate', 'All ', 'Jirawala Tourism', '02612462669'),
('', 'F22/23, Jolly Arcade,', 'All ', 'Ace Tours', '02612656850'),
('', 'L-20 ,Jolly Plaza, Girls polytechnic College, Athwagate, Surat', 'All ', 'Make My Holidays', '02614001004'),
('', '409, Classic Complex, Opp A.V Sons.Parle Point,Ghod Dod Road,Surat', 'flight booking', 'Rama Tours & Travel', '02613028377'),
('', 'U-24 Jolly Shopping Point,Opp Abhinandan A.C Market,Ghod Dod Road,Surat', 'All ', 'Travel Top India', '9898096445'),
('', '14 sms ,Shopping Center Sahra Darwaja,Ring Road', 'Hire of car', 'King Travel', '02612337205'),
('', 'LG 108, Shiv Shakti Complex, Ramchock Road,Ghod Dod', 'Hire of car', 'Marity Tours and Travels', '9825570174'),
('', 'L 26 ,Sargam Shopping Center,parle point,Surat', 'Tour package', 'Amu Holidays', '9574650009'),
('', '302, Ishwar Krupa, Opp Central Bank Of India, Nanpura', 'All ', 'Manokama Tour and Travels', '9825950080'),
('', '12/559 Noor Manzil, opp union High School', 'Hire of car', 'Alfa travels', '9825534333');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `ad_no` varchar(10) NOT NULL,
  `v_model` varchar(11) NOT NULL,
  `v_year` varchar(4) NOT NULL,
  `v_mileage` varchar(11) NOT NULL,
  `v_fuel` varchar(11) NOT NULL,
  `v_condition_of_vehicles` varchar(5) NOT NULL,
  `v_colour` varchar(11) NOT NULL,
  `v_insurance_and_tax` varchar(50) NOT NULL,
  `v_kms_run` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`ad_no`, `v_model`, `v_year`, `v_mileage`, `v_fuel`, `v_condition_of_vehicles`, `v_colour`, `v_insurance_and_tax`, `v_kms_run`) VALUES
('06', 'm12', '2013', '', '', '', '', 'n.a.', '900'),
('', '', '', '123', '', '', '', '', ''),
('', 'q12', '2013', '6778', '', '', '', 'na', '123'),
('', 'q12', '2013', '345', 'petrol', '', '', 'na', '123'),
('', 'q23', '2013', '456', 'petrol', '', 'red', 'n.a.', '123'),
('', 'q12', '2013', '345', 'petrol', 'new', 'red', 'n.a,', '123'),
('', 'm12', '2013', '345', 'petrol', 'new', 'red', 'n.a.', '1213'),
('', '', '2013', '', 'petrol', '', '', '', ''),
('', '', '2013', '', 'petrol', '', '', '', ''),
('', '', '2013', '', 'petrol', '', '', '', '12'),
('', '', '2013', '', 'petrol', '', '', '', ''),
('', '2', '2012', '2', 'petrol', '', '', '2', '22'),
('', 'a1', '2013', '2', 'petrol', 'a1', '', '2', '500'),
('', 'w12', '2013', '123', 'petrol', 'new', 'red', 'na', '12'),
('', '2', '2013', '2', 'petrol', '2', '2', '2', '2');
