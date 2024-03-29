-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 06 2019 г., 23:04
-- Версия сервера: 5.7.20
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_task`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_name` varchar(50) NOT NULL,
  `article_content` text NOT NULL,
  `article_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`article_id`, `article_name`, `article_content`, `article_image`) VALUES
(1, 'Как выбрать генератор для дома', 'Проблемы с перебоями электроснабжения можно относительно просто решить установкой автономного генератора. Сегодня мы поговорим о выборе генератора, правилах его установки, подключения к домашней электросети.', '1.jpg'),
(2, 'Как устроены генераторы постоянного тока', 'По виду вырабатываемой электроэнергии генераторы бывают: 1. постоянного тока; 2. переменного. Принцип работы простейшего генератора.', '5.jpg'),
(5, '15 лучших стабилизаторов напряжения - Рейтинг 2019', 'Выбор портативных электростанций на отечественном рынке очень широк. Большая часть продукции представлена однотипными клонами, которые хорошо подходят для питания', '10.jpg'),
(6, 'Как выбрать стабилизатор напряжения', 'Бензиновый двигатель внутреннего сгорания. Распространён наиболее широко благодаря простоте устройства, в то же время характеризуется наименьшей экономичностью, но при этом дёшев в обслуживании. ', 'image1.png'),
(7, 'Какой стабилизатор напряжения нужен для дома', 'Выбор портативных электростанций на отечественном рынке очень широк. Большая часть продукции представлена однотипными клонами, которые хорошо подходят для питанияСтабилизаторы ЭНЕРГОТЕХ - это устройства, которые разработаны с учетом реальных условий отечественных сетей электропитания, и способны удовлетворить требования самого изысканного потребителя.', '8.jpg'),
(8, 'Сетевой фильтр', 'Бензиновый двигатель внутреннего сгорания. Распространён наиболее широко благодаря простоте устройства, в то же время характеризуется наименьшей экономичностью, но при этом дёшев в обслуживании. Некоторые сетевые фильтры предлагают дополнительные «сопутствующие услуги», например, обеспечивают фильтрацию и защиту для телефонной линии / факса, Ethernet-сети и телевизионной антенны.', '9.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
