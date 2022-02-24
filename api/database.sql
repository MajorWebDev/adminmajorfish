-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: be1x3hctw7lyrksp3fb3-mysql.services.clever-cloud.com:3306
-- Generation Time: Feb 21, 2022 at 04:53 AM
-- Server version: 8.0.22-13
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be1x3hctw7lyrksp3fb3`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `judul` varchar(100) NOT NULL,
  `pembuat` varchar(30) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `gambar`, `judul`, `pembuat`, `isi`, `tanggal`) VALUES
(12, 'post-1290379557_1.jpg', '8 Jenis Ikan Cupang Hias yang Mudah Dipelihara', 'admin', '<p><strong>Merdeka.com -&nbsp;</strong>Jenis ikan cupang&nbsp;ada beragam, baik dari segi pemeliharaan, kecantikan warna, bahkan hingga segi harga yang fantastis. Namun tak perlu khawatir, ada sejumlah jenis ikan cupang hias yang mudah dipelihara dan dengan harga terjangkau.</p>\r\n\r\n<p>Memiliki ikan cupang hias akan menjadi kegiatan penghilang stres. Hal ini berdasarkan sejumlah penelitian yang menyebutkan mendengar gemercik air dan melihat warna-warni ikan akan membuat pikiran lebih ringan.</p>\r\n', '2022-02-21 09:59:38'),
(13, 'post-558272473_2.jpg', '7 Jenis Ikan Cupang Terpopuler untuk Dipelihara', 'admin', '<p>Ikan cupang adalah ikan akuarium populer yang terkenal dengan warna mencolok, sisik warna-warni, dan sirip panjang yang berkibar di sekitar mereka seperti gaun. Ikan cupang terkenal sebagai ikan teritorial dan berkelahi jika keduanya ditempatkan bersama atau ketika mereka melihat bayangan mereka. Ikan cupang memiliki nama ilmiah betta splendens, sehingga dikenal juga sebagai ikan betta. Menurut People for the Ethical Treatment of Animals (PETA), ikan cupang berasal dari Asia Tenggara, di mana mereka hidup di perairan dangkal rawa-rawa, kolam, atau sungai yang bergerak lambat.</p>\r\n', '2022-02-21 10:01:10'),
(14, 'post-195538495_4.jpeg', '9 Cara Membedakan Jenis Ikan Cupang Jantan dan Betina, Jangan Salah Lagi!', 'admin', '<p>Jakarta - Ikan cupang atau betta fisih merupakan jenis ikan yang agresif dan sangat ketat menjaga daerah teritorinya. Jenis ikan cupang jantan biasanya lebih agresif dari betina.<br />\r\nApakah detikers mengetahui bagaimana cara membedakan jenis ikan cupang jantan dan betina? Jika belum, simak penjelasan berikut yang dikutip dari CNN:<br />\r\n<br />\r\n1. Warna<br />\r\n<br />\r\nIkan cupang jantan biasanya memiliki warna-warna yang lebih cerah daripada ikan betina. Biasanya ikan cupang betina berwarna kusam dan cenderung gelap.<br />\r\n<br />\r\n2. Garis-garis Vertikal pada Tubuh<br />\r\n<br />\r\nIkan cupang betina memiliki corak-corak pada tubuhnya ketika sudah siap pada masa kawin. Sedangkan jantan tidak. Ikan cupang siap kawin pada usia 3-4 bulan.<br />\r\n<br />\r\n3. Bentuk Tubuh<br />\r\n<br />\r\nIkan cupang betina bertubuh pendek, sedangkan yang jantan panjang. Sisi-sisi tubuh jantan lebih memanjang dari ujung mulut hingga ekor.<br />\r\n<br />\r\n4. Sirip<br />\r\n<br />\r\nJenis ikan cupang jantan memiliki sirip yang lebih panjang hingga tiga sampai empat kali betina. Betina memiliki sirip ekor pendek dan jantan memiliki sirip panjang. Pada sisi perut jantan juga lebih panjang daripada betina.<br />\r\n<br />\r\n5. Bintik Telur<br />\r\n<br />\r\nHanya ikan cupang betina yang memiliki bintik telur yang terletak di antara sirip perut dan dubur mereka.<br />\r\n<br />\r\nIni sebenarnya ovipositor-tempat keluar telur setelah cupang jantan membuahi. Biasanya bintik telur ini akan bisa dideteksi saat cupang berusia 3 bulan ke atas.<br />\r\n&nbsp;</p>\r\n', '2022-02-21 10:02:43'),
(15, 'post-1227894985_3.jpeg', 'Yuk, Merapat! Ada Festival Ikan Cupang Keren Nih di Serpong  Baca artikel detikTravel', 'admin', '<p>Tangerang Selatan - Pamor ikan cupang kian meroket di masa pandemi. Kehadiran pameran ikan cupang di kawasan Serpong ini pun jadi surga bagi pencinta ikan cupang di Jabodetabek</p>\r\n', '2022-02-21 10:06:29'),
(16, 'post-1370776501_5.jpeg', 'Ini Cara Membedakan Jenis-jenis Ikan Cupang & Jenis Kelaminnya dari Dosen IPB  Baca artikel detikedu', 'admin', '<p>Jakarta - Ikan cupang tidak hanya dicari untuk dijadikan peliharaan di rumah. Ikan cupang juga merupakan salah satu ladang bisnis yang kini banyak dilirik oleh siapapun.<br />\r\nIkan cupang termasuk dalam golongan fighting fish dan spesies Betta Splendens. Ikan cupang dilirik sebagai salah satu ladang bisnis karena daya jual yang tinggi dan kemampuan adaptasinya yang sangat baik.<br />\r\n<br />\r\nDosen Teknologi Produksi &amp; Manajemen Perikanan Budidaya Institut Pertanian Bogor (IPB), Giri Maruto Darmawangsa, ikan cupang dikenal sebagai fighting fish karena suka berkelahi.<br />\r\n<br />\r\n&quot;Ikan ini akan mengembangkan siripnya dan membuka tutup insangnya sebagai bentuk pertahanan tubuh. Dan itu yang menjadi daya tarik sebetulnya,&quot; tutur Giri dikutip dari YouTube IPB, Minggu (16/5/2021).<br />\r\n<br />\r\nIkan cupang dapat hidup di tempat yang minim oksigen dan membutuhkan perawatan yang mudah. Serta dari segi sifat, ikan cupang adalah jenis ikan yang agresif dalam mempertahankan wilayahnya.<br />\r\n<br />\r\nMembicarakan soal ikan cupang, ikan jenis ini rupanya punya jenis-jenis yang berbeda dari segi warna dan karakter fisik.<br />\r\n<br />\r\nSecara umum, jenis ikan cupang ada tiga. Pertama, ikan cupang alam yang punya sirip lebih pendek dan kaku.<br />\r\n<br />\r\nKedua, ada ikan cupang hias yang siripnya lebih panjang. Ketiga, ada ikan cupang aduan yang karakter siripnya sama seperti ikan cupang alam.<br />\r\n&nbsp;</p>\r\n', '2022-02-21 10:07:46'),
(17, 'post-278706448_6.jpeg', 'Peternakan Ikan Ini Khusus Ternak Ikan Cupang Aduan yang Ganas', 'admin', '<p>Jakarta - Sejak 20 tahun terakhir, peternakan ikan di Vietnam ini hanya beternak ikan cupang aduan atau petarung yang ganas. Dikenal juga dengan nama betta fish.<br />\r\nJadi bisnis yang menguntungkan, ikan cupang kini menjadi ikan hias populer yang digemari banyak orang. Selain warnanya yang cantik, ikan cupang ini harganya bisa mencapai puluhan juta rupiah per ekornya.<br />\r\nTapi berbeda dengan ribuan ikan cupang yang ada di peternakan ikan ini. Sejak 20 tahun yang lalu, peternak ikan cupang bernama Tran Ngoc Thang hanya membesarkan satu jenis ikan cupang saja.<br />\r\nDilansir dari France24 (16/04), peternakan ikan yang ada di kota Hanoi ini terkenal ikan cupang petarungnya. Jenis ikan cupang yang biasanya diadu ini, dikenal dengan nama Siamese Fighting Fish atau betta fish.<br />\r\n<br />\r\nCupang petarung sekilas tampak sama dengan cupang biasa. Hanya saja mereka harus dibesarkan sendiri, tidak bisa digabung.<br />\r\n<br />\r\nKarena jenis ikan cupang yang satu ini lebih agresif dan ganas. Dulu ikan cupang petarung ini laris manis di arena perjudian. Orang-orang bertaruh ikan cupang mana yang akan memenangkan pertandingan adu cupang tersebut.<br />\r\n&nbsp;</p>\r\n', '2022-02-21 10:09:23'),
(18, 'post-173091710_7.jpeg', 'Ivan Gunawan Ancam Pecat Karyawan Kalau Ikan Cupangnya Mati  Baca artikel detikhott', 'admin', '<p>Jakarta - Ivan Gunawan punya hobi baru, yaitu memelihara ikan cupang. Ia begitu suka dengan bentuk dan warna dari ikan tersebut.<br />\r\nAwalnya, presenter yang juga desainer ini tidak pernah menaruh perhatian lebih terhadap ikan cupang. Hanya saja, beberapa waktu terakhir, beberapa temannya memberikan ikan cupang tersebut.<br />\r\n<br />\r\n&quot;Aku kalau ikan cupang itu biasa pemberian dari orang-orang. Jadi yang pertama dikasih sama Denny Sumargo, terus dikasih sama Presiden ikan cupang. Karena dikasih, nggak beli, jadi aku rawat dengan baik aja,&quot; ujar Igun saat ditemui di Trans TV, Rabu (7/4/2021).<br />\r\n&nbsp;</p>\r\n', '2022-02-21 10:10:35'),
(19, 'post-1865101069_8.png', 'Lelang Cupang Idolah', 'admin', '<p>Sebuah akuarium mini lengkap dengan ikan cupang diletakkan di atas meja. Di depannya terdapat sebuah handphone yang siap merekam, lengkap dengan tripod dan lampu tambahan. Tak peduli dengan sorotan kamera, ikan yang juga dikenal dengan nama Betta Fish in menebar pesona dengan mengembangkan tubuh dan ekornya, bak seorang model yang tengah berlenggok di atas catwalk.</p>\r\n\r\n<p>Malam itu JessicaVeranda dan Sendy Ariani sedang memandu jalannya acara lelang cupang menggunakan fitur Live Instagram. Ikan-ikan ini merupakan koleksi pribadi mereka berdua. Veranda dan Sendy yang sama-sama jebolan grup band JKT48 memiliki ketertarikan terhadap ikan cupang di masa pandemi. Mereka pun bergabung lalu membentuk Cupang Idol dan dibantu oleh sang manajer Nikita Rosalini.</p>\r\n\r\n<p>&ldquo;Kalau Sendy memang muncul ketertarikan saat pandemi COVID-19. Sedangkan kalau Veranda, dari dulu mamanya memang hobi sama ikan cupang,&rdquo; ujar Nikita saat dihubungi&nbsp;<strong>detikX</strong>&nbsp;beberapa waktu lalu.</p>\r\n', '2022-02-21 10:11:22'),
(20, 'post-1042716777_9.jpeg', 'Pamer Ikan Cupang di IG, Erick Thohir: Hobi Jadi Peluang Bisnis!', 'admin', '<p>Jakarta - Menteri BUMN Erick Thohir memamerkan koleksi barunya di kantor. Dia baru saja mengoleksi ikan cupang hias untuk menghiasi kantor Kementerian BUMN.<br />\r\nDia mengaku ikan-ikan cupang itu didapatkan dari salah satu office boy di kantor Kementerian BUMN, petugas bersih-bersih bernama Ahmad itu melakukan budidaya ikan cupang.<br />\r\n<br />\r\nErick pun mengaku sangat senang melihat warna warni ikan cupang di kantornya.<br />\r\n&nbsp;</p>\r\n', '2022-02-21 10:17:27'),
(21, 'post-87590723_10.jpeg', 'Viral Berkah Banjir, Pria Ini Temukan Ikan Cupang di Rumahnya  Baca artikel wolipop', 'admin', '<p>Bekasi - Curah hujan yang tinggi menyebabkan banjir di sejumlah wilayah, salah satunya di Bekasi, Jawa Barat. Warga pun ada yang panik karena rumahnya kebajiran cukup tinggi hingga membasahi perabotan. Namun di tengah kepanikkan banjir, ada pria yang malah beruntung menemukan ikan cupang di rumahnya.<br />\r\nVideo itu diunggah oleh Apriliano Dewa Izmi lewat akun TikToknya @thesquishyboy. Dalam video itu ia sedang berjalan di genangan air dalam rumahnya. Tak sengaja ia menemukan ikan cupang cantik tersebut. Sontak video tersebut langsung viral di TikTok.<br />\r\n&nbsp;</p>\r\n', '2022-02-21 10:17:54'),
(22, 'post-1253226180_11.jpeg', 'Mau Ikan Cupang Kamu Laku Keras hingga Luar Negeri, Begini Jurusnya  Baca artikel detikfinance', 'admin', '<p>Jakarta - Tidak ada yang menyangka ikan hias cupang yang diternak di Indonesia bisa dijual ke luar negeri. Untuk mencapai ke sana ada beberapa jurus yang harus dilakukan. Hal itu diungkapkan penghobi sekaligus pebisnis ikan hias cupang, Mirza Ghulam Ahmad dalam acara d&#39;Mentor detikcom, Rabu (13/1/2021).<br />\r\nMirza merupakan satu-satunya penjual cupang yang memiliki 3 cabang di negara lain, yaitu di New Jersey, Amerika Serikat, kemudian Serawak, Malaysia dan di Brunei Darussalam.<br />\r\n<br />\r\nDia menceritakan, jurus yang pertama dilakukan adalah mempelajari cara berbisnis.<br />\r\n&nbsp;</p>\r\n', '2022-02-21 10:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `ikan`
--

CREATE TABLE `ikan` (
  `id_ikan` int NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` int NOT NULL,
  `status` varchar(20) NOT NULL,
  `rating` float DEFAULT NULL,
  `kategori` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikan`
--

INSERT INTO `ikan` (`id_ikan`, `gambar`, `nama`, `deskripsi`, `harga`, `status`, `rating`, `kategori`) VALUES
(1, '2064313874_hmsr.jpg', 'Super Red', 'Usia <b>Indukan</b> <br>\r\nSize Induk <br>\r\nKualitas Jos', 50000, 'Ada', 4, 0),
(2, '1239417986_plakatwp.jpg', 'Plakat White Platinum', 'Ikan sangat berkualitas', 100000, 'Ada', 4, 3),
(3, '1625730250_ctbesgel.jpg', 'Crowntail Besgel HM', 'Ikan Murahan banget', 10005, 'Habis', 2, 4),
(13, '368774118_cupang biru.jpg', 'Cupang Biru', 'TEST', 990000, 'Ada', 2.5, 7),
(14, '1227666910_giantmulty.jpg', 'Multycolor', 'bagus <br>', 50000, 'Ada', 5, 2),
(16, '1183408162_whiteplatinum.jpg', 'White Platinum', 'Indukan <br>\r\nSiap <b> Kawin </b>', 40000, 'Ada', 4, 3),
(17, '1633419324_blue.jpg', 'Hybird Blue', 'Ikannya SULTAN', 500000, 'Ada', 5, 6),
(18, '180210641_nemo.jpg', 'Nemo', 'Ikan Kualitas Kontes\r\nSize Baby', 70000, 'Habis', 4.5, 1),
(19, '1570593411_koi.jpg', 'Koi', 'Ikan Bagus\r\nIkan Cakep', 80000, 'Ada', 4.5, 2),
(20, '1754205971_red koi galaxy.jpg', 'red koi galaxy', 'Ikan cakep\r\nMale', 100000, 'Ada', 3, 1),
(21, '1811152945_koi copper.jpg', 'Koi Copper', 'Ikan langka', 1000000, 'Habis', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
('2976e3a0-448b-11ec-96d6-7085c2f1cf35', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `ikan`
--
ALTER TABLE `ikan`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ikan`
--
ALTER TABLE `ikan`
  MODIFY `id_ikan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
