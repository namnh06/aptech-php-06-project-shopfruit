-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 04:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_fruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `date_bill` date NOT NULL,
  `status` int(11) NOT NULL,
  `total_price_bill` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id_bill`, `id_customer`, `date_bill`, `status`, `total_price_bill`, `created_at`, `updated_at`) VALUES
(4, 6, '2017-06-27', 3, 90000, '2017-06-27 03:22:55', '2017-06-27 22:27:39'),
(5, 7, '2017-06-30', 1, 15000, '2017-06-29 19:16:21', '2017-06-29 19:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(3, 4, 10, 1, 7500, '2017-06-27 03:22:55', '2017-06-27 03:22:55'),
(4, 4, 13, 1, 44000, '2017-06-27 03:22:55', '2017-06-27 03:22:55'),
(5, 4, 8, 1, 38500, '2017-06-27 03:22:55', '2017-06-27 03:22:55'),
(6, 5, 10, 2, 7500, '2017-06-29 19:16:21', '2017-06-29 19:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `name_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`, `created_at`, `updated_at`) VALUES
(1, 'Fruits', '2017-06-05 00:42:14', '2017-06-08 20:10:53'),
(3, 'Vegetables', '2017-06-05 00:48:41', '2017-06-05 00:48:41'),
(13, 'Beans', '2017-06-08 20:09:24', '2017-06-08 20:09:24'),
(14, 'Cereals', '2017-06-08 20:09:35', '2017-06-08 20:09:35'),
(15, 'Nuts', '2017-06-08 20:17:58', '2017-06-08 20:17:58'),
(16, 'Spices', '2017-06-08 20:18:12', '2017-06-08 20:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `category_news`
--

CREATE TABLE `category_news` (
  `id_category_news` int(10) UNSIGNED NOT NULL,
  `name_category_news` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_news`
--

