-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 24 2017 г., 15:54
-- Версия сервера: 5.7.16
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mysite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `secret_users`
--

CREATE TABLE `secret_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(32) NOT NULL,
  `balance` double(10,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `ip_reg` bigint(20) NOT NULL,
  `date_reg` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `secret_users`
--

INSERT INTO `secret_users` (`id`, `name`, `email`, `password`, `balance`, `ip_reg`, `date_reg`) VALUES
(1, 'Иван Петров', 'ivan@mail.ru', 'e10adc3949ba59abbe56e057f20f883e', 0.00, 0, 1484915948),
(2, 'Василий', 'vasya@mail.ru', '202cb962ac59075b964b07152d234b70', 5.20, 0, 1484915974),
(3, 'Вячеслав', 'v@mail.ru', '202cb962ac59075b964b07152d234b70', 0.00, 2130706433, 1485164081),
(4, 'Вячеслав', 'v1@mail.ru', '202cb962ac59075b964b07152d234b70', 5.00, 2130706433, 1485164483),
(5, 'Вячеслав', 'v2@mail.ru', '202cb962ac59075b964b07152d234b70', 0.00, 2130706433, 1485164495),
(6, 'abc', 'abc@mail.ru', '202cb962ac59075b964b07152d234b70', 0.00, 2130706433, 1485165154),
(7, 'xyz', 'zyz@mail.ru', 'e10adc3949ba59abbe56e057f20f883e', 0.00, 2130706433, 1485165179);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `secret_users`
--
ALTER TABLE `secret_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `balance` (`balance`,`date_reg`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `secret_users`
--
ALTER TABLE `secret_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
