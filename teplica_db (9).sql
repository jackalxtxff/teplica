-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 08 2020 г., 08:25
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
  `description` varchar(1000) DEFAULT NULL COMMENT 'Описание товара',
  `image_path` varchar(255) DEFAULT NULL COMMENT 'Путь к фото товара',
  `material_type` varchar(255) DEFAULT NULL COMMENT 'Тип материала',
  `product_price` decimal(10,2) DEFAULT NULL COMMENT 'Цена',
  `discount_price` decimal(10,2) DEFAULT NULL COMMENT 'Цена со скидкой',
  `available` int(1) DEFAULT NULL COMMENT 'Удаление',
  `height` int(2) DEFAULT NULL COMMENT 'Высота',
  `width` int(2) DEFAULT NULL COMMENT 'Ширина',
  `length` int(2) DEFAULT NULL COMMENT 'Длина',
  `arcs` varchar(255) DEFAULT NULL COMMENT 'Дуги',
  `base` varchar(255) DEFAULT NULL COMMENT 'Основание',
  `durability` varchar(255) DEFAULT NULL COMMENT 'Прочность'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog_product`
--

INSERT INTO `catalog_product` (`id`, `product_name`, `description`, `image_path`, `material_type`, `product_price`, `discount_price`, `available`, `height`, `width`, `length`, `arcs`, `base`, `durability`) VALUES
(16, 'Теплица \"Капелька\"', 'Теплица в виде капельки. Подойдет для вас и вашей семьи', 'assets/uploads/1591474452glavnaya.jpg', 'Поликарбонат', '12000.00', '0.00', 1, 2, 3, 5, 'профильная труба 25*25мм толщина стенки 1,2мм', 'профильная труба 25*25 мм', 'Высокая'),
(17, 'Сверхпрочная теплица \"Капелька\"', 'Такая же как и обычная капелька только прочнее и стоит на 10к дороже', 'assets/uploads/1591474474glavnaya.jpg', 'Поликарбонат', '22000.00', '0.00', 1, 3, 3, 6, 'профильная труба 40*20мм толщина стенки 1,2мм', 'профильная труба 40*20 мм', 'Максимальная'),
(18, 'Теплица \"Народная\"', 'Теплица от народа для народа', 'assets/uploads/1591474641glavnaya.jpg', 'Поликарбонат', '15499.00', '0.00', 1, 2, 4, 6, 'профильная труба 20*20мм толщина стенки 1,2мм', 'профильная труба 40*20 мм', 'Высокая');

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
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `catalog_product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
