-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2018 at 10:59 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okdate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `site_name` varchar(255) NOT NULL,
  `site_tagline` varchar(255) NOT NULL,
  `site_description` mediumtext NOT NULL,
  `site_tags` mediumtext NOT NULL,
  `site_analytics` mediumtext NOT NULL,
  `site_age_limit` int(11) NOT NULL DEFAULT '0',
  `bgcolor_navbar` varchar(10) NOT NULL,
  `textcolor_navbar` varchar(10) NOT NULL,
  `bgcolor_main` varchar(10) NOT NULL,
  `main_block_color` varchar(100) NOT NULL,
  `main_txt_color` varchar(100) NOT NULL,
  `f_txt_color` varchar(100) NOT NULL,
  `s_txt_color` varchar(100) NOT NULL,
  `s_third_color` varchar(100) NOT NULL,
  `f_bg_color` varchar(100) NOT NULL,
  `s_bg_color` varchar(100) NOT NULL,
  `logo_color` varchar(100) NOT NULL,
  `web_captcha` int(11) NOT NULL DEFAULT '1',
  `enable_payments` int(11) NOT NULL DEFAULT '1',
  `enable_forum` int(11) NOT NULL DEFAULT '0',
  `fb_url` varchar(255) NOT NULL,
  `twitter_url` varchar(255) NOT NULL,
  `instagram_url` varchar(255) NOT NULL,
  `googleplus_url` varchar(255) NOT NULL,
  `ads_code` mediumtext NOT NULL,
  `inapp_price` double NOT NULL,
  `paypal_api_username` varchar(255) NOT NULL,
  `paypal_api_pw` varchar(255) NOT NULL,
  `paypal_api_sign` varchar(255) NOT NULL,
  `stripe_secret_key` varchar(255) NOT NULL,
  `stripe_pub_key` varchar(255) NOT NULL,
  `paygol_service_id` int(11) NOT NULL,
  `paygol_service_name` varchar(255) NOT NULL,
  `see_who_loves_you_price` int(11) NOT NULL DEFAULT '100',
  `browse_invisibly_price` int(11) NOT NULL DEFAULT '150',
  `featured_one_week_price` int(11) NOT NULL DEFAULT '100',
  `featured_one_month_price` int(11) NOT NULL DEFAULT '300',
  `default_language` varchar(255) NOT NULL DEFAULT 'english',
  `upload_limit` int(11) NOT NULL DEFAULT '0',
  `currency` varchar(10) NOT NULL,
  `hide_country` int(11) NOT NULL,
  `hide_timeline` int(11) NOT NULL,
  `user_extra_fields` mediumtext NOT NULL,
  `online_delay` int(11) NOT NULL,
  `from_email` varchar(255) NOT NULL DEFAULT 'noreply@example.com',
  `app_ios` varchar(255) DEFAULT NULL,
  `app_android` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`site_name`, `site_tagline`, `site_description`, `site_tags`, `site_analytics`, `site_age_limit`, `bgcolor_navbar`, `textcolor_navbar`, `bgcolor_main`, `main_block_color`, `main_txt_color`, `f_txt_color`, `s_txt_color`, `s_third_color`, `f_bg_color`, `s_bg_color`, `logo_color`, `web_captcha`, `enable_payments`, `enable_forum`, `fb_url`, `twitter_url`, `instagram_url`, `googleplus_url`, `ads_code`, `inapp_price`, `paypal_api_username`, `paypal_api_pw`, `paypal_api_sign`, `stripe_secret_key`, `stripe_pub_key`, `paygol_service_id`, `paygol_service_name`, `see_who_loves_you_price`, `browse_invisibly_price`, `featured_one_week_price`, `featured_one_month_price`, `default_language`, `upload_limit`, `currency`, `hide_country`, `hide_timeline`, `user_extra_fields`, `online_delay`, `from_email`, `app_ios`, `app_android`) VALUES
