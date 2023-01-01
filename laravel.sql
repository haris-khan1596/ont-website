-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 01:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `awards_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(60) NOT NULL,
  `year` year(4) NOT NULL,
  `organization` varchar(150) NOT NULL,
  `m_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`awards_id`, `title`, `year`, `organization`, `m_id`, `created_at`, `updated_at`) VALUES
(6, 'Dr.', 2017, 'Medhurst-Hessel', 5, '2000-08-16 19:00:00', '1970-06-29 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `data` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `date`, `data`, `created_at`, `updated_at`) VALUES
(6, '2006-06-18', 'Sed voluptatem suscipit et rerum. Perspiciatis ex vitae a non id. Repellendus deserunt magnam est temporibus eum minus occaecati pariatur.', '1977-06-05 19:00:00', '2010-03-16 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `collaborators`
--

CREATE TABLE `collaborators` (
  `colab_id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `collaborators`
--

INSERT INTO `collaborators` (`colab_id`, `icon`, `name`, `created_at`, `updated_at`) VALUES
(1, 'storage/collaborator/nust.jpeg', 'NUST', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'storage/collaborator/hec.png', 'HEC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'storage/collaborator/pern.jpeg', 'PERN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'storage/collaborator/tein.png', 'TEIN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'storage/collaborator/asiaconect.jpeg', 'AsiaConnect', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'storage/collaborator/eu.png', 'EU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'storage/collaborator/santanna.png', 'SantAnna', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `comment` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `blog_id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(9, 0, 'Dr. Clifton Gerlach', 'shania58@jakubowski.com', 'Sapiente incidunt et rem magnam. Odit mollitia voluptate dolores. Eos similique asperiores sapiente aut vel.', '2004-05-23 19:00:00', '2015-06-17 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE `domains` (
  `d_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `objective` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `domains`
--

INSERT INTO `domains` (`d_id`, `name`, `icon`, `description`, `objective`, `created_at`, `updated_at`) VALUES
(5, 'Felipe Von', 'https://via.placeholder.com/640x480.png/00cc66?text=icon+fugiat', 'Esse quas rerum aut. Ipsam ut similique quo sapiente rerum voluptatem. Ut et quod inventore vitae. Quis dolore cumque eum exercitationem amet laborum non.', 'Est at at culpa quia laboriosam. Laborum quidem dolores a rerum eaque. Doloribus veritatis porro atque quia sit.', '1994-05-03 19:00:00', '2019-04-10 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `domain_publication`
--

CREATE TABLE `domain_publication` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pub_id` bigint(20) UNSIGNED NOT NULL,
  `d_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `e_id` bigint(20) UNSIGNED NOT NULL,
  `start` year(4) NOT NULL,
  `end` year(4) DEFAULT NULL,
  `degree` varchar(80) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `m_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`e_id`, `start`, `end`, `degree`, `institute`, `m_id`, `created_at`, `updated_at`) VALUES
(1, 2010, 2014, 'Ph.D. in Electrical and Communication Engineering', 'Politechnico di Torrino, Italy', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2008, 2010, 'MS in Communication Engineering', 'Politechnico di Torrino, Italy', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2003, 2007, 'BE Information Technology', 'University of Engineering and Technology, Taxila', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(40) NOT NULL,
  `timmings` datetime NOT NULL,
  `objective` text NOT NULL,
  `description` longtext NOT NULL,
  `d_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `title`, `location`, `timmings`, `objective`, `description`, `d_id`, `created_at`, `updated_at`) VALUES
(1, 'Dicta saepe veniam qui nulla quia est.', 'East Oliver', '1978-12-26 13:04:08', 'Perspiciatis cum eius qui reiciendis maiores dolor. Autem velit odit natus rerum tempora doloribus rerum eveniet.', 'Maiores et harum aut nam et saepe cum. Qui commodi sed vel neque dolorem. Dignissimos dolorem dicta voluptate molestias ab exercitationem non. Exercitationem qui necessitatibus aut voluptas incidunt aut est.', 4, '1986-07-24 19:00:00', '1988-01-15 19:00:00'),
(2, 'Dicta saepe veniam qui nulla quia est.', 'East Oliver', '1978-12-26 13:04:08', 'Perspiciatis cum eius qui reiciendis maiores dolor. Autem velit odit natus rerum tempora doloribus rerum eveniet.', 'Maiores et harum aut nam et saepe cum. Qui commodi sed vel neque dolorem. Dignissimos dolorem dicta voluptate molestias ab exercitationem non. Exercitationem qui necessitatibus aut voluptas incidunt aut est.', 5, '1986-07-24 19:00:00', '1988-01-15 19:00:00'),
(3, 'lms Dicta saepe veniam qui nulla quia est.', 'East Oliver', '1978-12-26 13:04:08', 'Perspiciatis cum eius qui reiciendis maiores dolor. Autem velit odit natus rerum tempora doloribus rerum eveniet.', 'Maiores et harum aut nam et saepe cum. Qui commodi sed vel neque dolorem. Dignissimos dolorem dicta voluptate molestias ab exercitationem non. Exercitationem qui necessitatibus aut voluptas incidunt aut est.', 1, '1986-07-24 19:00:00', '1988-01-15 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `e_id` bigint(20) UNSIGNED NOT NULL,
  `m_id` bigint(20) UNSIGNED NOT NULL,
  `start` year(4) NOT NULL,
  `end` year(4) DEFAULT NULL,
  `designation` varchar(80) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`e_id`, `m_id`, `start`, `end`, `designation`, `institute`, `created_at`, `updated_at`) VALUES
(1, 1, 2015, NULL, 'Assistant Professor', 'SEECS, NUST, Islamabad, Pakistan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 2019, 2019, 'Research Fellow', 'CONNECT, Trinity College Dublin, Ireland', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 2014, 2015, 'Postdoc Researcher', 'Politecnico di Torino, Italy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 2007, 2008, 'Senior Design Engineer', 'Comcept Pvt. Ltd, Islamabad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 4, 1974, 2001, 'Dr.', 'O\'Connell Inc', '2002-04-10 19:00:00', '2015-07-12 19:00:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` text DEFAULT NULL,
  `desgination` enum('Faculty','PhD and Post Doc','Masters','Bachelors','Intern') DEFAULT NULL,
  `scholar` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `name`, `email`, `password`, `img`, `desgination`, `scholar`, `linkedin`, `twitter`, `facebook`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Arsalan Ahmad', 'arsalan.ahmad@seecs.edu.pk', '$2y$10$MIRBBjsKLRY71z/o2rpw1.sPNc2rM34n1IQteD2bYqfcuoTn6lEZW', 'storage/member/arsalanahmad.jpeg', 'Faculty', 'https://scholar.google.com/citations?user=3bdZhc4AAAAJ&hl=en&oi=ao', 'https://linkedin.com/in/arsalanahmad07/', '#', '#', '2022-12-30 01:16:59', '2022-12-30 01:16:59'),
(4003587, 'Bennett Macejkovic Sr.', 'dariana69@example.com', '<+LFybO5:QklW%5=k', 'https://via.placeholder.com/640x640.png/00aa55?text=consequatur', 'Bachelors', 'http://www.connelly.com/', 'http://www.rice.com/itaque-eaque-mollitia-accusamus', 'https://renner.com/facilis-voluptas-doloremque-eos-provident-quasi.html', 'https://www.paucek.net/quas-debitis-quidem-quis-officia-quia', '2009-08-31 19:00:00', '1976-04-24 19:00:00'),
(5170562, 'Lolita Davis', 'earlene.simonis@example.net', 'tXi!;qQmk~F\"pS\\', 'https://via.placeholder.com/640x640.png/00dd44?text=occaecati', 'PhD and Post Doc', 'http://weber.info/praesentium-distinctio-molestias-tenetur-quidem-velit-sed', 'http://www.mckenzie.com/', 'http://www.hettinger.net/corrupti-doloremque-quam-unde-quos-incidunt-est-aut.html', 'http://www.schmeler.net/aut-iusto-amet-beatae-vel-excepturi-ullam', '2014-02-28 19:00:00', '1975-10-29 19:00:00'),
(7654991, 'Kobe Mosciski V', 'ehermiston@example.net', 'Q_1?8*', 'https://via.placeholder.com/640x640.png/009933?text=ad', 'Intern', 'http://ebert.com/cumque-dolores-explicabo-provident-qui-ea-consequatur-voluptatem-dolorum.html', 'https://schaefer.com/id-laborum-et-maiores.html', 'https://www.wintheiser.net/quo-consequatur-voluptas-autem-id-quia-rerum', 'http://morar.biz/ipsa-quisquam-amet-corporis-autem-sint-possimus-nemo-sit', '1982-11-25 19:00:00', '1995-12-19 19:00:00'),
(7894490, 'Casimer Howell MD', 'fahey.stone@example.org', 'B2fM>%N>:Tz', 'https://via.placeholder.com/640x640.png/0033ff?text=et', 'PhD and Post Doc', 'http://hauck.biz/iste-et-voluptatem-rerum-odio', 'http://www.cronin.com/sint-fugiat-suscipit-aut-rem-qui-perferendis-enim-numquam', 'http://wehner.com/qui-dolores-consequatur-cumque-facilis-qui', 'http://www.harris.com/dolorum-doloremque-perspiciatis-sunt-ut-cumque-dolorum-est-et', '1985-12-09 19:00:00', '2009-09-24 19:00:00'),
(12581074, 'Amira Nolan', 'yratke@example.com', 'bIU>EWH\'V>', 'https://via.placeholder.com/640x640.png/009944?text=doloribus', 'Intern', 'http://www.kohler.org/pariatur-sapiente-voluptas-facere-laborum.html', 'http://rau.net/reprehenderit-neque-ea-doloribus-velit-ducimus-iste-modi', 'http://www.kulas.com/ut-ut-doloremque-dolorem-unde-aut.html', 'https://barton.org/totam-quisquam-beatae-vitae-eius-quo.html', '1984-06-18 19:00:00', '1999-04-15 19:00:00'),
(13603215, 'Elliott Stanton', 'kovacek.kristin@example.com', 'C]fOzD', 'https://via.placeholder.com/640x640.png/003311?text=eum', 'Masters', 'http://moore.biz/', 'http://www.sporer.com/', 'http://mante.info/', 'http://www.quitzon.com/voluptatem-iure-pariatur-id-qui', '2019-02-11 19:00:00', '2000-08-31 19:00:00'),
(14985225, 'Mrs. Ludie Runte IV', 'murphy23@example.org', '=uX.V\'Yr+150', 'https://via.placeholder.com/640x640.png/009966?text=deleniti', 'Faculty', 'http://www.lueilwitz.com/', 'https://conroy.com/rerum-id-at-magni-doloribus-distinctio.html', 'http://satterfield.com/ipsam-dolor-qui-similique-vel-sunt', 'https://www.heidenreich.com/dicta-vero-est-consectetur', '1996-02-24 19:00:00', '1999-02-17 19:00:00'),
(17314458, 'Prof. Mellie Oberbrunner DVM', 'freeman61@example.net', '8QV%gr_*k|jus', 'https://via.placeholder.com/640x640.png/0022ff?text=iusto', 'Intern', 'http://ziemann.biz/excepturi-voluptate-non-architecto-consequatur-a', 'http://waters.net/', 'http://www.zboncak.com/beatae-fugit-repellendus-fugiat-aut-dolorem', 'http://stroman.biz/quis-ut-voluptas-quae-provident.html', '1978-12-07 19:00:00', '2008-03-20 19:00:00'),
(28446440, 'Dr. Kenya Towne', 'koconnell@example.net', '@3eQ#K$', 'https://via.placeholder.com/640x640.png/001199?text=error', 'Faculty', 'http://hills.com/', 'http://weimann.com/voluptatem-ut-et-voluptates-quia', 'http://miller.com/', 'https://shields.info/sed-eius-mollitia-fuga-facere-modi-modi-cum.html', '2006-12-16 19:00:00', '1986-09-21 19:00:00'),
(33166361, 'Prof. Brando Mueller Jr.', 'member@ont.com', '$2y$10$fzIBIDunSvIQtfSwig0.5.nFCMIHmbMak9GJBXHscf8cYfIAk4Fye', 'https://via.placeholder.com/640x640.png/00eedd?text=est', 'Intern', 'http://www.haley.com/quia-eos-est-laborum-voluptatem-tempora-ipsam-sunt', 'http://smitham.com/qui-deleniti-doloremque-et-voluptas-perferendis-quo-velit', 'https://www.little.net/itaque-velit-fugit-autem-et-sunt-harum-facilis', 'http://crist.com/voluptate-quis-sunt-sint-dicta-maiores-placeat-quasi.html', '2010-07-08 19:00:00', '1988-06-03 19:00:00'),
(36920449, 'Cathryn Heidenreich', 'gail.terry@example.net', 's;^;v/!@K7g40`Gg^&', 'https://via.placeholder.com/640x640.png/0000aa?text=officiis', 'Faculty', 'http://herman.biz/dolor-enim-rem-et', 'http://carroll.com/consequatur-impedit-asperiores-a-optio', 'http://bosco.com/', 'http://fisher.com/exercitationem-ipsa-qui-dolorem-quo-esse', '1995-04-30 19:00:00', '2009-04-08 19:00:00'),
(38679900, 'Rosie Corkery', 'baby.boehm@example.org', 'x.~]yr34$ykUK', 'https://via.placeholder.com/640x640.png/000022?text=et', 'Masters', 'http://beahan.com/debitis-ut-sunt-autem-praesentium-debitis', 'http://www.kerluke.org/et-voluptatem-aut-alias-voluptas.html', 'http://www.toy.com/dolores-sint-quaerat-unde-rem.html', 'http://auer.biz/', '2019-04-07 19:00:00', '2001-08-13 19:00:00'),
(53679519, 'Virginie Gibson', 'kathryne.zulauf@example.net', 'P<[L}\"6L', 'https://via.placeholder.com/640x640.png/00aabb?text=sunt', 'Intern', 'https://www.roob.com/quo-sit-est-aut-qui', 'http://www.watsica.com/non-fugit-id-eos-impedit-aut', 'http://www.predovic.net/a-minima-dolore-aut-deserunt-et-cumque-ratione', 'https://www.ebert.biz/quibusdam-et-aut-consequatur-et', '2016-04-18 19:00:00', '2006-08-11 19:00:00'),
(57115604, 'Gwendolyn Dach', 'shermiston@example.com', '*`n=}C<zt0GB=\"{c!$', 'https://via.placeholder.com/640x640.png/0033bb?text=deleniti', 'Faculty', 'https://www.ortiz.com/impedit-quis-doloremque-dicta-consequatur-fuga-odit', 'http://www.kertzmann.org/', 'http://www.kemmer.biz/', 'http://ferry.com/non-corrupti-maiores-est-consectetur-eos-reiciendis-qui', '2005-06-10 19:00:00', '2009-03-28 19:00:00'),
(78469526, 'Alysa Harris', 'aboyer@example.org', 'IZ~Vx]i#R~\'XPA8', 'https://via.placeholder.com/640x640.png/00dd55?text=quia', 'Intern', 'https://www.funk.com/culpa-magni-soluta-ea', 'http://hane.biz/culpa-nulla-non-sunt-vel', 'http://www.lind.biz/ut-sint-sit-at-et-suscipit-sunt-et-voluptatem', 'http://www.mann.com/', '2015-03-05 19:00:00', '1976-05-16 19:00:00'),
(93596894, 'Waylon Schamberger', 'damion22@example.org', '1Ig+._gG', 'https://via.placeholder.com/640x640.png/00bbbb?text=cumque', 'Intern', 'http://www.fay.com/quo-non-blanditiis-et-tenetur.html', 'http://www.hermiston.com/', 'http://kling.com/', 'http://quigley.com/ipsa-qui-voluptatem-molestiae-eveniet-odit-numquam-necessitatibus-esse', '2012-11-13 19:00:00', '2002-05-26 19:00:00'),
(93596896, 'Khubaib', 'khubaib@gmail.com', '$2y$10$DYXdhFz.KFndT1xZHhLxtuc/IHEEmzBQdC1uONMldhcZ5KjwcHudi', 'http://127.0.0.1:8000/storage/member/profile.png', 'Faculty', NULL, NULL, NULL, NULL, '2022-12-30 00:31:35', '2022-12-30 00:31:35'),
(93596897, 'dummy', 'dummy@gmail.com', '$2y$10$vTzFkyQET57hAt8H5C4JlOgirjIsYfC.QZxhfaOJ.JTXxf8cyzQeG', 'http://127.0.0.1:8000/storage/member/profile.png', 'Faculty', NULL, NULL, NULL, '#', '2022-12-30 00:52:28', '2022-12-30 00:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_21_084236_create_member_table', 1),
(6, '2022_12_21_143004_create_education_table', 1),
(7, '2022_12_23_063225_create_awards_table', 1),
(8, '2022_12_23_063338_create_experiences_table', 1),
(9, '2022_12_25_075157_create_publications_table', 1),
(10, '2022_12_25_095200_create_domains_table', 1),
(11, '2022_12_25_100014_create_domain_publication_table', 1),
(12, '2022_12_25_111707_create_blogs_table', 1),
(13, '2022_12_25_111755_create_comments_table', 1),
(14, '2022_12_25_115432_create_collaborators_table', 1),
(15, '2022_12_25_153733_create_events_table', 1),
(16, '2022_12_25_154754_create_projects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `proj_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `goal` varchar(255) NOT NULL,
  `data` longtext DEFAULT NULL,
  `d_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`proj_id`, `title`, `description`, `goal`, `data`, `d_id`, `created_at`, `updated_at`) VALUES
(8, 'Iste ipsa nulla vero maxime vel minima.', 'Optio officiis amet et consequatur consequatur molestiae rerum. Non quia error autem similique. Quidem maxime cumque ut temporibus.', 'Eum sunt consequatur rerum exercitationem asperiores. Magni similique libero delectus nulla tempore cumque. Est minus eaque temporibus maxime.', 'Repellendus consequatur aspernatur qui dolorem facere dolorem. Laboriosam adipisci nemo non omnis in. Optio asperiores rerum aut hic nihil autem. Doloremque consequatur et qui corrupti.', 5, '1987-04-03 19:00:00', '1992-06-27 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `pub_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` text NOT NULL,
  `bibtex` text NOT NULL,
  `year` year(4) NOT NULL,
  `type` enum('journal','conference') NOT NULL,
  `link` varchar(255) NOT NULL,
  `proj_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`pub_id`, `title`, `author`, `bibtex`, `year`, `type`, `link`, `proj_id`, `created_at`, `updated_at`) VALUES
(1, 'Saepe et qui aliquam sed quidem.', 'Dorthy Baumbach', 'Quia quia nostrum autem voluptate qui natus. Animi minus dolor autem quo. Quia minima harum provident omnis quidem. Debitis minus nesciunt quia et dolorum. Atque nihil sequi est expedita hic ipsam.', 2019, 'journal', 'http://www.stehr.com/', 5, '1983-10-13 19:00:00', '1970-06-28 19:00:00'),
(2, 'Et tempora consequatur dolor.', 'Mr. Austen Spencer Sr.', 'Consequatur officiis ut fugiat aliquid a esse. Harum voluptatibus maxime et aut quaerat. Aut tempore illum et neque eum deserunt. Voluptatem hic consequatur perspiciatis culpa qui.', 2022, 'conference', 'http://pacocha.com/et-nemo-aut-ad.html', 7, '1994-02-18 19:00:00', '2015-07-07 19:00:00'),
(3, 'Aperiam voluptates ut cumque blanditiis illo deleniti cumque.', 'Ron Gerhold', 'Animi aliquam et dolor quia aut voluptatum quo. Aut repellendus fuga aut. Voluptates ut aut qui vel. Corrupti iusto sit qui voluptatem fuga deserunt.', 2020, 'journal', 'http://greenfelder.com/quod-error-minima-esse-temporibus.html', 4, '1996-01-15 19:00:00', '2003-08-11 19:00:00'),
(4, 'Accusamus reprehenderit illum doloremque.', 'Mrs. Dianna Yundt I', 'Deserunt iste nam veniam similique debitis saepe. In numquam officia et odio quis.', 2020, 'journal', 'http://www.sporer.biz/adipisci-natus-illo-consequatur-et', 9, '2004-06-26 19:00:00', '2005-01-10 19:00:00'),
(5, 'Rerum earum sit nisi.', 'Hillard Herzog', 'Officia incidunt porro porro sit libero. Aliquam dignissimos consectetur dolores omnis nemo. Quia consectetur ea provident qui fuga dolore.', 2019, 'journal', 'http://hilpert.com/quo-earum-velit-asperiores-vitae-vero-ea-quod', 8, '2011-06-21 19:00:00', '1992-09-30 19:00:00'),
(6, 'Error id ad quo ipsam.', 'Brannon Pouros', 'A deleniti et odio non. Quia eum ducimus vero sapiente eligendi dicta id at. Facilis consequatur voluptas consequatur doloremque incidunt nam harum.', 2020, 'conference', 'http://www.kuphal.biz/', 1, '1973-09-07 19:00:00', '1977-07-25 19:00:00'),
(7, 'Repellendus voluptatem sint ad architecto.', 'Jennyfer Ruecker', 'Et commodi sint placeat quae qui sed quasi. Fugit rem non accusamus error assumenda debitis sunt. Quia aut nihil ea corrupti omnis aut odit reiciendis.', 2020, 'conference', 'http://www.veum.org/ratione-et-ipsam-incidunt-facilis-aspernatur-magni-et.html', 9, '1988-12-13 19:00:00', '2001-07-02 19:00:00'),
(8, 'Aut repellendus deserunt nemo enim quis deleniti aut.', 'Bettye Kuhic', 'Est dolore aut illo sunt itaque. Aliquid dolores laboriosam eligendi magni beatae. Omnis error voluptatibus neque aut cumque. At in vel quis ut dignissimos in quos impedit.', 2019, 'conference', 'https://www.lockman.com/nihil-accusamus-et-et-voluptatum-animi', 5, '2017-05-23 19:00:00', '1989-04-15 19:00:00'),
(9, 'Vero in in porro saepe officia dignissimos veritatis.', 'Eliane Barrows I', 'Provident eum est voluptatem et quidem. Cumque praesentium sit aut recusandae. Fugiat rem repudiandae aperiam voluptas est molestiae. Aut alias consequatur nulla.', 2021, 'conference', 'http://www.simonis.info/eveniet-delectus-porro-esse-id-architecto-temporibus-eum', 2, '1994-01-04 19:00:00', '1992-08-18 19:00:00'),
(10, 'Omnis dolor eos quia consequatur explicabo.', 'Lucie Shields', 'Deleniti nihil quam commodi nisi sapiente dolorem tempora. Nulla impedit id eligendi ducimus totam non debitis. Repellat placeat officiis non fugiat qui sit.', 2021, 'journal', 'http://will.info/quia-consectetur-consequatur-similique', 4, '1971-04-04 19:00:00', '2011-08-21 19:00:00'),
(11, 'Qui similique odit dolores et.', 'Jovanny Altenwerth', 'Pariatur eos est atque quidem illo quidem. Vero consectetur enim voluptas nobis quod dolore et id. Aut aperiam officiis odit odio quas incidunt.', 2021, 'conference', 'https://wilkinson.org/rem-neque-dolorem-voluptatem-rerum-sit-blanditiis-reprehenderit.html', 6, '2004-07-23 19:00:00', '1983-05-24 19:00:00'),
(12, 'Optio mollitia quas laudantium.', 'Adela Stoltenberg', 'Aut aut id nulla aut. Et sed excepturi velit nobis ad. Officia nemo neque velit reprehenderit porro eligendi mollitia officiis.', 2022, 'conference', 'http://romaguera.com/', 7, '2022-11-02 19:00:00', '2009-01-06 19:00:00'),
(13, 'Tenetur earum possimus vel et dolores ut dignissimos rerum.', 'Dimitri Ullrich', 'Est laborum cupiditate corrupti et. Eum et ut dignissimos sint. Aliquid et fugiat impedit quis nesciunt. Animi non molestiae sit impedit autem. Quas accusamus corporis nobis molestiae illo est.', 2022, 'conference', 'http://www.wolff.com/saepe-quia-modi-rerum-autem.html', 1, '1996-06-27 19:00:00', '2013-06-24 19:00:00'),
(14, 'Earum ut autem molestias labore et ut blanditiis.', 'Louisa Jaskolski', 'Ut est sed ducimus hic. Reprehenderit odio ea exercitationem neque ipsum quia enim. Vel eligendi ab et dolor cumque quia. Assumenda non aperiam nemo iure recusandae et. Officia illum vel est iusto.', 2021, 'journal', 'http://www.fisher.com/necessitatibus-tempora-et-quis-ex-est-deleniti-et-dolorem', 8, '1996-07-02 19:00:00', '1979-07-25 19:00:00'),
(15, 'Dolor nam et neque eaque autem facilis.', 'Earline Spinka', 'Saepe ab facilis nam ea tempore minima. Sed et repellat enim ad dolore qui. Repellendus architecto quis nesciunt at.', 2019, 'journal', 'http://www.dibbert.biz/', 1, '2002-05-07 19:00:00', '1987-10-16 19:00:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lamees', 'lamees@gmail.com', NULL, '$2y$10$Gz8uOhG.NYYDFvmR4XWh9OHhWjse2Rbc1y39PvTeLY8F11Zwa3k4y', NULL, '2022-12-29 06:39:26', '2022-12-29 06:39:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`awards_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `collaborators`
--
ALTER TABLE `collaborators`
  ADD PRIMARY KEY (`colab_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `domain_publication`
--
ALTER TABLE `domain_publication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`proj_id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`pub_id`);

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
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `awards_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `collaborators`
--
ALTER TABLE `collaborators`
  MODIFY `colab_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `d_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `domain_publication`
--
ALTER TABLE `domain_publication`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `e_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `e_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93596899;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `proj_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `pub_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
