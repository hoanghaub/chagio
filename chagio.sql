-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 02:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chagio`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `business_registration_certificate_number` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `register` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `name`, `address`, `phone`, `business_registration_certificate_number`, `register`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Công ty TNHH dịch vụ nhà hàng Vua Chả Giò', 'Số 40 Nguyễn Thị Định, phường Trung Hòa, quận Cầu Giấy, TP Hà Nội', '02432216590', '0107270640', '2018-01-10', 'vuachagio40@gmail.com', '2020-01-10 02:19:47', '2020-01-10 02:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nhà hàng ẩm thực ngon nhất Hà Nội năm 2020 | Nha hang am thuc ngon nhat Ha Thanh | Vua Chả Giò', '2020-01-10 06:35:48', '2020-01-10 06:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `articles_detail`
--

CREATE TABLE `articles_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `articles_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles_detail`
--

INSERT INTO `articles_detail` (`id`, `articles_id`, `name`, `day`, `content`, `img`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Nhà hàng ẩm thực ngon nhất Hà Nội năm 2020 | Nha hang am thuc ngon nhat Ha Thanh | Vua Chả Giò', '2020-01-09', 'Ngày nay các danh sách nhà hàng ẩm thực ngon nhất không có rất nhiều, nhưng nhà hàng nào tại Hà Nội được mọi người yêu mến tin tưởng nhất năm 2020 gửi gắm tiệc liên hoan, gặp gỡ gia đình, bạn bè và người thân thì Vua Chả Giò là một trong những địa điểm được mọi người lựa chọn nhiều nhất, chúng ta cùng điểm qua vài nét để trả lời cho câu hỏi tại tất cả mọi người lại yêu thích Vua Chả Giò đến như vậy\r\n\r\nTọa lạc lại các địa chỉ sầm uất và đắc địa nhất Hà Nội thì, với 5 cơ sở trên toàn thành phố thì sự tiện lợi cho quãng đường di chuyển của khách hàng đến nhà hàng là điểm cộng của nhà hàng ẩm thực ngon nhất. Có mặt tại tất cả các quận của Hà Nội, một số phố tuyến chính nơi mà hệ thống nhà hàng vua chả cá tọa lạc như phố Trần Hưng Đạo, Lý Thường Kiệt, Giảng Võ, Trần Thái Tông, Mai Hắc Đế, Nguyễn Thị Định. Khách hàng có thật nhiều sự lựa chọn cho địa điểm tổ chức của mình\r\n\r\nTrong các năm gần đây thì luôn dẫn vị trí dẫn đầu thì hệ thống nhà hàng của chúng tôi luôn đem đến cho khách hàng những điều tuyệt vời nhất, từ vị trí cho đến không gian của nhà hàng vua chả giò mang đậm nét Hà Nội xưa, nhưng cũng rất vô cùng lãng mạn và sang trọng, với hệ thống hút mùi đẳng cấp, không gian đẹp quý khách có thể chụp ảnh, tổ chức sinh nhật, hay đơn giản buổi hẹn hò sẽ thật lãng mạn và mang đến sự thành công tốt đẹp dành cho bạn\r\n\r\nNhư mọi cũng cũng biết rằng cá rất có lợi và tốt cho sức khỏe, chả cá với nguyên liệu cá tươi và ngon thì đây là một món ăn không những ngon khó cưỡng mà mang đến cho khách hàng những điều tuyệt vời nhất dành cho sức khỏe, đón chào năm mới 2020 với những điều mới lạ, một sức khỏe dồi dào là điều vô cùng cần thiết cho bạn và gia đình ngay lúc này.', '763887728.jpg', '2020-01-10 06:38:51', '2020-01-10 06:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hostline` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images_cs1`
--

CREATE TABLE `images_cs1` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images_cs1`
--

INSERT INTO `images_cs1` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Ảnh Cơ Sở 1', '1398564452.jpg', '2020-01-10 07:55:16', '2020-01-10 02:11:04'),
(2, 'Ảnh Cơ Sở 1', '1115289054.jpg', '2020-01-10 02:11:19', '2020-01-10 02:11:19'),
(3, 'Ảnh Cơ Sở 1', '592521112.jpg', '2020-01-10 02:11:49', '2020-01-10 02:11:49'),
(4, 'Ảnh Cơ Sở 1', '163366099.jpg', '2020-01-10 02:11:57', '2020-01-10 02:11:57'),
(5, 'Ảnh Cơ Sở 1', '668339728.jpg', '2020-01-10 02:12:10', '2020-01-10 02:12:10'),
(6, 'Ảnh Cơ Sở 1', '1068958188.jpg', '2020-01-10 02:12:27', '2020-01-10 02:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `images_cs2`
--

CREATE TABLE `images_cs2` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images_cs2`
--

INSERT INTO `images_cs2` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Ảnh Cơ Sở 2', '869145493.jpg', '2020-01-10 07:55:30', '2020-01-10 02:12:47'),
(2, 'Ảnh Cơ Sở 2', '1996204795.jpg', '2020-01-10 02:13:05', '2020-01-10 02:13:05'),
(3, 'Ảnh Cơ Sở 2', '2104614954.jpg', '2020-01-10 02:13:13', '2020-01-10 02:13:13'),
(4, 'Ảnh Cơ Sở 2', '1794787495.jpg', '2020-01-10 02:13:23', '2020-01-10 02:13:23'),
(5, 'Ảnh Cơ Sở 2', '804091861.jpg', '2020-01-10 02:13:33', '2020-01-10 02:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `images_cs3`
--

CREATE TABLE `images_cs3` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images_cs3`
--

INSERT INTO `images_cs3` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Ảnh Cơ Sở 3', '430958570.jpg', '2020-01-10 07:55:44', '2020-01-10 02:13:50'),
(2, 'Ảnh Cơ Sở 3', '86404822.jpg', '2020-01-10 02:13:58', '2020-01-10 02:13:58'),
(3, 'Ảnh Cơ Sở 3', '1182655581.jpg', '2020-01-10 02:14:07', '2020-01-10 02:14:07'),
(4, 'Ảnh Cơ Sở 3', '668940160.jpg', '2020-01-10 02:14:15', '2020-01-10 02:14:15'),
(5, 'Ảnh Cơ Sở 3', '98093988.jpg', '2020-01-10 02:14:31', '2020-01-10 02:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `images_cs4`
--

CREATE TABLE `images_cs4` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images_cs4`
--

INSERT INTO `images_cs4` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Ảnh Cơ Sở 4', '499763127.jpg', '2020-01-10 07:56:02', '2020-01-10 02:14:45'),
(2, 'Ảnh Cơ Sở 4', '16628568.jpg', '2020-01-10 02:14:59', '2020-01-10 02:14:59'),
(3, 'Ảnh Cơ Sở 4', '2081299608.jpg', '2020-01-10 02:15:08', '2020-01-10 02:15:08'),
(4, 'Ảnh Cơ Sở 4', '1183407826.jpg', '2020-01-10 02:15:16', '2020-01-10 02:15:16'),
(5, 'Ảnh Cơ Sở 4', '1037262910.jpg', '2020-01-10 02:15:24', '2020-01-10 02:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `images_cs5`
--

CREATE TABLE `images_cs5` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images_cs5`
--

INSERT INTO `images_cs5` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Ảnh Cơ Sở 5', '175327365.jpg', '2020-01-10 02:15:50', '2020-01-10 02:15:50'),
(2, 'Ảnh Cơ Sở 5', '1139743582.jpg', '2020-01-10 02:16:01', '2020-01-10 02:16:01'),
(3, 'Ảnh Cơ Sở 5', '423398534.jpg', '2020-01-10 02:16:10', '2020-01-10 02:16:10'),
(4, 'Ảnh Cơ Sở 5', '1900454474.jpg', '2020-01-10 02:16:21', '2020-01-10 02:16:21'),
(5, 'Ảnh Cơ Sở 4', '1892000297.jpg', '2020-01-10 02:16:32', '2020-01-10 02:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `images_customer`
--

CREATE TABLE `images_customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images_customer`
--

INSERT INTO `images_customer` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Ảnh Khách Hàng', '967275751.jpg', '2020-01-10 02:17:00', '2020-01-10 02:17:00'),
(2, 'Ảnh khách hàng', '906818299.jpg', '2020-01-10 02:17:09', '2020-01-10 02:17:09'),
(3, 'Ảnh khách hàng', '1309783918.jpg', '2020-01-10 02:17:19', '2020-01-10 02:17:19'),
(4, 'Ảnh khách hàng', '1032301331.jpg', '2020-01-10 02:17:28', '2020-01-10 02:17:28'),
(5, 'Ảnh khách hàng', '1472284363.jpg', '2020-01-10 02:17:35', '2020-01-10 02:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `images_food`
--

CREATE TABLE `images_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE `introduction` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`id`, `title`, `content`, `img`, `created_at`, `updated_at`) VALUES
(1, 'GIỚI THIỆU NHÀ HÀNG VUA CHẢ GIÒ', 'Hệ thống nhà hàng VUA CHẢ GIÒ là nhà hàng chả giò đầu tiên tại Hà Nội trang bị hệ thống hút mùi tiêu chuẩn Hàn Quốc, Bạn sẽ không còn lo lắng những mùi dầu mỡ khó chịu bám theo mình suốt cả ngày, Vua Chả Giò giới thiệu tới bạn một phong cách ẩm thực đặc sắc và hiện đại\r\nNếu bạn đang tìm một nơi hẹn hò lãng mạn, check in sang chảnh cùng bạn bè, những bữa ăn gia đình hay cuộc gặp gỡ đối tác quan trọng, Vua Chả Giò chính là sự lựa chọn tuyệt vời dành cho bạn. Một không gian lịch sự, ấm cúng với gam màu nâu, vàng và nội thất gỗ mộc đem lại sự gần gũi, thư giãn cho thực khách.\r\nBên cạnh nội thất độc đáo, Vua Chả Giò tự tin khẳng định chất lượng chả giò truyền thống với đầu bếp gần 20 năm kinh nghiệm chế biến sẽ đem lại sự hài lòng tuyệt đối cho bạn. Những nguyên liệu được lựa chọn kĩ lưỡng, bạn sẽ được trải nghiệm trọn vẹn tinh hoa ẩm thực truyền thống Hà Nội chỉ trong món chả giò.\r\nĐội ngũ nhân viên được đào tạo bài bản chuyên nghiệp với thái độ phục vụ thân thiện, nhiệt tình chắc chắn sẽ thổi hồn vào cho không gian ấm áp này. Một nơi tuyệt vời để bạn cảm nhận những khoảnh khắc quý giá trong cuộc sống, chia sẻ niềm vui bên bạn bè và gia đình.', '957988433.jpg', '2020-01-10 02:24:39', '2020-01-10 02:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `img`, `created_at`, `updated_at`) VALUES
(1, 'THỰC ĐƠN TẠI VUA CHẢ GIÒ', '463941153.gif', '2020-01-10 02:26:16', '2020-01-10 02:26:16'),
(2, 'THỰC ĐƠN TẠI VUA CHẢ GIÒ', '2091930401.jpg', '2020-01-10 02:26:34', '2020-01-10 02:26:34'),
(3, 'THỰC ĐƠN TẠI VUA CHẢ GIÒ', '1276770711.jpg', '2020-01-10 02:27:24', '2020-01-10 02:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `name`, `day`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Chả Giò Lã Vọng Hoàn Kiếm – Địa Điểm Ăn Chả Giò Lã Vọng Hoàn Kiếm', '5/10/2019', 'Nếu bạn là người Hà Nội hoặc đã từng đến Hà Nội đều biết đến món ăn đặc sản chả giò Lã Vọng ” chuẩn vị ” Hà Nội. Món ăn tinh tế, dân dã của người Hà Thành đã được báo chí và các trang ẩm thực hàng đầu trên thế giới ca ngợi.', '2020-01-10 06:41:20', '2020-01-10 06:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_detail`
--

CREATE TABLE `promotion_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `promotion_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promotion_detail`
--

INSERT INTO `promotion_detail` (`id`, `promotion_id`, `name`, `day`, `img`, `content`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Chả Giò Lã Vọng Hoàn Kiếm – Địa Điểm Ăn Chả Giò Lã Vọng Hoàn Kiếm', '5/10/2019', '1332443250.jpg', 'Nếu bạn là người Hà Nội hoặc đã từng đến Hà Nội đều biết đến món ăn đặc sản chả giò Lã Vọng ” chuẩn vị ” Hà Nội. Món ăn tinh tế, dân dã của người Hà Thành đã được báo chí và các trang ẩm thực hàng đầu trên thế giới ca ngợi. Từng miếng chả cá béo ngậy , thơm nức mũi thấm đẫm gia vị hòa quyện cùng mùi thơm của rau mùi thì là tạo nên một hương vị thật khó quên\r\n\r\nHà Nội nghìn năm văn hiến không chỉ có bề dày văn hóa lâu đời, mà ẩm thực nơi đây cũng không kém phần đặc sắc với sự đa dạng, phong phú. Nhắc đến phố cổ Hoàn Kiếm Hà Nội, nhiều người vẫn thường xuýt xoa khi nhớ đến món chả giò Lã Vọng, mà được chính tay hệ thống nhà hàng Vua Chả Giò có kinh nghiệm nhiều năm chế biến.\r\n\r\nHệ thống nhà hàng Vua Chả Giò nằm tọa lạc trên nhiều con phố chính của trung tâm Hà Nội. Ở quận Hoàn Kiếm thực khách có thể đến số 20 Trần Hưng Đạo và số 6 Lý Thường Kiệt đều nằm trên những tuyến phố chính và rất dễ tìm kiếm.\r\n\r\nQuý khách sẽ được tận hưởng kỉ niệm thân thuộc khi bước vào không gian sang trọng như nhà hàng 5 sao nhưng vẫn giữ được Hà Nội xưa của Vua Chả Cá. Ở tại Vua Chả Giò đội ngũ nhân viên bàn cũng được đào tạo chuyên nghiệp, phong cách làm việc nhanh nhẹn, phục vụ chu đáo nhất làm hài lòng cả những khách hàng lớn tuổi khó tính.\r\n\r\nMenu của Vua Chả Giò cũng có rất nhiều những món phong phú đa đạng. Từ chả giò tôm thịt đến lẩu ếch. Chả giò đến lúc ăn mới được mang lên phục vụ trên bàn, đảo cùng hành hoa và thì là trên chảo dầu nóng. Chả giò Lã Vọng là phải ăn với mắm vắt chanh tươi thêm vài lát ớt, tinh dầu cà cuống, rượu trắng, nước mỡ, đường, đem tất cả đánh đều tay cho sủi bọt lên thì mới đúng vị.\r\n\r\nMiếng chả giò nóng hổi đẫm nước mỡ sôi dậy mùi thơm, chấm mắm chanh ớt, ăn kèm thêm vài miếng hành củ tươi ngâm dấm để bớt đi vị ngậy của mỡ, bún rối mềm, cùng với rau sống ăn kèm như mùi, húng Láng, thì là. Cắn một miếng chả giò, cảm nhận vị ngọt của chả giò hòa cùng chút cay của mắm chanh ớt, chút thanh nhẹ của rau sống, tất cả hòa quyện vào nhau, từ hương vị đến màu sắc, làm nên món chả giò Lã Vọng tại Vua Chả Giò nức tiếng đất Hà Thành.\r\n\r\nNếu quý khách đi nhóm đông người cũng có thể dùng thêm lẩu thái, lẩu ếch cũng được rất nhiều phản hồi tốt từ những thực khách quen. Nước lẩu chua chua cay cay rất hợp phong vị thời tiét thu se lạnh. Dịp cuối tuần anh em gia đình ngồi bên nhau quây quần bên nồi lẩu sau tuần dài làm mệt mỏi còn gì bằng.\r\n\r\nNgoài ra Vua Chả Cá còn có những chương trình giảm giá 50% vào thứ 3 chỉ còn 65k/ 1 suất chả cá. Giảm giá 20% dành cho nhóm khách 10 người trở lên.', '2020-01-10 06:47:18', '2020-01-10 06:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'huyub98', 'huyrctcm@gmail.com', NULL, '$2y$10$LoPKTS0MdZjnCq4xQqrZp.o3gFLIfnQ.e8zWAMSaASETsz1a8/jV.', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles_detail`
--
ALTER TABLE `articles_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Kn_article_article_detail` (`articles_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_cs1`
--
ALTER TABLE `images_cs1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_cs2`
--
ALTER TABLE `images_cs2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_cs3`
--
ALTER TABLE `images_cs3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_cs4`
--
ALTER TABLE `images_cs4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_cs5`
--
ALTER TABLE `images_cs5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_customer`
--
ALTER TABLE `images_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_food`
--
ALTER TABLE `images_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
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
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion_detail`
--
ALTER TABLE `promotion_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kn_promotion_detail_promotion` (`promotion_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles_detail`
--
ALTER TABLE `articles_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images_cs1`
--
ALTER TABLE `images_cs1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images_cs2`
--
ALTER TABLE `images_cs2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images_cs3`
--
ALTER TABLE `images_cs3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images_cs4`
--
ALTER TABLE `images_cs4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images_cs5`
--
ALTER TABLE `images_cs5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images_customer`
--
ALTER TABLE `images_customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images_food`
--
ALTER TABLE `images_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `introduction`
--
ALTER TABLE `introduction`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `promotion_detail`
--
ALTER TABLE `promotion_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles_detail`
--
ALTER TABLE `articles_detail`
  ADD CONSTRAINT `Kn_article_article_detail` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`);

--
-- Constraints for table `promotion_detail`
--
ALTER TABLE `promotion_detail`
  ADD CONSTRAINT `kn_promotion_detail_promotion` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
