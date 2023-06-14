-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 21, 2022 lúc 07:24 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `trac_nghiem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hoi`
--

CREATE TABLE `cau_hoi` (
  `ch_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cau_hoi`
--

INSERT INTO `cau_hoi` (`ch_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Đồng chí cho biết ngày truyền thống của Lữ đoàn Pháo binh 6?', NULL, NULL),
(2, 'Đồng chí hãy cho biết nội dung nào dưới đây là nội dung chữ vàng truyền thống của Lữ đoàn Pháo binh 6?', NULL, NULL),
(3, 'Đồng chí hãy cho biết nội dung nào dưới đây thể hiện chữ vàng truyền thống của Quân khu 9?', NULL, NULL),
(4, 'Quân khu 9 được thành lập ngày, tháng, năm nào?', NULL, NULL),
(5, 'Đồng chí cho biết Tiểu đoàn đầu tiên của Lữ đoàn 6?', NULL, NULL),
(6, 'Đồng chí hãy cho biết những nội dung nào dưới đây là chuẩn mực “Bộ đội Cụ Hồ” theo Chỉ thị 855 của Quân ủy Trung ương?', NULL, NULL),
(7, 'Đồng chí hãy cho biết phương châm Đại hội XIII của Đảng ?', NULL, NULL),
(8, 'Đồng chí hãy cho biết Đại hội XIII của Đảng xác định phương hướng xây dựng Quân đội nhân dân Việt Nam đến năm 2025 như thế nào?', NULL, NULL),
(9, 'Có bao nhiêu chuẩn mực xứng danh “Bộ đội Cụ Hồ”?', NULL, NULL),
(10, 'Đồng chí hãy cho biết Thông điệp 5K của Bộ Y tế trong phòng, chống dịch bệnh Covid-19 là gì?', NULL, NULL),
(11, 'Đồng chí hãy cho biết theo Thông tư số 16/2020/TT-BQP của Bộ Quốc phòng quy định những hình thức xử lý kỷ luật nào đối với HSQ - BS?', NULL, NULL),
(12, 'Theo thông tư số 16/2020/TT-BQP ngày 21/2/2020 của Bộ quốc phòng về quy định việc áp dụng các hình thức kỷ luật, trình tự, thủ tục, thời hiệu, thời hạn và thẩm quyền xử lý kỷ luật trong Bộ quốc phòng. Điều 20 xử lý quân nhân vi phạm về?', NULL, NULL),
(13, 'Theo thông tư số 16/2020/TT-BQP ngày 21/2/2020 của Bộ quốc phòng về quy định việc áp dụng các hình thức kỷ luật, trình tự, thủ tục, thời hiệu, thời hạn và thẩm quyền xử lý kỷ luật trong Bộ quốc phòng. Điều 13 xử lý quân nhân vi phạm về tội?', NULL, NULL),
(14, 'Theo thông tư số 16/2020/TT-BQP ngày 21/2/2020 của Bộ quốc phòng về quy định việc áp dụng các hình thức kỷ luật, trình tự, thủ tục, thời hiệu, thời hạn và thẩm quyền xử lý kỷ luật trong Bộ quốc phòng. Điều 14 xử lý quân nhân vi phạm về tội?', NULL, NULL),
(15, 'Đồng chí hãy cho biết Thông điệp thực hiện 5T của Bộ Y tế trong phòng chống dịch bệnh Covid-19 là gì?', NULL, NULL),
(16, 'Chỉ thị 05-CT/TW của Bộ Chính trị có nội dung gì?', NULL, NULL),
(17, 'Những nội dung nào dưới đây là tiêu chuẩn xây dựng đơn vị VMTD theo chỉ thị 917/CT-BQP của Bộ trưởng Bộ Quốc phòng?', NULL, NULL),
(18, 'Tên chủ đề phong trào thi đua phòng chống Covid-19?', NULL, NULL),
(19, 'Phong trào thi đua Quyết thắng năm 2021 tên là gì?', NULL, NULL),
(20, 'Có bao nhiêu đồng chí nữ là ủy viên Ban Chấp hành Trung ương khóa XIII được bầu tại Đại hội XIII của Đảng?', NULL, NULL),
(21, 'Một trong ba giải pháp đột phá của công tác xây dựng Đảng được Đại hội XIII của Đảng đề ra là?', NULL, NULL),
(22, 'Biên giới Việt Nam – Campuchia dài bao nhiêu km?', NULL, NULL),
(23, 'Bộ Tư lệnh 86 là tên gọi viết tắt của?', NULL, NULL),
(24, 'Bộ Tư lệnh 86 được thành lập vào nagỳ tháng năm nào?', NULL, NULL),
(25, 'Đâu là phẩm chất cần có của “Bộ đội Cụ Hồ” thời kỳ mới?', NULL, NULL),
(26, 'Một trong những chuẩn mực phẩm chất “Bộ đội Cụ Hồ” trong thời kỳ mới theo Chỉ thị 855-CT/QUTW của Thường vụ Quân ủy Trung ương.', NULL, NULL),
(27, 'Quần đảo Hoàng Sa thuộc tỉnh (thành phố) nào của Việt Nam?', NULL, NULL),
(28, 'Quần đảo Trường Sa thuộc tỉnh (thành phố) nào của Việt Nam?', NULL, NULL),
(29, 'Trong các tỉnh sau tỉnh nào có đường biên giới giáp Campuchia? ', NULL, NULL),
(30, 'An Giang có bao nhiêu cửa khẩu quốc tế với Campuchia?', NULL, NULL),
(31, 'Đại hội đại biểu toàn quốc lần thứ XIII của Đảng đã đề ra bao nhiêu đột phá chiến lược?', NULL, NULL),
(32, 'Ban Chấp hành Trung ương Đảng khoá XIII được bầu tại đại hội gồm bao nhiêu đồng chí?', NULL, NULL),
(33, 'Hội nghị lần thứ nhất BCH Trung ương Đảng khóa XIII đã bầu ra Bộ Chính trị gồm bao nhiêu đồng chí? ', NULL, NULL),
(34, 'Ban Chấp hành Trung ương đã bầu Ủy ban Kiểm tra Trung ương gồm bao nhiêu đồng chí?', NULL, NULL),
(35, 'Chính ủy Lữ đoàn 6 hiện nay là ai?', NULL, NULL),
(36, 'Lữ đoàn trưởng Lữ đoàn 6 hiện nay là ai?', NULL, NULL),
(37, 'Tư lệnh Quân khu 9 hiện nay là ai?', NULL, NULL),
(38, 'Chính ủy Quân khu 9 hiện nay là ai?', NULL, NULL),
(41, 'Đồng chí hãy cho biết những nét truyền thống tiêu biểu của dân tộc Việt Nam là gì? ', NULL, NULL),
(42, 'Đâu không phải là nét truyền thống tiêu biểu của dân tộc Việt Nam?', NULL, NULL),
(43, '“Nhắm thẳng quân thù mà bắn” là câu nói nổi tiếng của anh hùng liệt sĩ nào?', NULL, NULL),
(44, 'Nước ta được đổi tên thành nước Cộng hòa xã hội Chủ nghĩa Việt Nam vào ngày, tháng, năm nào?', NULL, NULL),
(45, 'Ý nghĩa câu tục ngữ: “Thương người như thể thương thân” thể hiện nội dung truyền thống nào của dân tộc Việt Nam?', NULL, NULL),
(46, 'Điền từ còn thiếu vào nội dung sau: “Lòng yêu nước của dân tộc ta được hình thành từ rất sớm và có nguồn gốc sâu xa từ ý thức cộng đồng gắn kết cá nhân – gia đình – làng xã - ...”?', NULL, NULL),
(47, 'Đồng chí cho biết chức năng của QĐNDVN?', NULL, NULL),
(48, 'Quân đội nhân dân Việt Nam được thành lập vào ngày, tháng, năm nào? Ở đâu?', NULL, NULL),
(49, 'Chức năng của Quân đội nhân dân Việt Nam?', NULL, NULL),
(50, 'Truyền thống tiêu biểu của Quân đội nhân dân Việt Nam có bao nhiêu nội dung?', NULL, NULL),
(51, 'Đâu không phải nội dung truyền thống tiêu biểu của Quân đội nhân dân Việt Nam?', NULL, NULL),
(52, 'Chỉ thi số 855-CT/QUTW ngày 12/8/2019 của Thường vụ Quân ủy Trung ương bao gồm mấy chuẩn mực cơ bản?', NULL, NULL),
(53, 'Đâu là tiền thân của Quân đội nhân dân Việt Nam?', NULL, NULL),
(54, 'Đảng Cộng sản Việt Nam ra đời vào ngày, tháng, năm nào?', NULL, NULL),
(55, 'Đảng Cộng sản Việt Nam ra đời trên cơ sở hợp nhất ba tổ chức Cộng sản nào?', NULL, NULL),
(56, 'Quân đội nhân dân Việt Nam do ai sáng lập, lãnh đạo và rèn luyện?', NULL, NULL),
(57, 'Điền từ còn thiếu vào nội dung sau: “Sự lãnh đạo, giáo dục, rèn luyện của Đảng Cộng sản Việt Nam và Chủ tịch Hồ Chí Minh là nhân tố quyết định ... tổ chức, xây dựng và mọi hoạt động của quân đội.”', NULL, NULL),
(58, 'Chiến thắng đầu tiên của Quân đội nhân dân Việt Nam là trận đánh nào?', NULL, NULL),
(59, 'Quân đội nhân dân Việt Nam được Nhà nước tặng thưởng Huân chương Sao vàng bao nhiêu lần?', NULL, NULL),
(60, 'Nội dung giữ vững và tăng cường sự lãnh đạo của Đảng đối với Quân đội nhân dân Việt Nam bao gồm mấy nội dung?', NULL, NULL),
(61, 'Nội dung giữ vững và tăng cường sự lãnh đạo của Đảng đối với Quân đội nhân dân Việt Nam?', NULL, NULL),
(62, 'Quân đội nhân dân Việt Nam mang bản chất giai cấp nào?', NULL, NULL),
(63, 'Mục tiêu, lý tưởng chiến đấu của quân đội ta?', NULL, NULL),
(64, 'Quân đội nhân dân Việt Nam có bao nhiêu chức năng, nhiệm vụ?', NULL, NULL),
(65, 'Chức năng nào là chức năng cơ bản, quan trọng nhất của Quân đội nhân dân Việt Nam?', NULL, NULL),
(66, 'Chức năng nào là chức năng cơ bản, quan trọng thuộc về bản chất, truyền thống của Quân đội nhân dân Việt Nam?', NULL, NULL),
(67, 'Chức năng nào là chức năng có ý nghĩa thực tiễn sâu sắc, thuộc về bản chất, truyền thống tốt đẹp của Quân đội nhân dân Việt Nam?', NULL, NULL),
(68, 'Quân đội nhân dân Việt Nam có bao nhiêu nhiệm vụ?', NULL, NULL),
(69, 'Nhiệm vụ nào là nhiệm vụ chính trị hàng đầu, có ý nghĩa quyết định trực tiếp đến việc thực hiện chức năng chiến đấu của Quân đội nhân dân Việt Nam?', NULL, NULL),
(70, 'Nhiệm vụ nào là nhiệm vụ trọng tâm, thường xuyên, quyết định trực tiếp đến nâng cao trình độ sẵn sàng chiến đấu của Quân đội nhân dân Việt Nam?', NULL, NULL),
(71, 'Nhiệm vụ nào là nhiệm vụ quan trọng phản ánh quy luật bảo vệ Tổ quốc phải đi đôi với xây dựng đất nước của Quân đội nhân dân Việt Nam?', NULL, NULL),
(72, 'Có mấy nhóm đối tượng tác chiến của Quân đội nhân dân Việt Nam? ', NULL, NULL),
(73, 'Có bao nhiêu quan điểm trong huấn luyện là gì?', NULL, NULL),
(74, 'Có bao nhiêu tiêu chuẩn đơn vị vững mạnh toàn diện', NULL, NULL),
(75, 'Phương châm trong huấn luyện là gì?', NULL, NULL),
(76, 'Nội dung biểu hiện đoàn kết nội bộ quân đội', NULL, NULL),
(77, 'Nội dung biểu hiện đoàn kết nội bộ quân dân', NULL, NULL),
(78, 'Nội dung biểu hiện đoàn kết nội bộ quân dân', NULL, NULL),
(79, 'Phương châm “4 cùng” trong công tác dân vận?', NULL, NULL),
(80, 'Lời chỉ dạy của Chủ tịch Hồ Chí Minh: “Quan sơn muôn dặm một nhà, bốn phương vô sản đều là anh em”, thể hiện nội dung nào sau đây?', NULL, NULL),
(81, 'Điền từ còn thiếu trong nội dung sau: “Những người phụ trách ... cần phải óc nghĩ, mắt trông, tai nghe, chân đi, miệng nói tay làm. Chứ không phải chỉ nói suông, chỉ ngồi viết mệnh lệnh”?', NULL, NULL),
(82, 'Điền từ còn thiếu trong nội dung sau: “Dân chủ trong Quân đội nhân dân Việt Nam là một bộ phận của dân chủ xã hội chủ nghĩa, thể hiện ... của mọi quân nhân trên các lĩnh vực chính trị, quân sự, kinh tế, văn hóa - tinh thần, được Hiến pháp, pháp luật của Nhà nước và điều lệnh, điều lệ của quân đội bảo đảm.”', NULL, NULL),
(83, 'Bản chất của dân chủ trong quân đội ta mang bản chất dân chủ của...?', NULL, NULL),
(84, 'Nội dung dân chủ trong Quân đội nhân dân Việt Nam được biểu hiện trên những vấn đề cơ bản sau?', NULL, NULL),
(85, 'Bản chất kỷ luật của quân đội ta mang bản chất kỷ luật của...?', NULL, NULL),
(86, 'Biểu hiện bản chất kỷ luật trong Quân đội nhân dân Việt Nam?', NULL, NULL),
(87, '“Quân đội mạnh là nhờ giáo dục khéo, nhờ chính sách đúng và nhờ...”', NULL, NULL),
(88, 'Nội dung thể hiện quyền dân chủ của quân nhân?', NULL, NULL),
(89, 'Tên gọi của Cuộc vận động 50?', NULL, NULL),
(90, 'Cuộc vận động “Quản lý, khai thác vũ khí, trang bị kỹ thuật tốt, bền, an toàn, tiết kiệm và an toàn giao thông” ban hành vào ngày, tháng, năm nào?', NULL, NULL),
(91, 'Cuộc vận động “Quản lý, khai thác vũ khí, trang bị kỹ thuật tốt, bền, an toàn, tiết kiệm và an toàn giao thông” bao gồm mấy mục tiêu chính?', NULL, NULL),
(92, 'Nội dung nào dưới đây thể hiện mục tiêu của Cuộc vận động “Quản lý, khai thác vũ khí, trang bị kỹ thuật tốt, bền, an toàn, tiết kiệm và an toàn giao thông”?', NULL, NULL),
(93, 'Điền từ còn thiếu vào nội dung sau: “Tăng gia sản xuất là một trong những nhiệm vụ trọng tâm, thuộc chức năng ... của quân đội ta”', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dap_an`
--

CREATE TABLE `dap_an` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `ch_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dap_an`
--

INSERT INTO `dap_an` (`id`, `content`, `status`, `ch_id`, `created_at`, `updated_at`) VALUES
(1, '23/11/1962', 0, 1, NULL, NULL),
(2, '23/11/1963', 0, 1, NULL, NULL),
(3, '23/11/1964', 1, 1, NULL, NULL),
(4, '23/11/1965', 0, 1, NULL, NULL),
(5, 'Chân đồng, vai sắt, đánh giỏi, bắn trúng', 0, 2, NULL, NULL),
(6, 'Đoàn kết, hiệp đồng, linh hoạt, sáng tạo, đánh giỏi, bắn trúng', 1, 2, NULL, NULL),
(7, 'Quân dân đoàn kết, Kiên cường bám trụ, Tự lực tự cường, Anh dũng chiến đấu', 0, 2, NULL, NULL),
(8, 'Đoàn kết, hiệp đồng, chủ động, sáng tạo, đánh giỏi, bắn trúng', 0, 2, NULL, NULL),
(9, 'Quân dân đoàn kết, Trụ bám kiên cường, Tự lực tự cường, Anh dũng chiến đấu', 0, 3, NULL, NULL),
(10, 'Đoàn kết, hiệp đồng, linh hoạt, sáng tạo, đánh giỏi, bắn trúng', 0, 3, NULL, NULL),
(11, 'Quân dân đoàn kết, Kiên cường bám trụ, Tự lực tự cường, Anh dũng chiến đấu', 1, 3, NULL, NULL),
(12, 'Đoàn kết, hiệp đồng, chủ động, sáng tạo, đánh giỏi, bắn trúng', 0, 3, NULL, NULL),
(13, '10/12/1945', 1, 4, NULL, NULL),
(14, '12/12/1945', 0, 4, NULL, NULL),
(15, '22/12/1944', 0, 4, NULL, NULL),
(16, '11/12/1945', 0, 4, NULL, NULL),
(17, '2311', 1, 5, NULL, NULL),
(18, '2315', 0, 5, NULL, NULL),
(19, '10', 0, 5, NULL, NULL),
(20, '24', 0, 5, NULL, NULL),
(21, 'Bản lĩnh chính trị vững vàng, động cơ trong sáng, trách nhiệm cao; Đạo đức, lối sống trong sạch, lành mạnh.', 0, 6, NULL, NULL),
(22, 'Có văn hóa, tri thức khoa học, trình độ quân sự, năng lực, phương pháp, tác phong công tác và sức khỏe tốt đáp ứng yêu cầu nhiệm vụ; Thực hành dân chủ, kỷ luật tự giác, nghiêm minh.', 0, 6, NULL, NULL),
(23, 'Chăm lo xây dựng đoàn kết nội bộ tốt, tôn trọng, giúp đỡ, gắn bó máu thịt với Nhân dân; có tinh thần quốc tế trong sáng.', 0, 6, NULL, NULL),
(24, 'Tất cả các nội dung trên.', 1, 6, NULL, NULL),
(25, 'Đoàn kết - Dân chủ - Kỷ cương - Sáng tạo - Phát triển', 1, 7, NULL, NULL),
(26, 'Đoàn kết - Kỷ cương - Dân chủ - Sáng tạo - Phát triển ', 0, 7, NULL, NULL),
(27, 'Dân chủ - Đoàn kết - Kỷ cương - Sáng tạo - Đổi mới ', 0, 7, NULL, NULL),
(28, 'Dân chủ - Đoàn kết - Kỷ cương - Sáng tạo - Phát triển', 0, 7, NULL, NULL),
(29, 'Tiến thẳng lên hiện đại', 0, 8, NULL, NULL),
(30, 'Có sức mạnh quân sự mạnh', 0, 8, NULL, NULL),
(31, 'Tinh, gọn, mạnh', 1, 8, NULL, NULL),
(32, 'Đứng đầu trong khu vực Đông Nam Á', 0, 8, NULL, NULL),
(33, '4 chuẩn mực	', 0, 9, NULL, NULL),
(34, '5 chuẩn mực', 1, 9, NULL, NULL),
(35, '6 chuẩn mực	', 0, 9, NULL, NULL),
(36, '3 chuẩn mực', 0, 9, NULL, NULL),
(37, 'Khẩu trang, Khử khuẩn, Khoảng cách, Không tập trung, Khai báo y tế.', 1, 10, NULL, NULL),
(38, 'Khẩu trang, Không ăn đồ ăn sống, Khoảng cách, Không tập trung, Khai báo y tế.', 0, 10, NULL, NULL),
(39, 'Khẩu trang, Khử khuẩn, Khoảng cách, Không tập trung, Không khai báo y tế.', 0, 10, NULL, NULL),
(40, 'Khẩu trang, Khử khuẩn, Khoảng cách, Không hoang mang, Khai báo y tế.', 0, 10, NULL, NULL),
(41, 'Phê bình, khiển trách, cảnh cáo, giáng cấp, phạt giam, tước danh hiệu quân nhân.', 0, 11, NULL, NULL),
(42, 'Khiển trách, cảnh cáo, giáng cấp, cách chức, phạt giam kỷ luật, tước danh hiệu quân nhân.', 0, 11, NULL, NULL),
(43, 'Khiển trách, cảnh cáo, giáng cấp bậc quân hàm, giáng chức, cách chức, tước danh hiệu quân nhân.', 1, 11, NULL, NULL),
(44, 'Khiển trách, cảnh cáo, giáng cấp bậc quân hàm, giáng chức, cách chức, tước danh hiệu quân nhân, phạt tù.', 0, 11, NULL, NULL),
(45, 'Vắng mặt trái phép', 0, 12, NULL, NULL),
(46, 'Làm nhục, hành hung đồng đội', 0, 12, NULL, NULL),
(47, 'Đào ngũ ', 1, 12, NULL, NULL),
(48, 'Vi phạm các quy định về trực chiến, trực chỉ huy, trực ban, trực nghiệp vụ', 0, 12, NULL, NULL),
(49, 'Chống mệnh lệnh', 1, 13, NULL, NULL),
(50, 'Chấp hành không nghiêm mệnh lệnh', 0, 13, NULL, NULL),
(51, 'Cản trở đồng đội thực hiện nhiệm vụ', 0, 13, NULL, NULL),
(52, 'Làm nhục, hành hung người chỉ huy hoặc cấp trên', 0, 13, NULL, NULL),
(53, 'Chống mệnh lệnh', 0, 14, NULL, NULL),
(54, 'Chấp hành không nghiêm mệnh lệnh', 1, 14, NULL, NULL),
(55, 'Cản trở đồng đội thực hiện nhiệm vụ', 0, 14, NULL, NULL),
(56, 'Làm nhục, hành hung người chỉ huy hoặc cấp trên', 0, 14, NULL, NULL),
(57, 'Tuân thủ nghiêm 5K; Thực phẩm đủ tại nhà; Tẩy rửa vệ sinh sạch sẽ; Test Covid tất cả; Tiêm chủng tại phường/xã.', 0, 15, NULL, NULL),
(58, 'Tuân thủ nghiêm 5K; Tổ chức sinh hoạt tại nhà; Thầy thuốc đến tận gia; Test Covid tất cả; Tiêm chủng tại phường/xã.', 0, 15, NULL, NULL),
(59, 'Tuân thủ nghiêm 5K; Thực phẩm đủ tại nhà; Thầy thuốc đến tận gia; Test Covid tất cả; Tiêm chủng tại phường/xã.', 1, 15, NULL, NULL),
(60, 'Tuân thủ nghiêm 5K; Thực phẩm đủ tại nhà; Thầy thuốc đến tận gia; Test Covid tất cả; Tiêm chủng tại nhà.', 0, 15, NULL, NULL),
(61, 'Đẩy mạnh  học tập và làm theo tư tưởng, đạo đức, phong cách Hồ Chí Minh', 1, 16, NULL, NULL),
(62, 'Đẩy mạnh học tập và làm theo  phong cách Hồ Chí Minh', 0, 16, NULL, NULL),
(63, 'Đẩy mạnh học tập tư tưởng, đạo đức, phong cách Hồ Chí Minh', 0, 16, NULL, NULL),
(64, 'Đẩy mạnh việc học tập và làm theo tư tưởng Hồ Chí Minh', 0, 16, NULL, NULL),
(65, 'Vững mạnh về chính trị. ', 0, 17, NULL, NULL),
(66, 'Tổ chức biên chế đúng quy định, duy trì nghiêm túc các chế độ SSCĐ, huấn luyện giỏi; Xây dựng nền nếp chính quy và quản lý kỷ luật tốt', 0, 17, NULL, NULL),
(67, 'Bảo đảm tốt hậu cần, tài chính và đời sống bộ đội; Bảo đảm tốt công tác kỹ thuật.  ', 0, 17, NULL, NULL),
(68, 'Tất cả các nội dung trên.', 1, 17, NULL, NULL),
(69, 'Quân đội cùng cả nước chung sức, đồng lòng thi đua phòng, chống và chiến thắng đại dịch COVID-19', 1, 18, NULL, NULL),
(70, 'Quân đội thi đua phòng, chống và chiến thắng đại dịch COVID-19', 0, 18, NULL, NULL),
(71, 'Quân đội cùng cả nước chung sức thi đua phòng, chống và chiến thắng đại dịch COVID-19', 0, 18, NULL, NULL),
(72, 'Quân đội cùng cả nước chung sức phòng, chống và chiến thắng đại dịch COVID-19', 0, 18, NULL, NULL),
(73, 'Đoàn kết, mẫu mực, kỷ cương, linh hoạt, sáng tạo, Quyết thắng', 1, 19, NULL, NULL),
(74, 'Dân chủ, mẫu mực, kỷ cương, sáng tạo, Quyết thắng', 0, 19, NULL, NULL),
(75, 'Đoàn kết, dân chủ, kỷ cương, sáng tạo, Quyết thắng', 0, 19, NULL, NULL),
(76, 'Đoàn kết, kỷ cương, nêu gương, sáng tạo, Quyết thắng', 0, 19, NULL, NULL),
(77, '17 đồng chí	', 0, 20, NULL, NULL),
(78, '18 đồng chí	', 0, 20, NULL, NULL),
(79, '19 đồng chí', 1, 20, NULL, NULL),
(80, '20 đồng chí', 0, 20, NULL, NULL),
(81, 'Kiên quyết đấu tranh phòng, chống tham nhũng, lãng phí, tiêu cực, quan liêu.', 0, 21, NULL, NULL),
(82, 'Đẩy mạnh phân cấp, phân quyền đi đôi với tăng cường kiểm tra, giám sát và kiểm soát chặt chẽ quyền lực.', 0, 21, NULL, NULL),
(83, 'Kiên quyết đấu tranh phòng, chống tham nhũng, lãng phí, tiêu cực, quan liêu; đẩy mạnh phân cấp, phân quyền đi đôi với tăng cường kiểm tra, giám sát và kiểm soát chặt chẽ quyền lự', 1, 21, NULL, NULL),
(84, 'Kiên quyết đấu tranh phòng, chống tham nhũng, lãng phí, tiêu cực, quan liêu  tăng cường kiểm tra, giám sát và kiểm soát chặt chẽ quyền lực.', 0, 21, NULL, NULL),
(85, '2.350 km', 0, 22, NULL, NULL),
(86, '1.749 km', 0, 22, NULL, NULL),
(87, '3.260 km', 0, 22, NULL, NULL),
(88, '1.137 km', 1, 22, NULL, NULL),
(89, 'Bộ Tư lệnh Tác chiến không gian mạng trực thuộc Binh chủng Thông Tin.', 0, 23, NULL, NULL),
(90, 'Bộ Tư lệnh Tác chiến không gian mạng trực thuộc Bộ Quốc phòng.', 1, 23, NULL, NULL),
(91, 'Trung tâm Tác chiến không gian mạng trực thuộc Binh chủng Thông Tin.', 0, 23, NULL, NULL),
(92, 'Trung tâm Tác chiến không gian mạng trực thuộc Bộ Quốc phòng. ', 0, 23, NULL, NULL),
(93, '15/8/2017.', 1, 24, NULL, NULL),
(94, '16/8/2017.', 0, 24, NULL, NULL),
(95, '17/8/2017.', 0, 24, NULL, NULL),
(96, '18/8/2017.', 0, 24, NULL, NULL),
(97, 'Cần, kiệm, liêm chính.', 0, 25, NULL, NULL),
(98, 'Có văn hóa, tri thức khoa học, trình độ quân sự, năng lực, phương pháp, tác phong công tác và sức khỏe tốt đáp ứng yêu cầu nhiệm vụ.', 1, 25, NULL, NULL),
(99, 'Tự lập, tự chủ, tự tu dưỡng rèn luyện.', 0, 25, NULL, NULL),
(100, 'Tất cả các nội dung trên.', 0, 25, NULL, NULL),
(101, 'Bản lĩnh chính trị vững vàng, động cơ trong sáng, trách nhiệm cao.', 1, 26, NULL, NULL),
(102, 'Tâm trong, trí sáng, hoài bão lớn.', 0, 26, NULL, NULL),
(103, 'Tuyệt đối trung thành với Đảng, Nhà nước và nhân dân.', 0, 26, NULL, NULL),
(104, 'Tất cả các nội dung trên', 0, 26, NULL, NULL),
(105, 'Hải Phòng', 0, 27, NULL, NULL),
(106, 'Đà Nẵng', 1, 27, NULL, NULL),
(107, 'Bình Thuận', 0, 27, NULL, NULL),
(108, 'Cà Mau', 0, 27, NULL, NULL),
(109, 'Quảng Ninh', 0, 28, NULL, NULL),
(110, 'Thanh Hóa', 0, 28, NULL, NULL),
(111, 'Khánh Hòa', 1, 28, NULL, NULL),
(112, 'Bến Tre', 0, 28, NULL, NULL),
(113, 'An Giang.', 0, 29, NULL, NULL),
(114, 'Kiên Giang.', 0, 29, NULL, NULL),
(115, 'Đồng Tháp.', 0, 29, NULL, NULL),
(116, 'Tất cả các ý trên.', 1, 29, NULL, NULL),
(117, '02 ', 0, 30, NULL, NULL),
(118, '03 ', 1, 30, NULL, NULL),
(119, '04', 0, 30, NULL, NULL),
(120, '05', 0, 30, NULL, NULL),
(121, '2', 0, 31, NULL, NULL),
(122, '3', 1, 31, NULL, NULL),
(123, '4', 0, 31, NULL, NULL),
(124, '5', 0, 31, NULL, NULL),
(125, '160 đồng chí Uỷ viên Trung ương chính thức, 40 đồng chí Uỷ viên Trung ương dự khuyết', 0, 32, NULL, NULL),
(126, '160 đồng chí Uỷ viên Trung ương chính thức, 20 đồng chí Uỷ viên Trung ương dự khuyết', 0, 32, NULL, NULL),
(127, '180 đồng chí Uỷ viên Trung ương chính thức, 40 đồng chí Uỷ viên Trung ương dự khuyết', 0, 32, NULL, NULL),
(128, '180 đồng chí Uỷ viên Trung ương chính thức, 20 đồng chí Uỷ viên Trung ương dự khuyết', 1, 32, NULL, NULL),
(129, '17 đồng chí', 0, 33, NULL, NULL),
(130, '18 đồng chí', 1, 33, NULL, NULL),
(131, '19 đồng chí', 0, 33, NULL, NULL),
(132, '20 đồng chí', 0, 33, NULL, NULL),
(133, '16 đồng chí', 0, 34, NULL, NULL),
(134, '17 đồng chí', 0, 34, NULL, NULL),
(135, '18 đồng chí', 0, 34, NULL, NULL),
(136, '19 đồng chí', 1, 34, NULL, NULL),
(137, 'Đại tá Lương Văn Tôn ', 0, 35, NULL, NULL),
(138, 'Đại tá Hoàng Tuyển Phong ', 1, 35, NULL, NULL),
(139, 'Thượng tá Nguyễn Quốc Cường', 0, 35, NULL, NULL),
(140, 'Đại tá Bùi Đình Hoạch', 0, 35, NULL, NULL),
(141, 'Đại tá Lương Văn Tôn ', 1, 36, NULL, NULL),
(142, 'Đại tá Hoàng Tuyển Phong ', 0, 36, NULL, NULL),
(143, 'Thượng tá Nguyễn Quốc Cường', 0, 36, NULL, NULL),
(144, 'Trung ta Huỳnh Phước An', 0, 36, NULL, NULL),
(145, 'Trung tướng Nguyễn Xuân Dắt', 1, 37, NULL, NULL),
(146, 'Thiếu tướng Nguyễn Văn Gấu', 0, 37, NULL, NULL),
(147, 'Thiếu tướng Trương Minh Khải', 0, 37, NULL, NULL),
(148, 'Thiếu tướng Nguyễn Minh Triều', 0, 37, NULL, NULL),
(149, 'Trung tướng Nguyễn Xuân Dắt', 0, 38, NULL, NULL),
(150, 'Thiếu tướng Nguyễn Văn Gấu', 1, 38, NULL, NULL),
(151, 'Thiếu tướng Trương Minh Khải', 0, 38, NULL, NULL),
(152, 'Thiếu tướng Nguyễn Minh Triều', 0, 38, NULL, NULL),
(153, 'Lòng yêu nước nồng nàn, ý chí tự cường dân tộc.', 0, 41, NULL, NULL),
(154, 'Tinh thần đoàn kết, ý thức cộng đồng dân tộc.', 0, 41, NULL, NULL),
(155, 'Lòng nhân ái, khoan dung, khát vọng hòa bình, yêu hoà bình.', 0, 41, NULL, NULL),
(156, 'Tất cả nội dung trên.', 1, 41, NULL, NULL),
(157, 'Một là, lòng yêu nước nồng nàn, ý chí tự cường dân tộc.', 0, 42, NULL, NULL),
(158, 'Hai là, tinh thần đoàn kết, ý thức cộng đồng dân tộc.', 0, 42, NULL, NULL),
(159, 'Ba là, lòng nhân ái, khoan dung, khát vọng hòa bình, yêu hoà bình.', 0, 42, NULL, NULL),
(160, 'Bốn là, lối sống trong sạch, lành mạnh, có văn hóa, trung thực, khiêm tốn, giản dị, lạc quan. ', 1, 42, NULL, NULL),
(161, 'Bế Văn Đàn', 0, 43, NULL, NULL),
(162, 'Phan Đình Giót', 0, 43, NULL, NULL),
(163, 'Tô Vĩnh Diện', 0, 43, NULL, NULL),
(164, 'Nguyễn Viết Xuân', 1, 43, NULL, NULL),
(165, '20/7/1954', 0, 44, NULL, NULL),
(166, '30/4/1975', 0, 44, NULL, NULL),
(167, '02/9/1945', 0, 44, NULL, NULL),
(168, '02/7/1976', 1, 44, NULL, NULL),
(169, 'Lòng yêu nước nồng nàn, ý chí tự cường dân tộc.', 0, 45, NULL, NULL),
(170, 'Tinh thần đoàn kết, ý thức cộng đồng dân tộc.', 0, 45, NULL, NULL),
(171, 'Lòng nhân ái, khoan dung, khát vọng hòa bình, yêu hoà bình.', 1, 45, NULL, NULL),
(172, 'Cần cù, tiết kiệm, lạc quan, khiêm tốn, giản dị, trung thực.', 0, 45, NULL, NULL),
(173, 'Quê hương', 0, 46, NULL, NULL),
(174, 'Tổ quốc', 1, 46, NULL, NULL),
(175, 'Đất nước', 0, 46, NULL, NULL),
(176, 'Dân tộc', 0, 46, NULL, NULL),
(177, 'Đội quan chiến đấu', 0, 47, NULL, NULL),
(178, 'Đội quân công tác', 0, 47, NULL, NULL),
(179, 'Đội quân lao động sản xuất', 0, 47, NULL, NULL),
(180, 'Tất cả các đáp án trên', 1, 47, NULL, NULL),
(181, 'Ngày 01/5/1951 tại xã Tam Kim, huyện Nguyên Bình, tỉnh Cao Bằng', 0, 48, NULL, NULL),
(182, 'Ngày 16/7/1946 tại xã Tam Kim, huyện Nguyên Bình, tỉnh Cao Bằng', 0, 48, NULL, NULL),
(183, 'Ngày 22/12/1944 tại xã Tam Kim, huyện Nguyên Bình, tỉnh Cao Bằng', 1, 48, NULL, NULL),
(184, 'Ngày 22/12/1944 tại thị xã Quảng Yên, tỉnh Quảng Ninh', 0, 48, NULL, NULL),
(185, 'Đội quân công tác, đội quân chiến đấu', 0, 49, NULL, NULL),
(186, 'Đội quân Chiến đấu, đội quân công tác, đội quân lao động sản xuất', 1, 49, NULL, NULL),
(187, 'Đội quân sẵn sàng chiến đấu, đội quân công tác, đội quân lao động sản xuất', 0, 49, NULL, NULL),
(188, 'Đội quân Chiến đấu, đội quân lao động sản xuất', 0, 49, NULL, NULL),
(189, '3', 0, 50, NULL, NULL),
(190, '5', 0, 50, NULL, NULL),
(191, '7', 0, 50, NULL, NULL),
(192, '9', 1, 50, NULL, NULL),
(193, 'Trung thành vô hạn với Tổ quốc Việt Nam xã hội chủ nghĩa, với Đảng, Nhà nước và nhân dân.', 0, 51, NULL, NULL),
(194, 'Quyết chiến, quyết thắng, biết đánh và biết thắng.', 0, 51, NULL, NULL),
(195, 'Gắn bó máu thịt với nhân dân, quân với dân một ý chí.', 0, 51, NULL, NULL),
(196, 'Cần cù, tiết kiệm, lạc quan, khiêm tốn, giản dị, trung thực.', 1, 51, NULL, NULL),
(197, '3', 0, 52, NULL, NULL),
(198, '5', 1, 52, NULL, NULL),
(199, '7 ', 0, 52, NULL, NULL),
(200, '9', 0, 52, NULL, NULL),
(201, 'Đội du kích Bắc Sơn', 0, 53, NULL, NULL),
(202, 'Cứu quốc quân', 0, 53, NULL, NULL),
(203, 'Đội Việt Nam Tuyên truyền Giải phóng quân', 1, 53, NULL, NULL),
(204, 'Đội Việt Nam Giải phóng quân', 0, 53, NULL, NULL),
(205, '3/2/1930', 1, 54, NULL, NULL),
(206, '2/9/1945', 0, 54, NULL, NULL),
(207, '30/4/1075', 0, 54, NULL, NULL),
(208, '22/12/1944', 0, 54, NULL, NULL),
(209, 'Đông Dương Cộng sản Đảng, An Nam Cộng sản Đảng và Đông Dương Cộng sản Liên đoàn.', 1, 55, NULL, NULL),
(210, 'Đông Dương Lao động Đảng, An Nam Cộng sản Đảng và Đông Dương Cộng sản Liên đoàn.', 0, 55, NULL, NULL),
(211, 'Đông Dương Cộng sản Đảng, An Nam Cộng sản Đảng và Hội Việt Nam Cách mạng Thanh niên.', 0, 55, NULL, NULL),
(212, 'Đông Dương Cộng sản Đảng, Đông Dương Lao động Đảng, Đông Dương Cộng sản Liên đoàn.', 0, 55, NULL, NULL),
(213, 'Chủ tịch Hồ Chí Minh', 0, 56, NULL, NULL),
(214, 'Đảng Cộng sản Việt Nam', 0, 56, NULL, NULL),
(215, 'Chủ tịch Hồ Chí Minh, Đảng Cộng sản Việt Nam', 1, 56, NULL, NULL),
(216, 'Chủ tịch Hồ Chí Minh, Đảng Cộng sản Việt Nam, Nhân dân', 0, 56, NULL, NULL),
(217, 'Trình độ', 0, 57, NULL, NULL),
(218, 'Nguyên tắc', 1, 57, NULL, NULL),
(219, 'Cách thức', 0, 57, NULL, NULL),
(220, 'Phương thức', 0, 57, NULL, NULL),
(221, 'Việt Bắc', 0, 58, NULL, NULL),
(222, 'Bình Giã', 0, 58, NULL, NULL),
(223, 'Phai Khắt, Nà Ngần', 1, 58, NULL, NULL),
(224, 'Điện Biên', 0, 58, NULL, NULL),
(225, '3', 0, 59, NULL, NULL),
(226, '4', 0, 59, NULL, NULL),
(227, '5', 1, 59, NULL, NULL),
(228, '6', 0, 59, NULL, NULL),
(229, '3', 1, 60, NULL, NULL),
(230, '4', 0, 60, NULL, NULL),
(231, '5', 0, 60, NULL, NULL),
(232, '6', 0, 60, NULL, NULL),
(233, 'Nhận thức đúng, có niềm tin vững chắc và kiên quyết đấu tranh bảo vệ chủ nghĩa Mác - Lênin, tư tưởng Hồ Chí Minh, đường lối, quan điểm của Đảng; bảo vệ nền tảng tư tưởng của Đảng trong quân đội. ', 0, 61, NULL, NULL),
(234, 'Giữ vững nguyên tắc Đảng lãnh đạo tuyệt đối, trực tiếp về mọi mặt đối với quân đội ta; các cấp uỷ đảng trong quân đội lãnh đạo đơn vị về mọi mặt.', 0, 61, NULL, NULL),
(235, 'Xây dựng tổ chức đảng và đội ngũ cán bộ, đảng viên thực sự vững mạnh, đáp ứng với yêu cầu nhiệm vụ.', 0, 61, NULL, NULL),
(236, 'Tất cả các ý kiến trên', 1, 61, NULL, NULL),
(237, 'Giai cấp công nhân', 1, 62, NULL, NULL),
(238, 'Giai cấp nông dân', 0, 62, NULL, NULL),
(239, 'Giai cấp tư sản', 0, 62, NULL, NULL),
(240, 'Cả a và b', 0, 62, NULL, NULL),
(241, 'Vì độc lập dân tộc và chủ nghĩa xã hội', 0, 63, NULL, NULL),
(242, 'Vì mục tiêu “dân giàu, nước mạnh, dân chủ, công bằng, văn minh”', 0, 63, NULL, NULL),
(243, 'Sẵn sàng chiến đấu, hy sinh vì độc lập, tự do của Tổ quốc', 0, 63, NULL, NULL),
(244, 'Cả a và b', 1, 63, NULL, NULL),
(245, '3 chức năng, 3 nhiệm vụ', 0, 64, NULL, NULL),
(246, '3 chức năng, 5 nhiệm vụ', 1, 64, NULL, NULL),
(247, '5 chức năng, 3 nhiệm vụ', 0, 64, NULL, NULL),
(248, '5 chức năng, 5 nhiệm vụ', 0, 64, NULL, NULL),
(249, 'Đội quân chiến đấu', 1, 65, NULL, NULL),
(250, 'Đội quân công tác', 0, 65, NULL, NULL),
(251, 'Đội quân lao động sản xuất', 0, 65, NULL, NULL),
(252, 'Tất cả các nội dung trên', 0, 65, NULL, NULL),
(253, 'Đội quân chiến đấu', 0, 66, NULL, NULL),
(254, 'Đội quân công tác', 1, 66, NULL, NULL),
(255, 'Đội quân lao động sản xuất', 0, 66, NULL, NULL),
(256, 'Tất cả các nội dung trên', 0, 66, NULL, NULL),
(257, 'Đội quân chiến đấu', 0, 67, NULL, NULL),
(258, 'Đội quân công tác', 0, 67, NULL, NULL),
(259, 'Đội quân lao động sản xuất', 1, 67, NULL, NULL),
(260, 'Tất cả các nội dung trên', 0, 67, NULL, NULL),
(261, '3', 0, 68, NULL, NULL),
(262, '4', 0, 68, NULL, NULL),
(263, '5', 1, 68, NULL, NULL),
(264, '6', 0, 68, NULL, NULL),
(265, 'Sẵn sàng chiến đấu và chiến đấu thắng lợi', 1, 69, NULL, NULL),
(266, 'Huấn luyện, xây dựng quân đội, đơn vị vững mạnh toàn diện “Mẫu mực, tiêu biểu”', 0, 69, NULL, NULL),
(267, 'Tích cực tham gia lao động sản xuất, góp phần phát triển kinh tế, văn hóa, xã hội, cải thiện đời sống bộ đội', 0, 69, NULL, NULL),
(268, 'Cả 3 nội dung trên', 0, 69, NULL, NULL),
(269, 'Sẵn sàng chiến đấu và chiến đấu thắng lợi', 0, 70, NULL, NULL),
(270, 'Huấn luyện, xây dựng quân đội, đơn vị vững mạnh toàn diện “Mẫu mực, tiêu biểu”', 1, 70, NULL, NULL),
(271, 'Tích cực tham gia lao động sản xuất, góp phần phát triển kinh tế, văn hóa, xã hội, cải thiện đời sống bộ đội', 0, 70, NULL, NULL),
(272, 'Cả 3 nội dung trên', 0, 70, NULL, NULL),
(273, 'Sẵn sàng chiến đấu và chiến đấu thắng lợi', 0, 71, NULL, NULL),
(274, 'Huấn luyện, xây dựng quân đội, đơn vị vững mạnh toàn diện “Mẫu mực, tiêu biểu”', 0, 71, NULL, NULL),
(275, 'Tích cực tham gia lao động sản xuất, góp phần phát triển kinh tế, văn hóa, xã hội, cải thiện đời sống bộ đội', 1, 71, NULL, NULL),
(276, 'Cả 3 nội dung trên', 0, 71, NULL, NULL),
(277, '3', 1, 72, NULL, NULL),
(278, '4', 0, 72, NULL, NULL),
(279, '5', 0, 72, NULL, NULL),
(280, '6', 0, 72, NULL, NULL),
(281, '3', 1, 73, NULL, NULL),
(282, '5', 0, 73, NULL, NULL),
(283, '6', 0, 73, NULL, NULL),
(284, '8', 0, 73, NULL, NULL),
(285, '3', 0, 74, NULL, NULL),
(286, '4', 0, 74, NULL, NULL),
(287, '5', 1, 74, NULL, NULL),
(288, '6', 0, 74, NULL, NULL),
(289, 'Cơ bản, đồng bộ, thống nhất, chuyên sâu', 0, 75, NULL, NULL),
(290, 'Cơ bản, thiết thực, vững chắc', 1, 75, NULL, NULL),
(291, 'Chất lượng, thiết thực, hiệu quả, sát thực tế', 0, 75, NULL, NULL),
(292, 'Chất lượng, thiết thực, hiệu quả, tập trung, có trọng tâm, trọng điểm', 0, 75, NULL, NULL),
(293, 'Thống nhất ý chí và hành động, cùng chung mục tiêu, lý tưởng chiến đấu vì độc lập dân tộc và chủ nghĩa xã hội, vì hạnh phúc của nhân dân.', 1, 76, NULL, NULL),
(294, 'Quân đội luôn gắn bó máu thịt với nhân dân, quân với dân một ý chí, quan hệ quân với dân như cá với nước.', 0, 76, NULL, NULL),
(295, 'Gắn bó thủy chung, vô tư, trong sáng, chí nghĩa, chí tình với quân đội và nhân dân các nước anh em, bè bạn quốc tế.', 0, 76, NULL, NULL),
(296, 'Tất cả các ý trên.', 0, 76, NULL, NULL),
(297, 'Thống nhất ý chí và hành động, cùng chung mục tiêu, lý tưởng chiến đấu vì độc lập dân tộc và chủ nghĩa xã hội, vì hạnh phúc của nhân dân.', 0, 77, NULL, NULL),
(298, 'Quân đội luôn gắn bó máu thịt với nhân dân, quân với dân một ý chí, quan hệ quân với dân như cá với nước.', 1, 77, NULL, NULL),
(299, 'Gắn bó thủy chung, vô tư, trong sáng, chí nghĩa, chí tình với quân đội và nhân dân các nước anh em, bè bạn quốc tế.', 0, 77, NULL, NULL),
(300, 'Tất cả các ý trên.', 0, 77, NULL, NULL),
(301, 'Thống nhất ý chí và hành động, cùng chung mục tiêu, lý tưởng chiến đấu vì độc lập dân tộc và chủ nghĩa xã hội, vì hạnh phúc của nhân dân.', 0, 78, NULL, NULL),
(302, 'Quân đội luôn gắn bó máu thịt với nhân dân, quân với dân một ý chí, quan hệ quân với dân như cá với nước.', 0, 78, NULL, NULL),
(303, 'Gắn bó thủy chung, vô tư, trong sáng, chí nghĩa, chí tình với quân đội và nhân dân các nước anh em, bè bạn quốc tế.', 1, 78, NULL, NULL),
(304, 'Tất cả các ý trên.', 0, 78, NULL, NULL),
(305, 'Cùng ăn, cùng ở, cùng làm, cùng lao động sản xuất', 0, 79, NULL, NULL),
(306, 'Cùng ăn, cùng ở, cùng làm, cùng phát triển kinh tế', 0, 79, NULL, NULL),
(307, 'Cùng ăn, cùng ở, cùng làm, cùng nói tiếng dân tộc', 1, 79, NULL, NULL),
(308, 'Cùng ăn, cùng ở, cùng làm, cùng giao lưu văn hóa', 0, 79, NULL, NULL),
(309, 'Đoàn kết nội bộ quân đội', 0, 80, NULL, NULL),
(310, 'Đoàn kết quân dân', 0, 80, NULL, NULL),
(311, 'Đoàn kết quốc tế', 1, 80, NULL, NULL),
(312, 'Tất cả các nội dung trên', 0, 80, NULL, NULL),
(313, 'Dân vận', 1, 81, NULL, NULL),
(314, 'Chính sách', 0, 81, NULL, NULL),
(315, 'Tư tưởng', 0, 81, NULL, NULL),
(316, 'Tổ chức', 0, 81, NULL, NULL),
(317, 'quyền là chủ', 0, 82, NULL, NULL),
(318, 'quyền dân chủ', 0, 82, NULL, NULL),
(319, 'quyền làm chủ', 1, 82, NULL, NULL),
(320, 'quyền bình đẳng', 0, 82, NULL, NULL),
(321, 'Nhà nước xã hội chủ nghĩa', 1, 83, NULL, NULL),
(322, 'Nhà nước tư bản', 0, 83, NULL, NULL),
(323, 'Giai cấp công nhân', 0, 83, NULL, NULL),
(324, 'Giai cấp nông dân', 0, 83, NULL, NULL),
(325, 'Chính trị, quân sự, kinh tế - đời sống, văn hóa - tinh thần', 1, 84, NULL, NULL),
(326, 'Chính trị - tư tưởng, quân sự, lao động sản xuất', 0, 84, NULL, NULL),
(327, 'Chính trị, quân sự, kinh tế, văn hóa - văn nghệ', 0, 84, NULL, NULL),
(328, 'Chính trị, quân sự, hậu cần, kĩ thuật', 0, 84, NULL, NULL),
(329, 'Giai cấp công nhân', 0, 85, NULL, NULL),
(330, 'Đảng Cộng sản Việt Nam', 0, 85, NULL, NULL),
(331, 'a, b đều đúng', 1, 85, NULL, NULL),
(332, 'a,b đều sai', 0, 85, NULL, NULL),
(333, 'Kỷ luật sắt', 0, 86, NULL, NULL),
(334, 'Tự giác, nghiêm minh', 1, 86, NULL, NULL),
(335, 'Chặt chẽ, thống nhất cao', 0, 86, NULL, NULL),
(336, 'Tự giác, nghiêm túc', 0, 86, NULL, NULL),
(337, 'Vũ khí mới', 0, 87, NULL, NULL),
(338, 'Đoàn kết tốt', 0, 87, NULL, NULL),
(339, 'Huấn luyện giỏi', 0, 87, NULL, NULL),
(340, 'Kỷ luật nghiêm ', 1, 87, NULL, NULL),
(341, 'Sinh hoạt đối thoại dân chủ', 0, 88, NULL, NULL),
(342, 'Sinh hoạt tài chính công khai', 0, 88, NULL, NULL),
(343, 'Ngày Chính trị và Văn hóa tinh thần', 0, 88, NULL, NULL),
(344, 'Tất cả các nội dung trên', 1, 88, NULL, NULL),
(345, 'Quản lý, khai thác vũ khí, trang bị kỹ thuật tốt, bền, an toàn, tiết kiệm', 0, 89, NULL, NULL),
(346, 'Quản lý, khai thác vũ khí, trang bị tốt, bền, an toàn, tiết kiệm và an toàn giao thông', 0, 89, NULL, NULL),
(347, 'Quản lý, khai thác vũ khí, trang bị kỹ thuật tốt, bền, an toàn, tiết kiệm và an toàn giao thông', 1, 89, NULL, NULL),
(348, 'Tất cả đều sai', 0, 89, NULL, NULL),
(349, '14/3/1995', 0, 90, NULL, NULL),
(350, '10/01/1998', 1, 90, NULL, NULL),
(351, '15/5/ 2016', 0, 90, NULL, NULL),
(352, '08/7/2016', 0, 90, NULL, NULL),
(353, '3', 0, 91, NULL, NULL),
(354, '4', 1, 91, NULL, NULL),
(355, '5', 0, 91, NULL, NULL),
(356, '6', 0, 91, NULL, NULL),
(357, 'Quản lý tốt; Khai thác tốt, bền; An toàn; Tiết kiệm', 1, 92, NULL, NULL),
(358, 'Quản lý tốt; Khai thác tốt, bền; Tiết kiệm; An toàn giao thông', 0, 92, NULL, NULL),
(359, 'Quản lý tốt; Khai thác tốt, bền; An toàn; Tiết kiệm và An toàn giao thông', 0, 92, NULL, NULL),
(360, 'Tất cả đều sai', 0, 92, NULL, NULL),
(361, 'Đội quân chiến đấu', 0, 93, NULL, NULL),
(362, 'Đội quân công tác', 0, 93, NULL, NULL),
(363, 'Đội quân lao động sản xuất', 1, 93, NULL, NULL),
(364, 'Tất cả đều sai', 0, 93, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `de`
--

CREATE TABLE `de` (
  `de_id` bigint(20) UNSIGNED NOT NULL,
  `mark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `birth` date NOT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `de_cauhoi`
--

CREATE TABLE `de_cauhoi` (
  `de_cauhoi_id` bigint(20) UNSIGNED NOT NULL,
  `de_id` bigint(20) UNSIGNED NOT NULL,
  `ch_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_09_131534_create_phong_thi_table', 1),
(6, '2022_02_09_131925_create_de_table', 1),
(7, '2022_02_09_131936_create_cau_hoi_table', 1),
(8, '2022_02_09_131944_create_dap_an_table', 1),
(9, '2022_02_09_132829_create_de_cauhoi_table', 1),
(10, '2022_02_12_170704_create_tra_loi_table', 1),
(11, '2022_02_18_225628_create_tai_lieu_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_thi`
--

CREATE TABLE `phong_thi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong_thi`
--

INSERT INTO `phong_thi` (`id`, `name`, `start`, `end`, `password`, `created_at`, `updated_at`) VALUES
(1, 'phòng 1', '2022-02-11 15:50:27', '2022-02-19 15:50:27', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_lieu`
--

CREATE TABLE `tai_lieu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_lieu`
--

INSERT INTO `tai_lieu` (`id`, `content`, `title`, `created_at`, `updated_at`) VALUES
(1, 'data/2. Giáo dục chính trị Chiến sĩ mới/Bài 1.pdf', '2. Giáo dục chính trị Chiến sĩ mới - Bài 1', NULL, NULL),
(2, 'data/2. Giáo dục chính trị Chiến sĩ mới/Bài 2.pdf', '2. Giáo dục chính trị Chiến sĩ mới - Bài 2', NULL, NULL),
(3, 'data/2. Giáo dục chính trị Chiến sĩ mới/Bài 3.pdf', '2. Giáo dục chính trị Chiến sĩ mới - Bài 3', NULL, NULL),
(4, 'data/2. Giáo dục chính trị Chiến sĩ mới/Bài 4.pdf', '2. Giáo dục chính trị Chiến sĩ mới - Bài 4', NULL, NULL),
(5, 'data/2. Giáo dục chính trị Chiến sĩ mới/Bài 5.pdf', '2. Giáo dục chính trị Chiến sĩ mới - Bài 5', NULL, NULL),
(6, 'data/2. Giáo dục chính trị Chiến sĩ mới/Bài 6.pdf', '2. Giáo dục chính trị Chiến sĩ mới - Bài 6', NULL, NULL),
(7, 'data/3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ/Bài 1.pdf', '3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ - Bài 1', NULL, NULL),
(8, 'data/3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ/Bài 2.pdf', '3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ - Bài 2', NULL, NULL),
(9, 'data/3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ/Bài 3.pdf', '3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ - Bài 3', NULL, NULL),
(10, 'data/3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ/Bài 4.pdf', '3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ - Bài 4', NULL, NULL),
(11, 'data/3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ/Bài 5.pdf', '3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ - Bài 5', NULL, NULL),
(12, 'data/3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ/Bài 6.pdf', '3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ - Bài 6', NULL, NULL),
(13, 'data/3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ/Bài 7.pdf', '3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ - Bài 7', NULL, NULL),
(14, 'data/3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ/Bài 8.pdf', '3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ - Bài 8', NULL, NULL),
(15, 'data/3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ/Bài 9.pdf', '3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ - Bài 9', NULL, NULL),
(16, 'data/3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ/Bài 10.pdf', '3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ - Bài 10', NULL, NULL),
(17, 'data/3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ/Bài 11.pdf', '3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ - Bài 11', NULL, NULL),
(18, 'data/3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ/Bài 12.pdf', '3. Giáo dục chính trị Hạ sĩ quan, Binh sĩ - Bài 12', NULL, NULL),
(19, 'data/4. Bài giảng lí luận chính trị cho ĐVTN/BÀI 1.pdf', '4. Bài giảng lí luận chính trị cho ĐVTN - BÀI 1', NULL, NULL),
(20, 'data/4. Bài giảng lí luận chính trị cho ĐVTN/BÀI 2.pdf', '4. Bài giảng lí luận chính trị cho ĐVTN - BÀI 2', NULL, NULL),
(21, 'data/4. Bài giảng lí luận chính trị cho ĐVTN/BÀI 3.pdf', '4. Bài giảng lí luận chính trị cho ĐVTN - BÀI 3', NULL, NULL),
(22, 'data/4. Bài giảng lí luận chính trị cho ĐVTN/BÀI 4.pdf', '4. Bài giảng lí luận chính trị cho ĐVTN - BÀI 4', NULL, NULL),
(23, 'data/5. Thư viện pháp luật/Bộ luật Dân sự năm 2015.pdf', '5. Thư viện pháp luật - Bộ luật Dân sự năm 2015', NULL, NULL),
(24, 'data/5. Thư viện pháp luật/\r\n                Bộ luật Hình sự năm 2015.pdf', '5. Thư viện pháp luật - \r\n                Bộ luật Hình sự năm 2015', NULL, NULL),
(25, 'data/5. Thư viện pháp luật/Bộ luật Tố tụng Dân sự năm 2015.pdf', '5. Thư viện pháp luật - Bộ luật Tố tụng Dân sự năm 2015 ', NULL, NULL),
(26, 'data/5. Thư viện pháp luật/Luật An ninh mạng năm 2018.pdf', '5. Thư viện pháp luật - Luật An ninh mạng năm 2018 ', NULL, NULL),
(27, 'data/5. Thư viện pháp luật/Luật An toàn thông tin mạng năm 2015.pdf', '5. Thư viện pháp luật - Luật An toàn thông tin mạng năm 2015 ', NULL, NULL),
(28, 'data/5. Thư viện pháp luật/Luật Bảo vệ bí mật nhà nước năm 2018.pdf', '5. Thư viện pháp luật - Luật Bảo vệ bí mật nhà nước năm 2018 ', NULL, NULL),
(29, 'data/5. Thư viện pháp luật/Luật Biên phòng Việt Nam năm 2020.pdf', '5. Thư viện pháp luật - Luật Biên phòng Việt Nam năm 2020 ', NULL, NULL),
(30, 'data/5. Thư viện pháp luật/Luật Cảnh sát biển Việt Nam năm 2018.pdf', '5. Thư viện pháp luật - Luật Cảnh sát biển Việt Nam năm 2018 ', NULL, NULL),
(31, 'data/5. Thư viện pháp luật/Luật cư trú năm 2020.pdf', '5. Thư viện pháp luật - Luật cư trú năm 2020 ', NULL, NULL),
(32, 'data/5. Thư viện pháp luật/Luật Nghĩa vụ quân sự năm 2015.pdf', '5. Thư viện pháp luật - Luật Nghĩa vụ quân sự năm 2015 ', NULL, NULL),
(33, 'data/5. Thư viện pháp luật/Luật Phòng, chống tham nhũng năm 2018.pdf', '5. Thư viện pháp luật - Luật Phòng, chống tham nhũng năm 2018 ', NULL, NULL),
(34, 'data/5. Thư viện pháp luật/Luật Quản lý, sử dụng tài sản công năm 2017.pdf', '5. Thư viện pháp luật - Luật Quản lý, sử dụng tài sản công năm 2017 ', NULL, NULL),
(35, 'data/5. Thư viện pháp luật/Luật Quản lý, sử dụng vũ khí, vật liệu nổ và công cụ hỗ trợ năm 2017.pdf', '5. Thư viện pháp luật - Luật Quản lý, sử dụng vũ khí, vật liệu nổ và công cụ hỗ trợ năm 2017 ', NULL, NULL),
(36, 'data/5. Thư viện pháp luật/Luật Quân nhân chuyên nghiệp, công nhân và viên chức quốc phòng năm 2015.pdf', '5. Thư viện pháp luật - Luật Quân nhân chuyên nghiệp, công nhân và viên chức quốc phòng năm 2015 ', NULL, NULL),
(37, 'data/5. Thư viện pháp luật/Luật Quốc phòng năm 2018.pdf', '5. Thư viện pháp luật - Luật Quốc phòng năm 2018 ', NULL, NULL),
(38, 'data/5. Thư viện pháp luật/Luật Tố cáo năm 2018.pdf', '5. Thư viện pháp luật - Luật Tố cáo năm 2018 ', NULL, NULL),
(39, 'data/5. Thư viện pháp luật/Luật Tổ chức Chính phủ năm 2015.pdf', '5. Thư viện pháp luật - Luật Tổ chức Chính phủ năm 2015 ', NULL, NULL),
(40, 'data/5. Thư viện pháp luật/QUỐC HỘI.pdf', '5. Thư viện pháp luật - QUỐC HỘI ', NULL, NULL),
(41, 'data/5. Thư viện pháp luật/Thông tư 16.pdf', '5. Thư viện pháp luật - Thông tư 16 ', NULL, NULL),
(42, 'data/6. Kể chuyện Bác Hồ/Ai ăn thì người ấy trả tiền.pdf', '6. Kể chuyện Bác Hồ - Ai ăn thì người ấy trả tiền', NULL, NULL),
(43, 'data/6. Kể chuyện Bác Hồ/Ai cho các chú may thêm.pdf', '6. Kể chuyện Bác Hồ - Ai cho các chú may thêm', NULL, NULL),
(44, 'data/6. Kể chuyện Bác Hồ/Ai là nông dân của Bác.pdf', '6. Kể chuyện Bác Hồ - Ai là nông dân của Bác', NULL, NULL),
(45, 'data/6. Kể chuyện Bác Hồ/Ăn no rồi hãy đến làm việc.pdf', '6. Kể chuyện Bác Hồ - Ăn no rồi hãy đến làm việc', NULL, NULL),
(46, 'data/6. Kể chuyện Bác Hồ/Bác có phải là vua đâu.pdf', '6. Kể chuyện Bác Hồ - Bác có phải là vua đâu', NULL, NULL),
(47, 'data/6. Kể chuyện Bác Hồ/Bác dạy “Gạn đục khơi trong” mà học người ta.pdf', '6. Kể chuyện Bác Hồ - Bác dạy “Gạn đục khơi trong” mà học người ta', NULL, NULL),
(48, 'data/6. Kể chuyện Bác Hồ/Bác Hồ dạy học ở Pắc Bó.pdf', '6. Kể chuyện Bác Hồ - Bác Hồ dạy học ở Pắc Bó', NULL, NULL),
(49, 'data/6. Kể chuyện Bác Hồ/Bác Hồ là thế đấy.pdf', '6. Kể chuyện Bác Hồ - Bác Hồ là thế đấy', NULL, NULL),
(50, 'data/6. Kể chuyện Bác Hồ/Bác Hồ tắm cho trẻ con ở Việt Bắc.pdf', '6. Kể chuyện Bác Hồ - Bác Hồ tắm cho trẻ con ở Việt Bắc', NULL, NULL),
(51, 'data/6. Kể chuyện Bác Hồ/Bác Hồ tăng gia rau cải.pdf', '6. Kể chuyện Bác Hồ - Bác Hồ tăng gia rau cải', NULL, NULL),
(52, 'data/6. Kể chuyện Bác Hồ/Bác Hồ tiếp dân.pdf', '6. Kể chuyện Bác Hồ - Bác Hồ tiếp dân', NULL, NULL),
(53, 'data/6. Kể chuyện Bác Hồ/Bác Hồ và ngư dân biển Sầm sơn.pdf', '6. Kể chuyện Bác Hồ - Bác Hồ và ngư dân biển Sầm sơn', NULL, NULL),
(54, 'data/6. Kể chuyện Bác Hồ/Bác Hồ viết bài báo.pdf', '6. Kể chuyện Bác Hồ - Bác Hồ viết bài báo', NULL, NULL),
(55, 'data/6. Kể chuyện Bác Hồ/Bác Hồ viết bài báo “Nâng cao đạo đức cách mạng, quét sạch chủ nghĩa cá nhân”.pdf', '6. Kể chuyện Bác Hồ - Bác Hồ viết bài báo “Nâng cao đạo đức cách mạng, quét sạch chủ nghĩa cá nhân”', NULL, NULL),
(56, 'data/6. Kể chuyện Bác Hồ/Bác Hồ với Bộ đội ở Đền Hùng.pdf', '6. Kể chuyện Bác Hồ - Bác Hồ với Bộ đội ở Đền Hùng', NULL, NULL),
(57, 'data/6. Kể chuyện Bác Hồ/Bác khuyên mấy chú Nam Bộ chi tiêu theo lối pha trà.pdf', '6. Kể chuyện Bác Hồ - Bác khuyên mấy chú Nam Bộ chi tiêu theo lối pha trà', NULL, NULL),
(58, 'data/6. Kể chuyện Bác Hồ/Bài học dựa vào dân.pdf', '6. Kể chuyện Bác Hồ - Bài học dựa vào dân', NULL, NULL),
(59, 'data/6. Kể chuyện Bác Hồ/Bài học quyết tâm.pdf', '6. Kể chuyện Bác Hồ - Bài học quyết tâm', NULL, NULL),
(60, 'data/6. Kể chuyện Bác Hồ/Bản yêu sách của nhân dân An Nam gửi Hội nghị Vécxây.pdf', '6. Kể chuyện Bác Hồ - Bản yêu sách của nhân dân An Nam gửi Hội nghị Vécxây', NULL, NULL),
(61, 'data/6. Kể chuyện Bác Hồ/Bát chè sẻ đôi.pdf', '6. Kể chuyện Bác Hồ - Bát chè sẻ đôi', NULL, NULL),
(62, 'data/6. Kể chuyện Bác Hồ/Bữa cơm trên đường công tác.pdf', '6. Kể chuyện Bác Hồ - Bữa cơm trên đường công tác', NULL, NULL),
(63, 'data/6. Kể chuyện Bác Hồ/Cả đất nước Việt Nam là gia đình tôi.pdf', '6. Kể chuyện Bác Hồ - Cả đất nước Việt Nam là gia đình tôi', NULL, NULL),
(64, 'data/6. Kể chuyện Bác Hồ/Các chú có báo không.pdf', '6. Kể chuyện Bác Hồ - Các chú có báo không', NULL, NULL),
(65, 'data/6. Kể chuyện Bác Hồ/Cách ứng đáp mẫn tiệp của Chủ tịch Hồ Chí Minh.pdf', '6. Kể chuyện Bác Hồ - Cách ứng đáp mẫn tiệp của Chủ tịch Hồ Chí Minh', NULL, NULL),
(66, 'data/6. Kể chuyện Bác Hồ/Cái áo trấn thủ.pdf', '6. Kể chuyện Bác Hồ - Cái áo trấn thủ', NULL, NULL),
(67, 'data/6. Kể chuyện Bác Hồ/Cái gì tạo nên biển cả.pdf', '6. Kể chuyện Bác Hồ - Cái gì tạo nên biển cả', NULL, NULL),
(68, 'data/6. Kể chuyện Bác Hồ/Cán bộ phải thường xuyên tự phê bình để tiến bộ.pdf', '6. Kể chuyện Bác Hồ - Cán bộ phải thường xuyên tự phê bình để tiến bộ', NULL, NULL),
(69, 'data/6. Kể chuyện Bác Hồ/Cần mẫn.pdf', '6. Kể chuyện Bác Hồ - Cần mẫn', NULL, NULL),
(70, 'data/6. Kể chuyện Bác Hồ/Câu chuyện về ba chiếc ba lô.pdf', '6. Kể chuyện Bác Hồ - Câu chuyện về ba chiếc ba lô', NULL, NULL),
(71, 'data/6. Kể chuyện Bác Hồ/Câu chuyện xây dựng hội trường.pdf', '6. Kể chuyện Bác Hồ - Câu chuyện xây dựng hội trường', NULL, NULL),
(72, 'data/6. Kể chuyện Bác Hồ/Chính quyền của dân.pdf', '6. Kể chuyện Bác Hồ - Chính quyền của dân', NULL, NULL),
(73, 'data/6. Kể chuyện Bác Hồ/Chớ bỏ qua những việc mà tưởng là tầm thường.pdf', '6. Kể chuyện Bác Hồ - Chớ bỏ qua những việc mà tưởng là tầm thường', NULL, NULL),
(74, 'data/6. Kể chuyện Bác Hồ/Chú còn trẻ, chú vào hầm trước đi.pdf', '6. Kể chuyện Bác Hồ - Chú còn trẻ, chú vào hầm trước đi', NULL, NULL),
(75, 'data/6. Kể chuyện Bác Hồ/Chú ngã có đau không.pdf', '6. Kể chuyện Bác Hồ - Chú ngã có đau không', NULL, NULL),
(76, 'data/6. Kể chuyện Bác Hồ/Chú ra xem Bộ đội có ướt không.pdf', '6. Kể chuyện Bác Hồ - Chú ra xem Bộ đội có ướt không', NULL, NULL),
(77, 'data/6. Kể chuyện Bác Hồ/Chủ tịch Hồ Chí Minh và câu chuyện kỷ cương, phép nước.pdf', '6. Kể chuyện Bác Hồ - Chủ tịch Hồ Chí Minh và câu chuyện kỷ cương, phép nước', NULL, NULL),
(78, 'data/6. Kể chuyện Bác Hồ/Chủ tịch nước cũng không có đặc quyền.pdf', '6. Kể chuyện Bác Hồ - Chủ tịch nước cũng không có đặc quyền', NULL, NULL),
(79, 'data/6. Kể chuyện Bác Hồ/Chuyện người sửa đôi dép Bác Hồ.pdf', '6. Kể chuyện Bác Hồ - Chuyện người sửa đôi dép Bác Hồ', NULL, NULL),
(80, 'data/6. Kể chuyện Bác Hồ/Cứ gọi tôi là Ba như ngày trước.pdf', '6. Kể chuyện Bác Hồ - Cứ gọi tôi là Ba như ngày trước', NULL, NULL),
(81, 'data/6. Kể chuyện Bác Hồ/Dân xin nước, cán bộ cho lửa.pdf', '6. Kể chuyện Bác Hồ - Dân xin nước, cán bộ cho lửa', NULL, NULL),
(82, 'data/6. Kể chuyện Bác Hồ/Để Bác quạt.pdf', '6. Kể chuyện Bác Hồ - Để Bác quạt', NULL, NULL),
(83, 'data/6. Kể chuyện Bác Hồ/Dĩ công vi thượng.pdf', '6. Kể chuyện Bác Hồ - Dĩ công vi thượng', NULL, NULL),
(84, 'data/6. Kể chuyện Bác Hồ/Đi dự hội nghị.pdf', '6. Kể chuyện Bác Hồ - Đi dự hội nghị', NULL, NULL),
(85, 'data/6. Kể chuyện Bác Hồ/Đón vua hay đón Bác.pdf', '6. Kể chuyện Bác Hồ - Đón vua hay đón Bác', NULL, NULL),
(86, 'data/6. Kể chuyện Bác Hồ/Dốt mà hay.pdf', '6. Kể chuyện Bác Hồ - Dốt mà hay', NULL, NULL),
(87, 'data/6. Kể chuyện Bác Hồ/Gọi bằng Bác chứ.pdf', '6. Kể chuyện Bác Hồ - Gọi bằng Bác chứ', NULL, NULL),
(88, 'data/6. Kể chuyện Bác Hồ/Hai bàn tay.pdf', '6. Kể chuyện Bác Hồ - Hai bàn tay', NULL, NULL),
(89, 'data/6. Kể chuyện Bác Hồ/Kiên trì chống lại tuổi già và bệnh tật.pdf', '6. Kể chuyện Bác Hồ - Kiên trì chống lại tuổi già và bệnh tật', NULL, NULL),
(90, 'data/6. Kể chuyện Bác Hồ/Mãi mãi là tấm gương sáng.pdf', '6. Kể chuyện Bác Hồ - Mãi mãi là tấm gương sáng', NULL, NULL),
(91, 'data/6. Kể chuyện Bác Hồ/Một lần nhớ mãi.pdf', '6. Kể chuyện Bác Hồ - Một lần nhớ mãi', NULL, NULL),
(92, 'data/6. Kể chuyện Bác Hồ/Một lòng tin ở Nhân dân.pdf', '6. Kể chuyện Bác Hồ - Một lòng tin ở Nhân dân', NULL, NULL),
(93, 'data/6. Kể chuyện Bác Hồ/Một mình Bác có 4 “Chánh Văn Phòng”.pdf', '6. Kể chuyện Bác Hồ - Một mình Bác có 4 “Chánh Văn Phòng”', NULL, NULL),
(94, 'data/6. Kể chuyện Bác Hồ/Một ngày làm việc của Bác.pdf', '6. Kể chuyện Bác Hồ - Một ngày làm việc của Bác', NULL, NULL),
(95, 'data/6. Kể chuyện Bác Hồ/Ngăn nắp và trật tự.pdf', '6. Kể chuyện Bác Hồ - Ngăn nắp và trật tự', NULL, NULL),
(96, 'data/6. Kể chuyện Bác Hồ/Ngày tết nghĩ về tấm gương giản dị và tiết kiệm của Bác Hồ.pdf', '6. Kể chuyện Bác Hồ - Ngày tết nghĩ về tấm gương giản dị và tiết kiệm của Bác Hồ', NULL, NULL),
(97, 'data/6. Kể chuyện Bác Hồ/Nghĩa nặng tình sâu.pdf', '6. Kể chuyện Bác Hồ - Nghĩa nặng tình sâu', NULL, NULL),
(98, 'data/6. Kể chuyện Bác Hồ/Người Pháp, người Mỹ nói về Bác.pdf', '6. Kể chuyện Bác Hồ - Người Pháp, người Mỹ nói về Bác', NULL, NULL),
(99, 'data/6. Kể chuyện Bác Hồ/Người sáng lập Đảng.pdf', '6. Kể chuyện Bác Hồ - Người sáng lập Đảng', NULL, NULL),
(100, 'data/6. Kể chuyện Bác Hồ/Nước nóng nước nguội.pdf', '6. Kể chuyện Bác Hồ - Nước nóng nước nguội', NULL, NULL),
(101, 'data/6. Kể chuyện Bác Hồ/Phải có tình đồng chí thương yêu lẫn nhau.pdf', '6. Kể chuyện Bác Hồ - Phải có tình đồng chí thương yêu lẫn nhau', NULL, NULL),
(102, 'data/6. Kể chuyện Bác Hồ/Phải lắng nghe ý kiến của quần chúng.pdf', '6. Kể chuyện Bác Hồ - Phải lắng nghe ý kiến của quần chúng', NULL, NULL),
(103, 'data/6. Kể chuyện Bác Hồ/Phải tìm trong dân chứ.pdf', '6. Kể chuyện Bác Hồ - Phải tìm trong dân chứ', NULL, NULL),
(104, 'data/6. Kể chuyện Bác Hồ/Phong cách ứng xử thân tình.pdf', '6. Kể chuyện Bác Hồ - Phong cách ứng xử thân tình', NULL, NULL),
(105, 'data/6. Kể chuyện Bác Hồ/Quyết chí ra đi.pdf', '6. Kể chuyện Bác Hồ - Quyết chí ra đi', NULL, NULL),
(106, 'data/6. Kể chuyện Bác Hồ/Ra đi Bác dặn còn non nước.pdf', '6. Kể chuyện Bác Hồ - Ra đi Bác dặn còn non nước', NULL, NULL),
(107, 'data/6. Kể chuyện Bác Hồ/Sự phân công.pdf', '6. Kể chuyện Bác Hồ - Sự phân công', NULL, NULL),
(108, 'data/6. Kể chuyện Bác Hồ/Ta cùng đi cho vui.pdf', '6. Kể chuyện Bác Hồ - Ta cùng đi cho vui', NULL, NULL),
(109, 'data/6. Kể chuyện Bác Hồ/Tài ngoại giao của Bác Hồ với Trung Quốc Và Tưởng Giới Thạch.pdf', '6. Kể chuyện Bác Hồ - Tài ngoại giao của Bác Hồ với Trung Quốc Và Tưởng Giới Thạch', NULL, NULL),
(110, 'data/6. Kể chuyện Bác Hồ/Tài sản của dân tại sao tìm cách đút túi.pdf', '6. Kể chuyện Bác Hồ - Tài sản của dân tại sao tìm cách đút túi', NULL, NULL),
(111, 'data/6. Kể chuyện Bác Hồ/Tấm huân chương cao quý.pdf', '6. Kể chuyện Bác Hồ - Tấm huân chương cao quý', NULL, NULL),
(112, 'data/6. Kể chuyện Bác Hồ/Tấm lòng Bác Hồ với chiến sĩ.pdf', '6. Kể chuyện Bác Hồ - Tấm lòng Bác Hồ với chiến sĩ', NULL, NULL),
(113, 'data/6. Kể chuyện Bác Hồ/Thà chặt một cành sâu cho cây xanh tốt.pdf', '6. Kể chuyện Bác Hồ - Thà chặt một cành sâu cho cây xanh tốt', NULL, NULL),
(114, 'data/6. Kể chuyện Bác Hồ/Thăm nhà máy dệt mới khánh thành.pdf', '6. Kể chuyện Bác Hồ - Thăm nhà máy dệt mới khánh thành', NULL, NULL),
(115, 'data/6. Kể chuyện Bác Hồ/Tháng Tám năm 1945 ở Hà Nội.pdf', '6. Kể chuyện Bác Hồ - Tháng Tám năm 1945 ở Hà Nội', NULL, NULL),
(116, 'data/6. Kể chuyện Bác Hồ/Thành khẩn tiếp thu sự phê bình của đồng chí là cái thước đo đạo đức cách mạng, tinh thần vì dân vì nước của mọi cán bộ.pdf', '6. Kể chuyện Bác Hồ - Thành khẩn tiếp thu sự phê bình của đồng chí là cái thước đo đạo đức cách mạng, tinh thần vì dân vì nước của mọi cán bộ', NULL, NULL),
(117, 'data/6. Kể chuyện Bác Hồ/Thanh niên phải gương mẩu trong đoàn kết và kỷ luật.pdf', '6. Kể chuyện Bác Hồ - Thanh niên phải gương mẩu trong đoàn kết và kỷ luật', NULL, NULL),
(118, 'data/6. Kể chuyện Bác Hồ/Thiếu một đức thì không thành người.pdf', '6. Kể chuyện Bác Hồ - Thiếu một đức thì không thành người', NULL, NULL),
(119, 'data/6. Kể chuyện Bác Hồ/Thời gian quý báu lắm.pdf', '6. Kể chuyện Bác Hồ - Thời gian quý báu lắm', NULL, NULL),
(120, 'data/6. Kể chuyện Bác Hồ/Tôi học được phương pháp phê bình của Bác.pdf', '6. Kể chuyện Bác Hồ - Tôi học được phương pháp phê bình của Bác', NULL, NULL),
(121, 'data/6. Kể chuyện Bác Hồ/Tôi là người cộng sản như thế này.pdf', '6. Kể chuyện Bác Hồ - Tôi là người cộng sản như thế này', NULL, NULL),
(122, 'data/6. Kể chuyện Bác Hồ/Trong ngõ hẹp CôngPoanh.pdf', '6. Kể chuyện Bác Hồ - Trong ngõ hẹp CôngPoanh', NULL, NULL),
(123, 'data/6. Kể chuyện Bác Hồ/Vài nét về cuộc sống giản của Bác ở Phủ Chủ tịch.pdf', '6. Kể chuyện Bác Hồ - Vài nét về cuộc sống giản của Bác ở Phủ Chủ tịch', NULL, NULL),
(124, 'data/8. Các trò chơi ngày nghỉ/CÁC TRÒ CHƠI NGÀY NGHỈ.pdf', '8. Các trò chơi ngày nghỉ - CÁC TRÒ CHƠI NGÀY NGHỈ', NULL, NULL),
(125, 'data/8. Các trò chơi ngày nghỉ/CÁC TRÒ CHƠI NGÀY NGHỈ.pdf', '8. Các trò chơi ngày nghỉ - CÁC TRÒ CHƠI NGÀY NGHỈ', NULL, NULL),
(126, 'data/8. Các trò chơi ngày nghỉ/CÁC TRÒ CHƠI NGÀY NGHỈ.pdf', '8. Các trò chơi ngày nghỉ - CÁC TRÒ CHƠI NGÀY NGHỈ', NULL, NULL),
(127, 'data/8. Các trò chơi ngày nghỉ/CÁC TRÒ CHƠI NGÀY NGHỈ.pdf', '8. Các trò chơi ngày nghỉ - CÁC TRÒ CHƠI NGÀY NGHỈ', NULL, NULL),
(128, 'data/8. Các trò chơi ngày nghỉ/CÁC TRÒ CHƠI NGÀY NGHỈ.pdf', '8. Các trò chơi ngày nghỉ - CÁC TRÒ CHƠI NGÀY NGHỈ', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tra_loi`
--

CREATE TABLE `tra_loi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `de_id` bigint(20) UNSIGNED NOT NULL,
  `da_id` bigint(20) UNSIGNED NOT NULL,
  `ch_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$5j1QL1BzZUra0riP0lkxouknWRP/0cF8NttcLQi5ZZgJqV/SPW2wy', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD PRIMARY KEY (`ch_id`);

--
-- Chỉ mục cho bảng `dap_an`
--
ALTER TABLE `dap_an`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dap_an_ch_id_foreign` (`ch_id`);

--
-- Chỉ mục cho bảng `de`
--
ALTER TABLE `de`
  ADD PRIMARY KEY (`de_id`),
  ADD KEY `de_id_foreign` (`id`);

--
-- Chỉ mục cho bảng `de_cauhoi`
--
ALTER TABLE `de_cauhoi`
  ADD PRIMARY KEY (`de_cauhoi_id`),
  ADD KEY `de_cauhoi_de_id_foreign` (`de_id`),
  ADD KEY `de_cauhoi_ch_id_foreign` (`ch_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `phong_thi`
--
ALTER TABLE `phong_thi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tai_lieu`
--
ALTER TABLE `tai_lieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tra_loi`
--
ALTER TABLE `tra_loi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tra_loi_de_id_foreign` (`de_id`),
  ADD KEY `tra_loi_da_id_foreign` (`da_id`),
  ADD KEY `tra_loi_ch_id_foreign` (`ch_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  MODIFY `ch_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT cho bảng `dap_an`
--
ALTER TABLE `dap_an`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=365;

--
-- AUTO_INCREMENT cho bảng `de`
--
ALTER TABLE `de`
  MODIFY `de_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `de_cauhoi`
--
ALTER TABLE `de_cauhoi`
  MODIFY `de_cauhoi_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phong_thi`
--
ALTER TABLE `phong_thi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tai_lieu`
--
ALTER TABLE `tai_lieu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT cho bảng `tra_loi`
--
ALTER TABLE `tra_loi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dap_an`
--
ALTER TABLE `dap_an`
  ADD CONSTRAINT `dap_an_ch_id_foreign` FOREIGN KEY (`ch_id`) REFERENCES `cau_hoi` (`ch_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `de`
--
ALTER TABLE `de`
  ADD CONSTRAINT `de_id_foreign` FOREIGN KEY (`id`) REFERENCES `phong_thi` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `de_cauhoi`
--
ALTER TABLE `de_cauhoi`
  ADD CONSTRAINT `de_cauhoi_ch_id_foreign` FOREIGN KEY (`ch_id`) REFERENCES `cau_hoi` (`ch_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `de_cauhoi_de_id_foreign` FOREIGN KEY (`de_id`) REFERENCES `de` (`de_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tra_loi`
--
ALTER TABLE `tra_loi`
  ADD CONSTRAINT `tra_loi_ch_id_foreign` FOREIGN KEY (`ch_id`) REFERENCES `cau_hoi` (`ch_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tra_loi_da_id_foreign` FOREIGN KEY (`da_id`) REFERENCES `dap_an` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tra_loi_de_id_foreign` FOREIGN KEY (`de_id`) REFERENCES `de` (`de_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
