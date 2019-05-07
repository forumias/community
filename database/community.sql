-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2019 at 04:24 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1-log
-- PHP Version: 7.0.33-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `community`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Animal Husbandry and Veterinary Science', '2019-04-10 05:16:23', '2019-04-10 05:16:23'),
(2, 'Anthropology', '2019-04-10 05:16:23', '2019-04-10 05:16:23'),
(3, 'Botany', '2019-04-10 05:16:56', '2019-04-10 05:16:56'),
(4, 'Chemistry', '2019-04-10 05:16:56', '2019-04-10 05:16:56'),
(5, 'Civil Engineering', '2019-04-10 05:17:10', '2019-04-10 05:17:10'),
(6, 'Commerce and Accountancy', '2019-04-10 05:17:10', '2019-04-10 05:17:10'),
(7, 'Economics', '2019-04-10 05:17:25', '2019-04-10 05:17:25'),
(8, 'Electrical Engineering', '2019-04-10 05:17:25', '2019-04-10 05:17:25'),
(9, 'Geography', '2019-04-10 05:17:37', '2019-04-10 05:17:37'),
(10, 'Geology', '2019-04-10 05:17:37', '2019-04-10 05:17:37'),
(11, 'History', '2019-04-10 05:18:14', '2019-04-10 05:18:14'),
(12, 'Law', '2019-04-10 05:18:14', '2019-04-10 05:18:14'),
(13, 'Management', '2019-04-10 05:18:28', '2019-04-10 05:18:28'),
(14, 'Mathematics', '2019-04-10 05:18:28', '2019-04-10 05:18:28'),
(15, 'Mechanical Engineering', '2019-04-10 05:18:42', '2019-04-10 05:18:42'),
(16, 'Medical Science', '2019-04-10 05:18:42', '2019-04-10 05:18:42'),
(17, 'Philosophy', '2019-04-10 05:18:54', '2019-04-10 05:18:54'),
(18, 'Physics', '2019-04-10 05:18:54', '2019-04-10 05:18:54'),
(19, 'Political Science and International Relations', '2019-04-10 05:19:09', '2019-04-10 05:19:09'),
(20, 'Psychology', '2019-04-10 05:19:09', '2019-04-10 05:19:09'),
(21, 'Public Administration', '2019-04-10 05:19:24', '2019-04-10 05:19:24'),
(22, 'Sociology', '2019-04-10 05:19:24', '2019-04-10 05:19:24'),
(23, 'Statistics', '2019-04-10 05:19:39', '2019-04-10 05:19:39'),
(24, 'Zoology', '2019-04-10 05:19:39', '2019-04-10 05:19:39'),
(25, 'Agriculture', '2019-04-10 05:20:07', '2019-04-10 05:20:07'),
(26, 'Literature (any language)', '2019-04-10 05:20:07', '2019-04-10 05:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(2) DEFAULT '1' COMMENT '0=>''inactive'', 1=>''active''',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 25, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2019-04-20 06:37:25', '2019-04-20 06:37:25'),
(2, 21, 6, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1, '2019-04-20 07:07:32', '2019-04-20 07:07:32'),
(3, 25, 6, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 1, '2019-04-20 07:37:35', '2019-04-20 07:37:35'),
(4, 24, 7, 'Test', 1, '2019-04-23 01:08:03', '2019-04-23 01:08:03'),
(8, 32, 6, 'hjzxcxzc xznbc xzc xjcvx cxjcxzc\nxcnx xz cxzc\nxcmxzcxz,cx\ncmxcn xc xcx\ncxcxc', 1, '2019-04-24 00:06:04', '2019-04-24 00:06:04'),
(9, 33, 6, 'kjsdf dsjfdsnf\nsdfsdf\nsdf\nsdf\ndsfd\nsf', 1, '2019-04-24 01:05:04', '2019-04-24 01:05:04'),
(10, 33, 6, 'What is Lorem Ipsum?', 1, '2019-04-24 01:08:07', '2019-04-24 01:08:07'),
(11, 33, 7, 'Munna Bhai MBBS. :)', 1, '2019-04-27 07:27:30', '2019-04-27 07:27:30'),
(13, 37, 10, 'Is this the latest movie?', 1, '2019-05-01 08:24:39', '2019-05-01 08:24:39'),
(14, 39, 10, 'This is a very neat piece of work. Here is how it can be made better!', 1, '2019-05-02 04:27:02', '2019-05-02 04:27:02'),
(15, 39, 10, 'Looks quite cool!\n\nIs this a revolution?', 1, '2019-05-02 05:51:41', '2019-05-02 05:51:41'),
(16, 42, 10, 'This is tested?', 1, '2019-05-03 07:33:49', '2019-05-03 07:33:49'),
(17, 42, 10, 'This is test 2', 1, '2019-05-03 07:34:01', '2019-05-03 07:34:01'),
(18, 37, 6, 'Nice movie', 1, '2019-05-04 01:29:08', '2019-05-04 01:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` int(11) NOT NULL,
  `type` tinyint(2) NOT NULL COMMENT '0=>''Other'', 1=> ''Group or tag'', 2=> ''Users''',
  `tag_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `follow_by` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `type`, `tag_id`, `user_id`, `follow_by`, `created_at`, `updated_at`) VALUES
(1, 1, 14, NULL, '7,6', '2019-04-17 04:23:58', '2019-04-17 05:08:31'),
(2, 1, 11, NULL, '7', '2019-04-17 04:35:08', '2019-04-27 07:26:27'),
(3, 1, 12, NULL, '7,6', '2019-04-17 04:35:31', '2019-05-07 04:58:34'),
(4, 1, 5, NULL, '', '2019-04-17 04:35:50', '2019-05-03 05:28:49'),
(5, 1, 17, NULL, '7,6', '2019-04-17 04:45:49', '2019-04-17 04:48:24'),
(6, 1, 16, NULL, '7,6', '2019-04-17 04:49:42', '2019-05-04 02:40:32'),
(7, 1, 7, NULL, '7', '2019-04-17 05:16:17', '2019-04-27 07:26:23'),
(8, 1, 15, NULL, '', '2019-04-17 05:16:34', '2019-04-27 07:26:21'),
(9, 2, NULL, 7, '10', '2019-04-18 04:58:14', '2019-05-04 06:19:22'),
(10, 2, NULL, 8, '7', '2019-04-18 07:27:57', '2019-05-01 21:56:29'),
(11, 1, 13, NULL, '', '2019-04-18 07:32:56', '2019-04-18 07:32:59'),
(12, 2, NULL, 6, '7,10', '2019-04-18 09:02:31', '2019-05-03 07:33:43'),
(13, 2, NULL, 9, '10', '2019-04-18 09:02:35', '2019-04-18 09:02:35'),
(14, 2, NULL, 10, '7,13', '2019-04-27 01:40:10', '2019-05-02 06:02:00'),
(15, 1, 21, NULL, '', '2019-05-02 06:06:34', '2019-05-03 12:02:25'),
(16, 1, 22, NULL, '', '2019-05-02 06:07:35', '2019-05-03 12:02:28'),
(17, 1, 3, NULL, '6', '2019-05-03 04:38:36', '2019-05-03 23:46:16'),
(18, 2, NULL, 12, '', '2019-05-04 05:47:49', '2019-05-04 05:49:23'),
(19, 1, 4, NULL, '6', '2019-05-04 06:53:22', '2019-05-04 06:53:33'),
(20, 1, 8, NULL, '', '2019-05-04 07:33:41', '2019-05-04 07:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `like_type` tinyint(2) DEFAULT '0' COMMENT '0=>''Post'', 1=>''Other''',
  `post_id` int(11) NOT NULL,
  `user_ids` text NOT NULL,
  `like_count` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `like_type`, `post_id`, `user_ids`, `like_count`, `created_at`, `updated_at`) VALUES
(1, 0, 33, '8,9,11,12,6,7,1', 7, '2019-04-25 01:13:14', '2019-04-29 05:31:36'),
(2, 0, 32, '6,7,10', 3, '2019-04-25 04:13:19', '2019-05-01 21:55:48'),
(3, 0, 25, '7,6', 2, '2019-04-25 04:14:08', '2019-04-27 05:13:51'),
(4, 0, 6, '6', 1, '2019-04-25 04:15:15', '2019-04-25 04:15:15'),
(5, 0, 5, '7,6', 2, '2019-04-25 07:03:16', '2019-04-25 07:04:13'),
(6, 0, 19, '7', 1, '2019-04-26 04:04:19', '2019-04-26 04:04:21'),
(7, 0, 18, '7', 1, '2019-04-26 04:04:23', '2019-04-26 04:04:23'),
(8, 0, 17, '7', 1, '2019-04-26 04:04:26', '2019-04-26 04:04:26'),
(9, 0, 24, '', 0, '2019-04-27 03:50:22', '2019-04-27 03:50:28'),
(10, 0, 37, '6,10', 2, '2019-04-29 07:48:50', '2019-05-01 08:24:25'),
(11, 0, 30, '10', 1, '2019-05-01 21:55:51', '2019-05-01 21:55:51'),
(12, 0, 38, '6,10', 2, '2019-05-02 00:49:09', '2019-05-02 04:26:33'),
(13, 0, 39, '', 0, '2019-05-02 05:51:25', '2019-05-03 06:24:54'),
(14, 0, 50, '10', 1, '2019-05-07 04:33:11', '2019-05-07 04:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polloptions`
--

CREATE TABLE `polloptions` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `counts` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polloptions`
--

INSERT INTO `polloptions` (`id`, `post_id`, `user_id`, `name`, `counts`, `created_at`, `updated_at`) VALUES
(1, 28, 6, 'werewr', 0, '2019-04-23 01:58:21', '2019-04-23 01:58:21'),
(2, 28, 6, 'osdkfdhn', 0, '2019-04-23 01:58:21', '2019-04-23 01:58:21'),
(3, 28, 6, 'kdshgfd', 0, '2019-04-23 01:58:21', '2019-04-23 01:58:21'),
(4, 28, 6, 'tsadvs', 0, '2019-04-23 01:58:21', '2019-04-23 01:58:21'),
(5, 36, 7, 'Modi', 0, '2019-04-29 00:26:11', '2019-04-29 00:26:11'),
(6, 36, 7, 'Rahul', 0, '2019-04-29 00:26:11', '2019-04-29 00:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `tag_id` int(11) DEFAULT '0' COMMENT 'now group id',
  `tag_name` varchar(255) DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=>''Question'', 1=>''Story'', 2=>''Polls'', 3=>''News''',
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(2) NOT NULL COMMENT '0=>''Inactive'', 1=>''Active''',
  `featured` tinyint(2) DEFAULT '0' COMMENT '0=>''Normal post'', 1=>''Featured post''',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `tag_id`, `tag_name`, `type`, `title`, `slug`, `img`, `description`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 6, '0', 0, NULL, 0, 'vxzcvzxcvxv', NULL, NULL, '<div>xcvcxvxczvzxcvxcvzxvxcvcvcv</div>', 0, 0, NULL, '2019-04-13 09:57:08'),
(2, 6, '3', NULL, 'student', 1, 'My Post', NULL, NULL, '<p><strong style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">Lorem Ipsum</strong><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p><img src="https://i.imgur.com/evLHoVk.jpg"><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;"><br></span>', 0, 0, '2019-04-09 06:37:30', '2019-04-13 09:57:10'),
(3, 6, '2', NULL, 'Testing', 1, 'Mobile testing', NULL, NULL, '<p>My description</p><p><img src="https://i.imgur.com/cay1BQn.jpg"><br></p>', 0, 0, '2019-04-09 06:41:10', '2019-04-13 09:57:13'),
(5, 6, '25', NULL, 'tag1', 1, 'Hh', NULL, NULL, '<p>Ggghh</p>', 1, 0, '2019-04-10 07:58:39', '2019-04-13 09:57:18'),
(6, 6, NULL, NULL, 'tag2', 1, 'This is my first story', NULL, 'posts__aU4llGq1Trtf1jRp.jpg', '<p><strong style="margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;"><span style="font-family: &quot;Comic Sans MS&quot;;">Lorem Ipsum</span></strong><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;"><span style="font-family: &quot;Comic Sans MS&quot;;">&nbsp;</span><span style="font-family: &quot;Comic Sans MS&quot;;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></span><br></p>', 1, 0, '2019-04-11 02:41:38', '2019-04-13 09:59:41'),
(8, 6, '25', NULL, 'tag1', 1, 'xcvcx', NULL, NULL, '<p>xcvcxv</p>', 1, 0, '2019-04-11 03:34:50', '2019-04-13 09:57:23'),
(9, 6, '5', NULL, 'tag1', 1, 'What is Lorem Ipsum?', NULL, NULL, '<p><strong style="margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">Lorem Ipsum</strong><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 1, 0, '2019-04-11 03:37:23', '2019-04-13 09:57:26'),
(10, 6, '25,3', NULL, 'tag2', 1, 'Why do we use it?', NULL, NULL, '<p><span style="font-family: &quot;Comic Sans MS&quot;; font-size: 14px; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></p>', 1, 0, '2019-04-11 03:41:03', '2019-04-13 09:57:31'),
(11, 6, '2,4', NULL, 'test', 1, 'Test For unorders', NULL, NULL, '<ul><li>Test For unorders 1</li><li>Test For unorders 1</li><li>Test For unorders<br></li></ul>', 1, 0, '2019-04-11 03:43:41', '2019-04-13 09:57:34'),
(12, 6, NULL, 11, 'my_story', 1, 'my story', NULL, 'posts__lCNWVQFCa7OtqOcG.jpg', '<p>my story<br></p>', 1, 0, '2019-04-11 05:21:29', '2019-04-15 10:51:07'),
(13, 6, '3', 15, 'students', 1, 'Start where you are. Use what you have. Do what you can', NULL, 'our-students.jpg', '<p><span style="font-family: &quot;Comic Sans MS&quot;; font-size: 14px; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></p>', 1, 0, '2019-04-12 18:30:00', '2019-04-15 10:50:51'),
(14, 6, '3', 10, 'motivation', 1, 'It always seems impossible until it’s done', NULL, 'ab.jpg', '<p><span style="font-family: &quot;Comic Sans MS&quot;; font-size: 14px; text-align: justify;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</span><br></p>', 1, 0, '2019-04-12 18:30:00', '2019-04-15 10:50:43'),
(15, 1, NULL, 2, '2', 0, 'samdasd', NULL, 'posts__pBRKbkEtOF8hUtJ0.jpg', '<p>asdsaddsdsd</p>', 1, 0, '2019-04-15 02:33:34', '2019-04-15 10:50:34'),
(16, 6, NULL, 1, '1', 1, 'zxcxzc', NULL, 'posts__43jFmcqPuLSY74LW.jpg', '<p>zxcxzc</p>', 1, 0, '2019-04-15 02:41:50', '2019-04-15 10:50:31'),
(17, 6, NULL, 2, '2', 1, 'zxczxc', NULL, 'posts__it5thpB4M2Mb8I6Z.jpg', '<p>zxcxzcxc</p>', 1, 0, '2019-04-15 02:44:57', '2019-04-15 10:50:25'),
(18, 6, NULL, 2, '2', 1, 'xcvcxvxc', NULL, 'posts__nLSv5SyfTiMS1vjj.jpg', '<p>cxvcxv</p>', 1, 0, '2019-04-15 02:48:28', '2019-04-15 10:50:22'),
(19, 6, NULL, 13, '13,10', 1, 'Simple testing', NULL, 'posts__XhE5xFurfmbe15lJ.jpg', '<p><span style="color: rgb(231, 156, 156);">jhasd dsmnf dsfds fdsf dsn fdsf&nbsp;</span></p>', 1, 0, '2019-04-15 04:05:29', '2019-05-04 07:27:20'),
(20, 6, NULL, 7, '1', 1, 'testing tags', NULL, 'posts__P4XyhG0Q6pMnaY06.jpg', '<p>testing tags</p>', 1, 0, '2019-04-15 05:19:02', '2019-05-04 07:27:06'),
(21, 6, NULL, 5, '1', 1, 'Another testing', NULL, 'posts__9usxzcgn9dKEcOI2.jpg', '<p><strong style="margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">Lorem Ipsum</strong><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 1, 0, '2019-04-15 05:30:10', '2019-05-04 07:27:02'),
(22, 1, '22,24', NULL, '7', 0, 'akkkkkkkkkkkkk', NULL, NULL, '<p>s jhsadf dsmnf ds fndsbf dsm fdmsnf dfn dsnmf b</p>', 1, 0, '2019-04-15 07:54:25', '2019-04-15 07:54:25'),
(23, 1, '25,2', 12, '1', 0, 'jjjjjjjjjjjj', NULL, NULL, '<p>sdfsdffdsfsfsf</p>', 1, 0, '2019-04-15 07:57:02', '2019-05-04 07:26:50'),
(24, 7, NULL, 11, '1', 1, 'The standard Lorem Ipsum passage, used since the 1500s', NULL, 'posts__ZeoKvqYutXQUIMvg.jpg', '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span></p>', 1, 0, '2019-04-17 06:38:29', '2019-05-04 07:26:31'),
(25, 10, NULL, 19, '1', 1, 'Test Title', NULL, 'posts__TlkRhX2QipEj1oTB.jpg', '<p>This is it&nbsp;&nbsp;&nbsp;&nbsp;</p>', 1, 0, '2019-04-18 09:04:31', '2019-04-18 09:04:31'),
(26, 1, '25,2', 12, '1', 0, 'testing Question', NULL, NULL, '<p>hdsa fds fn dsfsdfdsnf dsfdsjf dsfsdjf&nbsp;</p><p>sdf&nbsp;</p><p>dsf</p><p>dsf</p>', 1, 0, '2019-04-23 00:49:44', '2019-04-23 00:49:44'),
(28, 6, NULL, 7, '1', 2, 'ydfhds fndsb fffdd', NULL, NULL, '<p>dhfdsf mdsnfbds fnmds fdsfsfnsfdsfmd nsdsf ns</p>', 1, 0, '2019-04-23 01:58:21', '2019-04-23 01:58:21'),
(30, 6, NULL, 17, '1', 3, 'My news title', NULL, NULL, '<p>my news description&nbsp;</p>', 1, 0, '2019-04-23 02:26:32', '2019-04-23 02:26:32'),
(32, 6, NULL, 12, '1', 1, 'What is Lorem Ipsum?', NULL, 'posts__f3TUzimb5vUFf1yp.jpg', '<p><strong style="margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">Lorem Ipsum</strong><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 1, 0, '2019-04-23 23:21:29', '2019-04-23 23:21:29'),
(33, 6, NULL, 15, '1', 1, 'Ddbbd', NULL, 'posts__KdtDiSikg54WXfvj.jpg', '<p>Vdhuddh &nbsp;dvdhd dhshdhdd</p><p>Hhddhdjsksshdh</p>', 1, 0, '2019-04-23 23:53:11', '2019-04-23 23:53:11'),
(35, 6, NULL, 6, '1', 1, 'Ayush Test', NULL, 'posts__eAUekxys6flg6OQP.jpg', '<p>Test Now!&nbsp;</p>', 1, 0, '2019-04-27 02:26:22', '2019-04-27 09:40:38'),
(36, 7, NULL, 20, '1', 2, 'Who will election 2019', NULL, NULL, '<p>ELections 2019</p>', 1, 0, '2019-04-29 00:26:11', '2019-04-29 00:26:11'),
(37, 7, NULL, 21, '1', 1, 'Avenger movie review', NULL, 'posts__PGVuve9hnsxajc22.jpg', '<p><i style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: small;">If "Infinity War" was billed as a must-see event for all moviegoers, whether or not they\'d attended a single Marvel movie prior, then "Endgame" is the ultimate fan-service follow-up</i></p>', 1, 0, '2019-04-29 07:48:13', '2019-05-06 01:24:21'),
(38, 10, NULL, 22, '1', 1, 'This is how this functionality should work!', NULL, 'posts__ZQKTdBs5mKWn8poI.png', '<p>Is this working fine? Have all features been tested?</p>', 1, 0, '2019-05-01 23:24:27', '2019-05-01 23:24:27'),
(39, 10, NULL, 23, '1', 1, 'Is this a good place to start discussions?', NULL, 'posts__5gbdZYadJHRs4MT8.png', '<p>I badly think so! I will be able to put in a post!</p>', 1, 1, '2019-05-02 03:37:21', '2019-05-06 01:21:37'),
(40, 6, '18', 24, '1', 0, 'Consider the following statements about Dhanush missile and select the correct answer', 'consider-the-following-statements-about-dhanush-missile-and-select-the-correct-answer-1556800317', NULL, '<div class="wpProQuiz_question_text" style="font-family: Arial; text-align: justify; margin-bottom: 10px !important;"><ol style="margin-bottom: 0px;"><li>Dhanush missile is an indigenously developed naval version of the Prithvi short range ballistic missile.</li><li>It is a single stage missile and was developed by the DRDO and it uses liquid propellant.</li><li>It has a strike range of up to 350 km and can carry 500 kg of conventional warheads only.</li></ol></div>', 1, 0, '2019-05-02 07:01:57', '2019-05-02 12:37:16'),
(41, 6, '18', 24, '1', 0, 'Consider the following statements about Dornier 228, which India has recently handed over to Seychelles and select the correct answers:', 'consider-the-following-statements-about-dornier-228-which-india-has-recently-handed-over-to-seychelles-and-select-the-correct-answers-1556800530', NULL, '<ol style="margin-bottom: 0px; font-family: Arial; text-align: justify;"><li>The Dornier 228 is manufactured by the DRDO.</li><li>It is a highly reliable, multi-purpose, fuel efficient rugged, lightweight twin turbo prop aircraft with a retractable tricycle landing gear.</li><li>It is a frontline surveillance platform for applications like maritime reconnaissance, intelligence, warfare, search and rescue, pollution control and transport.</li></ol>', 1, 0, '2019-05-02 07:05:30', '2019-05-06 01:31:43'),
(42, 6, NULL, 26, '1', 1, 'Interfaces and Abstract Classes', 'interface-abstract-class', 'posts__C0u5Qr9JeSJWEH3N.png', '<p style="margin-bottom: 2.5rem; font-family: &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif; font-size: 20px;">For most people I\'ve talked on my journey through software development,&nbsp;<em>abstraction</em>&nbsp;always brings the idea of&nbsp;<em>code reuse</em>. You might think about company and person objects, both have names, addresses, phone contacts, and so on. They both share common attributes and maybe even common behavior. You can define an abstract base class named&nbsp;<code style="font-size: 17.5px; color: rgb(232, 62, 140);">Entity</code>&nbsp;and then create two concrete classes,&nbsp;<code style="font-size: 17.5px; color: rgb(232, 62, 140);">Person</code>&nbsp;and&nbsp;<code style="font-size: 17.5px; color: rgb(232, 62, 140);">Company</code>, extended from&nbsp;<code style="font-size: 17.5px; color: rgb(232, 62, 140);">Entity</code>.</p><p style="margin-bottom: 2.5rem; font-family: &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif; font-size: 20px;">Let\'s take a step back, imagine basic PHP types, boolean, integer, float, objects and all the ways you are able to work with them. Everyone knows or at least should know, the expected behavior of those types. I mean, if you create an integer variable, you know what kind of value to expect and what kind of operations you can perform with it.</p><blockquote style="margin-bottom: 2.5rem; margin-left: -0.5rem; font-style: italic; color: rgb(77, 77, 77); padding-left: 2rem; padding-right: 2rem; border-left: 3px solid rgb(153, 153, 153); font-family: &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif; font-size: 20px;"><p style="margin-bottom: 0px;">Every type has its own stable behavior.</p></blockquote><p style="margin-bottom: 2.5rem; font-family: &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif; font-size: 20px;">A programming language cares itself about the unchangeable behavior of its essential types. The same idea applies when we are defining abstract classes and their concrete implementations.</p><h2 id="abstract-classes" style="margin-top: 4rem; margin-bottom: 1.5rem; font-family: -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;apple color emoji&quot;, &quot;segoe ui emoji&quot;, &quot;segoe ui symbol&quot;; font-weight: 700; font-size: 1.875rem;">Abstract Classes</h2><p style="margin-bottom: 2.5rem; font-family: &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif; font-size: 20px;">When extending from other classes, we are creating new&nbsp;<em>data types</em>. The code snippets below define a new child class&nbsp;<code style="font-size: 17.5px; color: rgb(232, 62, 140);">ArrayCache</code>, which&nbsp;<span style="font-weight: bolder;">is a</span>&nbsp;<code style="font-size: 17.5px; color: rgb(232, 62, 140);">AbstractCache</code>class. Thus, the child class is a specification that will inherit all of the parent\'s non-private properties and methods.&nbsp;<span style="font-weight: bolder;">The client code still expects them to behave exactly as their parent does</span>:</p>', 1, 1, '2019-05-02 07:52:17', '2019-05-06 01:32:19'),
(46, 6, NULL, NULL, NULL, 1, 'what is computer ?', 'what-is-computer', 'posts__68Pm8xLf1V8XPmZY.jpg', '<p><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif;">A&nbsp;</span><b style="color: rgb(34, 34, 34); font-family: arial, sans-serif;">computer</b><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif;">&nbsp;is a machine or device that performs processes, calculations and operations based on instructions provided by a software or hardware program.</span></p>', 1, 0, '2019-05-04 00:26:20', '2019-05-06 01:38:07'),
(47, 6, NULL, 17, NULL, 1, 'hanson robotics sophia', 'hanson-robotics-sophia-1556949816', 'posts__hRZwbj7z0sl5jSXd.jpg', '<p><span style="font-family: Lato, sans-serif; font-size: 16.16px; letter-spacing: -0.01px;">created by&nbsp;</span><a href="http://hansonrobotics.com/" target="_blank" rel="noopener" style="color: rgb(164, 161, 161); text-decoration: none; font-size: 16.16px; font-family: Lato, sans-serif; font-weight: 400; letter-spacing: -0.01px; text-shadow: none !important;">hanson robotics</a><span style="font-family: Lato, sans-serif; font-size: 16.16px; letter-spacing: -0.01px;">, ‘sophia’ the robot made her debut at the south by southwest show in march 2016 and since then has become somewhat of a media personality — having spoken at the&nbsp;</span><a href="http://www.un.org/en/index.html" target="_blank" rel="noopener" style="color: rgb(164, 161, 161); text-decoration: none; font-size: 16.16px; font-family: Lato, sans-serif; font-weight: 400; letter-spacing: -0.01px; text-shadow: none !important;">united nations</a><span style="font-family: Lato, sans-serif; font-size: 16.16px; letter-spacing: -0.01px;">&nbsp;and appeared on the&nbsp;</span><a href="https://www.nbc.com/the-tonight-show" target="_blank" rel="noopener" style="color: rgb(164, 161, 161); text-decoration: none; font-size: 16.16px; font-family: Lato, sans-serif; font-weight: 400; letter-spacing: -0.01px; text-shadow: none !important;">jimmy fallon show</a><span style="font-family: Lato, sans-serif; font-size: 16.16px; letter-spacing: -0.01px;">. she&nbsp;can animate a full range of facial expressions, and is able to track and recognize faces, look people in the eye, and hold natural conversations. in 2017,&nbsp;</span><span style="font-weight: 700; font-family: Lato, sans-serif; font-size: 16.16px; letter-spacing: -0.01px;">saudi arabia announced that it is giving citizenship to ‘sophia’, making it the first country in history to do so for a robot.&nbsp;</span><span style="font-family: Lato, sans-serif; font-size: 16.16px; letter-spacing: -0.01px;">on the achievement, ‘sophia’ had this to say, ‘</span><em style="font-family: Lato, sans-serif; font-size: 16.16px; letter-spacing: -0.01px;">I am very honored and proud for this unique distinction.&nbsp;</em><em style="font-family: Lato, sans-serif; font-size: 16.16px; letter-spacing: -0.01px;">this is historical to be the first robot in the world to be recognized with a citizenship.’</em></p>', 1, 1, '2019-05-04 00:33:36', '2019-05-06 01:39:28'),
(50, 7, NULL, 16, NULL, 1, 'Post Truth in Indian History', 'post-truth-in-indian-history-1556957296', 'posts__eJ5D6ONcesnYel62.jpg', '<div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">The Oxford dictionary word of the year was declared to be “Post Truth”. It is defined as “relating to or denoting circumstances in which objective facts are less influential in shaping public opinion than appeals to emotion and personal belief.” While the word in itself might be new, this is hardly a new phenomenon. Demagogues for time immemorial have been using Post Truths as a method to deflect dialogue and attract the attention of the masses.</div><div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">We are used to this as a phenomenon in modern India. In particular, Indian history has been the subject of many of these Post Truths. Let’s look at some of these, and then analyse them to see how they hold up against cold, hard facts.</div><div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">Post Truth’s in Indian historical studies is nothing new. In his work,&nbsp;<em style="margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">The Calling of History: Sir Jadunath Sarkar and His Empire of Truth</em>, Dipesh Chakrabarty lays bare how an eminent Indian historian, Sir Jadunath Sarkar was sidelined by the post-1947 Indian establishment for daring to be objective and Rankean in nature. A Rankean approach to historical studies comes from the German historian Leopold Van Ranke, who believed in being factual and objective in reporting history. This is as opposed to, say, Fernanad Braudel, who came from the opposing school of the Annales and believed in analyzing long-term historical movements derived from social, economic, cultural trends and not just reporting events and quoting primary sources.</div><div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">While the question of which is better is a different matter entirely, the fact remains that Jadunath Sarkar was sidelined by the establishment, specifically for daring to suggest that Aurangazeb’s religious policies explicitly targeted Hindus. The narrative then and till today has been that Aurangazeb was personally not a bigot, but he instead was shaped by the socioeconomic and political factors around him. For instance, modern historians like Athar Ali reimagine rebellions caused by religious policies (such as the Rebellion in modern day Rajasthan) as one caused by other reasons such as economic stress. Sarkar used primary source documents (Aurgangzeb’s own&nbsp;<em style="margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">firmans</em>&nbsp;or edicts) to objectively lay to the leader the evidence that Aurgangazeb was indeed a religious bigot on a personal level.</div><div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">Like the above, there are quite a few Post Truths among laypeople, perpetrated by decades of revisionist presentations of Indian history. I would like to address a few of these, especially those which can be disproved even by a layperson if only they would dig below the surface.</div><div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Indian (aka Hindu) Kingdoms crumbled to Islamic invaders without putting up a defense&nbsp;</span></div><div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;"><figure class="attachment attachment-preview" data-trix-attachment="{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:332,&quot;url&quot;:&quot;https://d1880kyc4foeg8.cloudfront.net/production/articles/f90c20d062e443c94ec8424d491b8d00.jpg&quot;,&quot;width&quot;:600}" data-trix-content-type="image" style="padding: 0px 0px 30px; border: 0px; font: inherit; vertical-align: baseline; width: 653.328px; height: auto !important;"><img src="https://d1880kyc4foeg8.cloudfront.net/production/articles/f90c20d062e443c94ec8424d491b8d00.jpg" width="600" height="332" style="margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: block; width: 653.328px; height: auto !important;"></figure></span></div><div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">This is completely devoid of any substance. The reality is that after the armies of Mohammad exploded from the deserts of Arabia, it took the Islamic armies 350 years before they would actually establish a presence in India beyond the Indus. The first conflict between an Indian King and an Islamic king took place sometime in 644-5 AD. Yet, it was not till 1000 AD and the defeat of the confederacy of the Kabul Shahis’ in the Battle of Peshawar did any Islamic army actually make it past the Indus (even here, the Shahi kingdom held sway over large parts of Afghanistan).</div><div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">Why was this so? What prevented the Islamic armies that had taken over large parts of Byzantium, all of North Africa and most of the Iberian peninsula, from conquering the Indian heartland? Simple. An active resistance by the two leading Indian empires of that era: the Chalukya and Gurjara Pratihara Empires.</div><div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">While the Arab Caliphate armies did meet with initial success, by 735 AD, their advance had been checked, with the Gurjaras going on a counter-offensive that defeated an invading Arab army. A counter-counter offensive by the Arab armies defeated the Gurjaras, but a further attack by a Chalukyan army turned the tide and the Arab armies retreated back across the Indus, where they would stay for 250 years.</div><div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">As can be seen, Indian aka Hindu armies were martially just as capable as Islamic armies. Each had its own strengths and weaknesses.</div><div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">Not just in the early stages, but even in later periods, there is ample evidence of Hindu armies being just as strong as Muslims armies, for example, Vijayanagara’s defense against the Bahamani Sultanates. It was not till the Battle of Talikota which was won not by an open force of arms, but by treachery (all is far in love and war) by getting two key Vijayanagara divisions controlled by Muslim officers to betray the Vijayanagara Army and attacked it from the rear, causing a rout.</div><div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">Shivaji famously ran a brilliant guerrilla campaign (with the occasional field battle) in which the Marathas fought against 1:100 odds and ran the Mughal empire dry and drained it of treasure and men in an endless war.</div><div style="margin: 0px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 26px; font-family: Graphik, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">As can be seen, martial valour or capability was not lacking amongst Hindu kingdoms, it was time and individual circumstances (such as Raja Hemu being felled by a stray arrow which resulted in the loss against Akbar’s army) that often determined victories or defeat.</div>', 1, 0, '2019-05-04 02:38:16', '2019-05-04 08:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reason` tinyint(2) NOT NULL COMMENT '1="It''s spam", 2=>"It''s abusive", 3=>"I am not interested", 4=>"This should not be on ForumIAS", 5="other"',
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `post_id`, `user_id`, `reason`, `description`, `created_at`, `updated_at`) VALUES
(1, 37, 6, 1, 'It\'s spam', '2019-05-01 02:46:31', '2019-05-01 02:46:31'),
(2, 37, 6, 1, 'It\'s spam', '2019-05-01 03:03:24', '2019-05-01 03:03:24'),
(3, 14, 6, 3, 'I am not interested', '2019-05-01 03:15:18', '2019-05-01 03:15:18'),
(4, 32, 6, 2, 'It\'s abusive', '2019-05-01 03:17:24', '2019-05-01 03:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `subcomments`
--

CREATE TABLE `subcomments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) DEFAULT '1' COMMENT '0=>''inactive'', 1=>''active''',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcomments`
--

INSERT INTO `subcomments` (`id`, `post_id`, `comment_id`, `user_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 25, 1, 6, 'This is test reply.......', 1, '2019-04-20 06:37:52', '2019-04-20 06:37:52'),
(2, 25, 1, 6, 'testing again', 1, '2019-04-20 06:38:58', '2019-04-20 06:38:58'),
(3, 25, 3, 7, 'Fantabolous :)', 1, '2019-04-20 07:49:32', '2019-04-20 07:49:32'),
(4, 24, 4, 7, 'neessaa', 1, '2019-04-23 01:08:24', '2019-04-23 01:08:24'),
(12, 33, 10, 6, 'What???', 1, '2019-04-24 01:12:37', '2019-04-24 01:12:37'),
(13, 33, 10, 6, 'Your question is not clear?\nPlease explain....', 1, '2019-04-24 01:13:11', '2019-04-24 01:13:11'),
(14, 37, 13, 7, 'Yes Endgame', 1, '2019-05-02 03:52:49', '2019-05-02 03:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tag_slug` varchar(255) DEFAULT NULL,
  `tag_img` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(2) NOT NULL,
  `created_by` tinyint(2) DEFAULT '0' COMMENT '0=>''admin'', 1=>''Users''',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `tag_slug`, `tag_img`, `description`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'World History', 'world-history', 'tags__atoKpdXRUnkrD6PG.png', 'World History World History', 1, 0, '2019-04-07 13:00:00', '2019-05-04 03:00:58'),
(2, 'Indian History', 'indian-history', 'tags__2fNgvX5YGtPfRnay.png', 'This article is about the history of the Indian subcontinent with India in focus prior to the partition of India in 1947. For the modern Republic of India, see History of the Republic of India. For Pakistan and Bangladesh in focus, see History of Pakistan and History of Bangladesh.\r\n"Indian history" redirects here. For history of Native Americans, see History of Native Americans in the United States.', 1, 0, '2019-04-07 13:00:00', '2019-05-04 03:04:01'),
(3, 'Art & Culture', 'art-culture', 'tags__IJznJlj81VX609og.png', 'The word culture is derived from the Latin root cultura or cultus meaning to "inhabit, cultivate, or honour". In general, culture refers to human activity; different definitions of culture reflect different theories for understanding, or criteria for valuing human activity. Present day Anthropologists use the term to refer to the universal human capacity to classify experiences and to encode and communicate them symbolically. They regard this capacity as a defining feature of the genus Homo. Since culture is learned, people living in different places have different cultures. There can be different cultures in different countries, and there can also be shared cultures among continents.\r\nThe arts are a vast subdivision of culture, composed of many creative endeavors and disciplines. It is a broader term than "art," which as a description of a field usually means only the visual arts. The arts encompasses visual arts, literary arts and the performing arts – music, theatre, dance, spoken word and film, among others.', 1, 0, '2019-04-07 23:49:49', '2019-05-04 03:04:59'),
(4, 'Ethics', 'ethics', 'tags__mjs5SSmEZl73YK4y.png', 'Ethics or moral philosophy is a branch of philosophy that involves systematizing, defending, and recommending concepts of right and wrong conduct.[1] The field of ethics, along with aesthetics, concerns matters of value, and thus comprises the branch of philosophy called axiology.[2]\r\nEthics seeks to resolve questions of human morality by defining concepts such as good and evil, right and wrong, virtue and vice, justice and crime. As a field of intellectual inquiry, moral philosophy also is related to the fields of moral psychology, descriptive ethics, and value theory.', 1, 0, '2019-04-08 06:47:40', '2019-05-04 03:05:40'),
(5, 'Economy', 'economy', 'tags__8ngUAjpjGefjvIMC.png', 'Economic activity is spurred by production which uses natural resources, labor, and capital. It has changed over time due to technology (automation, accelerator of process, reduction of cost functions), innovation (new products, services, processes, expanding markets, diversification of markets, niche markets, increases revenue functions) such as, that which produces intellectual property and changes in industrial relations (for example, child labor being replaced in some parts of the world with universal access to education).\r\nA given economy is the result of a set of processes that involves its culture, values, education, technological evolution, history, social organization, political structure and legal systems, as well as its geography, natural resource endowment, and ecology, as main factors. These factors give context, content, and set the conditions and parameters in which an economy functions. In other words, the economic domain is a social domain of human practices and transactions. It does not stand alone.', 1, 0, '2019-04-10 06:33:14', '2019-05-04 03:06:20'),
(6, 'Polity & Governance', 'polity-governance', 'tags__f3Ck2swpFgre64de.png', 'A polity is an identifiable political entity. It can be defined as any group of people who have a collective identity, who have a capacity to mobilize resources, and are organized by some form of institutionalized hierarchy.[1] A polity can be the government of a country, or country subdivision, or any other group of people organized for governance (such as a corporate board).\r\n\r\nGovernance comprises all of the processes of governing – whether undertaken by the government of a state, by a market or by a network – over a social system (family, tribe, formal or informal organization, a territory or across territories) and whether through the laws, norms, power or language of an organized society.[1] It relates to "the processes of interaction and decision-making among the actors involved in a collective problem that lead to the creation, reinforcement, or reproduction of social norms and institutions".[2] In lay terms, it could be described as the political processes that exist in and between formal institutions.', 1, 0, '2019-04-10 06:33:24', '2019-05-04 03:07:10'),
(7, 'International Relations', 'international-relations', 'tags__Ohw8XR4TghMD0ohx.png', 'International relations (IR) or international affairs (IA) — commonly also referred to as international studies (IS), global studies (GS), or global affairs (GA) — is the study of interconnectedness of politics, economics and law on a global level. Depending on the academic institution, it is either a field of political science, an interdisciplinary academic field similar to global studies, or an entirely independent academic discipline in which students take a variety of internationally focused courses in social science and humanities disciplines. In all cases, the field studies relationships between political entities (polities) such as sovereign states, inter-governmental organizations (IGOs), international non-governmental organizations (INGOs), other non-governmental organizations (NGOs), and multinational corporations (MNCs), and the wider world-systems produced by this interaction. International relations is an academic and a public policy field, and so can be positive and normative, because it analyses and formulates the foreign policy of a given state.', 1, 0, '2019-04-10 06:34:55', '2019-05-04 03:07:23'),
(8, 'Exam Strategy', 'exam-strategy', 'tags__gnlqID7hqylQXOpz.png', 'A test strategy is an outline that describes the testing approach of the software development cycle. It is created to inform project managers, testers, and developers about some key issues of the testing process. This includes the testing objective, methods of testing new functions, total time and resources required for the project, and the testing environment.\r\n\r\nTest strategies describe how the product risks of the stakeholders are mitigated at the test-level, which types of testing are to be performed, and which entry and exit criteria apply. They are created based on development design documents. System design documents are primarily used, and occasionally conceptual design documents may be referred to. Design documents describe the functionality of the software to be enabled in the upcoming release. For every stage of development design, a corresponding test strategy should be created to test the new feature sets.', 1, 0, '2019-04-10 06:35:18', '2019-05-04 03:07:35'),
(9, 'Results & Speculation', 'results-speculation', 'tags__ep177WbYkxCkdIEy.png', 'Speculation is the purchase of an asset (a commodity, goods, or real estate) with the hope that it will become more valuable in the near future. In finance, speculation is also the practice of engaging in risky financial transactions in an attempt to profit from short term fluctuations in the market value of a tradable financial instrument—rather than attempting to profit from the underlying financial attributes embodied in the instrument such as capital gains, dividends, or interest.\r\n\r\nMany speculators pay little attention to the fundamental value of a security and instead focus purely on price movements. Speculation can in principle involve any tradable good or financial instrument. Speculators are particularly common in the markets for stocks, bonds, commodity futures, currencies, fine art, collectibles, real estate, and derivatives.\r\n\r\nSpeculators play one of four primary roles in financial markets, along with hedgers, who engage in transactions to offset some other pre-existing risk, arbitrageurs who seek to profit from situations where fungible instruments trade at different prices in different market segments, and investors who seek profit through long-term ownership of an instrument\'s underlying attributes.', 1, 0, '2019-04-10 06:35:26', '2019-05-04 03:07:48'),
(10, 'Exam Alert', 'exam-alert', 'tags__NbuRB2crVqg1FHtR.png', 'Alert messaging (or alert notification) is machine-to-person communication that is important or time sensitive. An alert may be a calendar reminder or a notification of a new message.\r\n\r\nAlert messaging emerged from the study of personal information management (PIM),[citation needed] the science of discovering how people perform certain tasks to acquire, organize, maintain, retrieve and use information relevant to them. Alert notification is a natural evolution of the concept of RSS[citation needed] which makes it possible for people to keep up with web sites in an automated manner. Alerting makes it possible for people to keep up with the information that matters most to them.\r\n\r\nAlerts are typically delivered through a notification system and the most common application of the service is machine-to-person communication. Very basic services provide notification services via email or SMS. More advanced systems (for example AOL) provides users with the choice of selecting a preferred delivery channel such as e-mail, Short Message Service (SMS), instant messaging (IM), via voice through voice portals, desktop alerts and more. Novel approaches provide users with the ability to schedule their own alerts (for example Google Calendar). The most sophisticated service providers embrace all capabilities, aggregating a multitude of reminder, notifications and alert, catering the delivery system to the specific context of the content being delivered thus enabling users to create sophisticated scenarios.', 1, 0, '2019-04-10 06:35:50', '2019-05-04 03:08:00'),
(11, 'IBPS', 'ibps', 'tags__4rE9uylb1rQ0kMP6.png', 'The Institute of Banking Personnel Selection (IBPS) is a recruitment body that was started with an aim to encourage the recruitment and placement of young graduates in public sector banks in India, other than the State Bank of India. It also provides standardised systems for assessment and result processing services to organisations.', 1, 0, '2019-04-10 06:36:02', '2019-05-04 03:08:12'),
(12, 'ForumIAS', 'forumias', 'tags__s2en63gDXJb1ENGb.png', 'ForumIAS.com is India’s most popular platform for Civil Services Examination & Indian Forest Service Examination preparation.\r\nForumIAS was founded in 2012, in a small room in New Delhi for the internal use of its ‘inmates’.\r\nThose inmates today serve at various levels in the government, private sector and at ForumIAS.\r\nMore than 3500+ ForumIAS Members today serve in India and her missions abroad.', 1, 0, '2019-04-10 06:36:21', '2019-05-03 04:52:59'),
(13, 'SSC', 'ssc', 'tags__5vSfMmW6wJCvktRm.png', 'Staff Selection Commission (SSC) is an organisation under Government of India to recruit staff for various posts in the various Ministries and Departments of the Government of India and in Subordinate Offices\r\n\r\nThis commission is an attached office of the Department of Personnel and Training (DoPT) which consists of Chairman, two Members and a Secretary-cum-Controller of Examinations. His post is equivalent to the level of Additional Secretary to the Government of India.\r\n\r\nThe Estimates committee in the Parliament recommended the setting up of a Service Selection Commission in its 47th report (1967–68) for conducting examinations to recruit lower categories of posts. Later, in the Department of Personnel and Administrative Reforms, on 4 November 1975 Government of India constituted a commission called Subordinate Service Commission. On 26 September 1977, Subordinate Services Commission was renamed as Staff Selection Commission. The functions of Staff Selection Commission were redefined by The Government of India through Ministry of Personnel, Public Grievances and on 21 May 1999. Then the new constitution and functions of Staff Selection Commission came into effect from 1 June 1999. Every year SSC conducts the SSC Combined Graduate Level Examination for recruiting non-gazetted officers to various government jobs.', 1, 0, '2019-04-10 06:36:56', '2019-05-04 03:08:25'),
(14, 'State PCS', 'state-pcs', 'tags__c4RUZ4CF3IvNBtcM.png', 'Articles 315 to 323 in Part XIV[1] of the Constitution of India provides for the establishment of Public Service Commission for the Union and a Public Service Commission for each State. The same set of Articles (i.e., 315 to 323 in Part XIV) of the Constitution also deal with the composition, appointment and removal of members,power and functions and independence of a Public Service Commission. Union Public Service Commission to conduct examinations for recruitment to all India services and higher Central services and to advise the President on disciplinary matters. State Public Service Commission in every state to conduct examinations for recruitment to state services and to advise the governor on disciplinary matters.', 1, 0, '2019-04-10 06:49:24', '2019-05-04 03:08:37'),
(16, 'polity', 'polity', 'tags__4Dr4vtGDlgnBB3ta.png', 'polity polity', 1, 0, '2019-04-10 06:50:07', '2019-04-29 07:41:40'),
(17, 'neyawn', 'neyawn', 'tags__dmgnFucTK5ZOSGM1.jpg', 'neyawn', 1, 0, '2019-04-10 07:36:32', '2019-04-29 07:40:49'),
(19, 'upsc', 'upsc', NULL, '', 1, 1, '2019-04-18 09:04:31', '2019-05-02 07:00:13'),
(20, 'elections', 'elections', NULL, '', 1, 1, '2019-04-29 00:26:11', '2019-05-02 07:00:06'),
(21, 'avenger', 'avenger', NULL, '', 1, 1, '2019-04-29 07:47:13', '2019-05-02 06:59:57'),
(22, 'savetheworld', 'savetheworld', NULL, '', 1, 1, '2019-05-01 23:24:27', '2019-05-02 06:59:49'),
(23, 'This is fine or not?', 'this-is-fine-or-not', NULL, '', 1, 1, '2019-05-02 03:37:21', '2019-05-02 03:37:21'),
(24, 'science_and_tech', 'science-and-tech', NULL, '', 1, 1, '2019-05-02 07:01:57', '2019-05-02 07:01:57'),
(25, 'js', 'js', NULL, '', 1, 1, '2019-05-02 07:49:26', '2019-05-02 07:49:26'),
(26, 'coding', 'coding', NULL, '', 1, 1, '2019-05-02 07:52:16', '2019-05-02 07:52:16'),
(27, 'js', 'js', NULL, '', 1, 1, '2019-05-02 07:52:47', '2019-05-02 07:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auth_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1=>''admin'', 2=>''front user''',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(2) DEFAULT '1' COMMENT '0=>''Inactive'', 1=>''Active''',
  `onboarding` tinyint(2) DEFAULT '0' COMMENT '0=>''Incomplete'', 1=>''completed''',
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `auth_id`, `token`, `type`, `name`, `image`, `full_name`, `email`, `status`, `onboarding`, `about`, `mobile_number`, `roll_number`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 1, 'admin', 'http://vanillicon.com/v2/0889ef57aeb3918dc1a905ee598ba72b.svg', 'admin', 'chandan111@stellardigital.in', 1, 0, NULL, NULL, NULL, NULL, '$2y$10$Y6/gqP3Kh7GPvt.ixd96fe6P7xjNsxWfmBesYn2YGrjCWgTzn15BO', 'udJKIZcBGmTqYqqgnUfQzLcQ0wFmMI2PYcH0aAFYAGOUDgXA5kXNtacvuy9w', '2019-04-06 02:00:37', '2019-04-06 02:00:37'),
(6, 46009, '127868b9556d0b73282ae4585eb3c66a', 2, 'chandan', 'http://vanillicon.com/8de2392f24aedcb3f49bc569c0b1f096_100.png', 'chandan Kushwaha', 'chandan@stellardigital.in', 1, 1, 'Sr. Software Engineer', '7840057432', '1910045908', NULL, '$2y$10$On4a6ZnZjRa5aKI2AR0rbeexfuQkIuy6QWH046cH9M941InF2hGIK', NULL, '2019-04-13 00:19:50', '2019-05-03 23:46:17'),
(7, 593, '127868b9556d0b73282ae4585eb3c66a', 2, 'jack_Sparrow', 'https://one.forumias.com/images/tmp/avatar_593.png', 'Divyesh Joshi', 'divyesh@stellardigital.in', 1, 1, 'Sr. Software Engineer', '9958028909', '1910000593', NULL, '$2y$10$S9K4BgiECiVFn4iMO3XbXOtdPZWUBiSTitlsIfkFg5ZhshyjKP3fK', NULL, '2019-04-17 04:41:15', '2019-05-06 03:33:32'),
(8, 3454, 'jkdsh8944', 2, 'ajay', 'http://vanillicon.com/v2/6d3e74407007ae4f9152a7c65bcf8125.svg', 'Ajay Jain', 'ajay1256@mailinator.com', 1, 0, 'Mentor ', '873243746333', '9837438746', '2019-04-16 18:30:00', '$2y$10$On4a6ZnZjRa5aKI2AR0rbeexfuQkIuy6QWH046cH9M941InF2hGIK', NULL, '2019-04-16 18:30:00', '2019-04-16 18:30:00'),
(9, 98343, 'sdjkfh987ry87', 2, 'Testing', 'http://vanillicon.com/v2/c7291f7538ebff12f542701553755c40.svg', 'Testing Team', 'testingteam998@mailinator.com', 1, 0, 'Test Engineer', '9384754734', '938475475674', '2019-04-16 18:30:00', '$2y$10$On4a6ZnZjRa5aKI2AR0rbeexfuQkIuy6QWH046cH9M941InF2hGIK', NULL, '2019-04-16 18:30:00', '2019-04-16 18:30:00'),
(10, 8089, '26b5a92e2e948174a2dd085810fada38', 2, 'root', 'http://vanillicon.com/5ec447ade412fe06fcfdab0f8d2f1c69_100.png', 'Ayush Sinha', 'ayush@forumias.academy', 1, 1, 'CEO and Founder', '7070700521', '1910008089', NULL, '$2y$10$TDsqkgl.yHS7OtAahVJG1.9fW3q/w1ydKY4FBHey3QnWIZOCBd.gi', NULL, '2019-04-18 09:02:26', '2019-05-02 07:59:48'),
(11, 965444, 'dsfdsdsfdsf', 2, 'Raghav', 'http://vanillicon.com/v2/458b1b3604d78884b97d8363d6ffeba5.svg', 'Raghav', 'raghav12@mailinator.com', 1, 0, 'Student', '965765656', '9384758454', NULL, '$2y$10$On4a6ZnZjRa5aKI2AR0rbeexfuQkIuy6QWH046cH9M941InF2hGIK', NULL, '2019-04-24 18:30:00', '2019-04-24 18:30:00'),
(12, 8655434, 'shdgfd7fdshfgdfj', 2, 'sahil', 'http://vanillicon.com/v2/30b8eacf1bbeff1ccbd8bec8648c0fc6.svg', 'sahil singh', 'sahil121@gmail.com', 1, 0, NULL, '96786574', '934857435', NULL, '$2y$10$On4a6ZnZjRa5aKI2AR0rbeexfuQkIuy6QWH046cH9M941InF2hGIK', NULL, '2019-04-24 18:30:00', '2019-04-24 18:30:00'),
(13, 42, '136f457ec4d76d0b967f216460302806', 2, 'ShantanuA', 'https://one.forumias.com/images/tmp/null', 'S A', 'shantanu@forumias.academy', 1, 1, NULL, '8800631116', '1910000042', NULL, '$2y$10$.ThxK/Ys9n2X1YrNToG9tOVHKoRxBwyJJoICKzpacjO3UVP26dzQm', NULL, '2019-05-02 03:58:57', '2019-05-06 01:54:41'),
(14, 45885, '00cbb4bd6d2d74da3c6172237876dec8', 2, 'IWRA', 'http://vanillicon.com/fd8cd6c01f6f1b239cdec9c5d82b81ed_100.png', 'SUMIT KUMAR RAI', 'pinkmanww@zoho.com', 1, 1, NULL, '7982593113', '1910045784', NULL, '$2y$10$9ng3u8FxQdtYsEGi86ahVORJKOtX7HZNMiLJ9V86/JBV0DjD9KmP2', NULL, '2019-05-02 06:08:16', '2019-05-02 06:08:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polloptions`
--
ALTER TABLE `polloptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcomments`
--
ALTER TABLE `subcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `polloptions`
--
ALTER TABLE `polloptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subcomments`
--
ALTER TABLE `subcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
