-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 24, 2022 lúc 06:32 AM
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_ve`
--

CREATE TABLE `dat_ve` (
  `id_ve` int(11) NOT NULL,
  `so_ve` int(11) NOT NULL,
  `ten_phim` varchar(255) NOT NULL,
  `ngay_dat_ve` varchar(255) NOT NULL,
  `thoi_gian_dat_ve` varchar(255) NOT NULL,
  `so_luong_ve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `id_nhan_vien` int(11) NOT NULL,
  `ho_ten` varchar(30) NOT NULL,
  `dia_chi` text NOT NULL,
  `luong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `thoi_luong` int(11) NOT NULL,
  `do_tuoi` varchar(255) NOT NULL,
  `loai_phim` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id_phim`, `ten_phim`, `the_loai`, `dao_dien`, `dien_vien`, `noi_dung`, `thoi_luong`, `do_tuoi`, `loai_phim`, `img`) VALUES
(1, 'DOCTOR STRANGE 2', 'Hành động', 'Sam Raimi', 'Patrick Stewart, Benedict Cumberbatch, Elizabeth Olsen,..', 'a', 240, 'C16', '2D', 'doctor.jpg'),
(2, 'NGÔI ĐỀN KỲ QUÁI 3 (C16)', 'Bí Ẩn, Kinh Dị', 'Phontharis Chotkijsadarsopon', 'Phiravich Attachitsataporn, Sim Kyutae Pond, Khunnapat Pichetworawut', 'Hội tạo nghiệp tụ tập nhau đến dự lễ xuất gia của Aod nhưng phải hoãn lại do lời nguyền từ chiếc lắc chân xuất hiện. Min Jun, Balloon, First phải chạy đua với thời gian để tìm ra cách giải lời nguyền trước khi quỷ dữ đến lấy mạng Aod.', 180, 'C16', '2D', 'ngoi-den-ky-quai-3.jpg'),
(3, 'TIẾNG “KÊU” CỨU LÚC NỬA ĐÊM (C18)', 'Hành Động, Tội Phạm', 'Kwon Oh-seung', 'Wi Ha-joon, Jin Ki-joo, Park Hoon, Kim Hye-yoon', 'Kyeong-mi là một cô gái khiếm thính làm việc tại một tổng đài hỗ trợ người khiếm thính. Một đêm đi làm về muộn, cô tình cờ chứng kiến So Jung-eun, một cô gái trẻ bị đâm tàn bạo trên con đường vắng. Từ giây phút đó, Kyeong-mi trở thành mục tiêu mới củ...', 180, 'C18', '2D', 'tieng-keu-cuu-luc-nua-dem.jpg'),
(4, 'NGHỀ SIÊU DỄ (C16)', 'Hài', 'Võ Thanh Hòa', 'Hứa Vĩ Văn, Thu Trang, Kiều Minh Tuấn, Tiến Luật, Huỳnh Phương, Quang Tuấn, Vũ Ngọc Anh, Thanh Mỹ', 'Ông Thái là một cảnh sát về hưu nhưng không chịu an phận thủ thường, hàng ngày vẫn đi tìm bắt tội phạm vặt trong xóm cho đỡ nhớ nghề. Một ngày kia, Hoàng - tên trùm ma túy mới ra tù bỗng dưng chuyển đến xóm ông và mở một văn phòng bất động sản. Nghi ...', 180, 'C16', '2D', 'nghe-sieu-de.jpg'),
(5, 'JUJUTSU KAISEN 0 - CHÚ THUẬT HỒI CHIẾN (C13)', 'Hoạt hình', 'Sunghoo Park', 'Hanazawa Kana, Nakamura Yuichi, Uchiyama Koki,…', 'Yuta Okkotsu, một học sinh trung học giành được quyền kiểm soát một Linh hồn bị nguyền rủa cực kỳ mạnh mẽ và được Jujutsu Sorcerers đăng ký vào trường trung học Jujutsu tỉnh Tokyo để giúp anh ta kiểm soát sức mạnh của mình và để mắt đến anh ta.', 180, 'C13', '2D', 'jujutsu.jpg');

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
  `ngay_sinh` date NOT NULL,
  `sdt` int(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `gioi_tinh` enum('nam','nữ') CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tk_khach`
--

INSERT INTO `tk_khach` (`id_khach`, `ho_ten`, `ten_tk`, `mat_khau`, `dia_chi`, `cmnd`, `ngay_sinh`, `sdt`, `email`, `gioi_tinh`) VALUES
(16, 'Hàn Quốc Trung', 'trunghan', '123', '123 HBT', 2147483647, '0000-00-00', 2147483647, 'trungqnkute1@yahoo.com', 'nam');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `dat_ve`
--
ALTER TABLE `dat_ve`
  ADD PRIMARY KEY (`id_ve`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`id_nhan_vien`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id_phim`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dat_ve`
--
ALTER TABLE `dat_ve`
  MODIFY `id_ve` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `id_nhan_vien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `id_phim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tk_khach`
--
ALTER TABLE `tk_khach`
  MODIFY `id_khach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
