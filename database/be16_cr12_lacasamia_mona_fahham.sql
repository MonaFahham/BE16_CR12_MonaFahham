-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 03:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be16_cr12_lacasamia_mona_fahham`
--
CREATE DATABASE IF NOT EXISTS `be16_cr12_lacasamia_mona_fahham` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be16_cr12_lacasamia_mona_fahham`;

-- --------------------------------------------------------

--
-- Table structure for table `real_estate`
--

CREATE TABLE `real_estate` (
  `real_estate_id` int(11) NOT NULL,
  `advert_title` varchar(255) NOT NULL,
  `size` decimal(11,0) NOT NULL,
  `room_number` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `price` decimal(11,3) NOT NULL,
  `address` varchar(255) NOT NULL,
  `latitude` decimal(11,4) NOT NULL,
  `longitude` decimal(11,4) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `price_reduction` enum('Yes','No') DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `real_estate`
--

INSERT INTO `real_estate` (`real_estate_id`, `advert_title`, `size`, `room_number`, `city`, `price`, `address`, `latitude`, `longitude`, `picture`, `price_reduction`, `description`) VALUES
(1, 'Manorial property with a special flair', '400', 7, 'Vienna', '100.000', '2532 Heiligenkreuz, Baden, Lower Austria', '48.2142', '16.3860', 'house-4.jpg', 'Yes', 'This unique property with an indoor pool is in a quiet location at the gates of Vienna, near the Heiligenkreuz Abbey.\r\nOn a property, which consists of 3 plots (building, forest, and grassland) you have an atmosphere that is second to none.\r\nIn addition, there is the possibility to achieve a living area of ​​approx. 4000m² on a part (approx. 3400m² dedicated building plot with 40%). With its own dedicated garage entrance.'),
(2, 'CHRISTOPH CHROMECEK REAL ESTATE - KALTENLEUTGEBEN', '366', 6, 'Upper Austria', '995.000', '2391 Kaltenleutgben, Mödling, Lower Austria\r\n', '48.2089', '16.3819', 'house-2.jpg', 'No', 'KALTENLEUTGEBEN - Perfect house with lots of space for a large family!\r\nFor sale is a large and spacious single-family house that offers plenty of space for a large family, but can also be used as a two-family house or multi-generational house. The building built into the hillside essentially consists of a basement with an entrance area, a ground floor also with its own entrance and an upper floor. Overall, the house has a living area of ​​around 370 m², which is divided as follows. In the basement, next to the entrance area, there is another room, a kitchen, a utility room, a storage room and the boiler room with 3 x 2,000 liter oil tanks and the burner. On the ground floor there is a large living room with dining area, open fireplace and exit to the mostly covered terrace, a kitchen, 2 bedrooms, a bathroom, an extra toilet, a study and another storage room. The real highlight of this great property is the converted attic, which forms its own spacious living unit'),
(3, 'Investment property 4030 Linz - Flötzerweg 129', '987', 10, 'Linz', '500.000', '4030 Linz, Upper Austria', '48.2123', '16.3748', 'house-3.jpg', 'Yes', 'We, the company NEUWOG Immobilien GmbH (housing developer in Upper Austria for 15 years), have developed a residential property at Flötzerweg 129, in 4030 Linz.\r\n\r\nThe decision to build an investment property in the steadily growing state capital of Upper Austria, which is characterized by industry, was a conscious decision.\r\nSince rented living space is all the more important in times when the property is becoming more difficult to afford, this residential project is particularly important to us.\r\nWe are building a very well-equipped and easy-to-rent investment property on Flötzerweg in Linz, a solid residential area.'),
(4, 'Classic new building', '375', 6, 'Vienna', '200.000', '1190 Vienna, 19th district, Döbling\r\n', '48.2118', '16.3444', 'house-1.jpg', 'Yes', 'New building in prime location\r\n\r\n\r\nThis single-family house, consisting of a basement, ground floor, 1st floor and a converted attic floor, is located on an almost square-shaped property! The floor area is about 138m2 and the attic is about 100m2.\r\n\r\n\r\nThe mezzanine floor was completely renovated in 2013 and consists of a living room, dining room, and 3 other rooms with 1 bathroom and a fully equipped kitchen.\r\n\r\n\r\nThe upper floor is arranged in a similar way - but in need of a refurbishment.\r\n\r\n\r\nThe attic above has been developed with its own kitchen, bathroom, large living room and'),
(5, 'Renovation project + new villa near Fuschlsee', '500', 7, 'Salzburg', '200.000', 'Ramsaustraße 97, 5324 Ramsau, Salzburg area, Salzburg', '48.2142', '16.3822', 'house-5.jpg', 'No', 'In the municipality of Faistenau, above Lake Fuschl, a large detached house is being completely renovated by regional specialist companies.\r\nThe existing building will be gutted and a new floor plan will be created according to a new plan.\r\nAfter completion (approx. 15 months) the house will resemble a new building. Everything is renewed, roof, roof structure, windows, external insulation, plaster, floors, doors, frames, bathrooms, heating, interior plaster, electrics.\r\nIn addition, an indoor pool and sauna will be installed.'),
(6, 'Outstanding top villa with its own garden', '468', 9, 'Vienna', '400.000', '1190 Vienna, 19th district, Döbling', '48.2049', '16.3436', 'house-6.jpg', 'No', 'This elegant five-storey premium villa (internal elevator available) offers you luxurious living with a magnificent view over Vienna and the green vineyards. \r\nThe modern interior meets all strict requirements: marble and parquet floors, underfloor heating, air conditioning, armored external blinds on all windows and doors, alarm and video intercom, KAB/SAT connection, DVBT and two storage rooms; here you will find everything for a comfortable and safe life!\r\n\r\n'),
(7, 'NEW CONSTRUCTION - 1 UNIT WITH A VIEW INTO THE GREEN', '440', 4, 'Lower Austria\r\n\r\n', '928.000', '2431 Enzersdorf an der Fischa, Bruck an der Leitha, Lower Austria\r\n', '48.2122', '16.3626', 'house-7.jpg', 'No', 'A classic-modern design, exceptional room heights and four individually designed apartments characterize this high-quality complex, of which 3 rented residential units are for sale.\r\nBright, large rooms, an elegant lighting concept and up to two spacious bathrooms with tub and/or shower and separate toilets per unit.\r\nGardens for sole use, a spacious roof terrace and wall-high glass elements offer extra quality of life.\r\n\r\n\r\n'),
(8, 'Private – Detached house for sale', '300', 7, 'Lower Austria\r\n\r\n', '650.000', '2751 Steinabrückl, Wiener Neustadt Land, Lower Austria', '48.2007', '16.4052', 'house-8.jpg', 'No', 'The house is in very good condition and in a very quiet location in Steinabrückl. Usable area approx. 300m2.\r\nThe house has a 1 car garage with electric gate and ample on street parking. See sketch for room details. Partly furnished.\r\nGarden with automatic irrigation and a small vegetable garden with its own irrigation.\r\n2 terraces next to the house (one of them recently renovated and to be finished outside) and another under construction in the garden.\r\nStorage room for garden tools in the garden (garden tools are included).\r\nOil heating (tank 3000 l - enough for a hard winter), hot water with a modern water heater (all water pipes are new).\r\nThe large room upstairs can easily be divided into 2 more bedrooms. All windows are double glazed on insulating glass with plastic frames.'),
(9, 'Exclusive turn-of-the-century villa indoor pool', '200', 3, 'Vienna', '500.550', '1180 Wien, 18. Bezirk, Währing\r\n', '48.2051', '16.3655', 'house-9.jpg', 'Yes', 'This particularly charming turn-of-the-century villa is for sale in a prominent location in the 18th district, in the middle of the cottage district.\r\nThe entire villa was extensively renovated a few years ago, modernized (eg installation of air conditioning, alarm system, renewal of all bathrooms, floors, etc.) and is in perfect condition.\r\nThe house is ideal as a family residence. The beautiful, almost private garden offers space to play and relax. The indoor pool makes this house perfect.'),
(10, 'Magnificent property near Göttweig Abbey', '508', 7, 'Krems', '400.000', '3500 Krems an der Donau, Lower Austria', '48.2097', '16.4116', 'house-10.jpg', 'Yes', 'The palace-like building was rebuilt in 2006 according to the original plans from 1908. A private driveway takes you to the approx. 8,000 square meter sunny property. Here the extremely magnificent facade shines with the stylish stucco elements. A two-armed, majestic staircase leads to the main entrance. The spacious hallway separates the area with the approx. 120 square meter living room and the separate kitchen from the sleeping quarters. From there, a mighty staircase leads to other living areas above, which are open in three split levels. The sense of space is extraordinary and breathtaking. In the basement there is an approx. 46 sqm work and hobby room. The approximately 172 square meter garage offers space for a larger fleet. The building services include an energy-efficient geothermal heating system and the technical systems/connections for a pool and jacuzzi. The equipment impresses with the highest quality, exclusive materials and perfect craftsmanship. Here people with the highest demands will find a living paradise.'),
(11, 'SHARE DEAL POSSIBLE, investment property', '500', 7, 'Niederösterreich', '600.000', '2291 Lassee, Gänserndorf, Lower Austria\r\n', '48.2097', '16.4116', 'house-11.jpg', 'Yes', 'A residential complex, which was built in 2015/2016, is for sale, consisting of 6 residential units on the ground floor and 7 residential units on the upper floor, which can be reached via three staircases. The facility also includes 13 cellar compartments, a bicycle storage room and a technical room. Most residential units have an anteroom, a closet, a bedroom, a bathroom, an eat-in kitchen, a separate toilet and an open space in the form of a terrace with a garden (ground floor) or a balcony (upper floor). The larger units also have a children\'s room. The property is currently rented to private individuals for a limited period of time. The living areas are between 45.20 m² and 64.40 m² on the ground floor and between 44.50 m² and 62.60 m² on the upper floor. There are 13 car parking spaces next to the residential complex.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `real_estate`
--
ALTER TABLE `real_estate`
  ADD PRIMARY KEY (`real_estate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `real_estate`
--
ALTER TABLE `real_estate`
  MODIFY `real_estate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
