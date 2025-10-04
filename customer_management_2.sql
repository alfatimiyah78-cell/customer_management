-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 04, 2025 at 06:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_management_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `acs`
--

CREATE TABLE `acs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `host` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `port` bigint(20) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acs`
--

INSERT INTO `acs` (`id`, `slug`, `name`, `host`, `username`, `password`, `port`, `disabled`, `description`, `created_at`, `updated_at`) VALUES
(1, 'acs1', 'Acs', NULL, NULL, NULL, NULL, 0, NULL, '2025-10-04 15:22:21', '2025-10-04 15:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `auto_isolirs`
--

CREATE TABLE `auto_isolirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mikrotik_id` bigint(20) UNSIGNED NOT NULL,
  `profile_id` varchar(255) DEFAULT NULL,
  `script_id` varchar(255) DEFAULT NULL,
  `schedule_id` varchar(255) DEFAULT NULL,
  `address_list_isolir` varchar(255) DEFAULT NULL,
  `activation_date` tinyint(1) NOT NULL DEFAULT 0,
  `due_date` varchar(255) DEFAULT NULL,
  `nat_id` varchar(255) DEFAULT NULL,
  `nat_dst_address` varchar(255) DEFAULT NULL,
  `nat_src_address_list` varchar(255) DEFAULT NULL,
  `nat_dst_address_list` varchar(255) DEFAULT NULL,
  `proxy_access_id` varchar(255) DEFAULT NULL,
  `proxy_access_src_address` varchar(255) DEFAULT NULL,
  `proxy_access_action_data` varchar(255) DEFAULT NULL,
  `proxy_access_action` enum('redirect','deny','allow') NOT NULL DEFAULT 'deny',
  `firewall_filter_id` varchar(255) NOT NULL DEFAULT '0',
  `disabled` tinyint(1) NOT NULL DEFAULT 1,
  `run_isolir_with` enum('mikrotik','cm') NOT NULL DEFAULT 'mikrotik',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auto_isolirs`
--

INSERT INTO `auto_isolirs` (`id`, `slug`, `name`, `mikrotik_id`, `profile_id`, `script_id`, `schedule_id`, `address_list_isolir`, `activation_date`, `due_date`, `nat_id`, `nat_dst_address`, `nat_src_address_list`, `nat_dst_address_list`, `proxy_access_id`, `proxy_access_src_address`, `proxy_access_action_data`, `proxy_access_action`, `firewall_filter_id`, `disabled`, `run_isolir_with`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'hallonet-jdx6b', 'hallonet', 1, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'deny', '0', 1, 'mikrotik', '2025-10-04 16:31:01', '2025-10-04 16:33:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_pakets`
--

CREATE TABLE `customer_pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `paket_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `discount` int(11) NOT NULL DEFAULT 0,
  `internet_service_id` bigint(20) UNSIGNED NOT NULL,
  `renewal_period` enum('monthly','bimonthly','quarterly','semi-annually','annually') NOT NULL,
  `auto_renew` tinyint(1) NOT NULL DEFAULT 1,
  `status` enum('active','suspended','cancelled','expired','pending') NOT NULL DEFAULT 'pending',
  `activation_date` date DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `expired_date` date DEFAULT NULL,
  `paylater_date` date DEFAULT NULL,
  `last_billed_at` timestamp NULL DEFAULT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_pakets`
--

INSERT INTO `customer_pakets` (`id`, `slug`, `user_id`, `paket_id`, `price`, `discount`, `internet_service_id`, `renewal_period`, `auto_renew`, `status`, `activation_date`, `start_date`, `expired_date`, `paylater_date`, `last_billed_at`, `online`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2-1', 2, 1, 2000, 10, 1, 'monthly', 1, 'active', NULL, '2025-10-07', '2025-11-07', NULL, '2025-09-29 17:00:00', 0, '2025-10-04 16:51:28', '2025-10-04 16:52:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_paket_addresses`
--

CREATE TABLE `customer_paket_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_paket_id` bigint(20) UNSIGNED NOT NULL,
  `address_type` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `subdistrict` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `wa_notification` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_paket_addresses`
--

INSERT INTO `customer_paket_addresses` (`id`, `customer_paket_id`, `address_type`, `address`, `subdistrict`, `district`, `city`, `province`, `country`, `phone`, `wa_notification`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'installation-address', 'Kp. Pabuaran Kaum Rt 003/002 Desa Cibanteng', '{\"id\":\"9466\",\"text\":\"Cibanteng\"}', '{\"id\":\"843\",\"text\":\"Ciampea\"}', '{\"id\":\"69\",\"text\":\"Kabupaten Bogor\"}', '{\"id\":\"9\",\"text\":\"Jawa Barat\"}', 'id', '6289671627781', 1, '2025-10-04 16:51:28', '2025-10-04 16:51:28', NULL),
(2, 1, 'billing-address', 'Kp. Pabuaran Kaum Rt 003/002 Desa Cibanteng', '{\"id\":\"9466\",\"text\":\"Cibanteng\"}', '{\"id\":\"843\",\"text\":\"Ciampea\"}', '{\"id\":\"69\",\"text\":\"Kabupaten Bogor\"}', '{\"id\":\"9\",\"text\":\"Jawa Barat\"}', 'id', '6289671627781', 1, '2025-10-04 16:51:28', '2025-10-04 16:51:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_ppp_pakets`
--

CREATE TABLE `customer_ppp_pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `customer_paket_id` bigint(20) UNSIGNED NOT NULL,
  `secret_id` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password_ppp` varchar(255) DEFAULT NULL,
  `ppp_type_id` bigint(20) UNSIGNED NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_ppp_pakets`
--

INSERT INTO `customer_ppp_pakets` (`id`, `slug`, `customer_paket_id`, `secret_id`, `username`, `password_ppp`, `ppp_type_id`, `online`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'imam', 1, NULL, 'imam', '7d448d', 5, 0, '2025-10-04 16:51:28', '2025-10-04 16:51:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_static_pakets`
--

CREATE TABLE `customer_static_pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `customer_paket_id` bigint(20) UNSIGNED NOT NULL,
  `simpleque_id` varchar(255) DEFAULT NULL,
  `simpleque_name` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `mac_address` varchar(255) DEFAULT NULL,
  `interface` varchar(255) DEFAULT NULL,
  `arp_id` varchar(255) DEFAULT NULL,
  `address_list_id` varchar(255) DEFAULT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `general_logs`
--

CREATE TABLE `general_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_type` varchar(255) NOT NULL,
  `log_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`log_data`)),
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_logs`
--

INSERT INTO `general_logs` (`id`, `log_type`, `log_data`, `author`, `created_at`, `updated_at`) VALUES
(1, 'create_invoice', '[{\"user_id\":2,\"log_history\":\"Imam Mudin Create invoice October 2025\"}]', 'Izhar ', '2025-10-04 16:51:28', '2025-10-04 16:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `internet_services`
--

CREATE TABLE `internet_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internet_services`
--

INSERT INTO `internet_services` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'PPP', 'ppp', '2025-10-04 15:22:20', '2025-10-04 15:22:20'),
(2, 'IP Static', 'ip_static', '2025-10-04 15:22:20', '2025-10-04 15:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_customer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_paket_id` bigint(20) UNSIGNED NOT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `issue_date` date NOT NULL,
  `periode` date NOT NULL,
  `start_periode` date DEFAULT NULL,
  `end_periode` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `tax` int(11) NOT NULL DEFAULT 0,
  `discount` int(11) NOT NULL DEFAULT 0,
  `status` enum('pending','process','paid','overdue','partially_paid','refunded') NOT NULL,
  `sent_at` timestamp NULL DEFAULT NULL,
  `viewed_at` timestamp NULL DEFAULT NULL,
  `paid_at` timestamp NULL DEFAULT NULL,
  `status_history` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`status_history`)),
  `upcoming_reminder_sent` tinyint(1) DEFAULT NULL,
  `reminder_count` int(11) DEFAULT NULL,
  `last_reminder_date` timestamp NULL DEFAULT NULL,
  `invoice_path` varchar(2048) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `user_customer_id`, `customer_paket_id`, `invoice_number`, `issue_date`, `periode`, `start_periode`, `end_periode`, `due_date`, `amount`, `tax`, `discount`, `status`, `sent_at`, `viewed_at`, `paid_at`, `status_history`, `upcoming_reminder_sent`, `reminder_count`, `last_reminder_date`, `invoice_path`, `notes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'INV-0410202568E15090C8937', '2025-10-04', '2025-10-01', '2025-10-07', '2025-11-07', '2025-10-07', 2000, 219, 10, 'paid', NULL, NULL, '2025-10-04 16:52:00', NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-04 16:51:28', '2025-10-04 16:52:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE `invoice_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_items`
--

INSERT INTO `invoice_items` (`id`, `invoice_id`, `item`, `price`, `discount`, `tax`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '10Mpromo - 04 October 2025 - 04 October 2025', 2000.00, 10.00, 218.90, '2025-10-04 16:51:28', '2025-10-04 16:51:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_templates`
--

