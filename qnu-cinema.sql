-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 17, 2022 lúc 01:28 PM
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
-- Cơ sở dữ liệu: `qnu-cinema`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `user_name`, `password`) VALUES
(1, 'trunghan', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_ve`
--

CREATE TABLE `chi_tiet_ve` (
  `ma_ve` int(11) NOT NULL,
  `ma_ghe` int(11) NOT NULL,
  `thanh_tien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_ve_food`
--

CREATE TABLE `chi_tiet_ve_food` (
  `ma_ve` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  `so_luong` varchar(255) NOT NULL,
  `thanh_tien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_ve`
--

CREATE TABLE `dat_ve` (
  `id_ve` int(11) NOT NULL,
  `id_suat_chieu` int(11) NOT NULL,
  `id_khach` int(11) NOT NULL,
  `thoi_diem_dat_ve` varchar(255) NOT NULL,
  `tong_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fast_food`
--

CREATE TABLE `fast_food` (
  `id_food` int(11) NOT NULL,
  `ten_mon` varchar(255) NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `fast_food`
--

INSERT INTO `fast_food` (`id_food`, `ten_mon`, `mo_ta`, `gia`, `img`) VALUES
(1, 'Coca Cola', 'Coca-Cola là một thương hiệu nước ngọt có ga chứa nước cacbon dioxide bão hòa được sản xuất bởi Công ty Coca-Cola. Coca-Cola được điều chế bởi dược sĩ John Pemberton vào cuối thế kỷ XIX với mục đích ban đầu là trở thành một loại biệt dược.', '20000', 'nuoc.png'),
(2, 'Bắp rang bơ', 'Bắp rang hay bỏng ngô là một món ăn vặt được làm từ bắp (ngô). Các hạt bắp, hạt bung ra kết hợp với tiếng nổ nhẹ khi chúng được rang lên (được tiếp xúc với nhiệt độ cao). Món ăn này rất thông dụng, được ưa thích ăn lai rai, nhâm nhi trong khi coi phim.', '10000', 'bap.png'),
(3, 'Combo 1 bắp 1 nước', 'vừa có bắp vừa có nước lại giảm được 1000 đồng', '29000', 'bapnuoc.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe`
--

CREATE TABLE `ghe` (
  `id_ghe` int(11) NOT NULL,
  `id_rap` int(11) NOT NULL,
  `hang` int(11) NOT NULL,
  `so_ghe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ghe`
--

INSERT INTO `ghe` (`id_ghe`, `id_rap`, `hang`, `so_ghe`) VALUES
(28, 1, 1, 1),
(29, 1, 1, 2),
(30, 1, 1, 3),
(31, 1, 1, 4),
(32, 1, 1, 5),
(33, 1, 2, 1),
(34, 1, 2, 2),
(35, 1, 2, 3),
(36, 1, 2, 4),
(37, 1, 2, 5),
(38, 1, 3, 1),
(39, 1, 3, 2),
(40, 1, 3, 3),
(41, 1, 3, 4),
(42, 1, 3, 5),
(44, 1, 4, 1),
(45, 1, 4, 2),
(46, 1, 4, 3),
(47, 1, 4, 4),
(48, 1, 4, 5),
(49, 1, 5, 1),
(50, 1, 5, 2),
(51, 1, 5, 3),
(52, 1, 5, 4),
(53, 1, 5, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `id_phim` int(11) NOT NULL,
  `ten_phim` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `the_loai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `dao_dien` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `dien_vien` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `noi_dung` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `thoi_luong` varchar(255) NOT NULL,
  `do_tuoi` varchar(255) NOT NULL,
  `loai_phim` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `trailer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id_phim`, `ten_phim`, `the_loai`, `dao_dien`, `dien_vien`, `noi_dung`, `thoi_luong`, `do_tuoi`, `loai_phim`, `img`, `trailer`) VALUES
(1, 'DOCTOR STRANGE 2', 'Siêu anh hùng', 'Sam Raimi', 'Benedict Cumberbatch, Elizabeth Olsen Rachel McAdams', 'Sau các sự kiện của Avengers: Endgame, Tiến sĩ Stephen Strange tiếp tục nghiên cứu về Viên đá Thời gian. Nhưng một người bạn cũ đã trở thành kẻ thù tìm cách tiêu diệt mọi phù thủy trên Trái đất, làm xáo trộn kế hoạch của Strange và cũng khiến anh ta mở ra', '2 giờ 6 phút', 'C16', '2D', '1652450869_doctor.jpg', 'https://www.youtube.com/embed/3xccmeAsy8g'),
(2, 'NGÔI ĐỀN KỲ QUÁI 3 (C16)', 'Bí Ẩn, Kinh Dị', 'Phontharis Chotkijsadarsopon', 'Phiravich Attachitsataporn, Sim Kyutae Pond, Khunnapat Pichetworawut', 'Hội tạo nghiệp tụ tập nhau đến dự lễ xuất gia của Aod nhưng phải hoãn lại do lời nguyền từ chiếc lắc chân xuất hiện. Min Jun, Balloon, First phải chạy đua với thời gian để tìm ra cách giải lời nguyền trước khi quỷ dữ đến lấy mạng Aod.', '180', 'C16', '2D', 'ngoi-den-ky-quai-3.jpg', 'https://www.youtube.com/embed/Rom6Om-eZDU'),
(3, 'TIẾNG “KÊU” CỨU LÚC NỬA ĐÊM (C18)', 'Hành Động, Tội Phạm', 'Kwon Oh-seung', 'Wi Ha-joon, Jin Ki-joo, Park Hoon, Kim Hye-yoon', 'Kyeong-mi là một cô gái khiếm thính làm việc tại một tổng đài hỗ trợ người khiếm thính. Một đêm đi làm về muộn, cô tình cờ chứng kiến So Jung-eun, một cô gái trẻ bị đâm tàn bạo trên con đường vắng. Từ giây phút đó, Kyeong-mi trở thành mục tiêu mới củ...', '180', 'C18', '2D', 'tieng-keu-cuu-luc-nua-dem.jpg', 'https://www.youtube.com/embed/SzgxVh9mDyI'),
(4, 'NGHỀ SIÊU DỄ (C16)', 'Hài', 'Võ Thanh Hòa', 'Hứa Vĩ Văn, Thu Trang, Kiều Minh Tuấn, Tiến Luật, Huỳnh Phương, Quang Tuấn, Vũ Ngọc Anh, Thanh Mỹ', 'Ông Thái là một cảnh sát về hưu nhưng không chịu an phận thủ thường, hàng ngày vẫn đi tìm bắt tội phạm vặt trong xóm cho đỡ nhớ nghề. Một ngày kia, Hoàng - tên trùm ma túy mới ra tù bỗng dưng chuyển đến xóm ông và mở một văn phòng bất động sản. Nghi ...', '180', 'C16', '2D', 'nghe-sieu-de.jpg', 'https://www.youtube.com/embed/3vNnGc_MdJE'),
(5, 'JUJUTSU KAISEN 0 - CHÚ THUẬT HỒI CHIẾN (C13)', 'Hoạt hình', 'Sunghoo Park', 'Hanazawa Kana, Nakamura Yuichi, Uchiyama Koki,…', 'Yuta Okkotsu, một học sinh trung học giành được quyền kiểm soát một Linh hồn bị nguyền rủa cực kỳ mạnh mẽ và được Jujutsu Sorcerers đăng ký vào trường trung học Jujutsu tỉnh Tokyo để giúp anh ta kiểm soát sức mạnh của mình và để mắt đến anh ta.', '180', 'C13', '2D', 'jujutsu.jpg', 'https://www.youtube.com/embed/DPc3TcWJGp8'),
(6, 'NGƯỜI KHỞI LỬA (C18)', 'Kinh Dị', 'Keith Thomas', 'Zac Efron, Ryan Kiera Armstrong, Gloria Reuben', 'Một cô bé cố gắng tìm hiểu làm thế nào mà cô có được sức mạnh để đốt cháy mọi thứ bằng tâm trí của mình một cách bí ẩn.', '1 giờ 35 phút', 'C18', '2D', '1652416663_nguoi-khoi-lua.jpg', 'https://www.youtube.com/embed/21rAuAZ-0TI'),
(7, 'Juuni Taisen', 'Anime, Action', 'Hosoda Naoto', '', '12 chiến binh mang tên trùng với 12 Con Giáp, chiến đấu với nhau để giành lấy một điều ước', 'xxx', 'C16', '2D', '1652588553_37257113072_52b2e0ef4f_o.jpg', 'https://www.youtube.com/embed/u83zYtHoxvQ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rap`
--

CREATE TABLE `rap` (
  `id_rap` int(11) NOT NULL,
  `ten_rap` varchar(255) NOT NULL,
  `loai_rap` varchar(255) NOT NULL,
  `ktngang` int(11) NOT NULL,
  `ktdoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rap`
--

INSERT INTO `rap` (`id_rap`, `ten_rap`, `loai_rap`, `ktngang`, `ktdoc`) VALUES
(1, 'QNU', '2D', 5, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suat_chieu`
--

CREATE TABLE `suat_chieu` (
  `id_suat_chieu` int(11) NOT NULL,
  `ngay_chieu` varchar(255) NOT NULL,
  `thoi_diem_bat_dau` varchar(255) NOT NULL,
  `thoi_diem_ket_thuc` varchar(255) NOT NULL,
  `gia_ve` int(11) NOT NULL,
  `id_phim` int(11) NOT NULL,
  `id_rap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `suat_chieu`
--

INSERT INTO `suat_chieu` (`id_suat_chieu`, `ngay_chieu`, `thoi_diem_bat_dau`, `thoi_diem_ket_thuc`, `gia_ve`, `id_phim`, `id_rap`) VALUES
(1, '2022-05-15', '19:30', '21:30', 50000, 1, 1),
(2, '2022-05-16', '20:00', '22:00', 50000, 2, 1),
(3, '2022-05-16', '15:00', '17:00', 50000, 1, 1),
(4, '2022-05-16', '12:00', '14:00', 50000, 4, 1),
(21, '2022-05-17', '07:00', '09:00', 50000, 5, 1),
(26, '2022-05-18', '09:00', '11:00', 50000, 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tk_khach`
--

CREATE TABLE `tk_khach` (
  `id_khach` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `ten_tk` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `mat_khau` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `cmnd` int(15) NOT NULL,
  `ngay_sinh` varchar(255) NOT NULL,
  `sdt` int(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `gioi_tinh` enum('nam','nữ') CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tk_khach`
--

INSERT INTO `tk_khach` (`id_khach`, `ho_ten`, `ten_tk`, `mat_khau`, `dia_chi`, `cmnd`, `ngay_sinh`, `sdt`, `email`, `gioi_tinh`) VALUES
(16, 'abc', 'senkai', '123', '69 đường 1 tháng 5', 123123213, '2002-06-25', 676, '2131233@gmail.com', 'nam'),
(20, 'Hàn Quốc Trung', 'trunghan', '123', '69 đường 1 tháng 6', 123123213, '2002-06-25', 546546456, '2131233@gmail.com', 'nam');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `chi_tiet_ve`
--
ALTER TABLE `chi_tiet_ve`
  ADD PRIMARY KEY (`ma_ve`);

--
-- Chỉ mục cho bảng `chi_tiet_ve_food`
--
ALTER TABLE `chi_tiet_ve_food`
  ADD PRIMARY KEY (`ma_ve`);

--
-- Chỉ mục cho bảng `dat_ve`
--
ALTER TABLE `dat_ve`
  ADD PRIMARY KEY (`id_ve`);

--
-- Chỉ mục cho bảng `fast_food`
--
ALTER TABLE `fast_food`
  ADD PRIMARY KEY (`id_food`);

--
-- Chỉ mục cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`id_ghe`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id_phim`);

--
-- Chỉ mục cho bảng `rap`
--
ALTER TABLE `rap`
  ADD PRIMARY KEY (`id_rap`);

--
-- Chỉ mục cho bảng `suat_chieu`
--
ALTER TABLE `suat_chieu`
  ADD PRIMARY KEY (`id_suat_chieu`);

--
-- Chỉ mục cho bảng `tk_khach`
--
ALTER TABLE `tk_khach`
  ADD PRIMARY KEY (`id_khach`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_ve`
--
ALTER TABLE `chi_tiet_ve`
  MODIFY `ma_ve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_ve_food`
--
ALTER TABLE `chi_tiet_ve_food`
  MODIFY `ma_ve` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dat_ve`
--
ALTER TABLE `dat_ve`
  MODIFY `id_ve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `fast_food`
--
ALTER TABLE `fast_food`
  MODIFY `id_food` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `ghe`
--
ALTER TABLE `ghe`
  MODIFY `id_ghe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `id_phim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `suat_chieu`
--
ALTER TABLE `suat_chieu`
  MODIFY `id_suat_chieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tk_khach`
--
ALTER TABLE `tk_khach`
  MODIFY `id_khach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
