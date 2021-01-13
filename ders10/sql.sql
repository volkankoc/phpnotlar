-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 13, 2021 at 08:12 AM
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
  `title` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `body` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `date`) VALUES
(1, 'WhatsApp Veri İhlali', 'WhatsApp, birkaç yıl önce Facebook tarafından satın alınmıştı. Uzun yıllardır insanlar, Zuckerberg\'in nasıl olup da uygulamayı hala reklama boğmadan, para istemeden kullandırmaya devam ettiğini de merak ediyordu. \r\n\r\nWhatsApp\'ın yeni gizlilik ilkeleri, pek çok kişinin tepkisini çekmiş durumda. Daha önceki haberlerimizde de belirttiğimiz üzere yeni gizlilik ilkeleri kapsamında Facebook şirketi (site değil, sitenin de sahibi olan şirket), neredeyse DNA dizilimimiz dışında her şeye erişim istiyor. Erişim vermeyenler de uygulamayı kullanamıyor.', 'volkan koç', '2021-01-13 07:23:45'),
(2, 'Yerli Whatsapp', 'Aslına bakarsak bugüne kadar WhatsApp\'ın kullanıcı verilerini Facebook\'a verip vermediği hep bir tartışma konusu olmuştu. Hatta bu iddialar, Zuckerberg\'in senatoda yaptığı savunmada bile ima edilmişti. Şu andaki durum ise daha çok malumun ilamı oluyor. \r\n\r\nKullanıcıların yeni sözleşmeyi kabul etmeleri halinde Facebook ile paylaşmayı taahhüt ettiği bilgilere de bir bakalım. Bu bilgilerin oldukça uzun ve okudukça sinir bozan bir listesi var. Liste şu şekilde:\r\n\r\nHesap Bilgileri\r\nMesajlar\r\nBağlantılar\r\nDurum Bilgisi\r\nİşlem ve Ödeme Verileri\r\nMüşteri Desteği ve Diğer İletişimler\r\nKullanım ve Kayıt Bilgileri', 'ali', '2021-01-13 07:34:47'),
(3, 'Yerli Video konferans', 'Facebook\'un açıklamasına göre bu verileri sayesinde firmanın bünyesindeki farklı sosyal medya kanallarından gelen veriler entegre edilecek. Böylece yan hizmetler geliştirilecek. Sistemin emniyeti, güvenliği ve bütünlüğü artırılacak. Facebook şirketleri arasındaki iletişim ve kurumsal etkileşimler artacak.\r\n\r\nHali hazırda pek çok kişinin \"Arkadaşımla konuşurken elma dedim, eve bir geldim aaa elma reklamı\" demesine neden olan sistemler artık resmiyet kazanmış olacak. Adım adım Kalite Ülkesi adlı kitaba doğru ilerlediğimiz şu günlerde artık algoritmalar sayesinde kullanıcıların düşünmesi muhtemel ürünlerin bile reklamlarını gördüğümüzü göz önüne alırsak, Zukerberg\'in tek yaptığı işleri resmiyete dökerken kullanıcılara fikir sormaktan ibaret. ', 'volkan', '2021-01-13 07:34:47'),
(4, 'Yeni İleti', 'Kullanım ve Kayıt Bilgileri\r\nCihaz ve Bağlantı Bilgileri\r\nKonum Bilgileri\r\nÇerezler\r\nBaşkalarının Sizin Hakkınızda Sağladığı Bilgiler (Üçüncü taraftan sağlanır.)\r\nKullanıcı Şikayetleri (Üçüncü taraftan sağlanır.)\r\nWhatsApp’taki İşletmeler (Üçüncü taraftan sağlanır.)\r\nÜçüncü Taraf Hizmet Sağlayıcıları (Üçüncü taraftan sağlanır.)\r\nÜçüncü Taraf Hizmetleri (Üçüncü taraftan sağlanır.)', 'volkan', '2021-01-13 07:57:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
