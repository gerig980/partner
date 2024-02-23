-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2024 at 02:41 AM
-- Server version: 10.3.39-MariaDB
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapprecufe_partner`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `title_en` varchar(191) DEFAULT NULL,
  `description` longtext NOT NULL,
  `description_en` longtext DEFAULT NULL,
  `image` text NOT NULL,
  `other_images` longtext DEFAULT NULL,
  `location` varchar(191) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `title_en`, `description`, `description_en`, `image`, `other_images`, `location`, `date`, `time`, `created_at`, `updated_at`) VALUES
(3, 'Pjesëmarrja në eventin e KHA', 'Participation in the event of the KHA', '<p>Në eventin e organizuar nga Klea Huta Academy për 5-vjetorin e saj, Amita ishte një prej partnerëve kryesorë në promovimin e vlerave të edukimit dhe zhvillimit të fëmijëve.&nbsp;<br>&nbsp;</p><p>Promovimi i Amita Mollë Jeshile ishte një nga pjesët kryesore të prezantimit të Amitës në këtë event. Pjesëmarrja jonë në këtë event u fokusua në të ofruarën e një eksperiencë të paharrueshme për fëmijët, duke promovuar një stil jetese të shëndetshëm dhe ndërgjegjësimin për rëndësinë e natyrës dhe mjedisit.<br>&nbsp;</p><p>Gjithashtu pjesëmarrja jonë në këtë event u shënua si një angazhim i vazhdueshëm për të kontribuar në edukimin dhe zhvillimin e fëmijëve, duke ofruar produkte të cilat inkurajojnë një stil jetese të shëndetshëm dhe të sjellin vlera pozitive për shoqërinë.<br>&nbsp;</p><p>Me pjesëmarrjen tonë aktive në këtë event, ne shprehim mbështetjen tonë për iniciativat e edukimit dhe zhvillimit të fëmijëve, si dhe vazhdimin e bashkëpunimit me organizata dhe institucione të ngjashme në të ardhmen. Amita vazhdon të jetë një partner i përkushtuar në promovimin e edukimit dhe shëndetit të fëmijëve dhe të rinjve në komunitetet tona.</p>', '<p>In the event organized by Klea Huta Academy for its 5th anniversary, Amita was one of the main partners in promoting the values of children\'s education and development.</p><p><br>The promotion of Amita Molle Jeshile was one of the main parts of Amita\'s presentation at this event.Our participation in this event was focused on providing an unforgettable experience for children, promoting a healthy lifestyle and awareness of the importance of nature and the environment.</p><p>Also, our participation in this event was marked as a continuous commitment to contribute to the education and development of children, offering products that encourage a healthy lifestyle and bring positive values to society.&nbsp;<br>&nbsp;</p><p>With our active participation in this event, we express our support for the initiatives of children\'s education and development, as well as the continuation of cooperation with similar organizations and institutions in the future. Amita continues to be a committed partner in promoting the education and health of children and youth in our communities.</p>', 'DSC05363-83805.png', '[\"DSC05372-61533.png\",\"DSC05494-50317.png\",\"DSC05339-2985.png\",\"DSC06480-79725.png\",\"DSC04627-35689.png\",\"DSC05354-21948.png\"]', 'Plazza', '2024-02-04 00:00:00', '17:00', '2024-02-15 09:32:42', '2024-02-21 20:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` text NOT NULL,
  `banner` longtext DEFAULT NULL,
  `logo` longtext DEFAULT NULL,
  `category` text DEFAULT NULL,
  `category_en` text DEFAULT NULL,
  `title` varchar(191) NOT NULL,
  `title_en` varchar(191) DEFAULT NULL,
  `description` longtext NOT NULL,
  `description_en` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `banner`, `logo`, `category`, `category_en`, `title`, `title_en`, `description`, `description_en`, `created_at`, `updated_at`) VALUES