CREATE TABLE `invoice_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` text DEFAULT NULL,
  `company_phone` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `logo_path` varchar(255) DEFAULT NULL,
  `header_text` text DEFAULT NULL,
  `footer_text` text DEFAULT NULL,
  `color_scheme` varchar(255) NOT NULL DEFAULT '#000000',
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_histories`
--

CREATE TABLE `login_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_histories`
--

INSERT INTO `login_histories` (`id`, `user_id`, `ip_address`, `user_agent`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:143.0) Gecko/20100101 Firefox/143.0', '2025-10-04 15:26:55', NULL, NULL);

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_06_041151_update_users_table', 1),
(5, '2025_03_06_062746_create_user_admins_table', 1),
(6, '2025_03_06_062820_create_user_customers_table', 1),
(7, '2025_03_06_062839_create_user_addresses_table', 1),
(8, '2025_03_06_125036_create_permission_tables', 1),
(9, '2025_03_08_130919_create_mikrotiks_table', 1),
(10, '2025_03_08_134510_create_paket_profiles_table', 1),
(11, '2025_03_08_134536_create_pakets_table', 1),
(12, '2025_03_08_135359_create_internet_services_table', 1),
(13, '2025_03_08_135429_create_ppp_types_table', 1),
(14, '2025_03_08_135618_create_customer_pakets_table', 1),
(15, '2025_03_08_135928_create_customer_ppp_pakets_table', 1),
(16, '2025_03_08_140001_create_customer_static_pakets_table', 1),
(17, '2025_03_08_140002_create_customer_paket_addresses_table', 1),
(18, '2025_03_09_012912_create_mikrotik_monitorings_table', 1),
(19, '2025_03_09_060711_create_wan_monitorings_table', 1),
(20, '2025_03_12_075955_create_whatsapp_gateway_generals_table', 1),
(21, '2025_03_13_051506_create_webhook_calls_table', 1),
(22, '2025_03_23_122902_create_websystems_table', 1),
(23, '2025_03_26_044512_create_auto_isolirs_table', 1),
(24, '2025_04_02_024931_create_invoices_table', 1),
(25, '2025_04_02_025118_create_invoice_items_table', 1),
(26, '2025_04_02_035419_create_invoice_templates_table', 1),
(27, '2025_04_02_133030_create_payment_gateways_table', 1),
(28, '2025_04_02_133031_create_payments_table', 1),
(29, '2025_04_02_134916_create_recurring_billing_configurations_table', 1),
(30, '2025_04_05_000616_create_payment_histories_table', 1),
(31, '2025_04_05_013804_create_banks_table', 1),
(32, '2025_04_10_071938_create_usage_records_table', 1),
(33, '2025_04_13_163124_create_personal_access_tokens_table', 1),
(34, '2025_04_14_003557_create_mikrotik_client_histories_table', 1),
(35, '2025_04_14_031056_create_login_histories_table', 1),
(36, '2025_04_17_142249_create_orders_table', 1),
(37, '2025_04_29_184812_create_whatsapp_boot_messages_table', 1),
(38, '2025_04_29_184827_create_whatsapp_notification_messages_table', 1),
(39, '2025_04_29_184933_create_user_boot_messages_table', 1),
(40, '2025_05_14_074232_add_column_soft_delete_table_invoice_items', 1),
(41, '2025_05_14_074402_add_column_soft_delete_table_payments', 1),
(42, '2025_05_14_074500_add_column_soft_delete_table_payment_histories', 1),
(43, '2025_05_14_074552_add_column_soft_delete_table_orders', 1),
(44, '2025_05_14_074913_add_column_soft_delete_table_user_addresses', 1),
(45, '2025_05_14_081806_add_column_soft_delete_table_user_customers', 1),
(46, '2025_05_14_093827_add_column_soft_delete_table_mikrotik_monitorings', 1),
(47, '2025_05_14_094023_add_column_soft_delete_table_wan_monitorings', 1),
(48, '2025_05_17_093251_change_type_column_schedule_time_table_whatsapp_gateway_generals_gateway_generals', 1),
(49, '2025_05_19_084920_create_acs_table', 1),
(50, '2025_05_20_235519_change_type_column_wa_number_table_wa_gateway_generals', 1),
(51, '2025_06_08_155055_update_table_payments_column_payment_methode', 1),
(52, '2025_07_04_163441_add_soft_delete_column', 1),
(53, '2025_07_05_103901_create_general_logs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mikrotiks`
--