('OKDate', 'Website Tagline', 'Website Description', 'Website Keywords', '', 0, '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1, 'https://www.facebook.com/hardy.axel?ref=bookmarks', 'http://twitter.com/fraxool', '', 'https://plus.google.com/103841012435165031166/posts', '', 1.5, '', '', '', '', '', 0, '', 100, 150, 100, 300, 'english', 0, '', 0, 0, 'test', 0, 'noreply@example.com', NULL, NULL),
('OKDate', 'Website Tagline', 'Website Description', 'Website Keywords', '', 0, '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1, '', '', '', '', '', 0, '', '', '', '', '', 0, '', 100, 150, 100, 300, 'english', 0, '', 0, 0, 'test', 0, 'noreply@example.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `id` int(3) UNSIGNED NOT NULL,
  `question` varchar(60) NOT NULL DEFAULT '',
  `answer` varchar(15) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`id`, `question`, `answer`) VALUES
(4, 'How much is fourteen minus five ?', '9'),
(3, 'How much is ten minus four ?', '6'),
(2, 'How much is eight more four ?', '12'),
(1, 'How much is one more six ?', '7'),
(5, 'How much is six more five ?', '11'),
(6, 'How much is four minus three ?', '1'),
(7, 'How much is three minus one ?', '2');

-- --------------------------------------------------------

--
-- Table structure for table `chatroom_chats`
--

CREATE TABLE `chatroom_chats` (
  `id` int(11) UNSIGNED NOT NULL,
  `content` mediumtext,
  `topic_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chatroom_topics`
--

CREATE TABLE `chatroom_topics` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `date` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `last_answer_id` int(11) DEFAULT NULL,
  `last_answer_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `sticky` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `coin`
--

CREATE TABLE `coin` (
  `id` int(11) NOT NULL,
  `nb` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coin`
--

INSERT INTO `coin` (`id`, `nb`, `price`) VALUES
(1, 100, 2),
(2, 500, 6),
(3, 1000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `custom_page`
--

CREATE TABLE `custom_page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `icon` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `welcome_enable` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_answers`
--

CREATE TABLE `forum_answers` (
  `id` int(11) UNSIGNED NOT NULL,
  `content` mediumtext,
  `topic_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `forum_categories`
--

CREATE TABLE `forum_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desc` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics`
--

CREATE TABLE `forum_topics` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `date` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `last_answer_id` int(11) DEFAULT NULL,
  `last_answer_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `sticky` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- --------------------------------------------------------

--
-- Table structure for table `friend_notif`
--

CREATE TABLE `friend_notif` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `seen` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `language_redirection`
--

CREATE TABLE `language_redirection` (
  `id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `matchs_like`
--

CREATE TABLE `matchs_like` (
  `id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `status` varchar(150) NOT NULL,
  `like_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(20160325131840);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) UNSIGNED NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `thumb_url` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `votes` int(11) DEFAULT '0',
  `comments` int(11) DEFAULT '0',
  `views` int(11) DEFAULT '0',
  `text` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photo_comment`
--

CREATE TABLE `photo_comment` (
  `id` int(11) UNSIGNED NOT NULL,
  `date` datetime DEFAULT NULL,
  `content` mediumtext,
  `user_id` int(11) DEFAULT NULL,
  `photo_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photo_vote`
--

CREATE TABLE `photo_vote` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pm_conv`
--

CREATE TABLE `pm_conv` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `last_answer_date` datetime NOT NULL,
  `nb_messages` int(11) NOT NULL,
  `is_read_sender` int(11) NOT NULL,
  `is_read_recipient` int(11) NOT NULL DEFAULT '0',
  `last_answer_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `pm_email_notif`
--

CREATE TABLE `pm_email_notif` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `pm_message`
--

CREATE TABLE `pm_message` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `content` mediumtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `conv_id` int(11) NOT NULL,
  `read` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) UNSIGNED NOT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `from_user_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `encrypt_id` varchar(255) DEFAULT NULL,
  `register_date` datetime DEFAULT NULL,
  `last_login_date` datetime DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `banned` int(11) DEFAULT NULL,
  `banned_reason` mediumtext,
  `first_step_form` int(11) DEFAULT '0',
  `status` int(11) DEFAULT NULL,
  `valid_snapchat` int(11) DEFAULT '0',
  `introduced_forum` int(11) DEFAULT '0',
  `shared_snapals` int(11) DEFAULT '0',
  `referer` varchar(255) DEFAULT NULL,
  `allow_social_featuring` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `fb_id` bigint(20) DEFAULT NULL,
  `rate_app_status` int(11) DEFAULT NULL,
  `last_activity_date` datetime DEFAULT NULL,
  `is_fake` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_action`
--

CREATE TABLE `user_action` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` mediumtext,
  `date` datetime DEFAULT NULL,
  `from_user_id` int(11) DEFAULT NULL,
  `to_user_id` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--
-- Table structure for table `user_block`
--

CREATE TABLE `user_block` (
  `id` int(11) UNSIGNED NOT NULL,
  `from_user_id` int(11) DEFAULT NULL,
  `to_user_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_coin`
--

CREATE TABLE `user_coin` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nb_coins` int(11) NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_custom_field`
--

CREATE TABLE `user_custom_field` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `attr_name` varchar(255) NOT NULL,
  `attr_val` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_featured`
--

CREATE TABLE `user_featured` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `purchase_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_friend`
--

CREATE TABLE `user_friend` (
  `id` int(11) UNSIGNED NOT NULL,
  `from_user_id` int(11) DEFAULT NULL,
  `to_user_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `seen` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) UNSIGNED NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `about` mediumtext,
  `main_photo` int(11) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `relation_type` varchar(30) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `app_pref_pm` int(11) DEFAULT NULL,
  `browse_invisibly` int(11) DEFAULT '0',
  `interested_in` int(11) NOT NULL,
  `language_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `user_love`
--

CREATE TABLE `user_love` (
  `id` int(11) UNSIGNED NOT NULL,
  `from_user_id` int(11) DEFAULT NULL,
  `to_user_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `viewed` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `user_password_recovery`
--

CREATE TABLE `user_password_recovery` (
  `id` int(11) UNSIGNED NOT NULL,
  `encrypt_id` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_visit`
--

CREATE TABLE `user_profile_visit` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `viewed` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `user_purchase`
--

CREATE TABLE `user_purchase` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `purchase_name` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `welcome_message`
--

CREATE TABLE `welcome_message` (
  `id` int(11) NOT NULL,
  `text` mediumtext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `captcha_question` (`question`);

--
-- Indexes for table `chatroom_chats`
--
ALTER TABLE `chatroom_chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatroom_topics`
--
ALTER TABLE `chatroom_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `coin`
--
ALTER TABLE `coin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_page`
--
ALTER TABLE `custom_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_answers`
--
ALTER TABLE `forum_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_categories`
--
ALTER TABLE `forum_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_notif`
--
ALTER TABLE `friend_notif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_redirection`
--
ALTER TABLE `language_redirection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matchs_like`
--
ALTER TABLE `matchs_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `photo_comment`
--
ALTER TABLE `photo_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_vote`
--
ALTER TABLE `photo_vote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pm_conv`
--
ALTER TABLE `pm_conv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipient_id` (`recipient_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `relationship_conv_from_to` (`sender_id`,`recipient_id`);

--
-- Indexes for table `pm_email_notif`
--
ALTER TABLE `pm_email_notif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pm_message`
--
ALTER TABLE `pm_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `conv_id` (`conv_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_action`
--
ALTER TABLE `user_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_block`
--
ALTER TABLE `user_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_coin`
--
ALTER TABLE `user_coin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_custom_field`
--
ALTER TABLE `user_custom_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_featured`
--
ALTER TABLE `user_featured`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_friend`
--
ALTER TABLE `user_friend`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_user_id` (`from_user_id`),
  ADD KEY `to_user_id` (`to_user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `main_photo` (`main_photo`);

--
-- Indexes for table `user_love`
--
ALTER TABLE `user_love`
  ADD PRIMARY KEY (`id`),
  ADD KEY `to_user_id` (`to_user_id`),
  ADD KEY `from_user_id` (`from_user_id`),
  ADD KEY `relationship_to_from` (`to_user_id`,`from_user_id`);

--
-- Indexes for table `user_password_recovery`
--
ALTER TABLE `user_password_recovery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile_visit`
--
ALTER TABLE `user_profile_visit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `relationship_to_from_visits` (`user_id`,`profile_id`);

--
-- Indexes for table `user_purchase`
--
ALTER TABLE `user_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome_message`
--
ALTER TABLE `welcome_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `chatroom_chats`
--
ALTER TABLE `chatroom_chats`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chatroom_topics`
--
ALTER TABLE `chatroom_topics`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `coin`
--
ALTER TABLE `coin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `custom_page`
--
ALTER TABLE `custom_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum_answers`
--
ALTER TABLE `forum_answers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `forum_categories`
--
ALTER TABLE `forum_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `forum_topics`
--
ALTER TABLE `forum_topics`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `friend_notif`
--
ALTER TABLE `friend_notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `language_redirection`
--
ALTER TABLE `language_redirection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matchs_like`
--
ALTER TABLE `matchs_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photo_comment`
--
ALTER TABLE `photo_comment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photo_vote`
--
ALTER TABLE `photo_vote`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pm_conv`
--
ALTER TABLE `pm_conv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pm_email_notif`
--
ALTER TABLE `pm_email_notif`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pm_message`
--
ALTER TABLE `pm_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `user_action`
--
ALTER TABLE `user_action`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_block`
--
ALTER TABLE `user_block`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_coin`
--
ALTER TABLE `user_coin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_custom_field`
--
ALTER TABLE `user_custom_field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_featured`
--
ALTER TABLE `user_featured`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_friend`
--
ALTER TABLE `user_friend`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `user_love`
--
ALTER TABLE `user_love`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user_password_recovery`
--
ALTER TABLE `user_password_recovery`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_profile_visit`
--
ALTER TABLE `user_profile_visit`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user_purchase`
--
ALTER TABLE `user_purchase`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `welcome_message`
--
ALTER TABLE `welcome_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
