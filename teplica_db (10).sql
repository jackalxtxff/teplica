-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 08 2020 г., 19:45
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `teplica_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog_product`
--

CREATE TABLE `catalog_product` (
  `id` int(11) NOT NULL COMMENT 'id',
  `product_name` varchar(255) DEFAULT NULL COMMENT 'Название товара',
  `product_price` decimal(10,2) DEFAULT NULL COMMENT 'Цена',
  `discount_price` decimal(10,2) DEFAULT NULL COMMENT 'Цена со скидкой',
  `material_type` varchar(100) DEFAULT NULL COMMENT 'Тип материала',
  `height` int(2) DEFAULT NULL COMMENT 'Высота',
  `width` int(2) DEFAULT NULL COMMENT 'Ширина',
  `length` int(2) DEFAULT NULL COMMENT 'Длина',
  `arcs` varchar(100) DEFAULT NULL COMMENT 'Дуги',
  `base` varchar(100) DEFAULT NULL COMMENT 'Основание',
  `durability` varchar(30) DEFAULT NULL COMMENT 'Прочность',
  `description` varchar(1000) DEFAULT NULL COMMENT 'Описание товара',
  `image_path` varchar(255) DEFAULT NULL COMMENT 'Путь к фото товара',
  `available` int(1) DEFAULT NULL COMMENT 'Удаление'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog_product`
--

INSERT INTO `catalog_product` (`id`, `product_name`, `product_price`, `discount_price`, `material_type`, `height`, `width`, `length`, `arcs`, `base`, `durability`, `description`, `image_path`, `available`) VALUES
(16, 'Теплица \"Капелька\"', '12000.00', '0.00', 'Поликарбонат', 2, 3, 5, 'профильная труба 25*25мм толщина стенки 1,2мм', 'профильная труба 40*20мм', 'Высокая', 'Теплица в виде капельки. Подойдет для вас и вашей семьи', 'assets/uploads/1591474452glavnaya.jpg', 1),
(17, 'Сверхпрочная теплица \"Капелька\"', '22000.00', '0.00', 'Поликарбонат', 3, 3, 6, 'профильная труба 40*20мм толщина стенки 1,2мм', 'профильная труба 40*20мм', 'Максимальная', 'Такая же как и обычная капелька только прочнее и стоит на 10к дороже', 'assets/uploads/1591474474glavnaya.jpg', 1),
(18, 'Теплица \"Народная\"', '15499.00', '0.00', 'Поликарбонат', 2, 4, 6, 'профильная труба 20*20мм толщина стенки 1,2мм', 'профильная труба 40*20мм', 'Высокая', 'Теплица от народа для народа', 'assets/uploads/1591474641glavnaya.jpg', 1),
(21, 'dghj', '12888.00', '0.00', 'Поликарбонат', 3, 2, 7, 'профильная труба 20*20мм толщина стенки 1,2мм', 'профильная труба 25*25мм', 'Средняя', 'hgfjfghj', 'assets/uploads/1591634637glavnaya.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `material_type`
--

CREATE TABLE `material_type` (
  `id` int(11) NOT NULL,
  `material_type` varchar(100) NOT NULL COMMENT 'Тип материала'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `material_type`
--

INSERT INTO `material_type` (`id`, `material_type`) VALUES
(1, 'Поликарбонат');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL COMMENT 'Имя',
  `email` varchar(100) NOT NULL COMMENT 'Почта',
  `number` varchar(20) NOT NULL COMMENT 'Номер телефона',
  `adress` varchar(255) NOT NULL COMMENT 'Аресс',
  `product_id` int(11) NOT NULL COMMENT 'Товар'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `product_arcs`
--

CREATE TABLE `product_arcs` (
  `id` int(11) NOT NULL,
  `arcs` varchar(100) DEFAULT NULL COMMENT 'Дуги'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_arcs`
--

INSERT INTO `product_arcs` (`id`, `arcs`) VALUES
(1, 'профильная труба 20*20мм толщина стенки 1,2мм'),
(2, 'профильная труба 25*25мм толщина стенки 1,2мм'),
(3, 'профильная труба 40*20мм толщина стенки 1,2мм');

-- --------------------------------------------------------

--
-- Структура таблицы `product_base`
--

CREATE TABLE `product_base` (
  `id` int(11) NOT NULL,
  `base` varchar(100) NOT NULL COMMENT 'Основание'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_base`
--

INSERT INTO `product_base` (`id`, `base`) VALUES
(1, 'профильная труба 25*25мм'),
(2, 'профильная труба 40*20мм');

-- --------------------------------------------------------

--
-- Структура таблицы `product_durability`
--

CREATE TABLE `product_durability` (
  `id` int(11) NOT NULL,
  `durability` varchar(30) NOT NULL COMMENT 'Прочность'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_durability`
--

INSERT INTO `product_durability` (`id`, `durability`) VALUES
(3, 'Высокая'),
(4, 'Максимальная'),
(1, 'Низкая'),
(2, 'Средняя');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL COMMENT 'Имя',
  `email` varchar(100) NOT NULL COMMENT 'Почта',
  `gender` varchar(10) NOT NULL COMMENT 'Пол',
  `message` varchar(1000) NOT NULL COMMENT 'Сообщение'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog_product`
--
ALTER TABLE `catalog_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `material_type` (`material_type`),
  ADD KEY `material_type_2` (`material_type`),
  ADD KEY `arcs` (`arcs`),
  ADD KEY `base` (`base`),
  ADD KEY `durability` (`durability`);

--
-- Индексы таблицы `material_type`
--
ALTER TABLE `material_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `material_type` (`material_type`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `product_arcs`
--
ALTER TABLE `product_arcs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arcs` (`arcs`);

--
-- Индексы таблицы `product_base`
--
ALTER TABLE `product_base`
  ADD PRIMARY KEY (`id`),
  ADD KEY `base` (`base`);

--
-- Индексы таблицы `product_durability`
--
ALTER TABLE `product_durability`
  ADD PRIMARY KEY (`id`),
  ADD KEY `durability` (`durability`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
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
-- AUTO_INCREMENT для таблицы `catalog_product`
--
ALTER TABLE `catalog_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `material_type`
--
ALTER TABLE `material_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `product_arcs`
--
ALTER TABLE `product_arcs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product_base`
--
ALTER TABLE `product_base`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `product_durability`
--
ALTER TABLE `product_durability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `catalog_product`
--
ALTER TABLE `catalog_product`
  ADD CONSTRAINT `catalog_product_ibfk_1` FOREIGN KEY (`material_type`) REFERENCES `material_type` (`material_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `catalog_product_ibfk_2` FOREIGN KEY (`arcs`) REFERENCES `product_arcs` (`arcs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `catalog_product_ibfk_3` FOREIGN KEY (`durability`) REFERENCES `product_durability` (`durability`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `catalog_product_ibfk_4` FOREIGN KEY (`base`) REFERENCES `product_base` (`base`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `catalog_product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
