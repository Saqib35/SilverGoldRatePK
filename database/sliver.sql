-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 07:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sliver`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gold_rates_by_day`
--

CREATE TABLE `gold_rates_by_day` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description_short` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `alt_tag` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `First_rate` varchar(255) DEFAULT NULL,
  `Second_rate` varchar(255) DEFAULT NULL,
  `schema_day` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gold_rates_by_month`
--

CREATE TABLE `gold_rates_by_month` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description_short` text NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'images/today-gold-rate-in-pakistan-monlthy-.webp',
  `alt_tag` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `schemaa_month` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gold_rates_by_week`
--

CREATE TABLE `gold_rates_by_week` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description_short` text NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'images/gold-rate-weekly-update.webp',
  `alt_tag` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `schema_week` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `content` text NOT NULL,
  `home_schema` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `meta_title`, `meta_description`, `img`, `content`, `home_schema`, `created_at`, `updated_at`) VALUES
(1, 'silver Rate in Pakistan - 52 Tola Chandi Price in Pakistan', 'As of today, 11 December 2023, the silver rate in Pakistan is Rs. 2,600 per tola. These rates remain consistent across major cities like Karachi, Lahore,', 'images/0e3de2974b202fdd1d06caa239cd768c72326509.webp', '<div class=\"updatSetting\">\r\n<hr />By Staff ⏰ Updated <strong>December 8, 2023</strong>\r\n\r\n<hr /></div>\r\n\r\n<div class=\"pt-3 updatSetting\">\r\n<h2><span style=\"font-size:20px\"><strong>The Silver rate in Pakistan today, 7 December 2023, is as follows:</strong></span></h2>\r\n\r\n<ul>\r\n	<li>Rs 227 per 1 gram</li>\r\n	<li>Rs 2,272 per 10 grams</li>\r\n	<li>Rs 2,650 per tola</li>\r\n	<li>Rs 7,067 per 1 ounce</li>\r\n	<li>Rs 227,195 per 1 kilogram</li>\r\n</ul>\r\n\r\n<p>Please note that the silver rate remains the same all over Pakistan but you may notice a slight difference of a few hundred rupees across cities.</p>\r\n\r\n<p>You can also check <strong>today&rsquo;s gold rate here.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://127.0.0.1:8000/images/today-silver-rate-in-pakistan_1702637754.webp\" style=\"height:100%; width:100%\" /></strong></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:20px\"><strong>Today Chandi Rate in Pakistan 7 December 2023</strong></span></h2>\r\n\r\n<div class=\"table-responsive\">\r\n<table class=\"table table-bordered table-hover\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th>Silver Type</th>\r\n			<th>Rate per Gram</th>\r\n			<th>Rate per 10 Grams</th>\r\n			<th>Rate per Tola</th>\r\n			<th>Rate per Troy Ounce</th>\r\n			<th>Rate per Kilogram</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">24K</td>\r\n			<td style=\"text-align:center\">227</td>\r\n			<td style=\"text-align:center\">2,272</td>\r\n			<td style=\"text-align:center\">2,650</td>\r\n			<td style=\"text-align:center\">7,067</td>\r\n			<td style=\"text-align:center\">227,195</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">22K</td>\r\n			<td style=\"text-align:center\">208</td>\r\n			<td style=\"text-align:center\">2,077</td>\r\n			<td style=\"text-align:center\">2,423</td>\r\n			<td style=\"text-align:center\">6,461</td>\r\n			<td style=\"text-align:center\">207,716</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">21K</td>\r\n			<td style=\"text-align:center\">198</td>\r\n			<td style=\"text-align:center\">1,980</td>\r\n			<td style=\"text-align:center\">2,309</td>\r\n			<td style=\"text-align:center\">6,158</td>\r\n			<td style=\"text-align:center\">197,977</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">18K</td>\r\n			<td style=\"text-align:center\">169</td>\r\n			<td style=\"text-align:center\">1,688</td>\r\n			<td style=\"text-align:center\">1,968</td>\r\n			<td style=\"text-align:center\">5,249</td>\r\n			<td style=\"text-align:center\">168,760</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n&nbsp;\r\n\r\n<p>In the above table, you can see silver rates in 24, 22, 21, and 18K above rates are just for an idea since gold and silver rates fluctuate throughout the day you may see a few hundred rupees difference across the city and before making any purchase visit your city&rsquo;s bullion market for more up to date silver rates.</p>\r\n\r\n<h2><span style=\"font-size:20px\"><strong>Silver Rate in Different Cities of Pakistan</strong></span></h2>\r\n\r\n<table class=\"table table-bordered table-hover\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th>City</th>\r\n			<th>Silver Rate per Tola</th>\r\n			<th>Silver Rate per 10 Gram</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">Karachi</td>\r\n			<td style=\"text-align:center\">2,650</td>\r\n			<td style=\"text-align:center\">2,272</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Hyderabad</td>\r\n			<td style=\"text-align:center\">2,650</td>\r\n			<td style=\"text-align:center\">2,272</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Lahore</td>\r\n			<td style=\"text-align:center\">2,650</td>\r\n			<td style=\"text-align:center\">2,272</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Multan</td>\r\n			<td style=\"text-align:center\">2,650</td>\r\n			<td style=\"text-align:center\">2,272</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Islamabad</td>\r\n			<td style=\"text-align:center\">2,650</td>\r\n			<td style=\"text-align:center\">2,272</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Faisalabad</td>\r\n			<td style=\"text-align:center\">2,650</td>\r\n			<td style=\"text-align:center\">2,272</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Rawalpindi</td>\r\n			<td style=\"text-align:center\">2,650</td>\r\n			<td style=\"text-align:center\">2,272</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Quetta</td>\r\n			<td style=\"text-align:center\">2,650</td>\r\n			<td style=\"text-align:center\">2,272</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2><span style=\"font-size:20px\"><strong>52.5 Tola Chandi Price in Different Cities of Pakistan</strong></span></h2>\r\n\r\n<table class=\"table table-bordered table-hover\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th>City</th>\r\n			<th>52.5 Tola Chandi City Prices</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">Karachi</td>\r\n			<td style=\"text-align:center\">139,125</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Hyderabad</td>\r\n			<td style=\"text-align:center\">139,125</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Lahore</td>\r\n			<td style=\"text-align:center\">139,125</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Multan</td>\r\n			<td style=\"text-align:center\">139,125</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Islamabad</td>\r\n			<td style=\"text-align:center\">139,125</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Faisalabad</td>\r\n			<td style=\"text-align:center\">139,125</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Rawalpindi</td>\r\n			<td style=\"text-align:center\">139,125</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Quetta</td>\r\n			<td style=\"text-align:center\">139,125</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>We want to clarify that the silver rate remains the same throughout Pakistan, although you may notice a little bit of a difference of 50 rupees to 200 rupees across cities.</p>\r\n\r\n<h2><span style=\"font-size:20px\"><strong>Factors Affecting Silver Prices</strong></span></h2>\r\n\r\n<p>The major factors that cause the fluctuation of silver rates in Pakistan are economic stability, political conditions, and changes in the value of the US dollar, as silver is traded internationally in dollars.</p>\r\n\r\n<p>1. <span style=\"font-size:14px\"><strong>Economic stability:</strong></span> Pakistan&rsquo;s economic stability is one of the major factors which affect the silver rate.</p>\r\n\r\n<p>2.<span style=\"font-size:14px\"> <strong>Political Conditions:</strong></span> As you know Pakistan&rsquo;s Political condition is worse than ever in 2023. It affects the silver rates directly uncertain political matters are one of the key factors that affect silver rates.</p>\r\n\r\n<p>3. <span style=\"font-size:14px\"><strong>USD Dollar:</strong></span> Changes in the value of the US dollar also impact silver prices in Pakistan, as silver is traded internationally in dollars.</p>\r\n\r\n<h2><span style=\"font-size:20px\"><strong>Current Silver Rates in Pakistan</strong></span></h2>\r\n\r\n<p>As of Wednesday, 7 December 2023, the silver rate in Pakistan stands at Rs. 2,650 per tola. These rates can vary from city to city. For instance, in Karachi, Hyderabad, Lahore, Multan, Islamabad, Faisalabad, Rawalpindi, and Quetta.</p>\r\n\r\n<h3><span style=\"font-size:16px\"><strong>1. What is the current silver rate in Pakistan?</strong></span></h3>\r\n\r\n<p>As of today, 7 December 2023, the silver rate in Pakistan is Rs. 2,650 per tola.</p>\r\n\r\n<h3><span style=\"font-size:16px\"><strong>2. Why does the silver Rate fluctuate?</strong></span></h3>\r\n\r\n<p>The major factors that cause the fluctuation of silver rates in Pakistan are economic stability, political conditions, and changes in the value of the US dollar, as silver is traded internationally in dollars.</p>\r\n\r\n<h3><span style=\"font-size:16px\"><strong>3. Is the silver rate the same in all cities of Pakistan?</strong></span></h3>\r\n\r\n<p>Yes, the silver rate remains the same throughout Pakistan but you may find a difference of 50 to 200 rupees in different cities.</p>\r\n\r\n<h3><span style=\"font-size:16px\"><strong>4. How can I keep track of the latest silver rates in Pakistan?</strong></span></h3>\r\n\r\n<p>To stay updated with the latest silver rates in Pakistan, you can regularly check reliable sources like ******</p>\r\n\r\n<h3><span style=\"font-size:16px\"><strong>5. Can silver prices be affected by global factors?</strong></span></h3>\r\n\r\n<p>Yes, silver prices can be influenced by global factors.</p>\r\n\r\n<h3><span style=\"font-size:16px\"><strong>6. How often do silver rates change?</strong></span></h3>\r\n\r\n<p>Silver rates can fluctuate throughout the day, based on market conditions and global factors.</p>\r\n</div>', '<script type=\"application/ld+json\" class=\"rank-math-schema\">\r\n    {\r\n        \"@context\": \"https://schema.org\",\r\n        \"@graph\": [\r\n            {\r\n                \"@type\": [\"WebPage\", \"FAQPage\"],\r\n                \"@id\": \"https://silvergoldrate.pk/#webpage\",\r\n                \"url\": \"https://silvergoldrate.pk/\",\r\n                \"name\": \"Silver Rate in Pakistan - 52 Tola Chandi Price in Pakistan\",\r\n                \"datePublished\": \"2023-12-15T09:24:48+05:00\",\r\n                \"dateModified\": \"2023-12-15T09:24:51+05:00\",\r\n                \"about\": { \"@id\": \"https://silvergoldrate.pk/#person\" },\r\n                \"isPartOf\": { \"@id\": \"https://silvergoldrate.pk/#website\" },\r\n                \"primaryImageOfPage\": { \"@id\": \"https://silvergoldrate.pk/wp-content/uploads/2023/08/today-silver-rate-in-pakistan.webp\" },\r\n                \"inLanguage\": \"en-US\",\r\n                \"mainEntity\": [\r\n                    {\r\n                        \"@type\": \"Question\",\r\n                        \"url\": \"https://silvergoldrate.pk/#faq-question-1690965100628\",\r\n                        \"name\": \"1. What is the current silver rate in Pakistan?\",\r\n                        \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"As of today, 15 December 2023, the silver rate in Pakistan is Rs. 2,650 per tola. \" }\r\n                    },\r\n                    {\r\n                        \"@type\": \"Question\",\r\n                        \"url\": \"https://silvergoldrate.pk/#faq-question-1690965151880\",\r\n                        \"name\": \"2. Why does the silver Rate fluctuate?\",\r\n                        \"acceptedAnswer\": {\r\n                            \"@type\": \"Answer\",\r\n                            \"text\": \"The major factors that cause the fluctuation of silver rates in Pakistan are economic stability, political conditions, and changes in the value of the US dollar, as silver is traded internationally in dollars.\"\r\n                        }\r\n                    },\r\n                    {\r\n                        \"@type\": \"Question\",\r\n                        \"url\": \"https://silvergoldrate.pk/#faq-question-1690965187663\",\r\n                        \"name\": \"Is the silver rate the same in all cities of Pakistan?\",\r\n                        \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"Yes, the silver rate remains the same throughout Pakistan but you may find a difference of 50 to 200 rupees in different cities.\" }\r\n                    },\r\n                    {\r\n                        \"@type\": \"Question\",\r\n                        \"url\": \"https://silvergoldrate.pk/#faq-question-1690965272743\",\r\n                        \"name\": \"How can I keep track of the latest silver rates in Pakistan?\",\r\n                        \"acceptedAnswer\": {\r\n                            \"@type\": \"Answer\",\r\n                            \"text\": \"To stay updated with the latest silver rates in Pakistan, you can regularly check reliable sources like <a href=\\\"https://silvergoldrate.pk/\\\" data-type=\\\"page\\\" data-id=\\\"269\\\">silvergoldrate.pk</a>.\"\r\n                        }\r\n                    },\r\n                    {\r\n                        \"@type\": \"Question\",\r\n                        \"url\": \"https://silvergoldrate.pk/#faq-question-1690965319486\",\r\n                        \"name\": \"Can silver prices be affected by global factors?\",\r\n                        \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"Yes, silver prices can be influenced by global factors.\" }\r\n                    },\r\n                    {\r\n                        \"@type\": \"Question\",\r\n                        \"url\": \"https://silvergoldrate.pk/#faq-question-1690965419438\",\r\n                        \"name\": \"How often do silver rates change?\",\r\n                        \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"Silver rates can fluctuate throughout the day, based on market conditions and global factors.\" }\r\n                    }\r\n                ]\r\n            }\r\n         \r\n        ]\r\n    }\r\n</script>', '2023-12-09 07:33:25', '2023-12-15 06:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages_gold_rate`
--