CREATE TABLE `mikrotiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `host` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `use_ssl` tinyint(1) NOT NULL DEFAULT 0,
  `port` bigint(20) NOT NULL DEFAULT 8728,
  `web_port` bigint(20) NOT NULL DEFAULT 80,
  `merk_router` varchar(255) DEFAULT NULL,
  `type_router` varchar(255) DEFAULT NULL,
  `version` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `admin_ip_address` varchar(45) DEFAULT NULL,
  `updated_ip_address` varchar(45) DEFAULT NULL,
  `deleted_ip_address` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mikrotiks`
--

INSERT INTO `mikrotiks` (`id`, `name`, `slug`, `host`, `username`, `password`, `use_ssl`, `port`, `web_port`, `merk_router`, `type_router`, `version`, `description`, `disabled`, `admin_ip_address`, `updated_ip_address`, `deleted_ip_address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'HalloNet', '3wtrtderz4', '192.168.18.13', 'admin', 'Izhar@0909', 0, 8728, 80, 'MikroTik', 'RB750', '6.49.19 (stable)', NULL, 0, '127.0.0.1', NULL, NULL, '2025-10-04 16:31:01', '2025-10-04 16:31:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mikrotik_client_histories`
--

CREATE TABLE `mikrotik_client_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mikrotik_id` bigint(20) UNSIGNED NOT NULL,
  `customer_paket_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('ppp','ip_static','hotspot') NOT NULL,
  `history` varchar(255) DEFAULT NULL,
  `status` enum('up','down','error') NOT NULL,
  `recorded_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mikrotik_monitorings`
--

CREATE TABLE `mikrotik_monitorings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `mikrotik_id` bigint(20) UNSIGNED NOT NULL,
  `interface` varchar(255) DEFAULT NULL,
  `interface_type` varchar(255) DEFAULT NULL,
  `min_upload` varchar(255) DEFAULT NULL,
  `min_download` varchar(255) DEFAULT NULL,
  `max_upload` varchar(255) DEFAULT NULL,
  `max_download` varchar(255) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mikrotik_monitorings`
--

INSERT INTO `mikrotik_monitorings` (`id`, `slug`, `mikrotik_id`, `interface`, `interface_type`, `min_upload`, `min_download`, `max_upload`, `max_download`, `disabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'hallonet-su40x', 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2025-10-04 16:31:01', '2025-10-04 16:31:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `payment_gateway_channel` enum('tripay','midtrans') NOT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `merchant_ref` varchar(255) DEFAULT NULL,
  `payment_selection_type` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_name` varchar(255) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_phone` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `fee_merchant` int(11) DEFAULT NULL,
  `fee_customer` varchar(255) DEFAULT NULL,
  `total_fee` varchar(255) DEFAULT NULL,
  `amount_received` varchar(255) DEFAULT NULL,
  `pay_code` varchar(255) DEFAULT NULL,
  `order_items` varchar(255) DEFAULT NULL,
  `status` enum('pending','expired','paid','failed','refund') NOT NULL,
  `expired_time` timestamp NULL DEFAULT NULL,
  `instructions` text DEFAULT NULL,
  `pdf_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `paket_profile_id` bigint(20) UNSIGNED NOT NULL,
  `mikrotik_id` bigint(20) UNSIGNED NOT NULL,
  `mikrotik_ppp_profile_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `tax_disabled` tinyint(1) NOT NULL DEFAULT 1,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `trial_days` int(11) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id`, `slug`, `paket_profile_id`, `mikrotik_id`, `mikrotik_ppp_profile_id`, `name`, `price`, `tax_disabled`, `disabled`, `trial_days`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'qmyzy52huc', 2, 1, '*A', '10Mpromo', 2000, 1, 0, 3, 'Paket Promosi 10M', '2025-10-04 16:44:56', '2025-10-04 16:48:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paket_profiles`
--

CREATE TABLE `paket_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `profile_name` varchar(255) DEFAULT NULL,
  `local_address` varchar(255) DEFAULT NULL,
  `remote_address` varchar(255) DEFAULT NULL,
  `dns_server` varchar(255) DEFAULT NULL,
  `use_ipv6` enum('no','yes','required','default') NOT NULL DEFAULT 'yes',
  `use_mpls` enum('no','yes','required','default') NOT NULL DEFAULT 'default',
  `use_encryption` enum('no','yes','required','default') NOT NULL DEFAULT 'default',
  `use_compression` enum('no','yes','default') NOT NULL DEFAULT 'default',
  `rate_limit` varchar(255) DEFAULT NULL,
  `rasio_cir` varchar(255) DEFAULT NULL,
  `session_timeout` varchar(255) DEFAULT NULL,
  `idle_timeout` varchar(255) DEFAULT NULL,
  `only_one` enum('no','yes','default') NOT NULL DEFAULT 'default',
  `insert_queue_before` varchar(255) DEFAULT NULL,
  `parent_queue` varchar(255) DEFAULT NULL,
  `queue_type` varchar(255) DEFAULT NULL,
  `script_on_up` varchar(255) DEFAULT NULL,
  `script_on_down` varchar(255) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_profiles`
--

INSERT INTO `paket_profiles` (`id`, `slug`, `profile_name`, `local_address`, `remote_address`, `dns_server`, `use_ipv6`, `use_mpls`, `use_encryption`, `use_compression`, `rate_limit`, `rasio_cir`, `session_timeout`, `idle_timeout`, `only_one`, `insert_queue_before`, `parent_queue`, `queue_type`, `script_on_up`, `script_on_down`, `disabled`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'default', 'default', NULL, NULL, NULL, 'yes', 'default', 'default', 'default', NULL, NULL, NULL, NULL, 'default', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(2, 'xt82xvcfby', '2menit', NULL, NULL, NULL, 'yes', 'default', 'default', 'default', '10 3 500k 5/5 1 10M/10M', NULL, NULL, NULL, 'default', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2025-10-04 16:47:33', '2025-10-04 16:47:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `user_customer_id` bigint(20) UNSIGNED NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amount` int(11) NOT NULL,
  `payment_method` enum('tripay','midtrans','bank_transfer','cash','paylater') NOT NULL,
  `paylater_date` date DEFAULT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `teller` varchar(255) NOT NULL,
  `reconciliation_status` varchar(255) DEFAULT NULL,
  `reconciliation_notes` varchar(255) DEFAULT NULL,
  `refund_status` enum('full','partial') DEFAULT NULL,
  `refunded_amount` int(11) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `invoice_id`, `user_customer_id`, `payment_date`, `amount`, `payment_method`, `paylater_date`, `transaction_id`, `bank`, `teller`, `reconciliation_status`, `reconciliation_notes`, `refund_status`, `refunded_amount`, `notes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2025-10-04 16:52:00', 2209, 'cash', NULL, 'TR-0410202568E150B04D496', NULL, 'Izhar ', 'discrepancy', 'Payment amount (2209) does not match invoice amount (2000)', NULL, NULL, NULL, '2025-10-04 16:52:00', '2025-10-04 16:52:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_gateways`
--

CREATE TABLE `payment_gateways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `merchant_code` varchar(255) DEFAULT NULL,
  `production_api_key` varchar(255) DEFAULT NULL,
  `production_secret_key` varchar(255) DEFAULT NULL,
  `development_merchant_code` varchar(255) DEFAULT NULL,
  `development_api_key` varchar(255) DEFAULT NULL,
  `development_secret_key` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `mode` enum('development','production') NOT NULL DEFAULT 'development',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_gateways`
--

INSERT INTO `payment_gateways` (`id`, `value`, `name`, `merchant_code`, `production_api_key`, `production_secret_key`, `development_merchant_code`, `development_api_key`, `development_secret_key`, `is_active`, `mode`, `created_at`, `updated_at`) VALUES
(1, 'tripay', 'TriPay', NULL, NULL, NULL, NULL, NULL, NULL, 0, 'development', '2025-10-04 15:22:21', '2025-10-04 16:34:40'),
(2, 'midtrans', 'Midtrans', NULL, NULL, NULL, NULL, NULL, NULL, 0, 'development', '2025-10-04 15:22:21', '2025-10-04 16:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `payment_histories`
--

CREATE TABLE `payment_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `user_customer_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `paylater_date` date DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_histories`
--

INSERT INTO `payment_histories` (`id`, `payment_id`, `invoice_id`, `user_customer_id`, `amount`, `payment_method`, `paylater_date`, `transaction_id`, `status`, `notes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 2209.00, 'cash', NULL, 'TR-0410202568E150B04D496', 'discrepancy', 'Payment amount (2209) does not match invoice amount (2000)', '2025-10-04 16:52:00', '2025-10-04 16:52:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppp_types`
--

CREATE TABLE `ppp_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ppp_types`
--

INSERT INTO `ppp_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'any', '2025-10-04 15:22:20', '2025-10-04 15:22:20'),
(2, 'async', '2025-10-04 15:22:20', '2025-10-04 15:22:20'),
(3, 'l2tp', '2025-10-04 15:22:20', '2025-10-04 15:22:20'),
(4, 'ovpn', '2025-10-04 15:22:20', '2025-10-04 15:22:20'),
(5, 'pppoe', '2025-10-04 15:22:20', '2025-10-04 15:22:20'),
(6, 'pptp', '2025-10-04 15:22:20', '2025-10-04 15:22:20'),
(7, 'sstp', '2025-10-04 15:22:20', '2025-10-04 15:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `recurring_billing_configurations`
--

CREATE TABLE `recurring_billing_configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `frequency` varchar(255) NOT NULL,
  `billing_day` int(11) DEFAULT NULL,
  `next_billing_date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2025-10-04 15:22:20', '2025-10-04 15:22:20'),
(2, 'teller', 'web', '2025-10-04 15:22:20', '2025-10-04 15:22:20'),
(3, 'technitian', 'web', '2025-10-04 15:22:20', '2025-10-04 15:22:20'),
(4, 'customer', 'web', '2025-10-04 15:22:20', '2025-10-04 15:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usage_records`
--

CREATE TABLE `usage_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_paket_id` int(11) DEFAULT NULL,
  `metric_name` varchar(255) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `recorded_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `processed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `profile_photo_path`, `disabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'izhar', 'izhar', NULL, 'izhar0487@gmail.com', NULL, '$2y$12$.Ybl5cHaoZ3.59eqUnordecOOWIKLPh8TOEJDeuEkO5Qzuwaz7Wie', NULL, NULL, 0, '2025-10-04 15:22:46', '2025-10-04 15:22:46', NULL),
(2, 'imam-mudin', 'imam', 'mudin', 'imam@gmail.com', '2025-10-04 16:43:04', '$2y$12$JbL0j.sKxE4.QFcgZbQvxusViBqmUT.SL3H0lKnXrfflZoXXnBVCC', NULL, NULL, 0, '2025-10-04 16:42:42', '2025-10-04 16:43:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `subdistrict` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `wa_notification` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `address`, `subdistrict`, `district`, `city`, `province`, `country`, `phone`, `wa_notification`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2025-10-04 15:22:46', '2025-10-04 15:22:46', NULL),
(2, 2, 'Kp. Pabuaran Kaum Rt 003/002 Desa Cibanteng', '{\"id\":\"9470\",\"text\":\"Ciampea\"}', '{\"id\":\"843\",\"text\":\"Ciampea\"}', '{\"id\":\"69\",\"text\":\"Kabupaten Bogor\"}', '{\"id\":\"9\",\"text\":\"Jawa Barat\"}', 'id', '6289671627783', 1, '2025-10-04 16:42:42', '2025-10-04 16:42:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_admins`
--

CREATE TABLE `user_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nin` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_admins`
--

INSERT INTO `user_admins` (`id`, `user_id`, `nin`, `dob`, `gender`, `bio`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, '2025-10-04 15:22:46', '2025-10-04 15:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `user_boot_messages`
--

CREATE TABLE `user_boot_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `whatsapp_boot_message_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_customers`
--

CREATE TABLE `user_customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `nin` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_customers`
--

INSERT INTO `user_customers` (`id`, `user_id`, `customer_id`, `nin`, `dob`, `gender`, `bio`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, NULL, NULL, '1990-05-06', 'male', NULL, '2025-10-04 16:42:42', '2025-10-04 16:49:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wan_monitorings`
--

CREATE TABLE `wan_monitorings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mikrotik_id` bigint(20) UNSIGNED NOT NULL,
  `interface_name` varchar(255) DEFAULT NULL,
  `tx_rate` varchar(255) DEFAULT NULL,
  `rx_rate` varchar(255) DEFAULT NULL,
  `ping_ms` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `webhook_calls`
--

CREATE TABLE `webhook_calls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `headers` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`headers`)),
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`payload`)),
  `exception` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `websystems`
--

CREATE TABLE `websystems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `version` varchar(255) DEFAULT NULL,
  `comment_payment` varchar(255) DEFAULT 'payment',
  `comment_unpayment` varchar(255) DEFAULT 'unpayment',
  `subscription_mode` enum('prabayar','pascabayar') NOT NULL DEFAULT 'prabayar',
  `isolir_driver` enum('mikrotik','cronjob') NOT NULL DEFAULT 'cronjob',
  `max_process` int(11) NOT NULL DEFAULT 25,
  `enable_tax` tinyint(1) NOT NULL DEFAULT 0,
  `tax_rate` decimal(5,2) NOT NULL DEFAULT 0.00,
  `email` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `subdistrict` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT 'IDN',
  `phone` varchar(255) DEFAULT NULL,
  `customer_code` varchar(255) DEFAULT NULL,
  `long_customer_code` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websystems`
--

INSERT INTO `websystems` (`id`, `title`, `version`, `comment_payment`, `comment_unpayment`, `subscription_mode`, `isolir_driver`, `max_process`, `enable_tax`, `tax_rate`, `email`, `url`, `address`, `subdistrict`, `district`, `city`, `province`, `postal_code`, `country_code`, `phone`, `customer_code`, `long_customer_code`, `created_at`, `updated_at`) VALUES
(1, 'HalloNet', '2.0.0', 'payment', 'unpayment', 'prabayar', 'cronjob', 50, 0, 11.00, 'izhar0487@gmail.com', NULL, 'Kp. Pabuaran Kaum Rt 003/002 Desa Cibanteng', NULL, NULL, 'Kab. Bogor', NULL, '16620', 'IDN', '089671627783', NULL, NULL, '2025-10-04 15:22:20', '2025-10-04 16:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `whatsapp_boot_messages`
--

CREATE TABLE `whatsapp_boot_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `whatsapp_boot_message_id` bigint(20) UNSIGNED DEFAULT NULL,
  `command_number` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `action_message` varchar(255) DEFAULT NULL,
  `end_message` tinyint(1) NOT NULL DEFAULT 0,
  `hidden_message` tinyint(1) NOT NULL DEFAULT 0,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whatsapp_boot_messages`
--

INSERT INTO `whatsapp_boot_messages` (`id`, `whatsapp_boot_message_id`, `command_number`, `name`, `message`, `action_message`, `end_message`, `hidden_message`, `disabled`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, 'Welcome Message', 'Apa yang bisa saya bantu %name%\n\n        pilih menu berikut:\n        %menu%', NULL, 0, 0, 0, NULL, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(2, 1, 1, 'Menu Paket', '%menu%\n        0. Menu sebelumnya', NULL, 0, 0, 0, NULL, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(3, 1, 2, 'Info Tagihan', 'Berikut info tagihan anda.\n\n        %bills%\n        \n        Jumlah tagihan: %total-bills%\n            \n        Anda dapat melakukan pembayaran melalui:\n        %account-banks%\n            \n        Terima kasih telah mempercayakan kebutuhan internet anda kepada kami.', 'info_tagihan', 1, 0, 0, NULL, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(4, 2, 1, 'Ubah SSID', 'Masukkan ssid baru wifi anda\n\n        0. Menu sebelumnya', 'change_ssid', 0, 0, 0, NULL, '2025-10-04 15:22:21', '2025-10-04 15:22:21', NULL),
(5, 2, 2, 'Ubah Sandi Wifi', 'Masukkan sandi baru wifi anda\n\n        0. Menu sebelumnya', 'change_password_wifi', 0, 0, 0, NULL, '2025-10-04 15:22:21', '2025-10-04 15:22:21', NULL),
(6, 2, 3, 'Info Paket', 'Berikut kami sampaikan rincian paket anda:\n\n        %pakets%\n        \n        Terima kasih telah mempercayakan layanan internet anda kepada kami. Kami berkomitmen untuk selalu memberikan pelayanan yang terbaik.', 'info_paket', 1, 0, 0, NULL, '2025-10-04 15:22:21', '2025-10-04 15:22:21', NULL),
(7, 2, 4, 'Info Wifi', '%info_wifi%', 'info_wifi', 1, 0, 0, NULL, '2025-10-04 15:22:21', '2025-10-04 15:22:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `whatsapp_gateway_generals`
--

CREATE TABLE `whatsapp_gateway_generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `remaining_day` int(11) NOT NULL DEFAULT 1,
  `whatsapp_number_boot` varchar(255) DEFAULT NULL,
  `whatsapp_number_notification` varchar(255) DEFAULT NULL,
  `country_code` int(11) DEFAULT 62,
  `url` varchar(255) DEFAULT NULL,
  `url_callback` varchar(255) DEFAULT NULL,
  `cert_file` varchar(255) DEFAULT NULL,
  `send_wa_admin` tinyint(1) NOT NULL DEFAULT 1,
  `disabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whatsapp_gateway_generals`
--

INSERT INTO `whatsapp_gateway_generals` (`id`, `name`, `remaining_day`, `whatsapp_number_boot`, `whatsapp_number_notification`, `country_code`, `url`, `url_callback`, `cert_file`, `send_wa_admin`, `disabled`, `created_at`, `updated_at`) VALUES
(1, 'Griyanet WA Gateway', 0, NULL, NULL, 62, NULL, NULL, NULL, 1, 1, '2025-10-04 15:22:20', '2025-10-04 15:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `whatsapp_notification_messages`
--

CREATE TABLE `whatsapp_notification_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT 0,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whatsapp_notification_messages`
--

INSERT INTO `whatsapp_notification_messages` (`id`, `slug`, `name`, `message`, `description`, `default`, `disabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'payment', 'Pembayaran Lunas', '*WindaNet*\n\nPelanggan WindaNet yang terhormat,\nBerikut kami sampaikan detail pembayaran anda:\n\nAtas Nama : Bp/Ibu *%name%*\nCustomer-ID : %customer_id%\nAlamat : %address%\nNomor Tagihan: %invoice_number%\nID Transaksi: *%transaction_id%*\nPaket Internet : *%paket%*\nPeriode : *%periode%*\nNominal : *%bill%*\nTeller : %teller%\nTanggal : %payment_time%\nMetode pembayaran: %payment_methode%\n\n\nTerima kasih telah mempercayakan kebutuhan internetnya kepada kami. Kami berkomitmen untuk selalu memberikan yang terbaik untuk pelanggan.\nMohon maaf jika ada penulisan nama yang salah. Anda dapat menghubungi kami untuk pembetulan nama.', 'Pesan yang dikirim saat pelanggan melakukan pembayaran.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(2, 'unpayment', 'Unpayment', 'Yth. Bp/Ibu %name%,\n%address%\nCustomer ID: %customer_id%\n\nMaaf telah terjadi kesalahan system.\n\nPembayaran anda:\nNomor Tagihan: *%invoice_number%*\nID Transaksi: *%transaction_id%*\nJumlah: *%bill%*\n\nTelah dibatalkan.\n\nTerima kasih telah menggunakan layanan internet kami.\n\n*WindaNet*\nDk. Dukuh RT.02 RW.04 Tegalsari\nKec. Weru, Kab. Sukoharjo\n\n*Pesan ini dikirim otomatis oleh system, anda tidak perlu membalasnya*', 'Pesan yang dikirim saat admin melakukan pembatalan pembayaran.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(3, 'warning_bill', 'Warning Due Date', '\nPengingat Tagihan\n\nYth. Bp/Ibu %name%,\n%address%\nCustomer ID: %customer_id%\n\n%day% adalah batas akhir pembayaran paket %paket-name% internet anda. Saat ini anda memiliki %count-bill% tagihan yang belum dibayar:\n\n%pakets%\n*Jumlah tagihan: %total-bill%*\n\nLakukan pembayaran sebelum jatuh tempo untuk menghindari isolir otomatis oleh system kami.\n\nTerima kasih telah menggunakan layanan internet kami.\n\n*WindaNet*\nDk. Dukuh RT.02 RW.04 Tegalsari\nKec. Weru, Kab. Sukoharjo\n\n*Pesan ini dikirim otomatis oleh system, anda tidak perlu membalasnya*', 'Pesan yang dikirim untuk memberitahukan bahwa tagihan mereka akan jatuh tempo.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(4, 'deadline_bill', 'Deadline Bill', 'Yth. Bp/Ibu %name%,\n%address%\nCustomer ID: %customer_id%\n\nHari ini adalah batas akhir pembayaran paket %paket-name% internet anda. Saat ini anda memiliki %count-bill% tagihan yang belum dibayar:\n\n%pakets%\n*Jumlah tagihan: %total-bill%*\n\nSegera lakukan pembayaran sebelum jatuh tempo untuk menghindari isolir otomatis oleh system kami.\nAnda dapat melakukan pembayaran melalui:\n%account-bank%\nTerima kasih telah menggunakan layanan internet kami.\n\n*WindaNet*\nDk. Dukuh RT.02 RW.04 Tegalsari\nKec. Weru, Kab. Sukoharjo\n\n*Pesan ini dikirim otomatis oleh system, anda tidak perlu membalasnya*', 'Pesan yang dikirim untuk memberitahukan bahwa tagihan mereka sudah jatuh tempo.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(5, 'disable_paket', 'Disable Paket', 'Yth. Bp/Ibu %name%,\n%address%\nCustomer ID: %customer_id%\n\nPaket anda sudah dinon-aktifkan, kami tidak mengenakan biaya layanan selama paket anda dinon-aktifkan.\n\nInfo paket:\nPaket: *%paket_name%*\nStatus: *%status%*\n\n*WindaNet*\nDk. Dukuh RT.02 RW.04 Tegalsari\nKec. Weru, Kab. Sukoharjo\n\n*Pesan ini dikirim otomatis oleh system, anda tidak perlu membalasnya*', 'Pesan yang dikirim saat paket di non-aktifkan.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(6, 'enable_paket', 'Enable Paket', 'Yth. Bp/Ibu %name%,\n%address%\nCustomer ID: %customer_id%\n\nPaket anda sudah diaktifkan, selamat menikmati layanan internet kami kembali.\n\nInfo paket:\nPaket: *%paket_name%*\nTagihan: *%bill%* per bulan\nStatus: *%status%*\nTanggal Aktivasi: %activation_date%\n\n*WindaNet*\nDk. Dukuh RT.02 RW.04 Tegalsari\nKec. Weru, Kab. Sukoharjo\n\n*Pesan ini dikirim otomatis oleh system, anda tidak perlu membalasnya*', 'Pesan yang dikirim saat paket di aktifkan.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(7, 'activation_paket', 'Activation Paket', 'Yth. Bp/Ibu %name%,\n%address%\nCustomer ID: %customer_id%\n\nPaket anda sudah berhasil diaktivasi, selamat menikmati layanan internet dari kami.\n\nBatas bayar: Setiap tanggal %deadline%\nNama CS: %cs_name%\nContact: %cs_contact%\n\nJika terjadi kendala pada jaringan, silahkan hubungi CS kami.\n\n*WindaNet*\nDk. Dukuh RT.02 RW.04 Tegalsari\nKec. Weru, Kab. Sukoharjo\n\n*Pesan ini dikirim otomatis oleh system, anda tidak perlu membalasnya*', 'Pesan yang dikirim saat aktivasi paket.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(8, 'add_paket', 'Add Paket', 'Yth. Bp/Ibu %name%,\n%address%\nCustomer ID: %customer_id%\n\nPendaftaran paket berhasil, berikut info layanan paket anda:\n\nPaket: %paket_name%\nHarga: %paket_price%\n\nBiaya Langganan: %bill% per bulan\n\nsilahkan tunggu beberapa saat karna paket anda masih dalam proses aktivasi.\n\n*WindaNet*\nDk. Dukuh RT.02 RW.04 Tegalsari\nKec. Weru, Kab. Sukoharjo\n\n*Pesan ini dikirim otomatis oleh system, anda tidak perlu membalasnya*', 'Pesan yang dikirim saat penambahan paket customer.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(9, 'deactivation_customer', 'Deactivation Customer', 'Yth. Bp/Ibu %name%,\n%address%\nCustomer ID: %customer_id%\n\nDengan berat hati kami menonaktifkan akun anda. Jika tidak keberatan, silahkan kirim masukkan anda untuk perbaikan pada layanan kami.\n\nTerima kasih telah menjadi pelanggan kami selama ini.\n\n*WindaNet*\nDk. Dukuh RT.02 RW.04 Tegalsari\nKec. Weru, Kab. Sukoharjo\n\n*Pesan ini dikirim otomatis oleh system, anda tidak perlu membalasnya*', 'Pesan yang dikirim saat customer di non-aktifkan.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(10, 'activation_customer', 'Activation Customer', 'Yth. Bp/Ibu %name%,\n%address%\n\nAktivasi akun berhasil. Berikut detail informasi akun anda:\n\nNama: %name%\nAlamat: %address%\nCustomer ID: %customer_id%\nEmail: %email%\nCustomer Service: %customer_service%\n\nSimpan informasi ini untuk pengajuan layanan atau saat terjadi gangguan layanan.\n\n*WindaNet*\nDk. Dukuh RT.02 RW.04 Tegalsari\nKec. Weru, Kab. Sukoharjo\n\n*Pesan ini dikirim otomatis oleh system, anda tidak perlu membalasnya*', 'Pesan yang dikirim saat aktivasi customer.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(11, 'register_customer', 'Register Customer', 'Yth. Bp/Ibu %name%,\n%address%\n\nTerima kasih telah melakukan pendaftaran di sistem kami.\nBerikut layanan yang dapat anda pilih:\n\n%pakets%\n\nJika anda ingin menggunakan layanan kami, silahkan hubungi 085726455588.\n\n*WindaNet*\nDk. Dukuh RT.02 RW.04 Tegalsari\nKec. Weru, Kab. Sukoharjo\n\n*Pesan ini dikirim otomatis oleh system, anda tidak perlu membalasnya*', 'Pesan yang dikirim saat registrasi customer.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(12, 'paylater', 'Pay Later', '*WindaNet*\n\nPelanggan WindaNet yang terhormat,\nBerikut kami sampaikan detail pembayaran mundur anda:\n\nAtas Nama : Bp/Ibu *%name%*\nCustomer-ID : %customer_id%\nAlamat : %address%\nNomor Tagihan: %invoice_number%\nID Transaksi: *%transaction_id%*\nPaket Internet : *%paket%*\nPeriode : *%periode%*\nNominal : *%bill%*\nTeller : %teller%\nMetode pembayaran: *%payment_methode%*\nJatuh Tempo: *%paylater%*\n\n\nTerima kasih telah mempercayakan kebutuhan internetnya kepada kami. Kami berkomitmen untuk selalu memberikan yang terbaik untuk pelanggan.\nMohon maaf jika ada penulisan nama yang salah. Anda dapat menghubungi kami untuk pembetulan nama.', 'Pesan yang dikirim saat permintaan pay later.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(13, 'notif_admin_payment', 'Notif Admin Payment', 'Informasi Pembayaran\n\nNama: %name%\nAlamat: %address%\nCustomer ID: %customer_id%\nEmail: %email%\nNominal: %bill%\nPeriode: %periode%\nMethode: %payment_methode%\nTeller: %teller%\nWaktu: %payment_time%\n\n*Pesan ini dikirim otomatis oleh system, anda tidak perlu membalasnya*', 'Notif admin saat ada transaksi pembayaran.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(14, 'notif_admin_paylater', 'Notif Admin Paylater', '', 'Notif admin saat ada transaksi pembayaran mundur.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(15, 'notif_admin_unpayment', 'Notif Admin Unpayment', 'Informasi Pembayaran\n\nTerjadi kesalahan system pembayaran.\n\nNama: %name%\nAlamat:%address%\nPeriode: %periode%\nNomor Tagihan: *%invoice_number%*\nID Transaksi: *%transaction_id%*\nJumlah: *%bill%*\n\nTelah dibatalkan.\n\n*Pesan ini dikirim otomatis oleh system, anda tidak perlu membalasnya*', 'Notif admin saat ada pembatalan transaksi pembayaran.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(16, 'isolir_paket', 'Isolir Paket Customer', 'Yth. Bp/Ibu %name%,\n%address%\nCustomer ID: %customer_id%\n\nSaat ini koneksi internet anda sedang terblokir. Anda memiliki %count-bill% tagihan yang belum dibayar:\n\n%pakets%\n*Jumlah tagihan: %total-bill%*\n\nSegera lakukan pembayaran untuk menikmati layananan internet kembali.\nAnda dapat melakukan pembayaran melalui:\n%account-bank%\nTerima kasih telah menggunakan layanan internet kami.\n\n*WindaNet*\nDk. Dukuh RT.02 RW.04 Tegalsari\nKec. Weru, Kab. Sukoharjo\n\n*Pesan ini dikirim otomatis oleh system, anda tidak perlu membalasnya*', 'Pemberitahuan kepada customer saat koneksi internet terblokir.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(17, 'notif_admin_disable_paket', 'Notif Admin Disable/Enable/Activastion Paket ', 'Info Paket Customer\n\nName: %name%\nAlamat: %address%\nPaket: %paket_name%\nStatus: *%status_admin%*', 'Pemberitahuan kepada admin saat paket pelanggan di matikan.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL),
(18, 'notif_admin_bill_and_isolir', 'Notifikasi Admin Info Pembayaran dan Isolir', '\nInformasi Tagihan dan Isolir\n\nTagihan akan datang:\n%customer_bills%\n\nIsolir\n%customer_isolirs%\n', 'Pesan informasi tagihan dan client isolir yang dikirim ke admin.', 1, 0, '2025-10-04 15:22:20', '2025-10-04 15:22:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acs`
--
ALTER TABLE `acs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `acs_slug_unique` (`slug`);

--
-- Indexes for table `auto_isolirs`
--
ALTER TABLE `auto_isolirs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auto_isolirs_slug_unique` (`slug`),
  ADD KEY `auto_isolirs_mikrotik_id_foreign` (`mikrotik_id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `customer_pakets`
--
ALTER TABLE `customer_pakets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_pakets_slug_unique` (`slug`),
  ADD KEY `customer_pakets_user_id_foreign` (`user_id`),
  ADD KEY `customer_pakets_paket_id_foreign` (`paket_id`),
  ADD KEY `customer_pakets_internet_service_id_foreign` (`internet_service_id`);

--
-- Indexes for table `customer_paket_addresses`
--
ALTER TABLE `customer_paket_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_paket_addresses_customer_paket_id_foreign` (`customer_paket_id`);

--
-- Indexes for table `customer_ppp_pakets`
--
ALTER TABLE `customer_ppp_pakets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_ppp_pakets_slug_unique` (`slug`),
  ADD KEY `customer_ppp_pakets_customer_paket_id_foreign` (`customer_paket_id`),
  ADD KEY `customer_ppp_pakets_ppp_type_id_foreign` (`ppp_type_id`);

--
-- Indexes for table `customer_static_pakets`
--
ALTER TABLE `customer_static_pakets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_static_pakets_slug_unique` (`slug`),
  ADD KEY `customer_static_pakets_customer_paket_id_foreign` (`customer_paket_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_logs`
--
ALTER TABLE `general_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internet_services`
--
ALTER TABLE `internet_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoices_invoice_number_unique` (`invoice_number`),
  ADD KEY `invoices_user_customer_id_foreign` (`user_customer_id`),
  ADD KEY `invoices_customer_paket_id_foreign` (`customer_paket_id`);

--
-- Indexes for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_items_invoice_id_foreign` (`invoice_id`);

--
-- Indexes for table `invoice_templates`
--
ALTER TABLE `invoice_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_histories`
--
ALTER TABLE `login_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_histories_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mikrotiks`
--
ALTER TABLE `mikrotiks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mikrotiks_slug_unique` (`slug`);

--
-- Indexes for table `mikrotik_client_histories`
--
ALTER TABLE `mikrotik_client_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mikrotik_client_histories_mikrotik_id_foreign` (`mikrotik_id`),
  ADD KEY `mikrotik_client_histories_customer_paket_id_foreign` (`customer_paket_id`);

--
-- Indexes for table `mikrotik_monitorings`
--
ALTER TABLE `mikrotik_monitorings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mikrotik_monitorings_slug_unique` (`slug`),
  ADD KEY `mikrotik_monitorings_mikrotik_id_foreign` (`mikrotik_id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_invoice_id_foreign` (`invoice_id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pakets_slug_unique` (`slug`),
  ADD KEY `pakets_paket_profile_id_foreign` (`paket_profile_id`),
  ADD KEY `pakets_mikrotik_id_foreign` (`mikrotik_id`);

--
-- Indexes for table `paket_profiles`
--
ALTER TABLE `paket_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `paket_profiles_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_transaction_id_unique` (`transaction_id`),
  ADD KEY `payments_invoice_id_foreign` (`invoice_id`),
  ADD KEY `payments_user_customer_id_foreign` (`user_customer_id`);

--
-- Indexes for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payment_gateways_value_unique` (`value`);

--
-- Indexes for table `payment_histories`
--
ALTER TABLE `payment_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ppp_types`
--
ALTER TABLE `ppp_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ppp_types_name_unique` (`name`);

--
-- Indexes for table `recurring_billing_configurations`
--
ALTER TABLE `recurring_billing_configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `usage_records`
--
ALTER TABLE `usage_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_admins`
--
ALTER TABLE `user_admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_admins_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_boot_messages`
--
ALTER TABLE `user_boot_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_boot_messages_user_id_foreign` (`user_id`),
  ADD KEY `user_boot_messages_whatsapp_boot_message_id_foreign` (`whatsapp_boot_message_id`);

--
-- Indexes for table `user_customers`
--
ALTER TABLE `user_customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_customers_user_id_foreign` (`user_id`);

--
-- Indexes for table `wan_monitorings`
--
ALTER TABLE `wan_monitorings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wan_monitorings_mikrotik_id_foreign` (`mikrotik_id`);

--
-- Indexes for table `webhook_calls`
--
ALTER TABLE `webhook_calls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websystems`
--
ALTER TABLE `websystems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whatsapp_boot_messages`
--
ALTER TABLE `whatsapp_boot_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whatsapp_gateway_generals`
--
ALTER TABLE `whatsapp_gateway_generals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whatsapp_notification_messages`
--
ALTER TABLE `whatsapp_notification_messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `whatsapp_notification_messages_slug_unique` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acs`
--
ALTER TABLE `acs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auto_isolirs`
--
ALTER TABLE `auto_isolirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_pakets`
--
ALTER TABLE `customer_pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_paket_addresses`
--
ALTER TABLE `customer_paket_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_ppp_pakets`
--
ALTER TABLE `customer_ppp_pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_static_pakets`
--
ALTER TABLE `customer_static_pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_logs`
--
ALTER TABLE `general_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `internet_services`
--
ALTER TABLE `internet_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_templates`
--
ALTER TABLE `invoice_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_histories`
--
ALTER TABLE `login_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `mikrotiks`
--
ALTER TABLE `mikrotiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mikrotik_client_histories`
--
ALTER TABLE `mikrotik_client_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mikrotik_monitorings`
--
ALTER TABLE `mikrotik_monitorings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paket_profiles`
--
ALTER TABLE `paket_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_histories`
--
ALTER TABLE `payment_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppp_types`
--
ALTER TABLE `ppp_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recurring_billing_configurations`
--
ALTER TABLE `recurring_billing_configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usage_records`
--
ALTER TABLE `usage_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_admins`
--
ALTER TABLE `user_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_boot_messages`
--
ALTER TABLE `user_boot_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_customers`
--
ALTER TABLE `user_customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wan_monitorings`
--
ALTER TABLE `wan_monitorings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webhook_calls`
--
ALTER TABLE `webhook_calls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `websystems`
--
ALTER TABLE `websystems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whatsapp_boot_messages`
--
ALTER TABLE `whatsapp_boot_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `whatsapp_gateway_generals`
--
ALTER TABLE `whatsapp_gateway_generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whatsapp_notification_messages`
--
ALTER TABLE `whatsapp_notification_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auto_isolirs`
--
ALTER TABLE `auto_isolirs`
  ADD CONSTRAINT `auto_isolirs_mikrotik_id_foreign` FOREIGN KEY (`mikrotik_id`) REFERENCES `mikrotiks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_pakets`
--
ALTER TABLE `customer_pakets`
  ADD CONSTRAINT `customer_pakets_internet_service_id_foreign` FOREIGN KEY (`internet_service_id`) REFERENCES `internet_services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_pakets_paket_id_foreign` FOREIGN KEY (`paket_id`) REFERENCES `pakets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_pakets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_paket_addresses`
--
ALTER TABLE `customer_paket_addresses`
  ADD CONSTRAINT `customer_paket_addresses_customer_paket_id_foreign` FOREIGN KEY (`customer_paket_id`) REFERENCES `customer_pakets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_ppp_pakets`
--
ALTER TABLE `customer_ppp_pakets`
  ADD CONSTRAINT `customer_ppp_pakets_customer_paket_id_foreign` FOREIGN KEY (`customer_paket_id`) REFERENCES `customer_pakets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_ppp_pakets_ppp_type_id_foreign` FOREIGN KEY (`ppp_type_id`) REFERENCES `ppp_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_static_pakets`
--
ALTER TABLE `customer_static_pakets`
  ADD CONSTRAINT `customer_static_pakets_customer_paket_id_foreign` FOREIGN KEY (`customer_paket_id`) REFERENCES `customer_pakets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_customer_paket_id_foreign` FOREIGN KEY (`customer_paket_id`) REFERENCES `customer_pakets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoices_user_customer_id_foreign` FOREIGN KEY (`user_customer_id`) REFERENCES `user_customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD CONSTRAINT `invoice_items_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `login_histories`
--
ALTER TABLE `login_histories`
  ADD CONSTRAINT `login_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mikrotik_client_histories`
--
ALTER TABLE `mikrotik_client_histories`
  ADD CONSTRAINT `mikrotik_client_histories_customer_paket_id_foreign` FOREIGN KEY (`customer_paket_id`) REFERENCES `customer_pakets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mikrotik_client_histories_mikrotik_id_foreign` FOREIGN KEY (`mikrotik_id`) REFERENCES `mikrotiks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mikrotik_monitorings`
--
ALTER TABLE `mikrotik_monitorings`
  ADD CONSTRAINT `mikrotik_monitorings_mikrotik_id_foreign` FOREIGN KEY (`mikrotik_id`) REFERENCES `mikrotiks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pakets`
--
ALTER TABLE `pakets`
  ADD CONSTRAINT `pakets_mikrotik_id_foreign` FOREIGN KEY (`mikrotik_id`) REFERENCES `mikrotiks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pakets_paket_profile_id_foreign` FOREIGN KEY (`paket_profile_id`) REFERENCES `paket_profiles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_user_customer_id_foreign` FOREIGN KEY (`user_customer_id`) REFERENCES `user_customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `user_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_admins`
--
ALTER TABLE `user_admins`
  ADD CONSTRAINT `user_admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_boot_messages`
--
ALTER TABLE `user_boot_messages`
  ADD CONSTRAINT `user_boot_messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_boot_messages_whatsapp_boot_message_id_foreign` FOREIGN KEY (`whatsapp_boot_message_id`) REFERENCES `whatsapp_boot_messages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_customers`
--
ALTER TABLE `user_customers`
  ADD CONSTRAINT `user_customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wan_monitorings`
--
ALTER TABLE `wan_monitorings`
  ADD CONSTRAINT `wan_monitorings_mikrotik_id_foreign` FOREIGN KEY (`mikrotik_id`) REFERENCES `mikrotiks` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
