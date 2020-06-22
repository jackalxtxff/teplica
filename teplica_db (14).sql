-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 22 2020 г., 18:28
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id` int NOT NULL COMMENT 'id',
  `product_name` varchar(255) DEFAULT NULL COMMENT 'Название товара',
  `product_price` decimal(10,2) DEFAULT NULL COMMENT 'Цена',
  `discount_price` decimal(10,2) DEFAULT NULL COMMENT 'Цена со скидкой',
  `material_type` varchar(100) DEFAULT NULL COMMENT 'Тип материала',
  `height` float DEFAULT NULL COMMENT 'Высота',
  `width` float DEFAULT NULL COMMENT 'Ширина',
  `length` float DEFAULT NULL COMMENT 'Длина',
  `arcs` varchar(100) DEFAULT NULL COMMENT 'Дуги',
  `base` varchar(100) DEFAULT NULL COMMENT 'Основание',
  `durability` varchar(30) DEFAULT NULL COMMENT 'Прочность',
  `description` varchar(1000) DEFAULT NULL COMMENT 'Описание товара',
  `image_path` varchar(255) DEFAULT NULL COMMENT 'Путь к фото товара',
  `available` int DEFAULT NULL COMMENT 'Статус'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog_product`
--

INSERT INTO `catalog_product` (`id`, `product_name`, `product_price`, `discount_price`, `material_type`, `height`, `width`, `length`, `arcs`, `base`, `durability`, `description`, `image_path`, `available`) VALUES
(16, 'Теплица \"Капелька\"', '12000.00', '0.00', 'Поликарбонат', 2, 5, 4, 'профильная труба 25*25мм толщина стенки 1,2мм', 'профильная труба 40*20мм', 'Максимальная', 'Теплица в виде капельки. Подойдет для вас и вашей семьи', 'assets/uploads/1591474452glavnaya.jpg', 1),
(17, 'Сверхпрочная теплица \"Капелька\"', '22000.00', '0.00', 'Поликарбонат', 2, 3, 8, 'профильная труба 40*20мм толщина стенки 1,2мм', 'профильная труба 25*25мм', 'Высокая', 'Такая же как и обычная капелька только прочнее и стоит на 10к дороже', 'assets/uploads/1591474474glavnaya.jpg', 1),
(18, 'Теплица \"Народная\"', '15499.00', '0.00', 'Поликарбонат', 2, 4, 6, 'профильная труба 20*20мм толщина стенки 1,2мм', 'профильная труба 25*25мм', 'Высокая', 'Теплица от народа для народа', 'assets/uploads/1591474641glavnaya.jpg', 1),
(37, 'Теплица Усиленная из профильной трубы 20*20мм длина 4 метра', '14300.00', '0.00', 'Поликарбонат', 2, 4, 4, 'профильная труба 20*20мм толщина стенки 1,2мм', 'профильная труба 40*20мм', 'Максимальная', 'Грунтозацепы для фиксации теплицы при установке на открытый грунт', 'assets/uploads/1592315726.jpg', 1),
(38, 'Теплица \"Березка\"', '16700.00', '0.00', 'Поликарбонат', 2, 3, 6, 'профильная труба 25*25мм толщина стенки 1,2мм', 'профильная труба 40*20мм', 'Высокая', 'В комплекте одна дверь-купе, две форточки в коньке', 'assets/uploads/1592316274.jpg', 1),
(39, 'Теплица \"РаДа\"', '25400.00', '0.00', 'Поликарбонат', 2, 3, 4, 'профильная труба 20*20мм толщина стенки 1,2мм', 'профильная труба 25*25мм', 'Высокая', 'В каждом торце теплицы из трубы РаДа-3м по умолчанию устанавливаются дверь и форточка', 'assets/uploads/1592316362.jpg', 1),
(40, 'Теплица \"Botanik\"', '35000.00', '0.00', 'Поликарбонат', 3, 4, 5, 'профильная труба 40*20мм толщина стенки 1,2мм', 'профильная труба 40*20мм', 'Максимальная', 'Теплица в английском стиле в стандартных размерах', 'assets/uploads/1592316435.jpg', 1),
(41, 'Теплица \"Botanik\" по индивидуальным размерам ', '55000.00', '0.00', 'Поликарбонат', 0, 0, 0, 'профильная труба 40*20мм толщина стенки 1,2мм', 'профильная труба 40*20мм', 'Максимальная', 'Изготовим теплицу в английском стиле в нестандартных размерах', 'assets/uploads/1592316693.jpg', 1),
(42, 'Теплица \"Воля Стрелка\"', '13500.00', '0.00', 'Поликарбонат', 2, 2, 3, 'профильная труба 25*25мм толщина стенки 1,2мм', 'профильная труба 25*25мм', 'Высокая', 'Долговечная, удобная и надежная теплица для дачи', 'assets/uploads/1592316710.jpg', 1),
(43, 'Теплица \"Рябина\"', '14800.00', '0.00', 'Поликарбонат', 2, 3, 5, 'профильная труба 20*20мм толщина стенки 1,2мм', 'профильная труба 40*20мм', 'Высокая', 'Теплица отлично подойдет для приусадебного участка. Оптимальное сочетание ширины и высоты', 'assets/uploads/1592316721.jpg', 1),
(44, 'Теплица двухскатная \"Кипарис\"', '60400.00', '0.00', 'Поликарбонат', 3, 6, 10, 'профильная труба 40*20мм толщина стенки 1,2мм', 'профильная труба 40*20мм', 'Максимальная', 'В комплекте одна дверь-купе, две форточки в коньке. Без стекла', 'assets/uploads/1592329619.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `material_type`
--

CREATE TABLE `material_type` (
  `id` int NOT NULL,
  `material_type` varchar(100) NOT NULL COMMENT 'Тип материала'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `material_type`
--

INSERT INTO `material_type` (`id`, `material_type`) VALUES
(1, 'Поликарбонат');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `contact` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Почта/телефон',
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Имя',
  `message` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Сообщение'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `contact`, `name`, `message`) VALUES
(13, 'ivan@gmail.com', 'Иван Иванов', 'купить теплицу хочу, перезвоните'),
(14, '89225224545', '', ''),
(15, '88005553535', 'Алексей', 'заказать теплицу');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Имя',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Почта',
  `number` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Номер телефона',
  `adress` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Аресс',
  `product_id` int DEFAULT NULL COMMENT 'Товар'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `number`, `adress`, `product_id`) VALUES
(9, 'Олег Попов', 'popovich@mail.ru', '8982565732', 'Ленина 120', 44),
(10, 'Алексей Алексеевич', 'alexalex@mail.ru', '8922450145', 'п.ува, ул. Нижняя 24', 16),
(11, 'Дмитрий ', 'dmitry@mail.ru', '8982153500', 'п.ува, ул. Нижняя 23', 42);

-- --------------------------------------------------------

--
-- Структура таблицы `product_arcs`
--

CREATE TABLE `product_arcs` (
  `id` int NOT NULL,
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
  `id` int NOT NULL,
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
  `id` int NOT NULL,
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
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
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
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `material_type`
--
ALTER TABLE `material_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `product_arcs`
--
ALTER TABLE `product_arcs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product_base`
--
ALTER TABLE `product_base`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `product_durability`
--
ALTER TABLE `product_durability`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
