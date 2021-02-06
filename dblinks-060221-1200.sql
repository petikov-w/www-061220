-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 06 2021 г., 11:49
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `url` varchar(300) NOT NULL,
  `tag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `title`, `url`, `tag`) VALUES
(1, 'Уроки Laravel - YouTube', 'https://www.youtube.com/playlist?list=PLVfMKQXDAhGUO-r2UPv3VszEwn_edFVC6', 1),
(33, 'Яндекс', 'https://www.yandex.ru', 1),
(50, 'Отличия webpack и gulp- — Хабр Q&A', 'https://qna.habr.com/q/668899', 1),
(51, 'Введение в Ajax', 'http://javascript.ru/ajax/intro#chto-takoe-ajax-primer-realizacii', 1),
(52, '1. Crusader Kings 2 Начало Начал - YouTube', 'https://www.youtube.com/watch?v=SG5hpVNhGSA\r\n', 3),
(53, '8 примеров - AJAX запрос на чистом Javascript и не только', 'https://good-code.ru/ajax-zapros/\r\n', 1),
(54, 'Crusader Kings 3. Прохождение - Козельск, режим -Железный человек-. 1 серия. - YouTube', 'https://www.youtube.com/watch?v=3fjNsBibZYA&list=PLNBAguYwtiASgJFsk9cY-WQIKEQXV5B78\r\n', 3),
(55, 'Гамбургер меню на CSS или JS- Часть 1', 'https://myrusakov.ru/jquery-gamburger-menu-part1.html\r\n', 4),
(56, 'Гамбургер меню на CSS или JS- Часть 2', 'https://myrusakov.ru/jquery-gamburger-menu-part2.html\r\n', 4),
(57, 'Около 100 интересных иконок-гамбургер с различной анимацией при клике - NISNOM', 'https://nisnom.com/kollektsiya-animirovannyh-ikonok-gamburger-dlya-sajta-html-css-i-javascript-jquery/\r\n', 1),
(58, 'Александер из Оксенфурта - Яндекс Дзен', 'https://zen.yandex.ru/alexofoxenfurt\r\n', 3),
(59, 'CSS-текст', 'https://html5book.ru/css-text/#text-transform\r\n', 4),
(64, 'Hamburgers by Jonathan Suh', 'https://jonsuh.com/hamburgers/\r\n', 1),
(65, 'Live Edit для PhpStorm - полезный инструмент верстальщика', 'http://nikovit.ru/blog/live-edit-dlya-phpstorm-poleznyy-instrument-verstalshchika-/\r\n', 1),
(66, 'Slick Slider – установка, настройка примеры и документация', 'https://bezramok-tlt.ru/blog/posts/slick-slider-ustanovka-nastrojka-primery-i-dokumentaciya/\r\n', 1),
(67, 'Готовим Gulp для проекта - YouTube', 'https://www.youtube.com/watch?v=8M_Nx7qG9ks\r\n', 1),
(68, 'Как работает CSS Flexbox- наглядное введение в систему компоновки элементов на веб-странице', 'https://tproger.ru/translations/how-css-flexbox-works/\r\n', 4),
(69, 'Опыт древнейшей цивилизации Земли. - MK-Cinema. Альтернативные версии истории. - Яндекс Дзен', 'https://zen.yandex.ru/media/id/5f1a659a93c4900b3a8fe96c/opyt-drevneishei-civilizacii-zemli-5f971f7424d0d15a669e5433\r\n', 1),
(70, 'Отличия webpack и gulp- — Хабр Q&A', 'https://qna.habr.com/q/668899\r\n', 1),
(71, 'jQuery to JS - Переход к нативному JavaScript - Only to top', 'https://only-to-top.ru/blog/coding/2019-09-24-jquery-to-js.html\r\n', 1),
(72, 'Socket.IO - Краткое руководство - CoderLessons.com', 'https://coderlessons.com/tutorials/kompiuternoe-programmirovanie/uznaite-socket-io/socket-io-kratkoe-rukovodstvo\r\n', 1),
(73, 'TutorTop.ru — агрегатор-отзовик всех онлайн-курсов', 'https://tutortop.ru/', 1),
(74, 'Выгодные цены на продукты Microsoft', 'https://allsoft.ru/offers/skidki-microsoft/\r\n', 1),
(75, 'АMP. Что это и с чем его едят- - Хабр', 'https://habr.com/ru/post/327108/\r\n', 1),
(76, 'NodeJS (1 часть). Курсы Лущенко Александра', 'https://itgid.info/course/nodejs\r\n', 1),
(77, '10 фатальных ошибок, которых стоит избегать в The Witcher 3', 'https://wotpack.ru/10-fatalnyh-oshibok-kotoryh-mozhno-izbezhat-v-the-witcher-3/', 1),
(78, 'Dark Souls Все Секреты, прохождение и ЛОР - YouTube', 'https://www.youtube.com/playlist?list=PLz5bf-7wT-btCdpY39mJOA7S5uP6Rm7BI\r\n', 3),
(79, 'Dark Souls подробно - YouTube', 'https://www.youtube.com/playlist?list=PLTFgkLSHah4tC9by5P7QUkQA8qAbbx3kS\r\n', 3),
(80, 'Кратко о великом. Царствование Ивана Грозного', 'https://zavtra.ru/blogs/kratko_o_velikom_tcarstvovanie_ivana_groznogo?utm_referrer=https%3A%2F%2Fzen.yandex.com&utm_campaign=dbr\r\n', 5),
(81, 'Скринкаст по Gulp - YouTube', 'https://www.youtube.com/playlist?list=PLDyvV36pndZFLTE13V4qNWTZbeipNhCgQ\r\n', 1),
(82, 'CSS var в rgba или удобное использование цветов в Sass', 'https://bookflow.ru/css-var-v-rgba-ili-udobnoe-ispolzovanie-tsvetov-v-sass/\r\n', 1),
(83, 'Переменные CSS — курс молодого бойца - Блог компании SkillFactory - Хабр', 'https://habr.com/ru/company/skillfactory/blog/523130/\r\n', 1),
(84, 'Фишки Браузера Гугл Хром - 13 Секретов Google Chrome, о Которых Знают Лишь Единицы - YouTube', 'https://www.youtube.com/watch?v=sTXXh-c4Xao\r\n', 1),
(85, 'Modern JavaScript – Imports, Exports, Let, Const, and Promises in ES6+', 'https://www.freecodecamp.org/news/learn-modern-javascript/\r\n', 1),
(86, 'What Can You Put in a CSS Variable- - Coder\'s Block', 'https://codersblock.com/blog/what-can-you-put-in-a-css-variable/\r\n', 1),
(87, 'Как я структурирую CSS - Хабр', 'https://habr.com/ru/post/523884/\r\n', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'Без меток'),
(3, 'Игры'),
(4, 'Верстка'),
(5, 'История');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
