-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 14, 2021 at 09:16 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `body` text COLLATE utf8_turkish_ci NOT NULL,
  `author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `date`, `image`) VALUES
(1, 'WhatsApp Veri İhlali', 'WhatsApp, birkaç yıl önce Facebook tarafından satın alınmıştı. Uzun yıllardır insanlar, Zuckerberg\'in nasıl olup da uygulamayı hala reklama boğmadan, para istemeden kullandırmaya devam ettiğini de merak ediyordu. \r\n\r\nWhatsApp\'ın yeni gizlilik ilkeleri, pek çok kişinin tepkisini çekmiş durumda. Daha önceki haberlerimizde de belirttiğimiz üzere yeni gizlilik ilkeleri kapsamında Facebook şirketi (site değil, sitenin de sahibi olan şirket), neredeyse DNA dizilimimiz dışında her şeye erişim istiyor. Erişim vermeyenler de uygulamayı kullanamıyor.', 'volkan koç', '2021-01-13 07:23:45', 'https://www.webtekno.com/images/editor/default/0002/97/86be8a17a990a2bffe5379301941e5dcbc00c79e.jpeg'),
(2, 'Yerli Whatsapp', 'Aslına bakarsak bugüne kadar WhatsApp\'ın kullanıcı verilerini Facebook\'a verip vermediği hep bir tartışma konusu olmuştu. Hatta bu iddialar, Zuckerberg\'in senatoda yaptığı savunmada bile ima edilmişti. Şu andaki durum ise daha çok malumun ilamı oluyor. \r\n\r\nKullanıcıların yeni sözleşmeyi kabul etmeleri halinde Facebook ile paylaşmayı taahhüt ettiği bilgilere de bir bakalım. Bu bilgilerin oldukça uzun ve okudukça sinir bozan bir listesi var. Liste şu şekilde:\r\n\r\nHesap Bilgileri\r\nMesajlar\r\nBağlantılar\r\nDurum Bilgisi\r\nİşlem ve Ödeme Verileri\r\nMüşteri Desteği ve Diğer İletişimler\r\nKullanım ve Kayıt Bilgileri', 'ali', '2021-01-13 07:34:47', 'https://www.webtekno.com/images/editor/default/0002/97/4a774dda467a28c85265c929e8d369cf6793c663.jpeg'),
(3, 'Yerli Video konferans', 'Facebook\'un açıklamasına göre bu verileri sayesinde firmanın bünyesindeki farklı sosyal medya kanallarından gelen veriler entegre edilecek. Böylece yan hizmetler geliştirilecek. Sistemin emniyeti, güvenliği ve bütünlüğü artırılacak. Facebook şirketleri arasındaki iletişim ve kurumsal etkileşimler artacak.\r\n\r\nHali hazırda pek çok kişinin \"Arkadaşımla konuşurken elma dedim, eve bir geldim aaa elma reklamı\" demesine neden olan sistemler artık resmiyet kazanmış olacak. Adım adım Kalite Ülkesi adlı kitaba doğru ilerlediğimiz şu günlerde artık algoritmalar sayesinde kullanıcıların düşünmesi muhtemel ürünlerin bile reklamlarını gördüğümüzü göz önüne alırsak, Zukerberg\'in tek yaptığı işleri resmiyete dökerken kullanıcılara fikir sormaktan ibaret. ', 'volkan', '2021-01-13 07:34:47', 'https://www.webtekno.com/images/editor/default/0002/97/7a932f2f636398010b44ceefa56c06b5c0b7f351.jpeg'),
(4, 'Yeni İleti', 'Kullanım ve Kayıt Bilgileri\r\nCihaz ve Bağlantı Bilgileri\r\nKonum Bilgileri\r\nÇerezler\r\nBaşkalarının Sizin Hakkınızda Sağladığı Bilgiler (Üçüncü taraftan sağlanır.)\r\nKullanıcı Şikayetleri (Üçüncü taraftan sağlanır.)\r\nWhatsApp’taki İşletmeler (Üçüncü taraftan sağlanır.)\r\nÜçüncü Taraf Hizmet Sağlayıcıları (Üçüncü taraftan sağlanır.)\r\nÜçüncü Taraf Hizmetleri (Üçüncü taraftan sağlanır.)', 'volkan', '2021-01-13 07:57:33', 'https://pbs.twimg.com/media/EroJj68W4AwoiMF?format=jpg&name=small'),
(5, 'Intel CEO\'su Bob Swan Görevini ', 'Endonezya\'da bulunan arkeologlar, Sulawesi adasında bulunan bir mağarada tarih öncesi çizilmiş hayvan figürleri buldu. Araştırmalar sonucunda 45 bin yıl önce çizildiği tahmin edilen bu çizimler, bölgedeki ilk insanların varlığını simgeliyor.\r\nEndonezya’da bulunan arkeologlar, Sulawesi adlı bir adada yer alan mağarada, eski dönemlere ait olduğuna inanılan hayvan resimleri buldu. Çizimlerin üzerindeki kristalleşmiş kalsiyum karbonatı uranyum izotopları sayesinde inceleyebilen araştırmacılar, resimlerin 45 bin yıl önce çizilmiş olabileceğini keşfetti. \r\n\r\n\r\n\r\n', 'Ali', '2021-01-14 06:37:08', 'https://www.webtekno.com/images/editor/default/0002/97/72a0c94d5c49dd3a33335a2cd6b8ba8503bee491.jpeg'),
(6, 'Cehennem Melekleri Serisinin Dördüncü Filmi Hakkında Bilinen Tüm Detaylar', 'Hollywood aksiyon dünyasının efsane isimlerini bir araya getiren ve her filmiyle izleyicinin gönlündeki yerini daha da güçlendiren Cehennem Melekleri serisinin yeni, dördüncü filmini ne zaman izleyeceğiz? Cehennem Melekleri 4 ne zaman çıkacak? İşte konu ile ilgili bilinen tüm detaylar.\r\nAmerikan aksiyon sinema dünyasının efsane ismi oyuncu, yönetmen senarist ve yapımcı Sylvester Stallone tarafından kaleme alınan ve 2010 yılında vizyona giren serisinin ilk filmi The Expendables Türkçesi ile Cehennem Melekleri filmi, 80’li ve 90’lı yılların efsane aksiyon oyuncularını bir araya getirmesi ile dikkat çekmiş ve büyük ilgi görmüştü. Daha sonra iki film  daha vizyona girmiş ve Cehennem Melekleri serisi unutulmazlar arasına girmişti.\r\n\r\nHer şey güzel ama son film olan Cehennem Melekleri 3 2014 yılında vizyona girmişti, yani üzerinden epey uzun bir süre geçti. Çıkacağı dedikoduları her yıl daha da artan Cehennem Melekleri 4 ne zaman çıkacak? Konu ile ilgili filmin oyuncularının yaptıkları pek çok açıklama var. Yapılan tüm açıklamalara yakından bakalım ve yeni filmin çıkış tarihi ile ilgili ipuçlarını inceleyelim.', '', '2021-01-14 06:37:59', 'https://www.webtekno.com/images/editor/default/0002/97/8dd0adb9eb2d6f06a062dd331346c4ea9fdebce6.jpeg'),
(12, 'Mongose Dersleri', 'asdasdasas\r\nd\r\nas\r\nd\r\nasd\r\nasd', 'volkan koç', '2021-01-14 09:11:00', 'https://www.webtekno.com/images/editor/default/0002/97/a8e0ffee36d029a08959700fd2576fb2a2b2e41f.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `session_id` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `giris_saati` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cikis_saati` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `session_id`, `user`, `giris_saati`, `cikis_saati`) VALUES
(25, 'e5avhpttlkslcu766itsv2nftj', 'volkan', '2021-01-13 06:27:34', '2021-01-13 09:29:08'),
(26, 'bugb1alps89i8ai1efkfhlpjk4', 'ahmet', '2021-01-13 06:33:17', '2021-01-13 09:33:25'),
(27, 's21b8k752efg8qsfmtrnnnj5pn', 'volkan', '2021-01-13 06:42:55', '2021-01-13 09:43:08'),
(28, 'j7lnoijn3si5m718v52l0v56vg', 'volkan', '2021-01-13 06:43:56', '2021-01-13 09:44:00'),
(29, 's16qh5cci2svprg9t58smkq4su', 'ahmet', '2021-01-13 06:47:04', '2021-01-13 09:47:16'),
(30, 'm2kjc17prvsuvni782thh8g477', 'volkan', '2021-01-13 07:14:09', '2021-01-13 10:14:26'),
(31, 'unsmrbqdc1r46jnjvjkoosv8sj', 'volkan', '2021-01-13 07:14:43', ''),
(32, 'p58mfj29cov3f5pob6sa9qls8l', 'ahmet', '2021-01-13 07:15:49', ''),
(33, 'q244t2efddmclekqnuoq2g5hmq', 'volkan', '2021-01-14 06:29:11', '2021-01-14 09:31:05'),
(34, '532752d60vgiq3vrhdpfkt207o', 'volkan', '2021-01-14 08:09:45', '2021-01-14 11:10:18'),
(35, 'o5kh1m5ipt14924ltm9ma978g0', 'volkan', '2021-01-14 08:14:57', '2021-01-14 11:16:15'),
(36, 'ufl9k3ataa0i3ulolkhf80nut1', 'volkan', '2021-01-14 08:23:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `role`, `adsoyad`) VALUES
(1, 'volkan', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'volkan koç'),
(2, 'ahmet', '6074c6aa3488f3c2dddff2a7ca821aab', 'user', 'ahmet güntepe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;