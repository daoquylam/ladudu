-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 31, 2017 lúc 10:45 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webproduct`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_group_id` int(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `admin_group_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'DAI UY', 1),
(7, 'admincp', '96e79218965eb72c92a549dd5a330112', 'Mod', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_group`
--

CREATE TABLE `admin_group` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `sort_order` tinyint(4) NOT NULL DEFAULT '0',
  `permissions` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `admin_group`
--

INSERT INTO `admin_group` (`id`, `name`, `sort_order`, `permissions`) VALUES
(1, 'Admin', 1, 'a:14:{s:4:\"tran\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:13:\"product_order\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:3:\"cat\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"product\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:11:\"admin_group\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"admin\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"user\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"news\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"info\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"support\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"contact\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"comment\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"slide\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"video\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}}'),
(2, 'Mod', 2, 'a:9:{s:3:\"cat\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"product\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"news\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"info\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"support\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"contact\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"comment\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"slide\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"video\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `site_title`, `meta_desc`, `meta_key`, `parent_id`, `sort_order`) VALUES
(1, 'ÁO NAM', '', '', '', 0, 0),
(2, 'QUẦN NAM', '', '', '', 0, 1),
(3, 'ĐỒNG HỒ NAM', '', '', '', 0, 2),
(5, 'GIÀY NAM', '', '', '', 0, 1),
(6, 'Áo sơ mi nam', '', '', '', 1, 2),
(7, 'Áo thun nam', '', '', '', 1, 3),
(9, 'Áo khoác nam', '', '', '', 1, 0),
(11, 'Quần short', '', '', '', 2, 3),
(12, 'Quần thể thao', '', '', '', 2, 4),
(13, 'Quần jean', '', '', '', 2, 0),
(14, 'Giày tây', '', '', '', 5, 1),
(15, 'Giày thể thao', '', '', '', 5, 2),
(16, 'Giày lười ,giày mọi nam', '', '', '', 5, 3),
(17, 'Đồng hồ LED Nam', '', '', '', 3, 5),
(18, 'Đồng hồ cơ Nam', '', '', '', 3, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `parent_id` int(255) NOT NULL,
  `user_name` text COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  `count_like` int(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `product_id`, `parent_id`, `user_name`, `user_email`, `user_id`, `user_ip`, `content`, `created`, `count_like`, `status`) VALUES
(1, 7, 0, 'Hoang van tuyen', 'hoangvantuyencnt@gmail.com', 0, '', 'San pham noi con khong admin?                    ', 1408798677, 10, 1),
(2, 7, 1, 'Vu van Anh', 'anh@gmail.com', 0, '', 'San pham nay van con hang', 1408799662, 3, 1),
(3, 7, 0, 'abc', 'hoang@gmail.com', 0, '', 'Test comment             ', 1408800324, 8, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(128) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `parent_id` int(255) NOT NULL,
  `title` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(50) COLLATE utf8_bin NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  `feature` enum('0','1') COLLATE utf8_bin NOT NULL,
  `count_view` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `intro`, `content`, `meta_desc`, `meta_key`, `image_link`, `created`, `feature`, `count_view`) VALUES
(1, 'Nhà lầu siêu xe hàng mã ế sưng, đồ chơi biển đảo hút khách', '(Dân trí) - Loạt đồ chơi trung thu biển đảo hướng về quê hương mới xuất hiện nhưng đã hút khách, các mặt hàng vàng mã “xa xỉ” không còn được nhiều người mua sắm.', '<p style=\"TEXT-ALIGN: left\">\r\n	Theo b&aacute;c Lan, một chủ cửa h&agrave;ng ở phố H&agrave;ng M&atilde; chia sẻ: &ldquo;Kinh tế kh&oacute; khăn n&ecirc;n người bỏ tiền triệu ra mua đồ c&uacute;ng đắt tiền như nh&agrave; lầu, xe hơi, điện thoại, ti vi c&ograve;n rất &iacute;t. Mọi người chỉ lựa chọn những loại đồ c&oacute; gi&aacute; b&igrave;nh d&acirc;n như quần &aacute;o, gi&agrave;y d&eacute;p v&agrave; mũ để c&uacute;ng. Những mặt h&agrave;ng b&aacute;n chạy nhất l&agrave; tiền &acirc;m phủ, v&agrave;ng, quần &aacute;o hay gi&agrave;y d&eacute;p v&igrave; c&oacute; gi&aacute; kh&aacute; b&igrave;nh d&acirc;n&rdquo;.</p>\r\n<p style=\"TEXT-ALIGN: center\">\r\n	<img alt=\"Mặt hàng đèn lồng biển đảo mới xuất hiện trong dịp Tết Trung Thu năm nay\" src=\"http://dantri4.vcmedia.vn/Urgz3f5tKFdDA0VUUO/Image/2014/08/n1-242e1.jpg\" /><br />\r\n	<span style=\"FONT-FAMILY: Tahoma; FONT-SIZE: 10pt\">Mặt h&agrave;ng đ&egrave;n lồng biển đảo mới xuất hiện trong dịp Tết Trung Thu năm nay</span></p>\r\n<p style=\"TEXT-ALIGN: center\">\r\n	<span style=\"FONT-FAMILY: Tahoma\"><img alt=\"Các thông điệp ý nghĩa yêu quê hương, biển đảo được in lên đèn lồng\" src=\"http://dantri4.vcmedia.vn/Urgz3f5tKFdDA0VUUO/Image/2014/08/n2-242e1.jpg\" /></span><br />\r\n	<span style=\"FONT-FAMILY: Tahoma; FONT-SIZE: 10pt\">C&aacute;c th&ocirc;ng điệp &yacute; nghĩa y&ecirc;u qu&ecirc; hương, biển đảo được in l&ecirc;n đ&egrave;n lồng</span></p>\r\n<p>\r\n	Một mặt h&agrave;ng đặc biệt của m&ugrave;a Vu Lan năm nay đ&oacute; l&agrave; loại đồ chơi &ldquo;biển đảo&rdquo;. Đ&oacute; l&agrave; những chiếc đ&egrave;n lồng được in những th&ocirc;ng điệp hướng về qu&ecirc; hương, biển đảo hết sức &yacute; nghĩa.</p>\r\n<div class=\"article-side-rail\" id=\"article-side-rail\">\r\n	<div class=\"article-video-relation\">\r\n		<div class=\"relative\">\r\n			<img alt=\"Mùa Vu Lan: \" class=\"thumb\" src=\"http://video-thumbs.vcmedia.vn///dantri/7iS0Ym1SbbOoTsWhJi6Q/2014/08/08/vangma-15e63.jpg\" /><img class=\"ico\" src=\"http://dantri3.vcmedia.vn/App_Themes/Default/Images/ico_video_play.png\" /></div>\r\n		<p class=\"caption\">\r\n			M&ugrave;a Vu Lan: &quot;Xe si&ecirc;u sang&quot; đỗ chật phố H&agrave;ng M&atilde;</p>\r\n	</div>\r\n</div>\r\n<p>\r\n	C&aacute;c chủ cửa h&agrave;ng tại đ&acirc;y cho biết, c&aacute;c loại mặt h&agrave;ng l&agrave;m thủ c&ocirc;ng truyền thống đ&egrave;n lồng, đầu l&acirc;n, đ&egrave;n &ocirc;ng sao vẫn được kh&aacute;ch h&agrave;ng ưa chuộng nhất. Ngo&agrave;i ra, mẫu đ&egrave;n lồng in sẵn mang th&ocirc;ng điệp hướng về biển đảo qu&ecirc; hương được nhiều bậc phụ huynh v&agrave; c&aacute;c em học sinh đặc biệt y&ecirc;u th&iacute;ch.</p>\r\n<p style=\"TEXT-ALIGN: center\">\r\n	<img alt=\"Mới xuất hiện nhưng những chiếc đèn lồng này được nhiều phụ huynh và các em nhỏ lựa chọn\" src=\"http://dantri4.vcmedia.vn/Urgz3f5tKFdDA0VUUO/Image/2014/08/n4-242e1.jpg\" /><br />\r\n	<span style=\"FONT-FAMILY: Tahoma; FONT-SIZE: 10pt\">Mới xuất hiện nhưng những chiếc đ&egrave;n lồng n&agrave;y được nhiều phụ huynh v&agrave; c&aacute;c em nhỏ lựa chọn</span><br />\r\n	&nbsp;</p>\r\n<p>\r\n	Chiếc đ&egrave;n lồng mang th&ocirc;ng điệp biển đảo được gh&eacute;p lại bằng 3 mảnh b&igrave;a kh&aacute;c nhau. Chiếc đ&egrave;n c&oacute; thể thắp s&aacute;ng v&agrave; ph&aacute;t nhạc khi được lắp pin ở tay cầm.Tuy nhi&ecirc;n, chi tiết đ&aacute;ng ch&uacute; &yacute; nhất đ&oacute; l&agrave; những th&ocirc;ng điệp hướng về biển đảo in tr&ecirc;n th&acirc;n của chiếc đ&egrave;n lồng như &ldquo;Em y&ecirc;u biển đảo qu&ecirc; hương&rdquo;, &ldquo;B&eacute; hướng về biển đảo&rdquo;, &ldquo;Em y&ecirc;u biển đảo Việt Nam&rdquo;, &ldquo;Em y&ecirc;u ch&uacute; bộ đội hải qu&acirc;n Việt Nam&rdquo;, với những h&igrave;nh ảnh chiến sĩ Hải qu&acirc;n Việt Nam s&uacute;ng kho&aacute;c tr&ecirc;n vai bảo vệ chủ quyền biển đảo Tổ quốc hay những chiếc t&agrave;u mang d&ograve;ng chữ Cảnh s&aacute;t biển Việt Nam&hellip;</p>\r\n', '', '', 'n1-242e1.jpg', 1407553602, '0', 1),
(2, 'Arsenal đồng ý bán Vermaelen cho Barcelona', '(Dân trí) - Theo những thông tin từ báo giới Anh, Arsenal đã quyết định từ chối MU, để bán trung vệ Vermarlen cho Barcelona. Mức giá của trung vệ này vào khoảng 15 triệu bảng.', '<p>\r\n	Như đ&atilde; biết, c&aacute;ch đ&acirc;y v&agrave;i ng&agrave;y, trung vệ Vermaelen đ&atilde; từ chối gia hạn hợp đồng với Arsenal. Điều đ&oacute; khiến cho CLB th&agrave;nh London t&igrave;m c&aacute;ch b&aacute;n cầu thủ n&agrave;y bằng mọi gi&aacute; để &ldquo;gỡ gạc&rdquo; ch&uacute;t &iacute;t ph&iacute; chuyển nhượng thay v&igrave; mất trắng cầu thủ n&agrave;y&nbsp;ở m&ugrave;a H&egrave; sang năm.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<div align=\"center\">\r\n	<span style=\"FONT-FAMILY: Tahoma; FONT-SIZE: 10pt\"><img _fl=\"\" align=\"middle\" alt=\"Vermaelen ở rất gần Barcelona\" src=\"http://dantri4.vcmedia.vn/uajiKupQ6reCuKKDlVlG/Image/2014/08/Vermaelen-d4361.jpg\" style=\"MARGIN: 5px\" width=\"450\" /><br />\r\n	Vermaelen ở rất gần Barcelona</span><br />\r\n	&nbsp;</div>\r\n<p>\r\n	Trong thời gian gần đ&acirc;y, MU v&agrave; Barcelona l&agrave; hai ứng cử vi&ecirc;n s&aacute;ng gi&aacute; trong cuộc đua gi&agrave;nh chữ k&yacute; của hậu vệ người Bỉ. Cuối c&ugrave;ng, HLV Wenger đ&atilde; quyết định từ chối MU để b&aacute;n Vermarlen cho Barcelona. Trước đ&oacute; c&oacute; th&ocirc;ng tin cho rằng Wenger muốn đổi Vermaelen lấy Smalling, tuy nhi&ecirc;n Van Gaal lại từ chối phương &aacute;n n&agrave;y.</p>\r\n<p>\r\n	Trước b&aacute;o giới, HLV Wenger cho biết: &ldquo;Ch&uacute;ng t&ocirc;i đ&atilde; nhận được những lời đề nghị từ nước ngo&agrave;i v&agrave; quyết định để Vermaelen rời khỏi Premier League. Bản th&acirc;n Arsenal cũng đang ở trong thế kh&oacute; trong vụ n&agrave;y&rdquo;.</p>\r\n<p>\r\n	Theo tờ BBC, Arsenal đ&atilde; đồng &yacute; lời đề nghị trị gi&aacute; 15 triệu bảng của Barcelona. Trong thời gian tới, trung vệ người Bỉ sẽ được quyền tự do đ&agrave;m ph&aacute;n với đội b&oacute;ng xứ Catalan.</p>\r\n<p>\r\n	Nhiều khả năng thương vụ n&agrave;y sẽ ho&agrave;n tất trong thời gian tới. Arsenal cũng bắt đầu t&igrave;m người thay thế Vermaelen. L&uacute;c n&agrave;y, ưu ti&ecirc;n số 1 của HLV Wenger l&agrave; trung vệ Nastasic của Man City, người nhiều khả năng sẽ mất vị tr&iacute; nếu như Mangala gia nhập Etihad.</p>\r\n<p align=\"right\">\r\n	<b>H.Long</b></p>\r\n', '', '', 'Vermaelen-d4361.jpg', 1407553674, '0', 2),
(3, 'Hà Nội: CSGT tìm người thân giúp cháu bé 8 tuổi đi lạc', '(Dân trí) - Theo người thân cháu Chi, trong lúc gia đình nghỉ trưa, cháu Chi mải chơi đã đi lạc từ phía phường Ngọc Lâm (quận Long Biên) sang nội thành. Trong lúc đang hoang mang tìm cháu, gia đình nhận được tin báo của lực lượng cảnh sát giao thông.', '<p>\r\n	Khoảng 15h30 ng&agrave;y 8/8, khi đang l&agrave;m nhiệm vụ tại chốt ph&iacute;a nam cầu Chương Dương (địa b&agrave;n quận Ho&agrave;n Kiếm, H&agrave; Nội), Thượng sĩ Phạm Gia Hợp v&agrave; Thượng t&aacute; L&ecirc; Đức Đo&agrave;n(Đội CSGT số 1) ph&aacute;t hiện một ch&aacute;u b&eacute; khoảng 7-8 tuổi đi bộ tr&ecirc;n khu vực cầu Chương Dương với vẻ mặt sợ sệt. Khi Thượng sĩ Hợp v&agrave; Thượng t&aacute; Đ&ograve;an tiến lại hỏi han, ch&aacute;u b&eacute; c&oacute; biểu hiện sợ sệt v&agrave; bật kh&oacute;c n&oacute;i rằng đi lạc đường.</p>\r\n<p>\r\n	Thấy ch&aacute;u b&eacute; lả đi v&igrave; mệt, Thượng sĩ Hợp đ&atilde; đưa ch&aacute;u về chốt trực, mua b&aacute;nh v&agrave; sữa để ch&aacute;u ăn đỡ đ&oacute;i v&agrave; trấn tĩnh lại. Đồng thời, Thượng sĩ Hợp th&ocirc;ng b&aacute;o tr&ecirc;n c&aacute;c phương tiện th&ocirc;ng tin đại ch&uacute;ng về đặc điểm nhận dạng của ch&aacute;u b&eacute;.</p>\r\n<p>\r\n	<img alt=\"Cháu Chi đoàn tụ với gia đình.\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/Image/2014/08/455-549e4.jpg\" /><br />\r\n	Ch&aacute;u Chi đo&agrave;n tụ với gia đ&igrave;nh.</p>\r\n<p>\r\n	Sau khi trấn tĩnh lại, ch&aacute;u b&eacute; cho biết t&ecirc;n l&agrave; Vương Kim Chi (SN 2007), năm nay l&ecirc;n lớp 2 trường tiểu học &Aacute;i Mộ, quận Long Bi&ecirc;n, H&agrave; Nội. Bằng c&aacute;c biện ph&aacute;p nghiệp vụ, Thượng sĩ Hợp v&agrave; Thượng t&aacute; Đo&agrave;n đ&atilde; li&ecirc;n hệ được với c&ocirc; gi&aacute;o chủ nhiệm ch&aacute;u Chi để th&ocirc;ng b&aacute;o với gia đ&igrave;nh ch&aacute;u b&eacute; biết.</p>\r\n<p>\r\n	Gần 2 tiếng đồng hồ sau, mẹ ch&aacute;u Chi l&agrave; chị Đo&agrave;n Thị Khuyến (SN 1983, ở Ngọc L&acirc;m, Long Bi&ecirc;n, H&agrave; Nội) đ&atilde; t&igrave;m đến trụ sở Đội CSGT số 1 nhận lại con. Chị Khuyến cho cho biết, khoảng 14h c&ugrave;ng ng&agrave;y, trong l&uacute;c gia đ&igrave;nh nghỉ trưa, ch&aacute;u Chi mải chơi đ&atilde; đi lạc từ b&ecirc;n n&agrave;y cầu sang b&ecirc;n kia nội th&agrave;nh.</p>\r\n<p>\r\n	Trong l&uacute;c hoang mang kh&ocirc;ng biết t&igrave;m ch&aacute;u ở đ&acirc;u, gia đ&igrave;nh được th&ocirc;ng b&aacute;o ch&aacute;u Chi đ&atilde; được c&aacute;c chiến sĩ CSGT tận t&igrave;nh gi&uacute;p đỡ. Thay mặt gia đ&igrave;nh, chị Khuyến đ&atilde; viết thư cảm ơn c&aacute;c chiến sĩ cảnh s&aacute;t giao th&ocirc;ng.</p>\r\n<p>\r\n	<strong>Tiến Nguy&ecirc;n</strong></p>\r\n', '', '', '455-549e4.jpg', 1407553969, '0', 9),
(4, 'Mỹ tăng cường không kích Iraq', '(Dân trí) - Sau khi Tổng thống Obama phê chuẩn cho không kích các mục tiêu của nhóm phiến quân Hồi giáo IS ở miền bắc Iraq, Lầu Năm Góc đã tiến hành 3 đợt không kích.', '<p>\r\n	C&aacute;c vụ kh&ocirc;ng k&iacute;ch nhằm v&agrave;o nh&oacute;m Nh&agrave; nước Hồi gi&aacute;o (IS) ở miền bắc Iraq l&agrave; những cuộc tấn c&ocirc;ng đầu ti&ecirc;n kể từ khi Mỹ trực tiếp tham gia v&agrave;o hoạt động qu&acirc;n sự ở Iraq v&agrave; sau đ&oacute; r&uacute;t qu&acirc;n v&agrave;o cuối năm 2011.</p>\r\n<p>\r\n	Trong cuộc kh&ocirc;ng k&iacute;ch đầu ti&ecirc;n v&agrave;o ng&agrave;y thứ s&aacute;u, m&aacute;y bay kh&ocirc;ng người l&aacute;i c&ugrave;ng chiến đấu cơ hải qu&acirc;n Mỹ đ&atilde; nhắm v&agrave;o c&aacute;c mục ti&ecirc;u gần th&agrave;nh phố Irbil của người Kurd. Sau đ&oacute; họ tiến h&agrave;nh th&ecirc;m 2 đợt tấn c&ocirc;ng nữa.</p>\r\n<p>\r\n	Nh&oacute;m Hồi gi&aacute;o người Sunni IS đ&atilde; chiếm quyền kiểm so&aacute;t nhiều khu vực của Iraq v&agrave; cả Syria.</p>\r\n<p>\r\n	H&agrave;ng chục ng&agrave;n người thuộc c&aacute;c nh&oacute;m d&acirc;n tộc thiểu số đ&atilde; phải rời bỏ nh&agrave; cửa khi phiến qu&acirc;n tiến v&agrave;o.</p>\r\n<p>\r\n	Nh&oacute;m IS hay c&ograve;n được gọi l&agrave; ISIS cũng đ&atilde; chiếm đập lớn nhất Iraq.</p>\r\n<p>\r\n	Lầu Năm G&oacute;c cho biết trong đợt kh&ocirc;ng k&iacute;ch thứ hai, m&aacute;y bay kh&ocirc;ng người l&aacute;i của Mỹ đ&atilde; ph&aacute; hủy một vị tr&iacute; đặt ph&aacute;o của phiến qu&acirc;n v&agrave; ti&ecirc;u diệt một nh&oacute;m phiến qu&acirc;n.</p>\r\n<p>\r\n	Chỉ hơn một tiếng sau, chiến đấu cơ F/A-18 đ&atilde; d&ugrave;ng bom c&oacute; laser dẫn đường bắn tr&uacute;ng một đo&agrave;n 7 xe của IS.</p>\r\n<p>\r\n	Trước đ&oacute;, v&agrave;o ng&agrave;y thứ s&aacute;u, 2 quả bom đ&atilde; được thả xuống một khẩu ph&aacute;o của IS d&ugrave;ng để chống lại lực lượng đang bảo vệ Irbil, thủ phủ của v&ugrave;ng tự trị của người Kurd.</p>\r\n<p>\r\n	Ph&aacute;t ng&ocirc;n vi&ecirc;n Bộ Ngoại giao Mỹ Marie Harf cho biết mục ti&ecirc;u trước mắt của c&aacute;c cuộc kh&ocirc;ng k&iacute;ch l&agrave; &ldquo;ngăn chặn bước tiến&rdquo; của IS về Irbil.</p>\r\n<p>\r\n	&ldquo;Sau đ&oacute; về l&acirc;u d&agrave;i chung t&ocirc;i muốn phối hợp hỗ trợ th&ecirc;m thời gian v&agrave; kh&ocirc;ng gian cho c&aacute;c lực lượng của người Kurd để xốc lại lực lượng, chiến đấu với đe dọa của ch&iacute;nh họ&rdquo;.</p>\r\n<p>\r\n	B&agrave; cũng khẳng định &ldquo;kh&ocirc;ng c&oacute; giải ph&aacute;p qu&acirc;n sự l&acirc;u d&agrave;i của Mỹ ở đ&oacute;&rdquo;.</p>\r\n<p>\r\n	Mặc d&ugrave; ch&iacute;nh phủ Iraq v&agrave; V&ugrave;ng người Kurd vẫn c&ograve;n đang c&oacute; bất đồng trong những th&aacute;ng qua, nhưng Thủ tướng Nouri Maliki đ&atilde; ph&aacute;i một m&aacute;y bay chở đạn tới Irbil v&agrave; thứ s&aacute;u. Trước đ&oacute; &ocirc;ng đ&atilde; lệnh cho lực lượng kh&ocirc;ng qu&acirc;n hỗ trợ cho c&aacute;c tay s&uacute;ng người Kurd để chiến đấu chống IS.</p>\r\n<p>\r\n	<b>Trung Anh</b></p>\r\n', '', '', '1-7d48c.jpg', 1407554007, '0', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `transaction_id` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `data` text COLLATE utf8_bin NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`transaction_id`, `id`, `product_id`, `qty`, `amount`, `data`, `status`) VALUES
(7, 6, 2, 1, '4000000.0000', '', 1),
(8, 7, 2, 1, '4000000.0000', '', 0),
(9, 8, 8, 1, '10000000.0000', '', 0),
(10, 9, 8, 1, '10000000.0000', '', 0),
(11, 10, 8, 1, '10000000.0000', '', 2),
(12, 11, 8, 1, '10000000.0000', '', 0),
(13, 12, 8, 2, '20000000.0000', '', 0),
(14, 13, 8, 1, '10000000.0000', '', 1),
(15, 14, 3, 1, '5000000.0000', '', 0),
(16, 15, 3, 1, '5000000.0000', '', 0),
(17, 16, 3, 1, '5000000.0000', '', 0),
(18, 17, 3, 1, '5000000.0000', '', 0),
(19, 18, 3, 1, '5000000.0000', '', 0),
(20, 19, 3, 1, '5000000.0000', '', 0),
(21, 20, 8, 1, '10000000.0000', '', 0),
(22, 21, 65, 1, '250000.0000', '', 0),
(22, 22, 64, 1, '450000.0000', '', 0),
(23, 23, 65, 1, '250000.0000', '', 0),
(23, 24, 63, 1, '340000.0000', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `maker_id` int(255) NOT NULL,
  `price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `image_link` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image_list` text COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  `view` int(11) NOT NULL DEFAULT '0',
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `site_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `warranty` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(255) NOT NULL,
  `buyed` int(255) NOT NULL,
  `rate_total` int(255) NOT NULL,
  `rate_count` int(255) NOT NULL,
  `gifts` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `feature` enum('0','1') CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `catalog_id`, `name`, `maker_id`, `price`, `content`, `discount`, `image_link`, `image_list`, `created`, `view`, `meta_key`, `site_title`, `warranty`, `total`, `buyed`, `rate_total`, `rate_count`, `gifts`, `video`, `meta_desc`, `feature`) VALUES
(2, 15, 'Giày  thể thao ', 0, '600000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 0, '4.jpg', '', 0, 7, '', '', '12 tháng', 0, 0, 4, 1, 'USB 4G', 'https://www.youtube.com/watch?v=fTc5tuEn6_U', '', '0'),
(24, 15, 'Giày thể thao', 0, '300000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '16.jpg', '', 0, 0, '', '', '2 tháng', 0, 0, 3, 2, 'vớ', '', '', '0'),
(25, 15, 'Giày thể thao', 0, '500000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '17.jpg', '', 0, 0, '', '', '2 tháng', 0, 0, 0, 2, 'vớ', '', '', '0'),
(4, 9, 'ĐAI ÚY YOO', 0, '3200000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 2800000, '8.jpg', '', 0, 6, '', '', '12 tháng', 0, 0, 12, 3, 'USB 4G', 'https://www.youtube.com/watch?v=SdHQkkRc-hc', '', '0'),
(5, 15, 'GIÀY NIKE', 0, '1000000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 500000, '6.jpg', '', 0, 1, '', '', '12 tháng', 0, 0, 0, 0, 'USB 4G', 'https://www.youtube.com/watch?v=ToASX6axGuw', '', '0'),
(6, 12, 'ĐỒ THỂ THAO', 0, '400000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 200000, '2.jpg', '', 0, 3, '', '', '12 tháng', 0, 0, 0, 0, 'USB 4G', 'https://www.youtube.com/watch?v=ToASX6axGuw', '', '0'),
(7, 7, 'ÁO LEN', 0, '1000000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 800000, '9.jpg', '', 0, 75, '', '', '12 tháng', 0, 0, 7, 2, 'USB 4G', 'https://www.youtube.com/watch?v=fTc5tuEn6_U', '', '0'),
(8, 9, 'ÁO KHOÁC DA', 0, '800000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 500000, '1.jpg', '', 0, 114, '', '', '12 tháng', 0, 0, 17, 5, 'USB 4G', 'https://www.youtube.com/watch?v=fTc5tuEn6_U', '', '0'),
(9, 14, 'GIÀY TÂY', 0, '3200000.0000', '<p>\r\n	B&agrave;i viết cho sản phẩm n&agrave;y đang được cập nhật ...</p>\r\n', 2800000, '5.jpg', 'a:0:{}', 0, 24, '', '', '12 tháng', 0, 0, 4, 1, '0', 'https://www.youtube.com/watch?v=fTc5tuEn6_U', '', '0'),
(10, 18, 'ĐỒNG HỒ ', 0, '200000.0000', '<p>\r\n	B&agrave;i viết cho sản phẩm n&agrave;y đang được cập nhật ...</p>\r\n', 0, '7.jpg', 'a:0:{}', 0, 30, '', '', '12 tháng', 0, 0, 4, 1, '0', 'https://www.youtube.com/watch?v=fTc5tuEn6_U', '', '0'),
(17, 16, 'Giày lười Nam', 0, '20000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...\r\n', 0, '14.jpg', '', 0, 0, '', '', '12 tháng', 0, 1, 4, 2, 'USB 5G', '', '', '0'),
(18, 16, 'Giày lười Nam', 0, '800000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 0, '10.jpg', '', 0, 0, '', '', '12 tháng', 0, 11, 4, 2, 'USB 4G', '', '0', '0'),
(19, 16, 'Giày lười Nam', 0, '1200000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 300000, '11.jpg', '', 0, 0, '', '', '12 tháng', 0, 3, 4, 4, 'USB 4G', '', '', '0'),
(20, 16, 'Giày lười Nam', 0, '400000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 0, '12.jpg', '', 0, 0, '', '', '12 tháng', 0, 34, 2, 2, 'gấu bông', '', '', '0'),
(21, 16, 'Giày lười Nam', 0, '600000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 0, '13.jpg', '', 0, 1, '', '', '12 tháng', 0, 0, 2, 3, 'USB 4G', '', '', '0'),
(22, 16, 'Giày lười Nam', 0, '1200000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 500000, '15.jpg', '', 0, 3, '', '', '12 tháng', 0, 0, 2, 3, 'USB 4G', '', '', '0'),
(23, 9, 'Vest', 0, '2500000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 1500000, 'vest.jpg', '', 0, 16, '', '', '12 tháng', 0, 0, 4, 1, 'USB 4G', 'https://www.youtube.com/watch?v=aE0eV2YR51k', '', '0'),
(26, 15, 'Giày thể thao', 0, '400000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '18.jpg', '', 0, 0, '', '', '2 tháng', 0, 25, 0, 2, 'vớ', '', '', '0'),
(27, 15, 'Giày thể thao', 0, '800000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 200000, '19.jpg', '', 0, 1, '', '', '2 tháng', 0, 0, 0, 2, 'vớ', '', '', '0'),
(28, 14, 'Giày Tây', 0, '700000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '20.jpg', '', 0, 0, '', '', '2 tháng', 0, 0, 2, 4, '', '', '', '0'),
(29, 14, 'Giày Tây', 0, '1200000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '21.jpg', '', 0, 0, '', '', '2 tháng', 0, 0, 5, 2, '', '', '', '0'),
(30, 14, 'Giày Tây', 0, '2500000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 200000, '22.jpg', '', 0, 0, '', '', '2 tháng', 0, 0, 2, 14, '', '', '', '0'),
(31, 14, 'Giày Tây', 0, '3500000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 500000, '23.jpg', '', 0, 0, '', '', '2 tháng', 0, 0, 5, 2, '', '', '', ''),
(32, 18, 'Đồng Hồ Cơ', 0, '300000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '25.jpg', '', 0, 1, '', '', '1 tháng', 0, 0, 3, 2, '', '', '', '0'),
(33, 18, 'Đồng Hồ Cơ', 0, '500000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ..', 0, '26.jpg', '', 0, 0, '', '', '1 tháng', 0, 0, 2, 1, '', '', '', '0'),
(34, 18, 'Đồng Hồ Cơ', 0, '2000000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 500000, '27.jpg', '', 0, 2, '', '', '', 0, 0, 4, 3, '', '', '', '0'),
(35, 18, 'Đồng Hồ Cơ', 0, '900000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '28.jpg', '', 0, 2, '', '', '1 tháng', 0, 0, 5, 2, '', '', '', '0'),
(36, 18, 'Đồng Hồ Cơ', 0, '700000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '29.jpg', '', 0, 2, '', '', '1 tháng', 0, 0, 3, 2, '', '', '', '0'),
(37, 17, 'Đồng Hồ Led', 0, '200000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '30.jpg', '', 0, 0, '', '', '', 0, 0, 3, 2, '', '', '', '0'),
(38, 17, 'Đồng Hồ Led', 0, '500000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '31.jpg', '', 0, 0, '', '', '', 0, 0, 3, 2, '', '', '', '0'),
(39, 13, 'jean Nam', 0, '800000.0000', '', 0, '321.jpg', '[]', 1463387130, 2, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(40, 13, 'jean Nam', 0, '2000000.0000', '', 200000, '331.jpg', '[]', 1463387870, 1, '', '', '1 tuần', 0, 0, 0, 0, '', '', '', '0'),
(41, 13, 'jean Nam', 0, '400000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '34.jpg', '', 0, 0, '', '', '', 0, 0, 3, 2, '', '', '', '0'),
(42, 13, 'jean Nam', 0, '600000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '35.jpg', '', 0, 0, '', '', '', 0, 0, 3, 2, '', '', '', '0'),
(43, 13, 'jean Nam', 0, '800000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ..', 0, '36.jpg', '', 0, 0, '', '', '', 0, 0, 4, 5, 'quần chíp', '', '', '0'),
(44, 12, 'SLNA', 0, '200000.0000', 'rất đẹp', 0, '37.jpg', '', 0, 1, '', '', '', 0, 0, 3, 4, 'nơ', '', '', '0'),
(45, 12, 'MU', 0, '400000.0000', 'luis Vangal', 0, '38.jpg', '', 0, 0, '', '', '', 0, 0, 0, 0, 'gấu', '', '', '0'),
(46, 12, 'Liv', 0, '400000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '39.jpg', '', 0, 1, '', '', '', 0, 0, 5, 4, '1 suit', '', '', '0'),
(47, 12, 'Việt Nam', 0, '1000000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 200000, '40.jpg', '', 0, 2, '', '', '', 0, 0, 0, 0, 'chíp', '', '', '0'),
(48, 12, 'CR7', 0, '50000000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ....', 0, '77.JPG', '', 0, 5, '', '', '', 0, 600, 0, 0, 'GÀ', '', '', '0'),
(49, 11, 'sort  Nam', 0, '200000.0000', '', 0, '411.jpg', '[]', 1463399530, 0, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(50, 11, 'sort  Nam', 0, '300000.0000', '', 20000, '421.jpg', '[]', 1463399586, 0, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(51, 11, 'sort  Nam', 0, '300000.0000', '', 50000, '431.jpg', '[]', 1463399627, 0, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(52, 11, 'sort  Nam', 0, '200000.0000', '', 20000, '441.jpg', '[]', 1463399667, 1, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(53, 11, 'sort  Nam', 0, '100000.0000', '', 0, '451.jpg', '[]', 1463399700, 0, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(54, 11, 'sort   JEAN Nam', 0, '300000.0000', '', 20000, '461.jpg', '[]', 1463399737, 1, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(55, 9, 'ÁO khoác da', 0, '400000.0000', '', 20000, '471.jpg', '[]', 1463399869, 0, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(56, 9, 'ÁO khoác nắng', 0, '200000.0000', '', 0, '481.jpg', '[]', 1463399923, 1, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(57, 7, 'ÁO thun ', 0, '200000.0000', '', 0, '501.jpg', '[]', 1463399956, 0, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(58, 7, 'ÁO thun ', 0, '150000.0000', '', 0, '511.jpg', '[]', 1463399996, 0, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(59, 7, 'ÁO thun ', 0, '200000.0000', '', 30000, '531.jpg', '[]', 1463400045, 0, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(60, 7, 'ÁO thun ', 0, '150000.0000', '', 0, '541.jpg', '[]', 1463400078, 0, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(61, 6, 'Sơ mi trắng', 0, '300000.0000', '', 0, '561.jpg', '[]', 1463400133, 1, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(62, 6, 'Sơ mi màu', 0, '300000.0000', '', 20000, '571.jpg', '[]', 1463400169, 0, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(63, 6, 'sọc caro', 0, '350000.0000', '', 10000, '601.jpg', '[]', 1463400235, 1, '', '', '', 0, 0, 0, 0, '', '', '', '0'),
(64, 6, 'sọc caro', 0, '500000.0000', '', 50000, '59.jpg', '', 0, 36, '', '', '', 0, 45, 4, 2, 'áo thun', '', '', '0'),
(65, 7, 'áo thun tay dài', 0, '250000.0000', '', 0, '52.jpg', '', 0, 18, '', '', '', 0, 0, 0, 0, '', '', '', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `name`, `image_name`, `image_link`, `link`, `info`, `sort_order`) VALUES
(1, 'Slide 1', '', '41.jpg', 'http://dantri.com.vn/', '0', 1),
(2, 'Slide 2', '', '21.jpg', 'http://dantri.com.vn/', '', 2),
(3, 'Slide 3', '', '31.jpg', 'http://dantri.com.vn/', '', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `support`
--

CREATE TABLE `support` (
  `id` int(255) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `yahoo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `support`
--

INSERT INTO `support` (`id`, `name`, `yahoo`, `gmail`, `skype`, `phone`, `sort_order`) VALUES
(1, 'Hoang van tuyen', 'tuyenht90', 'hoangvantuyencnt@gmail.com', 'tuyencnt90', '01686039488', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id` bigint(20) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `payment` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_info` text COLLATE utf8_bin NOT NULL,
  `message` varchar(255) COLLATE utf8_bin NOT NULL,
  `security` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`id`, `type`, `status`, `user_id`, `user_name`, `user_email`, `user_phone`, `amount`, `payment`, `payment_info`, `message`, `security`, `created`) VALUES
(7, 0, 1, 15, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', '4000000.0000', 'nganluong', '', '', '', 1405548000),
(8, 0, 0, 15, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', '4000000.0000', 'nganluong', '', '', '', 1407917785),
(9, 0, 0, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', '10000000.0000', 'nganluong', '', '111', '', 1407918071),
(10, 0, 0, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', '10000000.0000', 'nganluong', '', '111111', '', 1407918235),
(11, 0, 2, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '111111', '10000000.0000', 'nganluong', '', '111', '', 1407918299),
(12, 0, 1, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '7667676', '10000000.0000', 'nganluong', '', '', '', 1407923211),
(13, 0, 1, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '11', '20000000.0000', 'nganluong', '', '11', '', 1407926712),
(14, 0, 1, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', '10000000.0000', 'nganluong', '', '', '', 1407981011),
(15, 0, 0, 19, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', '5000000.0000', 'baokim', '', '', '', 1408099561),
(16, 0, 0, 19, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', '5000000.0000', 'baokim', '', '', '', 1408099692),
(17, 0, 0, 19, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', '5000000.0000', 'baokim', '', '', '', 1408099749),
(18, 0, 0, 19, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', '5000000.0000', 'baokim', '', '', '', 1408099776),
(19, 0, 0, 19, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', '5000000.0000', 'baokim', '', '', '', 1408099813),
(23, 0, 0, 21, 'huy nguyen', 'huyhee0808@gmail.com', '212123213', '590000.0000', 'offline', '', 'gfedsdsdsd', '', 1463648997);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`, `created`) VALUES
(16, 'Hoàng văn Tuyền', 'hoangsondev212@gmail.com', '01686039488', '111111', '21232f297a57a5a743894a0e4a801fc3', 1405589118),
(19, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', '111', '96e79218965eb72c92a549dd5a330112', 0),
(20, 'nguyen thi bao ngoc', 'huyvipcr70808@gmail.com', '1234345476', 'ewewewewe', 'e10adc3949ba59abbe56e057f20f883e', 1463322575),
(21, 'huy nguyen', 'huyhee0808@gmail.com', '212123213', '304', 'e10adc3949ba59abbe56e057f20f883e', 1463501147);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id` int(255) NOT NULL,
  `count_view` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `feature` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `view` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`id`, `count_view`, `name`, `images`, `intro`, `link`, `feature`, `created`, `view`) VALUES
(10, 0, 'Chuyện Tình Trên Facebook - Hồ Việt Trung [Official]', '1386147113843_video.jpg', '', 'http://www.youtube.com/watch?v=3ZlLyU2L4P0', 1386146497, 2013, 4),
(8, 0, 'Chỉ còn trong mơ & Phải không em', '1386147092891_video.jpg', '', 'http://www.youtube.com/watch?v=RfNJ43HBzOM', 1386146505, 2013, 6),
(7, 0, '[HD] Anh Xin Lỗi - Minh Vương M4U', '1386147058495_video.jpg', '', 'http://www.youtube.com/watch?v=OCZ4D9qT8lI', 1386146502, 2013, 17),
(16, 0, 'Nhốt Em Vào Tim - Hồ Việt Trung [Official]', '1386147135763_video.jpg', '', 'http://www.youtube.com/watch?v=fkDSnN_I_Ig', 0, 1386147135, 0),
(17, 0, 'Chỉ Yêu Mình Em - Châu Khải Phong [Official]', '1386147154302_video.jpg', '', 'http://www.youtube.com/watch?v=l2MydtlKra8', 0, 1386147154, 4),
(18, 0, 'Số Nghèo - Châu Khải Phong [Official]', '138614718279_video.jpg', '', 'http://www.youtube.com/watch?v=LJRvv8U6Dos', 1386147576, 1386147182, 1),
(19, 0, 'Trò Chơi Đắng Cay - Châu Khải Phong [Official]', '138614721063_video.jpg', '', 'http://www.youtube.com/watch?v=3J8d8-YgOlU', 1386147575, 1386147210, 0),
(20, 0, 'Sầu Tím Thiệp Hồng - Quang Lê & Lệ Quyên ( Liveshow Quang Lê )', '1386147271236_video.jpg', '', 'http://www.youtube.com/watch?v=Kd5OrV4Y_bs', 0, 1386147271, 0),
(21, 0, 'Gõ cửa trái tim Quang Lê - Mai Thiên Vân', '1386147292776_video.jpg', '', 'http://www.youtube.com/watch?v=9oVxDQsgXIQ', 1386147577, 1386147292, 0),
(22, 0, 'Cô Hàng Xóm - Quang Lê', '1386147310490_video.jpg', '', 'http://www.youtube.com/watch?v=nA9ub4zlel8', 0, 1386147310, 0),
(23, 0, 'Lam Truong - Mai Mai', '1386147353743_video.jpg', '', 'http://www.youtube.com/watch?v=o1igATj9lMw', 0, 1386147353, 0),
(24, 0, 'Lỡ Yêu Em Rồi - Bằng Kiều', '1386147364632_video.jpg', '', 'http://www.youtube.com/watch?v=HYi-5dM_c34', 0, 1386147364, 0),
(25, 0, 'Bản Tình Cuối - Bằng Kiều', '1386147389790_video.jpg', '', 'http://www.youtube.com/watch?v=pNr7jEQ8LT8', 0, 1386147389, 2),
(26, 1, 'Phút cuối - Bằng Kiều', '1386150063515_video.jpg', '', 'http://www.youtube.com/watch?v=sA_gM6_eqXU', 0, 1386150063, 0),
(27, 0, 'Giấc Mơ (Live) - Bùi Anh Tuấn ft Yanbi', '1386150103768_video.jpg', '', 'http://www.youtube.com/watch?v=XLr463dUNgQ', 0, 1386150103, 0),
(28, 4, 'Anh Nhớ Em - Tuấn Hưng', '1386150121482_video.jpg', '', 'http://www.youtube.com/watch?v=ewNQtt1RiSk', 0, 1386150121, 0),
(29, 0, 'LE QUYEN & TUAN HUNG - Nhu Giac Chiem Bao', '1386150141608_video.jpg', '', 'http://www.youtube.com/watch?v=DaMARvh0kms', 0, 1386150141, 0),
(30, 10, 'Dĩ Vãng Cuộc Tình - Duy Mạnh ft Tuấn Hưng', '140905101897_video.jpg', '', 'http://www.youtube.com/watch?v=g8I-LoBIFgQ', 0, 1409051018, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `admin_group`
--
ALTER TABLE `admin_group`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `news` ADD FULLTEXT KEY `title` (`title`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `product` ADD FULLTEXT KEY `name` (`name`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `admin_group`
--
ALTER TABLE `admin_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `support`
--
ALTER TABLE `support`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `video`
--
ALTER TABLE `video`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
