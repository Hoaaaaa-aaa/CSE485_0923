-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 25, 2023 lúc 08:57 PM
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
(4, 'Nhạc dân ca'),
(5, 'Nhạc dân tộc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`User_id`, `Username`, `Email`, `Pass`, `Created_at`) VALUES
(1, 'Doyle', 'dmcclary0@woothemes.com', 'yW1,`>#*2{c', '2023-09-19'),
(2, 'Trenna', 'tgriffithe1@flavors.me', 'yK4)&{W#V94KdS', '2023-09-21'),
(3, 'Hulda', 'hhan2@amazon.de', 'pM3\"mq4Ew(a05', '0000-00-00'),
(4, 'Brandtr', 'bfindon3@google.com.au', 'iK5%@', '0000-00-00'),
(5, 'Carmita', 'csherland4@engadget.com', 'jV7#C=Q@+MD/T/', '0000-00-00'),
(6, 'Leonelle', 'lrandle5@webs.com', 'wM1)hsI', '0000-00-00'),
(7, 'Mara', 'mpettecrew6@about.com', 'pJ4|o@T$n8kPCf', '0000-00-00'),
(8, 'Tudor', 'tsteen7@dropbox.com', 'hL0|q!42Ru,~}>\\', '0000-00-00'),
(9, 'Rowan', 'rclimpson8@meetup.com', 'iP1!JY4a!hY88J', '0000-00-00'),
(10, 'Edgar', 'ebeincken9@reference.com', 'yC6|_qFI', '0000-00-00'),
(11, 'Aundrea', 'aclayilla@google.com.hk', 'wO1=d0_@t!Dj', '0000-00-00'),
(12, 'Matthaeus', 'mmewettb@admin.ch', 'mC2~{4cYl1Pb', '0000-00-00'),
(13, 'Hartwell', 'hcanoc@mlb.com', 'vB6$4?NU</', '0000-00-00'),
(14, 'Cad', 'cscarmand@webmd.com', 'hY8.|<hI%4DL9/\"h', '0000-00-00'),
(15, 'Theadora', 'tneale@mayoclinic.com', 'sQ5<x_R', '0000-00-00'),
(16, 'Jennine', 'jdickensonf@list-manage.com', 'cT8/YI\"*l8a_?', '0000-00-00'),
(17, 'Fletch', 'fmoppettg@vk.com', 'kN2@|<Y2yfX`', '0000-00-00'),
(18, 'Glynn', 'gmckallh@washingtonpost.com', 'fO2/,<C{kImtg(', '0000-00-00'),
(19, 'Carole', 'cslatcheri@usa.gov', 'iT0!jyg?.s.', '0000-00-00'),
(20, 'Nevsa', 'nkennj@tinyurl.com', 'zG7(Vu!L(mI7>E', '0000-00-00'),
(21, 'Clovis', 'cwharfk@elegantthemes.com', 'cN5\"!APti\"kl(N|', '0000-00-00'),
(22, 'Keeley', 'kfloatl@privacy.gov.au', 'tO0<_)XA', '0000-00-00'),
(23, 'Jules', 'jgeanym@pen.io', 'oJ8|e$n,qSH.Mrsk', '0000-00-00'),
(24, 'Odessa', 'opettisalln@smh.com.au', 'sQ2!4r?&s>', '0000-00-00'),
(25, 'Tina', 'tpondero@webmd.com', 'iL8@m8\",\"6,!', '0000-00-00'),
(26, 'Aluino', 'asaillp@cam.ac.uk', 'iS1!n6f\"G$>b', '0000-00-00'),
(27, 'Adeline', 'aroughtq@thetimes.co.uk', 'jG3`T9~h=', '0000-00-00'),
(28, 'Eula', 'eflearr@ebay.co.uk', 'fE5_XZz`k', '0000-00-00'),
(29, 'Ase', 'abootess@go.com', 'vT7X{!H%', '0000-00-00'),
(30, 'Michaelina', 'msarjeantt@home.pl', 'bE5,BRX_9z(y', '0000-00-00'),
(31, 'Rozalie', 'rsouthernwoodu@ameblo.jp', 'jJ3>&odsRw(BOu', '0000-00-00'),
(32, 'Selene', 'sabramoviciv@dmoz.org', 'hJ4%dRVM34MN=', '0000-00-00'),
(33, 'Caye', 'csharplessw@hexun.com', 'jC8}1rWi$`_h|', '0000-00-00'),
(34, 'Julia', 'jsobeyx@opera.com', 'kT1&kO+baOv2%Ye', '0000-00-00'),
(35, 'Myrtia', 'mlidgeyy@tmall.com', 'gE0%S%{k=nr', '0000-00-00'),
(36, 'Birgitta', 'bklimovz@cmu.edu', 'zW9.O|OIA__BP3N', '0000-00-00'),
(37, 'Fredrick', 'fcordero10@liveinternet.ru', 'jU6!L$lE9wuYzIY', '0000-00-00'),
(38, 'Emelina', 'epuller11@fema.gov', 'xZ8}Wxt|c2pe,k', '0000-00-00'),
(39, 'Cordelie', 'csaggs12@123-reg.co.uk', 'eL7|3W2ga0_', '0000-00-00'),
(40, 'Webster', 'wsumshon13@mit.edu', 'dJ7+o3A/5{443,o', '0000-00-00'),
(41, 'Joelle', 'jsalzburger14@macromedia.com', 'dC6&>LVHXl)~+', '0000-00-00'),
(42, 'Hallsy', 'hcasswell15@ezinearticles.com', 'rW3~1A,<`qJG~', '0000-00-00'),
(43, 'Con', 'cpitblado16@mashable.com', 'gY4{ubyIAJrVhSx', '0000-00-00'),
(44, 'Buffy', 'bandrivel17@amazonaws.com', 'fU9,w$Y*\"C', '0000-00-00'),
(45, 'Craig', 'ctrahmel18@delicious.com', 'kG0.JPK4.vrQNYS#', '0000-00-00'),
(46, 'Dannie', 'dpakeman19@umich.edu', 'iN0)}T=5', '0000-00-00'),
(47, 'Isadora', 'iguitonneau1a@dot.gov', 'sQ1_!sG7dp`s@Eo', '0000-00-00'),
(48, 'Rafa', 'rpenchen1b@paypal.com', 'xT2@l<NMx0Ou@', '0000-00-00'),
(49, 'Umeko', 'ukiledal1c@usda.gov', 'wT9+VxC0,v.Zy@', '0000-00-00'),
(50, 'Rebecca', 'rovendon1d@flickr.com', 'gA0_XsbZy0', '0000-00-00');

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
  MODIFY `ma_tloai` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
