-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 06:35 PM
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
-- Database: `oak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`, `position`, `image_admin`) VALUES
(1, 'root', '1', '', ''),
(4, 'pham pha', '1', 'leader', 'phadz1619564079.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(11) NOT NULL,
  `title_category` varchar(255) NOT NULL,
  `desc_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `title_category`, `desc_category`) VALUES
(2, 'Coffee & Tea', 'là nơi có sự kết hợp giữa các loại cafe và các loại trà'),
(3, 'Coffee & Bar', 'hướng đến những khách hàng sôi động và đam mê nghệ thuật DJ (Disc Jockey).'),
(4, 'Milktea & Coffee', 'là sự kết hợp giữa hương vị cafe và trà sữa mà giới trẻ yêu thích'),
(5, 'Coffee & Desserts', 'là sự kết hợp giữa cafe và nơi thưởng thức các món ăn ngon'),
(8, 'Coffee & Lounge', 'test update');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id_project` int(11) NOT NULL,
  `title_project` varchar(255) NOT NULL,
  `desc_project` text NOT NULL,
  `price_project` int(100) NOT NULL,
  `area_project` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL,
  `image_1_project` varchar(255) NOT NULL,
  `image_2_project` varchar(255) NOT NULL,
  `image_3_project` varchar(255) NOT NULL,
  `image_4_project` varchar(255) NOT NULL,
  `image_5_project` varchar(100) NOT NULL,
  `address_project` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id_project`, `title_project`, `desc_project`, `price_project`, `area_project`, `id_category`, `image_1_project`, `image_2_project`, `image_3_project`, `image_4_project`, `image_5_project`, `address_project`) VALUES
(101, 'Cherish Coffee & Desserts', 'Cherish is one of the few cafes in Da Nang with a large area up to 3 floors. With 2 fronts, Cherish obviously becomes a bright spot on Kinh Duong Vuong street. First, we must mention white tone, open architecture and highlight natural elements.\r\nFrom the outside, Cherish appears as a cool green space thanks to the coverage of the Indian amber. The dome-shaped glass door system increases the sense of ventilation. The contrast of blue on a white background is quite pleasant. That is the reason why you must visit the space inside to feel the separation from the street. ', 1000000, 'updating', 5, 'Cherish11619544114.jpg', 'Cherish21619544114.jpg', 'Cherish31619544114.jpg', 'Cherish41619544114.jpg', 'Cherish51619544114.jpg', '238 Kinh Dương Vương, Đà Nẵng'),
(102, 'Areum Coffee & Desserts', 'Contrary to the hustle and bustle on the street; Areum Coffee & Desserts is a cozy, small and beautiful space with a capacity of about 20-25 people. The cafe is designed in a minimalist Korean style, gently decorated to welcome guests who want to find a quiet corner to study and work.\r\nAreum Coffee & Desserts is a typical example of small coffee samples that want to \"cheat\" the area. To take advantage of depth, the shop uses the main white tones to make the space more spacious and brighter. At the same time, the table and chairs are arranged close to the two sides of the wall, leaving a clear path in the middle. The bar\'s location in the middle of the bar creates a convenient and fast flow for both employees and customers. ', 150000, '50m2', 5, 'Areum11619544753.jpg', 'Areum21619544753.jpg', 'Areum31619544753.jpg', 'Areum41619544753.jpg', 'Areum51619544753.jpg', '49 Đồng Khởi, P. Bến Nghé, Q. 1, TP. HCM '),
(103, 'Sweet Daze Milktea & Coffee, Cakes', 'Sweet Daze is the smallest coffee space that Ador has ever known. Small area will of course be disadvantageous in some issues, but it is an advantage in shaping style and brand identity. Perhaps because of that, Sweet Daze became the focus right from the moment it debuted.\r\nTaking advantage of the combination of orange - white, Sweet Daze both shows the ability to catch trendy tastes and create a warm feeling. Referring to a 20m2 coffee space, people envision a minimalist design, mixed style to keep the optimal area. However, Sweet Daze is completely successful when it comes to clarifying a design style. ', 200000, '20m2', 4, 'Sweet11619545046.jpg', 'Sweet21619545046.jpg', 'Sweet31619545046.jpg', 'Sweet41619545046.jpg', 'Sweet51619545046.jpg', '94 Nguyễn Trãi, Tuy Hoà, Phú Yên'),
(104, 'O2 Coffee & Tea', 'Having a beautiful location is a great advantage for any coffee shop. O2 is lucky to be located next to the lotus lake with 2 fronts adjacent to the road and lake. In particular, being located in the residential area next to Dai Noi is also a way to honor the outstanding architecture of O2. From that topography and environment, O2 develops a greenhouse model with a perfect combination of modernity and history. ', 1500000, '123m2', 2, 'O211619545338.jpg', 'O221619545338.jpg', 'O231619545338.jpg', 'O241619545338.jpg', 'O251619545338.jpg', '83 Yết Kiêu, TP. Huế'),
(105, 'LAGOM Coffee & Tea', 'LAGOM, 20km from the inner city of Hanoi, is a coffee shop completed by the owner of the architect himself. Talking about the name, \"lagom\" is a Swedish way of life with the motto \"Enjoy a simple life and be satisfied with what you have\". That is why you will feel as if everything is moderately present in LAGOM. ', 250000, '60m2', 2, 'LAGOM11619545903.jpg', 'LAGOM21619545903.jpg', 'LAGOM31619545903.jpg', 'LAGOM41619545903.jpg', 'LAGOM51619545903.jpg', 'Số 3 đường Kho Gạo, phố Tía, Thường Tín, TP. Hà Nội'),
(106, 'Nan Tea & Coffee', 'According to sharing, NAN is conceptualized and perfected by the owner. The shop has the ground floor where the counter and shop space are located, the first floor welcomes the main guests and the terrace. ADOR\'s initial impression of the NAN is the minimalistic Korean style that is clearly visible through the facade. White Tone with a rough wall chair just outside, resonating with the wooden door frame and transparent glass. That is why you will definitely be attracted when you accidentally stop by NAN.\r\nBut when stepping into the space inside, a slight \"cool\" with gray tone surprised ADOR. ', 600000, '200m2', 2, 'Nan11619546011.jpg', 'Nan21619546011.jpg', 'Nan31619546011.jpg', 'Nan41619546011.jpg', 'Nan51619546011.jpg', 'Hải Thượng Lãn Ông, TP. Long Xuyên, tỉnh An Giang'),
(107, 'Pasoy Coffee', 'Pasoy Coffee is a cafe located in an apartment building, although it does not have the advantage of the surrounding landscape but is still attractive enough. That attraction lies in a completely different design style compared to other cafes. Choosing a private path, what did Pasoy Coffee do to retain customers?\r\nFirst of all, the way to choose from extremely vibrant colors including pink and orange. Two colors bring a youthful, modern space, neither too feminine nor too personality. No need to try to make a difference, it is this novelty that turns Pasoy Coffee into a colorful tropical garden, a new breeze among the already familiar \"one color\" cafes. ', 150000, '80m2', 1, 'Pasoy11619546223.jpg', 'Pasoy21619546223.jpg', 'Pasoy31619546223.jpg', 'Pasoy41619546223.jpg', 'Pasoy51619546223.jpg', 'Lầu 4, CC 35 Nguyễn Văn Tráng, Quận 1, TP. HCM'),
(108, 'The Joy Cafe', 'The Joy owns 2 facilities in Da Nang and has become a familiar name associated with a unique architectural space. The shop is located on the ground floor of the Seahorse Office, becoming a prominent highlight of this office building. With such a terrain, Does The Joy have enough space and power to make herself more liberal than the feeling of an office cafe?\r\nFrom the facade, it is clear that no one can deny the charm of Indochina style. Like any other hall, you need to go up a staircase to reach the cafe campus. The Joy will create a small surprise when the main space recedes in, leaving a part of the front area for open spaces and outdoor seats. ', 1000000, 'updating', 1, 'Joy11619546296.jpg', 'Joy21619546296.jpg', 'Joy31619546296.jpg', 'Joy41619546296.jpg', 'Joy51619546296.jpg', '29 Yên Bái, TP. Đà Nẵng'),
(109, 'LAPIN Chamber Bar', 'LAPIN was born with the idea of recreating the classic European style. Unlike the coffee or restaurant model with the menu as the key factor in success, the bar is more characteristic because sometimes space and mood make up 60% of the love, determining 70% of consumption.\r\nThe first thing you feel at LAPIN is not the outstanding architectural lines, but the warmth that few bar models can achieve. The light here is moderated to best suit a relaxing space, you can only find dim yellow lights and candles. ', 1400000, '130m2', 3, 'LAPIN11619546392.jpg', 'LAPIN21619546392.jpg', 'LAPIN31619546392.jpg', 'LAPIN41619546392.jpg', 'LAPIN51619546392.jpg', '9 Ấu Triệu, Hàng Trống, Hà Nội '),
(110, 'Puck Burger Bar & Cafe', 'Puck is an architectural cross between Northern Europe and East Asia. It is easy to see the Nordic characteristics through the 10 × 10 tiles used in the facade, the counter and the stair area. In addition, the choice of a dark blue interior also gives a classic European feel. East Asian features expressed through white tones are very popular in Korea and Japan with light wooden furniture.\r\nAlthough only 55m2, but Puck is always full of natural light during the day. From the outside, the wall at the foot of the stairs makes the space of the restaurant brighter because this is the area where the sky well is located. At the foot of the stairs is a smart way to fit comfortably enough seats for 2 guests. ', 275000, '55m2', 3, 'Puck11619546476.jpg', 'Puck21619546476.jpg', 'Puck31619546476.jpg', 'Puck41619546476.jpg', 'Puck51619546476.jpg', '79 Hoàng Văn Thụ, Hải Châu, Đà Nẵng'),
(111, 'Sol Kitchen & Bar', 'Sol is a large restaurant, the ideal destination to enjoy European dishes. The restaurant is a mix of Spanish and Mediterranean styles, which is clearly shown from the raw to the decor details. With a very high ceiling, Sol is extremely ventilated, suitable to create an open atmosphere for all parties. ', 3000000, '130m2', 3, 'Sol11619546567.jpg', 'Sol21619546567.jpg', 'Sol31619546567.jpg', 'Sol41619546567.jpg', 'Sol51619546567.jpg', '115 Lý Tự Trọng, Bến Thành, Quận 1, TP. HCM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id_project`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
