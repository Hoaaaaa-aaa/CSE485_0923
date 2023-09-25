-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 25, 2023 lúc 04:51 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btth01_cse485`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `ma_bviet` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(10) UNSIGNED NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text DEFAULT NULL,
  `ma_tgia` int(10) UNSIGNED NOT NULL,
  `ngayviet` datetime NOT NULL DEFAULT current_timestamp(),
  `hinhanh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
(1, 'Cây và gió', 'Cây, lá và gió', 1, 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 1, '2023-09-23 22:30:31', 'images/songs/cayvagio.jpg'),
(2, 'Ơi cuộc sống mến thương', 'Ơi cuộc sống mến thương', 4, 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 2, '2023-09-23 22:30:31', 'images/songs/csmt.jpg'),
(3, 'Ratatouille', 'Le Festin', 3, 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 3, '2023-09-23 22:30:31', 'images/songs/lefestinn.jpg'),
(4, 'Lòng mẹ', 'Lòng mẹ', 1, 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 4, '2023-09-23 22:30:31', 'images/songs/longme.jpg'),
(5, 'Howl moving castle', 'Merry go round of life', 2, 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 5, '2023-09-23 22:30:31', 'images/songs/howl.jpg'),
(6, 'Nơi tình yêu bắt đầu', 'Nơi tình yêu bắt đầu', 1, 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 6, '2023-09-23 22:30:31', 'images/songs/noitinhyeubatdau.jpg'),
(7, 'Phôi pha', 'Phôi pha', 1, 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 7, '2023-09-23 22:30:31', 'images/songs/phoipha.jpg'),
(8, 'Up', 'Marries life', 2, 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 'Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát \"Cây và gió đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.', 3, '2023-09-23 22:30:31', 'images/songs/up.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `ma_tgia` int(10) UNSIGNED NOT NULL,
  `ten_tgia` varchar(100) NOT NULL,
  `hinh_tgia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
(1, 'Nguyễn Văn Giả', 'hình ảnh tác giả 1'),
(2, 'Nguyễn Ngọc Thiện', 'hình ảnh tác giả 2'),
(3, 'Michael Giacchino', 'hình ảnh tác giả 3'),
(4, 'Y Vân', 'hình ảnh tác giả 4'),
(5, 'Joe Hisaishi', 'hình ảnh tác giả 5'),
(6, 'Tiến Minh', 'hình ảnh tác giả 6'),
(7, 'Trịnh Công Sơn', 'hình ảnh tác giả 7');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `ma_tloai` int(11) UNSIGNED NOT NULL,
  `ten_tloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`) VALUES
(1, 'Nhạc trữ tình'),
(2, 'Không lời'),
(3, 'Soundtracks'),
(4, 'Nhạc dân ca');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ma_bviet`),
  ADD KEY `ma_tloai` (`ma_tloai`) USING BTREE,
  ADD KEY `ma_tgia` (`ma_tgia`) USING BTREE;

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`ma_tgia`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`ma_tloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `ma_bviet` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `ma_tgia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `ma_tloai` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `foreignkey` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`),
  ADD CONSTRAINT `foreignkey1` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
