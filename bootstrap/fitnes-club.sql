-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 20 2021 г., 16:03
-- Версия сервера: 5.5.62
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fitnes-club`
--

-- --------------------------------------------------------

--
-- Структура таблицы `club`
--

CREATE TABLE `club` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `cost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `club`
--

INSERT INTO `club` (`id`, `name`, `discription`, `cost`) VALUES
(1, 'Персональные тренировки.', 'Персональные занятия с опытным тренером, позволяющие добиться нужного результата за кратчайшие сроки без вреда для здоровья.', 'Стоимость тренировки (2 часа): 500 р.'),
(2, 'Посещение бассейна.', 'Бассейн для всей семьи. Вы также можете воспользоваться услугами персонального тренера в аквазоне.', 'Стоимость посещения (2 часа):\r\n300 р.'),
(3, 'Массаж.', 'После утомительной тренировки, Вы можете воспользоваться услугой массажа: спортивный, аппаратный, лечебный, общий, детский.', 'Стоимость процедуры (1 час):\r\n450 р.'),
(4, 'Аэробика.', 'Групповые занятия аэробикой для женщин всех возрастов. Комплекс занятий по аэробики позволит Вам сохранить вашу фигуру и здоровье в тонусе.', 'Стоимость тренировки (1,5 час):\r\n350 р.'),
(5, 'Подарочный сертификат.', 'Наш сертификат станет лучшим подарком на любой праздник для Ваших близких людей.', 'Цена сертификата :\r\n500-5000 р.'),
(6, 'Спортивное питание.', 'Также в нашем Фитнес-клубе есть возможность приобрести спортивное питание. У нас огромный ассортимент и постоянные акции для наших посетителей.', 'Цена :\r\n300-2000 р.');

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `cost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id`, `name`, `description`, `cost`) VALUES
(0, 'Персональные тренировки.', 'Персональные занятия с опытным тренером, позволяющие добиться нужного результата за кратчайшие сроки без вреда для здоровья.', 'Стоимость тренировки (2 часа):\r\n500 р.'),
(0, 'Посещение бассейна.', 'Бассейн для всей семьи. Вы также можете воспользоваться услугами персонального тренера в аквазоне.', 'Стоимость посещения (2 часа):\r\n300 р.'),
(0, 'Массаж..', 'После утомительной тренировки, Вы можете воспользоваться услугой массажа: спортивный, аппаратный, лечебный, общий, детский.', 'Стоимость процедуры (1 час):\r\n450 р.'),
(0, 'Аэробика.', 'Групповые занятия аэробикой для женщин всех возрастов.Комплекс занятий по аэробики позволит Вам сохранить вашу фигуру и здоровье в тонусе.', 'Стоимость тренировки (1,5 час):\r\n350 р.'),
(0, 'Подарочный сертификат.', 'Наш сертификат станет лучшим подарком на любой праздник для Ваших близких людей.', 'Цена сертификата :\r\n500-5000 р.'),
(0, 'Спортивное питание.', 'Также в нашем Фитнес-клубе есть возможность приобрести спортивное питание. У нас огромный ассортимент и постоянные акции для наших посетителей.', 'Цена:\r\n300-2000 р.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
