-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Апр 07 2022 г., 14:23
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tbd_centr`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `author_id` bigint UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `author_id`, `header`, `article_text`, `image_url`, `created_at`, `updated_at`) VALUES
(9, 1, 'Жители Сургута не могут дозвониться до центра занятости населения', 'Сургутяне не могут дозвониться до центра занятости населения. Об этом URA.RU сообщил один из горожан на условиях анонимности.\r\n\r\n«Нашел в интернете указанные контактные телефоны, позвонил, включился автоответчик, который пообещал соединить с первым освободившимся специалистом. В итоге, спустя секунд 30 звонок просто сбрасывается. И так несколько раз подряд. А консультация при этом необходима. Видимо, придется ехать непосредственно в сам центр занятости», — сообщил собеседник агентства.\r\n\r\nКорреспондент URA.RU сам попытался несколько раз дозвониться в сургутский центр занятости населения, однако ни разу сделать это не удалось. Директор учреждения Ирина Мочалова в разговоре с URA.RU предположила, что речь может идти о техническом сбое. «У нас к этому номеру подключено три телефона и люди должны соединиться с тем из специалистов, кто сейчас свободен на линии. Мы разберемся с тем, что произошло. В крайней случае, можно звонить в приемную, там дадут какую-то обратную связь для обратившегося человека», — рассказала Мочалова.', 'uploads/8UtWEWLJuDvfd5lroDCZTEsKRG6YGzqxBczcrPgb.jpg', '2022-03-30 08:25:49', '2022-03-30 08:25:49'),
(10, 1, 'В Центре занятости населения Вахитовского района пройдет мини-ярмарка вакансий', '(Город Казань KZN.RU, 24 марта). В Вахитовском районе Казани 29 марта состоится мини-ярмарка вакансий.\r\nГорожане узнают о свободных местах и вакантных должностях, в том числе для пожилых людей, на предприятиях района. Также жители Казани получат помощь в трудоустройстве и смогут задать интересующие вопросы по трудовому законодательству специалистам центра занятости.\r\n\r\nЯрмарка вакансий состоится с 9:00 до 11:00 по адресу: ул.Качалова, 77. Более подробно о мероприятии можно узнать по телефону: +7(843)277-40-51, сообщается на сайте Центра занятости населения Казани.', 'uploads/gsfq0jrok4rnyhr31IQmA9YwIMFqMt8xycD4lPf6.jpg', '2022-03-30 08:26:53', '2022-03-30 08:26:53'),
(11, 1, 'Директор омского центра занятости сменила работу', 'По информации нашего агентства, с 22 марта 2022 года Танишева больше не является директором городского центра занятости. С указанной даты в качестве и. о. руководителя этой структуры работает Владимир Сапрыкин, который ранее был заместителем директора.\r\n\r\nГородскую службу занятости Марина Танишева возглавляла с января 2020 года. С 2002 по 2017 год она руководила Центром занятости по Советскому округу. Эту организацию ликвидировали, поскольку все окружные подразделения юридически влились в состав единой городской структуры.\r\n\r\nКак выяснил «СуперОмск», Марина Танишева с долей в 50% вошла в состав учредителей ООО «Торговый дом “Кристалл”. По 25% в этом ООО у Наталии Бессмертновой и Дениса Бессмертного, который также является генеральным директором торгового дома.\r\n\r\nСогласно открытым данным, ООО «Торговый дом “Кристалл” зарегистрировано по адресу Малунцева, 9 в Омске.', 'uploads/4xN5GyoTe683aX0QqkU5jXj4tdNXev8k7WYuPAjZ.jpg', '2022-03-30 08:27:18', '2022-03-30 08:27:18'),
(12, 1, 'Двойника Ким Чен Ына депортировали из Вьетнама', 'Власти Вьетнама депортировали из страны двойника Ким Чен Ына, актёра Говарда Экса. Вместе со своим коллегой Расселом Уайтом, изображавшим Дональда Трампа, Экс устроил «поддельный саммит» перед Ханойским оперным театром. Сам актёр считает, что причиной депортации стала его внешность. При этом Уайту разрешили остаться во Вьетнаме, но запретили появляться на публике в образе президента США.', 'uploads/C5NINBRV9xJonwGChvxleeZ1ifnj6ey6QE4dtIyg.jpg', '2022-03-30 08:29:01', '2022-03-30 08:29:01'),
(13, 1, 'Шесть бизнес-планов для получения финансовой помощи на открытие бизнеса одобрили в Новороссийске', 'Предприниматели получили государственную поддержку при открытии собственного дела в рамках национального проекта «Демография» федерального проекта «Содействие занятости населения».\r\nСемья Еременко из Новороссийска открыла мастерскую по изготовлению мебели и изделий из эпоксидной смолы. И на сегодняшний день успешно развивает свой бизнес.\r\n\r\nИрина Еременко обратилась в Центр занятости населения города-героя в сентябре 2021 года. Ирина с мужем давно изучали изготовление мебели и пробовали себя в этом искусстве. Услышав о выдаче единовременной финансовой помощи центром занятости населения на открытие собственного дела, женщина взялась за разработку бизнес-плана. Предоставив проект, Ирина Еременко была приглашена на заседание комиссии по рассмотрению бизнес-планов.', 'uploads/CddiAtqZot26JO2MoQoobodMbAgUlN9xrziGiZQC.webp', '2022-03-30 08:30:22', '2022-03-30 08:30:22'),
(14, 1, 'Где найти работу в Коломне', 'На ярмарку пригласили 72 человек из тех, кто состоит на учете в Центре занятости, а также всех желающих. Им на рассмотрение было предложено 130 вакансий по таким специальностям, как бухгалтер, следователь, инженер-строитель, юрист, оператор связи, почтальон, уборщик помещений, разнорабочий и другие. Заработная плата, которую готовы предложить работодатели, колеблется от 18 до 70 тысяч рублей. Работодатели отметили, что, несмотря на последние события в мире, их предприятия продолжают работать в штатном режиме и не отказываются от планов по дальнейшему развитию. Например, ООО «Коломенский винно-коньячный завод» в апреле запускает новую линию по розливу спиртосодержащей продукции. Поэтому заводу требуются инженер по качеству, завскладом, наладчик оборудования и операторы на линию.', 'uploads/fq4vgZrQy5zhraEDh8eOS79Oom1lcRHITbGkcAQt.jpg', '2022-03-30 08:31:53', '2022-03-30 08:31:53'),
(15, 1, 'Коломенский Центр занятости населения начал обслуживать жителей Зарайска и Луховиц', 'В Коломенском Центре занятости населения теперь помимо жителей Коломны и Озер обслуживают безработных из Луховиц и Зарайска. Нововведение начало действовать с 15 марта в соответствии с распоряжением Министерства социального развития Московской области от 14 марта 2022 года №20РВ-58 «Об организации предоставления государственных услуг в сфере занятости населения».', 'uploads/aIQI4IlzHGzmDgqWoMFTZyhI7Ijqq1bzDX0Bw5qm.jpg', '2022-03-30 08:32:27', '2022-03-30 08:32:27'),
(17, 1, 'В Омске тигр сбежал из-под ареста', 'зацените супру', 'uploads/Nd8kHwRMv9GUW5ZUhFpOH52tmRfpoDXd4ciMRs0B.jpg', '2022-04-01 16:40:23', '2022-04-01 16:40:23');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(33, '2022_03_24_155449_add_jobgiver_column', 1),
(34, '2022_03_30_071408_create_articles_table', 2),
(35, '2022_04_04_172124_add_company_name_field_to_users', 3),
(36, '2022_04_05_185859_create_vacancies_table', 4),
(37, '2022_04_05_191007_add_author_id_field_to_vacancies', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bdate` date NOT NULL,
  `exp` int NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jobgiver` tinyint(1) NOT NULL DEFAULT '0',
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `first_name`, `last_name`, `email`, `bdate`, `exp`, `password`, `role`, `created_at`, `updated_at`, `jobgiver`, `company_name`) VALUES
(1, 'admin', 'Thomas', 'Krollson', 'fuck_you@mail.ru', '2001-05-15', 2, '21232f297a57a5a743894a0e4a801fc3', 1, '2022-03-30 02:16:18', '2022-04-06 04:36:28', 1, 'ООО Пельмышка'),
(2, 'Eleanore_Kuvalis', 'Eleanore', 'Kuvalis', 'sarah.larkin@abshire.biz', '2006-05-11', 15, '4d9428d4253f40e8307ba2b14f3507ec', 0, '2022-03-30 02:17:48', '2022-03-30 02:17:48', 0, NULL),
(3, 'Kimberly_Dooley', 'Kimberly', 'Dooley', 'zmoore@gmail.com', '2018-02-12', 24, 'f0227ce9cb5f1044b052fc4d9b0289d6', 0, '2022-03-30 02:17:49', '2022-03-30 02:17:49', 0, NULL),
(4, 'Darrin_Gerhold', 'Darrin', 'Gerhold', 'margarette.zemlak@gmail.com', '2013-02-09', 42, '9e76d829aa39d1d06f8ea67d77f6812f', 0, '2022-03-30 02:17:49', '2022-03-30 02:17:49', 0, NULL),
(5, 'Carlee_Wunsch', 'Carlee', 'Wunsch', 'bridgette.hauck@kuvalis.com', '2018-10-14', 25, '3e8f508326552a7cf98004fe79b10f3c', 0, '2022-03-30 02:17:49', '2022-03-30 02:17:49', 0, NULL),
(6, 'Norval_Sipes', 'Norval', 'Sipes', 'pattie.windler@gmail.com', '2017-02-15', 30, 'd725a75295f3a2c30069074e6d911813', 0, '2022-03-30 02:17:50', '2022-03-30 02:17:50', 0, NULL),
(7, 'Ansel_Goodwin', 'Ansel', 'Goodwin', 'jacey63@ruecker.com', '1975-12-23', 45, '92ad91c1ee1028883d5f528c0aa9264b', 0, '2022-03-30 02:17:50', '2022-03-30 02:17:50', 0, NULL),
(8, 'Hilma_Ritchie', 'Hilma', 'Ritchie', 'viviane.gutkowski@hane.com', '2004-11-26', 4, '46500616aa67e91fc3eebde5448c0254', 0, '2022-03-30 02:17:50', '2022-03-30 02:17:50', 0, NULL),
(9, 'Patrick_Hegmann', 'Patrick', 'Hegmann', 'brooklyn.leannon@gmail.com', '1972-10-14', 15, 'c17a265326e78a0bf68f6e7dcbc021d5', 0, '2022-03-30 02:17:50', '2022-03-30 02:17:50', 0, NULL),
(10, 'Turner_Mante', 'Turner', 'Mante', 'aufderhar.laurianne@hermiston.com', '1978-03-01', 12, '11bd7acf464638ff11601c2fb80b6a53', 0, '2022-03-30 02:17:50', '2022-03-30 02:17:50', 0, NULL),
(11, 'Erica_Schoen', 'Erica', 'Schoen', 'keira.oconnell@yahoo.com', '2016-02-10', 33, 'aa72c143adf9c2aafaef8b0af064d618', 0, '2022-03-30 02:17:51', '2022-03-30 02:17:51', 0, NULL),
(12, 'Samara_Mills', 'Samara', 'Mills', 'gorczany.haylee@hotmail.com', '1992-01-02', 26, 'd7f56b497392ff5beb99a6222488b5d0', 0, '2022-03-30 02:17:51', '2022-03-30 02:17:51', 0, NULL),
(13, 'Alf_Ebert', 'Alf', 'Ebert', 'vhagenes@gmail.com', '2015-03-01', 14, '10bb538fd6167db2ee11134b55ca0d5e', 0, '2022-03-30 02:17:51', '2022-03-30 02:17:51', 0, NULL),
(14, 'Manuela_Bergnaum', 'Manuela', 'Bergnaum', 'mdenesik@hoppe.biz', '1988-03-07', 30, 'f82998e4e1074f0adabd6b20295f9eab', 0, '2022-03-30 02:17:51', '2022-03-30 02:17:51', 0, NULL),
(15, 'Pattie_Beatty', 'Pattie', 'Beatty', 'rebeca40@hotmail.com', '1987-03-08', 42, '83e989e1c95205e89da17de4333fa5e6', 0, '2022-03-30 02:17:52', '2022-03-30 02:17:52', 0, NULL),
(16, 'Paul_Hansen', 'Paul', 'Hansen', 'farrell.maggie@yahoo.com', '2012-03-26', 34, 'b0b960a48b158468f58406069e8a6800', 0, '2022-03-30 02:17:52', '2022-03-30 02:17:52', 0, NULL),
(17, 'test', 'Тест', 'Тестов', 'test@mail.ru', '1488-08-15', 666, '098f6bcd4621d373cade4e832627b4f6', 0, '2022-04-03 13:32:09', '2022-04-03 13:37:45', 1, NULL),
(18, '321', 'test132', 'testtest132', 'tes321t@mail.ru', '2022-04-03', 321, 'caf1a3dfb505ffed0d024130f58c5cfa', 0, '2022-04-03 13:35:34', '2022-04-03 13:35:34', 0, NULL),
(19, '321', 'te132st132', 'te12321sttest132', 'te321s321t@mail.ru', '1001-05-15', 321, '509dde7df28bf2ccf01b3963c7feddb6', 0, '2022-04-03 13:36:38', '2022-04-03 13:36:38', 0, NULL),
(20, 'test2', 'test2', 'test2', 'test2@mail.ru', '1488-08-15', 2, 'ad0234829205b9033196ba818f7a872b', 0, '2022-04-03 13:37:12', '2022-04-03 13:37:12', 0, NULL),
(21, 'expi', 'vova', 'korchagin', 'no_fuck_you@mail.ru', '2001-01-31', 69, '827ccb0eea8a706c4c34a16891f84e7b', 0, '2022-04-04 10:19:42', '2022-04-04 12:04:00', 1, NULL),
(22, 'test5', 'test5', 'test5', 'test5@mail.ru', '1548-04-15', 45, 'e3d704f3542b44a621ebed70dc0efe13', 0, '2022-04-06 04:39:47', '2022-04-06 04:41:15', 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `vacancies`
--

CREATE TABLE `vacancies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expirience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vacancies`
--

INSERT INTO `vacancies` (`id`, `name`, `salary`, `company_name`, `expirience`, `description`, `created_at`, `updated_at`, `author_id`) VALUES
(4, 'Кафельщик', '80000', 'ООО Глиномес', 'до 1 года', 'ну как бы надо кафель класть, а мы деньги будет давать иногда', '2022-04-06 03:21:02', '2022-04-06 03:21:02', 1),
(5, 'middle back-end developer', '800000', 'ООО Глиномес', 'от 3 до 5 лет', 'Нужен бекендер на полную ставку елки палки', '2022-04-06 04:20:41', '2022-04-06 04:20:41', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_author_id_foreign` (`author_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacancies_author_id_foreign` (`author_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `vacancies`
--
ALTER TABLE `vacancies`
  ADD CONSTRAINT `vacancies_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
