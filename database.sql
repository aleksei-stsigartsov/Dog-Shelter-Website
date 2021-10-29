-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 28 2021 г., 19:43
-- Версия сервера: 5.7.27-30
-- Версия PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u1458928_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pass_hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `pass_hash`) VALUES
(1, 'root', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Структура таблицы `content_new`
--

CREATE TABLE `content_new` (
  `id` int(11) NOT NULL,
  `main_page_image` text NOT NULL,
  `upper_image` text NOT NULL,
  `lower_image_1` text NOT NULL,
  `lower_image_2` text NOT NULL,
  `status` text NOT NULL,
  `date` text NOT NULL,
  `dog_name_rus` text NOT NULL,
  `title_1_rus` text NOT NULL,
  `text_1_rus` text NOT NULL,
  `title_2_rus` text NOT NULL,
  `text_2_rus` text NOT NULL,
  `title_3_rus` text NOT NULL,
  `text_3_rus` text NOT NULL,
  `dog_name_est` text NOT NULL,
  `title_1_est` text NOT NULL,
  `text_1_est` text NOT NULL,
  `title_2_est` text NOT NULL,
  `text_2_est` text NOT NULL,
  `title_3_est` text NOT NULL,
  `text_3_est` text NOT NULL,
  `dog_name_eng` text NOT NULL,
  `title_1_eng` text NOT NULL,
  `text_1_eng` text NOT NULL,
  `title_2_eng` text NOT NULL,
  `text_2_eng` text NOT NULL,
  `title_3_eng` text NOT NULL,
  `text_3_eng` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `content_new`
--

INSERT INTO `content_new` (`id`, `main_page_image`, `upper_image`, `lower_image_1`, `lower_image_2`, `status`, `date`, `dog_name_rus`, `title_1_rus`, `text_1_rus`, `title_2_rus`, `text_2_rus`, `title_3_rus`, `text_3_rus`, `dog_name_est`, `title_1_est`, `text_1_est`, `title_2_est`, `text_2_est`, `title_3_est`, `text_3_est`, `dog_name_eng`, `title_1_eng`, `text_1_eng`, `title_2_eng`, `text_2_eng`, `title_3_eng`, `text_3_eng`) VALUES
(1, '1.jpg', '2.jpg', '3.gif', '4.jpg', 'В приюте', '15.08.2021', 'Лея111', 'Скромняшка Лея', ' 🌸 1 год. Послушная, ласковая девочка. Дружит с другими животными, не конфликтная. Очень долго пытались поймать для фото, потому что немного пугливая. ', 'Мы верим, что у Леи еще есть человек в этом мире.', 'Лея выросла из маленького щенка в любопытного кота. У неё тоже есть свои мечты, надежды и ожидания, но пока они не сбылись. К счастью, улыбнулась Лея, она пошла в свой настоящий дом, но она была не подходящим человеком для нее. Только через 2 дня было решено вернуть Лею, потому что кот не дал ей сразу подрезать ногти… Естественно, что каждому живому существу нужно время, чтобы приспособиться к новой среде. Мы тоже не сразу освобождаемся в новых местах, но нам также нужно время, чтобы появилось чувство безопасности. Но, очевидно, это был не просто человек, предназначенный для Леи. ', 'Лея добросердна', 'Человек, который понимает, что каждая собачка, которая возвращается домой из приюта, в первые дни может заползти за диван и немного испугаться. В конце концов, они на новом месте и среди новых людей, и им нужно время, чтобы приспособиться.', 'Leeja222', 'Lorem ipsum dolor sit amet,', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius semper tellus, euismod tempus nisi. Proin in mi mi. Mauris eros turpis, porta eget ultrices eget, eleifend sed risus. Maecenas convallis neque in nulla fermentum, quis ullamcorper eros dapibus. In sed euismod magna, a porttitor urna. ', 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius semper tellus, euismod tempus nisi. Proin in mi mi. Mauris eros turpis, porta eget ultrices eget, eleifend sed risus. Maecenas convallis neque in nulla fermentum, quis ullamcorper eros dapibus. In sed euismod magna, a porttitor urna. ', 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius semper tellus, euismod tempus nisi. Proin in mi mi. Mauris eros turpis, porta eget ultrices eget, eleifend sed risus. Maecenas convallis neque in nulla fermentum, quis ullamcorper eros dapibus. In sed euismod magna, a porttitor urna.', 'Leja333', 'Lorem ipsum dolor sit amet,', ' Morbi augue magna, maximus in felis feugiat, sollicitudin faucibus massa. Ut laoreet et dui et mollis. Fusce sed nisl at mi facilisis fermentum nec sed lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam suscipit tempus mattis. Fusce quis feugiat libero. Donec vel dolor massa. ', 'Lorem ipsum dolor sit amet,', 'Morbi augue magna, maximus in felis feugiat, sollicitudin faucibus massa. Ut laoreet et dui et mollis. Fusce sed nisl at mi facilisis fermentum nec sed lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam suscipit tempus mattis. Fusce quis feugiat libero. Donec vel dolor massa. ', 'Lorem ipsum dolor sit amet,', 'Morbi augue magna, maximus in felis feugiat, sollicitudin faucibus massa. Ut laoreet et dui et mollis. Fusce sed nisl at mi facilisis fermentum nec sed lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam suscipit tempus mattis. Fusce quis feugiat libero. Donec vel dolor massa.');

-- --------------------------------------------------------

--
-- Структура таблицы `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `lang` varchar(3) NOT NULL,
  `code` varchar(30) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `terms`
--

INSERT INTO `terms` (`id`, `lang`, `code`, `text`) VALUES
(1, 'eng', 'header_main', 'Main'),
(2, 'est', 'header_main', 'Avaleht'),
(3, 'rus', 'header_main', 'Главная'),
(4, 'eng', 'header_about', 'About us'),
(5, 'est', 'header_about', 'Meist'),
(6, 'rus', 'header_about', 'О нас'),
(7, 'eng', 'header_dogs', 'Dogs at the shelter'),
(8, 'est', 'header_dogs', 'Koerad varjupaigas'),
(9, 'rus', 'header_dogs', 'Собаки в приюте'),
(10, 'eng', 'header_foundhome', 'Already found a home'),
(11, 'est', 'header_foundhome', 'Kodu juba leitud'),
(12, 'rus', 'header_foundhome', 'Уже нашли дом'),
(13, 'eng', 'header_helpdogs', 'Help for animals'),
(14, 'est', 'header_helpdogs', 'Loomade abistamine'),
(15, 'rus', 'header_helpdogs', 'Помощь животным'),
(16, 'eng', 'header_contacts', 'Contacts'),
(17, 'est', 'header_contacts', 'Kontaktid'),
(18, 'rus', 'header_contacts', 'Контакты'),
(19, 'eng', 'header_language', 'Language'),
(20, 'est', 'header_language', 'Keel'),
(21, 'rus', 'header_language', 'Язык'),
(22, 'eng', 'index_good_heart', 'A loyal friend'),
(23, 'est', 'index_good_heart', 'Lahkele südamele'),
(24, 'rus', 'index_good_heart', 'Доброму сердцу'),
(25, 'eng', 'index_loyal_friend', 'to a kind heart!'),
(26, 'est', 'index_loyal_friend', 'ustav sõber!'),
(27, 'rus', 'index_loyal_friend', 'преданный друг!'),
(28, 'eng', 'index_about_1', 'It is a self-motivated and financially independent organization to help abandoned or distressed dogs. Our shelter is the safest home, where every dog clings to each other and will never let his brothers be sad alone. Officially founded in early 2020, but in reality, the organization began helping animals more than 4 years ago.'),
(29, 'est', 'index_about_1', 'See on isemotiivne ja rahaliselt sõltumatu organisatsioon, mis aitab mahajäetud või hädas koeri. Meie varjupaik on kõige turvalisem kodu, kus iga koer klammerdub üksteise külge ega lase kunagi oma vendadel üksi kurvastada. Ametlikult 2020. aasta alguses asutatud organisatsioon alustas loomade abistamisega tegelikult rohkem kui 4 aastat tagasi.'),
(30, 'rus', 'index_about_1', 'Это созданная по личной инициативе и материально независимая организация для помощи брошенным или попавшим в беду собакам. Наш приют - самый надёжный дом, где каждая собака держится друг за дружку и никогда не даст своим братьям загрустить в одиночестве. Официально основанная в начале 2020 года, но в действительности организация начала помогать животным уже больше 4 лет назад.'),
(31, 'eng', 'index_dogs_looking', 'Dogs Looking for a Home!'),
(32, 'est', 'index_dogs_looking', 'Koerad otsivad kodu!'),
(33, 'rus', 'index_dogs_looking', 'Собачки Ищут Дом!'),
(34, 'eng', 'index_about_2', 'They have no home, no true family of their own. The most charming and funniest companions in life are so fond of affection, walks and, of course, food. Each of these vulnerable vagabonds needs a different person.'),
(35, 'est', 'index_about_2', 'Neil pole päris oma perekonda. Elu kõige võluvamad ja naljakamad kaaslased armastavad nii kiindumust, jalutuskäike ja loomulikult toitu.  Kõik need haavatavad hulkurid vajavad erinevat inimest.'),
(36, 'rus', 'index_about_2', 'У них нет дома, нет своей истинной семьи. Самые очаровательные и весёлые товарищи по жизни так любят ласку, прогулки и конечно же поесть. Каждому из этих ранимых бродяг нужен свой человек.'),
(37, 'eng', 'helpdogs_shelter_assistance', 'Shelter assistance'),
(38, 'est', 'helpdogs_shelter_assistance', 'Abi varjupaigale'),
(39, 'rus', 'helpdogs_shelter_assistance', 'Помощь приюту'),
(40, 'eng', 'helpdogs_shelter_assistance_1', 'Our organization was created from personal initiative with an aim of helping stray animals, giving them warmth and a second chance to feel loved.'),
(41, 'est', 'helpdogs_shelter_assistance_1', 'Meie organisatsioon loodi isiklikust algatusest eesmärgiga aidata hulkuvaid loomi, anda neile headust ja teine ​​võimalus tunda end armastatuna.'),
(42, 'rus', 'helpdogs_shelter_assistance_1', 'Наша организация создана из личной инициативы с целью помочь бездомным животным, подарив им добро и второй шанс почувствовать себя любимыми.'),
(43, 'eng', 'helpdogs_shelter_assistance_2', 'All the dogs in the shelter live together in warmth and joy, licking their wounds in anticipation of their new caring and cordial owners.'),
(44, 'est', 'helpdogs_shelter_assistance_2', 'Kõik varjupaigas olevad koerad elavad koos soojuse ja rõõmuga, lakkudes haavu uute hoolivate ja südamlike omanike ootuses.'),
(45, 'rus', 'helpdogs_shelter_assistance_2', 'Все собаки в приюте живут друг о дружку в тепле и радости, зализывая свои раны в ожидании своих новых заботливых и сердечных хозяев.'),
(46, 'eng', 'helpdogs_volunteering', 'Volunteering'),
(47, 'est', 'helpdogs_volunteering', 'Vabatahtlik töö'),
(48, 'rus', 'helpdogs_volunteering', 'Волонтёрство'),
(49, 'eng', 'helpdogs_volunteering_1', 'Despite the fact that all dogs live together with constant playful glee, each one of the cute tailed beasts needs special attention and affection, a walk or a play session. However, there are not enough hands for this kind of work and we would gladly consider your desire to help and participate!'),
(50, 'est', 'helpdogs_volunteering_1', 'Hoolimata asjaolust, et kõik koerad elavad koos pideva mängulise kutsikarõõmuga, vajab iga armsam sabaloom erilist tähelepanu ja kiindumust, jalutuskäiku ja mängu, kuid selleks tööks ei jätku jõudu ja käsi ning me võtaksime hea meelega teie soov aidata ja osaleda!'),
(51, 'rus', 'helpdogs_volunteering_1', 'Не смотря на то что все собаки живут дружно с постоянной игривой щенячьей радостью, каждый из милейших хвостатых нуждается в отдельном внимании и ласке, прогулке и игре, однако сил и рук на эту работу не хватает и мы бы с радостью приняли во внимание ваше желание помочь и поучаствовать!'),
(52, 'eng', 'helpdogs_volunteering_2', 'Don\'t hesitate to do good, we need you!'),
(53, 'est', 'helpdogs_volunteering_2', 'Ärge kartke heategu teha, me vajame teid!'),
(54, 'rus', 'helpdogs_volunteering_2', 'Не стоит стесняться делать доброе дело, мы нуждаемся именно в вас!'),
(55, 'eng', 'helpdogs_volunteering_3', 'Come visit with siblings, family, close ones and friends!'),
(56, 'est', 'helpdogs_volunteering_3', 'Tule koos sõprade, vendade-õdede, pere ja sõpradega!'),
(57, 'rus', 'helpdogs_volunteering_3', 'Приходите с друзьями, братьями-сёстрами, родными и близкими!'),
(58, 'eng', 'helpdogs_volunteering_4', 'We are positive that the hours spent will not bring trouble into your life, but will be a source of joy and diversity in your timetable.'),
(59, 'est', 'helpdogs_volunteering_4', 'Oleme kindlad, et veedetud tunnid ei too teie ellu tarbetuid probleeme, vaid toovad ainult rõõmu ja mitmekesistavad teie tööpäevi.'),
(60, 'rus', 'helpdogs_volunteering_4', 'Мы уверены что проведённые часы не принесут в вашу жизнь лишних проблем, а лишь принесёт радость и разнообразит рабочие будни.'),
(61, 'eng', 'helpdogs_dontation', 'Donations'),
(62, 'est', 'helpdogs_dontation', 'Annetused'),
(63, 'rus', 'helpdogs_dontation', 'Пожертвования'),
(64, 'eng', 'helpdogs_dontation_1', 'When helping, donating or investing energy, we would like to assure you that all of it will not be wasted and will bears fruit.'),
(65, 'est', 'helpdogs_dontation_1', 'Aidates, annetades või energiat investeerides tahaksite teada, kas teie abi pole tõesti raisatud ja kannab vilja.'),
(66, 'rus', 'helpdogs_dontation_1', 'Помогая, жертвуя или вкладывая силы вам хотелось бы знать действительно ли ваша помощь не пропадает зря и приносит плоды.'),
(67, 'eng', 'helpdogs_dontation_2', 'Our officially registered organization is open to those wishing to have a look at our celebrated furry heroes and resources used.'),
(68, 'est', 'helpdogs_dontation_2', 'Meie ametlikult registreeritud organisatsioon on avatud kõigile, kes soovivad vaadata pidustuste karvaseid kangelasi ja kasutatud vahendeid.'),
(69, 'rus', 'helpdogs_dontation_2', 'Наша официально зарегистрированная организация открыта для желающих взглянуть на пушистых героев торжества и используемые средства.'),
(70, 'eng', 'helpdogs_dontation_3', 'We help stray animals around the world. Currently we have dogs from Spain, Russia, Belarus and Georgia. Each rescue is a huge expense: Transport, documents, vaccinations, nurture and treatment. Everyone who is willing to help, please come aboard! Kibble, money, toys, leashes, mats, old and new, and everything else you can think of. Absolutely anything, you name it, will be a beneficial (and indescribable in words) contribution for the organization and the dogs.'),
(71, 'est', 'helpdogs_dontation_3', 'Aitame hulkuvaid loomi üle maailma. Nüüd on varjupaigas päästetud koerad Hispaaniast, Valgevenest, Gruusiast, Venemaalt.  Iga päästmine on tohutu kulu: transport, dokumendid, vaktsineerimine, hooldus, ravi.  Kes tahab aidata, liituge! Raha, toit, mänguasjad, jalutusrihmad, diivanid, vanad ja uued ning kõik muu. Absoluutselt mis tahes muu või ülaltoodud abi on organisatsioonile ja koertele kasulik ja sõnadega kirjeldamatu.'),
(72, 'rus', 'helpdogs_dontation_3', 'Мы помогаем бездомным животным по всему миру. Сейчас в приюте находятся спасенные собаки из Испании, Белоруссии, Грузии, России. Каждое спасение это огромные расходы: Транспорт, документы, прививки, содержание, лечение. Кто хочет помочь, присоединяйтесь! Деньгами, кормами, игрушками, поводками, лежанками, старому и новому, и всему другому. Абсолютно любая иная или вышеперечисленная помощь принесёт пользу и неописуемый словами полезный вклад для организации и собак.'),
(73, 'eng', 'helpdogs_dontation_4', 'We will be glad to receive anything and everything!'),
(74, 'est', 'helpdogs_dontation_4', 'Meil on hea meel kõige üle!'),
(75, 'rus', 'helpdogs_dontation_4', 'Мы будем рады всему-всему!'),
(76, 'eng', 'helpdogs_new_friend', 'Take a new friend with you'),
(77, 'est', 'helpdogs_new_friend', 'Võtke uus sõber kaasa'),
(78, 'rus', 'helpdogs_new_friend', 'Возьмите к себе нового друга'),
(79, 'eng', 'helpdogs_new_friend_1', 'If you are not sure about choosing a new devoted friend, come and get acquainted!'),
(80, 'est', 'helpdogs_new_friend_1', 'Kui te pole kindel uue pühendunud sõbra valimisel, tulge tutvuma!'),
(81, 'rus', 'helpdogs_new_friend_1', 'Если вы не уверены в выборе нового преданного друга, приходите знакомиться!'),
(82, 'eng', 'helpdogs_new_friend_2', 'Our foreign \"purebred\" (in their own way) special kind animals can show and tell you much more than a couple of pictures, they can change your views, touch your heart, soul and grant a bundle of great emotions.'),
(83, 'est', 'helpdogs_new_friend_2', 'Meie võõrad, omal moel puhtatõulised ja erilised lahked loomad võivad teile näidata ja rääkida palju enamat kui paar digipilti, nad võivad muuta teie vaateid, puudutada teie südant ja hingesügavusi, andes parimaid emotsioone.'),
(84, 'rus', 'helpdogs_new_friend_2', 'Наши иностранные, по-своему породистые и особенные добрейшие животные могут показать и рассказать вам куда больше чем пару цифровых картинок, они способны изменить ваши взгляды, дотронуться до вашего сердца и глубины души, подарив наилучшие эмоции.'),
(85, 'eng', 'helpdogs_new_friend_3', 'In our shelter, everyone is unique, charming and beautiful. Every single animal has their own story, but most of the tales are far from humor, but are terrifying and touching, which our furry friends certainly did not deserve.'),
(86, 'est', 'helpdogs_new_friend_3', 'Meie varjupaigas on igaüks individuaalne, võluv ja ilus, igal on oma lugu, kuid peaaegu kõigil, kaugel lahketest ja mitte naljakatest, vaid õõvastavatest ja liigutavatest, mida nad kindlasti ei väärinud!'),
(87, 'rus', 'helpdogs_new_friend_3', 'В нашем приюте каждый индивидуален, очарователен и прекрасен, у каждого есть своя история, однако практически все, далеко не добрые и не весёлые, а ужасающие и трогательные, чего они уж точно не заслужили!'),
(88, 'eng', 'helpdogs_share', 'Share and tell others!'),
(89, 'est', 'helpdogs_share', 'Jaga ja räägi teistele!'),
(90, 'rus', 'helpdogs_share', 'Делитесь и рассказывайте ближним!'),
(91, 'eng', 'helpdogs_share_1', 'In this affair, we can help by making an effort together, by scattering, telling or sharing information with people who also want to help. Maybe you couldn\'t take a dog, but in reality you can help to find a new owner, just through chain of \"friend of a friend\". '),
(92, 'est', 'helpdogs_share_1', 'Selles küsimuses saame aidata ainult koos pisut pingutades, levitades, rääkides või jagades teavet samade inimestega, kes soovivad aidata. Võib-olla ei saaks te koera võtta, kuid tegelikult võite uue omaniku leida kohe pärast \"kahte või kolme käepigistust\".'),
(93, 'rus', 'helpdogs_share_1', 'В этом деле мы сможем помочь лишь вместе приложив чуточку усилия, распространив, рассказав или поделившись информацией с такими же желающими помочь людьми. Может вы и не могли бы взять собаку, но в действительности найти нового хозяина можно, всего через «два-три рукопожатия».'),
(94, 'eng', 'helpdogs_share_2', 'Let\'s help together! Let say no to stray animals!'),
(95, 'est', 'helpdogs_share_2', 'Aitame koos!  Ärgu olgu hulkuvaid loomi!'),
(96, 'rus', 'helpdogs_share_2', 'Давайте помогать вместе! Пусть не будет бездомных животных!'),
(97, 'eng', 'foundhome_hero', 'Dogs that have already found a home'),
(98, 'est', 'foundhome_hero', 'Koerad, kes on juba kodu leidnud'),
(99, 'rus', 'foundhome_hero', 'Собаки, которые уже нашли дом'),
(100, 'eng', 'foundhome_title', 'Already found a home'),
(101, 'est', 'foundhome_title', 'Kodu juba leitud'),
(102, 'rus', 'foundhome_title', 'Уже нашли дом'),
(103, 'eng', 'contacts_information', 'Contact Information'),
(104, 'est', 'contacts_information', 'Kontaktinfo'),
(105, 'rus', 'contacts_information', 'Контактная информация'),
(106, 'eng', 'contacts_contacts', 'CONTACTS'),
(107, 'est', 'contacts_contacts', 'KONTAKTID'),
(108, 'rus', 'contacts_contacts', 'КОНТАКТЫ'),
(109, 'eng', 'contacts_address', 'VIEW ADDRESS'),
(110, 'est', 'contacts_address', 'VAATA AADRESSI'),
(111, 'rus', 'contacts_address', 'ПОСМОТРЕТЬ АДРЕС'),
(112, 'eng', 'footer_shelter', 'Shelter'),
(113, 'est', 'footer_shelter', 'Varjupaik'),
(114, 'rus', 'footer_shelter', 'Приют'),
(115, 'eng', 'footer_donations', 'Donations'),
(116, 'est', 'footer_donations', 'Annetused'),
(117, 'rus', 'footer_donations', 'Пожертвования'),
(118, 'eng', 'footer_other_help', 'Other help'),
(119, 'est', 'footer_other_help', 'Muu abi'),
(120, 'rus', 'footer_other_help', 'Иная помощь');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `content_new`
--
ALTER TABLE `content_new`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `content_new`
--
ALTER TABLE `content_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
