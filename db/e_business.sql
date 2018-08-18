-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 18 Αυγ 2018 στις 21:04:41
-- Έκδοση διακομιστή: 10.1.34-MariaDB
-- Έκδοση PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `e_business`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `administrators`
--

CREATE TABLE `administrators` (
  `user_id` int(11) NOT NULL,
  `administrator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `administrators`
--

INSERT INTO `administrators` (`user_id`, `administrator_id`) VALUES
(2, 1),
(2, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `approved_articles`
--

CREATE TABLE `approved_articles` (
  `fund_id` int(11) NOT NULL,
  `app_fund_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `approved_articles`
--

INSERT INTO `approved_articles` (`fund_id`, `app_fund_id`) VALUES
(71, 16),
(72, 17),
(73, 18),
(75, 19),
(72, 20);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `donation`
--

CREATE TABLE `donation` (
  `username` varchar(255) NOT NULL,
  `fund_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `message` text NOT NULL,
  `donation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `donation`
--

INSERT INTO `donation` (`username`, `fund_id`, `amount`, `message`, `donation_id`) VALUES
('kongkikan', 71, 10, 'This is a message to the fund raiser !!', 1),
('extralife', 71, 2, '123', 2),
('extralife', 72, 1200, 'Great job !!', 3),
('extralife', 71, 1000, '1000', 4),
('extralife', 75, 7000, 'Great song!! Keep up the good work!!', 5),
('extralife', 72, 100, 'Hello!', 6),
('extralife', 72, 100, 'Hello!', 7),
('alexis_2018', 73, 240, 'Great job!', 8);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `fund`
--

CREATE TABLE `fund` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `campaign_title` varchar(255) NOT NULL,
  `campaign_for` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `fund_id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `fund_description` mediumtext NOT NULL,
  `youtube_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `fund`
--

INSERT INTO `fund` (`username`, `email`, `goal`, `campaign_title`, `campaign_for`, `zip_code`, `category`, `fund_id`, `image_url`, `fund_description`, `youtube_url`) VALUES
('extralife', 'nikos', '10000', 'Create a tech Company!', 'myself', '18863', 'other', 71, 'images/logo.png', 'em ipsum dolor sit amet, consectetur adipiscing elit. Etiam diam erat, varius eleifend interdum ac, mollis at urna. In quis arcu a turpis vulputate consequat. Mauris fringilla tempus neque, sit amet tincidunt neque blandit pretium. Fusce vulputate enim urna, nec pulvinar augue ullamcorper eget. Mauris dolor quam, porttitor a felis non, varius pulvinar sapien. Proin sed imperdiet tellus. Morbi viverra mi eu leo rutrum dignissim. Praesent lobortis mi sed felis luctus venenatis. Pellentesque diam elit, consequat eu felis ac, volutpat gravida nisi. Cras imperdiet faucibus rhoncus. Nulla lobortis at odio non rhoncus. Nullam hendrerit turpis sodales ultricies ornare. Sed vel congue ante. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nDuis mattis mi at ex placerat, ut imperdiet erat tempor. In aliquet ipsum sem, id sagittis eros consequat sagittis. In sed magna id purus auctor pretium. Integer ante lacus, blandit ut pharetra ut, gravida eu arcu. Mauris sed ante vehicula, congue augue a, viverra lectus. Etiam rhoncus posuere molestie. Etiam nec mi in velit posuere dictum. In eu facilisis nisl.\r\n\r\nSuspendisse tempor justo ut auctor ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sagittis nulla eget lorem ornare aliquam. Donec sit amet erat vel ligula sollicitudin pulvinar. Fusce ullamcorper dignissim lorem. Mauris euismod luctus felis. Cras eu interdum leo. Praesent congue interdum enim. Maecenas vulputate molestie egestas. Integer tristique elementum volutpat. Maecenas felis mauris, pharetra vel neque vehicula, bibendum vehicula nunc. Proin aliquet condimentum neque eu commodo. Pellentesque pharetra nunc eget lorem lacinia congue.\r\n\r\nDuis auctor, augue sed aliquet faucibus, est nisi dapibus massa, eget vehicula sem nibh nec felis. Nullam pharetra metus quis volutpat pellentesque. Ut vehicula urna a placerat placerat. Suspendisse ac orci vitae quam rutrum volutpat. Maecenas erat quam, volutpat in vehicula ac, bibendum convallis ligula. Donec mauris dolor, efficitur eu pellentesque in, facilisis vitae purus. Sed et magna finibus, porta leo eu, sollicitudin erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'https://www.youtube.com/watch?v=zSU5MFPn6Zk'),
('extralife', 'nikos', '3500', 'Raise money for the Poor ! ', 'charity_or_non_profit', '18833', 'non_profit', 72, 'images/other/CHARITY.jpg', 'Suspendisse tempor justo ut auctor ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sagittis nulla eget lorem ornare aliquam. Donec sit amet erat vel ligula sollicitudin pulvinar. Fusce ullamcorper dignissim lorem. Mauris euismod luctus felis. Cras eu interdum leo. Praesent congue interdum enim. Maecenas vulputate molestie egestas. Integer tristique elementum volutpat. Maecenas felis mauris, pharetra vel neque vehicula, bibendum vehicula nunc. Proin aliquet condimentum neque eu commodo. Pellentesque pharetra nunc eget lorem lacinia congue.', ''),
('extralife', 'nikos', '7000', 'Agriculture Event', 'myself', '18863', 'other', 73, 'images/other/agriculture.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam diam erat, varius eleifend interdum ac, mollis at urna. In quis arcu a turpis vulputate consequat. Mauris fringilla tempus neque, sit amet tincidunt neque blandit pretium. Fusce vulputate enim urna, nec pulvinar augue ullamcorper eget. Mauris dolor quam, porttitor a felis non, varius pulvinar sapien. Proin sed imperdiet tellus. Morbi viverra mi eu leo rutrum dignissim. Praesent lobortis mi sed felis luctus venenatis. Pellentesque diam elit, consequat eu felis ac, volutpat gravida nisi. Cras imperdiet faucibus rhoncus. Nulla lobortis at odio non rhoncus. Nullam hendrerit turpis sodales ultricies ornare. Sed vel congue ante. Interdum et malesuada fames ac ante ipsum primis in faucibus.', ''),
('extralife', 'nikos', '15000', 'University Of Piraeus', 'myself', '18863', 'non_profit', 74, 'images/logo.png', 'Nullam mattis fermentum erat non congue. Praesent dictum neque sem, eu porttitor neque ultricies ac. Donec et neque dolor. Vivamus interdum sapien at lacus porta, non suscipit diam tempor. Nunc lorem tortor, suscipit eget sapien quis, pulvinar congue lorem. Morbi sed libero enim. Quisque faucibus finibus neque non convallis. Aliquam et ligula id sapien suscipit semper sit amet ac lorem. Vivamus eleifend orci accumsan eros bibendum, vitae varius tortor accumsan. Cras vel massa nisl. Duis quis facilisis nunc, vitae lobortis dui. Nullam risus tellus, aliquet vitae pulvinar ac, efficitur a dui.', 'https://www.youtube.com/watch?v=HndV87XpkWg'),
('extralife', 'nikos', '20000', 'Create a new music album', 'myself', '18863', 'art', 75, 'images/logo.png', 'Sed sed leo vestibulum, malesuada mauris rutrum, euismod nibh. Praesent eu neque ipsum. Curabitur id dui nec nibh imperdiet porttitor. Duis iaculis mauris justo. Praesent blandit, felis ultrices bibendum porttitor, felis erat facilisis leo, convallis auctor magna magna quis ligula. Nullam sed magna et risus faucibus porta ut quis mauris. Vestibulum at purus bibendum, cursus lorem vitae, sodales nibh. Ut eu placerat risus, vel elementum erat. Proin euismod bibendum orci rutrum rutrum. Pellentesque nec augue sit amet augue interdum aliquet. Sed sit amet rhoncus lorem. Sed lobortis velit lacus, blandit elementum sapien condimentum sit amet.', 'https://www.youtube.com/watch?v=azAEHCQgcUI'),
('alexis_2018', 'alexis@gmail.com', '10000', 'Become an engineer', 'myself', '123456', 'education', 76, 'images/logo.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lectus diam, euismod id tincidunt quis, rhoncus quis lorem. Nunc tristique magna lectus, sagittis consequat quam commodo quis. Nam lobortis libero sem, a pulvinar purus pharetra a. Aenean sit amet ligula mauris. Nunc sit amet leo non augue fermentum commodo eget ac lorem. Nam velit risus, vehicula et turpis in, lobortis pharetra nunc. Sed et placerat ante. Nam porttitor luctus magna ut pharetra. Donec tempus efficitur ullamcorper. Sed accumsan mi gravida, placerat lectus sed, gravida nunc. Ut mollis aliquet velit, id interdum nisi vehicula vitae. Sed in felis neque. Maecenas placerat est non felis facilisis egestas. Donec viverra dui vel arcu eleifend volutpat. Ut facilisis dui eget vestibulum pulvinar.\r\n\r\nAliquam mollis tortor mauris, eget porttitor libero auctor ut. Integer ut risus augue. In non euismod quam, ut auctor orci. Proin placerat metus egestas velit porta, id finibus sapien tincidunt. Maecenas mattis cursus felis sit amet auctor. Aenean neque metus, efficitur et nisi ac, consequat posuere nibh. Fusce bibendum blandit condimentum. Cras vitae lacinia leo. Cras lobortis orci a placerat tincidunt.\r\n\r\nNam enim odio, sodales tincidunt dui a, dignissim dapibus ligula. Maecenas vestibulum orci at nunc venenatis pulvinar. Morbi mollis odio sit amet nisl eleifend iaculis. Integer mollis ut lacus ac luctus. Etiam ligula dolor, blandit sed orci quis, lobortis aliquam purus. Nam id elit tortor. Sed eget leo ullamcorper, porta lorem vitae, scelerisque turpis. Vivamus sem velit, ullamcorper sed dui vitae, pulvinar pretium ex. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo leo volutpat, congue nisl eget, molestie ligula. Vestibulum at est quis diam aliquam volutpat id ac ligula. Donec blandit cursus iaculis. Sed at ex orci. Quisque enim mauris, congue ac tristique sed, ullamcorper in est.\r\n\r\nDonec porta facilisis eros at pellentesque. Nunc est odio, tincidunt non varius vel, ullamcorper nec neque. Nunc justo enim, convallis quis lorem sit amet, efficitur blandit ex. Duis finibus diam non turpis eleifend pharetra. Aenean vestibulum justo dui, eget efficitur justo condimentum quis. Integer vitae sollicitudin magna. Maecenas vel dolor nec sem placerat porttitor et nec elit. Curabitur tellus leo, pretium id nisl at, hendrerit suscipit tellus. Sed convallis, ipsum nec rhoncus vehicula, orci nisi tristique purus, eget pellentesque urna nibh in mi. Pellentesque quis elit dictum tortor ultricies suscipit vitae consectetur erat. Aenean vitae sem eget lorem commodo accumsan id et lectus. Maecenas venenatis lacinia bibendum.\r\n\r\nAliquam erat volutpat. Mauris quis magna libero. Mauris vitae convallis turpis. Sed at dolor tristique, tempor felis quis, tristique diam. Sed ullamcorper non urna ut egestas. Ut luctus euismod lorem quis euismod. Nullam imperdiet vel enim eget efficitur. Proin non pellentesque purus, sed pulvinar erat. Proin augue diam, porttitor vel tortor vel, euismod tincidunt libero. Aenean lobortis purus at tempor tristique. Aenean aliquam sollicitudin lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris faucibus magna quis enim euismod, non tempus dolor porta.', 'https://www.youtube.com/watch?v=btGYcizV0iI');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `user_id`) VALUES
('kongkikan', '123456', NULL, 1),
('extralife', '@8wHSouoamUEwKxsya', 'nikos', 2),
('alexis', '123456', 'alexis@gmail.com', 3),
('nikos', 'kongkika', 'kongkikan@gmail.com', 4),
('Gioulian', '123456', 'gioulian@gmail.com', 5),
('kongkika', '0000', 'kongkikan@gmail.com', 6),
('alexis_2018', '123456', 'alexis@gmail.com', 7);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`administrator_id`);

--
-- Ευρετήρια για πίνακα `approved_articles`
--
ALTER TABLE `approved_articles`
  ADD PRIMARY KEY (`app_fund_id`);

--
-- Ευρετήρια για πίνακα `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Ευρετήρια για πίνακα `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`fund_id`);

--
-- Ευρετήρια για πίνακα `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `administrators`
--
ALTER TABLE `administrators`
  MODIFY `administrator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `approved_articles`
--
ALTER TABLE `approved_articles`
  MODIFY `app_fund_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT για πίνακα `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT για πίνακα `fund`
--
ALTER TABLE `fund`
  MODIFY `fund_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT για πίνακα `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