CREATE TABLE `home_pages_gold_rate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` text NOT NULL,
  `meta_description` text NOT NULL,
  `img` text DEFAULT 'images/today-gold-rate-in-pakistan.webp',
  `content` text NOT NULL,
  `schmea_today` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages_gold_rate`
--

INSERT INTO `home_pages_gold_rate` (`id`, `meta_title`, `meta_description`, `img`, `content`, `schmea_today`, `created_at`, `updated_at`) VALUES
(1, 'Gold Rate in Pakistan Today – 11 December 2023', '1 tola gold rate in Pakistan today, 11 December 2023, stands at Rs. 214,700 per tola for 24-karat gold, and Rs. 184,071 for 10 grams.', 'images/1b8a3ef6ce246b85fb32bfe4186e8fb0b8abe6a6.jpg', '<div class=\"updatSetting\">\r\n<p>1 tola gold rate in Pakistan today, 9 December 2023, stands at Rs. 216,400 per tola for 24-karat gold, and Rs. 185,442 for 10 grams, as per the latest updates from the Karachi, Multan, and Lahore bullion markets.</p>\r\n\r\n<p>These fluctuations are closely tied to changes in the value of the US Dollar, highlighting the link between currency values and gold prices.<br />\r\n<br />\r\nThe gold price is rising globally at $2004 per ounce. It is considerable that gold prices in Pakistan can have huge ups and downs a second time due to the global gold market.</p>\r\n\r\n<p>For the latest and most accurate gold rates, you can visit local gold merchants and jewelers in your area.</p>\r\n\r\n<p>if you are interested in gold It&rsquo;s essential to keep your eyes on market trends to be aware and make informed decisions in case the gold market goes up or down in Pakistan.</p>\r\n\r\n<p>If you&rsquo;re curious about <span style=\"color:#e74c3c\"><strong>Yesterday Price</strong></span>, feel free to check it out here.</p>\r\n\r\n<h2><span style=\"font-size:16px\"><strong>Today&rsquo;s 24K Gold Prices in Pakistan (9 December 2023):</strong></span></h2>\r\n\r\n<ul>\r\n	<li><strong>1 gram:&nbsp;</strong>18,544</li>\r\n	<li><strong>10 grams:&nbsp;</strong>185,442</li>\r\n	<li><strong>1 tola:&nbsp;</strong>216,400</li>\r\n	<li><strong>1 ounce:&nbsp;</strong>576,790</li>\r\n	<li><strong>1 kilogram:&nbsp;</strong>18,544,239</li>\r\n</ul>\r\n\r\n<p><span style=\"color:#e74c3c\">Please Note: All these Rates Mentioned Here are Just to Get an Idea of what could be the Price in Bullion Markets. Please Visit Your City&rsquo;s Gold Market for the Actual Gold Rate.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"background-color:#bf9109; color:white; padding:10px 20px; text-align:center\">Live Gold and Silver Rate in Pakistan</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"2\" scope=\"col\">Gold 24K Rawa/Pathoor Rate</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">Buy</td>\r\n			<td style=\"text-align:center\">Sell</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">0</td>\r\n			<td style=\"text-align:center\">0</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"2\" scope=\"col\">Gold 24K Price Rate</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">Buy</td>\r\n			<td style=\"text-align:center\">Sell</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">0</td>\r\n			<td style=\"text-align:center\">0</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"2\" scope=\"col\">International Gold Rate</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">0</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"2\" scope=\"col\">International Silver Rate</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">0</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n\r\n<p><span style=\"color:#bf9109\"><strong>The comprehensive table shows how much the gold rate fluctuated throughout the day.</strong></span></p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">Pakistan Standard Time (PKT)</th>\r\n			<th scope=\"col\">Gold 24K Per Tola</th>\r\n			<th scope=\"col\">Gold Per Ounce</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">12:10 AM Night</td>\r\n			<td style=\"text-align:center\">PKR 216,300</td>\r\n			<td style=\"text-align:center\">$2000</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">9:10 AM Morning</td>\r\n			<td style=\"text-align:center\">PKR 216,400</td>\r\n			<td style=\"text-align:center\">$2004</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">10:15 AM&nbsp;Morning</td>\r\n			<td style=\"text-align:center\">&nbsp;PKR 216,400</td>\r\n			<td style=\"text-align:center\">$2004</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">2:10 PM&nbsp;Morning</td>\r\n			<td style=\"text-align:center\">&nbsp;PKR 216,400</td>\r\n			<td style=\"text-align:center\">$2004</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>We would like to clarify that the gold rate remains the same throughout Pakistan, although you may notice a slight difference of a few hundred rupees across cities.</p>\r\n\r\n<p>Furthermore, we would like to mention that the gold rate changes every hour. So in order to keep updated with the latest rates visit our site or download our app from the Google Play Store. If you&rsquo;re interested in silver, you can find the <span style=\"color:#e74c3c\">latest Silver Rate</span>&nbsp;here.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"background-color:#bf9109; color:white; padding:10px 20px; text-align:center\">Gold Rate in Pakistan today&nbsp;<strong>9 December 2023</strong></div>\r\n\r\n<p style=\"text-align:justify\">As of today, 9 December 2023, the 1 tola gold price in Pakistan is Rs. 216,300. The Gold Prices in Pakistan are usually sourced from the Karachi Gold Market.</p>\r\n\r\n<p style=\"text-align:justify\">In Pakistan, gold rates change due to the two big reasons. One major reason is the fluctuations in the dollar rate, and the second reason is the economic instability of Pakistan.</p>\r\n\r\n<p>These two external factors influence the local gold prices and because of these factors, a gold rate may change multiple times per day.</p>\r\n\r\n<p>In the below table, you can check the latest 1 tola Gold Price in Pakistan on&nbsp;<strong>9 December 2023</strong>&nbsp;for different karats.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"background-color:#bf9109; color:white; padding:10px 20px; text-align:center\">1 Tola Gold Price Today (9 December 2023)</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">Gold Type</th>\r\n			<th scope=\"col\">Rate per Gram</th>\r\n			<th scope=\"col\">Rate per 10 Grams</th>\r\n			<th scope=\"col\">Rate per Tola</th>\r\n			<th scope=\"col\">Rate per Troy Ounce</th>\r\n			<th scope=\"col\">Rate per Kilogram</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">24K</td>\r\n			<td style=\"text-align:center\">18,544</td>\r\n			<td style=\"text-align:center\">185,442</td>\r\n			<td style=\"text-align:center\">216,300</td>\r\n			<td style=\"text-align:center\">576,790</td>\r\n			<td style=\"text-align:center\">18,544,239</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">22K</td>\r\n			<td style=\"text-align:center\">16,954</td>\r\n			<td style=\"text-align:center\">169,544</td>\r\n			<td style=\"text-align:center\">197,756</td>\r\n			<td style=\"text-align:center\">527,340</td>\r\n			<td style=\"text-align:center\">16,954,369</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">21K</td>\r\n			<td style=\"text-align:center\">16,159</td>\r\n			<td style=\"text-align:center\">161,594</td>\r\n			<td style=\"text-align:center\">188,484</td>\r\n			<td style=\"text-align:center\">502,615</td>\r\n			<td style=\"text-align:center\">16,159,434</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">18K</td>\r\n			<td style=\"text-align:center\">13775</td>\r\n			<td style=\"text-align:center\">137,746</td>\r\n			<td style=\"text-align:center\">160,667</td>\r\n			<td style=\"text-align:center\">428,439</td>\r\n			<td style=\"text-align:center\">13,774,630</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"background-color:#bf9109; color:white; padding:10px 20px; text-align:center\">Gold Price Today In Major Cities Of Pakistan</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">City</th>\r\n			<th scope=\"col\">24K Rate per Tola</th>\r\n			<th scope=\"col\">22K Rate per Tola</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">Hyderabad</td>\r\n			<td style=\"text-align:center\">216,300</td>\r\n			<td style=\"text-align:center\">&nbsp; 196,756</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Lahore</td>\r\n			<td style=\"text-align:center\">216,300</td>\r\n			<td style=\"text-align:center\">&nbsp; 196,756</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Multan</td>\r\n			<td style=\"text-align:center\">216,300</td>\r\n			<td style=\"text-align:center\">&nbsp; 196,756</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Islamabad</td>\r\n			<td style=\"text-align:center\">216,300</td>\r\n			<td style=\"text-align:center\">&nbsp; 196,756</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Faisalabad</td>\r\n			<td style=\"text-align:center\">216,300</td>\r\n			<td style=\"text-align:center\">&nbsp; 196,756</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Rawalpindi</td>\r\n			<td style=\"text-align:center\">216,300</td>\r\n			<td style=\"text-align:center\">&nbsp; 196,756</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Quetta</td>\r\n			<td style=\"text-align:center\">216,300</td>\r\n			<td style=\"text-align:center\">&nbsp; 196,756</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Karachi</td>\r\n			<td style=\"text-align:center\">216,300</td>\r\n			<td style=\"text-align:center\">&nbsp; 196,756</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<script type=\"application/ld+json\" >\r\n            {\r\n                \"@context\": \"https://schema.org\",\r\n                \"@graph\": [\r\n                    {\r\n                        \"@type\": [\"WebPage\", \"FAQPage\"],\r\n                        \"@id\": \"https://silverrate.pk/gold-rate-in-pakistan/#webpage\",\r\n                        \"url\": \"https://silverrate.pk/gold-rate-in-pakistan/\",\r\n                        \"name\": \"Gold Rate in Pakistan Today \\u2013 11 December 2023\",\r\n                        \"datePublished\": \"2023-12-11T15:19:01+05:00\",\r\n                        \"dateModified\": \"2023-12-11T15:19:04+05:00\",\r\n                        \"isPartOf\": { \"@id\": \"https://silverrate.pk/#website\" },\r\n                        \"primaryImageOfPage\": { \"@id\": \"https://silverrate.pk/wp-content/uploads/2023/08/gold-rate-in-pakistan-today.webp\" },\r\n                        \"inLanguage\": \"en-US\",\r\n                        \"mainEntity\": [\r\n                            {\r\n                                \"@type\": \"Question\",\r\n                                \"url\": \"https://silverrate.pk/gold-rate-in-pakistan/#faq-question-64a661358faf9\",\r\n                                \"name\": \"What is the current gold rate in Pakistan for 1 tola?\",\r\n                                \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"As of today, 11 December 2023, the rate of 1 Tola 24-carat gold in Pakistan is 214,700.\" }\r\n                            },\r\n                            {\r\n                                \"@type\": \"Question\",\r\n                                \"url\": \"https://silverrate.pk/gold-rate-in-pakistan/#faq-question-64a661358faff\",\r\n                                \"name\": \"What is the rate of 1 Tola 22-carat gold in Pakistan today?\",\r\n                                \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"As of today, 11 December 2023, the rate of 1 Tola 22-carat gold in Pakistan is PKR 196,293.\" }\r\n                            },\r\n                            {\r\n                                \"@type\": \"Question\",\r\n                                \"url\": \"https://silverrate.pk/gold-rate-in-pakistan/#faq-question-64a661358fb01\",\r\n                                \"name\": \"How many grams are in one Tola?\",\r\n                                \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"In 1 Tola there are \\\"<strong>11.664</strong>\\\" grams.\" }\r\n                            },\r\n                            {\r\n                                \"@type\": \"Question\",\r\n                                \"url\": \"https://silverrate.pk/gold-rate-in-pakistan/#faq-question-64a661358fb04\",\r\n                                \"name\": \"How many carats are in a tola?\",\r\n                                \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"carats are used to measure the weight of gemstones (Nagina), not gold. Gold is typically measured in grams or ounces.\" }\r\n                            },\r\n                            {\r\n                                \"@type\": \"Question\",\r\n                                \"url\": \"https://silverrate.pk/gold-rate-in-pakistan/#faq-question-64a661358fb05\",\r\n                                \"name\": \"How many Ratti are in one Masha?\",\r\n                                \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"One Masha is equal to 8 <a href=\\\"https://en.wikipedia.org/wiki/Ratti\\\">Ratti</a>.\" }\r\n                            },\r\n                            {\r\n                                \"@type\": \"Question\",\r\n                                \"url\": \"https://silverrate.pk/gold-rate-in-pakistan/#faq-question-1688801939426\",\r\n                                \"name\": \"How much does 1 gram of gold cost in Pakistan?\",\r\n                                \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"As of today, 11 December 2023, 1 gram of gold in Pakistan costs PKR 18,407.\" }\r\n                            },\r\n                            {\r\n                                \"@type\": \"Question\",\r\n                                \"url\": \"https://silverrate.pk/gold-rate-in-pakistan/#faq-question-1688801999749\",\r\n                                \"name\": \"How often does the gold rate change in Pakistan?\",\r\n                                \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"The gold rate in Pakistan can change anytime, and it may fluctuate multiple times per day.\" }\r\n                            },\r\n                            {\r\n                                \"@type\": \"Question\",\r\n                                \"url\": \"https://silverrate.pk/gold-rate-in-pakistan/#faq-question-1688802038099\",\r\n                                \"name\": \"What factors influence the gold rate in Pakistan?\",\r\n                                \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"The gold rate in Pakistan is greatly influenced by fluctuations in the dollar rate and the economic instability of Pakistan.\" }\r\n                            },\r\n                            {\r\n                                \"@type\": \"Question\",\r\n                                \"url\": \"https://silverrate.pk/gold-rate-in-pakistan/#faq-question-1688802060484\",\r\n                                \"name\": \"What is the difference between 24-carat and 22-carat gold?\",\r\n                                \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"24-carat gold is the purest form of gold, containing 99.5% of the precious metal, while 22-carat gold contains 91.6% gold and 8.4% of other metals.\" }\r\n                            },\r\n                            {\r\n                                \"@type\": \"Question\",\r\n                                \"url\": \"https://silverrate.pk/gold-rate-in-pakistan/#faq-question-1688802238499\",\r\n                                \"name\": \"Where to sell gold in Pakistan?\",\r\n                                \"acceptedAnswer\": {\r\n                                    \"@type\": \"Answer\",\r\n                                    \"text\": \"Don\'t sell gold to local jewelers they won\'t give you a good price. It is advisable to sell gold in Pakistan at Sarafa Bazar to wholesalers, as they usually offer better prices compared to local jewelers.\"\r\n                                }\r\n                            }\r\n                        ]\r\n                    },\r\n               \r\n                ]\r\n            }\r\n        </script>', '2023-12-09 07:33:04', '2023-12-15 11:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2023_12_08_072252_create_home_pages_gold_rate_table', 1),
(15, '2023_12_08_072252_create_home_pages_table', 1),
(16, '2023_12_08_083443_create_gold_rates_by_days_table', 1),
(17, '2023_12_08_083443_create_gold_rates_by_month_table', 1),
(18, '2023_12_08_083443_create_gold_rates_by_week_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'maher.saqib64@gmail.com', NULL, '$2y$10$BydkqMUJhQ3RyE7AX/ZJru8.s8eqI0NN1YaWb5cL.GOZgPBKL68VK', NULL, '2023-07-11 04:17:57', '2023-07-11 04:17:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gold_rates_by_day`
--
ALTER TABLE `gold_rates_by_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gold_rates_by_month`
--
ALTER TABLE `gold_rates_by_month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gold_rates_by_week`
--
ALTER TABLE `gold_rates_by_week`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages_gold_rate`
--
ALTER TABLE `home_pages_gold_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gold_rates_by_day`
--
ALTER TABLE `gold_rates_by_day`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gold_rates_by_month`
--
ALTER TABLE `gold_rates_by_month`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gold_rates_by_week`
--
ALTER TABLE `gold_rates_by_week`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_pages_gold_rate`
--
ALTER TABLE `home_pages_gold_rate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
