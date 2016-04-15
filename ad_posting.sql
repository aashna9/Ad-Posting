-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2014 at 01:46 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

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
-- Table structure for table `ad_comments`
--

CREATE TABLE IF NOT EXISTS `ad_comments` (
  `com_description` longtext NOT NULL,
  `com_id` varchar(50) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `ad_no` varchar(50) NOT NULL,
  `commented_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_comments`
--

INSERT INTO `ad_comments` (`com_description`, `com_id`, `u_id`, `ad_no`, `commented_date`) VALUES
('On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you cr', '01', '03', '02', '0000-00-00'),
('You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most con', '02', '05', '02', '0000-00-00'),
('Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always ', '', '05', '02', '0000-00-00'),
('NET PHP SQL tutorials, references, examples for web building. ... Create a back button on a page:', '', '05', '02', '0000-00-00'),
('CREATE TABLE  `ad_posting`.`abc` (\r\n`xyz` VARCHAR( 7 ) NOT NULL ,\r\n`qwe` INT NOT NULL\r\n)', '', '05', '02', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ad_details`
--

CREATE TABLE IF NOT EXISTS `ad_details` (
  `ad_no` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
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
  `ad_email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `views` int(11) NOT NULL,
  `responses` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  KEY `c_id` (`c_id`),
  KEY `s_id` (`s_id`),
  KEY `u_id` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_details`
--

INSERT INTO `ad_details` (`ad_no`, `email`, `s_id`, `c_id`, `city`, `state`, `ad_title`, `ad_description`, `posted_date`, `price`, `ad_image`, `website`, `ad_email`, `contact`, `views`, `responses`, `status`) VALUES
('a01', 'abc@fv.com', 's001', 'c06', 'surat', 'gujarat', 'nikon camera in best price', 'new camera of grey colour.it is having 15, charts, or diagrams, they also coordinate with your current dth the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n', '2013-07-15', 999, 'upload/p3.jpg', 'coolpix@nikon.com', '', '', 1, 2, 'active'),
('a02', 'abc@fv.com', 's018', 'c08', 'ahmedabad', 'gujarat', 'nikon cool price on sale', 'On the Insert tab, the galleries include itick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n', '2013-07-05', 851, 'upload/p4.jpg', 'nikon@gmail.com', '', '', 3, 1, 'active'),
('a03', 'abc@fv.com', 's009', 'c10', 'delhi', 'delhi', 'On the Insert tab, the galleries include', 'get free tutoriae the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n\r\n', '2013-07-14', 0, '', '', '', '', 1, 0, 'active'),
('a04', '05', 's001', 'c06', '', '', 'On the Insert tab, the galleries include items that are designed to coordinate ', 'u can get here exclusivelyOn the Insert tab, the galleries include items that are designed to coordinate On the Insert tab, the galleries include items that are designed to coordinate get free tutorials of php and many more exclusively on this site.\r\nOn the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\nget free tutorials of php and many more exclusively on this site.\r\nOn the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.', '0000-00-00', 0, '', 'website', '', '', 1, 4, 'active'),
('a05', '05', 's018', 'c08', 'srat', 'sura', 'On the Insert tab, the galleries include items that are designed ', 'On the Insert tab, the galleries include items that are designed On the Insert tab, the galleries include items that are designed get free tutorials of php and many more exclusively on this site.\r\nOn the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\n\r\nget free tutorials of php and many more exclusively on this site.\r\nOn the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.', '2012-09-10', 1233, 'upload/p1.jpg', 'website', '', '', 3, 0, 'active'),
('a06', '05', 's010', 'c09', 'pune	', 'MAHARASHTRA	', 'On the Insert tab, the galleries include', 'On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\nYou can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\nTo change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n', '2013-08-19', 4500, 'upload/p2.jpg', 'website', '', '', 1, 6, 'active'),
('a07', '07', 's018', 'c08', 'calcutta', 'wb', 'On the Insert tab, the galleries include items that are designed ', 'On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\nYou can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\nTo change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n', '2012-01-01', 923, '', '1213@fv.in', '', '', 0, 0, ''),
('a16', 'p', 's135', 'c01', 'p', 'pp', 'p', 'p', '0000-00-00', 0, '', 'p', '', 'p', 0, 0, ''),
('a15', 'll', 's193', 'c02', 'll', 'l', 'l', 'l', '0000-00-00', 0, '', 'l', '', 'l', 0, 0, ''),
('a14', 'ii', 's096', 'c03', 'i', 'i', 'i', 'i', '0000-00-00', 0, '', 'ii', '', 'i', 0, 0, ''),
('', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '', 0, 0, ''),
('a13', 'h', 's096', 'c03', 'h', 'h', 'h', 'hh', '0000-00-00', 0, '', 'h', '', 'h', 0, 0, ''),
('a12', 'abc@fv.com', '', 'c02', '', '', '', '', '0000-00-00', 0, '', '', '', '', 0, 0, ''),
('a11', 'f', 's193', 'c02', 'f', 'f', 'ff', 'f', '0000-00-00', 0, '', 'f', '', 'ff', 0, 0, ''),
('a9', 'hh', 's135', 'c01', 'h', 'h', 'h', 'hh', '0000-00-00', 0, '', 'h', '', 'h', 0, 0, ''),
('a10', 'k', 's135', 'c01', 'kk', 'k', 'kk', 'k', '0000-00-00', 0, '', 'k', '', 'kk', 0, 0, ''),
('a17', 'w', 's135', 'c01', 'w', 'w', 'w', 'w', '0000-00-00', 0, '', 'www', '', 'w', 0, 0, ''),
('a18', 'u', 's135', 'c01', 'u', 'uu', 'uu', 'u', '0000-00-00', 0, '', 'u', '', 'u', 0, 0, ''),
('a19', 'k', 's135', 'c01', 'k', 'kk', 'kk', 'k', '0000-00-00', 0, '', 'k', '', 'k', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `ad_images`
--

CREATE TABLE IF NOT EXISTS `ad_images` (
  `img_id` varchar(30) NOT NULL,
  `path` varchar(50) NOT NULL,
  `ad_no` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_images`
--

INSERT INTO `ad_images` (`img_id`, `path`, `ad_no`) VALUES
('i2', 'upload/i2.jpg', 'a17'),
('i1', 'upload/i1.jpg', 'a01'),
('i3', 'upload/i3.jpg', 'a18'),
('i4', 'upload/i4.jpg', 'a19');

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
('matrimonial', 'c14'),
('news_headlines', 'c15'),
('entertainment', 'c13');

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE IF NOT EXISTS `community` (
  `ad_no1` varchar(10) NOT NULL,
  `c_t_address1` varchar(500) NOT NULL,
  `c_s_select_field` varchar(50) NOT NULL,
  `c_d_starting_date` date NOT NULL,
  `c_d_valid_till` date NOT NULL,
  KEY `c_id` (`ad_no1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `community`
--


-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `ad_no1` varchar(10) NOT NULL,
  `b_t_address1` varchar(500) NOT NULL,
  `b_s_experience` varchar(50) NOT NULL,
  `b_c_courses` varchar(125) NOT NULL,
  `b_t_mobile_no1` varchar(15) NOT NULL,
  `b_t_name1` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`ad_no1`, `b_t_address1`, `b_s_experience`, `b_c_courses`, `b_t_mobile_no1`, `b_t_name1`) VALUES
('a11', 'G 40/ Nav Manglam,City Light,Surat', 'more then 3 years', 'Computer course', '98257711678', 'Future Vision'),
('', 'corner Point Complex', 'more then 3 years', 'SCIENCE', '09825715276', 'Universe Classes'),
('', 'A-302,Aakash Avenue ,Althan,Surat', '1 year', 'only Maths', '9537143998', 'Raj rani Classes'),
('', 'Shop No.201 B, 1st Floor,  Raj Mandir Plaza, near G.D Goenka School, Vesu.', '3 years', 'Drawing', '98241 83737', 'Sai Raj Art Academy'),
('', 'M-401, Shiv Shakti Shopping Complex, Ghod Dod Road, Surat ', 'more then 3 years', 'College Studies', '9374716149', 'Pt Education'),
('', 'Block No 303, Yash Plaza', '2 years', 'College Studies', '9825442418', 'Forum Languages'),
('', 'Flat No 3, Annapurna Shopping Centre, Rander Road, Adajan', '1 year', 'Languages', '0261 2781428', 'National Classes'),
('', 'Shop No-9, Pramukh Chambers, Rander Road, Rander, Sura', '1 year', 'Languages', '9227215989', 'Royal Education Centre'),
('', '208, Poddar Plaza, Turning Point, Bhatar Road, Surat ', '2 years', 'Languages', '9343540356', 'Bloom Academy'),
('', 'Rowhouse B/40, Yogikrupa Society, Bhatar Road, Surat ', '1 year', 'Languages', '9662046544 ', 'Samarpan Classes');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE IF NOT EXISTS `electronics` (
  `ad_no1` varchar(10) NOT NULL,
  `e_r_condition` varchar(30) NOT NULL,
  `e_r_user_type1` varchar(11) NOT NULL,
  `e_s_brand` varchar(30) NOT NULL,
  `e_t_price` varchar(30) NOT NULL,
  `e_s_want_to_sell` varchar(50) NOT NULL,
  `e_t_firm_name1` varchar(50) NOT NULL,
  `e_t_address1` varchar(500) NOT NULL,
  `e_t_mobile_number1` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`ad_no1`, `e_r_condition`, `e_r_user_type1`, `e_s_brand`, `e_t_price`, `e_s_want_to_sell`, `e_t_firm_name1`, `e_t_address1`, `e_t_mobile_number1`) VALUES
('a9', 'New', 'Individual', 'L.G', '40000', 'Refrigerator', 'Balaji TV''s', 'Pandesara', ''),
('', 'Used', 'Individual', 'samsung', '10000', 'Refrigerator', '', 'Mumbai, Maharashtra, India', '08655333191'),
('', 'New', 'Individual', 'L.G', '18000', 'Refrigerator', '', 'Model town ,Delhi', '09998046590'),
('', 'Used', 'Individual', 'phillips', '2500', 'Others', '', 'Guwahati, Assam, India', ''),
('', 'Used', 'Individual', 'Sony', '25000', 'Computer & Laptops', 'Abhishek mishra', 'bharath university,selayur,agram road SELAIYUR', '08438480800'),
('', 'Used', 'Individual', 'Others', '3500', 'Others', '', 'Vellore, Tamil Nadu, India', '7708694166'),
('', 'Used', 'Individual', 'Others', '4200', 'Home appliance', '', 'Anand, Gujarat, India', '9879007994'),
('', 'Used', 'Individual', 'samsung', '', 'Camera', '', 'Indore, Madhya Pradesh, India', '9406588919'),
('', 'New', 'Individual', 'samsung', '50000', 'Computer & Laptops', '', 'Chennai, Tamil Nadu, India', '07708223456'),
('', 'Used', 'Individual', 'Others', '38000', 'Television', '', 'Chennai, Tamil Nadu, India', '9952988909');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE IF NOT EXISTS `entertainment` (
  `ad_no1` varchar(5) NOT NULL,
  `en_id` varchar(5) NOT NULL,
  PRIMARY KEY (`en_id`),
  KEY `c_id` (`ad_no1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment`
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
  `ad_no1` varchar(10) NOT NULL,
  `d_c_type_of_food` varchar(20) NOT NULL,
  `d_t_Hotel_name1` varchar(50) NOT NULL,
  `d_t_address1` varchar(500) NOT NULL,
  `d_t_mobile_no1` varchar(10) NOT NULL,
  `d_r_sevices` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_and_dining`
--

INSERT INTO `food_and_dining` (`ad_no1`, `d_c_type_of_food`, `d_t_Hotel_name1`, `d_t_address1`, `d_t_mobile_no1`, `d_r_sevices`) VALUES
('a8', 'VEG', 'BEST WESTERN Yuvraj', '7/278/A1 ,Gulambaba Mill Compound,Opp. Railway Station, Laldarwaja, Varachha, Surat', '6505471', 'Resturents'),
('', 'VEG', 'Tex Palazzo Hotel', 'Ring Road, Textile Market, Surat', '6616018', 'Resturents'),
('', 'VEG', 'Ginger', 'Off Dumus Road, Near Iskon Mall, Piplod, Surat, ', '6666333', 'Resturents'),
('', 'VEG', 'Hotel Ostria', '6th Floor, Meghani Tower, Cinema Road, Delhi Gate, Station Rd, Mahindra Pur, Begampura, Surat', '2423133', 'Resturents'),
('', 'VEG+NONVEG', 'The Grand bhagwati', 'Dumas road,surat', '3980111', 'Part Hall'),
('', 'VEG', 'HOTEL APEX', 'RING ROAD, OPP LINEAR BUS STAND, DELHI GATE, SURAT 395003', '9426754634', 'Resturents'),
('', 'VEG+NONVEG', 'Budget Inn Bellevue', 'Near Railway Station; Sumul Dairy Road, Surat, ', '2532020', 'Resturents'),
('', 'VEG+NONVEG', 'The Gateway Hotel', 'Ghod Dod,surat', '6697000', 'Metting area'),
('', 'VEG+NONVEG', 'The Top Magnificent Banquets ', '4th Floor,Ripple, Above Croma, Opposite Iscon Mall, Piplod, Surat - 395007', '9227944341', 'Part Hall'),
('', 'VEG', 'HOTEL GOLDEN PLAZA', 'OPP TOWN HALL, NR KARNAVATI HOSPITAL, ELLISBRIDGE, AHMEDABAD 380006', '+(91)-79-2', 'Resturents');

-- --------------------------------------------------------

--
-- Table structure for table `form_fields`
--

CREATE TABLE IF NOT EXISTS `form_fields` (
  `f_id` varchar(10) NOT NULL,
  `field_name` varchar(30) NOT NULL,
  `c_id` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_fields`
--

INSERT INTO `form_fields` (`f_id`, `field_name`, `c_id`) VALUES
('f01', 'v_t_kms_run', 'c09'),
('f02', 'v_t_insurance_and_tax', 'c09'),
('f03', 'v_t_model', 'c09'),
('f04', 'v_s_year', 'c09'),
('f05', 'v_t_mileage', 'c09'),
('f06', 'v_s_fuel', 'c09'),
('f07', 'v_t_condition_of_vehicles', 'c09'),
('f08', 'v_t_colour', 'c09'),
('f09', 'm_r_you_are', 'c06'),
('f10', 'm_r_mob_condition', 'c06'),
('f11', 'm_t_price', 'c06'),
('f12', 'm_t_brand', 'c06'),
('f13', 'm_s_os', 'c06'),
('f14', 'm_r_number_of_sims', 'c06'),
('f15', 'm_t_unique_ad1', 'c06'),
('f16', 'a_t_name1', 'c14'),
('f17', 'a_s_ad_for', 'c14'),
('f18', 'a_t_age', 'c14'),
('f19', 'a_t_height', 'c14'),
('f20', 'a_s_marital_status', 'c14'),
('f21', 'a_s_religion', 'c14'),
('f22', 'a_t_mother_tongue', 'c14'),
('f23', 'a_s_education', 'c14'),
('f24', 'a_s_occupation', 'c14'),
('f25', 'a_s_sun_sign', 'c14'),
('f26', 'a_t_mobile_number1', 'c14'),
('f27', 'f_s_services_provided', 'c04'),
('f28', 'f_t_Address1', 'c04'),
('f29', 'j_t_job_applied_for_field', 'c11'),
('f30', 'j_s_experience', 'c11'),
('f31', 'j_t_salary_range', 'c11'),
('f32', 'j_r_user_type', 'c11'),
('f33', 'j_s_qualification', 'c11'),
('f34', 'r_t_address1', 'c08'),
('f35', 'r_r_furnished', 'c08'),
('f36', 'r_s_No_of_rooms', 'c08'),
('f37', 'r_t_Area', 'c08'),
('f38', 'r_r_you_are', 'c08'),
('f39', 'r_r_ad_type', 'c08'),
('f40', 'r_t_carpetarea', 'c08'),
('f42', 'd_c_type_of_food', 'c02'),
('f43', 'd_t_address1', 'c02'),
('f60', 'd_t_mobile_no1', 'c02'),
('f44', 'd_r_sevices', 'c02'),
('f46', 'r_s_what_u_want_to', 'c08'),
('f48', 'e_r_condition', 'c05'),
('f49', 'e_r_user_type1', 'c05'),
('f50', 'e_s_brand', 'c05'),
('f51', 'c_t_address1', 'c12'),
('f52', 'c_s_select_field', 'c12'),
('f53', 'c_d_starting_date', 'c12'),
('f54', 'c_d_valid_till', 'c12'),
('f55', 'b_t_address1', 'c01'),
('f56', 'b_c_courses', 'c01'),
('f57', 'b_s_experience', 'c01'),
('f58', 't_t_address1', 'c10'),
('f59', 't_s_service_we_provide', 'c10'),
('f41', 'd_t_Hotel_name1', 'c02'),
('f62', 'e_s_want_to_sell', 'c05'),
('f63', 'e_t_price', 'c05'),
('f64', 'b_t_mobile_no1', 'c01'),
('f65', 'b_t_name1', 'c01'),
('f66', 'e_t_firm_name1', 'c05'),
('f67', 'e_t_address1', 'c05'),
('f68', 'e_t_mobile_number1', 'c05'),
('f69', 'j_t_address1', 'c11'),
('f70', 'j_t_mobile_number1', 'c11'),
('f71', 'j_t_name1', 'c11'),
('f72', 't_t_name1', 'c10'),
('f73', 't_t_mobile_number1', 'c10'),
('f74', 'r_t_mobile_number1', 'c08'),
('f61', 'j_s_you_are1', 'c11'),
('f45', 'f_t_contact_no1', 'c04'),
('f47', 'f_t_name1', 'c04');

-- --------------------------------------------------------

--
-- Table structure for table `health_and_fitness`
--

CREATE TABLE IF NOT EXISTS `health_and_fitness` (
  `ad_no1` varchar(10) NOT NULL,
  `f_t_name1` varchar(50) NOT NULL,
  `f_s_services_provided` varchar(20) NOT NULL,
  `f_t_Address1` varchar(500) NOT NULL,
  `f_t_contact_no1` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_and_fitness`
--

INSERT INTO `health_and_fitness` (`ad_no1`, `f_t_name1`, `f_s_services_provided`, `f_t_Address1`, `f_t_contact_no1`) VALUES
('a07', 'Nirvana', 'Gym', 'Bhagwati Ashish,City light,Surat', '9727715421'),
('', 'Jay Kays Gym', 'Gym', 'Dhrumoter, opposite flr,Surat', '22575684'),
('', 'Body Line Health Club', 'seeling of equipment', 'Manu SmurtiSociety,Near Sai Palace,Pavat patia', '9374718271'),
('', 'Fitness Force', 'Gym+yoga', 'near Experimental high school,Surat', '2227988'),
('', 'Hally Ayu Care', 'Others', '203 Roman Point ,Varacha Road,Surat', '2548552'),
('', 'Kapadia Health Club', 'Others', '5 Tulsi Angan Appartment ,Surat', '2233813'),
('', 'Panch Ratna Health Club', 'Gym', 'Lg11/15 panch Ratna Tower, Opposite Sugar Spice, Parle point', '2503172'),
('', 'Staay Fit', 'Gym+yoga', 'Silver Spring Complex,Adajan,Surat', '3210300'),
('', 'Jariwala trading Pvt LTD', 'seeling of equipment', '701, World Trade Center, Ring Road,Surat.', '9879232323'),
('', 'Neo Electronical Appliance', 'seeling of equipment', 'C47, Functional Est Building,Udhna, Surat', '2277399'),
('', 'Slim Figure Center', 'Gym', 'A 101, Jim Palace ,Opposite Krishna Dairy, Bhattar Road ,Surat ', '2230190');

-- --------------------------------------------------------

--
-- Table structure for table `home_and_lifestyle`
--

CREATE TABLE IF NOT EXISTS `home_and_lifestyle` (
  `ad_no1` varchar(10) NOT NULL,
  `home_id` varchar(5) NOT NULL,
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
  `ad_no1` varchar(10) NOT NULL,
  `j_t_job_applied_for_field` varchar(25) NOT NULL,
  `j_s_experience` varchar(11) NOT NULL,
  `j_t_salary_range` int(9) NOT NULL,
  `j_r_user_type` varchar(11) NOT NULL,
  `j_s_qualification` varchar(15) NOT NULL,
  `j_t_address1` varchar(500) NOT NULL,
  `j_t_mobile_number1` varchar(20) NOT NULL,
  `j_t_name1` varchar(20) NOT NULL,
  `j_s_you_are1` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`ad_no1`, `j_t_job_applied_for_field`, `j_s_experience`, `j_t_salary_range`, `j_r_user_type`, `j_s_qualification`, `j_t_address1`, `j_t_mobile_number1`, `j_t_name1`, `j_s_you_are1`) VALUES
('a06', 'REQUIRD GIRLS OR BOYS FOR', 'starting', 10, 'Full Time', 'no need', '', '', '', ''),
('', 'Internet Jobs', 'starting', 10, 'Part Time', 'hsc cleared', '', '', '', ''),
('', 'Client of Zillion Placeme', 'starting', 0, 'Full Time', 'Any Graduation', 'Chennai, Tamil Nadu, India', '08791272688', 'Mr. Atul', ''),
('', 'Accountent', 'starting', 0, 'Full Time', 'Bachelor', '', '9537143998', 'Vipul', 'Job Seeker'),
('', 'Web Designing', '1 year', 0, 'Part Time', 'Bachelor', '', '9537143998', 'Vipul', 'Job Seeker'),
('', 'Web Developer', '1 year', 0, 'Full Time', 'Graduate', '', '999818828', 'Sumit', 'Job Seeker'),
('', 'Web Designing', 'starting', 0, 'Part Time', 'Bachelor', '', '96016227440', 'Heena', 'Job Seeker'),
('', 'Actor', '3 years', 0, 'Part Time', 'Undergraduate', '', '9825447104', 'Pranay', 'Job Seeker'),
('', 'Web Developer', '3 years or ', 0, 'Full Time', 'Master', '', '9537143998', 'vipul malhotra', 'Job Recruiter'),
('', 'Sales manager', '1 year', 0, 'Full Time', 'Undergraduate', '', '9537143998', 'Pranay', 'Job Recruiter'),
('', 'programer', '2years', 0, 'Full Time', 'Master', '', '9537143998', 'Vinay', 'Job Recruiter'),
('', 'data entry', '1 year', 0, 'home based', 'Bachelor', '', '9537143998', 'Pranav', 'Job Recruiter'),
('', 'Naukri.com', '1 year', 0, '', 'Bachelor', '', '', 'Naukri.com', 'Job Consultancy'),
('', 'Monster.com', '1 year', 0, '', 'Bachelor', '', '', 'Monster.com', 'Job Consultancy');

-- --------------------------------------------------------

--
-- Table structure for table `matrimonial`
--

CREATE TABLE IF NOT EXISTS `matrimonial` (
  `ad_no1` varchar(10) NOT NULL,
  `a_t_name1` varchar(15) NOT NULL,
  `a_s_ad_for` varchar(15) NOT NULL,
  `a_t_age` int(15) NOT NULL,
  `a_s_marital_status` varchar(15) NOT NULL,
  `a_s_religion` varchar(15) NOT NULL,
  `a_t_mother_tongue` varchar(15) NOT NULL,
  `a_s_education` varchar(20) NOT NULL,
  `a_s_occupation` varchar(20) NOT NULL,
  `a_s_sun_sign` varchar(15) NOT NULL,
  `a_t_mobile_number1` varchar(10) NOT NULL,
  KEY `c_id` (`ad_no1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matrimonial`
--

INSERT INTO `matrimonial` (`ad_no1`, `a_t_name1`, `a_s_ad_for`, `a_t_age`, `a_s_marital_status`, `a_s_religion`, `a_t_mother_tongue`, `a_s_education`, `a_s_occupation`, `a_s_sun_sign`, `a_t_mobile_number1`) VALUES
('a05', 'varun', 'Groom', 0, 'Never married', 'Hindu', '', 'Bachelor', 'Private Sector', 'Aries', ''),
('', 'Hemal  Dhameliy', 'Bride', 5, 'Never married', 'Hindu', 'Gujarati', 'Bachelor', 'Others', 'Scorpio', '8866608049'),
('', 'Heena Jain', 'Groom', 5, 'Never married', 'Hindu', 'Marwari', 'Bachelor', 'Others', 'Scorpio', '9016227440'),
('', '', '', 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_phones`
--

CREATE TABLE IF NOT EXISTS `mobile_phones` (
  `ad_no1` varchar(10) NOT NULL,
  `m_r_you_are` varchar(10) NOT NULL,
  `m_t_price` int(10) NOT NULL,
  `m_r_mob_condition` varchar(15) NOT NULL,
  `m_t_brand` varchar(11) NOT NULL,
  `m_s_os` varchar(11) NOT NULL,
  `m_r_number_of_sims` varchar(10) NOT NULL,
  `m_t_unique_ad1` varchar(500) NOT NULL,
  KEY `c_id` (`ad_no1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_phones`
--

INSERT INTO `mobile_phones` (`ad_no1`, `m_r_you_are`, `m_t_price`, `m_r_mob_condition`, `m_t_brand`, `m_s_os`, `m_r_number_of_sims`, `m_t_unique_ad1`) VALUES
('a01', 'Individual', 6700, 'New', 'HCL me u2', 'Anderoid', '', ''),
('', 'Individual', 5000, 'Used', 'Micromax Ca', 'Anderoid', 'Dual', ''),
('', 'Individual', 8900, 'New', 'Samsung Tre', 'Anderoid', 'Dual', 'Low price'),
('', 'Individual', 2500, 'Used', 'Apple Ipone', 'Apple-ios', 'Single', 'low price'),
('', 'Individual', 2000, 'Used', 'Apple ipone', 'Apple-ios', 'Dual', ''),
('', 'Dealer', 12000, 'New', 'Samsung Gra', 'Anderoid', 'Dual', ''),
('', 'Dealer', 18000, 'New', 'Micromax ca', 'Anderoid', 'Dual', ''),
('', 'Dealer', 13000, 'New', 'samsung Cor', 'Anderoid', 'Dual', ''),
('', 'Individual', 29000, 'New', 'Samsung s4', 'Anderoid', 'Dual', ''),
('', 'Individual', 52000, 'New', 'Samsung gol', 'Anderoid', 'Dual', ''),
('', 'Individual', 60000, 'New', 'Samsung Not', 'Anderoid', 'Dual', ''),
('', 'Individual', 3000, 'Used', 'BlackBerry ', 'Blackberry', 'Single', ''),
('', 'Individual', 32000, 'New', 'NokiaLumia ', 'Windows', 'Dual', '');

-- --------------------------------------------------------

--
-- Table structure for table `news_headlines`
--

CREATE TABLE IF NOT EXISTS `news_headlines` (
  `ad_no1` varchar(10) NOT NULL,
  `new_id` varchar(5) NOT NULL,
  PRIMARY KEY (`new_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_headlines`
--


-- --------------------------------------------------------

--
-- Table structure for table `real_estate`
--

CREATE TABLE IF NOT EXISTS `real_estate` (
  `ad_no1` varchar(10) NOT NULL,
  `r_s_what_u_want_to` varchar(50) NOT NULL,
  `r_t_address1` varchar(500) NOT NULL,
  `r_r_furnished` varchar(20) NOT NULL,
  `r_s_No_of_rooms` varchar(10) NOT NULL,
  `r_t_Area` int(25) NOT NULL,
  `r_r_you_are` varchar(15) NOT NULL,
  `r_r_ad_type1` varchar(20) NOT NULL,
  `r_t_carpetarea` varchar(30) NOT NULL,
  `r_mobile_number1` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `real_estate`
--

INSERT INTO `real_estate` (`ad_no1`, `r_s_what_u_want_to`, `r_t_address1`, `r_r_furnished`, `r_s_No_of_rooms`, `r_t_Area`, `r_r_you_are`, `r_r_ad_type1`, `r_t_carpetarea`, `r_mobile_number1`) VALUES
('a02', 'bunglow', 'Nr. Vegetable Market ,Adajan ,Surat', 'Unfurnished', '2 BHK', 13888, 'Broker', 'Sell', 'N.A.', 'N.A.'),
('a05', 'flat', 'Puniya Bhoomi,Vesu,Surat', 'Unfurnished', '3 BHK', 3699, 'Broker', 'Sell', '1310 sq feer', 'N.A.'),
('a07', 'flat', 'Survey Number13, near Jk Pandey college,Vadod,Surat', 'Unfurnished', '3 BHK', 1104, 'Broker', 'Sell', 'N.A.', '9737330320'),
('', 'flat', 'Survey number 13, Near JK PandeyCollege, Vadod, Surat', 'Unfurnished', '2 BHK', 1104, 'Broker', 'Sell', '', '9737330320'),
('', 'flat', 'Survey number 13, Near JK PandeyCollege, Vadod, Surat', 'Unfurnished', '1 BHK', 720, 'Broker', 'Sell', '', '9737330320'),
('', 'flat', 'Aakash Avenue,Near Sai residency,Althan Road ,Surat', 'Unfurnished', '3 BHK', 2150, 'Broker', 'Sell', '', '9737330320'),
('', 'flat', 'Aakash Avenue,Near Sai residency,Althan Road ,Surat', 'Unfurnished', '2 BHK', 1455, 'Broker', '', '', '9737330320'),
('', 'flat', 'Residentiall appartment,Near Somnath Mahdev, Parley point,Surat', 'Fully Furnished', '2 BHK', 4762, 'Broker', 'Sell', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `fname` varchar(35) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact_no` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `email`, `password`, `contact_no`) VALUES
('abc', 'abc123', 'abc@fv.com', '123', '987654'),
('ASD', 'ASD2', 'ASD@FV.COM', '789', '788'),
('lmn', 'lmn4', 'lmn5@fv.com', '789', '321'),
('xy12', 'ab12', 'xyz@fv.com', '789', '4512'),
('aasd', 'assdf', 'aasd@hal.com', '123456', '1234567890'),
('abcd', 'abcd', 'ba@ac.com', '123456', '9999999999'),
('qqqqq', 'qqqq', 'qqq@qw.qq', 'qqqqqq', '1111111111');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `ad_no1` varchar(10) DEFAULT NULL
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
('music systems - home theatres', 's053', 'c05'),
('desktops, laptops - tablets', 's052', 'c05'),
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
('paying guest,hotels', 's021', 'c08'),
('vacation rentals and service', 's022', 'c08'),
('art,collectibles and hobbies', 's023', 'c07'),
('books and magzines', 's024', 'c07'),
('clothing - garments', 's025', 'c07'),
('for babies and children ', 's026', 'c07'),
('furniture - garden supplies', 's027', 'c07'),
('musical instrument', 's030', 'c07'),
('jewellery and watches', 's029', 'c07'),
('pets and accessories', 's032', 'c07'),
('sports and fitness', 's031', 'c07'),
('home decor furnishings', 's036', 'c07'),
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
('retail', 's124', 'c03'),
('taxation-audit', 's125', 'c03'),
('vaastu', 's127', 'c03'),
('consultants', 's129', 'c03'),
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
('Coaching, Tuitions', 's142', 'c01'),
('Music, Theatre, Dance Classes', 's143', 'c01'),
('Hobby Classes', 's144', 'c01'),
('Text Books, Study Material', 's147', 'c01'),
('Other Education & Learning', 's148', 'c01'),
('acting schools', 's149', 'c13'),
('actor-model portfolios', 's150', 'c13'),
('acting - modeling roles', 's151', 'c13'),
('fashion designers - stylists', 's152', 'c13'),
('make up - hair', 's153', 'c13'),
('modelling agencies', 's154', 'c13'),
('musicians', 's155', 'c13'),
('photographers - cameraman', 's156', 'c13'),
('script writers', 's157', 'c13'),
('set designers', 's158', 'c13'),
('sound engineers', 's159', 'c13'),
('studios - loaction for hire', 's160', 'c13'),
('art directors - editors', 's161', 'c13'),
('other entertainment', 's162', 'c13'),
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
('dance music concerts', 's178', 'c13'),
('exhibition - trade affairs', 's179', 'c13'),
('festivals', 's180', 'c13'),
('theatres - plays - movies', 's181', 'c13'),
('workshops  - seminars', 's182', 'c13'),
('Hospitals, Clinics', 's183', 'c04'),
('Chemists', 's184', 'c04'),
('Parlours, Saloons', 's185', 'c04'),
('Gymnasium, Yoga, Health Clubs', 's186', 'c04'),
('Cosmetics', 's187', 'c04'),
('Exercise Equipments', 's188', 'c04'),
('Health Care Products, Medicines', 's189', 'c04'),
('Path Labs, Testing Centres', 's190', 'c04'),
('Other Health, Beauty & Fitness', 's192', 'c04'),
('Cafe, Fast Food Joints', 's193', 'c02'),
('Restaurants', 's194', 'c02'),
('Grocery Stores, Supermarkets', 's197', 'c02'),
('Ice Cream Parlours, Juice Centres', 's198', 'c02'),
('Meat, Poultry Shops', 's200', 'c02'),
('Banquet Halls', 's201', 'c02'),
('Catering - tiffin services', 's202', 'c02'),
('Other Food & Dining', 's203', 'c02'),
('Airline Tickets', 's204', 'c10'),
('Bus Tickets', 's205', 'c10'),
('Guest Houses', 's206', 'c10'),
('Serviced Apartments', 's207', 'c10'),
('Visa & Other Travel Services', 's208', 'c10'),
('Hotels, Resorts', 's209', 'c10'),
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
  `ad_no1` varchar(10) NOT NULL,
  `t_t_address1` varchar(500) NOT NULL,
  `t_s_service_we_provide` varchar(15) NOT NULL,
  `t_t_name1` varchar(50) NOT NULL,
  `t_t_mobile_number1` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_and_tourism`
--

INSERT INTO `travel_and_tourism` (`ad_no1`, `t_t_address1`, `t_s_service_we_provide`, `t_t_name1`, `t_t_mobile_number1`) VALUES
('a03', '101, Vishwakarma Chambers, 1st Floor Near radha krishna Hotel,majura gate', 'All ', 'Jirawala Tourism', '02612462669'),
('a02', 'F22/23, Jolly Arcade,', 'All ', 'Ace Tours', '02612656850'),
('a01', 'L-20 ,Jolly Plaza, Girls polytechnic College, Athwagate, Surat', 'All ', 'Make My Holidays', '02614001004'),
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
  `ad_no1` varchar(10) NOT NULL,
  `v_t_model` varchar(11) NOT NULL,
  `v_s_year` int(4) NOT NULL,
  `v_t_mileage` int(11) NOT NULL,
  `v_s_fuel` varchar(11) NOT NULL,
  `v_t_condition_of_vehicles` varchar(5) NOT NULL,
  `v_t_colour` varchar(11) NOT NULL,
  `v_t_insurance_and_tax` varchar(50) NOT NULL,
  `v_t_kms_run` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--


-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE IF NOT EXISTS `watchlist` (
  `email` varchar(50) NOT NULL,
  `ad_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`email`, `ad_no`) VALUES
('abc@fv.com', 'a01'),
('abc@fv.com', 'a02'),
('xyz@fv.com', 'a03'),
('xyz@fv.com', ''),
('xyz@fv.com', ''),
('xyz@fv.com', 'xyz@fv.com'),
('xyz@fv.com', 'xyz@fv.com');
