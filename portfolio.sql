SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `about` (
  `id` int NOT NULL,
  `focus` varchar(100) DEFAULT NULL,
  `interest` varchar(100) DEFAULT NULL,
  `goal` varchar(100) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `about` (`id`, `focus`, `interest`, `goal`, `description`) VALUES
(1, 'Teamwork & Strategy', 'PUBG, ML, Olahraga', 'Makin kompak dan jago komunikasi', 'Saya suka main game duo dan belajar teamwork.');


CREATE TABLE `certificates` (
  `id` int NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `certificates` (`id`, `title`, `year`, `link`) VALUES
(1, 'Sertifikat Makrab', '2024', 'assets/sertifikat makrab.png'),
(2, 'Sertifikat Aplikasi', '2025', 'assets/setifikat aplikasi.jpg'),
(3, 'Sertifikat IC', '2025', 'assets/sertifikat ic.jpg'),
(4, 'Sertifikat HRD', '2025', 'assets/sertifikat Hrd.png');


CREATE TABLE `experiences` (
  `id` int NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `period` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `experiences` (`id`, `title`, `period`) VALUES
(1, 'Anggota Osis', '2021-2022'),
(2, 'Anggota Rohis', '2022-2023'),
(3, 'Inforsa HRD', '2024-2025');


CREATE TABLE `profile` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `tagline` text,
  `email` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `profile` (`id`, `name`, `role`, `tagline`, `email`, `location`) VALUES
(1, 'Ahmad Samsul Arifin Ilham', 'Casual Esports Duo Player', 'Main PUBG Mobile & Mobile Legends berdua dan suka nonton olahraga.', 'ahmadsamsularifiin@gmail.com', 'Samarinda');


CREATE TABLE `skills` (
  `id` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `level` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `skills` (`id`, `name`, `level`) VALUES
(1, 'Team Communication', 85),
(2, 'Game Strategy', 80),
(3, 'Focus & Reaction', 78),
(4, 'Consistency', 82);


ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `certificates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `experiences`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

