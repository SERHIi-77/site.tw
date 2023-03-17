-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 17 2023 г., 16:15
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
(2, 'Persian cat of standard color', 'Persian cat of standard color is looking for a new family, loves milk and sweet dreams, will always be grateful for a good company on a beautiful evening.', 'cat', 'female', '4', 'ориентал', 0, '300', 'persiancat.jpg', 'красивая кошечка', '2023-03-14 01:55:52'),
(6, 'красуня', 'rtttt', 'cat', 'male', '3-6 months', 'британець', 2, '400', 'Iwlh1A6bye1679050975.jpg', 'британець', '2023-03-17 13:02:55'),
(7, 'кошечка / litte cat', 'котенок британка 6 месяцев от роду, тато - чемпіон , має 18 нагород та гарний апетит', 'cat', 'female', '6-9 months', 'британець', 2, '2500', 'fQJal8alTv1679051277.jpg', 'brit', '2023-03-17 13:07:57'),
(8, 'faithful reliable friend dog', 'faithful reliable friend a dog with a difficult fate, very kind and faithful looking for a reliable friend and a good family, waiting to meet you', 'dog', 'female', 'over 5 yea', 'doggi', 3, '0', 'beHAGDhKLi1679053800.jpg', 'free friend', '2023-03-17 13:50:00'),
(9, 'black she-cat', 'Shy and soft-spoken, Karina is a black she-cat with lemon-colored eyes. Sterilized, age - up to 1 year.', 'cat', 'male', '1-2 years', 'she-cat', 3, '0', '397sii2eHX1679054091.jpg', 'Sterilized', '2023-03-17 13:54:51'),
(10, 'six month cat Jerry ', 'Jerry had an owner since childhood, but at six months he decided to give the cat away. The reason was not in the cat, but in the owner. Jerry endured the change of scenery very hard: he refused food, he rebelled. But he soon got used to the temporary mist', 'cat', 'male', '1-2 years', 'childhood', 3, '0', '', 'free friend', '2023-03-17 13:57:55'),
(11, 'Американський стафф терьєр', 'Пропонуються, хлопчик і дівчинка, цуценят Американського Булі, чисто білого забарвлення, для поціновувачів краси, чистоти, Арискоратизму та статури!\r\n', 'dog', 'male', '3-6 months', 'staff', 3, '2500', 'kJLL7dHHxp1679055105.jpg', 'staff white', '2023-03-17 14:11:45'),
(12, 'Красивий, статний пес', 'Усі питання обговорюються у телефонній розмові, а не у листуванні. Дуже часто в притулок дзвонять в пошуках вівчарок. Так, в нас є вівчарки, добротні, слухняні, милі та більш людяні, аніж ті, хто викинув їх напризволяще. Та ці вівчарки мають деякі особлив', 'dog', 'male', '3 years', 'doggi', 3, '0', 'glY4g25AaS1679055310.jpg', 'freee friend', '2023-03-17 14:15:10'),
(13, 'маленьке кошеня', 'дуже красиві крихітки, маленьки різнокольорові блохастикт', 'cat', 'female', '3-6 months', 'британець', 3, '1700', '0LRZeNyuVh1679055420.jpg', 'котики', '2023-03-17 14:17:00'),
(14, 'страховисько. лисий страховитий людожер', 'не дуже привабливий, але без бліх', 'cat', 'male', '1-2 years', 'сфе', 8, '350', 'Rp8xqZlfwW1679055605.jpg', '350', '2023-03-17 14:20:05'),
(15, 'не сторожева собака', 'малький, гавкучій, с характером сатани', 'dog', 'male', '3 years', 'doggi', 8, '0', 'clNqCjoDyO1679055717.jpg', 'заберіть ', '2023-03-17 14:21:57'),
(16, 'красень хаскі ', 'красень саме  з северу приїхав на конику. приїхав дуже зголоднілий - якщо що то може і вас зьїсти і мене', 'dog', 'female', '9-12 month', 'staff', 8, '7000', 'l6angtxCib1679055839.jpg', '', '2023-03-17 14:23:59'),
(17, 'Кеша ', 'Інокентій (він же Кеша) товариський і дуже любить людей. Кеші виповнилося півроку, він вакцинований, до лотка привчений.', 'cat', 'male', '1-2 years', 'кеша', 8, '400', '7gD8nBVZCx1679055951.jpg', '', '2023-03-17 14:25:51'),
(18, 'Машка  маленька кішочка', 'Маша трохи полохлива через життя на вулиці. Тим, хто зважиться її дати притулок, потрібно буде почекати, поки кішка освоїться і зрозуміє, що вона в безпеці. І тоді вона покаже своє кохання та відданість новим господарям. На жаль, часу у Маші небагато: нав', 'cat', 'female', '9-12 month', 'white', 8, '400', 'HqgJAsORrW1679056155.jpg', 'white cat', '2023-03-17 14:29:15'),
(19, 'Red Cat', 'Percy is affectionate and sociable, Carl is cautious. The characters of the cats complement each other, and the fluffies will not bother the owner. Percy is neutered and vaccinated, Carl is preparing to be neutered. They go to the tray without a miss.', 'cat', 'male', '1-2 years', 'red cat', 8, '800', 'YaPuEMCdk51679056307.jpg', '', '2023-03-17 14:31:47'),
(20, 'віддам в добрі руки', 'Ну у нас знову є виводок, військові знайшли собачку з новонародженими цуценятами і привезли до нас. Малюки трошки підросли і ми починаємо Вас з ними знайомити. Це перша красуня Найкі. Дівчинка виросла поруч з людьми, тому абсолютно соціальна з повною дові', 'dog', 'female', 'less than ', 'doggi', 8, '0', 'DwlHce1aCl1679056505.jpg', '', '2023-03-17 14:35:05'),
(21, 'чукапабра бойова', 'маленька але не дасть в обіду не себе не вас', 'dog', 'male', '9-12 month', 'dog', 8, '350', 'y1XvDsTsp91679056579.jpg', '0-100', '2023-03-17 14:36:19'),
(22, 'Марс ', 'Марс виросте шикарним великим котяром. Зараз йому всього 7 місяців, а виглядає він уже як дорослий солідний кіт. Дуже лагідний.', 'cat', 'male', '6-9 months', 'cat', 8, '300', '2G6F8aoA7I1679056717.jpg', '', '2023-03-17 14:38:37'),
(23, 'пухнастик собака', 'гарний добрий і жре не багато, на цепок не посадиш, але донькам буде чим бавитися', 'dog', 'female', '3-6 months', 'хохлата', 8, '4600', 'HnEmLWDi9u1679057014.jpg', 'торг', '2023-03-17 14:43:34'),
(24, 'Мейн-кун', 'Прекрасні діти породи мейнкін, з дуже високим сріблом! Пропонуємо до продажу кошенят породи Мейн Кун. 17.08.2022 року народження. Кошенята мають чудові породні дані — довгий хвіст, густу шерсть, правильну форму голову та шикарний профіль. Кошенята активні', 'cat', 'male', '9-12 month', 'Мейн-кун', 8, '2999', '9aSrHtgLmQ1679057187.jpg', '', '2023-03-17 14:46:27'),
(25, 'Віддам у добрі руки', 'Віддам у добрі руки, т.к. у дитини розвинулася алергія на шерсть.\r\n\r\nКішка Василіса. 8 років. Дуже класна, схожа на британку. На дотик плюшева і дуже муркотлива.', 'cat', 'female', 'over 5 yea', 'she-cat', 8, '0', '2XCBa7l37U1679057503.jpg', '', '2023-03-17 14:51:43'),
(26, 'Продам шотландських кошенят', 'Продам шотландських прямовухих кошенят.Народилися 4 .12.2022 р. Їдять самі приучины до лотка і котедралке.Забарвлення шоколадно попелясті. плючевыеДобрые,ласкаві руки.Перекупників прохання не дзвонити.Відповім усім на Вайбер \r\n', 'cat', 'female', '3-6 months', 'кошеня', 8, '3000', '9HxmXGDFJL1679057668.jpg', ' шотландські кошенята', '2023-03-17 14:54:28'),
(27, 'Віддам в добрі руки собаку', 'Дорослий, досвідчений, чуйний, ніжний, слухняний, уважний.\r\nПерераховувати всі переваги цього красеня можна нескінченно.\r\nГром чудовий друг. Вірою та правдою служив на підприємстві, допоки став непотрібним новому керівництву. Так він потрапив на вулицю, н', 'dog', 'male', 'over 5 yea', 'гром', 8, '0', 'Cx5uyIKhRu1679057825.jpg', 'віддам', '2023-03-17 14:57:05'),
(28, 'цуценята мальтійської болонки\r\n', 'чемпіонів з ексклюзивним набором кровей. Наша ексклюзивність підтверджена походженням. відео огляд https://youtu.be/FEak8L2EkuM https://youtu.be/hnZlGqU8xxQ ціна на кожного щеняти індивідуальна. ціна залежить від вираженості породних ознак і від мети прид', 'dog', 'female', '3-6 months', 'болонка', 8, '1300', 'F4CW4oNHwg1679057948.jpg', 'цуценята', '2023-03-17 14:59:08'),
(29, 'Шикарні йорки', 'Профразведение Резерв і продаж. Чудові цуценята від супер виробників. Більше інформації на сайті профпитомника ', 'dog', 'female', '3-6 months', 'йорк', 8, '1500', 'KGqJKo9MlT1679058190.png', 'цуценята', '2023-03-17 15:03:10');

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
(4, 'Админ', 'adm@i.ua', '$2y$10$nJ8oWxzMC4j9KJhyoXokaunkWjw0nwNootavGpvdTC6wXJNozqsvi', 'admin', '', '', '', '', '2023-03-14 12:53:45'),
(8, 'kosss', 'kosss@i.ua', '$2y$10$.xXRIqFXwnIg4NuWREYoPey/AAh6kizQTjOwkuhkWCUWut/Ok0FnS', 'user', '', '', '', '', '2023-03-17 14:17:50');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
