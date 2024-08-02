-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-08-02 15:32:50
-- サーバのバージョン： 10.4.24-MariaDB
-- PHP のバージョン: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `ysestaff`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staffname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `stafftype` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `staff`
--

INSERT INTO `staff` (`id`, `staffname`, `email`, `tel`, `stafftype`, `created`, `modified`) VALUES
(1, '瀬戸こうじ', 'koji_seto@yse-c.net', '090-1234-5678', 0, '2024-05-29 15:45:01', '2024-07-30 05:35:01'),
(2, '吉川ようへい', 'youhei_yoshikawa@yse-c.net', '090-1111-2222', 1, '2024-05-29 15:46:58', '2024-05-29 06:47:55'),
(3, '古屋よしあき', 'yoshiaki_furuya@yse-c.net', '080-8888-8888', 0, '0000-00-00 00:00:00', '2024-06-05 06:44:30'),
(4, 'テストてすとtest', 'test@yse-c.net', '000-000-0003', 1, '0000-00-00 00:00:00', '2024-06-05 07:51:58'),
(5, '5番目の男（本物）', '5th@yse-c.net', '050-5555-5555', 0, '0000-00-00 00:00:00', '2024-06-05 07:58:54');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