INSERT INTO `category_news` (`id_category_news`, `name_category_news`, `created_at`, `updated_at`) VALUES
(1, 'Health', '2017-06-11 20:44:40', '2017-06-11 20:44:40'),
(3, 'Food', '2017-06-11 20:46:18', '2017-06-11 20:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `telephone`, `address`, `created_at`, `updated_at`) VALUES
(6, '3 sa n pham', 'ten la', 'namnh.web4s@gmail.com', '01644534056', 'viet nam', '2017-06-27 03:22:55', '2017-06-27 03:22:55'),
(7, 'hi j', 'fj', 'hij@gmail.com', '94839', 'jfjf', '2017-06-29 19:16:21', '2017-06-29 19:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_02_093130_create_categories_table', 1),
(4, '2017_06_02_101050_create_news_table', 1),
(5, '2017_06_05_141521_create_products_table', 1),
(6, '2017_06_11_153316_create_category_news_table', 2),
(7, '2017_06_12_024118_create_id_category_news_in_news_table', 3),
(8, '2017_06_12_024848_foreign_key_news_and_category_news', 3),
(9, '2017_06_13_020923_insert_avatar_news_and_avatar_product', 4),
(10, '2017_06_15_022127_create_bills_table', 5),
(11, '2017_06_15_024630_create_carts_table', 6),
(12, '2017_06_21_012314_create_bill_detail_table', 7),
(14, '2017_06_22_025132_create_customers_table', 8),
(15, '2017_06_22_031158_drop_column_id_user_in_bills', 9),
(16, '2017_06_22_031450_add_column_id_customer_in_bills', 10);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(10) UNSIGNED NOT NULL,
  `id_category_in_news` int(11) UNSIGNED NOT NULL,
  `id_user_in_news` int(10) UNSIGNED NOT NULL,
  `title_vi_news` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en_news` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description_news` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_news` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_news` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_news` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `id_category_in_news`, `id_user_in_news`, `title_vi_news`, `title_en_news`, `short_description_news`, `content_news`, `image_news`, `avatar_news`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'How Coconut Oil May Rescue The Brain From Alzheimer’s Disease', 'how-coconut-oil-may-rescue-the-brain-from-alzheimers-disease', 'All the more reason to celebrate a promising new study soon to be published in the Journal of Alzheimer’s Disease titled, “Coconut Oil Attenuates the Effects of Amyloid-β on Cortical Neurons In Vitro.” The study lends fresh experimental support to an accumulating body of anecdotal reports that coconut oil may alleviate and/or regress cognitive deficits associated with aging and neurodegenerative diseases such as Alzheimer’s disease and Parkinson’s.', '<p style=\"text-align:justify\">All the more reason to celebrate a promising new study soon to be published in the Journal of Alzheimer&rsquo;s Disease titled, &ldquo;Coconut Oil Attenuates the Effects of Amyloid-&beta; on Cortical Neurons In Vitro.&rdquo; The study lends fresh experimental support to an accumulating body of anecdotal reports that coconut oil may alleviate and/or regress cognitive deficits associated with aging and neurodegenerative diseases such as Alzheimer&rsquo;s disease and Parkinson&rsquo;s.</p>\r\n\r\n<div style=\"margin: 0px; padding: 0px; border: 0px; box-sizing: border-box; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; vertical-align: top; font-family: Arial, sans-serif; font-size: 14px; text-align: center;\"><img alt=\"\" src=\"/shopfruit/shop/public/assets/global/plugins/kcfinder/upload/images/news7_300x300.jpg\" style=\"height:300px; width:300px\" /></div>\r\n\r\n<p style=\"text-align:justify\">Medical researchers from the Memorial University of Newfoundland, St. John&rsquo;s, NL, Canada, undertook a pilot study to investigate the effects of coconut oil supplementation directly on cortical neurons treated with amyloid-&beta; (A&beta;) peptide in vitro. A&beta; peptide is the main component of certain deposits found in the brains of patients with Alzheimer&rsquo;s disease believed to contribute to the disease.</p>\r\n\r\n<p style=\"text-align:justify\">The researchers noted that a recent clinical trial reported significant improvements in Alzheimer&rsquo;s disease patients after 45 and 90 days of treatment with medium chain triglycerides from coconut oil. They pointed out that this trial led to the marketing of the FDA-approved &lsquo;medical food&rsquo; caprylidene (trade name Axona), but that the public has shown greater interest in coconut oil itself as a potential therapy, owing to its far greater affordability and availability.</p>\r\n\r\n<p style=\"text-align:justify\">The researchers sought to test the hypothesis that coconut oil is beneficial for neurodegenerative conditions using a cell model. Live rat neurons were exposed to various combinations of A&beta; peptide and coconut oil, with the result that A&beta; peptide reduced survival of neurons and coconut protected against this A&beta;-induced reduction in survival time. The researchers noted that coconut treated A&beta; cultured neurons appeared &ldquo;healthier,&rdquo; and that coconut oil &ldquo;rescued&rdquo; A&beta;-treated neurons from mitochondrial damage caused by their toxicity. The researchers observed coconut oil preventing A&beta;-induced changes in mitochondrial size and circularity. These findings have great significance, as mitochondria function is often compromised in the brains of Alzheimer&rsquo;s disease patients.</p>\r\n\r\n<p style=\"text-align:justify\">According to the researchers, &ldquo;The rationale for using coconut oil as a potential AD [Alzheimer&rsquo;s Disease] therapy is related to the possibility that it could be metabolized to ketone bodies that would provide an alternative energy source for neurons, and thus compensate for mitochondrial dysfunction.&rdquo; The researchers proposed that ketone bodies formed as a byproduct of coconut oil metabolism may offset A&beta;-induced impairment of mitochondrial function and thus energy metabolism. Considering that the medium chain triglyceride found in coconut known as caprylic acid does cross the blood-brain barrier, and has recently been found to have anti-convulsant, in addition to, ketogenic effects, coconut oil likely does have a neuroprotective effect.</p>\r\n\r\n<p style=\"text-align:justify\">The researchers concluded, &ldquo;The results of this pilot study provide a basis for further investigation of the effects of coconut oil, or its constituents, on neuronal survival focusing on mechanisms that may be involved.&rdquo;</p>\r\n\r\n<p style=\"text-align:justify\">Clearly, one of the ways that coconut oil can &lsquo;rescue&rsquo; the brains of Alzheimer&rsquo;s patients is by addressing the metabolic derangement in the brain associated with the condition, or what is known as &ldquo;type 3 diabetes.&rdquo; As the brain ages, it becomes increasingly resistant to insulin, and therefore incapable of using glucose efficiently to meet its significant energy needs &mdash; hence the metaphor &ldquo;type 3 diabetes.&rdquo; Thankfully, nature has devised an alternative fuel source for the brain that is independent of glucose utilization and the insulin signaling system, namely, the use of ketone bodies. Coconut oil provides the substrate for the immediate production of these ketone bodies, enabling significant quantities to be produced within a matter of only minutes following ingestion. This metabolic restoration of function may explain why remarkable recoveries in cognitive function and memory have been observed, anecdotally.</p>', 'cTTM_.jpg', '', '2017-06-11 20:55:52', '2017-06-12 08:42:06'),
(2, 1, 4, 'Vegan? Here Are Your Iron Sources', 'vegan-here-are-your-iron-sources', 'There is a lot to be said for following a vegan or vegetarian diet; an excess of iron generally isn’t one of them, particularly vegan iron sources.', '<p style=\"text-align:justify\">There is a lot to be said for following a vegan or vegetarian diet; an excess of iron generally isn&rsquo;t one of them, particularly vegan iron sources.</p>\r\n\r\n<div style=\"margin: 0px; padding: 0px; border: 0px; box-sizing: border-box; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; vertical-align: top; font-family: Arial, sans-serif; font-size: 14px; text-align: center;\"><img src=\"file:///G:/GG%20DRIVE/WORK/EcoShop/images/news/shutterstock_275793086-676x450.jpg\" style=\"background:transparent; border:0px; box-sizing:border-box; font-weight:inherit; margin:0px; max-width:100%; outline:0px; padding:0px; vertical-align:middle; width:522px\" /></div>\r\n\r\n<p style=\"text-align:justify\">Food has two types of iron: heme iron and non-heme iron. Heme iron is derived from hemoglobin and is found in animal-based foods, notably meat and mollusks. Non-heme iron is found in plant-based foods and isn&rsquo;t as easily absorbed as heme iron. In fact, heme iron is absorbed two to three times more efficiently than non-heme iron &ndash; so if you are avoiding hemoglobin-based food (as in, animal products) it&rsquo;s important to make it up with iron-rich plants.</p>\r\n\r\n<p style=\"text-align:justify\">How much iron does a body need? The estimated Dietary Reference Intakes (DRI) for iron in males aged 19 and older is 8 mg daily; females aged 19 &ndash; 50 should get 18 mg daily, and 8 mg daily for females 51 and older.</p>', 'K8Uu_.jpg', '', '2017-06-11 20:56:36', '2017-06-12 06:07:16'),
(3, 1, 4, 'gdfgdsf', 'gdfgdsf', 'gdsfgsdfg', '<p><img alt=\"\" src=\"/shopfruit/shop/public/assets/global/plugins/kcfinder/upload/images/news2.jpg\" style=\"height:600px; width:900px\" /></p>', 'U3dA_.JPG', '', '2017-06-12 08:35:37', '2017-06-12 08:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `id_category_in_product` int(10) UNSIGNED NOT NULL,
  `name_vi_product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en_product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_product` double NOT NULL,
  `percent_discount_product` int(11) DEFAULT NULL,
  `code_product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `short_description_product` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description_product` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `id_category_in_product`, `name_vi_product`, `name_en_product`, `price_product`, `percent_discount_product`, `code_product`, `status_product`, `quantity_product`, `short_description_product`, `long_description_product`, `image_product`, `avatar_product`, `created_at`, `updated_at`) VALUES
(8, 3, 'Asparagus', 'asparagus', 55000, 30, '#AS109', '1', 10, 'It\'s easy to use this healthy aphrodisiacal veggie. Snap and break off the woody bottom part and it\'s ready to be blanched, steamed, roasted, grilled or stir-fried without peeling.', '<p><span style=\"font-family:arial,sans-serif; font-size:14px\">The fleshy green spears of asparagus are both succulent and tender and have been considered a delicacy since ancient times. This highly prized vegetable arrives with the coming of spring, when its shoots break through the soil and reach their 6-8 inch harvest length. In California the first crops are picked as early as February, however, their season generally is considered to run from April through May. The growing season in the Midwest and East extends through July.</span></p>', 'AyTi_asparagus.jpg', 'ncZG_asparagus.jpg', '2017-06-08 19:27:43', '2017-06-14 04:28:16'),
(9, 3, 'Barley', 'barley', 30000, 20, '#BL237', '2', 10, 'Barley (Hordeum vulgare L.), a member of the grass family, is a major cereal grain grown in temperate climates globally.', '<p><span style=\"font-family:arial,sans-serif; font-size:14px\">Barley (Hordeum vulgare L.), a member of the grass family, is a major cereal grain grown in temperate climates globally. It was one of the first cultivated grains, particularly in Eurasia as early as 13,000 years ago. Barley has also been used as animal fodder, as a source of fermentable material for beer and certain distilled beverages, and as a component of various health foods.</span></p>', 'Xn7K_barley.jpg', 'bQ9h_cxampptmpphp7573tmp.jpg', '2017-06-08 20:02:24', '2017-06-13 08:30:15'),
(10, 3, 'Papaya', 'papaya', 15000, 50, '#PP987', '1', 11, 'This article is about Carica papaya, the widely cultivated papaya (also called papaw or pawpaw), a tropical fruit tree.', '<p><span style=\"font-family:arial,sans-serif; font-size:14px\">This article is about Carica papaya, the widely cultivated papaya (also called papaw or pawpaw), a tropical fruit tree. For the mountain papaya (Vasconcellea pubescens) of South America, see Mountain papaya. For the Eastern North American tree (and fruit) called &quot;pawpaw&quot;, see Asimina triloba. For other uses, see Papaya (disambiguation). Not to be confused with Chaenomeles speciosa (flowering quince) or Pseudocydonia chinensis (Chinese quince), which like Carica papaya are sometimes called mugua.</span></p>', 'ciXV_papaya.jpg', 'Obq7_cxampptmpphpc133tmp.jpg', '2017-06-08 20:21:45', '2017-06-13 08:30:35'),
(11, 3, 'Walnuts', 'walnuts', 300000, 15, '#WN982', '1', 10, 'A walnut is the nut of any tree of the genus Juglans (Family Juglandaceae), particularly the Persian or English walnut, Juglans regia. Technically a walnut is the seed of a drupe or drupaceous nut, and thus not a true botanical nut.', '<p><span style=\"font-family:arial,sans-serif; font-size:14px\">A walnut is the nut of any tree of the genus Juglans (Family Juglandaceae), particularly the Persian or English walnut, Juglans regia. Technically a walnut is the seed of a drupe or drupaceous nut, and thus not a true botanical nut. It is used for food after being processed while green for pickled walnuts or after full ripening for its nutmeat. Nutmeat of the eastern black walnut from the Juglans nigra is less commercially available, as are butternut nutmeats from Juglans cinerea. The walnut is nutrient-dense with protein and essential fatty acids.</span></p>', 'NWLV_walnuts.jpg', 'QrDD_cxampptmpphp340tmp.jpg', '2017-06-08 20:23:42', '2017-06-13 08:30:52'),
(12, 3, 'Black Beans', 'black-beans', 45000, 10, '#BB0927', '1', 10, 'Recent research has shown that black beans provide special support for digestive tract health, and particularly our colon. The indigestible fraction (IF) in black beans has recently been shown to be larger than the IF in either lentils or chickpeas.', '<p><span style=\"font-family:arial,sans-serif; font-size:14px\">Recent research has shown that black beans provide special support for digestive tract health, and particularly our colon. The indigestible fraction (IF) in black beans has recently been shown to be larger than the IF in either lentils or chickpeas. It has been shown to be the perfect mix of substances for allowing bacteria in the colon to produce butyric acid. Cells lining the inside of the colon can use this butyric acid to fuel their many activities and keep the lower digestive tract functioning properly.</span></p>', 'eERP_black-beans.jpg', '5Tqq_cxampptmpphp5402tmp.jpg', '2017-06-09 00:01:35', '2017-06-13 08:31:12'),
(13, 16, 'Chilly', 'chilly', 110000, 60, '#CL982', '1', 10, 'The chili pepper (also chile pepper or chilli pepper, from Nahuatl chīlli [ˈt͡ʃiːli]) is the fruit of plants from the genus Capsicum, members of the nightshade family, Solanaceae.[1] In Australia, Britain, India,[2] Ireland, New Zealand, Pakistan, South Africa and in other Asian countries, it is usually known simply as chilli.', '<p><span style=\"font-family:arial,sans-serif; font-size:14px\">The chili pepper (also chile pepper or chilli pepper, from Nahuatl chīlli [ˈt͡ʃiːli]) is the fruit of plants from the genus Capsicum, members of the nightshade family, Solanaceae.[1] In Australia, Britain, India,[2] Ireland, New Zealand, Pakistan, South Africa and in other Asian countries, it is usually known simply as chilli.</span></p>', '0Tgx_chilly.png', 'XL2t_cxampptmpphp917atmp.png', '2017-06-09 00:03:43', '2017-06-13 08:31:28'),
(14, 1, 'Avocado - 1kg', 'avocado-1kg', 68755, 15, '#fav43', '2', 10, 'This is Avacado', '<p>This is Avacado</p>\r\n\r\n<p>This is Avacado</p>\r\n\r\n<p>This is Avacado</p>\r\n\r\n<p>This is Avacado</p>', 'CCXz_avocado-1kg.jpg', 'UPRJ_cxampptmpphpc221tmp.jpg', '2017-06-12 07:40:06', '2017-06-13 08:31:41'),
(15, 3, 'Cabbage - 1kg', 'cabbage-1kg', 53454, 10, '#fasd434', '2', 10, 'Cabbage name is Cải Bắp', '<p>Cabbage name is Cải Bắp, VN ăn rất ngon</p>', 'jrFa_cabbage-1kg.jpg', '1q3F_cxampptmpphpfcabtmp.jpg', '2017-06-12 07:43:29', '2017-06-13 08:31:56'),
(16, 14, 'Lentils - 1kg', 'lentils-1kg', 50000, 5, '#fas43', '1', 8, 'Leice prodhha jungle kiam lio', '<p>Leice prodhha jungle kiam lio is</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/shopfruit/shop/public/assets/global/plugins/kcfinder/upload/images/lentils_300x300.jpg\" style=\"height:300px; width:300px\" /></p>', 'VQxP_lentils-1kg.jpg', 'IcGe_cxampptmpphpeb4btmp.jpg', '2017-06-13 08:25:17', '2017-06-13 08:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `name_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_user` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `email_user`, `password`, `permission_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Nguyen Hai Nam', 'namnh@nhanhoa.com.vn', '$2y$10$N8eY.rWxK7v1MUAXB4d15uZCgdTmHv61UJZiSjpWXJHBC/Zrpn39O', 1, 'y61ZxDEEYzytidVf4LRys9k8NARIxSCkzgQzO85RN8BfE3NnxfCzwlPtHZxS', '2017-06-03 01:35:34', '2017-06-08 07:49:30'),
(5, 'name 1', 'name1@gmail.com', '$2y$10$7wZ4V/xbfuFRP4Vs7Jt4nORPoeDUBtR5qnC4tGxuFHdveCu74iD3O', 0, 'pEQoJnLqz64PX1HF7SfMSfbofu4HGzLuyRAL6lEi5iMG3L87SBwPmSJdfYuk', '2017-06-04 01:55:20', '2017-06-08 07:30:11'),
(6, 'name 2', 'name2@gmail.com', '$2y$10$9Ok1j9bowGmmwD1L/c2qpOz267p0Y7x/czrnB5wgRW4S7.TN74nhC', 0, NULL, '2017-06-04 01:56:46', '2017-06-04 01:56:46'),
(7, 'demo', 'demo@gmail.com', '$2y$10$xBwcyHv9SjQlS7iSkSgC8eK00jCT9a.7sNit868E6CN9lRjEfzttS', 0, NULL, '2017-06-04 01:57:21', '2017-06-04 01:57:21'),
(8, 'demo2', 'demo2@gmail.com', '$2y$10$zgnUtouXpKdIYTTweLXdEOjRMrvSeD.5SxJ1oglJWWecAAahetjXG', 1, NULL, '2017-06-04 01:57:41', '2017-06-04 01:57:41'),
(9, 'demo3', 'demo3@gmail.com', '$2y$10$oH1JO5/RoKolNJp5pWEvUebgHR5y6bj8zp.6JpfFiUzaMcc3oL.k6', 0, NULL, '2017-06-04 01:58:00', '2017-06-04 01:58:00'),
(10, 'rebecca', 'rebecca@gmail.com', '$2y$10$t2IWGeM72DKL7MUxExKr6OPOy33TEsSK1ZUfHg7TkCD16YUvx43EW', 1, NULL, '2017-06-04 01:58:13', '2017-06-04 01:58:13'),
(12, 'let do it', 'let@gmail.com', '$2y$10$HQ.KbIcJXS/T9vVjcq3Nxucs6ShKh.w5/y6xo80Kmzp65syKO7rf6', 1, NULL, '2017-06-04 01:58:43', '2017-06-04 03:08:19'),
(13, 'check', 'check@gmail.com', '$2y$10$g.ugK63fSMN31Aq7kUGEzeD9bGJvc10CrHNUXye7D1LYyezWWQ5/i', 1, NULL, '2017-06-04 01:59:08', '2017-06-04 01:59:08'),
(14, 'another one', 'another@gmail.com', '$2y$10$1iKXYHlV4mP/bs.pGX0xEuHuY6o9zdiNsvlF9cAkVbFvEatJxEk4K', 0, NULL, '2017-06-04 01:59:57', '2017-06-04 01:59:57'),
(16, 'Nam Nguyen', 'namnh@nhanhoa.com', '$2y$10$4.pKMwAh/5jTNXryGxNl8OwqhV340lZ5FwBxLfpg0M4VZfU6jONey', 2, 'UOPXdyn4jpFYmGHsXZ1XKE6B7XJfP3Xj03wc1crJ3cpylQgDj9HchFfpfVq7', '2017-06-14 08:27:21', '2017-06-14 08:27:21'),
(17, 'Sin Nguyen', 'sinnguyen@gmail.com', '$2y$10$UX7dM9ZbMN3ab6titOI41e7V53Dvbkz0A6Snz3.J3rKzn9kkucwbK', 1, NULL, '2017-06-29 19:19:16', '2017-06-29 19:19:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `bills_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_id_bill_foreign` (`id_bill`),
  ADD KEY `bill_detail_id_product_foreign` (`id_product`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id_category_news`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `news_id_user_in_news_foreign` (`id_user_in_news`),
  ADD KEY `news_id_category_in_news_foreign` (`id_category_in_news`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `products_id_category_in_product_foreign` (`id_category_in_product`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_user_unique` (`email_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id_bill` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id_category_news` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`);

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_id_bill_foreign` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id_bill`),
  ADD CONSTRAINT `bill_detail_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_id_category_in_news_foreign` FOREIGN KEY (`id_category_in_news`) REFERENCES `category_news` (`id_category_news`),
  ADD CONSTRAINT `news_id_user_in_news_foreign` FOREIGN KEY (`id_user_in_news`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_category_in_product_foreign` FOREIGN KEY (`id_category_in_product`) REFERENCES `categories` (`id_category`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