(1, 'AMITA', 'Brand-Cover-Amita-51469.png', 'amita-desktop-22603.png', 'Combination-products1-80612.png', 'Pije', 'Drink', 'Lëngjet e frutave Amita, një histori suksesi!', 'Amita Juice, a success story!', '<h4>Shijoni Amita në çdo moment!</h4><p><strong>Niseni ditën tuaj</strong> me lëngjet Amita dhe bëjeni vaktin e mëngjesit më të shijshëm e të ushqyeshëm! Do t’ju japë energji për të përballuar punët tuaja të përditshme. Amita Portokall, Amita Portokall –Kajsi – Mollë janë ideale për një mëngjes me shije rifreskuese dhe me përbërës të dobishëm për oganizmin tuaj.</p><p><strong>Bëni një pushim</strong> dhe relaksohuni duke shijuar lëngun tuaj të preferuar Amita!&nbsp;<br>Lëngjet e frutave Amita janë ideale për të shoqëruar vaktet e lehta gjatë shkollës, sportit dhe aktiviteteve argëtuese. Merrni kudo me vete një Amita Banane për një shije unike!</p><p>Amita është zgjedhja e përkryer <strong>për t’u ndarë me miqtë</strong> dhe për të organizuar momente të bukura e unike së bashku. Në këto momente ju mund të shijoni një Amita Qershi, Amita Luleshtrydhe apo një Amita Mollë, shije që na ofrojnë ëmbëlsi, hidratim dhe vlera ushqyese.</p><p>Organizoni <strong>piknik familjar</strong> në bukuritë e natyrës duke marrë me vete ushqimet e përgatitura vetë dhe lëngun tuaj të preferuar Amita Pjeshkë &amp; Amita Dardhë –Mollë!</p><p>&nbsp;</p><p>&nbsp;</p><p>Shijet kryesore janë pjeshka, qershia, banania, ananasi, luleshtrydhja, molla, karrota, portokalli dhe dardhë-mollë si dhe dy shijet më të reja që u prezantuan për konsumatorin Shqiptar në muajn Maj:<br>Amita Boronicë e Kuqe- Rrush dhe Multivitaminë 8 fruta me 7 vitamina.</p><p><strong>5 arsye pse është mirë të konsumohet Amita:</strong></p><ul><li>Nuk përmban konservantë</li><li>Amita përbëhet nga lëngje frutash natyrale dhe të një cilësie të lartë që janë zgjedhja e preferuar e konsumatorëve shqiptarë.</li><li>Amita siguron energji dhe substanca ushqyese për të gjithë njerëzit që dëshirojnë një formë të mirë fizike.</li><li>Lëngjet Amita kontribuojnë në hidratimin e trupit tonë duke siguruar në të njëjtën kohë dhe vlerat ushqyese.</li><li>Një produkt i lehtë dhe praktik në paketimin Tetra pak i cili ruan vitaminat, vlerat ushqyese dhe shijen e mrekullueshme të lëngut të frutave.</li></ul>', '<h4>Enjoy Amita in every moment!</h4><p><strong>Start up in the morning</strong> with Amita Juice and make your breakfast more delicious and nutritious. Will give you energy to continue your demanding daily routine. Amita Orange, Amita, Amita Orange- Apricot –Apple are ideal for breakfast with a refreshing taste and beneficial ingredients.</p><p><strong>Take a break</strong> and relax while enjoying your favourite Amita.<br>Amita fruit juices are ideal to have with light meals during school, sports and entertainment activities. Take with you Amita Banana for a unique taste.</p><p>Amita is the perfect choice <strong>to share with friends</strong> and organize most beautiful and unique moments together. In these moments you can enjoy your Amita Cherry, Amita Strawberry, Amita Apple flavors that provide us sweet taste, hydration and nutritional values.</p><p>Organize <strong>family excursion</strong> in the beautiful nature taking with you your homemade treats and your favorite juice of Amita Peach &amp; Amita Pear- Apple.</p><p>&nbsp;</p><p>The main flavors are peach, cherry, banana, pineapple, strawberries, apple, carrot, orange &amp; pear -Apple”.&nbsp;<br>In May 2016, two new flavors were launched:&nbsp;<br>Amita Cranberry – Grape and Multivitamin 8 fruits with 7 vitamins.</p><p><strong>5 Reasons for consuming Amita juices:</strong></p><ul><li>Have no preservatives.</li><li>With Natural fruit juices and high quality and are the preferred choice for the Albanian consumer.</li><li>Amita provides energy and nutritional substances for all people who want a good physical health.</li><li>Amita Juice contribute to the hydration of our system providing at the same time nutritional substances.</li><li>An easy &amp; practical product in aseptic Tetra Pak packaging which preserves vitamins, nutrional values and great taste of fruit juice.</li></ul>', '2024-02-15 13:53:35', '2024-02-19 08:17:57'),
(2, 'AMITA FREE', 'P-Ballkanik-Brands-Cover-FREE-12708.png', 'P-Ballkanik-Amita-FREE-Slider-3246.png', 'P-Ballkanik-Brands-Cover-FREE-94927.png', 'Pije', 'Drink', 'Amita Free', 'Amita Free', '<p>Ushqyerja e shëndetshme është kthyer në një trend global të kohëve të fundit. Kjo pasi sasi të reduktuara sheqeri ndihmojnë në menaxhimin më të mirë të metabolizmit.</p><p>Prandaj AMITA <strong>është e para që prezanton në treg linjën më të re të lëngjeve të frutave, të krijuar dhe frymëzuar nga konsumatorët e saj</strong>.&nbsp;<br><br>Amita FREE është një linjë e re innovative që ndryshon kategorinë e lëngjeve të frutave. Ajo vjen në katër shije dhe në dy formate (1L dhe 330ml)<br><br>Pa sheqer të shtuar. Me ëmbëlsues nga bima e <strong>stevias</strong>. Si dhe përmban në mënyrë të konsiderueshmë më pak kalori se pijet korrespondues të frutave me sheqer.</p><h4><strong>4 shijet e Amita FREE janë:</strong></h4><ul><li><strong>Amita FREE Qershi</strong></li><li><strong>Amita FREE Pjeshkë</strong></li><li><strong>Amita Free Portokall, Karotë, Limon</strong></li><li><strong>Amita FREE Portokall, Kajsi, Mollë</strong></li></ul>', '<p>Good <strong>nutrition</strong> is one of the keys to a <strong>healthy</strong> life, and lately the healthy eating and drinking habits have turned into a global trend. This is because reduced sugar quantities help in better managing the metabolism.</p><p>Hence Amita is the first brand presenting to the market the newest variety of fruit juices created and inspired by its consumers.<br><br>Amita FREE is the innovative product that changes the whole category of fruit juices. It comes in four flavours and two formats (1L and 330ml).&nbsp;<br><br>It is without added sugar. With sweetener from Stevia plant and it contains considerably less calories from the respective juice drinks with sugar.</p><h4><strong>The 4 flavours of Amita Free are:</strong></h4><ul><li><strong>Amita FREE Cherry</strong></li><li><strong>Amita FREE Peach</strong></li><li><strong>Amita Free Orange, Carrot, Lemon</strong></li><li><strong>Amita FREE Orange, Apricot, Apple</strong></li></ul>', '2024-02-15 13:55:43', '2024-02-16 09:23:33'),
(3, 'PAPADOUPOULOS', 'HEADER-Composition3000@2x-22731.png', 'P-Ballkanik-Slider-Papadopoulos-40393.png', 'HEADER-Composition3000@2x-93766.png', 'Ushqimore', 'Food', 'Papadopoulos, një nga kompanitë më të mëdha ushqimore në Greqi!', 'Papadopoulos, one of the most significant FMCG companies in Greece!', '<p>E.J. Papadopoulos S.A. është një nga kompanitë më të mëdha ushqimore në Greqi dhe me një histori të gjatë që daton që në vitin 1922 kur familja Papadopoulos filloi për herë të parë prodhimin e biskotave.</p><p>Kompania në mënyrë strategjike investon në Greqi, dhe aktualisht zotëron katër facilitete prodhimi me pajisje nga më të fundit, në rajone të ndryshme të Greqisë, si dhe një magazinë qëndrore që mbulon një sipërfaqe prej 110.000 m2.</p><p>Sot, kompania është lider tregu në kategorinë e biskotave në Greqi dhe është zgjeruar me sukses në kategori të tjera, si buka, zëvendësuesit e bukës, drithëra etj.</p><p>Duke mbajtur një rol kryesor në kategorinë e biskotave me një traditë të fortë, E.J. Papadopoulos S.A. krenohet me gamën e gjerë e të shijshme dhe cilësinë e lartë të produkteve të saj – një portofol i zgjeruar që konsiston në 34 brande tepër të njohura në Greqi. Për më tepër, gëzon njohje ndërkombëtare nëpërmjet prezencës së saj në 60 shtete në mbarë botën.</p><p>Nëpërmjet dedikimit të saj për vlerat korporative,”Cilësi-Inovacion-Respekt për Konsumatorin”, E.J. Papadopoulos S.A. ka patur sukses për të qenë zgjedhja e parë për miliona konsumatorë, që është një nga vlerat më të larta mes shumë çmimeve të marra dhe fituara gjatë gjithë këtyre viteve në shumë panaire kombëtare dhe ndërkombëtare.</p>', '<p>E.J. Papadopoulos is one of the largest and most significant FMCG companies in Greece with a long history dating back to 1922 when the Papadopoulos family first started producing biscuits.</p><p>The company strategically invests in Greece and actually owns 4 production facilities throughout Greece extended on a 110.000 m2 area.</p><p>Today, the company is market leader in biscuit category in Greece, and successful has extended her activity in other categories, such as bread, bread substitutes, cereals, etc.<br>Moreover, it has high social responsibility and participation in social events.</p><p>Holding a leading role in cookies category with strong tradition, E.J. Papadopoulos S.A. prides with the wide range of deliciousness and superior appearance of its products – a wide range of portfolio with 34 very popular brands in Greece. Moreover, has presence in 60 countries around the world.</p><p>Through her dedication to the corporate values, \"Quality-Innovation-Respect for the Customer\", E.J. Papadopoulos S.A. has succeeded in being the first choice for millions of consumers, which is one of the highest values among the many awards received and won all these years in many national and international fairs.</p>', '2024-02-15 13:57:24', '2024-02-16 09:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `brand` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `name_en`, `brand`, `created_at`, `updated_at`) VALUES
(1, '1 Litër', '1 Liter', 'Amita', '2024-02-15 14:04:20', '2024-02-15 14:04:20'),
(2, '250 ml', '250 ml', 'Amita', '2024-02-15 14:06:07', '2024-02-15 14:06:07'),
(3, '330 ml', '330 ml', 'Amita', '2024-02-15 14:06:24', '2024-02-15 14:06:24'),
(4, '330 ml', '330 ml', 'Amita Free', '2024-02-15 14:06:54', '2024-02-15 14:06:54'),
(5, '1 Litër', '1 Liter', 'Amita Free', '2024-02-15 14:07:06', '2024-02-15 14:07:06'),
(6, 'Caprice', 'Caprice', 'Papadoupoulos', '2024-02-15 14:12:31', '2024-02-15 14:12:31'),
(7, 'Biscotello', 'Biscotello', 'Papadoupoulos', '2024-02-15 14:12:48', '2024-02-15 14:12:48'),
(8, 'Gemista', 'Gemista', 'Papadoupoulos', '2024-02-15 14:13:07', '2024-02-15 14:13:07'),
(9, 'Cookielicious', 'Cookielicious', 'Papadoupoulos', '2024-02-15 14:13:38', '2024-02-15 14:13:38'),
(10, 'Bisco Cookies', 'Bisco Cookies', 'Papadoupoulos', '2024-02-15 14:14:09', '2024-02-15 14:14:09'),
(11, 'Mini', 'Mini', 'Papadoupoulos', '2024-02-15 14:14:55', '2024-02-15 14:14:55'),
(12, 'Goldies', 'Goldies', 'Papadoupoulos', '2024-02-15 14:15:06', '2024-02-15 14:15:06'),
(13, 'Petit', 'Petit', 'Papadoupoulos', '2024-02-15 14:15:16', '2024-02-15 14:15:16'),
(14, 'Digestive', 'Digestive', 'Papadoupoulos', '2024-02-15 14:15:28', '2024-02-15 14:15:28'),
(15, 'Miranda', 'Miranda', 'Papadoupoulos', '2024-02-15 14:15:37', '2024-02-15 14:15:37'),
(16, 'Mini Pick', 'Mini Pick', 'Papadoupoulos', '2024-02-15 14:15:56', '2024-02-15 14:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `text` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Mariko Ferrell', 'lapelyxax@mailinator.com', '+1 (552) 208-2688', 'Aut ut incididunt au', '2024-02-14 13:12:48', '2024-02-14 13:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_08_091154_create_sessions_table', 1),
(7, '2023_03_09_104209_create_roles_table', 1),
(8, '2023_03_20_113525_create_modules_table', 1),
(9, '2023_03_20_114402_create_permission_table', 1),
(10, '2023_03_20_143749_create_permission_role', 1),
(11, '2023_09_20_110601_create_contacts_table', 1),
(12, '2023_09_25_090758_create_services_table', 1),
(13, '2024_01_08_100246_create_brands_table', 1),
(14, '2024_01_08_120634_create_products_table', 1),
(15, '2024_01_11_092239_create_categories_table', 1),
(18, '2024_02_13_111137_create_activities_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Paneli', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(2, 'Rolet', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(3, 'Përdoruesit', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(4, 'Permission', '2024-02-08 13:40:47', '2024-02-08 13:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `module_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Paneli', 'app.dashboard', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(2, 2, 'Lista', 'app.roles.index', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(3, 2, 'Krijimi', 'app.roles.create', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(4, 2, 'Ruajtja', 'app.roles.store', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(5, 2, 'Editimi', 'app.roles.edit', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(6, 2, 'Fshirja', 'app.roles.destroy', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(7, 3, 'Lista', 'app.users.index', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(8, 3, 'Krijimi', 'app.users.create', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(9, 3, 'Ruajtja', 'app.users.store', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(10, 3, 'Editimi', 'app.users.edit', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(11, 3, 'Fshirja', 'app.users.destroy', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(12, 4, 'Lista', 'app.permissions.index', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(13, 4, 'Krijimi', 'app.permissions.create', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(14, 4, 'Ruajtja', 'app.permissions.store', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(15, 4, 'Editimi', 'app.permissions.edit', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(16, 4, 'Fshirja', 'app.permissions.destroy', '2024-02-08 13:40:47', '2024-02-08 13:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 8, 1, NULL, NULL),
(9, 9, 1, NULL, NULL),
(10, 10, 1, NULL, NULL),
(11, 11, 1, NULL, NULL),
(12, 12, 1, NULL, NULL),
(13, 13, 1, NULL, NULL),
(14, 14, 1, NULL, NULL),
(15, 15, 1, NULL, NULL),
(16, 16, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `barcode` varchar(191) NOT NULL,
  `brand` varchar(191) DEFAULT NULL,
  `image` text NOT NULL,
  `system_code` varchar(191) DEFAULT NULL,
  `packet_code` varchar(191) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `pieces` varchar(191) DEFAULT NULL,
  `lifespan` varchar(191) DEFAULT NULL,
  `category` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `barcode`, `brand`, `image`, `system_code`, `packet_code`, `package`, `pieces`, `lifespan`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Amita Ananas 1L', '5201005080133', 'Amita', 'Amita Ananas 1L-90561.png', NULL, NULL, 'Tetra Pack', '12 Copë', '9 muaj', '1 Litër', '2024-02-15 14:26:03', '2024-02-15 14:26:03'),
(2, 'Amita Banane 1L', '5201005001480', 'Amita', 'Amita Banane 1L-88831.png', NULL, NULL, 'Tetra Pack', '12 copë', '12 Muaj', '1 Litër', '2024-02-15 14:27:09', '2024-02-15 14:27:09'),
(3, 'Amita Karotë 1L', '5201005080119', 'Amita', 'Amita Karotë 1L-69745.png', NULL, NULL, 'Tetra Pack', '12 copë', '9 Muaj', '1 Litër', '2024-02-15 14:27:59', '2024-02-20 15:38:14'),
(4, 'Amita Luleshtrydhe 1L', '5201005069268', 'Amita', 'Amita Luleshtrydhe 1L-64323.png', NULL, NULL, 'Tetra Pack', '12 copë', '12 Muaj', '1 Litër', '2024-02-15 14:28:59', '2024-02-15 14:28:59'),
(5, 'Amita Mollë Jeshile 1L', '5201005083073', 'Amita', 'Amita Mollë Jeshile 1L-38154.png', NULL, NULL, 'Tetra Pack', '12 copë', '9 Muaj', '1 Litër', '2024-02-15 14:31:34', '2024-02-20 15:38:00'),
(6, 'Amita Multivitaminë 1L', '5201005080492', 'Amita', 'Amita Multivitaminë 1L-64704.png', NULL, NULL, 'Tetra Pack', '12 copë', '9 Muaj', '1 Litër', '2024-02-15 14:32:23', '2024-02-20 15:37:49'),
(7, 'Amita Pjeshke 1L', '5201005001688', 'Amita', 'Amita Pjeshke 1L-72990.png', NULL, NULL, 'Tetra Pack', '12 copë', '12 Muaj', '1 Litër', '2024-02-15 14:33:09', '2024-02-15 14:33:09'),
(8, 'Amita Portokall 1L', '5201005080249', 'Amita', 'Amita Portokall 1L-94627.png', NULL, NULL, 'Tetra Pack', '12 copë', '9 Muaj', '1 Litër', '2024-02-15 14:33:47', '2024-02-15 14:33:47'),
(9, 'Amita Qershi 1L', '5201005001466', 'Amita', 'Amita Qershi 1L-48323.png', NULL, NULL, 'Tetra Pack', '12 copë', '12 Muaj', '1 Litër', '2024-02-15 14:34:20', '2024-02-15 14:34:20'),
(10, 'Amita Triplo 1L', '5201005074156', 'Amita', 'Amita Triplo 1L-58351.png', NULL, NULL, 'Tetra Pack', '12 copë', '12 Muaj', '1 Litër', '2024-02-15 14:35:20', '2024-02-15 14:35:20'),
(11, 'Amita Pjeshkë 250ml', '5201005007338', 'Amita', 'Amita Pjeshke 250ml-63415.png', NULL, NULL, 'Tetra Pack', '27 copë', '12 Muaj', '250 ml', '2024-02-15 14:36:11', '2024-02-15 14:36:11'),
(12, 'Amita Qershi 250ml', '5201005001473', 'Amita', 'Amita Qershi 250ml-8910.png', NULL, NULL, 'Tetra Pack', '27 copë', '12 Muaj', '250 ml', '2024-02-15 14:36:51', '2024-02-15 14:36:51'),
(13, 'Caprice Classic (6*53g)', '5201004523143', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-01-15937.png', 'P001', NULL, NULL, '12 copë', NULL, 'Caprice', '2024-02-20 15:46:54', '2024-02-20 15:46:54'),
(14, 'Caprice Classic 115g', '5201004021328', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-02-30433.png', 'P002', NULL, NULL, '20 copë', NULL, 'Caprice', '2024-02-20 15:47:33', '2024-02-20 15:47:33'),
(15, 'Caprice Classic 250g', '5201004023360', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-03-63862.png', 'P003', NULL, NULL, '12 copë', NULL, 'Caprice', '2024-02-20 15:48:08', '2024-02-20 15:48:08'),
(16, 'Caprice Classic 400g', '5201004020338', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-04-51757.png', 'P007', NULL, NULL, '6 copë', NULL, 'Caprice', '2024-02-20 15:48:45', '2024-02-20 15:48:45'),
(17, 'Caprice Vanilla 115g', '5201004560919', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-05-3992.png', 'P051', NULL, NULL, '20 copë', NULL, 'Caprice', '2024-02-20 15:51:39', '2024-02-20 15:51:39'),
(18, 'Caprice Dark 115g', '5201004525666', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-06-5977.png', 'P052', NULL, NULL, '20 copë', NULL, 'Caprice', '2024-02-20 15:52:31', '2024-02-20 15:52:31'),
(19, 'Biscotello Vanilla 200g', '5201004544094', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-07-93581.png', 'P013', NULL, NULL, '12 copë', NULL, 'Biscotello', '2024-02-20 15:53:04', '2024-02-20 15:53:04'),
(20, 'Gemista Chocolate 200g', '5201004040633', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-08-92422.png', 'P014', NULL, NULL, '12 copë', NULL, 'Gemista', '2024-02-20 15:53:45', '2024-02-20 15:53:45'),
(21, 'Gemista Strawberry 200g', '5201004040664', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-09-35297.png', 'P015', NULL, NULL, '12 copë', NULL, 'Gemista', '2024-02-20 15:54:35', '2024-02-20 15:54:35'),
(22, 'Gemista Double Cream 230g', '5201004042064', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-16-6961.png', 'P020', NULL, NULL, '12 copë', NULL, 'Gemista', '2024-02-20 16:02:25', '2024-02-20 16:02:25'),
(23, 'Gemista Double Chocolate 230g', '5201004042262', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-17-99361.png', 'P021', NULL, NULL, '12 copë', NULL, 'Gemista', '2024-02-20 16:03:04', '2024-02-20 16:03:04'),
(24, 'Gemista Lemon 200g', '5201004040640', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-10-50460.png', 'P016', NULL, NULL, '12 copë', NULL, 'Gemista', '2024-02-20 16:04:26', '2024-02-20 16:04:26'),
(25, 'Gemista Orange 200g', '5201004040657', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-11-17412.png', 'P017', NULL, NULL, '12 copë', NULL, 'Gemista', '2024-02-20 16:05:30', '2024-02-20 16:05:30'),
(26, 'Gemista Banana 200g', '5201004040688', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-12-27013.png', 'P018', NULL, NULL, '12 copë', NULL, 'Gemista', '2024-02-20 16:06:09', '2024-02-20 16:06:09'),
(27, 'Gemista Coconut 200g', '5201004042316', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-13-11479.png', 'P019', NULL, NULL, '12 copë', NULL, 'Gemista', '2024-02-20 16:06:46', '2024-02-20 16:06:46'),
(28, 'Gemista Choco 58G X12', '5201004044235', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-14-57632.png', 'P053', NULL, NULL, '12 copë', NULL, 'Gemista', '2024-02-20 16:08:21', '2024-02-20 16:08:21'),
(29, 'Gemista Strawberry 58G X12', '5201004044259', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-15-88707.png', 'P054', NULL, NULL, '12 copë', NULL, 'Gemista', '2024-02-20 16:09:05', '2024-02-20 16:09:05'),
(30, 'Cookielicious Cookies Chocolate & Chunks Chocolate 180g', '5201004570857', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-18-86921.png', 'P022', NULL, NULL, '12 copë', NULL, 'Cookielicious', '2024-02-20 16:10:09', '2024-02-20 16:10:09'),
(31, 'Cookielicious Cookies Chocolate Cocoa & Chunks 180g', '5201004570789', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-19-6488.png', 'P023', NULL, NULL, '12 copë', NULL, 'Cookielicious', '2024-02-20 16:10:40', '2024-02-20 16:10:40'),
(32, 'COOKIELICIOUS CHOCO 12x80g', '5201004570758', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-20-68588.png', 'P065', NULL, NULL, '12 copë', NULL, 'Cookielicious', '2024-02-20 16:11:21', '2024-02-20 16:11:21'),
(33, 'COOKIELICIOUS COC.CHOC12x80g', '5201004570888', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-21-80037.png', 'P066', NULL, NULL, '12 copë', NULL, 'Cookielicious', '2024-02-20 16:12:03', '2024-02-20 16:12:03'),
(34, 'MINI VANILLA SANDWICH 90gx10', '5201004043238', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-22-96382.png', 'P071', NULL, NULL, '10 copë', NULL, 'Mini', '2024-02-20 16:12:41', '2024-02-20 16:12:41'),
(35, 'MINI CHOC SANDWICH 90gx10', '5201004043351', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-23-21463.png', 'P072', NULL, NULL, '10 copë', NULL, 'Mini', '2024-02-20 16:13:16', '2024-02-20 16:13:16'),
(36, 'Bisco cookies chocolate pcs & cocoa 180g', '5201004021502', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-24-7877.png', 'P045', NULL, NULL, '20 copë', NULL, 'Bisco Cookies', '2024-02-20 16:14:18', '2024-02-20 16:14:18'),
(37, 'Bisco cookies chocolate pcs 180g', '5201004021755', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-25-34185.png', 'P046', NULL, NULL, '20 copë', NULL, 'Bisco Cookies', '2024-02-20 16:14:52', '2024-02-20 16:14:52'),
(38, 'Bisco cookies chocolate pcs & hazelnut 180g', '5201004021526', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-26-90930.png', 'P047', NULL, NULL, '20 copë', NULL, 'Bisco Cookies', '2024-02-20 16:15:38', '2024-02-20 16:15:38'),
(39, 'Bisco cookies chocolate & orange 180g', '5201004021519', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-27-60105.png', 'P048', NULL, NULL, '20 copë', NULL, 'Bisco Cookies', '2024-02-20 16:16:17', '2024-02-20 16:16:17'),
(40, 'MINI BISCO COOKIES WITH CH. CHIPS & COCOA 70g', '5201004030092', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-28-24329.png', 'P058', NULL, NULL, '10 copë', NULL, 'Mini', '2024-02-20 16:17:18', '2024-02-20 16:17:18'),
(41, 'MINI BISCO COOKIES WITH CHOCO CHIPS 70g', '5201004030191', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-29-45442.png', 'P059', NULL, NULL, '10 copë', NULL, 'Mini', '2024-02-20 16:17:51', '2024-02-20 16:17:51'),
(42, 'DIGESTIVE 12x250g', '5201004020666', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-30-52231.png', 'P038', NULL, NULL, '12 copë', NULL, 'Digestive', '2024-02-20 16:18:50', '2024-02-20 16:19:07'),
(43, 'DIGESTIVE DARK CHOCO 200g', '5201004020840', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-31-19944.png', 'P056', NULL, NULL, '16 copë', NULL, 'Digestive', '2024-02-20 16:19:47', '2024-02-20 16:19:47'),
(44, 'MIRANDA 125g x 24', '5201004041265', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-32-56797.png', 'P039', NULL, NULL, '24 copë', NULL, 'Miranda', '2024-02-20 16:20:50', '2024-02-20 16:20:50'),
(45, 'MIRANDA 12 x 250g', '5201004540553', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-33-57322.png', 'P068', NULL, NULL, '12 copë', NULL, 'Miranda', '2024-02-20 16:21:28', '2024-02-20 16:21:28'),
(46, 'MIRANDA CACAO.130gx12', '5201004050427', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-34-28821.png', 'P069', NULL, NULL, '12 copë', NULL, 'Miranda', '2024-02-20 16:22:28', '2024-02-20 16:22:28'),
(47, 'CHOCO MIRANDA 140g', '5201004041616', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-35-88103.png', 'P070', NULL, NULL, '12 copë', NULL, 'Miranda', '2024-02-20 16:23:00', '2024-02-20 16:23:00'),
(48, 'Goldies Wheat 255g', '5201004056078', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-36-3762.png', 'P028', NULL, NULL, '16 copë', NULL, 'Goldies', '2024-02-20 16:23:50', '2024-02-20 16:23:50'),
(49, 'Goldies Wheat 510g (3+1)', '5201004556165', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-37-74143.png', 'P029', NULL, NULL, '8 copë', NULL, 'Goldies', '2024-02-20 16:24:23', '2024-02-20 16:24:23'),
(50, 'Goldies Wholegrain 160g', '5201004557544', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-38-67018.png', 'P030', NULL, NULL, '16 copë', NULL, 'Goldies', '2024-02-20 16:24:54', '2024-02-20 16:24:54'),
(51, 'Goldies Wholegrain 320g (3+1)', '5201004057440', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-39-78464.png', 'P031', NULL, NULL, '12 copë', NULL, 'Goldies', '2024-02-20 16:25:24', '2024-02-20 16:25:24'),
(52, 'Digestive bars with no added sugar 16x(10x28g)', '5201004573094', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-40-69750.png', 'P073', NULL, NULL, '16x(10x28g)', NULL, 'Digestive', '2024-02-20 16:26:42', '2024-02-20 16:26:42'),
(53, 'Digestive bars with chocolate 16x(10x28g)', '5201004046055', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-41-16402.png', 'P074', NULL, NULL, '16x(10x28g)', NULL, 'Digestive', '2024-02-20 16:27:53', '2024-02-20 16:27:53'),
(54, 'Digestive bars with orange and chocolate 16x(10x28g)', '5201004046024', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-42-80023.png', 'P075', NULL, NULL, '16x(10x28g)', NULL, 'Digestive', '2024-02-20 16:28:33', '2024-02-20 16:28:33'),
(55, 'Digestive bars with red fruits and chocolate 16x(10x28g)', '5201004046017', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-43-94167.png', 'P076', NULL, NULL, '16x(10x28g)', NULL, 'Digestive', '2024-02-20 16:29:04', '2024-02-20 16:29:04'),
(56, 'PETIT BEURRE 20 x 225g (BG)', '5201004570963', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-44-38603.png', 'P049', NULL, NULL, '20 copë', NULL, 'Petit', '2024-02-20 16:29:49', '2024-02-20 16:29:49'),
(57, 'PETIT BEURRE WHOLEGRAIN 20 x 225g (BG)', '5201004570970', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-45-78545.png', 'P050', NULL, NULL, '20 copë', NULL, 'Petit', '2024-02-20 16:30:19', '2024-02-20 16:30:19'),
(58, 'PETIT BEURRE MILK CHOCO 200gx12', '5201004041524', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-46-61828.png', 'P037', NULL, NULL, '12 copë', NULL, 'Petit', '2024-02-20 16:30:51', '2024-02-20 16:30:51'),
(59, 'PETIT BEURRE WHOLE GRAIN DARK CHOCOLATE 200g', '5201004031846', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-47-22233.png', 'P057', NULL, NULL, '10 copë', NULL, 'Petit', '2024-02-20 16:31:37', '2024-02-20 16:31:37'),
(60, 'MINI PICK CR.Classic 70gx9', '5201004022448', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-48-90975.png', 'P061', NULL, NULL, '9 copë', NULL, 'Mini Pick', '2024-02-20 16:32:19', '2024-02-20 16:32:19'),
(61, 'MINI PICK CR. BARBECUE 70gx9', '5201004022455', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-49-85874.png', 'P062', NULL, NULL, '9 copë', NULL, 'Mini Pick', '2024-02-20 16:32:51', '2024-02-20 16:32:51'),
(62, 'MINI PICK PIZZA MEDIT.70g x 9', '5201004022608', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-50-75617.png', 'P063', NULL, NULL, '9 copë', NULL, 'Mini Pick', '2024-02-20 16:33:19', '2024-02-20 16:33:19'),
(63, 'MINI PICK SOUR CR.&ONION 70gx9', '5201004022660', 'PAPADOUPOULOS', 'P-Ballkanik-Produktet-51-96022.png', 'P064', NULL, NULL, '9 copë', NULL, 'Mini Pick', '2024-02-20 16:33:45', '2024-02-20 16:33:45'),
(64, 'Amita Carrot 250ml', '5201005080102', 'AMITA', 'P-Ballkanik-Produktet-52-51550.png', NULL, NULL, 'Tetra Pack', '27 copë', '9 muaj', '250 ml', '2024-02-20 18:02:06', '2024-02-20 18:02:06'),
(65, 'Amita Banana 250ml', '5201005067288', 'AMITA', 'P-Ballkanik-Produktet-53-85723.png', NULL, NULL, 'Tetra Pack', '27 copë', '12 muaj', '250 ml', '2024-02-20 18:03:07', '2024-02-20 18:23:31'),
(66, 'Amita Multivitaminë', '5201005080508', 'AMITA', 'P-Ballkanik-Produktet-54-35062.png', NULL, NULL, 'Tetra Pack', '9 muaj', '9 muaj', '250 ml', '2024-02-20 18:13:42', '2024-02-20 18:13:42'),
(67, 'Amita Strawberry 250ml', '5201005069251', 'AMITA', 'P-Ballkanik-Produktet-55-83935.png', NULL, NULL, 'Tetra Pack', '12 copë', '12 muaj', '250 ml', '2024-02-20 18:14:39', '2024-02-20 18:17:13'),
(68, 'Amita Orange 250ml', '5201005080201', 'AMITA', 'P-Ballkanik-Produktet-57-39714.png', NULL, NULL, 'Tetra Pack', '27 copë', '9 muaj', '250 ml', '2024-02-20 18:21:50', '2024-02-20 18:21:50'),
(69, 'Amita Triplo 250ml', '5201005067264', 'AMITA', 'P-Ballkanik-Produktet-58-3809.png', NULL, NULL, 'Tetra Pack', '27 copë', '12 muaj', '250 ml', '2024-02-20 18:22:47', '2024-02-20 18:22:47'),
(70, 'Amita Mollë Jeshile', '5201005083066', 'AMITA', 'P-Ballkanik-Produktet-59-97202.png', NULL, NULL, 'Tetra Pack', '27 copë', '12 muaj', '250 ml', '2024-02-20 18:24:17', '2024-02-20 18:24:17'),
(71, 'Amita Banane', '5201005082793', 'AMITA', 'P-Ballkanik-Produktet-60-9723.png', NULL, NULL, 'Tetra Pack', '24 copë', NULL, '330 ml', '2024-02-20 18:25:15', '2024-02-20 18:25:15'),
(72, 'Amita Qershi', '5201005082694', 'AMITA', 'P-Ballkanik-Produktet-61-77727.png', NULL, NULL, 'Tetra Pack', '24 copë', NULL, '330 ml', '2024-02-20 18:26:59', '2024-02-20 18:26:59'),
(73, 'Amita Mollë Jeshile', '5201005083059', 'AMITA', 'P-Ballkanik-Produktet-62-36447.png', NULL, NULL, 'Tetra Pack', '24 copë', NULL, '330 ml', '2024-02-20 18:27:50', '2024-02-20 18:27:50'),
(74, 'Amita Pjeshke', '5201005082700', 'AMITA', 'P-Ballkanik-Produktet-63-6386.png', NULL, NULL, 'Tetra Pack', '24 copë', NULL, '330 ml', '2024-02-20 18:28:31', '2024-02-20 18:28:41'),
(75, 'Amita Triplo', '5201005082786', 'AMITA', 'P-Ballkanik-Produktet-64-22802.png', NULL, NULL, 'Tetra Pack', '24 copë', NULL, '330 ml', '2024-02-20 18:36:51', '2024-02-20 18:36:51'),
(76, 'Amita Free Cherry 1L', '5201005081932', 'AMITA FREE', 'P-Ballkanik-Produktet-65-83225.png', NULL, NULL, 'Tetra Pack', '12 copë', NULL, '1 Litër', '2024-02-20 18:37:31', '2024-02-20 18:37:31'),
(77, 'Amita Free Orange,Carrot, Lemon 1 L', '5201005081895', 'AMITA FREE', 'P-Ballkanik-Produktet-66-48664.png', NULL, NULL, 'Tetra Pack', '12 copë', NULL, '1 Litër', '2024-02-20 18:38:02', '2024-02-20 18:38:16'),
(78, 'Amita FREE Orange, Appricot, Apple 1L', '5201005081918', 'AMITA FREE', 'P-Ballkanik-Produktet-67-84226.png', NULL, NULL, 'Tetra Pack', '12 copë', NULL, '1 Litër', '2024-02-20 18:38:56', '2024-02-20 18:39:23'),
(79, 'Amita FREE Peach 1L', '5201005081956', 'AMITA FREE', 'P-Ballkanik-Produktet-68-37424.png', NULL, NULL, 'Tetra Pack', '12 copë', NULL, '1 Litër', '2024-02-20 18:39:53', '2024-02-20 18:43:50'),
(80, 'Amita Free Cherry 0.33L', '5201005081635', 'AMITA FREE', 'P-Ballkanik-Produktet-69-32811.png', NULL, NULL, 'Tetra Pack', '24 copë', NULL, '330 ml', '2024-02-20 18:40:54', '2024-02-20 18:40:54'),
(81, 'Amita Free Orange,Carrot, Lemon 0.33 L', '5201005081680', 'AMITA FREE', 'P-Ballkanik-Produktet-71-3849.png', NULL, NULL, 'Tetra Pack', '24 copë', NULL, '330 ml', '2024-02-20 18:42:10', '2024-02-20 18:42:10'),
(82, 'Amita FREE Orange Appricot, Apple 0.33 L', '5201005081611', 'AMITA FREE', 'P-Ballkanik-Produktet-72-97413.png', NULL, NULL, 'Tetra Pack', '24 copë', NULL, '330 ml', '2024-02-20 18:42:51', '2024-02-20 18:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(2, 'Admin', 'admin', '2024-02-08 13:40:47', '2024-02-08 13:40:47'),
(3, 'manager', 'manager', '2024-02-08 13:40:47', '2024-02-08 13:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `role` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `business_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `added_by` int(11) NOT NULL DEFAULT 1,
  `status` varchar(191) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `business_id`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `added_by`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'admin@admin.com', 1, NULL, NULL, '$2y$10$F669SMkJU6xEtltx61IkI.4YUrWaPoFDkUerS2tdjwpkIdQN7T2/m', NULL, NULL, NULL, 1, '1', NULL, NULL, NULL, '2024-02-08 13:40:47', '2024-02-08 13:40:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modules_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`),
  ADD KEY `permissions_module_id_foreign` (`module_id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
