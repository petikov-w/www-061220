-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 10 2021 г., 18:27
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dblinks`
--

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `title`, `url`) VALUES
(1, 'Уроки Laravel - YouTube', 'https://www.youtube.com/playlist?list=PLVfMKQXDAhGUO-r2UPv3VszEwn_edFVC6'),
(33, 'Яндекс', 'https://www.yandex.ru'),
(50, 'Отличия webpack и gulp- — Хабр Q&A', 'https://qna.habr.com/q/668899'),
(51, 'Введение в Ajax', 'http://javascript.ru/ajax/intro#chto-takoe-ajax-primer-realizacii'),
(52, '1. Crusader Kings 2 Начало Начал - YouTube', 'https://www.youtube.com/watch?v=SG5hpVNhGSA\r\n'),
(53, '8 примеров - AJAX запрос на чистом Javascript и не только', 'https://good-code.ru/ajax-zapros/\r\n'),
(54, 'Crusader Kings 3. Прохождение - Козельск, режим -Железный человек-. 1 серия. - YouTube', 'https://www.youtube.com/watch?v=3fjNsBibZYA&list=PLNBAguYwtiASgJFsk9cY-WQIKEQXV5B78\r\n'),
(55, 'Гамбургер меню на CSS или JS- Часть 1', 'https://myrusakov.ru/jquery-gamburger-menu-part1.html\r\n'),
(56, 'Гамбургер меню на CSS или JS- Часть 2', 'https://myrusakov.ru/jquery-gamburger-menu-part2.html\r\n'),
(57, 'Около 100 интересных иконок-гамбургер с различной анимацией при клике - NISNOM', 'https://nisnom.com/kollektsiya-animirovannyh-ikonok-gamburger-dlya-sajta-html-css-i-javascript-jquery/\r\n'),
(58, 'Александер из Оксенфурта - Яндекс Дзен', 'https://zen.yandex.ru/alexofoxenfurt\r\n'),
(59, 'CSS-текст', 'https://html5book.ru/css-text/#text-transform\r\n'),
(64, 'Hamburgers by Jonathan Suh', 'https://jonsuh.com/hamburgers/\r\n'),
(65, 'Live Edit для PhpStorm - полезный инструмент верстальщика', 'http://nikovit.ru/blog/live-edit-dlya-phpstorm-poleznyy-instrument-verstalshchika-/\r\n'),
(66, 'Slick Slider – установка, настройка примеры и документация', 'https://bezramok-tlt.ru/blog/posts/slick-slider-ustanovka-nastrojka-primery-i-dokumentaciya/\r\n'),
(67, 'Готовим Gulp для проекта - YouTube', 'https://www.youtube.com/watch?v=8M_Nx7qG9ks\r\n'),
(68, 'Как работает CSS Flexbox- наглядное введение в систему компоновки элементов на веб-странице', 'https://tproger.ru/translations/how-css-flexbox-works/\r\n'),
(69, 'Опыт древнейшей цивилизации Земли. - MK-Cinema. Альтернативные версии истории. - Яндекс Дзен', 'https://zen.yandex.ru/media/id/5f1a659a93c4900b3a8fe96c/opyt-drevneishei-civilizacii-zemli-5f971f7424d0d15a669e5433\r\n'),
(70, 'Отличия webpack и gulp- — Хабр Q&A', 'https://qna.habr.com/q/668899\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;