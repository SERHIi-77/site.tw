-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 16 2023 г., 22:23
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site_tw`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `breed` varchar(20) NOT NULL,
  `owner` int(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `pets`
--

INSERT INTO `pets` (`id`, `title`, `ad`, `type`, `sex`, `age`, `breed`, `owner`, `price`, `photo`, `note`, `created`) VALUES
(1, 'Kind lonely girl looking for a family', 'A kind girl named Lyubimitsa is looking for a family, she came to us from the Donetsk region in search of a new home. very fond of children and walks, has a red coat color and a wonderful character', 'dog', 'male', '5', 'бульдог', 0, '100', 'Bulldog.jpg', 'бульдог', '2023-03-14 01:55:42'),
(2, 'Persian cat of standard color', 'Persian cat of standard color is looking for a new family, loves milk and sweet dreams, will always be grateful for a good company on a beautiful evening.', 'cat', 'female', '4', 'ориентал', 0, '300', 'persiancat.jpg', 'красивая кошечка', '2023-03-14 01:55:52');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user',
  `phone` varchar(20) NOT NULL,
  `region` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `phone`, `region`, `area`, `locality`, `created`) VALUES
(1, 'Admin', 'admin@i.ua', '$2y$10$xh202snU0Rc/KFrDnodBVOSP4UtfS9RgYP9VmLvcjAyhQgz4g4cE.', 'admin', '+380', '', '', '', '2023-03-11 18:12:05'),
(2, 'ZooSweat', 'user1@i.ua', '$2y$10$0xFcFDLE.TvrMJfqwKdvHeJD4bWPWGN9.t.GxRPFeAOqCZrRE6Sxa', 'user', '+380', '', '', '', '2023-03-11 18:12:05'),
(3, 'nursery \"friend\"', 'user2@i.ua', '$2y$10$1OYhCsuASSJicDsxyWeMy.XliCL.khpQBGY5lFJaLMPfcpVPS1Bw2', 'user', '', '', '', '', '2023-03-11 20:05:25'),
(4, 'Админ', 'adm@i.ua', '$2y$10$nJ8oWxzMC4j9KJhyoXokaunkWjw0nwNootavGpvdTC6wXJNozqsvi', 'admin', '', '', '', '', '2023-03-14 12:53:45');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
