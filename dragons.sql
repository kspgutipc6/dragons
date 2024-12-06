-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 06 2024 г., 17:15
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dragons`
--

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE `booking` (
  `id` int NOT NULL,
  `fio` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `qty` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id`, `fio`, `phone`, `email`, `date`, `time`, `qty`) VALUES
(1, 'Иванов Иван Иванович', '+7-(892)-769-72-57', 'ivanov@mail.ru', '2024-11-30', '18:00:00', 3),
(3, 'Смирнова Ольга Васильевна', '+7 (892) 769-72-31', 'smirnova@mail.ru', '2024-12-03', '20:45:00', 2),
(30, 'Зайцева Маргарита', '+7 (892) 769-72-31', 'zm@gmail.com', '2024-12-02', '16:00:00', 2),
(34, 'Кириллов Вячеслав', '+7-(892)-769-72-58', 'KV@gmail.com', '2024-11-30', '17:00:00', 10),
(40, 'Филиппов Эдуард', '+7 (892) 769-72-31', 'filippov@mail.ru', '2024-12-07', '18:00:00', 8),
(44, 'Дмитриев Олег Иванович', '+7-(927)-741-88-65', 'dmitriev@gmail.com', '2024-11-29', '18:00:00', 7),
(48, 'Симонов Александр', '+7-(892)-768-74-52', 'simonov@mail.ru', '2024-12-08', '16:00:00', 5),
(49, 'Симонов Дмитрий Олегович', '+7 (883) 786-72-25', 'simonov@mail.ru', '2024-12-08', '17:00:00', 6),
(50, 'Петров И.Н.', '+7-(892)-769-72-57', 'ivanov@mail.ru', '2024-11-30', '13:00:00', 1),
(51, 'Каверина Мария', '+7(888)-888-88-88', 'kaverina@gmail.com', '2024-12-01', '16:00:00', 3),
(52, 'Афанасьев Александр', '+7 (892) 769-72-31', 'afan@br.ru', '2024-12-15', '18:00:00', 8),
(53, 'Смирнова Лидия Яковлевна', '+7-(927)-741-88-65', 'smirnova@mail.ru', '2025-01-05', '17:00:00', 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
